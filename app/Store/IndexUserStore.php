<?php
namespace App\Store;
use App\Http\Controllers\PhotoController;
use App\Store\CustomPage;
use Illuminate\Support\Facades\Redis as Redis;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
/*
 * the Users function which need to use in framework
 */
class IndexUserStore
{   
	private $skey = 'STRING_USER_LOGIN_USERNAME_';          //用户名存储GUID
    private $hkey = 'HASH_INDEXUSER_LOGIN_';                //guid存储用户信息
    private $infokey = 'HASH_INDEXUSER_INFO_';              //用户信息表的哈希表
    
    

    
	/**
     * 该用户是否存在
     * @param $loginname
     * @return bool
     */
    public function whetherRegister($loginname)
    {
        $redis = Redis::get($this->skey.$loginname);  //redis判断用户名键是否存在
        if($redis) {
            return true;
        }

        $row = \DB::table('data_login_user')->where('email',$loginname)->orwhere('tel',$loginname)->orwhere('name',$loginname)->first();
        if($row){
            $guid = $this->getGuid($loginname);   //取出guid
            Redis::set($this->skey.$loginname,$guid);   //把guid为键的存入整条用户信息
            return true;
         }
            return false;

    }
    
    
 /**
     * 返回用户登录信息
     * @param $loginname
     * @return $info
     */
    // 	public function getUserLogin($loginname)
    // 	{
    //     $guid = $this->getGuid($loginname);   //取出guid
    //     // 判断guid是否存在
    //     if ($guid) {
    //         // 从hash表中取出当前guid中取出用户信息
    //         $info = Redis::hGetAll($this->hkey.$guid);
    //         // 如果数据存在则返回
    //         if ($info){
    //             return $info;
    //         }
    //     }
    //     //如果redis里面取不出整条信息,则走数据库,把整条信息存到guid里面
    //     $info = \DB::table('data_login_user')->where('email',$loginname)->orwhere('tel',$loginname)->first();
    //     if ($info){
    //         $guid = $this->getGuid($loginname);
    //         $info = $this->CustomPage->objectToArray($info);  //数据库取出来的书对象,需要转成数组存到guid
    //         Redis::hMset($this->hkey.$guid,$info);
    //         return $info;
    //     }
    //     return false;
    // }

	public function deluserRedis($guid){
        Redis::del($this->hkey.$guid);
    }

     /**
     * 返回用户信息表信息
     * @param $loginname
     * @return $info
     */
    	public function getUserInfo($guid)
    	{   
        	
        	   // 如果缓存不存在
        		$info = \DB::table('data_login_user')->where('uuid',$guid)->first(); // 从用户详情中取出信息
        		return $info;   // 返回当前信息

    	}
    
    
    
   
    
    /**
     * 用户登录  判断密码是否正确
     * @param array $input
     */
	public function userLogin($input)
    {   

        $guid = $this->getGuid($input['user_name']);  //取出guid
        $password = md5($guid.$input['password']);    //md5(guid连接密码)

        $md = substr_replace($password,$guid,0,4);     
        $password = md5($md);                           //最终得到的密码(用户端输入的密码)

		$loginname=$input['user_name'];

		$InfoPassword = \DB::table('data_login_user')->where('email',$loginname)->orwhere('tel',$loginname)->orwhere('name',$loginname)->pluck('password');
		$infopassword=$InfoPassword->toArray();

		if($infopassword[0]==$password){
			\Session::put('userguid',$guid);
			return true;
		}
        return false;
    }


    /**
     * 查询用户guid
     * @param $loginname
     * @return guid
     */
    public function getGuid($loginname)
    {
        // 首先查看缓存是否有数据
        $guid = Redis::get($this->skey.$loginname);
        // 如果有返回
        if($guid){
            return $guid;
        }
        // 数据库去取出数据
        $guid = \DB::table('data_login_user')->where('email',$loginname)->orwhere('tel',$loginname)->orwhere('name',$loginname)->pluck('uuid');
        // 判断是否有
        if($guid){
            // 先存入缓存
            Redis::set($this->skey.$loginname,$guid);
            // 再返回
            return $guid;
        }
        // 返回空数据
        return null;


    }
    /**
     * 修改用户信息
     * @param $guid
     * @param $param
     * @return bool
     */
    public function  updateUserInfo($guid,$param){
        $result = \DB::table('data_info_user')->where('guid',$guid)->update($param);
        return $result;
    }

    /**
     * 修改data_login_user用户信息
     * @param $guid
     * @param $param
     * @return bool
     */
    public function  updateLoginInfo($guid,$param){
        $result = \DB::table('data_login_user')->where('guid',$guid)->update($param);
        return $result;
    }
    
    /**
     * 更新用户缓存
     * @param $userInfo
     * @return bool
     */
    public function updateUserCache($userInfo){
        if (empty($userInfo['guid'])) return false;
        $result = Redis::hMset($this->infokey.$userInfo['guid'],$userInfo);
        return $result;
    }
	
	
	/**
     * 修改用户密码
     * @param $guid
     * @param $param
     * @return bool
     */
    public function  updateUserPass($guid,$pass){
        $result = \DB::table('data_login_user')->where('guid',$guid)->update(['password'=>$pass,'version'=>'2']);
        return $result;
    }
    
    
    
    /**
     * 修改登录时间
     * @param $guid
     * @param $param
     * @return bool
     */
    public function  editLoginTime($guid){
        $result = \DB::table('data_login_user')->where('guid',$guid)->update(['login_time'=>time()]);
        if($result) Redis::hMset($this->hkey.$guid,'login_time',time());
        return $result;
    }
    
    

    /**
     * 文件上传
     * @param $file
     * @param $prefix
     * @return mixed
     */
    public function uploadImage($file,$prefix){
        // 需要填写你的 Access Key 和 Secret Key
        $accessKey = env('QINIU_ACCESSKEY');
        $secretKey = env('QINIU_SECRETKEY');
        // 构建鉴权对象
        $auth = new Auth($accessKey, $secretKey);

        // 要上传的空间
        $bucket = env('QINIU_BUCKET');
        // 生成上传 Token
        $token = $auth->uploadToken($bucket);

        // 要上传文件的本地路径
        $filePath = $file->getRealPath();

        // 上传到七牛后保存的文件名
        $date = time().rand('1000','9999');
        $key = $prefix.'/'.$date.'.jpg';

        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();

        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        if($err !== null){
            return fasle;
        }else{
            return $ret['key'];
        }
    }
    


 


}
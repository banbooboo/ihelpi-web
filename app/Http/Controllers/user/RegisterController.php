<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Redis as Redis;
use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('regist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $data = $request->all();
        $info = Uuid::uuid4();
        $uuid = $info->getHex();//uuid

         //验证码
        $telcode = \Redis::get('code');
        if($telcode!=$data['seccode_verify'] || empty($telcode)){ // 如果验证码不对
            \Redis::del('code');   // 删除缓存中得验证码
            return view('404')->with('info','验证码错误!..')->with('url','/register');  // 返回错误提示
        }

        //用户是否已经存在
        $rData = \Redis::get('STRING_USER_LOGIN_USERNAME_'.$data['tel']);
        if($rData){
            return view('404')->with('info','用户已存在!..')->with('url','/register');
        }
        $row = \DB::table('data_login_user')->where('tel',$data['tel'])->count();
        if($row>0){
            return view('404')->with('info','用户已存在!..')->with('url','/register');
        }
        // 事物开始
         \DB::beginTransaction();    
        try{
            $time = time(); // 获取一个时间戳
            $version = '1'; // 让当前注册的用户享受2版本
            $cip = $_SERVER["REMOTE_ADDR"];#ip  // 获取ip
            $password = md5($uuid.$data['password']);#密码
            $endpass = md5(substr_replace($password,$uuid,0,4));#密码
            $info = ['uuid'=>$uuid,'name'=>$data['user_name'],'tel'=>$data['tel'],'password'=>$endpass,'logintime'=>$time,'loginip'=>$cip,'email'=>$data['email'],'version'=>$version];
            $res = \DB::table('data_login_user')->insert($info);
    
            if($res){
                \DB::commit();
            }

        }catch(\PDOException $e){
            \DB::rollback();
             return view('404')->with('info','注册失败!..')->with('url','/register');
        };
        if($res){
            $me =  \DB::table('data_login_user')->where('uuid',$uuid)->first();
            $me->logintime = time();
            \Session::put('indexlogin',$me);
            \Redis::set('STRING_USER_LOGIN_USERNAME_'.$data['tel'],$uuid);
        }
        $url = empty(\Session::get('LOGIN_REQUEST_URI'))? '/':\Session::get('LOGIN_REQUEST_URI');
        return redirect($url);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
    *验证码
    *
    */

    public function imagesCode(){
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(6);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Redis::set('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();

    }


}

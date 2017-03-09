<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
ini_set('memory_limit', '1024M');

require_once base_path()."/vendor/fukuball/jieba-php/src/vendor/multi-array/MultiArray.php";
require_once base_path()."/vendor/fukuball/jieba-php/src/vendor/multi-array/Factory/MultiArrayFactory.php";
require_once base_path()."/vendor/fukuball/jieba-php/src/class/Jieba.php";
require_once base_path()."/vendor/fukuball/jieba-php/src/class/Finalseg.php";
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
use Ramsey\Uuid\Uuid;

class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('create-artical');
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
        //
        Jieba::init();
        Finalseg::init();
        $title_list = Jieba::cut($request['title']);
        $content_list=Jieba::cut($request['content']);
        $articalId = Uuid::uuid4()->getHex();//$articalId
        $topic=$request["topic"];
        $title_str='';
        $content_str='';
        foreach ($title_list as $title){
            $title_str = $title_str . $title." " ;
        }
        foreach ($content_list as $content) {
            $content_str .=$content.' ';
        }
        $userId=\Session::get('userguid');
        if($userId){
            \DB::beginTransaction();    // 事物开始
            try{
                $info = ['articalId'=>$articalId,'title'=>$title_str,'content'=>$content_str,'topicId'=>$topic,
                    'topic'=>$topic,'userId'=>$userId];
                $res = \DB::table('artical')->insert($info);
                $info1 = ['topicId' => $topic, 'articalId' => $articalId];
                $res1 = \DB::table('rel_artical_topic')->insert($info1);
                $info2 = ['articalId' => $articalId, 'userId' => $userId];
                $res2 = \DB::table('rel_artical_user')->insert($info2);
                $res=$res && $res1 && $res2;
                if($res){
                    \DB::commit();
                }
            }catch(\PDOException $e){
                \DB::rollback();
                return view('404')->with('info','发布失败!..')->with('url','/articles');
            };
        }

        return view('404')->with('info','请先登陆!..')->with('url','/login');

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
}

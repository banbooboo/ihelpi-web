<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store\AnswerStore;
class AnswerController extends Controller
{

    public function __construct()
    {
        $this->Answers = new AnswerStore();    // 获取用户Store层的对象
    }


    /**
     * 问答社区所有问题页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $info=  $this->Answers->getAllAnswer();
        return view('circle')->with('allAnswers',$info);
        
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
     * 回复评论
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $username=$request['username'];

         $content=$request['content'];

         $articalId=$request["articalId"];

         $info=['username'=>$username,'content'=>$content,'articalId'=>$articalId];
         $res= \DB::table('review')->insert($info);
         if(!$res){
              return view('/404')->with('info',"提交失败");
         }
        
         
        $info=  $this->Answers->getAllAnswer();
        return view('circle')->with('allAnswers',$info);




    }

    /**
     * 问题详情
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       

        $articalinfo=  $this->Answers->getOneAnswer($id)->toArray();
        $allreview=$this->Answers->getAllReview($id);
        $name=\Redis::get('username');

        if($allreview){
            $allreview=$allreview->toArray();
            return view('articaldetail')->with('artical',$articalinfo)->with('allreview',$allreview)->with('name',$name);
        }
        return view('articaldetail')->with('artical',$articalinfo)->with('allreview',false)->with('name',$name);
         
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

    public function search(Request $request){

       $this->Answers->search($request['fullsearch']);


    }


}

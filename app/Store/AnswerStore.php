<?php
namespace App\Store;

/*
 * the Users function which need to use in framework
 */
class AnswerStore
{

    /**
     * 返回all answer信息
     * @param
     * @return $info
     */
    public function getAllAnswer()
    {


        $info = \DB::table('artical_origin')->orderby('addtime','desc')->paginate(6); // 从用户详情中取出信息
        return $info;   // 返回当前信息

    }
    /**
     * 返回all answer信息
     * @param
     * @return $info
     */
    public function getOneAnswer($articalId)
    {


        $info = \DB::table('artical_origin')->where('articalId',$articalId)->get(); // 从用户详情中取出信息
        return $info;   // 返回当前信息

    }
    
    /*
    *获取文章的评论
    */
    public function getAllReview($articalId){

        $info=\DB::table('review')->where('articalId',$articalId)->get();

        return $info;
    }

    /*
    *全文搜索相关文章
    */

    public function search($fullsearch){

    $sql="select * from  artical_index where match(title) against('$fullsearch' in boolean mode)";
    $info=\DB::select($sql);
     dd($info);
     // dd($sql);



    }





}
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


        $info = \DB::table('artical_origin')->get(); // 从用户详情中取出信息
        return $info;   // 返回当前信息

    }





}
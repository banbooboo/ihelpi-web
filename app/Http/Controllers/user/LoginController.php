<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store\IndexUserStore;

class LoginController extends Controller
{


    public function __construct()
    {
        $this->IndexUser = new IndexUserStore();    // 获取用户Store层的对象
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('login');
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
        
        // 获取所有表单提交
        $data = $request->all();
        //判断用户是否存在
        $inLogin = $this->IndexUser->whetherRegister($data['user_name']);  
        if(!$inLogin){
            return view('/404')->with('info','用户不存在....')->with('url','/login');
        }

        $login =  $this->IndexUser->userLogin($data);  // 用户登录 
       if(!$login){
            return view('/404')->with('info','密码错误..')->with('url','/login');
        }
//        $uid=$this->IndexUser->getGuid($data['user_name']);
//        $info=$this->IndexUser->getUserInfo($uid);
//
//        \ Session::put('indexlogin',$info);
        return redirect('/');
        
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

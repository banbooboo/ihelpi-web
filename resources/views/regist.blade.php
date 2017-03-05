@extends('layouts.app')

@section('title', 'ihelpi-博客集群')

@section('linkcss')

<link href="./css/common20140930.css" rel="stylesheet" type="text/css" />

<link href="./css/register20140930.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="./js/jquery.min.js"></script>

@endsection

@section('content')
<div class="aw-top-menu-wrap"> 
   <div class="container"> 
    <!-- logo --> 
    <div class="aw-logo hidden-xs"> 
     <a href="http://wenda.golaravel.com"></a> 
    </div> 
    <!-- end logo --> 
    <!-- 搜索框 --> 
    <div class="aw-search-box  hidden-xs hidden-sm"> 
     <form class="navbar-search" action="http://wenda.golaravel.com/search/" id="global_search_form" method="post"> 
      <input class="form-control search-query" type="text" placeholder="搜索问题、话题或人" autocomplete="off" name="q" id="aw-search-query" /> 
      <span title="搜索" id="global_search_btns" onclick="$('#global_search_form').submit();"><i class="icon icon-search"></i></span> 
      <div class="aw-dropdown"> 
       <div class="mod-body"> 
        <p class="title">输入关键字进行搜索</p> 
        <ul class="aw-dropdown-list hide"></ul> 
        <p class="search"><span>搜索:</span><a onclick="$('#global_search_form').submit();"></a></p> 
       </div> 
       <div class="mod-footer"> 
        <a href="" onclick="$('#header_publish').click();" class="pull-right btn btn-mini btn-success publish">发起问题</a> 
       </div> 
      </div> 
     </form> 
    </div> 
    <!-- end 搜索框 --> 
    <!-- 导航 --> 
    <div class="aw-top-nav navbar"> 
     <div class="navbar-header"> 
      <button class="navbar-toggle pull-left"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
     </div> 
     <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse"> 
      <ul class="nav navbar-nav"> 
       <li><a href="" class=""><i class="icon icon-ul"></i> 发现</a></li> 
       <li><a href="http://wenda.golaravel.com/topic/"><i class="icon icon-topic"></i> 话题</a></li> 
      </ul> 
     </nav> 
    </div> 
    <!-- end 导航 --> 
    <!-- 用户栏 --> 
    <div class="aw-user-nav"> 
     <!-- 登陆&注册栏 --> 
     <span> <a class="register btn btn-normal btn-success" href="http://wenda.golaravel.com/account/register/">注册</a> <a class="login btn btn-normal btn-primary" href="/login">登录</a> </span> 
     <!-- end 登陆&注册栏 --> 
    </div> 
    <!-- end 用户栏 --> 
    <!-- 发起 --> 
    <!-- end 发起 --> 
   </div> 
  </div> 
  <div class="aw-register-box"> 
   <div class="mod-head"> 

    <h1>注册新用户</h1> 
   </div> 
   <div class="mod-body"> 
    <form class="aw-register-form"  method="post" id="register_form" action="/register"> 
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <ul> 
      <li class="alert alert-danger hide error_message text-left"> <i class="icon icon-delete"></i> <em></em> </li> 
      <li> <input class="aw-register-name form-control" type="text" name="user_name" placeholder="用户名" tips="请输入一个 2-14 位的用户名" errortips="用户名长度不符合" value="" /> </li> 
      <li> <input class="aw-register-name form-control" type="text" name="tel" placeholder="手机号" tips="请输入一个 11位手机号" errortips="手机号格式不符合" value="" /> </li> 
      <li> <input class="aw-register-email form-control" type="text" placeholder="邮箱" name="email" tips="请输入你常用的电子邮箱作为你的账号" value="" errortips="邮箱格式不正确" /> </li> 
      <li> <input class="aw-register-pwd form-control" type="password" name="password" placeholder="密码" tips="请输入 6-16 个字符,区分大小写" errortips="密码不符合规则" /> </li> 
      <li class="aw-register-verify"> <img class="pull-right" id="captcha" onclick="this.src = '/imagescode/' + Math.floor(Math.random() * 10000);" src="{{ URL('/imagescode/1') }}" id="127ddf0de5a04167a9e427d883690ff6" /> <input type="text" class="form-control" name="seccode_verify" placeholder="验证码" /> </li> 
      <li class="last"> <label><input type="checkbox" checked="checked" value="agree" name="agreement_chk" /> 我同意</label> <a href="javascript:;" class="aw-agreement-btn">用户协议</a> <a href="http://www.liutao.lt/login" class="pull-right">已有账号?</a> 
       <div class="aw-regiter-agreement hide"> 
        <div class="aw-register-agreement-txt" id="register_agreement"></div> 
       </div> </li> 
      <li class="clearfix"> <button class="btn btn-large btn-blue btn-block" type="submit">注册</button> </li> 
     </ul> 
    </form> 
   </div> 
   <div class="mod-footer"></div> 
  </div> 


@endsection



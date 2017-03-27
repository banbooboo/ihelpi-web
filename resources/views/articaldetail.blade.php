@extends('layouts.app')

@section('title', 'ihelpi-博客集群')

@section('linkcss')

<link rel="stylesheet" type="text/css" href="{{asset('/css/icon.css')}}" />

<link href="{{asset('/css/common20140930.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/link20140930.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/css/style20140930.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="aw-top-menu-wrap"> 
   <div class="container"> 
    <!-- logo --> 
    <div class="aw-logo hidden-xs"> 
     <a href="http://www.liutao.lt"></a> 
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
       <li><a href="" class="active">发现</a></li>
       <li><a href="http://wenda.golaravel.com/topic/">话题</a></li> 
      </ul> 
     </nav> 
    </div> 
    <!-- end 导航 --> 
    <!-- 用户栏 --> 
    <div class="aw-user-nav"> 
     <!-- 登陆&注册栏 -->

     <span> <a class="register btn btn-normal btn-success" href="/register">注册</a> <a class="login btn btn-normal btn-primary" href="/login">登录</a> </span> 
     <!-- end 登陆&注册栏 --> 
    </div> 
    <!-- end 用户栏 --> 
    <!-- 发起 --> 
    <!-- end 发起 --> 
   </div> 
  </div> 

  <div class="container" style="background-color: #fff;margin: 20px auto;width: 80%;padding: 20px;">
    <div class="row" >
      <div class="col-md-9 col-sm-12 col-lg-12" id="artical">
        <h2 class="text-center">{{ $artical[0]->title}}</h2>
        <h2 class="text-center">作者：{{ $artical[0]->username  }}  &nbsp;&nbsp; 时间： {{      date("d",time() -  $artical[0]->addtime)    }}天前 </h2>
        <hr />
        <input id="c"  value="{{ $artical[0]->content }}" type="hidden"></input>
        
      </div>
    </div>
  </div>
  <div class="container" style="background-color: #fff;margin: 20px auto;width: 80%;padding: 20px;">
    <div class="row" >
      <h2>评论区</h2>
      <hr>

      <div class="col-md-9">
      @if( $allreview )

        @foreach( $allreview as $review)

        <p style="width: 100%;overflow: hidden">用户：{{$review->username }} &nbsp;&nbsp;回复：{{$review->content}}</p>

         <hr>

        @endforeach

      @endif
      
      </div>
    </div>
  </div>

    
  <div class="container" style="background-color: #fff;margin: 20px auto;width: 80%;padding: 20px;">
    <div class="row" >
      <form class="col-md-12" action="/answer" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input value="1" class="hidden" name="username"></input>
        <input value="{{$artical[0]->articalId}}" class="hidden" name="articalId"></input>
        <textarea placeholder="输入内容" class="col-md-12" name="content"></textarea>
        <br>
        <button type="submit" class="btn-primary">提交</button>
      </form>

    </div>

  </div>


<script type="text/javascript">
  window.onload=function(){
    
    $("#artical").append($("#c").val());


  }



</script>

	
@endsection
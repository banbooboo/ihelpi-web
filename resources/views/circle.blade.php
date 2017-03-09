@extends('layouts.app')

@section('title', 'ihelpi-博客集群')

@section('linkcss')

{{--<link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />--}}
<link rel="stylesheet" type="text/css" href="./css/icon.css" />

<link href="./css/common20140930.css" rel="stylesheet" type="text/css" />
<link href="./css/link20140930.css" rel="stylesheet" type="text/css" />
<link href="./css/style20140930.css" rel="stylesheet" type="text/css" />
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
  <div class="aw-container-wrap"> 
   <div class="container"> 
    <div class="row"> 
     <div class="aw-content-wrap clearfix"> 
      <div class="col-sm-12 col-md-9 aw-main-content"> 
       <!-- 新消息通知 --> 
       <div class="aw-mod aw-notification-box hide" id="index_notification"> 
        <div class="mod-head common-head"> 
         <h2> <span class="pull-right"><a href="http://wenda.golaravel.com/setting/privacy/#notifications" class="text-color-999"><i class="icon icon-setting"></i> 通知设置</a></span> <i class="icon icon-bell"></i>新通知<em class="badge badge-important" name="notification_unread_num"></em> </h2> 
        </div> 
        <div class="mod-body"> 
         <ul id="notification_list"></ul> 
        </div> 
        <div class="mod-footer clearfix"> 
         <a href="javascript:;" onclick="AWS.Message.read_notification(false, 0, false);" class="pull-left btn btn-mini btn-gray">我知道了</a> 
         <a href="http://wenda.golaravel.com/notifications/" class="pull-right btn btn-mini btn-success">查看所有</a> 
        </div> 
       </div> 
       <!-- end 新消息通知 --> 
       <!-- tab切换 --> 
       <ul class="nav nav-tabs aw-nav-tabs active hidden-xs">
        <li class="active"><a href="">最新</a></li>
       </ul> 
       <!-- end tab切换 --> 
       <div class="aw-mod aw-explore-list"> 
        <div class="mod-body"> 
         <div class="aw-common-list">
          @foreach($allAnswers as $answer)
           <div class="aw-item active" data-topic-id="1173">
            <a class="aw-user-name hidden-xs" data-id="4707" href="http://wenda.golaravel.com/people/yaobaliu" rel="nofollow"><img src="http://wenda.golaravel.com/static/common/avatar-max-img.png" alt="" /></a>
            <div class="aw-question-content">
             <h4> <a href="/question/2469">{{ $answer->title }}</a> </h4>
             <a href="/question/2469#!answer_form" class="pull-right text-color-999">回复</a>
             <p> <a href="/people/{{ $answer->userId }}" class="aw-user-name">{{ $answer->username  }}</a> <span class="text-color-999">发起了问题  {{      date("d",time() -  $answer->addtime)    }}天前 </span> <span class="text-color-999 related-topic hide"> </span> </p>
            </div>
           </div>
           @endforeach
         </div> 
        </div> 
        <div class="mod-footer"> 
         <div class="page-control">
          <ul class="pagination pull-right">
           <li class="active"><a href="javascript:;">1</a></li>
           <li><a href="http://wenda.golaravel.com/sort_type-new__day-0__is_recommend-0__page-2">2</a></li>
           <li><a href="http://wenda.golaravel.com/sort_type-new__day-0__is_recommend-0__page-3">3</a></li>
           <li><a href="http://wenda.golaravel.com/sort_type-new__day-0__is_recommend-0__page-4">4</a></li>
           <li><a href="http://wenda.golaravel.com/sort_type-new__day-0__is_recommend-0__page-2">&gt;</a></li>
           <li><a href="http://wenda.golaravel.com/sort_type-new__day-0__is_recommend-0__page-54">&gt;&gt;</a></li>
          </ul>
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- 侧边栏 --> 
      <div class="col-sm-12 col-md-3 aw-side-bar hidden-xs hidden-sm"> 
       <div class="aw-mod"> 
        <div class="mod-head"> 
         <h3>专题</h3> 
        </div> 
        <div class="mod-body"> 
         <ul> 
          <li><a href="http://wenda.golaravel.com/feature/1">Composer中国镜像</a></li> 
         </ul> 
        </div> 
       </div> 
       <div class="aw-mod aw-text-align-justify"> 
        <div class="mod-head"> 
         <a href="/topic/channel-hot" class="pull-right">更多 &gt;</a> 
         <h3>热门话题</h3> 
        </div> 
        <div class="mod-body"> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/topic/字段"><img alt="" src="http://wenda.golaravel.com/static/common/topic-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <p class="clearfix"> <span class="topic-tag"> <a href="http://wenda.golaravel.com/topic/字段" class="text" data-id="1173">字段</a> </span> </p> 
           <p><b>1</b> 个问题, <b>1</b> 人关注</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/topic/ORM查询"><img alt="" src="http://wenda.golaravel.com/static/common/topic-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <p class="clearfix"> <span class="topic-tag"> <a href="http://wenda.golaravel.com/topic/ORM查询" class="text" data-id="1172">ORM查询</a> </span> </p> 
           <p><b>1</b> 个问题, <b>1</b> 人关注</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/topic/ITKEE.CN"><img alt="" src="http://wenda.golaravel.com/static/common/topic-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <p class="clearfix"> <span class="topic-tag"> <a href="http://wenda.golaravel.com/topic/ITKEE.CN" class="text" data-id="1171">ITKEE.CN</a> </span> </p> 
           <p><b>1</b> 个问题, <b>1</b> 人关注</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/topic/laravel session"><img alt="" src="http://wenda.golaravel.com/static/common/topic-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <p class="clearfix"> <span class="topic-tag"> <a href="http://wenda.golaravel.com/topic/laravel session" class="text" data-id="1170">laravel session</a> </span> </p> 
           <p><b>1</b> 个问题, <b>1</b> 人关注</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/topic/其他"><img alt="" src="http://wenda.golaravel.com/static/common/topic-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <p class="clearfix"> <span class="topic-tag"> <a href="http://wenda.golaravel.com/topic/其他" class="text" data-id="1165">其他</a> </span> </p> 
           <p><b>2</b> 个问题, <b>1</b> 人关注</p> 
          </dd> 
         </dl> 
        </div> 
       </div> 
       <div class="aw-mod aw-text-align-justify"> 
        <div class="mod-head"> 
         <a href="/people/" class="pull-right">更多 &gt;</a> 
         <h3>热门用户</h3> 
        </div> 
        <div class="mod-body"> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/people/%E5%A6%82%E6%9E%9C"><img alt="" src="http://wenda.golaravel.com/uploads/avatar/000/00/57/98_avatar_mid.jpg" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <a href="http://wenda.golaravel.com/people/%E5%A6%82%E6%9E%9C" data-id="5798" class="aw-user-name">如果 </a> 
           <p class="signature"></p> 
           <p><b>0</b> 个问题, <b>0</b> 次赞同</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/people/%E6%88%91%E9%82%80%E8%AF%B7%E4%BD%A0%E5%8E%BB%E6%97%85%E8%A1%8C"><img alt="" src="http://wenda.golaravel.com/static/common/avatar-mid-img.png" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <a href="http://wenda.golaravel.com/people/%E6%88%91%E9%82%80%E8%AF%B7%E4%BD%A0%E5%8E%BB%E6%97%85%E8%A1%8C" data-id="5923" class="aw-user-name">我邀请你去旅行 </a> 
           <p class="signature"></p> 
           <p><b>0</b> 个问题, <b>0</b> 次赞同</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/people/KingPlusOne"><img alt="" src="http://wenda.golaravel.com/uploads/avatar/000/00/59/24_avatar_mid.jpg" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <a href="http://wenda.golaravel.com/people/KingPlusOne" data-id="5924" class="aw-user-name">KingPlusOne </a> 
           <p class="signature"></p> 
           <p><b>0</b> 个问题, <b>0</b> 次赞同</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/people/SoulTowerMan"><img alt="" src="http://wenda.golaravel.com/uploads/avatar/000/00/59/30_avatar_mid.jpg" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <a href="http://wenda.golaravel.com/people/SoulTowerMan" data-id="5930" class="aw-user-name">SoulTowerMan </a> 
           <p class="signature"></p> 
           <p><b>0</b> 个问题, <b>0</b> 次赞同</p> 
          </dd> 
         </dl> 
         <dl> 
          <dt class="pull-left aw-border-radius-5"> 
           <a href="http://wenda.golaravel.com/people/K%E9%98%BF%E4%B8%89"><img alt="" src="http://wenda.golaravel.com/uploads/avatar/000/00/59/17_avatar_mid.jpg" /></a> 
          </dt> 
          <dd class="pull-left"> 
           <a href="http://wenda.golaravel.com/people/K%E9%98%BF%E4%B8%89" data-id="5917" class="aw-user-name">K阿三 </a> 
           <p class="signature"></p> 
           <p><b>0</b> 个问题, <b>0</b> 次赞同</p> 
          </dd> 
         </dl> 
        </div> 
       </div> 
      </div> 
      <!-- end 侧边栏 --> 
     </div> 
    </div> 
   </div> 
  </div>
	
@endsection
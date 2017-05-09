@extends('layouts.app')

@section('title', 'ihelpi-博客集群')
<style type="text/css">
  body .thumbnail a>img{
    display: block;
    max-width: 100%;
    height: 250px;

  }



</style>

@section('content')
  <nav class="main-navigation"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-sm-12"> 
      <div class="navbar-header"> 
       <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu"> <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i> </span> 
      </div> 
      <div class="collapse navbar-collapse" id="main-menu"> 
       <ul class="menu"> 
        <li class="nav-current" role="presentation"><a href="/">首页</a></li> 
        <li role="presentation"><a href="/answer" title="Laravel问答社区" target="_blank">问答社区</a></li> 
        <li role="presentation"><a href="/family" title="Laravel 博客集群" target="_blank">博客集群</a></li> 
        <li role="presentation"><a href="/download" title="下载 ">学习工具</a></li> 
        <li role="presentation"><a href="/talk" title="下载 ">聊天室</a></li> 
        <li role="presentation" class="pull-right"><a style="color:#f4645f" href="#" title="申请成为博客主" target="_blank">申请成为博客主 联系QQ：1798736436</a></li> 
       </ul> 
      </div> 

     </div> 
    </div> 
   </div> 
  </nav>  
  <div class="container main-container "> 
   <div class="box text-center site-intro rm-link-color">
     为 广大IT人才提供知识的补给站 
    <a class="popover-with-html" data-content="查看源代码" target="_blank" style="padding-right:8px" href="https://github.com/banbooboo/" data-original-title="" title="">PHPHub</a> 
   </div> 
   <div class="row grid topbanner"> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a href="https://www.blog8090.com/" class="no-pjax"> <img src="https://www.blog8090.com/content/images/2016/09/WechatIMG6.jpeg" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://www.blog8090.com/" class="no-pjax">吕 倡</a></h3> 
       <p class="card-description hidden-xs">知识的积累就像苦丁茶,越老越有味..所以继续前行</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a href="https://www.rooyun.com/" class="no-pjax"> <img src="https://www.rooyun.com/content/images/2016/09/hdImg_29ef10d1dacec82f77e25057d970018a14749011307.jpg" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://www.rooyun.com/" class="no-pjax">孙老板</a></h3> 
       <p class="card-description hidden-xs">  生命是一次奇遇，用心感受，会有属于自己的惊喜。</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a href="https://www.limingxia.com/" class="no-pjax"> <img src="http://olgl704e0.bkt.clouddn.com/image/0head.png" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://www.limingxia.com/" class="no-pjax">李明霞</a></h3> 
       <p class="card-description hidden-xs">  [ 真诚 | 健康 | 礼仪 | 微笑 ] 是我做人秉承的基础 </p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a href="https://www.cjwme.com/" class="no-pjax"> <img src="https://www.cjwme.com/content/images/2017/02/86224E345F6F51B46AE1079170397387-1.png" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://www.cjwme.com/" class="no-pjax">Mr Wen</a></h3> 
       <p class="card-description hidden-xs">  当你的知识还不能支撑你的梦想时，请你静下心来学习</p> 
      </div> 
     </div> 
    </div> 
     <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a href="https://www.liutao1995.top/" class="no-pjax"> <img src="http://r.photo.store.qq.com/psb?/V100XQYs2nowlu/2BuG*JMkhhu4*jyaavBeGPHeYNWQ0WFE.J8zftLYw*0!/r/dB8BAAAAAAAA" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://www.liutao1995.top/" class="no-pjax">灵魂滔滔</a></h3> 
       <p class="card-description hidden-xs">  既然选择了远方 便只顾风雨兼程
</p> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 

@endsection
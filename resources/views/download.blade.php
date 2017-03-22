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
      <a target="_blank" href="http://www.runoob.com/cprogramming/c-tutorial.html" class="no-pjax"> <img src="http://www.runoob.com/wp-content/uploads/2014/09/c-mini-logo.png" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank"  href="http://www.runoob.com/cprogramming/c-tutorial.html" class="no-pjax">C</a></h3> 
       <p class="card-description hidden-xs">C 语言是一种通用的、面向过程式的计算机程序设计语言</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/java/java-tutorial.html" class="no-pjax"> <img src="http://www.runoob.com/wp-content/uploads/2013/12/java.jpg" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/java/java-tutorial.html" class="no-pjax">JAVA</a></h3> 
       <p class="card-description hidden-xs">Java面向对象程序设计语言.特点有：分布式、可移植、多线程</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.psahz.com/" class="no-pjax"> <img src="https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=2141921034,1262955510&fm=58" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.psahz.com/" class="no-pjax">图形图像处理</a></h3> 
       <p class="card-description hidden-xs">J主要是使用PS和Ai进行图形图像的生成和修改</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/html/html-tutorial.html" class="no-pjax"> <img src="https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=3252538703,4004085043&fm=58" /> </a> 
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/html/html-tutorial.html" class="no-pjax">网页制作与网站设计</a></h3> 
       <p class="card-description hidden-xs">网页制作与网站设计，使用HTML 描述静态网页。</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/jsp/jsp-tutorial.html" class="no-pjax"> <img src="https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=1195632634,3423070573&fm=116&gp=0.jpg" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/jsp/jsp-tutorial.html" class="no-pjax">JSP</a></h3> 
       <p class="card-description hidden-xs">一种动态网页开发技术。JSP通过网页表单获取用户输入数据、访问数据库及其他数据源，然后动态地创建网页。</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/js/js-tutorial.html" class="no-pjax"> <img src="https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=755562389,2568020393&fm=58" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/js/js-tutorial.html" class="no-pjax">JavaScript</a></h3> 
       <p class="card-description hidden-xs">一种轻量级的编程语言。可插入 HTML 页面的编程代码。互联网上最流行的脚本语言</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/php/php-tutorial.html" class="no-pjax"> <img src="https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=3112858211,2849902352&fm=58" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/php/php-tutorial.html" class="no-pjax">PHP</a></h3> 
       <p class="card-description hidden-xs">一种通用开源服务器端脚本语言.特点有：跨平台、免费、易上手。可以生成动态页面内容</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/android/android-tutorial.html" class="no-pjax"> <img src="http://www.runoob.com/wp-content/uploads/2015/05/1432977393_android.png" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/android/android-tutorial.html" class="no-pjax">Android</a></h3> 
       <p class="card-description hidden-xs">Android是一个开源的，基于Linux的移动设备操作系统，主要使用于移动设备，如智能手机和平板电脑。</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="http://www.runoob.com/linux/linux-tutorial.html" class="no-pjax"> <img src="https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=3529672049,513615691&fm=58" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="http://www.runoob.com/linux/linux-tutorial.html" class="no-pjax">Linux</a></h3> 
       <p class="card-description hidden-xs">Linux是一套免费使用和自由传播的类Unix操作系统，是一个基于POSIX和UNIX的多用户、多任务、支持多线程和多CPU的操作系统。</p> 
      </div> 
     </div> 
    </div> 
    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item"> 
     <div class="thumbnail"> 
      <a target="_blank" href="/sisteradvice" class="no-pjax"> <img src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=3622015957,3912200960&fm=23&gp=0.jpg" /> </a>
      <div class="caption"> 
       <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a target="_blank" href="/sisteradvice" class="no-pjax">学姐说</a></h3> 
       <p class="card-description hidden-xs">里面是作为学姐过来人的一些忠告，各个学科如何快速上手，学什么是重要的？方便提高大家学习的效率</p> 
      </div> 
     </div> 
    </div> 


   </div> 
  </div> 

@endsection
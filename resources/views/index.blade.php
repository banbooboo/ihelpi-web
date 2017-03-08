<!-- 存放在 resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'ihelpi-博客集群')


@section('content')
     <!-- start header --> 
  <header class="main-header" style="background-image: url(http://image.golaravel.com/5/c9/44e1c4e50d55159c65da6a41bc07e.jpg)" "=""> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-sm-12"> 
      <h1><span class="hide">博客群 - </span>为 广大IT人才提供知识的补给站。</h1> 
     </div> 
     <div class="col-sm-12"> 
      <a href="https://www.blog8090.com/" class="btn btn-default btn-doc" target="_blank">丢丢哥 博客</a> 
      <a href="https://www.rooyun.com/" class="btn btn-default btn-doc" target="_blank">孙老板 博客</a> 
      <a href="http://www.limingxia.com/" class="btn btn-default btn-doc" target="_blank">aaa霞 博客</a> 
      <a href="https://www.cjwme.com/" class="btn btn-default btn-doc" target="_blank">JW 陈 博客</a> 
      <!--<a href="https://www.aabvip.com/" class="btn btn-default btn-doc" target="_blank">彦哥  博客</a>--> 
      <a href="http://www.liutao1995.top/" class="btn btn-default btn-doc" target="_blank">灵魂滔滔 博客</a> 
      <a href="http://answer.ihelpi.cn" class="btn btn-default btn-doc" target="_blank">问答社区</a> 
     </div> 
    </div> 
   </div> 
  </header> 
  <!-- end header --> 
  <!-- start navigation --> 
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
        <li role="presentation"><a href="/download" title="下载 ">下载工具</a></li> 
        <li role="presentation"><a href="/docs" title="各种中文手册" target="_blank">各种中文手册</a></li> 
        <li role="presentation"><a href="http://www.phpcomposer.com/" title="Composer 中文文档" target="_blank">Composer</a></li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </nav> 
  <!-- end navigation --> 
  <!-- start site's main content area --> 
  <section class="content-wrap"> 
   <div class="container"> 
    <div class="row"> 
     <main class="col-md-8 main-content"> 
      <article id="73" class="post"> 
       <div class="post-head"> 
        <h1 class="post-title"><a href="/post/laravel-5-5-will-be-the-next-lts-release/">Laravel 5.5 将是下一个 LTS 版本，预计 7/8 月份发布</a></h1> 
        <div class="post-meta"> 
         <span class="author">作者：<a href="/author/wangsai/">banbooboo</a></span> • 
         <time class="post-date" datetime="2017年2月21日星期二凌晨3点21分" title="2017年2月21日星期二凌晨3点21分">2017年2月21日</time> 
        </div> 
       </div> 
       <div class="featured-media"> 
        <a href="/post/laravel-5-5-will-be-the-next-lts-release/"><img src="http://image.golaravel.com/b/60/0540baaed781628b02aac992d1c8f.png" alt="Laravel 5.5 将是下一个 LTS 版本，预计 7/8 月份发布" /></a> 
       </div> 
       <div class="post-content"> 
        <p>Laravel 的上一个 LTS（长期支持）版本是 Laravel 5.1，发布于 2015 年 6 月，按照对 LTS 版本的约定，两年的 bug 修复支持到今年中旬就结束了，所以今年中旬必然要出一个 LTS 后继版本，就是 Laravel 5.5。 今天 Laravel 官方在 twitter 上发布消息，Lara</p> 
       </div> 
       <div class="post-permalink"> 
        <a href="/post/laravel-5-5-will-be-the-next-lts-release/" class="btn btn-default">阅读全文</a> 
       </div> 
       <footer class="post-footer clearfix"> 
        <div class="pull-left tag-list"> 
         <i class="fa fa-folder-open-o"></i> 
        </div> 
        <div class="pull-right share"> 
        </div> 
       </footer> 
      </article> 
      <nav class="pagination" role="navigation"> 
       <span class="page-number">第 1 页 ⁄ 共 6 页</span> 
       <a class="older-posts" href="/page/2/"><i class="fa fa-angle-right"></i></a> 
      </nav> 
     </main> 
     <aside class="col-md-4 sidebar"> 
      <!-- start widget --> 
      <!-- end widget --> 
      <!-- start tag cloud widget --> 
      <div class="widget"> 
       <h4 class="title">社区</h4> 
       <div class="content community"> 
        <p>QQ群：485226026</p> 
        <p><a href="http://www.ihelpi.cn/answer" title="问答社区" target="_blank"><i class="fa fa-comments"></i> 问答社区</a></p> 
       </div> 
      </div> 
      <!-- end tag cloud widget --> 
      <!-- start widget --> 
      <div class="widget"> 
       <h4 class="title">下载</h4> 
       <div class="content download"> 
        <a href="http://dl.ghostchina.com/Ghost-0.7.4-zh-full.zip" class="btn btn-default btn-block" >博客模板</a> 
       </div> 
      </div> 
      <!-- end widget --> 
      <!-- start tag cloud widget --> 
      <div class="widget"> 
       <h4 class="title">标签云</h4> 
       <div class="content tag-cloud"> 
        <a href="/tag/laravel">Laravel </a> 
        <a href="/tag/Vue/">Vue</a> 
        <a href="/tag/Mini-Programs/">微信小程序</a> 
        <a href="/tag/Docker/">Docker</a> 
        <a href="/tag/vagrant/">vagrant</a> 
        <a href="/tag/MySQL/">MySQL</a> 
        <a href="/tag/MongoDB/">MongoDB</a> 
        <a href="/tag/git/">git</a> 
        <a href="/tag/other">...</a> 
       </div> 
      </div> 
      <!-- end tag cloud widget --> 
      <!-- start widget --> 
      <!-- end widget --> 
      <!-- start widget --> 
      <!-- end widget --> 
     </aside> 
    </div> 
   </div> 
  </section> 
  <footer class="main-footer"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-sm-4"> 
      <div class="widget"> 
       <h4 class="title">最新文章</h4> 
       <div class="content recent-post"> 
        <div class="recent-single-post"> 
         <a href="/post/laravel-5-5-will-be-the-next-lts-release/" class="post-title">Laravel 5.5 将是下一个 LTS 版本，预计 7/8 月份发布</a> 
         <div class="date">
          2017年2月21日
         </div> 
        </div> 
        <div class="recent-single-post"> 
         <a href="/post/laravel-5-4-is-now-released/" class="post-title">Laravel 5.4 版本正式发布</a> 
         <div class="date">
          2017年1月25日
         </div> 
        </div> 
        <div class="recent-single-post"> 
         <a href="/post/benchmarking-laravel-symfony-zend/" class="post-title">Laravel 之父：让 Laravel、Symfony、 Zend 来一场公平的性能测试</a> 
         <div class="date">
          2017年1月13日
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="col-sm-4"> 
      <div class="widget"> 
       <h4 class="title">标签云</h4> 
       <div class="content tag-cloud"> 
        <a href="/tag/laravel">Laravel </a> 
        <a href="/tag/Vue/">Vue</a> 
        <a href="/tag/Mini-Programs/">微信小程序</a> 
        <a href="/tag/Docker/">Docker</a> 
        <a href="/tag/vagrant/">vagrant</a> 
        <a href="/tag/MySQL/">MySQL</a> 
        <a href="/tag/MongoDB/">MongoDB</a> 
        <a href="/tag/git/">git</a> 
        <a href="/tag/other">...</a> 
       </div> 
      </div> 
     </div> 
     <div class="col-sm-4"> 
      <div class="widget"> 
       <h4 class="title">友情连接</h4> 
       <div class="content tag-cloud friend-links"> 
        <a href="https://www.blog8090.com/" class="btn btn-default btn-doc" target="_blank">丢丢哥 博客</a> 
        <a href="https://www.rooyun.com/" class="btn btn-default btn-doc" target="_blank">孙老板 博客</a> 
        <a href="http://www.limingxia.com/" class="btn btn-default btn-doc" target="_blank">aaa霞 博客</a> 
        <a href="https://www.cjwme.com/" class="btn btn-default btn-doc" target="_blank">JW 陈 博客</a> 
        <!--<a href="https://www.aabvip.com/" class="btn btn-default btn-doc" target="_blank">彦哥  博客</a>--> 
        <a href="http://www.liutao1995.top/" class="btn btn-default btn-doc" target="_blank">灵魂滔滔 博客</a> 
       </div> 
      </div>
     </div> 
    </div> 
   </div> 
  </footer> 
  
  <a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a> 

  
@endsection
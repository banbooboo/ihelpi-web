<!-- 存放在 resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'ihelpi-博客集群')


@section('content') 
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
        <li role="presentation"><a href="/download" title="下载 ">学习工具</a></li>
        <li role="presentation"><a href="/talk" title="下载 ">聊天室</a></li>
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
     <main class="col-md-8 main-content col-md-offset-2"> 
      <article id="73" class="post"> 
       <div class="post-head"> 
        <h1 class="post-title"><a href="">学姐说</a></h1> 
        <div class="post-meta"> 
         <span class="author">作者：<a href="/author/wangsai/">banbooboo</a></span> • 
         <time class="post-date" datetime="2017年2月21日星期二凌晨3点21分" title="2017年2月21日星期二凌晨3点21分">2017年2月21日</time> 
        </div> 
       </div> 
       <div class="featured-media"> 
        <a href="/post/laravel-5-5-will-be-the-next-lts-release/"><img src="https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=2179925038,4092249055&fm=23&gp=0.jpg" /></a> 
       </div> 
       <div class="post-content"> 
        <p>作为过来人的学姐，我们也即将毕业了，想起当初刚进大学的我们，对于计算机这个行业实在是小白。大一时在北校区也没个计划，想起来实在有些惭愧。这个网站，主要是为了给学妹们做一个技术指引。</p> 

        <ol>
          <li>C  语言是大部分IT人刚开始接触IT学习的一门基础言语，通过学习C语言逐渐去了解面向过程的思想，知道机器是怎样实现功能的，去了解机器的各种规法</li>
          <li>JAVA 语言是一门面向对象的语言。学过C后再去学JAVA，会发现大部分思想都一样：基础语法、数据类型、逻辑处理、循环结构等，但是JAVA这种语法会更丰富，它的主要特点：面向对象、分布式、多线程。在练习时，可以多从这三个方面去练习会对这门语言有更多的体会</li>
          <li>PS和Ai 多练吧</li>
          <li>HTML/CSS 网页制作最基础的语言 前端中搭配JS可以达到很好的交互 不过到了真正工作中，大部份不是写原生语法而是使用各种前端框架：Boostrap、WeUI等 所以在了解完基础语法后，再去学习流行框架，可以达到不与实际工作脱轨 需要强调一下，这门语言学不好的话，后面涉及到网站的页面你都会头疼的</li>
          <li>JSP 这门是目前接触到的第一门可以快速上手开发出一个真正的网站，网站页面用HTML开发、通过网页表单获取用户输入数据、访问数据库及其他数据源，然后动态地创建网页。</li>
          <li>JavaScript 和前面的HTML/CSS 搭配，写出酷炫的页面动态效果，达到各种交互 提升用户体验</li>
          <li>PHP 快速上手 开发占用系统资源小</li>
          <li>Android 用于开发安卓APP 学习后你就可以开发一款自己的APP </li>
          <li>Linux 这门一般是最后大三才学习，不过我建议你们可以在一开始学C的时候就学Linux，我们长期使用Windows系统或者MAC系统，可是项目生产环境中都会部署到一个Linux或者Unix服务器上。这样当我们在本地开发出产品时可以发布到服务器上，在网络社会被访问。</li>
        </ol>
       </div>
       <p>最后说的是，上面提到了很多语言，可是只要你精通一门就可以成为以后你从事的职业。例如：JAVA工程师、PHP工程师、前端工程师。所以，建议你没必要每个都精通，找到自己喜欢的一门技术配合数据结构、算法长期的练习。对了，数据结构和算法才是最后的核心。语言是一种工具，任何一种语言都可以去开发，但是算法和数据结构这是基础内功。</p> 
    
      </article> 
     </main> 

    </div> 
   </div> 
  </section> 
  
@endsection
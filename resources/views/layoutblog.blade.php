@extends('layouts.app')

@section('title', 'ihelpi-博客集群')


@section('content')

	
          

		<div id="wrap">

			<div role="navigation" class="navbar navbar-default topnav">
  <div class="container">
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

     
    </div>

    <div id="top-navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class=""><a href="/answer">问答</a></li>
      </ul>

      <div class="navbar-right">

                        <form method="GET" action="https://laravel-china.org/search" accept-charset="UTF-8" class="navbar-form navbar-left">
                  <div class="form-group">
                  <input class="form-control search-input mac-style" placeholder="搜索" name="q" type="text" value="">
          
            </div>
          </form>

        <ul class="nav navbar-nav github-login" >
                        <a href="/login" class="btn btn-primary login-btn">
              
                登 录
              </a>
                  </ul>
      </div>
    </div>

  </div>
</div>

			<div class="container main-container ">
<div class="box text-center site-intro rm-link-color">
 为 广大IT人才提供知识的补给站 <a class="popover-with-html" data-content="查看源代码" target="_blank" style="padding-right:8px" href="https://github.com/banbooboo/" data-original-title="" title="">PHPHub</a>
</div>

<div class="row grid topbanner">
                        <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://laravel-china.org/laravel-tutorial/5.1/about" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/ypkw7uWhDUcF6nFNyNST.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://laravel-china.org/laravel-tutorial/5.1/about" class="no-pjax">《Laravel 入门教程》</a></h3>
                  <p class="card-description hidden-xs">使用 Laravel 在实战中一步一步构建一个类似新浪微博的应用</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://news.laravel-china.org/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/iaB4eNaJSbYqGjygUAEJ.jpg?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://news.laravel-china.org/" class="no-pjax">Laravel 资讯</a></h3>
                  <p class="card-description hidden-xs">Laravel 最新资讯、精华文章、开发技巧、扩展包推荐等</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://laravel-china.org/topics/571" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/qdckBxO1nl3Uq3lUMGYZ.jpg?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://laravel-china.org/topics/571" class="no-pjax">Easy We Chat</a></h3>
                  <p class="card-description hidden-xs">最优雅的微信 SDK，Laravel 风的微信 SDK（非官方）</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://laravel-china.org/topics/2530" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/Ltw9l2xdkQX2gEv63sUG.jpg?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://laravel-china.org/topics/2530" class="no-pjax">Top 100 扩展包</a></h3>
                  <p class="card-description hidden-xs">下载量最高的 100 个 Laravel 扩展包推荐</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://laravel-china.org/topics/3626" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/vY94ihUeEsvTXQ5sNWmH.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://laravel-china.org/topics/3626" class="no-pjax">Laravel 远程工作</a></h3>
                  <p class="card-description hidden-xs">远程工作、自由生活</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://laravel-china.org/categories/1" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/0wgbAVabZB9GA2yaU8AY.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://laravel-china.org/categories/1" class="no-pjax">酷工作</a></h3>
                  <p class="card-description hidden-xs">Laravel\PHP 相关的招聘、求职、外包、接包、远程工作</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://lumen.laravel-china.org/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/v7iXEpnnYauMEBegJb4Q.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://lumen.laravel-china.org/" class="no-pjax">Lumen 中文文档</a></h3>
                  <p class="card-description hidden-xs">Lumen 是为速度而生，专注于构建无状态 API 的 Laravel 精简版</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://cs.laravel-china.org/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/YCkIqPrz6v8MV0keu4pW.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://cs.laravel-china.org/" class="no-pjax">Laravel 速查表</a></h3>
                  <p class="card-description hidden-xs">速查表方便快速查询框架功能，支持手机访问，支持中英文版本</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://yousails.com" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/LN2gZDjnJvlSrccLXDri.jpg?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://yousails.com" class="no-pjax">技术服务 / 技术合作</a></h3>
                  <p class="card-description hidden-xs">从概念到产品，最短几周的时间内，我们让你的伟大想法落地。</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="https://psr.phphub.org/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/0pyH7UgXhF7PTBkLZRak.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="https://psr.phphub.org/" class="no-pjax">PSR PHP 标准规范</a></h3>
                  <p class="card-description hidden-xs">PSR 由 PHP FIG 组织制定的 PHP 规范，是 PHP 开发的实践标准</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="http://d.laravel-china.org/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/qCpz5a1iBETEfnNEAkGe.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="http://d.laravel-china.org/" class="no-pjax">Laravel 中文文档</a></h3>
                  <p class="card-description hidden-xs">Laravel China 社区维护的中文文档，涵盖 5.1, 5.2, 5.3 版本</p>
                </div>
              </div>
            </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 projects-card grid-item">
              <div class="thumbnail">
                  <a href="http://laravel-china.github.io/php-the-right-way/" class="no-pjax">
                      <img src="https://dn-phphub.qbox.me/uploads/banners/fJ9945MnDAKH9TrWSXvA.png?imageView2/1/w/424/h/212">
                  </a>
                <div class="caption">
                  <h3 style="font-size:1.1em;font-weight:bord" class="card-title"><a href="http://laravel-china.github.io/php-the-right-way/" class="no-pjax">新手入门 PHP 之道</a></h3>
                  <p class="card-description hidden-xs">正确的学习 PHP 的方式，新手必看</p>
                </div>
              </div>
            </div>
            </div>




			</div>



		</div>

@endsection
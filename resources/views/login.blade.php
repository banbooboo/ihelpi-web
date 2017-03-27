@extends('layouts.app')

@section('title', 'ihelpi-博客集群')

@section('linkcss')

<link href="./css/common201409302.css" rel="stylesheet" type="text/css" />
<link href="./css/login20140930.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<body>
	<div class="aw-top-menu-wrap">
		<div class="container">
			<!-- 搜索框 -->
			<div class="aw-search-box  hidden-xs hidden-sm">
				<form class="navbar-search" action="/search/" id="global_search_form" method="post">
					<input class="form-control search-query" type="text" placeholder="搜索问题、话题或人" autocomplete="off" name="q" id="aw-search-query" />
					<span title="搜索" id="global_search_btns" onClick="$('#global_search_form').submit();"><i class="icon icon-search"></i></span>
					<div class="aw-dropdown">
						<div class="mod-body">
							<p class="title">输入关键字进行搜索</p>
							<ul class="aw-dropdown-list hide"></ul>
							<p class="search"><span>搜索:</span><a onClick="$('#global_search_form').submit();"></a></p>
						</div>
						<div class="mod-footer">
							<a href="" onClick="$('#header_publish').click();" class="pull-right btn btn-mini btn-success publish">发起问题</a>
						</div>
					</div>
				</form>
			</div>
			<!-- end 搜索框 -->
			<!-- 导航 -->
			<div class="aw-top-nav navbar">
				<div class="navbar-header">
			      <button  class="navbar-toggle pull-left">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
			      <ul class="nav navbar-nav">
			      	                    <li><a href="" class=""><i class="icon icon-ul"></i> 发现</a></li>
					<li><a href="/topic/" ><i class="icon icon-topic"></i> 话题</a></li>

								      </ul>
			    </nav>
			</div>
			<!-- end 导航 -->
			<!-- 用户栏 -->
			<div class="aw-user-nav">
				<!-- 登陆&注册栏 -->
									<span>
						<a class="register btn btn-normal btn-success" href="/register">注册</a>
						<a class="login btn btn-normal btn-primary" href="/login">登录</a>
					</span>
								<!-- end 登陆&注册栏 -->
			</div>
			<!-- end 用户栏 -->
			<!-- 发起 -->
						<!-- end 发起 -->
		</div>
	</div>
			
<div id="wrapper">
	<div class="aw-login-box">
		<div class="mod-body clearfix">
			<div class="content pull-left">
				<h2>博客群社区</h2>
				<form id="login_form" method="post"  action="/login">
				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<ul>
						<li>
							<input type="text" id="aw-login-user-name" class="form-control" placeholder="邮箱 / 用户名" name="user_name" />
						</li>
						<li>
							<input type="password" id="aw-login-user-password" class="form-control" placeholder="密码" name="password" />
						</li>
						<li class="alert alert-danger hide error_message">
							<i class="icon icon-delete"></i> <em></em>
						</li>
						<li class="last">
							<button  id="login_submit" class="pull-right btn btn-large btn-primary" type="submit">登录</button>
							<label>
								<input type="checkbox" value="1" name="net_auto_login" />
								记住我							</label>
							<a href="/account/find_password/">&nbsp;&nbsp;忘记密码</a>
						</li>
					</ul>
				</form>
			</div>
			<div class="side-bar pull-left">
									<h3>账号登录</h3>
											<a href="/account/openid/sina/" class="btn btn-block btn-weibo"><i class="icon icon-weibo"></i> 新浪微博登录</a>
																<a href="/account/openid/qq_login/" class="btn btn-block btn-qq"> <i class="icon icon-qq"></i> QQ登录</a>
																	</div>
		</div>
		<div class="mod-footer">
			<span>还没有账号?</span>&nbsp;&nbsp;
			<a href="/account/register/">立即注册</a>&nbsp;&nbsp;•&nbsp;&nbsp;
			<a href="">游客访问</a>&nbsp;&nbsp;•&nbsp;&nbsp;
			<a href="/reader/">问答阅读</a>
		</div>
	</div>
</div>

<script type="text/javascript" src="/static/js/app/login.js"></script>

<a class="aw-back-top hidden-xs" href="javascript:;" onclick="$.scrollTo(1, 600, {queue:true});"><i class="icon icon-up"></i></a>

<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc8d13872a523d9c286aa7affbe0921f1' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- DO NOT REMOVE -->
<div id="aw-ajax-box" class="aw-ajax-box"></div>
<div style="display:none;" id="__crond">
	<script type="text/javascript">
		$(document).ready(function () {
			$('#__crond').html(unescape('%3Cimg%20src%3D%22' + G_BASE_URL + '/crond/run/1488521669%22%20width%3D%221%22%20height%3D%221%22%20/%3E'));
		});
	</script>
</div>

<!-- Escape time: 0.012718915939331 --><!-- / DO NOT REMOVE -->
@endsection()
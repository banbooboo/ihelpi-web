@extends('layouts/app')


@section('title', 'ihelpi-博客集群')

@section('linkcss')

<link href="./css/common20140930.css" rel="stylesheet" type="text/css" />

<link href="./css/register20140930.css" rel="stylesheet" type="text/css" />



<script src="http://wenda.golaravel.com/static/js/jquery.2.js?v=20140930" type="text/javascript"></script>
<script src="http://wenda.golaravel.com/static/js/jquery.form.js?v=20140930" type="text/javascript"></script>
<script src="http://wenda.golaravel.com/static/js/plug_module/plug-in_module.js?v=20140930" type="text/javascript"></script>
<script src="http://wenda.golaravel.com/static/js/aws.js?v=20140930" type="text/javascript"></script>
<script src="http://wenda.golaravel.com/static/js/aw_template.js?v=20140930" type="text/javascript"></script>
<script src="http://wenda.golaravel.com/static/js/app.js?v=20140930" type="text/javascript"></script>
<script type="text/javascript" src="http://wenda.golaravel.com/static/js/compatibility.js"></script>
<!--[if lte IE 8]>
	<script type="text/javascript" src="http://wenda.golaravel.com/static/js/respond.js"></script>
<![endif]-->
</head>
<noscript unselectable="on" id="noscript">
    <div class="aw-404 aw-404-wrap container">
        <img src="http://wenda.golaravel.com/static/common/no-js.jpg">
        <p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
    </div>
</noscript>

@endsection()

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

					<!-- <li><a href="http://wenda.golaravel.com/question/" class="">问题</a></li>

					<li><a href="http://wenda.golaravel.com/article/" class="">文章</a></li> -->

					<li><a href="http://wenda.golaravel.com/topic/" ><i class="icon icon-topic"></i> 话题</a></li>

								      </ul>
			    </nav>
			</div>
			<!-- end 导航 -->
			<!-- 用户栏 -->
			<div class="aw-user-nav">
				<!-- 登陆&注册栏 -->
									<span>
						<a class="register btn btn-normal btn-success" href="http://wenda.golaravel.com/account/register/">注册</a>
						<a class="login btn btn-normal btn-primary" href="http://wenda.golaravel.com/login/">登录</a>
					</span>
								<!-- end 登陆&注册栏 -->
			</div>
			<!-- end 用户栏 -->
			<!-- 发起 -->
						<!-- end 发起 -->
		</div>
	</div>
			
<div class="aw-register-box">
	<div class="mod-head">
		<a href=""><img src="http://wenda.golaravel.com/static/css/default/img/login_logo.png" alt="" /></a>
		<h1>注册新用户</h1>
	</div>
	<div class="mod-body">
		<form class="aw-register-form" action="http://wenda.golaravel.com/account/ajax/register_process/" method="post" id="register_form">
								
			<ul>
				<li class="alert alert-danger hide error_message text-left">
					<i class="icon icon-delete"></i> <em></em>
				</li>
				<li>
					<input class="aw-register-name form-control" type="text" name="user_name" placeholder="用户名" tips="请输入一个 2-14 位的用户名" errortips="用户名长度不符合" value="" />
				</li>
				<li>
					<input class="aw-register-email form-control" type="text" placeholder="邮箱" name="email" tips="请输入你常用的电子邮箱作为你的账号" value="" errortips="邮箱格式不正确" />
				</li>
				<li>
					<input class="aw-register-pwd form-control" type="password" name="password" placeholder="密码" tips="请输入 6-16 个字符,区分大小写" errortips="密码不符合规则" />
				</li>
				<li class="more-information hide">
					<ul>
						<li>
							性别:
							<label>
								<input name="sex" id="sex" value="1" type="radio" /> 男							</label>&nbsp; 
							<label>
								<input name="sex" id="sex" value="2" type="radio" /> 女 </label>&nbsp; 
							<label>
								<input name="sex" id="sex" value="3" type="radio" checked="checked" /> 保密							</label> 
						</li>
						<li>
							职业:
							<select name="job_id">
								<option value="">--</option>
								<option value="1">销售</option><option value="2">市场/市场拓展/公关</option><option value="3">商务/采购/贸易</option><option value="4">计算机软、硬件/互联网/IT</option><option value="5">电子/半导体/仪表仪器</option><option value="6">通信技术</option><option value="7">客户服务/技术支持</option><option value="8">行政/后勤</option><option value="9">人力资源</option><option value="10">高级管理</option><option value="11">生产/加工/制造</option><option value="12">质控/安检</option><option value="13">工程机械</option><option value="14">技工</option><option value="15">财会/审计/统计</option><option value="16">金融/银行/保险/证券/投资</option><option value="17">建筑/房地产/装修/物业</option><option value="18">交通/仓储/物流</option><option value="19">普通劳动力/家政服务</option><option value="20">零售业</option><option value="21">教育/培训</option><option value="22">咨询/顾问</option><option value="23">学术/科研</option><option value="24">法律</option><option value="25">美术/设计/创意</option><option value="26">编辑/文案/传媒/影视/新闻</option><option value="27">酒店/餐饮/旅游/娱乐</option><option value="28">化工</option><option value="29">能源/矿产/地质勘查</option><option value="30">医疗/护理/保健/美容</option><option value="31">生物/制药/医疗器械</option><option value="32">翻译（口译与笔译）</option><option value="33">公务员</option><option value="34">环境科学/环保</option><option value="35">农/林/牧/渔业</option><option value="36">兼职/临时/培训生/储备干部</option><option value="37">在校学生</option><option value="38">其他</option>							</select>
						</li>
						<li>
							所在城市:
							<select name="province" class="select_area" style="display:inline-block"></select>
							
							<select name="city" class="select_area"></select>
						</li>
						<li>
							<input type="text" class="form-control" placeholder="一句话介绍" id="welcome_signature" value="" name="signature" />
						</li>
					</ul>
				</li>
				<li>
					<hr />
					<a class="more-information-btn">更多资料</a>
				</li>
								<li class="aw-register-verify">
					<img class="pull-right" id="captcha" onclick="this.src = G_BASE_URL + '/account/captcha/' + Math.floor(Math.random() * 10000);" src="">
					
					<input type="text" class="form-control" name="seccode_verify" placeholder="验证码" />
				</li>
								<li class="last">
					<label><input type="checkbox" checked="checked" value="agree" name="agreement_chk" /> 我同意</label> <a href="javascript:;" class="aw-agreement-btn">用户协议</a>
					<a href="http://wenda.golaravel.com/login/" class="pull-right">已有账号?</a>
					<div class="aw-regiter-agreement hide">
						<div class="aw-register-agreement-txt" id="register_agreement"></div>
					</div>
					
				</li>
				<li class="clearfix">
					<button class="btn btn-large btn-blue btn-block" onclick="AWS.ajax_post($('#register_form'), AWS.ajax_processer, 'error_message'); return false;">注册</button>
				</li>
			</ul>
		</form>
	</div>
	<div class="mod-footer"></div>
</div>

<script type="text/javascript">
$(document).ready(function ()
{
	$.get(G_BASE_URL + '/account/ajax/register_agreement/', function (result) { $('#register_agreement').html(result.err); }, 'json');

	$('.aw-agreement-btn').click(function()
	{
		if ($('.aw-regiter-agreement').is(':visible'))
		{
			$('.aw-regiter-agreement').hide();
		}
		else
		{
			$('.aw-regiter-agreement').show();
		}
	});

	$('.more-information-btn').click(function()
	{
		$('.more-information').fadeIn();
		$(this).parent().hide();
	});
	
    verify_register_form('#register_form');

    /* 注册页面验证 */
	function verify_register_form(element)
	{
	    $(element).find('[type=text], [type=password]').on({
	        focus : function()
	        {
	            if (typeof $(this).attr('tips') != 'undefined' && $(this).attr('tips') != '')
	            {
	                $(this).parent().append('<span class="aw-reg-tips">' + $(this).attr('tips') + '</span>');
	            }
	        },
	        blur : function()
	        {
	        	if ($(this).attr('tips') != '')
	        	{
	        		switch ($(this).attr('name'))
		            {
		                case 'user_name' : 
		                    var _this = $(this);
		                    $(this).parent().find('.aw-reg-tips').detach();
		                    if ($(this).val().length >= 0 && $(this).val().length < 2)
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + $(this).attr('errortips') + '</span>');
		                        return;
		                    }
		                    if ($(this).val().length > 17)
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + $(this).attr('errortips') + '</span>');
		                        return;
		                    }
		                    else
		                    {
		                        $.get(G_BASE_URL + '/account/ajax/check_username/username' + '-' + encodeURIComponent($(this).val()), function (result)
		                        {
		                            if (result.errno == -1)
		                            {
		                                _this.parent().find('.aw-reg-tips').detach();
		                                _this.parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + result.err + '</span>');
		                            }
		                            else
		                            {
		                                _this.parent().find('.aw-reg-tips').detach();
		                                _this.parent().append('<span class="aw-reg-tips aw-reg-right"><i class="aw-icon i-followed"></i></span>');
		                            }
		                        }, 'json');
		                    }
		                    return;

		                case 'email' : 
		                    $(this).parent().find('.aw-reg-tips').detach();
		                    var emailreg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
		                    if (!emailreg.test($(this).val()))
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + $(this).attr('errortips') + '</span>');
		                        return;
		                    }
		                    else
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-right"><i class="aw-icon i-followed"></i></span>');
		                    }        
		                    return;

		                case 'password' :
		                    $(this).parent().find('.aw-reg-tips').detach();
		                    if ($(this).val().length >= 0 && $(this).val().length < 6)
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + $(this).attr('errortips') + '</span>');
		                        return;
		                    }
		                    if ($(this).val().length > 17)
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-err"><i class="aw-icon i-err"></i>' + $(this).attr('errortips') + '</span>');
		                        return;
		                    }
		                    else
		                    {
		                        $(this).parent().find('.aw-reg-tips').detach();
		                        $(this).parent().append('<span class="aw-reg-tips aw-reg-right"><i class="aw-icon i-followed"></i></span>');
		                    }
		                    return;

		            }
	        	}
	            
	        }
	    });
	}
	
	$('.select_area').LocationSelect({
        labels: ["请选择省份或直辖市", "请选择城市"],
        elements: document.getElementsByTagName("select"),
        detector: function () {
            this.select(["", ""]);
        },
		dataUrl: G_BASE_URL + '/account/ajax/areas_json_data/'
    });
});
</script>

<div class="aw-footer-wrap">
	<div class="aw-footer">
		Copyright © 2017, All Rights Reserved</span>

		<span class="hidden-xs">Powered By <a href="http://www.wecenter.com/?copyright" target="blank">WeCenter 3.0 Beta 2</a></span>
		
			</div>
</div>



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
			$('#__crond').html(unescape('%3Cimg%20src%3D%22' + G_BASE_URL + '/crond/run/1488522938%22%20width%3D%221%22%20height%3D%221%22%20/%3E'));
		});
	</script>
</div>

<!-- Escape time: 0.02020001411438 --><!-- / DO NOT REMOVE -->


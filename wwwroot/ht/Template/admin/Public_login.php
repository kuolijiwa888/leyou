<!DOCTYPE html>
<html>
<head>
	<script>if (window !== top) top.location.replace(location.href);</script>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../../../assets/images/favicon.ico" rel="icon">
	<title>{:GetVar('webtitle')}后台管理</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css" /> 
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all" /> 
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script> 
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script> 
	<script type="text/javascript" src="./ascn/js/jquery-1.8.3.min.js"></script> 
	<style>
		body {
			background-image: url("./ascn/img/a3cloud.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			min-height: 100vh;
		}

		body:before {
			content: "";
			background-color: rgba(0, 0, 0, .2);
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		.login-wrapper {
			max-width: 420px;
			padding: 20px;
			margin: 0 auto;
			position: relative;
			box-sizing: border-box;
			z-index: 2;
		}

		.login-wrapper > .layui-form {
			padding: 25px 30px;
			background-color: #fff;
			box-shadow: 0 3px 6px -1px rgba(0, 0, 0, 0.19);
			box-sizing: border-box;
			border-radius: 4px;
		}

		.login-wrapper > .layui-form > h2 {
			color: #333;
			font-size: 18px;
			text-align: center;
			margin-bottom: 25px;
		}

		.login-wrapper > .layui-form > .layui-form-item {
			margin-bottom: 25px;
			position: relative;
		}

		.login-wrapper > .layui-form > .layui-form-item:last-child {
			margin-bottom: 0;
		}

		.login-wrapper > .layui-form > .layui-form-item > .layui-input {
			height: 46px;
			line-height: 46px;
			border-radius: 2px !important;
		}

		.login-wrapper .layui-input-icon-group > .layui-input {
			padding-left: 46px;
		}

		.login-wrapper .layui-input-icon-group > .layui-icon {
			width: 46px;
			height: 46px;
			line-height: 46px;
			font-size: 20px;
			color: #909399;
			position: absolute;
			left: 0;
			top: 0;
			text-align: center;
		}

		.login-wrapper > .layui-form > .layui-form-item.login-captcha-group {
			padding-right: 135px;
		}

		.login-wrapper > .layui-form > .layui-form-item.login-captcha-group > .login-captcha {
			height: 46px;
			width: 120px;
			cursor: pointer;
			box-sizing: border-box;
			border: 1px solid #e6e6e6;
			border-radius: 2px !important;
			position: absolute;
			right: 0;
			top: 0;
		}

		.login-wrapper > .layui-form > .layui-form-item > .layui-form-checkbox {
			margin: 0 !important;
			padding-left: 25px;
		}

		.login-wrapper > .layui-form > .layui-form-item > .layui-form-checkbox > .layui-icon {
			width: 15px !important;
			height: 15px !important;
		}

		.login-wrapper > .layui-form .layui-btn-fluid {
			height: 48px;
			line-height: 48px;
			font-size: 16px;
			border-radius: 2px !important;
		}

		.login-wrapper > .layui-form > .layui-form-item.login-oauth-group > a > .layui-icon {
			font-size: 26px;
		}

		.login-copyright {
			color: #eee;
			padding-bottom: 20px;
			text-align: center;
			position: relative;
			z-index: 1;
		}

		@media screen and (min-height: 550px) {
			.login-wrapper {
				margin: -250px auto 0;
				position: absolute;
				top: 50%;
				left: 0;
				right: 0;
				width: 100%;
			}

			.login-copyright {
				position: absolute;
				bottom: 0;
				right: 0;
				left: 0;
			}
		}

		.layui-btn {
			background-color: #5FB878;
			border-color: #5FB878;
		}

		.layui-link {
			color: #5FB878 !important;
		}
	</style>
</head>
<body>
	<div class="login-wrapper layui-anim layui-anim-scale">
		<form class="layui-form" method="post" action="{:U('Public/login')}" onsubmit="return check_login(this)">
			<h2>用户登录</h2>
			<div class="layui-form-item layui-input-icon-group">
				<i class="layui-icon layui-icon-username"></i>
				<input type="text" class="layui-input" id="name" name="info[name]" placeholder="请输入登录账号" autocomplete="off" lay-verType="tips" lay-verify="required" required/>
			</div>
			<div class="layui-form-item layui-input-icon-group">
				<i class="layui-icon layui-icon-password"></i>
				<input type="password" class="layui-input" id="pass" name="info[pass]" placeholder="请输入登录密码" lay-verType="tips" lay-verify="required" required/>
			</div>
			<div class="layui-form-item layui-input-icon-group">
				<i class="layui-icon layui-icon-password"></i>
				<input type="password" class="layui-input" id="rzm" name="info[rzm]" placeholder="请输入安全码" lay-verType="tips" lay-verify="required" required/>
			</div>
			{if condition="GetVar('islogincode') eq 1"}
			<div class="layui-form-item layui-input-icon-group login-captcha-group">
				<i class="layui-icon layui-icon-auz"></i>
				<input class="layui-input" id="code" name="info[code]" placeholder="请输入验证码" autocomplete="off" lay-verType="tips" lay-verify="required" required/>
				<img class="login-captcha" alt=""/>
			</div>
			{/if}
			<div class="layui-form-item">
				<button type="submit" class="layui-btn layui-btn-fluid">登陆</button>
			</div>
		</form>
	</div>
	<div class="login-copyright">copyright © 2020 欢迎使用 爱尚互联 开发系统 all rights reserved.</div>

	<!-- js部分 -->

	<script>
		layui.use(['layer', 'form'], function () {
			var $ = layui.jquery;
			var layer = layui.layer;
			var form = layui.form;

			

			/* 图形验证码 */
			var captchaUrl = "{:url('Public/verify',['imageW'=>100,'imageH'=>39,fontSize=>14])}";
			$('img.login-captcha').click(function () {
				this.src = captchaUrl + '?t=' + (new Date).getTime();
			}).trigger('click');

		});
		/* 表单提交 */
		function check_login(obj){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.sign==true){
					layer.msg(json.message, {icon: 1, time: 1500}, function () {
						location.replace("{:U('Index/index')}");
					});
				}else{
					layer.msg(json.message,{icon:2,time:1500});
				}
				
			}, "json");
			return false;
		};
	</script>
</body>
</html>
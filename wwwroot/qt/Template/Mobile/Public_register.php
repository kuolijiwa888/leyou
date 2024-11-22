<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户注册 - {:GetVar('webtitle')}线上平台</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/by-login.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">

	<script src="__JS__/jquery-3.1.1.min.js"></script> 
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

</head>
<body>
	<div class="by-login-bj"></div>

	<div class="logo-name">
		<div class="logo222">
			<div class="img"><img src="/ascn/mobile/images/logo222.png"></div>
			<div class="name222"><span>{:GetVar('webtitle')}线上平台</span></div>
		</div>
	</div>

	<div class="bykuang">
		<form method="post" action="/register"  class="ruivalidate_form_class" onSubmit="return check_form(this)" id="form1">
			<div id="zhuce">
				<div class="top1">
					<div><span onclick="location='/login'">登录</span></div><div class="curr"><span>注册</span></div>
				</div>
				<div class="top2">
					<if condition="$defaulttjcode neq 0">
						<span style="font-size: 0.14rem;color: #5a5a5a;"><em>无邀请码请填"{$defaulttjcode}"</em></span>
					</if>
					<div ><i class="iconfont">&#xe7aa;</i><input type="text" <if condition="$tgid neq ''">readonly</if> value="{$tgid}" name="reccode" id="reccode" placeholder="请输入邀请码"></div>
					<div class="top2-2"><i class="iconfont">&#xe634;</i><input type="text" name="username" id="username" placeholder="请输入账号"></div>
					<div class="top2-2"><i class="iconfont">&#xe641;</i><input type="text" name="password" id="password" placeholder="请输入密码"></div>
					<div class="top2-2"><i class="iconfont">&#xe641;</i><input type="password" name="cpassword" id="cpassword" placeholder="请再次输入密码"></div>
					<div class="top2-2"><i class="iconfont">&#xe661;</i><input type="password" name="tradepassword" id="tradepassword" placeholder="请输入资金密码"></div>
				</div>
				<div class="top5">
					<button type="submit">注册</button>
				</div>
			</div>
		</form>
		
	</div>
	
	<div class="hsycms-model-mask" id="mask-alert"></div>
	<div class="hsycms-model hsycms-model-alert" id="alert">
		<div class="hscysm-model-title">温馨提示</div>
		<div class="hsycms-model-icon">
			<svg width="50" height="50">
				<circle class="hsycms-alert-svgcircle"  cx="25" cy="25" r="24" fill="none" stroke="#238af4" stroke-width="2"></circle>   
				<polyline class="hsycms-alert-svggou" fill="none" stroke="#238af4" stroke-width="2.5" points="14,25 23,34 36,18" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		<div class="hsycms-model-text">这里是内容</div>
		<div class="hsycms-model-btn alert">
			<button type="button ok">确定</button>
		</div>
	</div>

	<div class="hsycms-model-mask" id="mask-error"></div>
	<div class="hsycms-model hsycms-model-alert" id="error">
		<div class="hscysm-model-title">温馨提示</div>
		<div class="hsycms-model-icon">
			<svg width="50" height="50">
				<circle class="hsycms-alert-svgcircle"  cx="25" cy="25" r="24" fill="none" stroke="#f54655" stroke-width="2"></circle>   
				<polyline class="hsycms-alert-svgca1" fill="none" stroke="#f54655" stroke-width="2.5" points="18,17 32,35" stroke-linecap="round" stroke-linejoin="round" />
				<polyline class="hsycms-alert-svgca2" fill="none" stroke="#f54655" stroke-width="2.5" points="18,35 32,17" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		<div class="hsycms-model-text">这里是内容</div>
		<div class="hsycms-model-btn error">
			<button type="button ok">确定</button>
		</div>
	</div>
	<script>
		function hsycms(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-alert').show();
			$('#alert').show();	
			$('#mask-error').hide();
			$('#error').hide();
		}
		function hsycmserror(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-error').show();
			$('#error').show();	
			$('#mask-alert').hide();
			$('#alert').hide();
		}
		$('.alert button').click(function () {
			$('#mask-alert').hide();
			$('#alert').hide();
		})
		$('.error button').click(function () {
			$('#mask-error').hide();
			$('#error').hide();
		})
	</script>

	<script>
    	function check_form(obj) {
    		$.ajax({
    			url : "/register",
    			type : 'POST',
    			data : $("#form2").serialize(),
    			success : function (data) {
    				if(data.sign==true){
    					Dialog.waiting();
    					window.setTimeout(function () {
    						Dialog.close();
    						Dialog.waiting('恭喜你!注册成功');
    						window.setTimeout(function () {
    							window.location.href ="/home";
    						}, 500)
    					}, 500)
    				}else{
    					Dialog.waiting();
    					window.setTimeout(function () {
    						Dialog.close();
    						hsycmserror(data.message);
    					}, 500)
    				}
    			}
    		})
    		return false;
    	}
    </script>


	
</body>
</html>
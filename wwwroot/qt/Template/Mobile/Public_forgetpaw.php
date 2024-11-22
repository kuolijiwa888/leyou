<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>找回密码 - {:GetVar('webtitle')}线上平台</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<script src="__JS__/jquery-3.1.1.min.js"></script> 
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		请输入您要找回的账号
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="gaimi">
		<form action="/forgetPwd" method="post" onSubmit="return check_login(this)" id="form1">
			<div class="gaimi-top">
				<ul>
					<li>
						<div class="gaimi-top-name">账号:</div>
						<div class="gaimi-top-mima"><input type="text" id="userName" name="userName" placeholder="请输入您要找回的账号"></div>
					</li>
				</ul>
				<div class="gaimi-top-button"><button type="submit"> 下一步</button></div>
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
		function check_login(obj) {
			var oForm = document.getElementById('form1');
			var oUser = document.getElementById('userName');
			if(oUser==''){ 
				hsycmserror('请输入您要找回的账号');
				return false;
			}
			$.ajax({
				url : "/forgetPwd",
				type : 'POST',
				data : $("#form1").serialize(),
				success : function (data) {
					if(data.sign==true){
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							Dialog.waiting(data.message);
							window.setTimeout(function () {
								window.location.href ="/userCenter/verifySafePwd";
							}, 500);
						}, 500);
					}else{
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							hsycmserror(data.message);
						}, 500);
					}
				}
			})
			return false;
		}
	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆账号 - {:GetVar('webtitle')}线上平台</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="shortcut icon" href="/favicon.ico">
	<script src="__JS__/jquery-3.1.1.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/by-login.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/swiper-bundle.min.css">
	<script src="/ascn/mobile/js/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

	

</head>
<body>
	<div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
	<div class="by-login-bj"></div>

	<div class="logo-name">
		<div class="logo222">
			<div class="img"><img src="/ascn/mobile/images/logo222.png"></div>
			<div class="name222"><span>{:GetVar('webtitle')}线上平台</span></div>
		</div>
	</div>
	<div class="bykuang">
		<div class="top1">
			<div class="curr"><span>登录</span></div><div><span>注册</span></div>
		</div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<form method="post" class="ruivalidate_form_class wudi swiper-slide" onSubmit="return check_login(this)" id="form1" checkby_ruivalidate url="" action="{:U('Public/logindo')}">
					<div style="padding-left: .2rem;padding-right: .2rem;">

						<div class="top2">
							<div><i class="iconfont">&#xe634;</i><input type="text" name="name" id="account" placeholder="请输入登录账号"></div>
							<div class="top2-2"><i class="iconfont">&#xe641;</i><input type="password" name="pass" id="pwd" ascn="1" placeholder="请输入登录密码"><i class="right iconfont">&#xe679;</i></div>
						</div>
						<div class="top3">
							<div class="jizhu"><input type="checkbox" id="remember">记住密码</div>
							<a id="ascn">忘记密码？</a>
						</div>
						<div class="top4">
							<button type="submit">登录</button>
						</div>
					</div>
				</form>
				<form method="post" action="/register"  class="ruivalidate_form_class swiper-slide" onSubmit="return check_form(this)" id="form2">
					<div style="padding-left: .2rem;padding-right: .2rem;">

						<div class="top2">
							<if condition="$defaulttjcode neq 0">
								<span style="font-size: 0.14rem;color: #5a5a5a;"><em>无邀请码请填"{$defaulttjcode}"</em></span>
							</if>
							<div ><i class="iconfont">&#xe7aa;</i><input type="text" <if condition="$tgid neq ''">readonly</if> value="{$tgid}" name="reccode" id="reccode" placeholder="请输入邀请码"></div>
							<div class="top2-2"><i class="iconfont">&#xe634;</i><input type="text" name="username" id="username" placeholder="请输入账号"></div>
							<div class="top2-2"><i class="iconfont">&#xe641;</i><input type="password" name="password" id="password" placeholder="请输入密码"></div>
							<div class="top2-2"><i class="iconfont">&#xe641;</i><input type="password" name="cpassword" id="cpassword" placeholder="请再次输入密码"></div>
							<div class="top2-2"><i class="iconfont">&#xe661;</i><input type="password" name="tradepassword" id="tradepassword" placeholder="请输入资金密码"></div>
						</div>
						<div class="top5">
							<button type="submit">注册</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>

	<div class="wangji animated dibutop" style="display:none;">
		<div class="zhaohui" onclick="window.location.href ='/forgetPwd'">找回密码</div>
		<div class="quxiao">取消</div>
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
		var swiper = new Swiper('.swiper-container', {
			autoHeight : true,
			scrollbar: {
				el: '.swiper-scrollbar',
				hide: false,
			},
			on: {
				slideChangeTransitionStart: function() {
					$(".top1 .curr").removeClass('curr');
					$(".top1 div").eq(this.activeIndex).addClass('curr');
				}
			}
		});
		$(".top1 div").on('click', function(e) {
			e.preventDefault()
			$(".top1 .curr").removeClass('curr')
			$(this).addClass('curr')
			swiper.slideTo($(this).index())
		})
	</script>
	<script>
		$('#as').click(function(){
			$('#denglv').show();
			$('#zhuce').hide();
		})
		$('#ac').click(function(){
			$('#denglv').hide();
			$('#zhuce').show();
		})
		$(".right").click(function(){
			if($("#pwd").attr("ascn") == 1){
				$('#pwd').attr("type","text")
				$('#pwd').attr("ascn","2")
				$('.right').html("&#xe640;")
			}else{
				$('#pwd').attr("type","password")
				$('#pwd').attr("ascn","1")
				$('.right').html("&#xe679;")
			}
		});
		$('#ascn').click(function(){
			$('body').addClass('niubihh');
			$('.alert_bj').show();
			$('.wangji').show();
		})
		$('.quxiao').click(function(){
			$(".wangji").removeClass("dibutop ");
			$(".wangji").addClass("dibubottom");
			setTimeout(function(){
				$('.alert_bj').hide();
				$('.wangji').hide();
				$(".wangji").removeClass("dibubottom ");
				$(".wangji").addClass("dibutop");
			},200);
		})
		$('.alert_bj').click(function(){
			$(".wangji").removeClass("dibutop ");
			$(".wangji").addClass("dibubottom");
			setTimeout(function(){
				$('.alert_bj').hide();
				$('.wangji').hide();
				$(".wangji").removeClass("dibubottom ");
				$(".wangji").addClass("dibutop");
			},200);
		})
		function check_login(obj) {
			var oForm = document.getElementById('form1');
			var oUser = document.getElementById('account');
			var oPswd = document.getElementById('pwd');
			var oRemember = document.getElementById('remember');
			if(remember.checked){ 
				setCookie('account',oUser.value,7); //保存帐号到cookie，有效期7天
			    setCookie('pwd',oPswd.value,7); //保存密码到cookie，有效期7天
			}
			$.ajax({
				url : "{:U('Public/LoginDo')}",
				type : 'POST',
				data : $("#form1").serialize(),
				success : function (data) {
					if(data.sign==true){
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							Dialog.waiting(data.message);
							window.setTimeout(function () {
								window.location.href ="/home";
							}, 500)
						}, 500)
					}else{
						if(data.message=="你的帐号已在别处登陆，是否重新登陆"){
							if(confirm('你的帐号已在别处登陆，是否重新登陆')){
								$.ajax({
									url : "{:U('Public/LoginDo')}",
									type : "POST",
									data : {
										name : $("input[name=name]").val(),
										pass :$("input[name=pass]").val(),
										nocode : true,
									},
									success : function (json) {
										Dialog.waiting();
										window.setTimeout(function () {
											Dialog.close();
											Dialog.waiting(data.message);
											window.setTimeout(function () {
												window.location.href ="/home";
											}, 500)
										}, 500)
									}
								})
							}
						}else{
							Dialog.waiting();
							window.setTimeout(function () {
								Dialog.close();
								hsycmserror(data.message);
							}, 500)
						}
					}
				}
			})
			return false;
		}

		window.onload = function(){
			var oForm = document.getElementById('form1');
			var oUser = document.getElementById('account');
			var oPswd = document.getElementById('pwd');
			var oRemember = document.getElementById('remember');
            //页面初始化时，如果帐号密码cookie存在则填充
            if(getCookie('account') && getCookie('pwd')){
            	oUser.value = getCookie('account');
            	oPswd.value = getCookie('pwd');
            	oRemember.checked = true;
            }
            //复选框勾选状态发生改变时，如果未勾选则清除cookie
            oRemember.onchange = function(){
            	if(!this.checked){
            		delCookie('account');
            		delCookie('pwd');
            	}
            };
        };
        //设置cookie
        function setCookie(name,value,day){
        	var date = new Date();
        	date.setDate(date.getDate() + day);
        	document.cookie = name + '=' + value + ';expires='+ date;
        };
        //获取cookie
        function getCookie(name){
        	var reg = RegExp(name+'=([^;]+)');
        	var arr = document.cookie.match(reg);
        	if(arr){
        		return arr[1];
        	}else{
        		return '';
        	}
        };
        //删除cookie
        function delCookie(name){
        	setCookie(name,null,-1);
        };
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
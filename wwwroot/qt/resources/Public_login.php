<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{:GetVar('webtitle')} - 用户登录</title>
	<!-- 爱尚互联 -->
	<link rel="stylesheet" href="/ascn/css/login.css"/>
	<link rel="stylesheet" href="/ascn/css/jquery.slider.css"/>
	<!-- 爱尚互联 -->

	<!-- 爱尚互联 -->
	<script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script>

	<script type="text/javascript" src="__JS__/index.js"></script> 

	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="/ascn/js/f4fcf2db5e094dc08596554bf2d8d6f6.js"></script>
	<script type="text/javascript" src="/ascn/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/ascn/js/jquery.md5.js"></script>
	<script type="text/javascript" src="/ascn/js/json2.js"></script>
	<script type="text/javascript" src="/ascn/js/jquery.dialogui.js"></script>
	<script type="text/javascript" src="/ascn/js/jquery.dragdrop.js"></script>
	<link href="/ascn/css/dialogui.css" media="all" type="text/css" rel="stylesheet">
	<link href="/ascn/css/reg.css" media="all" type="text/css" rel="stylesheet">
	<script src="/ascn/js/base64.js"></script>
	<script src="/ascn/js/jsbn.js"></script>
	<script src="/ascn/js/prng4.js"></script>
	<script src="/ascn/js/rng.js"></script>
	<script src="/ascn/js/rsa.js"></script>
	<script src="/ascn/js/conf.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<script src="/ascn/js/jquery.slider.min.js"></script>

	<style>
		html, body {
			height: 100%;
		}
		body {
			background-image: linear-gradient(-180deg, #1c1727 0%, #27203e 100%);
		}
		.eycforTitleTxtRight {
			float: left;
			margin-left: 55px;
		}

		.eycforTitleTxtLeft {
			float: right;
			margin-right: 55px;
		}

		.eycforTitleTxtLeft .eycforTitleTxtLeftLang1675 {
			cursor: pointer;
		}

		.eycforTitleTxtLeft .eycforTitleTxtLeftLangB1675 {
			color: #fc8027;
		}

		.branch_module {
			position: relative;
			display: flex;
			justify-content: center;
			align-items:center;
			top: 30px;
			height: 95px;
		}
		.logo_index {
			flex: 1;
			text-align: center;
		}
		.logo_index img {
			width: 204px;
		}
		.auth_index {
			flex: 1;
			text-align: center;
		}
		.auth_index img {
			width: 78px;
			margin-left: -70px;
		}
		input::-webkit-input-placeholder {
			font-family: MicrosoftYaHei;
			font-size: 14px;
			line-height: 14px;
			color: #000;
		}
		.login_name, .pass_word,.user_name,.v_code,.re_fresh {
			display: inline-block;
			width: 16px;
			height: 16px;
			left: 0px;
			top: 10px!important;
		}

		.re_fresh {
			display: inline-block;
			width: 16px;
			height: 16px;
			top: 8px!important;
			left: 202px;
		}

		.v_code img{
			height: 19px;
			padding-top: 2px;
		}
		.re_fresh img {
			display: inline-block;
			width: 16px;
			height: 16px;
			top: 8px;
		}

		.footer {
			width: 100%;
			height: 88px;
			position: absolute;
			bottom: 0;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
		}
		@media screen and (max-height: 730px){
			.footer {
				display: none!important;
			}
		}
		.footer .footer_detail {
			width: 1000px;
			margin: 0px auto!important;
			margin-top: 5px !important;
		}

		.footer .footer_detail {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: space-between;
		}

		.footer .footer_detail span,.footer .footer_detail a{
			display: inline-block;
			line-height: 20px;
			margin-left: 7px;
		}

		.footer .footer_detail span img{
			display: inline-block;
			width: 48px;
			height: 48px;
			line-height: 48px;
		}
		.footer-detail__item {
			text-align: center;
		}
		.constant_time,.user_total,.money_total,.about_us {
			display: inline-block;
			/* width: 218px!important; */
			font-family: MicrosoftYaHei;
			color: #fff;
			text-align: left;
			margin-left: 10px!important;
			font-size: 14px;
			position: relative;
			bottom: 18px;
		}
		.footer_foot {
			opacity: 0.4;
			font-family: MicrosoftYaHei;
			font-size: 12px;
			color: #FFFFFF;
			letter-spacing: 0.56px;
			text-align: center;
			margin-top: 0;
		}

		#mask {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 999;
			opacity: 0.5;
			filter: alpha(opacity=50);-moz-opacity: 0.5;
			display: none;
			background: rgba(0,0,0,0.73);
		}
		.popup {
			position: absolute;
			left: 50%;
			width: 350px;
			height: 220px;
			z-index: 1000;
			display: none;
			background: #F5F5F5;
			border-radius: 8px;
		}
		.btn_close {
			position: absolute;
			top: 7px;
			right: 7px;
			font-size: 24px;
			cursor: pointer;
			width: 30px;
			height: 30px;
			line-height: 26px;
			text-align: center;
		}

		.btn_close:hover {
			color: red;
		}

		.logo_qq {
			background: url(/ascn/images/qq.png) top center no-repeat;
			width: 92px;
			height: 92px;
			background-size: contain;
			position: absolute;
			left: 36.5%;
			bottom: 170px;
		}

		.content_qq {
			background: #FFFFFF;
			border: 1px solid #E5E5E5;
			width: 310px;
			height: 86px;
			margin: 0px auto;
			margin-top: 63px;
			text-align: center;
		}

		.content_a {
			font-family: MicrosoftYaHei;
			font-size: 18px;
			color: #333333;
			display: inline-block;
			margin-top: 18px;
		}

		.content_b,.content_c {
			font-family: MicrosoftYaHei;
			font-size: 16px;
			color: #333333;
			display: inline-block;
		}
		.content_c {
			width: 100px;
			letter-spacing: 0.6px;
			border: 0px;
		}

		.copy_bn {
			background: url(/ascn/images/copy_qq_bn.png) top center no-repeat;
			width: 120px;
			height: 30px;
			line-height: 30px;
			margin: 0 auto;
			margin-top: 18px;
			text-align: center;
			cursor: pointer;
		}

		.copy_bn img {
			position: relative;
			right: 5px;
			top: 2px;
		}

		.act {
			transform:rotate(360deg);
			-ms-transform:rotate(360deg);    /* IE 9 */
			-moz-transform:rotate(360deg);   /* Firefox */
			-webkit-transform:rotate(360deg); /* Safari 和 Chrome */
			-o-transform:rotate(360deg);    /* Opera */
			transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out; /* Firefox 4 */
			-webkit-transition: all 0.5s ease-in-out; /* Safari 和 Chrome */
			-o-transition: all 0.5s ease-in-out; /* Opera */
		}

		.eycmain-footer {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 38px;
			display: flex;
			align-items: center;
			padding: 0 30px;
			justify-content: space-between;
		}

		.eycmain-footer__left,
		.eycmain-footer__right
		{
			width: 100%;
			height: 100%;
			display: block;
			align-items: center;
		}
		.eycmain-footer__left {
			display: none;
		}
		.eycmain-footer__left img {
			width: 14px;
			vertical-align: middle;
			height: 14px;
		}
		.eycmain-footer__left span {
			opacity: 0.7;
			font-size: 12px;
			color: #000;
			letter-spacing: 0;
			margin: 0 6px;
			vertical-align: middle;
		}
		.eycmain-footer__left a {
			font-size: 12px;
			color: #000;
			vertical-align: middle;
		}
		.eycmain-footer__loading {
			font-size: 12px;
			color: #000;
			opacity: .7;
		}
		.eycmain-footer__right a {
			font-size: 12px;
			color: rgba(255,255,255,0.60);
			margin-left: 6px;
			transition: color .4s ease;
		}
		.eycmain-footer__right a:hover {
			color: #D2AD6F;
		}
		.eycmain-footer__right img {
			width: 18px;
			height: 18px;
		}
		.about_us:hover{
			color: #D2AD6F;
		}
	</style>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="ocean">
		<div class="wave"></div>
		<div class="wave"></div>
	</div>
	<div id="speedtest-Bglock"></div>
	<div class='eyccontent1605'>
		<div class='eycmainMid1605'>
			<div class="eycrightScroll">
				<div class="middle_left">
					<div id="lunbobox">
						<div class="lunbo">
							<a href="#"><img src="/ascn/picture/597x510_.jpg"></a>
							<a href="#"><img src="/ascn/picture/597x510.jpg"></a>
						</div>
						<ul>
							<li style="background: #FFFFFF;" class="{ld_0}"></li>
							<li></li>
						</ul>
						<span></span>
					</div>
				</div>
			</div>
			<div class='eycrightBlock'>
				<div class="login-fhlm">
					<a href="http://www.fhlm.com/" target="_blank" class="fhlm-logo">
						<img src="/ascn/picture/fhlm-logo.png" alt="">
					</a>
				</div>
				<div class="branch_module">
					<div class="logo_index">
						<img src="/ascn/picture/logo_index.png" alt="" style="">
					</div>
				</div>
				<form method="post" onsubmit="return check_login(this)" id="ruivalidate_form_class" checkby_ruivalidate url="" action="{:U('Public/logindo')}">
					<div id="username_err" class='eycinputName1605 eycinputStyle'>
						<div class="login_name"></div>
						<input name="name" id="username" type="text" maxlength="20" placeholder='请输入您的用户名'>
						<i class="error-icon"></i>
					</div>
					<div id="password_err" class='eycinputPassa1605 eycinputStyle'>
						<div class="pass_word"></div>
						<input name="pass" id="loginpass" type="password" maxlength="20" placeholder='请输入您的密码'>
						<i class="error-icon"></i>
					</div>
					<div class="btn bywebyanzheng" style="display:none;">
						<span class="no"><i></i> 请点击按钮验证</span>
						<span class="ok"style="display:none"><i></i>已完成验证</span>
					</div>
					<div id="slider1" class="slider" style="width: 240px;height: 34px;">
						<div class="ui-slider-wrap" style="background-color: rgb(232, 232, 232);">
							<div class="ui-slider-text ui-slider-no-select" style="line-height: 34px; font-size: 12px; color: rgb(102, 102, 102);">
								请按住滑块，拖动到最右边
							</div>
							<div class="ui-slider-btn init ui-slider-no-select" style="width: 34px; height: 34px; line-height: 34px;">
							</div>
							<div class="ui-slider-bg" style="height: 34px; background-color: rgb(122, 194, 60);">
							</div>
						</div>
					</div>
					<span id="result1"></span>
					<pre>
						$("#slider1").slider({ callback: function(result) { $("#result1").text(result);
					} });
				</pre>
				<div class="vcode-holder" style="display: none;">
					<div id="code_err" class='eycinputCheck1605 eycinputStyle show'>
						<div class="v_code"></div>
						<input name="code" type="text" id="code" placeholder='验证码'>
						<div class='eycrefreshBtn1601'><img align="absbottom" valign="bottom" style="cursor:pointer; border: 0px solid #999;height: 28px; width: 80px" id="validate" name="validate" src="/ascn/picture/63241a83a565411aab3b03f6c1fb21f2.gif"></div>
						<i class="error-icon"></i>
					</div>
					<div class="tips_reg" id="tips_reg"></div>
				</div>




				<input type="submit" style="border: 0;" value="立即登录" disabled="disabled" class="eycclickSubmit1601"/>
			</form>
			<div class="form-btns-section">
				<a href="javascript:void(0);" onclick="zhmm();" class="client-title-wrapper"style="bottom: 175px;right: -82px;text-decoration:none;">找回密码</a>
				<div class="client-title-wrapper">
					<div class="client-title-line"></div>
					<div class="client-title">客户端</div>
				</div>
				<div class="client-btns-wrapper">
					<div class="client-btns">
						<div class="pc-btn client-btn">
							<a href="#" target="_blank">
								<img src="/ascn/picture/icon_pc.png" alt="">
								<span>PC客户端</span>
							</a>
						</div>
						<div class="mobile-btn client-btn">
							<a href="http://leyouapp.leyou88.cn/" target="_blank">
								<img src="/ascn/picture/icon_phone.png" alt="">
								<span>手机客户端</span>
							</a>
							<div class="qrcode-area">
								<img src="/ascn/picture/app_qrcode.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="eycmain-footer">
				<div class="eycmain-footer__loading" id="eycmainOnlineLoading">
					正在为您检测当前线路，请稍等
				</div>
				<div class="eycmain-footer__left" id="eycmainOnline">
					<img src="/ascn/picture/fast.png" alt="">
					<span>当前线路状态不佳，</span>
					<a href="http://leyou88.cn">立即更换</a>
				</div>

			</div>
		</div>
	</div>
</div>
<div class='footer'>
	<div class="footer_detail">
		<div class="footer-detail__item">
			<span><img src="/ascn/picture/constant_time.png" alt=""></span><span class="constant_time">已持续安全运营：<span id="dayNums">6400</span> 天</span>
		</div>
		<div class="footer-detail__item">
			<span><img src="/ascn/picture/user_total.png" alt=""></span><span class="user_total">累积注册：<span id="regNums">1040600</span> 名用户</span>
		</div>
		<div class="footer-detail__item">
			<span><img src="/ascn/picture/money_total.png" alt=""></span><span class="money_total">今日累计派奖：￥<span id="bonusNums">17021682</span> 元</span>
		</div>
		<div class="footer-detail__item">
			<span><img src="/ascn/picture/icon_about.png" alt=""></span><a class="about_us" href="#" target="_blank">关于我们</a>
		</div>
	</div>

</div>
<a id="customer_service" target="_blank" class="login-sound" href="javascript:void(0);">
	<img src="/ascn/picture/icon_customer.png">
</a>

<script type="text/javascript" src="__JS__/jquery.form.min.js"></script><!-- Jquery form表单提交 -->
<script type="text/javascript" src="__JS__/jquery.ruiValidate.js"></script><!-- 表单验证的js文件 -->
<script type="text/javascript" src="__JS__/jquery.kinMaxShow-1.1.min.js"></script>

<!-- 调用插件 -->
<script>
	$("#slider1").slider({
		callback: function(result) {
			$("#result1").text(result);
		}
	});
</script>
<script type="text/javascript">

	function zhmm(){
		Dialog({
			title: "找回密码",
			width: 580,
			draggable: true,
			iframeContent: {
				src: "/forgetPaw",
				height: 450
			},
			showButton: false
		});
	}
	function check_login(obj){
		var text = $('#result1').text();
		if (text == ''||text == 'false') {
			Dialog.waiting();
			window.setTimeout(function () {
				Dialog.close();
				Dialog.warn('温馨提示','请滑动验证');
			}, 500)
			return false;
		}else if(text == 'true'){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.sign==1){
					Dialog.waiting();
					window.setTimeout(function () {
						Dialog.close();
						Dialog.waiting(json.message);
						window.setTimeout(function () {
							window.location.href ="/home";
						}, 500)
					}, 500)
				}else{
					if(json.message=="你的帐号已在别处登陆，是否重新登陆"){
						if(confirm('你的帐号已在别处登陆，是否重新登陆')){
							$.ajax({
								url : $(obj).attr('action'),
								type : "POST",
								data : {
									name : $("input[name=name]").val(),
									pass :$("input[name=pass]").val(),
									nocode : true,
								},
								success : function (json) {
									Dialog.waiting(json.message);
									window.location.href = "/home";
								}
							})
						}
					}else{
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							Dialog.warn('温馨提示',json.message);
						}, 500)
					}
				}
			},'json');
			return false;
		}
	}
</script>
<script type="text/javascript">
	(function($){
		var t;
		var index = 0;
		t = setInterval(play, 3000)
		function play() {
			var len = $('.lunbo a').length - 1
			index++;
			if (index > len) {
				index = 0
			}
			$("#lunbobox ul li").eq(index).css({
				"background": "#888888",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			}).siblings().css({
				"background": "#FFFFFF",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			})
			$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000);
		};
		$("#lunbobox ul li").click(function () {

			$(this).css({
				"background": "#888888",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			}).siblings().css({
				"background": "#FFFFFF",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			})
			var index = $(this).index(); 
			$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); 
		});
		$("#lunbobox ul li").mouseover(function () {
			$(this).css({
				"background": "#888888",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			}).siblings().css({
				"background": "#FFFFFF",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			})
			var index = $(this).index(); 
			$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); 
		});
		$("#toleft").click(function () {
			var len = $('.lunbo a').length - 1
			index--;
			if (index <= 0) 
			{
				index = len
			}
			$("#lunbobox ul li").eq(index).css({
				"background": "#888888",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			}).siblings().css({
				"background": "#FFFFFF",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			})
			$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); 
		}); 
		$("#toright").click(function () {
			var len = $('.lunbo a').length - 1
			index++;
			if (index > len) {
				index = 0
			}
			$(this).css({
				"opacity": "0.5"
			})
			$("#lunbobox ul li").eq(index).css({
				"background": "#888888",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			}).siblings().css({
				"background": "#FFFFFF",
				"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
				"border-radius": "6px"
			})
			$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); 
		});
		$("#toleft,#toright").mouseover(function () {
			$(this).css({
				"color": "black"
			})
		})
		$("#toleft,#toright").mouseout(function () {
			$(this).css({
				"opacity": "0.3",
				"color": ""
			})
		})
		$("#lunbobox ul li,.lunbo a img,#toright,#toleft ").mouseover(function () {
			$('#toright,#toleft').show()
			clearInterval(t);
		})
		$("#lunbobox ul li,.lunbo a img,#toright,#toleft ").mouseout(function () {
			t = setInterval(play, 3000)
			function play() {
				var len = $('.lunbo a').length - 1
				index++;
				if (index > len) {
					index = 0
				}
				$("#lunbobox ul li").eq(index).css({
					"background": "#888888",
					"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
					"border-radius": "6px"
				}).siblings().css({
					"background": "#FFFFFF",
					"box-shadow": "0 0 4px 0 rgba(0,0,0,0.50)",
					"border-radius": "6px"
				})
				$(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000);
			}
		})
	})(jQuery);
</script>
<script type="text/javascript">
	(function($){
		var speedResult = {
			best: {
				icon: '/ascn/picture/fast.png',
				text: '当前线路已是最佳，请放心使用!'
			},
			normal: {
				icon: '/ascn/picture/middle.png',
				text: '当前线路状态不佳，'
			},
			slow: {
				icon: '/ascn/picture/slow.png',
				text: '当前线路状态很差，'
			},
			setSpeedHtml: function (status) {
				$('#eycmainOnline').css('display', 'block')
				$('#eycmainOnline img').attr('src', this[status].icon)
				$('#eycmainOnline span').html(this[status].text)
				if (status === 'best') {
					$('#eycmainOnline a').css('display', 'none')
				}
			}
		}
		createImg(function (loadTime) {
			$('#eycmainOnlineLoading').css('display', 'none')
			speedResult.setSpeedHtml(loadTime < 1 ? 'best' : loadTime >= 1 && loadTime < 2 ? 'normal' : 'slow')
		})
		$(function () {
			$('#toright').hover(function () {
				$("#toleft").hide()
			}, function () {
				$("#toleft").show()
			})
			$('#toleft').hover(function () {
				$("#toright").hide()
			}, function () {
				$("#toright").show()
			})
		})
	})(jQuery);
	function createImg (callback) {
		var img = document.createElement('img')
		img.src = location.origin + '/favicon.ico'
		img.style.display = 'none'
		var oldTime = new Date().getTime()
		var loadTime = 0
		img.onload = function () {
			loadTime = new Date().getTime() - oldTime
			callback(loadTime / 1000)
		}
		img.onerror = function () {
			loadTime = 0
			callback(loadTime)
		}
		document.body.appendChild(img)
	}
	$(function(){
		function checkInput(){
			var userFlag = $('#username').val() != ''
			var pwdFlag = $('#loginpass').val() != ''
			var vcodeFlag = $('#code').val() != ''
			var vDisplayFlag = $('#code_err').hasClass('show')
			if(userFlag ){
				if(!$('.login_name').hasClass('color')){
					$('.login_name').addClass('color')
				}
			}else{
				$('.login_name').removeClass('color')
			}
                //console.log(pwdFlag)
                if(pwdFlag){
                	if(!$('.pass_word').hasClass('color')){
                		$('.pass_word').addClass('color')
                	}
                }else{
                	$('.pass_word').removeClass('color')
                }

                
                if(userFlag && pwdFlag){

                	if(!$('.eycclickSubmit1601').hasClass('color')){
                		$('.eycclickSubmit1601').addClass('color')
                		$('.eycclickSubmit1601').attr("disabled",false);

                	}
                }else{
                	$('.eycclickSubmit1601').removeClass('color')
                	$('.eycclickSubmit1601').attr("disabled",true);
                }
            }
            setTimeout(checkInput, 2000)
            $('.eycinputStyle input').keyup(function () {
            	checkInput()
            })
            $('.eycinputStyle input').focus(function () {
            	checkInput()
            })
            $('.eycinputStyle input').blur(function () {
            	checkInput()
            })
        })
    </script>
</body>
</html>

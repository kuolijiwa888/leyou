<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{:GetVar('webtitle')} - 用户注册</title>
	<link rel="stylesheet" href="/ascn/css/login.css"/>
	<!-- 爱尚互联 -->

	<script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script>

	<script type="text/javascript" src="__JS__/index.js"></script> 

	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>

	<!-- 爱尚互联 -->
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
		.login_code, .login_name, .pass_word, .pass_qword, .pass_zword, .user_name, .v_code, .re_fresh {
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
				<form method="post" id="form1" checkby_ruivalidate  onSubmit="return check_form(this)"  action="/register">
					<input type="hidden" name="action" value="register_agent" />
					<assign name="defaulttjcode" value="$Think.config.defaulttjcode" /> 
					<if condition="$defaulttjcode neq '0'  ">
						<span style="font-size: 12px;color: #333333;">无推荐代码请输入：{$defaulttjcode}</span>
					</if>
					<div id="username_err" class='eycinputName1605 eycinputStyle'>
						<div class="login_code"></div>
						<present name="linkinfo"><input type="hidden" name="linkid" value="{$linkinfo.id}"  /></present>
						<input name="reccode" type="text" id="reccode" maxlength="20" <if condition="$tgid neq ''">readonly</if> value="{$tgid}" class="input fadeIn delay1" placeholder="请输入4-12位的推荐代码">
						<i class="error-icon"></i>
					</div>
					<div id="username_err" class='eycinputName1605 eycinputStyle'>
						<div class="login_name"></div>
						<input name="username" type="text" id="userName" maxlength="20" placeholder='请输入用户名' datatype="/[\w\W]+/" ajaxurl="{:U('Public/checkusername')}">
						<i class="error-icon"></i>
					</div>
					<div id="password_err" class='eycinputPassa1605 eycinputStyle'>
						<div class="pass_word"></div>
						<input name="password" type="passWord" id="passWord" maxlength="20" placeholder='请输入密码' datatype="s6-16">
						<i class="error-icon"></i>
					</div>
					<div id="password_err" class='eycinputPassa1605 eycinputStyle'>
						<div class="pass_qword"></div>
						<input name="cpassword" type="password" id="qpassWord" maxlength="20" placeholder='请再次输入密码' datatype="*6-16">
						<i class="error-icon"></i>
					</div>
					<div id="password_err" class='eycinputPassa1605 eycinputStyle'>
						<div class="pass_zword"></div>
						<input name="tradepassword" type="password" class="qpassWord" id="qpassWord" maxlength="20" placeholder='请输入资金密码' datatype="*6-16">
						<i class="error-icon"></i>
					</div>
					<div class="vcode-holder">
						<div id="code_err" class='eycinputCheck1605 eycinputStyle show'>
							<div class="v_code"></div>
							<input name="code" type="text" id="code" placeholder='验证码' maxlength="10">
							<div class='eycrefreshBtn1601'>
								<img align="absbottom" valign="bottom" style="cursor:pointer; border: 0px solid #999;height: 100%; width: 100%;" id="validate" name="validate" src="{:U('Public/verify',array('imageW'=>130,'imageH'=>40,'fontSize'=>18))}" onclick="this.src=this.src+'?temp='+ 1">
							</div>
							<i class="error-icon"></i>
						</div>
					</div>
					<input type="checkbox" checked="checked" name="age" style="display: none;" />
					<input  type="submit" id="submit" class="eycclickSubmit1601" style="border: 0;" value="立即注册" disabled="disabled"/>
				</form>
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
				<span><img src="/ascn/picture/icon_about.png" alt=""></span><a class="about_us" href="http://www.admin404.com/" target="_blank">关于我们</a>
			</div>
		</div>

	</div>
	<a id="customer_service" target="_blank" class="login-sound" href="javascript:void(0);">
		<img src="/ascn/picture/icon_customer.png">
	</a>

	<script type="text/javascript" src="__JS__/Validform_v5.3.2.js"></script>
	<script type="text/javascript" src="__JS__/passwordStrength-min.js"></script>
	<script type="text/javascript">
		function check_form(obj){

			if(!$('input[name=age]').is(':checked')){
				Dialog.warn('温馨提示','禁止未成年人注册');
				return false;
			}
			$.ajax({
				url : "/register",
				type : 'POST',
				data : {
					linkid         :   $('input[name=linkid]').val(),
					code           :   $('input[name=code]').val(),
					cpassword      :   $('input[name=cpassword]').val(),
					password       :   $('input[name=password]').val(),
					reccode        :   $('input[name=reccode]').val(),
					tradepassword  :   $('input[name=tradepassword]').val(),
					username       :   $('input[name=username]').val(),
				},
				success : function(json){
					if(json.sign==1){
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							Dialog.waiting('恭喜您注册成功，感谢您的加入!');
							window.setTimeout(function () {
								window.location.href ="/home";
							}, 500)
						}, 500)
					}else{
						Dialog.waiting();
						window.setTimeout(function () {
							Dialog.close();
							Dialog.warn('温馨提示',json.message);
						}, 500)
					}
				}
			})

			return false;
		}
	</script>
	<script type="text/javascript">
		(function($){
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


		$(function(){
			function checkInput(){
				var codeFlag =$('#reccode').val() !=''
				var userFlag = $('#userName').val() != ''
				var pwdFlag = $('#passWord').val() != ''
				var qrpwdFlag = $('#qpassWord').val() != ''
				var zjpwdFlag = $('.qpassWord').val() != ''
				var vcodeFlag = $('#code').val() != ''
				var vDisplayFlag = $('#code_err').hasClass('show')
				var vFlag = !(vDisplayFlag^vcodeFlag)
				if(codeFlag ){
					if(!$('.login_code').hasClass('color')){
						$('.login_code').addClass('color')
					}
				}else{
					$('.login_code').removeClass('color')
				}

				if(userFlag ){
					if(!$('.login_name').hasClass('color')){
						$('.login_name').addClass('color')
					}
				}else{
					$('.login_name').removeClass('color')
				}

				if(pwdFlag){
					if(!$('.pass_word').hasClass('color')){
						$('.pass_word').addClass('color')
					}
				}else{
					$('.pass_word').removeClass('color')
				}

				if(qrpwdFlag){
					if(!$('.pass_qword').hasClass('color')){
						$('.pass_qword').addClass('color')
					}
				}else{
					$('.pass_qword').removeClass('color')
				}

				if(zjpwdFlag){
					if(!$('.pass_zword').hasClass('color')){
						$('.pass_zword').addClass('color')
					}
				}else{
					$('.pass_zword').removeClass('color')
				}

				if(vFlag){
					if(!$('.v_code').hasClass('color')){
						$('.v_code').addClass('color')
					}
				}else{
					$('.v_code').removeClass('color')
				}
				if(codeFlag && userFlag && pwdFlag && qrpwdFlag && zjpwdFlag && vFlag){

					if(!$('.eycclickSubmit1601').hasClass('color')){
						$('.eycclickSubmit1601').addClass('color');
						$('#submit').attr('disabled',false);
					}
				}else{
					$('.eycclickSubmit1601').removeClass('color');
					$('#submit').attr('disabled',true);
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

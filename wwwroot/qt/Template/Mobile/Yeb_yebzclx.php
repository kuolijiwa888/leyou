<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>余额宝 - {:GetVar('webtitle')}线上平台</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/yeb.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<!--头部-->
	<header class="gamesheader yeb-zr">
		转出余额宝
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1"style="color: #000;">&#xe677;</i></a>
		<a><i class="iconfont icon-2"style="font-size: 0;">&#xe646;</i></a>
	</header>
	<div class="yeb-zhuan">
		<div class="yeb-zhuan-title">
			<div class="zhuan-title-1" onclick="window.location.href='/yebCenter/yebzchq'">
				<span>活期转出</span>
			</div>
			<div class="zhuan-title-2 active" onclick="window.location.href='/yebCenter/yebzclx'">
				<span>利息转出</span>
			</div>
		</div>
		<div class="yeb-zhuan-start">
			<div class="yeb-zhuan-start-title">转出金额(元)</div>
			<div class="yeb-zhuan-start-cny">
				<div class="start-cny-1">￥</div>
				<div class="start-cny-2">
					<input type="text" id="camout" onkeyup="value=value.replace(/[^\d]/g,'').replace(/^0{1,}/g,'')" placeholder="请输入转出金额" maxlength="8">
				</div>
			</div>
		</div>
		<div class="yeb-zhuan-button">
			<button class="" id="lixioutzc">立即转出</button>
		</div>
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
		$(function(){
			function checkInput(){
				var userFlag = $('#camout').val();
				if(userFlag!==''){
					$('#lixioutzc').addClass('active');
					$('#lixioutzc').attr("disabled",false);
				}else{
					$('#lixioutzc').removeClass('active');
					$('#lixioutzc').attr("disabled",true);
				}
			};
			setTimeout(checkInput, 2000)
			$('#camout').keyup(function () {
				checkInput()
			})
			$('#camout').focus(function () {
				checkInput()
			})
			$('#camout').blur(function () {
				checkInput()
			})
		});
		$("#lixioutzc").click(function(){
			var amout=$("#camout").val();
			$.post("{:U('Member/zczx')}",{'amout':amout}, function(data){
				if(data.code==1){
					hsycms(data.msg);
					setTimeout(function() {
						window.location.href='/yebCenter/yebsy';
					}, 500);
				}else{
					hsycmserror(data.msg);
				}
			},'json');
		});
	</script>
</body>
</html>
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
		转入余额宝
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1"style="color: #000;">&#xe677;</i></a>
		<a><i class="iconfont icon-2"style="font-size: 0;">&#xe646;</i></a>
	</header>
	<div class="yeb-zhuan">
		<div class="yeb-zhuan-title">
			<div class="zhuan-title-1" onclick="window.location.href='/yebCenter/yebzrhq'">
				<span>活期转入</span>
			</div>
			<div class="zhuan-title-2 active">
				<span>定期转入</span>
			</div>
		</div>
		<div class="yeb-zhuan-dqxz">
			<div class="yeb-zhuan-img">
				<img src="/ascn/mobile/images/yebdqicon.png">
			</div>
			<div class="yeb-zhuan-input iconfont">
				<span id="yeb_data" data="">选择转入方案</span>
			</div>
		</div>
		<div class="yeb-zhuan-start">
			<div class="yeb-zhuan-start-title">转入金额(元)</div>
			<div class="yeb-zhuan-start-cny">
				<div class="start-cny-1">￥</div>
				<div class="start-cny-2">
					<input type="text" id="amout" onkeyup="value=value.replace(/[^\d]/g,'').replace(/^0{1,}/g,'')" placeholder="请输入转入金额" maxlength="8">
				</div>
			</div>
		</div>
		<div class="yeb-zhuan-button">
			<button class="" id="zhuanru" disabled="disabled">立即转入</button>
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

	<div class="yeb-bj" style="display:none"></div>
	<div class="yebzrfa yebtop" style="display:none">
		<div class="yebzrfa-title">
			<a class="iconfont yeb_a">&#xe64b;</a>
			转入方案
		</div>

		<div class="yebzrfa-notice" data="2">
			<div class="yebzrfa-notice-img">
				<img src="/ascn/mobile/images/yebdqicon.png">
			</div>
			<div class="yebzrfa-notice-ok iconfont">
				<span class="yeb_text">定期7天</span>
			</div>
		</div>

		<div class="yebzrfa-notice" data="4">
			<div class="yebzrfa-notice-img">
				<img src="/ascn/mobile/images/yebdqicon.png">
			</div>
			<div class="yebzrfa-notice-ok iconfont">
				<span class="yeb_text">定期30天</span>
			</div>
		</div>

		<div class="yebzrfa-notice" data="5">
			<div class="yebzrfa-notice-img">
				<img src="/ascn/mobile/images/yebdqicon.png">
			</div>
			<div class="yebzrfa-notice-ok iconfont">
				<span class="yeb_text">定期90天</span>
			</div>
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
				var userFlag = $('#amout').val();
				if(userFlag!==''){
					$('#zhuanru').addClass('active');
					$('#zhuanru').attr("disabled",false);
				}else{
					$('#zhuanru').removeClass('active');
					$('#zhuanru').attr("disabled",true);
				}
			};
			setTimeout(checkInput, 2000)
			$('#amout').keyup(function () {
				checkInput()
			})
			$('#amout').focus(function () {
				checkInput()
			})
			$('#amout').blur(function () {
				checkInput()
			})
		});
		$('.yeb-zhuan-dqxz').click(function(){
			$('.yebzrfa').show();
			$('.yeb-bj').show();
		});
		$('.yebzrfa-notice').click(function(){
			var type = $(this).attr('data');
			var text = $(this).find('.yeb_text').text();
			$('#yeb_data').attr('data',type);
			$('#yeb_data').text(text);
			$('.yebzrfa').removeClass('yebtop');
			$('.yebzrfa').addClass('yebbottom');
			setTimeout(function(){
				$('.yebzrfa').hide();
				$('.yeb-bj').hide();
				$('.yebzrfa').removeClass('yebbottom');
				$('.yebzrfa').addClass('yebtop');
			},200)
		});
		$('.yeb-bj').click(function(){
			$('.yebzrfa').removeClass('yebtop');
			$('.yebzrfa').addClass('yebbottom');
			setTimeout(function(){
				$('.yebzrfa').hide();
				$('.yeb-bj').hide();
				$('.yebzrfa').removeClass('yebbottom');
				$('.yebzrfa').addClass('yebtop');
			},200)
		});
		$('.yeb_a').click(function(){
			$('.yebzrfa').removeClass('yebtop');
			$('.yebzrfa').addClass('yebbottom');
			setTimeout(function(){
				$('.yebzrfa').hide();
				$('.yeb-bj').hide();
				$('.yebzrfa').removeClass('yebbottom');
				$('.yebzrfa').addClass('yebtop');
			},200)
		});
		$("#zhuanru").click(function(){
			var yeb_type = $('#yeb_data').attr('data');
			var amout = $("#amout").val();
			if(amout<100){
				hsycmserror("最低存入额100");
				return false;
			}
			if(yeb_type==''){
				hsycmserror("请选择存入类型");
				return false;
			}
			$.post("{:U('Yeb/deposit')}",{'yeb_type':yeb_type,'amout':amout}, function(data){
				console.log(data);
				if(data.code==1){
					hsycms(data.msg);
					setTimeout(function() {
						window.location.href='/yebCenter/yebdqcq';
					}, 500);
				}else{
					hsycmserror(data.msg);
				}
			},'json');

		});
	</script>
</body>
</html>
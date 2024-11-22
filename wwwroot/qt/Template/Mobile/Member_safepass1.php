<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/hsycmsAlert.css">
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		修改资金密码
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="gaimi">
		<form action="" method="post" id="form1" onsubmit="return checkform(this)">
			<div class="gaimi-top">
				<ul>
					<li>
						<div class="gaimi-top-name">原资金密码:</div>
						<div class="gaimi-top-mima"><input type="password" placeholder="请输入当前资金密码" name="oldpassword"></div>
					</li>
					<li>
						<div class="gaimi-top-name">新资金密码:</div>
						<div class="gaimi-top-mima"><input type="password" placeholder="请输入新资金密码" name="password"></div>
					</li>
					<li>
						<div class="gaimi-top-name">确认资金密码:</div>
						<div class="gaimi-top-mima"><input type="password" placeholder="再次输入新资金密码确认" name="password2"></div>
					</li>
					<li>
						<div class="gaimi-top-mima" style="float: right;"><a href="/userCenter/safepass">找回资金密码?</a>
					</li>
				</ul>
				<div class="gaimi-top-button"><button type="submit">确定</button></div>
			</div>
		</form>
		<div class="gaimi-bottom">
			<div class="gaimi-bottom-title">温馨提示</div>
			<div class="gaimi-bottom-p">
				<p>1.建议您使用字母和数字的组合、混合大小写、在组合中加入下划线等符号。</p>
				<p>2.资金密码用于提现、绑定银行卡等操作，可保障资金安全。</p>
			</div>
		</div>
	</div>
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
	
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
		}
		function hsycmserror(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-error').show();
			$('#error').show();	
		}
		$('.alert button').click(function () {
			$('#mask-alert').hide();
			$('#alert').hide();
		})
		$('.error button').click(function () {
			$('#mask-error').hide();
			$('#error').hide();
		})

		function checkform(obj){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.status==1){
					hsycms(json.info,'success');
					setTimeout(function(){
						window.location.reload();
					},2000);
				}else{
					hsycmserror(json.info);
				};
			},'json');
			return false;
		};
	</script>
</body>
</html>
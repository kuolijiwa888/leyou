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
		银行卡管理
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a href="/userCenter/withdraw"><i class="iconfont icon-2">&#xe69f;</i></a>
	</header>
	<div class="backguanli">
		<div class="backguanli-1">
			<ul>
				<volist name="banklist" id="vo">
					<li>
						<div class="back-1">
							<div class="back-11"><img src="__ROOT__/resources/images/bank/{$vo.banklogo}"></div>
							<span class="back-12">{$vo.bankname}</span>
							<eq name="vo.isdefault" value="1">
								<div style="float:right;line-height: .4rem;font-size:.13rem;color:#00968f"><span>默认</span></div>
								<else />
								<div style="float:right;line-height: .4rem;font-size:.13rem;color:#00968f"><span onclick="setdefault({$vo.id})">设为默认</span></div>
							</eq>
						</div>
						<p class="back-p-1">**** **** **** * {$vo.banknumber|substr=-4}</p>
						<p class="back-p-2">{$vo.accountname}<?php for($i=1;$i<=$vo['sartnum'];$i++){echo '*';}?></p>
					</li>
				</volist>
			</ul>
		</div>
		<div class="back-tips">
			<div style="padding-top: .65rem;padding-bottom: .1rem;">银行卡注意事项</div>
			<div style="padding:0 .1rem .1rem .1rem ;color:#777;font-size: 0.14rem;text-align: left;">
				<p>1.银行卡添加成功后，平台任何区域都不会出现您的完整的银行账号，开户名等信息。</p>
				<p>2.每个平台账号最多可以添加三张银行卡。</p>
				<p>3.每个账号只能添加同一个持卡人姓名的银行卡。</p>
				<p>4.添加/修改银行卡信息后，需 1 小时后方可提现。</p>
				<p>5.必须绑定银行卡后方可提现。</p>
			</div>
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
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
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
		function setdefault(id) {
			$.ajax({
				url : "{:U('Apijiekou/defaultuserbankcard')}",
				type : "POST",
				data : {
					id : id
				},
				success : function (data) {
					if(data.sign==1)
					{
						hsycms(data.message);
						setTimeout(function(){
							window.location.reload();
						},2000);

					}else{
						hsycmserror(data.message);
					}
				}
			})
		}
	</script>
</body>
</html>
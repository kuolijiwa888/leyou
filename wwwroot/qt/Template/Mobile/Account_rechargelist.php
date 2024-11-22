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
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		充值
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="chongz2">
		<a class="chongz-11" href="/userCenter/normalPayBank">
			<div class="chongz-1-img"><i class="iconfont">&#xe6c0;</i></div>
			<div class="chongz-1-name"><p style="color: #272727;">银行卡转账</p><em>单笔最低200元，最高50000元。</em></div>
			<i style="font-size: .25rem;position: absolute;top: .17rem;color: #8e8e8e;"class="iconfont">&#xe656;</i>
		</a>
		<a class="chongz-11" href="/userCenter/zfbPay">
			<div class="chongz-1-img"><i class="iconfont">&#xe645;</i></div>
			<div class="chongz-1-name"><p style="color: #272727;">支付宝扫码</p><em>单笔最低100元，最高50000元。</em></div>
			<i style="font-size: .25rem;position: absolute;top: .17rem;color: #8e8e8e;"class="iconfont">&#xe656;</i>
		</a>
		<a class="chongz-11" href="/userCenter/wxPay">
			<div class="chongz-1-img"><i class="iconfont">&#xe65f;</i></div>
			<div class="chongz-1-name"><p style="color: #272727;">微信扫码</p><em>单笔最低100元，最高50000元。</em></div>
			<i style="font-size: .25rem;position: absolute;top: .17rem;color: #8e8e8e;"class="iconfont">&#xe656;</i>
		</a>
	</div>
	<div class="back-tips">
		<div style="padding-top: .35rem;padding-bottom: .1rem;">充值使用需知</div>
		<div style="padding:0 .1rem .1rem .1rem ;color:#777;font-size: 0.14rem;text-align: left;">
			<p>1. 充值成功后请到充值记录查看充值状态，若有问题请即时联系在线客服。</p>
			<p>2. 充值服务时间为 24 小时。</p>
		</div>
	</div>
	<include file="Public/footer" />
</body>
</html>
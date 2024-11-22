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
		今日统计
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="tongjiz">
		<div class="tongjiz-top">
			<div class="tongjiz-top1">
				<div class="tongjiz-top1-img"><img src="__ROOT__{$userinfo['face']}"></div>
				<span>{$userinfo['username']}</span>
			</div>
			<div class="tongjiz-top2">
				<div class="tongjiz-top2-ed"><p>主账户余额(元)</p><em>{$userinfo['balance']}</em></div>
				<div class="tongjiz-top2-yk"><p>主账户盈亏(元)</p><em>{$yingli}</em></div>
			</div>
		</div>
		<div class="tongjiz-bottom">
			<ul class="tongjiz-bottom-ul-1">
				<li>
					<button><span><i class="iconfont">&#xe62d;</i> 派彩收入</span><p>{$zhongjiangcount}</p></button>
				</li>
				<li class="tongji-bottom-li-left">
					<button><span><i class="iconfont">&#xe6aa;</i> 投注支出</span><p>{$touzhucount}</p></button>
				</li>
				<li class="tongji-bottom-li-top">
					<button><span><i class="iconfont">&#xe622;</i> 返点金额</span><p>{$fandian}</p></button>
				</li>
				<li class="tongji-bottom-li-top tongji-bottom-li-left">
					<button><span><i class="iconfont">&#xe606;</i> 活动礼金</span><p>0.00</p></button>
				</li>
				<li class="tongji-bottom-li-top">
					<button><span><i class="iconfont">&#xe683;</i> 充值/转入</span><p>{$chuzhicount}</p></button>
				</li>
				<li class="tongji-bottom-li-top tongji-bottom-li-left">
					<button><span><i class="iconfont">&#xe626;</i> 提现/转出</span><p>{$tikuancount}</p></button>
				</li>
			</ul>
			<ul class="tongjiz-bottom-ul-2">
				<li><a href="/userCenter/rechargeWay"><i class="iconfont">&#xe600;</i><span> 充值</span></a></li>
				<li class="tongji-bottom-li-left tx"><a href="/userCenter/withdrawals"><i class="iconfont">&#xe607;</i><span> 提现</span></a></li>
			</ul>
		</div>
	</div>
</body>
</html>
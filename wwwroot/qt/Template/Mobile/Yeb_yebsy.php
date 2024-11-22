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
</head>
<body>
	<!--头部-->
	<header class="gamesheader yeb">
		我的余额宝
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2"style="font-size: 0;">&#xe646;</i></a>
	</header>
	<div class="byyeb">
		<div class="by-yeb-bj"></div>
		<div class="yebmxtop">
			<div class="yebmxtop-title">
				<div class="yebmxtop-title-1 active" onclick="window.location.href='/yebCenter/yebsy'">
					<span>收益明细</span>
				</div>
				<div class="yebmxtop-title-2" onclick="window.location.href='/yebCenter/yebhqcq'">
					<span>活期存取</span>
				</div>
				<div class="yebmxtop-title-3" onclick="window.location.href='/yebCenter/yebhqjl'">
					<span>活期记录</span>
				</div>
				<div class="yebmxtop-title-4" onclick="window.location.href='/yebCenter/yebdqcq'">
					<span>定期存取</span>
				</div>
				<div class="yebmxtop-title-5" onclick="window.location.href='/yebCenter/yebdqjl'">
					<span>定期记录</span>
				</div>
			</div>
			<div class="yebmxnotice">
				<div class="yebmxnotice-zje">
					<em>总金额</em>
					<div><span>￥</span>{$yeball}</div>
				</div>
				<div class="yebmxnotice-lx">
					<em>已有利息</em>
					<div><span>￥</span>{$member.yeblixi}</div>
				</div>
			</div>
		</div>
		<!--收益明细-->
		<div class="yebmxmx shouyi" style="display:block;">
		    <volist name="mxlist" id="vo">
			<div class="yebmxmx-noticez">
				<div class="yebmxmx-notice-1">
					<div>{$vo.typename}</div>
					<em>{$vo.oddtime|date="Y-m-d H:i:s",###}</em>
				</div>
				<div class="yebmxmx-notice-2">
					<div>{$vo.amount}</div>
					<em>{$vo.amountafter}</em>
				</div>
			</div>
			</volist>
			<div class="pageshow pagefy">{$pageshow}</div>
		</div>

		

		<div class="yebmxmx dingqi" style="display:none;">

			
			<div class="yebmxmx-notice iconfont active">
				<div class="yebmxmx-notice-1">
					<div>定期30天</div>
					<em>2021-02-11 02:17</em>
				</div>
				<div class="yebmxmx-notice-3 iconfont">

					<div>500</div>
				</div>
			</div>
			

			<div class="yebmxmx-notice iconfont">
				<div class="yebmxmx-notice-1">
					<div>定期7天</div>
					<em>2021-02-11 02:17</em>
				</div>
				<div class="yebmxmx-notice-3 iconfont">

					<div>500</div>
				</div>
			</div>
		</div>
	</div>



	<div class="yeb-bj" style="display:none"></div>
	<div class="yebhqdqxq yebtop" style="display:none">
		<div class="yebhqdqxq-title">
			<span>订单:zT21030306015991/定期30天</span>
		</div>
		<div class="yebhqdqxq-notice">
			<div class="notice-1">
				<div class="notice-1-title">状态:</div>
				<div class="notice-1-notice stop">已结束</div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">转入金额:</div>
				<div class="notice-1-notice">1000元</div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">转出金额:</div>
				<div class="notice-1-notice">0元</div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">开始时间:</div>
				<div class="notice-1-notice">2021-03-03 06:01:59</div>
			</div>
		</div>
		<div class="yebhqdqxq-end">
			<button style="background: #f5f5f5;">提现</button>
			<button>取消</button>
		</div>
	</div>
</body>
</html>

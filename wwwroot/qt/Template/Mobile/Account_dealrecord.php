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
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		交易记录
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a class="zuijin"><i class="iconfont icon-2">&#xe624;</i></a>
	</header>
	<div class="Recharge-top">
		<ul>
			<li ><a class="Recharge-active">全部</a></li>
			<li><a href="/userCenter/billRecord1">充值</a></li>
			<li><a href="/userCenter/billRecord2">提现</a></li>
		</ul>
	</div>
	<?php $typearray = AbstractType();?>
	<div class="Recharge-game" style="margin-bottom: .78rem;">
		<ul>
			<volist name="mxlist" id="vo">
				<li>
					<div class="Recharge-game-top">
						<i class="iconfont">&#xe653;</i>
						<span>{$vo['typename']}</span>
						<span style="float:right;">{$vo.oddtime|date="Y-m-d H:i:s",###}
						</span>
					</div>
					<div class="Recharge-game-bottom">
						<div class="Recharge-qihao"><p>备注</p><em>{$vo.remark}</em></div>
						<div class="Recharge-jine"><p>金额</p><em>{$vo.amount}</em></div>
						<div class="Recharge-zhuangt"><em>{$vo.amountafter}</em></div>
					</div>
				</li>
			</volist>
		</ul>
		<div class="page text-center green-black pagefy">{$pageshow}</div>
	</div>
	
	<div class="alert_bj" style="position: fixed; z-index: 1000;display:none;"></div>
	<div class="action-sheet caidan dibutop animated" style="display:none;">
		<div class="action-sheet-button1 <if condition="$Think.get.atime eq '0'">active</if>" style="border-radius: .1rem .1rem 0 0;" onclick="getlist(0);">全部</div>
		<div class="action-sheet-button2 <if condition="$Think.get.atime eq '1'">active</if>" style="border-radius:0" onclick="getlist(1);">今日</div>
		<div class="action-sheet-button2 <if condition="$Think.get.atime eq '2'">active</if>" style="border-radius:0" onclick="getlist(2);">昨日</div>
		<div class="action-sheet-button2 <if condition="$Think.get.atime eq '3'">active</if>" style="border-radius: 0 0 .1rem .1rem;" onclick="getlist(3);">最近七日</div>
		<div class="action-sheet-button">  取消 </div>
	</div>

	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
	
	<script>
		$('.zuijin').click(function(){
			$('.action-sheet').show();
			$('.alert_bj').show();
		})
		$('.alert_bj').click(function(){
			$('.action-sheet').removeClass('dibutop');
			$('.action-sheet').addClass('dibubottom');
			setTimeout(function(){
				$('.alert_bj').hide();
				$('.action-sheet').hide();
				$(".action-sheet").removeClass("dibubottom ");
				$(".action-sheet").addClass("dibutop");
			},200);
		})
		$('.action-sheet-button').click(function(){
			$('.action-sheet').removeClass('dibutop');
			$('.action-sheet').addClass('dibubottom');
			setTimeout(function(){
				$('.alert_bj').hide();
				$('.action-sheet').hide();
				$(".action-sheet").removeClass("dibubottom ");
				$(".action-sheet").addClass("dibutop");
			},200);
		})
		function getlist(atime){
			window.location.href="/userCenter/Account/atime/"+atime;
		}
	</script>
</body>
</html>
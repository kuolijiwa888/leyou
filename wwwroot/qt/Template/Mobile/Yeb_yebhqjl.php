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
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
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
				<div class="yebmxtop-title-1" onclick="window.location.href='/yebCenter/yebsy'">
					<span>收益明细</span>
				</div>
				<div class="yebmxtop-title-2" onclick="window.location.href='/yebCenter/yebhqcq'">
					<span>活期存取</span>
				</div>
				<div class="yebmxtop-title-3 active" onclick="window.location.href='/yebCenter/yebhqjl'">
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

		<div class="yebmxmx dingqi" style="display:block;">

			<volist name="tzlist" id="vo">
				<div class="yebmxmx-notice iconfont <if condition="$vo[state] eq 1">active</if>" onclick="hqurl('{$vo.trano}')">
					<div class="yebmxmx-notice-1">
						<div>{$vo.fname}</div>
						<em>{$vo.addtime|date="Y-m-d H:i:s",###}</em>
					</div>
					<div class="yebmxmx-notice-3 iconfont">

						<div>{$vo.money}</div>
					</div>
				</div>
			</volist>
			<div class="pageshow pagefy">{$pageshow}</div>
		</div>
	</div>



	<div class="yeb-bj" style="display:none"></div>
	<div class="yebhqdqxq yebtop" style="display:none">
		<div class="yebhqdqxq-title">
			<span>订单:<em id="cq_trano"></em>/<em id="cq_fname"></em></span>
		</div>
		<div class="yebhqdqxq-notice">
			<div class="notice-1">
				<div class="notice-1-title">状态:</div>
				<div class="notice-1-notice stop" id="cq_state"></div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">转入金额:</div>
				<div class="notice-1-notice"><em id="cq_money"></em>元</div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">转出金额:</div>
				<div class="notice-1-notice"><em id="cq_qmoney"></em>元</div>
			</div>
			<div class="notice-1">
				<div class="notice-1-title">开始时间:</div>
				<div class="notice-1-notice" id="cq_addtime"></div>
			</div>
		</div>
		<div class="yebhqdqxq-end">
			<button style="background: #f5f5f5;" id="dqtixian" disabled="disabled">提现</button>
			<button id="quxiao">取消</button>
		</div>
	</div>
	
	<script>
		function hqurl(trano){
			$.ajax({
				url: "/Yeb.hrecord?trano="+trano,
				type: 'GET',
				dataType: "text",
				contentType: "application/json; charset=utf-8",
				success: function (data) {
					var trano = $(data).find('#trano').text();
					var fname = $(data).find('#fname').text();
					var money = $(data).find('#money').text();
					var qmoney = $(data).find('#qmoney').text();
					var state = $(data).find('#state').text();
					var addtime = $(data).find('#addtime').text();
					var type = $(data).find('#type').text();
					
					if(type=='1'){
						$('#dqtixian').attr('disabled',false);
					}else{
						$('#dqtixian').attr('disabled',true);
					}
					if(state=='已结束'){
						$('#cq_state').removeClass('start');
						$('#cq_state').addClass('stop');
					}else if(state=='进行中'){
						$('#cq_state').removeClass('stop');
						$('#cq_state').addClass('start');
					}else{
						$('#cq_state').removeClass('start');
						$('#cq_state').removeClass('stop');
					}
					$('#cq_trano').html(trano);
					$('#cq_fname').html(fname);
					$('#cq_money').html(money);
					$('#cq_qmoney').html(qmoney);
					$('#cq_state').html(state);
					$('#cq_addtime').html(addtime);
					$('.yeb-bj').show();
					$('.yebhqdqxq').show();
					$('body').addClass('niubihh');
				}
			})
		}
		$('#quxiao').click(function(){
			$('.yebhqdqxq').removeClass('yebtop');
			$('.yebhqdqxq').addClass('yebbottom');
			setTimeout(function(){
				$('.yeb-bj').hide();
				$('.yebhqdqxq').hide();
				$('body').removeClass('niubihh');
				$('.yebhqdqxq').removeClass('yebbottom');
				$('.yebhqdqxq').addClass('yebtop');
			}, 300);
		});
		$('.yeb-bj').click(function(){
			$('.yebhqdqxq').removeClass('yebtop');
			$('.yebhqdqxq').addClass('yebbottom');
			setTimeout(function(){
				$('.yeb-bj').hide();
				$('.yebhqdqxq').hide();
				$('body').removeClass('niubihh');
				$('.yebhqdqxq').removeClass('yebbottom');
				$('.yebhqdqxq').addClass('yebtop');
			}, 300);
		});
	</script>
</body>
</html>

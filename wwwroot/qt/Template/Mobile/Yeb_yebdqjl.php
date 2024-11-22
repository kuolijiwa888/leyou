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
				<div class="yebmxtop-title-3" onclick="window.location.href='/yebCenter/yebhqjl'">
					<span>活期记录</span>
				</div>
				<div class="yebmxtop-title-4" onclick="window.location.href='/yebCenter/yebdqcq'">
					<span>定期存取</span>
				</div>
				<div class="yebmxtop-title-5 active" onclick="window.location.href='/yebCenter/yebdqjl'">
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
				<div class="yebmxmx-notice iconfont <if condition="$vo[state] eq 1">active</if>" onclick="dqurl('{$vo.trano}')">
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
			<button style="background: #f5f5f5;" id="dqtixian" onclick="" disabled="disabled">提现</button>
			<button id="quxiao">取消</button>
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
		function yebdqtx(uid){
			$.post("{:U('Yeb/dtixi')}",{'id':uid}, function(data){
				if(data.code==1){
					hsycms(data.msg);
					setTimeout(function() {
						window.location.reload(true);
					}, 500);
				}else{
					hsycmserror(data.msg);
				}
			},'json');
		}
		function dqurl(trano){
			$.ajax({
				url: "/Yeb.drecord?trano="+trano,
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
					var uid = $(data).find('#uid').text();
					var txtype = $(data).find('#txtype').text();

					if(type=='1' && txtype=="0"){
						$('#dqtixian').attr('disabled',false);
						$('#dqtixian').attr('onclick','yebdqtx("'+uid+'")');
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

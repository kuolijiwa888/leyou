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
		微信扫码支付
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="back2">
		<form method="post" id="bank_recharge_from" action="{:U('Account/recharge')}">
			<ul>
				<li>
					<div class="back2-name"><span>充值金额:</span></div>
					<div class="back2-1"><input type="text" name="amount" id="amount" placeholder="最低充值{$Allmsg.minmoney|floor}"></div>
				</li>
				<li>
					<div class="back2-name"><span>转账户名:</span></div>
					<div class="back2-1"><input type="text" name="payname" id="payname" placeholder="请输入你的支付账号"></div>
				</li>
			</ul>
			<input type="radio"  name="paytype"  value="{$Allmsg['paytype']}" checked="checked" style="display:none;">
			<div class="back-ok">
				<button class="queding nextbtn" style="width: 100%;" type="button">确定</button>
			</div>
		</form>
		<ul id="pay_alipay" style="display: none;">
			<li>
				<div class="back2-name"><span>订单提示:</span></div>
				<div class="back2-1">
					<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;">尊敬的客户您好，您的充值订单已经生成，请您在该页面继续完成充值。</em></div>
				</div>
			</li>
			<li>
				<div class="back2-name"><span>充值金额:</span></div>
				<div class="back2-1">
					<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;" class="mark" id="saomabill_amount" way-data="saomabill.amount"></em>元</div>
				</div>
			</li>
			<li>
				<div class="back2-name"><span>订单编号:</span></div>
				<div class="back2-1">
					<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;" class="mark" id="saomabill_trano" way-data="saomabill.trano"></em></div>
				</div>
			</li>
			<li>
				<div class="back2-name"><span>附言码:</span></div>
				<div class="back2-1">
					<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;" class="mark" id="saomabill_id" way-data="saomabill.id"></em></div>
				</div>
			</li>
			<li>
				<div class="back2-name"><span>微信付款二维码:</span></div>
				<div class="back2-1">
					<div style="width:1.99rem;"><img src="{$Allmsg['ewmurl']}" style='width:150px;border:none;display:block; margin:0 auto;'></div>
				</div>
			</li>
		</ul>
		<input type="hidden" way-data="saomabill_paytype" id="saomabill.paytype" />
		<div class="back-ok tijiao" style="display: none;">
			<button class="queding" style="width: 100%;" type="button" onclick="paysaoma()">扫码完成支付</button>
		</div>
	</div>
	<div class="back-tips">
		<div style="padding-top: .35rem;padding-bottom: .1rem;">充值使用需知</div>
		<div style="padding:0 .1rem .1rem .1rem ;color:#777;font-size: 0.14rem;text-align: left;">
			{$Allmsg['remark']}
		</div>
	</div>

	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type='text/javascript' src='/Template/Mobile/js/main.js' charset='utf-8'></script> 
	<script type='text/javascript' src='/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
	<script type='text/javascript' src="__JS__/clipboard.min.js"></script>

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
	</script>
	<script type="text/javascript">

		$('.nextbtn').click(function () {
			if($('input[name=amount]').val()=="") {
				hsycmserror('请输入充值金额');return false;
			}
			if($('input[name=payname]').val()==""){
				hsycmserror('请输入支付账号');return false;
			}
			$.ajax({
				type : 'POST',
				url : "{:U('Apijiekou/addrecharge')}",
				data :{
					amount      : $('#amount').val(),
					paytype     : $("input[name='paytype']:checked").val(),
					userpayname : $("input[name='payname']").val(),
				},
				success : function (data) {
					if(data.sign == true){
						$('.nextbtn').hide();
						$('.choiceBank').hide();
						$('.choiceMoney').hide();
						$('.chongzhi').hide();
						$('.tijiao').show();
						$("#pay_alipay").show();
						$('#bank_recharge_from').hide();
						$('#saomabill_paytype').val(data.data.paytype);
						$('#saomabill_amount').text(data.data.amount);
						$('#saomabill_trano').text(data.data.trano);
						$('#saomabill_id').text(data.data.id);
						setTimeout(function () {checkispay(data.data.trano);}, 5000);	
					}else{
						hsycmserror(data.message);
					}
				}
			})
		})
		function paysaoma() {
			hsycms('充值成功申请已提交');
			setTimeout(function(){
				window.location.href = "/userCenter/billRecord1";
			},2000);
		}
		var checkispayid;
		function checkispay(trano){
			clearTimeout(checkispayid);
			$.ajax({
				url: "{:U('Apijiekou/checkrechargeisok1')}",
				data:{"trano": trano},  
				type: "post",
				dataType: "json",
				async:false,
				success: function(result) {
					if (result.sign === true) {
						if(result.state!=0){
							if(result.state==1){
								hsycms("充值成功");
							}else if(result.state==-1){
								hsycmserror("充值失败",-1);
							}
						}else{
							checkispayid = setTimeout(function () {
								checkispay(trano);
							}, 5000);	
						}
					} else {
						checkispayid = setTimeout(function () {
							checkispay(trano);
						}, 5000);	
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					checkispayid = setTimeout(function () {
						checkispay(trano);
					}, 5000);	
				}
			});
		}; 
	</script>
</body>
</html>
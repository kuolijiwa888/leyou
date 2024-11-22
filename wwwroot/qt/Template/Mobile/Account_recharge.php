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
		银行卡转账
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="back2">
		<form action="" method="post" id="formrecharge"> 
			<ul>
				<li>
					<input type="hidden" name="paytype" value="{$payinfo.paytype}" class="copy_txt">
					<div class="back2-name"><span>收款银行:</span></div>
					<div class="back2-1"><em>{$payinfo.ftitle}</em></div>
				</li>
				<li>
					<div class="back2-name"><span>收款户名:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em class="copy_txt f1" id="f1" style="color: #434354;font-size: .15rem;">{$bankname}</em></div>
						<button type="button" class="copu_btn1" style="padding: .05rem .1rem;border-radius: .04rem;background: #787884;color: #fff;font-size: .14rem;" data-clipboard-action="copy" data-clipboard-target="#f1">复制</button>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>收款账号:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em class="copy_txt f2" id="f2" style="color: #434354;font-size: .15rem;">{$bankcode}</em></div>
						<button type="button" class="copu_btn2" style="padding: .05rem .1rem;border-radius: .04rem;background: #787884;color: #fff;font-size: .14rem;" data-clipboard-action="copy" data-clipboard-target="#f2">复制</button>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>开户支行:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em class="copy_txt f3" id="f3" style="color: #434354;font-size: .15rem;">{$payinfo.ftitle}</em></div>
						<button type="button" class="copu_btn3" style="padding: .05rem .1rem;border-radius: .04rem;background: #787884;color: #fff;font-size: .14rem;" data-clipboard-action="copy" data-clipboard-target="#f3">复制</button>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>充值金额:</span></div>
					<div class="back2-1"><input type="text" name="amount" value="{$payinfo.minmoney|floor}" placeholder="至少{$payinfo.minmoney|floor}"></div>
				</li>
				<li>
					<div class="back2-name"><span>转账户名:</span></div>
					<div class="back2-1"><input type="text" name="userpayname" placeholder="请输入转账户名"></div>
				</li>
			</ul>
			<div class="back-ok">
				<button type="reset" class="chongz" id="refresh">重置</button><button class="queding" type="button" onclick="addrecharge()">确定</button>
			</div>
		</form>
	</div>
	<div class="back-tips">
		<div style="padding-top: .35rem;padding-bottom: .1rem;">充值使用需知</div>
		<div style="padding:0 .1rem .1rem .1rem ;color:#777;font-size: 0.14rem;text-align: left;">
			<p>1. 请转账到以上收款银行账户。</p>
			<p>2. 请正确填写转账银行卡的持卡人姓名和充值金额，以便及时核对。</p>
			<p>3. 转账1笔提交1次，请勿重复提交订单。</p>
			<p>4. 请务必转账后再提交订单,否则无法及时查到您的款项！</p>
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
	
	<script type="text/javascript">
		$("#refresh").click(function(){
			window.location.reload(true) ;
		});
	</script>

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
		var clipboard1 = new Clipboard('.copu_btn1');
		var clipboard2 = new Clipboard('.copu_btn2');
		var clipboard3 = new Clipboard('.copu_btn3');
		clipboard1.on('success', function(e) {
			console.info('Action:', e.action);
			console.info('Text:', e.text);
			console.info('Trigger:', e.trigger);
			console.log(e);
			hsycms("复制内容："+ e.text);
			e.clearSelection();
		});
		clipboard1.on('error', function(e) {
			console.error('Action:', e.action);
			console.error('Trigger:', e.trigger);
			hsycmserror("复制失败");
		});
		clipboard2.on('success', function(e) {
			console.info('Action:', e.action);
			console.info('Text:', e.text);
			console.info('Trigger:', e.trigger);
			console.log(e);
			hsycms("复制内容："+ e.text);
			e.clearSelection();
		});
		clipboard2.on('error', function(e) {
			console.error('Action:', e.action);
			console.error('Trigger:', e.trigger);
			hsycmserror("复制失败");
		});
		clipboard3.on('success', function(e) {
			console.info('Action:', e.action);
			console.info('Text:', e.text);
			console.info('Trigger:', e.trigger);
			console.log(e);
			hsycms("复制内容："+ e.text);
			e.clearSelection();
		});
		clipboard3.on('error', function(e) {
			console.error('Action:', e.action);
			console.error('Trigger:', e.trigger);
			hsycmserror("复制失败");
		});
	</script>
	<script>
		function addrecharge() {
			$.ajax({
				type:"post",
				url:"{:U('Apijiekou/addrecharge')}",
				data : $('#formrecharge').serialize(),
				success : function (json) {
					if(json.sign==1){
						hsycms(json.message);
						setTimeout(function(){
							window.location.href = "/userCenter/billRecord1";
						},2000);
					}else{
						if(json.message=="请输入您的支付账号"){
							hsycmserror("请输入您的银行卡姓名")
						}else{
							hsycmserror(json.message);
						}

					}

				}
			})
		}
	</script>
</body>
</html>
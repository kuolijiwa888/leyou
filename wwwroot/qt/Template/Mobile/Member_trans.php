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
		免转钱包额度
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="back2">
		<ul>
			<li>
				<div class="back2-name">
					<span>当前钱包余额:</span>
				</div>
				<div class="back2-1">
					<input type="text" value="{$userinfo['balance']}" disabled="disabled" placeholder="{$userinfo['balance']}">
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>娱乐钱包余额:</span>
				</div>
				<div class="back2-1">
					<input type="text" value="{$ngBalance}" disabled="disabled" placeholder="{$ngBalance}">
				</div>
			</li>
			<li>
				<div class="back2-name"><span>转换类型:</span></div>
				<div class="back2-1">
					<select name="quota_type" id="quota_type" id="">
						<option value="0">==请选择转换类型==</option>
						<option value="1">主账号至娱乐钱包</option>
						<option value="2">娱乐钱包至主账号</option>
					</select>
				</div>
			</li>
			<li>
				<div class="back2-name"><span>转换金额:</span></div>
				<div class="back2-1"><input type ="number" name="amout" id="amout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" placeholder="请输入转账金额"></div>
			</li>
		</ul>

		<div class="back-ok">
			<button type="reset" class="chongz" id="refresh">重置</button><button class="queding" type="button" id="save">确定</button>
		</div>
	</div>
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	
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
	</script>
	<script>
		$(function(){
			$("#refresh").click(function(){
				window.location.reload(true) ;
			});
			$("#save").click(function(){
				var quota_type=$("#quota_type").val();
				if(quota_type<=0){
					hsycmserror("请选择额度转让类型");
					return false;
				}
				var amout=$("#amout").val();
				$(this).unbind("click");
				if(quota_type==1){
					$.post("{:U('Zhenren/deposit')}",{amount:amout},function(data){

						console.log(data);
						if(data.code==1){
							hsycms("转账成功,当前钱包余额" + {$userinfo['balance']} + "娱乐钱包余额" + {$ngBalance});
							setTimeout(function(){
								window.location.reload(true) ;
							},2000);
						}else{
							$(this).bind("click");
							hsycmserror("转账失败");
							setTimeout(function(){
								window.location.reload(true) ;
							},2000);
						}
					});
				}
				if(quota_type==2){
					$.post("{:U('Zhenren/withdrawal')}",{amount:amout},function(data){
						if(data.code==1){
							hsycms("转账成功,当前钱包余额" + {$userinfo['balance']} + "娱乐钱包余额" + {$ngBalance});
							setTimeout(function(){
								window.location.reload(true) ;
							},2000);
						}else{
							$(this).bind("click");
							hsycmserror("转账失败");
							setTimeout(function(){
								window.location.reload(true) ;
							},2000);
						}
					});
				}
			});
		});
	</script>
</body>
</html>
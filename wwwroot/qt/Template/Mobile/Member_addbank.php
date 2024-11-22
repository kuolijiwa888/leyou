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
	
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>

	<script src="__JS__/require.js" data-main="__JS__/main"></script>

</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		添加银行卡
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="back2">
		<ul>
			<li>
				<div class="back2-name">
					<span>持卡人姓名:</span>
				</div>
				<div class="back2-1">
					<input type="text" id="userbankname" value="{$userinfo.userbankname}" disabled="disabled" placeholder="{$userinfo.userbankname}">
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>选择银行:</span>
				</div>
				<div class="back2-1">
					<select name="bankname" id="sysBankCard">
						<option value="">请选择银行</option>
						<volist name="Allbank" id="value">
							<option value="{$value['bankcode']}">{$value['bankname']}</option>
						</volist>
					</select>
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>开户地区:</span>
				</div>
				<div class="back2-1">
					<select id="s_province" name="province" data-shen="请选开户地区">
						<option value="">请选开户地区</option>
					</select>
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>开户城镇:</span>
				</div>
				<div class="back2-1">
					<select id="s_city" name="city" data-shi="请选开户城镇">
						<option value="">请选开户城镇</option>
					</select>
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>开户网点:</span>
				</div>
				<div class="back2-1">
					<input type="text" id="bankBranch" name="accountname" placeholder="请输入开户网点">
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>银行卡号:</span>
				</div>
				<div class="back2-1">
					<input type="text" id="bankCardNum" name="banknumber" placeholder="请输入银行卡号">
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>确认卡号:</span>
				</div>
				<div class="back2-1">
					<input type="text" id="regBankCardNum" name="rebanknumber" placeholder="请再次输入银行卡号">
				</div>
			</li>
			<li>
				<div class="back2-name">
					<span>资金密码:</span>
				</div>
				<div class="back2-1">
					<input type="password" id="bankTradPwd" name="safepass" placeholder="请输入资金密码">
				</div>
			</li>
		</ul>
		<div class="back-ok">
		    <button class="chongz" type="reset" id="refresh">重置</button><button class="queding" onclick="userbindbankcard();">确定</button>
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
	<script type="text/javascript">
		var userbindbankcard = function(){

			var url = '__ROOT__/Apijiekou.' + 'userbindbankcard';
			var bankCode = $("#sysBankCard").val();
			var _username = $("#userbankname").val();
			var bankCardNumber = $("#bankCardNum").val();
			var regbankCardNumber = $("#regBankCardNum").val();
			var province = $("#s_province").val();
			var city = $("#s_city").val();

			var bankTradPwd = $("#bankTradPwd").val();
			// 07-11 add 开户行网点
			var bankBranch = $("#bankBranch").val();
			bankBranch = bankBranch?bankBranch:"";
			/*if(!_username || _username !=""){
				alert("请输入你的真实姓名");
				return false;
			}*/

			if(_username.length<2){
				window.location.href="{:U('Account/userbankname')}"
			}
			if (bankCode.length < 1) {
				hsycmserror("请选择银行卡");return false;
			} else if (province=="省份" || city=="地级市") {
				hsycmserror("请选择开户省市");return false;

			} else if (bankCardNumber.length < 1) {
				hsycmserror("请输入银行卡号");return false;

			} else if (regbankCardNumber.length < 1) {
				hsycmserror("请输入确认银行卡号");return false;
			} else if (regbankCardNumber != bankCardNumber) {
				hsycmserror("两次卡号输入的不一致，请重新输入");return false;
			} else if (bankTradPwd.length < 1) {
				hsycmserror("请输入资金密码");return false;
			}
			var bankAddress = province + "-" + city;
			$.post(url,{
				"bankCardNumber": bankCardNumber,
				"bankAddress": bankAddress,
				"bankTradPwd": bankTradPwd,
				"bankCode": bankCode,
				"regbankCardNumber": regbankCardNumber,
				"bankBranch": bankBranch,
				"accountname": _username
			}, function(json){
				if(json.sign){
					hsycms('银行绑定成功',1);
					setTimeout(function(){
						window.location.href="{:U('Member/bindcard')}";
					},2000);
				}else{
					hsycmserror(json.message,-1);
					return false;
				}
				return false;
			},'json');

			/*			 },
			 lock:true
			});*/
		}
	</script>
</body>
</html>
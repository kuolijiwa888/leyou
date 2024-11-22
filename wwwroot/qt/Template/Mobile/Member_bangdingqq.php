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
		绑定QQ号码
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="gaimi">
		<form method="post" url="" checkby_ruivalidate id="register_form" onsubmit="return checkform(this)">
			<div class="gaimi-top">
				<ul>
					<li>
						<div class="gaimi-top-name">QQ号码:</div>
						<div class="gaimi-top-mima"><input type="text" name="info[setqq]" id="setqq" value="<notempty name='userinfo[qq]'>{$userinfo['qq']}</notempty>" class="personalInfo_input am-fr padding_lr_5" autocomplete="on" onblur="yzqq(this)" onfocus="rego(this);"  placeholder="请输入QQ号码" /></div>
					</li>
				</ul>
				<input type="hidden" name="info[qq]" id="qq" value="{$userinfo['qq']}" />
				<div class="gaimi-top-button"><button type="submit">确定</button></div>
			</div>
		</form>
	</div>
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
	
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

		function checkform(obj){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.status==1){
					hsycms(json.info,'success');
					setTimeout(function(){
						window.location.reload();
					},2000);
				}else{
					hsycmserror(json.info);
				};
			},'json');
			return false;
		};
	</script>
	<script>
		var v  = document.getElementById("setqq").value;
		var qq = document.getElementById("qq");
		var v2 = qq.value;
		function rego(obj) {
			obj.value="";
		}
		function yzqq(obj) {
			if(obj.value==""){
				obj.value = v;
				document.getElementById("qq").value=v2;
			}else{
				pattern="[1-9][0-9]{4,14}";
				var fag = obj.value.match(pattern);
				if(fag==null){
					alert('请输入正确的QQ号码');
					obj.value = v;
					document.getElementById("qq").value= v2;
					return false;
				}else{
					document.getElementById("qq").value=obj.value;
				}
			}
		}
	</script>
</body>
</html>
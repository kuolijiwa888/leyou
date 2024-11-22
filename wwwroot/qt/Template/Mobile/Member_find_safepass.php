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
		找回资金密码
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="homeziliao" style="margin-top: 45px;">
		<ul>
			<li>
				<a href="{:GetVar('kefuthree')}">
					<span>通过在线客服</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
			<li>
				<a href="/userCenter/find_Phone" class="<notempty name="userinfo.tel">success</notempty>">
					<span>通过密保手机</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
			<li>
				<a href="/userCenter/find_email" class="<notempty name="userinfo.email">success</notempty>">
					<span>通过密保邮箱</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
			<li>
				<a href="/userCenter/find_qq" class="<notempty name="userinfo.qq">success</notempty>">
					<span>通过QQ号码</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
		</ul>
	</div>
	
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>

	<script>
		$(function () {
			$('.homeziliao a').each(function (i) {
				$(this).click(function(){
					if($(this).parent().find('a').hasClass('success')){
						return true;
					}else{
						return false;
					}
				})
			})
		})
	</script>
</body>
</html>
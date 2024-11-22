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
		余额宝
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a id="yeb_caidan"><i class="iconfont icon-2">&#xe646;</i></a>
	</header>
	<div class="byyeb">
		<div class="by-yeb-bj"></div>
		<div class="yebstart iconfont">
			<div class="yebstart-ed">
				<div class="yebstart-ed-title">
					<em>总金额(元)</em><i class="eyes iconfont">&#xe640;</i>
				</div>
				<div class="yebstart-ed-cny" ascn="2">
					<em id="show" onclick="window.location.href='/yebCenter/yebsy'">{$yeball}</em><em id="hide" style="display:none;" onclick="window.location.href='/yebCenter/yebsy'">******</em><i class="iconfont">&#xe6d8;</i>
				</div>
			</div>
			<div class="yebstart-sy">
				<div class="yebstart-sy-zrsy">
					<em>活期金额(元)</em>
					<div class="zrsy-cny">{$member.yebmoney}</div>
				</div>
				<div class="yebstart-sy-ljsy">
					<em>定期金额(元)</em>
					<div class="">{$member.dyebmoney}</div>
				</div>
				<div class="yebstart-sy-7rnh">
					<em>已有利息(元)</em>
					<div class="">{$member.yeblixi}</div>
				</div>
			</div>
			<div class="yebstart-zhuan">
				<button class="zhuanchu" onclick="window.location.href='/yebCenter/yebzchq'">转出</button><button class="zhuanru" onclick="window.location.href='/yebCenter/yebzrhq'">转入</button>
			</div>
		</div>
		<div class="yebhuodong" onclick="window.location.href='/yebCenter/yebzrdq'">
			<div class="yebhuodong-title">
				<span>定期高收益</span>
				<div class="right"><em>GO </em><i class="iconfont">&#xe6d8;</i></div>
			</div>
			<div class="yebhuodong-img">
				<img src="/ascn/mobile/images/yebhuodong.png">
			</div>
		</div>
	</div>
	<div class="yeb-bj" style="display:none"></div>
	<div class="yebgengduo yebtop"style="display:none">
		<button onclick="window.location.href='/yebCenter/yebsy'">收益明细</button>
		<button onclick="window.location.href='/yebCenter/yebhqcq'">活期记录</button>
		<button onclick="window.location.href='/yebCenter/yebdqcq'">定期记录</button>
		<button onclick="window.location.href='{:GetVar('kefuthree')}'">在线客服</button>
		<button id="yeb_quxiao">取消</button>
	</div>
	<script>
		$(".eyes").click(function(){
			if($(".yebstart-ed-cny").attr("ascn") == 2){
				$('#show').hide();
				$('#hide').show();
				$('.yebstart-ed-cny').attr("ascn","1")
				$('.eyes').html("&#xe679;")
			}else{
				$('#show').show();
				$('#hide').hide();
				$('.yebstart-ed-cny').attr("ascn","2")
				$('.eyes').html("&#xe640;")
			}
		});
		$('#yeb_caidan').click(function(){
			$('.yeb-bj').show();
			$('.yebgengduo').show();
		});
		$('#yeb_quxiao').click(function(){
			$('.yebgengduo').removeClass('yebtop');
			$('.yebgengduo').addClass('yebbottom');
			setTimeout(function() {
				$('.yeb-bj').hide();
				$('.yebgengduo').hide();
				$('.yebgengduo').removeClass('yebbottom');
				$('.yebgengduo').addClass('yebtop');
			}, 200);
		});
		$('.yeb-bj').click(function(){
			$('.yebgengduo').removeClass('yebtop');
			$('.yebgengduo').addClass('yebbottom');
			setTimeout(function() {
				$('.yeb-bj').hide();
				$('.yebgengduo').hide();
				$('.yebgengduo').removeClass('yebbottom');
				$('.yebgengduo').addClass('yebtop');
			}, 200);
		});
	</script>
</body>
</html>

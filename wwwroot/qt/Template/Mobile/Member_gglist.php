<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/hsycmsAlert.css">
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		公告中心
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="gonggao-game">
		<ul>
			<volist name="gglist" id="vo">
				<li >
					<a onclick="hsycms.alert('model');gglist('{$vo['id']}');">
						<div class="gonggao-game-top">
							<span style="font-weight: bold;color: #0094c0;">{$vo[oddtime]|date='m',###}月{$vo[oddtime]|date='d',###}日</span>
							<span style="float:right;">{$vo[oddtime]|date='Y-m-d',###} 
								<i class="iconfont">&#xe800;</i>
							</span>
						</div>
						<div class="gonggao-game-bottom">
							<span>{$vo[title]}</span>
						</div>
					</a>
				</li>
			</volist>
		</ul>
	</div>
	<div class="hsycms-model-mask" onclick="hsycms.closeAll()" id="mask-model"></div>
	<div class="hsycms-model1 hsycms-model-model" id="model">
		<div style="border-top: 0.08rem solid #434354;border-bottom: .01rem solid #e8e8e82e;" class="hscysm-model-title"><h2 class="title"></h2></div>
		<div class="hsycms-model-content">
			<div style="color: #717171;font-size: 0.15rem;padding:.1rem;padding-top:0;"class="noticeContent_bd"></div>
		</div>
		<div onclick="hsycms.closeAll()" id="mask-model"class="button-bottom"><button class="button-ok">确定</button></div>
	</div>

	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script>
		function gglist(uid){
			$.ajax({
				url: "/userCenter/noticeDetail/"+uid,
				type: 'GET',
				dataType: "text",
				contentType: "application/json; charset=utf-8",
				success: function (data) {
					var title = $(data).find('#title').html();
					var content = $(data).find('#content').html();
					$('.title').html(title);
					$('.noticeContent_bd').html(content);
				}
			})
		}
	</script>
</body>
</html>
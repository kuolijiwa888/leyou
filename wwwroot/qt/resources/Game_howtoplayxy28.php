<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" ><meta name="keywords" content="关键字">

	<link rel="stylesheet" href="__CSS2__/bootstrap.min.css">
	<link rel="stylesheet" href="__CSS2__/icon.css">
	<link rel="stylesheet" href="__CSS2__/reset.css">
	<link rel="stylesheet" href="__CSS2__/howtoplay.css">
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
<div class="container padding_0">
	<div class="header">
		<i class="iconfont pull-right">&#xe657;</i>
		<p class="pull-right margin_0">{$caipiao['title']}</p>
	</div>
	<div class="main">
		<div class="how">
			<div class="img"><img src="__IMG__/howtoplay_brief.png" alt="简介"></div>
			<div class="how_content">
				<p>{$caipiao['title']}：取北京快乐8做为开奖号码之彩票类型游戏； </p>
				<p>销售时间：每天08:59 ~ 23:53 </p>
				<p>开奖时间：每天09:05 ~ 23:55，每5分钟1期，全天共179期。 </p>
				<p>开奖号码：北京快乐8每期开奖共开出20个数字，幸运28将这20个开奖号码按照由小到大的顺序依次排列；  </p>
				<p>取其1-6位开奖号码相加，和值的末位数作为幸运28开奖第一个数值； </p>
				<p>取其7-12位开奖号码相加，和值的末位数作为幸运28开奖第二个数值，  </p>
				<p>取其13-18位开奖号码相加，和值的末位数作为幸运28开奖第三个数值；  </p>
				<p>三个数值相加即为幸运28最终的开奖结果 </p>
			</div>
		</div>
		<div class="play">
			<div class="play_title">
				<img src="__IMG__/howtoplay_howtoplay.png" alt="玩法">
			</div>
			<div class="play_content">
				<img src="__IMG__/howtoplay_xy28.png" alt="">
			</div>
		</div>
	</div>
</div>
</body>
</html>
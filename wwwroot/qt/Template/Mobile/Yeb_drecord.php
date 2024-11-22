<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>余额宝 - {:GetVar('webtitle')}线上平台</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
</head>
<body>
<div class="hqurl">
<h1 id="uid">{$hqurl[0]['id']}</h1>
<h1 id="trano">{$hqurl[0]['trano']}</h1>
<h1 id="fname">{$hqurl[0]['fname']}</h1>
<h1 id="money">{$hqurl[0]['money']}</h1>
<h1 id="qmoney">{$hqurl[0]['qmoney']}</h1>
<h1 id="state"><if condition="$hqurl[0]['state'] eq 0">已结束<elseif  condition="$hqurl[0]['state'] eq 1" />进行中</if></h1>
<h1 id="addtime">{$hqurl[0]['addtime']|date="m-d H:i:s",###}</h1>
<h1 id="type">{$hqurl[0]['type']}</h1>
<h1 id="txtype">{$hqurl[0]['txtype']}</h1>
</div>
</body>
</html>
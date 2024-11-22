<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>爱尚互联开发Ascloud-QQ:30041321</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
</head>
<body style="padding-bottom: .55rem;">
<div class="byadad">
    <ul>
        <li><div class="byadad-title">单号:</div><div class="byadad-notice" id="touzhuid"><?php echo $my_touzhud['id'] ?></div></li>
        <li><div class="byadad-title">单号:</div><div class="byadad-notice" id="trano"><?php echo $my_touzhud['trano'] ?></div></li>
        <li><div class="byadad-title">期号:</div><div class="byadad-notice" id="expect"><?php echo $my_touzhud['expect'] ?></div></li>
        <li><div class="byadad-title">用户名:</div><div class="byadad-notice" id="username">{$userinfo['username']}</div></li>
        <li><div class="byadad-title">彩种:</div><div class="byadad-notice" id="cptitle"><?php echo $my_touzhud['cptitle'] ?></div></li>
        <li><div class="byadad-title">玩法:</div><div class="byadad-notice" id="playtitle"><?php echo $my_touzhud['playtitle'] ?></div></li>
        <li><div class="byadad-title">类型:</div><div class="byadad-notice" id="ishemai"><if condition="$my_touzhud['ishemai'] eq '1'">合买代购<else/>代购</if></div></li>
        <li><div class="byadad-title">投注时间:</div><div class="byadad-notice" id="oddtime"><?php echo $my_touzhud['oddtime'] ?></div></li>
        <li><div class="byadad-title">开奖号码:</div><div class="byadad-notice" id="opencode"><?php echo $my_touzhud['opencode'] ?></div></li>
        <li><div class="byadad-title">注数:</div><div class="byadad-notice" id="itemcount"><?php echo $my_touzhud['itemcount'] ?></div></li>
        <li><div class="byadad-title">返点:</div><div class="byadad-notice" id="mode"><?php echo $my_touzhud['mode'] ?></div></li>
        <li><div class="byadad-title">金额:</div><div class="byadad-notice" id="amount"><?php echo $my_touzhud['amount'] ?></div></li>
        <li><div class="byadad-title">中奖金额:</div><div class="byadad-notice" id="okamount"><?php echo $my_touzhud['okamount'] ?></div></li>
        <li><div class="byadad-title">中奖数量:</div><div class="byadad-notice" id="okcount"><?php echo $my_touzhud['okcount'] ?></div></li>
        <li><div class="byadad-title">状态:</div><div id="isdraw"class="byadad-notice" id="isdraw"><?php echo $my_touzhud['isdraw'] == '0' ? '未开奖' : ($my_touzhud['isdraw'] == '1' ? '已中奖' : ($my_touzhud['isdraw'] == '-1' ? '未中奖' : '未知')) ?></div></li>
        <li><div class="byadad-title">投注内容:</div><div class="byadad-notice" id="tzcode"><?php echo $my_touzhud['tzcode'] ?></div></li>
    </ul>
</div>
</body>
</html>
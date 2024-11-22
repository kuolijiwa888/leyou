<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线投注 - {:GetVar('webtitle')}线上平台</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<!--爱尚互联-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>

	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">

	<script type="text/javascript" src="/ascn/mobile/js/alert.min.js"></script>
	<!--爱尚互联-->
	<link rel="shortcut icon" href="/favicon.ico">



	<script>
		var WebConfigs = {
			webtitle:"{$webconfigs.webtitle}",
			kefuthree:"{$webconfigs.kefuthree}",
			kefuqq:"{$webconfigs.kefuqq}",
			ROOT : "__ROOT__"
		};
	</script>
	<script>
		<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
	</script>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery-1.9.1.min.js"></script>

	<script type="text/javascript">
    //生成随机订单号
    var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    function generateMixed(n) {
    	var res = "";
    	for(var i = 0; i < n ; i ++) {
    		var id = Math.ceil(Math.random()*35);
    		res += chars[id];
    	}
    	return res;
    }
    function ordering(){
    	var orderList = [];
    	var lastMoney = $("#lastMoney").val();
    	if(lastMoney <= 0){
    		hsycmserror('请填写投注金额',-1);
    		return false;
    	}
    	$(".jiang.curr").each(function(){
    		var _thisPlayid = $(this).attr('playid');
    		var Numbersh = $(this).attr('value');
    		var rate = k3lotteryrates.rates[_thisPlayid];
    		orderList.push({
    			'trano': generateMixed(20),
    			'playtitle': rate.title,
    			'playid': rate.playid,
    			'number': Numbersh,
    			'zhushu': 1,
    			'price': Number(lastMoney).toFixed(3),
    			'minxf': rate.minxf,
    			'totalzs': rate.totalzs,
    			'maxjj': rate.maxjj,
    			'minjj': rate.minjj,
    			'maxzs': rate.maxzs,
    			'rate': rate.maxjj,
    			'beishu':Number(lastMoney).toFixed(3)
    		});
    	});
    	console.log(orderList);
    	if(orderList.length <= 0){
    		hsycmserror('请选择投注号码',-1);
    		return false;
    	}
    	var touzhu = '<div class="hsycms-model-btn confirm">'+
    	'<button type="button" class="cancel">取消</button>'+
    	'<button type="button" class="ok">确定</button>'+
    	'</div>';
    	$('#confirm').append(touzhu);
    	$('#mask-confirm').show();
    	$('#confirm').show();

    	$('.confirm .cancel').click(function () {
    		$('#mask-confirm').hide();
    		$('#confirm').hide();
    		$('.confirm').remove();
    		$('.hsycms-model-text').html('投注失败');
    		$('#mask-error').show();
    		$('#error').show();
    	})
    	$('.confirm .ok').click(function () {
    		$('#mask-confirm').hide();
    		$('#confirm').hide();
    		$('.confirm').remove();
    		$.ajax({
    			type : "POST",
    			url  : apirooturl + 'cpbuy',
    			data : {
    				"orderList":orderList,
    				'expect':lottery.currFullExpect,
    				'lotteryname':lotteryname
    			},
    			success : function (json) {
    				if(json.sign){
    					$('.clearBet').click();
    					hsycms('投注成功',1);
    				}else{
    					hsycmserror(json.message,-1);
    				}
    			}
    		})
    	});

    	var Orderdetailtotalprice    = 0;
    	for (var i = 0; i < orderList.length; i++) {
    		var cur_order = orderList[i];
    		var rate = k3lotteryrates.rates[cur_order.playid];
    		var oprice = Number(cur_order.price);
    		var cur_number = cur_order.number;
    		Orderdetailtotalprice += oprice;
    	}
    	$("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
    	console.log(orderList);
    }
</script>
</head>

<body>
	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/tabGameData.js"></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/ssc.js"></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/11.js?<?php echo rand();?>"></script>
	<script src="__JS__/require.js" data-main="__JS__/main"></script>
	<script>
		var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
	</script>

	<header class="gamesheader1">
		<span class="play_type">{$cptitle}<i style="font-size: .14rem;"class="iconfont"> &#xe647;</i></span>
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="by-lottery">
		<div class="lottery-top">
			<div class="lottery-top-0">
				<div class="gameType play_wanfa"><span style="font-weight:800">信用玩法</span><span style="float:right;" class=""><string>整合</string><i class="iconfont">&#xe618;</i></span></div>
				<div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
				<div class="play_select_insert animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 20001;width: 3.35rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display: none;" id="j_play_select">
					<div class="play_select_top">
						<span><i class="iconfont">&#xe633;</i>信用模式 - 选择玩法</span>
						<span ontouchend="window.location.href='/lottery/ssc/{:I('code')}'" ><i class="iconfont">&#xe639;</i>[切换到标准]</span>
					</div>
					<ul class="play_select_tit" style="height: 69vh;max-height: 69vh;padding: 0;overflow: hidden;overflow-y: auto;">
						<div class="ssc-ct-wanfa">
							<li class="ssc-selected">整合</li>
							<li style="margin-left: .1rem;">龙虎</li>
						</div>
					</ul>
				</div>
			</div>
			<div class="lottery-top-1">
				<div>第 <span class="byfonthei"id="f_lottery_info_number"way-data="showExpect.currFullExpect">----</span> 期</div>
				<div><label>截止时间: </label><span class="bytime"><i way-data="gametimes.h">00</i>:<i way-data="gametimes.m">00</i>:<i way-data="gametimes.s">00</i></span></div>
			</div>
			<div class="lottery-top-2">
				<div>第 <span class="byfonthei"way-data="showExpect.lastFullExpect" id="f_lottery_info_lastnumber">----</span> 期</div>
				<div class="byhaoma">
					<ol>
						<li way-data="showExpect.openCode1">0</li>
						<li way-data="showExpect.openCode2">0</li>
						<li way-data="showExpect.openCode3">0</li>
						<li way-data="showExpect.openCode4">0</li>
						<li way-data="showExpect.openCode5">0</li>
					</ol>
				</div>
			</div>
			<div class="lottery-top-3" onclick="openls();"><i class="iconfont">&#xe7bb;</i></div>
			<div class="action-sheet caidan dibutop animated" style="display:none;">
				<div class="action-sheet-button1">最近开奖</div>
				<div class="action-sheet-button2" onclick="location.href='/userCenter/betRecord'">我的投注</div>

				<div class="action-sheet-button">取消</div>
			</div>
		</div>
	</div>

	<div style="padding-top: 1rem;"class="lottery_playContainer">
		<section style="" id="gameBet" class="cl">
			<section class="gameBet_balls">
				<div class="gameBet_left l">
					<if condition="$nowcpinfo['iswh'] eq 0">
						<div class="ssc-playmain">
							<div class="wanfa" style="display:block">
								<div>
									<div class="ssc-ct-title">总和 - 龙虎和</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhzhd" value="总和大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhzhx" value="总和小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhzhdd" value="总和单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhzhss" value="总和双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhl" value="龙">龙</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhh" value="虎">虎</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="zhlhhe" value="和">和</span><em>1.956</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">第一球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwd" value="大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwx" value="小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwdd" value="单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwss" value="双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwz" value="质">质</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwh" value="合">合</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="0">0</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="1">1</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="2">2</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="3">3</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="4">4</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="5">5</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="6">6</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="7">7</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="8">8</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscwwn" value="9">9</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">第二球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwd" value="大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwx" value="小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwdd" value="单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwss" value="双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwz" value="质">质</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwh" value="合">合</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="0">0</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="1">1</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="2">2</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="3">3</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="4">4</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="5">5</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="6">6</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="7">7</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="8">8</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscqwn" value="9">9</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">第三球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwd" value="大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwx" value="小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwdd" value="单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwss" value="双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwz" value="质">质</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwh" value="合">合</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="0">0</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="1">1</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="2">2</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="3">3</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="4">4</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="5">5</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="6">6</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="7">7</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="8">8</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscbwn" value="9">9</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">第四球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswd" value="大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswx" value="小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswdd" value="单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswss" value="双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswz" value="质">质</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswh" value="合">合</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="0">0</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="1">1</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="2">2</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="3">3</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="4">4</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="5">5</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="6">6</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="7">7</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="8">8</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscswn" value="9">9</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">第五球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwd" value="大">大</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwx" value="小">小</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwdd" value="单">单</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwss" value="双">双</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwz" value="质">质</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwh" value="合">合</span><em>1.956</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="0">0</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="1">1</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="2">2</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="3">3</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="4">4</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="5">5</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="6">6</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="7">7</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="8">8</span><em>9.78</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="sscgwn" value="9">9</span><em>9.78</em></div>
									</div>
								</div>
							</div>

							<div class="wanfa" style="display:none;">
								<div>
									<div class="ssc-ct-title">万千 第一球VS第二球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwql" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwqh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwqhe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">万百 第一球VS第三球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwbl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwbh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwbhe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">万十 第一球VS第四球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwsl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwsh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwshe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">万个 第一球VS第五球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwgl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwgh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdwghe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">千百 第二球VS第三球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqbl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqbh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqbhe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">千十 第二球VS第四球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqsl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqsh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqshe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">千个 第二球VS第五球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqgl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqgh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdqghe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">百十 第三球VS第四球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbsl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbsh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbshe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">百个 第三球VS第五球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbgl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbgh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdbghe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>

								<div style="margin-top:.075rem;">
									<div class="ssc-ct-title">十个 第四球VS第五球</div>
									<div class="ssc-ct-content">
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdsgl" value="龙">龙</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdsgh" value="虎">虎</span><em>2.1733</em></div>
										<div class="ssc-ct-pkball ssc-fang"><span class="jiang" playid="ssclhdsghe" value="和">和</span><em>9.78</em></div>
									</div>
								</div>
							</div>
						</div>
					</if>
				</div>
			</section>
		</section>
	</div>

	<div class="lottery-bottom">
		<div class="ssc-money">
			<div class="ssc-money-jine">
				<span>金额(元)</span>
				<input id="lastMoney" type="tel" class="betMoney">
			</div>
			<div class="ssc-money-kuaix">
				<span data-num="1" class="pushcm">1</span>
				<span data-num="5" class="pushcm">5</span>
				<span data-num="10" class="pushcm">10</span>
				<span data-num="20" class="pushcm">20</span>
				<span data-num="50" class="pushcm">50</span>
				<span data-num="100" class="pushcm">100</span>
				<span data-num="300" class="pushcm">300</span>
			</div>
		</div>
		<div class="ssc-btnbar">
			<div class="ssc-default clearBet">重置选择</div><div class="ssc-primary" onclick="ordering();">确认注单</div>
		</div>
	</div>

	<div class="playtype animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 1001;width: 3.55rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display:none;">
		<div class="byt-top"style="background-color: rgba(33, 33, 33, 0.9);border-radius: .1rem;font-size: 0.15rem;color: #fff;padding: .15rem .1rem;height: 70vh;overflow-y: scroll;">
			<div class="byt-title">时时彩</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="ssc">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
			<div class="byt-title">十一选五</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="x5">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
			<div class="byt-title">快三</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="k3">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
			<!--div class="byt-title">低频彩</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="dpc">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul-->
			<div class="byt-title">幸运28</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="xy28">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
			<div class="byt-title">PK10</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="pk10">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
			<div class="byt-title">六合彩</div>
			<ul>
				<volist name="bncaipiao" id="value" key="key" >
					<eq name="value.typeid" value="lhc">
						<li onclick="location='/lottery/{$value.typeid}/{$value.name}'">
							<span class="spangame">{$value.title}</span>
						</li>
					</eq>
				</volist>
			</ul>
		</div>
	</div>
	<div class="action-sheet lishi dibutop animated" style="display:none;">

		<div class="action-sheet-title">
			{$cptitle} - 最近十期
		</div>
		<div class="bym-30q">
			<table id="fn_getoPenGame" class="noclick action-sheet-kuang">
				<tbody class="tbody text-c">
				</tbody>
			</table>
		</div>
		<div class="action-sheet-button">
			关闭
		</div>
	</div>

	<!-- 投注提示 -->
	<div class="hsycms-model-mask" id="mask-confirm"></div>
	<div class="hsycms-model hsycms-model-confirm" id="confirm">
		<div class="hscysm-model-title">确认投注</div>
		<div class="hsycms-model-text1">彩种：<span way-data="showExpect.shortname"></span><br>期号：<span way-data="showExpect.currFullExpect"></span><br>投注账号：<span>{$userinfo['username']}</span><br>总投注金额：<span id="Orderdetailtotalprice"></span></div>

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

	<div class="hsycms-model-mask" id="mask-alerts"></div>
	<div class="hsycms-model hsycms-model-alert" id="alerts">
		<div class="hscysm-model-title">温馨提示</div>
		<div class="hsycms-model-icon">
			<svg width="50" height="50">
				<circle class="hsycms-alert-svgcircle"  cx="25" cy="25" r="24" fill="none" stroke="#238af4" stroke-width="2"></circle>   
				<polyline class="hsycms-alert-svggou" fill="none" stroke="#238af4" stroke-width="2.5" points="14,25 23,34 36,18" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		<div class="hsycms-model-text">这里是内容</div>
		<div class="hsycms-model-btn alerts">
			<button type="button ok">确定</button>
		</div>
	</div>
	<script>
		function hsycms(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-alert').show();
			$('#alert').show();	
			$('#mask-error').hide();
			$('#error').hide();
			$('#mask-alerts').hide();
			$('#alerts').hide();
		}
		function hsycmserror(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-error').show();
			$('#error').show();	
			$('#mask-alert').hide();
			$('#alert').hide();
			$('#mask-alerts').hide();
			$('#alerts').hide();
		}
		function hsycmss(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-alerts').show();
			$('#alerts').show();	
			$('#mask-alert').hide();
			$('#alert').hide();
			$('#mask-error').hide();
			$('#error').hide();
		}
		$('.alert button').click(function () {
			$('#mask-alert').hide();
			$('#alert').hide();
		})
		$('.alerts button').click(function () {
			$('#mask-alerts').hide();
			$('#alerts').hide();
		})
		$('.error button').click(function () {
			$('#mask-error').hide();
			$('#error').hide();
		})
	</script>
	<!-- 投注提示 -->

	<script>
		$('.clearBet').click(function () {
			$(".ssc-curr").removeClass("ssc-curr");
			$(".curr").removeClass("curr");
		})
		$('.ssc-ct-pkball').click(function(){
			var has_curr = $(this).hasClass("ssc-curr");
			if(has_curr){
				$(this).removeClass("ssc-curr");
				$(this).find("span").removeClass("curr");
			}else{
				$(this).addClass("ssc-curr")
				$(this).find('span').addClass("curr")
			}
		})
		$(".pushcm").click(function(){
			var vv = $(".betMoney").val();
			var num = $(this).attr('data-num');
			if(vv != ''){
				$(".betMoney").val(Number(num));
			}else{
				$(".betMoney").val(num);
			}
		});
		function openls(){
			$('body').addClass('niubihh');
			$('.alert_bj').show();
			$('.caidan').show();
		}
		
		$(document).delegate('.action-sheet-button1','click',function(){
			$(".caidan").removeClass("dibutop ");
			$(".caidan").addClass("dibubottom");
			setTimeout(function(){
				$('.caidan').hide();
				$('.lishi').show();
				$(".caidan").removeClass("dibubottom ");
			    $(".caidan").addClass("dibutop");
			},200);
		})
	</script>
	<script>
		$(document).delegate('.play_wanfa','click',function(){
			$('body').addClass('niubihh');
			$('.alert_bj').show();
			$('.play_select_insert').show();
		})
		$(document).delegate('.play_type','click',function(){
			$('body').addClass('niubihh');
			$('.alert_bj').show();
			$('.playtype').show();
		})
		$(document).delegate('.alert_bj','click',function(){
			if($(".playtype").css("display")=='block'){
				$('body').removeClass('niubihh');
				$(".playtype").removeClass("linearTop ");
				$(".playtype").addClass("linearBottom");
				setTimeout(function(){
					$('.alert_bj').hide();
					$('.playtype').hide();
					$(".playtype").removeClass("linearBottom ");
					$(".playtype").addClass("linearTop");
				},200);
			}else if($(".play_select_insert").css("display")=='block'){
				$('body').removeClass('niubihh');
				$(".play_select_insert").removeClass("linearTop ");
				$(".play_select_insert").addClass("linearBottom");
				setTimeout(function(){
					$('.alert_bj').hide();
					$('.play_select_insert').hide();
					$(".play_select_insert").removeClass("linearBottom ");
					$(".play_select_insert").addClass("linearTop");
				},200);
			}else if($(".action-sheet").css("display")=='block'){
				$('body').removeClass('niubihh');
				$(".action-sheet").removeClass("dibutop ");
				$(".action-sheet").addClass("dibubottom");
				setTimeout(function(){
					$('.alert_bj').hide();
					$('.action-sheet').hide();
					$(".action-sheet").removeClass("dibubottom ");
					$(".action-sheet").addClass("dibutop");
				},200);
			}else if($(".lishi").css("display")=='block'){
				$('body').removeClass('niubihh');
				$(".lishi").removeClass("dibutop ");
				$(".lishi").addClass("dibubottom");
				setTimeout(function(){
					$('.alert_bj').hide();
					$('.lishi').hide();
					$(".lishi").removeClass("dibubottom ");
					$(".lishi").addClass("dibutop");
				},200);
			}
		})
		$(document).delegate('.action-sheet-button','click',function(){
			$(".action-sheet").removeClass("dibutop ");
			$(".action-sheet").addClass("dibubottom");
			setTimeout(function(){
				$('body').removeClass('niubihh');
				$('.alert_bj').hide();
				$('.action-sheet').hide();
				$(".action-sheet").removeClass("dibubottom ");
				$(".action-sheet").addClass("dibutop");
			},200);
			
		})
	</script>
	<script>
		$(".jiang").each(function(){
			var playid = $(this).attr('playid');
			$(this).parent().find('em').text(k3lotteryrates.rates[playid].maxjj);
		});
	</script>
	<script>
		$(".ssc-ct-wanfa li").click(function(){
			$(this).siblings().removeClass('ssc-selected');
			$(this).addClass('ssc-selected');
			var index = $(this).index();
			$('.ssc-playmain .wanfa').hide().eq(index).show();
			var ytext = $(this).text();
			$('.play_wanfa string').text(ytext);
			$('body').removeClass('niubihh');
			$(".play_select_insert").removeClass("linearTop ");
			$(".play_select_insert").addClass("linearBottom");
			setTimeout(function(){
				$('.alert_bj').hide();
				$('.play_select_insert').hide();
				$(".play_select_insert").removeClass("linearBottom ");
				$(".play_select_insert").addClass("linearTop");
			},200);
		});
	</script>
</body>
</html>
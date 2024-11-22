<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>在线投注 - {:GetVar('webtitle')}线上平台</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<!--爱尚互联-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>

	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">

	<script type="text/javascript" src="/ascn/mobile/js/alert.min.js"></script>
	<!--爱尚互联-->

	<script>
		var WebConfigs = {
			'ROOT' : "__ROOT__"
		} 
		<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
	</script>
	<style>
		.bet-item i.Dice[data-v-e60a1042] {
			font-size: .75em;
			width: 1.75em;
			height: 1.75em;
			line-height: 1.8em;
			background-image: url(/Template/Mobile/ct/img/diceK3.0257545.png);
			display: inline-block;
			background-size: 210% 602%;
			vertical-align: middle
		}

		.bet-item.bigDice[data-v-e60a1042] {
			padding-top: .15em;
			padding-bottom: .03em
		}

		.bet-item.bigDice i[data-v-e60a1042] {
			font-size: 1em;
			position: relative;
			top: .1em
		}

		.Dice1[data-v-e60a1042] {
			background-position: 0 0
		}

		.Dice2[data-v-e60a1042] {
			background-position: 0 -100%
		}

		.Dice3[data-v-e60a1042] {
			background-position: 0 -199.9%
		}

		.Dice4[data-v-e60a1042] {
			background-position: 0 -300%
		}

		.Dice5[data-v-e60a1042] {
			background-position: 0 -400.3%
		}

		.Dice6[data-v-e60a1042] {
			background-position: 0 -500%
		}
		.selectMultiple .lanIconNumber {
			width: 14px;
			height: 14px;
			font-size: 80%;
			border-radius: 50%;
			background: #a68f4c;
			position: absolute;
			top: 4px;
			left: 69px;
			line-height: 14px;
			text-align: center;
			color: #fff;
			display: none;
		}
		.bym-30q .lotterys .hm{
        float: none;
    }
    .bym-30q .lotterys .k3hz{
        float: right;
    }
    .bym-30q .lotterys .k3hz em{
        display: inline-block;
        width:.2rem;
    }
    .bet-item i.Dice[data-v-e60a1042]{
        width:.25rem;
        height: .25rem;
    }
	</style>
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
    		var Numbersh = $(this).attr('ball-number');
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
    			'beishu':1,
    			'yjf':1
    		});
    	});
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
    					$(".ssc-curr").removeClass("ssc-curr");
			            $(".curr").removeClass("curr");
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
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/zepto.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/config.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/fx.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/slideupdown.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/sm-extend.min.js' charset='utf-8'></script>
<link rel="stylesheet" href="__ROOT__/Template/Mobile/css/sm-extend.min.css">
<link rel="stylesheet" href="__ROOT__/Template/Mobile/css/reset.css">
<link rel="stylesheet" href="__ROOT__/Template/Mobile/css/theme-red.css">  
<script>
	var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
</script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/way.min.js' charset='utf-8'></script>
<script type="text/javascript" src="__ROOT__/Template/Mobile/js/member.page.js"></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/common.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/k3.js' charset='utf-8'></script>
</head>
<body class="">
	<header class="gamesheader1">
		<span class="play_type">{$cptitle}<i style="font-size: .14rem;"class="iconfont"> &#xe647;</i></span>
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="by-lottery page">
		<div class="lottery-top">
			<div class="lottery-top-0">
				<div class="gameType play_wanfa">
					<span style="color: #0e0e0e;font-weight:800">双面玩法</span>
					<span style="color: #0e0e0e;float:right;" class="">
						<string>大小骰宝</string>
						<i class="iconfont">&#xe618;</i>
					</span>
				</div>
				<div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
				<div class="play_select_insert animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 20001;width: 3.35rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display: none;" id="j_play_select">
					<div class="play_select_top">
						<span><i class="iconfont">&#xe633;</i>标准模式 - 选择玩法</span>
						<span ontouchend="window.location.href='/lottery/k3/{:I('code')}'"><i class="iconfont">&#xe639;</i>[切换到双面]</span>
					</div>
					<ul class="play_select_tit" style="height: 69vh;max-height: 69vh;padding: 0;overflow: hidden;overflow-y: auto;">
						<div class="ssc-ct-wanfa">
							<li class="ssc-selected" lottery_code="k3dxsb">大小骰宝</li>
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
				<div class="byhaoma byhaoma-k3">
					<ol>
						<li way-data="showExpect.openCode1">0</li>
						<li way-data="showExpect.openCode2">0</li>
						<li way-data="showExpect.openCode3">0</li>
					</ol>
				</div>
			</div>
			<div class="lottery-top-3" onclick="openls();"><i class="iconfont"></i></div>
			<div class="action-sheet caidan dibutop animated" style="display:none;">
				<div class="action-sheet-button1">最近开奖</div>
				<div class="action-sheet-button2" onclick="location.href='/userCenter/betRecord'">我的投注</div>

				<div class="action-sheet-button">取消</div>
			</div>
		</div>
		<!-- 玩法开始 -->
		<div class="lottery-number" id="k3dxsb">
			<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll"class="lottery-number-tips play_select_prompt">
				<span>Tips：</span><span way-data="tabDoc">开奖结果为3个号码，每个号码由1-6所组成，投注组合与开奖内容相符即为中奖。</span>
			</marquee>
			<div class="ssc-playmain">
				<div>
					<div>
						<div class="ssc-ct-title">三军/大小</div>
						<div class="ssc-ct-content">
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx1" ball-number="1"><i class="dice1"></i></span><em >{$peilv.sjdx1}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx2" ball-number="2"><i class="dice2"></i></span><em >{$peilv.sjdx2}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx3" ball-number="3"><i class="dice3"></i></span><em >{$peilv.sjdx3}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx4" ball-number="4"><i class="dice4"></i></span><em >{$peilv.sjdx4}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx5" ball-number="5"><i class="dice5"></i></span><em >{$peilv.sjdx5}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdx6" ball-number="6"><i class="dice6"></i></span><em >{$peilv.sjdx6}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdxd" ball-number="大">大</span><em >{$peilv.sjdxd}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="sjdxs" ball-number="小">小</span><em >{$peilv.sjdxs}</em></div>
						</div>
					</div>

					<div style="margin-top:.075rem;">
						<div class="ssc-ct-title">围骰/全骰</div>
						<div class="ssc-ct-content">
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs111" ball-number="111"><i class="dice1"></i><i class="dice1"></i><i class="dice1"></i></span><em >{$peilv.wsqs111}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs222" ball-number="222"><i class="dice2"></i><i class="dice2"></i><i class="dice2"></i></span><em >{$peilv.wsqs222}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs333" ball-number="333"><i class="dice3"></i><i class="dice3"></i><i class="dice3"></i></span><em >{$peilv.wsqs333}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs444" ball-number="444"><i class="dice4"></i><i class="dice4"></i><i class="dice4"></i></span><em >{$peilv.wsqs444}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs555" ball-number="555"><i class="dice5"></i><i class="dice5"></i><i class="dice5"></i></span><em >{$peilv.wsqs555}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqs666" ball-number="666"><i class="dice6"></i><i class="dice6"></i><i class="dice6"></i></span><em >{$peilv.wsqs666}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="wsqsqqq" ball-number="全骰">全骰</span><em >{$peilv.wsqsqqq}</em></div>
						</div>
					</div>

					<div style="margin-top:.075rem;">
						<div class="ssc-ct-title">长牌</div>
						<div class="ssc-ct-content">
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp12" ball-number="12"><i class="dice1"></i><i class="dice2"></i></span><em >{$peilv.cp12}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp13" ball-number="13"><i class="dice1"></i><i class="dice3"></i></span><em >{$peilv.cp13}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp14" ball-number="14"><i class="dice1"></i><i class="dice4"></i></span><em >{$peilv.cp14}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp15" ball-number="15"><i class="dice1"></i><i class="dice5"></i></span><em >{$peilv.cp15}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp16" ball-number="16"><i class="dice1"></i><i class="dice6"></i></span><em >{$peilv.cp16}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp23" ball-number="23"><i class="dice2"></i><i class="dice3"></i></span><em >{$peilv.cp23}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp24" ball-number="24"><i class="dice2"></i><i class="dice4"></i></span><em >{$peilv.cp24}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp25" ball-number="25"><i class="dice2"></i><i class="dice5"></i></span><em >{$peilv.cp25}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp26" ball-number="26"><i class="dice2"></i><i class="dice6"></i></span><em >{$peilv.cp26}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp34" ball-number="34"><i class="dice3"></i><i class="dice4"></i></span><em >{$peilv.cp34}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp35" ball-number="35"><i class="dice3"></i><i class="dice5"></i></span><em >{$peilv.cp35}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp36" ball-number="36"><i class="dice3"></i><i class="dice6"></i></span><em >{$peilv.cp36}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp45" ball-number="45"><i class="dice4"></i><i class="dice5"></i></span><em >{$peilv.cp45}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp46" ball-number="46"><i class="dice4"></i><i class="dice6"></i></span><em >{$peilv.cp46}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="cp56" ball-number="56"><i class="dice5"></i><i class="dice6"></i></span><em >{$peilv.cp56}</em></div>
						</div>
					</div>

					<div style="margin-top:.075rem;">
						<div class="ssc-ct-title">短牌</div>
						<div class="ssc-ct-content">
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp11" ball-number="11"><i class="dice1"></i><i class="dice1"></i></span><em >{$peilv.dp11}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp22" ball-number="22"><i class="dice2"></i><i class="dice2"></i></span><em >{$peilv.dp22}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp33" ball-number="33"><i class="dice3"></i><i class="dice3"></i></span><em >{$peilv.dp33}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp44" ball-number="44"><i class="dice4"></i><i class="dice4"></i></span><em >{$peilv.dp44}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp55" ball-number="55"><i class="dice5"></i><i class="dice5"></i></span><em >{$peilv.dp55}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="dp66" ball-number="66"><i class="dice6"></i><i class="dice6"></i></span><em >{$peilv.dp66}</em></div>
						</div>
					</div>

					<div style="margin-top:.075rem;">
						<div class="ssc-ct-title">点数</div>
						<div class="ssc-ct-content">
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds4" ball-number="4">4点</span><em >{$peilv.ds4}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds5" ball-number="5">5点</span><em >{$peilv.ds5}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds6" ball-number="6">6点</span><em >{$peilv.ds6}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds7" ball-number="7">7点</span><em >{$peilv.ds7}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds8" ball-number="8">8点</span><em >{$peilv.ds8}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds9" ball-number="9">9点</span><em >{$peilv.ds9}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds10" ball-number="10">10点</span><em >{$peilv.ds10}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds11" ball-number="11">11点</span><em >{$peilv.ds11}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds12" ball-number="12">12点</span><em >{$peilv.ds12}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds13" ball-number="13">13点</span><em >{$peilv.ds13}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds14" ball-number="14">14点</span><em >{$peilv.ds14}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds15" ball-number="15">15点</span><em >{$peilv.ds15}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds16" ball-number="16">16点</span><em >{$peilv.ds16}</em></div>
							<div class="ssc-ct-pkball ssc-ct-pkball-k3 ssc-fang"><span class="jiang" playid="ds17" ball-number="17">17点</span><em >{$peilv.ds17}</em></div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- 玩法结束 -->
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
			<div class="ssc-default">重置选择</div><div class="ssc-primary" onclick="ordering();">确认注单</div>
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
		$('.ssc-default').click(function () {
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
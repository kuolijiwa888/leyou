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
	<link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
	<script src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<!--爱尚互联-->
	<!--爱尚互联-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
	<script type="text/javascript" src="/ascn/mobile/js/alert.min.js"></script>
	<!--爱尚互联-->
	<script>
		var WebConfigs = {'ROOT' : "__ROOT__"} 
		<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
	</script>
	<script>
		var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
	</script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/jquery-1.9.1.min.js"></script>
		
		<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
		<script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
		<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
		<script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
		<script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
		<script type="text/javascript" src="__ROOT__/Template/Mobile/js/tabGameData.js"></script>
		<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jisk3.js' charset='utf-8'></script>
		<script type="text/javascript" src="__ROOT__/resources/js2/bootstrap.min.js"></script>

		
		

		<script type="text/javascript">
			$(function(){
				console.log(k3lotteryrates.rates);
				$(".bet-item-box-Con").each(function(){
					var playid = $(this).find(".bet-item-box").attr('playid');
					$(this).find("i").text(k3lotteryrates.rates[playid].maxjj);
				});
			});
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
						<span style="font-weight:800">标准玩法</span>
						<span style="float:right;" class="">
							<string>和值</string>
							<i class="iconfont">&#xe618;</i>
						</span>
					</div>
					<div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
					<div class="play_select_insert animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 20001;width: 3.35rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display: none;" id="j_play_select">
						<div class="play_select_top">
							<span><i class="iconfont">&#xe633;</i>标准模式 - 选择玩法</span>
							<span ontouchend="window.location.href='/lotterys_hot/k3/{:I('code')}/1'"><i class="iconfont">&#xe639;</i>[切换到双面]</span>
						</div>
						<ul class="play_select_tit" style="height: 69vh;max-height: 69vh;padding: 0;overflow: hidden;overflow-y: auto;">
							<div class="ssc-ct-wanfa">
								<li class="ssc-selected" lottery_code="k3hzzx">和值</li>
								<li style="margin-left: .1rem;" lottery_code="k3sthtx">三同号通选</li>
								<li lottery_code="k3sthdx">三同号单选</li>
								<li style="margin-left: .1rem;" lottery_code="k3sbthbz">三不同号</li>
								<li lottery_code="k3slhtx">三连号通选</li>
								<li style="margin-left: .1rem;" lottery_code="k3ethfx">二同号复选</li>
								<li lottery_code="k3ethdx">二同号单选</li>
								<li style="margin-left: .1rem;" lottery_code="k3ebthbz">二不同号</li>
								<li lottery_code="k3hhm">红黑码</li>
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
				<div class="lottery-top-3" onclick="openls();"><i class="iconfont">&#xe7bb;</i></div>
				<div class="action-sheet caidan animated dibutop" style="display:none;">
					<div class="action-sheet-button1">最近开奖</div>
					<div class="action-sheet-button2" onclick="location.href='/userCenter/betRecord'">我的投注</div>

					<div class="action-sheet-button">
						取消
					</div>
				</div>
			</div>
			<!-- 玩法开始 -->
			<div class="lottery-number">
				<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll"class="lottery-number-tips play_select_prompt">
					<span>Tips：</span><span way-data="tabDoc">猜3个开奖号相加的和,3-10为小,11-18为大</span>
				</marquee>
				<!--和值-->
				<div class="lottery-k3 k3hzzx" style="display:block">
					<ul class="ball_list_ul"> 
						<li class="ball_item">
							<a playid="k3hzbig" ball-number="大" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzbig}">
								<b>大</b>
								<p class="peilv">赔率{$peilv.k3hzbig}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzsmall" ball-number="小" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzsmall}">
								<b>小</b>
								<p class="peilv">赔率{$peilv.k3hzsmall}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzodd" ball-number="单" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzodd}">
								<b>单</b>
								<p class="peilv">赔率{$peilv.k3hzodd}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzeven" ball-number="双" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzeven}">
								<b>双</b>
								<p class="peilv">赔率{$peilv.k3hzeven}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzbigodd" ball-number="大单" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzbigodd}">
								<b>大单</b>
								<p class="peilv">赔率{$peilv.k3hzbigodd}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzsmallodd" ball-number="小单" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzsmallodd}">
								<b>小单</b>
								<p class="peilv">赔率{$peilv.k3hzsmallodd}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzbigeven" ball-number="大双" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzbigeven}">
								<b>大双</b>
								<p class="peilv">赔率{$peilv.k3hzbigeven}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hzsmalleven" ball-number="小双" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hzsmalleven}">
								<b>小双</b>
								<p class="peilv">赔率{$peilv.k3hzsmalleven}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz3" ball-number="3" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz3}">
								<b>3</b>
								<p class="peilv">赔率{$peilv.k3hz3}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz4" ball-number="4" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz4}">
								<b>4</b>
								<p class="peilv">赔率{$peilv.k3hz4}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz5" ball-number="5" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz5}">
								<b>5</b>
								<p class="peilv">赔率{$peilv.k3hz5}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz6" ball-number="6" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz6}">
								<b>6</b>
								<p class="peilv">赔率{$peilv.k3hz6}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz7" ball-number="7" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz7}">
								<b>7</b>
								<p class="peilv">赔率{$peilv.k3hz7}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz8" ball-number="8" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz8}">
								<b>8</b>
								<p class="peilv">赔率{$peilv.k3hz8}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz9" ball-number="9" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz9}">
								<b>9</b>
								<p class="peilv">赔率{$peilv.k3hz9}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz10" ball-number="10" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz10}">
								<b>10</b>
								<p class="peilv">赔率{$peilv.k3hz10}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz11" ball-number="11" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz11}">
								<b>11</b>
								<p class="peilv">赔率{$peilv.k3hz11}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz12" ball-number="12" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz12}">
								<b>12</b>
								<p class="peilv">赔率{$peilv.k3hz12}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz13" ball-number="13" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz13}">
								<b>13</b>
								<p class="peilv">赔率{$peilv.k3hz13}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz14" ball-number="14" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz14}">
								<b>14</b>
								<p class="peilv">赔率{$peilv.k3hz14}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz15" ball-number="15" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz15}">
								<b>15</b>
								<p class="peilv">赔率{$peilv.k3hz15}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz16" ball-number="16" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz16}">
								<b>16</b>
								<p class="peilv">赔率{$peilv.k3hz16}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz17" ball-number="17" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz17}">
								<b>17</b>
								<p class="peilv">赔率{$peilv.k3hz17}</p>
							</a>
						</li> 
						<li class="ball_item">
							<a playid="k3hz18" ball-number="18" href="javascript:void(0)" class="ball_number" peilv="{$peilv.k3hz18}">
								<b>18</b>
								<p class="peilv">赔率{$peilv.k3hz18}</p>
							</a>
						</li> 
					</ul>
				</div>
				<!--和值-->
				<!--三同号通选-->
				<div class="lottery-k3 k3sthtx"style="display:none">
					<ul class="ball_list_ul"> 
						<li style="width:100%" class="ball_item">
							<a playid="k3sthtx" href="javascript:void(0);" ball-number="三同号通选" class="ball_number" id="slhtx_btn">
								<b>三同号通选</b>
							</a>
						</li> 
					</ul>
				</div>
				<!--三同号通选-->
				<!--三同号单选-->
				<div class="lottery-k3 k3sthdx" style="display:none;">
					<ul class="ball_list_ul"> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="111" href="javascript:void(0)" class="ball_number">
								<b>111</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="222" href="javascript:void(0)" class="ball_number">
								<b>222</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="333" href="javascript:void(0)" class="ball_number">
								<b>333</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="444" href="javascript:void(0)" class="ball_number">
								<b>444</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="555" href="javascript:void(0)" class="ball_number">
								<b>555</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sthdx" ball-number="666" href="javascript:void(0)" class="ball_number">
								<b>666</b>
							</a>
						</li> 
					</ul>
				</div>
				<!--三同号单选-->
				<!--三不同号-->
				<div class="lottery-k3 k3sbthbz" style="display:none">
					<ul class="ball_list_ul"> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="1" href="javascript:void(0)" class="ball_number">
								<b>1</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="2" href="javascript:void(0)" class="ball_number">
								<b>2</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="3" href="javascript:void(0)" class="ball_number">
								<b>3</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="4" href="javascript:void(0)" class="ball_number">
								<b>4</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="5" href="javascript:void(0)" class="ball_number">
								<b>5</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a playid="k3sbthbz" ball-number="6" href="javascript:void(0)" class="ball_number">
								<b>6</b>
							</a>
						</li> 
					</ul>
				</div>
				<!--三不同号-->
				<!--三连号通选-->
				<div class="lottery-k3 k3slhtx" style="display:none">
					<ul class="ball_list_ul">
						<li style="width:100%" class="ball_item">
							<a playid="k3slhtx" ball-number="三连号通选" class="ball_number" href="javascript:void(0)">
								<b>三连号通选</b>
							</a>
						</li>
					</ul>
				</div>
				<!--三连号通选-->
				<!--二同号复选-->
				<div class="lottery-k3 k3ethfx" style="display:none">
					<ul class="ball_list_ul"> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="11" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>11</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="22" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>22</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="33" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>33</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="44" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>44</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="55" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>55</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="66" playid="k3ethfx" href="javascript:void(0)" class="ball_number">
								<b>66</b>
							</a>
						</li> 
					</ul>
				</div>
				<!--二同号复选-->
				<!--二同号单选-->
				<div class="lottery-k3 k3ethdx"style="display:none">

					<ul class="ball_list_ul"> 
						<li class="ball_item">
							<a ball-number="11" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>11</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="22" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>22</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="33" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>33</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="44" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>44</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="55" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>55</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="66" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn">
								<b>66</b>
							</a>
						</li> 
					</ul>
					<ul class="ball_list_ul"> 
						<li class="ball_item">
							<a ball-number="1" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>1</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="2" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>2</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="3" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>3</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="4" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>4</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="5" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>5</b>
							</a>
						</li> 
						<li class="ball_item">
							<a ball-number="6" playid="k3ethdx" href="javascript:void(0)" class="ball_number ethdx_btn1">
								<b>6</b>
							</a>
						</li> 
					</ul>

				</div>
				<!--二同号单选-->
				<!--二不同号-->
				<div class="lottery-k3 k3ebthbz" style="display:none">
					<ul class="ball_list_ul"> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="1" playid="k3ebthbz" href="javascript:void(0)" class="ball_number">
								<b>1</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="2" playid="k3ebthbz" href="javascript:void(0)" class="ball_number">
								<b>2</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="3" playid="k3ebthbz" href="javascript:void(0)" class="ball_number">
								<b>3</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="4" playid="k3ebthbz" href="javascript:void(0)" class="ball_number">
								<b>4</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="5" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>5</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="6" playid="k3ebthbz" href="javascript:void(0)" class="ball_number"><b>6</b>
							</a>
						</li> 
					</ul>
				</div>
				<!--二不同号-->
				<!--红黑码-->
				<div class="lottery-k3 k3hhm" style="display:none">
					<ul class="ball_list_ul"> 
						<li style="width:50%" class=" ball_item">
							<a ball-number="红码" playid="hhmhong" href="javascript:void(0)" class="selectNumber">
								<b>红码</b>
							</a>
						</li> 
						<li style="width:50%" class=" ball_item">
							<a ball-number="黑码" playid="hhmhei" href="javascript:void(0)" class="selectNumber">
								<b>黑码</b>
							</a>
						</li> 
						<li style="width:25%" class=" ball_item">
							<a ball-number="红码大" playid="hhmhongd" href="javascript:void(0)" class="selectNumber">
								<b>红码大</b>
							</a>
						</li> 
						<li style="width:25%" class=" ball_item">
							<a ball-number="红码小" playid="hhmhongx" href="javascript:void(0)" class="selectNumber">
								<b>红码小</b> 
							</a> 
						</li> 
						<li style="width:25%" class=" ball_item"> 
							<a ball-number="红码单" playid="hhmhongdd" href="javascript:void(0)" class="selectNumber"> 
								<b>红码单</b>
							</a>
						</li> 
						<li style="width:25%" class=" ball_item"> 
							<a ball-number="红码双" playid="hhmhongss" href="javascript:void(0)" class="selectNumber">
								<b>红码双</b> 
							</a> 
						</li> 
						<li style="width:25%" class=" ball_item"> 
							<a ball-number="黑码大" playid="hhmheid" href="javascript:void(0)" class="selectNumber">
								<b>黑码大</b>
							</a> 
						</li> 
						<li style="width:25%" class=" ball_item"> 
							<a ball-number="黑码小" playid="hhmheix" href="javascript:void(0)" class="selectNumber">
								<b>黑码小</b>
							</a>
						</li> 
						<li style="width:25%" class=" ball_item">
							<a ball-number="黑码单" playid="hhmheidd" href="javascript:void(0)" class="selectNumber">
								<b>黑码单</b> 
							</a>
						</li> 
						<li style="width:25%" class=" ball_item">
							<a ball-number="黑码双" playid="hhmheixx" href="javascript:void(0)" class="selectNumber">
								<b>黑码双</b> 
							</a> 
						</li> 
						<li style="width:100%" class=" ball_item"></li> 
						<li style="width:100%" class=" ball_item"></li> 
						<li style="width:100%" class=" ball_item"></li> 
						<li style="width:100%" class=" ball_item"></li> 
						<li style="width:33.3%" class=" ball_item"> 
							<a ball-number="四码红" playid="hhmhong4hong" href="javascript:void(0)" class="selectNumber">
								<b>四码红</b> 
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item"> 
							<a ball-number="四码黑" playid="hhmhong4hei" href="javascript:void(0)" class="selectNumber">
								<b>四码黑</b>
							</a>
						</li> 
						<li style="width:33.3%" class=" ball_item">
							<a ball-number="五码黑" playid="hhmhong5hei" href="javascript:void(0)" class="selectNumber"> 
								<b>五码黑</b>
							</a>
						</li> 
						<li style="width:100%" class=" ball_item"> 
							<a> 
								<b>红黑码</b> 
							</a>
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="1" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum">
								<b>1</b>
							</a>
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="2" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum"> 
								<b>2</b> 
							</a>
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="3" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum"> 
								<b>3</b>
							</a>
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="4" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum">
								<b>4</b>
							</a> 
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="5" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum"> 
								<b>5</b>
							</a> 
						</li> 
						<li style="width:16.6%" class=" ball_item">
							<a ball-number="6" playid="hhmhei5hei" href="javascript:void(0)" class="selectNumber selectNumberSum">
								<b>6</b>
							</a> 
						</li> 
					</ul>
				</div>
				<!--红黑码-->
			</div>
			<!-- 玩法结束 -->
		</div>

		<div class="lottery-bottom selectMultiple">
			<div class="lottery-bottom-1"id="selectMultipleTId">
				<div class="bottom-moshi">
					<select class="selectMultipleCon" style="padding: 0 0.18rem;">
						<option value="1">1元</option>
						<option value="2">2元</option>
						<option value="5">5元</option>
					</select>
				</div>
				<div class="bottom-beishu selectMultipleNumber">
					<i class="iconfont reduce">&#xe796;</i>
					<span><input type="tel" value="1" class="selectMultipInput" onKeypress="return (/[\d]/.test(String.fromCharCode(event.keyCode)))">倍</span>
					<i class="iconfont add">&#xe795;</i>
				</div>
			</div>
			<div class="lottery-bottom-2">
				<div>
					<span class="select_zhushu">已选 <em class="zhushu"style="color: #434354;font-weight: bold;">0</em> 注</span>,
					<span class="selectMultipleOld">共计 <em class="selectMultipleOldMoney"style="color: #434354;font-weight: bold;">0.00</em>元</span>
				</div>
				<span>余额: <em class="wrapRefreshShow" style="color: #434354;font-weight: bold;">{$userinfo['balance']}</em> 元</span>
			</div>
			<div class="lottery-bottom-3">
				<div>发起合买</div><div style="color: #a68f4c;"class="bygcl goucai"><i class="lanIconNumber"id="lanIconNumbere">0</i><i class="iconfont">&#xe60e;</i> 购彩篮</div><div class="bygcl addtobetbtn"><i class="iconfont">&#xe676;</i> 购彩篮</div><div class="kuaijie">快速投注</div>
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
				{$cptitle} - 最近三十期
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
		<div class="dialog linearTop animated" style="z-index: 201;display:none;">
			<div class="dialog-container">
				<div class="CartMain">
					<div class="top">
						<span>{$cptitle} - 购彩篮</span> 
						<span class="rbtn" id="orderlist_clear">清空所有</span>
					</div> 
					<div class="middle">
						<div class="">
							<div class="gouclanwu yBettingLists">

							</div> 
						</div>
					</div> 
					<div class="foot border_top_1px">
						<span class="border_right_1px"><i class="iconfont">&#xe62c;</i>继续选号</span> 
						<span id="f_submit_order">提交订单</span>
					</div>
				</div>
			</div>
		</div>


		<script>

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

			$(document).delegate('.goucai','click',function(){
				$('body').addClass('niubihh');
				$('.alert_bj').show();
				$('.dialog').show();
			})
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
				}else if($(".dialog").css("display")=='block'){
					$('body').removeClass('niubihh');
					$(".dialog").removeClass("linearTop ");
					$(".dialog").addClass("linearBottom");
					setTimeout(function(){
						$('.alert_bj').hide();
						$('.dialog').hide();
						$(".dialog").removeClass("linearBottom ");
						$(".dialog").addClass("linearTop");
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
			$(document).delegate('.border_right_1px','click',function(){
				$(".dialog").removeClass("linearTop ");
				$(".dialog").addClass("linearBottom");
				setTimeout(function(){
					$('body').removeClass('niubihh');
					$('.alert_bj').hide();
					$('.dialog').hide();
					$(".dialog").removeClass("linearBottom ");
					$(".dialog").addClass("linearTop");
				},200);

			})
		</script>
		<script>
			$(function(){
				$('.play_select_tit .ssc-selected').click();
			})
		</script>


	</body>
	</html>
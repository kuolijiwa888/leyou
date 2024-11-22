<!DOCTYPE html>
<html lang="zh-cn">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线投注 - {:GetVar('webtitle')}线上平台</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta name="renderer" content="webkit" />
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/k3.css" />

	<link rel="stylesheet" href="__CSS2__/header.css">
	<link rel="stylesheet" href="__CSS__/style.css">
	<link rel="stylesheet" href="__CSS2__/ssc.css">
	<!--添加的css-->
	<link rel="stylesheet" href="/ascn/css/games.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/css/games.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/naranja.min.css">
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<style>
		.lotterys div.hm{
			width: 170px;
		}
		.lotterys div.rq{
			width: 110px;
		}

	</style>
	<!--添加的css-->
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
	<script type="text/javascript" src="__ROOT__/resources/js2/hemai.js"></script>

</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">


	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/lhctabGame.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/tabGameData.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/lhc.js"></script>

	<script type="text/javascript" src="__ROOT__/resources/js2/bootstrap.min.js"></script>
	<div class="user-top-to">
		<div class="user-top-to2">
			<section class="container wapper" id="gamepage" style="width:1200px!important;">
				<!--下注头部-->
				<div class="lottery-head-bg">
					<div class="lottery-head-wrapper">
						<a href="/gameChart/trend_lhc/{$lotteryname}" class="lottery-head-chart">开奖走势</a>
						<div class="fl head-left">
							<i class="lottery-logo"way-data="showLotteryTitle.name">------</i>
							<a href="javascript:void(0);"class="yopen_explain helps lottery-resave">玩法说明</a>
						</div>
						<div class="fl clearfix head-center">
							<div class="fl head-center-issue">
								<div class="head-center-bell"></div>
								<div class="head-center-issue-top">
									第
									<em class="current-issue" id="f_lottery_info_number" way-data="showExpect.currFullExpect">-----</em>
									期
								</div>
								<div class="head-center-issue-bottom">
									投注截止还有
								</div>
							</div>
							<div class="fr head-center-clock">
								<span class="count-down-wrapper issue-countdown">
									<i class="count-down-hours"way-data="gametimes.h" style="min-width: 34px;width: auto;">00</i>
									<i class="count-down-symbol">:</i>
									<i class="count-down-minutes"way-data="gametimes.m">00</i>
									<i class="count-down-symbol">:</i>
									<i class="count-down-seconds"way-data="gametimes.s">00</i>
								</span>
							</div>
						</div>
						<div class="fr clearfix head-right">
							<div class="fr head-right-opencode" lottery-type="lhc">
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode1">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode2">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode3">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode4">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode5">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode6">0</span>
								<span class="opencode bounceInDown"lottery-type="lhc">+</span>
								<span class="opencode bounceInDown"lottery-type="lhc"way-data="showExpect.openCode7">0</span>
							</div>
							<div class="fr head-right-issue">
								<div class="head-right-issue-top">
									第
									<em class="open-issue"way-data="showExpect.lastFullExpect" id="f_lottery_info_lastnumber" firstissueno="">------</em>
									期
								</div>
								<div class="head-right-issue-bottom">
									开奖号码
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--下注头部结束-->

				<div class="lottery_playContainer">
					<section id="gameBet" class="cl" style="position:relative">
						<section class="gameBet_balls">
							<div class="play_select_insert" id="j_play_select">
								<ul class="play_select_tit">
									<li lottery_code="lhc_tm" class="curr">特码</li>
									<li lottery_code="lhc_zm">正码</li>
									<li lottery_code="lhc_lm">连码</li>
									<li lottery_code="lhc_bb">半波</li>
									<li lottery_code="lhc_sx">生肖</li> 
									<li lottery_code="lhc_ws">尾数</li> 
									<li lottery_code="lhc_bz">不中</li> 
								</ul>
							</div>
							<div class="gameBet_left l">
								<if condition="$nowcpinfo['iswh'] eq 0">
									<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
										<ul id="bet_filter">

										</ul>
									</div>
									<div class="bet-num-box">
										<!--特码全-->
										<div class="lhc_tm" style="display:block">
											<div class="30041321">
												<!--特码直选-->
												<div class="tmzx" style="display: block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码中包含特码，即为中奖</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_lhctmzx><?= $rates['rates']['tmzx']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="tmzx" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="tmzx" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="tmzx" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--特码两面-->
												<div class="lhctmlm" style="display: none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码最后一位为特码。大于或等于25为特码大，小于或等于24为特码小；奇数为单，偶数为双；特码两个数相加后得数，奇数为合单，偶数为合双，小于等于6为合小，大于6为合大；尾大尾小即看特码个位数值，小于等于4为小，大于4为大；特码为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['tmlmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['tmlmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['tmlmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['tmlmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['tmlmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['tmlmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['tmlmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['tmlmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['tmlmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['tmlmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="tmlmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="tmlmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="tmlmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="tmlmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="tmlmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="tmlmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="tmlmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="tmlmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="tmlmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="tmlmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="tmlmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="tmlmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="tmlmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="tmlmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="tmlmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="tmlmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="tmlmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="tmlmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="tmlmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--正码全-->
										<div class="lhc_zm" style="display:none">
											<div class="30041321">
												<!--正码任选-->
												<div class="zmrx" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码在开奖号码前六位中存在，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zmrx']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zmrx" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zmrx" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zmrx" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正一特-->
												<div class="zm1t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第一位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm1t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm1t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm1t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm1t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正二特-->
												<div class="zm2t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第二位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm2t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm2t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm2t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm2t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正三特-->
												<div class="zm3t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第三位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm3t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm3t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm3t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm3t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正四特-->
												<div class="zm4t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第四位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm4t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm4t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm4t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm4t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正五特-->
												<div class="zm5t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第五位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm5t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm5t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm5t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm5t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正码正六特-->
												<div class="zm6t" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第六位相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['zm6t']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="zm6t" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="zm6t" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="zm6t" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--正一两面-->
												<div class="lhczmz12m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第一位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm1lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm1lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm1lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm1lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm1lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm1lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm1lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm1lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm1lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm1lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm1lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm1lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm1lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm1lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm1lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm1lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm1lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm1lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm1lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm1lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm1lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm1lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm1lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm1lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm1lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm1lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm1lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm1lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm1lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
												<!--正二两面-->
												<div class="lhczmz22m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第二位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm2lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm2lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm2lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm2lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm2lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm2lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm2lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm2lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm2lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm2lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm2lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm2lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm2lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm2lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm2lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm2lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm2lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm2lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm2lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm2lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm2lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm2lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm2lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm2lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm2lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm2lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm2lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm2lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm2lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
												<!--正三两面-->
												<div class="lhczmz32m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第三位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm3lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm3lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm3lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm3lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm3lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm3lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm3lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm3lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm3lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm3lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm3lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm3lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm3lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm3lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm3lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm3lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm3lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm3lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm3lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm3lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm3lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm3lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm3lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm3lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm3lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm3lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm3lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm3lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm3lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
												<!--正四两面-->
												<div class="lhczmz42m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第四位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm4lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm4lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm4lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm4lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm4lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm4lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm4lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm4lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm4lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm4lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm4lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm4lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm4lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm4lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm4lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm4lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm4lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm4lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm4lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm4lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm4lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm4lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm4lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm4lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm4lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm4lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm4lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm4lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm4lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
												<!--正五两面-->
												<div class="lhczmz52m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第五位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm5lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm5lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm5lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm5lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm5lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm5lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm5lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm5lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm5lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm5lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm5lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm5lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm5lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm5lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm5lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm5lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm5lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm5lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm5lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm5lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm5lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm5lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm5lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm5lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm5lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm5lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm5lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm5lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm5lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
												<!--正六两面-->
												<div class="lhczmz62m" style="display:none">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码第六位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>大小单双</th>
																					<th><?= $rates['rates']['zm6lmda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双/大单</th>
																					<th><?= $rates['rates']['zm6lmdadan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双/小单</th>
																					<th><?= $rates['rates']['zm6lmxiaodan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合大/合小</th>
																					<th><?= $rates['rates']['zm6lmheda']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>合单/合双</th>
																					<th><?= $rates['rates']['zm6lmhedan']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>尾大/尾小</th>
																					<th><?= $rates['rates']['zm6lmweida']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>家禽/野兽</th>
																					<th><?= $rates['rates']['zm6lmjiaqin']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>红波</th>
																					<th><?= $rates['rates']['zm6lmhongbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['zm6lmlvbo']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['zm6lmlanbo']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">两面</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm6lmda" data-number="大">大</a>
																<a class="selectNumber k3hhm" playid="zm6lmxiao" data-number="小">小</a>
																<a class="selectNumber k3hhm" playid="zm6lmdan" data-number="单">单</a>
																<a class="selectNumber k3hhm" playid="zm6lmshuang" data-number="双">双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm6lmdadan" data-number="大单">大单</a>
																<a class="selectNumber k3hhm" playid="zm6lmdashuang" data-number="大双">大双</a>
																<a class="selectNumber k3hhm" playid="zm6lmxiaodan" data-number="小单">小单</a>
																<a class="selectNumber k3hhm" playid="zm6lmxiaoshuang" data-number="小双">小双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm6lmheda" data-number="合大">合大</a>
																<a class="selectNumber k3hhm" playid="zm6lmhexiao" data-number="合小">合小</a>
																<a class="selectNumber k3hhm" playid="zm6lmhedan" data-number="合单">合单</a>
																<a class="selectNumber k3hhm" playid="zm6lmheshuang" data-number="合双">合双</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm6lmweida" data-number="尾大">尾大</a>
																<a class="selectNumber k3hhm" playid="zm6lmweixiao" data-number="尾小">尾小</a>
																<a class="selectNumber k3hhm" playid="zm6lmjiaqin" data-number="家禽">家禽</a>
																<a class="selectNumber k3hhm" playid="zm6lmyeshou" data-number="野兽">野兽</a>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a class="selectNumber k3hhm" playid="zm6lmhongbo" data-number="红波">红波</a>
																<a class="selectNumber k3hhm" playid="zm6lmlvbo" data-number="绿波">绿波</a>
																<a class="selectNumber k3hhm" playid="zm6lmlanbo" data-number="蓝波">蓝波</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--连码全-->
										<div class="lhc_lm" style="display:none;">
											<div class="30041321">
												<!--三全中-->
												<div class="lhclm3qz" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择三个号码，每三个号码为一组合，若三个号码都是开奖号码之正码，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['lm3qz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3qz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3qz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3qz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--三中二-->
												<div class="lhclm3z2" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择三个号码，每三个号码为一组合，若其中至少有两个是开奖号码中的正码，即为中奖。若中两码，叫三中二之中二;若三码全中，叫三中二之中三。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>中二</th>
																					<th><?= $rates['rates']['lm3z2']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>中三</th>
																					<th><?= $rates['rates']['lm3qz']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm3z2" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm3z2" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm3z2" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--二全中-->
												<div class="lhclm2qz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择两个号码，每二个码号为一组合，二个号码都是开奖码号之正码（不含特码），即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em way-data="tabDoc"><?= $rates['rates']['lm2qz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2qz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2qz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2qz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--二中特-->
												<div class="lhclm2zt" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择两个号码，每二个号码为一组合，二个号码都是开奖号码（含特码），即为中奖。若两个都是正码，叫二中特之二中。若选号中包含特码，叫二中特之中特。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>二中</th>
																					<th><?= $rates['rates']['lm2zt']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>中特</th>
																					<th><?= $rates['rates']['lm2zt']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lm2zt" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lm2zt" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lm2zt" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--特串-->
												<div class="lhclmtc" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择两个号码，每二个号码为一组合，其中一个是正码，一个是特别号码，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em way-data="tabDoc"><?= $rates['rates']['lmtc']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="lmtc" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="lmtc" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="lmtc" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--半波全-->
										<div class="lhc_bb" style="display:none">
											<div class="games-wfjj">
												<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
													<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">根据特码对应的特性来区分。分为红蓝绿三个波色，以及号码大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；合单合双为开奖号的十位与个位相加后得数的单双。下注内容与号码特性完全吻合即为中奖。</span></div>
												</div>
												<div class="wanfajj jiangjin"><span>单注奖金：</span>
													<em way-data="tabDoc">
														<span class="moneyInfo">奖金详情
															<div class="moneyInfoHover">
																<table class="moneyInfoTable">
																	<tbody>
																		<tr>
																			<th>猜中</th>
																			<th>单注最高奖金</th>
																		</tr>
																		<tr>
																			<th>红大</th>
																			<th><?= $rates['rates']['hongda']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红小</th>
																			<th><?= $rates['rates']['hongxiao']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红单</th>
																			<th><?= $rates['rates']['hongdan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红双</th>
																			<th><?= $rates['rates']['hongshuang']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红合单</th>
																			<th><?= $rates['rates']['honghedan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红合双</th>
																			<th><?= $rates['rates']['hongheshuang']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿大</th>
																			<th><?= $rates['rates']['lvda']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿小</th>
																			<th><?= $rates['rates']['lvxiao']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿单</th>
																			<th><?= $rates['rates']['lvdan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿双</th>
																			<th><?= $rates['rates']['lvshuang']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿合单</th>
																			<th><?= $rates['rates']['lvhedan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>绿合双</th>
																			<th><?= $rates['rates']['lvheshuang']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝大</th>
																			<th><?= $rates['rates']['landa']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝小</th>
																			<th><?= $rates['rates']['lanxiao']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝单</th>
																			<th><?= $rates['rates']['landan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝双</th>
																			<th><?= $rates['rates']['lanshuang']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝合单</th>
																			<th><?= $rates['rates']['lanhedan']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>蓝合双</th>
																			<th><?= $rates['rates']['lanheshuang']['rate'] ?></th>
																		</tr>
																	</tbody>
																</table>
															</div>
														</span>
													</em>
												</div>
											</div>
											<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<div class="selectNmuverBox">
													<span class="numberTitle">半波</span>
													<div class="selectNumbers" style="max-width: 770px;">
														<div class="selectNumber lhcbb-1" playid="hongda" data-number="红大">红大<em class="lmbbNumber">29 30 34 35 40 45 46</em></div>
														<div class="selectNumber lhcbb-1" playid="hongxiao" data-number="红小">红小<em class="lmbbNumber">01 02 07 08 12 13 18 19 23 24</em></div>
														<div class="selectNumber lhcbb-1" playid="hongdan" data-number="红单">红单<em class="lmbbNumber">01 07 13 19 23 29 35 45</em></div>
														<div class="selectNumber lhcbb-1" playid="hongshuang" data-number="红双">红双<em class="lmbbNumber">02 08 12 18 24 30 34 40 46</em></div>
														<div class="selectNumber lhcbb-1" playid="honghedan" data-number="红合单">红合单<em class="lmbbNumber">01 07 12 18 23 29 30 34 35</em></div>
														<div class="selectNumber lhcbb-1" playid="hongheshuang" data-number="红合双">红合双<em class="lmbbNumber">02 08 13 19 24 35 40 46</em></div>

														<div class="selectNumber lhcbb-1" playid="lvda" data-number="绿大">绿大<em class="lmbbNumber">27 28 32 33 38 39 43 44</em></div>
														<div class="selectNumber lhcbb-1" playid="lvxiao" data-number="绿小">绿小<em class="lmbbNumber">05 06 11 16 17 21 22</em></div>
														<div class="selectNumber lhcbb-1" playid="lvdan" data-number="绿单">绿单<em class="lmbbNumber">05 11 17 21 27 33 39 43</em></div>
														<div class="selectNumber lhcbb-1" playid="lvshuang" data-number="绿双">绿双<em class="lmbbNumber">06 16 22 28 32 38 44</em></div>
														<div class="selectNumber lhcbb-1" playid="lvhedan" data-number="绿合单">绿合单<em class="lmbbNumber">05 16 21 27 32 38 43</em></div>
														<div class="selectNumber lhcbb-1" playid="lvheshuang" data-number="绿合双">绿合双<em class="lmbbNumber">06 11 17 22 28 33 39 44</em></div>

														<div class="selectNumber lhcbb-1" playid="landa" data-number="蓝大">蓝大<em class="lmbbNumber">25 26 31 36 37 41 42 47 48</em></div>
														<div class="selectNumber lhcbb-1" playid="lanxiao" data-number="蓝小">蓝小<em class="lmbbNumber">03 04 09 10 14 15 20</em></div>
														<div class="selectNumber lhcbb-1" playid="landan" data-number="蓝单">蓝单<em class="lmbbNumber">03 09 15 25 31 37 41 47</em></div>
														<div class="selectNumber lhcbb-1" playid="lanshuang" data-number="蓝双">蓝双<em class="lmbbNumber">04 10 14 20 26 36 42 48</em></div>
														<div class="selectNumber lhcbb-1" playid="lanhedan" data-number="蓝合单">蓝合单<em class="lmbbNumber">03 09 10 14 25 36 41 47</em></div>
														<div class="selectNumber lhcbb-1" playid="lanheshuang" data-number="蓝合双">蓝合双<em class="lmbbNumber">04 15 20 26 31 37 42 48</em></div>
													</div>
												</div>
											</div>
										</div>
										<!--生肖全-->
										<div class="lhc_sx" style="display:none;">
											<div class="30041321">
												<!--特肖-->
												<div class="lhctx" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从十二生肖中任选1个或多个，每个生肖为一注，所选生肖与特码对应的生肖相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>生肖鼠</th>
																					<th><?= $rates['rates']['sxtxshu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖牛</th>
																					<th><?= $rates['rates']['sxtxniu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖虎</th>
																					<th><?= $rates['rates']['sxtxhu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖兔</th>
																					<th><?= $rates['rates']['sxtxtu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖龙</th>
																					<th><?= $rates['rates']['sxtxlong']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖蛇</th>
																					<th><?= $rates['rates']['sxtxshe']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖马</th>
																					<th><?= $rates['rates']['sxtxma']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖羊</th>
																					<th><?= $rates['rates']['sxtxyang']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖猴</th>
																					<th><?= $rates['rates']['sxtxhou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖鸡</th>
																					<th><?= $rates['rates']['sxtxji']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖狗</th>
																					<th><?= $rates['rates']['sxtxgou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖猪</th>
																					<th><?= $rates['rates']['sxtxzhu']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">特肖</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<div class="selectNumber lhctx-1" playid="sxtxshu" data-number="鼠">鼠<em class="lmbbNumber">11 23 35 47</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxniu" data-number="牛">牛<em class="lmbbNumber">10 22 34 46</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxhu" data-number="虎">虎<em class="lmbbNumber">09 21 33 45</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxtu" data-number="兔">兔<em class="lmbbNumber">08 20 32 44</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxlong" data-number="龙">龙<em class="lmbbNumber">07 19 31 43</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxshe" data-number="蛇">蛇<em class="lmbbNumber">06 18 30 42</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxma" data-number="马">马<em class="lmbbNumber">05 17 29 41</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxyang" data-number="羊">羊<em class="lmbbNumber">04 16 29 40</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxhou" data-number="猴">猴<em class="lmbbNumber">03 15 27 39</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxji" data-number="鸡">鸡<em class="lmbbNumber">02 14 26 38</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxgou" data-number="狗">狗<em class="lmbbNumber">01 13 25 37 49</em></div>
																<div class="selectNumber lhctx-1" playid="sxtxzhu" data-number="猪">猪<em class="lmbbNumber">12 24 36 48</em></div>

															</div>
														</div>
													</div>
												</div>
												<!--一肖-->
												<div class="lhc1x" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从十二生肖中任选1个或多个，每个生肖为一注，开奖号码（含特码）中含有投注所属生肖，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>生肖鼠</th>
																					<th><?= $rates['rates']['sx1xshu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖牛</th>
																					<th><?= $rates['rates']['sx1xniu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖虎</th>
																					<th><?= $rates['rates']['sx1xhu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖兔</th>
																					<th><?= $rates['rates']['sx1xtu']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖龙</th>
																					<th><?= $rates['rates']['sx1xlong']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖蛇</th>
																					<th><?= $rates['rates']['sx1xshe']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖马</th>
																					<th><?= $rates['rates']['sx1xma']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖羊</th>
																					<th><?= $rates['rates']['sx1xyang']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖猴</th>
																					<th><?= $rates['rates']['sx1xhou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖鸡</th>
																					<th><?= $rates['rates']['sx1xji']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖狗</th>
																					<th><?= $rates['rates']['sx1xgou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>生肖猪</th>
																					<th><?= $rates['rates']['sx1xzhu']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">一肖</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<div class="selectNumber lhctx-1" playid="sx1xshu" data-number="鼠">鼠<em class="lmbbNumber">11 23 35 47</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xniu" data-number="牛">牛<em class="lmbbNumber">10 22 34 46</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xhu" data-number="虎">虎<em class="lmbbNumber">09 21 33 45</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xtu" data-number="兔">兔<em class="lmbbNumber">08 20 32 44</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xlong" data-number="龙">龙<em class="lmbbNumber">07 19 31 43</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xshe" data-number="蛇">蛇<em class="lmbbNumber">06 18 30 42</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xma" data-number="马">马<em class="lmbbNumber">05 17 29 41</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xyang" data-number="羊">羊<em class="lmbbNumber">04 16 29 40</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xhou" data-number="猴">猴<em class="lmbbNumber">03 15 27 39</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xji" data-number="鸡">鸡<em class="lmbbNumber">02 14 26 38</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xgou" data-number="狗">狗<em class="lmbbNumber">01 13 25 37 49</em></div>
																<div class="selectNumber lhctx-1" playid="sx1xzhu" data-number="猪">猪<em class="lmbbNumber">12 24 36 48</em></div>

															</div>
														</div>
													</div>
												</div>
												<!--二连肖-->
												<div class="lhc2lx" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择两个生肖，每二个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em way-data="tabDoc">
															<span class="moneyInfo">奖金详情
																<div class="moneyInfoHover">
																	<table class="moneyInfoTable">
																		<tbody>
																			<tr>
																				<th>猜中</th>
																				<th>单注最高奖金</th>
																			</tr>
																			<tr>
																				<th>含本命</th>
																				<th><?= $rates['rates']['sx2xl']['rate'] ?></th>
																			</tr>
																			<tr>
																				<th>不含本命</th>
																				<th><?= $rates['rates']['sx2xl']['rate'] ?></th>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</span>
														</em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">二连肖</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="鼠">鼠<em class="lmbbNumber">11 23 35 47</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="牛">牛<em class="lmbbNumber">10 22 34 46</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="虎">虎<em class="lmbbNumber">09 21 33 45</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="兔">兔<em class="lmbbNumber">08 20 32 44</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="龙">龙<em class="lmbbNumber">07 19 31 43</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="蛇">蛇<em class="lmbbNumber">06 18 30 42</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="马">马<em class="lmbbNumber">05 17 29 41</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="羊">羊<em class="lmbbNumber">04 16 29 40</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="猴">猴<em class="lmbbNumber">03 15 27 39</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="鸡">鸡<em class="lmbbNumber">02 14 26 38</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="狗">狗<em class="lmbbNumber">01 13 25 37 49</em></div>
																<div class="selectNumber lhctx-1" playid="sx2xl" data-number="猪">猪<em class="lmbbNumber">12 24 36 48</em></div>
															</div>
														</div>
													</div>
												</div>
												<!--三连肖-->
												<div class="lhc3lx" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择三个生肖，每三个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em way-data="tabDoc">
															<span class="moneyInfo">奖金详情
																<div class="moneyInfoHover">
																	<table class="moneyInfoTable">
																		<tbody>
																			<tr>
																				<th>猜中</th>
																				<th>单注最高奖金</th>
																			</tr>
																			<tr>
																				<th>含本命</th>
																				<th><?= $rates['rates']['sx3xl']['rate'] ?></th>
																			</tr>
																			<tr>
																				<th>不含本命</th>
																				<th><?= $rates['rates']['sx3xl']['rate'] ?></th>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</span>
														</em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">三连肖</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="鼠">鼠<em class="lmbbNumber">11 23 35 47</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="牛">牛<em class="lmbbNumber">10 22 34 46</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="虎">虎<em class="lmbbNumber">09 21 33 45</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="兔">兔<em class="lmbbNumber">08 20 32 44</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="龙">龙<em class="lmbbNumber">07 19 31 43</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="蛇">蛇<em class="lmbbNumber">06 18 30 42</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="马">马<em class="lmbbNumber">05 17 29 41</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="羊">羊<em class="lmbbNumber">04 16 29 40</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="猴">猴<em class="lmbbNumber">03 15 27 39</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="鸡">鸡<em class="lmbbNumber">02 14 26 38</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="狗">狗<em class="lmbbNumber">01 13 25 37 49</em></div>
																<div class="selectNumber lhctx-1" playid="sx3xl" data-number="猪">猪<em class="lmbbNumber">12 24 36 48</em></div>
															</div>
														</div>
													</div>
												</div>
												<!--四连肖-->
												<div class="lhc4lx" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择四个生肖，每四个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em way-data="tabDoc">
															<span class="moneyInfo">奖金详情
																<div class="moneyInfoHover">
																	<table class="moneyInfoTable">
																		<tbody>
																			<tr>
																				<th>猜中</th>
																				<th>单注最高奖金</th>
																			</tr>
																			<tr>
																				<th>含本命</th>
																				<th><?= $rates['rates']['sx4xl']['rate'] ?></th>
																			</tr>
																			<tr>
																				<th>不含本命</th>
																				<th><?= $rates['rates']['sx4xl']['rate'] ?></th>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</span>
														</em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">四连肖</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="鼠">鼠<em class="lmbbNumber">11 23 35 47</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="牛">牛<em class="lmbbNumber">10 22 34 46</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="虎">虎<em class="lmbbNumber">09 21 33 45</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="兔">兔<em class="lmbbNumber">08 20 32 44</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="龙">龙<em class="lmbbNumber">07 19 31 43</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="蛇">蛇<em class="lmbbNumber">06 18 30 42</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="马">马<em class="lmbbNumber">05 17 29 41</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="羊">羊<em class="lmbbNumber">04 16 29 40</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="猴">猴<em class="lmbbNumber">03 15 27 39</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="鸡">鸡<em class="lmbbNumber">02 14 26 38</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="狗">狗<em class="lmbbNumber">01 13 25 37 49</em></div>
																<div class="selectNumber lhctx-1" playid="sx4xl" data-number="猪">猪<em class="lmbbNumber">12 24 36 48</em></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> 
										<!--尾数全-->
										<div class="lhc_ws" style="display:none;">
											<div class="30041321">
												<!--特码头尾-->
												<div class="lhctmtw" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">选择特码头（十位）尾（个位）的数字进行投注，与特码相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>0头</th>
																					<th><?= $rates['rates']['lingtou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>1-4头</th>
																					<th><?= $rates['rates']['yitou']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>0尾</th>
																					<th><?= $rates['rates']['lingwei']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>1-9尾</th>
																					<th><?= $rates['rates']['yiwei']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">特码头尾</span>
															<div class="selectNumbers" style="max-width: 625px;">
																<div class="selectNumber k3hhm" playid="lingtou" data-number="0头">0头</div>
																<div class="selectNumber k3hhm" playid="yitou" data-number="1头">1头</div>
																<div class="selectNumber k3hhm" playid="ertou" data-number="2头">2头</div>
																<div class="selectNumber k3hhm" playid="santou" data-number="3头">3头</div>
																<div class="selectNumber k3hhm" playid="sitou" data-number="4头">4头</div>
																<div class="selectNumber k3hhm" playid="lingwei" data-number="0尾">0尾</div>
																<div class="selectNumber k3hhm" playid="yiwei" data-number="1尾">1尾</div>
																<div class="selectNumber k3hhm" playid="erwei" data-number="2尾">2尾</div>
																<div class="selectNumber k3hhm" playid="sanwei" data-number="3尾">3尾</div>
																<div class="selectNumber k3hhm" playid="siwei" data-number="4尾">4尾</div>
																<div class="selectNumber k3hhm" playid="wuwei" data-number="5尾">5尾</div>
																<div class="selectNumber k3hhm" playid="liuwei" data-number="6尾">6尾</div>
																<div class="selectNumber k3hhm" playid="qiwei" data-number="7尾">7尾</div>
																<div class="selectNumber k3hhm" playid="bawei" data-number="8尾">8尾</div>
																<div class="selectNumber k3hhm" playid="jiuwei" data-number="9尾">9尾</div>
															</div>
														</div>
													</div>
												</div>
												<!--二连尾-->
												<div class="lhc2lw" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择两个尾数，每两个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>含0尾</th>
																					<th><?= $rates['rates']['ws2wl']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>不含0尾</th>
																					<th><?= $rates['rates']['ws2wl']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">二连尾</span>
															<div class="selectNumbers" style="max-width: 625px;">
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="0尾">0尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="1尾">1尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="2尾">2尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="3尾">3尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="4尾">4尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="5尾">5尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="6尾">6尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="7尾">7尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="8尾">8尾</div>
																<div class="selectNumber k3hhm" playid="ws2wl" data-number="9尾">9尾</div>
															</div>
														</div>
													</div>
												</div>
												<!--三连尾-->
												<div class="lhc3lw" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择三个尾数，每三个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>含0尾</th>
																					<th><?= $rates['rates']['ws3wl']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>不含0尾</th>
																					<th><?= $rates['rates']['ws3wl']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">三连尾</span>
															<div class="selectNumbers" style="max-width: 625px;">
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="0尾">0尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="1尾">1尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="2尾">2尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="3尾">3尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="4尾">4尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="5尾">5尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="6尾">6尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="7尾">7尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="8尾">8尾</div>
																<div class="selectNumber k3hhm" playid="ws3wl" data-number="9尾">9尾</div>
															</div>
														</div>
													</div>
												</div>
												<!--四连尾-->
												<div class="lhc4lw" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择四个尾数，每四个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span>
															<em way-data="tabDoc">
																<span class="moneyInfo">奖金详情
																	<div class="moneyInfoHover">
																		<table class="moneyInfoTable">
																			<tbody>
																				<tr>
																					<th>猜中</th>
																					<th>单注最高奖金</th>
																				</tr>
																				<tr>
																					<th>含0尾</th>
																					<th><?= $rates['rates']['ws4wl']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>不含0尾</th>
																					<th><?= $rates['rates']['ws4wl']['rate'] ?></th>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</span>
															</em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">四连尾</span>
															<div class="selectNumbers" style="max-width: 625px;">
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="0尾">0尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="1尾">1尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="2尾">2尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="3尾">3尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="4尾">4尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="5尾">5尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="6尾">6尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="7尾">7尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="8尾">8尾</div>
																<div class="selectNumber k3hhm" playid="ws4wl" data-number="9尾">9尾</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--不中全-->
										<div class="lhc_bz" style="display:none;">
											<div class="30041321">
												<!--五不中-->
												<div class="lhc5bz" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择五个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz5bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz5bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz5bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz5bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--六不中-->
												<div class="lhc6bz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择六个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz6bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz6bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz6bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz6bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--七不中-->
												<div class="lhc7bz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择七个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz7bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz7bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz7bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz7bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--八不中-->
												<div class="lhc8bz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择八个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz8bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz8bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz8bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz8bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--九不中-->
												<div class="lhc9bz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择九个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz9bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz9bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz9bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz9bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
												<!--十不中-->
												<div class="lhc10bz" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">至少选择十个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em><?= $rates['rates']['bz10bz']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers" style="max-width: 770px;">
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="01">01</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="02">02</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="03">03</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="04">04</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="05">05</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="06">06</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="07">07</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="08">08</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="09">09</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="10">10</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="11">11</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="12">12</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="13">13</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="14">14</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="15">15</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="16">16</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="17">17</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="18">18</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="19">19</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="20">20</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="21">21</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="22">22</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="23">23</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="24">24</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="25">25</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="26">26</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="27">27</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="28">28</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="29">29</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="30">30</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="31">31</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="32">32</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="33">33</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="34">34</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="35">35</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="36">36</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="37">37</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="38">38</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="39">39</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="40">40</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="41">41</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="42">42</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="43">43</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="44">44</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="45">45</a>
																<a href="javascript:void(0);" class="selectNumber lhc_red_color" playid="bz10bz" data-number="46">46</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="47">47</a>
																<a href="javascript:void(0);" class="selectNumber lhc_blue_color" playid="bz10bz" data-number="48">48</a>
																<a href="javascript:void(0);" class="selectNumber lhc_green_color" playid="bz10bz" data-number="49">49</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>



									<div class="selectMultiple">
										<div style="display:inline-block;position: relative;">
											<div class="el-select el-select--small" style="width: 128px;" name="el-select">
												<div class="el-input el-input--small el-input--suffix">
													<input type="text" readonly="readonly" id="selectMultipleCon" autocomplete="off" value="1元" types="1" class="el-input__inner form-control ty_select" />
													<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;"class="iconfont" id="iconfont">&#xe65a;</i>
												</div>
												<div class="el-select-dropdown el-popper" style="display: none; min-width: 128px;">
													<div class="el-scrollbar">
														<div class="el-select-dropdown__wrap el-scrollbar__wrap">
															<ul class="el-scrollbar__view el-select-dropdown__list">
																<li class="el-select-dropdown__item" value="1">1元</li>
																<li class="el-select-dropdown__item" value="2">2元</li>
																<li class="el-select-dropdown__item" value="5">5元</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="selectMultipleNumber">
												<i class="reduce iconfont">&#xe704;</i>
												<input type="tel" value="1" class="selectMultipInput" onclick="this.select()"onChange="return (/[\d]/.test(String.fromCharCode(event.keyCode)))">
												<i class="add">+</i>
												<i class="select-bs">倍</i>
												
											</div>
										</div>
										<div style="display:inline-block;font-size: 14px;float: right;">
											<span class="select_zhushu">
												共
												<em class="zhushu">0</em>
												注,
											</span>
											<span class="selectMultipleOld">
												金额
												<em class="selectMultipleOldMoney">
													0.00
												</em>
												元
											</span>

											<div class="addtobet">
												<button class="addtobetbtn" type="button">添加订单</button>
											</div>
										</div>
									</div> 
									<!--玩法详细说明区域-->
									<!--号码蓝开始-->
									<div style="margin-top:10px;background: #fff;margin-top: 10px;background: #fff;border: 1px solid #e8e8e8;border-radius: 4px;">
										<div class="lottery-jilv">
											<ul>
												<li class="wfnr">玩法及投注内容</li>
												<li class="tzs">投注数</li>
												<li class="bs">倍数</li>
												<li class="tzje">模式</li>
												<li class="yqyl">预期盈利</li>
												<li id="orderlist_clear" class="qk">清空单号</li>
											</ul>
										</div>
										<div class="xiad-left" style="border-bottom: 1px solid #e8e8e8;">
											<dl class="yBettingLists">
												<div class="none-user" style="text-align:center;">
													<div class="order-image"></div>
													<p style="font-size: 14px;color: #ababab;">暂无数据</p>
												</div>
											</dl>
										</div>  
										<div style="background: #fafafa;text-align: right;position: relative;padding: 10px 0;border-radius: 0 0 4px 4px;">
											<div style="display: inline-block;font-size: 14px;"class="chase_Program">
												<p style="margin-right: 10px;" class="p_chase">总投注数
													<i style="color: #a68f4c" way-data="ytotal_money_zhushu" id="f_gameOrder_lotterys_num">0</i> 注， 
													总金额 <i style="color: #a68f4c"><em id="f_gameOrder_amount" way-data="ytotal_money">0</em></i> 元  
												</p>
											</div>   
											<div style="margin-right: 20px;" class="li22">
												<span id="f_submit_order" style="cursor: pointer;">确认投注</span>
												<span style="margin: 0 20px;">|</span>
												<span id="f_submit_order_hemai_xuanhao" style="cursor: pointer;">发起合买</span>
												<span style="margin: 0 20px;">|</span>
												<span style="cursor: pointer;">
													<i way-data="gametimes.h"></i><i>:</i><i way-data="gametimes.m"></i><i>:</i><i way-data="gametimes.s"></i>
												</span>
											</div>
										</div>
									</div>
									<!--号码蓝结束-->
									<else />
								</if>
							</div>


						</section>
						<div tabindex="-1" id="hemai_touzhu" class="ant-modal-wrap ant-modal-centered record-detail-wrapper" role="dialog" aria-labelledby="rcDialogTitle1" style="display:none;">
							<div role="document" id="sacn" class="ant-modal ascnshow" style="width: 440px;">
								<div class="ant-modal-content">
									<div class="ant-modal-header">
										<button type="button" aria-label="Close" class="ant-modal-close"><span class="ant-modal-close-x"><i aria-label="图标: close" class="anticon anticon-close ant-modal-close-icon"><svg viewBox="64 64 896 896" focusable="false" class="" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path></svg></i></span></button> 
										<div class="ant-modal-title" id="rcDialogTitle1">发起合买</div></div>
										<div class="ant-modal-body">
											<div class="hemaimoshi">
												<div class="hemaimoshi-x">
													<div class="hemai-moshi1"><input type="radio" value="0" checked="checked" id="gk1" name="gk"><span>完全公开</span></div>
													<div class="hemai-moshi2"><input type="radio" value="1" id="gk2" name="gk"><span>开奖后公开</span></div>
													<div class="hemai-moshi3"><input type="radio" value="2" id="gk3" name="gk"><span>仅跟单人可看</span></div>
													<div class="hemai-moshi4"><input type="radio" value="3" id="gk4" name="gk"><span>完全保密</span></div>
												</div>
												<div class="hemaimoshi-f">
													<div class="hemai-fen">
														<span>我要分为：</span>
														<input type="text" id="fsInput" name="allnum" class="mul" value="1" autocomplete="off">
														<span> 份,</span>
														<span>每份<a id="fsMoney">￥0.00</a>元</span>
														<b>每份最低1元</b>
													</div>
												</div>
												<div class="hemaimoshi-r">
													<div class="hemai-ren">
														<span>我要认购：</span>
														<input type="text" id="rgInput" name="buynum" class="mul" value="1" autocomplete="off">
														<span> 份,</span>
														<span>(<span id="rgScale">0</span>%)</span>
														<b style="display:none" id="rgErr"></b>
													</div>
												</div>
												<div class="hemaimoshi-b">
													<div class="hemai-bao">
														<input type="checkbox" id="isbaodi">
														<span>我要保底：</span>
														<input class="hemai-bao-input" type="text" id="bdInput" name="baodinum" value="0" disabled="disabled"autocomplete="off">
														<span> 份,</span>
														<span><a id="bdMoney" style="color: #E91E63;">￥0.00</a>元 </span>
														<span>(<span id="bdScale">0</span>%)</span>
														<b style="display:none;color: #000;" id="bdErr">至少保底1份</b>
														<div class="hemai-bao-smshm">
															<div class="hemai-bao-div">?</div>
															<div class="heimai-bao-div-xq"> 
																<h5 style="text-align: center;">什么是保底？</h5>	发起人承诺合买截止后，如果方案还没有满员，发起人再投入先前承诺的金额以最大限度让方案成交。最低保底金额为方案总金额的20%。保底时，系统将暂时冻结保底资金，在合买截止时如果方案还未满员的话，系统将会用冻结的保底资金去认购方案。如果在合买截止前方案已经满员，系统会解冻保底资金。
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="trace-foot">
												<div>
													<button type="button" id="f_submit_order_hemai" class="ant-btn againOrder"><span>发起合买</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--选号区域右侧-->
							<div class="gameBet_right">
								<div class="right_infsoBlock">
									<div class="title">
										<span class="fl">开奖公告</span>
									</div>
									<table>
										<colgroup>
											<col width="40px" />
											<col width="60px" />
										</colgroup>
										<tbody class="tbody-top">
											<tr>
												<th>期号</th>
												<th>开奖号码</th>
											</tr>
										</tbody>
									</table>
									<div class="block_container lishi" style="max-height: 755px;overflow-y: scroll;">
										<table id="fn_getoPenGame" border="0px" cellpadding="0" cellspacing="0">
											<colgroup>
												<col width="93px" />
												<col width="50px" />
											</colgroup>
											<tbody class="tbody text-c">
												<!--开奖期号-->
												<!--开奖号码-->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</section>

						<!--投注记录---->
						<section class="historylist mt-20">
							<div class="history-box"style="border: 1px solid #e8e8e8;border-radius: 4px;background: #fff;">
								<div class="tabBd lot-tabBd" style="display:block;">
									<div style="position: relative;height: 46px;line-height: 46px;">
										<span class="game-touzhu-tz">投注记录</span>
										<div class="game-touzhu-yc">
											<i style="font-size: 14px;vertical-align: text-top;"class="iconfont">&#xe668;</i>
											<input style="color: #a68f4c;font-size: 14px;background: #fff;border: 0;padding-top: 3px;cursor: pointer;"type="button" id="ShowButton" value="隐藏列表">
										</div>
									</div>
									<table class="mem-biao" id="userBets" style="display:block;width:100%;">
										<colgroup>
											<col width="115px" />
											<col width="115px" />
											<col width="115px" />
											<col width="115px" />
											<col width="133px" />
											<col width="115px" />
											<col width="115px" />
											<col width="115px" />
											<col width="158px" />
											<col width="115px" />
										</colgroup>
										<thead>
											<tr>
												<th>订单号</th>
												<th>期号</th>
												<th>类型</th>
												<th>开奖号</th>
												<th>玩法</th>
												<th>赔率</th>
												<th>投注总额</th>
												<th>奖金</th>
												<th>下单时间</th>
												<th>状态</th>
											</tr>
										</thead>
										<tbody id="userBetsListToday"></tbody>
									</table>
								</div>
								<div class="member-pag paging"></div>
							</div>
						</section>
					</section>
				</div>
				<include file="Public/footer" />
			</div>



			<div class="bytz-bj" style="display:none;"></div>


			<div class="el-dialog__wrapper" id="daigou" style="z-index: 2011;display:none;">
				<div role="dialog" aria-modal="true" aria-label="下注明细 (请确认注单)" class="el-dialog ascnshow" style="margin-top: 15vh; width: 50%;">
					<div class="el-dialog__header">
						<span class="el-dialog__title">下注明细 (请确认注单)</span>
					</div>
					<div class="el-dialog__body">
						<div style="font-size: 16px; max-height: 240px; overflow-y: auto;">
							<div class="el-table el-table--fit el-table--border el-table--enable-row-hover el-table--enable-row-transition el-table--small" style="width: 100%; margin-bottom: 15px;">
								<div class="el-table__header-wrapper">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__header">
										<colgroup>
											<col name="el-table_3_column_21" width="120">
											<col name="el-table_3_column_22" width="120">
											<col name="el-table_3_column_23" width="120">
											<col name="el-table_3_column_24" width="120">
										</colgroup>
										<thead class="has-gutter">
											<tr class="">
												<th colspan="1" rowspan="1" class="el-table_3_column_21 is-leaf">
													<div class="cell">玩法</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_22 is-leaf">
													<div class="cell">投注内容</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_23 is-leaf">
													<div class="cell">投注注数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_24 is-leaf">
													<div class="cell">投注金额</div>
												</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="el-table__body-wrapper is-scrolling-none">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__body">
										<colgroup>
											<col name="el-table_3_column_21" width="120">
											<col name="el-table_3_column_22" width="120">
											<col name="el-table_3_column_23" width="120">
											<col name="el-table_3_column_24" width="120">
										</colgroup>
										<tbody id="Orderdetaillist">

										</tbody>
									</table>
								</div>
								<div class="el-table__column-resize-proxy" style="display: none;"></div>
							</div>
						</div>  
						<div style="text-align: center;color: rgb(166, 143, 76);font-weight: bold;margin-bottom: 15px;">总金额：￥<span id="Orderdetailtotalprice"></span> 元</div>  
					</div>
					<div class="el-dialog__footer" id="daigoufoot">

					</div>
				</div>

			</div>

			<div class="el-dialog__wrapper" id="hemai" style="z-index: 2011;display:none;">
				<div role="dialog" aria-modal="true" aria-label="下注明细 (请确认注单)" class="el-dialog ascnshow" style="margin-top: 15vh; width: 50%;">
					<div class="el-dialog__header">
						<span class="el-dialog__title">下注明细 (请确认注单)</span>
					</div>
					<div class="el-dialog__body">
						<div style="font-size: 16px; max-height: 240px; overflow-y: auto;">
							<div class="el-table el-table--fit el-table--border el-table--enable-row-hover el-table--enable-row-transition el-table--small" style="width: 100%; margin-bottom: 15px;">
								<div class="el-table__header-wrapper">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__header">
										<colgroup>
											<col name="el-table_3_column_21" width="101">
											<col name="el-table_3_column_22" width="101">
											<col name="el-table_3_column_23" width="101">
											<col name="el-table_3_column_24" width="101">
											<col name="el-table_3_column_25" width="101">
											<col name="el-table_3_column_26" width="101">
											<col name="el-table_3_column_27" width="101">
											<col name="el-table_3_column_28" width="101">
										</colgroup>
										<thead class="has-gutter">
											<tr class="">
												<th colspan="1" rowspan="1" class="el-table_3_column_21 is-leaf">
													<div class="cell">玩法</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_22 is-leaf">
													<div class="cell">投注内容</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_23 is-leaf">
													<div class="cell">投注注数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_24 is-leaf">
													<div class="cell">投注金额</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_26 is-leaf">
													<div class="cell">合买份数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_27 is-leaf">
													<div class="cell">认购份数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_28 is-leaf">
													<div class="cell">是否保底</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_3_column_29 is-leaf">
													<div class="cell">保底份数</div>
												</th>
											</tr>

										</thead>
									</table>
								</div>
								<div class="el-table__body-wrapper is-scrolling-none">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__body">
										<colgroup>
											<col name="el-table_3_column_21" width="101">
											<col name="el-table_3_column_22" width="101">
											<col name="el-table_3_column_23" width="101">
											<col name="el-table_3_column_24" width="101">
											<col name="el-table_3_column_25" width="101">
											<col name="el-table_3_column_26" width="101">
											<col name="el-table_3_column_27" width="101">
											<col name="el-table_3_column_28" width="101">
										</colgroup>
										<tbody id="Orderdetaillist_hemai">
											<td>24524</td>
										</tbody>
									</table>
								</div>
								<div class="el-table__column-resize-proxy" style="display: none;"></div>
							</div>
						</div>  
						<div style="text-align: center;color: rgb(166, 143, 76);font-weight: bold;margin-bottom: 15px;">总金额：￥<span id="Orderdetailtotalprice_hemai"></span> 元</div>  
					</div>
					<div class="el-dialog__footer" id="hemaifoot">

					</div>
				</div>
			</div>
			
			<div tabindex="-1" id="touzhu" class="ant-modal-wrap ant-modal-centered record-detail-wrapper" role="dialog" aria-labelledby="rcDialogTitle1"style="display:none;">
				<div role="document" id="touzhu_ascn" class="ant-modal ascnshow" style="width: 579px;">
					<div class="ant-modal-content">
						<div class="ant-modal-header">
							<button type="button" aria-label="Close" class="ant-modal-close">
								<span class="ant-modal-close-x">
									<i aria-label="图标: close" class="anticon anticon-close ant-modal-close-icon">
										<svg viewBox="64 64 896 896" focusable="false" class="" data-icon="close" width="1em" height="1em" fill="currentColor" aria-hidden="true">
											<path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
											</path>
										</svg>
									</i>
								</span>
							</button> 
							<div class="ant-modal-title" id="rcDialogTitle1">投注详情</div></div>
							<div class="ant-modal-body">
								<ul id="touzhu_text">
									<li><div>投注彩种</div><div way-data="BillInfo.cptitle"></div></li>
									<li><div>彩种玩法</div><div way-data="BillInfo.playtitle"></div></li>
									<li><div>投注号码：</div><div id="BillInfo_tzcode" way-data="BillInfo.tzcode"></div></li>
									<li><div>投注期号：</div><div way-data="BillInfo.expect"></div></li>
									<li><div>奖金模式：</div><div way-data="BillInfo.mode"></div></li>
									<li><div>投注金额：</div><div way-data="BillInfo.amount"></div></li>
									<li><div>中奖金额：</div><div way-data="BillInfo.okamount"></div></li>
									<li><div>开奖号码：</div><div way-data="BillInfo.opencode"></div></li>
									<li><div>中奖状态：</div><div id="BillInfo_isdraw" way-data="BillInfo.state"></div></li>

									<li><div>购买类型：</div><div id="BillInfo_type" way-data="BillInfo.type"></div></li>
									<li><div>购买方式：</div><div id="BillInfo_show" way-data="BillInfo.show">--</div></li>
									<li><div>认购进度：</div><div id="BillInfo_jindu" way-data="BillInfo.jindu">--</div></li>
									<li><div>购买份数：</div><div way-data="BillInfo.fenshu">--</div></li>
									<li><div>认购份数：</div><div way-data="BillInfo.rengou">--</div></li>
									<li><div>保底份数：</div><div way-data="BillInfo.baodi">--</div></li>
									<li><div>认购金额：</div><div way-data="BillInfo.payamount">--</div></li>
								</ul>
								<div class="trace-foot">
									<div class="touzhu_xiangqing"></div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="naranja-notification-box" id="content">

				</div>

				<script>
					$('.helps').click(function () {
						$(location).attr('href','/byhelp/helptxt10?type=10');
					})
				</script>
				<script>
					$(function(){
						$('.play_select_tit .curr').click();
					})
				</script>
				<script>
					$(function(){
						$('#selectMultipleCon').attr('types','1');
						$("#ShowButton").click(function(){
							if($("#userBets").css("display")=='block'){
								$("#userBets").slideUp();
								$("#ShowButton").val("显示列表");
							}else{
								$("#userBets").slideDown();
								$("#ShowButton").val("隐藏列表");
							}
						});
					});
					$('#selectMultipleCon').click(function(e){
						e.stopPropagation();
						if($('.el-select-dropdown').css("display")=='none'){
							$('#iconfont').css('transform','rotate(180deg)');
							$('.el-select-dropdown').slideDown(300);
						}else{
							$('#iconfont').css('transform','rotate(0deg)');
							$('.el-select-dropdown').slideUp(300);
						}
					})
					$(document).click(function(){
						$('#iconfont').css('transform','rotate(0deg)');
						$('.el-select-dropdown').hide();
					});
					$('.el-select-dropdown__item').click(function(){
						var type = $(this).attr('value');
						$('#selectMultipleCon').attr('types',type);
						var text = $(this).text();
						$('#selectMultipleCon').val(text);
					})
				</script>
			</body>
			</html>
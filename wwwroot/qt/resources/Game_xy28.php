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
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/naranja.min.css">
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<link rel="stylesheet" href="/ascn/css/vendor.css">

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
		<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>;
		console.log(k3lotteryrates);
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
	<script type="text/javascript" src="__ROOT__/resources/js2/tabGameData.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/xy28.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/xy28tabGame.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/bootstrap.min.js"></script>
	<div class="user-top-to">
		<div class="user-top-to2">
			<section class="container wapper" id="gamepage" style="width:1200px!important;">
				<!--下注头部-->
				<div class="lottery-head-bg">
					<div class="lottery-head-wrapper">
						<a href="/gameChart/trend_xy28/{$lotteryname}" class="lottery-head-chart">开奖走势</a>
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
									<i class="count-down-hours"way-data="gametimes.h">00</i>
									<i class="count-down-symbol">:</i>
									<i class="count-down-minutes"way-data="gametimes.m">00</i>
									<i class="count-down-symbol">:</i>
									<i class="count-down-seconds"way-data="gametimes.s">00</i>
								</span>
							</div>
						</div>
						<div class="fr clearfix head-right">
							<div class="fr head-right-opencode" lottery-type="ssc">
								<span class="opencode bounceInDown"way-data="showExpect.openCode1">0</span>
								<span class="opencode bounceInDown"way-data="showExpect.openCode2">0</span>
								<span class="opencode bounceInDown"way-data="showExpect.openCode3">0</span>
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
					<section id="gameBet" class="cl"style="position: relative;">
						<section class="gameBet_balls">
							<div class="play_select_insert" id="j_play_select">
								<ul class="play_select_tit">
									<li lottery_code="xy28_tm" class="curr">特码</li>
									<li lottery_code="xy28_tmbs">特码包三</li>
									<li lottery_code="xy28_bs">波色</li>
									<li lottery_code="xy28_hunhe">混合</li>
								</ul>
							</div>
							<div class="gameBet_left l">
								<if condition="$nowcpinfo['iswh'] eq 0">
									<div class="bet-num-box ">
										<div class="xy28_tm" style="display:block">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">特码</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code_two="games-k3hz-1">特码</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="games-wfjj">
												<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
													<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从0-27中任选1个或多个号码，每个号码为一注，所选号码中包含特码，即为中奖。 </span></div>
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
																			<th>0/27</th>
																			<th><?= $rates['rates']['xy28_tm_00']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>1/26</th>
																			<th><?= $rates['rates']['xy28_tm_01']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>2/25</th>
																			<th><?= $rates['rates']['xy28_tm_02']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>3/24</th>
																			<th><?= $rates['rates']['xy28_tm_03']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>4/23</th>
																			<th><?= $rates['rates']['xy28_tm_04']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>5/22</th>
																			<th><?= $rates['rates']['xy28_tm_05']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>6/21</th>
																			<th><?= $rates['rates']['xy28_tm_06']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>7/20</th>
																			<th><?= $rates['rates']['xy28_tm_07']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>8/19</th>
																			<th><?= $rates['rates']['xy28_tm_08']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>9/18</th>
																			<th><?= $rates['rates']['xy28_tm_09']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>10/17</th>
																			<th><?= $rates['rates']['xy28_tm_10']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>11/16</th>
																			<th><?= $rates['rates']['xy28_tm_11']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>12/15</th>
																			<th><?= $rates['rates']['xy28_tm_12']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>13/14</th>
																			<th><?= $rates['rates']['xy28_tm_13']['rate'] ?></th>
																		</tr>
																	</tbody>
																</table>
															</div></span></em>
														</div>
													</div>

													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers"style="max-width: 770px;">
																<a class="selectNumber xy28_hei" playid="xy28_tm_00" ball-number="0" href="javascript:void(0)">00</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_01" ball-number="1" href="javascript:void(0)">01</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_02" ball-number="2" href="javascript:void(0)">02</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_03" ball-number="3" href="javascript:void(0)">03</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_04" ball-number="4" href="javascript:void(0)">04</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_05" ball-number="5" href="javascript:void(0)">05</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_06" ball-number="6" href="javascript:void(0)">06</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_07" ball-number="7" href="javascript:void(0)">07</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_08" ball-number="8" href="javascript:void(0)">08</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_09" ball-number="9" href="javascript:void(0)">09</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_10" ball-number="10" href="javascript:void(0)">10</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_11" ball-number="11" href="javascript:void(0)">11</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_12" ball-number="12" href="javascript:void(0)">12</a>
																<a class="selectNumber xy28_hei" playid="xy28_tm_13" ball-number="13" href="javascript:void(0)">13</a>
																<a class="selectNumber xy28_hei" playid="xy28_tm_14" ball-number="14" href="javascript:void(0)">14</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_15" ball-number="15" href="javascript:void(0)">15</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_16" ball-number="16" href="javascript:void(0)">16</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_17" ball-number="17" href="javascript:void(0)">17</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_18" ball-number="18" href="javascript:void(0)">18</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_19" ball-number="19" href="javascript:void(0)">19</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_20" ball-number="20" href="javascript:void(0)">20</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_21" ball-number="21" href="javascript:void(0)">21</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_22" ball-number="22" href="javascript:void(0)">22</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_23" ball-number="23" href="javascript:void(0)">23</a>
																<a class="selectNumber xy28_hong" playid="xy28_tm_24" ball-number="24" href="javascript:void(0)">24</a>
																<a class="selectNumber xy28_lv" playid="xy28_tm_25" ball-number="25" href="javascript:void(0)">25</a>
																<a class="selectNumber xy28_lan" playid="xy28_tm_26" ball-number="26" href="javascript:void(0)">26</a>
																<a class="selectNumber xy28_hei" playid="xy28_tm_27" ball-number="27" href="javascript:void(0)">27</a>
															</div>
														</div>
													</div>
												</div>
												<div class="xy28_tmbs" style="display:none;">
													<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<ul id="bet_filter">
															<li class="bet_filter_item"><strong class="title">特码包三</strong>
																<div class="bet_option">
																	<span class="bet_options ssc-curr" lottery_code_two="games-k3hz-1">特码包三</span>
																</div>
															</li>
														</ul>
													</div>
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">可选取三个和值,当中任何一个与开奖号码三位数字之和相同即中奖。 赔率4.490倍。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>玩法赔率：</span><em way-data="tabDoc"><?= $rates['rates']['xy28_tmbs']['rate'] ?></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">号码</span>
															<div class="selectNumbers"style="max-width: 770px;">
																<a class="selectNumber xy28_hei" playid="xy28_tmbs" ball-number="0" href="javascript:void(0)">00</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="1" href="javascript:void(0)">01</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="2" href="javascript:void(0)">02</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="3" href="javascript:void(0)">03</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="4" href="javascript:void(0)">04</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="5" href="javascript:void(0)">05</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="6" href="javascript:void(0)">06</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="7" href="javascript:void(0)">07</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="8" href="javascript:void(0)">08</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="9" href="javascript:void(0)">09</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="10" href="javascript:void(0)">10</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="11" href="javascript:void(0)">11</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="12" href="javascript:void(0)">12</a>
																<a class="selectNumber xy28_hei" playid="xy28_tmbs" ball-number="13" href="javascript:void(0)">13</a>
																<a class="selectNumber xy28_hei" playid="xy28_tmbs" ball-number="14" href="javascript:void(0)">14</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="15" href="javascript:void(0)">15</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="16" href="javascript:void(0)">16</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="17" href="javascript:void(0)">17</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="18" href="javascript:void(0)">18</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="19" href="javascript:void(0)">19</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="20" href="javascript:void(0)">20</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="21" href="javascript:void(0)">21</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="22" href="javascript:void(0)">22</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="23" href="javascript:void(0)">23</a>
																<a class="selectNumber xy28_hong" playid="xy28_tmbs" ball-number="24" href="javascript:void(0)">24</a>
																<a class="selectNumber xy28_lv" playid="xy28_tmbs" ball-number="25" href="javascript:void(0)">25</a>
																<a class="selectNumber xy28_lan" playid="xy28_tmbs" ball-number="26" href="javascript:void(0)">26</a>
																<a class="selectNumber xy28_hei" playid="xy28_tmbs" ball-number="27" href="javascript:void(0)">27</a>
															</div>
														</div>
													</div>
												</div>

												<div class="xy28_bs" style="display:none">
													<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<ul id="bet_filter">
															<li class="bet_filter_item"><strong class="title">波色</strong>
																<div class="bet_option">
																	<span class="bet_options ssc-curr" lottery_code_two="games-k3hz-1">波色</span>
																</div>
															</li>
														</ul>
													</div>
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">所选波色与开奖和值结果相同即中奖，结果为黑波，视为不中奖。</span></div>
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
																					<th>红波</th>
																					<th><?= $rates['rates']['xy28_bs_hong']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>绿波</th>
																					<th><?= $rates['rates']['xy28_bs_lv']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>蓝波</th>
																					<th><?= $rates['rates']['xy28_bs_lan']['rate'] ?></th>
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
															<span class="numberTitle">波色</span>
															<div class="selectNumbers"style="max-width: 770px;">
																<div href="javascript:void(0);" playid="xy28_bs_hong" class="selectNumber k3hhm xy28_hong" data-number="红波">红波</div>
																<div href="javascript:void(0);" playid="xy28_bs_lv" class="selectNumber k3hhm xy28_lv" data-number="绿波">绿波</div>
																<div href="javascript:void(0);" playid="xy28_bs_lan" class="selectNumber k3hhm xy28_lan" data-number="蓝波">蓝波</div>
															</div>
														</div>
													</div>
												</div>
												<div class="xy28_hunhe" style="display:none">
													<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<ul id="bet_filter">
															<li class="bet_filter_item"><strong class="title">混合</strong>
																<div class="bet_option">
																	<span class="bet_options ssc-curr" lottery_code_two="games-k3hz-1">混合</span>
																</div>
															</li>
														</ul>
													</div>
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">开奖号码三个数字和符合所选取注数规则即中奖。</span></div>
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
																					<th>大小</th>
																					<th><?= $rates['rates']['xy28_hunhe_big']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>单双</th>
																					<th><?= $rates['rates']['xy28_hunhe_odd']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大单</th>
																					<th><?= $rates['rates']['xy28_hunhe_big_odd']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>大双</th>
																					<th><?= $rates['rates']['xy28_hunhe_big_even']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小单</th>
																					<th><?= $rates['rates']['xy28_hunhe_small_odd']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>小双</th>
																					<th><?= $rates['rates']['xy28_hunhe_small_even']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>极大</th>
																					<th><?= $rates['rates']['xy28_hunhe_ji_big']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>极小</th>
																					<th><?= $rates['rates']['xy28_hunhe_ji_small']['rate'] ?></th>
																				</tr>
																				<tr>
																					<th>豹子</th>
																					<th><?= $rates['rates']['xy28_hunhe_baozi']['rate'] ?></th>
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
															<span class="numberTitle">混合</span>
															<div class="selectNumbers"style="max-width: 770px;">
																<div href="javascript:void(0);" playid="xy28_hunhe_big" class="selectNumber k3hhm" data-number="大">大</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_small" class="selectNumber k3hhm" data-number="小">小</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_odd" class="selectNumber k3hhm" data-number="单">单</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_even" class="selectNumber k3hhm" data-number="双">双</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 770px;">
																<div href="javascript:void(0);" playid="xy28_hunhe_big_odd" class="selectNumber k3hhm" data-number="大单">大单</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_big_even" class="selectNumber k3hhm" data-number="大双">大双</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_small_odd" class="selectNumber k3hhm" data-number="小单">小单</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_small_even" class="selectNumber k3hhm" data-number="小双">小双</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 770px;">
																<div href="javascript:void(0);" playid="xy28_hunhe_ji_big" class="selectNumber k3hhm" data-number="极大">极大</div>
																<div href="javascript:void(0);" playid="xy28_hunhe_ji_small" class="selectNumber k3hhm" data-number="极小">极小</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 770px;">
																<div href="javascript:void(0);" playid="xy28_hunhe_baozi" class="selectNumber k3hhm" data-number="豹子">豹子</div>
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
														<input type="tel" value="1" class="selectMultipInput" onclick="this.select()" onChange="return (/[\d]/.test(String.fromCharCode(event.keyCode)))">
														<i class="add">+</i>
														<i class="select-bs">倍</i>
														<ul class="piece-changer"><li>5</li><li>10</li><li>50</li><li>100</li></ul>
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
											<!--选号统计添加订单结束-->
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
													<col width="60px" />
													<col width="50px" />
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
													<col width="138px" />
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
								$(location).attr('href','/byhelp/helptxt10?type=6');
							})
						</script>

						<script>
							$(function(){
								$('#selectMultipleCon').attr('types','1');
								$('.play_select_tit .curr').click();
							})
						</script>
						<script>
							$(function(){
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
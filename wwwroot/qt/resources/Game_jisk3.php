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
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/artDialog.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/k3.css" />
	<link rel="stylesheet" href="__CSS2__/bootstrap.min.css">
	<link rel="stylesheet" href="__CSS2__/header.css">
	<link rel="stylesheet" href="__CSS2__/footer.css">
	<link rel="stylesheet" href="__CSS__/style.css"> 
	<link rel="stylesheet" href="__CSS2__/main.css">
	<link rel="stylesheet" href="__CSS__/common.css">
	<link rel="stylesheet" href="__CSS2__/ssc.css">
	<!--添加的css-->
	<link rel="stylesheet" href="/ascn/css/games.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/naranja.min.css">
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

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
</head>

<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<style>	
		.j_lottery_time .shij span{
			color: #fff;
			font-size: 36px;
		}
	</style>

	<script type="text/javascript" src="__ROOT__/resources/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/jisk3.js"></script>

	<script type="text/javascript" src="__ROOT__/resources/js2/bootstrap.min.js"></script>
	<div class="user-top-to">
		<div class="user-top-to2">
			<section class="container wapper" id="gamepage" style="width:1200px!important;">
				<!--下注头部-->
				<div class="lottery-head-bg">
					<div class="lottery-head-wrapper">
						<a href="/gameChart/trend_k3/{$lotteryname}" class="lottery-head-chart">开奖走势</a>
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
							<div class="fr head-right-opencode" id="openNum_list">
								<span class="open_numb_gif"></span>
								<span class="open_numb_gif"></span>
								<span class="open_numb_gif"></span>
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
									<li lottery_code="k3hzzx" class="curr">和值</li>	
									<li lottery_code="k3sthdx">三同号</li>
									<li lottery_code="k3sbthbz">三不同号</li>
									<li lottery_code="k3slhdx">三连号</li>
									<li lottery_code="k3ethdx">二同号</li>
									<li lottery_code="k3ebthbz">二不同号</li>
									<li lottery_code="k3hhm">红黑码</li> 
									<div onclick="window.location.href='/lotterys_hot/k3/{:I('get.code')}/1'" class="chuantong">传统玩法 <i style="font-size: 14px;"class="iconfont">&#xe618;</i></div>
								</ul>
							</div>
							<div class="gameBet_left l">
								<if condition="$nowcpinfo['iswh'] eq 0">
									<div class="bet-num-box ">
										<div class="k3hzzx" style="display:block">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">和值</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code="k3hzzx" lottery_code_two="games-k3hz-1">和值</span>
															<span class="bet_options" lottery_code="k3hzzx" lottery_code_two="games-k3dxds">大小单双</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="30041321">
												<div class="games-k3hz-1" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">投注说明：至少选择1个和值投注，选号与开奖的三个号码相加的数值一致即中奖</span></div>
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
																					<th>3/18</th>
																					<th class="ball_aid" rate_k3hz3></th>
																				</tr>
																				<tr>
																					<th>4/17</th>
																					<th class="ball_aid" rate_k3hz4></th>
																				</tr>
																				<tr>
																					<th>5/16</th>
																					<th class="ball_aid" rate_k3hz5></th>
																				</tr>
																				<tr>
																					<th>6/15</th>
																					<th class="ball_aid" rate_k3hz6></th>
																				</tr>
																				<tr>
																					<th>7/14</th>
																					<th class="ball_aid" rate_k3hz7></th>
																				</tr>
																				<tr>
																					<th>8/13</th>
																					<th class="ball_aid" rate_k3hz8></th>
																				</tr>
																				<tr>
																					<th>9/12</th>
																					<th class="ball_aid" rate_k3hz9></th>
																				</tr>
																				<tr>
																					<th>10/11</th>
																					<th class="ball_aid" rate_k3hz10></th>
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
															<span class="numberTitle">和值</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<a class="selectNumber" playid="k3hz3" ball-number="3" href="javascript:void(0)">3</a>
																<a class="selectNumber" playid="k3hz4" ball-number="4" href="javascript:void(0)">4</a>
																<a class="selectNumber" playid="k3hz5" ball-number="5" href="javascript:void(0)">5</a>
																<a class="selectNumber" playid="k3hz6" ball-number="6" href="javascript:void(0)">6</a>
																<a class="selectNumber" playid="k3hz7" ball-number="7" href="javascript:void(0)">7</a>
																<a class="selectNumber" playid="k3hz8" ball-number="8" href="javascript:void(0)">8</a>
																<a class="selectNumber" playid="k3hz9" ball-number="9" href="javascript:void(0)">9</a>
																<a class="selectNumber" playid="k3hz10" ball-number="10" href="javascript:void(0)">10</a>
																<a class="selectNumber" playid="k3hz11" ball-number="11" href="javascript:void(0)">11</a>
																<a class="selectNumber" playid="k3hz12" ball-number="12" href="javascript:void(0)">12</a>
																<a class="selectNumber" playid="k3hz13" ball-number="13" href="javascript:void(0)">13</a>
																<a class="selectNumber" playid="k3hz14" ball-number="14" href="javascript:void(0)">14</a>
																<a class="selectNumber" playid="k3hz15" ball-number="15" href="javascript:void(0)">15</a>
																<a class="selectNumber" playid="k3hz16" ball-number="16" href="javascript:void(0)">16</a>
																<a class="selectNumber" playid="k3hz17" ball-number="17" href="javascript:void(0)">17</a>
																<a class="selectNumber" playid="k3hz18" ball-number="18" href="javascript:void(0)">18</a>

															</div>
														</div>
													</div>
												</div>
												<div class="games-k3dxds" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">对三个号码和值的大小单双形态进行选择。注：3-10为小，11-18为大。</span></div>
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
																					<th>大</th>
																					<th class="ball_aid" rate_k3hzbig></th>
																				</tr>
																				<tr>
																					<th>小</th>
																					<th class="ball_aid" rate_k3hzsmall></th>
																				</tr>
																				<tr>
																					<th>单</th>
																					<th class="ball_aid" rate_k3hzodd></th>
																				</tr>
																				<tr>
																					<th>双</th>
																					<th class="ball_aid" rate_k3hzeven></th>
																				</tr>
																				<tr>
																					<th>大单</th>
																					<th class="ball_aid" rate_k3hzbigodd></th>
																				</tr>
																				<tr>
																					<th>小单</th>
																					<th class="ball_aid" rate_k3hzsmallodd></th>
																				</tr>
																				<tr>
																					<th>大双</th>
																					<th class="ball_aid" rate_k3hzbigeven></th>
																				</tr>
																				<tr>
																					<th>小双</th>
																					<th class="ball_aid" rate_k3hzsmalleven></th>
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
															<span class="numberTitle">大小单双</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<a class="selectNumber k3dxds" playid="k3hzbig" ball-number="大" href="javascript:void(0)">大</a>
																<a class="selectNumber k3dxds" playid="k3hzsmall" ball-number="小" href="javascript:void(0)">小</a>
																<a class="selectNumber k3dxds" playid="k3hzodd" ball-number="单" href="javascript:void(0)">单</a>
																<a class="selectNumber k3dxds" playid="k3hzeven" ball-number="双" href="javascript:void(0)">双</a>
																<a class="selectNumber k3dxds" playid="k3hzbigodd" ball-number="大单" href="javascript:void(0)">大单</a>
																<a class="selectNumber k3dxds" playid="k3hzsmallodd" ball-number="小单" href="javascript:void(0)">小单</a>
																<a class="selectNumber k3dxds" playid="k3hzbigeven" ball-number="大双" href="javascript:void(0)">大双</a>
																<a class="selectNumber k3dxds" playid="k3hzsmalleven" ball-number="小双" href="javascript:void(0)">小双</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="k3sthdx" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">三同号</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code="k3sthdx" lottery_code_two="games-sthdx-1">单选</span>
															<span class="bet_options" lottery_code="k3sthtx" lottery_code_two="games-sthtx-1">通选</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="30041321">
												<div class="games-sthdx-1" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">在六组三同号（111,222,333,444,555,666）中选择一组，作为一注。若所选号码组与开奖号码相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3sthdx></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">单选</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="111" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="1"></div><div class="k3-touzi-2 k3-chip"value="1"></div><div class="k3-touzi-3 k3-chip"value="1"></div></div>
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="222" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="2"></div><div class="k3-touzi-2 k3-chip"value="2"></div><div class="k3-touzi-3 k3-chip"value="2"></div></div>
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="333" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="3"></div><div class="k3-touzi-2 k3-chip"value="3"></div><div class="k3-touzi-3 k3-chip"value="3"></div></div>
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="444" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="4"></div><div class="k3-touzi-2 k3-chip"value="4"></div><div class="k3-touzi-3 k3-chip"value="4"></div></div>
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="555" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="5"></div><div class="k3-touzi-2 k3-chip"value="5"></div><div class="k3-touzi-3 k3-chip"value="5"></div></div>
																<div class="selectNumber k3dx"playid="k3sthdx" ball-number="666" href="javascript:void(0)"><div class="k3-touzi-1 k3-chip"value="6"></div><div class="k3-touzi-2 k3-chip"value="6"></div><div class="k3-touzi-3 k3-chip"value="6"></div></div>
															</div>
														</div>
													</div>
												</div>
												<div class="games-sthtx-1" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">选择所有三同号（111,222,333,444,555,666）作为一注。若开奖号码中三个数字相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3sbthbz></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">通选</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3tx"playid="k3sthtx" ball-number="三同号通选" href="javascript:void(0)">
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="1"></div><div class="k3-touzi-2 k3-chip"value="1"></div><div class="k3-touzi-3 k3-chip"value="1"></div></div>
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="2"></div><div class="k3-touzi-2 k3-chip"value="2"></div><div class="k3-touzi-3 k3-chip"value="3"></div></div>
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="3"></div><div class="k3-touzi-2 k3-chip"value="3"></div><div class="k3-touzi-3 k3-chip"value="3"></div></div>
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="4"></div><div class="k3-touzi-2 k3-chip"value="4"></div><div class="k3-touzi-3 k3-chip"value="4"></div></div>
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="5"></div><div class="k3-touzi-2 k3-chip"value="5"></div><div class="k3-touzi-3 k3-chip"value="5"></div></div>
																	<div class="k3-sthtx-div"><div class="k3-touzi-1 k3-chip"value="6"></div><div class="k3-touzi-2 k3-chip"value="6"></div><div class="k3-touzi-3 k3-chip"value="6"></div></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>



										<div class="k3sbthbz" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">三不同号</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code_two="games-sthfx-1">复选</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="games-wfjj">
												<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
													<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-6中选择三个号码作为一注。若所选的三个号码与开奖号码相同，即为中奖。</span></div>
												</div>
												<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3sbthbz></em></div>
											</div>
											<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<div class="selectNmuverBox">
													<span class="numberTitle">复选</span>
													<div class="selectNumbers"style="max-width: 100%;">
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="1" href="javascript:void(0)"><div class="k3-chip"value="1"></div></div>
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="2" href="javascript:void(0)"><div class="k3-chip"value="2"></div></div>
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="3" href="javascript:void(0)"><div class="k3-chip"value="3"></div></div>
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="4" href="javascript:void(0)"><div class="k3-chip"value="4"></div></div>
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="5" href="javascript:void(0)"><div class="k3-chip"value="5"></div></div>
														<div class="selectNumber k3sbtfx" playid="k3sbthbz" ball-number="6" href="javascript:void(0)"><div class="k3-chip"value="6"></div></div>
													</div>
												</div>
											</div>
										</div>





										<div class="k3slhdx" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">三连号</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code="k3slhdx" lottery_code_two="gaems-slhdx-1">单选</span>
															<span class="bet_options" lottery_code="k3slhtx" lottery_code_two="games-slhtx-1">通选</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="30041321">
												<div class="gaems-slhdx-1" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从以下4个三连号中选择一个进行投注，若投注号码与开奖号码相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3slhdx></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">单选</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3slhdx" playid="k3slhdx" ball-number="123" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="1"></div><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																<div class="selectNumber k3slhdx" playid="k3slhdx" ball-number="234" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																<div class="selectNumber k3slhdx" playid="k3slhdx" ball-number="345" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																<div class="selectNumber k3slhdx" playid="k3slhdx" ball-number="456" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="5"></div><div class="k3-touzi-4 k3-chip"value="6"></div></div>
															</div>
														</div>
													</div>
												</div>
												<div class="games-slhtx-1" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">对所有的三连号（123,234,345,456）进行投注。若开奖号码为其中任意一个三连号，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3slhtx></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">复选</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3slhfx" playid="k3slhtx" ball-number="三连号通选" href="javascript:void(0)">
																	<div class="k3-slhfx-div"><div class="k3-touzi-4 k3-chip"value="1"></div><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																	<div class="k3-slhfx-div"><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																	<div class="k3-slhfx-div"><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																	<div class="k3-slhfx-div"><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="5"></div><div class="k3-touzi-4 k3-chip"value="6"></div></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>






										<div class="k3ethdx" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">二同号</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code="k3ethdx" lottery_code_two="games-ethdx-1">单选</span>
															<span class="bet_options" lottery_code="k3ethfx" lottery_code_two="games-ebhfx-1">复选</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="30041321">
												<div class="games-ethdx-1" style="display:block;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从二同号（11,22,33,44,55,66）和不同号（1,2,3,4,5,6）中各选一个组成一注。若所选号码与开奖号码相同，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3ethdx></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">同号</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="11" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="1"></div><div class="k3-touzi-4 k3-chip"value="1"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="22" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="2"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="33" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="44" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="55" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="5"></div><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="66" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="6"></div><div class="k3-touzi-4 k3-chip"value="6"></div></div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle">不同号</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="1" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="1"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="2" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="2"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="3" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="4" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="5" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethdx" ball-number="6" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="6"></div></div>
															</div>
														</div>
													</div>
												</div>
												<div class="games-ebhfx-1" style="display:none;">
													<div class="games-wfjj">
														<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
															<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从六组二同号（11,22,33,44,55,66）中选择一组作为一注。若开奖号码中包含所选的二同号，即为中奖。</span></div>
														</div>
														<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3ethfx></em></div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">二同号复选</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="11" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="1"></div><div class="k3-touzi-4 k3-chip"value="1"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="22" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="2"></div><div class="k3-touzi-4 k3-chip"value="2"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="33" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="3"></div><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="44" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="4"></div><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="55" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="5"></div><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																<div class="selectNumber k3ethdx" playid="k3ethfx" ball-number="66" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="6"></div><div class="k3-touzi-4 k3-chip"value="6"></div></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>





										<div class="k3ebthbz" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">二不同号</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code_two="games-ebthdx-1">复选</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="games-wfjj">
												<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
													<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">从1-6中选择两个号码作为一注。若开奖号码中包含所选号码，即为中奖。</span></div>
												</div>
												<div class="wanfajj jiangjin"><span>单注奖金：</span><em class="ball_aid" rate_k3ebthbz></em></div>
											</div>
											<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<div class="selectNmuverBox">
													<span class="numberTitle">复选</span>
													<div class="selectNumbers"style="max-width: 100%;">
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="1" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="1"></div></div>
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="2" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="2"></div></div>
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="3" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="3"></div></div>
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="4" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="4"></div></div>
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="5" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="5"></div></div>
														<div class="selectNumber k3ethdx" playid="k3ebthbz" ball-number="6" href="javascript:void(0)"><div class="k3-touzi-4 k3-chip"value="6"></div></div>
													</div>
												</div>
											</div>
										</div>



										<div class="k3hhm" style="display:none">
											<div class="bet_filter_box" style="border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
												<ul id="bet_filter">
													<li class="bet_filter_item"><strong class="title">红黑码</strong>
														<div class="bet_option">
															<span class="bet_options ssc-curr" lottery_code_two="games-hhm-1">红黑码</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="games-wfjj">
												<div class="wanfats"><i class="iconfont"></i><span>玩法提示</span>
													<div class="wanfats1 play_select_prompt"><span way-data="tabDoc"style="width: 300px;">!!</span></div>
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
																			<th>红码</th>
																			<th><?= $rates['rates']['hhmhong']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>黑码</th>
																			<th><?= $rates['rates']['hhmhei']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红码大</th>
																			<th><?= $rates['rates']['hhmhongd']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红码小</th>
																			<th><?= $rates['rates']['hhmhongx']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红码单</th>
																			<th><?= $rates['rates']['hhmhongdd']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>红码双</th>
																			<th><?= $rates['rates']['hhmhongss']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>黑码大</th>
																			<th><?= $rates['rates']['hhmheid']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>黑码小</th>
																			<th><?= $rates['rates']['hhmheix']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>黑码单</th>
																			<th><?= $rates['rates']['hhmheidd']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>黑码双</th>
																			<th><?= $rates['rates']['hhmheixx']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>四码红</th>
																			<th><?= $rates['rates']['hhmhong4hong']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>四码黑</th>
																			<th><?= $rates['rates']['hhmhong4hei']['rate'] ?></th>
																		</tr>
																		<tr>
																			<th>五码黑</th>
																			<th><?= $rates['rates']['hhmhong5hei']['rate'] ?></th>
																		</tr>
																	</tbody>
																</table>
															</div></span></em>
														</div>
													</div>
													<div class="g_Number_Section"style="background: #fff;border-right: 1px solid #e8e8e8;border-left: 1px solid #e8e8e8;">
														<div class="selectNmuverBox">
															<span class="numberTitle">红黑码</span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div href="javascript:void(0);" playid="hhmhong" class="selectNumber k3hhm"data-number="红码">红码</div>
																<div href="javascript:void(0);" playid="hhmhei" class="selectNumber k3hhm" data-number="黑码">黑码</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div href="javascript:void(0);" playid="hhmhongd" class="selectNumber k3hhm" data-number="红码大">红码大</div>
																<div href="javascript:void(0);" playid="hhmhongx" class="selectNumber k3hhm" data-number="红码小">红码小</div>
																<div href="javascript:void(0);" playid="hhmhongdd" class="selectNumber k3hhm" data-number="红码单">红码单</div>
																<div href="javascript:void(0);" playid="hhmhongss" class="selectNumber k3hhm" data-number="红码双">红码双</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div href="javascript:void(0);" playid="hhmheid" class="selectNumber k3hhm" data-number="黑码大">黑码大</div>
																<div href="javascript:void(0);" playid="hhmheix" class="selectNumber k3hhm" data-number="黑码小">黑码小</div>
																<div href="javascript:void(0);" playid="hhmheidd" class="selectNumber k3hhm" data-number="黑码单">黑码单</div>
																<div href="javascript:void(0);" playid="hhmheixx" class="selectNumber k3hhm" data-number="黑码双">黑码双</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div href="javascript:void(0);" playid="hhmhong4hong" class="selectNumber k3hhm" data-number="4">四码红</div>
																<div href="javascript:void(0);" playid="hhmhong4hei" class="selectNumber k3hhm" data-number="4">四码黑</div>
																<div href="javascript:void(0);" playid="hhmhong5hei" class="selectNumber k3hhm" data-number="5">五码黑</div>
															</div>
														</div>
														<div class="selectNmuverBox">
															<span class="numberTitle"></span>
															<div class="selectNumbers"style="max-width: 100%;">
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="1"><div class="k3-touzi-4 k3-chip"value="1"></div></div>
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="2"><div class="k3-touzi-4 k3-chip"value="2"></div></div>
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="3"><div class="k3-touzi-4 k3-chip"value="3"></div></div>
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="4"><div class="k3-touzi-4 k3-chip"value="4"></div></div>
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="5"><div class="k3-touzi-4 k3-chip"value="5"></div></div>
																<div href="javascript:void(0);" class="selectNumberSum k3hhm-1" data-number="6"><div class="k3-touzi-4 k3-chip"value="6"></div></div>
															</div>
														</div>
													</div>
												</div>
											</div> 
											<div class="selectMultiple">
												<div style="display:inline-block;position: relative;">
													<select class="selectMultipleCon">
														<option value="1">1元</option>
														<option value="2">2元</option>
														<option value="5">5元</option>
													</select>
													<span style="font-size: 12px;color: #4c4c4c;position: absolute;left: 12px;top: 5px;">模式:</span>
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
														<span style="cursor: pointer;">
															<i way-data="gametimes.h">00</i><i>:</i><i way-data="gametimes.m"></i>00<i>:</i><i way-data="gametimes.s">00</i>
														</span>
													</div>
												</div>
											</div>
											<else />
										</if>
									</div>


								</section>
								<!--选号区域右侧-->
								<div class="gameBet_right">
									<div class="right_infsoBlock">
										<div class="title">
											<span class="fl">开奖公告</span>
										</div>
										<table>
											<colgroup>
												<col width="93px" />
												<col width="50px" />
												<col width="40px" />
												<col width="59px" />
											</colgroup>
											<tbody class="tbody-top">
												<tr>
													<th>期号</th>
													<th>开奖号码</th>
													<th>开奖时间</th>
												</tr>
											</tbody>
										</table>
										<div class="block_container lishi" style="max-height: 755px;overflow-y: scroll;">
											<table id="fn_getoPenGame" border="0px" cellpadding="0" cellspacing="0">
												<colgroup>
													<col width="93px" />
													<col width="50px" />
													<col width="40px" />
													<col width="59px" />
												</colgroup>
												<tbody class="tbody text-c">
													<!--开奖期号-->
													<!--开奖号码-->
													<!--和值-->
													<!--大小-->
													<!--单双-->
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
											<span class="game-touzhu-sx"><i style="font-size: 14px;"class="iconfont">&#xe608;</i> 刷新</span>
											<div class="game-touzhu-yc">
												<i style="font-size: 14px;vertical-align: text-top;"class="iconfont">&#xe668;</i>
												<input style="color: #a68f4c;font-size: 14px;background: #fff;"type="button" id="ShowButton" value="隐藏列表">
											</div>
										</div>
										<table class="mem-biao" id="userBets" style="display:block;width:100%;">
											<colgroup>
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
												<col width="133px" />
											</colgroup>
											<thead>
												<tr>
													<th>订单号</th>
													<th>期号</th>
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




				<div class="el-dialog__wrapper" style="z-index: 2011;display:none;">
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
												<col name="el-table_3_column_21" width="160">
												<col name="el-table_3_column_22" width="280">
												<col name="el-table_3_column_23" width="236">
												<col name="el-table_3_column_24" width="236">
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
												<col name="el-table_3_column_21" width="160">
												<col name="el-table_3_column_22" width="280">
												<col name="el-table_3_column_23" width="236">
												<col name="el-table_3_column_24" width="236">
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
						<div class="el-dialog__footer">

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
									<ul>
										<li><div>投注彩种</div><div way-data="BillInfo.cptitle"></div></li>
										<li><div>彩种玩法</div><div way-data="BillInfo.playtitle"></div></li>
										<li><div>投注号码：</div><div id="BillInfo_tzcode" way-data="BillInfo.tzcode"></div></li>
										<li><div>投注期号：</div><div way-data="BillInfo.expect"></div></li>
										<li><div>奖金模式：</div><div way-data="BillInfo.mode"></div></li>
										<li><div>投注金额：</div><div way-data="BillInfo.amount"></div></li>
										<li><div>中奖金额：</div><div way-data="BillInfo.okamount"></div></li>
										<li><div>开奖号码：</div><div way-data="BillInfo.opencode"></div></li>
										<li><div>中奖状态：</div><div id="BillInfo_isdraw"way-data="BillInfo.state"></div></li>
									</ul>
									<div class="trace-foot">
										<div>
											<button type="button" class="ant-btn order-cancel"><span>撤销注单</span></button>
											<button type="button" class="ant-btn againOrder"><span>再次投注</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="naranja-notification-box" id="content">

					</div>

					<script>
						$('.helps').click(function () {
							$(location).attr('href','/byhelp/helptxt10?type=3');
						})
					</script>
					<script>
						$(function(){
							$('.play_select_tit .curr').click();
						})
					</script>
					<script>
						$(function(){
							$("#ShowButton").click(
								function(){
									if($("#userBets").css("display")=='block'){
										$("#userBets").slideUp();
										$("#ShowButton").val("显示列表");
									}else{
										$("#userBets").slideDown();
										$("#ShowButton").val("隐藏列表");
									}
								}
								);
						});
					</script>
				</body>
				</html>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta name="renderer" content="webkit" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="__ROOT__/resources/css/k3.css" />
	<link rel="stylesheet" href="__CSS2__/header.css">
	<link rel="stylesheet" href="__CSS__/style.css"> 
	<link rel="stylesheet" type="text/css" href="/resources/new/css/app.80e56d9bb651a56b66e05daba419e82f.css">
	<!--添加的css-->
	<link rel="stylesheet" href="/ascn/css/games.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/css/naranja.min.css">
	<link rel="stylesheet" href="/ascn/css/user.css">
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
		<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
	</script>

</head>

<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<style>	
		.j_lottery_time .shij span{
			color: #fff;
			font-size: 36px;
		}
		.lotterys div.rq{
			width: 111px;
			color: #6d6d6d;
		}
		.lotterys div.hm{
			width:86px;
		}
		.lotterys div.k3hz{
			width:85px;
		}
		em,i{
			font-style:normal
		}
	</style>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/k3_ct.js"></script>

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
								<span class="open_numb_gif bounceInDown"></span>
								<span class="open_numb_gif bounceInDown"></span>
								<span class="open_numb_gif bounceInDown"></span>
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
					<section id="gameBet" class="cl" style="position:relative;">
						<section class="gameBet_balls">
							<div class="play_select_insert" id="j_play_select">
								<ul class="play_select_tit">
									<li lottery_code="k3dxsb" class="curr">大小骰宝</li>	
									<div onclick="window.location.href='/lotterys/k3/{:I('get.code')}'"class="chuantong">官网玩法 <i style="font-size: 14px;"class="iconfont">&#xe618;</i></div>
								</ul>
							</div>
							<div class="gameBet_left l">
								<if condition="$nowcpinfo['iswh'] eq 0">
									<div data-v-956bf8b8="" data-v-f3c906da="">
										<div data-v-956bf8b8="" class="wrapCTCP">
											<div class="bar-bet"> 
												<div> 
				     <!--div class="checkbox pull-left w50 bet-add ">
				      <label style="margin-top: 4px;"><input type="checkbox" />预设</label>
				  </div--> 
				  <div class="input-group pull-left w150 bet-add ">
				  	<span class="input-group-addon">金额</span> 
				  	<input type="text" maxlength="6" class="form-control tbje" />
				  </div> 
				  <button type="button" class="btn btn-danger fl bet-add reset" style="background: #535362; border-color: #535362">重置</button> 
				  <button onclick="ctSubmit();" type="button" class="btn btn-danger fl bet-add ">提交注单</button> 
				</div> 
				<div class="foot-top fl" style="display: block;"> 
					<ul>
						<li data-num="2" class="cm01 pushcm"><span>2</span></li>
						<li data-num="5" class="cm02 pushcm"><span>5</span></li>
						<li data-num="10" class="cm1 pushcm"><span>10</span></li>
						<li data-num="50" class="cm2 pushcm"><span>50</span></li>
						<li data-num="100" class="cm3 pushcm"><span>100</span></li>
						<li data-num="500" class="cm4 pushcm"><span>500</span></li>
						<li data-num="1000" class="cm5 pushcm"><span>1000</span></li>
						<li data-num="5000" class="cm6 pushcm"><span>5000</span></li>
					</ul> 
				</div> 
				<div style="clear: both;"></div> 
			</div> 
			
			
			<div data-v-2a498717="">
				<table data-v-2a498717="" class="table table-bordered table-bet">
					<thead data-v-2a498717="">
						<tr data-v-2a498717="">
							<th data-v-2a498717="" colspan="12">三军/大小</th>
						</tr>
					</thead>
					<tbody data-v-2a498717="">
						<tr data-v-2a498717="">
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-1"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx1" data-val="1" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-2"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx2" data-val="2" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-3"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx3" data-val="3" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="">大</i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">2.036</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdxd" data-val="大" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-4"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx4" data-val="4" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-5"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx5" data-val="5" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="" class="ball-6"></i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">1.98</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdx6" data-val="6" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 23%;"><i data-v-2a498717="">小</i></div>
								<div data-v-2a498717="" style="width: 29%;"><b data-v-2a498717="" class="text-danger">2.036</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 47%;"><input playid="sjdxs" data-val="小" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
						</tr>
					</tbody>
				</table>





				<table data-v-2a498717="" class="table table-bordered table-bet">
					<thead data-v-2a498717="">
						<tr data-v-2a498717="">
							<th data-v-2a498717="" colspan="12">围骰/全骰</th>
						</tr>
					</thead>
					<tbody data-v-2a498717="">
						<tr data-v-2a498717="">
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-1"></i> <i data-v-2a498717="" class="ball-1"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs111" data-val="111" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-2"></i> <i data-v-2a498717="" class="ball-2"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs222" data-val="222" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-3"></i> <i data-v-2a498717=""
									class="ball-3"></i> <i data-v-2a498717="" class="ball-3"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs333" data-val="333" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-4"></i> <i data-v-2a498717=""
									class="ball-4"></i> <i data-v-2a498717="" class="ball-4"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs444" data-val="444" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-5"></i> <i data-v-2a498717=""
									class="ball-5"></i> <i data-v-2a498717="" class="ball-5"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs555" data-val="555" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="" class="ball-6"></i> <i data-v-2a498717=""
									class="ball-6"></i> <i data-v-2a498717="" class="ball-6"></i>
								</div>

								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">213.84</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqs666" data-val="666" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet hoverTr">

								<div data-v-2a498717="" style="width: 43%;"><i data-v-2a498717="">全骰</i></div>
								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="" class="text-danger">35.64</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 30%;"><input  playid="wsqsqqq" data-val="全骰" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet">
								<div data-v-2a498717="" style="width: 43%; border-right: 0px;"><i data-v-2a498717="">&nbsp;&nbsp;&nbsp;&nbsp;</i></div>
								<div data-v-2a498717="" style="width: 25%;"><b data-v-2a498717="">&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
								<div data-v-2a498717="" style="width: 30%; border-right: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							</td>
							<td data-v-2a498717="" class="k3Col2 top-bet">
								<div data-v-2a498717="" style="width: 43%; border-right: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="width: 25%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="width: 30%; border-right: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							</td>
						</tr>
					</tbody>
				</table>





				<table data-v-2a498717="" class="table table-bordered table-bet">
					<thead data-v-2a498717="">
						<tr data-v-2a498717="">
							<th data-v-2a498717="" colspan="12">点数</th>
						</tr>
					</thead>
					<tbody data-v-2a498717="">
						<tr data-v-2a498717="">
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">4点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">71.28</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds4" data-val="4" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">5点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">35.64</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds5" data-val="5" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">6点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">21.384</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds6" data-val="6" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">7点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">14.256</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds7" data-val="7" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">8点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">10.182</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds8" data-val="8" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">9点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">8.553</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds9" data-val="9" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">10点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.92</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds10" data-val="10" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">11点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.92</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds11" data-val="11" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">12点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">8.553</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds12" data-val="12" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">13点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">10.182</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds14" data-val="14" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">14点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">14.256</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds14" data-val="14" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">15点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">21.384</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds15" data-val="15" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">16点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">35.64</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds16" data-val="16" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet hoverTr">
								<div data-v-2a498717="" style="width: 22%;"><i data-v-2a498717="" style="font-style: normal;">17点</i></div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">71.28</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;"><input playid="ds17" data-val="17" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet">
								<div data-v-2a498717="" style="width: 22%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="width: 30%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							</td>
							<td data-v-2a498717="" class="k3Col1 top-bet">
								<div data-v-2a498717="" style="width: 22%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="width: 30%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
								<div data-v-2a498717="" style="border-right: 0px; width: 48%;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							</td>
						</tr>
					</tbody>
				</table>





				<table data-v-2a498717="" class="table table-bordered table-bet">
					<thead data-v-2a498717="">
						<tr data-v-2a498717="">
							<th data-v-2a498717="" colspan="12">长牌</th>
						</tr>
					</thead>
					<tbody data-v-2a498717="">
						<tr data-v-2a498717="">
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-2"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp12" data-val="12" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-3"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp13" data-val="13" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-4"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp14" data-val="14" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-5"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp15" data-val="15" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp16" data-val="16" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-3"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp23" data-val="23" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-4"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp24" data-val="24" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-5"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp25" data-val="25" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp26" data-val="26" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-3"></i> <i data-v-2a498717=""
									class="ball-4"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp34" data-val="34" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-3"></i> <i data-v-2a498717=""
									class="ball-5"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp35" data-val="35" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-3"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp36" data-val="36" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-4"></i> <i data-v-2a498717=""
									class="ball-5"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp45" data-val="45" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-4"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp46" data-val="46" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-5"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">7.128</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="cp56" data-val="56" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<table data-v-2a498717="" class="table table-bordered table-bet">
					<thead data-v-2a498717="">
						<tr data-v-2a498717="">
							<th data-v-2a498717="" colspan="12">短牌</th>
						</tr>
					</thead>
					<tbody data-v-2a498717="">
						<tr data-v-2a498717="">
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-1"></i> <i data-v-2a498717=""
									class="ball-1"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp11" data-val="11" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-2"></i> <i data-v-2a498717=""
									class="ball-2"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp22" data-val="22" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-3"></i> <i data-v-2a498717=""
									class="ball-3"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp33" data-val="33" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-4"></i> <i data-v-2a498717=""
									class="ball-4"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp44" data-val="44" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-5"></i> <i data-v-2a498717=""
									class="ball-5"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp55" data-val="55" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
							<td data-v-2a498717="" class="diceRow top-bet hoverTr">
								<div data-v-2a498717="" style="width: 30%;"><i data-v-2a498717="" class="ball-6"></i> <i data-v-2a498717=""
									class="ball-6"></i>
								</div>
								<div data-v-2a498717="" style="width: 30%;"><b data-v-2a498717="" class="text-danger">13.365</b></div>
								<div data-v-2a498717="" style="border-right: 0px; width: 40%;"><input playid="dp66" data-val="66" data-v-2a498717="" type="text"
									maxlength="6" max="100000" class="bet-input">
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="bar-bet"> 
				<div> 
					<div class="input-group pull-left w150 bet-add ">
						<span class="input-group-addon">金额</span> 
						<input type="text" maxlength="6" class="form-control tbje" />
					</div> 
					<button type="button" class="btn btn-danger fl bet-add reset" style="background: #535362; border-color: #535362">重置</button> 
					<button onclick="ctSubmit();" type="button" class="btn btn-danger fl bet-add ">提交注单</button> 
				</div> 
				<div class="foot-top fl" style="display: block;"> 
					<ul>
						<li data-num="2" class="cm01 pushcm"><span>2</span></li>
						<li data-num="5" class="cm02 pushcm"><span>5</span></li>
						<li data-num="10" class="cm1 pushcm"><span>10</span></li>
						<li data-num="50" class="cm2 pushcm"><span>50</span></li>
						<li data-num="100" class="cm3 pushcm"><span>100</span></li>
						<li data-num="500" class="cm4 pushcm"><span>500</span></li>
						<li data-num="1000" class="cm5 pushcm"><span>1000</span></li>
						<li data-num="5000" class="cm6 pushcm"><span>5000</span></li>
					</ul> 
				</div> 
				<div style="clear: both;"></div> 
			</div> 
			
			<div class="g_Chase_Section" style="display:none;">
				<div class="chase_Program">
					<p class="p_chase">方案注数
						<i class="c_green fw_600" way-data="ytotal_money_zhushu" id="f_gameOrder_lotterys_num">0</i> 注， 
						金额 <i class="c_org fw_600">¥<em id="f_gameOrder_amount" way-data="ytotal_money">0</em></i> 元  
					</p>
				</div>
			</div>   
			<div class="xiad-righ" style="display:none;">
				<ul>
					<li class="li22"><span id="f_submit_order">
						<img src="__ROOT__/resources/images/icon/icon_06.png">&nbsp;&nbsp;确认投注</span>
					</li>
					<li class="li22 li23"><span id="orderlist_clear">
						<img src="__ROOT__/resources/images/icon/icon_19.png">&nbsp;&nbsp;清空单号</span>
					</li>
				</ul>
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
				<col width="95px" />
				<col width="73px" />
				<col width="73px" />
			</colgroup>
			<tbody class="tbody-top">
				<tr>
					<th>期号</th>
					<th>开奖号码</th>
					<th>和值</th>
				</tr>
			</tbody>
		</table>
		<div class="block_container lishi" style="max-height: 870px;overflow-y: scroll;">
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
<div tabindex="-1" id="touzhu" class="ant-modal-wrap ant-modal-centered record-detail-wrapper ascnshow" role="dialog" aria-labelledby="rcDialogTitle1"style="display:none;">
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
	<script type="text/javascript">
		$(".cm1").click();
		$(".tbje").change(function(){
			var vv = $(this).val();
			$(".tbje").val(vv);
		});
		$(".bet-input").click(function(){
			var vv = $(".tbje").val();
			if(vv > 0 ){
				$(this).val(vv);
			}
			$(".tbje").val(vv);
		});
		$(".pushcm").click(function(){
			var vv = $(".tbje").val();
			var num = $(this).attr('data-num');
			if(vv != ''){
				$(".tbje").val(Number(num));
			}else{
				$(".tbje").val(num);
			}
		});
		$(".reset").click(function(){
			$(".bet-input").val('');
		});
	</script>
	<script>
		$(".bet-input").each(function(){
			var playid = $(this).attr('playid');
			$(this).parent().prev().find('b').text(k3lotteryrates.rates[playid].rate);
		});
	</script>
	<script>
		$('.helps').click(function () {
			$(location).attr('href','/byhelp/helptxt10?type=3');
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
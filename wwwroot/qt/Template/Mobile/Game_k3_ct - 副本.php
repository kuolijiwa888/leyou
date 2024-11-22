<php>$webheadertitle = $nowcpinfo['title'];</php>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{$webheadertitle}</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="__ROOT__/Template/Mobile/css/sm.css">
<link rel="stylesheet" href="__ROOT__/Template/Mobile/css/sm-extend.min.css">
<link rel="stylesheet" href="__ROOT__/Template/Mobile/ct/css/app.61a14f2f26f9ec2e127ea09bbfa97f49.css">
<script>
    var WebConfigs = {
        'ROOT' : "__ROOT__"
    } 
<?php echo "var k3lotteryrates = ".json_encode($rates,JSON_UNESCAPED_UNICODE);?>
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

<link rel="stylesheet" href="__CSS__/icon.css">
<script>
var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
</script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/way.min.js' charset='utf-8'></script>
<script type="text/javascript" src="__ROOT__/Template/Mobile/js/member.page.js"></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/common.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/k3.js' charset='utf-8'></script>
<style>
.bottom_navbar{position: absolute;bottom: 0;z-index: 9999;width: 100%;}
.bottom_navbar ul{list-style: none;overflow: hidden;padding: 0;margin: 0;background: #22292c;color: #fff;padding-top: 5px;}
.bottom_navbar ul li{ float: left;width: 25%;text-align: center;}
.am-navbar-default a {color: #fff;}
.am-navbar-nav a { display: inline-block;width: 100%;height: 49px;line-height: 20px;}
.bottom_navbar .bottom_navbar_list i{font-size: 25px;line-height: 30px;}
.am-navbar-nav a .am-navbar-label {padding-top: 2px;line-height: 1;font-size: 12px;display: block;word-wrap: normal;text-overflow: ellipsis;white-space: nowrap;overflow: hidden;font-size: 14px;}
.bottom_navbar .active {color: #e54042;}
.choice_lottery_playdetail {
    position: absolute;
    z-index: 100;
    top: -50px;
    left: 50%;
}
</style>
</head>
<body>
<div class="page-group">
      <!-- 你的html代码 -->
      <div class="pa yyplay_select_container" id="PageSwitch">
        <volist name="k3list" id="k3vo">
            <a  data-k3url="{:U('Game/k3',['code'=>$k3vo['name']])}">{$k3vo.title}</a>
            </volist>
        </div>
      <div class="page">
        <style>
    .theme-red .icon-sanjiaoxing{
        display: inline-block;
        transform: rotate(180deg);
        transition: .6s;
        font-size: 22px;
    }
</style>

            <header class="bar bar-nav theme-red" style="background:#000;text-align:center;">
                <if condition="$userinfo and ($userinfo['islogin'] eq 1)">
                <if condition="(strtolower(CONTROLLER_NAME) eq 'index') and (strtolower(ACTION_NAME) eq 'index')">
                <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
                    <span class="icon icon-home"></span>
                </a>
                <else />
                <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
                    <span class="iconfont icon-shouyeshouye1"></span>
                </a>
                </if>
                <if condition="(strtolower(CONTROLLER_NAME) eq 'game') and (strtolower(ACTION_NAME) eq 'k3') and is_array($nowcpinfo)">
                <h1 class="title" onclick="GamePageSwitchToggle();">{$nowcpinfo.title}<i class="iconfont icon-sanjiaoxing"></i></h1>
                
                <else />
                <h1 class="title">{$webheadertitle}</h1>
                </if>

                <else />
                <if condition="(strtolower(CONTROLLER_NAME) eq 'index') and (strtolower(ACTION_NAME) eq 'index')">
                <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
                    <span class="iconfont icon-shouyeshouye1"></span>
                </a>
                <else />
                <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
                    <span class="icon icon-left"></span>
                </a>
                </if>

                <a class="button button-link button-nav pull-right" onclick="lianxikefu('{$WebConfigs.kefuthree}')">
                    <span class="icon icon-message"></span>
                    联系客服
                </a>
                <if condition="(strtolower(CONTROLLER_NAME) eq 'game') and (strtolower(ACTION_NAME) eq 'k3') and is_array($nowcpinfo)">
                <h1 class="title" onclick="GamePageSwitchToggle();">{$nowcpinfo.title} <span class="icon icon-down" style="font-size:0.8rem;"></span></h1>
                <!-- <div class="pa yyplay_select_container" id="PageSwitch">
                    <volist name="k3list" id="k3vo">
                    <a href="{:U('Game/k3',['code'=>$k3vo['name']])}">{$k3vo.title}</a>
                    </volist>
                </div> -->
                <else />
                <h1 class="title">{$webheadertitle}</h1>
                </if>
                </if>
                <!-- 选择与切换玩法 -->
                    <em class="gameInfo" style="font-size: 12px;display: inline-block;line-height: 13px;text-align: left;margin-top: 13px;">玩<br>法</em>
                    <div class="choice_lottery_playdetail_left">
                        <a class="choice_playName" href="#">大小骰宝</a>
                        <i class="iconfont icon-sanjiaoxing" style="color: #f0c930;transform: rotate(180deg);transition: .6s;"></i>
                    </div>    

            </header>
          <div class="content">
			
            <div class="play_select_container yyplay_select_container">
                <!-- 玩法切换 -->
                <div class="play_select_insert" id="j_play_select">
                    
                    <ul class="play_select_tit"> 
                
                            
                            <li lottery_code="k3hzzx" parent_code="{$nowcpinfo.name}" class="curr lottery_1">
                                <a href="javascript:void(0)" class="lineMore-item"> 大小骰宝 </a>
                                <p class="ypeil">{$minPeilv}-{$maxPeilv}倍</p>
                                <p class="ysaizi">
                                    <span class="dice dice1"></span>+
                                    <span class="dice dice2"></span>+
                                    <span class="dice dice3"></span>
                                </p>
                            </li>
                        
                    </ul> 
                </div>
                <!-- 玩法切换 -->
            </div>
			<div class="row no-gutter text-center Betting_Issue_CountDown" style="padding-top:5px;background: #22563f;">
                       <dl class="col-50">
                              <dt style="font-size:14px;"><i class="f_lottery_info_lastnumber red"  id="f_lottery_info_lastnumber" way-data="showExpect.lastFullExpect">--</i><span id="issueText">期</span></dt>
                               <dd style="font-size:20px; padding:0; margin:0;">
							   <i class="openNum_list red" id="openNum_list">
								<t way-data="showExpect.openCode1">-</t>
								<t way-data="showExpect.openCode2">-</t>
								<t way-data="showExpect.openCode3">-</t>
							   </i>
							   <span class="icon icon-caret" style="color:#999"></span></dd>
                        </dl>
                       <dl class="col-50" style="color:#caebda">
                        <dt style="font-size:14px;">距<i class="f_lottery_info_number red" id="f_lottery_info_number" way-data="showExpect.currFullExpect">--</i>期截止</dt>
                         <dd style="font-size:20px; padding:0; margin:0;"><i class="j_lottery_time red" id="j_lottery_time">
							<t class="hh bj"><span way-data="gametimes.h">00</span></t>
							<em>:</em>
							<t class="mm bj"><span way-data="gametimes.m">00</span></t>
							<em>:</em>
							<t class="ss bj"><span way-data="gametimes.s">00</span></t>
						 </i></dd>
                        </dl> 
			</div>
						<div style="background-color: #fff; margin-top: -4px;">
                           <table id="fn_getoPenGame" border="0px" cellpadding="0" cellspacing="0" style="display:none;width:100%;text-align:center">
                            <colgroup>
                                <col width="30%">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                            </colgroup>
                            <thead 
    style="background-color: #DADADA; border-bottom: 1px solid #BBBBBB;border-top: 1px solid hsla(0,0%,100%,.3);background-color: #22563f;width: 16rem;font-size: .7em;color: #caebda;text-align: center;clear: both;border-bottom: 1px solid #BBBBBB;height: 64px;">
                                <tr style="    border-bottom: 1px solid #212121;">
                                    <th>期数</th>
                                    <th>奖号</th>
                                    <th>和值</th>
                                    <th>形态</th>
                                </tr>
                            </thead>
                            <tbody class="tbody" style="background: #22563f;"></tbody>
                        </table>
                         </div>


        <section class="ui-container">   
			<!-- 选择与切换玩法 -->
			<!-- 投注期号与倒计时 -->
			<!-- 投注期号与倒计时 --> 
			<!-- 选号区域 -->

            <div data-v-e60a1042="" data-v-1f7d739c="" class="selectNumber fix">
            <div data-v-e60a1042="" class="numberContent">
            <div data-v-e60a1042="" class="betTitle">
             <i data-v-e60a1042="" id="CTK3001001001icon" class="minus"></i> 
             <p data-v-e60a1042="">三军/大小</p>
            </div> 
            <div data-v-e60a1042="" id="CTK3001001001" class="betContent" style="">
             <div data-v-e60a1042="">
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice1"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice2"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice3"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item bigDice num-item"><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">1.98</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 大 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">2.036</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 小 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">2.036</i></span>
               </div>
              </div>
             </div>
            </div>
            </div> 
            <div data-v-e60a1042="" class="numberContent">
            <div data-v-e60a1042="" class="betTitle">
             <i data-v-e60a1042="" id="CTK3001002001icon" class="minus"></i> 
             <p data-v-e60a1042="">围骰/全骰</p>
            </div> 
            <div data-v-e60a1042="" id="CTK3001002001" class="betContent">
             <div data-v-e60a1042="">
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice1"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice2"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice3"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice4"></i><i data-v-e60a1042="" class="Dice Dice4"></i><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice5"></i><i data-v-e60a1042="" class="Dice Dice5"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice6"></i><i data-v-e60a1042="" class="Dice Dice6"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">213.84</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 全骰 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">35.64</i></span>
               </div>
              </div>
             </div>
            </div>
            </div> 
            <div data-v-e60a1042="" class="numberContent">
            <div data-v-e60a1042="" class="betTitle">
             <i data-v-e60a1042="" id="CTK3001003001icon" class="minus"></i> 
             <p data-v-e60a1042="">点数</p>
            </div> 
            <div data-v-e60a1042="" id="CTK3001003001" class="betContent">
             <div data-v-e60a1042="">
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 4点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">71.28</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 5点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">35.64</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 6点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">21.384</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 7点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">14.256</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 8点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">10.182</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 9点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">8.553</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 10点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.92</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 11点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.92</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 12点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">8.553</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 13点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">10.182</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 14点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">14.256</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 15点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">21.384</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 16点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">35.64</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"> 17点 </a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">71.28</i></span>
               </div>
              </div>
             </div>
            </div>
            </div> 
            <div data-v-e60a1042="" class="numberContent">
            <div data-v-e60a1042="" class="betTitle">
             <i data-v-e60a1042="" id="CTK3001004001icon" class="minus"></i> 
             <p data-v-e60a1042="">长牌</p>
            </div> 
            <div data-v-e60a1042="" id="CTK3001004001" class="betContent">
             <div data-v-e60a1042="">
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice2"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice3"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice3"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice4"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice4"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice5"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">7.128</i></span>
               </div>
              </div>
             </div>
            </div>
            </div> 
            <div data-v-e60a1042="" class="numberContent">
            <div data-v-e60a1042="" class="betTitle">
             <i data-v-e60a1042="" id="CTK3001005001icon" class="minus"></i> 
             <p data-v-e60a1042="">短牌</p>
            </div> 
            <div data-v-e60a1042="" id="CTK3001005001" class="betContent">
             <div data-v-e60a1042="">
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice1"></i><i data-v-e60a1042="" class="Dice Dice1"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice2"></i><i data-v-e60a1042="" class="Dice Dice2"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice3"></i><i data-v-e60a1042="" class="Dice Dice3"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice4"></i><i data-v-e60a1042="" class="Dice Dice4"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice5"></i><i data-v-e60a1042="" class="Dice Dice5"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div> 
              <div data-v-e60a1042="" class="bet-item-box-Con">
               <div data-v-e60a1042="" class="bet-item-box">
                <a data-v-e60a1042="" class="bet-item"><i data-v-e60a1042="" class="Dice Dice6"></i><i data-v-e60a1042="" class="Dice Dice6"></i></a> 
                <span data-v-e60a1042="" class="bet-item-award"><i data-v-e60a1042="">13.365</i></span>
               </div>
              </div>
             </div>
            </div>
            </div>
            </div>
		</section>  
          </div>
      </div>
  </div>

<div class="lottey_footer" style="bottom: 58px;">
    <div class="lottery_footer_sum" style="display:none;">
        <span class="lottery_sum_text">当前号码</span>
        <div id="lottery_sum_old_b">

        </div>
    </div>
    <div class="lottery_inputBox" style="display:none;">
        每注金额
        <input type="number" class="lottery_input">
        <span class="lottery_input_text">请输入要投注的金额</span>
    </div>
    <div class="kuaijie_money">
        <ul class="kuaijie_money_ul">
            <li class="kuaijie_item">5</li>
            <li class="kuaijie_item">10</li>
            <li class="kuaijie_item">50</li>
            <li class="kuaijie_item">100</li>
            <li class="kuaijie_item">1000</li>
        </ul>
    </div>  
    <div class="betting_box" style="background: #22563f;border-top: 1px solid #1a4230;">
        <div class="betting_left">
            <span class="betting_empty">清空</span>
            <em class="betting_sum_box" style="display:none;">
                共<span class="betting_sum">0</span>注,
                <span class="betting_sum_moery">0</span>元
            </em>
        </div>
        <div class="betting_right">
            <button class="betting_right_btn">
                马上投注
            </button>
        </div>
    </div>
</div>
<include file="public/footer" />
<include file="Game/wf" />
<div class="popup" id="userbetshistory">
		<div class="list-block media-list" style="padding-top: 0; margin-top: 0">
			<div class="card-header "><botton id="formaubmitdo" class="button button-fill button-danger close-popup" style="width:100%;">关闭</botton></div>
			<ul id="userbetshistorylist"></ul>
			<div class="member-pag paging"></div>
		</div>
</div>
<script>

</script>
</body>
</html>
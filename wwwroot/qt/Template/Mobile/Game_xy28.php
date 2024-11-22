<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>在线投注 - {:GetVar('webtitle')}线上平台</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
  <link rel="shortcut icon" href="/favicon.ico">
  <!--爱尚互联-->
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
  <!--爱尚互联-->
  <link rel="stylesheet" href="__ROOT__/Template/Mobile/css/ssc.css">
  <!--爱尚互联-->
  <link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
  <script src="/ascn/mobile/js/hsycmsAlert.js"></script>
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
  <script type="text/javascript" src="/ascn/mobile/js/alert.min.js"></script>
  <!--爱尚互联-->
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
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/hemai.js"></script>
</head>

<body>

  <script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
  <script type="text/javascript" src="__ROOT__/resources/js/jquery.history.js"></script>
  <script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
  <script type="text/javascript" src="__ROOT__/resources/main/index.js"></script>
  <script type="text/javascript" src="__ROOT__/resources/js/member.page.js"></script>
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/tabGameData.js"></script>
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/xy28.js"></script>
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/xy28tabGame.js"></script>
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
        <div class="gameType play_wanfa"><span style="font-weight:800">标准玩法</span><span style="float:right;" class=""><string>特码</string><i class="iconfont">&#xe618;</i></span></div>
        <div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
        <div class="play_select_insert animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 20001;width: 3.35rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display: none;" id="j_play_select">
          <div class="play_select_top">
            <span><i class="iconfont">&#xe633;</i>标准模式 - 选择玩法</span>
          </div>
          <ul class="play_select_tit" style="height: 69vh;max-height: 69vh;padding: 0;overflow: hidden;overflow-y: auto;">
            <div class="ssc-ct-wanfa">
              <li class="ssc-selected" lottery_code="xy28_tm">特码</li>
              <li style="margin-left: .1rem;" lottery_code="xy28_tmbs">特码包三</li>
              <li lottery_code="xy28_bs">波色</li>
              <li style="margin-left: .1rem;" lottery_code="xy28_hunhe">混合</li>
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
          </ol>
        </div>
      </div>
      <div class="lottery-top-3" onclick="openls();"><i class="iconfont">&#xe7bb;</i></div>
      <div class="action-sheet caidan dibutop animated" style="display:none;">
        <div class="action-sheet-button1">最近开奖</div>
        <div class="action-sheet-button2" onclick="location.href='/userCenter/betRecord'">我的投注</div>

        <div class="action-sheet-button">
          取消
        </div>
      </div>
    </div>

    <div id="gameBet" class="lottery-number">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll"class="lottery-number-tips play_select_prompt">
        <span>Tips：</span><span way-data="tabDoc"></span>
      </marquee>
      <div class="ssc-playmain g_Number_Section"style="padding-top: 0px;padding: .075rem;">
        <!--开始-->
        <!--号码-->
        <div class="xy28_tm" style="display:block;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tm_00" data-number="0"><span>0</span><em><?= $rates['rates']['xy28_tm_00']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_01" data-number="1"><span>1</span><em><?= $rates['rates']['xy28_tm_01']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_02" data-number="2"><span>2</span><em><?= $rates['rates']['xy28_tm_02']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_03" data-number="3"><span>3</span><em><?= $rates['rates']['xy28_tm_03']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_04" data-number="4"><span>4</span><em><?= $rates['rates']['xy28_tm_04']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_05" data-number="5"><span>5</span><em><?= $rates['rates']['xy28_tm_05']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_06" data-number="6"><span>6</span><em><?= $rates['rates']['xy28_tm_06']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_07" data-number="7"><span>7</span><em><?= $rates['rates']['xy28_tm_07']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_08" data-number="8"><span>8</span><em><?= $rates['rates']['xy28_tm_08']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_09" data-number="9"><span>9</span><em><?= $rates['rates']['xy28_tm_09']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_10" data-number="10"><span>10</span><em><?= $rates['rates']['xy28_tm_10']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_11" data-number="11"><span>11</span><em><?= $rates['rates']['xy28_tm_11']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_12" data-number="12"><span>12</span><em><?= $rates['rates']['xy28_tm_12']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tm_13" data-number="13"><span>13</span><em><?= $rates['rates']['xy28_tm_13']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tm_14" data-number="14"><span>14</span><em><?= $rates['rates']['xy28_tm_14']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_15" data-number="15"><span>15</span><em><?= $rates['rates']['xy28_tm_15']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_16" data-number="16"><span>16</span><em><?= $rates['rates']['xy28_tm_16']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_17" data-number="17"><span>17</span><em><?= $rates['rates']['xy28_tm_17']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_18" data-number="18"><span>18</span><em><?= $rates['rates']['xy28_tm_18']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_19" data-number="19"><span>19</span><em><?= $rates['rates']['xy28_tm_19']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_20" data-number="20"><span>20</span><em><?= $rates['rates']['xy28_tm_20']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_21" data-number="21"><span>21</span><em><?= $rates['rates']['xy28_tm_21']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_22" data-number="22"><span>22</span><em><?= $rates['rates']['xy28_tm_22']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_23" data-number="23"><span>23</span><em><?= $rates['rates']['xy28_tm_23']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tm_24" data-number="24"><span>24</span><em><?= $rates['rates']['xy28_tm_24']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tm_25" data-number="25"><span>25</span><em><?= $rates['rates']['xy28_tm_25']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tm_26" data-number="26"><span>26</span><em><?= $rates['rates']['xy28_tm_26']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tm_27" data-number="27"><span>27</span><em><?= $rates['rates']['xy28_tm_27']['rate'] ?></em></div>
          </div>
        </div>
        <!--号码结束-->
        <!--特码三包-->
        <div class="xy28_tmbs" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tmbs" data-number="0"><span>0</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tmbs" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tmbs" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="xy28_tmbs" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="xy28_tmbs" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="xy28_tmbs" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="xy28_tmbs" data-number="27"><span>27</span></div>
          </div>
        </div>
        <!--特码三包结束-->
        <!--波色-->
        <div class="xy28_bs" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber lhctmbbselectNumber" playid="xy28_bs_hong" data-number="红波"><span>红波</span><em><?= $rates['rates']['xy28_bs_hong']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber lhctmbbselectNumber" playid="xy28_bs_lan" data-number="蓝波"><span>蓝波</span><em><?= $rates['rates']['xy28_bs_lan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber lhctmbbselectNumber" playid="xy28_bs_lv" data-number="绿波"><span>绿波</span><em><?= $rates['rates']['xy28_bs_lv']['rate'] ?></em></div>
          </div>
        </div>
        <!--波色结束-->
        <!--混合-->
        <div class="xy28_hunhe" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_big" data-number="大"><span>大</span><em><?= $rates['rates']['xy28_hunhe_big']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_small" data-number="小"><span>小</span><em><?= $rates['rates']['xy28_hunhe_small']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_odd" data-number="单"><span>单</span><em><?= $rates['rates']['xy28_hunhe_odd']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_even" data-number="双"><span>双</span><em><?= $rates['rates']['xy28_hunhe_even']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_big_odd" data-number="大单"><span>大单</span><em><?= $rates['rates']['xy28_hunhe_big_odd']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_small_odd" data-number="小单"><span>小单</span><em><?= $rates['rates']['xy28_hunhe_small_odd']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_big_even" data-number="大双"><span>大双</span><em><?= $rates['rates']['xy28_hunhe_big_even']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_small_even" data-number="小双"><span>小双</span><em><?= $rates['rates']['xy28_hunhe_small_even']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_ji_big" data-number="极大"><span>极大</span><em><?= $rates['rates']['xy28_hunhe_ji_big']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_ji_small" data-number="极小"><span>极小</span><em><?= $rates['rates']['xy28_hunhe_ji_small']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber lhctmbbselectNumber" playid="xy28_hunhe_baozi" data-number="豹子"><span>豹子</span><em><?= $rates['rates']['xy28_hunhe_baozi']['rate'] ?></em></div>
          </div>
        </div>
        <!--混合结束-->
        <!-- 结束 -->
      </div>
    </div>
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
      <div><span class="select_zhushu">已选 <em class="zhushu"style="color: #434354;font-weight: bold;">0</em> 注</span>,
        <span class="selectMultipleOld">共计 <em class="selectMultipleOldMoney"style="color: #434354;font-weight: bold;">0.00</em>元</span>
        <span class="hemaijiner" style="display:none;">合买金额 <em class="hemaijinerMoney"style="color: #434354;font-weight: bold;">0.000</em>元</span>
      </div>
      <span>余额: <em class="wrapRefreshShow" style="color: #434354;font-weight: bold;">{$userinfo['balance']}</em> 元</span>
    </div>
    <div class="lottery-bottom-3">
      <div class="hemai">发起合买</div><div style="color: #a68f4c;"class="bygcl goucai"><i class="lanIconNumber"id="lanIconNumbere">0</i><i class="iconfont">&#xe60e;</i> 购彩篮</div><div class="bygcl addtobetbtn"><i class="iconfont">&#xe676;</i> 购彩篮</div><div class="kuaijie">快速投注</div>
    </div>
  </div>
  
  <!-- 发起合买 -->
  <div class="faqihemai animated linearTop" style="display:none;z-index: 1001;">
    <div class="faqihemai_title">发起合买</div>
    <div class="faqihemai_notice">
      <div class="faqihemai_notice_div">
        <div class="leixing" style="border-bottom: 1px solid #7777771f;">
          <div class="faqihemai_leix iconfont active" data="yes" num="0"><span>完全公开</span></div>
          <div class="faqihemai_leix iconfont" data="no" num="1"><span>开奖后公开</span></div>
          <div class="faqihemai_leix iconfont" data="no" num="2"><span>仅跟单人可看</span></div>
          <div class="faqihemai_leix iconfont" data="no" num="3"><span>完全保密</span></div>
        </div>
        <div class="faqihemai_f">
          <span>我要分为：</span><input type="text" id="fsInput" name="allnum" value="1"><span> 份，</span><span>每份<i style="color: rgb(255, 170, 13);" id="fsMoney">￥0.00</i>元，</span><span>每份最低1元。</span>
        </div>
        <div class="faqihemai_r">
          <span>我要认购：</span><input type="text" id="rgInput" name="buynum" value="1"><span> 份，</span><span><span>0</span>%</span>
          <div class="tips" id="rgErr" style="display: none;"></div>
        </div>
        <div class="faqihemai_b">
          <div class="wybd iconfont" id="isbaodi" data="no" num="0"></div>
          <span>我要保底：</span><input type="text" id="bdInput" name="baodinum" value="0" disabled="disabled"><span> 份，</span><span><span id="bdMoney" style="color: rgb(255, 170, 13);">￥0.00</span>元（<span id="bdScale">0</span>%）</span>
          <div class="tips" id="bdErr" style="display: none;"></div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <button class="noe">取 消</button><button class="two" id="buy_hemai">发起合买</button>
    </div>
  </div>
  <div class="hsycms-model-mask" id="mask_hemai"></div>
  <div class="hsycms-model hsycms-model-confirm" id="hemai_xiangxi">
    <div class="hscysm-model-title">确认投注</div>
    <div class="hsycms-model-text1">彩种：<span way-data="showExpect.shortname"></span><br>期号：<span way-data="showExpect.currFullExpect"></span><br>合买份数：<span id="fenshuhemai"></span><br>认购份数：<span id="rengouhemai"></span><br>是否保底：<span id="isbaodihemai"></span><br>保底份数：<span id="baodihemai"></span><br>投注账号：<span>{$userinfo['username']}</span><br>总投注金额：<span id="Orderdetailtotalpricehemai"></span></div>

  </div>
  <!-- 发起合买 -->

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
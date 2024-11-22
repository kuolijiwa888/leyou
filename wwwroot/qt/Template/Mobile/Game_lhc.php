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

  <link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
  <script src="/ascn/mobile/js/hsycmsAlert.js"></script>
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
  <script type="text/javascript" src="/ascn/mobile/js/alert.min.js"></script>
  <!--爱尚互联-->
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
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/lhc.js"></script>
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/lhctabGame.js"></script>
  <script src="__JS__/require.js" data-main="__JS__/main"></script>
  <script>
    var lotteryinfo = <?php echo json_encode($nowcpinfo,JSON_UNESCAPED_UNICODE);?>;
  </script>
  <script>
    var WebConfigs = {
      webtitle:"{$webconfigs.webtitle}",
      kefuthree:"{$webconfigs.kefuthree}",
      kefuqq:"{$webconfigs.kefuqq}",
      ROOT : "__ROOT__"
    };
  </script>
  <header class="gamesheader1">
    <span class="play_type">{$cptitle}<i style="font-size: .14rem;"class="iconfont"> &#xe647;</i></span>
    <a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
    <a><i class="iconfont icon-2">&#xe67c;</i></a>
  </header>
  <style>
    .play_select_tit .qian:before{
      content: '\e6d8';
    }
    .play_select_tit .hou:before{
      content: '\e60f';
    }
    .gameType .qian:before{
      content: '\e6d8';
    }
  </style>
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
        float: right;
    line-height: 1.5;
    }
    .bym-30q .qiu{
    border-radius: 100%;
    background-color: #434354;
    color: #fff;
    display: block;
    align-items: center;
    justify-content: center;
    line-height: normal;
    width: 0.2rem;
    height: .2rem;
    margin: 0 .02rem;
    }
    .bym-30q .lotterys{
        padding: 0 .16rem;
    }
  </style>
  <div class="by-lottery">
    <div class="lottery-top">
      <div class="lottery-top-0">
        <div class="gameType play_wanfa"><span style="font-weight:800">标准玩法</span><span style="float:right;" class=""><string>特码直选</string><i class="iconfont">&#xe618;</i></span></div>
        <div class="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
        <div class="play_select_insert animated linearTop" style="position: fixed;left: 50%;top: 50%;z-index: 20001;width: 3.35rem;height: auto;-webkit-transform: translate(-50%,-50%);transform: translate(-50%,-50%);display: none;" id="j_play_select">
          <div class="play_select_top">
            <span><i class="iconfont">&#xe633;</i>标准模式 - 选择玩法</span>
          </div>
          <ul class="play_select_tit" style="height: 69vh;max-height: 69vh;padding: 0;overflow: hidden;overflow-y: auto;">
            <li lottery_code="lhc_tm" id="lhc_tm" class="curr">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 特码</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box1" id="lhc_tms" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">特码</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options currs" lottery_code_two="tmzx">直选</div>
                    <div class="bet_options" lottery_code_two="tmlm">两面</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_zm" id="lhc_zm">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 正码</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box2" id="lhc_zms" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">正码</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="zmrx">任选</div>
                    <div class="bet_options" lottery_code_two="zm1t">正 1 特</div>
                    <div class="bet_options" lottery_code_two="zm1lm">正 1 两面</div>
                    <div class="bet_options" lottery_code_two="zm2t">正 2 特</div>
                    <div class="bet_options" lottery_code_two="zm2lm">正 2 两面</div>
                    <div class="bet_options" lottery_code_two="zm3t">正 3 特</div>
                    <div class="bet_options" lottery_code_two="zm3lm">正 3 两面</div>
                    <div class="bet_options" lottery_code_two="zm4t">正 4 特</div>
                    <div class="bet_options" lottery_code_two="zm4lm">正 4 两面</div>
                    <div class="bet_options" lottery_code_two="zm5t">正 5 特</div>
                    <div class="bet_options" lottery_code_two="zm5lm">正 5 两面</div>
                    <div class="bet_options" lottery_code_two="zm6t">正 6 特</div>
                    <div class="bet_options" lottery_code_two="zm6lm">正 6 两面</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_lm" id="lhc_lm">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 连码</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box3" id="lhc_lms" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">连码</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="lm3qz">三全中</div>
                    <div class="bet_options" lottery_code_two="lm3z2">三中二</div>
                    <div class="bet_options" lottery_code_two="lm2qz">二全中</div>
                    <div class="bet_options" lottery_code_two="lm2zt">二中特</div>
                    <div class="bet_options" lottery_code_two="lmtc">特串</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_bb" id="lhc_bb">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 半波</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box4" id="lhc_bbs" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">半波</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="tmbb">特码半波</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_sx" id="lhc_sx">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 生肖</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box5" id="lhc_sxs" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">生肖</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="sxtx">特肖</div>
                    <div class="bet_options" lottery_code_two="sx1x">一肖</div>
                    <div class="bet_options" lottery_code_two="sx2xl">二肖连</div>
                    <div class="bet_options" lottery_code_two="sx3xl">三肖连</div>
                    <div class="bet_options" lottery_code_two="sx4xl">四肖连</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_ws" id="lhc_ws">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 尾数</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box6" id="lhc_wss" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">尾数</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="wstw">特码头尾</div>
                    <div class="bet_options" lottery_code_two="ws2wl">二尾连</div>
                    <div class="bet_options" lottery_code_two="ws3wl">三尾连</div>
                    <div class="bet_options" lottery_code_two="ws4wl">四尾连</div>
                  </div>
                </div>
              </div>
            </div>
            <li lottery_code="lhc_bz" id="lhc_bz">
              <i class="iconfont qian"></i><div class="div11 wanfa"> 不中</div>
              <div class="div11" style="float: right;"><i class="iconfont hou"></i></div>
            </li>
            <div class="kuang2 bet_filter_box7" id="lhc_bzs" style="display: none;">
              <div id="bet_filter">
                <div class="bet_filter_item">
                  <div class="title" style="color: #868686e8;">不中</div>
                  <div class="bet_option kuang1">
                    <div class="bet_options" lottery_code_two="bz5bz">五不中</div>
                    <div class="bet_options" lottery_code_two="bz6bz">六不中</div>
                    <div class="bet_options" lottery_code_two="bz7bz">七不中</div>
                    <div class="bet_options" lottery_code_two="bz8bz">八不中</div>
                    <div class="bet_options" lottery_code_two="bz9bz">九不中</div>
                    <div class="bet_options" lottery_code_two="bz10bz">十不中</div>
                  </div>
                </div>
              </div>
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
            <li way-data="showExpect.openCode1" id="lhc_01">0</li>
            <li way-data="showExpect.openCode2" id="lhc_02">0</li>
            <li way-data="showExpect.openCode3" id="lhc_03">0</li>
            <li way-data="showExpect.openCode4" id="lhc_04">0</li>
            <li way-data="showExpect.openCode5" id="lhc_05">0</li>
            <li way-data="showExpect.openCode6" id="lhc_06">0</li>
            <span>+</span>
            <li way-data="showExpect.openCode7" id="lhc_07">0</li>
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

    <div class="lottery-number">
      <marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll"class="lottery-number-tips play_select_prompt">
        <span>Tips：</span><span way-data="tabDoc"></span>
      </marquee>

      <div class="ssc-playmain">
        <!--特码直选-->    
        <div class="tmzx" style="display:block">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmzx" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmzx" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmzx" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--特码两面-->  
        <div class="tmlm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['tmlmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['tmlmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['tmlmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['tmlmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['tmlmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['tmlmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['tmlmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['tmlmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['tmlmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['tmlmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['tmlmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['tmlmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['tmlmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['tmlmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['tmlmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="tmlmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['tmlmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="tmlmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['tmlmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="tmlmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['tmlmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="tmlmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['tmlmlanbo']['rate'] ?></em></div>
          </div>
        </div>
        <!--正码任选-->  
        <div class="zmrx" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zmrx" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zmrx" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zmrx" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--正1特-->  
        <div class="zm1t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1t" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--正1特两面-->  
        <div class="zm1lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm1lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm1lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm1lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm1lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm1lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm1lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm1lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm1lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm1lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm1lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm1lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm1lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm1lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm1lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm1lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm1lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm1lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm1lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm1lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm1lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm1lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm1lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm1lmlanbo']['rate'] ?></em></div>
          </div>
        </div>
        <!--正2特-->
        <div class="zm2t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2t" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--正2特两面--> 
        <div class="zm2lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm2lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm2lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm2lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm2lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm2lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm2lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm2lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm2lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm2lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm2lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm2lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm2lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm2lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm2lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm2lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm2lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm2lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm2lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm2lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm2lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm2lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm2lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm2lmlanbo']['rate'] ?></em></div>
          </div>
        </div> 
        <!--正3特-->
        <div class="zm3t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3t" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--正3特两面--> 
        <div class="zm3lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm3lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm3lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm3lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm3lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm3lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm3lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm3lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm3lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm3lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm3lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm3lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm3lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm3lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm3lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm3lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm3lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm3lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm3lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm3lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm3lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm3lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm3lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm3lmlanbo']['rate'] ?></em></div>
          </div>
        </div> 
        <!--正4特-->
        <div class="zm4t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4t" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--正4特两面--> 
        <div class="zm4lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm4lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm4lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm4lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm4lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm4lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm4lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm4lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm4lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm4lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm4lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm4lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm4lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm4lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm4lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm4lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm4lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm4lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm4lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm4lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm4lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm4lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm4lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm4lmlanbo']['rate'] ?></em></div>
          </div>
        </div>
        <!--正5特-->
        <div class="zm5t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5t" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--正5特两面-->
        <div class="zm5lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm5lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm5lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm5lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm5lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm5lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm5lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm5lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm5lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm5lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm5lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm5lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm5lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm5lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm5lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm5lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm5lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm5lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm5lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm5lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm5lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm5lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm5lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm5lmlanbo']['rate'] ?></em></div>
          </div>
        </div> 
        <!--正6特-->
        <div class="zm6t" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6t" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6t" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6t" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--正6特两面-->
        <div class="zm6lm" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmda" data-number="大"><span>大</span><em>赔率<?= $rates['rates']['zm6lmda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmxiao" data-number="小"><span>小</span><em>赔率<?= $rates['rates']['zm6lmxiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmdan" data-number="单"><span>单</span><em>赔率<?= $rates['rates']['zm6lmdan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmshuang" data-number="双"><span>双</span><em>赔率<?= $rates['rates']['zm6lmshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmdadan" data-number="大单"><span>大单</span><em>赔率<?= $rates['rates']['zm6lmdadan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmdashuang" data-number="大双"><span>大双</span><em>赔率<?= $rates['rates']['zm6lmdashuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmxiaodan" data-number="小单"><span>小单</span><em>赔率<?= $rates['rates']['zm6lmxiaodan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmxiaoshuang" data-number="小双"><span>小双</span><em>赔率<?= $rates['rates']['zm6lmxiaoshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmheda" data-number="合大"><span>合大</span><em>赔率<?= $rates['rates']['zm6lmheda']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmhexiao" data-number="合小"><span>合小</span><em>赔率<?= $rates['rates']['zm6lmhexiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmhedan" data-number="合单"><span>合单</span><em>赔率<?= $rates['rates']['zm6lmhedan']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmheshuang" data-number="合双"><span>合双</span><em>赔率<?= $rates['rates']['zm6lmheshuang']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmweida" data-number="尾大"><span>尾大</span><em>赔率<?= $rates['rates']['zm6lmweida']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmweixiao" data-number="尾小"><span>尾小</span><em>赔率<?= $rates['rates']['zm6lmweixiao']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmjiaqin" data-number="家禽"><span>家禽</span><em>赔率<?= $rates['rates']['zm6lmjiaqin']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="zm6lmyeshou" data-number="野兽"><span>野兽</span><em>赔率<?= $rates['rates']['zm6lmyeshou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="zm6lmhongbo" data-number="红波"><span>红波</span><em>赔率<?= $rates['rates']['zm6lmhongbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="zm6lmlvbo" data-number="绿波"><span>绿波</span><em>赔率<?= $rates['rates']['zm6lmlvbo']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="zm6lmlanbo" data-number="蓝波"><span>蓝波</span><em>赔率<?= $rates['rates']['zm6lmlanbo']['rate'] ?></em></div>
          </div>
        </div> 
        <!--连码三全中-->
        <div class="lm3qz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3qz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3qz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3qz" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--连码三中二-->
        <div class="lm3z2" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm3z2" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm3z2" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm3z2" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--连码二全中-->
        <div class="lm2qz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2qz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2qz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2qz" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--连码二中特-->
        <div class="lm2zt" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lm2zt" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lm2zt" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lm2zt" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--连码特串-->
        <div class="lmtc" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="lmtc" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="lmtc" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="lmtc" data-number="49"><span>49</span></div>
          </div>
        </div> 
        <!--特码半波-->
        <div class="tmbb" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="hongda" data-number="红大"><span>红大</span><em>赔率<?= $rates['rates']['hongda']['rate'] ?></em><em>29 30 34 35 40 45 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="hongxiao" data-number="红小"><span>红小</span><em>赔率<?= $rates['rates']['hongxiao']['rate'] ?></em><em>01 02 07 08 12 13 18 19 23 24</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="hongdan" data-number="红单"><span>红单</span><em>赔率<?= $rates['rates']['hongdan']['rate'] ?></em><em>01 07 13 19 23 29 35 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="hongshuang" data-number="红双"><span>红双</span><em>赔率<?= $rates['rates']['hongshuang']['rate'] ?></em><em>02 08 12 18 24 30 34 40 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="honghedan" data-number="红合单"><span>红合单</span><em>赔率<?= $rates['rates']['honghedan']['rate'] ?></em><em>01 07 12 18 23 29 30 34 35</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-hong selectNumber" playid="hongheshuang" data-number="红合双"><span>红合双</span><em>赔率<?= $rates['rates']['hongheshuang']['rate'] ?></em><em>02 08 13 19 24 35 40 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvda" data-number="绿大"><span>绿大</span><em>赔率<?= $rates['rates']['lvda']['rate'] ?></em><em>27 28 32 33 38 39 43 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvxiao" data-number="绿小"><span>绿小</span><em>赔率<?= $rates['rates']['lvxiao']['rate'] ?></em><em>05 06 11 16 17 21 22</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvdan" data-number="绿单"><span>绿单</span><em>赔率<?= $rates['rates']['lvdan']['rate'] ?></em><em>05 11 17 21 27 33 39 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvshuang" data-number="绿双"><span>绿双</span><em>赔率<?= $rates['rates']['lvshuang']['rate'] ?></em><em>06 16 22 28 32 38 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvhedan" data-number="绿合单"><span>绿合单</span><em>赔率<?= $rates['rates']['lvhedan']['rate'] ?></em><em>05 16 21 27 32 38 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lv selectNumber" playid="lvheshuang" data-number="绿合双"><span>绿合双</span><em>赔率<?= $rates['rates']['lvheshuang']['rate'] ?></em><em>06 11 17 22 28 33 39 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="landa" data-number="蓝大"><span>蓝大</span><em>赔率<?= $rates['rates']['landa']['rate'] ?></em><em>25 26 31 36 37 41 42 47 48</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="lanxiao" data-number="蓝小"><span>蓝小</span><em>赔率<?= $rates['rates']['lanxiao']['rate'] ?></em><em>03 04 09 10 14 15 20</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="landan" data-number="蓝单"><span>蓝单</span><em>赔率<?= $rates['rates']['landan']['rate'] ?></em><em>03 09 15 25 31 37 41 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="lanshuang" data-number="蓝双"><span>蓝双</span><em>赔率<?= $rates['rates']['lanshuang']['rate'] ?></em><em>04 10 14 20 26 36 42 48</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="lanhedan" data-number="蓝合单"><span>蓝合单</span><em>赔率<?= $rates['rates']['lanhedan']['rate'] ?></em><em>03 09 10 14 25 36 41 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 ssc-fang-lan selectNumber" playid="lanheshuang" data-number="蓝合双"><span>蓝合双</span><em>赔率<?= $rates['rates']['lanheshuang']['rate'] ?></em><em>04 15 20 26 31 37 42 48</em></div>
          </div>
        </div>
        <!--特肖-->
        <div class="sxtx" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxshu" data-number="鼠"><span>鼠</span><em>赔率<?= $rates['rates']['sxtxshu']['rate'] ?></em><em>11 23 35 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxniu" data-number="牛"><span>牛</span><em>赔率<?= $rates['rates']['sxtxniu']['rate'] ?></em><em>10 22 34 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxhu" data-number="虎"><span>虎</span><em>赔率<?= $rates['rates']['sxtxhu']['rate'] ?></em><em>09 21 33 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxtu" data-number="兔"><span>兔</span><em>赔率<?= $rates['rates']['sxtxtu']['rate'] ?></em><em>08 20 32 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxlong" data-number="龙"><span>龙</span><em>赔率<?= $rates['rates']['sxtxlong']['rate'] ?></em><em>07 19 31 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxshe" data-number="蛇"><span>蛇</span><em>赔率<?= $rates['rates']['sxtxshe']['rate'] ?></em><em>06 18 30 42</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxma" data-number="马"><span>马</span><em>赔率<?= $rates['rates']['sxtxma']['rate'] ?></em><em>05 17 29 41</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxyang" data-number="羊"><span>羊</span><em>赔率<?= $rates['rates']['sxtxyang']['rate'] ?></em><em>04 16 28 40</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxhou" data-number="猴"><span>猴</span><em>赔率<?= $rates['rates']['sxtxhou']['rate'] ?></em><em>03 15 27 39</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxji" data-number="鸡"><span>鸡</span><em>赔率<?= $rates['rates']['sxtxji']['rate'] ?></em><em>02 14 26 38</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxgou" data-number="狗"><span>狗</span><em>赔率<?= $rates['rates']['sxtxgou']['rate'] ?></em><em>01 13 25 37 49</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sxtxzhu" data-number="猪"><span>猪</span><em>赔率<?= $rates['rates']['sxtxzhu']['rate'] ?></em><em>12 24 36 48</em></div>
          </div>
        </div>
        <!--一肖-->
        <div class="sx1x" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xshu" data-number="鼠"><span>鼠</span><em>赔率<?= $rates['rates']['sx1xshu']['rate'] ?></em><em>11 23 35 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xniu" data-number="牛"><span>牛</span><em>赔率<?= $rates['rates']['sx1xniu']['rate'] ?></em><em>10 22 34 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xhu" data-number="虎"><span>虎</span><em>赔率<?= $rates['rates']['sx1xhu']['rate'] ?></em><em>09 21 33 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xtu" data-number="兔"><span>兔</span><em>赔率<?= $rates['rates']['sx1xtu']['rate'] ?></em><em>08 20 32 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xlong" data-number="龙"><span>龙</span><em>赔率<?= $rates['rates']['sx1xlong']['rate'] ?></em><em>07 19 31 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xshe" data-number="蛇"><span>蛇</span><em>赔率<?= $rates['rates']['sx1xshe']['rate'] ?></em><em>06 18 30 42</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xma" data-number="马"><span>马</span><em>赔率<?= $rates['rates']['sx1xma']['rate'] ?></em><em>05 17 29 41</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xyang" data-number="羊"><span>羊</span><em>赔率<?= $rates['rates']['sx1xyang']['rate'] ?></em><em>04 16 28 40</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xhou" data-number="猴"><span>猴</span><em>赔率<?= $rates['rates']['sx1xhou']['rate'] ?></em><em>03 15 27 39</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xji" data-number="鸡"><span>鸡</span><em>赔率<?= $rates['rates']['sx1xji']['rate'] ?></em><em>02 14 26 38</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xgou" data-number="狗"><span>狗</span><em>赔率<?= $rates['rates']['sx1xgou']['rate'] ?></em><em>01 13 25 37 49</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx1xzhu" data-number="猪"><span>猪</span><em>赔率<?= $rates['rates']['sx1xzhu']['rate'] ?></em><em>12 24 36 48</em></div>
          </div>
        </div>
        <!--二肖连-->
        <div class="sx2xl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="鼠"><span>鼠</span><em>11 23 35 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="牛"><span>牛</span><em>10 22 34 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="虎"><span>虎</span><em>09 21 33 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="兔"><span>兔</span><em>08 20 32 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="龙"><span>龙</span><em>07 19 31 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="蛇"><span>蛇</span><em>06 18 30 42</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="马"><span>马</span><em>05 17 29 41</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="羊"><span>羊</span><em>04 16 28 40</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="猴"><span>猴</span><em>03 15 27 39</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="鸡"><span>鸡</span><em>02 14 26 38</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="狗"><span>狗</span><em>01 13 25 37 49</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx2xl" data-number="猪"><span>猪</span><em>12 24 36 48</em></div>
          </div>
        </div>
        <!--三肖连-->
        <div class="sx3xl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="鼠"><span>鼠</span><em>11 23 35 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="牛"><span>牛</span><em>10 22 34 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="虎"><span>虎</span><em>09 21 33 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="兔"><span>兔</span><em>08 20 32 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="龙"><span>龙</span><em>07 19 31 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="蛇"><span>蛇</span><em>06 18 30 42</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="马"><span>马</span><em>05 17 29 41</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="羊"><span>羊</span><em>04 16 28 40</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="猴"><span>猴</span><em>03 15 27 39</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="鸡"><span>鸡</span><em>02 14 26 38</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="狗"><span>狗</span><em>01 13 25 37 49</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx3xl" data-number="猪"><span>猪</span><em>12 24 36 48</em></div>
          </div>
        </div>
        <!--四肖连-->
        <div class="sx4xl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="鼠"><span>鼠</span><em>11 23 35 47</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="牛"><span>牛</span><em>10 22 34 46</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="虎"><span>虎</span><em>09 21 33 45</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="兔"><span>兔</span><em>08 20 32 44</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="龙"><span>龙</span><em>07 19 31 43</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="蛇"><span>蛇</span><em>06 18 30 42</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="马"><span>马</span><em>05 17 29 41</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="羊"><span>羊</span><em>04 16 28 40</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="猴"><span>猴</span><em>03 15 27 39</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="鸡"><span>鸡</span><em>02 14 26 38</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="狗"><span>狗</span><em>01 13 25 37 49</em></div>
            <div class="ssc-ct-pkball ssc-fang2 selectNumber" playid="sx4xl" data-number="猪"><span>猪</span><em>12 24 36 48</em></div>
          </div>
        </div>
        <!--特码头尾-->
        <div class="wstw" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="lingtou" data-number="0头"><span>0头</span><em>赔率<?= $rates['rates']['lingtou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="yitou" data-number="1头"><span>1头</span><em>赔率<?= $rates['rates']['yitou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ertou" data-number="2头"><span>2头</span><em>赔率<?= $rates['rates']['ertou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="santou" data-number="3头"><span>3头</span><em>赔率<?= $rates['rates']['santou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="sitou" data-number="4头"><span>4头</span><em>赔率<?= $rates['rates']['sitou']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="lingwei" data-number="0尾"><span>0尾</span><em>赔率<?= $rates['rates']['lingwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="yiwei" data-number="1尾"><span>1尾</span><em>赔率<?= $rates['rates']['yiwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="erwei" data-number="2尾"><span>2尾</span><em>赔率<?= $rates['rates']['erwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="sanwei" data-number="3尾"><span>3尾</span><em>赔率<?= $rates['rates']['sanwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="siwei" data-number="4尾"><span>4尾</span><em>赔率<?= $rates['rates']['siwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="wuwei" data-number="5尾"><span>5尾</span><em>赔率<?= $rates['rates']['wuwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="liuwei" data-number="6尾"><span>6尾</span><em>赔率<?= $rates['rates']['liuwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="qiwei" data-number="7尾"><span>7尾</span><em>赔率<?= $rates['rates']['qiwei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="bawei" data-number="8尾"><span>8尾</span><em>赔率<?= $rates['rates']['bawei']['rate'] ?></em></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="jiuwei" data-number="9尾"><span>9尾</span><em>赔率<?= $rates['rates']['jiuwei']['rate'] ?></em></div>
          </div>
        </div>
        <!--二连尾-->
        <div class="ws2wl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="0尾"><span>0尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="1尾"><span>1尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="2尾"><span>2尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="3尾"><span>3尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="4尾"><span>4尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="5尾"><span>5尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="6尾"><span>6尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="7尾"><span>7尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="8尾"><span>8尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws2wl" data-number="9尾"><span>9尾</span></div>
          </div>
        </div>
        <!--三连尾-->
        <div class="ws3wl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="0尾"><span>0尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="1尾"><span>1尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="2尾"><span>2尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="3尾"><span>3尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="4尾"><span>4尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="5尾"><span>5尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="6尾"><span>6尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="7尾"><span>7尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="8尾"><span>8尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws3wl" data-number="9尾"><span>9尾</span></div>
          </div>
        </div>
        <!--四连尾-->
        <div class="ws4wl" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="0尾"><span>0尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="1尾"><span>1尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="2尾"><span>2尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="3尾"><span>3尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="4尾"><span>4尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="5尾"><span>5尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="6尾"><span>6尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="7尾"><span>7尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="8尾"><span>8尾</span></div>
            <div class="ssc-ct-pkball ssc-fang selectNumber" playid="ws4wl" data-number="9尾"><span>9尾</span></div>
          </div>
        </div>
        <!--五不中-->
        <div class="bz5bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz5bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz5bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz5bz" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--六不中-->
        <div class="bz6bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz6bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz6bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz6bz" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--七不中-->
        <div class="bz7bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz7bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz7bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz7bz" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--八不中-->
        <div class="bz8bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz8bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz8bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz8bz" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--九不中-->
        <div class="bz9bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz9bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz9bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz9bz" data-number="49"><span>49</span></div>
          </div>
        </div>
        <!--十不中-->
        <div class="bz10bz" style="display:none;">
          <div class="ssc-ct-content">
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="1"><span>1</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="2"><span>2</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="3"><span>3</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="4"><span>4</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="5"><span>5</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="6"><span>6</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="7"><span>7</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="8"><span>8</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="9"><span>9</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="10"><span>10</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="11"><span>11</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="12"><span>12</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="13"><span>13</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="14"><span>14</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="15"><span>15</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="16"><span>16</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="17"><span>17</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="18"><span>18</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="19"><span>19</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="20"><span>20</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="21"><span>21</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="22"><span>22</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="23"><span>23</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="24"><span>24</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="25"><span>25</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="26"><span>26</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="27"><span>27</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="28"><span>28</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="29"><span>29</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="30"><span>30</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="31"><span>31</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="32"><span>32</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="33"><span>33</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="34"><span>34</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="35"><span>35</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="36"><span>36</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="37"><span>37</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="38"><span>38</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="39"><span>39</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="40"><span>40</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="41"><span>41</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="42"><span>42</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="43"><span>43</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="44"><span>44</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="45"><span>45</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-hong selectNumber" playid="bz10bz" data-number="46"><span>46</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="47"><span>47</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lan selectNumber" playid="bz10bz" data-number="48"><span>48</span></div>
            <div class="ssc-ct-pkball ssc-fang ssc-fang-lv selectNumber" playid="bz10bz" data-number="49"><span>49</span></div>
          </div>
        </div>



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
      <div>
        <span class="select_zhushu">已选 <em class="zhushu"style="color: #434354;font-weight: bold;">0</em> 注</span>,
        <span class="selectMultipleOld">共计 <em class="selectMultipleOldMoney"style="color: #434354;font-weight: bold;">0.000</em>元</span>
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



</body>
<script>
  $(function(){
    $("#lhc_tm").click(
      function(){
        if($("#lhc_tms").css("display")=='none'){
          $("#lhc_tms").slideDown();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_tms").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_zm").click(
      function(){
        if($("#lhc_zms").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideDown();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_zms").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_lm").click(
      function(){
        if($("#lhc_lms").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideDown();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_lms").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_bb").click(
      function(){
        if($("#lhc_bbs").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideDown();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_bbs").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_sx").click(
      function(){
        if($("#lhc_sxs").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideDown();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_sxs").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_ws").click(
      function(){
        if($("#lhc_wss").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideDown();
          $("#lhc_bzs").slideUp();
        }else{
          $("#lhc_wss").slideUp();
        }
      });
  });
  $(function(){
    $("#lhc_bz").click(
      function(){
        if($("#lhc_bzs").css("display")=='none'){
          $("#lhc_tms").slideUp();
          $("#lhc_zms").slideUp();
          $("#lhc_lms").slideUp();
          $("#lhc_bbs").slideUp();
          $("#lhc_sxs").slideUp();
          $("#lhc_wss").slideUp();
          $("#lhc_bzs").slideDown();
        }else{
          $("#lhc_bzs").slideUp();
        }
      });
  });
</script>

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
    $('.play_select_tit .currs').click();
  })
</script>

</body>
</html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{:GetVar('webtitle')} - 系统中心</title>
 	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
  <link rel="stylesheet" href="/ascn/css/user.css">
  <link rel="stylesheet" href="/ascn/css/vendor.css">
  <link rel="stylesheet" href="/ascn/css/byhelp.css">
  <link rel="stylesheet" href="/ascn/css/iconfont.css">
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
    <div class="user-top-to">
    <div class="user-top-to2">
  <div class="sub-container">
    <div class="subPagNav">
      <ul class="navl1">
        <li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li> 
        <if condition="$userinfo.proxy eq '1'">
          <li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
        </if>
        <li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
        <li class="cur">系统中心</li>
        <li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
      </ul> 
      <div class="navl2">
        <span><a href="/activity" class="">活动中心</a></span> 
        <span><a href="{:GetVar('kefuthree')}" class="">客服中心</a></span> 
        <span><a href="/memberCenter/Notice" class="">公告中心</a></span> 
        <span><a href="#/user/wallet" class="">消息中心</a></span> 
        <span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">帮助中心</a></span> 
        <span><a href="#/funds/accountRecord/self" class="">下载中心</a></span> 
        <span><a href="#/record/index/self" class="">登录记录</a></span>
      </div>
    </div> 
    <div class="subPageMain">
     <div class="sub-page">
      <div class="page-container helpCenter">
       <article class="helpsub animated fadeIn fast">
        <div>
        <i class="iconfont">&#xe63c;</i>
       </div> 
       <section>
         <hgroup>
          <h2>彩票以外产品</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
            <span>回帮助中心</span>
          </button> 
          <h3>产品介绍</h3>
        </hgroup> 
        <article>
          <h4>AG</h4> 
          <div class="haveimg">
           <div>
            <p> AG平台是目前最具创意及创新的合法博彩娱乐平台供货商。Asia Gaming全球首创VIP包桌及咪牌百家乐，让网上娱乐平台冲破传统的束缚，带来一个革命性的新体验。AG平台同时符合IOM及First Cagayan认证, 并获得TST公平认证。我们的宗旨是秉持一个『公平、公正、公开』的真人荷官博彩平台，让玩家感觉更逼真更震撼，仿如置身现场。 </p> 
            <p>游戏种类：百家乐（AG竞咪、VIP包桌、多台）、百家乐、龙虎、轮盘</p>
          </div> 
          <p><img src="/ascn/images/help/help-ag.png" alt="" /></p>
        </div>
      </article> 
      <article>
        <h4>PT</h4> 
        <div class="haveimg">
         <div>
          <p> 成立于1999年的Playtech，是全世界在线娱乐领导品牌，PlayTech 在在线娱乐业的合法化和信用建立方面发挥了重要作用，这得益于其一流的客户支持和独立测试的公平游戏。 </p> 
          <p> PlayTech平台中的所有独立游戏均接受过全面测试，并得到了独立软件测试机构TST (Technical Systems Testing) 的认证，以确保游戏公平。这进一步促进了平台的普及，也给使用 PlayTec h软件的在线赌场增加一份可信度。 </p> 
          <p>游戏类型：创新、刺激的老虎机</p>
        </div> 
        <p><img src="/ascn/images/help/help-pt.png" alt="" /></p>
      </div>
    </article> 
    <article>
      <h4>GG</h4> 
      <div class="haveimg">
       <div>
        <p> GG是最多人推荐的在线娱乐，GG拥有一流的开发、营运团队，在世界各地设有研发单位，专注于在线娱乐的创新与开发。旗下游戏种类多元，游戏节奏明快紧张，最受玩家好评的是GG顺畅的游戏体验，加载时间迅速不延迟，随时想玩就玩。 </p> 
        <p>棋牌游戏：百人牛牛、二人牛牛、百人赢三张、斗地主、二人麻将、牛牛、炸金花</p> 
        <p>电子游戏：各式热门连线老虎机</p>
      </div> 
      <p><img src="/ascn/images/help/help-gg.png" alt="" /></p>
    </div>
  </article> 
  <article>
    <h4>eBET</h4> 
    <div class="haveimg">
     <div>
      <p> eBET于2012年成立，并且在2013年正式迈入国际市场，成长为全球化的集团。eBET拥有丰富专业经验的技术研发团队，经过创意的激荡及玩家的考验，所创造的移动娱乐平台在业界快速的崛起，走在时代尖端，给予玩家无与伦比尊贵体验。 </p> 
      <p> eBET娱乐平台拥有数百位训练有素的专业荷官、模拟实际的赌场环境、稳定的高端设备、专业的技术支持，保障了平台的稳定运营，给予玩家彷佛置身于现场的绝妙体验。 </p> 
      <p>游戏种类：百家乐、百家乐竞咪、多台百家乐、龙虎、轮盘、骰宝</p>
    </div> 
    <p><img src="/ascn/images/help/help-ebet.png" alt="" /></p>
  </div>
</article> 
<article>
  <h4>BBIN</h4> 
  <div class="haveimg">
   <div>
    <p> BBIN 成立于1999年，17年来稳健的经营并成功的将产品销售至亚洲各地。以追求最佳质量，重视消费者回馈的博彩娱乐平台服务着称，并以系统化标准开发每一款游戏，不断创新的图形技术结合东方元素，建构亚洲的最大游戏供货商。 </p> 
    <p> BBIN 是亚洲享有盛名的网络博彩娱乐集团，提供多元网络娱乐服务平台和游戏商品：真人视讯、电子游戏、体育竞技等皆有丰富多样的选择。 </p> 
    <p>游戏种类：</p> 
    <p> 真人视讯：百家乐、龙虎、 骰宝、轮盘、二八杠、三公、牛牛、温州牌九、德州扑克、色碟、无限21点 </p> 
    <p>体育竞技：多元体育赛事投注，包含足球、棒球、篮球及橄榄球等世界主要体育项目</p>
  </div> 
  <p><img src="/ascn/images/help/help-bbin.png" alt="" /></p>
</div>
</article> 
<article>
  <h4>太阳城</h4> 
  <div class="haveimg">
   <div>
    <p> 太阳城一直坚持以公平、公正、公开三大原则为服务宗旨，一直以来，太阳城积极发展多元化网上娱乐服务：现场真人游戏、电子游戏。游戏不断更新，快速、顺畅、页面导航清晰。太阳城成立于2005年，高规格的娱乐体验使其迅速成为亚洲受欢迎的娱乐品牌。 </p> 
    <p>游戏种类：</p> 
    <p>真人视讯：百家乐、龙虎、 骰宝、轮盘、雀九、三公、斗牛</p> 
    <p>电子游戏：百乐门、大四喜、狂野之战……等各式热门电子游戏</p>
  </div> 
  <p><img src="/ascn/images/help/help-sun.png" alt="" /></p>
</div>
</article> 
<aside>
  <div>
   <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
    <span>回帮助中心</span>
  </button>
</div> 
<dl>
 <dt>
  相关的问题
</dt> 
<dd>
  <a href="/byhelp/helptxt13" class="">如何开始游戏？</a>
</dd> 
<dd>
  <a href="/byhelp/helptxt11" class="">下注介绍</a>
</dd> 
<dd>
  <a href="/byhelp/helptxt8" class="">流水(销量)是什么？</a>
</dd>
</dl>
</aside>
</section>
</article>
</div>
</div>
</div>
</div>
</div>
<include file="Public/footer" />
</div>
</body>
</html>
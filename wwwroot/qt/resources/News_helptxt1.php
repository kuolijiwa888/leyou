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
         <i class="iconfont">&#xe69c;</i>
       </div> 
       <section>
         <hgroup>
          <h2>充值问题</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">

           <span>回帮助中心</span>
         </button> 
         <h3>为什么充值未到账？</h3>
       </hgroup> 
       <article>
        <h4>银行端尚未完成转账</h4> 
        <p>请查阅支付状态是否停留在：转账中。</p> 
        <p>由于跨行汇款的到账时间是取决银行方面办理速度，请您耐心等待。需待转账完成后平台才会收到款项。</p> 
        <p>若您完成转账、账户扣款，但平台仍未入账，请向客服反应，并提供相应的充值资讯：</p> 
        <ul>
         <li><p>平台账号</p></li> 
         <li><p>充值单号</p></li> 
         <li><p>充值金额</p></li> 
         <li><p>充值时间</p></li> 
         <li><p>支付人姓名（支付宝充值）</p></li>
       </ul>
     </article> 
     <article>
      <h4>网上银行充值使用浏览器不正确</h4> 
      <p>网银推荐使用浏览器：谷歌Chrome浏览器、IE9.0版本以上、火狐浏览器。</p> 
      <p> 部分银行仅限使用IE浏览器，请于<a href="#/help/Recharge_WebBank" class="">如何使用网银充值</a>确认是否使用正确的浏览器进行充值。 </p>
    </article> 
    <article>
      <h4>支付宝转账未完成</h4> 
      <p> 因支付宝自5月起，停止转账短信通知功能，请用户在<strong>完成支付宝转账后向平台客服告知您的转账资讯</strong>，以加速到账。 </p> 
      <ul>
       <li><p>平台账号</p></li> 
       <li><p>平台充值单号</p></li> 
       <li><p>支付金额</p></li> 
       <li><p>支付人姓名</p></li>
     </ul>
   </article> 
   <article>
    <h4>支付宝转帐金额与平台充值金额不符</h4> 
    <p>如支付宝转帐金额与平台充值填写之金额不同会造成充值异常，无法入账请洽询线上客服。</p>
  </article> 
  <article>
    <h4>支付宝充值未透过平台直接转账</h4> 
    <p>如未在平台进行充值手续直接转帐，此类未依循平台正常程序操作造成的损失平台一概不负责。</p>
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
    <a href="/byhelp/helptxt2" class="">如何使用网银充值？</a>
  </dd> 
  <dd>
    <a href="/byhelp/helptxt3" class="">如何使用微信充值？</a>
  </dd> 
  <dd>
    <a href="/byhelp/helptxt4" class="">如何使用支付宝充值？</a>
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
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
         <i class="iconfont">&#xe63d;</i>
       </div> 
       <section>
         <hgroup>
          <h2>代理专区</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
           <span>回帮助中心</span>
         </button> 
         <h3>用户设置</h3>
       </hgroup> 
       <article>
        <h4>彩票奖金</h4> 
        <p>于建立账户时上级代理指定下级会员的彩票奖金。下级会员奖金最高可设置至与上级代理相同。</p>
      </article> 
      <article>
        <h4>返水</h4> 
        <p>用户返水比率与彩票奖金相同，须由上级指定分配。</p> 
        <p> 真人视讯返水、电子游戏返水、体育竞技返水皆以用户下注额计算；棋牌返水则以亏损额计算，所有返水皆发送至用户彩票娱乐场余额中，可于账变明细中查询。 </p>
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
        <a href="/byhelp/helptxt20" class="">如何推广？</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt21" class="">团队报表</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt2" class="">如何使用网银充值？</a>
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
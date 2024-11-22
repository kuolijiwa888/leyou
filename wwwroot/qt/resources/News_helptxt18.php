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
        <i class="iconfont">&#xe63f;</i>
       </div> 
       <section>
         <hgroup>
          <h2>新手专区</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
           <span>回帮助中心</span>
         </button> 
         <h3>报表记录介绍</h3>
       </hgroup> 
       <article>
        <h4>个人预览</h4> 
        <p>查阅近期充值、提现、销量、盈亏等数据，并提供最近15天的曲线图报表。</p> 
        <p> 销量、盈亏一目了然，清楚的信息让您十足的了解自己的下注情况，完整掌握资金的运作才能创造出最大的利益。 </p> 
        <p><img src="/ascn/images/help/02.jpg" alt="" class="haveborder" /></p>
      </article> 
      <article>
        <h4>个人盈亏报表</h4> 
        <p> 呈现平台所有产品的充值、提现、投注等，记录用户在平台中每一项产品中的所有项目，清楚的报表让您快速掌握自身盈亏。 </p> 
        <p><img src="/ascn/images/help/03.jpg" alt="" class="haveborder" /></p>
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
        <a href="/byhelp/helptxt16" class="">平台使用教学</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt17" class="">如何修改密码、银行卡？</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt19" class="">彩票投注分析介绍</a>
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
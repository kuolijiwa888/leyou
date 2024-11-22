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
        <i class="iconfont">&#xe69e;</i>
       </div> 
       <section>
         <hgroup>
          <h2>提现问题</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
           <span>回帮助中心</span>
         </button> 
         <h3>为什么提现未到账？</h3>
       </hgroup> 
       <article>
        <h4>出款转账中</h4> 
        <p>转账到账的时间是取决于银行系统的。若您持续没有到账请洽询线上客服，并提供平台账号、提现单号。</p> 
        <p>提现单号查询方式：</p> 
        <p>个人中心 ＞ 个人账变明细</p>
      </article> 
      <article>
        <h4>流水不足</h4> 
        <p>提款必须消费充值的50%（第三方消费100%）方可进行 超出提现时间： 每日提现服务时间为09:00~次日02:00，请在提现服务时间内提出提现申请</p>
      </article> 
      <article>
        <h4>超出每日提现额度</h4> 
        <p> 提现单笔最低金额为100元，最高金额49,999元，提领次数上限为20次，同账号每日累积提领上限总金额为1,000,000元。 </p>
      </article> 
      <article>
        <h4>银行卡信息错误</h4> 
        <p>若您在绑定银行卡时填写的信息不正确，将无法出款。请您洽询上级代理或线上客服。</p>
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
        <a href="/byhelp/helptxt1" class="">为什么充值未到账？</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt7" class="">如何提现？</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt17" class="">如何修改密码、银行卡？</a>
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
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
         <h3>如何修改密码、银行卡？</h3>
       </hgroup> 
       <article>
        <h4>修改密码流程</h4> 
        <p><span>1</span>个人中心 ＞ 个人帐户管理<br /> <span>2</span>登录、资金密码设定 </p> 
        <p><strong>提醒您：登录、资金密码必须为字母及数字组成的8-16个字符，登录密码不可与资金密码相同。</strong></p>
      </article> 
      <article>
        <h4>初始资金密码</h4> 
        <p> 初始资金密码预设为初始登录密码，若您尚未更改过密码，资金密码为开户时的登录密码。为维护帐户安全，请尽速修改并定期更换密码，以提升账户安全强度。 </p>
      </article> 
      <article>
        <h4>绑定银行卡流程</h4> 
        <p><span>1</span>个人中心 ＞ 个人帐户管理<br /> <span>2</span>设定银行卡<br /> <span>3</span>输入银行卡信息完成设定 </p> 
        <p><strong>提醒您：1. 绑定银行卡需等待银行卡生效后才可提现，第一张银行卡生效时间1小时，其他银行卡1小时。</strong><br /> <strong style="text-indent: 4em; display: inline-block;">2. 同一平台账号下的银行卡户名需相同，后续再次绑定银行卡时需输入第一张银行卡号。</strong></p>
      </article> 
      <article>
        <h4>银行卡信息更新</h4> 
        <p>如银行卡因遗失、换卡等异常问题需更新平台银行卡信息，请您洽询上级代理或线上客服。</p>
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
        <a href="/byhelp/helptxt18" class="">报表记录介绍</a>
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
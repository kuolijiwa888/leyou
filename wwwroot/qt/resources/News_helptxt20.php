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
          <h3>如何推广？</h3>
        </hgroup> 
        <article>
          <h4>代理帐号</h4> 
          <p>用户直接设定下级会员的账号、密码、返点、返水，代理帐号建立完成后用户可直接登入。</p> 
          <p><span>1</span>团队中心 ＞ 团队用户管理<br /> <span>2</span>新增代理<br /> <span>3</span>填写用户账号数据：返点、返水设置 </p>
        </article> 
        <article>
          <h4>推广帐号</h4> 
          <p> 上级代理决定下级会员奖金后建立推广链接，可将链接分享给下级会员，下级会员点击链接进入注册画面，可由下级会员设定账号及密码。在配额充足的情况下，一个注册链接可以建立多个账户。 </p> 
          <p><span>1</span>团队中心 ＞ 团队用户管理<br /> <span>2</span>代理推广<br /> <span>3</span>设置用户返点、返水，并留下联系QQ </p>
        </article> 
        <article>
          <h4>试玩帐号</h4> 
          <p> 请在平台登錄页“免费试玩”建立帐号，毋须透过代理可直接注册，试玩账号提供客户10000元体验金，可以进行彩票大厅的游戏试玩。 </p> 
          <p><strong>提醒您：试玩帐号不能提现、充值、转账。</strong></p>
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
          <a href="/byhelp/helptxt21" class="">团队报表</a>
        </dd> 
        <dd>
          <a href="/byhelp/helptxt22" class="">用户设置</a>
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
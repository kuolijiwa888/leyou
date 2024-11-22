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
         <h3>如何提现？</h3>
       </hgroup> 
       <article>
        <h4>提现管道</h4> 
        <p>本平台提供27间银行可进行绑定提现：</p> 
        <p>中国农业银行、中国工商银行、中国建设银行、中国邮政储蓄银行、中国银行、招商银行、</p> 
        <p>交通银行、浦发银行、中国光大银行、中信银行、平安银行、中国民生银行、华夏银行、</p> 
        <p>广发银行、兴业银行、北京银行、南京银行、上海银行、杭州银行、宁波银行、浙商银行、</p> 
        <p>东亚银行、渤海银行、北京农商行、浙江泰隆商业银行、北京农商银行、上海农商银行。</p> 
        <p><strong>提醒您：绑定银行卡需等待银行卡生效后才可提现，第一张银行卡生效时间1小时，其他银行卡24小时。</strong></p>
      </article> 
      <article>
        <h4>提现流程</h4> 
        <p><span>1</span>于页面右上点选提现或财务中心 ＞ 平台提款<br /> <span>2</span>选择提现产品、银行，输入提现金额、资金密码、验证码后确认送出<br /></p>
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
        <a href="/byhelp/helptxt6" class="">为什么提现未到账？</a>
      </dd> 
      <dd>
        <a href="/byhelp/helptxt1" class="">为什么充值未到账？</a>
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
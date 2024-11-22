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
        <i class="iconfont">&#xe61f;</i>
       </div> 
       <section>
         <hgroup>
          <h2>彩票问题</h2> 
          <button type="button" onclick="location.href='/byhelp'" class="el-button el-button--primary el-button--medium is-plain">
            <span>回帮助中心</span>
          </button> 
           <h3>中奖查询</h3>
         </hgroup> 
         <article>
          <h4>开奖规则</h4> 
          <p> 本平台根据国家彩票管理部门的官方开奖号码进行开奖。若用户所购彩票中奖，平台会在开奖后，将奖金全额派发至中奖用户的平台账户中。 </p>
        </article> 
        <article>
          <h4>开奖问题</h4> 
          <p>1. 奖期结束未开奖</p> 
          <p>本平台依据官方开奖，为维持公正性，会在官方开奖时间前停止投注，请在投注时间结束后稍待开奖。</p> 
          <p>2. 官方未开奖</p> 
          <p> 若由于未获取官网的正式开奖号码，为了维护会员利益，我们会持续跟进官网的情况，如果官方延迟30分钟以上未开奖，或下期已开奖， </p> 
          <p>本平台会关闭该奖期，并退回当期所有注单金额。</p>
        </article> 
        <article>
          <h4>个人奖金</h4> 
          <p>本平台完整举例出每位用户在每一个彩种、玩法、下注模式的奖金，</p> 
          <p>用户可在下注后利用个人奖金总览查询中奖奖金。</p> 
          <p>个人奖金总览流程说明 :</p> 
          <p>个人中心 ＞ 个人奖金总览</p>
        </article> 
        <article>
          <h4>奖金上限</h4> 
          <p>本平台所有高频彩种单期中奖金额限红300000元，低频彩种单期最高奖金限额150000元。</p> 
          <p>投注注数小于或等于5%，即属于单挑模式。同期单挑模式下，无论注单笔数，单期上限为20000元。</p>
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
            <a href="/byhelp/helptxt9" class="">彩种介绍</a>
          </dd> 
          <dd>
            <a href="/byhelp/helptxt10" class="">玩法介绍</a>
          </dd> 
          <dd>
            <a href="/byhelp/helptxt11" class="">下注介绍</a>
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
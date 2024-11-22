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
         <h3>下注介绍</h3>
       </hgroup> 
       <article>
        <h4>追号介绍</h4> 
        <p> 追号是指连续多期购买同一注号码，会员在平台发起一个追号注单后，系统将按注单内容连续多期地自动购买投注号码。 </p> 
        <p> 例如：追号下注[1,2,3,4,5]，自001期开始连追5期，即是001期、002期、003期、004期、005期系统自动下注[1,2,3,4,5] </p> 
        <p>本平台提供<strong>利润率追号、同倍追号、翻倍追号</strong>3种追号方式：</p> 
        <p> 1. <strong>利润率追号</strong>：设定追号期数、起始倍数和最低收益率，系统依投注金额、中奖金额变动自动计算出各期需要的投注倍数，维持中奖金额高于合计投注金额的指定收益率。 </p> 
        <p style="text-indent: 2em;"> 例如：追号期数5期、起始倍数1倍、最低收益率50％，系统计算的投注倍数为：1、1、2、3、5（依投注金额、中奖金额变动）在第4期中奖时，第4期投注倍数3倍的中奖金额会大于1-4期合计投注金额的50％以上。 </p> 
        <p> 2. <strong>同倍追号</strong>：同倍追号，即设定追号期数和倍数之后，所有的期数的投注倍数都与设置倍数相同。 </p> 
        <p style="text-indent: 2em;"> 例如：追号期数5期、倍数2倍，即连续投注5期2倍的注单，投注倍数为：2、2、2、2、2。 </p> 
        <p>3. <strong>翻倍追号</strong>：设置追号期数、翻倍期数、倍数，系统将立即生成与设置一致的投注。</p> 
        <p style="text-indent: 2em;"> 例如：追号期数5期、翻倍期数2期、倍数3倍，即每隔2期投注倍数乘上3倍，投注倍数为：1、1、3、3、9。 </p>
      </article> 
      <article>
        <h4>追号规则</h4> 
        <p>1. 玩家可以随时发起追号注单，玩家进行追号的同时，不影响其他彩票的购买。</p> 
        <p>2. 发起追号注单，将一次性扣除追号所需金额，账户余额不足时无法下注。</p> 
        <p> 3. 若下注时有设置“中奖停止追号”中奖后系统将自动终止追号注单，如还有剩余未追期数，系统将剩余期数的追号金额自动退还至平台账户。 </p> 
        <p>4. 如遇官方未开奖，会跳过该期继续追下一期直至符合玩家设置的追号停止条件或者追号完成。</p>
      </article> 
      <article>
        <h4>撤单</h4> 
        <p> 平台提供撤单的功能，下注后可于投注时间截止前进行撤单，如果投注时间已截止，那么将无法再进行撤单操作。 </p> 
        <p><span>1</span>于下注页下方进行撤单<br /> <span>2</span>于个人中心＞个人游戏记录进行撤单<br /> <strong>提醒您：必须在停止投注之前进行撤单，如果投注时间已截止，那么将无法再进行撤单操作。</strong></p>
      </article> 
      <article>
        <h4>彩票投注记录查询流程</h4> 
        <p><span>1</span>个人中心 ＞ 个人游戏记录<br /> <span>2</span>于彩票娱乐场中，选择注单类型、彩种、时间后查询 </p>
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
        <a href="/byhelp/helptxt12" class="">中奖查询</a>
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
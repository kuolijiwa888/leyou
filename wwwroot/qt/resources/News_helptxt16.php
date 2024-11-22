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
         <h3>平台使用教学</h3>
       </hgroup> 
       <article>
        <h4>RWD自适应技术</h4> 
        <p> 本平台采用彩票界首创RWD自适应技术，各式尺寸的浏览器、手机、平板上皆可以随视窗大小自动调整画面。 </p> 
        <p>在移动装置上不需额外下载手机端，只要通过本平台彩票官方网址即可进入平台投注。</p> 
        <p> 对于习惯客户端操作的用戶我们也同時推出iOS、Android及PC客户端，在不同的下注环境下可以享受同样的游戏体验。 </p> 
        <table class="helptable type4">
         <thead>
          <tr>
           <th></th> 
           <th>投注</th> 
           <th>充值</th> 
           <th>提现</th> 
           <th>查看报表</th>
         </tr>
       </thead> 
       <tbody>
        <tr>
         <td>网页平台</td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td>
       </tr> 
       <tr>
         <td>手机浏览器</td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe715;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe741;</i></td>
       </tr> 
       <tr>
         <td>手机客户端</td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe715;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe741;</i></td>
       </tr> 
       <tr>
         <td>PC客户端</td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe741;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td> 
         <td><i class="iconfont"style="font-size: 14px;">&#xe638;</i></td>
       </tr>
     </tbody>
   </table> 
   <p><i class="iconfont"style="font-size: 14px;">&#xe638;</i>:推荐使用&nbsp;&nbsp;&nbsp;<i class="iconfont"style="font-size: 14px;">&#xe741;</i>:较不推荐&nbsp;&nbsp;&nbsp;<i class="iconfont"style="font-size: 14px;">&#xe715;</i>:不推荐 </p>
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
  <a href="/byhelp/helptxt17" class="">如何修改密码、银行卡？</a>
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
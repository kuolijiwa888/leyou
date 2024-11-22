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
          <h3>彩种介绍</h3>
        </hgroup> 
        <article>
          <h4>高频彩</h4> 
          <p>时时彩</p> 
          <p> 时时彩属于高频彩，投注区分为万位、千位、百位、十位和个位，各位号码范围为0~9，每期从各位上开出1个号码组成中奖号码。玩法即是竞猜5位开奖号码的全部号码，部分号码或者号码特征。时时彩分星彩玩法和大小单双玩法。 </p> 
          <table class="helptable type4">
           <thead>
            <tr>
             <th>彩种</th> 
             <th>销售时间</th> 
             <th>期数间隔</th> 
             <th>总期数</th> 
             <th>第一截止时间</th> 
             <th>最后截止时间</th>
           </tr>
         </thead> 
         <tbody>
          <tr>
           <td rowspan="2">重庆欢乐生肖</td> 
           <td>00:10 - 03:10</td> 
           <td>每期20分钟</td> 
           <td>9期</td> 
           <td>00:30:00</td> 
           <td>03:10:00</td>
         </tr> 
         <tr>
           <td>07:10 - 23:50</td> 
           <td>每期20分钟</td> 
           <td>50期</td> 
           <td>07:30:00</td> 
           <td>23:50:00</td>
         </tr> 
         <tr>
           <td>新疆时时彩</td> 
           <td>10:00 - 02:00</td> 
           <td>每期20分钟</td> 
           <td>48期</td> 
           <td>10:20:00</td> 
           <td>02:00:00</td>
         </tr> 
         <tr>
           <td>五分彩</td> 
           <td>24小时</td> 
           <td>每期5分钟</td> 
           <td>288期</td> 
           <td>00:04:30</td> 
           <td>23:59:30</td>
         </tr>
       </tbody>
     </table> 
     <p>11选5</p> 
     <p> 11选5是从01-11共11个号码中任选1-8个号码进行投注，每期开出5个号码为中奖号码，竞猜5位开奖号码的全部或部分号码。投注方式灵活，开奖频次高，全面满足不同彩民的投注需要。 </p> 
     <table class="helptable type4">
       <thead>
        <tr>
         <th>彩种</th> 
         <th>销售时间</th> 
         <th>期数间隔</th> 
         <th>总期数</th> 
         <th>第一截止时间</th> 
         <th>最后截止时间</th>
       </tr>
     </thead> 
     <tbody>
      <tr>
       <td>江西11选5</td> 
       <td>09:00 - 23:10</td> 
       <td>每期20分钟</td> 
       <td>42期</td> 
       <td>09:30:00</td> 
       <td>23:10:00</td>
     </tr> 
     <tr>
       <td>广东11选5</td> 
       <td>09:10 - 23:10</td> 
       <td>每期20分钟</td> 
       <td>42期</td> 
       <td>09:30:00</td> 
       <td>23:10:00</td>
     </tr> 
     <tr>
       <td>山东11选5</td> 
       <td>08:41 - 23:01</td> 
       <td>每期20分钟</td> 
       <td>43期</td> 
       <td>09:01:00</td> 
       <td>23:01:00</td>
     </tr>
   </tbody>
 </table>
</article> 
<article>
  <h4>低频彩</h4> 
  <p>3D</p> 
  <p> 中国福利彩票3D游戏（以下简称3D），是一个以3位自然数为投注号码的彩票，投注者从000-999的数字中选择一个3位数进行投注。3D在各省（区、市）保留各自奖池、单独派奖的基础上实行三统一，即统一名称标识、统一游戏规则、统一开奖号码。开奖时间是每晚21:15。 </p> 
  <p>P3</p> 
  <p> 排列3电脑体育彩票由国家体育总局体育彩票管理中心(以下简称“中体彩中心”)统一发行。购买“排列3”时，购买者需从000-999的数字中选取1个3位数为投注号码进行投注。彩票不记名、不挂失，不返还本金，不流通使用。购买者可在本平台进行投注。投注号码可由投注机随机产生，也可通过投注单将购买者选定的号码输入确定。投注号码经系统确认后即为“排列3” 体育彩票。开奖时间是每晚20:30。 </p>
</article> 
<article>
  <h4>快乐彩</h4> 
  <p>快3</p> 
  <p> 快3是一种由中国福利彩票发行管理中心组织销售，江苏省福利彩票发行中心承销的福彩快开彩票，2元1注，每10分钟开一期奖，每期摇出3个号码，每个号码从1-6中开出，有通选，有单选，根据号码组合共分为“和值”、“三同号”、“二同号”、“三不同号”、“二不同号”、“三连号通选”投注方式，简单好玩又易中。 </p>
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
  <a href="/byhelp/helptxt10" class="">玩法介绍</a>
</dd> 
<dd>
  <a href="/byhelp/helptxt11" class="">下注介绍</a>
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
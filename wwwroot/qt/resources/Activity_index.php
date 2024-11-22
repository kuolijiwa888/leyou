<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{:GetVar('webtitle')} - 系统中心</title>
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/byhelp.css">
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
				<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">活动中心</a></span> 
				<span><a href="{:GetVar('kefuthree')}" class="">客服中心</a></span> 
				<span><a href="/memberCenter/Notice" class="">公告中心</a></span> 
				<span><a href="#/user/wallet" class="">消息中心</a></span> 
				<span><a href="/byhelp" class="">帮助中心</a></span> 
				<span><a href="#/funds/accountRecord/self" class="">下载中心</a></span> 
				<span><a href="/memberCenter/memberlog" class="">登录记录</a></span> 
			</div>
		</div> 
		<div class="subPageMain">
			<div class="sub-page1">
				<div class="page-container activityCenter">
					<div class="container"> 
						<div class="el-card is-always-shadow" style="margin-bottom: 20px;">
							<div class="el-card__body">
								<div class="activityItem">
									<a href="#/activity/sign29days" class="activityimg" style="background-image: url(&quot;/images/activity/sign29days.jpg?v2020&quot;);"></a> 
									<div class="activityinfo">
										<h3>29天每日签到活动 <i>[进行中]</i></h3> 
										<p>平台的所有用户，29天投注奖金送不停，每日有效投注达到标准后即可领钱。</p> 
										<a href="#/activity/sign29days" class="activitylink">了解详细<i class="el-icon-d-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<include file="Public/footer" />
</div>
</body>
</html>
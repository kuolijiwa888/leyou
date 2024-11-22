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
				<span><a href="#/user/wallet" class="">下载中心</a></span> 
				<span><a href="/memberCenter/memberlog" class="">登录记录</a></span> 
			</div>
		</div> 
		<div class="subPageMain">
			<div class="sub-page">
				<div class="page-container helpCenter">
					<article class="defaultIndex animated fadeIn fast">
						<dl>
							<dt>
								<i class="iconfont">&#xe69c;</i>
							</dt> 
							<dd>
								<h2>充值问题</h2> 
								<ul>
									<li><a href="/byhelp/helptxt1" class="">为什么充值未到账？</a></li> 
									<li><a href="/byhelp/helptxt2" class="">如何使用网银充值？</a></li> 
									<li><a href="/byhelp/helptxt3" class="">如何使用微信充值？</a></li> 
									<li><a href="/byhelp/helptxt4" class="">如何使用支付宝充值？</a></li> 
								</ul>
							</dd>
						</dl> 
						<dl>
							<dt>
								<i class="iconfont">&#xe69e;</i>
							</dt> 
							<dd>
								<h2>提现问题</h2> 
								<ul>
									<li><a href="/byhelp/helptxt6" class="">为什么提现未到账？</a></li> 
									<li><a href="/byhelp/helptxt7" class="">如何提现？</a></li> 
									<li><a href="/byhelp/helptxt8" class="">流水(销量)是什么？</a></li>
								</ul>
							</dd>
						</dl> 
						<dl>
							<dt>
								<i class="iconfont">&#xe61f;</i>
							</dt> 
							<dd>
								<h2>彩票问题</h2> 
								<ul>
									<li><a href="/byhelp/helptxt9" class="">彩种介绍</a></li> 
									<li><a href="/byhelp/helptxt10" class="">玩法介绍</a></li> 
									<li><a href="/byhelp/helptxt11" class="">下注介绍</a></li> 
									<li><a href="/byhelp/helptxt12" class="">中奖查询</a></li>
								</ul>
							</dd>
						</dl> 
						<dl>
							<dt>
								<i class="iconfont">&#xe63c;</i>
							</dt> 
							<dd>
								<h2>彩票以外产品</h2> 
								<ul>
									<li><a href="/byhelp/helptxt13" class="">如何开始游戏？</a></li> 
									<li><a href="/byhelp/helptxt14" class="">产品介绍</a></li>
								</ul>
							</dd>
						</dl> 
						<dl>
							<dt>
								<i class="iconfont">&#xe63f;</i>
							</dt> 
							<dd>
								<h2>新手专区</h2> 
								<ul>
									<li><a href="/byhelp/helptxt16" class="">平台使用教学</a></li> 
									<li><a href="/byhelp/helptxt17" class="">如何修改密码、银行卡？</a></li> 
									<li><a href="/byhelp/helptxt18" class="">报表记录介绍</a></li> 
									<li><a href="/byhelp/helptxt19" class="">彩票投注分析介绍</a></li>
								</ul>
							</dd>
						</dl> 
						<dl>
							<dt>
								<i class="iconfont">&#xe63d;</i>
							</dt> 
							<dd>
								<h2>代理专区</h2> 
								<ul>
									<li><a href="/byhelp/helptxt20" class="">如何推广？</a></li> 
									<li><a href="/byhelp/helptxt21" class="">团队报表</a></li> 
									<li><a href="/byhelp/helptxt22" class="">用户设置</a></li>
								</ul>
							</dd>
						</dl>
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
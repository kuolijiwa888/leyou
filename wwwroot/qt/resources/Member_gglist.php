<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{:GetVar('webtitle')} - 系统中心</title>
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
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
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">公告中心</a></span> 
						<span><a href="#" class="">消息中心</a></span> 
						<span><a href="/byhelp" class="">帮助中心</a></span> 
						<span><a href="#/funds/accountRecord/self" class="">下载中心</a></span> 
						<span><a href="/memberCenter/memberlog" class="">登录记录</a></span> 
					</div>
				</div> 
				<div class="subPageMain">
				    <div class="sub-page">
				        <div class="page-container notice">
				            <h2 class="noticetit">平台公告</h2>
				            <div class="noticeon">
				                <volist name="gglist" id="vo" mod="2">
				                    <eq name="mod" value="0">
				                <div class="noticeGroup">
				                    <article class="noticeItem">
				                        <hgroup>
				                            <h3>{$vo[title]}</h3>
				                            <span class="span-time iconfont">{$vo.oddtime|date="Y-m-d H:i:s",###}</span>
				                        </hgroup>
				                        <article>{$vo[content]}</article>
				                    </article>
				                    </eq>
				                    <eq name="mod" value="1">
				                    <article class="noticeItem">
				                        <hgroup>
				                            <h3>{$vo[title]}</h3>
				                            <span class="span-time iconfont">{$vo.oddtime|date="Y-m-d H:i:s",###}</span>
				                        </hgroup>
				                    <article>{$vo[content]}</article>
				                </article>
				                </div>
				                </eq>
				                </volist>
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
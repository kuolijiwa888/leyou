<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<style>
		.end ul li a .icon-10{
			color: #434354;
		}
	</style>
</head>
<body>
	<!--头部-->
	<header id="J-sd-demo"class="gamesheader">
		个人中心
		<button class="J-ac-btn" data-type="left"><i class="iconfont icon-1">&#xe602;</i></button>
		<a href="{:GetVar('kefuthree')}"><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div id="J-left" style="display:none">
		<include file="Member/caidan" />
	</div>
	<div class="hometop">
		<img src="/ascn/mobile/images/bj.png" class="bj">
		<div class="hometop-name">
			<div class="hometop-name-img">
				<img src="__ROOT__{$userinfo['face']}">
			</div>
			<div class="hometop-name-id">
				<p style="font-size: 0.15rem;">账户：<em>{$userinfo['username']}</em></p>
				<p style="font-size:0.12rem;opacity: .8;">可用余额：<em style="color: #F44336;" id="smallmoney">{$userinfo['balance']}</em>元</p>
			</div>
			<div class="hometop-name-i" id="refresh_money">
				<i class="iconfont icon-14" id="iconfont" style="display: inline-block;transition: 0.3s;">&#xe72a;</i>
			</div>
		</div>
		<ul class="hometop-ul">
			<li><a href="/userCenter/rechargeWay" class="iconfont">&#xe604; 充值</a></li>
			<li class="home-left"><a href="/userCenter/withdrawals" class="iconfont">&#xe678; 提现</a></li>
			<li class="home-left"><a href="/trans" class="iconfont">&#xe61a; 转账</a></li>
		</ul>
	</div>
	<div class="homeziliao">
		<ul>
			<li class="user-xinxi" id="user-xinxi">
				<a href="#">
					<span>账号信息</span>
					<i class="iconfont">&#xe60b;</i>
					<span style="float: right;font-size: 0.12rem;">{$userinfo['username']}</span>
				</a>
			</li>
			<div class="user-ziliao" id="user-ziliao" style="display: none;">
				<div class="ccssdd">
					<div>
						<i class="iconfont"></i>登录账号：
						<em>{$userinfo['username']}</em>
					</div>
					<div>
						<i class="iconfont"></i>会员类型：
						<em><eq name="userinfo['groupname']" value='代理'>代理 <else />{$userinfo.touhan} </eq></em>
					</div>
					<div>
						<i class="iconfont"></i>上次登录时间：
						<em>{$Think.session.lastlogin.lasttime}</em>
					</div>
					<div>
						<i class="iconfont"></i>上次登录IP：
						<em>{$Think.session.lastlogin.lastip}</em>
						<span style="color: #434354;padding: 0 0.05rem;"><a href="/userCenter/verifyPwd">不是本人登录？点我修改密码</a></span>
					</div>
				</div>
			</div>
			<li>
				<a href="#">
					<span>安全等级</span>
					<?php
					$num = abs($schedule/100)*10/2;
					for($i=1;$i<6;$i++){
						if($num-$i >= 0){
							echo "<p class=\"iconfont user\" style=\"color: #f90;\">&#xe638;</p>";
						}else{
							echo "<p class=\"iconfont user\">&#xe638;</p>";
						}
					}
					?>
					<span style="float: right;font-size:0.14rem;color: #f56c6c;">您的账号安全级别为 {$aqjibie}</span>
				</a>
			</li>
			<li>
				<a href="/userCenter/PLstatement">
					<span>今日统计</span>
					<i class="iconfont">&#xe656;</i>
				</a>
			</li>
			<eq name="userinfo['proxy']" value="1">
				<li>
					<a href="/userCenter/agentCenter">
						<span>代理中心</span>
						<i class="iconfont">&#xe656;</i>
					</a>
				</li>
			</eq>
			<div class="title">个人报表</div>
			<li>
				<a href="/userCenter/betRecord">
					<span>个人投注记录</span>
					<i class="iconfont">&#xe656;</i>
				</a>
			</li>
			<li>
				<a href="/userCenter/billRecord">
					<span>个人资金记录</span>
					<i class="iconfont">&#xe656;</i>
				</a>
			</li>
			<li>
				<a href="/userCenter/billRecord1">
					<span>个人充值记录</span>
					<i class="iconfont">&#xe656;</i>
				</a>
			</li>
			<li>
				<a href="/userCenter/billRecord2">
					<span>个人提现记录</span>
					<i class="iconfont">&#xe656;</i>
				</a>
			</li>
			<div class="title">安全资料</div>
			<li>
				<a href="/userCenter/verifyPwd">
					<span>登录密码</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
			<li>
				<a href="/userCenter/setSafePwd">
					<span>资金密码</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">修改</span>
				</a>
			</li>
			<li>
				<a href="/safephone">
					<span>密保手机</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;"><eq name="userinfo['tel']" value="">设置<else />修改</eq></span>
				</a>
			</li>
			<li>
				<a href="/bindmail">
					<span>密保邮箱</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;"><eq name="userinfo['email']" value="">设置<else />修改</eq></span>
				</a>
			</li>
			<li>
				<eq name="userinfo['userbankname']">
					<a href="/userbankname">
						<span>实名认证</span>
						<i class="iconfont">&#xe656;</i>
						<span style="float: right;font-size: 0.13rem;">去绑定</span>
					</a>
					<else/>
					<a>
						<span>实名认证</span>
						<i class="iconfont">&#xe656;</i>
						<span style="float: right;font-size: 0.13rem;">已绑定</span>
					</a>
				</eq>
			</li>
			<li>
				<a href="/userCenter/manageBankcard">
					<span>银行卡</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;"><eq name="bankcard" value="">查看<else />添加</eq></span>
				</a>
			</li>
			<div class="title">其他资料</div>
			<li>
				<a href="/userCenter/bangdingqq">
					<span>QQ号</span>
					<i class="iconfont">&#xe656;</i>
					<span style="float: right;font-size: 0.13rem;">去绑定</span>
				</a>
			</li>
		</ul>
	</div>
	<!--版权-->
	<div class="copyright">
		<span>Copyright ⓒ 2020 by Corporation, All Rights Reserved.</span><br>
		<span>Technical support:Ascloud/Gaobo Technology</span></i>
	</div>
	<!--底部导航-->
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>


	<script type="text/javascript" src="/ascn/mobile/js/zepto.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/zepto2.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/slideAlert.js?_=1223"></script>
	<script>
		$(function(){
			$("#user-xinxi").click(
				function(){
					if($("#user-ziliao").css("display")=='none'){
						$("#user-ziliao").slideDown();
					}else{
						$("#user-ziliao").slideUp();
					}
				});
		});
	</script>
	<script>
		$(function () {
			$('#refresh_money').click(function () {
				$.ajax({
					url:"{:U('Account/refreshmoney')}",
					type:'POST',
					success :function (data) {
						$('#smallmoney').html(data);
					}
				})
			})

		})
	</script>
	<script>
		window.onload = function(){ 
			var current = 0;
			document.getElementById('iconfont').onclick = function(){
				current = (current+360);
				this.style.transform = 'rotate('+current+'deg)';
			}
		};
	</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>系统中心-{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/font-awesome/css/font-awesome.min.css">
	
	<style>
		.page-container.userindex .box-card{
			margin: 10px;
		}
		.el-radio-button__orig-radio:checked + .el-radio-button__inner{
			color: #fff;
			background-color: #a68f4c;
			border-color: #a68f4c;
			box-shadow: -1px 0 0 0 #a68f4c;
		}
		.inner_curr{
			color: #fff;
			background-color: #a68f4c;
			border-color: #a68f4c;
		}
		.inner_curr:hover{
			color: #fff;
		}
		.page-container.userindex .user-info .el-row .el-card__body span{
			color: #a68f4c;
		}
		.page-container.userindex .info2 .el-card__body i{
			padding-right: 7px;
			color: #a68f4c;
		}
	</style>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="user-top-to">
		<div class="user-top-to2">
			<div class="sub-container">
				<div class="subPagNav">
					<ul class="navl1">
						<li class="cur">个人中心</li> 
						<if condition="$userinfo.proxy eq '1'">
							<li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
						</if>
						<li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
						<li class=""><a href="/activity" style="color: #fff;">系统中心</a></li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul> 
					<div class="navl2">
						<span><a href="/memberCenter/personalInfo" class="">个人账户管理</a></span> 
						<span><a href="/memberCenter/manageBankcard" class="">银行卡管理</a></span> 
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">个人盈亏报表</a></span> 
						<span><a href="/memberCenter/BillRecord" class="">个人账变明细</a></span> 
						<span><a href="/memberCenter/betRecord" class="">个人游戏记录</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">个人充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">个人提现记录</a></span> 
					</div>
				</div> 
				<div class="subPageMain">
					<div class="sub-page">
						<div class="page-container userindex">
							<div class="user-info">
								<form class="el-form el-form--inline" style="text-align: center;">
									<div class="el-form-item">
										<div class="el-form-item__content">
											<div role="radiogroup" class="el-radio-group" style="margin-left: 10px;">
												<label><span onclick="chaxun(1)" value="1" id="chax" style="border-left: 1px solid #dcdfe6;border-radius: 4px 0 0 4px;"class="el-radio-button__inner <if condition="$Think.get.atime eq 1">inner_curr</if>">今日</span></label>
												<label><span onclick="chaxun(2)" value="2" class="el-radio-button__inner <if condition="$Think.get.atime eq 2">inner_curr</if>">昨日</span></label>
												<label><span onclick="chaxun(3)" value="3" style="border-radius: 0 4px 4px 0;"class="el-radio-button__inner <if condition="$Think.get.atime eq 3">inner_curr</if>">最近七天</span></label>
											</div>
										</div>
									</div>
								</form>
								<div class="info2 el-row">
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-money"></i> 总充值 <span>{$chuzhicount}</span></div>
										</div>
									</div>
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-bank"></i> 总提现 <span>{$tikuancount}</span></div>
										</div>
									</div>
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-gamepad"></i> 总投注 <span>{$touzhucount}</span></div>
										</div>
									</div>
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-trophy"></i> 总派奖 <span>{$zhongjiangcount}</span></div>
										</div>
									</div>
								</div>
								<div class="info2 el-row">
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-reply-all"></i> 总返点 <span>{$fandian}</span></div>
										</div>
									</div>
									<div class="el-col el-col-6">
										<div class="el-card box-card is-always-shadow">
											<div class="el-card__body"><i aria-hidden="true" class="fa fa-hourglass-half"></i> 总盈亏 <span>{$yingli}</span></div>
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
	<script>
		function chaxun(t){
			var atime = t;
			var url = "/tools/_ajax/todayloss/"+atime;
			window.location.href = url;
		}
	</script>
</body>
</html>
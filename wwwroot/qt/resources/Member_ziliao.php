<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="description" content="{:GetVar('description')}" />
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->

	<!--爱尚互联-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

	<!--爱尚互联-->

	<!--爱尚互联-->
	<link rel="stylesheet" href="__CSS2__/reset.css">
	<link rel="stylesheet" href="__CSS2__/bootstrap.min.css">
	<link rel="stylesheet" href="__CSS2__/userInfo.css">



	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/bootstrap.min.js"></script>
	<!--爱尚互联-->
	<style>
		.page-container .security-content .infos {position: relative;height: 120px;padding-left: 90px;background: url(/ascn/images/manager_icon.png) 0px 13px no-repeat;}
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
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">个人账户管理</a></span> 
						<span><a href="/memberCenter/manageBankcard" class="">银行卡管理</a></span> 
						<span><a href="/memberCenter/PLstatement" class="">个人盈亏报表</a></span> 
						<span><a href="/memberCenter/BillRecord" class="">个人账变明细</a></span> 
						<span><a href="/memberCenter/betRecord" class="">个人游戏记录</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">个人充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">个人提现记录</a></span>
					</div>
				</div> 
				<div class="subPageMain">
					<div class="sub-page">
						<div class="page-container">
							<div class="security-header el-row">
								<div class="point el-col el-col-6">
									<form class="am-form register_form" method="post" url="" checkby_ruivalidate id="register_form" onsubmit="return checkform(this)">
										<input type="hidden" class="up_header_img_input" name="info[face]" value="{$userinfo['face']}" />
										<input class="el-input__inner" type="hidden" name="info[qq]" id="qqq" value="{$userinfo.qq}" >
										<div class="avatar">
											<div class="circular--portrait">
												<img src="__ROOT__{$userinfo['face']}" alt="" style="cursor:pointer" class="up_header_img update_header" />
											</div> 
											<br /> 
											<button type="submit" class="el-button el-button--primary el-button--small is-plain is-round">
												<span>保存头像</span>
											</button>
										</div>
									</div>
								</form>
								<div class="infos el-col el-col-18">
									<div class="info-list el-row">
										<div class="el-col el-col-2">
											登陆帐号
										</div> 
										<div class="el-col el-col-6">
											{$userinfo.username}
										</div> 
										<div class="el-col el-col-2">
											会员类型
										</div> 
										<div class="el-col el-col-6">
											<eq name="userinfo['groupname']" value='代理'>代理<else />会员</eq>
										</div>
									</div> 
									<div class="info-list el-row">
										<div class="el-col el-col-2">
											头衔
										</div> 
										<div class="el-col el-col-6">
											<eq name="userinfo['groupname']" value='代理'>代理 <else />{$userinfo.touhan} </eq>
										</div> 
										<div class="el-col el-col-2">
											可用余额
										</div> 
										<div class="el-col el-col-6">
											<span>{$userinfo['balance']}</span>
										</div>
									</div> 
									<div class="info-list el-row" style="margin-bottom: 20px;">
										<div class="el-col el-col-2">
											真实姓名
										</div> 
										<div class="el-col el-col-6">
											<eq name="userinfo[userbankname]" value="">
												<span>您还未绑定真实姓名</span>
												<a style="color: #ffaa0d;" href="javascript:void(0);" onclick="gobind();">去绑定</a>
												<else />
												<span>{$userinfo.userbankname}</span>
											</eq>
										</div>
									</div> 
									<div role="slider" aria-valuenow="0.5555555555555556" aria-valuetext="" aria-valuemin="0" aria-valuemax="5" tabindex="0" class="el-rate">
										<?php if($schedule<30){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(212, 0, 0); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=30 && $schedule<50){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #f00; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #f00; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=50 && $schedule<70){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=70 && $schedule<90){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else{echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span>';}?>
									</div> 
									<p class="title"><span>{$aqjibie}</span></p> 
									<p class="tip"> 上次登录：{$Think.session.lastlogin.lasttime}，[ {$Think.session.lastlogin.lastip}，{$Think.session.lastlogin.login_address}] 不是本人登录？ 
										<as style="color: #b7ab71;" href="javascript:vodi(0)" onclick="verifyPwd();" class="el-button el-button--text">修改密码</a>
										</p>
									</div>
								</div> 
								<div class="security-content el-row" style="margin-left: -6px; margin-right: -6px;">
									<div class="el-col el-col-8" style="padding-left: 6px; padding-right: 6px;">
										<div class="el-card is-always-shadow">
											<div class="el-card__body">
												<div class="infos">
													<i class="el-icon-oksimida iconfont">&#xe643;</i>
													<div class="title">
														登录密码
													</div> 
													<div class="help">
														建议您使用字母和数字的组合、混合大小写、在组合中加入下划线等符号。
													</div> 
													<div class="actions">
														<a onclick="verifyPwd();">修改登录密码</a>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="el-col el-col-8" style="padding-left: 6px; padding-right: 6px;">
										<div class="el-card is-always-shadow red">

											<div class="el-card__body">
												<div class="infos icon1" style="background-position: 0px -172px;">
													<i class="el-icon-oksimida iconfont">&#xe643;</i>
													<div class="title">
														已设置资金密码
													</div> 
													<div class="help">
														在进行银行卡绑定，转账等资金操作时需要进行资金密码确认，以提高您的资金安全性。 
													</div> 
													<div class="actions">
														<a onclick="verifySafePwd();">修改资金密码</a>
														<a onclick="ResetSafePwd();">找回资金密码</a>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="el-col el-col-8" style="padding-left: 6px; padding-right: 6px;">
										<div class="el-card is-always-shadow red">
											<div class="el-card__body">
												<div class="infos icon2" style="background-position: 0px -359px;">
													<notempty name="userinfo.tel">
														<i class="el-icon-oksimida iconfont">&#xe643;</i>
														<else />
														<i class="el-icon-nosimida iconfont">&#xe642;</i>
													</notempty>
													<div class="title">
														<notempty name="userinfo.tel">已绑定密保手机<else />未绑定密保手机</notempty>
													</div> 
													<div class="help">
														为了提升您的帐户安全性，请及时绑定密保手机。
													</div> 
													<div class="actions">
														<notempty name="userinfo.tel">
															<a onclick="ResetPhone();">已绑定保手机</a>
															<else />
															<a onclick="ResetPhone();">绑定密保手机</a>
														</notempty>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 


								<div class="security-content el-row" style="margin-left: -6px; margin-right: -6px;">
									<div class="el-col el-col-8" style="padding-left: 6px; padding-right: 6px;">
										<div class="el-card is-always-shadow red">

											<div class="el-card__body">
												<div class="infos icon3" style="background-position: 0px -1089px;">
													<notempty name="userinfo.email">
														<i class="el-icon-oksimida iconfont">&#xe643;</i>
														<else />
														<i class="el-icon-nosimida iconfont">&#xe642;</i>
													</notempty>
													<div class="title">
														<notempty name="userinfo.email">已绑定密保邮箱<else />未绑定密保邮箱</notempty>
													</div> 
													<div class="help">
														绑定邮箱可增加账号安全级别，也可确保邮箱正常情况下取回资金密码。
													</div> 
													<div class="actions flex">
														<notempty name="userinfo.email">
															<a onclick="Bindmail();">修改密保邮箱</a>
															<else />
															<a onclick="Bindmail();">绑定密保邮箱</a>
														</notempty>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="el-col el-col-8" style="padding-left: 6px; padding-right: 6px;">
										<div class="el-card is-always-shadow red">

											<div class="el-card__body">
												<div class="infos icon3" style="background-position: 0px -1835px;">
													<notempty name="userinfo.qq">
														<i class="el-icon-oksimida iconfont">&#xe643;</i>
														<else />
														<i class="el-icon-nosimida iconfont">&#xe642;</i>
													</notempty>
													<div class="title">
														绑定QQ号码
													</div> 
													<div class="help">
														绑定绑定QQ号码绑可增加账号安全级别，也可确保QQ号码正常情况下取回资金密码。
													</div> 
													<div class="actions flex">
														<notempty name="userinfo.qq">
															<a onclick="qqhaoma();">更改QQ号码</a>
															<else />
															<a onclick="qqhaoma();">绑定QQ号码</a>
														</notempty>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="security-content el-row" style="margin-left: -6px; margin-right: -6px;"></div> 

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="绑定真实姓名" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<div class="el-dialog__header">
											<span class="el-dialog__title">绑定真实姓名</span>
										</div>
										<div class="el-dialog__body">
											<form class="el-form">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">真实姓名</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" value="" id="bindrealname_realname" way-data="bindrealname.realname" placeholder="请输入真实姓名">
														</div>
													</div>
												</div> 
												<div class="el-form-item el-form-item--feedback">
													<label for="newpassword" class="el-form-item__label" style="width: 120px;">资金密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" id="bindrealname_tradepassword" way-data="bindrealname.tradepassword" placeholder="请输入资金密码">
														</div>
													</div>
												</div> 
											</form> 
										</div>
										<div class="el-dialog__footer">
											<div class="dialog-footer">
												<button type="button" class="el-button el-button--default" data-dismiss="modal" >
													<span>取 消</span>
												</button> 
												<button type="button" class="el-button el-button--primary" id="addtrueName_btn">
													<span>确 定 </span>
												</button>
											</div>
										</div>
									</div>
								</div>
								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName1 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="修改登录密码" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<form class="el-form" action="/verifyPwd"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">修改登录密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前登陆密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="pa1" placeholder="请输入登陆密码">
														</div>
													</div>
												</div> 
												<div class="el-form-item el-form-item--feedback">
													<label for="newpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div> 
												<div class="el-form-item el-form-item--feedback">
													<label for="newpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" data-dismiss="modal" >
														<span>取 消</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName2 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="绑定手机号码" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<form class="el-form" action="/safephone"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">绑定手机号码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">绑定手机号码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" name="tel" value="{$userinfo.tel}" placeholder="绑定后修改需联系客服">
														</div>
													</div>
												</div> 
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" data-dismiss="modal" >
														<span>取 消</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName3 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="绑定密保邮箱" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<form class="el-form" action="/Bindmail"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">绑定密保邮箱</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">绑定密保邮箱</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" name="email"  id="testtomail" value="{$userinfo.email}" placeholder="绑定后修改需联系客服">
														</div>
													</div>
												</div> 
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" data-dismiss="modal" >
														<span>取 消</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName4 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="找回资金密码" class="el-dialog update-password-dg tab" style="margin-top: 15vh;display: block;" id="tab1_content">
										<div class="el-dialog__header">
											<span class="el-dialog__title">找回资金密码</span>
										</div>
										<div class="el-dialog__body">
											<ul>
												<li>
													<a onclick="myclick(2);">
														<div class="iconfont pass">1</div>
														<div><span>通过资金密码</span></div>
													</a>
												</li>
												<li>
													<a onclick="myclick(3);">
														<div class="iconfont pass">1</div>
														<div><span>通过密保手机</span></div>
													</a>
												</li>
												<li>
													<a onclick="myclick(4);">
														<div class="iconfont pass">1</div>
														<div><span>通过密保邮箱</span></div>
													</a>
												</li>
												<li>
													<a onclick="myclick(5);">
														<div class="iconfont pass">1</div>
														<div><span>通过密保QQ</span></div>
													</a>
												</li>
											</ul>
										</div>
										<div class="el-dialog__footer">
											<div class="dialog-footer">
												<button type="button" class="el-button el-button--default" data-dismiss="modal">
													<span>取 消</span>
												</button> 
											</div>
										</div>
									</div>

									<div role="dialog" aria-modal="true" aria-label="找回资金密码" class="el-dialog update-password-dg tab ascnshow" style="margin-top: 15vh;display: none;" id="tab2_content">
										<form class="el-form" action="/verifySafePwd"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">找回资金密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前资金密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="oldpassword" placeholder="请输入当前资金密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" onclick="myclick(1);">
														<span>返 回</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>

									<div role="dialog" aria-modal="true" aria-label="找回资金密码" class="el-dialog update-password-dg tab ascnshow" style="margin-top: 15vh;display: none;" id="tab3_content" >
										<form class="el-form" action="/find_safepass_phone"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">找回资金密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前手机号码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" name="tel" placeholder="请输入您绑定的手机号码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" onclick="myclick(1);">
														<span>返 回</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>

									<div role="dialog" aria-modal="true" aria-label="找回资金密码" class="el-dialog update-password-dg tab ascnshow" style="margin-top: 15vh;display: none;" id="tab4_content" >
										<form class="el-form" action="/find_safepass_email"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">找回资金密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前邮箱账号</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" name="email" placeholder="请输入您绑定的邮箱账号">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" onclick="myclick(1);">
														<span>返 回</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>

									<div role="dialog" aria-modal="true" aria-label="找回资金密码" class="el-dialog update-password-dg tab ascnshow" style="margin-top: 15vh;display: none;" id="tab5_content" >
										<form class="el-form" action="/find_safepass_qq"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">找回资金密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前QQ号码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="text" name="qq" placeholder="请输入你绑定的QQ号码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" onclick="myclick(1);">
														<span>返 回</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>

								</div>

								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName5 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="修改资金密码" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<form class="el-form" action="/verifySafePwd"  method="post" onsubmit="return checkform1(this)">
											<div class="el-dialog__header">
												<span class="el-dialog__title">修改资金密码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">当前资金密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="oldpassword" placeholder="请输入当前资金密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请输入新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password" placeholder="请输入新密码">
														</div>
													</div>
												</div>
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">请确认新密码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<input class="el-input__inner" type="password" name="password2" placeholder="请确认新密码">
														</div>
													</div>
												</div>
											</div>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" data-dismiss="modal" >
														<span>取 消</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								<!-- 爱尚互联 -->

								<!-- 爱尚互联 -->
								<div class="el-dialog__wrapper addTrueName6 modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div role="dialog" aria-modal="true" aria-label="绑定QQ号码" class="el-dialog update-password-dg" style="margin-top: 15vh;">
										<form class="el-form" method="post" url="" checkby_ruivalidate id="register_form1" onsubmit="return checkform1(this)">
											<input type="hidden" class="up_header_img_input" name="info[face]" value="{$userinfo['face']}" />
											<div class="el-dialog__header">
												<span class="el-dialog__title">绑定QQ号码</span>
											</div>
											<div class="el-dialog__body">
												<div class="el-form-item el-form-item--feedback">
													<label for="oldpassword" class="el-form-item__label" style="width: 120px;">绑定QQ号码</label>
													<div class="el-form-item__content" style="margin-left: 120px;">
														<div class="el-input">
															<eq name="userinfo[qq]" value="">
																<input class="el-input__inner" type="text" id="showqq" onchange="changeToinfoqq();" name="showqq" value="" placeholder="请输入QQ号码">
																<else />
																<input class="el-input__inner" type="text" id="showqq" onchange="changeToinfoqq();" name="showqq" value="{$userinfo.qq}" >
															</eq>
															<input class="el-input__inner" type="hidden" name="info[qq]" id="qq" value="{$userinfo.qq}" >
														</div>
													</div>
												</div>
											</div>
											<script>
												function changeToinfoqq(){
													$('#qq').val($('#showqq').val());
													$('#qqq').val($('#showqq').val());
												}
											</script>
											<div class="el-dialog__footer">
												<div class="dialog-footer">
													<button type="button" class="el-button el-button--default" data-dismiss="modal" >
														<span>取 消</span>
													</button> 
													<button type="submit" class="el-button el-button--primary">
														<span>确 定 </span>
													</button>
												</div>
											</div>
										</form> 
									</div>
								</div>
								<!-- 爱尚互联 -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<include file="Public/footer" />
		</div>
		<div class="el-dialog__wrapper modal header_img_box ascnshow fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"style="z-index: 2001;">
			<div role="dialog" aria-modal="true" aria-label="更改头像" class="el-dialog update-avatar-dg" style="margin-top: 15vh;">
				<div class="el-dialog__header">
					<span class="el-dialog__title">更改头像</span>
				</div>
				<div class="el-dialog__body head_img_list"style="width: 100%;">
					<div class="el-row" style="margin-left: -10px; margin-right: -10px;">
						<ul>
							<a href="javascript:void(0)"attr-url="__FACE__/26.jpg">
								<li><img src="__FACE__/26.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/27.jpg">
								<li><img src="__FACE__/27.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/28.jpg">
								<li><img src="__FACE__/28.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/29.jpg">
								<li><img src="__FACE__/29.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/30.jpg">
								<li><img src="__FACE__/30.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/31.jpg">
								<li><img src="__FACE__/31.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/32.jpg">
								<li><img src="__FACE__/32.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/33.jpg">
								<li><img src="__FACE__/33.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/34.jpg">
								<li><img src="__FACE__/34.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/35.jpg">
								<li><img src="__FACE__/35.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/36.jpg">
								<li><img src="__FACE__/36.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/37.jpg">
								<li><img src="__FACE__/37.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/38.jpg">
								<li><img src="__FACE__/38.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/39.jpg">
								<li><img src="__FACE__/39.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/40.jpg">
								<li><img src="__FACE__/40.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/1.jpg">
								<li><img src="__FACE__/1.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)" attr-url="__FACE__/2.jpg">
								<li><img src="__FACE__/2.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/3.jpg">
								<li><img src="__FACE__/3.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/4.jpg">
								<li><img src="__FACE__/4.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/5.jpg">
								<li><img src="__FACE__/5.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/6.jpg">
								<li><img src="__FACE__/6.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/7.jpg">
								<li><img src="__FACE__/7.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/8.jpg">
								<li><img src="__FACE__/8.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/9.jpg">
								<li><img src="__FACE__/9.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/10.jpg">
								<li><img src="__FACE__/10.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/11.jpg">
								<li><img src="__FACE__/11.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/12.jpg">
								<li><img src="__FACE__/12.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/13.jpg">
								<li><img src="__FACE__/13.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/14.jpg">
								<li><img src="__FACE__/14.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/15.jpg">
								<li><img src="__FACE__/15.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/16.jpg">
								<li><img src="__FACE__/16.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/17.jpg">
								<li><img src="__FACE__/17.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/18.jpg">
								<li><img src="__FACE__/18.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/19.jpg">
								<li><img src="__FACE__/19.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/20.jpg">
								<li><img src="__FACE__/20.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/21.jpg">
								<li><img src="__FACE__/21.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/22.jpg">
								<li><img src="__FACE__/22.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/23.jpg">
								<li><img src="__FACE__/23.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/24.jpg">
								<li><img src="__FACE__/24.jpg" class="" /></li>
							</a>
							<a href="javascript:void(0)"attr-url="__FACE__/25.jpg">
								<li><img src="__FACE__/25.jpg" class="" /></li>
							</a>
						</ul>
					</div> 
				</div>
				<div class="el-dialog__footer">
					<div class="dialog-footer">
						<button type="button" class="el-button el-button--default"data-dismiss="modal">
							<span>取 消</span>
						</button> <img src="__ROOT__{$userinfo['face']}" class="preview_img" alt=""style="display:none;">
						<button type="button" class="el-button el-button--primary save_header_obj"data-dismiss="modal">
							<span>确 定 </span>
						</button>
					</div>
				</div>
			</div>
		</div>

		<script>

			function checkform(obj){
				$.post($(obj).attr('action'),$(obj).serialize(), function(json){
					if(json.status==1){
						var imgziliao = $('.up_header_img').attr('src');
						$(window.parent.document).find(".imgtongbu").attr('src',imgziliao);
						Dialog.success('温馨提示',json.info);
					}else{
						Dialog.error('温馨提示',json.info);
					};
				},'json');
				return false;
			};

			function checkform1(obj){
				$.post($(obj).attr('action'),$(obj).serialize(), function(json){
					if(json.status==1){
						Dialog.success('温馨提示',json.info).ok(function () {
							window.location.reload();
						});
					}else{
						Dialog.error('温馨提示',json.info);
					};
				},'json');
				return false;
			};


			function gobind(){
				$('.addTrueName').modal();
			}
			function verifyPwd(){
				$('.addTrueName1').modal();
			}
			function ResetPhone(){
				$('.addTrueName2').modal();
			}
			function Bindmail(){
				$('.addTrueName3').modal();
			}
			function ResetSafePwd(){
				$('.addTrueName4').modal();
			}
			function verifySafePwd(){
				$('.addTrueName5').modal();
			}
			function qqhaoma(){
				$('.addTrueName6').modal();
			}
		</script>
		<script>
			var names = null;
			var pass = null;
			var userbankname = "{$userbankname}";
			var patt = /^[\u4e00-\u9fa5 ]{2,10}$/;
			$('#addtrueName_btn').click(function () {
				names = $('#bindrealname_realname').val();
				pass = $('#bindrealname_tradepassword').val();
				if(!names || names == ''){
					Dialog.error('温馨提示','真实姓名不能为空');
             //$('#addtrueName_text1').show();
             return;
         }
         if(names.length!=0){
         	reg=/^[\u0391-\uFFE5]+$/;
         	if(!reg.test(names)){
                 Dialog.error('温馨提示',"请输入真实中文姓名");//请将“字符串类型”要换成你要验证的那个属性名称！
                 return false;
             }
         }
         if(!pass || pass == ''){
         	Dialog.error('温馨提示','资金密码不能为空');
             //$('#addtrueName_text2').show();
             return;
         }

         if(!patt.test(names)){
         	Dialog.error('温馨提示','真实姓名格式错误');
         	return;
         }

         $.ajax({
         	type : "POST",
         	url : "{:U('Member/binduserbankname')}",
         	data : {
         		userbankname :   names,
         		tradepassword : pass,
         	},
         	success : function (data) {
         		if(data==1){
         			Dialog.success('温馨提示','真实姓名绑定成功').ok(function () {
         				window.location.reload();
         			});
         		}else{
         			if(data['status']==0){
         				Dialog.error('温馨提示',"资金密码错误")
         			}else{
         				Dialog.error('温馨提示','真实姓名绑定失败');
         			}

         		}
         	}
         })
     })
 </script>
 <script>
 	$('.update_header').click(function (){
 		$('.header_img_box').modal();
 	})
 	$('.head_img_list').find('a').click(function (){
 		var title = $(this).attr('title')
 		var img_name = $(this).attr('attr-url');
 		var img_url = img_name;
 		$('.preview_img').attr('src',img_url);
 		$('.header_preview_name').text(title);
 	})
 	$('.save_header_obj').click(function (){
 		var header_url = $('.preview_img').prop('src');
 		var upHeaderUrl = header_url.substring(header_url.indexOf('r') - 1);
 		$('.up_header_img').attr('src',header_url);
 		$('.up_header_img_input').attr('value',upHeaderUrl);
 	})
 </script>
 <script type="text/javascript">
 	var myclick = function(v) {
 		var divs = document.getElementsByClassName("tab");
 		for (var i = 0; i < divs.length; i++) {
 			var divv = divs[i];
 			if (divv == document.getElementById("tab" + v + "_content")) {
 				divv.style.display = "block";
 			} else {
 				divv.style.display = "none";
 			}
 		}
 	}
 </script>

</body>
</html>
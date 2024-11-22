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
	<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
	<!--爱尚互联-->
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<!--爱尚互联-->

	<link rel="stylesheet" href="__CSS2__/userInfo.css">
	<link rel="stylesheet" href="__CSS2__/reset.css">
	<link rel="stylesheet" href="__CSS2__/withdrawals.css">
	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script src="__JS2__/require.js" data-main="__JS2__/homePage"></script>
	<!--爱尚互联-->
	<style>
	    .el-scrollbar__view .el-select-dropdown__item:hover{
	           background-color: #38384a;
	           color: #fff;
	    }
	</style>
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
						<li class="cur">财务中心</li> 
						<li class=""><a href="/activity" style="color: #fff;">系统中心</a></li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul> 
					<div class="navl2">
						<span><a href="/payment/ebankPay" class="">我要充值</a></span> 
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">我要提现</a></span> 
						<span><a href="/quota" class="">我要转账</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">提现记录</a></span> 
					</div>
				</div> 

				<div class="subPageMain">
					<div class="sub-page">
						<div>
							<ul role="menubar" class="subNavbar el-menu--horizontal el-menu">
								<li role="menuitem" tabindex="0" class="el-menu-item" style=""><a href="/payment/ebankPay" class="">充值</a></li> 
								<li role="menuitem" tabindex="0" class="el-menu-item is-active"><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">提现</a></li> 
								<li role="menuitem" tabindex="0" class="el-menu-item"><a href="/quota" class="">转账</a></li>
							</ul>
							<div class="page-container funds withdrawal">
								<div class="el-row" style="margin-left: -22.5px; margin-right: -22.5px;">
									<div class="leftflag el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;">
										<div class="topTip">
											<p><span>可提现余额：</span><span class="textI">{$userinfo.balance}</span></p>
											<p>您剩余提款 <span class="textI"data-tkcount="{$count}">{$count}</span> 次</p>
											<p>每日提现服务时间为 {$tikuanstart|date="H:i:s",###} ~ {$tikuanend|date="H:i:s",###}</p>
										</div>
										<div class="fundsMain fe-icon-card">
											<div style="position: relative;">
												<form class="el-form withdrawalCon" method="post" action="{:U('Apijiekou/savetikuanorder')}" id="register_form" onsubmit="return checkform(this)">
													<div class="el-form-item el-form-item--feedback is-required el-form-item--medium">
														<label for="user_bank_id" class="el-form-item__label"style="width: 100px;">选择银行卡</label>
														<div class="el-form-item__content">
															<div class="el-input el-input--medium el-input--suffix"style="width: 70.83333%;">
																<volist name="banklist" id="vo" key="v">
																	<eq name="v" value="1">          
																		<div class="el-input">
																			<input type="text" readonly="readonly" id="agent_member" autocomplete="off" value="*** **** **** *** {$vo._banknumber|substr=-4} {$vo.accountname} (默认)" types="" class="el-input__inner ty_select {$vo.imgbg} bank_bg" style="background-color: #fff;cursor: pointer;height: 36px;padding-left: 100px;">
																			<i style="color: rgb(162, 162, 162); font-size: 12px; position: absolute; right: 17px; transition: all 0.5s ease-in-out 0s; transform: rotate(0deg);" class="iconfont" id="iconfont"></i>
																		</div>
																	</eq>
																</volist>
																<div class="el-select-dropdown el-popper agent_member" style="width: 100%; display: none;">
																	<div class="el-scrollbar">
																		<div class="el-select-dropdown__wrap el-scrollbar__wrap">
																			<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
																				<volist name="banklist" id="vo" key="v">
																					<li data-bank="{$vo.imgbg}" data-num="{$vo._banknumber|substr=-4}" data-name="{$vo.accountname}" class="el-select-dropdown__item ascnagent_members">
																						{$vo.bankname} *** **** **** *** {$vo._banknumber|substr=-4} {$vo.accountname}
																						<eq name="v" value="1">
																						<input type="radio" name="bankid" checked="checked" value="{$vo.id}" style="display: none;">
																						<span style="color: #4CAF50;font-weight: bold;" class="moren">(默认)</span>
																						<else />
																						<input type="radio" name="bankid"  value="{$vo.id}" style="display: none;">
																						</eq>
																						<span style="float: right;">[{$vo.bankaddress}]</span>
																					</li>
																				</volist>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="el-form-item el-form-item--feedback is-required el-form-item--medium">
														<label for="money" class="el-form-item__label"style="width: 100px;">提现金额</label>
														<div class="el-form-item__content">
															<div class="el-input el-input--medium"style="width: 70.83333%;">
																<input type="number" autocomplete="off" name="amount" placeholder="提现区间：100 ~ 100000 元" class="el-input__inner">
															</div>
														</div>
													</div>
													<div class="el-form-item el-form-item--feedback is-required el-form-item--medium">
														<label for="password" class="el-form-item__label"style="width: 100px;">资金密码</label>
														<div class="el-form-item__content">
															<div class="el-input el-input--medium"style="width: 70.83333%;">
																<input type="password" autocomplete="new-password" name="withdraw_pwd" class="el-input__inner">
															</div>
														</div>
													</div>
													<div class="withdrawalbtn"style="padding-left: 100px;">
														<button type="submit" class="el-button el-button--primary">
															<span>确定送出</span>
														</button>
														<button type="button" class="el-button el-button--default">
															<span class="chongzhi">重置</span>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
										<h3 class="subHelpTit">提现注意事项</h3>
										<div class="subHelp">
											<p>1. 提款将会减少去相应的积分和降低相应的会员等级。</p>
											<p>2. 可提现金额=有效投注×3(此项需达到充值金额的30%才计入)+奖金+活动礼金</p>
											<p>3. 单笔提现：最低100元，最高100000元</p>
											<p>4. 请务必正确填写开户银行和银行卡号码、持卡人姓名。</p>
											<p>5. 新设定好的银行卡，需要于设定完成 1 小时后才可以进行提现申请。</p>
											<p>6. 当您提现申请完成后，系统作业时间约 3 - 5 分钟，再至您的银行账户进行查看。</p>
										</div>
										<div class="qaList">
											<ul>
												<li>
													<a href="/byhelp/helptxt6" class="">为什么提现未到账?</a>
												</li>
												<li>
													<a href="/byhelp/helptxt7" class="">如何提现?</a>
												</li>
											</ul>
											<div>
												<a href="/byhelp" class=""><i class="fe-icon-help"></i>帮助中心</a>
											</div>
										</div>
									</div>
								</div>
								<div class="el-loading-mask" style="display: none;">
									<div class="el-loading-spinner">
										<svg viewBox="25 25 50 50" class="circular"><circle cx="50" cy="50" r="20" fill="none" class="path"></circle></svg>
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
		function checkform(obj){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.sign){
					var tkcount = $("[data-tkcount]").text()/1;
					tkcount = tkcount-1;
					if(tkcount<=0){
						tkcount = 0;
					}
					$("[data-tkcount]").text(tkcount);
					
					Dialog.success('温馨提示',json.message).ok(function(){
					    window.location.reload();
					});
				}else{
					Dialog.error('温馨提示',json.message);
				};
			},'json');
			return false;
		};
	</script>
	<script>
	$('#agent_member').click(function(e){
	    e.stopPropagation();
	    if($('.agent_member').css("display")=='none'){
	        $('#iconfont').css('transform','rotate(180deg)');
	        $('.agent_member').slideDown(300);
	    }else{
	        $('#iconfont').css('transform','rotate(0deg)');
	        $('.agent_member').slideUp(300);
	    }
		})
	$(document).click(function(){
	    $('#iconfont').css('transform','rotate(0deg)');
		$('.agent_member').hide();
	});
	$('.chongzhi').click(function(){
	    window.location.reload();
	})
	$('.ascnagent_members').click(function(){
		var str_class = $('.ty_select').attr('class');
			var bank_posi = $(this).attr('data-bank');
			var last_sum = $(this).attr('data-num');
			var last_name = $(this).attr('data-name');
			var last_moren = $(this).find('.moren').text();

			$(this).find('input[name="bankid"]').prop('checked',true);
			$('.ty_select').val('*** **** **** *** '+last_sum +' '+ last_name +' '+ last_moren);
			commonObj.deleteCapital(str_class,'.el-input__inner.ty_select');
			$('.ty_select').addClass(bank_posi);
	})

</script>

</body>
</html>
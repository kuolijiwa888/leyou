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

	<!--爱尚互联-->
	<link rel="stylesheet" href="__CSS2__/reset.css">

	<link rel="stylesheet" href="__CSS2__/bootstrap.min.css">

	<link rel="stylesheet" href="__CSS2__/userInfo.css">



	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<!--爱尚互联-->
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="user-top-to">
		<div class="user-top-to2">
			<div class="sub-container">
				<div class="subPagNav">
					<ul class="navl1">
						<li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li> 
						<li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
						<li class="cur">财务中心</li> 
						<li class=""><a href="/activity" style="color: #fff;">系统中心</a></li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul>
					<div class="navl2">
						<span><a href="/payment/ebankPay" class="">我要充值</a></span> 
						<span><a href="/userCenter/withdrawals" class="">我要提现</a></span> 
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">我要转账</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">提现记录</a></span> 
					</div>
				</div> 

				<div class="subPageMain">
					<div class="sub-page">
						<div> 
							<ul role="menubar" class="subNavbar el-menu--horizontal el-menu">
								<li role="menuitem" tabindex="0" class="el-menu-item" style=""><a href="/payment/ebankPay" class="router-link-exact-active router-link-active">充值</a></li> 
								<li role="menuitem" tabindex="0" class="el-menu-item" style="border-bottom-color: transparent;"><a href="/userCenter/withdrawals" class="">提现</a></li> 
								<li role="menuitem" tabindex="0" class="el-menu-item is-active" style="border-bottom-color: transparent;"><a href="javascript:vodi(0)" class="">转账</a></li>
							</ul>
							<div class="page-container funds transfer-account">
								<div class="el-row" style="margin-left: -22.5px; margin-right: -22.5px;">
									<div class="leftflag el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;">
										<div class="fundsMain fe-icon-card">
											<div class="el-row" style="margin-left: -5px; margin-right: -5px;">
												<div class="el-col el-col-20" style="padding-left: 5px; padding-right: 5px;">
													<form class="el-form transferCon">
														<div class="el-form-item is-required el-form-item--medium">
															<label for="third_game_from" class="el-form-item__label"style="width:100px;">转入类型</label>
															<div class="el-form-item__content">
																<div class="el-select--medium">
																	<div class="el-input el-input--medium el-input--suffix"style="width: 70.83333%;">
																		<div class="el-input el-input--small">
																			<input type="text" readonly="readonly" id="groupDepositState" autocomplete="off" placeholder="选择转入类型" value="选择转入类型" types="" class="el-input__inner ty_select" style="background:#fff;cursor: pointer;height: 36px;">
																			<i style="color: rgb(162, 162, 162); font-size: 12px; position: absolute; right: 17px; transition: all 0.5s ease-in-out 0s; transform: rotate(0deg);" class="iconfont" id="iconfont4">&#xe65a;</i>
																		</div>
																		<div class="el-select-dropdown el-popper chongzhis" style="width: 100%; display: none;">
																			<div class="el-scrollbar">
																				<div class="el-select-dropdown__wrap el-scrollbar__wrap">
																					<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
																						<li class="el-select-dropdown__item ascnchongzhis" value="1">主账号至娱乐钱包</li>
																						<li class="el-select-dropdown__item ascnchongzhis" value="2">娱乐钱包至主账号</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="el-form-item is-required el-form-item--medium">
															<label for="money" class="el-form-item__label"style="width:100px;">转让额度</label>
															<div class="el-form-item__content">
																<div class="el-input el-input--medium el-input--suffix"style="width: 70.83333%;">
																	<input type ="number" class="el-input__inner" name="amout" id="amout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');"/>
																</div>
															</div>
														</div> 
														<div class="submit"style="padding-left: 100px;">
															<button type="button" class="el-button el-button--primary" id="save">
																<span>确认转账</span>
															</button> 
															<button type="button" class="el-button el-button--default" id="refresh">
																<span>重置</span>
															</button>
														</div>
													</form>
												</div> 
											</div>
										</div>
									</div> 
									<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
										<h3 class="subHelpTit">转账注意事项</h3> 
										<div class="subHelp">
											<p>1.转账服务时间为 24 小时。余额显示可能有一定的延迟。</p> 
											<p>2.当前钱包余额：<span style="color: #ffaa0d;">{$balance}</span> | 当前娱乐钱包余额：<span style="color: #ffaa0d;">{$ngBalance}</span> </p> 
										</div>
										<div class="qaList">
											<div>
												<a href="/byhelp" class=""><i class="fe-icon-help"></i>帮助中心</a>
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
	<script>
		$('#groupDepositState').click(function(e){
			e.stopPropagation();
			if($('.el-select-dropdown').css("display")=='none'){
				$('#iconfont4').css('transform','rotate(180deg)');
				$('.el-select-dropdown').slideDown(300);
			}else{
				$('#iconfont4').css('transform','rotate(0deg)');
				$('.el-select-dropdown').slideUp(300);
			}
		});
		$(document).click(function(){
			$('#iconfont4').css('transform','rotate(0deg)');
			$('.el-select-dropdown').hide();
		});
		$('.el-select-dropdown__item').click(function(){
			var value =  $(this).attr('value');
			var text = $(this).text();
			$('#groupDepositState').attr('types',value);
			$('#groupDepositState').val(text);
		})
	</script>
	<script>
		$(function(){
			$("#refresh").click(function(){
				window.location.reload(true) ;
			});
			$("#save").click(function(){
				Dialog.waiting();
				var quota_type=$('#groupDepositState').attr('types');
				var amout=$("#amout").val();
				if(quota_type<=0){
					window.setTimeout(function () {
						Dialog.close();
						window.setTimeout(function () {
							Dialog.error("温馨提示","请选择额度转让类型");
						}, 500)
					}, 500)
					
					return false;
				}
				if(amout==''){
					window.setTimeout(function () {
						Dialog.close();
						window.setTimeout(function () {
							Dialog.error("温馨提示","请输入转让金额");
						}, 500)
					}, 500)
					
					return false;
				}
				
				if(quota_type==1){
					$.post("{:U('Zhenren/deposit')}",{amount:amout},function(data){
						if(data.code==1){
							window.setTimeout(function () {
								Dialog.close();
								window.setTimeout(function () {
									Dialog.success("温馨提示","转让成功").ok(function () {
										window.location.reload(true);
									});
								}, 500)
							}, 500)

						}else{
							window.setTimeout(function () {
								Dialog.close();
								window.setTimeout(function () {
									Dialog.error("温馨提示","转换失败");
								}, 500)
							}, 500)

						}
					});
				}
				if(quota_type==2){
					$.post("{:U('Zhenren/withdrawal')}",{amount:amout},function(data){
						if(data.code==1){
							window.setTimeout(function () {
								Dialog.close();
								window.setTimeout(function () {
									Dialog.success("温馨提示","转让成功").ok(function () {
										window.location.reload(true);
									});
								}, 500)
							}, 500)

						}else{
							window.setTimeout(function () {
								Dialog.close();
								window.setTimeout(function () {
									Dialog.error("温馨提示","转换失败");
								}, 500)
							}, 500)
						}
					});
				}
			});
		});
	</script>
</body>
</html>
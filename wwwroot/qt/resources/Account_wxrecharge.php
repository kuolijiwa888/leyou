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
	<!--爱尚互联-->
    <script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<!--爱尚互联-->
	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<!--爱尚互联-->
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
				<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">我要充值</a></span> 
				<span><a href="/userCenter/withdrawals" class="">我要提现</a></span> 
				<span><a href="/quota" class="">我要转账</a></span> 
				<span><a href="/tools/_ajax/queryRechargeRecord" class="">充值记录</a></span> 
				<span><a href="/tools/_ajax/queryWithdrawRecord" class="">提现记录</a></span> 
			</div>
		</div> 

		<div class="subPageMain">
			<div class="sub-page">
				<div>
					<ul role="menubar" class="subNavbar el-menu--horizontal el-menu">
						<li role="menuitem" tabindex="0" class="el-menu-item is-active" style=""><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">充值</a></li> 
						<li role="menuitem" tabindex="0" class="el-menu-item" style="border-bottom-color: transparent;"><a href="/userCenter/withdrawals" class="">提现</a></li> 
						<li role="menuitem" tabindex="0" class="el-menu-item" style="border-bottom-color: transparent;"><a href="/quota" class="">转账</a></li>
					</ul> 
					<div class="page-container funds deposit">
						<div class="el-row" style="margin-left: -22.5px; margin-right: -22.5px;">
							<div class="leftflag el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;">
								<div class="fundsMain fe-icon-chongz iconfont">
									<ul style="margin: 10px 0;">
										<li style="display: inline-block;margin: 0 5px;">
											<button type="button" class="el-button el-button--default el-button--medium" onclick="javascript:window.location.href='/payment/ebankPay'">
												<span> 银行卡转账 </span>
											</button> 
										</li>
										<li style="display: inline-block;margin: 0 5px;">
											<button type="button" class="el-button el-button--default el-button--medium" onclick="javascript:window.location.href='/payment/zfbPay'">
												<span> 支付宝扫码 </span>
											</button> 
										</li>
										<li style="display: inline-block;margin: 0 5px;">
											<button type="button" class="el-button el-button--primary el-button--medium">
												<span> 微信扫码 </span>
											</button> 
										</li>
									</ul> 
									<div style="position: relative;">
									    <if condition="$Allmsg.state eq '0'">
									    <div class="tongdaostop" style="display:block;">
									        <div class="tongdaostop-tips">
									            <i class="iconfont">&#xe662;</i>
									            <span>该通道已关闭,请选择其他支付方式。</span>
									        </div>
									    </div>
									    <div>
											<form  class="paymentCon"method="post" action="{:U('Account/recharge')}" onSubmit="return checkform(this)">
												<div class="el-form-item amount el-form-item--feedback el-form-item--medium">
													<div class="el-form-item__content">
														<div class="el-row" id="pay_root" style="margin-left: -10px; margin-right: -10px;display:block">
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 83%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">充值金额</label>
																<div class="el-input el-input--medium"style="width:82.83333%">
																	<input type="text" autocomplete="off" name="amount" id="amount" placeholder="最低充值{$Allmsg.minmoney|floor}" class="el-input__inner" />
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 83%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">支付账号</label>
																<div  class="el-input el-input--medium"style="width:82.83333%">
																	<input type="text" autocomplete="off" name="payname" placeholder="请输入您的微信账号" class="el-input__inner" />
																</div>
															</div>
															<input type="radio"  name="paytype"  value="{$Allmsg['paytype']}" checked="checked"  style="display:none;">
															<div class="el-col el-col-12" style="padding-right: 10px;width:16%;">
																<button  type="button" class="el-button el-button--primary el-button--medium">
																	<span>立即充值</span>
																</button>
															</div>
														</div>
														<div class="el-row" style="margin-left: -10px; margin-right: -10px;display:none;" id="pay_alipay" >
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label">尊敬的客户您好，您的充值订单已经生成，请您在该页面继续完成充值。</label><br>
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">充值金额</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.amount"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">订单编号</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.trano"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">附言码</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.id"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<div class='payerweima' style="text-align: center;font-size: 14px;">付款二维码</div>
																<img src="__ROOT__{$Allmsg['ewmurl']}" style='width:150px;border:none;display:block; margin:0 auto;'>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;text-align: center;">
																<input type="hidden" way-data="saomabill.paytype" />
																<button  type="button" class="el-button el-button--primary el-button--medium" style="margin: 10px 0;">
																	<span>扫码完成支付</span>
																</button>
															</div>
														</div>
													</div>
												</div>
											</form> 
										</div>
									    <elseif condition="$Allmsg.state eq '1'" />
										<div>
											<form  class="paymentCon"method="post" action="{:U('Account/recharge')}" onSubmit="return checkform(this)">
												<div class="el-form-item amount el-form-item--feedback el-form-item--medium">
													<div class="el-form-item__content">
														<div class="el-row" id="pay_root" style="margin-left: -10px; margin-right: -10px;display:block">
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 83%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">充值金额</label>
																<div class="el-input el-input--medium"style="width:82.83333%">
																	<input type="text" autocomplete="off" name="amount" id="amount" placeholder="最低充值{$Allmsg.minmoney|floor}" class="el-input__inner" />
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 83%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">支付账号</label>
																<div  class="el-input el-input--medium"style="width:82.83333%">
																	<input type="text" autocomplete="off" name="payname" placeholder="请输入您的微信账号" class="el-input__inner" />
																</div>
															</div>
															<input type="radio"  name="paytype"  value="{$Allmsg['paytype']}" checked="checked"  style="display:none;">
															<div class="el-col el-col-12" style="padding-right: 10px;width:16%;">
																<button  type="button" class="el-button el-button--primary el-button--medium nextbtn">
																	<span>立即充值</span>
																</button>
															</div>
														</div>
														<div class="el-row" style="margin-left: -10px; margin-right: -10px;display:none;" id="pay_alipay" >
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label">尊敬的客户您好，您的充值订单已经生成，请您在该页面继续完成充值。</label><br>
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">充值金额</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.amount"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">订单编号</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.trano"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<label for="third_game_from" class="el-form-item__label"style="width: 85px;margin-bottom: 5px;">附言码</label>
																<div class="el-input el-input--medium" style="width: 68%;">
																	<input way-data="saomabill.id"type="text" autocomplete="off" readonly="readonly" class="el-input__inner">
																</div>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;">
																<div class='payerweima' style="text-align: center;font-size: 14px;">付款二维码</div>
																<img src="__ROOT__{$Allmsg['ewmurl']}" style='width:150px;border:none;display:block; margin:0 auto;'>
															</div>
															<div class="el-col el-col-12" style="padding-left: 10px; padding-right: 10px;width: 100%;text-align: center;">
																<input type="hidden" way-data="saomabill.paytype" />
																<button  type="button" class="el-button el-button--primary el-button--medium" style="margin: 10px 0;" onclick="wxpay()">
																	<span>扫码完成支付</span>
																</button>
															</div>
														</div>
													</div>
												</div>
											</form> 
										</div> 
										</if>

									</div>
								</div>
							</div> 
							<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
								<h3 class="subHelpTit">充值使用需知</h3> 
								<div class="subHelp">
									{$Allmsg['remark']}
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
	<script type="text/javascript">
		$('.nextbtn').click(function () {
			if($('input[name=amount]').val()=="") {
				Dialog.error('温馨提示','请输入充值金额');return false;
			}
			if($('input[name=payname]').val()==""){
				Dialog.error('温馨提示','请输入支付账号');return false;
			}
			$.ajax({
				type : 'POST',
				url : "{:U('Home/Apijiekou/addrecharge')}",
				data :{
					amount      : $('#amount').val(),
					paytype     : $("input[name='paytype']:checked").val(),
					userpayname : $("input[name='payname']").val(),
				},
				success : function (data) {
					if(data.sign == true){
						$("#pay_root").hide();
						$("#pay_alipay").show();
						way.set("saomabill.amount",data.data.amount);
						way.set("saomabill.trano",data.data.trano);
						way.set("saomabill.id",data.data.id);
						way.set("saomabill.paytype",data.data.paytype);
					 //alt('充值申请成功提交,请稍等');
					 setTimeout(function () {checkispay(data.data.trano);}, 5000);	
					}else{
						Dialog.error('温馨提示',data.message);
					}
				}
			})
		})
		function wxpay(){
		    Dialog.success('温馨提示',"充值申请已成功提交").ok(function(){
		        window.location.href = '/tools/_ajax/queryRechargeRecord';
		    })
		}


	//检测是否扫码支付成功
	
	var checkispayid;
	function checkispay(trano){
		clearTimeout(checkispayid);
		$.ajax({
			url: "{:U('Apijiekou/checkrechargeisok1')}",
			data:{"trano": trano},  
			type: "post",
			dataType: "json",
			async:false,
			success: function(result) {
				if (result.sign === true) {
					if(result.state!=0){
						if(result.state==1){
							Dialog.success('温馨提示',"充值成功");
						}else if(result.state==-1){
							Dialog.error('温馨提示',"充值失败");
						}
						window.location.href = "{:U('Account/dealRecord2')}";
					}else{
						checkispayid = setTimeout(function () {
							checkispay(trano);
						}, 5000);	
					}
				} else {
					checkispayid = setTimeout(function () {
						checkispay(trano);
					}, 5000);	
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				checkispayid = setTimeout(function () {
					checkispay(trano);
				}, 5000);	
			}
		});
	}; 
</script>

</body>
</html>
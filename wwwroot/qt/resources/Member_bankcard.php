<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<!-- 爱尚互联 -->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/resources/css2/bootstrap.min.css">
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
	<!-- 爱尚互联 -->


	<!-- 爱尚互联 -->
	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script src="__JS2__/require.js" data-main="__JS2__/homePage"></script>
	<!-- 爱尚互联 -->
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
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">银行卡管理</a></span> 
						<span><a href="/memberCenter/PLstatement" class="">个人盈亏报表</a></span> 
						<span><a href="/memberCenter/BillRecord" class="">个人账变明细</a></span> 
						<span><a href="/memberCenter/betRecord" class="">个人游戏记录</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">个人充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">个人提现记录</a></span>
					</div>
				</div> 

				<div class="subPageMain">
					<div class="sub-page">
						<div class="page-container bankManage">
							<div class="el-row" style="margin-left: -22.5px; margin-right: -22.5px;">
								<div class="el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;">
									<div class="bindlist">
										<if condition="is_array($banklist)">
											<volist name="banklist" id="vo">
											    <eq name="vo.state" value="1">
											    <if condition="$vo.isdefault eq '1'">
												<div class="el-card is-always-shadow active">
													<div class="el-card__header">
														<span>绑定日期:{$vo.date|substr=0,10}</span>
														<button type="button" class="el-button el-button--text"style="cursor: not-allowed;">
															<span>
																<span class="active iconfont">当前默认</span>
															</span>
														</button>
													</div>
													<div class="el-card__body">
														<span class="bindaccount">
															<img src="__ROOT__/resources/images/bank/{$vo.banklogo}" style="vertical-align:middle"> {$vo.bankname}
														</span>
														<span class="bindaccount" style="font-size: 16px;">**** **** **** * {$vo.banknumber|substr=-4}</span>
														<span class="bindaccount" style="margin-left: 220px;margin-top: 15px;font-size: 18px;">{$vo.accountname}<?php for($i=1;$i<=$vo['sartnum'];$i++){echo '*';}?></span>
													</div>
												</div>
												<else/>
												<div class="el-card is-always-shadow">
													<div class="el-card__header">
														<span>绑定日期:{$vo.date|substr=0,10}</span>
														<button type="button" class="el-button el-button--text">
															<span>
																<span onclick="setdefault({$vo.id})"style="color:#a68f4c">设置默认</span>
															</span>
														</button>
													</div>
													<div class="el-card__body">
														<span class="bindaccount">
															<img src="__ROOT__/resources/images/bank/{$vo.banklogo}" style="vertical-align:middle"> {$vo.bankname}
														</span>
														<span class="bindaccount" style="font-size: 16px;">**** **** **** * {$vo.banknumber|substr=-4}</span>
														<span class="bindaccount" style="margin-left: 220px;margin-top: 15px;font-size: 18px;">{$vo.accountname}<?php for($i=1;$i<=$vo['sartnum'];$i++){echo '*';}?></span>
													</div>
												</div>
												</if>
												</eq>
											</volist>
										</if>
										<lt name="banklist|count" value="4">
											<div class="el-card addBankCard is-always-shadow add_bankCard">
												<div class="el-card__body">
													<span class="iconfont">&#xe69f; 添加绑定银行卡</span>
												</div>
											</div>
										</lt>
									</div>
								</div>
								<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
									<h3 class="subHelpTit">银行卡注意事项</h3>
									<div class="subHelp no-bottom-border">
										<p>1.银行卡添加成功后，平台任何区域都不会出现您的完整的银行账号，开户名等信息。</p>
										<p>2.您已绑定{$banklist|count}张银行卡，成功绑定的银行卡会自动锁定，无法删除和修改。</p>
										<p>3.添加/修改银行卡信息后，需 1 小时后方可提现。</p>
										<p>4.必须绑定银行卡后方可提现。</p>
									</div>
								</div>
							</div>
							<div class="el-dialog__wrapper addTrueName modal ascnshow fade" style="display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div role="dialog" aria-modal="true" aria-label="添加银行卡" class="el-dialog update-password-dg" style="margin-top: 15vh;">
									<form action="{:U('Member/addBank')}" class="update_form" method="post">
										<div class="el-dialog__header">
											<span class="el-dialog__title">添加银行卡</span>
										</div>
										<div class="el-dialog__body">
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">持卡人姓名</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<input class="el-input__inner accountname" type="text" value="{$userinfo.userbankname}" placeholder="{$userinfo.userbankname}" readonly="readonly">
													</div>
												</div>
											</div> 
											<div class="el-form-item el-form-item--feedback">
												<label for="newpassword" class="el-form-item__label" style="width: 120px;">开户银行</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<select name="bankname"  id="sysBankCard" class="el-input__inner">
															<option value="">请选择银行</option>
															<volist name="Allbank" id="value">
																<option value="{$value['bankcode']}">{$value['bankname']}</option>
															</volist>
														</select>
													</div>
												</div>
											</div> 
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">开户城市</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<select style="width: 50%;" id="s_province" class="el-input__inner" name="province" data-shen="省份"></select>
														<select style="width: 49%;" id="s_city" class="el-input__inner" name="city" data-shi="地级市"></select>
													</div>
												</div>
											</div> 
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">开户网点</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<input class="el-input__inner" type="text" id="bankBranch" name="accountname">
													</div>
												</div>
											</div> 
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">银行卡号</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<input class="el-input__inner" type="text" onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')" id="bankCardNum" name="banknumber">
													</div>
												</div>
											</div>  
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">确认卡号</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<input class="el-input__inner" type="text" onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')"  id="regBankCardNum" name="rebanknumber">
													</div>
												</div>
											</div> 
											<div class="el-form-item el-form-item--feedback">
												<label for="oldpassword" class="el-form-item__label" style="width: 120px;">资金密码</label>
												<div class="el-form-item__content" style="margin-left: 120px;">
													<div class="el-input">
														<input class="el-input__inner" type="password" id="bankTradPwd" name="safepass">
													</div>
												</div>
											</div> 
										</div>
										<div class="el-dialog__footer">
											<div class="dialog-footer">
												<button type="button" class="el-button el-button--default" data-dismiss="modal" >
													<span>取 消</span>
												</button> 
												<button type="button" class="el-button el-button--primary" onclick="userbindbankcard();">
													<span>确 定 </span>
												</button>
											</div>
										</div>
									</form>
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
    //设置默认
    function setdefault(id) {
    	$.ajax({
    		url : "{:U('Apijiekou/defaultuserbankcard')}",
    		type : "POST",
    		data : {
    			id : id 
    		},
    		success : function (data) {
    			if(data.sign==1)
    			{
    				Dialog.success('温馨提示',data.message).ok(function(){
    					window.location.reload();
    				});
    			}else{
    				Dialog.error('温馨提示',data.message);
    			}
    		}
    	})
    }


    $('.add_bankCard').click(function () {
    	var userbankname = "{$userbankname}";
    	if(userbankname==""){
    		//loginCengBoxFn('您还未绑定真实姓名 <a href="/memberCenter/personalInfo" style="color: #dd514c;">点击前往<a/>');
    		Dialog({
    			title: "温馨提示",
    			content: "您还未填写真实姓名，是否前往填写",
    			ok: {
    				waiting: true,
    				waitingText: "确定",
    				callback: function () {
    					window.setTimeout(function () {
    						Dialog.close();
    						window.location.href = '/memberCenter/personalInfo';
    					}, 500)
    				}
    			}
    		});
    	}else{
    		$('.addTrueName').modal();
    	}
    })
    
    $('.default_bank').click(function () {
    	$(this).addClass('checked').siblings('.bankcard_item').removeClass('checked');
    	$(this).find('.r_right').show().
    	parents('.default_bank').siblings('.bankcard_item').find('.r_right').hide();
        //$(this).find('.default_bank_text').text('默认使用');
        //$(this).siblings('.bankcard_item').find('.default_bank_text').hide('设置为默认');

        $.ajax({
        	type: '',
        	dataType: '',
        	url: '',
        	data: {},
        	success: function (data) {

        	}   
        })
    })

    if($('.default_bank').hasClass('checked')){
        //(this).find('.default_bank_text').text('默认使用');
        $(this).find('.r_right').show();
    }
</script>
<script>
	var userbindbankcard = function(){
		var url = '__ROOT__/Apijiekou.' + 'userbindbankcard'; 
		var bankCode = $("#sysBankCard").val();
		var accountname = $(".accountname").val();
		var bankCardNumber = $("#bankCardNum").val();
		var regbankCardNumber = $("#regBankCardNum").val();
		var province = $("#s_province").val();
		var city = $("#s_city").val();

		var bankTradPwd = $("#bankTradPwd").val();
		var bankBranch = $("#bankBranch").val();
		bankBranch = bankBranch?bankBranch:"";
		if (bankCode.length < 1) {
			Dialog.error('温馨提示',"请选择银行卡");return false;
		} else if (province=="省份" || city=="地级市") {
			Dialog.error('温馨提示',"请选择开户省市");return false;

		} else if (bankCardNumber.length < 1) {
			Dialog.error('温馨提示',"请输入银行卡号");return false;

		} else if (regbankCardNumber.length < 1) {
			Dialog.error('温馨提示',"请输入确认银行卡号");return false;
		} else if (regbankCardNumber != bankCardNumber) {
			Dialog.error('温馨提示',"两次卡号输入的不一致，请重新输入");return false;
		} else if (bankTradPwd.length < 1) {
			Dialog.error('温馨提示',"请输入资金密码");return false;
		}
		var bankAddress = province + "-" + city;
		$.post(url,{
			"bankCardNumber": bankCardNumber,
			"accountname": accountname,
			"bankAddress": bankAddress,
			"bankTradPwd": bankTradPwd,
			"bankCode": bankCode,
			"regbankCardNumber": regbankCardNumber,
			"bankBranch": bankBranch
		}, function(json){
			if(json.sign){
				Dialog.success('温馨提示','银行绑定成功').ok(function(){
					window.location.reload();
				});
			}else{
				Dialog.error('温馨提示',json.message);
				return false;
			}
			return false;
		},'json');
	}
</script>
</body>
</html>
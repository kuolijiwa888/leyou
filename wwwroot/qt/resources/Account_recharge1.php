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
	<link rel="stylesheet" href="__CSS2__/userInfo.css">
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
									<ul  class="paymentList">
										<li>
											<button type="button" class="el-button el-button--primary el-button--medium">
												<span> 银行卡转账 </span>
											</button> 
										</li>
										<li>
											<button type="button" class="el-button el-button--default el-button--medium" onclick="javascript:window.location.href='/payment/zfbPay'">
												<span> 支付宝扫码 </span>
											</button> 
										</li>
										<li>
											<button type="button" class="el-button el-button--default el-button--medium" onclick="javascript:window.location.href='/payment/wxPay'">
												<span> 微信扫码 </span>
											</button> 
										</li>
									</ul> 
									<div style="position: relative;">
									    <if condition="$payinfo.state eq '0'">
									    <div class="tongdaostop bank-card" style="display:block;">
									        <div class="tongdaostop-tips">
									            <i class="iconfont">&#xe662;</i>
									            <span>该通道已关闭,请选择其他支付方式。</span>
									        </div>
									    </div>
									    <div>
											<form data-v-1e35f995 class="el-form paymentCon"action="{:U('Apijiekou/recharge')}" id="formrecharge" method="post">
												<div data-v-55540fd1="" class="el-form-item amount el-form-item--feedback el-form-item--medium">
														<div class="el-form-item__content">
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;display:none;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">收款银行</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="radio" name="paytype" value="{$payinfo.paytype}" checked="checked" class="el-input__inner">
														                <img src="/ascn/images/wy.png" style="width: 28px;height: 28px;margin: 0 15px;position:absolute;top:10px;">
														                <em style="position: absolute;top: 5px;left: 57px;">{$payinfo.ftitle|mb_substr=6}</em>
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">银行户名</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$bankname}" placeholder="{$bankname}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">银行账号</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$bankcode}" placeholder="{$bankcode}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">开户支行</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$payinfo.ftitle}" placeholder="{$payinfo.ftitle}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">充值金额</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="number" autocomplete="off" name="amount" value="{$payinfo.minmoney|floor}" placeholder="充值区间：{$payinfo.minmoney|floor} ~ {$payinfo.maxmoney|floor} 元" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">付款人姓名</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" name="userpayname" id="userpayname" placeholder="请输入付款人的银行卡预留姓名" class="el-input__inner">
														            </div>
														       </div>
														       <div data-v-1e35f995="" class="el-col" style="padding-right: 10px;">
														           <button data-v-1e35f995="" type="button" class="el-button el-button--primary el-button--medium">
														               <span>充值送出</span>
														          </button>
														       </div>
														    </div>
														</div>
												</div>
											</form> 
										</div>
									    <elseif condition="$payinfo.state eq '1'" />
										<div>
											<form data-v-1e35f995 class="el-form paymentCon"action="{:U('Apijiekou/recharge')}" id="formrecharge" method="post">
												<div data-v-55540fd1="" class="el-form-item amount el-form-item--feedback el-form-item--medium">
														<div class="el-form-item__content">
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;display:none;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">收款银行</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="radio" name="paytype" value="{$payinfo.paytype}" checked="checked" class="el-input__inner">
														                <img src="/ascn/images/wy.png" style="width: 28px;height: 28px;margin: 0 15px;position:absolute;top:10px;">
														                <em style="position: absolute;top: 5px;left: 57px;">{$payinfo.ftitle|mb_substr=6}</em>
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">银行户名</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$bankname}" placeholder="{$bankname}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">银行账号</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$bankcode}" placeholder="{$bankcode}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">开户支行</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" value="{$payinfo.ftitle}" placeholder="{$payinfo.ftitle}" readonly="readonly" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">充值金额</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="number" autocomplete="off" name="amount" value="{$payinfo.minmoney|floor}" placeholder="充值区间：{$payinfo.minmoney|floor} ~ {$payinfo.maxmoney|floor} 元" class="el-input__inner">
														            </div>
														       </div>
														    </div>
														    <div data-v-1e35f995="" class="el-row" style="margin-left: -10px; margin-right: -10px;">
														        <label class="el-form-item__label" style="width: 85px;margin-bottom: 5px;">付款人姓名</label>
														        <div data-v-1e35f995="" class="el-col el-col-17" style="padding-right: 10px;">
														            <div data-v-1e35f995="" class="el-input el-input--medium">
														                <input type="text" autocomplete="off" name="userpayname" id="userpayname" placeholder="请输入付款人的银行卡预留姓名" class="el-input__inner">
														            </div>
														       </div>
														       <div data-v-1e35f995="" class="el-col" style="padding-right: 10px;">
														           <button data-v-1e35f995="" type="button" class="el-button el-button--primary el-button--medium"onclick="addrecharge()">
														               <span>充值送出</span>
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
									<p>1. 如果是扫码支付，输入金额后跳转后请打开相应的 APP 进行扫码操作。</p>
									<p>2. 充值成功后请到充值记录查看充值状态，若有问题请即时联在线客服</p>
									<p>3. 单笔最低<a style="color:#ffbb3d;">{$payinfo.minmoney|floor}</a>元，最高<a style="color:#ffbb3d;">{$payinfo.maxmoney|floor}</a>元 </p>
									{$Allmsg['remark']}
								</div>
								<div class="qaList">
								    <ul>
								        <li>
								            <a href="/byhelp/helptxt1" class="">为什么充值未到账?</a>
								        </li>
								        <li>
								            <a href="/byhelp/helptxt2" class="">如何使用网银充值?</a>
								        </li>
								        <li>
								            <a href="/byhelp/helptxt3" class="">如何使用微信充值?</a>
								        </li>
								        <li>
								            <a href="/byhelp/helptxt4" class="">如何使用支付宝充值?</a>
								        </li>
								    </ul>
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
		function addrecharge() {
			if(!/^[\u4e00-\u9fa5]+$/gi.test(document.getElementById("userpayname").value)){
				Dialog.error('温馨提示',"非法字符,请核对后重新输入");
			}else{
				$.ajax({
					type:"post",
					url:"{:U('Home/Apijiekou/addrecharge')}",
					data : $('#formrecharge').serialize(),
					success : function (json) {
						if(json.sign==1){
							Dialog.success('温馨提示',json.message).ok(function(){
							    window.location.href = "/tools/_ajax/queryRechargeRecord";
							});
						}else{
							Dialog.error('温馨提示',json.message);
						}

					}
				})
			}
		}
	</script>

</body>
</html>
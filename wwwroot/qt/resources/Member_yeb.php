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
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>

	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>


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
				<li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
				<li class=""><a href="/activity" style="color: #fff;">系统中心</a></li>
				<li class="cur">余额宝系统</li>
			</ul> 
			<div class="navl2">
				<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">余额宝管理</a></span> 
				<span><a href="{:U('Yeb/hrecord')}" class="">余额宝活期记录</a></span> 
				<span><a href="{:U('Yeb/drecord')}" class="">余额宝定期记录</a></span> 
				<span><a href="{:U('Yeb/syrecord')}" class="">余额宝收益记录</a></span> 
				<span><a href="{:U('Yeb/crecord')}" class="">活期存取记录</a></span> 
				<span><a href="{:U('Yeb/qrecord')}" class="">定期存取记录</a></span>
			</div>
		</div> 

		<div class="subPageMain">
			<div class="sub-page">
				<div> 
					<div class="page-container funds transfer-account">
						<div class="el-row" style="margin-left: -22.5px; margin-right: -22.5px;">
							<div class="leftflag el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;">
							    <div class="yeb_title"style="margin: 10px 0 10px 70px;font-size: 15px;line-height: 22px;">
									<span class="yeb_img"></span>余额宝<span class="yeb_tips"><i class="iconfont">&#xe64e;</i>余额宝受特别保护，安全可靠，请放心操作。</span>
								</div>
							    <div class="fundsMain fe-icon-yeb">
								<div class="el-row" style="margin-left: -5px; margin-right: -5px;">
									<div class="el-col el-col-24" style="padding-left: 5px; padding-right: 5px;">
										<form class="el-form transferCon">
											<div class="el-form-item is-required el-form-item--medium">
												<label for="third_game_from" class="el-form-item__label"style="width: 100px;">转入类型</label>
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
																			<volist name="list" id="vo">
																				<li class="el-select-dropdown__item ascnchongzhis" value="{$vo.id}">{$vo.name}-利息{$vo.liyun}%</li>
																			</volist>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div> 
											<div class="el-form-item is-required el-form-item--medium">
												<label for="money" class="el-form-item__label"style="width: 100px;">转入金额</label>
												<div class="el-form-item__content">
													<div class="el-input el-input--medium el-input--suffix"style="width:70.83333%">
														<input type ="number" class="text force-digit el-input__inner" name="amout" id="amout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" placeholder="请输入转入金额"/>
													</div>
													<button type="button" class="el-button el-button--primary" id="save"style="padding: 10px 12px;">
													<span>确认转入</span>
												    </button> 
												</div>
											</div> 
												
										</form>
										<form class="el-form transferCon"> 
											<div class="el-form-item is-required el-form-item--medium">
												<label for="money" class="el-form-item__label"style="width: 100px;">转出金额</label>
												<div class="el-form-item__content">
													<div class="el-input el-input--medium el-input--suffix"style="width:70.83333%">
														<input type ="number" class="text force-digit el-input__inner" name="camout" id="camout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" placeholder="余额宝活期最大转出金额 {$member.yebmoney}元"/>
													</div>
													<button type="button" class="el-button el-button--primary " id="csave"style="padding: 10px 12px;">
													<span>确认转出</span>
											     	</button> 
												</div>
											</div> 
										</form>
										<form class="el-form transferCon"> 
											<div class="el-form-item is-required el-form-item--medium">
												<label for="money" class="el-form-item__label"style="width: 100px;">转出利息</label>
												<div class="el-form-item__content">
													<div class="el-input el-input--medium el-input--suffix"style="width:70.83333%">
														<input type ="number" class="text force-digit el-input__inner" name="lixiout" id="lixiout" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" placeholder="请输入转入金额"/>
													</div>
													<button type="button" class="el-button el-button--primary" id="lixioutzc"style="padding: 10px 12px;">
													<span>确认转出</span>
												    </button> 
												</div>
											</div> 
										</form>
									</div>
									</div>
								</div>
							</div> 
							<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
								<h3 class="subHelpTit">余额宝活动细则</h3> 
								<div class="subHelp">
									<p>1、所获得利息无需打码 即可出款。</p> 
									<p>2、如结算利息时 金额小于0.001元 那么系统将不产生利息。</p>
									<p>3、若利用余额宝进行套现等非法操作 平台有权禁封账户。</p>
									<p>4、每位会员，每一相同IP，每一电子邮箱，每一电话号码，相同支付方式（借记卡/信用卡/银行账户）只能享受一次优惠；若会员有重复申请账号行为，公司保留取消或收回会员优惠彩金的权利。</p>
									<p>5、本公司保留对活动最终解释权； 以及在无通知的情况下修改，终止活动的权利，适用于所有优惠。</p>
									<br><br>
									<p>当前钱包余额：<span style="color: #ffaa0d;">{$member.balance}元</span> | 当前活期余额：<span style="color: #ffaa0d;">{$member.yebmoney}元</span> </p> 
									<p>当前定期余额：<span style="color: #ffaa0d;">{$member.dyebmoney}元</span> | 当前利息余额：<span style="color: #ffaa0d;">{$member.yeblixi}元</span> </p> 
								</div> 
							</div>
						</div>
						<div class="el-loading-mask" style="display: none;">
							<div class="el-loading-spinner">
								<svg viewbox="25 25 50 50" class="circular">
									<circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
								</svg>

							</div>
						</div>
					</div>
				</div>
				<style>
					.toubu th{color: #ffffff;text-align: center;background-color: #2b303b;}
					.el-table__row td{text-align: center;}
				</style>
				<div class="el-table record-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;margin-top: 10px;">
					<div class="el-table__header-wrapper">
						<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
							<colgroup>
								<col name="el-table_8_column_1" width="146px;">
								<col name="el-table_8_column_2" width="146px;">
								<col name="el-table_8_column_3" width="146px;">
								<col name="el-table_8_column_4" width="146px;">
								<col name="el-table_8_column_5" width="146px;">
								<col name="el-table_8_column_6" width="146px;">
								<col name="el-table_8_column_7" width="146px;">
								<col name="el-table_8_column_8" width="146px;">
							</colgroup>
							<thead class="has-gutter">
								<tr class="toubu">
									<th colspan="1" rowspan="1" class="el-table_8_column_1     is-leaf">
										<div class="cell">
											订单号
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_2     is-leaf">
										<div class="cell">
											名称
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_3     is-leaf">
										<div class="cell">
											金额
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_4     is-leaf">
										<div class="cell">
											利率
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_5     is-leaf">
										<div class="cell">
											利息
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_6     is-leaf">
										<div class="cell">
											状态
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_7     is-leaf">
										<div class="cell">
											转入时间
										</div>
									</th>
									<th colspan="1" rowspan="1" class="el-table_8_column_8     is-leaf">
										<div class="cell">
											操作项
										</div>
									</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="el-table__body-wrapper is-scrolling-none">
						<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
							<colgroup>
								<col name="el-table_8_column_1" width="100%">
								<col name="el-table_8_column_2" width="100%">
								<col name="el-table_8_column_3" width="100%">
								<col name="el-table_8_column_4" width="100%">
								<col name="el-table_8_column_5" width="100%">
								<col name="el-table_8_column_6" width="100%">
								<col name="el-table_8_column_7" width="100%">
								<col name="el-table_8_column_8" width="100%">
							</colgroup>
							<tbody>
								<volist name="yeblist" id="vo">
									<tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_8_column_1">
											<div class="cell">{$vo.trano}</div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_2">
											<div class="cell">{$vo.fname}</div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_3">
											<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.money}</span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_4">
											<div class="cell">{$vo.lilv}</div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_5">
											<div class="cell">{$vo.lixi}</div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_6">
											<div class="cell"><span class="el-tag el-tag--info el-tag--mini"><if condition="$vo[state] eq 0">收息结束<elseif  condition="$vo[state] eq 1" />存入收息</if></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_7">
											<div class="cell">{$vo.addtime|date="Y-m-d H:i:s",###}</div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_8_column_8">
											<div class="cell"><if condition="$vo[state] eq 1"><a onclick="dqtqxian('{$vo.id}');" class="chedan_btn" style="color:red">提现</a><else /><a  onclick="dqtxian('{$vo.id}');" class="chedan_btn" style="color:red">提现</a></if></div>
										</td>
									</tr>
								</volist>
							</tbody>
						</table>
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
		function dqtxian(uid){
			$.post("{:U('Yeb/dtixi')}",{'id':uid}, function(data){
				if(data.code==1){
					Dialog.success("温馨提示",data.msg).ok(function () {
						window.location.reload(true);
					});
				}else{
					Dialog.error("温馨提示",data.msg);
				}
			},'json');
		}
		function dqtqxian(uid){
			Dialog({
				title: "温馨提示",
				content: "确定提现吗？提现无利息",
				ok: {
					callback: function () {
						$.post("{:U('Yeb/dtixi')}",{'id':uid}, function(data){
							if(data.code==1){
								Dialog.success("温馨提示",data.msg).ok(function () {
									window.location.reload(true);
								});
							}else{
								Dialog.error("温馨提示",data.msg);
							}
						},'json');
					}
				}
			});
		}
	</script>
	<script>
		$(function(){
			$("#save").click(function(){
				var yeb_type=$('#groupDepositState').attr('types');
				var amout=$("#amout").val();
				if(amout<100){
					Dialog.error("温馨提示","最低存入额100");	
					return false;
				}
				$.post("{:U('Yeb/deposit')}",{'yeb_type':yeb_type,'amout':amout}, function(data){
					console.log(data);
					if(data.code==1){
						Dialog.success("温馨提示",data.msg).ok(function () {
							window.location.reload(true);
						});
					}else{
						Dialog.error("温馨提示",data.msg);
					}
				},'json');
			});
			$("#csave").click(function(){
				var amout=$("#camout").val();
				if(amout<100){
					Dialog.error("温馨提示","最低取出额100");	
					return false;
				}
				$.post("{:U('Yeb/hquchu')}",{'amout':amout}, function(data){
					console.log(data);
					if(data.code==1){
						Dialog.success("温馨提示",data.msg).ok(function () {
							window.location.reload(true);
						});
					}else{
						Dialog.error("温馨提示",data.msg);
					}
				},'json');
			});
			$("#lixioutzc").click(function(){
				var amout=$("#lixiout").val();
				$.post("{:U('Member/zczx')}",{'amout':amout}, function(data){
					if(data.code==1){
						Dialog.success("温馨提示",data.msg).ok(function () {
							window.location.reload(true);
						});
					}else{
						Dialog.error("温馨提示",data.msg);
					}
				},'json');
			});
		});
	</script>
</body>
</html>
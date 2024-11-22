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

	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<!--爱尚互联-->

	<!--爱尚互联-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<!--爱尚互联-->
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
				<span><a href="/memberCenter/PLstatement" class="">个人盈亏报表</a></span> 
				<span><a href="/memberCenter/BillRecord" class="">个人账变明细</a></span> 
				<span><a href="/memberCenter/betRecord" class="">个人游戏记录</a></span> 
				<span><a href="/tools/_ajax/queryRechargeRecord" class="">个人充值记录</a></span> 
				<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">个人提现记录</a></span>
			</div>
		</div> 
		<?php $typearray = AbstractType();?>
		<div class="subPageMain">
			<div class="sub-page">
				<div class="page-container">
					<form class="el-form el-form--inline">
						<div class="el-row">
							<div class="el-form-item el-form-item--small">
								<div class="el-form-item__content">
									<div class="el-select el-select--small" style="width: 128px;" name="el-select">
										<div class="el-input el-input--small el-input--suffix">
											<input type="text" readonly="readonly"  id="imgtalk" autocomplete="off" placeholder="所有状态" value="所有状态" class="el-input__inner form-control ty_select" />
											<!-- <select name="state" class="form-control el-input__inner" id="state">
												<option value="undefined"  <eq name="Think.get.state" value="undefined">selected='selected'</eq> >所有状态</option>
												<option value="1" <eq name="Think.get.state" value="1">selected='selected'</eq>>提款成功</option>
												<option value="0" <eq name="Think.get.state" value="0">selected='selected'</eq>>处理中</option>
												<option value="-1" <eq name="Think.get.state" value="-1">selected='selected'</eq>>提款退回</option>
											</select> --><i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont">&#xe65a;</i>
										</div>
										<div class="el-select-dropdown el-popper" style="display: none; min-width: 128px;">
											<div class="el-scrollbar">
												<div class="el-select-dropdown__wrap el-scrollbar__wrap">
													<ul class="el-scrollbar__view el-select-dropdown__list" name="type"id="type">
														<li class="el-select-dropdown__item <eq name="Think.get.state" value="undefined">selected</eq>" value="undefined">所有状态</li>
														<li class="el-select-dropdown__item <eq name="Think.get.state" value="1">selected</eq>" value="1">提款成功</li>
														<li class="el-select-dropdown__item <eq name="Think.get.state" value="0">selected</eq>" value="0">处理中</li>
														<li class="el-select-dropdown__item <eq name="Think.get.state" value="-1">selected</eq>" value="-1">提款退回</li>

													</ul>
												</div>
												<div class="el-scrollbar__bar is-horizontal">
													<div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
												</div>
												<div class="el-scrollbar__bar is-vertical">
													<div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
							<div style="display:inline-block;"class="el-row" id="atime">
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<span style="color: #828282;font-weight: bold;">时间:</span>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<button onclick="chaxun(1)"type="button" class="el-button el-button--small" >
											<span value="1" class="<if condition="$Think.get.atime eq 1">active</if>">今天</span>
										</button>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<button onclick="chaxun(2)"type="button" class="el-button el-button--small" >
											<span value="2" class="<if condition="$Think.get.atime eq 2">active</if>">昨天</span>
										</button>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<button onclick="chaxun(3)"type="button" class="el-button el-button--small" >
											<span value="3" class="<if condition="$Think.get.atime eq 3">active</if>">七天</span>
										</button>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">

										<span style="color: #828282;font-weight: bold;">类型:</span>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<a href="/tools/_ajax/queryBillRecord"><button type="button" class="el-button el-button--small">
											<span>账户明细</span>
										</button></a>
									</div>
								</div> 
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<a href="/tools/_ajax/queryRechargeRecord"><button type="button" class="el-button el-button--small">
											<span>充值记录</span>
										</button></a>
									</div>
								</div>
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content">
										<a href="/tools/_ajax/queryWithdrawRecord"><button type="button" class="el-button el-button--primary el-button--small">
											<span>提现记录</span>
										</button></a>
									</div>
								</div>
							</div>
						</div>
					</form> 
					<div class="el-table record-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_8_column_58" width="200" />
									<col name="el-table_8_column_59" width="200" />
									<col name="el-table_8_column_60" width="200" />
									<col name="el-table_8_column_61" width="200" />
									<col name="el-table_8_column_62" width="200" />
								</colgroup>
								<thead class="has-gutter">
									<tr class="">
										<th colspan="1" rowspan="1" class="el-table_8_column_58     is-leaf">
											<div class="cell">
												流水号
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_59     is-leaf">
											<div class="cell">
												发起时间
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_60     is-leaf">
											<div class="cell">
												提款金额
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_61     is-leaf">
											<div class="cell">
												手续费
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_62     is-leaf">
											<div class="cell">
												状态
											</div>
										</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_8_column_58" width="100%" />
									<col name="el-table_8_column_59" width="100%" />
									<col name="el-table_8_column_60" width="100%" />
									<col name="el-table_8_column_61" width="100%" />
									<col name="el-table_8_column_62" width="100%" />
								</colgroup>
								<tbody>
									<volist name="mxlist" id="vo">
										<tr class="el-table__row">
											<td rowspan="1" colspan="1" class="el-table_8_column_58">
												<div class="cell">{$vo.trano}</div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_59">
												<div class="cell">{$vo.oddtime|date="m-d H:i:s",###}</div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_60">
												<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.amount}</span></div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_61">
												<div class="cell">{$vo.fee}</div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_62">
												<div class="cell"><if condition="$vo['state'] eq 1">
													<span class="el-tag el-tag--info el-tag--mini">提款成功</span>
													<elseif condition="$vo['state'] eq 0" />
													<span class="el-tag el-tag--info el-tag--mini">
														处理中
													</span>
													<elseif condition="$vo['state'] eq -1" />
													<span class="el-tag el-tag--info el-tag--mini">提款退回</span>
												</if></div>
											</td>
										</tr>
									</volist>
								</tbody>
							</table>
						</div>
						<div class="page">{$pageshow}</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
	</div>
<include file="Public/footer" />
</div>
	<script>
		$(function(){
			var title = $('.el-scrollbar__view').find('.selected').text();
			$('.el-input__inner').val(title);
			if(title == ''){
				$('.el-input__inner').val('所有状态'); 
				$('.addselected').addClass('selected');
			}
		})
		$('#imgtalk').click(function(e){
	    e.stopPropagation();
	    if($('.el-select-dropdown').css("display")=='none'){
	        $('#iconfont').css('transform','rotate(180deg)');
	        $('.el-select-dropdown').slideDown(300);
	    }else{
	        $('#iconfont').css('transform','rotate(0deg)');
	        $('.el-select-dropdown').slideUp(300);
	    }
		})
		$(document).click(function(){
		    $('#iconfont').css('transform','rotate(0deg)');
			$('.el-select-dropdown').hide();
		});
		$('.el-select-dropdown__item').click(function(){
			var atime = $('#atime .active').attr('value');
			var state =  $(this).attr('value');
			var text = $(this).text();
			$('.el-input__inner').val(text);
			var url = "__ROOT__/Account.dealRecord3.atime."+atime+".state."+state;
			window.location.href= url;
		})
		function chaxun(t){
			var state = $('.el-scrollbar__view').find('.selected').attr('value');
			var atime = t;
			var url = "__ROOT__/Account.dealRecord3.atime."+atime+".state."+state;
			window.location.href = url;
		}
	</script>
</body>
</html>
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
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

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
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">个人游戏记录</a></span> 
						<span><a href="/tools/_ajax/queryRechargeRecord" class="">个人充值记录</a></span> 
						<span><a href="/tools/_ajax/queryWithdrawRecord" class="">个人提现记录</a></span>
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
													<input type="text" readonly="readonly"  id="imgtalk" autocomplete="off" placeholder="全部彩种" value="全部彩种" class="el-input__inner form-control ty_select" />
													<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;"class="iconfont" id="iconfont">&#xe65a;</i>
												</div>
												<div class="el-select-dropdown el-popper" style="display: none; min-width: 128px;">
													<div class="el-scrollbar">
														<div class="el-select-dropdown__wrap el-scrollbar__wrap">
															<ul class="el-scrollbar__view el-select-dropdown__list" name="type"id="type">
																<li class="el-select-dropdown__item addselected" value="0">全部彩种</li>
																<volist name="ALLCP" id="cp">
																	<li class="el-select-dropdown__item <eq name="cp[name]" value="$Think.get.name">selected</eq>" value="{$cp[name]}">{$cp[title]}</li>
																</volist>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div style="display: inline-block;"class="el-row" >
										<div  style="display: inline-block;"id="time-box">
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<span style="color: #828282;font-weight: bold;">时间:</span>
												</div>
											</div> 
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun('1',null);" type="button" class="el-button el-button--small" >
														<span value="1" class="<if condition="$Think.get.atime eq 1">active</if>">今天</span>
													</button>
												</div>
											</div> 
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun('2',null);"type="button" class=" el-button el-button--small" >
														<span value="2" class="<if condition="$Think.get.atime eq 2">active</if>">昨天</span>
													</button>
												</div>
											</div> 
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button  onclick="chaxun('3',null);"type="button" class="el-button el-button--small" >
														<span value="3" class="<if condition="$Think.get.atime eq 3">active</if>">七天</span>
													</button>
												</div>
											</div> 
										</div>
										<div  style="display: inline-block;"id="status-box">
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<span style="color: #828282;font-weight: bold;">状态:</span>
												</div>
											</div> 
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun(null,'1');"type="button" class="el-button el-button--small">
														<span value="1" class="<if condition="$Think.get.a_item eq 1">active</if>">全部</span>
													</button>
												</div>
											</div> 
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun(null,'2');"type="button" class="el-button el-button--small">
														<span value="2" class="<if condition="$Think.get.a_item eq 2">active</if>">已中奖</span>
													</button>
												</div>
											</div>
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun(null,'3');"type="button" class="el-button el-button--small">
														<span value="3" class="<if condition="$Think.get.a_item eq 3">active</if>">未中奖</span>
													</button>
												</div>
											</div>
											<div class="el-form-item el-form-item--small">
												<div class="el-form-item__content">
													<button onclick="chaxun(null,'4');"type="button" class="el-button el-button--small">
														<span value="4" class="<if condition="$Think.get.a_item eq 4">active</if>">等待开奖</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form> 
							<div class="el-table record-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
								<div class="el-table__header-wrapper">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" >
										<colgroup>
											<col name="el-table_8_column_58" width="200" />
											<col name="el-table_8_column_59" width="200" />
											<col name="el-table_8_column_60" width="200" />
											<col name="el-table_8_column_61" width="200" />
											<col name="el-table_8_column_62" width="200" />
											<col name="el-table_8_column_63" width="200" />
											<col name="el-table_8_column_64" width="200" />
											<col name="el-table_8_column_65" width="200" />
											<col name="el-table_8_column_66" width="200" />
										</colgroup>
										<thead class="has-gutter">
											<tr class="">
												<th colspan="1" rowspan="1" class="el-table_8_column_58     is-leaf">
													<div class="cell">
														彩种
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_59     is-leaf">
													<div class="cell">
														期号
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_60     is-leaf">
													<div class="cell">
														购买方式
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_61     is-leaf">
													<div class="cell">
														投注内容
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_62     is-leaf">
													<div class="cell">
														投注金额
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_63     is-leaf">
													<div class="cell">
														开奖号码
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_64     is-leaf">
													<div class="cell">
														奖金
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_65     is-leaf">
													<div class="cell">
														状态
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_66     is-leaf">
													<div class="cell">
														投注时间
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
											<col name="el-table_8_column_63" width="100%" />
											<col name="el-table_8_column_64" width="100%" />
											<col name="el-table_8_column_65" width="100%" />
											<col name="el-table_8_column_66" width="100%" />
										</colgroup>
										<tbody>
											<volist name="tzlist" id="vo">
												<tr class="el-table__row">
													<td rowspan="1" colspan="1" class="el-table_8_column_58">
														<div class="cell">{$vo.cptitle}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_59">
														<div class="cell">{$vo.expect}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_60">
														<div class="cell"><if condition="$vo.ishemai eq 1">合买代购<else/>代购</if></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_61 ytzcode">
														<div class="cell"><span class="ytzcodes">{$vo.playtitle}--{$vo.tzcode}</span></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_62">
														<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.amount}</span></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_63">
														<div class="cell">{$vo.opencode}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_64">
														<div class="cell"><span class="el-tag el-tag--info el-tag--mini" <if condition="$vo.okamount neq 0.00">style="color: #dc3b40;"</if>><if condition="$vo.okamount eq 0.00">未中奖<elseif condition="$vo.okamount neq 0.00"/>{$vo.okamount}</if></span></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_65">
														<div class="cell"><if condition="$vo[isdraw] eq 0">
															<span class="el-tag el-tag--info el-tag--mini">未开奖</span>
															<elseif  condition="$vo[isdraw] eq 1" />
															<span class="el-tag el-tag--info el-tag--mini" style="color: #dc3b40;">已中奖</span>
															<elseif  condition="$vo[isdraw] eq -1" />
															<span class="el-tag el-tag--info el-tag--mini">未中奖</span>
															<elseif  condition="$vo[isdraw] eq -2" />
															<span class="el-tag el-tag--info el-tag--mini">已撤单</span>
														</if>
													</div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_8_column_66">
													<div class="cell">{$vo.oddtime|date="m-d H:i:s",###}</div>
												</td>
											</tr>
										</volist>
									</tbody>
								</table>
							</div>
							<div class="page" id="page">{$pageshow}</div>
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
			$('.el-input__inner').val('全部彩种'); 
			$('.addselected').addClass('selected');
		}
	})
	$('.ytzcode').each(function (i){
		if($(this).text().length > 8){
			$(this).find('.ytzcodes').hide();
			$(this).append('查看').css('cursor','pointer');

			$(this).on('click',function () {
				var text = $(this).find('.ytzcodes').text();
				Dialog({
					title: "温馨提示",
					content: text,
					autoClose: 5000
				});
			})
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
	function chaxun(t,s){
		var name = $('.el-scrollbar__view').find('.selected').attr('value');
		if(t){
			var atime = t;
		}else{
			var atime = $('#time-box .active').attr('value');
		}
		if(s){
			var a_item = s;
		}else{
			var a_item = $('#status-box .active').attr('value');
		}
		var url = "/tools/_ajax/getBetRecord/"+name+"/"+atime+"/"+a_item;
		window.location.href = url;
	}
	$('.el-select-dropdown__item').click(function(){
		var name =  $(this).attr('value');
		var atime = $('#time-box .active').attr('value');
		var a_item = $('#status-box .active').attr('value');

		var text = $(this).text();
		$('.el-input__inner').val(text);
		var url = "/tools/_ajax/getBetRecord/"+name+"/"+atime+"/"+a_item;
		window.location.href= url;
	})
	$(document).ready(function() {
		$('#time .time-1').click(function() {
			$(this).siblings().removeClass('el-button--primary');
			$(this).addClass('el-button--primary');
		})
	});
	$(document).ready(function() {
		$('#jk .jk').click(function() {
			$(this).siblings().removeClass('active-jk');
			$(this).addClass('active-jk');
		})
	});
</script>
</body>
</html>
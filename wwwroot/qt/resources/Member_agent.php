<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>代理首页</title>
	<meta name="renderer" content="webkit" />
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<!--爱尚互联-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/iconfont.css" />
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>


	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>

	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/js/jquery.history.js"></script>
	<script type="text/javascript" src="/resources/js2/jquery.zclip.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type="text/javascript" src="/resources/main/index.js"></script>
	<script type="text/javascript" src="/resources/js/member.page.js"></script>
	<script src="/resources/js/laydate/laydate.js" type="text/javascript" ></script>
	<script src="/resources/js/jquery-dateFormat.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js" type="text/javascript"></script>
	<script src="/resources/js/macarons.js" type="text/javascript"></script>
	<script type="text/javascript" src="/resources/main/agent.js"></script>
	<script type="text/javascript" src="/resources/js2/bootstrap.min.js"></script>

	<!--爱尚互联-->

	<script>
		var WebConfigs = {
			webtitle:"{$webconfigs.webtitle}",
			kefuthree:"{$webconfigs.kefuthree}",
			kefuqq:"{$webconfigs.kefuqq}"
		};
	</script>
	<!--爱尚互联-->
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/font-awesome/css/font-awesome.min.css">
	
	<!--爱尚互联-->
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="user-top-to">
		<div class="user-top-to2">
			<div class="sub-container">
				<div class="subPagNav">
					<ul class="navl1">
						<li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li>
						<li class="cur">团队中心</li> 
						<li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
						<li class=""><a href="/activity" style="color: #fff;">系统中心</a></li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul> 
					<div class="navl2">
						<button class="el-button is-active" style="padding: 7px 10px;" onclick="myclick(1);" id="tab1"><span>团队预览</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(2);allUserList();" id="tab2"><span>团队管理</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(3);initAddUser();" id="tab3"><span>团队开户中心</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(4);allUserList(1);" id="tab4"><span>团队在线会员</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(5);initDownUserBetsList();allDownUserBetsList();" id="tab5"><span>团队游戏记录</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(6);initAccountChangeList();accountChange();" id="tab6"><span>团队账变明细</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(7);initGroupDepositList();groupDeposit();" id="tab7"><span>团队存提款</span></button>
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(8);initGroupReportList2();groupReport2();" id="tab8"><span>团队报表记录</span></button> 
						<button class="el-button" style="padding: 7px 10px;" onclick="myclick(9);initCommissionList();Commission();" id="tab9"><span>团队佣金统计</span></button> 
					</div>
				</div> 
				<div class="subPageMain">
					<!--团队预览-->
					<div class="sub-page tab" id="tab1_content" style="display: block">
						<div class="page-container" id="allUserList">
							<div class="el-card box-card is-always-shadow">
								<div class="el-card__body">
									<div>
										<div class="team-info">
											<div class="el-row" style="margin-left: -6px; margin-right: -6px; margin-bottom: 15px;">
												<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
													<div class="el-card box-card is-always-shadow">
														<div class="el-card__body">
															<i aria-hidden="true" class="fa fa-users"></i> 
															<div>团队人数<br /><span way-data="downUserNum.totalnum">0</span> 人 </div>
														</div>
													</div>
												</div> 
												<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
													<div class="el-card box-card is-always-shadow">
														<div class="el-card__body">
															<i aria-hidden="true" class="fa fa-money"></i> 
															<div>团队余额 (不包含自己)<br /><span way-data="downUserNum.totalamount">0.0000 元</span></div>
														</div>
													</div>
												</div>
												<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
													<div class="el-card box-card is-always-shadow">
														<div class="el-card__body">
															<i aria-hidden="true" class="fa fa-user"></i> 
															<div>代理人数<br /><span way-data="downUserNum.proxynum">0</span></div>
														</div>
													</div>
												</div> 
												<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
													<div class="el-card box-card is-always-shadow">
														
														<div class="el-card__body">
															<i aria-hidden="true" class="fa fa-user-o"></i> 
															<div>玩家人数<br /><span way-data="downUserNum.noproxynum">0</span></div>
														</div>
													</div>
												</div> 
											</div> 
										</div>
									</div>
								</div>
							</div> 
							<div class="echarts-container">
								<div class="el-card box-card is-always-shadow">
									<div class="el-card__header">
										<div class="clearfix">
											<form class="el-form el-form--inline">
												<div class="el-form-item" style="margin-bottom: 0px;">
													<div class="el-form-item__content">
														<div role="radiogroup" class="el-radio-group">
															<div class="el-radio-button is-active">
																<span class="el-radio-button__inner" onclick="indexQuickDate(-3);">最近三天</span>
															</div>
															<span class="el-radio-button__inner" onclick="indexQuickDate(-7);">最近七天</span>
															<span class="el-radio-button__inner" onclick="indexQuickDate(-30);">最近一个月</span>
														</div>
													</div>
												</div> 
												<div class="el-form-item" style="margin-bottom: 0px;">
													<div class="el-form-item__content">
														<div class="el-date-editor el-input el-input--prefix el-input--suffix el-date-editor--datetime">
															<input type="text" readonly="true" autocomplete="off" id="indexStartDate" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" class="el-input__inner layriqi" />
															<span class="el-input__prefix"><i style="font-size: 15px;margin-left: 5px;"class="iconfont">&#xe703;</i>
															</span>
															<span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-input__icon"></i>
															</span>
														</span>
													</div> - 
													<div class="el-date-editor el-input el-input--prefix el-input--suffix el-date-editor--datetime">
														<input type="text" readonly="true" autocomplete="off" id="indexEndDate" placeholder="选择结束时间" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" class="el-input__inner layriqi" />
														<span class="el-input__prefix"><i style="font-size: 15px;margin-left: 5px;"class="iconfont">&#xe703;</i>
														</span>
														<span class="el-input__suffix"><span class="el-input__suffix-inner"><i class="el-input__icon"></i>
														</span>
													</span>
												</div>
											</div>
										</div> 
										<div class="el-form-item" style="margin-bottom: 0px;">
											<div class="el-form-item__content">
												<button type="button" class="el-button el-button--primary" onclick="searchStatistics();">
													<span>查询</span>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="el-card__body ctsj" id="indexAgent1"> 
								<div class="team-info">
									<div class="el-row" style="margin-left: -6px; margin-right: -6px; margin-bottom: 15px;">
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-money"></i> 
													<div>充值金额<br /> <span class="czingand">0</span></div>
												</div>
											</div>
										</div> 
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-bank"></i> 
													<div>提现金额<br /><span class="txingand">0 </span></div>
												</div>
											</div>
										</div> 
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-gamepad"></i> 
													<div>投注金额<br /><span class="tzingand">0</span></div>
												</div>
											</div>
										</div> 
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-trophy"></i> 
													<div>派奖金额<br /><span class="pjingand">0</span></div>
												</div>
											</div>
										</div>
									</div> 
									<div class="el-row" style="margin-left: -6px; margin-right: -6px; margin-bottom: 15px;">
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-reply-all"></i> 
													<div>返点<br /><span class="fdingand">0</span></div>
												</div>
											</div>
										</div> 
										<div class="el-col el-col-6" style="padding-left: 6px; padding-right: 6px;">
											<div class="el-card box-card is-always-shadow">
												<div class="el-card__body">
													<i aria-hidden="true" class="fa fa-reply-all"></i> 
													<div>活动/反水<br /><span class="fsingand">0</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
							<div class="el-card box-card is-always-shadow" style="margin-top: 20px;">
								<div class="el-card__header">
									<div class="clearfix">
										<span style="font-size: 22px; font-weight: bold; color: rgb(200, 50, 91);"><i aria-hidden="true" class="fa fa-line-chart"></i> 最近 30 天走势 
									</div>
								</div>
								<div class="el-card__body" id="tubiao" style="height:430px"> 
									<!--团队走势图-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--团队管理-->

			<div class="sub-page tab" id="tab2_content" style="display: none;">
				<div class="page-container member" id="allUserList">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="userSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">创建时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="userSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 7px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="userSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 7px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">余额</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" value="" id="userSearchMinMoney" placeholder="最低金额" class="el-input__inner">
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" value="" id="userSearchMaxMoney" placeholder="最高金额" class="el-input__inner">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="allUserList();">
									<span>查询</span></button>
								</div>
							</div>
						</form>
						<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
							<div class="hidden-columns">
							</div>
							<div class="el-table__header-wrapper">
								<table cellspacing="0" cellpadding="0" border="0" class="el-table__header">
									<colgroup>
										<col name="el-table_1_column_1" width="164">
										<col name="el-table_1_column_2" width="164">
										<col name="el-table_1_column_3" width="164">
										<col name="el-table_1_column_4" width="164">
										<col name="el-table_1_column_5" width="164">
										<col name="el-table_1_column_6" width="164">
										<col name="el-table_1_column_7" width="164">
										<col name="el-table_1_column_8" width="164">
										<col name="el-table_1_column_9" width="164">
										<col name="el-table_1_column_10" width="164">
									</colgroup>
									<thead class="has-gutter">
										<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
									</thead>
								</table>
							</div>
							<div class="el-table__body-wrapper is-scrolling-none">
								<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
									<colgroup>
										<col name="el-table_1_column_1" width="100%">
										<col name="el-table_1_column_2" width="100%">
										<col name="el-table_1_column_3" width="100%">
										<col name="el-table_1_column_4" width="100%">
										<col name="el-table_1_column_5" width="100%">
										<col name="el-table_1_column_6" width="100%">
										<col name="el-table_1_column_7" width="100%">
										<col name="el-table_1_column_8" width="100%">
										<col name="el-table_1_column_9" width="100%">
										<col name="el-table_1_column_10" width="100%">
									</colgroup>
									<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>


			<!--开户中心-->
			<div class="sub-page tab" id="tab3_content" style="display: none;">
				<div class="page-container adduser" id="qh">
					<ul role="menubar" class="subNavbar el-menu--horizontal el-menu">
						<li role="menuitem" tabindex="0" class="el-menu-item is-active" onclick="myclicks(1);" id="tabs1">普通开户</li>
						<li role="menuitem" tabindex="0" class="el-menu-item" onclick="myclicks(2);" id="tabs2">链接开户</li>
						<li role="menuitem" tabindex="0" class="el-menu-item" onclick="signuplinkList();myclicks(3);" id="tabs3" >推广链接管理</li>
					</ul>
					<!--普通开户-->
					<div class="el-row tabs" id="tabs1_content" style="display: block;" style="margin-left: -22.5px; margin-right: -22.5px;">
						<div class="el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;margin-top: 10px;">
							<form class="el-form subMainForm">
								<div style="margin-bottom: 20px; padding: 10px; background-color: rgb(238, 238, 238);">基本设置</div>
								<div class="el-form-item is-required el-form-item--small">
									<label for="user_type" class="el-form-item__label" style="width: 100px;">用户类型</label>
									<div class="el-form-item__content" style="margin-left: 100px;">
									    <div class="el-input el-input--medium el-input--suffix"style="width: 440px;">
											<div class="el-input el-input--small">
												<input type="text" readonly="readonly" id="agent_member" autocomplete="off" placeholder="选择用户类型" value="选择用户类型" types="" class="el-input__inner ty_select" style="background:#fff;cursor: pointer;height: 36px;">
												<i style="color: rgb(162, 162, 162); font-size: 12px; position: absolute; right: 17px; transition: all 0.5s ease-in-out 0s; transform: rotate(0deg);" class="iconfont" id="iconfont5"></i>
											</div>
											<div class="el-select-dropdown el-popper agent_member" style="width: 100%; display: none;">
												<div class="el-scrollbar">
													<div class="el-select-dropdown__wrap el-scrollbar__wrap">
														<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
															<li class="el-select-dropdown__item ascnagent_members" value="1">代理</li>
															<li class="el-select-dropdown__item ascnagent_members" value="2">玩家</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!--div class="el-select el-select--small">
											<div class="el-input el-input--small el-input--suffix" style="width: 70px;display: inline-block;">
												<input id="addUserGeneralAgent" value="1" name="addUserGeneral" class="magic-radio" checked="checked" type="radio">
												<label for="addUserGeneralAgent">代理</label>
											</div>
											<div class="el-input el-input--small el-input--suffix" style="width: 70px;display: inline-block;">
												<input id="addUserGeneralPlayer" value="0" name="addUserGeneral" class="magic-radio" type="radio">
												<label for="addUserGeneralPlayer">玩家</label>
											</div>
										</div-->
									</div>
								</div>
								<div class="el-form-item is-required el-form-item--small">
									<label for="username" class="el-form-item__label" style="width: 100px;">用户名</label>
									<div class="el-form-item__content" style="margin-left: 100px;">
										<div class="el-input el-input--small" style="max-width: 440px;">
											<input value="" class="el-input__inner" way-data="addUser.username" onkeyup="checkAddUsername(this);" maxlength="10" type="text" placeholder="请设置用户名以字母开头，数字/字母/下划线组合的 6-16 个字符">
										</div>
									</div>
								</div>
								<div style="margin-bottom: 20px; padding: 10px; background-color: rgb(238, 238, 238);">返点设置</div>
								<div class="el-form-item subSlider el-form-item--small">
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">时时彩</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatessc"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatessc">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">快三</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatek3"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatek3">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">十一选五</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatex5"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatex5">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">排列三</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatepl3"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatepl3">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">快乐八</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatekl8"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatekl8">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">北京赛车</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatepk10"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatepk10">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">六合彩</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatelhc"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatelhc">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">幸运28/QQ</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addUser.rebatexy28"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatexy28">0</way>）</span>
											</div>
										</div>
									</div>
								</div>
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content" style="margin-left: 100px;" onclick="addUser();">
										<button type="button" class="el-button el-button--primary el-button--small" style="padding: 10px 30px;">
											<span>添 加 账 户</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
							<h3 class="subHelpTit">普通开户注意事项</h3>
							<div class="subHelp no-bottom-border">
								<p>1. 自动注册的会员初始密码及资金密码为<span class="mark">"123456"</span>。</p>
								<p>2. 为提高服务器效率，系统将自动清理注册一个月没有充值，或两个月未登录，并且金额低于10元的账户。</p>
								<p style="color: #f81706;">3. 请新用户登录时设置安全的资金密码。</p>
							</div>
						</div>
					</div>
					<!--链接开户-->
					<div class="el-row tabs" id="tabs2_content" style="display: none;" style="margin-left: -22.5px; margin-right: -22.5px;">
						<div class="el-col el-col-16" style="padding-left: 22.5px; padding-right: 22.5px;margin-top: 10px;">
							<form class="el-form subMainForm">
								<div style="margin-bottom: 20px; padding: 10px; background-color: rgb(238, 238, 238);">基本设置</div>
								<div class="el-form-item is-required el-form-item--small">
									<label for="user_type" class="el-form-item__label" style="width: 100px;">用户类型</label>
									<div class="el-form-item__content" style="margin-left: 100px;">
									    <div class="el-input el-input--medium el-input--suffix"style="width: 440px;">
											<div class="el-input el-input--small">
												<input type="text" readonly="readonly" id="agent_members" autocomplete="off" placeholder="选择用户类型" value="选择用户类型" types="" class="el-input__inner ty_select" style="background:#fff;cursor: pointer;height: 36px;">
												<i style="color: rgb(162, 162, 162); font-size: 12px; position: absolute; right: 17px; transition: all 0.5s ease-in-out 0s; transform: rotate(0deg);" class="iconfont" id="iconfont6"></i>
											</div>
											<div class="el-select-dropdown el-popper agent_members" style="width: 100%; display: none;">
												<div class="el-scrollbar">
													<div class="el-select-dropdown__wrap el-scrollbar__wrap">
														<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
															<li class="el-select-dropdown__item ascnagent_memberss" value="1">代理</li>
															<li class="el-select-dropdown__item ascnagent_memberss" value="2">玩家</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!--div class="el-select el-select--small">
											<div class="el-input el-input--small el-input--suffix" style="width: 70px;display: inline-block;">
												<input id="addSignuplinkAgent" value="1" name="addSignuplink" class="magic-radio" checked="checked" type="radio">
												<label for="addSignuplinkAgent">代理</label>
											</div>
											<div class="el-input el-input--small el-input--suffix" style="width: 70px;display: inline-block;">
												<input id="addSignuplinkPlayer" value="0" name="addSignuplink" class="magic-radio" type="radio">
												<label for="addSignuplinkPlayer">玩家</label>
											</div>
										</div-->
									</div>
								</div>
								<div class="el-form-item is-required el-form-item--small">
									<label for="username" class="el-form-item__label" style="width: 100px;">使用次数</label>
									<div class="el-form-item__content" style="margin-left: 100px;">
										<div class="el-input el-input--small" style="max-width: 440px;">
											<input value="" class="el-input__inner" way-data="addSignuplink.times" onkeyup="replaceAndSetPos(this,event,/[^\d]/g,'');" maxlength="6" type="text" placeholder="请输入1-100的整数">
										</div>
									</div>
								</div>
								<div style="margin-bottom: 20px; padding: 10px; background-color: rgb(238, 238, 238);">返点设置</div>
								<div class="el-form-item subSlider el-form-item--small">
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">时时彩</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatessc"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatessc">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">快三</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatek3"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatek3">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">十一选五</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatex5"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatex5">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">排列三</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatepl3"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatepl3">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">快乐八</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatekl8"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatekl8">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">北京赛车</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatepk10"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatepk10">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">六合彩</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatelhc"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatelhc">0</way>）</span>
											</div>
										</div>
									</div>
									<div class="el-form-item is-required el-form-item--small">
										<label for="password" class="el-form-item__label" style="width: 100px;">幸运28/QQ</label>
										<div class="el-form-item__content" style="margin-left: 100px;">
											<div class="el-input el-input--small el-input--suffix">
												<input class="intcheck el-input__inner" type="text" value="" way-data="addSignuplink.rebatexy28"  maxlength="7" style="max-width: 440px;">
												<span class="tisp" id="addUserGeneralTipsRebate">（可分配范围 0~<way way-data="addUser.maxRebatexy28">0</way>）</span>
											</div>
										</div>
									</div>
								</div>
								
								<div class="el-form-item el-form-item--small">
									<div class="el-form-item__content" style="margin-left: 100px;" onclick="addSignuplink();">
										<button type="button" class="el-button el-button--primary el-button--small" style="padding: 10px 30px;">
											<span> 添 加 链 接 </span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="el-col el-col-8" style="padding-left: 22.5px; padding-right: 22.5px;">
							<h3 class="subHelpTit">普通开户注意事项</h3>
							<div class="subHelp no-bottom-border">
								<p style="color: #f81706;">1. 生成链接不会立即扣减配额，只有用户使用该链接注册成功的时候，才会扣减配额；请确保您的配额充足，配额不足将造成用户注册不成功！</p>
							</div>
						</div>
					</div>

					<!--开户链接-->

					<div class="el-row tabs" id="tabs3_content" style="display: none;">
						<div class="linktable" id="signuplinkList">
							<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
								<div class="el-table__header-wrapper">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
										<colgroup>
											<col name="el-table_12_column_87" width="203">
											<col name="el-table_12_column_88" width="203">
											<col name="el-table_12_column_89" width="203">
											<col name="el-table_12_column_90" width="203">
											<col name="el-table_12_column_91" width="203">
											<col name="el-table_12_column_92" width="203">
										</colgroup>
										<thead class="has-gutter">
											<!--tr class="">
												<th colspan="1" rowspan="1" class="el-table_12_column_87 is-leaf">
													<div class="cell">用户类型</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_12_column_88 is-leaf">
													<div class="cell">总次数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_12_column_89 is-leaf">
													<div class="cell">使用次数</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_12_column_90 is-leaf">
													<div class="cell">使用模版</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_12_column_91 is-leaf">
													<div class="cell">创建时间</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_12_column_92 is-leaf">
													<div class="cell">操作</div>
												</th>
											</tr-->
										</thead>
									</table>
								</div>
								<div class="el-table__body-wrapper is-scrolling-none">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
										<colgroup>
											<col name="el-table_12_column_87" width="100%">
											<col name="el-table_12_column_88" width="100%">
											<col name="el-table_12_column_89" width="100%">
											<col name="el-table_12_column_90" width="100%">
											<col name="el-table_12_column_91" width="100%">
											<col name="el-table_12_column_92" width="100%">
										</colgroup>
										<tbody>
											<tr class="el-table__row">
												<td rowspan="1" colspan="1" class="el-table_1_column_1">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_2">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_3">
													<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_5">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_6">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_7">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_8">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_9">
													<div class="cell"></div>
												</td>
												<td rowspan="1" colspan="1" class="el-table_1_column_10">
													<div class="cell"></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="member-pag paging"></div>
						</div>
						<!--开户链接结束-->
					</div>
				</div>
			</div>

			<!--在线用户-->
			<div class="sub-page tab" id="tab4_content" style="display: none;">
				<div class="page-container member" id="allOnlineUserList">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="userOnlineSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">创建时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="userOnlineSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 7px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="userOnlineSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 7px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">余额</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" value="" id="userOnlineSearchMinMoney" placeholder="最低金额" class="el-input__inner">
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" value="" id="userOnlineSearchMaxMoney" placeholder="最高金额" class="el-input__inner">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="allUserList(1);">
									<span>查询</span>
								</button>
							</div>
						</div>
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
									<col name="el-table_1_column_3" width="164">
									<col name="el-table_1_column_4" width="164">
									<col name="el-table_1_column_5" width="164">
									<col name="el-table_1_column_6" width="164">
									<col name="el-table_1_column_7" width="164">
									<col name="el-table_1_column_8" width="164">
									<col name="el-table_1_column_9" width="164">
									<col name="el-table_1_column_10" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
									<col name="el-table_1_column_3" width="100%">
									<col name="el-table_1_column_4" width="100%">
									<col name="el-table_1_column_5" width="100%">
									<col name="el-table_1_column_6" width="100%">
									<col name="el-table_1_column_7" width="100%">
									<col name="el-table_1_column_8" width="100%">
									<col name="el-table_1_column_9" width="100%">
									<col name="el-table_1_column_10" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
			<!--团队游戏记录-->


			<div class="sub-page tab" id="tab5_content" style="display: none;">
				<div class="page-container member" id="downUserBetsList">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="downUserBetsSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">下单时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="downUserBetsSearchStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="downUserBetsSearchEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">订单号</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="userSearchLoginname" placeholder="订单号" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">期号</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="userSearchLoginname" placeholder="期号" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<!--label class="el-form-item__label">彩票状态</label-->
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 128px;">
									<input type="text" readonly="readonly" id="downUserBetsSearchState" autocomplete="off" value="全部" types="" class="el-input__inner form-control ty_select">
									<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont"></i>
								</div>
							</div>
							<div class="el-select-dropdown el-popper tdyouxi" style="min-width: 128px; display: none;">
								<div class="el-scrollbar">
									<div class="el-select-dropdown__wrap el-scrollbar__wrap">
										<ul class="el-scrollbar__view el-select-dropdown__list">
											<li class="el-select-dropdown__item ascnyouxi" value="">全部</li>
											<li class="el-select-dropdown__item ascnyouxi" value="0">未开奖</li>
											<li class="el-select-dropdown__item ascnyouxi" value="-1">未中奖</li>
											<li class="el-select-dropdown__item ascnyouxi" value="1">已中奖</li>
											<li class="el-select-dropdown__item ascnyouxi" value="-2">已撤单</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 128px;">
									<input type="text" readonly="readonly" id="downUserBetsSearchShortName" autocomplete="off" value="全部" types="" class="el-input__inner form-control ty_select">
									<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont1"></i>
								</div>
							</div>
							<div class="el-select-dropdown el-popper tdyouxilottery" style="min-width: 128px; display: none;">
								<div class="el-scrollbar">
									<div class="el-select-dropdown__wrap el-scrollbar__wrap">
										<ul class="el-scrollbar__view el-select-dropdown__list" id="downUserBetsSearchShortNames">
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="allDownUserBetsList();">
									<span>查询</span>
								</button>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<p class="mark" style="text-align: center;font-size: 16px;color: #f33d3d;">
								下注统计
								大：<b way-data="allDownUserBetsList.k3hzbig">0.00</b>
								小：<b way-data="allDownUserBetsList.k3hzsmall">0.00</b>
								单：<b way-data="allDownUserBetsList.k3hzodd">0.00</b>
								双：<b way-data="allDownUserBetsList.k3hzeven">0.00</b>
							</p>
						</div>
						
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
									<col name="el-table_1_column_3" width="164">
									<col name="el-table_1_column_4" width="164">
									<col name="el-table_1_column_5" width="164">
									<col name="el-table_1_column_6" width="164">
									<col name="el-table_1_column_7" width="164">
									<col name="el-table_1_column_8" width="164">
									<col name="el-table_1_column_9" width="164">
									<col name="el-table_1_column_10" width="164">
									<col name="el-table_1_column_11" width="164">
									<col name="el-table_1_column_12" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
									<col name="el-table_1_column_3" width="100%">
									<col name="el-table_1_column_4" width="100%">
									<col name="el-table_1_column_5" width="100%">
									<col name="el-table_1_column_6" width="100%">
									<col name="el-table_1_column_7" width="100%">
									<col name="el-table_1_column_8" width="100%">
									<col name="el-table_1_column_9" width="100%">
									<col name="el-table_1_column_10" width="100%">
									<col name="el-table_1_column_11" width="100%">
									<col name="el-table_1_column_12" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
			<!--团队账变明细-->
			<div class="sub-page tab" id="tab6_content" style="display: none;">
				<div class="page-container member" id="accountChange">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="accountChangeSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="accountChangeStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner starTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="accountChangeEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner endTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">账变类型</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<select id="sourceModule" class="el-input__inner">
										<option value="">全部</option>
										<?php $fuddetailtypes = C('fuddetailtypes');?>
										<foreach name="fuddetailtypes" item="ft" key="fk">
											<option value="{$fk}" <if condition="$fk eq $type">selected</if>>{$ft}</option>
										</foreach>
									</select>
								</div>
							</div>
						</div-->
						<div class="el-form-item el-form-item--small">
							<!--label class="el-form-item__label">账变类型</label-->
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 128px;">
									<input type="text" readonly="readonly" id="sourceModule" autocomplete="off" placeholder="全部" value="全部" types="" class="el-input__inner form-control ty_select">
									<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont2"></i>
								</div>
							</div>
							<div class="el-select-dropdown el-popper zhangbian" style="min-width: 128px; display: none;">
								<div class="el-scrollbar">
									<div class="el-select-dropdown__wrap el-scrollbar__wrap">
										<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
											<li class="el-select-dropdown__item ascnzhangbian" value="">全部</li>
											<!--?php $fuddetailtypes = C('fuddetailtypes');?>
											<foreach name="fuddetailtypes" item="ft" key="fk">
											<li class="el-select-dropdown__item ascnzhangbian" value="{$fk}">{$ft}</li>
											</foreach-->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="accountChange();">
									<span>查询</span>
								</button>
							</div>
						</div>
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
									<col name="el-table_1_column_3" width="164">
									<col name="el-table_1_column_4" width="164">
									<col name="el-table_1_column_5" width="164">
									<col name="el-table_1_column_6" width="164">
									<col name="el-table_1_column_7" width="164">
									<col name="el-table_1_column_8" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
									<col name="el-table_1_column_3" width="100%">
									<col name="el-table_1_column_4" width="100%">
									<col name="el-table_1_column_5" width="100%">
									<col name="el-table_1_column_6" width="100%">
									<col name="el-table_1_column_7" width="100%">
									<col name="el-table_1_column_8" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
			<!--团队存提款-->
			<div class="sub-page tab" id="tab7_content" style="display: none;">
				<div class="page-container member" id="groupDeposit">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="groupDepositSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupDepositStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner starTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupDepositEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner endTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">订单号</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="groupDepositSearchBillNo" placeholder="订单号" >
								</div>
							</div>
						</div>
						<!--div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询类型</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<select id="groupDepositType" class="el-input__inner">
										<option value="0">充值</option>
										<option value="1">提款</option>
									</select>
								</div>
							</div>
						</div-->
						<div class="el-form-item el-form-item--small">
							<!--label class="el-form-item__label">查询类型</label-->
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 128px;">
									<input type="text" readonly="readonly" id="groupDepositType" autocomplete="off" placeholder="充值" value="充值" types="" class="el-input__inner form-control ty_select">
									<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont3"></i>
								</div>
							</div>
							<div class="el-select-dropdown el-popper chongzhi" style="min-width: 128px; display: none;">
								<div class="el-scrollbar">
									<div class="el-select-dropdown__wrap el-scrollbar__wrap">
										<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
											<li class="el-select-dropdown__item ascnchongzhi" value="0">充值</li>
											<li class="el-select-dropdown__item ascnchongzhi" value="1">提款</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询状态</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<select id="groupDepositState" class="el-input__inner">
										<option value="">全部</option>
										<option value="0">正在处理</option>
										<option value="1">审核通过</option>
										<option value="-1">取消申请</option>
									</select>
								</div>
							</div>
						</div-->
						<div class="el-form-item el-form-item--small">
							<!--label class="el-form-item__label">查询类型</label-->
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 128px;">
									<input type="text" readonly="readonly" id="groupDepositState" autocomplete="off" placeholder="全部" value="全部" types="" class="el-input__inner form-control ty_select">
									<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;" class="iconfont" id="iconfont4"></i>
								</div>
							</div>
							<div class="el-select-dropdown el-popper chongzhis" style="min-width: 128px; display: none;">
								<div class="el-scrollbar">
									<div class="el-select-dropdown__wrap el-scrollbar__wrap">
										<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type">
											<li class="el-select-dropdown__item ascnchongzhis" value="">全部</li>
											<li class="el-select-dropdown__item ascnchongzhis" value="0">正在处理</li>
											<li class="el-select-dropdown__item ascnchongzhis" value="1">审核通过</li>
											<li class="el-select-dropdown__item ascnchongzhis" value="-1">取消申请</li>
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
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="groupDeposit();">
									<span>查询</span>
								</button>
							</div>
						</div>
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
									<col name="el-table_1_column_3" width="164">
									<col name="el-table_1_column_4" width="164">
									<col name="el-table_1_column_5" width="164">
									<col name="el-table_1_column_6" width="164">
									<col name="el-table_1_column_7" width="164">
									<col name="el-table_1_column_8" width="164">
									<col name="el-table_1_column_9" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
									<col name="el-table_1_column_3" width="100%">
									<col name="el-table_1_column_4" width="100%">
									<col name="el-table_1_column_5" width="100%">
									<col name="el-table_1_column_6" width="100%">
									<col name="el-table_1_column_7" width="100%">
									<col name="el-table_1_column_8" width="100%">
									<col name="el-table_1_column_9" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
			<!--团队报表记录-->
			<div class="sub-page tab" id="tab8_content" style="display: none;">
				<div class="page-container member" id="groupReport">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="groupReportSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupReportStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner starTime">
												<i style="font-size: 15px;position: absolute;right: 12px;color: #c5c5c5;"class="iconfont">&#xe703;</i>

											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupReportEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner endTime">
												<i style="font-size: 15px;position: absolute;right: 12px;color: #c5c5c5;"class="iconfont">&#xe703;</i>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="groupReport2();">
									<span>查询</span>
								</button>
							</div>
						</div>
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
									<col name="el-table_1_column_3" width="164">
									<col name="el-table_1_column_4" width="164">
									<col name="el-table_1_column_5" width="164">
									<col name="el-table_1_column_6" width="164">
									<col name="el-table_1_column_7" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
									<col name="el-table_1_column_3" width="100%">
									<col name="el-table_1_column_4" width="100%">
									<col name="el-table_1_column_5" width="100%">
									<col name="el-table_1_column_6" width="100%">
									<col name="el-table_1_column_7" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
			<!--团队佣金统计-->
			<div class="sub-page tab" id="tab9_content" style="display: none;">
				<div class="page-container member" id="groupCommission">
					<form class="el-form el-form--inline">
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">用户名</label>
							<div class="el-form-item__content">
								<div class="el-input el-input--small" style="width: 110px;">
									<input class="in-tx-1 el-input__inner" type="text" value="" id="groupCommissionSearchLoginname" placeholder="用户名" >
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<label class="el-form-item__label">查询时间</label>
							<div class="el-form-item__content">
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupCommissionStartTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择开始时间" readonly="true" class="el-input__inner starTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
								<div class="line el-col el-col-2" style="text-align: center;">-</div>
								<div class="el-col el-col-11">
									<div class="el-form-item el-form-item--small">
										<div class="el-form-item__content">
											<div class="el-input el-input--small" style="width: 120px;">
												<input type="text" id="groupCommissionEndTime" onclick="laydate({format:'YYYY-MM-DD',isclear:false});" placeholder="选择结束时间" readonly="true" class="el-input__inner endTime">
												<i style="font-size: 15px;position: absolute;right: 13px;color: #c5c5c5;"class="iconfont">&#xe703;</i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="el-form-item el-form-item--small">
							<div class="el-form-item__content">
								<button type="button" class="el-button el-button--primary el-button--small" onclick="Commission();">
									<span>查询</span>
								</button>
							</div>
						</div>
					</form>
					<div class="el-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="hidden-columns">
						</div>
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="164">
									<col name="el-table_1_column_2" width="164">
								</colgroup>
								<thead class="has-gutter">
									<!--tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr-->
								</thead>
							</table>
						</div>
						<div class="el-table__body-wrapper is-scrolling-none">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
								<colgroup>
									<col name="el-table_1_column_1" width="100%">
									<col name="el-table_1_column_2" width="100%">
								</colgroup>
								<tbody>
									<!--tr class="el-table__row">
										<td rowspan="1" colspan="1" class="el-table_1_column_1">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_2">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_3">
											<div class="cell"><span class="el-table_1_column_4 el-tag--mini"></span></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_5">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_6">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_7">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_8">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_9">
											<div class="cell"></div>
										</td>
										<td rowspan="1" colspan="1" class="el-table_1_column_10">
											<div class="cell"></div>
										</td>
									</tr-->
								</tbody>
							</table>
						</div>
					</div>
					<div class="member-pag paging"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<include file="Public/footer" />
</div>

<!--爱尚互联-->



<script>
	function dlsm(){
		Dialog({
			title: "代理说明",
			width: 1100,
			iframeContent: {
				src: "/dlsm",
				height: 800
			},
			showButton: false
		});
	}
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
<script type="text/javascript">
	var myclicks = function(v) {
		var divs = document.getElementsByClassName("tabs");
		for (var i = 0; i < divs.length; i++) {
			var divv = divs[i];
			if (divv == document.getElementById("tabs" + v + "_content")) {
				divv.style.display = "block";
			} else {
				divv.style.display = "none";
			}
		}
	}
</script>
<script>
	$(document).ready(function() {
		$('#qh .el-menu-item').click(function() {
			$(this).siblings().removeClass('is-active');
			$(this).addClass('is-active');
		})
	});
	$(document).ready(function() {
		$('.el-button').click(function() {
			$(this).siblings().removeClass('is-active');
			$(this).addClass('is-active');
		})
	});
</script>
<script>
	$(document).on('click',".showcode",function(){
		console.log("爱尚互联");
		var text = $(this).attr('data-info');
		Dialog({
			title: "游戏记录",
			content: text,
			autoClose: 5000
		});
	});
</script>
<script>
	$(function(){
		$('#downUserBetsSearchState').attr('types','');
		$('#downUserBetsSearchShortName').attr('types','');
		$('#sourceModule').attr('types','');
		$('#groupDepositType').attr('types','');
		$('#groupDepositState').attr('types','');
	})
	$('#downUserBetsSearchState').click(function(e){
		e.stopPropagation();
		if($('.tdyouxi').css("display")=='none'){
			$('#iconfont').css('transform','rotate(180deg)');
			$('.tdyouxi').slideDown(300);
		}else{
			$('#iconfont').css('transform','rotate(0deg)');
			$('.tdyouxi').slideUp(300);
		}
	})
	$(document).click(function(){
		$('#iconfont').css('transform','rotate(0deg)');
		$('.tdyouxi').hide();
		$('#iconfont1').css('transform','rotate(0deg)');
		$('.tdyouxilottery').hide();
		$('#iconfont2').css('transform','rotate(0deg)');
		$('.zhangbian').hide();
		$('#iconfont3').css('transform','rotate(0deg)');
		$('.chongzhi').hide();
		$('#iconfont4').css('transform','rotate(0deg)');
		$('.chongzhis').hide();
		$('#iconfont5').css('transform','rotate(0deg)');
		$('.agent_member').hide();
		$('#iconfont6').css('transform','rotate(0deg)');
		$('.agent_members').hide();
		
	});
	$('.ascnyouxi').click(function(){
		var type = $(this).attr('value');
		$('#downUserBetsSearchState').attr('types',type);
		var text = $(this).text();
		$('#downUserBetsSearchState').val(text);
	})
	$('#downUserBetsSearchShortName').click(function(e){
		e.stopPropagation();
		if($('.tdyouxilottery').css("display")=='none'){
			$('#iconfont1').css('transform','rotate(180deg)');
			$('.tdyouxilottery').slideDown(300);
		}else{
			$('#iconfont1').css('transform','rotate(0deg)');
			$('.tdyouxilottery').slideUp(300);
		}
	})
	$('#sourceModule').click(function(e){
	    e.stopPropagation();
		if($('.zhangbian').css("display")=='none'){
			$('#iconfont2').css('transform','rotate(180deg)');
			$('.zhangbian').slideDown(300);
		}else{
			$('#iconfont2').css('transform','rotate(0deg)');
			$('.zhangbian').slideUp(300);
		}
	})
	$('.ascnzhangbian').click(function(){
		var type = $(this).attr('value');
		$('#sourceModule').attr('types',type);
		var text = $(this).text();
		$('#sourceModule').val(text);
	})
	$('#groupDepositType').click(function(e){
	    e.stopPropagation();
		if($('.chongzhi').css("display")=='none'){
			$('#iconfont3').css('transform','rotate(180deg)');
			$('.chongzhi').slideDown(300);
		}else{
			$('#iconfont3').css('transform','rotate(0deg)');
			$('.chongzhi').slideUp(300);
		}
	})
	$('.ascnchongzhi').click(function(){
		var type = $(this).attr('value');
		$('#groupDepositType').attr('types',type);
		var text = $(this).text();
		$('#groupDepositType').val(text);
	})
	$('#groupDepositState').click(function(e){
	    e.stopPropagation();
		if($('.chongzhis').css("display")=='none'){
			$('#iconfont4').css('transform','rotate(180deg)');
			$('.chongzhis').slideDown(300);
		}else{
			$('#iconfont4').css('transform','rotate(0deg)');
			$('.chongzhis').slideUp(300);
		}
	})
	$('.ascnchongzhis').click(function(){
		var type = $(this).attr('value');
		$('#groupDepositState').attr('types',type);
		var text = $(this).text();
		$('#groupDepositState').val(text);
	})
	$('#agent_member').click(function(e){
	    e.stopPropagation();
		if($('.agent_member').css("display")=='none'){
			$('#iconfont5').css('transform','rotate(180deg)');
			$('.agent_member').slideDown(300);
		}else{
			$('#iconfont5').css('transform','rotate(0deg)');
			$('.agent_member').slideUp(300);
		}
	})
	$('.ascnagent_members').click(function(){
		var type = $(this).attr('value');
		$('#agent_member').attr('types',type);
		var text = $(this).text();
		$('#agent_member').val(text);
	})
	$('#agent_members').click(function(e){
	    e.stopPropagation();
		if($('.agent_members').css("display")=='none'){
			$('#iconfont6').css('transform','rotate(180deg)');
			$('.agent_members').slideDown(300);
		}else{
			$('#iconfont6').css('transform','rotate(0deg)');
			$('.agent_members').slideUp(300);
		}
	})
	$('.ascnagent_memberss').click(function(){
		var type = $(this).attr('value');
		$('#agent_members').attr('types',type);
		var text = $(this).text();
		$('#agent_members').val(text);
	})
</script>
</body>
</html>
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
						<li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li> 
						<if condition="$userinfo.proxy eq '1'">
							<li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
						</if>
						<li class=""><a href="/payment/ebankPay" style="color: #fff;">财务中心</a></li> 
						<li class="cur">系统中心</li>
						<li class=""><a href="/memberCenter/yeb" style="color: #fff;">余额宝系统</a></li>
					</ul> 
					<div class="navl2">
						<span><a href="/activity" class="">活动中心</a></span> 
						<span><a href="{:GetVar('kefuthree')}" class="">客服中心</a></span> 
						<span><a href="/memberCenter/Notice" class="">公告中心</a></span> 
						<span><a href="#/user/wallet" class="">消息中心</a></span> 
						<span><a href="/byhelp" class="">帮助中心</a></span> 
						<span><a href="#/user/wallet" class="">下载中心</a></span> 
						<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">登录记录</a></span> 
					</div>
				</div>
				<div class="subPageMain">
					<div class="sub-page">
						<div class="page-container">
							<div class="el-table record-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
								<div class="el-table__header-wrapper">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
										<colgroup>
											<col name="el-table_8_column_57" width="100%" />
											<col name="el-table_8_column_58" width="100%" />
											<col name="el-table_8_column_59" width="100%" />
											<col name="el-table_8_column_60" width="100%" />
											<col name="el-table_8_column_61" width="100%" />
											<col name="el-table_8_column_62" width="100%" />
										</colgroup>
										<thead class="has-gutter">
											<tr class="">
												<th colspan="1" rowspan="1" class="el-table_8_column_57     is-leaf">
													<div class="cell">
														用户名
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_58     is-leaf">
													<div class="cell">
														类型
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_59     is-leaf">
													<div class="cell">
														状态
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_60     is-leaf">
													<div class="cell">
														操作IP
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_61     is-leaf">
													<div class="cell">
														IP地址
													</div>
												</th>
												<th colspan="1" rowspan="1" class="el-table_8_column_62     is-leaf">
													<div class="cell">
														时间
													</div>
												</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="el-table__body-wrapper is-scrolling-none">
									<table cellspacing="0" cellpadding="0" border="0" class="el-table__body" style="width: 100%;">
										<colgroup>
											<col name="el-table_8_column_57" width="100%" />
											<col name="el-table_8_column_58" width="100%" />
											<col name="el-table_8_column_59" width="100%" />
											<col name="el-table_8_column_60" width="100%" />
											<col name="el-table_8_column_61" width="100%" />
											<col name="el-table_8_column_62" width="100%" />
										</colgroup>
										<tbody>
											<volist name="memberlog" id="vo">
												<tr class="el-table__row">
													<td rowspan="1" colspan="1" class="el-table_8_column_57">
														<div class="cell">{$vo.username}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_58">
														<div class="cell"><if condition = "$vo.type eq login">用户登陆<elseif condition = "$vo.type eq withdraw"/>账户提款</if></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_59">
														<div class="cell">{$vo.info}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_60">
														<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.ip}</span></div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_61">
														<div class="cell">{$vo.iparea}</div>
													</td>
													<td rowspan="1" colspan="1" class="el-table_8_column_62">
														<div class="cell">{$vo.time|date="m-d H:i:s",###}</div>
													</td>
												</tr>
											</volist>
										</tbody>
									</table>
								</div>
								<div class="page" style="text-align: center;margin: 10px;">{$pageshow}</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<include file="Public/footer" />
	</div>
</body>
</html>
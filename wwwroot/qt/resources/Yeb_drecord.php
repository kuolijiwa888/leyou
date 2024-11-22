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
	<link rel="stylesheet" type="text/css" href="__CSS__/artDialog.css" />
	<script type="text/javascript" src="__JS__/artDialog.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>

	<script type="text/javascript" src="__ROOT__/resources/js/way.min.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/main/common.js"></script>
	<script src="__JS2__/require.js" data-main="__JS2__/homePage"></script>
	<script>var ISLOGIN = "{$userinfo.id}";</script>
	<!--爱尚互联-->
</head>
<body>
    <div class="user-top-to">
		<div class="user-top-to2">
	<div class="sub-container">
		<div class="subPagNav">
			<ul class="navl1">
				<li class=""><a href="/memberCenter/personalInfo" style="color: #fff;">个人中心</a></li> 
				<if condition="$userinfo.proxy eq '1'">
					<li class=""><a href="/memberCenter/agentReport" style="color: #fff;">团队中心</a></li>
				</if>
				<li class="">财务中心</li> 
				<li class="">系统中心</li>
				<li class="cur">余额宝系统</li>
			</ul> 
			<div class="navl2">
				<span><a href="/memberCenter/yeb" class="">余额宝管理</a></span> 
				<span><a href="{:U('Yeb/hrecord')}" class="">余额宝活期记录</a></span> 
				<span><a href="javascript:vodi(0)" class="router-link-exact-active router-link-active">余额宝定期记录</a></span> 
				<span><a href="{:U('Yeb/syrecord')}" class="">余额宝收益记录</a></span> 
				<span><a href="{:U('Yeb/crecord')}" class="">活期存取记录</a></span> 
				<span><a href="{:U('Yeb/qrecord')}" class="">定期存取记录</a></span>
			</div>
		</div> 
		<div class="subPageMain">
			<div class="sub-page">
				<div class="page-container">
					<div class="el-table record-table el-table--fit el-table--striped el-table--border el-table--enable-row-hover el-table--small" style="width: auto;">
						<div class="el-table__header-wrapper">
							<table cellspacing="0" cellpadding="0" border="0" class="el-table__header" style="width: 100%;">
								<colgroup>
									<col name="el-table_8_column_58" width="194px;" />
									<col name="el-table_8_column_59" width="194px;" />
									<col name="el-table_8_column_60" width="194px;" />
									<col name="el-table_8_column_61" width="194px;" />
									<col name="el-table_8_column_62" width="194px;" />
									<col name="el-table_8_column_63" width="194px;" />
								</colgroup>
								<thead class="has-gutter">
									<tr class="">
										<th colspan="1" rowspan="1" class="el-table_8_column_58     is-leaf">
											<div class="cell">
												订单号
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_59     is-leaf">
											<div class="cell">
												名称
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_60     is-leaf">
											<div class="cell">
												转入金额
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_61     is-leaf">
											<div class="cell">
												转出金额
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_62     is-leaf">
											<div class="cell">
												状态
											</div>
										</th>
										<th colspan="1" rowspan="1" class="el-table_8_column_63     is-leaf">
											<div class="cell">
												转入时间
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
								</colgroup>
								<tbody>
									<volist name="tzlist" id="vo">
										<tr class="el-table__row">
											<td rowspan="1" colspan="1" class="el-table_8_column_58">
												<div class="cell">{$vo.trano}</div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_59">
												<div class="cell">{$vo.fname}</div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_60">
												<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.money}</span></div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_61">
												<div class="cell"><span class="el-tag el-tag--info el-tag--mini">{$vo.qmoney}</span></div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_62">
												<div class="cell"><span class="el-tag el-tag--info el-tag--mini"><if condition="$vo[state] eq 0">收息结束<elseif  condition="$vo[state] eq 1" />存入收息</if></span></div>
											</td>
											<td rowspan="1" colspan="1" class="el-table_8_column_63">
												<div class="cell">{$vo.addtime|date="Y-m-d H:i:s",###}</div>
											</td>
										</tr>
									</volist>
								</tbody>
							</table>
						</div>
						<div class="page">{$pageshow}</div>
				<!--div class="block" style="text-align: right; margin-top: 10px;">
					<div class="el-pagination is-background"><span class="el-pagination__total">共 1 条</span>
						<button type="button" disabled="disabled" class="btn-prev">
							<span>上一页</span>
						</button>
						<ul class="el-pager">
							<li class="number active">1</li>
						</ul>
						<button type="button" disabled="disabled" class="btn-next">
							<span>下一页</span>
						</button>
					</div>
				</div-->
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
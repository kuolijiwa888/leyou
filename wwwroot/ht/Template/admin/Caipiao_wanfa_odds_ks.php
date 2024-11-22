<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>赔率快速修改</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
	<style>
		/** 数据表格中的select尺寸调整 */
		.layui-table-view .layui-table-cell .layui-select-title .layui-input {
			height: 28px;
			line-height: 28px;
		}

		.layui-table-view [lay-size="lg"] .layui-table-cell .layui-select-title .layui-input {
			height: 40px;
			line-height: 40px;
		}

		.layui-table-view [lay-size="lg"] .layui-table-cell .layui-select-title .layui-input {
			height: 40px;
			line-height: 40px;
		}

		.layui-table-view [lay-size="sm"] .layui-table-cell .layui-select-title .layui-input {
			height: 20px;
			line-height: 20px;
		}

		.layui-table-view [lay-size="sm"] .layui-table-cell .layui-btn-xs {
			height: 18px;
			line-height: 18px;
		}
		u{
			text-decoration: none;
		}
		.layui-form.layui-border-box.layui-table-view{
			margin-top: 0;
		}
	</style>
</head>
<body onscroll="layui.admin.hideFixedEl();">
	<!-- 正文开始 -->
	<div class="layui-fluid">
		<div class="layui-card">
			<div class="layui-card-body">
				<!-- 表格工具栏 -->
				<div class="page-container">
					<!-- 表格工具栏 -->
					<div class="layui-tab">
						<ul class="layui-tab-title">
							<li {:$typeid=='k3'?'class="layui-this"':''}><a href="?typeid=k3">快三</a></li>
							<li {:$typeid=='ssc'?'class="layui-this"':''}><a href="?typeid=ssc">时时彩</a></li>
							<li {:$typeid=='pk10'?'class="layui-this"':''}><a href="?typeid=pk10">PK10</a></li>
							<li {:$typeid=='keno'?'class="layui-this"':''}><a href="?typeid=keno">快乐彩</a></li>
							<li {:$typeid=='dpc'?'class="layui-this"':''}><a href="?typeid=dpc">低频彩</a></li>
							<li {:$typeid=='lhc'?'class="layui-this"':''}><a href="?typeid=lhc">六合彩</a></li>
							<li {:$typeid=='xy28'?'class="layui-this"':''}><a href="?typeid=xy28">幸运28</a></li>
						</ul>
						<div class="layui-tab-content">
							<div class="layui-tab-item layui-show">
								<div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-1" lay-id="tbBasicTable" style=" ">
									<div class="layui-table-box">
										<div class="layui-table-header">
											<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
												<colgroup>
													<col name="laytable-cell-1-0-0" width="25%" />
													<col name="laytable-cell-1-0-1" width="25%" />
													<col name="laytable-cell-1-0-2" width="25%" />
													<col name="laytable-cell-1-0-3" width="25%" />
												</colgroup>
												<thead>
													<tr>
														<th data-field="1" data-key="1-0-0" class="">
															<div class="layui-table-cell laytable-cell-1-0-0" align="center">
																<span>玩法</span>
															</div>
														</th>
														<th data-field="2" data-key="1-0-1" class="">
															<div class="layui-table-cell laytable-cell-1-0-1" align="center">
																<span>max</span>
															</div>
														</th>
														<th data-field="3" data-key="1-0-2" class="">
															<div class="layui-table-cell laytable-cell-1-0-2" align="center">
																<span>min</span>
															</div>
														</th>
														<th data-field="3" data-key="1-0-3" class="">
															<div class="layui-table-cell laytable-cell-1-0-3" align="center">
																<span>操作</span>
															</div>
														</th>
													</tr>
												</thead>
											</table>
										</div>
										
										<div class="layui-table-body layui-table-main">
											<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
												<colgroup>
													<col name="laytable-cell-1-0-0" width="25%" />
													<col name="laytable-cell-1-0-1" width="25%" />
													<col name="laytable-cell-1-0-2" width="25%" />
													<col name="laytable-cell-1-0-3" width="25%" />
												</colgroup>
												{volist name="wanfa" id="vo"}
												<form action="?typeid={$typeid}" method="post">
													<tbody>
														{volist name="vo['list']" id="item"}
														{php}
														$_item = $$item['playid'];
														sort($odds[$item['playid']]);
														{/php}
														<tr data-index="0" class="">
															<td data-field="1" data-key="1-0-0" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-0">{$item.title}</div>
															</td>
															<td data-field="2" data-key="1-0-1" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-1">
																	<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="odds[{$item.playid}][]" value="{:end($odds[$item['playid']])}">
																</div>
															</td>
															<td data-field="3" data-key="1-0-2" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-2">
																	<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="odds[{$item.playid}][]" value="{$odds[$item['playid']]['0']}">
																</div>
															</td>
															<td data-field="4" data-key="1-0-3" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-3"> 
																	<button style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs">保存</button> 
																</div>
															</td>
														</tr>
														{/volist}
													</tbody>
												</form>
												{/volist}
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="layui-tab-item">
								<div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-1" lay-id="tbBasicTable" style=" ">
									<div class="layui-table-box">
										<div class="layui-table-header">
											<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
												<colgroup>
													<col name="laytable-cell-1-0-0" width="474px" />
													<col name="laytable-cell-1-0-1" width="474px" />
													<col name="laytable-cell-1-0-2" width="474px" />
													<col name="laytable-cell-1-0-3" width="474px" />
												</colgroup>
												<thead>
													<tr>
														<th data-field="1" data-key="1-0-0" class="">
															<div class="layui-table-cell laytable-cell-1-0-0" align="center">
																<span>玩法</span>
															</div>
														</th>
														<th data-field="2" data-key="1-0-1" class="">
															<div class="layui-table-cell laytable-cell-1-0-1" align="center">
																<span>max</span>
															</div>
														</th>
														<th data-field="3" data-key="1-0-2" class="">
															<div class="layui-table-cell laytable-cell-1-0-2" align="center">
																<span>min</span>
															</div>
														</th>
														<th data-field="3" data-key="1-0-3" class="">
															<div class="layui-table-cell laytable-cell-1-0-3" align="center">
																<span>操作</span>
															</div>
														</th>
													</tr>
												</thead>
											</table>
										</div>

										<div class="layui-table-body layui-table-main">
											<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
												<colgroup>
													<col name="laytable-cell-1-0-0" width="25%" />
													<col name="laytable-cell-1-0-1" width="25%" />
													<col name="laytable-cell-1-0-2" width="25%" />
													<col name="laytable-cell-1-0-3" width="25%" />
												</colgroup>
												{volist name="wanfa" id="vo"}
												<form action="?typeid={$typeid}" method="post">
													<tbody>
														{volist name="vo['list']" id="item"}
														<tr data-index="0" class="">
															<td data-field="1" data-key="1-0-0" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-0">{$item.title}</div>
															</td>
															<td data-field="2" data-key="1-0-1" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-1">
																	<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="odds[{$item.playid}][]" value="{:end($odds[$item['playid']])}">
																</div>
															</td>
															<td data-field="3" data-key="1-0-2" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-2">
																	<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="odds[{$item.playid}][]" value="{$odds[$item['playid']]['0']}">
																</div>
															</td>
															<td data-field="4" data-key="1-0-3" align="center" class="">
																<div class="layui-table-cell laytable-cell-1-0-3"> 
																	<button style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs">保存</button> 
																</div>
															</td>
														</tr>
														{/volist}
													</tbody>
												</form>
												{/volist}
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 数据表格 -->


				</div>
			</div>
			<div class="layui-card">

			</div>

		</div>


		<script>
			layui.use(['layer'], function () {
				var $ = layui.jquery;
				var layer = layui.layer;

			});
		</script>
	</body>
	</html>
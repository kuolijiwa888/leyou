<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>数据清理</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css">
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all">
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
	<style type="text/css">
		.layui-table-cell1 {
			line-height: 28px;
			padding: 0 15px;
			position: relative;
			box-sizing: border-box;
		}
	</style>
	<body onscroll="layui.admin.hideFixedEl();" class="theme-colorful notice-width">
		<!-- 正文开始 -->
		<div class="layui-fluid">
			<div class="layui-card">
				<div class="layui-card-body">
					<!-- 表格工具栏 -->
					<div class="page-container">
						<!-- 数据表格 -->
						<div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-1" lay-id="tbBasicTable" style=" ">
							<div class="layui-table-box">
								<div class="layui-table-header">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="33%" />
											<col name="laytable-cell-1-0-1" width="33%" />
											<col name="laytable-cell-1-0-2" width="33%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="id" data-key="1-0-0" class="">
													<div class="layui-table-cell1 laytable-cell-1-0-0" align="center">
														<span>数据项目</span>
													</div>
												</th>
												<th data-field="groupid" data-key="1-0-1" class="">
													<div class="layui-table-cell1 laytable-cell-1-0-1" align="center">
														<span>清理条件</span>
													</div>
												</th>
												<th data-field="username" data-key="1-0-2" class="">
													<div class="layui-table-cell1 laytable-cell-1-0-2" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="layui-table-body layui-table-main">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="33%" />
											<col name="laytable-cell-1-0-1" width="33%" />
											<col name="laytable-cell-1-0-2" width="33%" />
										</colgroup>
										<tbody>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="0" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">会员账号清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">账户金额低于
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="user[clearamountmin]" value="1" min="0" max="1">元，且
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="user[clearday]" value="60" min="30">天未登录
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="1" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">会员账号清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">注册
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="user1[clearday]" value="15" min="7">天未登录
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="2" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">会员账号清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">内部账户
															<input type="checkbox" name="isnbuser" value="1" title="全部" >
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="3" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">开奖数据清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="kaijiang[clearday]" value="2" min="1">天前的开奖数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="4" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">投注数据清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="touzhu[clearday]" value="60" min="45">天前，类型
															<div class="ew-select-fixed" style="width: 80px;display: inline-block;">
																<select name="touzhu[state]">
																	<option value="999">全部</option>
																	<option value="0">未开奖</option>
																	<option value="-2">撤单</option>
																</select>
															</div>的投注数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="5" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">充值数据清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="recharge[clearday]" value="45" min="1">天前，类型
															<div class="ew-select-fixed" style="width: 80px;display: inline-block;">
																<select name="recharge[state]">
																	<option value="999">全部</option>
																	<option value="0">未审核</option>
																	<option value="-1">取消</option>
																</select>
															</div>的充值数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="6" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">提款数据清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="withdraw[clearday]" value="45" min="1">天前，类型
															<div class="ew-select-fixed" style="width: 80px;display: inline-block;">
																<select name="withdraw[state]">
																	<option value="999">全部</option>
																	<option value="0">未审核</option>
																	<option value="-1">退回/取消</option>
																</select>
															</div>的提款数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="7" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">账变数据清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="fuddetail[clearday]" value="45" min="45">天前的账变数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="8" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">会员日志清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="memlog[clearday]" value="7" min="7">天前的数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
											<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="AjaxPostForm">
												<tr data-index="9" class="">
													<td data-field="id" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-0">管理员清理</div>
													</td>
													<td data-field="groupid" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-1">清理
															<input class="layui-input input-change" type="number" style="width:60px;height: 28px;display:inline-block;padding-left:0;text-align: center;" name="adminlog[clearday]" value="7" min="7">天前的数据
														</div>
													</td>
													<td data-field="username" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell1 laytable-cell-1-0-2">
															<button class="layui-btn layui-btn-danger layui-btn-xs" type="submit">清理</button>
														</div>
													</td>
												</tr>
											</form>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{include file="Public/footer" /}
			<!--/请在上方写此页面业务相关的脚本-->
			<script>layui.use(['layer', 'form'],
				function() {
					var $ = layui.jquery;
					var layer = layui.layer;
					var form = layui.form;
				});
			</script>
		</div>
	</body>

	</html>
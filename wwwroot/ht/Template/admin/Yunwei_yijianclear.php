<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>数据清理</title>
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
					<div class="layui-form-item" style="margin:0"> 
						<div class="layui-inline"> 
							<span>每月1号清理数据为本月1号0点以前的数据</span> 
						</div> 
					</div>
					<!-- 数据表格 -->
					<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" id="AjaxPostForm">
						<table id="tbBasicTable" lay-filter="tbBasicTable">
							<thead>
								<tr>
									<th lay-data="{field:'id',align: 'center'}">一键清理数据</th>
								</tr> 
							</thead>
							<tbody>
								<tr>
									<td>
										<div style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[cz]" type="checkbox" value="1"lay-skin="primary"> 充值记录
										</div>
										<div  style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[tk]" type="checkbox" value="1"lay-skin="primary"> 提款记录
										</div>
										<div style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[tz]" type="checkbox" value="1"lay-skin="primary"> 游戏记录
										</div>
										<div style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[zb]" type="checkbox" value="1"lay-skin="primary"> 账变记录
										</div>
										<div style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[hd]" type="checkbox" value="1"lay-skin="primary"> 活动记录
										</div>
										<div style="display:inline-block;margin: 0 10px;">
											<input name="cleardb[kj]" type="checkbox" value="1"lay-skin="primary"> 开奖记录
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<input class="layui-btn" type="submit" value="一键清理数据"style="margin-bottom: 10px;width: 100%;">
			</form>
		</div>
		{include file="Public/footer" /}

		<script>
			layui.use(['layer', 'form', 'table'], function () {
				var $ = layui.jquery;
				var layer = layui.layer;
				var form = layui.form;
				var table = layui.table;
				var util = layui.util;
				var dropdown = layui.dropdown;
				var laydate = layui.laydate;


				var insTb = layui.table;


				insTb.init('tbBasicTable', {
				}); 

			});
		</script>
	</body>
	</html>
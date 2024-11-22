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
					<!-- 数据表格 -->
					<form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" id="AjaxPostForm">
						<table id="tbBasicTable" lay-filter="tbBasicTable">
							<thead>
								<tr>
									<th lay-data="{field:'id',align: 'center'}">项目名称</th>
									<th lay-data="{field:'groupid',align: 'center'}">计划开始时间</th>
									<th lay-data="{field:'username',align: 'center'}">备注</th>
								</tr> 
							</thead>
							<tbody>
								<tr>
									<td>日消费赠送活动</td>
									<td>
										每天 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_rixiaofei_shi]">
												{for start="0" end="24"}
												<option value="{$i}" {if condition="$setlist['jihua_rixiaofei_shi'] eq $i"}selected{/if}>{$i}点</option>
												{/for}
											</select>
										</div>
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_rixiaofei_fen]">
												{for start="1" end="60"}
												<option value="{$i}" {if condition="$setlist['jihua_rixiaofei_fen'] eq $i"}selected{/if}>{$i}分</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>赠送前一天(系统设置->赠送活动)</span>
									</td>
								</tr>
								<tr>
									<td>日亏损赠送活动</td>
									<td>
										每天 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_rikuisun_shi]">
												{for start="0" end="24"}
												<option value="{$i}" {if condition="$setlist['jihua_rikuisun_shi'] eq $i"}selected{/if}>{$i}点</option>
												{/for}
											</select>
										</div>
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_rikuisun_fen]">
												{for start="1" end="60"}
												<option value="{$i}" {if condition="$setlist['jihua_rikuisun_fen'] eq $i"}selected{/if}>{$i}分</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>赠送前一天(系统设置->赠送活动)</span>
									</td>
								</tr>
								<tr>
									<td>代理下线会员投注返点发放</td>
									<td>
										每天 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_dailifandian_shi]">
												{for start="0" end="24"}
												<option value="{$i}" {if condition="$setlist['jihua_dailifandian_shi'] eq $i"}selected{/if}>{$i}点</option>
												{/for}
											</select>
										</div>
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_dailifandian_fen]">
												{for start="1" end="60"}
												<option value="{$i}" {if condition="$setlist['jihua_dailifandian_fen'] eq $i"}selected{/if}>{$i}分</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>发放前一天(系统设置->赠送活动)</span>
									</td>
								</tr>
								<tr>
									<td>月消费赠送活动</td>
									<td>
										每月1号 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_yuexiaofei_shi]">
												{for start="0" end="24"}
												<option value="{$i}" {if condition="$setlist['jihua_yuexiaofei_shi'] eq $i"}selected{/if}>{$i}点</option>
												{/for}
											</select>
										</div>
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_yuexiaofei_fen]">
												{for start="1" end="60"}
												<option value="{$i}" {if condition="$setlist['jihua_yuexiaofei_fen'] eq $i"}selected{/if}>{$i}分</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>赠送上一个月(系统设置->赠送活动)</span>
									</td>
								</tr>
								<tr>
									<td>月亏损赠送活动</td>
									<td>
										每月1号 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select nname="jihua[jihua_yuekuisun_shi]">
												{for start="0" end="24"}
												<option value="{$i}" {if condition="$setlist['jihua_yuekuisun_shi'] eq $i"}selected{/if}>{$i}点</option>
												{/for}
											</select>
										</div>
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_yuekuisun_fen]">
												{for start="1" end="60"}
												<option value="{$i}" {if condition="$setlist['jihua_yuekuisun_fen'] eq $i"}selected{/if}>{$i}分</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>赠送上一个月(系统设置->赠送活动)</span>
									</td>
								</tr>
								<tr>
									<td>开奖数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_kaijiang_days]">
												{for start="1" end="61"}
												<option value="{$i}" {if condition="$setlist['jihua_kaijiang_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留1天</span>
									</td>
								</tr>
								<tr>
									<td>投注数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_touzhu_days]">
												{for start="45" end="91"}
												<option value="{$i}" {if condition="$setlist['jihua_touzhu_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留45天</span>
									</td>
								</tr>
								<tr>
									<td>代理佣金数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_fandian_days]">
												{for start="1" end="61"}
												<option value="{$i}" {if condition="$setlist['jihua_fandian_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留1天</span>
									</td>
								</tr>
								<tr>
									<td>每日加奖数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_fanshui_days]">
												{for start="1" end="61"}
												<option value="{$i}" {if condition="$setlist['jihua_fanshui_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留1天</span>
									</td>
								</tr>
								<tr>
									<td>账变记录数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_fuddetail_days]">
												{for start="45" end="91"}
												<option value="{$i}" {if condition="$setlist['jihua_fuddetail_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留45天</span>
									</td>
								</tr>
								<tr>
									<td>会员日志数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_memlog_days]">
												{for start="7" end="31"}
												<option value="{$i}" {if condition="$setlist['jihua_memlog_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留7天</span>
									</td>
								</tr>
								<tr>
									<td>管理员日志数据清理</td>
									<td>
										保留 
										<div class="ew-select-fixed" style="width: 70px;display: inline-block;">
											<select name="jihua[jihua_adminlog_days]">
												{for start="7" end="31"}
												<option value="{$i}" {if condition="$setlist['jihua_adminlog_days'] eq $i"}selected{/if}>{$i}天</option>
												{/for}
											</select>
										</div>
									</td>
									<td>
										<span>最少保留7天</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<input class="layui-btn" type="submit" value="保存计划设置"style="margin-bottom: 10px;width: 100%;">
			</form>
		</div>
		{include file="Public/footer" /}
		<script>
			layui.use(['layer', 'form', 'table'], function () {
				var $ = layui.jquery;
				var layer = layui.layer;
				var form = layui.form;
				var table = layui.table;


				var insTb = layui.table;


				insTb.init('tbBasicTable', {
				}); 

			});
		</script>
	</body>
	</html>
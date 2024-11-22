<html>
<head> 
	<meta charset="utf-8" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<title>开奖管理</title> 
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css" /> 
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all" /> 
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script> 
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script> 
	<style>

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
<body onscroll="layui.admin.hideFixedEl();" class="theme-white"> 
	<!-- 正文开始 --> 
	<div class="layui-fluid"> 
		<div class="layui-card"> 
			<div class="layui-card-body"> 
				<!-- 表格工具栏 --> 
				<div class="page-container"> 
					<div class="layui-form-item" style="margin:0"> 
						<div class="layui-inline"> 
							<span>更改采集设置一小时内生效</span> 
						</div> 
					</div> 
					<!-- 数据表格 --> 
					<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="form form-horizontal validate-form" id="AjaxPostForm1"> 
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
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>类型</span>
													</div>
												</th>
												<th data-field="groupid" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>游戏名</span>
													</div>
												</th>
												<th data-field="username" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>状态</span>
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
											{volist name="cptypes" id="tp"}
											{volist name="tp['cplist']" id="vo"}
											<tr data-index="0">
												<td data-field="id" data-key="1-0-0" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-0">{$tp.cptype}</div>
												</td>
												<td data-field="groupid" data-key="1-0-1" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-1">{$vo.title}</div>
												</td>
												<td data-field="username" data-key="1-0-2" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-2"> 
														<u value="{if condition="$caijisets[$vo['name']] eq 1"}启用{else /}停用{/if}">
															<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$caijisets[$vo['name']] eq 1"}checked{/if} name="caijiset[{$vo.name}]" value="1"/>
														</u> 
													</div>
												</td>
											</tr>
											{/volist}
											{/volist}
											<input id="submit" type="submit" style="display: none;">
										</tbody>
									</table>
								</div>
							</div>
						</div> 
					</form>
				</div> 
			</div> 
		</div> 

		<!--请在下方写此页面业务相关的脚本--> 
		{include file="Public/footer" /}
		<script>
			layui.use(['layer', 'form'], function () {
				var $ = layui.jquery;
				var layer = layui.layer;
				var form = layui.form;

				form.on('switch(userTbStateCk)', function (data) {
					$('#submit').click();
				}); 
			});
		</script> 
		<script>
			$("#AjaxPostForm1,.AjaxPostForm1").submit(function(){
				var $this    = $(this);
				var $confirm = $this.attr('confirm');
				var url      = $this.attr('action');

				var defaultsubvalue = $("#AjaxPostForm1,.AjaxPostForm1").find("[type='submit']").val();
				$("#AjaxPostForm1,.AjaxPostForm1").find("[type='submit']").val('正在提交...').attr("disabled","disabled");
				$.post(url,$this.serialize(), function(json){
					if(json.status==1){
						layer.msg(json.info,{icon:1,time:2000});
						$("#AjaxPostForm1,.AjaxPostForm1").find("[type='submit']").val(defaultsubvalue).removeAttr("disabled");
						setTimeout("parentrefresh()", 2000);
					}else if(json.status==0){
						$("#AjaxPostForm1,.AjaxPostForm1").find("[type='submit']").val(defaultsubvalue).removeAttr("disabled");
						layer.msg(json.info,{icon:2,time:3000});
					}
				}, "json"); 
				return false;
			});
		</script>
	</div>
</body>
</html>
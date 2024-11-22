<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>添加公告</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
	<style>
		#AjaxPostForm {
			max-width: 700px;
			margin: 30px auto;
		}

		#AjaxPostForm .layui-form-item {
			margin-bottom: 25px;
		}
		.layui-upload-img {
			width: 92px;
			height: 92px;
			margin: 0 10px 10px 0;
		}
	</style>
</head>
<body>
	<!-- 正文开始 -->
	<div class="layui-fluid">
		<div class="layui-card">
			<div class="layui-card-body">
				<!-- 表单开始 -->
				<form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
					{present name="info"}
					<input name="id" type="hidden" value="{$info[$_pk]}">
					{/present}
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">公告标题:</label>
						<div class="layui-input-block">
							<input type="text" class="layui-input" value="{$info.title}" placeholder="标题" name="title" lay-verType="tips" lay-verify="required" required>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">通知内容:</label>
						<div class="layui-input-block">
							<textarea id="content" name="content">{$info.content}</textarea>
						</div>
					</div>
					<div class="layui-form-item">
						<div class="layui-input-block">
							<button type="submit" class="layui-btn" lay-filter="formBasSubmit" lay-submit>&emsp;提交&emsp;</button>
						</div>
					</div>
				</form>
				<!-- //表单结束 -->
			</div>
		</div>
	</div>
	{include file="Public/footer" /}
	<!-- js部分 -->
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
	<script>
		layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate','layedit'], function () {
			var $ = layui.jquery;
			var layer = layui.layer;
			var form = layui.form;
			var table = layui.table;
			var util = layui.util;
			var dropdown = layui.dropdown;
			var laydate = layui.laydate;
			var layedit = layui.layedit;
			layedit.build('content'); 


			/* 渲染laydate */
			laydate.render({
				elem: '#tbAdvSelDate',
				type: 'time',
				format: 'HH:mm',
			});
			laydate.render({
				elem: '#tbAdvSelDate1',
				type: 'time',
				format: 'HH:mm',
			});
			form.on('radio(ascn)', function (data) {        
				xitongcaiset($('#IsPurchased input[name="isonline"]:checked').val());
			});
		});


		function xitongcaiset(type){
			if(type==1){
				$("#payisonline1").show();
				$("#payisonline0").hide();
			}else if(type==-1){
				$("#payisonline0").show();
				$("#payisonline1").hide();
			}
		}
	</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>彩种管理</title>
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
	</style>
</head>
<body>
	<!-- 正文开始 -->
	<div class="layui-fluid">
		<div class="layui-card">
			<div class="layui-card-body">
				<!-- 表单开始 -->
				<form class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
					{present name="info"}
					<input name="id" type="hidden" value="{$info[$_pk]}">
					{/present}
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">选择彩票:</label>
						<div class="layui-input-block">
							<select name="name" lay-verType="tips" lay-verify="required" required>
								<option value="">请选择</option>
								{foreach name="cpcategory" item="cptype" key="cpk"}
								<optgroup label="{$cptype}">
									{volist name="cplist" id="cpv"}
									{if condition="$cpk eq $cpv['typeid']"}
									<option value="{$cpv['name']}" {if condition="$cpv['name'] eq $name"}selected{/if}>{$cpv.title}</option>
									{/if}
									{/volist}
								</optgroup>
								{/foreach}
							</select>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">开奖期号:</label>
						<div class="layui-input-block">
							<input type="text" placeholder="如：20161214001" name="expect" class="layui-input" lay-verType="tips" lay-verify="required" required/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">开奖号码:</label>
						<div class="layui-input-block">
							<input type="text" placeholder="开奖号码 如1,2,3" name="opencode" class="layui-input" lay-verType="tips" lay-verify="required" required/>
							<span>英文逗号隔开</span>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">开奖时间:</label>
						<div class="layui-input-block">
							<input type="text" placeholder="如：2016-12-12 10:00:00" name="opentime" class="layui-input"/>
							<span>留空则已系统当前时间为准无影响</span>
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
		layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate'], function () {
			var $ = layui.jquery;
			var layer = layui.layer;
			var form = layui.form;
			var table = layui.table;
			var util = layui.util;
			var dropdown = layui.dropdown;
			var laydate = layui.laydate;

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
				xitongcaiset($('#IsPurchased input[name="issys"]:checked').val());
			});
		});
		function xitongcaiset(type){
			if(type==1){
				$("#xitongcaisetbox").show();
			}else{
				$("#xitongcaisetbox").hide();
			}
		}
	</script>
</body>
</html>
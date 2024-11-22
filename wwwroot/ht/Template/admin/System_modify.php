<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>轮播图修改</title>
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
				<div class="layui-form-item">
					<label class="layui-form-label layui-form-required" style="width: 100px;">本地文件上传:</label>
					<form enctype="multipart/form-data" method="post" name="fileinfo" id="fileinfo">
						<div style="position: relative;display: inline-block;line-height: 50px;border: 1px solid #DFDFDF;">
							<input type="file" name="file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" style="position: absolute;left: 0;top: 0;z-index: 10;width: 102px;height: 38px;opacity: .01;cursor: pointer;">
							<span style="margin: 0 15px;text-align: center;"><i class="layui-icon"></i>上传图片</span>
						</form>
						<button type="button" class="layui-btn" onclick='send()'>开始上传</button>
					</div>
				</div>



				<!-- 表单开始 -->
				<form class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
					{present name="info"}
					<input name="id" type="hidden" value="{$info[$_pk]}">
					{/present}
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">轮播图地址:</label>
						<div class="layui-input-block">
							<input type="text" value="{$info.address}" id="my_code" placeholder="轮播图地址" name="address" class="layui-input" lay-verType="tips" lay-verify="required" required/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">备注:</label>
						<div class="layui-input-block">
							<input type="text" value="{$info.beizhu}" placeholder="备注" name="beizhu" class="layui-input" lay-verType="tips" lay-verify="required" required/>
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label layui-form-required">轮播图类型:</label>
						<div class="layui-input-block" id="IsPurchased">
							<input type="radio" name="is_mobile" id="is_mobile-1" value="1" {if condition="$info[is_mobile] eq 1"}checked{/if} title="APP轮播图">
							<input type="radio" name="is_mobile" id="is_mobile-0" value="0" {if condition="$info[is_mobile] eq 0"}checked{/if} title="PC轮播图">
						</div>
					</div>
					<div class="layui-form-item">
						<div class="layui-input-block">
							<button type="submit" class="layui-btn" lay-filter="formBasSubmit" lay-submit>&emsp;提交&emsp;</button>
						</div>
					</div>
				</form>
				<!-- 表单结束 -->
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
			var upload = layui.upload;

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
        });
	</script>
	<script type="text/javascript">
		function send(){
			var fd = new FormData(document.getElementById("fileinfo"));
			$.ajax({
				url: "{:U('System/upload')}",
				type: "POST",
				data: fd,
				processData: false,  
				contentType: false,   
				success:function(data){
					layer.msg('上传成功！');
					$('#my_code').val(data);
				},
				fail:function(data){
					layer.msg('上传失败！');
				}
			},'json');	
		}
	</script>
</body>
</html>
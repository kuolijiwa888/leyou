<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>站内通知管理</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
					<form class="layui-form toolbar" method="get" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
						<div class="layui-form-item">
							<div class="layui-inline">&emsp;
								<a class="layui-btn icon-btn" type="submit" layer-url="{:U('add_notice')}" lay-filter="loginRecordTbSearch" lay-submit>
									<i class="layui-icon">&#xe615;</i>添加通知
								</a>&nbsp;
							</div>
						</div>
					</form>
					<!-- 数据表格 -->
					<form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
						<table id="tbBasicTable" lay-filter="tbBasicTable">
							<thead>
								<tr>
									<th lay-data="{field:'groupid',sort:true,align: 'center',width:100}">ID</th>
									<th lay-data="{field:'username',sort:true,align: 'center',width:300}">标题</th>
									<th lay-data="{field:'userbankname1',sort:true,align: 'center'}">内容</th>
									<th lay-data="{field:'userbankname2',sort:true,align: 'center',width:160}">用户ID</th>
									<th lay-data="{field:'userbankname3',sort:true,align: 'center',width:160}">添加时间</th>
									<th lay-data="{field:'userbankname4',sort:true,align: 'center',width:160}">操作</th>
								</tr> 
							</thead>
							<tbody>
								{volist name="list" id="vo"}
								<tr>
									<td>{$vo.id}</td>
									<td>{$vo.title}</td>
									<td>{$vo.content}</td>
									<td>{$vo.users}</td>
									<td>{$vo.add_time|date="Y-m-d H:i",###}</td>
									<td class="td-manage">
										<u style="cursor:pointer" class="layui-btn layui-btn-primary  layui-btn-xs" layer-url="{:U('edit',['id'=>$vo['id']])}" title="编辑">编辑</u> 
										<u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('delete',['id'=>$vo['id']])}" title="删除">删除</u>
										{if condition="$vo['is_send'] eq 0"} 
										<u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-alt-url="{:U('send',['id'=>$vo['id']])}" title="发送">发送</u>
										{/if}
									</td>
								</tr>
								{/volist}
							</tbody>
						</table>
					</div>
				</div>
				<div class="layui-card">
                    <div class="pageNav l" style="padding:0">{$page}</div>
                    <div class="r">共有数据：<strong>{$totalcount}</strong> 条 </div>
                </div>
			</form>
		</div>
		{include file="Public/footer" /}

		<!-- js部分 -->
		<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
		<script type="text/javascript" src="./assets/js/common.js?v=318"></script>

		<script>

			$(document).on("click", "[lock-url]", function() {
				var obj       = $(this);
				var url       = $(this).attr('lock-url');
				var issuccess = obj.hasClass('label-success');
				$.getJSON(url, function(json){
					if(json.status==1){
						layer.msg('操作成功',{icon: 1,time:1000});
					}else{
						layer.msg(json.info,{icon: 2,time:2000});
					};
				});
			});

		</script>
		<script>
			layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate'], function () {
				var $ = layui.jquery;
				var layer = layui.layer;
				var form = layui.form;
				var table = layui.table;
				var util = layui.util;
				var dropdown = layui.dropdown;
				var laydate = layui.laydate;

				/* 渲染表格 */
				var insTb = layui.table;

        //转换静态表格
        insTb.init('tbBasicTable', {
        	limit: 20
        }); 
        /* 渲染laydate */
        laydate.render({
        	elem: '#tbAdvSelDate',
        	format: 'yyyyMMdd',
        });
        laydate.render({
        	elem: '#tbAdvSelDate1',
        	format: 'yyyyMMdd'
        });
        form.on('select(test)', function (data) {
        	var url = $(this).attr('lay-value');
        	window.location.href = url;
        });
    });
</script>
<script>

</script>
</body>
</html>
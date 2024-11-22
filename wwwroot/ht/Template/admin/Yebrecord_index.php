<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>余额宝账变记录</title>
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
							<div class="layui-inline">
								<div class="layui-input-inline">
									<select name="type">
										<option value="0" {if condition="$type eq 0"}selected{/if}>随存随取</option>
										<option value="1" {if condition="$type eq 1"}selected{/if}>定期</option>
									</select>
								</div>
							</div>
							<div class="layui-inline">
								<div class="layui-input-inline">
									<select name="state">
										<option value="0" {if condition="$state eq 0"}selected{/if}>收息结束</option>
										<option value="1" {if condition="$state eq 1"}selected{/if}>存入收息</option>
									</select>
								</div>
							</div>
							<div class="layui-inline">
								<div class="layui-input-inline">
									<select name="txtype">
										<option value="0" {if condition="$txtype eq 0"}selected{/if}>未提现</option>
										<option value="1" {if condition="$txtype eq 1"}selected{/if}>已提现</option>
									</select>
								</div>
							</div>
							<div class="layui-inline">
								<label class="layui-form-label"style="width:50px;">用户名:</label>
								<div class="layui-input-inline">
									<input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
								</div>
							</div>
							<div class="layui-inline">
								<label class="layui-form-label"style="width:35px;">单号:</label>
								<div class="layui-input-inline">
									<input type="text" value="{$trano}" name="trano" class="layui-input" placeholder="输入单号"/>
								</div>
							</div>
							<div class="layui-inline">&emsp;
								<button class="layui-btn icon-btn" type="submit" lay-filter="loginRecordTbSearch" lay-submit>
									<i class="layui-icon">&#xe615;</i>搜索
								</button>&nbsp;
							</div>
						</div>
					</form>
					<!-- 数据表格 -->
					<form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
						<table id="tbBasicTable" lay-filter="tbBasicTable">
							<thead>
								<tr>
									<th lay-data="{field:'groupid',sort:true,align: 'center'}">单号</th>
									<th lay-data="{field:'username1',sort:true,align: 'center'}">用户名</th>
									<th lay-data="{field:'username2',sort:true,align: 'center'}">名称</th>
									<th lay-data="{field:'username3',sort:true,align: 'center'}">存入金额</th>
									<th lay-data="{field:'username4',sort:true,align: 'center'}">提现金额</th>
									<th lay-data="{field:'username5',sort:true,align: 'center'}">类型</th>
									<th lay-data="{field:'username6',sort:true,align: 'center'}">时间</th>
									<th lay-data="{field:'userbankname4',sort:true,align: 'center',width:165}">操作</th>
								</tr> 
							</thead>
							<tbody>
								{volist name="list" id="vo"}
								<tr>
									<td>{$vo.trano}</td>
									<td>{$vo.username}</td>
									<td>{$vo.fname}</td>
									<td>{$vo.money}</td>
									<td>{$vo.qmoney}</td>
									<td>{if condition="$vo['state'] eq 1"}<span style="color:red">存入收息</span>{else /}收息结束{/if}</td>
									<td>{$vo.addtime|date="m-d H:i:s",###}</td>
									<td>
										<u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('delete',['id'=>$vo['id']])}" title="删除">删除</u>
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
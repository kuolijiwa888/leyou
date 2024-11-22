<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>合买用户记录</title>
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
</style>
</head>
<body>

<div class="page-container">
    <div class="mt-5">
    <form method="post" action="">
	<table id="tbBasicTable" lay-filter="tbBasicTable">
		<thead>
			<tr class="text-c">
                <th lay-data="{field:'id',sort:true,align: 'center'}">单号</th>
				<th lay-data="{field:'id1',sort:true,align: 'center'}">用户名</th>
				<th lay-data="{field:'id2',sort:true,align: 'center'}">购买金额</th>
				<th lay-data="{field:'id3',sort:true,align: 'center'}">获奖金额</th>
				<th lay-data="{field:'id4',sort:true,align: 'center'}">参与时间</th>

			</tr>
		</thead>
		<tbody>
			{volist name="list" id="vo"}
            <tr class="text-c">
                <td>{$vo.trano}</td>
                <td>{$vo.username}</td>
                <td>{$vo.amount}</td>
                <td>{$vo.okamount}</td>
                <td>{$vo.oddtime|date="m-d H:i:s",###}</td>
			</tr>
            {/volist}
		</tbody>
	</table>
    

    </form>
	</div>
</div>

{include file="Public/footer" /}
<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
		<script>
			layui.use(['table'], function () {
				var $ = layui.jquery;
				var table = layui.table;

				/* 渲染表格 */
				var insTb = layui.table;

        //转换静态表格
        insTb.init('tbBasicTable', {
        }); 
    });
</script>
</body>
</html>
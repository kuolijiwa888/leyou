<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>盈亏统计</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- 正文开始 -->
  <div class="layui-fluid">
    <div class="layui-card">
      <div class="layui-card-body">
        <!-- 数据表格 -->
        <table id="loginRecordTable" lay-filter="loginRecordTable">
         <thead>
          <tr>
            <th lay-data="{field:'date',sort:true,totalRowText: '页面小计'}">日期</th>
            <th lay-data="{field:'zdchongzhiall',sort:true,totalRow: true}">自动充值</th>
            <th lay-data="{field:'sdjiachongzhiall',sort:true,totalRow: true}">手动加款</th>
            <th lay-data="{field:'sdjianchongzhiall',sort:true,totalRow: true}">手动减款</th>
            <th lay-data="{field:'tikuanall',sort:true,totalRow: true}">提款</th>
            <th lay-data="{field:'ctyingkui',sort:true,totalRow: true}">充提盈亏</th>
            <th lay-data="{field:'touzhuall',sort:true,totalRow: true}">投注</th>
            <th lay-data="{field:'zhongjiangall',sort:true,totalRow: true}">返奖</th>
            <th lay-data="{field:'huodongall',sort:true,totalRow: true}">活动</th>
            <th lay-data="{field:'tzyingkui',sort:true,totalRow: true}">投注盈亏</th>
          </tr> 
        </thead>
        <tbody>
          {volist name="list" id="vo"}
          <tr>
            <td>{$vo.date}</td>
            <td>{$vo.zdchongzhiall}</td>
            <td>{$vo.sdjiachongzhiall}</td>
            <td>{$vo.sdjianchongzhiall}</td>
            <td>{$vo.tikuanall}</td>
            <td>{$vo.ctyingkui}</td>
            <td>{$vo.touzhuall}</td>
            <td>{$vo.zhongjiangall}</td>
            <td>{$vo.huodongall}</td>
            <td>{$vo.tzyingkui}</td>
          </tr>
          {/volist}
        </tbody>
      </table>
    </div>
    <div class="pageNav l" style="padding:0">{$page}</div>
    <div class="r">共有数据：<strong>{$totalcount}</strong> 条 </div>
  </div>
</div>

<!-- js部分 -->
<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
<script>
  layui.use(['layer', 'form', 'table', 'util', 'laydate', 'tableX'], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var form = layui.form;
    var table = layui.table;
    var util = layui.util;
    var laydate = layui.laydate;
    var tableX = layui.tableX;

    var insTb = layui.table;
    
//转换静态表格
insTb.init('loginRecordTable', {
  limit: 20,
  totalRow: true
}); 



});
</script>
</body>
</html>
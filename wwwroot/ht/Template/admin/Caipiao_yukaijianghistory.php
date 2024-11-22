<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>系统预开奖彩管理</title>
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
                <label class="layui-form-label">排序:</label>
                <div class="layui-input-inline">
                  <select name="ordertype" onChange="window.location.href = this.value" lay-filter="test">
                    <optgroup label="{$cptype}">
                      {volist name="lotterylist" id="cpv"}
                      <option value="{:U('yukaijianghistory',['name'=>$cpv['name']])}" {if condition="$cpv['name'] eq $name"}selected{/if}>{$cpv.title}</option>
                      {/volist}
                    </select>
                  </div>
                </div>
                <div class="layui-inline">
                  <label class="layui-form-label">期号:</label>
                  <div class="layui-input-inline">
                    <input type="text" value="{$expect}" name="expect" class="layui-input" placeholder="输入期号"/>
                  </div>
                </div>
                <input name="name" type="hidden" value="{$name}">
                <div class="layui-inline">&emsp;
                  <button class="layui-btn icon-btn" type="submit" lay-filter="loginRecordTbSearch" lay-submit>
                    <i class="layui-icon">&#xe615;</i>搜索
                  </button>&nbsp;
                </div>
                <div class="layui-inline">&emsp;
                  <a class="layui-btn icon-btn" href="{:U('yukaijiang')}" title="返回预开奖">
                    <i class="layui-icon">&#xe615;</i>返回预开奖
                  </a>&nbsp;
                </div>
              </div>
            </form>

            <!-- 数据表格 -->
            <form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
              <table id="tbBasicTable" lay-filter="tbBasicTable">
                <thead>
                  <tr>
                    <th lay-data="{field:'id',sort:true,align: 'center'}">彩种</th>
                    <th lay-data="{field:'groupid',sort:true,align: 'center'}">期号</th>
                    <th lay-data="{field:'username',sort:true,align: 'center'}">开奖号码</th>
                    <th lay-data="{field:'userbankname',sort:true,align: 'center'}">开奖时间</th>
                    <th lay-data="{field:'shangji',sort:true,align: 'center'}">管理人</th>
                  </tr> 
                </thead>
                <tbody>
                  {volist name="olist" id="vo"}
                  <tr class="text-c ">
                    <td>{$lotterylist[$vo['name']]['title']}</td>
                    <td>{$vo.expect}</td>
                    <td>{$vo.opencode}</td>
                    <td>{$vo.opentime|date="m-d H:i:s",###}</td>
                    <td id="stateadmin-{$vo.expect}">{$vo.stateadmin}</td>
                  </tr>
                  {/volist}
                </tbody>
              </table>
            </div>
          </div>
          <div class="layui-card">

          </div>
        </form>
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

          /* 渲染表格 */
          var insTb = layui.table;

          //转换静态表格
          insTb.init('tbBasicTable', {
            page: true,
            limit: 20
          }); 
          form.on('select(test)', function (data) {
            var url = $(this).attr('lay-value');
            window.location.href = url;
          });
        });
      </script>
    </body>
    </html>
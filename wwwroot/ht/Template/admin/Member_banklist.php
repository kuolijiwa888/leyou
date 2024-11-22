<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>银行信息</title>
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
                <label class="layui-form-label"style="width:35px;">全部:</label>
                <div class="layui-input-inline">
                  <select name="state">
                    <option value="">全部</option>
                    <option value="0" {if condition="($state eq 0) and (isset($state))"}selected{/if}>审核中</option>
                    <option value="1" {if condition="$state eq 1"}selected{/if}>已审</option>
                    <option value="2" {if condition="$state eq 2"}selected{/if}>驳回</option>
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
                <label class="layui-form-label"style="width:62px;">绑定姓名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$accountname}" name="accountname" class="layui-input" placeholder="输入单号"/>
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
                  <th lay-data="{field:'trano',sort:true,minWidth: 200,align: 'center'}">用户名</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">开户姓名</th>
                  <th lay-data="{field:'paytype',sort:true,align: 'center'}">开户银行</th>
                  <th lay-data="{field:'paytypetitle',sort:true,align: 'center'}">开户网点</th>
                  <th lay-data="{field:'oldaccountmoney',sort:true,align: 'center'}">开户地址</th>
                  <th lay-data="{field:'amount',sort:true,align: 'center'}">银行卡号</th>
                  <th lay-data="{field:'newaccountmoney',sort:true,align: 'center',width: 75}">状态</th>
                  <th lay-data="{field:'rechargedelete',align: 'center'}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr>
                  <td>{$vo.username}</td>
                  <td>{$vo.accountname}</td>
                  <td>{$vo.bankname}</td>
                  <td>{$vo.bankbranch}</td>
                  <td>{$vo.bankaddress}</td>
                  <td>{$vo.banknumber}{if condition="$vo[isdefault] eq 1"} (默认){/if}</td>
                  <td>
                    {if condition="$vo[state] eq 0"}
                    审核中
                    {elseif condition="$vo[state] eq 1" /}
                    已审
                    {elseif condition="$vo[state] eq 2" /}
                    驳回
                    {/if}
                  </td>
                  <td><u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('bankedit',['id'=>$vo['id']])}" title="修改银行信息">修改</u><u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('bankdelete',['id'=>$vo['id']])}" title="删除银行信息">删除</u></td>
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
      });
    </script>
    <script>

    </script>
  </body>
  </html>
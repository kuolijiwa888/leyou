<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>提款银行管理</title>
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
                <a class="layui-btn icon-btn" layer-url="{:U('bankadd')}">
                  <i class="layui-icon">&#xe615;</i>添加提款银行
                </a>&nbsp;
              </div>
            </div>
          </form>
          <!-- 数据表格 -->
          <form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
            <table id="tbBasicTable" lay-filter="tbBasicTable">
              <thead>
                <tr>
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">ID</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">银行代码</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center'}">银行名称</th>
                  <th lay-data="{field:'shangji',sort:true,align: 'center'}">银行LOGO</th>
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">状态</th>
                  <th lay-data="{field:'useredit',align: 'center',width:165}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr>
                  <td>{$vo.id}</td>
                  <td>{$vo.bankcode}</td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('bankedit',['id'=>$vo['id']])}" title="修改-{$vo.bankname}">{$vo.bankname}</u></td>
                  <td>{$vo.bankname}</td>
                  <td>
                    <u lock-url="{:url('setstatus',['id'=>$vo['id'],'name'=>'state'])}" value="{if condition="$vo['state'] eq 1"}启用{elseif condition='$vo[state] eq 0' /}禁用{/if}">
                      <input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|禁用" {if condition='$vo[state] eq 1'}checked{elseif condition='$vo[state] eq 0' /}{/if}/>
                    </u>
                  </td>
                  <td>
                    <u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('bankedit',['id'=>$vo['id']])}" title="修改-{$vo.bankname}">修改</u>
                    <u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('delete',['id'=>$vo['id']])}" title="删除-{$vo.bankname}">删除</u>
                  </td>
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
          page: true,
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
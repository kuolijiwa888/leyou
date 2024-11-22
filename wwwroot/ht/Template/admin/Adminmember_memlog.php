<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>管理员日志</title>
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
                <label class="layui-form-label"style="width:35px;">类型:</label>
                <div class="layui-input-inline">
                  <select name="type">
                    <option value="">全部</option>
                    {foreach name="logtypes" item="ft" key="fk"}
                    <option value="{$fk}" {if condition="$fk eq $type"}selected{/if}>{$ft}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:62px;">注册时间:</label>
                <div class="layui-input-inline">
                  <input type="text" id="tbAdvSelDate" name="sDate" value="{$_sDate}" class="layui-input icon-date"
                  placeholder="选择开始时间" autocomplete="off"/>
                </div>
                <div class="layui-form-mid" style="margin-right: 1px;">-</div>
                <div class="layui-input-inline">
                  <input type="text" id="tbAdvSelDate1" name="eDate" value="{$_eDate}" class="layui-input icon-date"
                  placeholder="选择结束时间" autocomplete="off"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px;">管理员:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入管理员"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px;">登陆IP:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$loginip}" name="loginip" class="layui-input" placeholder="输入登陆IP"/>
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
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">管理员</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">类型</th>
                  <th lay-data="{field:'username1',sort:true,align: 'center'}">备注</th>
                  <th lay-data="{field:'username2',sort:true,align: 'center'}">IP</th>
                  <th lay-data="{field:'username3',sort:true,align: 'center'}">IP归属地</th>
                  <th lay-data="{field:'userbankname4',sort:true,align: 'center'}">时间</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr> 
                  <td>{$vo.username}</td>
                  <td>{$logtypes[$vo['type']]}</td>
                  <td>{$vo.info}</td>
                  <td>{$vo.ip}</td>
                  <td>{$vo.iparea}</td>
                  <td>{$vo.time|date="m-d H:i",###}</td>
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
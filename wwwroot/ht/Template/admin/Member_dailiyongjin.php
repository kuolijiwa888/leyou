<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>代理佣金</title>
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
              <?php
              $_states = [
              '0'=>'未审核',
              '1'=>'已审核',
              '-1'=>'取消申请',
              ];
              ?>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px;">状态:</label>
                <div class="layui-input-inline">
                  <select name="shenhe">
                    <option value="" >全部</option>
                    <option value="1" {if condition="$Think.get.shenhe eq '1'"}selected{/if}>已发放</option>
                    <option value="0" {if condition="$Think.get.shenhe eq '0'"}selected{/if}>未发放</option>
                    <option value="-1" {if condition="$Think.get.shenhe eq '-1'"}selected{/if}>未通过</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px;">订单号:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$Think.get.trano}" name="trano" class="layui-input" placeholder="输入订单号"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px;">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$Think.get.username}" name="username" class="layui-input" placeholder="输入用户名"/>
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
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">代理ID</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">代理名称</th>
                  <th lay-data="{field:'username1',sort:true,align: 'center'}">投注订单</th>
                  <th lay-data="{field:'username2',sort:true,align: 'center'}">投注金额</th>
                  <th lay-data="{field:'username3',sort:true,align: 'center'}">佣金金额</th>
                  <th lay-data="{field:'userbankname1',sort:true,align: 'center'}">代理返点</th>
                  <th lay-data="{field:'userbankname2',sort:true,align: 'center'}">下级</th>
                  <th lay-data="{field:'userbankname3',sort:true,align: 'center'}">下级返点</th>
                  <th lay-data="{field:'userbankname4',sort:true,align: 'center'}">时间</th>
                  <th lay-data="{field:'userbankname5',sort:true,align: 'center'}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="dailiinfo" id="vo"}
                <tr class="text-c">
                  <td>{$vo.uid}</td>
                  <td>{$vo.username}</td>
                  <td>{$vo.trano}</td>
                  <td>{$vo.touzhujine}</td>
                  <td>{$vo.amount}</td>
                  <td>{$vo.fandian}</td>
                  <td>{$vo.xiajiuser}</td>
                  <td>{$vo.xiajifandian}</td>
                  <td>{$vo.oddtime|date='Y-m-d',###}</td>
                  <td>
                    {if condition="$vo['shenhe'] eq 0"}
                    <u style="cursor:pointer;" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('yongjinshehe',['id'=>$vo['id']])}" title="代理佣金发放">未发放</u>
                    {elseif condition="$vo['shenhe'] eq 1" /}
                    <u style="cursor:pointer;" class="layui-btn layui-btn-primary layui-btn-xs">已发放</u>
                    {elseif condition="$vo['shenhe'] eq -1" /}
                    <u style="cursor:pointer;" class="layui-btn layui-btn-primary layui-btn-xs">退回</u>
                    {else /}
                    未知
                    {/if}
                    <u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('yongjindelete',array('id'=>$vo['id']))}" title="删除">删除</u>
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
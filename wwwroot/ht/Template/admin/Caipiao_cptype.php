<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>彩种管理</title>
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
              <div class="layui-inline"style="margin-bottom:0;">&emsp;
                <a class="layui-btn icon-btn" layer-url="{:U('cpadd')}">
                  <i class="layui-icon">&#xe615;</i>添加彩票
                </a>&nbsp;
              </div>
              <div class="layui-inline"style="margin-bottom:0;">
                <div class="layui-input-inline">
                  <select name="typeid" onChange="window.location.href = this.value" lay-filter="test">
                    <option value="{:U('Caipiao/cptype')}">默认排序</option>
                    {foreach name="cpcategory" item="cptype" key="cpk"}
                    <option value="{:url('cptype',['typeid'=>$cpk])}" {if condition="$typeid eq $cpk"}selected{/if}>{$cptype}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
            </div>
          </form>
          <!-- 数据表格 -->
          <form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
            <table id="tbBasicTable" lay-filter="tbBasicTable">
              <thead>
                <tr>
                  <th lay-data="{field:'id',sort:true,align: 'center'}">排序</th>
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">ID</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">彩票分类</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center'}">彩种名称</th>
                  <th lay-data="{field:'shangji',sort:true,align: 'center'}">彩种标示</th>
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">停止投注间隔</th>
                  <th lay-data="{field:'jinjijilu',sort:true,align: 'center'}">彩种简介</th>
                  <th lay-data="{field:'balance',sort:true,align: 'center'}">彩票类型</th>
                  <th lay-data="{field:'point',sort:true,align: 'center'}">期数</th>
                  <th lay-data="{field:'fandian',sort:true,align: 'center'}">维护</th>
                  <th lay-data="{field:'yeb',sort:true,align: 'center'}">状态</th>
                  <th lay-data="{field:'xima',sort:true,align: 'center'}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="olist" id="vo"}
                <tr>
                  <input name="userId" type="hidden"/>
                  {neq name="typeid" value=""}
                  <td>{$vo.listorder}</td>
                  {else/}
                  <td>{$vo.allsort}</td>
                  {/neq}
                  <td>{$vo.id}</td>
                  <td>{$cpcategory[$vo['typeid']]}</td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('cpedit',['id'=>$vo['id']])}" title="修改-{$vo.title}">{$vo.title}</u></td>
                  <td>{$vo.name}</td>
                  <td>{$vo.ftime}</td>
                  <td>{$vo.ftitle}</td>
                  <td>{if condition="$vo['issys'] eq 1"}系统彩{else /}第三方彩{/if}</td>
                  <td>
                    <?php
                    $qishu = M('caipiaotimes')->where(['name'=>$vo['name']])->count();
                    echo $qishu?:0;
                    ?>
                  </td>
                  <td>
                    <u iswh-url="{:url('setstatus',['id'=>$vo['id'],'name'=>'iswh'])}" value="{if condition="$vo['iswh'] eq 0"}正常{elseif condition="$vo['iswh'] eq 1" /}维护中{/if}">
                      <input type="checkbox" class="userId" lay-skin="switch" lay-text="正常|维护中" {if condition='$vo[iswh] eq 0'}checked{elseif condition='$vo[iswh] eq 1' /}{/if}/>
                    </u>
                  </td>
                  <td>
                    <u lock-url="{:url('setstatus',['id'=>$vo['id'],'name'=>'isopen'])}" value="{if condition="$vo['isopen'] eq 1"}启用{elseif condition="$vo['isopen'] eq 0" /}禁用{/if}">
                      <input type="checkbox" class="userId" lay-skin="switch" lay-text="启用|禁用" {if condition='$vo[isopen] eq 1'}checked{elseif condition='$vo[isopen] eq 0' /}{/if}/>
                    </u>
                  </td>
                  <td>
                    <u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('cpedit',['id'=>$vo['id']])}" title="修改-{$vo.title}">修改</u>
                    <u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('delete',['id'=>$vo['id']])}" title="删除">删除</u>
                  </td>
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
      $(document).on("click", "[iswh-url]", function() {
        var obj       = $(this);
        var url       = $(this).attr('iswh-url');
        var issuccess = obj.hasClass('label-success');
        $.getJSON(url, function(json){
          if(json.status==1){
            layer.msg('操作成功',{icon: 1,time:1000});
          }else{
            layer.msg(json.info,{icon: 2,time:2000});
          };
        });
      });
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
  </body>
  </html>
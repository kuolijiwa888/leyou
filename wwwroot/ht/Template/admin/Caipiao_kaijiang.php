<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开奖管理</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
  <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
  <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
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
                <label class="layui-form-label"style="width: 35px;">排序:</label>
                <div class="layui-input-inline">
                  <select name="ordertype" onChange="window.location.href = this.value" lay-filter="test">
                    <option value="">请选择</option>
                    {foreach name="cpcategory" item="cptype" key="cpk"}
                    <optgroup label="{$cptype}">
                      {volist name="cplist" id="cpv"}
                      {if condition="$cpk eq $cpv['typeid']"}
                      <option value="{:url('kaijiang',['name'=>$cpv['name']])}" {if condition="$cpv['name'] eq $name"}selected{/if}>{$cpv.title}</option>
                      {/if}
                      {/volist}
                    </optgroup>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width: 35px;">期号:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$expect}" name="expect" class="layui-input" placeholder="输入期号"/>
                </div>
              </div>
              <input type="hidden" name="name" value="{$name}">
              <div class="layui-inline">&emsp;
                <button class="layui-btn icon-btn" type="submit" lay-filter="loginRecordTbSearch" lay-submit>
                  <i class="layui-icon">&#xe615;</i>搜索
                </button>&nbsp;
              </div>
              <div class="layui-inline">&emsp;
                <a class="layui-btn icon-btn" layer-url="{:U('kaijiangadd')}" title="添加ab开奖">
                  <i class="layui-icon">&#xe615;</i>添加开奖
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
                  <th lay-data="{field:'shangji',sort:true,align: 'center'}">来源</th>
                  <th lay-data="{field:'useredit',align: 'center',width:165}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="olist" id="vo"}
                <tr>
                  <td>{$cptitle}</td>
                  <td>{$vo.expect}<input id="expect-{$vo.id}" defaultValue="{$vo.expect}" class="layui-input" readonly type="hidden" style="width:160px;height: 28px;" name="" value="{$vo.expect}"></td>
                  <td><input id="opencode-{$vo.id}" defaultValue="{$vo.opencode}" class="layui-input input-change" type="text" style="width:160px;height: 28px;" name="" value="{$vo.opencode}"></td>
                  <td><input id="opentime-{$vo.id}" defaultValue="{$vo.opentime|date='Y-m-d H:i:s',###}" class="layui-input input-change" type="text" style="width:160px;height: 28px;" name="" value="{$vo.opentime|date='Y-m-d H:i:s',###}"></td>
                  <td>{$vo.source}</td>
                  <td>
                     <u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="chongzhi({$vo.id});">重置开奖</u>
                    <u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" onClick="baocun({$vo.id});">保存</u>
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
      $("input.input-change").blur(function(){
        var defaultvalue = $(this).attr('defaultValue'),
        value        = $(this).val();
        if(defaultvalue!=value){
          $(this).addClass('danger');
        }else{
          $(this).removeClass('danger');
        }
      });
      function baocun($id){
        var opencode  = $(".layui-table-cell #opencode-"+$id),
        opentime  = $(".layui-table-cell #opentime-"+$id),
        url       = "{:url('kjbaocun')}";
        layer.confirm('确定修改吗？',function(index){
          $.post(url,{'id':$id,'opencode':opencode.val(),'opentime':opentime.val()}, function(json){
            if(json.status==1){
              layer.msg(json.info,{icon:1,time:2000});
            }else if(json.status==0){
              layer.msg(json.info,{icon:2,time:3000});
            }

          }, "json");
        });
      };
      function chongzhi($id){
        var url       = "{:url('kjchongzhi')}";
        layer.confirm('重置开奖针对部分投注未开奖的将会重新开奖，已经开奖的开奖结果不变？',function(index){
          $.post(url,{'id':$id}, function(json){
            if(json.status==1){
              layer.msg(json.info,{icon:1,time:2000});
            }else if(json.status==0){
              layer.msg(json.info,{icon:2,time:3000});
            }

          }, "json");
        });
      };
    </script>
  </body>
  </html>
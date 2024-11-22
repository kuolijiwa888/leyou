<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>系统彩预开奖管理</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
      <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
    <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
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
                <label class="layui-form-label"style="width: 35px;">排序:</label>
                <div class="layui-input-inline">
                  <select name="ordertype" onChange="window.location.href = this.value" lay-filter="test">
                    <option value="">请选择</option>
                    {foreach name="cpcategory" item="cptype" key="cpk"}
                    <optgroup label="{$cptype}">
                      {volist name="cplist" id="cpv"}
                      {if condition="$cpk eq $cpv['typeid']"}
                      <option value="{:U('yukaijiang',['name'=>$cpv['name']])}" {if condition="$cpv['name'] eq $name"}selected{/if}>{$cpv.title}</option>
                      {/if}
                      {/volist}
                    </optgroup>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="layui-inline">&emsp;
                <a class="layui-btn icon-btn" href="{:U('yukaijianghistory')}" title="添加ab开奖">
                  <i class="layui-icon">&#xe615;</i>修改开奖历史
                </a>&nbsp;
              </div>
            </div>
          </form>

          <!-- 数据表格 -->
          <form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
            <table id="tbBasicTable" lay-filter="tbBasicTable">
              <thead>
                <tr>
                  <th lay-data="{field:'id',sort:true,align: 'center',width:200}">彩种</th>
                  <th lay-data="{field:'groupid',sort:true,align: 'center',width:200}">期号</th>
                  <th lay-data="{field:'username',sort:true,align: 'center',minWidth:200}">开奖号码</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center',width:200}">开奖时间</th>
                  <th lay-data="{field:'shangji',sort:true,align: 'center',width:160}">管理人</th>
                  <th lay-data="{field:'useredit',align: 'center',width:160}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="openlist" id="vo"}
                <tr>
                  <td>{$vo.cptitle}</td>
                  <td>{$vo.expect}<input id="expect-{$vo.expect}" type="hidden" value="{$vo.expect}"><input id="name-{$vo.expect}" type="hidden" value="{$vo.name}"></td>

                  <td>
                    <?php
                    $opencodes = array();
                    $opencodes = explode(',',$vo['opencode']);
                    ?>
                    <!--时时彩-->
                    {eq name="typeid" value="ssc"}
                    {for start="0" end="5" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="10" name="j"}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}
                    <!--11选5-->
                    {eq name="typeid" value="x5"}
                    {for start="0" end="5" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="12" name="j"}
                        <?php if($j<10)$j='0'.$j?>
                        {neq name='j' value='0'}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/neq}
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}


                    <!--PK10-->
                    {eq name="typeid" value="pk10"}
                    {for start="0" end="10" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="11" name="j"}
                        <?php if($j<10)$j='0'.$j?>
                        {neq name='j' value='0'}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/neq}
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}


                    <!--快乐8-->
                    {eq name="typeid" value="keno"}
                    {for start="0" end="20" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="81" name="j"}
                        <?php if($j<10)$j='0'.$j?>
                        {neq name='j' value='0'}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/neq}
                        {/for}
                      </select>
                    </div>
                    <?php if($i==9) echo'<br />';?>
                    {/for}
                    {/eq}


                    <!--快3-->
                    {eq name="typeid" value="k3"}
                    {for start="0" end="3" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="7" name="j"}
                        {neq name='j' value='0'}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/neq}
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}
                    <!--幸运28-->
                    {eq name="typeid" value="xy28"}
                    {for start="0" end="3" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="10" name="j"}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}
                    <!--低频彩-->
                    {eq name="typeid" value="dpc"}
                    {for start="0" end="3" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="10" name="j"}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}
                    <!--lhc-->
                    {eq name="typeid" value="lhc"}
                    {for start="0" end="7" name="i"}
                    <div class="ew-select-fixed" style="width: 55px;display: inline-block;">
                      <select lay-filter="tbBasicTbSexSel" id="opencode{$i+1}-{$vo.expect}">
                        <option value="">第{$i+1}球</option>
                        {for strat="1" end="50" name="j"}
                        <?php if($j<10)$j='0'.$j?>
                        {neq name='j' value='0'}
                        <option value="{$j}" {if condition="$opencodes[$i] eq $j"}selected{/if}>{$j}</option>
                        {/neq}
                        {/for}
                      </select>
                    </div>
                    {/for}
                    {/eq}
                  </td>
                  <td>{$vo.opentime}<input id="opentime-{$vo.expect}" type="hidden" value="{$vo.opentime}"></td>
                  <td id="stateadmin-{$vo.expect}">{$vo.stateadmin}</td>
                  <td>
                    <u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" onClick="baocun({$vo.expect});">保存</u>
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
        var sysname="{$admininfo['username']}";
        var
        opencode1  = $(".layui-table-cell #opencode1-"+$id),
        opencode2  = $(".layui-table-cell #opencode2-"+$id),
        opencode3  = $(".layui-table-cell #opencode3-"+$id),
        opencode4  = $(".layui-table-cell #opencode4-"+$id),
        opencode5  = $(".layui-table-cell #opencode5-"+$id),
        opencode6  = $(".layui-table-cell #opencode6-"+$id),
        opencode7  = $(".layui-table-cell #opencode7-"+$id),
        opencode8  = $(".layui-table-cell #opencode8-"+$id),
        opencode9  = $(".layui-table-cell #opencode9-"+$id),
        opencode10  = $(".layui-table-cell #opencode10-"+$id),
        opencode11  = $(".layui-table-cell #opencode11-"+$id),
        opencode12  = $(".layui-table-cell #opencode12-"+$id),
        opencode13  = $(".layui-table-cell #opencode13-"+$id),
        opencode14  = $(".layui-table-cell #opencode14-"+$id),
        opencode15  = $(".layui-table-cell #opencode15-"+$id),
        opencode16  = $(".layui-table-cell #opencode16-"+$id),
        opencode17  = $(".layui-table-cell #opencode17-"+$id),
        opencode18  = $(".layui-table-cell #opencode18-"+$id),
        opencode19  = $(".layui-table-cell #opencode19-"+$id),
        opencode20  = $(".layui-table-cell #opencode20-"+$id),
        name  = $(".layui-table-cell #name-"+$id),
        opentime  = $(".layui-table-cell #opentime-"+$id),
        url       = "{:url('ykjbaocun')}";
        layer.confirm('确定修改吗？',function(index){
          $.post(url,{'expect':$id,
            'opencode1':opencode1.val(),
            'opencode2':opencode2.val(),
            'opencode3':opencode3.val(),
            'opencode4':opencode4.val(),
            'opencode5':opencode5.val(),
            'opencode6':opencode6.val(),
            'opencode7':opencode7.val(),
            'opencode8':opencode8.val(),
            'opencode9':opencode9.val(),
            'opencode10':opencode10.val(),
            'opencode11':opencode11.val(),
            'opencode12':opencode12.val(),
            'opencode13':opencode13.val(),
            'opencode14':opencode14.val(),
            'opencode15':opencode15.val(),
            'opencode16':opencode16.val(),
            'opencode17':opencode17.val(),
            'opencode18':opencode18.val(),
            'opencode19':opencode19.val(),
            'opencode20':opencode20.val(),
            'name':name.val(),'opentime':opentime.val()}, function(json){
              if(json.status==1){
                opencode1.parents("tr").addClass('success');
                $("#stateadmin-"+$id).text(sysname);
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
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>注单异常检测</title>
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
              <?php $cplists = M('caipiao')->order('typeid asc,id desc')->select();?>
              <div class="layui-inline">
                <label class="layui-form-label"style="width: 35px;">彩种:</label>
                <div class="layui-input-inline">
                  <select name="cpname">
                    <option value="">全部</option>
                    {foreach name="cplists" item="cpv" key="cpk"}
                    <option value="{$cpv.name}" {if condition="$cpv['name'] eq $cpname"}selected{/if}>{$cpv.title}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width: 50px;">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width: 62px;">时间差距:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$shijiancha}" name="shijiancha" class="layui-input" placeholder="输入时间差距"/>
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
                  <th lay-data="{field:'id',sort:true,align: 'center'}">单号</th>
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">用户名</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">彩票名称</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center'}">期号</th>
                  <th lay-data="{field:'shangji',sort:true,align: 'center'}">玩法</th>
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">投注金额</th>
                  <th lay-data="{field:'jinjijilu',sort:true,align: 'center'}">中奖金额</th>
                  <th lay-data="{field:'balance',sort:true,align: 'center'}">状态</th>
                  <th lay-data="{field:'point',sort:true,align: 'center'}">投注时间</th>
                  <th lay-data="{field:'fandian',sort:true,align: 'center'}">出奖时间</th>
                  <th lay-data="{field:'yeb',sort:true,align: 'center'}">时间差</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr>
                  <td>{$vo.trano}</td>
                  <td>{$vo.username}</td>
                  <td>{$vo.cptitle}</td>
                  <td>{$vo.expect}</td>
                  <td>{$vo.playtitle}</td>
                  <td>{$vo.amount}</td>
                  <td>{$vo.okamount}</td>
                  <td>{if condition="$vo['isdraw'] eq '1'"}<span class="c-green">中</span>{elseif condition="$vo['isdraw'] eq '0'" /}<span class="c-333">未开奖</span>{elseif condition="$vo['isdraw'] eq '-1'" /}<span class="c-red">未中</span>{elseif condition="$vo['isdraw'] eq '-2'" /}<span class="c-666">撤</span>{/if}</td>
                  <td>{$vo.oddtime|date="m-d H:i:s",###}</td>
                  <td>{$vo.opentime|date="m-d H:i:s",###}</td>
                  <td>{$vo['opentime'] - $vo['oddtime']}</td>
                </tr>
                {/volist}
              </tbody>
            </table>
          </div>
        </div>
        <!--div class="layui-card">
            <div class="pageNav l" style="padding:0">{$page}</div>
            <div class="r">共有数据：<strong>{$totalcount}</strong> 条 </div>
        </div-->
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
          limit: 20,
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
  </body>
  </html>
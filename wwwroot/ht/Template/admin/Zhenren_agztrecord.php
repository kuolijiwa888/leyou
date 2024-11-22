<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>AG投注记录</title>
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
          <!-- 数据表格 -->
          <form method="post" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
            <table id="tbBasicTable" lay-filter="tbBasicTable">
              <thead>
                <tr>
                  <th lay-data="{field:'id',sort:true,align: 'center'}">ID</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">注单ID</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center'}">玩家名称</th>
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">平台类型</th>
                  <th lay-data="{field:'jinjijilu',sort:true,align: 'center'}">游戏类型</th>
                  <th lay-data="{field:'balance1',sort:true,align: 'center'}">下注金额</th>
                  <th lay-data="{field:'balance2',sort:true,align: 'center'}">有效投注金额</th>
                  <th lay-data="{field:'balance3',sort:true,align: 'center'}">输赢金额</th>
                  <th lay-data="{field:'balance4',sort:true,align: 'center'}">游戏名称</th>
                  <th lay-data="{field:'balance5',sort:true,align: 'center'}">下注内容</th>
                  <th lay-data="{field:'balance6',sort:true,align: 'center'}">开奖结果</th>
                  <th lay-data="{field:'balance7',sort:true,align: 'center'}">下注时间</th>
                  <th lay-data="{field:'balance8',sort:true,align: 'center'}">最后更新时间</th>
                  <th lay-data="{field:'balance9',sort:true,align: 'center'}">状态</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr>
                  <td>{$vo.id}</td>
                  <td>{$vo.betId}</td>
                  <td>{$vo.username}</td>
                  <td>{$vo.platType}</td>
                  <td>{if condition="$vo.gameType eq 1"}真人娱乐{elseif condition="$vo.gameType eq 2"/}电子游戏{elseif condition="$vo.gameType eq 3"/}彩票游戏{elseif condition="$vo.gameType eq 4"/}体育竞技{elseif condition="$vo.gameType eq 5"/}电竞游戏{elseif condition="$vo.gameType eq 6"/}捕鱼游戏{elseif condition="$vo.gameType eq 7"/}棋牌游戏{/if}</td>
                  <td>{$vo.betAmount}</td>
                  <td>{$vo.validAmount}</td>
                  <td>{$vo.winLoss}</td>
                  <td>{$vo.gameName}</td>
                  <td>{$vo.betContent}</td>
                  <td>{$vo.awardResult}</td>
                  <td>{$vo.betTime}</td>
                  <td>{$vo.lastUpdateTime}</td>
                  <td>{if condition="$vo.status eq 1"}已结算{elseif condition="$vo.status eq 2"/}未结算{elseif condition="$vo.status eq 0"/}无效注单{/if}</td>
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
          format: 'yyyy-MM-dd',
        });
        laydate.render({
          elem: '#tbAdvSelDate1',
          format: 'yyyy-MM-dd'
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
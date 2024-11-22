<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>彩种投注统计</title>
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
                <label class="layui-form-label">注册时间:</label>
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
                <label class="layui-form-label">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
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
          <div id="pincharts3d"></div>
          <div id="container1" style="height: 700px;padding:10px 0;display:block;"></div>
        </div>
        {include file="Public/footer" /}

        <!-- js部分 -->
        <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
        <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
        <script type="text/javascript" src="./ascn/js/echarts.min.js"></script>

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
          limit: 20,
          totalRow: true
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


    <script type="text/javascript">
      var dom1 = document.getElementById("container1");
      var myChart = echarts.init(dom1);
      var app = {};

      var option;
      option = {
        title: {
          text: '{$title}-单位 (元)',
          subtext: '{$subtitle}'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          data: ['充值金额', '提款金额']
        },
        toolbox: {
          show: true,
          feature: {
            dataView: {show: false, readOnly: false},
            magicType: {show: true, type: ['line', 'bar']},
            restore: {show: true},
            saveAsImage: {show: true}
          }
        },
        calculable: true,
        xAxis: [
        {
          type: 'category',
          data: [{$dates}]
        }
        ],
        yAxis: [
        {
          type: 'value'
        }
        ],
        series: [
        {
          name: '充值金额',
          type: 'bar',
          data: [{$chongzhis}],
          markPoint: {
            data: [
            {type: 'max', name: '最大值'},
            {type: 'min', name: '最小值'}
            ]
          },
          markLine: {
            data: [
            {type: 'average', name: '平均值'}
            ]
          }
        },
        {
          name: '提款金额',
          type: 'bar',
          data: [{$tikuans}],
          markPoint: {
            data: [
            {type: 'max', name: '最大值'},
            {type: 'min', name: '最小值'}
            ]
          },
          markLine: {
            data: [
            {type: 'average', name: '平均值'}
            ]
          }
        }
        ]
      };
      if (option && typeof option === 'object') {
        myChart.setOption(option);
      }
    </script>
  </body>
  </html>
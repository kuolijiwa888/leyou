<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>统计概况</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
  <link rel="stylesheet" href="./assets/ascn/css/style.css"/>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
  <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
  <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
</head>
<style>
  .border-danger-outline{
    border:1px solid #dd514c;
  }
  .border-success-outline{
    border:1px solid #5eb95e;
  }
  .tabBar1 {border-bottom: 2px solid #19a97b}
  .tabBar1 span {background-color: #e8e8e8;cursor: pointer;display: inline-block;float: left;
    font-weight: bold;height: 30px;line-height: 30px;padding: 0 15px}
    .tabBar1 span.current{background-color: #19a97b;color: #fff}

  </style>
  <style>
    pre{
      display: none;
    }
  </style>
  <style>
    /** 应用快捷块样式 */
    .console-app-group {
      padding: 16px;
      border-radius: 4px;
      text-align: center;
      background-color: #fff;
      cursor: pointer;
      display: block;
    }

    .console-app-group .console-app-icon {
      width: 32px;
      height: 32px;
      line-height: 32px;
      margin-bottom: 6px;
      display: inline-block;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      font-size: 32px;
      color: #69c0ff;
    }

    .console-app-group:hover {
      box-shadow: 0 0 15px rgba(0, 0, 0, .08);
    }

    /** //应用快捷块样式 */

    /** 小组成员 */
    .console-user-group {
      position: relative;
      padding: 10px 0 10px 60px;
    }

    .console-user-group .console-user-group-head {
      width: 32px;
      height: 32px;
      position: absolute;
      top: 50%;
      left: 12px;
      margin-top: -16px;
      border-radius: 50%;
    }

    .console-user-group .layui-badge {
      position: absolute;
      top: 50%;
      right: 8px;
      margin-top: -10px;
    }

    .console-user-group .console-user-group-name {
      line-height: 1.2;
    }

    .console-user-group .console-user-group-desc {
      color: #8c8c8c;
      line-height: 1;
      font-size: 12px;
      margin-top: 5px;
    }

    /** 卡片轮播图样式 */
    .admin-carousel .layui-carousel-ind {
      position: absolute;
      top: -41px;
      text-align: right;
    }

    .admin-carousel .layui-carousel-ind ul {
      background: 0 0;
    }

    .admin-carousel .layui-carousel-ind li {
      background-color: #e2e2e2;
    }

    .admin-carousel .layui-carousel-ind li.layui-this {
      background-color: #999;
    }

    /** 广告位轮播图 */
    .admin-news .layui-carousel-ind {
      height: 45px;
    }

    .admin-news a {
      display: block;
      line-height: 70px;
      text-align: center;
    }

    /** 最新动态时间线 */
    .layui-timeline-dynamic .layui-timeline-item {
      padding-bottom: 0;
    }

    .layui-timeline-dynamic .layui-timeline-item:before {
      top: 16px;
    }

    .layui-timeline-dynamic .layui-timeline-axis {
      width: 9px;
      height: 9px;
      left: 1px;
      top: 7px;
      background-color: #cbd0db;
    }

    .layui-timeline-dynamic .layui-timeline-axis.active {
      background-color: #0c64eb;
      box-shadow: 0 0 0 2px rgba(12, 100, 235, .3);
    }

    .dynamic-card-body {
      box-sizing: border-box;
      overflow: hidden;
    }

    .dynamic-card-body:hover {
      overflow-y: auto;
      padding-right: 9px;
    }

    /** 优先级徽章 */
    .layui-badge-priority {
      border-radius: 50%;
      width: 20px;
      height: 20px;
      padding: 0;
      line-height: 18px;
      border-width: 2px;
      font-weight: 600;
    }

  </style>
  <body>
    <div class="layui-fluid by-body-card">

      <div class="ant-card"style="margin-bottom: 16px;">
        <div class="ant-card-notice">
          <div class="ant-card-ok">
            <div class="ant-card-notice-user"style="display:flex;align-items: center;">
              <span><img src="./assets/images/head.jpg"></span>
              <div style="padding-left:12px"style="flex:1;">
                <h4 style="margin-bottom: 6px;font-size: 20px;">
                  <script language="javaScript">
                    now = new Date(),hour = now.getHours()
                    if(hour < 5){
                      document.write("凌晨好，老板，还没睡吧？");
                    }else if (hour < 9){
                      document.write("早安，老板，开始您一天的工作吧！");
                    }else if (hour < 12){
                      document.write("上午好，老板，开始您一天的工作吧！");
                    }else if (hour < 14){
                      document.write("中午好，老板，吃了吗？");
                    }else if (hour < 17){
                      document.write("下午好，老板。");
                    }else if (hour < 19){
                      document.write("傍晚好，老板。");
                    }else if (hour < 22){
                      document.write("晚上好，老板。");
                    }else {
                      document.write("夜里好，老板，注意休息。");
                    }
                  </script>
                </h4>
                <div style="color: rgba(0,0,0,.45);">
                  <em style="padding: 0 .5em;">今日多云转阴，18℃ - 22℃，出门记得穿外套哦~</em>
                </div>
              </div>
            </div>
            <div class="ant-card-notice-group">
              <div class="notice-group">
                <div class="notice-group-title">
                  <span class="span-icon ant-tag-green"><i class="layui-icon layui-icon-group"></i></span>
                  <span style="margin-left: 8px;">代理/会员</spam>
                  </div>
                  <span style="font-size:24px">{$usertongji.userdailiall}/{$usertongji.userputongall}</span>
                  <em>/人</em>
                </div>
                <div class="notice-group">
                  <div class="notice-group-title">
                    <span class="span-icon ant-tag-blue"><i class="layui-icon layui-icon-chart"style="font-weight: bold;"></i></span>
                    <span style="margin-left: 8px;">当前在线</spam>
                    </div>
                    <span style="font-size:24px">{$usertongji.useronlineall}</span>
                    <em>/人</em>
                  </div>
                  <div class="notice-group">
                    <div class="notice-group-title">
                      <span class="span-icon ant-tag-red"><i class="layui-icon layui-icon-cart"style="font-weight: bold;"></i></span>
                      <span style="margin-left: 8px;">账户可用</spam>
                      </div>
                      <span style="font-size:24px">{$usertongji.userbalanceall}</span>
                      <em>/元</em>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="layui-row layui-col-space15"style="margin-bottom: 16px;">
              <div class="layui-col-sm6" style="padding-bottom: 0;">
                <div class="layui-row layui-col-space15">
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-group" style="font-size: 26px;padding-top: 3px;margin-right: 6px;"></i>
                      <div class="console-app-name">总充值</div>
                      <div class="console-app-name">{$yingkuis['zidchongzhiall'] + $yingkuis['sdjiachongzhiall'] -$yingkuis['sdjianchongzhiall']}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-chart" style="color: #95de64;"></i>
                      <div class="console-app-name">手动加</div>
                      <div class="console-app-name">{$yingkuis.sdjiachongzhiall}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-cart" style="color: #ff9c6e;"></i>
                      <div class="console-app-name">手动减</div>
                      <div class="console-app-name">{$yingkuis.sdjianchongzhiall}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-form" style="color: #b37feb;font-size: 30px;"></i>
                      <div class="console-app-name">提款</div>
                      <div class="console-app-name">{$yingkuis.tikuanall}</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="layui-col-sm6" style="padding-bottom: 0;">
                <div class="layui-row layui-col-space15">
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-layer" style="color: #ffd666;font-size: 34px;"></i>
                      <div class="console-app-name">投注</div>
                      <div class="console-app-name">{$yingkuis.touzhuall}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-email" style="color: #5cdbd3;font-size: 36px;"></i>
                      <div class="console-app-name">中奖</div>
                      <div class="console-app-name">{$yingkuis.zhongjiangall}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-note" style="color: #ff85c0;font-size: 28px;"></i>
                      <div class="console-app-name">活动</div>
                      <div class="console-app-name">{$yingkuis.huodongall}</div>
                    </div>
                  </div>
                  <div class="layui-col-xs6 layui-col-sm3">
                    <div class="console-app-group"style="padding: 8px;">
                      <i class="console-app-icon layui-icon layui-icon-slider" style="color: #ffc069;"></i>
                      <div class="console-app-name">充提盈亏</div>
                      <div class="console-app-name">{$yingkuis.ctyingkui}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bootom-zst">
              <div style="display:flex;margin-bottom: 10px;">
                <form class="layui-form toolbar" method="get" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}"style="flex:1">
                  <div class="layui-form-item">
                    <div class="layui-inline"style="margin-bottom:0">
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
                    <div class="layui-inline"style="margin-bottom:0">&emsp;
                      <button class="layui-btn icon-btn" type="submit" lay-filter="loginRecordTbSearch" lay-submit>
                        <i class="layui-icon">&#xe615;</i>查询
                      </button>&nbsp;
                    </div>
                  </div>
                </form>
                <div class="fenlei">
                  <div class="">
                    <span class="{if condition="$Think.get.typeid eq ssc"}layui-form-onswitch{/if}"><a href="?typeid=ssc">时时彩</a></span>
                    <span class="{if condition="$Think.get.typeid eq k3"}layui-form-onswitch{/if}"><a href="?typeid=k3">快三</a></span>
                    <span class="{if condition="$Think.get.typeid eq x5"}layui-form-onswitch{/if}"><a href="?typeid=x5">11选5</a></span>
                    <span class="{if condition="$Think.get.typeid eq keno"}layui-form-onswitch{/if}"><a href="?typeid=keno">快乐彩</a></span>
                    <span class="{if condition="$Think.get.typeid eq PK10"}layui-form-onswitch{/if}"><a href="?typeid=PK10">PK拾</a></span>
                    <span class="{if condition="$Think.get.typeid eq dpc"}layui-form-onswitch{/if}"><a href="?typeid=dpc">低频彩</a></span>
                  </div>
                </div>
              </div>
              <div style="display:flex">
                <div style="flex:3">
                  <div id="container" style="height: 300px;padding:10px 0;display:block;"></div>
                </div>
                <div style="flex:1">
                  <div id="container1" style="height: 300px;padding:10px 0;display:block;"></div>
                </div>
              </div>
            </div>
          </div>



          <script>
            layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate'], function () {
              var $ = layui.jquery;
              var layer = layui.layer;
              var form = layui.form;
              var table = layui.table;
              var util = layui.util;
              var dropdown = layui.dropdown;
              var laydate = layui.laydate;
              var insTb = layui.table;
              insTb.init('tbBasicTable', {
                page: true,
                limit: 20,
                totalRow: true
              }); 

              laydate.render({
                elem: '#tbAdvSelDate',
                format: 'yyyyMMdd',
              });
              laydate.render({
                elem: '#tbAdvSelDate1',
                format: 'yyyyMMdd'
              });
            });
          </script>

          <script type="text/javascript">
            var dom = document.getElementById("container");
            var myChart = echarts.init(dom);
            var app = {};
            var option;
            option = {
              color: ['#2d8cf0', '#ff85c0', '#b37feb', ],
              legend: {},
              tooltip: {},
              dataset: {
                source: [
                ['product', '投注金额', '中奖金额', '下注盈亏'],
                {volist name="cplist" id="vo"}
                ['{$vo.title}', {$vo['touzhuall']?$vo['touzhuall']:0}, {$vo['zhongjiangall']?$vo['zhongjiangall']:0}, {$vo['touzhuall'] - $vo['zhongjiangall']}],
                {/volist}

                ]
              },
              xAxis: {type: 'category'},
              grid: {
                top: '10%',
                left: '1%',
                right: '1%',
                bottom: '1%',
                containLabel: true
              },
              yAxis: {},
              series: [
              {type: 'bar'},
              {type: 'bar'},
              {type: 'bar'}
              ]
            };

            if (option && typeof option === 'object') {
              myChart.setOption(option);
            }

          </script>
          <script type="text/javascript">
            var dom1 = document.getElementById("container1");
            var myChart = echarts.init(dom1);
            var app = {};

            var option;



            option = {
              color: ['#2d8cf0', '#ff85c0', '#b37feb', ],
              title: {
                text: '',
                subtext: '总合统计',
                left: 'right'
              },
              tooltip: {
                trigger: 'item'
              },
              legend: {
                orient: 'vertical',
                left: 'left',
              },

              series: [
              {
                type: 'pie',
                radius: '60%',
                data: [
                {value: {$cpxiaoji['touzhuall']?$cpxiaoji['touzhuall']:0}, name: '投注金额'},
                {value: {$cpxiaoji['zhongjiangall']?$cpxiaoji['zhongjiangall']:0}, name: '中奖金额'},
                {value: {$cpxiaoji['touzhuall'] - $cpxiaoji['zhongjiangall']}, name: '下注盈亏'}
                ],
                emphasis: {
                  itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                  }
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
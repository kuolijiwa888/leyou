<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>商户管理</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
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
</head>
<body>
  <!-- 正文开始 -->
  <div class="layui-fluid ew-console-wrapper">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            通用额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['tyscore']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            AG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ag']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            AGS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ags']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            ALLBET额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['allbet']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            BBIN额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['bbin']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            CS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['cs']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            CSK额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['csk']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            BG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['bg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            OG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['og']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            MG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['mg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            PT额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['pt']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            LEBO额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['lebo']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GD额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gd']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            DG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['dg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GPI额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gpi']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            PP额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['pp']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            TTG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ttg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            QT额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['qt']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SUNBET额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sunbet']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SUNBETS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sunbets']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SA额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sa']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            IBC额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ibc']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ss']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            开元棋牌额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ky']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            MW额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['mw']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            CQ9额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['cq9']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            VR额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['vr']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            EG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['eg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GJ额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gj']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            IG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ig']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            MT额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['mt']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            JDB额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['jdb']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            ESB额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['esb']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            VG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['vg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            NEWBB额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['newbb']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            FG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['fg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            HC额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['hc']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            AVIA额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['avia']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            LEG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['leg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SW额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sw']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            BNG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['bng']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            DT额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['dt']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            PG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['pg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            PNG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['png']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GTI额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gti']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            AP额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ap']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SGL额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sgl']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SGP额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sgp']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GA额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ga']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            EBET额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['ebet']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GNS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gns']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            HB额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['hb']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            RT额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['rt']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            GG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['gg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            BL额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['bl']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            ISB额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['isb']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            PGS额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['pgs']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            IM额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['im']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            SEXY额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['sexy']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            FH额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['fh']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            NW额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['nw']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            RMG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['rmg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            TCG额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['tcg']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
      <div class="layui-col-xs12 layui-col-sm6 layui-col-md2">
        <div class="layui-card">
          <div class="layui-card-header">
            S128额度<span class="layui-badge layui-badge-red pull-right">最新</span>
          </div>
          <div class="layui-card-body">
            <p class="lay-big-font"style="color: #666;">{$res['data']['s128']}<span style="font-size: 18px;line-height: 1;color:#666;">￥</span></p>
            <p>游戏类型<span class="pull-right"style="font-size: 18px;line-height: 1;">NG</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- js部分 -->
  <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
  <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
  <script>
    layui.use(['layer', 'carousel', 'element'], function () {
      var $ = layui.jquery;
      var layer = layui.layer;
      var carousel = layui.carousel;
      var device = layui.device();


      carousel.render({
        elem: '#workplaceNewsCarousel',
        width: '100%',
        height: '70px',
        arrow: 'none',
        autoplay: true,
        trigger: device.ios || device.android ? 'click' : 'hover',
        anim: 'fade'
      });

    });
  </script>
</body>
</html>

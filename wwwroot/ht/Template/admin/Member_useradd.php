<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>会员添加/修改</title>
  <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
  <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
  <style>
    #AjaxPostForm {
      max-width: 700px;
      margin: 30px auto;
    }

    #AjaxPostForm .layui-form-item {
      margin-bottom: 25px;
    }
    .layui-upload-img {
      width: 92px;
      height: 92px;
      margin: 0 10px 10px 0;
    }
  </style>
</head>
<body>
  <!-- 正文开始 -->
  <div class="layui-fluid">
    <div class="layui-card">
      <div class="layui-card-body">
        <!-- 表单开始 -->
        <form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
          {present name="info"}
          <input name="id" type="hidden" value="{$info[$_pk]}">
          {/present}
          <div class="layui-form-item">
            <label class="layui-form-label layui-form-required">会员组:</label>
            <div class="layui-input-block">
              <select name="groupid" lay-verType="tips" lay-verify="required" required>
                <option value="0">无分组</option>
                {volist name="grouplist" id="gvo"}
                <option value="{$gvo.groupid}" {if condition="$gvo['groupid'] eq $info['groupid']"}selected{/if}>{$gvo.groupname}({$gvo.touhan})</option>
                {/volist}
              </select>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">类型:</label>
            <div class="layui-input-block" id="IsPurchased">
              <input name="proxy" type="radio" id="proxy-1" value="1" {if condition="$info['proxy'] eq 1"}checked{/if} title="代理">
              <input type="radio" id="proxy-0" name="proxy" value="0" {if condition="$info['proxy'] eq 0"}checked{/if} title="会员">
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">用户名:</label>
            <div class="layui-input-block">
              <input type="text" value="{$info.username}" placeholder="用户名" name="username" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">时时彩返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[ssc]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">快三返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[k3]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">十一选五返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[x5]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">排列三返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[pl3]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">快乐八返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[kl8]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">PK拾返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[pk10]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">六合彩返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[lhc]" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">幸运28返点:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="代理默认返点7.5%,员默认返点6.0%,最大返点{:GetVar('fanDianMax')}%" name="fandian[xy28]" class="layui-input"/>
            </div>
          </div>
          {present name="info"}
          <div class="layui-form-item">
            <label class="layui-form-label">银行真实姓名:</label>
            <div class="layui-input-block">
              <input type="text" value="{$info.userbankname}" placeholder="银行真实姓名" name="userbankname" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">密码:</label>
            <div class="layui-input-block">
              <span>不修改留空</span><input type="text" value="" placeholder="密码" name="password" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">资金密码:</label>
            <div class="layui-input-block">
              <span>不修改留空</span><input type="text" value="" placeholder="密码" name="tradepassword" class="layui-input"/>
            </div>
          </div>
          {else /}
          <div class="layui-form-item">
            <label class="layui-form-label">密码:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="密码" name="password" class="layui-input"/>
            </div>
          </div>
          <div class="layui-form-item">
            <label class="layui-form-label">资金密码:</label>
            <div class="layui-input-block">
              <input type="text" value="" placeholder="资金密码" name="tradepassword" class="layui-input"/>
            </div>
          </div>
          {/present}
          <div class="layui-form-item">
            <label class="layui-form-label">内部帐号:</label>
            <div class="layui-input-block" id="IsPurchased">
              <input type="radio" id="isnb-1" name="isnb" value="1" {if condition="$info['isnb'] eq 1"}checked{/if} title="是">
              <input type="radio" id="isnb-0" name="isnb" value="0" {if condition="$info['isnb'] eq 0"}checked{/if} title="否">
            </div>
          </div>

          <div class="layui-form-item">
            <div class="layui-input-block">
              <button type="submit" class="layui-btn" lay-filter="formBasSubmit" lay-submit>&emsp;提交&emsp;</button>
            </div>
          </div>
        </form>
        <!-- //表单结束 -->
      </div>
    </div>
  </div>
  {include file="Public/footer" /}
  <!-- js部分 -->
  <script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
  <script type="text/javascript" src="./assets/js/common.js?v=318"></script>
  <script>
    layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate','layedit'], function () {
      var $ = layui.jquery;
      var layer = layui.layer;
      var form = layui.form;
      var table = layui.table;
      var util = layui.util;
      var dropdown = layui.dropdown;
      var laydate = layui.laydate;
      var layedit = layui.layedit;
      layedit.build('ascntext'); 


      /* 渲染laydate */
      laydate.render({
        elem: '#tbAdvSelDate',
        type: 'time',
        format: 'HH:mm',
      });
      laydate.render({
        elem: '#tbAdvSelDate1',
        type: 'time',
        format: 'HH:mm',
      });
      form.on('radio(ascn)', function (data) {        
        xitongcaiset($('#IsPurchased input[name="isonline"]:checked').val());
      });
    });


    function xitongcaiset(type){
      if(type==1){
        $("#payisonline1").show();
        $("#payisonline0").hide();
      }else if(type==-1){
        $("#payisonline0").show();
        $("#payisonline1").hide();
      }
    }
  </script>
</body>
</html>
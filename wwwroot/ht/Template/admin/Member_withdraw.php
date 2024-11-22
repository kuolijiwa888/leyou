<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>提款记录</title>
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
              <div class="layui-inline">
                <?php $fuddetailtypes = C('fuddetailtypes');?>
                <label class="layui-form-label"style="width:35px;">全部:</label>
                <div class="layui-input-inline">
                  <select name="state">
                    <option value="">全部</option>
                    <option value="0" {if condition="($state eq 0) and ($state neq '')"}selected{/if}>未审核</option>
                    <option value="1" {if condition="$state eq 1"}selected{/if}>已完成</option>
                    <option value="2" {if condition="$state eq 2"}selected{/if}>退回</option>
                    <option value="3" {if condition="$state eq 3"}selected{/if}>取消</option>
                  </select>
                </div>
              </div>
              <input type="hidden" name="uid" value="{$info.id}">
              <div class="layui-inline">
                <label class="layui-form-label"style="width:62px;">选择时间:</label>
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
                <label class="layui-form-label"style="width:35px;">金额:</label>
                <div class="layui-input-inline">
                  <input type="text" name="sAmout" value="{$_sAmout}" class="layui-input" placeholder="输入最小金额"/>
                </div>
                <div class="layui-form-mid" style="margin-right: 1px;">-</div>
                <div class="layui-input-inline">
                  <input type="text" value="{$_eAmout}" name="eAmout" class="layui-input" placeholder="输入最大金额"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px;">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px;">单号:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$trano}" name="trano" class="layui-input" placeholder="输入单号"/>
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
                  <th lay-data="{field:'trano',sort:true,minWidth: 200,align: 'center'}">平台单号</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">用户名</th>
                  <th lay-data="{field:'accountname',sort:true,align: 'center'}">姓名</th>
                  <th lay-data="{field:'bankname',sort:true,align: 'center'}">银行</th>
                  <th lay-data="{field:'banknumber',sort:true,align: 'center'}">银行账号</th>
                  <th lay-data="{field:'amount',sort:true,align: 'center'}">金额</th>
                  <th lay-data="{field:'actualamount',sort:true,align: 'center'}">实到金额</th>
                  <th lay-data="{field:'fee',sort:true,align: 'center'}">手续费</th>
                  <th lay-data="{field:'oldaccountmoney',sort:true,align: 'center'}">变更前金额</th>
                  <th lay-data="{field:'newaccountmoney',sort:true,align: 'center'}">变更后金额</th>
                  <th lay-data="{field:'oddtime',sort:true,align: 'center'}">时间</th>
                  <th lay-data="{field:'state',align: 'center'}">状态</th>
                  <th lay-data="{field:'rechargedelete',align: 'center',width: 75}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {php}$yemiantotal = 0;{/php}
                {volist name="list" id="vo"}
                {php}
                if($vo['state']==1)$yemiantotal += $vo['amount'];
                {/php}
                <tr>
                  <td>{$vo.trano}</td>
                  <td>{$vo.username}</td>
                  <td>{$vo.accountname}</td>
                  <td>{$vo.bankname}</td>
                  <td>{$vo.banknumber}</td>
                  <td>{$vo.amount}</td>
                  <td>{$vo.actualamount}</td>
                  <td>{$vo.fee}</td>
                  <td>{$vo.oldaccountmoney}</td>
                  <td>{$vo.newaccountmoney}</td>
                  <td>{$vo.oddtime|date="m-d H:i",###}</td>
                  <td>
                    {if condition="$vo['state'] eq 0"}
                    <u style="cursor:pointer;color:red" class="text-primary" layer-url="{:U('withdrawstate',['id'=>$vo['id']])}" title="编辑订单-{$vo.trano}状态">未审核</u>
                    {elseif condition="$vo['state'] eq 1" /}
                    <span style="color:green">已完成</span>
                    {elseif condition="$vo['state'] eq -1" /}
                    <span style="color:grey">退回</span>
                    {else /}
                    未知
                    {/if}
                  </td>
                  <td><a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del" layer-del-url="{:U('withdrawdelete',array('id'=>$vo['id']))}">删除</a></td>
                </tr>
                {/volist}
              </tbody>
            </table>
          </div>
        </div>
        <div class="layui-card">
            <div class="pageNav l" style="padding:0">{$page}</div>
            <div class="r">共有数据：<strong>{$totalcount}</strong> 条 </div>
            <div class="layui-card-body">
            <div class="l" style="padding:0">总提款：<strong style="color:#f60">{$withdrawtotal}</strong>({$withdrawtotal_count}笔)&nbsp;&nbsp;&nbsp;&nbsp;页面成功：<strong style="color:#f60">{$yemiantotal}</strong>元</div>
        </div>
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
      });
    </script>
    <script>

    </script>
  </body>
  </html>
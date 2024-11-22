<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>会员管理</title>
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
    .layui-unselect.layui-form-checkbox{
        margin: 0;
        margin-right: 10px;
        margin-bottom: 10px;
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
              <div class="layui-inline">&emsp;
                <a class="layui-btn icon-btn" layer-url="{:U('useradd')}">
                  <i class="layui-icon">&#xe615;</i>添加会员
                </a>&nbsp;
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">排序:</label>
                <div class="layui-input-inline">
                  <select name="ordertype" onChange="window.location.href = this.value" lay-filter="test">
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>0]))}">默认排序</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>1]))}" {if condition="$ordertype eq 1"}selected{/if}>注册时间低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>2]))}" {if condition="$ordertype eq 2"}selected{/if}>彩票返点高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>3]))}" {if condition="$ordertype eq 3"}selected{/if}>彩票返点低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>4]))}" {if condition="$ordertype eq 4"}selected{/if}>账户金额高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>5]))}" {if condition="$ordertype eq 5"}selected{/if}>账户金额低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>6]))}" {if condition="$ordertype eq 6"}selected{/if}>账户积分高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>7]))}" {if condition="$ordertype eq 7"}selected{/if}>账户积分低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>8]))}" {if condition="$ordertype eq 8"}selected{/if}>洗码余额高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>9]))}" {if condition="$ordertype eq 9"}selected{/if}>洗码余额低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>16]))}" {if condition="$ordertype eq 16"}selected{/if}>登陆时间高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>17]))}" {if condition="$ordertype eq 17"}selected{/if}>登陆时间低到高</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>18]))}" {if condition="$ordertype eq 18"}selected{/if}>在线时间高到低</option>
                    <option value="{:U(CONTROLLER_NAME.'/'.ACTION_NAME,array_merge($_GET,['ordertype'=>19]))}" {if condition="$ordertype eq 19"}selected{/if}>在线时间低到高</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px">会员组:</label>
                <div class="layui-input-inline">
                  <select name="groupid">
                    <option value="0">全部</option>
                    {volist name="grouplist" id="gvo"}
                    <option value="{$gvo.groupid}" {if condition="$gvo['groupid'] eq $groupid"}selected{/if}>{$gvo.groupname}</option>
                    {/volist}
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">类型:</label>
                <div class="layui-input-inline">
                  <select name="proxy">
                    <option value="999">全部</option>
                    <option value="1" {if condition="$proxy eq 1"}selected{/if}>代理</option>
                    <option value="0" {if condition="$proxy eq 0"}selected{/if}>会员</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">内部:</label>
                <div class="layui-input-inline">
                  <select name="isnb">
                    <option value="999">全部</option>
                    <option value="1" {if condition="$isnb eq 1"}selected{/if}>是</option>
                    <option value="0" {if condition="$isnb eq 0"}selected{/if}>否</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">姓名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$userbankname}" name="userbankname" class="layui-input" placeholder="输入姓名"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">QQ:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$qq}" name="qq" class="layui-input" placeholder="输入QQ"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:35px">昵称:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$nickname}" name="nickname" class="layui-input" placeholder="输入昵称"/>
                </div>
              </div>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:50px">登陆IP:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$loginip}" name="loginip" class="layui-input" placeholder="输入登陆IP"/>
                </div>
              </div>
              <input type="checkbox" value="1" name="isonline" title="在线" {if condition="$isonline eq 1"}checked{/if}>
              <div class="layui-inline">
                <label class="layui-form-label"style="width:62px">注册时间:</label>
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
                <label class="layui-form-label"style="width:35px">金额:</label>
                <div class="layui-input-inline">
                  <input type="text" name="sAmout" value="{$_sAmout}" class="layui-input" placeholder="输入最小金额"/>
                </div>
                <div class="layui-form-mid" style="margin-right: 1px;">-</div>
                <div class="layui-input-inline">
                  <input type="text" value="{$_eAmout}" name="eAmout" class="layui-input" placeholder="输入最大金额"/>
                </div>
              </div>
              {present name="parentid"}
              <input name="parentid" type="hidden" value="{$parentid}">
              <a class="btn btn-default-outline radius" href="{:U('manage',['parentid'=>$parentid])}">重置</a>
              {else /}
              {/present}
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
                  <th lay-data="{field:'id',sort:true,align: 'center'}">ID</th>
                  <th lay-data="{field:'groupid',sort:true,align: 'center'}">会员组</th>
                  <th lay-data="{field:'username',sort:true,align: 'center'}">用户名</th>
                  <th lay-data="{field:'userbankname',sort:true,align: 'center'}">姓名</th>
                  <th lay-data="{field:'shangji',sort:true,align: 'center'}">上线</th>
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">类型</th>
                  <th lay-data="{field:'jinjijilu',sort:true,align: 'center'}">晋级记录</th>
                  <th lay-data="{field:'balance',sort:true,align: 'center'}">金额</th>
                  <th lay-data="{field:'point',sort:true,align: 'center'}">积分</th>
                  <th lay-data="{field:'fandian',sort:true,align: 'center'}">返点</th>
                  <th lay-data="{field:'yeb',sort:true,align: 'center'}">余额宝</th>
                  <th lay-data="{field:'xima',sort:true,align: 'center'}">洗码余额</th>
                  <th lay-data="{field:'recharge',sort:true,align: 'center'}">总充值</th>
                  <th lay-data="{field:'withdraw',sort:true,align: 'center'}">总提款</th>
                  <th lay-data="{field:'Tongji',sort:true,align: 'center'}">总输赢</th>
                  <th lay-data="{field:'logintime',sort:true,align: 'center'}">登陆时间</th>
                  <th lay-data="{field:'loginsource',sort:true,align: 'center'}">登陆来源</th>
                  <th lay-data="{field:'isonline',sort:true,align: 'center'}">状态</th>
                  <th lay-data="{field:'lock',sort:true,align: 'center'}">封禁</th>
                  <th lay-data="{field:'ziliao',align: 'center',width:165}">资料</th>
                  <th lay-data="{field:'useredit',align: 'center',width:165}">操作</th>
                </tr> 
              </thead>
              <tbody>
                {volist name="list" id="vo"}
                <tr>
                  <input name="userId" type="hidden"/>
                  <td>{$vo.id}</td>
                  <td><span class="layui-badge layui-badge-gray">{$grouplist[$vo['groupid']]['groupname']}</span></td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('useredit',['id'=>$vo['id']])}" title="编辑-{$vo.username}">{$vo.username}</u></td>
                  <td>{$vo.userbankname}</td>
                  <td>{$vo.shangji}</td>
                  <td>{if condition="$vo['proxy'] eq 1"}<span class="layui-badge layui-badge-red">代理</span>{elseif condition="$vo['proxy'] eq 0" /}<span class="layui-badge layui-badge-gray">会员</span>{/if}</td>
                  <td>VIP{$vo.jinjijilu}</td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('balance',['id'=>$vo['id']])}" title="修改-{$vo.username}金额">{$vo.balance}</u></td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('point',['id'=>$vo['id']])}" title="修改-{$vo.username}积分">{$vo.point}</u></td>
                  {php}
                  $fandian = $vo['fandian'];
                  if((int)$fandian){
                  {/php}
                  <td>{$vo.fandian}%</td>
                  {php}}else{
                  $vo_fandian = "{".htmlspecialchars_decode($vo['fandian'])."}";
                  $vo_fandian = preg_replace("/&quot/","\"",$vo_fandian);
                  $vo_fandian = json_decode($vo_fandian,true);
                  {/php}
                  <td>时时彩 : {$vo_fandian.ssc}%<br />快三 : {$vo_fandian.k3}%<br />十一选五 : {$vo_fandian.x5}%<br />排列三 : {$vo_fandian.pl3}%<br />快乐8 : {$vo_fandian.kl8}%<br />pk10 : {$vo_fandian.pk10}%<br />六合彩 : {$vo_fandian.lhc}%<br />幸运28 : {$vo_fandian.xy28}%</td>
                  {php}}{/php}
                  <td>{$vo.yeb}</td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('xima',['id'=>$vo['id']])}" title="修改-{$vo.username}洗码余额">{$vo.xima}</u></td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('recharge',['uid'=>$vo['id']])}" title="{$vo.username}的充值记录">总充值</u></td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('withdraw',['uid'=>$vo['id']])}" title="{$vo.username}的充值记录">总提款</u></td>
                  <td><u style="cursor:pointer" class="text-primary" layer-url="{:U('Tongji/user',['username'=>$vo['username']])}" title="{$vo.username}的游戏统计">总输赢</u></td>
                  <td>{$vo.logintime|date="m-d H:i",###}</td>
                  <td>{$vo.loginsource}</td>
                  <td>{if condition="$vo['isonline'] eq 1"}<span class="layui-badge layui-badge-green">在线</span>{else /}<span class="layui-badge layui-badge-gray">离线</span>{/if}</td>
                  <td>
                      <u lock-url="{:U('lock',['id'=>$vo['id']])}" value="{if condition='$vo[islock] eq 0'}正常{elseif condition='$vo[islock] eq 1' /}锁定{/if}">
                    <input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="正常|锁定" {if condition='$vo[islock] eq 0'}checked{elseif condition='$vo[islock] eq 1' /}{/if}/>
                    </u>
                  </td>
                    <td><u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('ziliao',['id'=>$vo['id']])}" title="查看-{$vo.username}资料">资料</u><u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('fuddetail',['uid'=>$vo['id']])}" title="帐变-{$vo.username}">帐变</u><u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" layer-url="{:U('manage',['parentid'=>$vo['id']])}" layer-width="100%" layer-height="100%" title="查看下级-{$vo.username}">下级</u></td>
                    <td><u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-url="{:U('useredit',['id'=>$vo['id']])}" title="编辑-{$vo.username}">编辑</u><u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-del-url="{:U('userdelete',['id'=>$vo['id']])}" title="删-{$vo.username}">删</u><u style="cursor:pointer" class="layui-btn layui-btn-danger layui-btn-xs" layer-alt-url="{:U('unline',['id'=>$vo['id']])}" title="踢-{$vo.username}">踢</u></td>
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

    </script>
  </body>
  </html>
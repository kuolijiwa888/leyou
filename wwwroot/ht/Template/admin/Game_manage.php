<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>游戏记录</title>
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
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">内部:</label>
                <div class="layui-input-inline">
                  <select name="isnb">
                    <option value="999">全部</option>
                    <option value="1" {if condition="$isnb eq 1"}selected{/if}>是</option>
                    <option value="0" {if condition="$isnb eq 0"}selected{/if}>否</option>
                  </select>
                </div>
              </div>
              <?php $cplists = M('caipiao')->order('typeid asc,id desc')->select();?>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">彩种:</label>
                <div class="layui-input-inline">
                  <select name="cpname">
                    <option value="">全部</option>
                    {foreach name="cplists" item="cpv" key="cpk"}
                    <option value="{$cpv.name}" {if condition="$cpv['name'] eq $cpname"}selected{/if}>{$cpv.title}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">期号:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$qihao}" name="qihao" class="layui-input" placeholder="输入期号"/>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">单号:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$trano}" name="trano" class="layui-input" placeholder="输入单号"/>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">排序:</label>
                <div class="layui-input-inline">
                  <select name="listorder">
                    <option value="">默认</option>
                    <option value="1" {if condition="$listorder eq 1"}selected{/if}>时间大到小</option>
                    <option value="2" {if condition="$listorder eq 2"}selected{/if}>时间小到大</option>
                    <option value="3" {if condition="$listorder eq 3"}selected{/if}>金额大到小</option>
                    <option value="4" {if condition="$listorder eq 4"}selected{/if}>金额小到大</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:50px;">用户名:</label>
                <div class="layui-input-inline">
                  <input type="text" value="{$username}" name="username" class="layui-input" placeholder="输入用户名"/>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:35px;">状态:</label>
                <div class="layui-input-inline">
                  <select name="status">
                    <option value="999">全部</option>
                    <option value="0" {if condition="isset($status) and ($status eq 0)"}selected{/if}>未开奖</option>
                    <option value="1" {if condition="$status eq 1"}selected{/if}>中奖</option>
                    <option value="-1" {if condition="$status eq -1"}selected{/if}>未中奖</option>
                    <option value="-2" {if condition="$status eq -2"}selected{/if}>撤单</option>
                  </select>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 ;">
                <label class="layui-form-label"style="width:35px;">时间:</label>
                <div class="layui-input-inline">
                  <input type="text" id="tbAdvSelDate" name="sDate" value="{$_sDate}" class="layui-input icon-date"
                  placeholder="选择开始时间" autocomplete="off"/>
                </div>
                <div class="layui-form-mid" style="margin: 0 0 10px 0;">-</div>
                <div class="layui-input-inline"style="margin: 0 0 10px 0;">
                  <input type="text" id="tbAdvSelDate1" name="eDate" value="{$_eDate}" class="layui-input icon-date"
                  placeholder="选择结束时间" autocomplete="off"/>
                </div>
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">&emsp;
                <button class="layui-btn icon-btn" type="submit" lay-filter="loginRecordTbSearch" lay-submit>
                  <i class="layui-icon">&#xe615;</i>搜索
                </button>&nbsp;
              </div>
              <div class="layui-inline"style="margin: 0 0 10px 0;">
                <label class="layui-form-label"style="width:62px;">自动刷新:</label>
                <div class="layui-input-inline">
                  <select id="refertime" name="refertime" onChange="window.location.href = this.value" lay-filter="test">
                    <option value="{:U('',array_merge($_GET,['refert'=>0]))}">不刷新</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>5]))}" {if condition="$refert eq 5"}selected{/if}>5秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>10]))}" {if condition="$refert eq 10"}selected{/if}>10秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>20]))}" {if condition="$refert eq 20"}selected{/if}>20秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>30]))}" {if condition="$refert eq 30"}selected{/if}>30秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>40]))}" {if condition="$refert eq 40"}selected{/if}>40秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>50]))}" {if condition="$refert eq 50"}selected{/if}>50秒</option>
                    <option value="{:U('',array_merge($_GET,['refert'=>60]))}" {if condition="$refert eq 60"}selected{/if}>60秒</option>
                  </select>
                </div>
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
                  <th lay-data="{field:'proxy',sort:true,align: 'center'}">注数</th>
                  <th lay-data="{field:'jinjijilu',sort:true,align: 'center'}">奖金/赔率</th>
                  <th lay-data="{field:'balance',sort:true,align: 'center'}">金额</th>
                  <th lay-data="{field:'point',sort:true,align: 'center'}">投注后金额</th>
                  <th lay-data="{field:'fandian',sort:true,align: 'center'}">中奖金额</th>
                  <th lay-data="{field:'yeb',sort:true,align: 'center'}">中奖注数</th>
                  <th lay-data="{field:'xima',sort:true,align: 'center'}">中奖倍数</th>
                  <th lay-data="{field:'recharge',sort:true,align: 'center'}">元/角/分</th>
                  <th lay-data="{field:'withdraw',sort:true,align: 'center'}">号码</th>
                  <th lay-data="{field:'Tongji',sort:true,align: 'center'}">开奖号</th>
                  <th lay-data="{field:'logintime',sort:true,align: 'center'}">类型</th>
                  <th lay-data="{field:'isonline',sort:true,align: 'center'}">状态</th>
                  <th lay-data="{field:'lock',sort:true,align: 'center'}">投注时间</th>
                  <th lay-data="{field:'ziliao',align: 'center',width:100}">操作</th>
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
                  <td>{$vo.itemcount}</td>
                  <td>{$vo.mode}</td>
                  <td>{$vo.amount}</td>
                  <td>{$vo.amountafter}</td>
                  <td>{$vo.okamount}</td>
                  <td>{$vo.okcount}</td>
                  <td>{$vo.beishu}</td>
                  <td>{$vo.yjf}</td>
                  <td>
                    {if condition="strlen($vo['tzcode']) elt 20"}<p style="cursor:pointer;width:85px;height:25px; overflow:hidden;padding:0; margin:0;text-overflow: ellipsis;white-space: nowrap;" class="text-primary" trano="{$vo.trano}" tip-content="{$vo.tzcode}">{$vo.tzcode}</p>{else /}<u style="cursor:pointer;" class="text-primary" trano="{$vo.trano}" tip-content="{$vo.tzcode}">查看</u>{/if}
                  </td>
                  <td>{$vo.opencode}</td>
                  <td>{if condition="$vo['ishemai'] eq 1"}合买{else /}代购{/if}</td>
                  <td>{if condition="$vo['isdraw'] eq '1'"}<span class="c-green">中</span>{elseif condition="$vo['isdraw'] eq '0'" /}<span class="c-333">未开奖</span>{elseif condition="$vo['isdraw'] eq '-1'" /}<span class="c-red">未中</span>{elseif condition="$vo['isdraw'] eq '-2'" /}<span class="c-666">撤</span>{/if}</td>
                  <td>{$vo.oddtime|date="m-d H:i:s",###}</td>
                  <td>{if condition="$vo['isdraw'] eq '0'"}<u style="cursor:pointer" class="text-primary" layer-chedan-url="{:U('chedan',['id'=>$vo['id']])}">撤单</u>{else /}---{/if}</td>
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
      $.Huitab("#tab-lhc .tabBar1 span","#tab-lhc .tabCon1","current","click","0");

      $(document).on("click", "[tip-content]", function() {
        var obj       = $(this);
        var content = $(obj).attr('tip-content');
        layer.open({
          title: "投注单号:"+$(obj).attr('trano')
          ,content: content
        });    
      });
      $(document).on("click", "[layer-chedan-url]", function() {
        var obj       = $(this);
        var url       = obj.attr('layer-chedan-url');
        var title     = '您确认撤单吗？';
        var issuccess = obj.hasClass('label-success');
        layer.confirm(title,function(index){
          $.getJSON(url, function(json){
            if(json.status==1){
              obj.parents("td").html('<del>已撤单</del>');
              layer.msg('撤单成功!',{icon:1,time:1000});
            }else{
              layer.msg(json.info,{icon: 2,time:2000});
            };
          });
        });
      });

      var refert = Number("<?=$refert;?>");
      shuaxin(refert);
      function shuaxin(refert){
        if(refert>0){
          setInterval("shua()", refert*1000);
        }
      };

      function shua(){
        var href = document.location.href;
        if(href.indexOf("refert")!=-1){
          window.location.href = href.replace("/refert=\d{2,3}/","refert="+refert);
        }else{
          if(href.indexOf("?")!=-1){
            window.location.href = document.location.href+"&refert="+$("#refertime").val();
          }else{
            window.location.href = document.location.href+"?refert="+$("#refertime").val();
          }
        }

      }
    </script> 
  </body>
  </html>
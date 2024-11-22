<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="assets/images/favicon.ico" rel="icon">
	<title>{:GetVar('webtitle')}丨管理中心</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
	<style>
		text {
			font-size:17px;
			stroke:#38384a;
			stroke-width:1px;
			stroke-dasharray:2;
		}
		.text1 {
			stroke:red;
			animation:text1 10s infinite;
		}
		.text2 {
			stroke:yellow;
			animation:text2 10s infinite;
		}
		.text3 {
			stroke:blue;
			animation:text3 10s infinite;
		}
		.text4 {
			stroke:#ED05F9;
			animation:text4 10s infinite;
		}
		.text5 {
			stroke:#F98005;
			animation:text5 10s infinite;
		}
		@keyframes text1 {
			0% {
				stroke-dasharray:20;
			}
			30% {
				stroke-dasharray:150;
			}
			50% {
				stroke-dasharray:220;
			}
			75% {
				stroke-dasharray:150;
			}
			100% {
				stroke-dasharray:20;
			}
		}
		@keyframes text2 {
			0% {
				stroke-dasharray:233;
			}
			30% {
				stroke-dasharray:80;
			}
			50% {
				stroke-dasharray:10;
			}
			75% {
				stroke-dasharray:80;
			}
			100% {
				stroke-dasharray:233;
			}
		}
		@keyframes text3 {
			0% {
				stroke-dasharray:10;
			}
			30% {
				stroke-dasharray:30;
			}
			50% {
				stroke-dasharray:183;
			}
			75% {
				stroke-dasharray:63;
			}
			100% {
				stroke-dasharray:10;
			}
		}
		@keyframes text4 {
			0% {
				stroke-dasharray:20;
			}
			30% {
				stroke-dasharray:30;
			}
			50% {
				stroke-dasharray:50;
			}
			75% {
				stroke-dasharray:70;
			}
			100% {
				stroke-dasharray:20;
			}
		}
		@keyframes text5 {
			0% {
				stroke-dasharray:20;
			}
			30% {
				stroke-dasharray:90;
			}
			50% {
				stroke-dasharray:160;
			}
			75% {
				stroke-dasharray:50;
			}
			100% {
				stroke-dasharray:20;
			}
		}
	</style>
</head>
<body class="layui-layout-body notice-width">
	<div class="layui-layout layui-layout-admin">
		<!-- 头部 -->
		<div class="layui-header">
			<div class="layui-logo">
				<!--img src="assets/images/logo.png"/-->
				<svg width="235" height="50">
					<g>
						<text class="text0" x="20" y="30">AISHANG后台管理系统</text>
						<text class="text1" x="20" y="30">AISHANG后台管理系统</text>
						<text class="text2" x="20" y="30">AISHANG后台管理系统</text>
						<text class="text3" x="20" y="30">AISHANG后台管理系统</text>
						<text class="text4" x="20" y="30">AISHANG后台管理系统</text>
						<text class="text5" x="20" y="30">AISHANG后台管理系统</text>
					</g>
				</svg>
			</div>
			<ul class="layui-nav layui-layout-left">
				<li class="layui-nav-item" lay-unselect>
					<a ew-event="flexible" title="侧边伸缩"><i class="layui-icon layui-icon-shrink-right"></i></a>
				</li>
				<li class="layui-nav-item" lay-unselect="">
					<a ew-event="refresh" title="刷新"><i class="layui-icon layui-icon-refresh-3"></i></a>
				</li>
			</ul>
			<form class="layui-form toolbar" style="width:180px;display:inline-block;margin: 8px 0;"method="get" action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}">
				<div class="layui-form-item">
					<div class="layui-inline">
						<div class="layui-input-inline">
							<select name="ordertype" onChange="window.location.href = this.value" lay-filter="test">
								<option value="{:U('Tongji/gaikuang')}" lay-href="{:U('Tongji/gaikuang')}">统计概况</option>
								<option value="{:U('Tongji/yingkui')}">盈亏统计</option>
								<option value="{:U('Member/recharge')}">充值管理</option>
								<option value="{:U('Member/withdraw')}">提款管理</option>
								<option value="{:U('Member/manage')}">会员列表</option>
								<option value="{:U('Member/banklist')}">会员银行卡</option>
								<option value="{:U('Member/fuddetail')}">账变记录</option>
							</select>
						</div>
					</div>
				</div>
			</form>
			<ul class="layui-nav layui-layout-right">
				<li class="layui-nav-item" lay-unselect>
					<a ew-event="message" title="消息">
						<i class="layui-icon layui-icon-notice"></i>
						<span class="layui-badge-dot"></span>
					</a>
				</li>
				<li class="layui-nav-item" lay-unselect>
					<a ew-event="note" title="便签"><i class="layui-icon layui-icon-note"></i></a>
				</li>
				<li class="layui-nav-item layui-hide-xs" lay-unselect>
					<a ew-event="fullScreen" title="全屏"><i class="layui-icon layui-icon-screen-full"></i></a>
				</li>
				<li class="layui-nav-item layui-hide-xs" lay-unselect>
					<a ew-event="lockScreen" title="锁屏"><i class="layui-icon layui-icon-password"></i></a>
				</li>
				<li class="layui-nav-item" lay-unselect>
					<a>
						<img src="assets/images/head.jpg" class="layui-nav-img">
						<cite>{$admininfo['groupname']}</cite>
					</a>
					<dl class="layui-nav-child">
						<li><a href="javascript:void(0);" onclick="article_add('修改我的密码','{:U('Adminmember/editpass',['type'=>'pass'])}')">修改我的密码</a></li>
						<li><a href="javascript:void(0);" onclick="article_add('修改安全密码','{:U('Adminmember/editpass',['type'=>'safecode'])}')">修改安全密码</a></li>

						<hr>
						<dd lay-unselect><a ew-event="logout" data-url="{:U('Public/loginout')}">退出</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item" lay-unselect>
					<a ew-event="theme" title="主题"><i class="layui-icon layui-icon-more-vertical"></i></a>
				</li>
			</ul>
		</div>

		<!-- 侧边栏 -->
		<div class="layui-side">
			<div class="layui-side-scroll">
				<ul class="layui-nav layui-nav-tree arrow2" lay-filter="admin-side-nav" lay-shrink="_all">
                <!--li class="layui-nav-item">
                    <a><i class="layui-icon layui-icon-home"></i>&emsp;<cite>快捷导航</cite></a>
                    <dl class="layui-nav-child">
						<dd><a lay-href="{:U('Tongji/gaikuang')}">统计概况</a></dd>
                        <dd><a lay-href="{:U('Tongji/yingkui')}">盈亏统计</a></dd>
						<dd><a lay-href="{:U('Member/recharge')}">充值管理</a></dd>
                        <dd><a lay-href="{:U('Member/withdraw')}">提款管理</a></dd>
						<dd><a lay-href="{:U('Member/manage')}">会员列表</a></dd>
						<dd><a lay-href="{:U('Member/banklist')}">会员银行卡</a></dd>
						<dd><a lay-href="{:U('Member/fuddetail')}">账变记录</a></dd>
                    </dl>
                </li-->
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-set-fill"></i>&emsp;<cite>系统管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('System/setting')}">系统设置</a></dd>
                		<dd><a lay-href="{:U('System/address')}">轮播图管理</a></dd>
                		<dd><a lay-href="{:U('Caipiao/cptype')}">彩种管理</a></dd>
                		<dd><a lay-href="{:U('Caipiao/wanfa')}">玩法管理</a></dd>
                		<dd><a lay-href="{:U('Caipiao/wanfa_odds')}">玩法赔率</a></dd>
                		<dd><a lay-href="{:U('Caipiao/wanfa_odds_ks')}">赔率快速修改</a></dd>
                		<dd><a lay-href="{:U('Caipiao/kaijiang')}">开奖管理</a></dd>
                		<dd><a lay-href="{:U('Caipiao/yukaijiang')}">系统彩预开奖</a></dd>
                		<dd><a lay-href="{:U('Game/manage')}">游戏记录</a></dd>
                		<dd><a lay-href="{:U('Game/checkerrorder')}">注单异常检测</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-console"></i>&emsp;<cite>数据统计</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Tongji/gaikuang')}">统计概况</a></dd>
                		<dd><a lay-href="{:U('Tongji/yingkui')}">盈亏统计</a></dd>
                		<dd><a lay-href="{:U('Tongji/user')}">用户统计</a></dd>
                		<dd><a lay-href="{:U('Tongji/tdgaikuang')}">团队概况</a></dd>
                		<dd><a lay-href="{:U('Tongji/cptouzhu3d')}">彩种投注统计</a></dd>
                		<dd><a lay-href="{:U('Tongji/chongti3d')}">充提款统计</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-dollar"></i>&emsp;<cite>电子银行</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Sysbank/manage')}">提款银行</a></dd>
                		<dd><a lay-href="{:U('Member/payset')}">存款方式配置</a></dd>
                		<dd><a lay-href="{:U('Member/recharge')}">充值记录</a></dd>
                		<dd><a lay-href="{:U('Member/withdraw')}">提现记录</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-user"></i>&emsp;<cite>会员管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Membergroup/manage')}">会员组</a></dd>
                		<dd><a lay-href="{:U('Member/manage')}">会员列表</a></dd>
                		<dd><a lay-href="{:U('Member/teamreport')}">团队报表</a></dd>
                		<dd><a lay-href="{:U('Member/sameipuser')}">同IP会员检测</a></dd>
                		<dd><a lay-href="{:U('Member/fuddetail')}">账变记录</a></dd>
                		<dd><a lay-href="{:U('Member/banklist')}">银行信息</a></dd>
                		<dd><a lay-href="{:U('Member/agentlink')}">代理注册链接</a></dd>
                		<dd><a lay-href="{:U('Member/memlog')}">登录日志</a></dd>
                		<dd><a lay-href="{:U('Membernotice/notice')}">站内通知</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-username"></i>&emsp;<cite>管理员管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Admingroup/manage')}">管理员组</a></dd>
                		<dd><a lay-href="{:U('Adminmember/manage')}">管理员列表</a></dd>
                		<dd><a lay-href="{:U('Adminmember/memlog')}">管理员日志</a></dd>
                	</dl>
                </li>

                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-gift"></i>&emsp;<cite>活动管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('System/zengsong')}">赠送活动</a></dd>
                		<dd><a lay-href="{:U('Member/fanshui')}">每日加奖</a></dd>
                		<dd><a lay-href="{:U('Member/jinjijiangli')}">晋级奖励</a></dd>
                		<dd><a lay-href="{:U('Member/dailiyongjin')}">代理佣金</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-group"></i>&emsp;<cite>真人视讯</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Zhenren/merchant')}">商户信息</a></dd>
                		<dd><a lay-href="{:U('Zhenren/transrecord')}">额度转让</a></dd>
                		<dd><a lay-href="{:U('Zhenren/agztrecord')}">投注记录</a></dd>
                		<dd><a lay-href="{:U('Zhenren/agbetrecord')}">真人采集</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-rmb"></i>&emsp;<cite>余额宝管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Yebgroup/index')}">余额宝类型</a></dd>
                		<dd><a lay-href="{:U('Yebrecord/index')}">余额宝记录</a></dd>
                		<dd><a lay-href="{:U('Yebrecord/shouyi')}">余额宝收益</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-friends"></i>&emsp;<cite>机器人与发单</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Member/manage1')}">机器人设置</a></dd>
                		<dd><a lay-href="{:U('Caipiao/fadan')}">发单设置</a></dd>
                		<dd><a lay-href="{:U('Game/manage_hemai')}">合买列表</a></dd>
                	</dl>
                </li>
                <li class="layui-nav-item">
                	<a><i class="layui-icon layui-icon-util"></i>&emsp;<cite>运维管理</cite></a>
                	<dl class="layui-nav-child">
                		<dd><a lay-href="{:U('Yunwei/caiji')}">采集设置</a></dd>
                		<dd><a lay-href="{:U('Yunwei/dbclear')}">数据清理</a></dd>
                		<dd><a lay-href="{:U('News/gonggao')}">网站公告管理</a></dd>
                		<!--dd><a lay-href="{:U('Database/index',['type'=>'export'])}">数据库备份</a></dd-->
                		<!--dd><a lay-href="{:U('Database/index',['type'=>'import'])}">数据库还原</a></dd-->
                		<dd><a lay-href="{:U('Yunwei/jihua')}">计划任务</a></dd>
                		<dd><a lay-href="{:U('Yunwei/yijianclear')}">一键清理数据</a></dd>
                	</dl>
                </li>
            </ul>
        </div>
    </div>

    <!-- 主体部分 -->
    <div class="layui-body"></div>
    <!-- 底部 -->
    <div class="layui-footer layui-text">
    	Copyright © 2021 <a href="https://admin404.com" target="_blank">Ascloud</a> 欢迎使用 爱尚互联 开发系统 all rights reserved.
    	<span class="pull-right"> 乐游娱乐V5.21 </span>
    </div>
</div>

<!-- 加载动画 -->


<!-- js部分 -->
<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
<script>
	layui.use(['index','layer', 'form', 'table', 'util', 'dropdown', 'laydate'], function () {
		var $ = layui.jquery;
		var layer = layui.layer;
		var form = layui.form;
		var table = layui.table;
		var util = layui.util;
		var dropdown = layui.dropdown;
		var laydate = layui.laydate;
		var index = layui.index;

        // 默认加载主页
        index.loadHome({
        	menuPath: '{:U('Tongji/gaikuang')}',
        	menuName: '<i class="layui-icon layui-icon-home"></i>'
        });
        form.on('select(test)', function (data) {
        	var url = $(this).attr('lay-value');
        	$('.admin-iframe').attr('src',url);
          //window.location.href = url;
      });

    });
</script>
<script type="text/javascript" src="../Template/admin/resources/ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="../Template/admin/resources/ui/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
	function article_add(title,url){
		layer_show(title,url);
	}
	loadAudioSource();
	function loadAudioSource(num) {
		var audioHtml = '';
		audioHtml += '<audio controls id="audiotikuan" style="display:none;"><source src="../Template/admin/resources/audio/tikuan.mp3" type="audio/mpeg"></audio>';
		audioHtml += '<audio controls id="audiochongzhi" style="display:none;"><source src="../Template/admin/resources/audio/chongzhi.mp3" type="audio/mpeg"></audio>';
		audioHtml += '<audio controls id="audiobankbind" style="display:none;"><source src="../Template/admin/resources/audio/bankbind.mp3" type="audio/mpeg"></audio>';
		$("body").append(audioHtml);

	}

// 播放提示声音
function audioPlay(name) {
	var audio = document.getElementById("audio" + name);
	if(!audio) {
		setTimeout(function(){
			audioPlay(name);
		}, 50);
		return false;
	}
	audio.play('tikuan');
}
function checkspeck(){
	$.getJSON("{:U('Index/checkspeck')}", function(data){
		if(data.sign){
			if(data.tkcount>0){
				audioPlay('tikuan');
			}else if(data.czcount>0){
				audioPlay('chongzhi');
			}else if(data.bankbindcount>0){
				audioPlay('bankbind');
			}
		}
	});
}
window.setInterval("checkspeck();",10000);
</script>
</body>
</html>
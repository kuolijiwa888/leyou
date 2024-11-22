<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">

	

	<link rel="stylesheet" type="text/css" href="__CSS__/sm.css">
	<link rel="stylesheet" type="text/css" href="__CSS__/sm-extend.min.css">


	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/zepto.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/config.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/sm.min.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/sm-extend.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/way.min.js' charset='utf-8'></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/common.js' charset='utf-8'></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/member.page.js"></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/clipboard.min.js"></script>
	<script type="text/javascript" src="__ROOT__/Template/Mobile/js/clipboard.js"></script>
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/agent.js' charset='utf-8'></script>


</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		代理中心
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="page">
		<!--代理中心首页概述开始-->
		<div class="daili tab" style="display:block" id="tab1_content">
			<div class="baobiao-top">
				<ul>
					<li style="width: 25%;"><a class="baobiao-active">团队概况</a></li>
					<li style="width: 25%;"><a onclick="myclick(2),myclicks(1),allDownUserBetsList();">报表中心</a></li>
					<li style="width: 25%;"><a onclick="myclick(3);">开户中心</a></li>
					<li style="width: 25%;"><a onclick="myclick(4),allUserList();">团队管理</a></li>
				</ul>
			</div>
			<div class="daili-top">
				<div class="daili-top1"><span>团队总余额(总人数)</span>
					<span style="margin-left: 1.5rem;"><button onclick="myclick(3)"><i class="iconfont">&#xe60a;</i></button></span>
				</div>
				<div class="daili-top2"><span way-data="downUserNum.totalamount">0.00</span>
					<span>(</span>
					<span way-data="downUserNum.totalnum">0</span><span>人)</span>
					<button  onclick="myclick(2),myclicks(1),allDownUserBetsList();"><p>报表中心 </p><i class="iconfont"> &#xe618;</i></button>
				</div>
			</div>
			<div class="daili-rensu" onclick="myclick(4),allUserList();">
				<div style="float:left"><i style="color: #debb82;"class="iconfont">&#xe654;</i> 下级代理 <em way-data="downUserNum.proxynum">0</em>人</div>
				<div style="float:right"><i style="color: #40c7bb;"class="iconfont">&#xe654;</i> 下级会员 <em way-data="downUserNum.noproxynum">0</em>人</div>
			</div>
			<div class="daili-bbtitle" ><h5 style="font-size:.14rem"><i class="iconfont">&#xe606;</i> 最近一月报表</h5></div>
			<div id="downuseraccountreportlist" style="padding-bottom: .7rem;">
				
			</div>
		</div>
		<!--代理中心首页概述结束-->

		<!--报表中心开始-->
		<div class="baobiao tab" style="display:none" id="tab2_content">
			<div class="baobiao-top">
				<ul>
					<li style="width: 25%;"><a onclick="myclick(1);">团队概况</a></li>
					<li style="width: 25%;"><a class="baobiao-active">报表中心</a></li>
					<li style="width: 25%;"><a onclick="myclick(3);">开户中心</a></li>
					<li style="width: 25%;"><a onclick="myclick(4),allUserList();">团队管理</a></li>
					<li><a id="baobiaos" onclick="myclicks(1),allDownUserBetsList();" class="baobiaos baobiao-active">游戏记录</a></li>
					<li><a id="baobiaos1" onclick="myclicks(2),accountChange();" class="baobiaos">账变记录</a></li>
					<li><a id="baobiaos2" onclick="myclicks(3),groupDeposit();" class="baobiaos">充提记录</a></li>
				</ul>
			</div>
			<!--游戏记录开始-->
			<div class="baobiao-game tabs"style="display:block;padding-top: 0.45rem;" id="tabs1_content">
				<div class="baobiao-game-ss">
					<div class="baobiao-games-ss-1">
						<em>时间查找:</em>
						<div style="padding: 0 0.06rem;">
							<input id="downUserBetsSearchStartTime" class="layriqi starTime date-input-picker" placeholder="开始时间" type="text"><i></i>
						</div>
						<div style="padding: 0 0.05rem;">
							<input id="downUserBetsSearchEndTime" class="layriqi endTime date-input-picker" placeholder="结束时间" type="text"><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-2">
						<em>类别查找:</em>
						<div>
							<select id="downUserBetsSearchState">
								<option value="">全部状态</option>
								<option value="0">未开奖</option>
								<option value="-1">未中奖</option>
								<option value="1">已中奖</option>
								<option value="-2">已撤单</option>
							</select><i></i>
						</div>
						<div>
							<php> $cplist = C('cplist.k3');</php>
							<select id="downUserBetsSearchShortName">
								<option value="">全部彩种</option>
								<foreach name="cplist" item="cpvo">
									<option value="{$cpvo.name}">{$cpvo.title}</option>
								</foreach>
							</select><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-1">
						<em>精确查找:</em>
						<div style="padding: 0 0.06rem;">
							<input type="text" id="downUserBetsSearchExpect" placeholder="游戏期号"><i></i>
						</div>
						<div style="padding: 0 0.05rem;">
							<input type="text" id="downUserBetsSearchLoginname" placeholder="订单编号"><i></i>
						</div>
					</div>
					<button onclick="allDownUserBetsList();"><i class="iconfont">&#xe7ab;</i> 查询</button>
				</div>
				<ul id="downUserBetsList">

				</ul>
				<div class="member-pag paging" id="allDownUserBetsList_paging"></div>
			</div>
			<!--游戏记录结束-->

			<!--账变记录开始-->
			<div class="zhangb-game tabs" style="display:none;padding-top: 0.45rem;" id="tabs2_content">
				<div class="baobiao-game-ss">
					<div class="baobiao-games-ss-1">
						<em>时间查找:</em>
						<div style="padding: 0 0.06rem;">
							<input id="accountChangeStartTime" class="layriqi starTime date-input-picker" placeholder="开始时间" type="text"><i></i>
						</div>
						<div style="padding: 0 0.05rem;">
							<input id="accountChangeEndTime" class="layriqi endTime date-input-picker" placeholder="结束时间" type="text"><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-2">
						<em>类别查找:</em>
						<div>
							<select id="sourceModule">
								<option value="">全部账变</option>
								<?php $fuddetailtypes = C('fuddetailtypes');?>
								<foreach name="fuddetailtypes" item="ft" key="fk">
									<option value="{$fk}" <if condition="$fk eq $type">selected</if>>{$ft}</option>
								</foreach>
							</select><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-1">
						<em>精确查找:</em>
						<div style="padding: 0 0.05rem;">
							<input id="accountChangeSearchLoginname" placeholder="用户名" type="text"><i></i>
						</div>
					</div>
					<button onclick="accountChange();"><i class="iconfont">&#xe7ab;</i> 查询</button>
				</div>
				<ul id="downuserchangelist">
					
				</ul>
				<div class="member-pag paging" id="groupDeposit_paging"></div>
			</div>
			<!--账变记录结束-->

			<!--充提记录开始-->
			<div class="zhangb-game tabs" style="display:none;padding-top: 0.45rem;" id="tabs3_content">
				<div class="baobiao-game-ss">
					<div class="baobiao-games-ss-1">
						<em>时间查找:</em>
						<div style="padding: 0 0.06rem;">
							<input id="groupDepositStartTime" class="layriqi starTime date-input-picker" placeholder="开始时间" type="text"><i></i>
						</div>
						<div style="padding: 0 0.05rem;">
							<input id="groupDepositEndTime" class="layriqi endTime date-input-picker" placeholder="结束时间" type="text"><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-2">
						<em>类别查找:</em>
						<div>
							<select id="groupDepositState">
								<option value="">全部状态</option>
								<option value="0">正在处理</option>
								<option value="1">审核通过</option>
								<option value="-1">取消申请</option>
							</select><i></i>
						</div>
						<div>
							<select id="groupDepositType">
								<option value="0">充值</option>
								<option value="1">提款</option>
							</select><i></i>
						</div>
					</div>
					<div class="baobiao-games-ss-1">
						<em>精确查找:</em>
						<div style="padding: 0 0.05rem;">
							<input id="groupDepositSearchLoginname" placeholder="用户名" type="text"><i></i>
						</div>
						<div style="padding: 0 0.05rem;">
							<input id="groupDepositSearchBillNo" placeholder="订单号" type="text"><i></i>
						</div>
					</div>
					<button onclick="groupDeposit();"> <i class="iconfont">&#xe7ab;</i> 查询</button>
				</div>
				<ul id="groupDeposit">
					
				</ul>
				<div class="member-pag paging" id="groupDeposit_paging"></div>
			</div>
			<!--充提记录结束-->
		</div>
		<!--报表中心结束-->

		<!--开户链接开始-->
		<div class="kaihu tab" style="display:none" id="tab3_content">
			<div class="kaihu-top">
				<ul>
					<li style="width: 25%;"><a onclick="myclick(1);">团队概况</a></li>
					<li style="width: 25%;"><a onclick="myclick(2);">报表中心</a></li>
					<li style="width: 25%;"><a class="kaihu-active">开户中心</a></li>
					<li style="width: 25%;"><a onclick="myclick(4),allUserList();">团队管理</a></li>
					<li style="width:33.3%"><a id="baobiaoss1" onclick="myclickss(1);" class="kaihu-active">下级开户</a></li>
					<li style="width:33.3%"><a id="baobiaoss2" onclick="myclickss(2);">链接开户</a></li>
					<li style="width:33.3%"><a id="baobiaoss3" onclick="myclickss(3),signuplinkList();">链接管理</a></li>
				</ul>
			</div>
			<!--下级开户开始-->
			<div class="xiaji-kaihu tabss" style="display:block;margin-top: 1.4rem;" id="tabss1_content">
				<div class="kaihu-text">
					<div>温馨提示：</div>
					<div>1. 自动注册的会员初始密码为<span>"123456"</span>。</div>
					<div>2. 为提高服务器效率，系统将自动清理两个月未登录，并且金额低于10元的账户。</div>
				</div>
				<div class="putong">
					<div class="putong-leibie">
						<em>用户账号:</em>
						<div style="padding: 0 0.05rem;">
							<input value="" id="addUser_username" maxlength="10" type="text" placeholder="请输入下级账号">
						</div>
					</div>
					<div class="putong-leibie">
						<em>开户类别:</em>
						<div style="padding: 0 0.05rem;">
							<select id="addUserGeneralAgent" name="addUserGeneral">
								<option value="0">会员</option>
								<option value="1">代理</option>
							</select>
						</div>
					</div>
					<?php 
					if(!(int)$userinfo['fandian']){
						$fandian = "{".htmlspecialchars_decode($userinfo['fandian'])."}";
						$fandian = preg_replace("/&quot/","\"",$fandian);
						$fandian = json_decode($fandian,true);
						if(empty($fandian)) $fandian = false;
						$userinfo['fandian'] = $fandian;
					}
					$fancai = array(
						'ssc' => '时时彩',
						'k3' => '快3',
						'x5' => '11选5',
						'pl3' => '排列3',
						'kl8' => '快乐8',
						'pk10' => '北京赛车',
						'lhc' => '六合彩',
						'xy28' => '幸运28',
					);
					foreach ($fancai as $key => $trem) { 
						?>
						<div class="putong-leibie">
							<em>{$trem}:</em>
							<div style="padding: 0 0.05rem;">
								<input value="" id="addUser_rebateid{$key}" placeholder="返点在0.0-{:number_format($userinfo['fandian'][$key],1)}" maxlength="10" type="text">
							</div>
						</div>
					<?php } ?>
					<button onclick="addUser();"><i class="iconfont">&#xe698; </i>手动开户</button>
				</div>
			</div>
			<!--下级开户结束-->
			
			<!--下级开户开始-->
			<div class="xiaji-kaihu tabss" style="display:none;margin-top: 1.4rem;" id="tabss2_content">
				<div class="putong">
					<div class="putong-leibie">
						<em>开户类别:</em>
						<div style="padding: 0 0.05rem;">
							<select id="addSignuplinkAgent" name="addUserGeneral">
								<option value="0">会员</option>
								<option value="1">代理</option>
							</select>
						</div>
					</div>
					
					<div class="putong-leibie">
						<em>使用次数:</em>
						<div style="padding: 0 0.05rem;"><input value="" id="addSignuplink_times" min="1" max="100" type="number" way-data="addSignuplink.times" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="5" placeholder="请输入链接可使用次数"></div>
					</div>
					<?php
					$fancai = array(
						'ssc' => '时时彩',
						'k3' => '快3',
						'x5' => '11选5',
						'pl3' => '排列3',
						'kl8' => '快乐8',
						'pk10' => '北京赛车',
						'lhc' => '六合彩',
						'xy28' => '幸运28',
					);
					foreach ($fancai as $key => $trem) {
						?>
						<div class="putong-leibie">
							<em>{$trem}:</em>
							<div style="padding: 0 0.05rem;"><input value="" id="addUser_rebateidp{$key}" placeholder="返点在0.0-{:number_format($userinfo['fandian'][$key],1)}" maxlength="10" type="text"></div>
						</div>
					<?php } ?>
					<button onclick="addSignuplink();"><i class="iconfont">&#xe698; </i>链接开户</button>
				</div>
			</div>
			<!--下级开户结束-->
			<!--链接管理开始-->
			<div class="lianjie tabss" style="display:none;padding-top: .4rem;" id="tabss3_content">
				<ul id="signuplinkList">
					<li>
						<div class="lianjie-top">
							<span style="font-weight: bold;color: #c39710;">代理</span>
							<span style="float:right">查看<i></i></span>
						</div>
						<div class="lianjie-bottom">
							<span>可使用次数<em style="font-weight: bold;color: #00ab2da3;">1</em>次</span>
							<span> 已使用<em style="font-weight: bold;color: #cc1818a3;">1</em>次</span>
						</div>
					</li>
				</ul>
			<div class="member-pag paging" id="signuplinkList_page"></div>
			</div>
			<!--链接管理结束-->
		</div>
		<!--开户链接结束-->
		<!--全部下级一揽-->
		<div class="xiaji tab" style="display:none;" id="tab4_content">
			<div class="baobiao-top">
				<ul style="padding: 0rem;">
					<li style="width:25%"><a onclick="myclick(1)">团队概况</a></li>
					<li style="width:25%"><a onclick="myclick(2)">报表中心</a></li>
					<li style="width:25%"><a onclick="myclick(3)">开户中心</a></li>
					<li style="width:25%"><a class="baobiao-active">团队管理</a></li>
				</ul>
			</div>
			<div class="xiaji-ss" style="padding-top: 0.89rem;">
				<div class="baobiao-games-ss-1">
					<em>时间查找:</em>
					<div style="padding: 0 0.06rem;">
						<input id="userSearchStartTime" class="layriqi starTime date-input-picker" placeholder="开始时间" type="text"><i></i>
					</div>
					<div style="padding: 0 0.05rem;">
						<input id="userSearchEndTime" class="layriqi endTime date-input-picker" placeholder="结束时间" type="text"><i></i>
					</div>
				</div>
				<div class="putong-leibie">
					<em>用户账号:</em>
					<div style="padding: 0 0.05rem;"><input id="userSearchLoginname" type="text" placeholder="请输入下级账号"></div>
				</div>
				<button onclick="allUserList();"><i class="iconfont">&#xe7ab;</i> 查询</button>
			</div>
			<ul class="allUserList">
				<li class="xiaji-ok">
					<div class="lianjie-top">
						<span>用户：123456</span>
						<span style="float:right" class="xiajizhuangt"><i>●</i></span>
					</div>
					<div class="lianjie-bottom">
						<span>于<em class="xiajitime">2019-10-11</em>加入博悦</span>
						<div class="xiajiyue"><em>余额：98.00</em></div>
					</div>
				</li>
				<!---->
				<li class="xiaji-not">
					<div class="lianjie-top">
						<span>用户：123456</span>
						<span style="float:right" class="xiajizhuangt"><i>●</i></span>
					</div>
					<div class="lianjie-bottom">
						<span>于<em class="xiajitime">2019-10-11</em>加入博悦</span>
						<div class="xiajiyue"><em>余额：98.00</em></div>
					</div>
				</li>
			</ul>
			<div class="member-pag paging" id="allUserList_paging"></div>
		</div>
	</div>
	<!--全部下级一揽-->

	<script type="text/javascript">
		var myclick = function(v) {
			var divs = document.getElementsByClassName("tab");
			for (var i = 0; i < divs.length; i++) {
				var divv = divs[i];
				if (divv == document.getElementById("tab" + v + "_content")) {
					divv.style.display = "block";
				} else {
					divv.style.display = "none";
				}
			}
		}
		var myclicks = function(v) {
			var divs = document.getElementsByClassName("tabs");
			for (var i = 0; i < divs.length; i++) {
				var divv = divs[i];
				if (divv == document.getElementById("tabs" + v + "_content")) {
					divv.style.display = "block";
				} else {
					divv.style.display = "none";
				}
			}
		}
		var myclickss = function(v) {
			var divs = document.getElementsByClassName("tabss");
			for (var i = 0; i < divs.length; i++) {
				var divv = divs[i];
				if (divv == document.getElementById("tabss" + v + "_content")) {
					divv.style.display = "block";
				} else {
					divv.style.display = "none";
				}
			}
		}
	</script>
	<script>
		$('#baobiaos').click(function() {
			$(this).addClass('baobiao-active');
			$('#baobiaos1').removeClass("baobiao-active");
			$('#baobiaos2').removeClass("baobiao-active");
		})
		$('#baobiaos1').click(function() {
			$(this).addClass('baobiao-active');
			$('#baobiaos').removeClass("baobiao-active");
			$('#baobiaos2').removeClass("baobiao-active");
		})
		$('#baobiaos2').click(function() {
			$(this).addClass('baobiao-active');
			$('#baobiaos').removeClass("baobiao-active");
			$('#baobiaos1').removeClass("baobiao-active");
		})
		$('#baobiaoss1').click(function() {
			$(this).addClass('kaihu-active');
			$('#baobiaoss2').removeClass("kaihu-active");
			$('#baobiaoss3').removeClass("kaihu-active");
		})
		$('#baobiaoss2').click(function() {
			$(this).addClass('kaihu-active');
			$('#baobiaoss1').removeClass("kaihu-active");
			$('#baobiaoss3').removeClass("kaihu-active");
		})
		$('#baobiaoss3').click(function() {
			$(this).addClass('kaihu-active');
			$('#baobiaoss1').removeClass("kaihu-active");
			$('#baobiaoss2').removeClass("kaihu-active");
		})
	</script>
</body>
</html>
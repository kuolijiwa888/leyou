<div class="set-up-top">
	<div class="set-up-img"><img src="__ROOT__{$userinfo['face']}"></div>
	<div class="set-up-name">{$userinfo['username']}</div>
	<div class="set-up-money">彩票余额：<span class="smallmoney">{$userinfo['balance']}</span><i class="iconfont icon-15" onclick="sx()">&#xe6ba;</i></div>
	<i class="iconfont icon-16">&#xe60c;</i>
</div>
<div class="set-up-ctz">
	<div><a href="/userCenter/rechargeWay" class="chongz"><i class="iconfont">&#xe604;</i><span> 充值</span></a></div>
	<div><a href="/userCenter/withdrawals" class="tixian"><i class="iconfont">&#xe678;</i><span> 提现</span></a></div>
	<div><a href="/trans" class="zhuanz"><i class="iconfont">&#xe61a;</i><span> 转账</span></a></div>
</div>
<div class="set-up-cd">
	<div><a href="/lotteryMore" class="iconfont">&#xe620; 游戏大厅<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/lotteryAllhemai" class="iconfont">&#xe620; 合买大厅<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/yebCenter/index" class="iconfont">&#xe620; 余额宝<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/memberCenter/securityCenter" class="iconfont">&#xe625; 个人中心<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/userCenter/betRecord" class="iconfont">&#xe636; 游戏记录<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/userCenter/billRecord" class="iconfont">&#xe636; 资金记录<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/userCenter/PLstatement" class="iconfont">&#xe621; 盈亏报表<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/userCenter/help" class="iconfont">&#xe8c3; 帮助中心<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/activity"class="iconfont">&#xe66b; 活动中心<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/userCenter/notice" class="iconfont">&#xe605; 公告中心<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="{:GetVar('kefuthree')}" class="iconfont">&#xe619; 联系客服<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="javascript:location.reload();" class="iconfont">&#xe612; 刷新应用<i class="iconfont">&#xe656;</i></a></div>
	<div><a href="/loginout" class="iconfont">&#xe659; 退出登录<i class="iconfont">&#xe656;</i></a></div>
</div>
<script>
	function sx() {
		$.ajax({
			url:"{:U('Account/refreshmoney')}",
			type:'POST',
			success :function (data) {
				$('.smallmoney').html(data);
			}
		})
	}
</script>
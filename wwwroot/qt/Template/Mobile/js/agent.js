$(function(){
	$.init();
	//nologinredict();
	//$('.infinite-scroll-preloader').hide();
	$(".date-input-picker").calendar();
	initIndexLottery();
	getDownUserNum();//团队人数等
});
var jqueryGridPage = 1;
var jqueryGridRows = 10;
/**
 * 初始化代理首页彩票娱乐
 */
function initIndexLottery() {
	var startDate = $("#indexStartDate").val();
	var endDate = $("#indexEndDate").val();

	var url = apirooturl + 'reportstatistics';
	$.ajax({
		url: url,
		type: "post",
		dataType: "json",
		data: {
			"startime": startDate,
			"endtime": endDate
		},
		success: function(data) {
			if (data.sign === true) {
				/*
				var html = '<dd><span>充值量</span><b>' + data.data.transferIn + '</b></dd>';
				html += '<dd><span>提现量</span><b>' + data.data.transferOut + '</b></dd>';
				html += '<dd><span>代购量</span><b>' + data.data.validAmount + '</b></dd>';
				html += '<dd><span>派奖量</span><b>' + data.data.payoutAmount + '</b></dd>';
				//html += '<dd><span>返点</span><b>' + data.data.dayBackPoint + '</b></dd>';
				html += '<dd><span>活动/反水</span><b>' + data.data.activityAmount + '</b></dd>';
				$("#indexAgent .ctsj dl").html(html);
				*/
				way.set("reportstatistics", data.data);
			} else {
				alt(data.message, -1);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {}
	});
	var loginname = $("#groupReportSearchLoginname").val();
	var starTime = $("#groupReportStartTime").val();
	var endTime = $("#groupReportEndTime").val();
	var accounttype = $("#accounttype").val();
	
	var canBeOpen = false;
	var tabs = $("#downuseraccountreportlist");
	tabs.empty();
	var jqueryGridPage = 1;
	var jqueryGridRows = 10;
	var url = apirooturl + 'downuseraccountreportlist';

	$.ajax({
		type: "post",
		url: url,
		data: {
			"startime": starTime,
			"endtime": endTime,
			"loginname": loginname,
			"accounttype": accounttype
		},
		dataType:'json',
		success: function(data) {
			if(data.sign){
				tabs.empty();
				$.each(data.root, function(index, val) {
					
					var html = '';
					html += '<div class="daili-bb">';
					html += '<ul>';
					html += '<li>';
					html += '<div class="bb-top"><i class="iconfont">&#xe60d; </i><span>'+ val.statDate +'</span></div>';
					html += '<div class="bb-bottom">';
					html += '<div class="bb-bottom-1">团队充值:<em>'+ val.dayRechargeMoney +'</em>元</div>';
					html += '<div class="bb-bottom-2">团队提现:<em>'+val.dayDrawRechargeMoney+'</em>元</div>';
					html += '<div class="bb-bottom-1">团队投注:<em>'+val.dayConsumptionMoney+'</em>元</div>';
					html += '<div class="bb-bottom-2">团队盈亏:<em>'+val.dayDividendMoney+'</em>元</div>';
					html += '<div class="bb-bottom-1">团队返奖:<em>'+val.dayIncomeMoney+'</em>元</div>';
					html += '<div class="bb-bottom-2">团队活动:<em>'+val.dayActivitiesMoney+'</em>元</div>';
					html += '</div>';
					html += '</li>';
					html += '</ul>';
					html += '</div>';

					tabs.append(html);
				});
				//tabs.append(shtml);
			}else{
				alt(data.message,-1);
			}
		}
	});
}
/**
 * 获取团队人数
 */
function getDownUserNum() {
	var url = apirooturl + 'downuserports';
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		success: function(msg) {
			if (msg.sign === true) {
				var downUserNum = {};
				downUserNum.totalnum = msg.data.totalnum;
				downUserNum.proxynum = msg.data.proxynum;
				downUserNum.noproxynum = msg.data.noproxynum;
				downUserNum.totalamount = msg.data.totalamount;
				way.set("downUserNum", downUserNum);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {}
	});
}
/**
 * 添加用户
 */
function addUser() {
	if (!user) {
		alt("用户未登录", -1);
		return false;
	}
	var username = $("#addUser_username").val();
	var rebate = $("#addUser_rebateid").val();
	var rebate = {
		"ssc":$("#addUser_rebateidssc").val(),
		"k3":$("#addUser_rebateidk3").val(),
		"x5":$("#addUser_rebateidx5").val(),
		"pl3":$("#addUser_rebateidpl3").val(),
		"kl8":$("#addUser_rebateidkl8").val(),
		"pk10":$("#addUser_rebateidpk10").val(),
		"lhc":$("#addUser_rebateidlhc").val(),
		"xy28":$("#addUser_rebateidxy28").val(),
	};
	rebate = JSON.stringify(rebate);
	if (username=='') {
		alt("请输入用户名",-1);
		return false;
	}
	var userType = $('#addUserGeneralAgent').val();
	if (!userType) {
		alt("请选择开户类型",-1);
		return false;
	}
	var userType = userType;
	var url = apirooturl + 'adduser';
	$.ajax({
		url: url,
		type: "post",
		dataType: "json",
		data: {
			"username": username,
			"isProxy": userType,
			"rebate" : rebate
		},
		success: function(data) {
			if (data.sign === true) {
				$("#addUser_username").val('');
				alt(data.message,1);
			} else {
				alt(data.message,-1);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alt("添加用户失败",-1);
		}
	});
}
/**
 * 添加开户链接
 */
function addSignuplink() {
	if (!user) {
		alt("用户未登录",-1);
		return false;
	}
	var userType = $('#addSignuplinkAgent').val();
	if (!userType) {
		alt("请选择开户类型",-1);
		return false;
	}

	var rebate = $("#addUser_rebateidpssc").val();
	var addSignuplinkValid = eval($("#addSignuplinkValid").val());
	var times = $("#addSignuplink_times").val();
	var addSignuplinkTpl = parseInt($("#addSignuplinkTpl").val());

	var rebate = {
		"ssc":$("#addUser_rebateidpssc").val(),
		"k3":$("#addUser_rebateidpk3").val(),
		"x5":$("#addUser_rebateidpx5").val(),
		"pl3":$("#addUser_rebateidppl3").val(),
		"kl8":$("#addUser_rebateidpkl8").val(),
		"pk10":$("#addUser_rebateidppk10").val(),
		"lhc":$("#addUser_rebateidplhc").val(),
		"xy28":$("#addUser_rebateidpxy28").val(),
	};
	rebate = JSON.stringify(rebate);


	if (!times || parseInt(times) < 1 || parseInt(times) > 100) {
		alt("使用次数只能为正整数1~100之1间",-1);
		return false;
	} else {
		times = parseInt(times);
	}


	var url = apirooturl + 'addsignup';
	$.ajax({
		url: url,
		type: "post",
		dataType: "json",
		data: {
			"isproxy": userType,
			"times": times,
			'tpltype':0,
			'rebate' : rebate
		},
		success: function(data) {
			if (data.sign === true) {
				$("#addSignuplink_times").val('');
				alt(data.message,1);
			} else {
				alt(data.message,-1);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			alt("添加链接失败",-1);
		}
	});
}


/**
 * 链接列表
 */
function signuplinkList() {
	var thisPanel = $("#signuplinkList");
	var htmlTitle = '<tr><th>用户类型</th><th>总次数</th>' +
		'<th>使用次数</th><th>使用模版</th><th>创建时间</th><th>操作</th></tr>';
	thisPanel.empty();
	$("#signuplinkList .paging").empty();
	//thisPanel.append(htmlTitle);

	var jqueryGridPage = 1;
	var jqueryGridRows = 10;
	var url = apirooturl + 'signuplinklist';
	var pagination = $.pagination({
		render: '#signuplinkList_page',
		pageSize: jqueryGridRows,
		pageLength: 7,
		ajaxType: 'post',
		hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"jqueryGridPage": jqueryGridPage,
			"jqueryGridRows": jqueryGridRows
		},
		complete: function() {},
		success: function(data) {
			thisPanel.empty();
			//thisPanel.append(htmlTitle);
			var registerUrl = host + '/register/linkid/';
			$.each(data, function(idx, val) {
				var html = '';
				html += '<li>';
				html += '<div class="lianjie-top">';
				html += '<span style="font-weight: bold;color: #c39710;">链接类型：' + (val.proxy==1 ? '代理' : '会员') + '</span>';
				if ((eval(val.usenum) - eval(val.okusenum)) <= 0) {
				    html += '<span style="float:right">已失效<i></i></span>';
				} else {
				    html += '<span style="float:right" onclick="viewlink(\'' + registerUrl + val.id + '\')">查看<i></i></span>';
				}
				html += '</div>';
				
				html += '<div class="lianjie-bottom">';
				html += '<span>可使用次数<em style="font-weight: bold;color: #00ab2da3;">' + val.usenum + '</em>次</span>';
				html += '<span> 已使用<em style="font-weight: bold;color: #cc1818a3;">' + val.okusenum + '</em>次</span>';
				html += '<button style="float: right;width: .75rem;height: .25rem;background: #737382;color: #fff;font-size: .15rem;" id="copy'+ val.id +'" data-clipboard-text=' + registerUrl + val.id + ' onclick="copyUrl2(this)">复制链接</button>';
				html += '</div>';
				html += '</li>';
				thisPanel.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {
			$('#signuplinkList .paging').empty();
		}
	});
	pagination.init();
}

   	 
function copyUrl2(th)
    {
       var clipboard = new Clipboard("#"+th.id)

clipboard.on("success", function(e) {
	alert('复制成功');
  console.log(e)
})
clipboard.on("error", function(e) {
  console.log(e)
})
        // alert(th.id);
    }

 
function viewlink(linkurl){
      $.modal({
            text:'<textarea style="width:100%;font-size:.13rem" readonly>'+linkurl+'</textarea>',
            buttons: [ 
				{text: '关闭'}
			]
        });
}
/**
 * 会员管理 - 会员列表
 */
function allUserList(isonline) {
	if(isonline){
		var thisPanel = $("#allOnlineUserList");
	}else{
		var thisPanel = $(".allUserList");
	}
	if(isonline){
		$('#allOnlineUserList_paging').empty();
	}else{
		$('#allUserList_paging').empty();
	}
	thisPanel.empty();
	//thisPanel.append(htmlTitle);
	
	
	

	if(isonline){
		isonline = 1;
		var startTime = $("#userOnlineSearchStartTime").val();
		var endTime = $("#userOnlineSearchEndTime").val();
		var loginname = $("#userOnlineSearchLoginname").val();
		var minMoney = $("#userOnlineSearchMinMoney").val();
		var maxMoney = $("#userOnlineSearchMaxMoney").val();
	}else{
		var startTime = $("#userSearchStartTime").val();
		var endTime = $("#userSearchEndTime").val();
		var loginname = $("#userSearchLoginname").val();
		var minMoney = $("#userSearchMinMoney").val();
		var maxMoney = $("#userSearchMaxMoney").val();
	}

	var jqueryGridPage = 1;
	var jqueryGridRows = 10;

	var url = apirooturl + 'memberList';
	var pagination = $.pagination({
		render: isonline?'#allOnlineUserList_paging':'#allUserList_paging',
		pageSize: jqueryGridRows,
		pageLength: 3,
		ajaxType: 'post',
		hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"jqueryGridPage": jqueryGridPage,
			"jqueryGridRows": jqueryGridRows,
			"startime": startTime,
			"endtime": endTime,
			"loginname": loginname,
			"minMoney": minMoney,
			"maxMoney": maxMoney,
			"isonline": isonline
		},
		complete: function() {
			
		},
		success: function(data, pid, downRechargeLevel) {

			
			thisPanel.empty();
			
			$.each(data, function(idx, val) {
				var html = '';
				if(val.isonline=='1'){
					val.isonline = '<li class="xiaji-ok">';
				}else{
					val.isonline = '<li class="xiaji-not">';
				}
				html += val.isonline;
				html += '<div class="lianjie-top">';
				html += '<span>用户：' + val.username +'</span>';
				html += '<span style="float:right" class="xiajizhuangt"><i>●</i></span>';
				html += '</div>';
				html += '<div class="lianjie-bottom">';
				if(val.regtime==0){
					regtime = '~~';
				}else{
					regtime = val.regtime;
				}
				html += '<span>于<em class="xiajitime">' + regtime + '</em>加入团队</span>';
				html += '<div class="xiajiyue"><em>余额：'+ val.balance + '</em></div>';
				html += '</div>';
				html += '</li>';

				thisPanel.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {}
	});
	pagination.init();
}
/**
 * 游戏纪录
 */
function allDownUserBetsList() {
	var thisPanel = $("#downUserBetsList");
	var htmlTitle = '<tr><th>订单号</th><th>用户名</th><th>彩票简称</th><th>期号</th><th>玩法名称</th><th>赔率</th><th>下单时间</th>' +
		'<th>金额</th><th>注数</th><th>中金额</th><th>中注数</th><th>状态</th></tr>';
	thisPanel.empty();
	$('#allDownUserBetsList_paging').empty();
	
	var jqueryGridPage = 1;
	var jqueryGridRows = 10;

	var billno = $("#downUserBetsSearchBillno").val();
	var expect = $("#downUserBetsSearchExpect").val();
	var startTime = $("#downUserBetsSearchStartTime").val();
	var endTime = $("#downUserBetsSearchEndTime").val();
    if (dateDiff(startTime, endTime) > 30) {
        alt('查询日期间隔不能超过30天',-1);
        return false;
    } else if (dateDiff(startTime, endTime) < 0) {
        alt('查询结束日期要大于开始日期',-1);
        return false;
    }
	var loginname = $("#downUserBetsSearchLoginname").val();
	var shortName = $("#downUserBetsSearchShortName").val();
	var state = $("#downUserBetsSearchState").val();

	var url = apirooturl + 'downuserbetslist';
	way.set("allDownUserBetsList.k3hzbig",0);
	way.set("allDownUserBetsList.k3hzsmall",0);
	way.set("allDownUserBetsList.k3hzodd",0);
	way.set("allDownUserBetsList.k3hzeven",0);
	var pagination = $.pagination({
		render: '#allDownUserBetsList_paging',
		pageSize: jqueryGridRows,
		pageLength: 3,
		ajaxType: 'post',
		hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"jqueryGridPage": jqueryGridPage,
			"jqueryGridRows": jqueryGridRows,
			"trano": billno,
			"expect": expect,
			"startime": startTime,
			"endtime": endTime,
			"loginname": loginname,
			"lotteryname": shortName,
			"state": state
		},
		complete: function() {},
		success: function(data,sucdata) {
			thisPanel.empty();
			if(sucdata){
				way.set("allDownUserBetsList.k3hzbig",sucdata.bigamount?sucdata.bigamount:0);
				way.set("allDownUserBetsList.k3hzsmall",sucdata.smallamount?sucdata.smallamount:0);
				way.set("allDownUserBetsList.k3hzodd",sucdata.oddamount?sucdata.oddamount:0);
				way.set("allDownUserBetsList.k3hzeven",sucdata.evenamount?sucdata.evenamount:0);
			}
			$.each(data, function(index, val) {
				var html = '';
				html += '<li id="'+val.trano+'">';
				html += '<div class="baobiao-game-top">';
				html += '<i>';
				html += '</i>';
				html += '<span>'+"ID:"+val.username+'</span>';
				html += '<span style="float:right">'+val.oddtime+'</span>';
				html += '</div>';
				html += '<div class="baobiao-game-bottom">';
				html += '<div class="baobiao-qihao">';
				html += '<p>期号</p>';
				html += '<em>'+val.expect+'</em>';
				html += '</div>';
				html += '<div class="baobiao-jine">';
				html += '<p>玩法</p>';
				html += '<em>' + val.playtitle + '(' + val.mode + ')</em>';
				html += '</div>';
				html += '</div>';
				html += '<div class="baobiao-game-bottom">';
				html += '<div class="baobiao-qihao">';
				html += '<p>单号</p>';
				html += '<em>'+val.trano+'</em>';
				html += '</div>';
				html += '<div class="baobiao-jine">';
				html += '<p>投注金额</p>';
				html += '<em>'+val.amount+'</em>';
				html += '<div class="baobiao-zhuangt">';
				if(val.isdraw == -1) { 
				    html += '<em style="color: green;">未中奖</em>';
				} else if(val.isdraw == 1) { 
				    html += '<em style="color: #b9971a;">+'+val.okamount+'</em>';
				} else if(val.isdraw == -2) { 
				    html += '<del>已撤单</del>';
				}else if(val.isdraw == 0) {
				    html += '<em style="color: #b9971a;">待开奖</em>';
				}else{
				    html += '<em style="color: #b9971a;">未知状态</em>';
				}
				html += '</div>';
				html += '</div>';
				html += '</li>';
				thisPanel.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {}
	});
	pagination.init();
}
function accountChange() {
	var thisPanel = $("#downuserchangelist");
	thisPanel.empty();
	
	var jqueryGridPage = 1;
	var jqueryGridRows = 10;
	var loginname = $("#accountChangeSearchLoginname").val();
	var starTime = $("#accountChangeStartTime").val();
	var endTime = $("#accountChangeEndTime").val();
    if (dateDiff(starTime, endTime) > 30) {
        alt('查询日期间隔不能超过30天', -1);
        return false;
    } else if (dateDiff(starTime, endTime) < 0) {
        alt('查询结束日期要大于开始日期', -1);
        return false;
    }
	var sourceModule = $("#sourceModule").val();
	var url = apirooturl + 'downuserchangelist';
	var pagination = $.pagination({
		render: '#groupDeposit_paging',
		pageSize: jqueryGridRows,
		pageLength: 3,
		ajaxType: 'post',
		hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"jqueryGridPage": jqueryGridPage,
			"jqueryGridRows": jqueryGridRows,
			"startime": starTime,
			"endtime": endTime,
			"type": sourceModule,
			"loginname": loginname
		},
		complete: function() {},
		success: function(data) {
			thisPanel.empty();
			$.each(data, function(index, val) {
				var html = '';
				html += '<li>';
				html += '<div class="zhangb-game-top">';
				html += '<i></i>';
				html += '<span>ID:'+ val.username +'</span>'
				html += '<span style="float:right">'+ val.oddtime +'</span>';
				html += '</div>';
				html += '<div class="zhangb-game-bottom">';
				html += '<div class="zhangb-qihao"><p>单号</p>';
				html += '<em>'+ val.trano +'</em>';
				html += '</div>';
				html += '<div class="zhangb-jine"><p>'+ val.typename +'</p>';
				html += '<em>'+ val.amount +'</em>';
				html += '</div>';
				html += '<div class="zhangb-zhuangt">';
				html += '<em style="color: #b9971a;">余额：'+ val.amountafter +'<em>';
				html += '</div></div></li>';
				thisPanel.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {}
	});
	pagination.init();
}
function initGroupDepositList() {
	$("#groupDepositStartTime").val(laydate.now());
	$("#groupDepositEndTime").val(laydate.now(1));
	$("#groupDepositSearchLoginname").val("");
	$("#groupDepositSearchBillNo").val("");
}
function groupDeposit() {
	var thisPanel = $("#groupDeposit");
	thisPanel.empty();
	
	var jqueryGridPage = 1;
	var jqueryGridRows = 10;
	var loginname = $("#groupDepositSearchLoginname").val();
	var billNo = $("#groupDepositSearchBillNo").val();
	var starTime = $("#groupDepositStartTime").val();
	var endTime = $("#groupDepositEndTime").val();
	var type = $("#groupDepositType").val();
	var state = $("#groupDepositState").val();
	var url = apirooturl + 'downuserrechargeandwithdrawlist';
	var pagination = $.pagination({
		render: '#groupDeposit_paging',
		pageSize: jqueryGridRows,
		pageLength: 7,
		ajaxType: 'post',
		hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"jqueryGridPage": jqueryGridPage,
			"jqueryGridRows": jqueryGridRows,
			"startime": starTime,
			"endtime": endTime,
			"loginname": loginname,
			"trano": billNo,
			"type": type,
			"state": state
		},
		complete: function() {},
		success: function(data) {
			thisPanel.empty();
			
			$.each(data, function(index, val) {
				var state = val.state;
				if (state == 0) {
					state = "正在审核";
				}else if(state == 1){
					state = "审核通过";
				}else if(state == -1){
					state = "取消申请";
				}else{
					state = "---";
				}
				var html = '';
				html += '<li>';
				html += '<div class="zhangb-game-top">';
				html += '<i></i>';
				html += '<span>ID:'+ val.username +'</span>';
				html += '<span style="float:right">'+ val.oddtime +'</span>';
				html += '</div>';
				html += '<div class="zhangb-game-bottom">';
				html += '<div class="zhangb-qihao"><p>单号</p>';
				html += '<em>'+val.trano +'</em>';
				html += '</div>';
				html += '<div class="zhangb-jine"><p>金额</p>';
				html += '<em>' + val.amount + '</em>';
				html += '</div>';
				html += '<div class="zhangb-zhuangt">';
				html += '<em>' + state + '</em>';
				html += '</div>';
				html += '</div>';
				html += '</li>';
				thisPanel.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {}
	});
	pagination.init();
}
function initGroupReportList() {
	$("#groupReportStartTime").val(laydate.now());
	$("#groupReportEndTime").val(laydate.now(1));
	$("#groupReportSearchLoginname").val("");
	$("#accounttype").val("lottery");
}
/*function groupReport() {
	var loginname = $("#groupReportSearchLoginname").val();
	var starTime = $("#groupReportStartTime").val();
	var endTime = $("#groupReportEndTime").val();
	var accounttype = $("#accounttype").val();
	
	var canBeOpen = false;
	var tabs = $("#downuseraccountreportlist");
	tabs.empty();
	var jqueryGridPage = 1;
	var jqueryGridRows = 10;
	var url = apirooturl + 'downuseraccountreportlist';

	$.ajax({
		type: "post",
		url: url,
		data: {
			"startime": starTime,
			"endtime": endTime,
			"loginname": loginname,
			"accounttype": accounttype
		},
		dataType:'json',
		success: function(data) {
			if(data.sign){
				tabs.empty();
				$.each(data.root, function(index, val) {
					
					var html = '';
					html += '<li>';
					html += '<div class="bb-top"><i></i><span>'+ val.statDate +'</span></div>';
					html += '<div class="bb-bottom">';
					html += '<div class="bb-bottom-1">团队充值:<em>'+ val.dayRechargeMoney +'</em>元</div>';
					html += '<div class="bb-bottom-2">团队提现:<em>'+val.dayDrawRechargeMoney+'</em>元</div>';
					html += '<div class="bb-bottom-2">团队投注:<em>'+val.dayConsumptionMoney+'</em>元</div>';
					html += '<div class="bb-bottom-2">团队盈亏:<em>'+val.dayDividendMoney+'</em>元</div>';
					html += '<div class="bb-bottom-2">团队返奖:<em>'+val.dayIncomeMoney+'</em>元</div>;
					html += '<div class="bb-bottom-2">团队活动:<em>'+val.dayActivitiesMoney+'</em>元</div>';
					html += '</div>';
					html += '</li>';

					tabs.append(html);
				});
				//tabs.append(shtml);
			}else{
				alt(data.message,-1);
			}
		}
	});
}*/

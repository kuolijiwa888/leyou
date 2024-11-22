var userlevel=null;
var userlevelbai = 0;//安全等级
var levelstr     = '您的账户安全级别为低，请完善安全信息';
$(function(){
    getuserlevel();
    //indexQuickDate(-30);
    searchStatistics();
    getDownUserNum();//团队人数等
    $('.level2-nav').children().click(function() {
        $(".paging").html('');
    });
});

//会员安全级别
var getuserlevel = function(){
    var url = apirooturl + 'userlevel';
    $.ajax({
        url: url,
        type: "post",
        dataType: "json",
        success: function(data) {
            if (data.sign === true) {
                userlevel = data.data;
                userlevelbai = 0;
                if(userlevel.tradepassword==true){
                    userlevelbai += 14;
                    $("#isTradePassword").removeClass('wb').addClass('yb');
                }
                if(userlevel.userbankname==true){
                    userlevelbai += 14;
                    $("#isUserbankName").removeClass('wb').addClass('yb');
                    $("#isUserbankName").find('.mark').removeAttr('onclick').css({'color':'grey'}).text('已绑定');
                }
                if(userlevel.email==true){
                    userlevelbai += 14;
                    $("#isEmail").removeClass('wb').addClass('yb');
                    $("#isEmail").find('.mark').removeAttr('onclick').css({'color':'grey'}).text('已绑定');
                }
                if(userlevel.phone==true){
                    userlevelbai += 14;
                    $("#isPhone").removeClass('wb').addClass('yb');
                    $("#isPhone").find('.mark').removeAttr('onclick').css({'color':'grey'}).text('已绑定');
                }
                if(userlevel.qq==true){
                    userlevelbai += 14;
                    $("#isQq").removeClass('wb').addClass('yb');
                }
                if(userlevel.bindbank==true){
                    userlevelbai += 14;
                }
                if(userlevel.question==true){
                    userlevelbai += 14;
                    $("#isQuestion").removeClass('wb').addClass('yb');
                    $("#isQuestion").find('.mark').removeAttr('onclick').attr('onclick','userseditecurity()').css({'color':'grey'}).text('修改密保');
                }
                $("#userInfoDiv .anqdj em").css({'width':userlevelbai+'%'});
                if(userlevelbai<30){
                    var levelstr = '您的账户安全级别为低，请完善安全信息';
                }
                if(userlevelbai>=30 && userlevelbai<60){
                    var levelstr = '您的账户安全级别为中，请完善安全信息';
                }
                if(userlevelbai>=60){
                    var levelstr = '您的账户安全级别为高';
                }
                $("#anqxis").text(levelstr);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {}

    });
}
var getlotterylist=function(lotterylist){
    if(lotterylist.length>0){
        var opts = '<option value="">全部</option>';
        for(var o in lotterylist){
            opts += '<option value="'+lotterylist[o].name+'">'+lotterylist[o].title+'</option>';
        };
        $("#userBets").find(".lotteryname").html(opts);
    }
}
/*注册用户名检测*/
var ischeckusername = false;
function checkAddUsername(obj){
    var uname = $(obj).val();
    var url = apirooturl + 'checkaddusername';
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {'uname':uname},
        async:false,
        success: function(msg) {
            if (msg.sign === true) {
                if(msg.data.ishas==1){
                    $("#addUserGeneralTipsUsername").text(msg.message).css({'color':'red'});
                }else{
                    ischeckusername = true;
                    $("#addUserGeneralTipsUsername").text('用户名可用').css({'color':'green'});
                }

            }else{
                $("#addUserGeneralTipsUsername").text(msg.message).css({'color':'red'});
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
}
/**
 * 检查彩票返点是否合法
 */
 function checkAddUserRebate() {
    var rebateid = way.get("addUser.rebateid");
    //rebateid = parseFloat(rebateid);
    var maxLotteryReg = eval('/' + way.get("addUser.maxLotteryReg") + '/');

    if (!maxLotteryReg.test(rebateid)) {
        // $("#addUserGeneralTipsUsername").text("用户名格式不正确");
        $("#addUserGeneralTipsRebate").addClass("dred");
        return false;
    } else {
        // $("#addUserGeneralTipsUsername").text("正在验证用户名...");
        $("#addUserGeneralTipsRebate").removeClass("dred");
    }

    return true;
}
/**
 * 添加用户
 */
 function addUser() {
    if (!user) {
        Dialog.error("温馨提示","用户未登录");
        return false;
    }
    if (ischeckusername==false) {
        Dialog.error("温馨提示","请输入合法的用户名");
        return false;
    }
    /*if (!checkAddUserRebate()) {
        popTips("请输入合法的彩票返点", "waring");
        return;
    }
    if (!checkAddUserRebate()) {
        popTips("请输入合法的彩票返点", "waring");
        return;
    }*/
    var userType = $('#agent_member').attr('types');
    if (!userType) {
        Dialog.error("温馨提示","请选择开户类型");
        return false;
    }
    var username = way.get("addUser.username");
    var userType = userType;
    var rebateid = {
        "ssc":way.get("addUser.rebatessc"),
        "k3":way.get("addUser.rebatek3"),
        "x5":way.get("addUser.rebatex5"),
        "pl3":way.get("addUser.rebatepl3"),
        "kl8":way.get("addUser.rebatekl8"),
        "pk10":way.get("addUser.rebatepk10"),
        "lhc":way.get("addUser.rebatelhc"),
        "xy28":way.get("addUser.rebatexy28"),
    };
    /*for (var j in rebateid) {
        if((rebateid[j])*10%0.1!=0){
            alt("请填写对应档位的数值",-1);
            return false;
        }
    }*/

    rebateid = JSON.stringify(rebateid);
    var url = apirooturl + 'adduser';
    $.ajax({
        url: url,
        type: "post",
        dataType: "json",
        data: {
            "username": username,
            "rebate": rebateid,
            "isProxy": userType
        },
        success: function(data) {
            if (data.sign === true) {
                way.set("addUser.username", "");
                Dialog.success("温馨提示",data.message);
            } else {
                Dialog.error("温馨提示",data.message);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            Dialog.error("温馨提示","添加用户失败");
        }
    });
}
/**
 * 初始化开户中心
 */
 function initAddUser() {
    $.ajax({
        url: "/Account.getuserrebatereg",
        type: "post",
        dataType: "json",
        success: function(data) {
            if (data.sign === true) {
                var maxLottery = data.maxLottery;
                for (var i in maxLottery) {
                    way.set("addUser.maxRebate"+i, maxLottery[i]);
                }
                way.set("addUser.maxLotteryReg", data.maxLotteryReg);
                if (maxLottery >= 12) {
                    $(".tianjzh .sty-h").show();
                }
            } else {
                popTips(data.message, "error");
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {}
    });
}
/**
 * 添加开户链接
 */
 function addSignuplink() {
    if (!user) {
        Dialog.warn("温馨提示","用户未登录");
        return false;
    }
    var userType = $('#agent_members').attr('types');
    if (!userType) {
        Dialog.error("温馨提示","请选择开户类型");
        return false;
    }

    var addSignuplinkValid = eval($("#addSignuplinkValid").val());
    var times = way.get("addSignuplink.times");
    var addSignuplinkTpl = parseInt($("#addSignuplinkTpl").val());
    // var rebateid = way.get("addSignuplink.rebateid");
    var rebateid = {
        "ssc":way.get("addSignuplink.rebatessc"),
        "k3":way.get("addSignuplink.rebatek3"),
        "x5":way.get("addSignuplink.rebatex5"),
        "pl3":way.get("addSignuplink.rebatepl3"),
        "kl8":way.get("addSignuplink.rebatekl8"),
        "pk10":way.get("addSignuplink.rebatepk10"),
        "lhc":way.get("addSignuplink.rebatelhc"),
        "xy28":way.get("addSignuplink.rebatexy28"),
    };
    rebateid = JSON.stringify(rebateid);
    if (!times || parseInt(times) < 1 || parseInt(times) > 100) {
        Dialog.error("温馨提示","使用次数只能为正整数1~100之间");
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
            "rebate": rebateid,
            'tpltype':0
        },
        success: function(data) {
            if (data.sign === true) {
                way.set("addSignuplink.times", "");
                Dialog.success("温馨提示",data.message);
            } else {
                Dialog.error("温馨提示",data.message);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            Dialog.error("温馨提示","添加链接失败");
        }
    });
}

/**
 * 链接列表
 */
 function signuplinkList() {
    var thisPanel = $("#signuplinkList table tbody");
    var htmlTitle = '<tr><th>用户类型</th><th>总次数</th>' +
    '<th>使用次数</th><th>使用模版</th><th>创建时间</th><th>操作</th></tr>';
    thisPanel.empty();
    $("#signuplinkList .paging").empty();
    thisPanel.append(htmlTitle);

    var jqueryGridPage = 1;
    var jqueryGridRows = 10;
    var url = apirooturl + 'signuplinklist';
    var pagination = $.pagination({
        render: '#signuplinkList .paging',
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
            thisPanel.append(htmlTitle);
            var registerUrl = host + "/register/promotionInvite/";
            $.each(data, function(idx, val) {
                var html = '';
                var data = new Date();
                var millTime = data.getTime() - Date.parse(val.oddtime.replace(/-/g, '/'));
                var hours = Math.floor(millTime / (3600 * 1000));
                html += '<tr id="Signuplink_'+val.id+'">';
                html += '<td>' + (val.proxy==1 ? '代理' : '普通用户') + '</td>';
                html += '<td>' + val.usenum + '</td>';
                html += '<td>' + val.okusenum + '</td>';
                html += '<td>' + (val.tpltype==0 ? '默认' : '模版'+val.tpltype) + '</td>';
                html += '<td>' + val.oddtime + '</td>';

                if ((eval(val.usenum) - eval(val.okusenum)) <= 0) {
                    html += '<td>已失效&nbsp;';
                } else {
                    html += '<td><a href="javascript:;" id="copy_' + val.id;
                    html += '" onclick="viewlink(\'' + registerUrl + val.id + '\')">查看</a>&nbsp;';
                }
                html += '<a href="javascript:;" onclick="delSignuplinkConfirm(\'' + val.id + '\');">删除</a></td>';
                html += '</tr>';
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
function delSignuplinkConfirm(id){
    if (!id) {
        Dialog.warn("温馨提示","非法操作");
        return false;
    }
    var url = apirooturl + 'delsignuplink';
    $.ajax({
        url: url,
        type: "post",
        dataType: "json",
        data: {"id": id},
        success: function(data) {
            if (data.sign === true) {
                $("#Signuplink_"+id).remove();
                Dialog.success("温馨提示",data.message);
            } else {
                Dialog.error("温馨提示",data.message);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            Dialog.error("温馨提示","服务器链接失败");
        }
    });
}
function viewlink(linkurl){
    Dialog({
        title: "开户链接",
        content: "<input class='el-input__inner' value="+linkurl+" type='text' style='text-align: center;'>",
        showButton: false
    });
    //Dialog.success('开户链接',"<input class='el-input__inner' value="+linkurl+" type='text' >");
}
/**
 * 会员管理 - 会员列表
 */
 function allUserList(isonline) {
    if(isonline){
        var thisPanel = $("#allOnlineUserList table tbody");
    }else{
        var thisPanel = $("#allUserList table thead");
    }
    //<th>洗码账户</th>
    //var htmlTitle = '<tr><th>用户名</th><th>姓名</th><th>QQ</th><th>账户类型</th><th>余额账户</th><th>积分账户</th>' +
    //  '<th>注册时间</th><th>状态</th><th>上级</th><th>下级</th></tr>';
    var htmlTitle = '<tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">姓名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">QQ</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">账户类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">余额账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">积分账户</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">注册时间</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">状态</div></th><th colspan="1" rowspan="1" class="el-table_1_column_9 is-leaf"><div class="cell">上级</div></th><th colspan="1" rowspan="1" class="el-table_1_column_10 is-leaf"><div class="cell">下级</div></th></tr>';


    if(isonline){
        $('#allOnlineUserList .paging').empty();
    }else{
        $('#allUserList .paging').empty();
    }
    thisPanel.empty();
    thisPanel.append(htmlTitle);

    if(isonline){
        $("#allOnlineUserList thead .butsty1:eq(1)").remove();
    }else{
        $("#allUserList thead .butsty1:eq(1)").remove();
    }


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
        render: isonline?'#allOnlineUserList .paging':'#allUserList .paging',
        pageSize: jqueryGridRows,
        pageLength: 7,
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
            thisPanel.append(htmlTitle);

            $.each(data, function(idx, val) {
                var html = '<tr class="'+ val.id +'">';
                if (val.proxy == 1) {
                    html += '<td><a href="javascript:;" onclick="allUserList(\'' + val.id + '\');"><font color="red">' + val.username + '</font></a></td>';
                } else {
                    html += '<td>' + val.username + '</td>';
                }
                html += '<td>' + val.userbankname + '</td>';
                html += '<td>' + val.qq + '</td>';
                html += '<td>' + (val.proxy == 1 ? '代理' : '玩家') + '</td>';
                html += '<td>' + val.balance + '</td>';
                //      html += '<td>' + (val.xima ? val.xima : '0') + '</td>';
                html += '<td>' + (val.point ? val.point : '0') + '</td>';
                if(val.regtime==0){
                    html += '<td>~~</td>';
                }else{
                    html += '<td>' + val.regtime + '</td>';
                }

                if(val.isonline=='1'){
                    val.isonline = '<span class="sty-h">在线</span>';
                }else{
                    val.isonline = '离线';
                }
                html += '<td>' + val.isonline + '</td>';
                html += '<td>' + val.parentname + '</td>';
                html += '<td><a class="toshow" style="cursor: pointer;" onclick="subordinate('+val.id+');">查看</a></td>';

                html += '</tr>';
                thisPanel.append(html);
            });
        },
        pageError: function(response) {},
        emptyData: function() {}
    });
    pagination.init();
}

function  subordinate(id){
    var url = apirooturl + 'memberList';
    $.ajax({
        url : url,
        type : 'post',
        data : {
            jqueryGridPage:1,
            jqueryGridRows:10,
            id : id
        },
        success : function(data){
            if(data['root'] != null){
                var obj = data['root'];
                var html = '';
                $.each(obj, function(i) {
                    html += '<tr class="'+ obj[i].id +' parent'+obj[i].parentid+' ">';
                    if (obj[i].proxy == 1) {
                        html += '<td><a href="javascript:;" onclick="allUserList(\'' + obj[i].id + '\');"><font color="red">' + obj[i].username + '</font></a></td>';
                    } else {
                        html += '<td>' + obj[i].username + '</td>';
                    }
                    html += '<td>' + obj[i].userbankname + '</td>';
                    html += '<td>' + obj[i].qq + '</td>';
                    html += '<td>' + (obj[i].proxy == 1 ? '代理' : '玩家') + '</td>';
                    html += '<td>' + obj[i].balance + '</td>';
                    //      html += '<td>' + (val.xima ? val.xima : '0') + '</td>';
                    html += '<td>' + (obj[i].point ? obj[i].point : '0') + '</td>';
                    if(obj[i].regtime==0){
                        html += '<td>~~</td>';
                    }else{
                        html += '<td>' + obj[i].regtime + '</td>';
                    }

                    if(obj[i].isonline=='1'){
                        obj[i].isonline = '<span class="sty-h">在线</span>';
                    }else{
                        obj[i].isonline = '离线';
                    }
                    html += '<td>' + obj[i].isonline + '</td>';
                    html += '<td>' + obj[i].parentname + '</td>';
                    if (obj[i].proxy == 1) {
                        html += '<td><a class="toshow" style="cursor: pointer;" onclick="subordinate('+obj[i].id+' );">查看</a></td>';
                    }
                    html += '</tr>';
                });
                if($('.'+id).nextAll().hasClass('parent'+id)){
                    var url = apirooturl + 'getids';
                    $.ajax({
                        url : url,
                        type : 'post',
                        data : {
                            id : id,
                        },
                        success : function(ids){
                            $.each(ids, function(i) {
                                if($('.'+id).nextAll('.parent'+ids[i].id))$('.'+id).nextAll('.parent'+ids[i].id).remove();
                            });
                        }
                    })
                    if($('.'+id).nextAll('.parent'+id)) $('.'+id).nextAll('.parent'+id).remove();
                    $("."+id).find('.toshow').html('查看')
                }else{
                    $("."+id).after(html);
                    $("."+id).find('.toshow').html('收起')
                }

            }else{
                //alt('当前代理还没有下级');
                Dialog.warn('温馨提示','当前代理还没有下级');
            }
        }
    })
}
/**
 * 初始化游戏纪录查询条件
 */
 function initDownUserBetsList() {
    $("#downUserBetsSearchStartTime").val(laydate.now());
    $("#downUserBetsSearchEndTime").val(laydate.now(1));
    $("#downUserBetsSearchLoginname").val("");

    $("#downUserBetsSearchShortNames").empty();
    if(lotterylist.length>0){
        var opts = '<li class="el-select-dropdown__item ascnlottery" value="">全部</li>';
        for(var o in lotterylist){
            opts += '<li class="el-select-dropdown__item ascnlottery" value="'+lotterylist[o].name+'">'+lotterylist[o].title+'</li>';
        };
        $("#downUserBetsSearchShortNames").html(opts);
    }
    $('.ascnlottery').click(function(){
        var type = $(this).attr('value');
        $('#downUserBetsSearchShortName').attr('types',type);
        var text = $(this).text();
        $('#downUserBetsSearchShortName').val(text);
    })
}
/**
 * 游戏纪录
 */
 function allDownUserBetsList() {
    var thisPanel = $("#downUserBetsList table tbody");
    var htmlTitle = '<tr><th>订单号</th><th>用户名</th><th>彩票简称</th><th>期号</th><th>玩法名称</th><th>赔率</th><th>下单时间</th>' +
    '<th>金额</th><th>注数</th><th>中金额</th><th>中注数</th><th>状态</th></tr>';
    thisPanel.empty();
    thisPanel.append(htmlTitle);
    $('#downUserBetsList .paging').empty();

    var jqueryGridPage = 1;
    var jqueryGridRows = 10;

    var billno = $("#downUserBetsSearchBillno").val();
    var expect = $("#downUserBetsSearchExpect").val();
    var startTime = $("#downUserBetsSearchStartTime").val();
    var endTime = $("#downUserBetsSearchEndTime").val();
    if (dateDiff(startTime, endTime) > 30) {
        Dialog.error('温馨提示','查询日期间隔不能超过30天');
        return false;
    } else if (dateDiff(startTime, endTime) < 0) {
        Dialog.error('温馨提示','查询结束日期要大于开始日期');
        return false;
    }
    var loginname = $("#downUserBetsSearchLoginname").val();
    var shortName = $("#downUserBetsSearchShortName").attr('types');
    var state = $("#downUserBetsSearchState").attr('types');

    var url = apirooturl + 'downuserbetslist';
    way.set("allDownUserBetsList.k3hzbig",0);
    way.set("allDownUserBetsList.k3hzsmall",0);
    way.set("allDownUserBetsList.k3hzodd",0);
    way.set("allDownUserBetsList.k3hzeven",0);
    var pagination = $.pagination({
        render: '#downUserBetsList .paging',
        pageSize: jqueryGridRows,
        pageLength: 7,
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
            thisPanel.append(htmlTitle);
            if(sucdata){
                way.set("allDownUserBetsList.k3hzbig",sucdata.bigamount?sucdata.bigamount:0);
                way.set("allDownUserBetsList.k3hzsmall",sucdata.smallamount?sucdata.smallamount:0);
                way.set("allDownUserBetsList.k3hzodd",sucdata.oddamount?sucdata.oddamount:0);
                way.set("allDownUserBetsList.k3hzeven",sucdata.evenamount?sucdata.evenamount:0);
            }
            $.each(data, function(index, val) {
                var html = '<tr id="'+val.trano+'"><td> <a class="showcode" data-info="'+val.playtitle+'--'+val.tzcode+'" href="javascript:void(0)">' + val.trano + '</a></td>' +
                '<td>' + val.username + '</td>' +
                '<td>' + val.cptitle + '</td>' +
                '<td>' + val.expect + '</td>' +
                '<td>' + val.playtitle + '</td>' +
                '<td>' + val.mode + '</td>' +
                '<td>' + val.oddtime + '</td>' +
                '<td>' + val.amount + '</td>' +
                '<td>' + val.itemcount + '</td>' +
                '<td>' + (val.okamount ? val.okamount : 0) + '</td>' +
                '<td>' + val.okcount + '</td>' +
                '<td>';
                //'<td>' + val.betsTimes + '</td>' +
                if(val.isdraw == -1) { // 未中奖绿色
                    html += '<span style="color:green">未中奖</span>';
                } else if(val.isdraw == 1) { // 已中奖红色
                    html += '<span style="color:red">已中奖</span>';
                }else if(val.isdraw == -2) {
                    html += '<del>已撤单</del>';
                }else if(val.isdraw == 0) {
                    html += '<span>未开奖</span>';
                }else{
                    html += '<span>未知状态</span>';
                }
                html += '</td>';
                html += '</tr>';
                thisPanel.append(html);
            });
        },
        pageError: function(response) {},
        emptyData: function() {}
    });
    pagination.init();
}
function initAccountChangeList() {
    $("#accountChangeStartTime").val(laydate.now());
    $("#accountChangeEndTime").val(laydate.now(1));
    $("#accountChangeSearchLoginname").val("");
}
function accountChange() {
    var thisPanel = $("#accountChange table tbody");
    var htmlTitle = "<tr><th>订单号</th><th>用户名</th><th>帐变金额</th>" +
    "<th>操作前金额</th><th>操作后金额</th><th>账变类型</th><th>账变日期</th><th>备注</th></tr>";

    //var htmlTitle = '<tr class=""><th colspan="1" rowspan="1" class="el-table_1_column_1 is-leaf"><div class="cell">订单号</div></th><th colspan="1" rowspan="1" class="el-table_1_column_2 is-leaf"><div class="cell">用户名</div></th><th colspan="1" rowspan="1" class="el-table_1_column_3 is-leaf"><div class="cell">帐变金额</div></th><th colspan="1" rowspan="1" class="el-table_1_column_4 is-leaf"><div class="cell">操作前金额</div></th><th colspan="1" rowspan="1" class="el-table_1_column_5 is-leaf"><div class="cell">操作后金额</div></th><th colspan="1" rowspan="1" class="el-table_1_column_6 is-leaf"><div class="cell">账变类型</div></th><th colspan="1" rowspan="1" class="el-table_1_column_7 is-leaf"><div class="cell">账变日期</div></th><th colspan="1" rowspan="1" class="el-table_1_column_8 is-leaf"><div class="cell">备注</div></th></tr>';

    thisPanel.empty();
    thisPanel.append(htmlTitle);
    $('#accountChange .paging').empty();

    var jqueryGridPage = 1;
    var jqueryGridRows = 10;
    var loginname = $("#accountChangeSearchLoginname").val();
    var starTime = $("#accountChange").find(".starTime").val();
    var endTime = $("#accountChange").find(".endTime").val();
    if (dateDiff(starTime, endTime) > 30) {
        Dialog.error('温馨提示','查询日期间隔不能超过30天');
        return false;
    } else if (dateDiff(starTime, endTime) < 0) {
        Dialog.error('温馨提示','查询结束日期要大于开始日期');
        return false;
    }
    var sourceModule = $("#sourceModule").attr('types');
    var url = apirooturl + 'downuserchangelist';
    var pagination = $.pagination({
        render: '#accountChange .paging',
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
            "type": sourceModule,
            "loginname": loginname
        },
        complete: function() {},
        success: function(data) {
            thisPanel.empty();
            thisPanel.append(htmlTitle);
            $.each(data, function(index, val) {
                /* iterate through array or object */
                var html = '<tr>';

                html += '<td>' + val.trano + '</td>';
                html += '<td>' + val.username + '</td>';
                html += '<td>' + val.amount + '</td>';
                html += '<td>' + val.amountbefor + '</td>';
                html += '<td>' + val.amountafter + '</td>';
                html += '<td>' + val.typename + '</td>';
                html += '<td>' + val.oddtime + '</td>';
                html += '<td>' + val.remark + '</td>';
                html += '</tr>';
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
    var thisPanel = $("#groupDeposit table tbody");
    var htmlTitle = "<tr><th>用户名</th>" +
    "<th>订单号</th>" +
    "<th>申请金额</th>" +
    "<th>手续费</th>" +
    "<th>实际金额</th>" +
    "<th>变更前金额</th>" +
    "<th>变更后金额</th>" +
    "<th>申请时间</th>" +
    "<th>状态</th>" +
    "</tr>";
    thisPanel.empty();
    thisPanel.append(htmlTitle);
    $("#groupDeposit .paging").empty();

    var jqueryGridPage = 1;
    var jqueryGridRows = 10;
    var loginname = $("#groupDepositSearchLoginname").val();
    var billNo = $("#groupDepositSearchBillNo").val();
    var starTime = $("#groupDeposit").find(".starTime").val();
    var endTime = $("#groupDeposit").find(".endTime").val();
    var type = $("#groupDepositType").attr('types');
    var state = $("#groupDepositState").attr('types');
    var url = apirooturl + 'downuserrechargeandwithdrawlist';
    var pagination = $.pagination({
        render: '#groupDeposit .paging',
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
            thisPanel.append(htmlTitle);

            $.each(data, function(index, val) {
                /* iterate through array or object */
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
                html = '<tr>';
                html += '<td>' + val.username + '</td>' +
                '<td>' + val.trano + '</td>' +
                '<td>' + val.amount + '</td>' +
                '<td>' + val.fee + '</td>' +
                '<td>' + val.actualamount + '</td>' +
                '<td>' + val.oldaccountmoney + '</td>' +
                '<td>' + val.newaccountmoney + '</td>' +
                '<td>' + val.oddtime + '</td>' +
                '<td>' + state + '</td>' +
                '</tr>';
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
function initGroupReportList2() {
    $("#groupReportStartTime").val(laydate.now());
    $("#groupReportEndTime").val(laydate.now(1));
    $("#groupReportSearchLoginname").val("");
    $("#accounttype").val("lottery");
}
function initCommissionList() {
    $("#groupCommissionStartTime").val(laydate.now());
    $("#groupCommissionEndTime").val(laydate.now(1));
    $("#groupCommissionSearchLoginname").val("");
    $("#accounttype").val("lottery");
}
function groupReport() {
    var loginname = $("#groupReportSearchLoginname").val();
    var starTime = $("#groupReport").find(".starTime").val();
    var endTime = $("#groupReport").find(".endTime").val();
    var accounttype = $("#accounttype").val();

    var canBeOpen = false;
    var tabs = $("#groupReport").find("tbody");
    var htmlTitle = "<tr><th>日期</th>" +
    "<th>充值金额</th>" +
    "<th>提款金额</th>" +
    "<th>投注额</th>" +
            //              "<th>确认消费量</th>" +
            "<th>返奖额</th>" +
            "<th>活动赠送</th>";
    //"<th>分红</th>";
    htmlTitle += "<th>盈亏</th></tr>";
    tabs.empty();
    tabs.append(htmlTitle);
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
                tabs.append(htmlTitle);
                $.each(data.root, function(index, val) {

                    var innerHtml =
                    '<tr>' +
                    '<td>' + val.statDate + '</td>' +
                    '<td>' + val.dayRechargeMoney + '</td>' +
                    '<td>' + val.dayDrawRechargeMoney + '</td>' +
                    '<td>' + val.dayConsumptionMoney + '</td>' +
                    '<td>' + val.dayCommissionMoney + '</td>' +
                    '<td>' + val.dayActivitiesMoney + '</td>' +
                    '<td>' + val.dayDividendMoney + '</td>';
                    innerHtml += '</tr>';

                    tabs.append(innerHtml);
                });
                var sdata = data.totaldata;
                /*var totalEnsureConsumpMoney = eval(sdata.dayEnsureConsumpMoney);
                 if (totalEnsureConsumpMoney < 0) {
                 totalEnsureConsumpMoney = -totalEnsureConsumpMoney;
             }*/
             var shtml = '<tr><td>总计</td>' +
             '<td>' + sdata.dayRechargeMoney + '</td>' +
             '<td>' + sdata.dayDrawRechargeMoney + '</td>' +
                        //'<td>' + totalEnsureConsumpMoney + '</td>' +
                        '<td>' + sdata.dayConsumptionMoney + '</td>' +
                        '<td>' + sdata.dayCommissionMoney + '</td>' +
                        '<td>' + sdata.dayActivitiesMoney + '</td>'+
                        '<td>' + sdata.dayDividendMoney + '</td>';
                        shtml += '</tr>';
                        tabs.append(shtml);
                    }else{
                        Dialog.error('温馨提示',data.message);
                    }
                }
            });
}
function groupReport2(pid) {
    pid = pid==undefined?null:pid;
    var loginname = $("#groupReportSearchLoginname").val();
    var starTime = $("#groupReport").find(".starTime").val();
    var endTime = $("#groupReport").find(".endTime").val();
    var accounttype = $("#accounttype").val();

    var canBeOpen = false;
    var tabs = $("#groupReport").find("tbody");
    var htmlTitle = "<tr><th>日期</th>" +
    "<th>充值金额</th>" +
    "<th>提款金额</th>" +
    "<th>投注额</th>" +
            //              "<th>确认消费量</th>" +
            "<th>返奖额</th>" +
            "<th>活动赠送</th>";
    //"<th>分红</th>";
    htmlTitle += "<th>盈亏</th></tr>";
    tabs.empty();
    tabs.append(htmlTitle);
    var jqueryGridPage = 1;
    var jqueryGridRows = 10;
    var url = apirooturl + 'downuseraccountreportlist2';

    $.ajax({
        type: "post",
        url: url,
        data: {
            "startime": starTime,
            "endtime": endTime,
            "loginname": loginname,
            "accounttype": accounttype,
            "pid" : pid
        },
        dataType:'json',
        success: function(data) {
            if(data.sign){
                tabs.empty();
                tabs.append(htmlTitle);
                $.each(data.root, function(index, val) {

                    var innerHtml =
                    '<tr>' ;
                    if(val.isxj == 1){
                        innerHtml += '<td><a style="color:#f33d3d" href="javascript:;" onclick="groupReport2('+val.id+')">' + val.username + '</a></td>';
                    }else{
                        innerHtml += '<td>' + val.username + '</td>';
                    }


                    innerHtml +=
                    '<td>' + val.dayRechargeMoney + '</td>' +
                    '<td>' + val.dayDrawRechargeMoney + '</td>' +
                    '<td>' + val.dayConsumptionMoney + '</td>' +
                    '<td>' + val.dayCommissionMoney + '</td>' +
                    '<td>' + val.dayActivitiesMoney + '</td>' +
                    '<td>' + val.dayDividendMoney + '</td>';
                    innerHtml += '</tr>';

                    tabs.append(innerHtml);
                });
                var sdata = data.totaldata;
                /*var totalEnsureConsumpMoney = eval(sdata.dayEnsureConsumpMoney);
                 if (totalEnsureConsumpMoney < 0) {
                 totalEnsureConsumpMoney = -totalEnsureConsumpMoney;
             }*/
             var shtml = '<tr><td>总计</td>' +
             '<td>' + sdata.dayRechargeMoney + '</td>' +
             '<td>' + sdata.dayDrawRechargeMoney + '</td>' +
                        //'<td>' + totalEnsureConsumpMoney + '</td>' +
                        '<td>' + sdata.dayConsumptionMoney + '</td>' +
                        '<td>' + sdata.dayCommissionMoney + '</td>' +
                        '<td>' + sdata.dayActivitiesMoney + '</td>'+
                        '<td>' + sdata.dayDividendMoney + '</td>';
                        shtml += '</tr>';
                        tabs.append(shtml);
                    }else{
                        Dialog.error('温馨提示',data.message);
                    }
                }
            });
}

function Commission(pid) {
    pid = pid==undefined?null:pid;
    var loginname = $("#groupCommissionSearchLoginname").val();
    var starTime = $("#groupCommission").find(".starTime").val();
    var endTime = $("#groupCommission").find(".endTime").val();
    var accounttype = $("#accounttype").val();

    var canBeOpen = false;
    var tabs = $("#groupCommission").find("tbody");
    var htmlTitle = "<tr><th>用户</th>" +
    "<th>佣金</th>";
    tabs.empty();
    tabs.append(htmlTitle);
    var jqueryGridPage = 1;
    var jqueryGridRows = 10;
    var url = apirooturl + 'commissionlist';

    $.ajax({
        type: "post",
        url: url,
        data: {
            "startime": starTime,
            "endtime": endTime,
            "loginname": loginname,
            "accounttype": accounttype,
            "pid" : pid
        },
        dataType:'json',
        success: function(data) {
            if(data.sign){
                tabs.empty();
                tabs.append(htmlTitle);
                $.each(data.root, function(index, val) {
                    var innerHtml =
                    '<tr>' ;
                    if(val.isindex == 1){
                        innerHtml += '<td><a style="color:#0033FF" href="javascript:;" onclick="Commission('+val.id+')">' + val.username + '</a></td>';
                    }else{
                        if(val.isxj == 1){
                            innerHtml += '<td><a style="color:#f33d3d" href="javascript:;" onclick="Commission('+val.id+')">' + val.username + '</a></td>';
                        }else{
                            innerHtml += '<td>' + val.username + '</td>';
                        }
                    }



                    innerHtml +=
                    '<td>' + val.commission + '</td>';
                    innerHtml += '</tr>';

                    tabs.append(innerHtml);
                });
                //var sdata = data.totaldata;
                /*var totalEnsureConsumpMoney = eval(sdata.dayEnsureConsumpMoney);
                 if (totalEnsureConsumpMoney < 0) {
                 totalEnsureConsumpMoney = -totalEnsureConsumpMoney;
             }*/
                /*var shtml = '<tr><td>总计</td>' +
                    '<td>' + sdata.commission + '</td>';
                shtml += '</tr>';
                tabs.append(shtml);*/
            }else{
                Dialog.error('温馨提示',data.message);
            }
        }
    });
}
var securitys = {};

/**
 * 快速选择时间
 */
 function indexQuickDate(days) {
    $("#indexStartDate").val(laydate.now(days));
    $("#indexEndDate").val(laydate.now(1));
}
// 当前首页统计
var currentAccountType;
/**
 * 初始化代理首页统计
 * @param accountType
 */
 function initStatistics(accountType) {
    $("#indexStartDate").val(laydate.now());
    $("#indexEndDate").val(laydate.now(1));

    currentAccountType = accountType;


    $("#indexAgent .dzxz ul li input").on('click', function() {
        if (accountType == "baccarat") {
            initEchartsBaccarat();
        } else {
            initEchartsLottery(accountType);
        }
    });

    searchStatistics(accountType);
}
/**
 * 查询
 * @param accountType
 * @returns
 */
 function searchStatistics(accountType) {
    if (!accountType) {
        accountType = currentAccountType;
    }

    if (accountType == "baccarat") {
        initIndexBaccarat();
        initEchartsBaccarat();
    } else {
        initIndexLottery(accountType);
        initEchartsLottery(accountType);
    }
}

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
                $('.czingand').text(data.data.transferIn);
                $('.txingand').text(data.data.transferOut);
                $('.tzingand').text(data.data.validAmount);
                $('.pjingand').text(data.data.payoutAmount);
                $('.fdingand').text(data.data.dayBackPoint);
                $('.fsingand').text(data.data.activityAmount);
            } else {
                Dialog.error('温馨提示',data.message);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {}
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
 * 图表
 * @param accountType
 */
 function initEchartsLottery(accountType) {
    var startDate = $("#indexStartDate").val();
    var endDate = $("#indexEndDate").val();
    var type = $('input[name="indexType"]:checked').val();
    var url = apirooturl + 'echarts';
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {
            "startime": startDate,
            "endtime": endDate,
            "type": type
        },
        success: function(msg) {
            if (msg.sign) {
                console.log(msg.data['czdata']);
                var tubiao = echarts.init(document.getElementById('tubiao'), 'infographic');
                var option = {
                    title: {
                        text: '',
                        subtext: ''
                    },
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {  type: 'shadow'// 默认为直线，可选为：'line' | 'shadow'
                        }
                    },
                    legend: {
                        data: [msg.text['cztext'],msg.text['txtext'],msg.text['tztext'],msg.text['fdtext'],msg.text['xztext']]
                    },
                    toolbox: {
                        show: true,
                        feature: {
                            dataView: {show: false, readOnly: false},
                            magicType: {show: true, type: ['line', 'bar']},
                            restore: {show: true},
                            saveAsImage: {show: true}
                        }
                    },
                    calculable: true,
                    xAxis: [
                    {
                        type: 'category',
                        data: msg.date
                    }
                    ],
                    grid: {
                top: '10%',
                left: '4%',
                right: '4%',
                bottom: '0%',
                containLabel: true
              },
                    yAxis: [
                    {
                        type: 'value'
                    }
                    ],
                    series: [
                    {
                        name: msg.text['cztext'],
                        type: 'bar',
                        data: msg.data['czdata'],
                        markPoint: {
                            data: [
                            {type: 'max', name: '最大值'},
                            {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                            {type: 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name: msg.text['txtext'],
                        type: 'bar',
                        data: msg.data['txdata'],
                        markPoint: {
                            data: [
                            {type: 'max', name: '最大值'},
                            {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                            {type: 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name: msg.text['tztext'],
                        type: 'bar',
                        data: msg.data['tzdata'],
                        markPoint: {
                            data: [
                            {type: 'max', name: '最大值'},
                            {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                            {type: 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name: msg.text['fdtext'],
                        type: 'bar',
                        data: msg.data['fddata'],
                        markPoint: {
                            data: [
                            {type: 'max', name: '最大值'},
                            {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                            {type: 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name: msg.text['xztext'],
                        type: 'bar',
                        data: msg.data['xzdata'],
                        markPoint: {
                            data: [
                            {type: 'max', name: '最大值'},
                            {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                            {type: 'average', name: '平均值'}
                            ]
                        }
                    }
                    ]
                };
                tubiao.setOption(option);
            }
        }
    });
}
var host = 'http://' + window.location.host;
var apirooturl = host + '/Apijiekou.';

var kefuurl = 'http://tb.53kf.com/kfimg.php?arg=10144747&style=1',
qqkefu  = 'http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes';
var user=null,inituser=false,lotterylist=null;
var getUserInfoTimeOutId;
var jqueryGridPage = 1;
var jqueryGridRows = 10;
$(function(){
  if($("a.sjxz").length > 0) {
    var ewmbox = '<div class="ewm-box" style="display: none; height: 180px;"><p>扫描二维码下载手机端</p><img class="ewm-img" src="'+host+'/resources/images/all/app.png" alt="" width="120" height="120"></div>';
    $("a.sjxz").append(ewmbox);
    $("a.sjxz").hover(function(){
      $(this).find("div.ewm-box").stop().animate({height:'toggle'});
  });
}
$(".bann_hover").hover(function(){
    $(this).children("ul").show();
})
$(".bann_hover").mouseleave(function(){
    $(this).children("ul").hide();
})
$(".bann_list li.downmenu").hover(function(){
    $(this).children("dl").show();
}).mouseleave(function(){
    $(this).children("dl").hide();
})

$('.loginCengClose').click(function () {
    $('.loginCengBox').hide();
})
$('.loginCengF button').click(function () {
    $('.loginCengBox').hide();
})
getLottery();
checkislogin();
  //tab切换
  function tabs(tabTit,on,tabCon){
      $(tabCon).each(function(){
        $(this).children().eq(0).addClass(on).show();
    });
      $(tabTit).children().click(function(){
          $(this).addClass(on).siblings().removeClass(on);
          var index = $(tabTit).children().index(this);
          $(tabCon).children().eq(index).show().siblings().hide();
      });
  }
  tabs(".tabHd","cur",".tabBd");
  navScroll()
});
function loginCengBoxFn(text) {
  $('.loginCengB').html(text);
  $('.loginCengBox').show();
}

function K3Time() {
    setTimeout(function () {
        $('.y_is_last').fadeOut(2000);
    },500)
}
function navScroll() {
  var K3LiLength = $('.system_lottery').children('li').length;
  var K3LiWidth = $('.system_lottery').children('li').outerWidth();
  var sumRes = (K3LiWidth * K3LiLength) + 'px';
  var system_lottery_index = 0;
  var div = $('<div class="y_is_last"></div>');
  var isDiv = $('.y_is_last').length;
  if(isDiv <= 0){
    $('body').append(div);
}
$('.system_lottery').width(sumRes);

$('.system_lottery_box').find('.next').click(function () {
  if(K3LiLength - 7 <= system_lottery_index){
    if($('.y_is_last').is(':hidden')){
      $('.y_is_last').fadeIn(500).html('已经是最后一个了');
  }
  K3Time();
}else{
    system_lottery_index++;
    $('.system_lottery').stop(true,false).animate({'left':-K3LiWidth*system_lottery_index},500);
}
})

$('.system_lottery_box').find('.prev').click(function () {
  if(system_lottery_index <= 0){
      if($('.y_is_last').is(':hidden')){
        $('.y_is_last').fadeIn(500).html('已经是最前一个了');
    }
    K3Time();
}else{
  system_lottery_index--;
  $('.system_lottery').stop(true,false).animate({'left':-K3LiWidth*system_lottery_index},500);
}
})
}
function lianxikefu(){
  //alert(WebConfigs.kefuthree);
  window.open(WebConfigs.kefuthree); 
  
}
function ggcontent(id){
  $.post(host+"/Index.gonggao", {'id':id}, function(data) {
    if(data.sign==true){
      art.dialog({
        id: 'testID2',
        title: '平台公告',
        content: '<div style="border-bottom:1px solid #ddd;height:40px; line-height:40px;"><p style="float:left; font-size:16px;">'+data.data.title+'</p><p style="float:right">'+data.data.oddtime+'</p></div><div style="padding:10px;">'+data.data.content+'</div>',
        lock: true,
        cancelVal: '关闭',
        cancel: true
    });
  }
},'json');
}

var getBillInfo = function(trano){
  var url = apirooturl + 'gettouzhuinfo';
  $.post(url, {'trano':trano}, function(data) {
    if(data.sign==true){
      if(data.BillInfo.isdraw==1){
        data.BillInfo.state='已中奖';
    }else if(data.BillInfo.isdraw==-1){
        data.BillInfo.state='未中奖';
    }else if(data.BillInfo.isdraw==0){
        data.BillInfo.state='未开奖';
    }else if(data.BillInfo.isdraw==-2){
        data.BillInfo.state='已撤单';
    }else if(data.BillInfo.isdraw==-3){
        data.BillInfo.state='已流产';
    }
    else if(data.BillInfo.isdraw==2){
        data.BillInfo.state='已出票';
    }
    if(data.BillInfo.ishemai==1){
        data.BillInfo.type="合买代购";
        var bdjindu=data.BillInfo.bdjindu*100;
        var jindu=data.BillInfo.jindu*100;
        data.BillInfo.jindu="认购:"+jindu+"%+保底:"+bdjindu+"%" ; 
        $("#BillInfo_jindu").css({'color':'blue'}); 
        
        if(data.BillInfo.showtype==0){
          data.BillInfo.show='完全公开';
      }else if(data.BillInfo.showtype==1){
        data.BillInfo.show='开奖后公开';
    }else if(data.BillInfo.showtype==2){
      data.BillInfo.show='仅跟单人可看';
  }else if(data.BillInfo.showtype==3){
    data.BillInfo.show='完全保密';
}
}else{
    data.BillInfo.type="代购";
    data.BillInfo.fenshu="--";  
    data.BillInfo.rengou="--";  
    data.BillInfo.baodi="--"; 
    data.BillInfo.payamount="--"; 
    data.BillInfo.jindu="100%";
    data.BillInfo.show="--"
}   
$("#BillInfo_type").css({'color':'blue'});
way.set('BillInfo',data.BillInfo);
if(data.BillInfo.isdraw==1){
    $("#BillInfo_isdraw").css({'color':'green'});
}else if(data.BillInfo.isdraw==-1){
    $("#BillInfo_isdraw").css({'color':'red'});
}else if(data.BillInfo.isdraw==0){
    $("#BillInfo_isdraw").css({'color':'grey'});
}else if(data.BillInfo.isdraw==-2){
    $("#BillInfo_isdraw").css({'color':'grey'});
}
var tzcode = data.BillInfo.tzcode;
var tzcodes = tzcode.replace(/\|/g,',');
$('#BillInfo_tzcode').text(tzcodes);
if(data.BillInfo.isdraw!=0){
  $('.againOrder').remove();
  $('.order-cancel').remove();
  var html = '<button type="button" class="ant-btn againOrder"><span>再次投注</span></button>';
  $('.touzhu_xiangqing').append(html);
  $('#touzhu').show();
  $('.againOrder').click(function(){
    $('#touzhu_ascn').removeClass("ascnshow");
    $('#touzhu_ascn').addClass("ascnhide");
    window.setTimeout(function () {
        $('#touzhu').hide();
        $('#touzhu_ascn').removeClass("ascnhide");
        $('#touzhu_ascn').addClass("ascnshow");
    }, 300)
})
  $('.ant-modal-close-x').click(function(){
    $('#touzhu_ascn').removeClass("ascnshow");
    $('#touzhu_ascn').addClass("ascnhide");
    window.setTimeout(function () {
        $('#touzhu').hide();
        $('#touzhu_ascn').removeClass("ascnhide");
        $('#touzhu_ascn').addClass("ascnshow");
    }, 300)
})
}else{
  $('.againOrder').remove();
  $('.order-cancel').remove();
  var html = '<button type="button" class="ant-btn order-cancel"><span>撤销注单</span></button>'+
  '<button type="button" class="ant-btn againOrder"><span>再次投注</span></button>';
  $('.touzhu_xiangqing').append(html);
  $('#touzhu').show();
  $('.againOrder').click(function(){
    $('#touzhu').hide();
})
  $('.ant-modal-close-x').click(function(){
    $('#touzhu').hide();
})
  $('.order-cancel').click(function(){
    $.post(apirooturl + 'chedan',{"trano":trano}, function(json){
      if(json.sign){
        Dialog.success('温馨提示','撤单成功');
        $('#touzhu').hide();
    }else{
        Dialog.error('温馨提示',json.message);
    }
},'json');
})
}
}else if(data.sign==false){
  Dialog.error('温馨提示',data.message);
}
},'json');
};
//检测是否登陆
var checkislogin = function(){
  var url = apirooturl + 'checkislogin';
  clearTimeout(getUserInfoTimeOutId);
  $.ajax({
    url: url, 
    type: "post",
    dataType: "json",
    async:false,
    success: function(data) {
      if (data.sign === true) {
        inituser = true;
        /*if(!data.UserUser.username) {
          data.UserUser.username = data.UserUser.username;
      }*/
      if(data.data.nickname){
          data.data.username = data.data.nickname;
      }
      user = data.data;
      logindiv();
      getUserInfoTimeOutId = setTimeout(function() {
          checkislogin();
      }, 20000);
      $(".wrapRefreshShow").text(data.data.balance);
  } else {
    user = null;
    logindiv(); 
}
},
error: function(XMLHttpRequest, textStatus, errorThrown) {
  inituser = true;

  getUserInfoTimeOutId = setTimeout(function() {
    checkislogin();
}, 20000);
}
});
}
var logindiv = function(){
  if(user && user.islogin!=0){
    if(user.islogin==1){
      way.set("user", user);
      $(".login-no").hide(),$(".login-yes").show();
    }else if(user.islogin==-1){//别的地方登陆
      $(".login-no").show(),$(".login-yes").hide();
    }else if(user.islogin==-2){//登陆超时
      $(".login-no").show(),$(".login-yes").hide();
    }else{//其他做未登陆处理
      $(".login-no").show(),$(".login-yes").hide();
  }
}else{
    $(".login-no").show(),$(".login-yes").hide();
}
}
//刷新验证码
function refreshValicode(obj) {
  $(obj).attr("src", $(obj).attr('src')+"?" + (new Date()).getTime());
}
//获取彩票
var getLottery = function(){
  var url = apirooturl + 'getLottery';
  $.ajax({
    url: url,
    type: "post",
    dataType: "json",
    async:false,
    success: function(data) {
      if (data.sign === true) {
        lotterylist = data.data;
        var menuhtml = '',panner = $("#lottery_menu_list");
        for(var o in lotterylist){
          menuhtml += '<li>';
          menuhtml += '<a href="'+host+'/lotterys/k3/'+lotterylist[o].name+'">';
          menuhtml += '<img src="'+host+'/resources/images/game/img1.png" width="26" height="26">';
          
          menuhtml += '<i>'+lotterylist[o].title+'</i><em>'+lotterylist[o].ftitle+'</em>';
          menuhtml += '</a></li>';
      };
      panner.html(menuhtml);
      if( typeof index_list_tag === 'function' )index_list_tag(lotterylist);
      if( typeof index_cplist === 'function' )index_cplist(lotterylist);
        //if( typeof lotter_list_nav === 'function' )lotter_list_nav(lotterylist);
        if( typeof getlotterylist === 'function' )getlotterylist(lotterylist);//会员中心
    } else {
        alt(data.message,-1);
    }
},
error: function(XMLHttpRequest, textStatus, errorThrown) {
  InfoTimeOutId = setTimeout(function() {
    getLottery();
}, 3000);
}
});
  /*$.post(url, {}, function(data) {
    if(data.sign==true){
      lotterylist = data.data;
      var menuhtml = '',panner = $("#lottery_menu_list");
      for(var o in lotterylist){
        menuhtml += '<li>';
        menuhtml += '<a href="'+WebConfigs["ROOT"]+'/Game.k3?code='+lotterylist[o].name+'">';
        menuhtml += '<img src="'+WebConfigs["ROOT"]+'/resources/images/game/img1.png" width="26" height="26">';
        
        menuhtml += '<i>'+lotterylist[o].title+'</i><em>'+lotterylist[o].ftitle+'</em>';
        menuhtml += '</a></li>';
      };
      panner.html(menuhtml);
      if( typeof index_list_tag === 'function' )index_list_tag(lotterylist);
      if( typeof index_cplist === 'function' )index_cplist(lotterylist);
      //if( typeof lotter_list_nav === 'function' )lotter_list_nav(lotterylist);
      if( typeof getlotterylist === 'function' )getlotterylist(lotterylist);//会员中心
    }else if(data.sign==false){
      alt(data.message,-1);
    }else{
      InfoTimeOutId = setTimeout(function() {
        getLottery();
      }, 3000);
    }
},'json');*/
}
//获取玩法
var getLotterywf = function(){
  var url = apirooturl + '.ApiInterface.checkislogin';
}
//获取彩种当前期号、时间
var getLotterytimes = function(){

}

//获取彩种标识，期号获取开奖号码
var getLotterycode = function(lotname,expect){
  var url = apirooturl + 'getLotterycode';
  $.post(url, {'lotname':lotname,'expect':expect}, function(data) {
    if(data.sign==true){
      info = data.data;
      return info;
  }else if(data.sign==false){
      alt(data.message,-1);
  }
},'json');
}


//会员账户
var userbalce = function(){

}

//会员报表
var userreport = function(){

}


//会员账变记录
var useraccountchange = function(){

}

//会员充值记录
var userrechargerecord = function(){

}

//会员提款记录
var userdrawingrecord = function(){

}

//会员转账记录
var usertransferrecord = function(){

}

//会员游戏记录
var usergamerecord = function(){

}

//会员追号记录
var usergamerecord = function(){

}

//验证会员是否可以提款
var userisallowdraw = function(){

}

//消息中心
var getmessages = function(){

}

//发送消息
var sendmessage = function(){

}


//代理概况
var agentsurvey = function(){

}

//代理普通开户
var agentgeneralaccount = function(){

}

//代理链接开户
var agentlinkaccount = function(){

}

//获取代理开户链接
var agentlinkaccount = function(){

}

//获取代理开户链接
var agentlinkaccount = function(){

}

//获取下线会员
var agentlineusers = function(){

}

//获取下线会员
var agentlineusers = function(){

}

//获取下线在线会员
var agentonlineusers = function(){

}

//获取下线会员游戏
var lineusersgamerecord = function(){

}

//下线会员账变记录
var lineuserstransferrecord = function(){

}

//团队存提款
var teamrechargedraw = function(){

}

//团队报表
var teamreport = function(){

}

function alt(content,icon){
  if(icon==1){
    art.dialog({icon: 'success',id: 'testID2',content: content,lock: true,cancelVal: '关闭',cancel: true});
}else if(icon==-1){
    art.dialog({icon: 'warning',id: 'testID2',content: content,lock: true,cancelVal: '关闭',cancel: true});
}else{
    art.dialog({id: 'testID2',content: content,lock: true,cancelVal: '关闭',cancel: true});
}
};
function formatIntVal(obj){
    obj.value=obj.value.replace(/\D+/g,'');
}
function formatPrice(val){
  val = Number(val);
  val = val.toFixed(1);
  return val;
};
function openMenuUrl(menuUrl, isCheck, newWin) {
  if (isCheck === true && !inituser) {
    alt('请登陆',-1);
    return;
}
if (isCheck === true && !user) {
    alt('请登陆',-1);
    setTimeout(function() {
      window.location.href = '/';
  }, 2000);
    return;
}

if (newWin === true) {
    window.open(menuUrl);
} else {
    window.location.href = menuUrl;
}
};
function getCursorPos(obj) {
  var caretPos = 0;
  if (document.selection) {
    // IE Support
    obj.focus();
    var sel = document.selection.createRange();
    sel.moveStart('character', -obj.value.length);
    caretPos = sel.text.length;
} else if (obj.selectionStart || obj.selectionStart == '0') {
    // Firefox support
    caretPos = obj.selectionStart;
}
return caretPos;
}
/*
 * 定位光标
 */
 function setCursorPos(obj, pos) {
  if (obj.setSelectionRange) {
    obj.focus();
    obj.setSelectionRange(pos, pos);
} else if (obj.createTextRange) {
    var range = obj.createTextRange();
    range.collapse(true);
    // range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
}
}

/*
 * 替换后定位光标在原处,可以这样调用onkeyup=replaceAndSetPos(this,event,/[^\d]/g,'');
 */
 function replaceAndSetPos(obj, event, pattern, text) {
  var e = event ? event : (window.event ? window.event : null);
  var currKey = 0;
  currKey = e.keyCode || e.which || e.charCode;
  if (event.altKey || event.ctrlKey || currKey == 16 || currKey == 17 || currKey == 18 || (event.shiftKey && currKey == 36)) {
    return;
}

  var pos = getCursorPos(obj); // 保存原始光标位置
  var temp = obj.value; // 保存原始值
  obj.value = temp.replace(pattern, text); // 替换掉非法值
  pos = pos - (temp.length - obj.value.length); //当前光标位置

  setCursorPos(obj, pos); //设置光标
}
// 日期计算
function dateDiff(date1, date2) {
    var type1 = typeof date1, type2 = typeof date2;
    if (type1 == 'string')
        date1 = stringToTime(date1);
    else if (date1.getTime)
        date1 = date1.getTime();
    if (type2 == 'string')
        date2 = stringToTime(date2);
    else if (date2.getTime)
        date2 = date2.getTime();
    //alert((date1 - date2) / (1000*60*60));
    var diff = (date2 - date1) / (1000 * 60 * 60 * 24); //结果是小时


    return eval(diff);
}

//字符串转成Time(dateDiff)所需方法
function stringToTime(string) {
    var f = string.split(' ', 2);
    var d = (f[0] ? f[0] : '').split('-', 3);
    var t = (f[1] ? f[1] : '').split(':', 3);
    return (new Date(
        parseInt(d[0], 10) || null,
        (parseInt(d[1], 10) || 1) - 1,
        parseInt(d[2], 10) || null,
        parseInt(t[0], 10) || null,
        parseInt(t[1], 10) || null,
        parseInt(t[2], 10) || null
        )).getTime();
}
function getQueryString(name) {
    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return null;
}
//获取彩票
var getLottery = function(){
  var url = apirooturl + 'getLottery';
  $.ajax({
    url: url,
    type: "post",
    dataType: "json",
    async:false,
    success: function(data) {
      if (data.sign === true) {
        lotterylist = data.data;
        var menuhtml = '',panner = $("#lottery_menu_list");
        for(var o in lotterylist){
          menuhtml += '<li>';
          menuhtml += '<a href="'+host+'/Game.k3?code='+lotterylist[o].name+'">';
          menuhtml += '<img src="'+host+'/resources/images/game/img1.png" width="26" height="26">';
          
          menuhtml += '<i>'+lotterylist[o].title+'</i><em>'+lotterylist[o].ftitle+'</em>';
          menuhtml += '</a></li>';
      };
      panner.html(menuhtml);
      if( typeof index_list_tag === 'function' )index_list_tag(lotterylist);
      if( typeof index_cplist === 'function' )index_cplist(lotterylist);
        if( typeof getlotterylist === 'function' )getlotterylist(lotterylist);//会员中心
    } else {
        alt(data.message,-1);
    }
},
error: function(XMLHttpRequest, textStatus, errorThrown) {
  InfoTimeOutId = setTimeout(function() {
    getLottery();
}, 3000);
}
});

}
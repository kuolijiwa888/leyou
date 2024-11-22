/*
  ___   _____ _____ _                 _ 
 / _ \ |____ /  __ \ |               | |
/ /_\ \    / / /  \/ | ___  _   _  __| |
|  _  |    \ \ |   | |/ _ \| | | |/ _` |
| | | |.___/ / \__/\ | (_) | |_| | (_| |
\_| |_/\____/ \____/_|\___/ \__,_|\__,_|--爱尚互联 30041321-小爱2020-12-10

*/
//变量参数
var currNumber = [];
var zhushus = [];
var rates = k3lotteryrates.rates;
var minMoney = 1;
var maxbeishu = 10000;
var lastMoney = 0.00;
var AllZhushu = 0;
var AllMoney = 0;
var inputVal = '';
$(function(){
  getUserBetsListToday(lotteryname);
  //玩法切换TAB
  $(document).on("click", ".play_select_tit li", function() {
    $(this).addClass('curr').siblings('li').removeClass('curr');
    lottery_code = $(this).attr('lottery_code');
    $(".bet-num-box > div."+lottery_code).show().siblings('div').hide();
  });
  //玩法切换删除所有ball_number下所有curr
  $(document).on("click", ".play_select_tit li", function() {
    $(".ball_number").removeClass('curr');
  });
  //判断倍数选择为小于等于1添加noReduce
  if($('.selectMultipInput').val() <= 1){
    $('.reduce').addClass('noReduce');
  }
  //倍数减
  $('.reduce').on('click',function (){
    addAndSubtract('-');
    countMoney();
  })
  //倍数加
  $('.selectMultiple .add').on('click',function (){
    addAndSubtract('+');
    countMoney();
  })
  //倍数输入框
  $('.selectMultipInput').on('change',function (){
    addAndSubtract();
    countMoney();
  })
  //人民币单位换算
  $('.el-select-dropdown__item').click(function(){
      countMoney();
      var type = $(this).attr('value');
      $('#selectMultipleCon').attr('types',type);
      var text = $(this).text();
      $('#selectMultipleCon').val(text);
  })
  //倍数加减fn
  function addAndSubtract(string){
    inputVal = isNaN(parseInt($('.selectMultipInput').val()))?1:parseInt($('.selectMultipInput').val());
    maxbeishu = 100000;
    if(inputVal <= 1){
      $('.selectMultipInput').val(1);
      $('.reduce').addClass('noReduce');
    }
    if(inputVal > maxbeishu){
      $('.selectMultipInput').val(maxbeishu);
      $('.reduce').removeClass('noReduce');
      $('.selectMultiple .add').addClass('noReduce');
      return;
    }
    if('+' == string){
      inputVal++;
      if(inputVal >= maxbeishu){
        $('.selectMultipInput').val(maxbeishu);
        $('.selectMultiple .add').addClass('noReduce');
        return;
      }
      $('.selectMultiple .add').removeClass('noReduce');
      $('.selectMultipInput').val(inputVal);
    }else if('-' == string){
      inputVal--;
      if(inputVal <= 1){
        $('.selectMultipInput').val(1);
        $('.reduce').addClass('noReduce');
        return;
      }
      $('.reduce').removeClass('noReduce');
      $('.selectMultipInput').val(inputVal);
    }   
    if(inputVal > 1 && inputVal < maxbeishu){
      $('.reduce').removeClass('noReduce');
    }
    if(inputVal < maxbeishu){
      $('.selectMultiple .add').removeClass('noReduce');
    }
  }

});
  //玩法点击清除号码Class
  $(document).on("click", ".play_select_tit li", function() {
    $(".selectNumber").removeClass('curr');
  });
  //获取选中的数
  function currList() {
    var currArr = [];
    $('.g_Number_Section').each(function (i){
      var acArr = [];
      $(this).find('.curr').each(function (i){
        acArr.push($(this).attr('ball-number'));
      })
      currArr.push(acArr);
    })
    return currArr;
  }
  //获取注数
  function countFun(){
    switch(lottery_code){
      case 'xy28_tm': //特码
      zhushus.length = currNumber[0].length;
      break;
      case 'xy28_tmbs': //特码包三
      zhushus.length = combine(currNumber[1],3).length;
      break;
      case 'xy28_bs': //波色
      zhushus.length = currNumber[2].length;
      break;
      case 'xy28_hunhe': //混合
      zhushus.length = currNumber[3].length;
      break;
    }
  }
  //计算选号金额
  function countMoney() {
    var currZhushu = parseInt(zhushus.length);
    var currTimes = parseInt($('.selectMultipInput').val());
    var currSlect = parseFloat($('#selectMultipleCon').attr('types'));
    var toTal = currZhushu * minMoney * currTimes *  currSlect;
    lastMoney = toTal.toFixed(3);
    $('.zhushu').text(currZhushu);
    $('.selectMultipleOldMoney').text(lastMoney);
  }
  //组合算法
  function combine(arr, num) {
    var r = [];
    (function f(t, a, n) {
      if (n == 0) return r.push(t);
      for (var i = 0, l = a.length; i <= l - n; i++) {
        f(t.concat(a[i]), a.slice(i + 1), n - 1);
      }
    })([], arr, num);
    return r;
  }
  function setytotal_money(){
    var ytotal_money = 0;
    var y_zhushu = 0;
    var ytotal_money_s = 0;
    var this_y_zhushu = 0;
    var eachMoneys = 0;
    $('.orderprice').each(function (i) {
      ytotal_money = isNaN(parseInt($(this).val()))?0:parseInt($(this).val());
      y_zhushu += isNaN(parseInt($('.ys_zhushu em').eq(i).text()))?0:parseInt($('.ys_zhushu em').eq(i).text());
      this_y_zhushu = isNaN(parseInt($('.ys_zhushu em').eq(i).text()))?0:parseInt($('.ys_zhushu em').eq(i).text());
      ytotal_money_s +=  ytotal_money * this_y_zhushu;
    })
    if(isNaN(ytotal_money)){
      ytotal_money = 0;
    }
    $('#f_gameOrder_amount').text(ytotal_money_s);
    $('#f_gameOrder_lotterys_num').text(y_zhushu);
  }
  //特码
  $(document).on("click", ".xy28_tm .selectNumber", function() {
    xy28_tm($(this));
  });
  var xy28_tm = function(obj){
    var playid = obj.attr('playid');
    obj.toggleClass('curr');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_tm_addbtn('"+playid+"')");
  };
  var xy28_tm_addbtn = function(playid){
    $(".xy28_tm .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_tm .curr").removeClass('curr');
  }
  //特码包三
  $(document).on("click", ".xy28_tmbs .selectNumber", function() {
    xy28_tmbs($(this));
  });
  var xy28_tmbs=function(obj){
    var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_tmbs_addbtn('"+playid+"')");
  };
  var xy28_tmbs_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('ball-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){

        addtotouzhu(playid,numberarray.join(","),combine(currNumber[1],3).length,1);

    }else{
      Dialog.error('温馨提示','选择的投注号码不完整');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
    setytotal_money();
  };

  //波色
  $(document).on("click", ".xy28_bs .selectNumber", function() {
    xy28_bs($(this));
  });
  var xy28_bs = function(obj){
    var playid = obj.attr('playid');
    obj.toggleClass('curr');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_bs_addbtn('"+playid+"')");
  };
  var xy28_bs_addbtn = function(playid){
    $(".xy28_bs .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_bs .curr").removeClass('curr');
  }
  //混合
  $(document).on("click", ".xy28_hunhe .selectNumber", function() {
    xy28_hunhe($(this));
  });
  var xy28_hunhe = function(obj){
    var playid = obj.attr('playid');
    obj.toggleClass('curr');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_hunhe_addbtn('"+playid+"')");
  };
  var xy28_hunhe_addbtn = function(playid){
    $(".xy28_hunhe .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_hunhe .curr").removeClass('curr');
  }
  //追加至投注列表
  var orderList=new Array();
  var addtotouzhu = function(_playid,number,zhushu,isshow){


    var times = $('.selectMultipInput').val();
    var selectRmb = $('#selectMultipleCon').attr('types');
    var selectRmbStr = $('#selectMultipleCon').val();

    var rate = rates[_playid];
    console.log(rate);
    if(parseInt(rate.minjj)<1)rate.minjj = 1;
    if(parseInt(rate.maxprize)<1)rate.maxprize = 30000;
    var trano= generateMixed(20);
    var tab  = $('.xiad-left dl');
    var orderDetail = rate.playid +'###'+ number;
    var $Detailnode = $(".xiad-left dl dd[orderDetail='"+orderDetail+"']");
    var numberremark='';

    if(isshow==1 || isshow==true){
      numberremark = '['+number+']';
    }

    if($Detailnode.length>0){
      var price = parseInt($Detailnode.find('input.orderprice').val())+(parseInt(times) * parseInt(selectRmbStr));
      var okmoney = accMul(price,rate.rate);
      $Detailnode.find('input.orderprice').val(price).focus();
      $Detailnode.find('.order_money').text(okmoney.toFixed(3));
      var timess = parseInt($Detailnode.find('.yBettingTimess').text())+parseInt(times);
      $Detailnode.find('.yBettingTimess').text(timess);
      $Detailnode.find('.rmb').text(selectRmbStr);
      currNumber = [];
      zhushus = [];
      $('.zhushu').text('0');
      $('.selectMultipleOldMoney').text('0.00');

    //alt('存在相同投注号码，已经为您翻倍',1);
    trano= $Detailnode.attr('id');
    if(orderList.length>=1)for(var o in orderList) {
      if(orderList[o]['trano']==trano){
        orderList[o]['price'] = price;
      }
    }
    return false;
  }else{
    var array = { 
      'trano':trano,
      'playtitle':rate.title,
      'playid':rate.playid,
      'number':number,
      'zhushu':zhushu?parseInt(zhushu):1,
      'price':(parseInt(zhushu) * parseInt(times) * parseInt(selectRmbStr)),
      'minxf':rate.minxf,
      'totalzs':rate.totalzs,
      'maxjj':rate.maxjj,
      'minjj':rate.minjj,
      'maxzs':rate.maxzs,
      'rate':rate.rate,
      'jine': parseInt(times) * parseInt(selectRmbStr)
    }; 
    orderList.unshift(array);
  }
  console.log(orderList);
  var $okamount = accMul(rate.minxf,rate.rate);
  var y_zhushus = zhushu?parseInt(zhushu):1;
  console.log($okamount);
  var html = '';
  html += '<dd id="'+trano+'" playid="'+rate.playid+'" orderDetail="' + rate.playid +'###'+ number + '">';
  html += '<div class="numberBox yBettingDiv"><span class="number"><div class="yBettingType" title="投注号码:'+number+'">['+rate.title+']</div> <em>'+number+'</em></span></div>';
  html += '<div class="yBettingZhushu yBettingDiv ys_zhushu"><em>'+y_zhushus+'</em>注</div>';
  html += '<div class="yBettingTimes yBettingDiv"><em class="yBettingTimess">'+times+'</em>倍</div>';
  html += '<div class="rmb yBettingDiv">'+selectRmbStr+'</div>';
  html += '<div class="maxMoney yBettingDiv"style="width:120px;"><em class="order_money">'+$okamount.toFixed(3)+'元</em></div>';
  html += '<div class="sc" style="display: inline-block;width: 97px;text-align: center;"><a href="javascript:delOrder(\''+trano+'\')"><i class="fa fa-times" style="color: #777777;"></i></a></div>';
  html += '<input style="display: none;" class="orderprice" value="'+parseInt(times) * parseInt(selectRmbStr)+'" size="6" style="color:black;" onblur="changeorderprice(this.value,\''+trano+'\');" onafterpaste="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" onkeyup="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" maxlength="6">';
  html += '<div id="betting_money" style="display: none;">'+parseInt(times) * parseInt(selectRmbStr)+'</div>';


  html += '<input class="min-xf" value="'+rate.minjj+'" type="hidden">';
  html += '<input class="max-maxprize" value="'+rate.maxprize+'" type="hidden">';
  html += '</dd>';
  tab.prepend(html);
  $('.none-user').hide();
  currNumber = [];
  zhushus = [];
  $('.zhushu').text('0');
  $('.selectMultipleOldMoney').text('0.00');

}


function changebetokmoney(price,rate,id){
  var $Detailnode = $(".xiad-left dl dd#"+id);
  var okmoney = accMul(price,rate);
  $Detailnode.find('.order_money').text(okmoney.toFixed(3));
}
function accMul(arg1,arg2)
{
  var m=0,s1=arg1.toString(),s2=arg2.toString();
  try{m+=s1.split(".")[1].length}catch(e){}
  try{m+=s2.split(".")[1].length}catch(e){}
  return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
}

var changeorderprice=function(price,id){
  if(orderList.length>=1)for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    if (cur_order.trano == id) {
      orderList[i]['price'] = price;
    }
  }
  console.log(orderList);
};


var delOrder=function(id){
  var playid = $("dd#"+id).attr('playid');
  if(orderList.length>=1)for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    if (cur_order.trano == id) {
      orderList.splice(i, 1);
    }
  }
  $("dd#"+id).remove();
  if(orderList.length<=0){
    $('.yBettingLists').html('<div class="none-user" style="text-align:center;"><div class="order-image"></div><p style="font-size: 14px;color: #ababab;">暂无数据</p></div>');
  }
  if(playid.substring(0,4)=='k3hz')$(".bet-num-box .ball_number[playid='"+playid+"']").removeClass('curr');
  setytotal_money();
}

var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
function generateMixed(n) {
 var res = "";
 for(var i = 0; i < n ; i ++) {
   var id = Math.ceil(Math.random()*35);
   res += chars[id];
 }
 return res;
}
$(document).on("click", "#orderlist_clear", function() {
  orderList=[];
  $('#f_gameOrder_lotterys_num').text('0');
  $('#f_gameOrder_amount').text('0');
  $(".xiad-left dl").html('');
  $(".ball_number").removeClass('curr');
  $('.zhushu').text('0');
  $('.selectMultipleOldMoney').text('0.00');
  $('.yBettingLists').html('<div class="none-user" style="text-align:center;"><div class="order-image"></div><p style="font-size: 14px;color: #ababab;">暂无数据</p></div>');
});

/*投注订单提交*/
$(document).on("click", "#f_submit_order", function() {
  if(orderList.length<1){
    Dialog.error('温馨提示','请选择投注号码');
    return false;
  }
  $('#daigou').show();

  
  var touzhu = '<div class="dialog-footer" id="daigoufooter">'+
  '<button type="button" class="el-button el-button--default"><span>取 消</span></button>'+
  '<button type="button" class="el-button el-button--primary"><span>立即投注</span></button>'+
  '</div>';

  $('#daigoufoot').append(touzhu);
  var Orderdetaillist = '';
  var Orderdetailtotalprice    = 0;
  for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    var rate = rates[cur_order.playid];
    var oprice = Number(cur_order.price);
    if(Number(cur_order.zhushu)<1 || Number(cur_order.price)<1){
      Dialog.error('温馨提示',"投注列表金额设置不完整！");
      return false;
    }
    Orderdetailtotalprice += oprice;
    Orderdetaillist +="<tr class='el-table__row'><td rowspan='1' colspan='1' class='el-table_3_column_21'><div class='cell'><span>"+rate.title+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_22'><div class='cell'><span>"+cur_order.number+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_23'><div class='cell'>"+cur_order.zhushu+"注</div></td><td rowspan='1' colspan='1' class='el-table_3_column_24'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);'>"+oprice.toFixed(3)+"</span></div></td></tr>";
  }
  $("#Orderdetaillist").html(Orderdetaillist);
  $("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
  $('.dialog-footer .el-button--default').click(function () {
        $('.el-dialog').removeClass("ascnshow");
        $('.el-dialog').addClass("ascnhide");
        window.setTimeout(function () {
            $('.el-dialog__wrapper').hide();
            $('.el-dialog').removeClass("ascnhide");
            $('.el-dialog').addClass("ascnshow");
            $('.dialog-footer').remove();
        }, 300)
    })
    $('.dialog-footer .el-button--primary').click(function () {
        $('.el-dialog').removeClass("ascnshow");
        $('.el-dialog').addClass("ascnhide");
        window.setTimeout(function () {
            $('.el-dialog__wrapper').hide();
            $('.el-dialog').removeClass("ascnhide");
            $('.el-dialog').addClass("ascnshow");
            $('.dialog-footer').remove();
        }, 300)
    if(!user || user.islogin!=1){
      Dialog.error('温馨提示','请先登陆');
    }

    $.ajax({
      type : "POST",
      url  : apirooturl + 'cpbuy',
      data : {
        "orderList":orderList,
        'expect':lottery.currFullExpect,
        'lotteryname':lotteryname
      },
      success : function (json) {
        if(json.sign){
          $("#orderlist_clear").click();
          getUserBetsListToday(lotteryname);
          Dialog.success('温馨提示','投注成功');
        }else{
          Dialog.error('温馨提示',json.message);
        }
      }
    })
  })
});
$(document).on("click", "#f_submit_order_hemai", function() {
  
  if(orderList.length<1){
    Dialog.error('温馨提示','请选择投注号码');
    return false;
  }

  if(orderList.length>1){
    Dialog.error('温馨提示','发起合买只能投注一种玩法');
    return false;
  }

  $('#hemai_touzhu').removeClass("ascnshow");
  $('#hemai_touzhu').addClass("ascnhide");
  window.setTimeout(function () {
      $('#hemai_touzhu').hide();
      $('#hemai_touzhu').removeClass("ascnhide");
      $('#hemai_touzhu').addClass("ascnshow");
      $('#hemai').show();
  }, 300)

  
  var touzhu = '<div class="dialog-footer hemaifooter" id="hemaifooter">'+
  '<button type="button" class="el-button el-button--default"><span>取 消</span></button>'+
  '<button type="button" class="el-button el-button--primary"><span>立即投注</span></button>'+
  '</div>';

  $('#hemaifoot').append(touzhu);
  
  
  var Orderdetaillist = '';
  var Orderdetailtotalprice    = 0;
  
  
  var paymeneyhemai=0;  
  var fenshuhemai=Number($("#fsInput").val());
  var rengouhemai=Number($("#rgInput").val());
  var baodihemai=Number($("#bdInput").val());
  var isbaodihemai=Number($("#isbaodi").is(":checked"));
  var isbaomi=Number($("input[name='gk']:checked").val());
  
  
  
  
  for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    var rate = rates[cur_order.playid];
    var oprice = Number(cur_order.zhushu) * Number(cur_order.price);
    if(Number(cur_order.zhushu)<1 || Number(cur_order.price)<1){
      Dialog.error('温馨提示',"投注列表金额设置不完整！");
      return false;
    }
    Orderdetailtotalprice += oprice;
    Orderdetaillist +="<tr class='el-table__row'><td rowspan='1' colspan='1' class='el-table_3_column_21'><div class='cell'><span>"+rate.title+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_22'><div class='cell'><span>"+cur_order.number+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_23'><div class='cell'>"+cur_order.zhushu+"注</div></td><td rowspan='1' colspan='1' class='el-table_3_column_24'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);'>"+oprice.toFixed(3)+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_25'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);' id='fenshuhemai'></span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_26'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);' id='rengouhemai'></span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_27'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);'id='isbaodihemai'></span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_28'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);'id='baodihemai'></span></div></td></tr>";
  }
  
  if (fenshuhemai<1){
    Dialog.error('温馨提示',"您要分成的份数必须大于等于1");
    $("#fsInput").focus();
    return false;
  }else if (Orderdetailtotalprice.toFixed(2)/fenshuhemai<1){
    Dialog.error('温馨提示',"每份金额必须大于等于1元！");
    $("#fsInput").focus();
    return false;
  }else if (rengouhemai < fenshuhemai *0.02 ){
    Dialog.error('温馨提示',"您要认购的份数至少应该为所分份数的2% ("+Math.ceil(fenshuhemai*0.02)+"份)！");
    $("#rgInput").focus();
    return false;
  }else if (rengouhemai-fenshuhemai>0){
    Dialog.error('温馨提示',"您要认购的份数不能大于所分的份数！");
    $("#rgInput").focus();
    return false;
  }else if (isbaodihemai && baodihemai < 1){
    Dialog.error('温馨提示',"您要保底的份数不能为空或不能为0！");
    $("#bdInput").focus();
    return false;
  }else if (isbaodihemai && baodihemai-fenshuhemai>0){
    Dialog.error('温馨提示',"您要保底的份数不能大于所分的份数！");
    $("#bdInput").focus();
    return false;
  }else if (isbaodihemai && baodihemai  < fenshuhemai * 0.02){
    Dialog.error('温馨提示',"保底金额至少为总金额的2% ("+Math.ceil(fenshuhemai*0.02)+"份)！");
    $("#bdInput").focus();
    return false;
  }else if (isbaodihemai&&(rengouhemai+baodihemai)>fenshuhemai){    
    Dialog.error('温馨提示',"您要认购的份数和保底的份数之和不能大于所分的份数！");
    $("#bdInput").focus();
    return false;
  }
  
  
  
  
  $("#Orderdetaillist_hemai").html(Orderdetaillist);
  $("#fenshuhemai").text(fenshuhemai);
  $("#rengouhemai").text(rengouhemai);
  $("#isbaodihemai").text(isbaodihemai?"是":"否");
  $("#baodihemai").text(isbaodihemai?baodihemai:0);
  
  if(!isbaodihemai)
    baodihemai=0;
  
  //计算付款总额(认购+保底)
  paymeneyhemai = ((rengouhemai*(Orderdetailtotalprice/fenshuhemai)) + (baodihemai*(Orderdetailtotalprice/fenshuhemai))).toFixed(2);
  $("#Orderdetailtotalprice_hemai").text(paymeneyhemai);
  $('.hemaifooter .el-button--default').click(function () {
    $('.el-dialog').removeClass("ascnshow");
    $('.el-dialog').addClass("ascnhide");
    window.setTimeout(function () {
      $('#hemai').hide();
      $('.el-dialog').removeClass("ascnhide");
      $('.el-dialog').addClass("ascnshow");
      $('.hemaifooter').remove();
    }, 300)
  })
  $('.hemaifooter .el-button--primary').click(function () {
    $('.el-dialog').removeClass("ascnshow");
    $('.el-dialog').addClass("ascnhide");
    window.setTimeout(function () {
      $('#hemai').hide();
      $('.el-dialog').removeClass("ascnhide");
      $('.el-dialog').addClass("ascnshow");
      $('.hemaifooter').remove();
    }, 300)
    if(!user){
      Dialog.error('温馨提示','请先登陆');
    }
    $.ajax({
      type : "POST",
      url  : apirooturl + 'cphemai',
      data : {
        "orderList":orderList,
        'expect':lottery.currFullExpect,
        'lotteryname':lotteryname,
        'isbaodi':isbaodihemai,//保底
        'isbaomi':isbaomi,//保密
        'rengouhemai':rengouhemai,//认购分数
        'fenshuhemai':fenshuhemai,//总份数     
        'baodihemai':baodihemai //保底分数               
      },
      success : function (json) {
        if(json.sign){
          $("#orderlist_clear").click();
          getUserBetsListToday(lotteryname);
          Dialog.success('温馨提示','发起合买成功');
        }else{
          Dialog.error('温馨提示',json.message);
        }
      }
    })
  })

});
//当天投注记录
function getUserBetsListToday(_lotteryname) {
  if(!user || user.islogin!=1){
    return false;
  }
  lotteryname = _lotteryname?_lotteryname:lotteryname;
  var tabs = $("#userBetsListToday");
  tabs.empty();
  var url = apirooturl + 'betslisttoday';
  var pagination = $.pagination({
    render: '.paging',
    pageSize: jqueryGridRows,
    pageLength: 7,
    ajaxType: 'post',
    hideGo: true,
    ajaxUrl: url,
    ajaxData: {
      "lotteryname": lotteryname,'jqueryGridPage': jqueryGridPage,'jqueryGridRows': jqueryGridRows
    },
    complete: function() {},
    success: function(data) {
      tabs.empty();
      $.each(data, function(index, val) {
        var html = '<tr id="'+val.trano+'" onclick="getBillInfo(\''+val.trano+'\');" style="cursor: pointer;">';
        html += '<td>' + val.trano + '</td>';
        html += '<td>' + val.expect + '</td>';
        html += '<td>' + val.type + '</td>';
        html += '<td>' + val.opencode + '</td>';
        html += '<td>' + val.playtitle + '</td>';
        html += '<td>' + val.mode + '</td>';
        html += '<td>' + val.amount + '</td>';
        html += '<td>' + (val.okamount ? val.okamount : 0) + '</td>';
        html += '<td>' + val.oddtime + '</td>';
        html += '<td>';
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
          tabs.append(html);
        });
    },
    pageError: function(response) {},
    emptyData: function() {}
  });
  pagination.init();
}



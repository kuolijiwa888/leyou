/*
  ___   _____ _____ _                 _ 
 / _ \ |____ /  __ \ |               | |
/ /_\ \    / / /  \/ | ___  _   _  __| |
|  _  |    \ \ |   | |/ _ \| | | |/ _` |
| | | |.___/ / \__/\ | (_) | |_| | (_| |
\_| |_/\____/ \____/_|\___/ \__,_|\__,_|--爱尚互联 30041321-小爱

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
  function tabGameInit(){
    var _thisType = $(this).attr('lottery_code');
    _thisType = 'xy28_tm';
    $('.lottery-number').find('span[way-data="tabDoc"]')
    .html('至少选择一个和值，竞猜开奖号码三位数字之和。');
  }
  tabGameInit();
  //玩法切换TAB
  $(document).on("click", ".play_select_tit li", function() {
    $(this).addClass('ssc-selected').siblings('li').removeClass('ssc-selected');
    lottery_code = $(this).attr('lottery_code');
    $(".g_Number_Section > div."+lottery_code).show().siblings('div').hide();
    var ytext = $(this).text();
    $('.play_wanfa string').text(ytext);
    $('body').removeClass('niubihh');
    $(".play_select_insert").removeClass("linearTop ");
    $(".play_select_insert").addClass("linearBottom");
    setTimeout(function(){
      $('.alert_bj').hide();
      $('.play_select_insert').hide();
      $(".play_select_insert").removeClass("linearBottom ");
      $(".play_select_insert").addClass("linearTop");
    },200);
    var _thisType = $(this).attr('lottery_code');
    switch(_thisType){
      case 'xy28_tm':
      $('.lottery-number').find('span[way-data="tabDoc"]')
      .html('至少选择一个和值，竞猜开奖号码三位数字之和。');
      break;
      case 'xy28_tmbs':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('可选取三个和值,当中任何一个与开奖号码三位数字之和相同即中奖。赔率'+rates[_thisType].rate+'倍');
      break;
      case 'xy28_bs':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('所选波色与开奖和值结果相同即中奖，结果为黑波，视为不中奖。');
      break;
      case 'xy28_hunhe':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码三个数字和符合所选取注数规则即中奖。');
      break;
    }
  });
  //玩法切换删除所有selectNumber下所有curr
  $(document).on("click", ".play_select_tit li", function() {
    $(".selectNumber").removeClass('ssc-curr-z');
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
  $('.selectMultipleCon').on('change',function (){
    countMoney();
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
  //投注区删除单个
  $('.yBettingLists').on('click','.sc',function (){
    var len = $('.yBettingLists').find('.yBettingList');
    var _id = $(this).parent().attr('id');
    var indexs = 0;
    len.each(function (i){
      if(_id == orderList[i].trano){
        indexs = i;
      }
    });
    orderList.splice(indexs,1);
    $(this).parents('.yBettingList').remove();
    $('#lanIconNumbere').text($('.yBettingLists').find('.yBettingList').length)
    if($('.yBettingLists').find('.yBettingList').length <= 0){
      $('#lanIconNumbere').css('display','none');
      $('.kuaijie').css({"background":"#7b7b87"});
      $('.hemai').css({"background":"#7b7b87"});
    }
  })

//清空单号
$('#orderlist_clear').on('click',function (){
  $('.yBettingLists').html('');
  $('.kuaijie').css({"background":"#7b7b87"});
  $('.hemai').css({"background":"#7b7b87"});
  $('#lanIconNumbere').text('0').css('display','none');
  orderList = [];
})


});
//购彩蓝
function addNumberLanAn(){
  $('.lanIconNumber').show();
  $('#lanIconNumberss').animate({'left':'303','top': '-50px'},500,function (){
    $(this).animate({'top': '10px','opacity': '0'},500,function (){
      $(this).css('display','none');
      $('.kuaijie').css({"background":"#434354"});
      $('.hemai').css({"background":"#434354"});
      $(this).css({'left':'28px','top': '10px','opacity': '100'})
    })
  })
  $('#lanIconNumbere').text(parseInt($('#lanIconNumbere').text()) + 1);
}
  //获取选中的数
  function currList() {
    var currArr = [];
    $('.ssc-ct-content').each(function (i){
      var acArr = [];
      $(this).find('.ssc-curr-z').each(function (i){
        acArr.push($(this).attr('data-number'));
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
    var currSlect = parseFloat($('.selectMultipleCon').val());
    var toTal = currZhushu * minMoney * currTimes *  currSlect;
    lastMoney = toTal.toFixed(3);
    $('.zhushu').text(currZhushu);
    $('.selectMultipleOldMoney').text(lastMoney);
    $('.hemaijinerMoney').text(lastMoney);
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
    obj.toggleClass('ssc-curr-z');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_tm_addbtn('"+playid+"')");
  };
  var xy28_tm_addbtn = function(playid){
    $(".xy28_tm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_tm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //特码包三
  $(document).on("click", ".xy28_tmbs .selectNumber", function() {
    xy28_tmbs($(this));
  });
  var xy28_tmbs=function(obj){
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_tmbs_addbtn('"+playid+"')");
  };
  var xy28_tmbs_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[1],3).length,1);
    }else{
      hsycmserror('选择的投注号码不完整',-1);
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
    setytotal_money();
  };

  //波色
  $(document).on("click", ".xy28_bs .selectNumber", function() {
    xy28_bs($(this));
  });
  var xy28_bs = function(obj){
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_bs_addbtn('"+playid+"')");
  };
  var xy28_bs_addbtn = function(playid){
    $(".xy28_bs .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_bs .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //混合
  $(document).on("click", ".xy28_hunhe .selectNumber", function() {
    xy28_hunhe($(this));
  });
  var xy28_hunhe = function(obj){
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');

    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "xy28_hunhe_addbtn('"+playid+"')");
  };
  var xy28_hunhe_addbtn = function(playid){
    $(".xy28_hunhe .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".xy28_hunhe .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //追加至投注列表
  var orderList=new Array();
  var addtotouzhu = function(_playid,number,zhushu,isshow){


    var times = $('.selectMultipInput').val();
    var selectRmbStr = $('.selectMultipleCon').find('option:selected').text();
    var selectRmb = $('.selectMultipleCon').val();

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
      var price = parseInt($Detailnode.find('input.orderprice').val())+1;
      var okmoney = accMul(price,rate.rate);
      $Detailnode.find('input.orderprice').val(price).focus();
      $Detailnode.find('.order_money').text(okmoney.toFixed(3));
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
  addNumberLanAn();
  console.log(orderList);
  var $okamount = accMul(rate.minxf,rate.rate);
  var y_zhushus = zhushu?parseInt(zhushu):1;
  console.log($okamount);
  var html = '<div class="yBettingList gamezhui" id="'+trano+'">'+
  '<div class="gamezhui-1">'+
  '<span><i style="color: #ae995c;"class="iconfont">&#xe606; </i>'+rate.title+'</span><a class="sc"><i class="iconfont">&#xe630;</i></a>'+
  '</div>'+
  '<div class="gamezhui-2">'+
  '<span class="gamezhui-h">'+number+'</span>'+
  '<span class="gamezhui-m">'+zhushu+'注,'+times+'倍,'+selectRmbStr+'='+(parseInt(zhushu) * parseInt(times) * parseInt(selectRmbStr))+'元</span>'+
  '</div>'+
  '<div id="betting_money" style="display: none;">'+lastMoney+'</div>';
  // '<input style="display: none;" class="orderprice" value="'+parseInt(times) * parseInt(selectRmbStr)+'" size="6" style="color:black;" onblur="changeorderprice(this.value,\''+trano+'\');" onafterpaste="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" onkeyup="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" maxlength="6">'+
  // '<div id="betting_money" style="display: none;">'+parseInt(times) * parseInt(selectRmbStr)+'</div>';
  $('.yBettingLists').append(html);
  currNumber = [];
  zhushus = [];
  $('.zhushu').text('0');
  $('.selectMultipleOldMoney').text('0.00');

}

$(document).on("click", ".kuaijie", function() {
  $('.addtobetbtn').click();
  if(orderList.length<1){
    hsycmserror('请选择投注号码',-1);
    return false;
  }
  var touzhu = '<div class="hsycms-model-btn confirm">'+
  '<button type="button" class="cancel">取消</button>'+
  '<button type="button" class="ok">确定</button>'+
  '</div>';
  $('#confirm').append(touzhu);
  $('#mask-confirm').show();
  $('#confirm').show();

  
  $('.confirm .cancel').click(function () {
    $('#mask-confirm').hide();
    $('#confirm').hide();
    $('.confirm').remove();
    $('.hsycms-model-text').html('投注失败');
    $('#orderlist_clear').click();
    $('#mask-error').show();
    $('#error').show();
  })
  
  $('.confirm .ok').click(function () {
    $('#mask-confirm').hide();
    $('#confirm').hide();
    $('.confirm').remove();
    if(!user){
      hsycmserror('请先登陆',-1);
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
          $('.kuaijie').css({"background":"#7b7b87"});
          $('.hemai').css({"background":"#7b7b87"});
          hsycms('投注成功',1);
        }else{
          hsycmserror(json.message,-1);
        }
      }
    })
  })
  var Orderdetailtotalprice    = 0;
  for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    var rate = rates[cur_order.playid];
    var oprice = Number(cur_order.yjf);
    var cur_number = cur_order.number;
    Orderdetailtotalprice += oprice;
  }
  $("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
})

  //发起合买
  $(document).on("click", ".hemai", function() {
    $('.addtobetbtn').click();
    if(orderList.length<1){
      hsycmserror('请选择投注号码',-1);
      return false;
    }
    $('.faqihemai').show();
    $('.alert_bj').show();
    $('body').addClass('niubihh');
    SetHM();
  });
  //取消合买
  $(document).on("click", ".noe", function() {
    $(".faqihemai").removeClass("linearTop ");
    $(".faqihemai").addClass("linearBottom");
    setTimeout(function(){
      $('body').removeClass('niubihh');
      $('.alert_bj').hide();
      $('.faqihemai').hide();
      $('#orderlist_clear').click();
      $(".faqihemai").removeClass("linearBottom ");
      $(".faqihemai").addClass("linearTop");
    },200);
  })
  
  //合买确认投注
  $(document).on("click", "#buy_hemai", function() {
    if(orderList.length<1){
      hsycmserror('请选择投注号码');
      return false;
    }

    if(orderList.length>1){
      hsycmserror('发起合买只能投注一种玩法');
      return false;
    } 
    
    var Orderdetailtotalprice    = 0;
    
    var paymeneyhemai=0;  
    var fenshuhemai=Number($("#fsInput").val());
    var rengouhemai=Number($("#rgInput").val());
    var baodihemai=Number($("#bdInput").val());
    var isbaodihemai=Number($("#isbaodi").hasClass('active'));
    var isbaomi=Number($('.leixing .active').attr('num'));
    
    
    for (var i = 0; i < orderList.length; i++) {
      var cur_order = orderList[i];
      var rate = rates[cur_order.playid];
      var oprice = Number(cur_order.yjf);
      var cur_number = cur_order.number;
      Orderdetailtotalprice += oprice;
    }
    
    if (fenshuhemai<1){
      hsycmserror("您要分成的份数必须大于等于1");
      $("#fsInput").focus();
      return false;
    }else if (Orderdetailtotalprice.toFixed(2)/fenshuhemai<1){
      hsycmserror("每份金额必须大于等于1元！");
      $("#fsInput").focus();
      return false;
    }else if (rengouhemai < fenshuhemai *0.02 ){
      hsycmserror("您要认购的份数至少应该为所分份数的2% ("+Math.ceil(fenshuhemai*0.02)+"份)！");
      $("#rgInput").focus();
      return false;
    }else if (rengouhemai-fenshuhemai>0){
      hsycmserror("您要认购的份数不能大于所分的份数！");
      $("#rgInput").focus();
      return false;
    }else if (isbaodihemai && baodihemai < 1){
      hsycmserror("您要保底的份数不能为空或不能为0！");
      $("#bdInput").focus();
      return false;
    }else if (isbaodihemai && baodihemai-fenshuhemai>0){
      hsycmserror("您要保底的份数不能大于所分的份数！");
      $("#bdInput").focus();
      return false;
    }else if (isbaodihemai && baodihemai  < fenshuhemai * 0.02){
      hsycmserror("保底金额至少为总金额的2% ("+Math.ceil(fenshuhemai*0.02)+"份)！");
      $("#bdInput").focus();
      return false;
    }else if (isbaodihemai&&(rengouhemai+baodihemai)>fenshuhemai){    
      hsycmserror("您要认购的份数和保底的份数之和不能大于所分的份数！");
      $("#bdInput").focus();
      return false;
    }
    var touzhu = '<div class="hsycms-model-btn confirm_hemai">'+
    '<button type="button" class="cancel">取消</button>'+
    '<button type="button" class="ok">确定</button>'+
    '</div>';
    $('#hemai_xiangxi').append(touzhu);
    $('#mask_hemai').show();
    $('#hemai_xiangxi').show();
    
    $('.confirm_hemai .cancel').click(function () {
      $('#mask_hemai').hide();
      $('#hemai_xiangxi').hide();
      $('.confirm_hemai').remove();
      $('.hsycms-model-text').html('投注失败');
      $('#mask-error').show();
      $('#error').show();
      $('#orderlist_clear').click();
    })
    
    $("#fenshuhemai").text(fenshuhemai);
    $("#rengouhemai").text(rengouhemai);
    $("#isbaodihemai").text(isbaodihemai?"是":"否");
    $("#baodihemai").text(isbaodihemai?baodihemai:0);
    
    var data = {
      "orderList":orderList,
      'expect':lottery.currFullExpect,
      'lotteryname':lotteryname,
         'isbaodi':isbaodihemai,//保底
        'isbaomi':isbaomi,//保密
        'rengouhemai':rengouhemai,//认购分数
        'fenshuhemai':fenshuhemai,//总份数     
        'baodihemai':baodihemai //保底分数    
      }
      console.log(data);
      
      if(!isbaodihemai)
        baodihemai=0;
      
  //计算付款总额(认购+保底)
  paymeneyhemai=((rengouhemai*(Orderdetailtotalprice/fenshuhemai)) + (baodihemai*(Orderdetailtotalprice/fenshuhemai))).toFixed(2);  
  $("#Orderdetailtotalpricehemai").text(paymeneyhemai);
  $('.confirm_hemai .ok').click(function () {
    $('#mask_hemai').hide();
    $('#hemai_xiangxi').hide();
    $('.confirm_hemai').remove();
    if(!user){
      hsycmserror('请先登陆');
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
          $('.kuaijie').css({"background":"#7b7b87"});
          $('.hemai').css({"background":"#7b7b87"});
          hsycms('发起合买成功');
        }else{
          hsycmserror(json.message);
          
        }
      }
    })
  });
})


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
  $(".ball_number").removeClass('ssc-curr-z');
  $('.zhushu').text('0');
  $('.selectMultipleOldMoney').text('0.00');
});

//确认投注
$(document).on("click", "#f_submit_order", function() {
  if(orderList.length<1){
    hsycmserror('请选择投注号码',-1);
    return false;
  }
  var touzhu = '<div class="hsycms-model-btn confirm">'+
  '<button type="button" class="cancel">取消</button>'+
  '<button type="button" class="ok">确定</button>'+
  '</div>';
  $('#confirm').append(touzhu);
  $('#mask-confirm').show();
  $('#confirm').show();

  
  $('.confirm .cancel').click(function () {
    $('#mask-confirm').hide();
    $('#confirm').hide();
    $('.confirm').remove();
    $('.hsycms-model-text').html('投注失败');
    $('#mask-error').show();
    $('#error').show();
  })
  
  $('.confirm .ok').click(function () {
    $('#mask-confirm').hide();
    $('#confirm').hide();
    $('.confirm').remove();
    if(!user){
      hsycmserror('请先登陆',-1);
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
          $('.kuaijie').css({"background":"#7b7b87"});
          $('.hemai').css({"background":"#7b7b87"});
          hsycms('投注成功',1);
        }else{
          hsycmserror(json.message,-1);
        }
      }
    })
    
  })
  
  var Orderdetailtotalprice    = 0;
  for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    var rate = rates[cur_order.playid];
    var oprice = Number(cur_order.yjf);
    var cur_number = cur_order.number;
    Orderdetailtotalprice += oprice;
  }
  $("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
  console.log(orderList);
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
        var html = '<tr id="'+val.trano+'">';
        html += '<td> <a href="javascript:getBillInfo(\''+val.trano+'\')">' + val.trano + '</a></td>';
        html += '<td>' + val.expect + '</td>';
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



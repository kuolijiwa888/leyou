/*
  ___   _____ _____ _                 _ 
 / _ \ |____ /  __ \ |               | |
/ /_\ \    / / /  \/ | ___  _   _  __| |
|  _  |    \ \ |   | |/ _ \| | | |/ _` |
| | | |.___/ / \__/\ | (_) | |_| | (_| |
\_| |_/\____/ \____/_|\___/ \__,_|\__,_|--爱尚互联 30041321-小爱

*/
var lottery;
var ckTimer; // 摇奖计时器
var betting_sum = 0;
var ClockEnv = {
  num:3,
  numRange:'1-6'
};
var openCodeTimeOut = null;
var openexpect      = 0;//当前需要检测的开奖期号
var rates = null;      //赔率
var ratesArr = [];
var maxRates = 0;
var lotteryname = lotteryinfo.name;
var yzhushu; 
var ethdxZhushu;
//爱尚互联
var currNumber = [];
var zhushus = [];
var minMoney = 1;
var lastMoney = 0.00;


//计算选号金额
function countMoney() {
  var currZhushu = parseInt(zhushus.length);
  var currTimes = parseInt($('.selectMultipInput').val());
  var currSlect = parseFloat($('.selectMultipleCon').val());
  var toTal = currZhushu * minMoney * currTimes *  currSlect;
  lastMoney = toTal.toFixed(2);
  $('.zhushu').text(currZhushu);
  $('.selectMultipleOldMoney').text(lastMoney);
  $('.hemaijinerMoney').text(lastMoney);
  
}
function combines(arr, num) {
  var r = [];
  (function f(t, a, n) {
    if (n == 0) return r.push(t);
    for (var i = 0, l = a.length; i <= l - n; i++) {
      f(t.concat(a[i]), a.slice(i + 1), n - 1);
    }
  })([], arr, num);
  return r;
}
function countFun(){
    //二同号单选
    var numberarray1 = [];
    $(".k3ethdx ul:eq(0) .ball_number").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('ball-number');
        numberarray1.push(number);
      }
    });
    var numberarray2 = [];
    $(".k3ethdx ul:eq(1) .ball_number").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('ball-number');
        numberarray2.push(number);
      }
    });
    var allarr = DescartesAlgorithm(numberarray1, numberarray2);
    //console.log(allarr.length);
    var array  = [];
    for(var i=0;i<allarr.length;i++){
      var tonghao = allarr[i][0];
      var danhao = allarr[i][1];
      if(tonghao.indexOf(danhao)>=0){

      }else{
        array[i] = allarr[i][0]+''+allarr[i][1];
      }
    }
    array = filterArray(array);
    switch(lottery_code){
      case 'k3hzzx': //和值
      zhushus.length = currNumber[0].length;
      break;
      case 'k3sthtx': //三同号通选
      zhushus.length = currNumber[1].length;
      break;
      case 'k3sthdx': //三同号单选
      zhushus.length = currNumber[2].length;
      break;
      case 'k3sbthbz': //三不同号
      zhushus.length = combines(currNumber[3],3).length;
      break;
      case 'k3slhtx': //三连号通选
      zhushus.length = currNumber[4].length;
      break;
      case 'k3ethfx': //二同号复选
      zhushus.length = currNumber[5].length;
      break;
      case 'k3ethdx': //二同号单选
      zhushus.length = allarr.length;
      break;
      case 'k3ebthbz': //二不同号
      zhushus.length = combines(currNumber[8],2).length;
      break;
      case 'k3hhm': //红黑码
      zhushus.length = currNumber[9].length;
      break;
    }
  }

//获取每个位数选中的数
function currList() {
  var currArr = [];
  $('.ball_list_ul').each(function (i){
    var acArr = [];
    $(this).find('.curr').each(function (i){
      acArr.push($(this).attr('ball-number'));
    })
    currArr.push(acArr);
  })
  return currArr;
}



//和值
$(document).on("click", ".k3hzzx .ball_number", function() {
  k3hzzx($(this));
});
var k3hzzx=function(obj){
  if(rates==null){
    return false;
  }
  var playid = obj.attr('playid');
  obj.toggleClass('curr');
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3hzzx_addbtn('"+playid+"')");
};
var k3hzzx_addbtn = function(playid){
  $(".k3hzzx .ball_number.curr").each(function(){
    var obj = $(this);
    var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
    addtotouzhu(playid,number,1);
  });
  $(".k3hzzx .curr").removeClass('curr');
}

//三同号通选
$(document).on("click", ".k3sthtx .ball_number", function() {
  k3sthtx($(this));
});
var k3sthtx=function(obj){
  if(rates==null){
    return false;
  }
  var playid = obj.attr('playid');
  obj.toggleClass('curr');
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3sthtx_addbtn('"+playid+"')");
};
var k3sthtx_addbtn = function(playid){
  $(".k3sthtx .ball_number.curr").each(function(){
    var obj = $(this);
    var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
    addtotouzhu(playid,number,1);
  });
  $(".k3sthtx .curr").removeClass('curr');
}

//三同号单选/二同号复选
$(document).on("click", ".k3sthdx .ball_number,.k3ethfx .ball_number", function() {
  k3sthdx_1_2_3($(this));
});
var k3sthdx_1_2_3=function(obj){
  if(rates==null){
    return false;
  }
  var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
  obj.toggleClass("curr");
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3sthdx_1_2_3_addbtn('"+playid+"')");
};
var k3sthdx_1_2_3_addbtn=function(playid){
  var numberarray = [];
  $("div."+playid+ " .ball_number").each(function(){
    var $node = $(this);
    if($node.hasClass("curr")){
      var number = $node.attr('ball-number');
      numberarray.push(number);
    }
  });
  if(numberarray.length>0){
    addtotouzhu(playid,numberarray.join("#"),numberarray.length,1);
  }else{
    hsycmserror('请选择要投注的号码');
  };
  $("div."+playid+ " .ball_number").removeClass("curr");
};

//三不同号
$(document).on("click", ".k3sbthbz .ball_number", function() {
  k3sbthbz($(this));
});
var k3sbthbz=function(obj){
  if(rates==null){
    return false;
  }
  var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
  obj.toggleClass("curr");
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3sbthbz_addbtn('"+playid+"')");
};
var k3sbthbz_addbtn=function(playid){
  var numberarray = [];
  $("div."+playid+ " .ball_number").each(function(){
    var $node = $(this);
    if($node.hasClass("curr")){
      var number = $node.attr('ball-number');
      numberarray.push(number);
    }
  });
  if(numberarray.length>=3){
    var combinearr= combine(numberarray,3);
    if(combinearr.length==1){
      addtotouzhu(playid,combinearr.join("#"),combinearr.length,1);
    }else{
      addtotouzhu(playid,combinearr.join("#"),combinearr.length,1);
    }
  }else{
    hsycmserror('选择的投注号码不完整');
  };
  $("div."+playid+ " .ball_number").removeClass("curr");
};

//三连号通选
$(document).on("click", ".k3slhtx .ball_number", function() {
  k3slhtx($(this));
});
var k3slhtx=function(obj){
  if(rates==null){
    return false;
  }
  var playid = obj.attr('playid');
  obj.toggleClass('curr');
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3slhtx_addbtn('"+playid+"')");
};
var k3slhtx_addbtn = function(playid){
  $(".k3slhtx .ball_number.curr").each(function(){
    var obj = $(this);
    var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
    addtotouzhu(playid,number,1);
  });
  $(".k3slhtx .curr").removeClass('curr');
}

//二同号单选
$(document).on("click", ".k3ethdx .ball_number", function() {
  var ball  = $(this).attr('ball-number');
  var index = $(this).parents("ul").index();
  if(index==0){
    $(".k3ethdx ul:eq(1) a").each(function(index){
      var number = $(this).attr('ball-number');
      if($(this).hasClass("curr") && parseInt(number+''+number)==parseInt(ball)){
        $(this).removeClass('curr');
      }
    });
  }else if(index==1){
    $(".k3ethdx ul:eq(0) a").each(function(index){
      var number = $(this).attr('ball-number');
      if($(this).hasClass("curr") && parseInt(number)==parseInt(ball+''+ball)){
        $(this).removeClass('curr');
      }
    });
  }
  k3ethdx($(this));
});
var k3ethdx=function(obj){
  if(rates==null){
    return false;
  }
  var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
  obj.toggleClass("curr");
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3ethdx_addbtn('"+playid+"')");
};
var k3ethdx_addbtn = function(playid){
  var numberarray1 = [];
  $("div."+playid+ "  ul:eq(0) .ball_number").each(function(){
    var $node = $(this);
    if($node.hasClass("curr")){
      var number = $node.attr('ball-number');
      numberarray1.push(number);
    }
  });
  var numberarray2 = [];
  $("div."+playid+ "  ul:eq(1) .ball_number").each(function(){
    var $node = $(this);
    if($node.hasClass("curr")){
      var number = $node.attr('ball-number');
      numberarray2.push(number);
    }
  });
  if(numberarray1.length<1 || numberarray2.length<1){
    hsycmserror('选择的投注号码不完整');
  }
  var allarr = DescartesAlgorithm(numberarray1, numberarray2);
  console.log(allarr.length);
  var array  = [];
  for(var i=0;i<allarr.length;i++){
    var tonghao = allarr[i][0];
    var danhao = allarr[i][1];
    if(tonghao.indexOf(danhao)>=0){

    }else{
      array[i] = allarr[i][0]+''+allarr[i][1];
    }
  }
  array = filterArray(array);
  //console.log(array);
  if(array.length>=1){
    addtotouzhu(playid,array.join("#"),array.length,1);
  }else{
    hsycmserror('选择的投注号码不完整');
  };
  $("div."+playid+ " .ball_number").removeClass("curr");
}

//二不同号
$(document).on("click", ".k3ebthbz .ball_number", function() {
  k3ebthbz($(this));
});
var k3ebthbz=function(obj){
  if(rates==null){
    return false;
  }
  var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
  obj.toggleClass("curr");
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3ebthbz_addbtn('"+playid+"')");
};
var k3ebthbz_addbtn=function(playid){

  var numberarray = [];
  $("div."+playid+ " .ball_number").each(function(){
    var $node = $(this);
    if($node.hasClass("curr")){
      var number = $node.attr('ball-number');
      numberarray.push(number);
    }
  });
  if(numberarray.length>=2){
    var combinearr= combine(numberarray,2);
    if(combinearr.length==1){
      addtotouzhu(playid,combinearr.join("#"),combinearr.length,1);
    }else{
      addtotouzhu(playid,combinearr.join("#"),combinearr.length,1);
    }
  }else{
    hsycmserror('选择的投注号码不完整');
  };
  $("div."+playid+ " .ball_number").removeClass("curr");
};

//k3hhm
$(document).on("click", ".k3hhm .selectNumber", function() {
  k3hhm($(this));
});
var k3hhm=function(obj){
  if(rates==null){
    return false;
  }
  var playid = obj.attr('playid');
  obj.toggleClass('curr');
  currNumber = currList();
  countFun()
  countMoney();
  $(".addtobetbtn").attr("onclick", "k3hhm_addbtn('"+playid+"')");
};
var k3hhm_addbtn = function(playid){

  $(".k3hhm .selectNumber.curr").each(function(){
    var obj = $(this);
    var text = obj.text(),number = obj.attr('ball-number'),playid = obj.attr('playid');
    if(playid == 'hhmhong4hong'){
      var selectNumberSum = $(".k3hhm .selectNumberSum.curr");
      if(selectNumberSum.length != 4){
        hsycmserror('选择的投注号码不完整(请先选择4个号码)',-1);
        return false;
      }
      var numbers = [];
      selectNumberSum.each(function(){
        numbers.push($(this).attr('ball-number'));
      });
      number = numbers.join(',');
    }
    if(playid == 'hhmhong4hei'){
      var selectNumberSum = $(".k3hhm .selectNumberSum.curr");
      if(selectNumberSum.length != 4){
        hsycmserror('选择的投注号码不完整(请先选择4个号码)',-1);
        return false;
      }
      var numbers = [];
      selectNumberSum.each(function(){
        numbers.push($(this).attr('ball-number'));
      });
      number = numbers.join(',');
    }
    if(playid == 'hhmhong5hei'){
      var selectNumberSum = $(".k3hhm .selectNumberSum.curr");
      if(selectNumberSum.length != 5){
        hsycmserror('选择的投注号码不完整(请先选择5个号码)');
        return false;
      }
      var numbers = [];
      selectNumberSum.each(function(){
        numbers.push($(this).attr('ball-number'));
      });
      number = numbers.join(',');
    }
    addtotouzhu(playid,number,1);
  });
  $(".k3hhm .curr").removeClass('curr');
}


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
//追加至投注列表
var orderList=new Array();
var addtotouzhu = function(_playid,number,zhushu){
  if(rates==null){
    return false;
  }
  var yBetting = $('.yBettingList');
  var times = $('.selectMultipInput').val();
  var selectRmbStr = $('.selectMultipleCon').find('option:selected').text();
  var selectRmb = $('.selectMultipleCon').val();

  var rate = rates[_playid];

  var trano= generateMixed(20);
  if(parseInt(rate.minjj)<1)rate.minjj = 1;
  if(parseInt(rate.maxprize)<1)rate.maxprize = 30000;
  var array = { 
    'trano':trano,
    'playtitle':rate.title,
    'playid':rate.playid,
    'number':number,
    'zhushu':zhushu?parseInt(zhushu):1,
    'price':parseInt(times) * parseInt(selectRmbStr),
    'minxf':rate.minxf,
    'totalzs':rate.totalzs,
    'maxjj':rate.maxjj,
    'minjj':rate.minjj,
    'maxzs':rate.maxzs,
    'rate':rate.rate,
    'jine': parseInt(times) * parseInt(selectRmbStr)
  }; 
  orderList.unshift(array);
  addNumberLanAn();
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
    console.log(orderList);
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
  })
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

//爱尚互联
$(function(){
  //$.init();
  Gameinit(lotteryname);
  lotteryrates();
  function tabGameInit(){
    var _thisType = $(this).attr('lottery_code');
    _thisType = 'k3hzzx';
    $('.lottery-number').find('span[way-data="tabDoc"]')
    .html('猜3个开奖号相加的和,3-10为小,11-18为大');
  }
  tabGameInit();
  
  //爱尚互联
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
  
//爱尚互联

$(document).on("click", ".play_select_tit li", function() {
  $(this).addClass('ssc-selected').siblings('li').removeClass('ssc-selected');
  lottery_code = $(this).attr('lottery_code');
  $(".lottery-number > div."+lottery_code).show().siblings('div').hide();
  $(".ball_number").removeClass('curr');
  currNumber = currList();
  countFun()
  countMoney();
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
    case 'k3hzzx':
    $('.lottery-number').find('span[way-data="tabDoc"]')
    .html('猜3个开奖号相加的和,3-10为小,11-18为大');
    break;
    case 'k3sthtx':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('对所有相同的三个号码（111、222、333、444、555、666）进行投注，任意号码开出，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3sthdx':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('对相同的三个号码（111、222、333、444、555、666）中的任意一个进行投注，所选号码开出，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3sbthbz':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('从1～6中任选3个或多个号码，所选号码与开奖号码的3个号码相同，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3slhtx':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('对所有3个相连的号码（123、234、345、456）进行投注，任意号码开出，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3ethfx':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('从11～66中任选1个或多个号码，选号与奖号（包含11～66，不限顺序）相同，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3ethdx':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('选择1对相同号码和1个不同号码投注，选号与奖号相同，即为中奖，奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3ebthbz':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('从1～6中任选2个或多个号码，所选号码与开奖号码任意2个号码相同，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
    case 'k3hhm':
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('从1～6中任选2个或多个号码，所选号码与开奖号码任意2个号码相同，即为中奖。奖金'+rates[_thisType].rate+'倍');
    break;
  }
});

  /*
  ** 删除玩法订单
  */
  function deletecomorderList(_playid){
    if(orderList.length <= 0)return false;
    for(var i=0;i<orderList.length;i++){
      if(orderList[i].playid == _playid){
        orderList.splice(i, 1);
      }
    }
    return orderList;
  }

});





function max_number(arr){
  var max = arr[0];
  var len = arr.length;
  for (var i = 1; i < len; i++){ 
    if (arr[i] >= max) { 
      max = arr[i]; 
    }
  }
  return max;
}

function lottery_multiple(rate,removeRate){
  var bool = true;
  rate = parseFloat(rate);
  if(removeRate){
    for(var i = 0;i < ratesArr.length;i++){
      if(ratesArr[i] == removeRate){
        ratesArr.splice(i,1);
      }
    }
    maxRates = max_number(ratesArr);
    if(orderList[0].playid == "k3sbthbz"){
      maxRates = rate;
    }
    if(orderList[0].playid == "k3sthdx"){
      maxRates = rate;
    }
    if(orderList[0].playid == "k3ethfx"){
      maxRates = rate;
    }
    if(orderList[0].playid == "k3ebthbz"){
      maxRates = rate;
    }
    if(orderList[0].playid == "k3ethdx"){
      maxRates = rate;
    }
    return;
  }

  if(ratesArr.length > 0){
    for(var i = 0;i < ratesArr.length;i++){
      if(ratesArr[i] == rate){
        bool = false;
      }
    }
    if(bool){
      ratesArr.push(rate);
    }
  }else{
    ratesArr.push(rate);
  }
  
  
  maxRates = max_number(ratesArr);
}
function array_max(arr){
  var max=arr[0];
  for(var i in arr){
    if(arr[i]>max){max=arr[i];}
  }
  return max;
}
function lottery_yuji_money(rate){
  var _ratearray = [];
  var inputVal = $('.lottery_input').val()/1;
  
  var zhushu = 0;
  var totalmoney = 0;
  var okmoney = 0;
  var _rate = 0;
  for(var i=0;i<orderList.length;i++){
    //if(orderList[i].price/1==0){
      orderList[i].price = inputVal;
    //}
    _ratearray.push((orderList[i].rate)/1);
    _rate = (orderList[i].rate)/1;
    totalmoney += (orderList[i].price/1) * ((orderList[i].zhushu)/1);
    zhushu += orderList[i].zhushu/1
  }

  okmoney = array_max(_ratearray);
  console.log(okmoney);
  okmoney = inputVal*okmoney;
  okmoney = okmoney.toFixed(3);
  
  $('.lottery_input_text').html('最高可中<em style="color:#f4c829;" class="max_money">'+okmoney+'</em>元');
  $('.betting_sum').html(zhushu);

  $('.betting_sum_moery').html(totalmoney);
}
function isNull(data){ 
  return (data == "" || data == undefined || data == null) ? false : data; 
}
// function lottery_yuji_money(rate) {
//  var inputVal = $('.lottery_input').val();
//  var sum = isNaN(parseInt(inputVal))?0:parseInt(inputVal);
//  betting_sum_moery = isNaN(parseInt($('.lottery_input').val()))?0:parseInt($('.lottery_input').val());
//  $('.betting_sum_moery').text(betting_sum_moery * betting_sum);
//  if(sum != inputVal || !rate){
//    $('.lottery_input').val("");
//    $('.lottery_input_text').html('最高可中<em style="color:#f4c829;" class="max_money">0</em>元');
//    return;
//  }

//  //sum.toFixed(3);
//  var _thisMoney = isNaN(sum)?0:sum;
//    //_thisMoney = _thisMoney.toFixed(3);
//  //var rates = parseFloat(rate);
//    //rates = rates.toFixed(3);
//  if(_thisMoney < 0 ){
//    _thisMoney = '';
//  }

//  if(yzhushu > 0){
//    _thisMoney = _thisMoney * rate;
//    _thisMoney = _thisMoney.toFixed(3);
//    console.log(_thisMoney,rate)
//    $('.lottery_input_text').html('最高可中<em style="color:#f4c829;" class="max_money">'+_thisMoney+'</em>元');
//  }else{
//    $('.lottery_input_text').html('最高可中<em style="color:#f4c829;" class="max_money">0</em>元');
//  }

// }
var betting_sum_moery = 0;
function lottery_touzhufn(number,zhushu){
  console.log(11);
  var lottery_sum_old_list = $('#lottery_sum_old_b').find('.lottery_sum_old');
  var _this_sum;
  if(lottery_sum_old_list.length > 0){
    lottery_sum_old_list.each(function (i) {
      if($(this).attr('lottery_sum') == number){
        _this_sum = $(this).attr('lottery_sum');
      }
    })
    if(_this_sum == number){
      $('#lottery_sum_old_b').find('.lottery_sum_old[lottery_sum="'+_this_sum+'"]').remove();
      if(orderList[0].playid == 'k3sbthbz' || orderList[0].playid == 'k3ebthbz'){
        $('.betting_sum').text(zhushu);
        betting_sum = zhushu;
      }else if(orderList[0].playid == 'k3ethdx'){
        $('.betting_sum').text(ethdxZhushu);

      }else{
        betting_sum = parseInt(zhushu);
        //orderList[0].zhushu = betting_sum;
        $('.betting_sum').text(betting_sum);
      }
      
      betting_sum_moery = isNaN(parseInt($('.lottery_input').val()))?0:parseInt($('.lottery_input').val());
      $('.betting_sum_moery').text(betting_sum_moery * betting_sum);
      lottery_multiple(orderList[0].rate,orderList[0].rate);
    }else{
      if(orderList[0].playid == 'k3sbthbz' || orderList[0].playid == 'k3ebthbz'){
        $('.betting_sum').text(zhushu);
        betting_sum = zhushu;
      }else if(orderList[0].playid == 'k3ethdx'){
        $('.betting_sum').text(ethdxZhushu);
      }else{
        betting_sum = parseInt(zhushu);
        //orderList[0].zhushu = betting_sum;
        $('.betting_sum').text(betting_sum);
      }
      
      $('#lottery_sum_old_b').append('<em class="lottery_sum_old" lottery_sum="'+number+'"  >'+number+'</em>');
      betting_sum_moery = isNaN(parseInt($('.lottery_input').val()))?0:parseInt($('.lottery_input').val());
      $('.betting_sum_moery').text(betting_sum_moery * betting_sum);
      lottery_multiple(orderList[0].rate);
    }

  }else{
    if(orderList[0].playid == 'k3sbthbz' || orderList[0].playid == 'k3ebthbz'){
      $('.betting_sum').text(zhushu);
      betting_sum = zhushu;
    }else if(orderList[0].playid == 'k3ethdx'){
      $('.betting_sum').text(ethdxZhushu);
    }else{
      betting_sum = parseInt(zhushu);
      //orderList[0].zhushu = betting_sum;
      $('.betting_sum').text(betting_sum);
    }
    $('#lottery_sum_old_b').append('<em class="lottery_sum_old" lottery_sum="'+number+'"  >'+number+'</em>');
    betting_sum_moery = isNaN(parseInt($('.lottery_input').val()))?0:parseInt($('.lottery_input').val());
    $('.betting_sum_moery').text(betting_sum_moery * betting_sum);
    lottery_multiple(orderList[0].rate);
  }
}
//快速设置金额
$(document).on('click','[data-setbetmoney]', function () {
  var setbetmoney = $(this).attr('data-setbetmoney');
  var trano       = $(this).attr('data-trano');
  var zhushu       = $(this).attr('data-zhushu');
  var node = $('#usebetting_moneys');
  var money = 0;
  if(node.val()=='' || parseInt(node.val())<1){
    money = setbetmoney;
  }else{
    money = parseInt(node.val()) + parseInt(setbetmoney);
  }
  node.val(money);
  changebetokmoney(money,zhushu);
  changeorderprice(money,trano);
});
function accMul(arg1,arg2)
{
  var m=0,s1=arg1.toString(),s2=arg2.toString();
  try{m+=s1.split(".")[1].length}catch(e){}
  try{m+=s2.split(".")[1].length}catch(e){}
  return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
}

function changebetokmoney(price,zhushu){
  var $totalprice = accMul(price,zhushu);
  $("#ordertotalprice").text($totalprice.toFixed(3));
  //console.log($totalprice);
};
var changeorderprice=function(price,id){
  if(orderList.length>=1)for (var i = 0; i < orderList.length; i++) {
    var cur_order = orderList[i];
    if (cur_order.trano == id) {
      orderList[i]['price'] = price;
    }
  }
  //console.log(orderList);
  //console.log(orderList);
};

function GamePageSwitchToggle(){
  $("#PageSwitch").toggle();
  if($('#PageSwitch').hasClass('yyplay_select_container')){
    $('.theme-red .title').find('.icon-sanjiaoxing').css('transform','rotate(360deg)');
    $('#PageSwitch').removeClass('yyplay_select_container')
  }else{
    $('.theme-red .title').find('.icon-sanjiaoxing').css('transform','rotate(180deg)');
    $('#PageSwitch').addClass('yyplay_select_container')
  }
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
var Gameinit = function (_lotteryname) {
  clearInterval(openCodeTimeOut);
  lotteryname = _lotteryname;
  lotterytimes(_lotteryname);
  lotteryopencodes(_lotteryname);
  getUserBetsListToday(_lotteryname);
}

//获取开奖时间
var yIndex = 1;
var lotterytimesId;
var lotterytimes = function(lotteryname){
  clearTimeout(lotterytimesId);
  var ret = null;var retopen = null;
  var url = apirooturl + 'lotterytimes';
  $.post(url, {'lotteryname':lotteryname}, function(data) {
    if(data.sign==true){
      lottery = data.data;
      way.set("showExpect", lottery);
      if(yIndex > 1){
        var time = 9;
        $(function(){
          if(time==9){
            var time1=setInterval(function(){
              if(time==0){
                $(".alerts button").html("确定("+time+"秒后自动关闭)");
                $(".alerts button").click();
                time=9;
                clearInterval(time1);
                
              }else{
                $(".alerts button").html("确定("+time+"秒后自动关闭)");
                time--;
              }
            }, 1000);
          }
        })
        hsycmss('<span style="color:red;">'+lottery.lastFullExpect+'</span>期已截止<br />当前期号<span style="color:red;">'+lottery.currFullExpect+'</span><br />投注时请注意期号');
      }
      yIndex++;
      if (lottery.remainTime && eval(lottery.remainTime) > 1) {
        //alert(111);
        countdownTime(lottery.remainTime, lotterytimes, lotteryname);
        ret = lottery.lastFullExpect;
        retopen = lottery.openRemainTime;
        if (ret) {
          clearTimeout(openCodeTimeOut);
          //way.set("showExpect.currFullExpect",lottery.currFullExpect);
          $("[way-data='showExpect.currFullExpect']").text(lottery.currFullExpect);
          openexpect = lottery.lastFullExpect;
          ckTimer = true;
          start();
          openCodeTimeOut = setTimeout(function () {
            loadopencode(lotteryname);
          },5000);
            //loadOpenCode(shortName, ret);
          }
        } else {
          if (lottery.currFullExpect == "000000") {
            ret = lottery.lastFullExpect;
          } else {
            lotterytimesId = setTimeout(function () {
              lotterytimes(lotteryname);
            }, 5000);
          }
        }
      }else if(data.sign==false){
        lotterytimesId = setTimeout(function () {
          lotterytimes(lotteryname);
        }, 5000);
      }
    },'json');
}
//获取开奖
var lotteryopencodesid;
var lotteryopencodes = function(lotteryname){
  clearTimeout(lotteryopencodesid);
  var url = apirooturl + 'lotteryopencodes';
  var html='',$node = $("#fn_getoPenGame").find('tbody');
  $node.html('');
  $.post(url, {'lotteryname':lotteryname}, function(data) {
    if(data.sign==true){
      var lotlist = data.data;
      for(var o in lotlist){
        var openinfo = lotlist[o];
        if(!openinfo.opencode)openinfo.opencode='0,0,0';
        var array = (openinfo.opencode).split(",");
        var sum = parseInt(array[0])+parseInt(array[1])+parseInt(array[2]);
        var smallbig='',oddeven='';
        if(sum>10)
          smallbig='<i>大</i>';
        else
          smallbig='<i>小</i>';
        if(sum%2!=0)
          oddeven='<i>单</i>';
        else
          oddeven='<i>双</i>';
        
        var opencodes = openinfo.opencode;
        opencodes = opencodes.split(',');
        var opencodeHtm = "";
        for (var i in opencodes) {
          opencodeHtm += '<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+opencodes[i]+'"></i></b>';
        }

        html += '<div class="lotterys"><div class="rq">第 '+openinfo.expect+' 期</div><div class="hm">'+opencodeHtm+'</div><div class="k3hz"><em class="k3hz_1">'+sum+'</em><em class="k3hz_2">'+smallbig+'</em><em class="k3hz_3">'+oddeven+'</em></div></div>';
        
      }
      $node.html(html);
    }else if(data.sign==false){
      lotteryopencodesid = setTimeout(function () {
        lotteryopencodes();
      }, 5000);
    }
  },'json');
}
//赔率
var lotteryratesId;
var lotteryrates = function(){
  clearTimeout(lotteryratesId);
  rates = k3lotteryrates.rates;
  $.each(rates,function(n,value){
    var _playid = value.playid;
    //if(_playid.indexOf('k3hz')==0){
      $(".ball_aid[rate_"+_playid+"]").text('赔率'+value.rate);
    //}
  });
  /*var url = apirooturl + 'lotteryrates';
  $.ajax({
    url: url,
    type: "post",
    dataType: "json",
    async:false,
    success: function(data) {
      if (data.sign === true) {
        rates = data.rates;
        $.each(rates,function(n,value){
          var _playid = value.playid;
          //if(_playid.indexOf('k3hz')==0){
            $(".ball_aid[rate_"+_playid+"]").text('赔率'+value.rate);
          //}
        });
      } else {
        lotteryratesId = setTimeout(function () {
          lotteryrates();
        }, 5000);
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      lotteryratesId = setTimeout(function () {
        lotteryrates();
      }, 5000);
    }
  });*/
}

//获取最后开奖期号
var loadopencodecount = 0;//防止无限循环导致卡死
var loadopencode = function(lotteryname){
  var url = apirooturl + 'loadopencode';
  var ret = false;
  clearTimeout(openCodeTimeOut);
  $.ajax({  
   type:'post',      
   url:url,  
   data:{'lotteryname':lotteryname,'expect':openexpect},  
   cache:false,  
   dataType:'json',  
   success:function(msg){ 
    if (msg.sign == true) {
      if (msg.data.opencode.length > 0) {
        loadopencodecount = 0;
        if (openCodeTimeOut) {
          clearTimeout(openCodeTimeOut);
        }
        var lastExpect = way.get("showExpect.lastFullExpect");


        if (lastExpect == openexpect) {
                        // 页面开奖号列表赋值
                        var openCode = msg.data.opencode;
                        var openCodes = openCode.split(',');
                        stopLottery(openCode);
                        lotteryopencodes(lotteryname);
                        //openResult();
                        getUserBetsListToday();
                      }


                    } else {
                      ret = true;
                    }
                    var lastExpect = way.get("showExpect.expect");
        //alert(lastExpect);
        //alert(expect);
        if (lastExpect == openexpect && msg.data.opencode.length<=0) {
        //alert(openCodeTimeOut);
        //alert(msg.lastOpenCode.length);
        if (openCodeTimeOut) {
          clearTimeout(openCodeTimeOut);
        }
        openCodeTimeOut = setInterval(function () {
          loadopencode(lotteryname, openexpect);
        }, 5 * 1000);
      }
    }else{
      loadopencodecount++;
      if(loadopencodecount<=80){
        openCodeTimeOut = setInterval(function () {
          loadopencode(lotteryname, openexpect);
        }, 5 * 1000);
      }else{
        window.location.reload();
      }

    }
  },
  error: function() {
            // 请求出错后5秒钟请求一次直到请求成功
            openCodeTimeOut = setTimeout(function() {
              loadopencode(lotteryname, openexpect);
            }, 1000 * 5);
          }
        });
}
//异步去取上一次的开奖结果和中奖情况
function openResult() {
   // var expect = way.get("showExpect.lastExpect");
 }

/**
 * 当天投注记录
 * @param shortName
 */
 var jqueryGridPage = 1;
 var jqueryGridRows = 10;
 function getUserBetsListToday(_lotteryname) {
  if(!user || user.islogin!=1){
    return false;
  }
  lotteryname = _lotteryname?_lotteryname:lotteryname;
  var tabs = $("#userbetshistorylist");
  tabs.empty();
  var url = apirooturl + 'betslisttoday';
  var pagination = $.pagination({
    render: '.paging',
    pageSize: jqueryGridRows,
    pageLength: 3,
    ajaxType: 'post',
    //hideInfos: false,
    hideGo: true,
    ajaxUrl: url,
    ajaxData: {
      "lotteryname": lotteryname,'jqueryGridPage': jqueryGridPage,'jqueryGridRows': jqueryGridRows
    },
    complete: function() {},
    success: function(data) {
      tabs.empty();
      var html2 = '<tr><td>期号</td><td>投注金额</td><td>奖金</td><td>操作</td></tr>';
      tabs.append(html2);
      $.each(data, function(index, val) {
        var html = '';
        html += '<tr id="'+val.trano+'">';
        html += '<td>'+val.expect+'</td>';
        html += '<td>'+ val.amount +'</td>';
        
        if(val.isdraw == 0) { // 未中奖绿色
          html += '<td><t style="color:#fff">等待开奖</t></td>';
        }else{
          html += '<td>' + (val.okamount ? val.okamount : 0) + '</td>';
        }
        if(val.isdraw == -1) { // 未中奖绿色
          html += '<td><t style="color:#fff">未中奖</t></td>';
        } else if(val.isdraw == 1) { // 已中奖红色
          html += '<td><t style="color:red">已中奖</t></td>';
        }else if(val.isdraw == -2) {
          html += '<td style="color:#fff"><del>已撤单</del></td>';
        }else if(val.isdraw == 0) {
          html += '<td><t class="state" onclick="javascript:getBillInfo(\''+val.trano+'\')" style="color:red;cursor:pointer;">撤单</t></td>';
        }else{
          html += '<td><t>未知状态</t></td>';
        }
        
        html += '</tr>';

        tabs.append(html);
      });
    },
    pageError: function(response) {},
    emptyData: function() {}
  });
  pagination.init();
}
/** **************************************************************************** */
// 倒计时定时器
var CDTime = null;
function countdownTime(leftSec, callback, shortName) {
  var h, m, s, t;
  var h1, m1, s1;
  var h2, m2, s2;
  if (CDTime) {
    clearInterval(CDTime);
  }
  var localCurrentTime = new Date();
  t = leftSec * 1000;
  var endTime = localCurrentTime.getTime() + t;

  if (t > 0) {
    h = Math.floor(t / 1000 / 60 / 60 % 24);
    if (h < 10) {
      h1 = "0";
      h2 = ""+ h;
    } else {
      h1 =  ""+ Math.floor(h/10);
      h2 =  ""+ h%10;
    }
    m = Math.floor(t / 1000 / 60 % 60);
    if (m < 10) {
      m1 = "0";
      m2 = ""+ m;
    } else {
      m1 =  ""+ Math.floor(m/10);
      m2 =  ""+ m%10;
    }
    s = Math.floor(t / 1000 % 60);
    if (s < 10) {
      s1 = "0";
      s2 = ""+ s;
    } else {
      s1 =  ""+ Math.floor(s/10);
      s2 =  ""+ s%10;
    }
    way.set("gametimes", h1+h2 + ':' + m1+m2 + ':' + s1+s2);
    $(".gametimes").text(h1+h2 + ':' + m1+m2 + ':' + s1+s2);
        // way.set("gametimes.h1", h1);
        // way.set("gametimes.h2", h2);
        // way.set("gametimes.m1", m1);
        // way.set("gametimes.m2", m2);
        // way.set("gametimes.s1", s1);
        // way.set("gametimes.s2", s2);
        way.set("gametimes.h", h1+h2);
        way.set("gametimes.m", m1+m2);
        way.set("gametimes.s", s1+s2);
        CDTime = setInterval(function() {
          t = endTime - (new Date()).getTime();
          if (t >= 0) {
            h = Math.floor(t / 1000 / 60 / 60 % 24);
            if (h < 10) {
              h1 = "0";
              h2 = "" + h;
            } else {
              h1 = "" + Math.floor(h/10);
              h2 = "" + h%10;
            }
            m = Math.floor(t / 1000 / 60 % 60);
            if (m < 10) {
              m1 = "0";
              m2 = "" + m;
            } else {
              m1 = "" + Math.floor(m/10);
              m2 = "" + m%10;
            }
            s = Math.floor(t / 1000 % 60);
            if (s < 10) {
              s1 = "0";
              s2 = "" + s;
            } else {
              s1 = "" + Math.floor(s/10);
              s2 = "" + s%10;
            }
            way.set("gametimes", h1+h2 + ':' + m1+m2 + ':' + s1+s2);
            $(".gametimes").text(h1+h2 + ':' + m1+m2 + ':' + s1+s2);
                // way.set("gametimes.h1", h1);
                // way.set("gametimes.h2", h2);
                // way.set("gametimes.m1", m1);
                // way.set("gametimes.m2", m2);
                // way.set("gametimes.s1", s1);
                // way.set("gametimes.s2", s2);
                way.set("gametimes.h", h1+h2);
                way.set("gametimes.m", m1+m2);
                way.set("gametimes.s", s1+s2);
              } else {
                //audioPlay(2);
                clearInterval(CDTime);
                (eval(callback))(shortName);

              }
            }, 500);

      } else {
        (eval(callback))(shortName);
      }
    }
/**
 * 摇奖计时器
 */
 function start() {

  var n_numRangeArray = ClockEnv.numRange.split("-");
  if (ckTimer) {
    openLottery(ClockEnv.num, n_numRangeArray[1]);
  }
}
// 开奖过程
var T10;
var T9;
var T8;
var T7;
var T6;
var T5;
var T4;
var T3;
var T2;
var T1;
function openLottery(ball, maxnum) {
  if (T10) {
    clearInterval(T10);
    way.set("showExpect.openCode10", " ");
  }
  if (T9) {
    clearInterval(T9);
    way.set("showExpect.openCode9", " ");
  }
  if (T8) {
    clearInterval(T8);
    way.set("showExpect.openCode8", " ");
  }
  if (T7) {
    clearInterval(T7);
    way.set("showExpect.openCode7", " ");
  }
  if (T6) {
    clearInterval(T6);
    way.set("showExpect.openCode6", " ");
  }
  if (T5) {
    clearInterval(T5);
    way.set("showExpect.openCode5", " ");
  }
  if (T4) {
    clearInterval(T4);
    way.set("showExpect.openCode4", " ");
  }
  if (T3) {
    clearInterval(T3);
    way.set("showExpect.openCode3", " ");
  }
  if (T2) {
    clearInterval(T2);
    way.set("showExpect.openCode2", " ");
  }
  if (T1) {
    clearInterval(T1);
    way.set("showExpect.openCode1", " ");
  }
  var qiuanimation3Div = $("#qiuanimation3");
  if(qiuanimation3Div.length > 0) {
    qiuanimation3Div.hide();
    qiuanimation3Div.find("div.bigone").empty();
    qiuanimation3Div.find("div.bigone").hide();
  }
  var qiuanimation5Div = $("#qiuanimation5");
  if(qiuanimation5Div.length > 0) {
    qiuanimation5Div.hide();
    qiuanimation5Div.find("div.bigone").empty();
    qiuanimation5Div.find("div.bigone").hide();
  }
  $(".kaijq").find('ul').hide();
  if (ball == 3) {
    $(".lotter-bigqiu3").show();
  } else if (ball == 5) {
    $(".lotter-bigqiu5").show();
  } else if (ball == 8) {
    $(".lotter-bigsmll8").show();
  } else if (ball == 10) {
    $(".lotter-bigsmll10").show();
  } 
  Lottery(ball, maxnum);

}
function Lottery(num, maxnum) {
  if (num >= 10) {
    T10 = window.setInterval(function() {
      openLottery10(maxnum);
    }, 50);
  }
  if (num >= 9) {
    T9 = window.setInterval(function() {
      openLottery9(maxnum);
    }, 50);
  }
  if (num >= 8) {
    T8 = window.setInterval(function() {
      openLottery8(maxnum);
    }, 50);
  }
  if (num >= 7) {
    T7 = window.setInterval(function() {
      openLottery7(maxnum);
    }, 50);
  }
  if (num >= 6) {
    T6 = window.setInterval(function() {
      openLottery6(maxnum);
    }, 50);
  }
  if (num >= 5) {
    T5 = window.setInterval(function() {
      openLottery5(maxnum);
    }, 50);
  }
  if (num >= 4) {
    T4 = window.setInterval(function() {
      openLottery4(maxnum);
    }, 50);
  }
  if (num >= 3) {
    T3 = window.setInterval(function() {
      openLottery3(maxnum);
    }, 50);
  }
  if (num >= 2) {
    T2 = window.setInterval(function() {
      openLottery2(maxnum);
    }, 50);
  }
  if (num >= 1) {
    T1 = window.setInterval(function() {
      openLottery1(maxnum);
    }, 50);
  }
}
function openLottery1(maxnum) {
  $('[way-data="showExpect.openCode1"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+Math.round(Math.random() * (maxnum - 1) + 1)+'"></i></b>');
}
function openLottery2(maxnum) {
  $('[way-data="showExpect.openCode2"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+Math.round(Math.random() * (maxnum - 1) + 1)+'"></i></b>');
}
function openLottery3(maxnum) {
  $('[way-data="showExpect.openCode3"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+Math.round(Math.random() * (maxnum - 1) + 1)+'"></i></b>');
}

/*function openLottery1(maxnum) {
  way.set("showExpect.openCode1", Math
      .round(Math.random() * (maxnum - 1) + 1)
  );
}

function openLottery2(maxnum) {
  way.set("showExpect.openCode2", Math
      .round(Math.random() * (maxnum - 1) + 1));
}

function openLottery3(maxnum) {
  way.set("showExpect.openCode3", Math
      .round(Math.random() * (maxnum - 1) + 1));
}

function openLottery4(maxnum) {
  way.set("showExpect.openCode4", Math
      .round(Math.random() * (maxnum - 1) + 1));
}

function openLottery5(maxnum) {
  way.set("showExpect.openCode5", Math
      .round(Math.random() * (maxnum - 1) + 1));
}
function openLottery6(maxnum) {
  way.set("showExpect.openCode6", Math
      .round(Math.random() * (maxnum - 1) + 1));
}

function openLottery7(maxnum) {
  way.set("showExpect.openCode7", Math
      .round(Math.random() * (maxnum - 1) + 1));
}

function openLottery8(maxnum) {
  way.set("showExpect.openCode8", Math
      .round(Math.random() * (maxnum - 1) + 1));
}
function openLottery9(maxnum) {
  way.set("showExpect.openCode9", Math
      .round(Math.random() * (maxnum - 1) + 1));
}
function openLottery10(maxnum) {
  way.set("showExpect.openCode10", Math.round(Math.random() * (maxnum - 1) + 1));
}*/
// 停止开奖
function stopLottery(codes) {
  var nums = codes.split(',');
  if (nums.length >= 10) {
    setTimeout(function() {
      clearInterval(T10);
      way.set("showExpect.openCode10", nums[9] + "");
//      if(nums.length==10){
//        showLottery();
//      }
}, 4000);
  }
  if (nums.length >= 9) {
    setTimeout(function() {
      clearInterval(T9);
      way.set("showExpect.openCode9", nums[8] + "");
//      if(nums.length==9){
//        showLottery();
//      }
}, 4000);
  }
  if (nums.length >= 8) {
    setTimeout(function() {
      clearInterval(T8);
      way.set("showExpect.openCode8", nums[7] + "");
//      if(nums.length==8){
//        showLottery();
//      }
}, 4000);
  }
  if (nums.length >= 7) {
    setTimeout(function() {
      clearInterval(T7);
      way.set("showExpect.openCode7", nums[6] + "");
//      if(nums.length==7){
//        showLottery();
//      }
}, 3500);
  }
  if (nums.length >= 6) {
    setTimeout(function() {
      clearInterval(T6);
      way.set("showExpect.openCode6", nums[5] + "");
//      if(nums.length==6){
//        showLottery();
//      }
}, 3000);
  }
  if (nums.length >= 5) {
    setTimeout(function() {
      clearInterval(T5);
      way.set("showExpect.openCode5", nums[4] + "");
      // if(nums.length==5){
      //  showLottery();
      // }
    }, 2500);
  }
  if (nums.length >= 4) {
    setTimeout(function() {
      clearInterval(T4);
      way.set("showExpect.openCode4", nums[3] + "");
//      if(nums.length==4){
//        showLottery();
//      }
}, 2000);
  }
  if (nums.length >= 3) {
    setTimeout(function() {
      clearInterval(T3);
      // way.set("showExpect.openCode3", nums[2] + "");
      $('[way-data="showExpect.openCode3"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+nums[2]+'"></i></b>');
//      if(nums.length==3){
//        showLottery();
//      }
}, 1500);
  }
  if (nums.length >= 2) {
    setTimeout(function() {
      clearInterval(T2);
      $('[way-data="showExpect.openCode2"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+nums[1]+'"></i></b>');
      // way.set("showExpect.openCode2", nums[1] + "");
//      if(nums.length==2){
//        showLottery();
//      }
}, 1000);
  }
  if (nums.length >= 1) {
    setTimeout(function() {
      clearInterval(T1);
      $('[way-data="showExpect.openCode1"]').html('<b class="bet-item"><i data-v-e60a1042="" class="Dice Dice'+nums[0]+'"></i></b>');
      // way.set("showExpect.openCode1", );
//      if(nums.length==1){
//        showLottery();
//      }
}, 200);
  }
}
/**
 * 分割字符串
 *
 * @params str    字符串
 * @params len      长度
 */
 function strCut(str, len){
  var strlen = str.length;
  if(strlen == 0) return false;
  var j = Math.ceil(strlen / len);
  var arr = Array();
  for(var i=0; i<j; i++)
    arr[i] = str.substr(i*len, len)
  return arr;
}

//两个数组，返回包含相同数字的个数
function Sames(a,b){
  var num=0;
  for (i=0;i<a.length;i++)
    {   var zt=0;
      for (j=0;j<b.length;j++)
      {
        if(a[i]-b[j]==0){
          zt=1;
        }
      }
      if(zt==1){
        num+=1; 
      }
    }
    return num;
  }

  function Combination(c, b) {
    b = parseInt(b);
    c = parseInt(c);
    if (b < 0 || c < 0) {
      return false
    }
    if (b == 0 || c == 0) {
      return 1
    }
    if (b > c) {
      return 0
    }
    if (b > c / 2) {
      b = c - b
    }
    var a = 0;
    for (i = c; i >= (c - b + 1) ; i--) {
      a += Math.log(i)
    }
    for (i = b; i >= 1; i--) {
      a -= Math.log(i)
    }
    a = Math.exp(a);
    return Math.round(a)
  }


//过滤重复的数组
function filterArray(arrs){
  var k=0,n=arrs.length; 
  var arr = new Array(); 
  for(var i=0;i<n;i++)
  {
    for(var j=i+1;j<n;j++)
    {
      if(arrs[i]==arrs[j])
      {
        arrs[i]=null;
        break;
      }
    }
  }    
  for(var i=0;i<n;i++)
  {
    if(arrs[i])
    {
            arr[k++]=arrs[i]; // arr.push(this[i]);
          }
        } 
        return arr;
      }

//是否有重复值
function isRepeat(arr){  

 var hash = {};  

 for(var i in arr) {  

   if(hash[arr[i]])  

    return true;  

  hash[arr[i]] = true;  

}  

return false;  

}
/**
 * 笛卡尔乘积算法
 *
 * @params 一个可变参数，原则上每个都是数组，但如果数组只有一个值是直接用这个值
 *
 * useage:
 * console.log(DescartesAlgorithm(2, [4,5], [6,0],[7,8,9]));
 */
 function DescartesAlgorithm(){
  var i,j,a=[],b=[],c=[];
  if(arguments.length==1){
    if(!Array.isArray(arguments[0])){
      return [arguments[0]];
    }else{
      return arguments[0];
    }
  }
  
  if(arguments.length>2){
    for(i=0;i<arguments.length-1;i++) a[i]=arguments[i];
      b=arguments[i];
    
    return arguments.callee(arguments.callee.apply(null, a), b);
  }

  if(Array.isArray(arguments[0])){
    a=arguments[0];
  }else{
    a=[arguments[0]];
  }
  if(Array.isArray(arguments[1])){
    b=arguments[1];
  }else{
    b=[arguments[1]];
  }

  for(i=0; i<a.length; i++){
    for(j=0; j<b.length; j++){
      if(Array.isArray(a[i])){
        c.push(a[i].concat(b[j]));
      }else{
        c.push([a[i],b[j]]);
      }
    }
  }
  
  return c;
}

/**
 * 组合算法
 *
 * @params Array arr    备选数组
 * @params Int num
 *
 * @return Array      组合
 *
 * useage:  combine([1,2,3,4,5,6,7,8,9], 3);
 */
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

/**
 * 排列算法
 */
 function permutation(arr, num){
  var r=[];
  (function f(t,a,n){
    if (n==0) return r.push(t);
    for (var i=0,l=a.length; i<l; i++){
      f(t.concat(a[i]), a.slice(0,i).concat(a.slice(i+1)), n-1);
    }
  })([],arr,num);
  return r;
}

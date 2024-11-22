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
  //玩法切换TAB
  $(document).on("click", ".play_select_tit li", function() {
    $(this).addClass('curr').siblings('li').removeClass('curr');
    lottery_code = $(this).attr('lottery_code');
    $('.selectNumber').removeClass('curr');
    if(lottery_code == "lhc_tm"){
        lottery_code_two = "lhctmzx";
        var html ='<li class="bet_filter_item"><strong class="title">特码</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="tmzx">直选</span>'+
        '<span class="bet_options" lottery_code_two="lhctmlm">两面</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html);
    }else if(lottery_code == "lhc_zm"){
        lottery_code_two = "lhczmrx";
        var html2 ='<li class="bet_filter_item"><strong class="title">任选</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="zmrx">任选</span>'+
        '</div>'+
        '</li>'+
        '<li class="bet_filter_item"><strong class="title">正码</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options" lottery_code_two="zm1t">正一特</span>'+
        '<span class="bet_options" lottery_code_two="zm2t">正二特</span>'+
        '<span class="bet_options" lottery_code_two="zm3t">正三特</span>'+
        '<span class="bet_options" lottery_code_two="zm4t">正四特</span>'+
        '<span class="bet_options" lottery_code_two="zm5t">正五特</span>'+
        '<span class="bet_options" lottery_code_two="zm6t">正六特</span>'+
        '</div>'+
        '</li>'+
        '<li class="bet_filter_item"><strong class="title">两面</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options" lottery_code_two="lhczmz12m">正一两面</span>'+
        '<span class="bet_options" lottery_code_two="lhczmz22m">正二两面</span>'+
        '<span class="bet_options" lottery_code_two="lhczmz32m">正三两面</span>'+
        '<span class="bet_options" lottery_code_two="lhczmz42m">正四两面</span>'+
        '<span class="bet_options" lottery_code_two="lhczmz52m">正五两面</span>'+
        '<span class="bet_options" lottery_code_two="lhczmz62m">正六两面</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html2);
    }else if(lottery_code == "lhc_lm"){
        lottery_code_two = "lhclm3qz";
        var html3 ='<li class="bet_filter_item"><strong class="title">连码</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="lhclm3qz">三全中</span>'+
        '<span class="bet_options" lottery_code_two="lhclm3z2">三中二</span>'+
        '<span class="bet_options" lottery_code_two="lhclm2qz">二全中</span>'+
        '<span class="bet_options" lottery_code_two="lhclm2zt">二中特</span>'+
        '<span class="bet_options" lottery_code_two="lhclmtc">特串</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html3);
    }else if(lottery_code == "lhc_bb"){
        lottery_code_two = "lhc_bb";
        var html4 ='<li class="bet_filter_item"><strong class="title">半波</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="lhc_bb">特码半波</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html4);
    }else if(lottery_code == "lhc_sx"){
        lottery_code_two = "lhctx";
        var html5 ='<li class="bet_filter_item"><strong class="title">生肖</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="lhctx">特肖</span>'+
        '<span class="bet_options" lottery_code_two="lhc1x">一肖</span>'+
        '<span class="bet_options" lottery_code_two="lhc2lx">二连肖</span>'+
        '<span class="bet_options" lottery_code_two="lhc3lx">三连肖</span>'+
        '<span class="bet_options" lottery_code_two="lhc4lx">四连肖</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html5);
    }else if(lottery_code == "lhc_ws"){
        lottery_code_two = "lhctmtw";
        var html6 ='<li class="bet_filter_item"><strong class="title">尾数</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="lhctmtw">特码头尾</span>'+
        '<span class="bet_options" lottery_code_two="lhc2lw">二连尾</span>'+
        '<span class="bet_options" lottery_code_two="lhc3lw">三连尾</span>'+
        '<span class="bet_options" lottery_code_two="lhc4lw">四连尾</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html6);
    }else if(lottery_code == "lhc_bz"){
        lottery_code_two = "lhc5bz";
        var html7 ='<li class="bet_filter_item"><strong class="title">不中</strong>'+
        '<div class="bet_option">'+
        '<span class="bet_options ssc-curr" lottery_code_two="lhc5bz">五不中</span>'+
        '<span class="bet_options" lottery_code_two="lhc6bz">六不中</span>'+
        '<span class="bet_options" lottery_code_two="lhc7bz">七不中</span>'+
        '<span class="bet_options" lottery_code_two="lhc8bz">八不中</span>'+
        '<span class="bet_options" lottery_code_two="lhc9bz">九不中</span>'+
        '<span class="bet_options" lottery_code_two="lhc10bz">十不中</span>'+
        '</div>'+
        '</li>';
        $('.bet_filter_item').remove();
        $('#bet_filter').append(html7);
    }
    $('.bet_filter_item .ssc-curr').click();
    $(".bet-num-box > div."+lottery_code).show().siblings('div').hide();
  });
  $(document).on("click", ".bet_filter_box span", function() {
    $(this).parents('.bet_filter_box').find('.bet_options').removeClass('ssc-curr');
    $(this).addClass('ssc-curr');
    $('.selectNumber').removeClass('curr');
    lottery_code_two = $(this).attr('lottery_code_two');
    $(".30041321 > div."+lottery_code_two).show().siblings('div').hide();
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
  //获取选中的数
  function currList() {
    var currArr = [];
    $('.g_Number_Section').each(function (i){
      var acArr = [];
      $(this).find('.curr').each(function (i){
        acArr.push($(this).attr('data-number'));
      })
      currArr.push(acArr);
    })
    return currArr;
  }
  //获取注数
  function countFun(){
    switch(lottery_code_two){
      case 'tmzx': //特码直选
      zhushus.length = currNumber[0].length;
      break;
      case 'lhctmlm': //特码两面
      zhushus.length = currNumber[1].length;
      break;
      case 'zmrx': //正码任选
      zhushus.length = currNumber[2].length;
      break;
      case 'zm1t': //正1特
      zhushus.length = currNumber[3].length;
      break;
      case 'zm2t': //正2特
      zhushus.length = currNumber[4].length;
      break;
      case 'zm3t': //正3特
      zhushus.length = currNumber[5].length;
      break;
      case 'zm4t': //正4特
      zhushus.length = currNumber[5].length;
      break;
      case 'zm5t': //正5特
      zhushus.length = currNumber[7].length;
      break;
      case 'zm6t': //正6特
      zhushus.length = currNumber[8].length;
      break;
      case 'lhczmz12m': //正1两面
      zhushus.length = currNumber[9].length;
      break;
      case 'lhczmz22m': //正2两面
      zhushus.length = currNumber[10].length;
      break;
      case 'lhczmz32m': //正3两面
      zhushus.length = currNumber[11].length;
      break;
      case 'lhczmz42m': //正4两面
      zhushus.length = currNumber[12].length;
      break;
      case 'lhczmz52m': //正5两面
      zhushus.length = currNumber[13].length;
      break;
      case 'lhczmz62m': //正6两面
      zhushus.length = currNumber[14].length;
      break;
      case 'lhclm3qz': //三全中
      zhushus.length = combine(currNumber[15],3).length;
      break;
      case 'lhclm3z2': //三中二
      zhushus.length = combine(currNumber[16],3).length;
      break;
      case 'lhclm2qz': //二全中
      zhushus.length = combine(currNumber[17],2).length;
      break;
      case 'lhclm2zt': //二中特
      zhushus.length = combine(currNumber[18],2).length;
      break;
      case 'lhclmtc': //特串
      zhushus.length = combine(currNumber[19],2).length;
      break;
      case 'lhc_bb': //特码半波
      zhushus.length = currNumber[20].length;
      break;
      case 'lhctx': //特肖
      zhushus.length = currNumber[21].length;
      break;
      case 'lhc1x': //一肖
      zhushus.length = currNumber[22].length;
      break;
      case 'lhc2lx': //二肖连
      zhushus.length = combine(currNumber[23],2).length;
      break;
      case 'lhc3lx': //三肖连
      zhushus.length = combine(currNumber[24],3).length;
      break;
      case 'lhc4lx': //四肖连
      zhushus.length = combine(currNumber[25],4).length;
      break;
      case 'lhctmtw': //特码头尾
      zhushus.length = currNumber[26].length;
      break;
      case 'lhc2lw': //二尾连
      zhushus.length = combine(currNumber[27],2).length;
      break;
      case 'lhc3lw': //三尾连
      zhushus.length = combine(currNumber[28],3).length;
      break;
      case 'lhc4lw': //四尾连
      zhushus.length = combine(currNumber[29],4).length;
      break;
      case 'lhc5bz': //五不中
      zhushus.length = combine(currNumber[30],5).length;
      break;
      case 'lhc6bz': //六不中
      zhushus.length = combine(currNumber[31],6).length;
      break;
      case 'lhc7bz': //七不中
      zhushus.length = combine(currNumber[32],7).length;
      break;
      case 'lhc8bz': //八不中
      zhushus.length = combine(currNumber[33],8).length;
      break;
      case 'lhc9bz': //九不中
      zhushus.length = combine(currNumber[34],9).length;
      break;
      case 'lhc10bz': //十不中
      zhushus.length = combine(currNumber[35],10).length;
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
  //特码直选-正码任选-正特玩法
  $(document).on("click", ".tmzx .selectNumber,.zmrx .selectNumber,.zm1t .selectNumber,.zm2t .selectNumber,.zm3t .selectNumber,.zm4t .selectNumber,.zm5t .selectNumber,.zm6t .selectNumber", function() {
    QQ30041321($(this));
  });
  var QQ30041321=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "QQ30041321_addbtn('"+playid+"')");
  };
  var QQ30041321_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    console.log(numberarray);
    if(numberarray.length>0){
      addtotouzhu(playid,numberarray.join(","),numberarray.length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','请选择要投注的号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //特码两面
  $(document).on("click", ".lhctmlm .selectNumber", function() {
    tmlm($(this));
  });
  var tmlm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "tmlm_addbtn('"+playid+"')");
  };
  var tmlm_addbtn = function(playid){
    $(".lhctmlm .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhctmlm .curr").removeClass('curr');
  }
  //正1两面
  $(document).on("click", ".lhczmz12m .selectNumber", function() {
    zm1lm($(this));
  });
  var zm1lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm1lm_addbtn('"+playid+"')");
  };
  var zm1lm_addbtn = function(playid){
    $(".lhczmz12m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz12m .curr").removeClass('curr');
  }
  //正2两面
  $(document).on("click", ".lhczmz22m .selectNumber", function() {
    zm2lm($(this));
  });
  var zm2lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm2lm_addbtn('"+playid+"')");
  };
  var zm2lm_addbtn = function(playid){
    $(".lhczmz22m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz22m .curr").removeClass('curr');
  }
  //正3两面
  $(document).on("click", ".lhczmz32m .selectNumber", function() {
    zm3lm($(this));
  });
  var zm3lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm3lm_addbtn('"+playid+"')");
  };
  var zm3lm_addbtn = function(playid){
    $(".lhczmz32m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz32m .curr").removeClass('curr');
  }
  //正4两面
  $(document).on("click", ".lhczmz42m .selectNumber", function() {
    zm4lm($(this));
  });
  var zm4lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm4lm_addbtn('"+playid+"')");
  };
  var zm4lm_addbtn = function(playid){
    $(".lhczmz42m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz42m .curr").removeClass('curr');
  }
  //正5两面
  $(document).on("click", ".lhczmz52m .selectNumber", function() {
    zm5lm($(this));
  });
  var zm5lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm5lm_addbtn('"+playid+"')");
  };
  var zm5lm_addbtn = function(playid){
    $(".lhczmz52m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz52m .curr").removeClass('curr');
  }
  //正6两面
  $(document).on("click", ".lhczmz62m .selectNumber", function() {
    zm6lm($(this));
  });
  var zm6lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm6lm_addbtn('"+playid+"')");
  };
  var zm6lm_addbtn = function(playid){
    $(".lhczmz62m .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhczmz62m .curr").removeClass('curr');
  }
  //三全中
  $(document).on("click", ".lhclm3qz .selectNumber", function() {
    lm3qz($(this));
  });
  var lm3qz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm3qz_addbtn('"+playid+"')");
  };
  var lm3qz_addbtn=function(playid){
    var numberarray = [];
    $(".lhclm3qz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[15],3).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //三中二
  $(document).on("click", ".lhclm3z2 .selectNumber", function() {
    lm3z2($(this));
  });
  var lm3z2=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm3z2_addbtn('"+playid+"')");
  };
  var lm3z2_addbtn=function(playid){
    var numberarray = [];
    $(".lhclm3z2 .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[16],3).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //二全中
  $(document).on("click", ".lhclm2qz .selectNumber", function() {
    lm2qz($(this));
  });
  var lm2qz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm2qz_addbtn('"+playid+"')");
  };
  var lm2qz_addbtn=function(playid){
    var numberarray = [];
    $(".lhclm2qz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[17],2).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //二中特
  $(document).on("click", ".lhclm2zt .selectNumber", function() {
    lm2zt($(this));
  });
  var lm2zt=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm2zt_addbtn('"+playid+"')");
  };
  var lm2zt_addbtn=function(playid){
    var numberarray = [];
    $(".lhclm2zt .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[18],2).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //特串
  $(document).on("click", ".lhclmtc .selectNumber", function() {
    lmtc($(this));
  });
  var lmtc=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lmtc_addbtn('"+playid+"')");
  };
  var lmtc_addbtn=function(playid){
    var numberarray = [];
    $(".lhclmtc .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[19],2).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //特码半波
  $(document).on("click", ".lhc_bb .selectNumber", function() {
    tmbb($(this));
  });
  var tmbb=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "tmbb_addbtn('"+playid+"')");
  };
  var tmbb_addbtn = function(playid){
    $(".lhc_bb .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhc_bb .curr").removeClass('curr');
  }
  //特肖
  $(document).on("click", ".lhctx .selectNumber", function() {
    sxtx($(this));
  });
  var sxtx=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sxtx_addbtn('"+playid+"')");
  };
  var sxtx_addbtn = function(playid){
    $(".lhctx .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhctx .curr").removeClass('curr');
  }
  //一肖
  $(document).on("click", ".lhc1x .selectNumber", function() {
    sx1x($(this));
  });
  var sx1x=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx1x_addbtn('"+playid+"')");
  };
  var sx1x_addbtn = function(playid){
    $(".lhc1x .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhc1x .curr").removeClass('curr');
  }
  //二肖连
  $(document).on("click", ".lhc2lx .selectNumber", function() {
    sx2xl($(this));
  });
  var sx2xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx2xl_addbtn('"+playid+"')");
  };
  var sx2xl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc2lx .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[23],2).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //三肖连
  $(document).on("click", ".lhc3lx .selectNumber", function() {
    sx3xl($(this));
  });
  var sx3xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx3xl_addbtn('"+playid+"')");
  };
  var sx3xl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc3lx .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[24],3).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //四肖连
  $(document).on("click", ".lhc4lx .selectNumber", function() {
    sx4xl($(this));
  });
  var sx4xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx4xl_addbtn('"+playid+"')");
  };
  var sx4xl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc4lx .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=4){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[25],4).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择四个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //特码头尾
  $(document).on("click", ".lhctmtw .selectNumber", function() {
    wstw($(this));
  });
  var wstw=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('curr');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "wstw_addbtn('"+playid+"')");
  };
  var wstw_addbtn = function(playid){
    $(".lhctmtw .selectNumber.curr").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
      setytotal_money();
    });
    $(".lhctmtw .curr").removeClass('curr');
  }
  //二尾连
  $(document).on("click", ".lhc2lw .selectNumber", function() {
    ws2wl($(this));
  });
  var ws2wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws2wl_addbtn('"+playid+"')");
  };
  var ws2wl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc2lw .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[27],2).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //三尾连
  $(document).on("click", ".lhc3lw .selectNumber", function() {
    ws3wl($(this));
  });
  var ws3wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws3wl_addbtn('"+playid+"')");
  };
  var ws3wl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc3lw .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[28],3).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //四尾连
  $(document).on("click", ".lhc4lw .selectNumber", function() {
    ws4wl($(this));
  });
  var ws4wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws4wl_addbtn('"+playid+"')");
  };
  var ws4wl_addbtn=function(playid){
    var numberarray = [];
    $(".lhc4lw .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=4){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[29],4).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择四个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //五不中
  $(document).on("click", ".lhc5bz .selectNumber", function() {
    bz5bz($(this));
  });
  var bz5bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz5bz_addbtn('"+playid+"')");
  };
  var bz5bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc5bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=5){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[30],5).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择五个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //六不中
  $(document).on("click", ".lhc6bz .selectNumber", function() {
    bz6bz($(this));
  });
  var bz6bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz6bz_addbtn('"+playid+"')");
  };
  var bz6bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc6bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=6){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[31],6).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择六个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //七不中
  $(document).on("click", ".lhc7bz .selectNumber", function() {
    bz7bz($(this));
  });
  var bz7bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz7bz_addbtn('"+playid+"')");
  };
  var bz7bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc7bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=7){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[32],7).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择七个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //八不中
  $(document).on("click", ".lhc8bz .selectNumber", function() {
    bz8bz($(this));
  });
  var bz8bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz8bz_addbtn('"+playid+"')");
  };
  var bz8bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc8bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=8){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[33],8).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择八个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //九不中
  $(document).on("click", ".lhc9bz .selectNumber", function() {
    bz9bz($(this));
  });
  var bz9bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz9bz_addbtn('"+playid+"')");
  };
  var bz9bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc9bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=9){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[34],9).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择九个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };
  //十不中
  $(document).on("click", ".lhc10bz .selectNumber", function() {
    bz10bz($(this));
  });
  var bz10bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("curr");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz10bz_addbtn('"+playid+"')");
  };
  var bz10bz_addbtn=function(playid){
    var numberarray = [];
    $(".lhc10bz .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("curr")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=10){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[35],10).length,1);
      setytotal_money();
    }else{
      Dialog.error('温馨提示','至少选择十个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("curr");
  };

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
      var price = parseInt($Detailnode.find('input.orderprice').val())+1;
      var okmoney = accMul(price,rate.rate);
      var timess = parseInt($Detailnode.find('.yBettingTimess').text())+parseInt(times);
      $Detailnode.find('.yBettingTimess').text(timess);
      $Detailnode.find('.rmb').text(selectRmbStr);
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
  countMoney();
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
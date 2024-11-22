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
  function tabGameInit(){
    var _thisType = $(this).attr('lottery_code_two');
    _thisType = 'tmzx';
    $('.lottery-number').find('span[way-data="tabDoc"]')
    .html('至少选择五个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
  }
  tabGameInit();
  //玩法切换TAB
  $(document).on("click", ".play_select_tit .bet_options", function() {
    $(this).parents('ul').find(".bet_options").removeClass('currs');
    $(this).addClass('currs');
    lottery_code = $(this).attr('lottery_code_two');
    $(".ssc-playmain > div."+lottery_code).show().siblings('div').hide();
    $(".selectNumber").removeClass('ssc-curr-z');
    var menu0 = $('.play_select_tit').find('.curr').find('.wanfa').text();
    var menu2 = $('.play_select_tit').find('.currs').text();
    $('.play_wanfa').find('string').html(menu0+'<i class="iconfont qian"></i>'+menu2);
    $('body').removeClass('niubihh');
    $(".play_select_insert").removeClass("linearTop ");
    $(".play_select_insert").addClass("linearBottom");
    setTimeout(function(){
      $('.alert_bj').hide();
      $('.play_select_insert').hide();
      $(".play_select_insert").removeClass("linearBottom ");
      $(".play_select_insert").addClass("linearTop");
    },200);
    var _thisType = $(this).attr('lottery_code_two');
    switch(_thisType){
      case 'tmzx':
      $('.lottery-number').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码中包含特码，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'tmlm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码最后一位为特码。大于或等于25为特码大，小于或等于24为特码小；奇数为单，偶数为双；特码两个数相加后得数，奇数为合单，偶数为合双，小于等于6为合小，大于6为合大；尾大尾小即看特码个位数值，小于等于4为小，大于4为大；特码为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zmrx':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码在开奖号码前六位中存在，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm1t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第一位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm1lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第一位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zm2t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第二位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm2lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第二位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zm3t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第三位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm3lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第三位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zm4t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第四位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm4lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第四位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zm5t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第五位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm5lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第五位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'zm6t':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从1-49中任选1个或多个号码，每个号码为一注，所选号码与开奖号码第六位相同，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'zm6lm':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('开奖号码第六位，大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；和单和双为两个数相加后得数的单双；尾大尾小即看个位数值，小于等于4为小，大于4为大；为49时为和，不算任何大小单双，但算波色。');
      break;
      case 'lm3qz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择三个号码，每三个号码为一组合，若三个号码都是开奖号码之正码，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'lm3z2':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择三个号码，每三个号码为一组合，若其中至少有两个是开奖号码中的正码，即为中奖。若中两码，叫三中二之中二;若三码全中，叫三中二之中三。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'lm2qz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择两个号码，每二个码号为一组合，二个号码都是开奖码号之正码（不含特码），即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'lm2zt':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择两个号码，每二个号码为一组合，二个号码都是开奖号码（含特码），即为中奖。若两个都是正码，叫二中特之二中。若选号中包含特码，叫二中特之中特。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'lmtc':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择两个号码，每二个号码为一组合，其中一个是正码，一个是特别号码，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'tmbb':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('根据特码对应的特性来区分。分为红蓝绿三个波色，以及号码大于或等于25为大，小于或等于24为小；奇数为单，偶数为双；合单合双为开奖号的十位与个位相加后得数的单双。下注内容与号码特性完全吻合即为中奖。');
      break;
      case 'sxtx':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从十二生肖中任选1个或多个，每个生肖为一注，所选生肖与特码对应的生肖相同，即为中奖。');
      break;
      case 'sx1x':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从十二生肖中任选1个或多个，每个生肖为一注，开奖号码（含特码）中含有投注所属生肖，即为中奖。');
      break;
      case 'sx2xl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择两个生肖，每二个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'sx3xl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择三个生肖，每三个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'sx4xl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择四个生肖，每四个生肖为一组合，开奖号码（含特码）中含有投注所属全部生肖，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'wstw':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择特码头（十位）尾（个位）的数字进行投注，与特码相同，即为中奖');
      break;
      case 'ws2wl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择两个尾数，每两个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'ws3wl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择三个尾数，每三个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'ws4wl':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择四个尾数，每四个尾数为一组合，开奖号码（含特码）中含有投注对应全部尾数，即为中奖。 <span class="mobileMoneyInfo">奖金详情</span>');
      break;
      case 'bz5bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择五个号码，每五个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'bz6bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择六个号码，每六个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'bz7bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择七个号码，每七个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'bz8bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择八个号码，每八个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'bz9bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择九个号码，每九个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
      case 'bz10bz':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('至少选择十个号码，每十个号码为一注，所有号码均未在开奖号码中出现，即为中奖。 赔率 <em style="color:red;">'+rates[_thisType].rate+'</em>元');
      break;
    }
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
      case 'tmzx': //特码直选
      zhushus.length = currNumber[0].length;
      break;
      case 'tmlm': //特码两面
      zhushus.length = currNumber[1].length;
      break;
      case 'zmrx': //正码任选
      zhushus.length = currNumber[2].length;
      break;
      case 'zm1t': //正1特
      zhushus.length = currNumber[3].length;
      break;
      case 'zm1lm': //正1两面
      zhushus.length = currNumber[4].length;
      break;
      case 'zm2t': //正2特
      zhushus.length = currNumber[5].length;
      break;
      case 'zm2lm': //正2两面
      zhushus.length = currNumber[5].length;
      break;
      case 'zm3t': //正3特
      zhushus.length = currNumber[7].length;
      break;
      case 'zm3lm': //正3两面
      zhushus.length = currNumber[8].length;
      break;
      case 'zm4t': //正4特
      zhushus.length = currNumber[9].length;
      break;
      case 'zm4lm': //正4两面
      zhushus.length = currNumber[10].length;
      break;
      case 'zm5t': //正5特
      zhushus.length = currNumber[11].length;
      break;
      case 'zm5lm': //正5两面
      zhushus.length = currNumber[12].length;
      break;
      case 'zm6t': //正6特
      zhushus.length = currNumber[13].length;
      break;
      case 'zm6lm': //正6两面
      zhushus.length = currNumber[14].length;
      break;
      case 'lm3qz': //三全中
      zhushus.length = combine(currNumber[15],3).length;
      break;
      case 'lm3z2': //三中二
      zhushus.length = combine(currNumber[16],3).length;
      break;
      case 'lm2qz': //二全中
      zhushus.length = combine(currNumber[17],2).length;
      break;
      case 'lm2zt': //二中特
      zhushus.length = combine(currNumber[18],2).length;
      break;
      case 'lmtc': //特串
      zhushus.length = combine(currNumber[19],2).length;
      break;
      case 'tmbb': //特码半波
      zhushus.length = currNumber[20].length;
      break;
      case 'sxtx': //特肖
      zhushus.length = currNumber[21].length;
      break;
      case 'sx1x': //一肖
      zhushus.length = currNumber[22].length;
      break;
      case 'sx2xl': //二肖连
      zhushus.length = combine(currNumber[23],2).length;
      break;
      case 'sx3xl': //三肖连
      zhushus.length = combine(currNumber[24],3).length;
      break;
      case 'sx4xl': //四肖连
      zhushus.length = combine(currNumber[25],4).length;
      break;
      case 'wstw': //特码头尾
      zhushus.length = currNumber[26].length;
      break;
      case 'ws2wl': //二尾连
      zhushus.length = combine(currNumber[27],2).length;
      break;
      case 'ws3wl': //三尾连
      zhushus.length = combine(currNumber[28],3).length;
      break;
      case 'ws4wl': //四尾连
      zhushus.length = combine(currNumber[29],4).length;
      break;
      case 'bz5bz': //五不中
      zhushus.length = combine(currNumber[30],5).length;
      break;
      case 'bz6bz': //六不中
      zhushus.length = combine(currNumber[31],6).length;
      break;
      case 'bz7bz': //七不中
      zhushus.length = combine(currNumber[32],7).length;
      break;
      case 'bz8bz': //八不中
      zhushus.length = combine(currNumber[33],8).length;
      break;
      case 'bz9bz': //九不中
      zhushus.length = combine(currNumber[34],9).length;
      break;
      case 'bz10bz': //十不中
      zhushus.length = combine(currNumber[35],10).length;
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
  //特码直选-正码任选-正特玩法
  $(document).on("click", ".tmzx .selectNumber,.zmrx .selectNumber,.zm1t .selectNumber,.zm2t .selectNumber,.zm3t .selectNumber,.zm4t .selectNumber,.zm5t .selectNumber,.zm6t .selectNumber", function() {
    QQ30041321($(this));
  });
  var QQ30041321=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "QQ30041321_addbtn('"+playid+"')");
  };
  var QQ30041321_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>0){
      addtotouzhu(playid,numberarray.join(","),numberarray.length,1);
    }else{
      hsycmserror('请选择要投注的号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //特码两面
  $(document).on("click", ".tmlm .selectNumber", function() {
    tmlm($(this));
  });
  var tmlm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "tmlm_addbtn('"+playid+"')");
  };
  var tmlm_addbtn = function(playid){
    $(".tmlm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".tmlm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正1两面
  $(document).on("click", ".zm1lm .selectNumber", function() {
    zm1lm($(this));
  });
  var zm1lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm1lm_addbtn('"+playid+"')");
  };
  var zm1lm_addbtn = function(playid){
    $(".zm1lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm1lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正2两面
  $(document).on("click", ".zm2lm .selectNumber", function() {
    zm2lm($(this));
  });
  var zm2lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm2lm_addbtn('"+playid+"')");
  };
  var zm2lm_addbtn = function(playid){
    $(".zm2lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm2lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正3两面
  $(document).on("click", ".zm3lm .selectNumber", function() {
    zm3lm($(this));
  });
  var zm3lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm3lm_addbtn('"+playid+"')");
  };
  var zm3lm_addbtn = function(playid){
    $(".zm3lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm3lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正4两面
  $(document).on("click", ".zm4lm .selectNumber", function() {
    zm4lm($(this));
  });
  var zm4lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm4lm_addbtn('"+playid+"')");
  };
  var zm4lm_addbtn = function(playid){
    $(".zm4lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm4lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正5两面
  $(document).on("click", ".zm5lm .selectNumber", function() {
    zm5lm($(this));
  });
  var zm5lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm5lm_addbtn('"+playid+"')");
  };
  var zm5lm_addbtn = function(playid){
    $(".zm5lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm5lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //正6两面
  $(document).on("click", ".zm6lm .selectNumber", function() {
    zm6lm($(this));
  });
  var zm6lm=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "zm6lm_addbtn('"+playid+"')");
  };
  var zm6lm_addbtn = function(playid){
    $(".zm6lm .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".zm6lm .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //三全中
  $(document).on("click", ".lm3qz .selectNumber", function() {
    lm3qz($(this));
  });
  var lm3qz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm3qz_addbtn('"+playid+"')");
  };
  var lm3qz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[15],3).length,1);
    }else{
      hsycmserror('至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //三中二
  $(document).on("click", ".lm3z2 .selectNumber", function() {
    lm3z2($(this));
  });
  var lm3z2=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm3z2_addbtn('"+playid+"')");
  };
  var lm3z2_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[16],3).length,1);
    }else{
      hsycmserror('至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //二全中
  $(document).on("click", ".lm2qz .selectNumber", function() {
    lm2qz($(this));
  });
  var lm2qz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm2qz_addbtn('"+playid+"')");
  };
  var lm2qz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[17],2).length,1);
    }else{
      hsycmserror('至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //二中特
  $(document).on("click", ".lm2zt .selectNumber", function() {
    lm2zt($(this));
  });
  var lm2zt=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lm2zt_addbtn('"+playid+"')");
  };
  var lm2zt_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[18],2).length,1);
    }else{
      hsycmserror('至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //特串
  $(document).on("click", ".lmtc .selectNumber", function() {
    lmtc($(this));
  });
  var lmtc=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "lmtc_addbtn('"+playid+"')");
  };
  var lmtc_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[19],2).length,1);
    }else{
      hsycmserror('至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //特码半波
  $(document).on("click", ".tmbb .selectNumber", function() {
    tmbb($(this));
  });
  var tmbb=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "tmbb_addbtn('"+playid+"')");
  };
  var tmbb_addbtn = function(playid){
    $(".tmbb .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".tmbb .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //特肖
  $(document).on("click", ".sxtx .selectNumber", function() {
    sxtx($(this));
  });
  var sxtx=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sxtx_addbtn('"+playid+"')");
  };
  var sxtx_addbtn = function(playid){
    $(".sxtx .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".sxtx .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //一肖
  $(document).on("click", ".sx1x .selectNumber", function() {
    sx1x($(this));
  });
  var sx1x=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx1x_addbtn('"+playid+"')");
  };
  var sx1x_addbtn = function(playid){
    $(".sx1x .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".sx1x .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //二肖连
  $(document).on("click", ".sx2xl .selectNumber", function() {
    sx2xl($(this));
  });
  var sx2xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx2xl_addbtn('"+playid+"')");
  };
  var sx2xl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[23],2).length,1);
    }else{
      hsycmserror('至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //三肖连
  $(document).on("click", ".sx3xl .selectNumber", function() {
    sx3xl($(this));
  });
  var sx3xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx3xl_addbtn('"+playid+"')");
  };
  var sx3xl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[24],3).length,1);
    }else{
      hsycmserror('至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //四肖连
  $(document).on("click", ".sx4xl .selectNumber", function() {
    sx4xl($(this));
  });
  var sx4xl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "sx4xl_addbtn('"+playid+"')");
  };
  var sx4xl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=4){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[25],4).length,1);
    }else{
      hsycmserror('至少选择四个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //特码头尾
  $(document).on("click", ".wstw .selectNumber", function() {
    wstw($(this));
  });
  var wstw=function(obj){
    if(rates==null){
      return false;
    }
    var playid = obj.attr('playid');
    obj.toggleClass('ssc-curr-z');
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "wstw_addbtn('"+playid+"')");
  };
  var wstw_addbtn = function(playid){
    $(".wstw .selectNumber.ssc-curr-z").each(function(){
      var obj = $(this);
      var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
      addtotouzhu(playid,number,1);
    });
    $(".wstw .ssc-curr-z").removeClass('ssc-curr-z');
  }
  //二尾连
  $(document).on("click", ".ws2wl .selectNumber", function() {
    ws2wl($(this));
  });
  var ws2wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws2wl_addbtn('"+playid+"')");
  };
  var ws2wl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=2){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[27],2).length,1);
    }else{
      hsycmserror('至少选择二个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //三尾连
  $(document).on("click", ".ws3wl .selectNumber", function() {
    ws3wl($(this));
  });
  var ws3wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws3wl_addbtn('"+playid+"')");
  };
  var ws3wl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=3){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[28],3).length,1);
    }else{
      hsycmserror('至少选择三个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //四尾连
  $(document).on("click", ".ws4wl .selectNumber", function() {
    ws4wl($(this));
  });
  var ws4wl=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "ws4wl_addbtn('"+playid+"')");
  };
  var ws4wl_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=4){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[29],4).length,1);
    }else{
      hsycmserror('至少选择四个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //五不中
  $(document).on("click", ".bz5bz .selectNumber", function() {
    bz5bz($(this));
  });
  var bz5bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz5bz_addbtn('"+playid+"')");
  };
  var bz5bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=5){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[30],5).length,1);
    }else{
      hsycmserror('至少选择五个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //六不中
  $(document).on("click", ".bz6bz .selectNumber", function() {
    bz6bz($(this));
  });
  var bz6bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz6bz_addbtn('"+playid+"')");
  };
  var bz6bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=6){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[31],6).length,1);
    }else{
      hsycmserror('至少选择六个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //七不中
  $(document).on("click", ".bz7bz .selectNumber", function() {
    bz7bz($(this));
  });
  var bz7bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz7bz_addbtn('"+playid+"')");
  };
  var bz7bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=7){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[32],7).length,1);
    }else{
      hsycmserror('至少选择七个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //八不中
  $(document).on("click", ".bz8bz .selectNumber", function() {
    bz8bz($(this));
  });
  var bz8bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz8bz_addbtn('"+playid+"')");
  };
  var bz8bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=8){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[33],8).length,1);
    }else{
      hsycmserror('至少选择八个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //九不中
  $(document).on("click", ".bz9bz .selectNumber", function() {
    bz9bz($(this));
  });
  var bz9bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz9bz_addbtn('"+playid+"')");
  };
  var bz9bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=9){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[34],9).length,1);
    }else{
      hsycmserror('至少选择九个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };
  //十不中
  $(document).on("click", ".bz10bz .selectNumber", function() {
    bz10bz($(this));
  });
  var bz10bz=function(obj){
    if(rates==null){
      return false;
    }
    var text = obj.text(),number = obj.attr('data-number'),playid = obj.attr('playid');
    obj.toggleClass("ssc-curr-z");
    currNumber = currList();
    countFun()
    countMoney();
    $(".addtobetbtn").attr("onclick", "bz10bz_addbtn('"+playid+"')");
  };
  var bz10bz_addbtn=function(playid){
    var numberarray = [];
    $("div."+playid+ " .selectNumber").each(function(){
      var $node = $(this);
      if($node.hasClass("ssc-curr-z")){
        var number = $node.attr('data-number');
        numberarray.push(number);
      }
    });
    if(numberarray.length>=10){
      addtotouzhu(playid,numberarray.join(","),combine(currNumber[35],10).length,1);
    }else{
      hsycmserror('至少选择十个号码');
    };
    $("div."+playid+ " .selectNumber").removeClass("ssc-curr-z");
  };


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




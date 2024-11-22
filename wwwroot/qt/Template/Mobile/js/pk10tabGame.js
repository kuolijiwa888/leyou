$(function () {
  var inputVal = ''; //用户填写的倍数
  var zhushus = []; //注数数组;
  var currNumber = [] //存储每组位数的数组
  var minMoney = 2; //每注金额
  var lastMoney = 0.00;//计算出的金额
  var AllZhushu = 0;//方案注数
  var AllMoney = 0;//方案注数金额
  var danshiNumberL = 0;//单式号码长度
  var yesArr = [];//单式正确的数组
  var orderList= [];//投注数组
  var yrates = k3lotteryrates.rates;

  var _thisPlayid = '';
  var wxGetMaxMoney = { //每种玩法的可中金额
    wx_fs: 192000.00,
    wx_zx120: 1600.00,
    wx_zx60: 3200.00,
    wx_zx30: 6400.00,
    wx_zx20: 9600.00,
    wx_zx10: 19200.00,
    wx_zx5: 38400.00,
    wx_1mbdw: 4.68,
    wx_2mbdw: 13.08,
    wx_3mbdw: 44.13,
    wx_yffs: 4.68,
    wx_hscs: 23.56,
    wx_sxbx: 224.29,
    wx_sjfc: 4173.91,
  }

  function tabGameInit(){
    _thisPlayid = 'bjpk10dwd';
    rates = yrates[_thisPlayid];
    gameSwitch($('.bet_filter_box'),bjpks_dwd_title,bjpks_dwd_arr);
    $('.play_select_prompt').find('span[way-data="tabDoc"]')
    .html('从冠、亚、季、四、五、六、七、八、九、十任意位置上任意选择一个或一个以上号码，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
    gameNumber(bjpks_dwd,10,1);
  }
  tabGameInit();
  

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
  $('.selectMultipInput').on('change keyup',function (){
    addAndSubtract();
    countMoney();
  })

  //人民币单位换算
  $('.selectMultipleCon').on('change',function (){
    countMoney();
  })
  
  $(document).on('click','.random5',function () {
    for( var aa = 0; aa < 5; aa++){
      randomTouzhu();
    } 
  })
  
  $(document).on('click','.random1',function () {
    for( var aa = 0; aa < 1; aa++){
      randomTouzhu();
    } 
  })

  function getRandom(arand,sumber) {
    var bool = true;
    var rand = Math.round(Math.random() * (sumber - 1) + 1);
    if(arand instanceof Array){
      for(var i = 0; i < arand.length; i++){
        // if(isNaN(rand)){
        //   console.log(arand,sumber);
        //   return;
        // }
        if(rand == parseInt(arand[i])) {
          bool = false;
          return getRandom(arand,sumber);
        }
      }
    }else{
      if (rand == parseInt(arand)) {
        bool = false;
        return getRandom(arand,sumber);
      }
    }
    
    
    if(bool){
      return rand;
    }
    
  }

  function renx(number) {
    var ceshi = $('.g_Number_Section').find('.selectNmuverBox');
    var randomsumber = 0;
    var arr = [];
    
    for( var aa = 0; aa < number; aa++){

      randomsumber = getRandom(arr,9);
      var randomsumber2 = Math.round(Math.random() * (9 - 1) + 1);
      ceshi.eq(randomsumber).find('a').eq(randomsumber2).addClass('curr');
      
    }
    
  }

  function caiqian() {
    var ceshi = $('.g_Number_Section').find('.selectNmuverBox');
    var randomsumber = 0;
    var arr = [];
    
    for( var i = 0; i < ceshi.length; i++){
      
      randomsumber = getRandom(arr,9);
      
      ceshi.eq(i).find('a').eq(randomsumber).addClass('curr');

      ceshi.eq(i).find('.curr').each(function () {
        arr.push(parseInt($(this).text()) - 1);
      })

    }
  }

  function caiqianDS(number) {
    var str = '';
    var arr = [];
    var arrs = ['01','02','03','04','05','06','07','08','09','10'];

    for( var a = 0; a < number; a++){
      randomsumber = getRandom(arr,9);
      arr.push(randomsumber);
      str += arrs[randomsumber];
      console.log(arrs[randomsumber],str);
    }
    
    $('#text').val(str);
  }

  function unique(arr){
    var result = [];
    for(var i=0;i<arr.length;i++){
      if(result.indexOf(arr[i])==-1){
        result.push(arr[i])
      }
    }
    return result;
  }

  function randomTouzhu() {
    var ceshi = $('.g_Number_Section');
    var randomsumber = 0;
    ceshi.find('.selectNumber').removeClass('curr');
    $('#text').val('');

    if(_thisPlayid == 'bjpk10dwd'){
      renx(1);
    }else if(_thisPlayid == 'bjpk10qian5' || _thisPlayid == 'bjpk10qian4' || _thisPlayid == 'bjpk10qian3' || _thisPlayid == 'bjpk10qian2'){
      caiqian();
    }else if(_thisPlayid == 'bjpk10qian5ds'){
      caiqianDS(5);
    }else if(_thisPlayid == 'bjpk10qian4ds'){
      caiqianDS(4);
    }else if(_thisPlayid == 'bjpk10qian3ds'){
      caiqianDS(3);
    }else if(_thisPlayid == 'bjpk10qian2ds'){
      caiqianDS(2);
    }else if(_thisPlayid == 'bjpk10qian1' ){
      randomsumber = Math.round(Math.random() * (9 - 1) + 1);
      ceshi.find('.selectNumber').eq(randomsumber).addClass('curr');
    }
    
    $('#orderlist_clear').show();
    if($('#text').length > 0){
      var textobj = document.getElementById('text');
      chkPrice(textobj);
      chkLast(textobj);
      var text = $('#text').val();
      checkNumber(text,danshiNumberL);
      yesArr = unique1(yesArr);
      currNumber = yesArr;
      zhushus = yesArr;
      countMoney();
      if(zhushus.length > 0){
        $('.kuaijie').css({"background":"#434354"});
        $('.hemai').css({"background":"#434354"});
        var Numbers = '';
        for(var i = 0; i < currNumber.length; i++){
          for(var j = 0; j < currNumber[i].length; j++){
            if((currNumber[i].length - 1) != j){
              Numbers += currNumber[i][j] +　' ';
            }else{
              Numbers += currNumber[i][j]
            }
          }
          if((currNumber.length - 1) != i){
            Numbers = Numbers + ',';
          }
        }
        $('#selectMultipleB_nId').text(Numbers);
      }else{
        $('.zhushu').text(0);
        $('.selectMultipleOldMoney').text(0.00);
        $('.kuaijie').css({"background":"#7b7b87"});
        $('.hemai').css({"background":"#7b7b87"});
      }
    }else{
      
      currNumber = currList();
      countFun()
      countMoney();
      if(zhushus.length > 0){
        $('.kuaijie').css({"background":"#434354"});
        $('.hemai').css({"background":"#434354"});
        var Numbers = '';
        for(var i = 0; i < currNumber.length; i++){
          for(var j = 0; j < currNumber[i].length; j++){
            if((currNumber[i].length - 1) != j){
              Numbers += currNumber[i][j] +　' ';
            }else{
              Numbers += currNumber[i][j]
            }
          }
          if((currNumber.length - 1) != i){
            Numbers = Numbers + ',';
          }
        }
        $('#selectMultipleB_nId').text(Numbers);
      }else{
        $('.kuaijie').css({"background":"#7b7b87"});
        $('.hemai').css({"background":"#7b7b87"});
      }
    }
    $('.addtobetbtn').click();
  }

  //号码点击
  $('.g_Number_Section').on('click','.selectNumbers a',function (){
    if(_thisPlayid == 'q3_zxbd' || _thisPlayid == 'z3_zxbd' || _thisPlayid == 'h3_zxbd' ||  _thisPlayid == 'q2_zsxbd' || _thisPlayid == 'h2_zsxbd'){
      $(this).addClass('curr').siblings().removeClass('curr');
    }else{
      if($(this).hasClass('curr')){
        $(this).removeClass('curr');
      }else{  
        $(this).addClass('curr')
      }
    }
    currNumber = currList();
    countFun()
    countMoney();

    if(zhushus.length > 0){
      $('.kuaijie').css({"background":"#434354"});
      $('.hemai').css({"background":"#434354"});
      var Numbers = '';
      for(var i = 0; i < currNumber.length; i++){
        for(var j = 0; j < currNumber[i].length; j++){
          if(typeof currNumber[i] == 'string'){
            currNumber[i] = currNumber[i].split(' ')
          }
          if((currNumber[i].length - 1) != j){
            Numbers += currNumber[i][j] +　' ';
          }else{
            Numbers += currNumber[i][j]
          }
        }
        
        if(currNumber[i].length > 0){
          if((currNumber.length - 1) != i){
            Numbers = Numbers + ',';
          }
        } 
        
      }
      console.log(currNumber)
      $('#selectMultipleB_nId').text(Numbers);
    }else{
      $('.kuaijie').css({"background":"#7b7b87"});
      $('.hemai').css({"background":"#7b7b87"});
    }
  })

  function countFun(){
    switch(_thisPlayid){
      case 'bjpk10dwd': 
      zhushus.length = $('.g_Number_Section').find('.curr').length;
      break;
      case 'bjpk10qian3':
      zhushus.length = cqsanCount();
      break;
      case 'bjpk10qian5':
      zhushus.length = cqwCount();
      break;
      case 'bjpk10qian4':
      zhushus.length = cqsCount();
      break;
      case 'bjpk10qian2':
      zhushus.length = cqeCount();
      break;
      case 'bjpk10qian1':
      zhushus.length = $('.g_Number_Section').find('.curr').length;
      break;
      case 'pk10gyhz':
      zhushus.length = $('.g_Number_Section').find('.curr').length;
      break;
      case 'pk10lhd':
      zhushus.length = $('.g_Number_Section').find('.curr').length;
      break;
      
      case 'pk10dxds':
      zhushus.length = $('.g_Number_Section').find('.curr').length;
      break;
    }
    //console.log(_thisPlayid,zhushus.length,currNumber);
  }

  var ballF = 0;
  var ballS = 0;
  var ballT = 0;
  var ballSi = 0;
  var ballWu = 0;
  var selected_f_ball_array = [];
  var selected_s_ball_array = [];
  var selected_t_ball_array = [];
  var selected_si_ball_array = [];
  var selected_wu_ball_array = [];
  function combineArrUpdata(){
    ballF = 0;
    ballS = 0;
    ballT = 0;
    selected_f_ball_array = [];
    selected_s_ball_array = [];
    selected_t_ball_array = [];
    for(var i = 0; i < currNumber.length; i++){
      for(var j = 0; j < currNumber[i].length; j++){
        if(i == 0){
          selected_f_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else if(i == 1){
          selected_s_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else{
          selected_t_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }
      }
      if(i == 0){
        ballF = currNumber[i].length;
      }else if(i == 1){
        ballS = currNumber[i].length;
      }else{
        ballT = currNumber[i].length;
      }
    }
  }

  function combineArrUpdataWu(){
    ballF = 0;
    ballS = 0;
    ballT = 0;
    ballSi = 0;
    ballWu = 0;
    selected_f_ball_array = [];
    selected_s_ball_array = [];
    selected_t_ball_array = [];
    selected_si_ball_array = [];
    selected_wu_ball_array = [];
    for(var i = 0; i < currNumber.length; i++){
      for(var j = 0; j < currNumber[i].length; j++){
        if(i == 0){
          selected_f_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else if(i == 1){
          selected_s_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else if(i == 2){
          selected_t_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else if(i == 3){
          selected_si_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }else{
          selected_wu_ball_array[parseInt(currNumber[i][j])] = currNumber[i][j]
        }
      }
      if(i == 0){
        ballF = currNumber[i].length;
      }else if(i == 1){
        ballS = currNumber[i].length;
      }else if(i == 2){
        ballT = currNumber[i].length;
      }else if(i == 3){
        ballSi = currNumber[i].length;
      }else{
        ballWu = currNumber[i].length;
      }
    }
  }

  function cqeCount(){
    combineArrUpdata();
    var itemcount = 0;
    if(ballF>=1&&ballS>=1){
      
      var opFlag=false;
      
      for(var i=0;i<selected_f_ball_array.length;i++){
        
        var current_f_ball=selected_f_ball_array[i];
        
        if(current_f_ball!=undefined&&current_f_ball!=""){
          
          for(var s=0;s<selected_s_ball_array.length;s++){
            
            var current_s_ball=selected_s_ball_array[s];
            
            if(current_s_ball!=undefined&&current_s_ball!=""){
              
              if(eval(current_f_ball)!=eval(current_s_ball)){                
                itemcount=itemcount+1;  
              }
            }
          }
        }
      }
    }

    return itemcount;
  }

  function cqsCount(){
    combineArrUpdataWu();
    var itemcount = 0;
    if(ballF>=1&&ballS>=1&&ballT>=1&&ballSi>=1){
      
      var opFlag=false;
      
      for(var i=0;i<selected_f_ball_array.length;i++){
        
        var current_f_ball=selected_f_ball_array[i];
        
        if(current_f_ball!=undefined&&current_f_ball!=""){
          
          for(var s=0;s<selected_s_ball_array.length;s++){
            
            var current_s_ball=selected_s_ball_array[s];
            
            if(current_s_ball!=undefined&&current_s_ball!=""){
              
              if(eval(current_f_ball)!=eval(current_s_ball)){
                
                for(var t=0;t<selected_t_ball_array.length;t++){
                  
                  var current_t_ball=selected_t_ball_array[t];

                  if(current_t_ball!=undefined&&current_t_ball!=""){
                    
                    if(eval(current_t_ball)!=eval(current_s_ball)&&eval(current_t_ball)!=eval(current_f_ball)){

                      for(var si = 0; si < selected_si_ball_array.length; si++){

                        var current_si_ball = selected_si_ball_array[si];

                        if(current_si_ball!=undefined&&current_si_ball!=''){

                          if(eval(current_si_ball)!=eval(current_s_ball)&&eval(current_si_ball)!=eval(current_f_ball)&&eval(current_si_ball)!=eval(current_t_ball)){

                            itemcount=itemcount+1;
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            
          }
        }
      }
    }
    return itemcount;
  }

  function cqwCount(){
    combineArrUpdataWu();
    var itemcount = 0;
    if(ballF>=1&&ballS>=1&&ballT>=1&&ballSi>=1&&ballWu>=1){
      
      var opFlag=false;
      
      for(var i=0;i<selected_f_ball_array.length;i++){
        
        var current_f_ball=selected_f_ball_array[i];
        
        if(current_f_ball!=undefined&&current_f_ball!=""){
          
          for(var s=0;s<selected_s_ball_array.length;s++){
            
            var current_s_ball=selected_s_ball_array[s];
            
            if(current_s_ball!=undefined&&current_s_ball!=""){
              
              if(eval(current_f_ball)!=eval(current_s_ball)){
                
                for(var t=0;t<selected_t_ball_array.length;t++){
                  
                  var current_t_ball=selected_t_ball_array[t];

                  if(current_t_ball!=undefined&&current_t_ball!=""){
                    
                    if(eval(current_t_ball)!=eval(current_s_ball)&&eval(current_t_ball)!=eval(current_f_ball)){

                      for(var si = 0; si < selected_si_ball_array.length; si++){

                        var current_si_ball = selected_si_ball_array[si];

                        if(current_si_ball!=undefined&&current_si_ball!=''){

                          if(eval(current_si_ball)!=eval(current_s_ball)&&eval(current_si_ball)!=eval(current_f_ball)&&eval(current_si_ball)!=eval(current_t_ball)){

                            for(var wu = 0; wu < selected_wu_ball_array.length; wu++){

                              var current_wu_ball = selected_wu_ball_array[wu];

                              if(current_wu_ball!=undefined&&current_wu_ball!=''){

                                if(eval(current_wu_ball)!=eval(current_s_ball)&&eval(current_wu_ball)!=eval(current_f_ball)&&eval(current_wu_ball)!=eval(current_t_ball)&&eval(current_wu_ball)!=eval(current_si_ball)){

                                  itemcount=itemcount+1;
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            
          }
        }
      }
    }
    return itemcount;
  }

  function cqsanCount(){
    combineArrUpdata();
    var itemcount = 0;
    if(ballF>=1&&ballS>=1&&ballT>=1){
      
      var opFlag=false;
      
      for(var i=0;i<selected_f_ball_array.length;i++){
        
        var current_f_ball=selected_f_ball_array[i];
        
        if(current_f_ball!=undefined&&current_f_ball!=""){
          
          for(var s=0;s<selected_s_ball_array.length;s++){
            
            var current_s_ball=selected_s_ball_array[s];
            
            if(current_s_ball!=undefined&&current_s_ball!=""){
              console.log(eval(current_f_ball),eval(current_s_ball));
              if(eval(current_f_ball)!=eval(current_s_ball)){
                
                for(var t=0;t<selected_t_ball_array.length;t++){
                  
                  var current_t_ball=selected_t_ball_array[t];

                  if(current_t_ball!=undefined&&current_t_ball!=""){
                    
                    if(eval(current_t_ball)!=eval(current_s_ball)&&eval(current_t_ball)!=eval(current_f_ball)){
                      
                      itemcount=itemcount+1;
                      
                    }
                  }
                }
              }
            }
            
          }
        }
      }
    }

    return itemcount;
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
      $('#orderlist_clear').hide();
      $('#lanIconNumbere').css('display','none');
      $('.kuaijie').css({"background":"#7b7b87"});
      $('.hemai').css({"background":"#7b7b87"});
    }
    console.log(orderList);
    countAll();
  })

  //少于一注
  $('.yBettingLists').on('click','.numberInfo',function(){
    var text = $(this).siblings('.number').find('em').text();
    hsycmserror(text);
  })

  //清空单号
  $('#orderlist_clear').on('click',function (){
    $('.yBettingLists').html('');
    $('.kuaijie').css({"background":"#7b7b87"});
    $('.hemai').css({"background":"#7b7b87"});
    $('#lanIconNumbere').text('0').css('display','none');
    $('#orderlist_clear').hide();
    orderList = [];
    countAll();
  })

  //单式textarea框
  $('.g_Number_Section').on('change keyup','#text',function (){
    chkPrice(this);
    chkLast(this);
    var text = $('#text').val();
    checkNumber(text,danshiNumberL);
    yesArr = unique1(yesArr);
    currNumber = yesArr;
    zhushus = yesArr;
    countMoney();
    if(zhushus.length > 0){
      $('.kuaijie').css({"background":"#434354"});
      $('.hemai').css({"background":"#434354"});
      var Numbers = '';
      for(var i = 0; i < currNumber.length; i++){
        for(var j = 0; j < currNumber[i].length; j++){
          if((currNumber[i].length - 1) != j){
            Numbers += currNumber[i][j] +　' ';
          }else{
            Numbers += currNumber[i][j]
          }
        }
        if((currNumber.length - 1) != i){
          Numbers = Numbers + ',';
        }
      }
      $('#selectMultipleB_nId').text(Numbers);
    }else{
      $('.zhushu').text(0);
      $('.selectMultipleOldMoney').text(0.00);
      $('.kuaijie').css({"background":"#7b7b87"});
      $('.hemai').css({"background":"#7b7b87"});
    }
  })

  //去重数组
  function unique1(args){
    var str1 = [];
    for(var i=0;i<args.length;i++){
      if(str1.indexOf(args[i])<0){
        str1.push(args[i])
      }
    }
    return str1;
  }

  //删除错误项
  $('.g_Number_Section').on('click','.remove_btn',function (){
    var text = $('#text').val();
    checkNumber(text,danshiNumberL,'remove');
  })

  //检查格式是否正确
  $('.g_Number_Section').on('click','.test_istrue',function (){
    var text = $('#text').val();
    checkNumber(text,danshiNumberL,'test');
  })

  //清空文本
  $('.g_Number_Section').on('click','.empty_text',function (){
    $('#text').val('');
    currNumber = [];
    zhushus = []; 
    countMoney();
    $('.zhushu').text(0);
    $('.selectMultipleOldMoney').text(0.00);
    $('.kuaijie').css({"background":"#7b7b87"});
    $('.hemai').css({"background":"#7b7b87"});
  })

  //玩法内容切换
  $(document).on('click','.bet_options',function (){
    $('.zhushu').text(0);
    $('.selectMultipleOldMoney').text(0.00);
    $('.kuaijie').css({"background":"#7b7b87"});
    $('.hemai').css({"background":"#7b7b87"});
    var _thisType = $(this).attr('lottery_code_two');
    $('#bet_filter').find('.bet_options').removeClass('curr');
    $(this).addClass('curr');
    $('.g_Number_Section').html('');
    currNumber = [];
    zhushus = []; 
    countMoney();
    _thisPlayid = _thisType;
    rates = yrates[_thisPlayid];

    switch(_thisType){
      case 'bjpk10dwd':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从冠、亚、季、四、五、六、七、八、九、十任意位置上任意选择一个或一个以上号码，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_dwd,10,1);
      break;
      case 'bjpk10qian3ds':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('手动输入号码，输入3个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      danshiNumberL = 2;
      danshiGame();
      break;
      case 'bjpk10qian3':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金  <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqsan,10,1);
      break;
      case 'bjpk10qian5':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqw,10,1);
      break;
      case 'bjpk10qian5ds':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('手动输入号码，输入5个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      danshiNumberL = 2;
      danshiGame();
      break;
      case 'bjpk10qian4':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqs,10,1);
      break;
      case 'bjpk10qian4ds':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('手动输入号码，输入4个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      danshiNumberL = 2;
      danshiGame();
      break;
      case 'bjpk10qian2':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqe,10,1);
      break;
      case 'bjpk10qian2ds':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('手动输入号码，输入2个号码组成一注，奖金  <em style="color:red;">'+rates.maxjj+'</em>元');
      danshiNumberL = 2;
      danshiGame();
      break;
      case 'bjpk10qian1':
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择1个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqgj,10,1);
      break;
      case 'pk10gyhz':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box'),['冠亚和'],[{'pk10gyhz':'和值'}]);
      _thisPlayid = 'pk10gyhz';
      rates = yrates[_thisPlayid];
      var maxjjval = [];
      for (var i = 3; i < 20; i++) {
        maxjjval.push(yrates['pk10gyhz'+i].maxjj);
      }
      maxjjval = maxjjval.join('|');
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择1个号码组成一注，奖金 <em style="color:red;">'+maxjjval+'</em>元');
      $(".gameBet_left").css('width','350px');
      gameNumber(['和值'],19,3);
      break;
    }
    var menu0 = $('.play_select_tit').find('.curr').find('.wanfa').text();
    var menu2 = $('#bet_filter').find('.curr').text();
    $('.gameType').find('string').html(menu0+'<i class="iconfont qian"></i>'+menu2);
    
    $('body').removeClass('niubihh');
    $(".play_select_insert").removeClass("linearTop ");
    $(".play_select_insert").addClass("linearBottom");
    setTimeout(function(){
      $('.alert_bj').hide();
      $('.play_select_insert').hide();
      $(".play_select_insert").removeClass("linearBottom ");
      $(".play_select_insert").addClass("linearTop");
    },200)
    
  })
  
  function gameNumberZxbd(arr,type){
    var box = $('.g_Number_Section');
    var dxdsObj = {
      '0': '大',
      '1': '小',
      '2': '单',
      '3': '双'
    }
    for(var i = 0;i<arr.length;i++){
      var boxList = $('<div class="selectNmuverBox"></div>');
      if(type == 'dxds'){
        var boxNumber = $('<div class="selectNumbers" style="padding: 0 148px;"></div>');
      }else{
        var boxNumber = $('<div class="selectNumbers"></div>');
      }
      
      boxList.append('<span class="numberTitle">'+arr[i]+'</span>');
      boxList.append(boxNumber);
      if(type == 'dxds'){
        for(var j in dxdsObj){
          boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">'+dxdsObj[j]+'</a>');
        }
      }else{
        for(var j = 0;j<=9;j++){
          boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">'+j+'</a>');
        }
      }
      
      box.append(boxList);
    }
  }

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

  //确认选号，添加到投注区
  $('.addtobetbtn').on('click',function (){
    var yBetting = $('.yBettingList');
    var menu0 = $('.play_select_tit').find('.curr').find('.wanfa').text();
    var menu1 = $('#bet_filter').find('.curr').parent().siblings('.title').text();
    var menu2 = $('#bet_filter').find('.curr').text();
    var times = $('.selectMultipInput').val();
    var selectRmb = $('.selectMultipleCon').val();
    var selectRmbStr = $('.selectMultipleCon').find('option:selected').text();
    var Numbers = '';
    var winningMoney = $('.play_select_prompt').find('span[way-data="tabDoc"] em').text();
    var winningMoneys = times * winningMoney * selectRmb;
    var bool = true;
    var trano= generateMixed(20);
    console.log(_thisPlayid)
    var rate = yrates[_thisPlayid];

    if(zhushus.length >= 1){
      addNumberLanAn();

      for(var i = 0; i < currNumber.length; i++){
        for(var j = 0; j < currNumber[i].length; j++){
          if(typeof currNumber[i] == 'string'){
            currNumber[i] = currNumber[i].split(' ')
          }
          if((currNumber[i].length - 1) != j){
            Numbers += currNumber[i][j] +　' ';
          }else{
            Numbers += currNumber[i][j]
          }
        }
        
        if((currNumber.length - 1) != i){ 
          Numbers = Numbers + ',';
        }
        
      }
      
      yBetting.each(function (i) {
        var gameNumber = $(this).find('.number em').text();
        var gameNumberType = $(this).find('.number .yBettingType').text();
        var _thisType = '['+menu0+','+menu1+','+menu2+']';
        var _thisRmb = $(this).find('.rmb').text();
        console.log(gameNumberType == _thisType,gameNumberType, _thisType)
        if(gameNumber == Numbers && _thisRmb == selectRmbStr && gameNumberType == _thisType){
          bool = false;
          var _thisTimes =  parseInt($(this).find('.yBettingTimess').text()) + parseInt(times);
          winningMoneys = _thisTimes * winningMoney * selectRmb;
          winningMoneys = winningMoneys.toFixed(3);
          $(this).find('.yBettingTimess').text(_thisTimes);
          $(this).find('.maxMoneyNumber').text(winningMoneys+'元');
          $(this).find('#betting_money').text(zhushus.length * minMoney * _thisTimes *  selectRmb);
          orderList[i].beishu = _thisTimes;
          orderList[i].price = zhushus.length * minMoney * _thisTimes *  selectRmb;
        }
      })

      if(bool){
        if(rate.playid == 'pk10gyhz'){
          var Numbersh = Numbers.replace(/,/g,'|');
          Numbersh = Numbersh.replace(/\s/g,',');
          Numbersh = Numbersh.split(',');
          var rate_val = rate.maxjj.split("|");
          for (var i in Numbersh) {
            var rate_val = yrates['pk10gyhz'+Number(Numbersh[i])].maxjj
            var arr = {
              'trano': trano,
              'playtitle': rate.title,
              'playid': rate.playid,
              'number': Numbersh[i],
              'zhushu': 1,
              'price': lastMoney/Numbersh.length,
              'minxf': rate.minxf,
              'totalzs': 1,
              'maxjj': rate_val,
              'minjj': rate_val,
              'maxzs': rate.maxzs,
              'rate': rate_val,
              'beishu': parseInt(times),
              'yjf' : selectRmb
            }
            orderList.push(arr);
          }
        }else{
          var Numbersh = Numbers.replace(/,/g,'|');
          Numbersh = Numbersh.replace(/\s/g,',');
          var arr = {
            'trano': trano,
            'playtitle': rate.title,
            'playid': rate.playid,
            'number': Numbersh,
            'zhushu': zhushus.length,
            'price': lastMoney,
            'minxf': rate.minxf,
            'totalzs': rate.totalzs,
            'maxjj': rate.maxjj,
            'minjj': rate.minjj,
            'maxzs': rate.maxzs,
            'rate': rate.maxjj,
            'beishu': parseInt(times),
            'yjf' : selectRmb
          }
          orderList.push(arr);
        }
        
        
        var html = '<div class="yBettingList gamezhui" id="'+trano+'">'+
        '<div class="gamezhui-1">'+
        '<span><i style="color: #ae995c;"class="iconfont">&#xe606; </i>'+menu0+','+menu1+','+menu2+'</span><a class="sc"><i class="iconfont">&#xe630;</i></a>'+
        '</div>'+
        '<div class="gamezhui-2">'+
        '<span class="gamezhui-h">'+Numbers+'</span>'+
        '<span class="gamezhui-m">'+zhushus.length+'注,'+times+'倍,'+minMoney+selectRmbStr+'='+(parseInt(zhushus.length) * parseInt(times) * parseInt(minMoney))+selectRmbStr+'</span>'+
        '</div>'+
        '<div id="betting_money" style="display: none;">'+lastMoney+'</div>';
        $('.yBettingLists').append(html);        
      }
      console.log(orderList);
      $('.g_Number_Section').find('a').removeClass('curr');
      $('#text').val('');
      currNumber = [];
      zhushus = [];
      countMoney();
      countAll();
    }else{
     hsycmserror('最少选择一注')
   }

 })


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
    var Orderdetaillist = '';
    var Orderdetailtotalprice    = 0;
    for (var i = 0; i < orderList.length; i++) {
      var cur_order = orderList[i];
      var rate = yrates[cur_order.playid];
      var oprice = Number(cur_order.price);
      var cur_number = cur_order.number;
      Orderdetailtotalprice += oprice;
    }
    $("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
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
    var Orderdetaillist = '';
    var Orderdetailtotalprice    = 0;
    for (var i = 0; i < orderList.length; i++) {
      var cur_order = orderList[i];
      var rate = yrates[cur_order.playid];
      var oprice = Number(cur_order.price);
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
      var rate = yrates[cur_order.playid];
      var oprice = Number(cur_order.price);
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

  //玩法切换
  $(document).on('click','#j_play_select .play_select_tit li',function () {
    $('.zhushu').text('0');
    $('.selectMultipleOldMoney').text('0.00');
    $('.kuaijie').css({"background":"#7b7b87"});
    $('.hemai').css({"background":"#7b7b87"});
    var this_attr = $(this).attr('lottery_code');
    $(this).addClass('curr').siblings('li').removeClass('curr');
    $('.g_Number_Section').html('');
    switch(this_attr){
      case 'dwd':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box1'),bjpks_dwd_title,bjpks_dwd_arr);
      _thisPlayid = 'bjpk10dwd';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从冠、亚、季、四、五、六、七、八、九、十任意位置上任意选择一个或一个以上号码，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_dwd,10,1);
      break;
      
      case 'pk10lh':

      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box9'),bjpks_pk10lhd_title,bjpks_pk10lhd_arr);
      _thisPlayid = 'pk10lhd';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('冠军与第十名车号比较，车号较大为龙、反之为虎。亚军与第九名车号比较；季军与第八名车号比较； 第四名与第七名车号比较；第五名与第六名车号比较，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber1(bjpks_pk10lhd);
      break; 
      case 'cqsan':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box4'),bjpks_cqsan_title,bjpks_cqsan_arr);
      _thisPlayid = 'bjpk10qian3';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqsan,10,1);
      break;
      case 'cqw':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box2'),bjpks_cqw_title,bjpks_cqw_arr);
      _thisPlayid = 'bjpk10qian5';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqw,10,1);
      break;
      case 'cqs':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box3'),bjpks_cqs_title,bjpks_cqs_arr);
      _thisPlayid = 'bjpk10qian4';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqs,10,1);
      break;
      case 'cqe':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box5'),bjpks_cqe_title,bjpks_cqe_arr);
      _thisPlayid = 'bjpk10qian2';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('从各名次中各选择1个不重复的号码组成一注，奖金  <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqe,10,1);
      break;
      case 'cqgj':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box6'),bjpks_cqgj_title,bjpks_cqgj_arr);
      _thisPlayid = 'bjpk10qian1';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择1个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumber(bjpks_cqgj,10,1);
      break;
      case 'gyhz': case 'pk10gyhz':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box7'),['冠亚和'],[{'pk10gyhz':'和值'}]);
      _thisPlayid = 'pk10gyhz';
      rates = yrates[_thisPlayid];
      var maxjjval = [];
      for (var i = 3; i < 20; i++) {
        maxjjval.push(yrates['pk10gyhz'+i].maxjj);
      }
      maxjjval = maxjjval.join('|');
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择1个号码组成一注，奖金 <em style="color:red;">'+maxjjval+'</em>元');
      $(".gameBet_left").css('width','350px');
      gameNumber(['和值'],19,3);
      break;
      case 'dxds':
      $('#bet_filter').remove();
      gameSwitch($('.bet_filter_box8'),['大小单双'],[{'pk10dxds':'复式'}]);
      _thisPlayid = 'pk10dxds';
      rates = yrates[_thisPlayid];
      $('.play_select_prompt').find('span[way-data="tabDoc"]')
      .html('选择1个号码组成一注，奖金 <em style="color:red;">'+rates.maxjj+'</em>元');
      gameNumberDXDS(['冠军','亚军','季军','第四名','第五名','第六名','第七名','第八名','第九名','第十名']);
        // gameNumber(,19,3);
        break;
      }
      var menu0 = $('.play_select_tit').find('.curr').find('.wanfa').text();
      var menu2 = $('#bet_filter').find('.curr').text();
      $('.gameType').find('string').html(menu0+'<i class="iconfont qian"></i>'+menu2);
    })

  //全，大，小，奇，偶，清
  $('.g_Number_Section').on('click','.selectNumberFilters a',function(){
    var _thisAttr = $(this).attr('data-param');
    switch(_thisAttr){
      case 'js-btn-all':
      $(this).parent().siblings('.selectNumbers').find('a').addClass('curr');
      break;
      case 'js-btn-big':
      $(this).parent().siblings('.selectNumbers').find('a').each(function (i){
        if(i<5){
          $(this).removeClass('curr');
        }else{
          $(this).addClass('curr');
        }
      })
      break;
      case 'js-btn-small':
      $(this).parent().siblings('.selectNumbers').find('a').each(function (i){
        if(i>=5){
          $(this).removeClass('curr');
        }else{
          $(this).addClass('curr');
        }
      })
      break;
      case 'js-btn-odd':
      $(this).parent().siblings('.selectNumbers').find('a').each(function (i){
       if(parseInt($(this).attr('data-number')) % 2 == 0){
         $(this).removeClass('curr');
       }else{
         $(this).addClass('curr');
       }
     });
      break;
      case 'js-btn-even':
      $(this).parent().siblings('.selectNumbers').find('a').each(function (i){
       if(parseInt($(this).attr('data-number')) % 2 != 0){
         $(this).removeClass('curr');
       }else{
         $(this).addClass('curr');
       }
     });
      break;
      case 'js-btn-clean':
      $(this).parent().siblings('.selectNumbers').find('a').removeClass('curr');
      break;
    }
    currNumber = currList();
    countFun();
    countMoney();
  });

  function util_unique (v, reg, digit, itemsort, baohao) {
    if(digit==undefined || digit==null) {
      digit = 1;
    }
  //v = v.replace(/ /g, ',');
  var sszz = new Array();
  var titems = {};
  var titem;
  while((titem = reg.exec(v)) != null) {
    var key = titem[0];
    if(itemsort) {
      if(digit == 1) {
        key = key.match(/./g).sort().join('');
      } else if(digit == 2) {
        key = key.match(/.{2}/g).sort().join(' ');
      } else {
        key = key.match(/./g).sort().join('');
      }
    } else {
      if(digit == 2) {
        key = key.match(/.{2}/g).join(' ');
      }
    }
    if(!titems[key]) {
      if(baohao) {
        // 去除豹子号如222，用户前三 中三 后三 任选三混合组选
        if(!(key.charAt(0) == key.charAt(1) && key.charAt(0) == key.charAt(2) && key.charAt(1) == key.charAt(2))) {
          titems[key] = 1;
          sszz.push(key);
        }
      } else {
        titems[key] = 1;
        sszz.push(key);
      }
    }
  }
  return sszz;
};
function sortNumber(a,b){
  return a - b
}
  //检测相同的数字
  function checkRepeat(str){
    var arr=str.split("");
    for(var i= 0,length=arr.length;i<length-1;i++){
      if(arr.slice(i+1).indexOf(arr[i])>=0){
        return true;
      }
    }
    return false;
  }

  function checkNumber(string,len,clickObj){
    var NumberArr = string.split(' ');
    var errArr = [];
    yesArr = [];
    var errString = '';
    var yesString = '';
    var itemcount = 0;

    for( var i = 0; i < NumberArr.length; i++){
      if(NumberArr[i].length > len || NumberArr[i].length < len){
        errArr.push(NumberArr[i]);
      }else{
        yesArr.push(NumberArr[i]);
      }
    }
    for(var j = 0; j < errArr.length; j++){
      errString += errArr[j] + ' ';
    }
    for(var k = 0; k < yesArr.length; k++){
      yesString += yesArr[k] + ' ';
    }

    if(_thisPlayid == 'bjpk10qian3ds'){
      var v=string;
      var reg=/(0[1-9]|1[01])(?!\1)(0[1-9]|1[01])(?!\1|\2)(0[1-9]|1[01])/g;
      
      v = v.replace(/[^\d]/g, '');
      var sszz=util_unique(v, reg, 2);
      sszz = sszz.sort();
      if(sszz){
        itemcount=sszz.length;
        yesArr = sszz;
      }
    }

    if(_thisPlayid == 'bjpk10qian5ds'){
      var v=string;
      var reg=/(0[1-9]|1[01])(?!\1)(0[1-9]|1[01])(?!\1|\2)(0[1-9]|1[01])(?!\1\2\3)(0[1-9]|1[01])(?!\1\2\3\4)(0[1-9]|1[01])/g;
      
      v = v.replace(/[^\d]/g, '');
      var sszz=util_unique(v, reg, 2);
      sszz = sszz.sort();
      if(sszz){
        itemcount=sszz.length;
        yesArr = sszz;
      }
    }

    if(_thisPlayid == 'bjpk10qian4ds'){
      var v=string;
      var reg=/(0[1-9]|1[01])(?!\1)(0[1-9]|1[01])(?!\1|\2)(0[1-9]|1[01])(?!\1\2\3)(0[1-9]|1[01])/g;
      
      v = v.replace(/[^\d]/g, '');
      var sszz=util_unique(v, reg, 2);
      sszz = sszz.sort();
      if(sszz){
        itemcount=sszz.length;
        yesArr = sszz;
      }
    }

    if(_thisPlayid == 'bjpk10qian2ds'){
      var v=string;
      var reg=/(0[1-9]|1[01])(?!\1)(0[1-9]|1[01])/g;
      
      v = v.replace(/[^\d]/g, '');
      var sszz=util_unique(v, reg, 2);
      sszz = sszz.sort();
      if(sszz){
        itemcount=sszz.length;
        yesArr = sszz;
      }
    }

    if(clickObj == 'remove'){
      if(string == ''){
        hsycmserror('请投注');
        return;
      }
      if(errArr.length < 1){
        hsycms('全部投注格式正确');
      }else{
        $('#text').val(yesString);
        hsycmserror('以下投注格式不正确： <br /> '+errString+'');
      }
    }

    if(clickObj == 'test'){
      if(string == ''){
        hsycmserror('请投注');
        return;
      }
      if(errArr.length < 1){
        hsycms('全部投注格式正确');
      }else{
        hsycmserror('以下投注格式不正确： <br /> '+errString+'');
      } 
    }

  }

  function danshiGame(){
    var html = '<div class="g_text">'+
    '<textarea name="" value="123456" id="text" cols="30" rows="10" placeholder="每注号码以空格进行分割"></textarea>'+
    '<button type="button" class="remove_btn">删除错误项</button>'+
    '<button type="button" class="test_istrue">检查格式是否正确 </button>'+
    '<button type="button" class="empty_text">清空文本框</button>'+
    '</div>';
    $('.g_Number_Section').append(html);
  }
  
  //添加game号码区
  function gameNumber(arr,number,start){
    var box = $('.g_Number_Section');
    for(var i = 0;i<arr.length;i++){
      var filterHtml = '<div class="selectNumberFilters">'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-all">全</a>'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-big">大</a>'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-small">小</a>'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-odd">奇</a>'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-even">偶</a>'+
      '<a href="javascript:void(0);" class="selectNumberFilter" data-param="js-btn-clean">清</a>'+
      '</div>';
      var boxList = $('<div class="selectNmuverBox"></div>');
      var boxNumber = $('<div class="selectNumbers"></div>');
      boxList.append('<span class="numberTitle">'+arr[i]+'</span>');
      boxList.append(boxNumber);
      boxList.append(filterHtml);
      if(number && start){
        for(var j = start;j<=number;j++){
          if(j < 10){
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">0'+j+'</a>');
          }else{
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">'+j+'</a>');
          }
        }
      }else if(number){
        for(var j = 0;j<=number;j++){
          if(j < 10){
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="0'+j+'">0'+j+'</a>');
          }else{
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">'+j+'</a>');
          } 
        }
      }else{
        for(var j = 0;j<=9;j++){
          if(j < 10){
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="0'+j+'">0'+j+'</a>');
          }else{
            boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="'+j+'">'+j+'</a>');
          }
          
        }
      }
      
      box.append(boxList);
    }
  }

  function gameNumber1(arr){
    var box = $('.g_Number_Section');
    for(var i = 0;i<arr.length;i++){
      var boxList = $('<div class="selectNmuverBox"></div>');
      var boxNumber = $('<div class="selectNumbers"></div>');
      boxList.append('<span class="numberTitle">'+arr[i]+'</span>');
      boxList.append(boxNumber);
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="龙">龙</a>');
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="虎">虎</a>');
      
      box.append(boxList);
    }
  }
  function gameNumberDXDS(arr){
    var box = $('.g_Number_Section');
    for(var i = 0;i<arr.length;i++){
      var boxList = $('<div class="selectNmuverBox"></div>');
      var boxNumber = $('<div class="selectNumbers"></div>');
      boxList.append('<span class="numberTitle">'+arr[i]+'</span>');
      boxList.append(boxNumber);
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="大">大</a>');
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="小">小</a>');
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="单">单</a>');
      boxNumber.append('<a href="javascript:void(0);" class="selectNumber" data-number="双">双</a>');
      box.append(boxList);
    }
  }

  //添加二级玩法切换
  function gameSwitch(obj,title_arr,option_arrs){
    var ul = $('<div></div>');
    var span = '';
    var bool = true;
    ul.attr('id','bet_filter');
    
    for( var i = 0;i< title_arr.length;i++) {
      var li = $('<div class="kuang"></div>');
      var betOptionDiv = $('<div class="bet_option kuang1"></div>'); 
      li.attr('class','bet_filter_item');
      li.append('<div class="title" style="color: #868686e8;">'+title_arr[i]+'</div>');
      for( j in option_arrs[i]){
        if(bool){
          span = '<div class="bet_options curr" lottery_code_two="'+j+'">'+option_arrs[i][j]+'</div>';
          bool = false;
        }else{
          span = '<div class="bet_options" lottery_code_two="'+j+'">'+option_arrs[i][j]+'</div>';
        }
        betOptionDiv.append(span);
      } 
      li.append(betOptionDiv);
      ul.append(li);
    }
    $('.bet_filter_item').eq(0).find('.bet_options').eq(0).addClass('curr');
    obj.append(ul);
  }
  

  //倍数加减fn
  function addAndSubtract(string){
    inputVal = isNaN(parseInt($('.selectMultipInput').val()))?1:parseInt($('.selectMultipInput').val());
    if(inputVal <= 1){
      $('.selectMultipInput').val(1);
      $('.reduce').addClass('noReduce');
    }
    if(inputVal > 10000){
      $('.selectMultipInput').val(10000);
      $('.reduce').removeClass('noReduce');
      $('.selectMultiple .add').addClass('noReduce');
      return;
    }
    if('+' == string){
      inputVal++;
      if(inputVal >= 10000){
        $('.selectMultipInput').val(10000);
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
    if(inputVal > 1 && inputVal < 10000){
      $('.reduce').removeClass('noReduce');
    }
    if(inputVal < 10000){
      $('.selectMultiple .add').removeClass('noReduce');
    }
  }

  //生成随机订单号
  var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
  function generateMixed(n) {
    var res = "";
    for(var i = 0; i < n ; i ++) {
      var id = Math.ceil(Math.random()*35);
      res += chars[id];
    }
    return res;
  }
  //计算方案注数
  function countAll(){
    var eachZhushus = 0;
    var eachMoneys = 0;

    $('.yBettingList').each(function (i){
      var eachZhushu = parseInt($(this).find('.yBettingZhushu em').text());
      var eachMoney = parseFloat($(this).find('#betting_money').text());
      eachZhushus += eachZhushu;
      eachMoneys += eachMoney;
    })

    AllZhushu = eachZhushus;
    AllMoney = eachMoneys;
    $('#f_gameOrder_lotterys_num').text(AllZhushu);
    $('#f_gameOrder_amount').text(AllMoney.toFixed(3));
    $('.hemaijinerMoney').text(AllMoney.toFixed(3));
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
  }

  //组合排列
  function combination(arr){
    var sarr = [[]];
    
    for(var i = 0; i < arr.length; i++){
      var sta = [];
      for(var j = 0; j < sarr.length; j++){
        for(var k = 0; k < arr[i].length; k++){
          sta.push(sarr[j].concat(arr[i][k]));
        }
      }
      sarr = sta;
    }
    return sarr;
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

  //获取每个位数选中的数
  function currList() {
    var currArr = [];
    $('.selectNumbers').each(function (i){
      var acArr = [];
      $(this).find('.curr').each(function (i){
        acArr.push($(this).text());
      })
      currArr.push(acArr);
    })
    
    return currArr;
  }
  //验证数字空格
  function chkPrice(obj){ 
    obj.value = obj.value.replace(/[^\d.\s*]/g,""); 
    //必须保证第一位为数字而不是. 
    obj.value = obj.value.replace(/^\./g,""); 
    //保证只有出现一个.而没有多个. 
    obj.value = obj.value.replace(/\.{2,}/g,"."); 
    //保证.只出现一次，而不能出现两次以上 
    obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$","."); 
  } 
  //非法字符截取
  function chkLast(obj){  
    if(obj.value.substr((obj.value.length - 1), 1) == '.') 
      obj.value = obj.value.substr(0,(obj.value.length - 1)); 
  } 

})
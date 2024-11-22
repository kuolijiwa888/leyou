<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>{:GetVar('webtitle')}</title>
  <script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/hemai.css">
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
  <link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
  <link rel="stylesheet" href="/ascn/mobile/css/hsycmsAlert.css">
  <script src="/ascn/mobile/js/hsycmsAlert.js"></script>
  <script type="text/javascript" src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="__ROOT__/Template/Mobile/js/HeMaitabGame.js"></script>
  <script type="text/javascript" src="/resources/main/common.js"></script>
  <script type="text/javascript" src="/resources/js/way.min.js"></script>
  
</head>
<body>
  <!--头部-->
  <header class="gamesheader">
    合买大厅
    <a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
    <a href="{:GetVar('kefuthree')}"><i class="iconfont icon-2">&#xe67c;</i></a>
  </header>
  <div class="hemai_top">

    <div class="hemai_top_1">
      <span class="hm_title">合买大厅</span>
      <div class="hm_list">
        <div class="hm_list_1">
          <input type="text" id="imgtalk" class="hm_input" readonly="readonly" placeholder="全部彩种" value="全部彩种">
          <i class="iconfont" id="iconfont" style="float:right;line-height: 1.5;transition: 0.3s;">&#xe65a;</i>
        </div>
      </div>
    </div>

    <div class="shareCon"style="position: relative;">
      <div id="list_data"></div>
      <div id="page_wrapper" class="pagehemai"></div>
    </div>
  </div>
  <!--选择彩种-->
    <div class="hm_cai_tc allplaytitle animated linearTop" style="z-index: 1001;display:none;">
      <div class="hm_cai_tc_title">全部彩种</div>
      <div class="hm_cai_tc_notice">
        <div class="notice_start iconfont active" value="all" data="all">全部彩种</div>
        <volist name="list" id="cp">
          <div class="notice_start iconfont" value="{$cp[name]}" data="{$cp['name']}">{$cp['title']}</div>
        </volist>
      </div>
    </div>
  <!--合买详情-->
  <div class="alert_bj" id="alert_bj" style="display: none; position: fixed; z-index: 1000;"></div>
  <div class="alert_bj" id="alert_bjs" style="display: none; position: fixed; z-index: 1000;"></div>

    <div class="hm_xq hm_xiangqing animated linearTop"style="z-index: 1001;display:none;">
      <div class="hm_xq_title">合买详情</div>
      <div class="hm_xq_notice">
        <div style="font-size: .16rem; line-height: .32rem;text-align: center;">第 
          <span style="color: rgb(255, 168, 0); font-weight: bold;" id="hm_expect"></span> 期
        </div>
        <div class="hm_xq_notice_middle">
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title">游戏:</div>
            <div class="notice_middle_notice" id="hm_cptitle"></div>
          </div>
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title">玩法:</div>
            <div class="notice_middle_notice" id="hm_playtitle"></div>
          </div>
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title"> 状态:</div>
            <div class="notice_middle_notice" id="hm_isdraw"></div>
          </div>
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title">保底:</div>
            <div class="notice_middle_notice" id="hm_baodi"></div>
          </div>
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title">金额:</div>
            <div class="notice_middle_notice" id="hm_amount"></div>
          </div>
          <div class="hm_xq_notice_middle_1">
            <div class="notice_middle_title">每份:</div>
            <div class="notice_middle_notice" id="hm_hemaipic"></div>
          </div>
        </div>
        <div class="hm_xq_goumai" id="hm_buyhave_text">
          <input name="senumber" id="senumber" value="" type="hidden">
          <input name="onemoney" id="onemoney" value="" type="hidden">
          <input name="pid" id="pid" value="" type="hidden">
          <div class="hm_text">
            <span>剩余<span style="color: red; font-weight: bold;" id="hm_buyhave"></span>份，我要买 <input style="ime-mode: disabled;" size="5" onkeyup="FormatNum(this)" id="buynum" name="buynum" value="1" onpaste="return false" autocomplete="off"> 份。</span>
          </div>
        </div>
        <div class="hm_xq_notice_haoma">
          <div class="haoma_title">投注号码</div>
          <div class="haoma_notice" id="hm_tzcode"></div>
        </div>
      </div>
      <div class="hm_xq_bottom">
        <button class="noe" id="hm_xq_noe">取 消</button><button class="two" id="hm_xq_two">立即参与</button>
      </div>
    </div>

  
  <div class="hsycms-model-mask" id="mask-alert"></div>
  <div class="hsycms-model hsycms-model-alert" id="alert">
    <div class="hscysm-model-title">温馨提示</div>
    <div class="hsycms-model-icon">
      <svg width="50" height="50">
        <circle class="hsycms-alert-svgcircle"  cx="25" cy="25" r="24" fill="none" stroke="#238af4" stroke-width="2"></circle>   
        <polyline class="hsycms-alert-svggou" fill="none" stroke="#238af4" stroke-width="2.5" points="14,25 23,34 36,18" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>
    <div class="hsycms-model-text">这里是内容</div>
    <div class="hsycms-model-btn alert">
      <button type="button ok">确定</button>
    </div>
  </div>

  <div class="hsycms-model-mask" id="mask-error"></div>
  <div class="hsycms-model hsycms-model-alert" id="error">
    <div class="hscysm-model-title">温馨提示</div>
    <div class="hsycms-model-icon">
      <svg width="50" height="50">
        <circle class="hsycms-alert-svgcircle"  cx="25" cy="25" r="24" fill="none" stroke="#f54655" stroke-width="2"></circle>   
        <polyline class="hsycms-alert-svgca1" fill="none" stroke="#f54655" stroke-width="2.5" points="18,17 32,35" stroke-linecap="round" stroke-linejoin="round" />
        <polyline class="hsycms-alert-svgca2" fill="none" stroke="#f54655" stroke-width="2.5" points="18,35 32,17" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>
    <div class="hsycms-model-text">这里是内容</div>
    <div class="hsycms-model-btn error">
      <button type="button ok">确定</button>
    </div>
  </div>
  
  <div class="hsycms-model-mask" id="mask-confirm"></div>
  <div class="hsycms-model hsycms-model-confirm" id="confirm">
    <div class="hscysm-model-title">确认投注</div>
    <div class="hsycms-model-text1"></div>
  </div>
  
  <script>
    function hsycms(text) {
      $('.hsycms-model-text').html(text);
      $('#mask-alert').show();
      $('#alert').show(); 
      $('#mask-error').hide();
      $('#error').hide();
    }
    function hsycmserror(text) {
      $('.hsycms-model-text').html(text);
      $('#mask-error').show();
      $('#error').show(); 
      $('#mask-alert').hide();
      $('#alert').hide();
    }
    $('.alert button').click(function () {
      $('#mask-alert').hide();
      $('#alert').hide();
    })
    $('.error button').click(function () {
      $('#mask-error').hide();
      $('#error').hide();
    })
  </script>
  <script>
    $(function(){
     $("#hm_xq_two").click(check_project);
   });

    function check_project(){
      var buynum =$("#buynum").val();
      var senumber = Number($("#senumber").val());
      var onemoney = $("#onemoney").val();
      var pid  = $("#pid").val();

      if (buynum=="")
      {
        hsycmserror("认购份数不能为空！");
        $("#buynum").focus();
        return;
      }
      else if (Number(buynum) <= 0)
      {
        hsycmserror("认购份数不能小于1！");
        $("#buynum").focus();
        return;
      }
      else if (Number(buynum) > Number(senumber))
      {
        hsycmserror("您认购份数不能大于剩余份数！");
        $("#buynum").focus();
        return;
      }

      var msg = "<span class='hm_touzhu'>您好，请您确认：";
      msg = msg + "<br>认购份数：<span>"+buynum+"</span>份";
      msg = msg + "<br>认购份数：<span>"+buynum*formatCurrency2(onemoney)+"</span>元</span>";
      var touzhu = '<div class="hsycms-model-btn confirm">'+
      '<button type="button" class="cancel">取消</button>'+
      '<button type="button" class="ok">确定</button>'+
      '</div>';
      $('.hsycms-model-text1').append(msg);
      $('#confirm').append(touzhu);
      $('#mask-confirm').show();
      $('#confirm').show();

      $('.confirm .cancel').click(function () {
        $('#mask-confirm').hide();
        $('#confirm').hide();
        $('.confirm').remove();
        $('.hm_touzhu').remove();
        $('.hsycms-model-text').html('发起合买失败');
        $('#mask-error').show();
        $('#error').show();
      })
      $('.confirm .ok').click(function () {
        $('#mask-confirm').hide();
        $('#confirm').hide();
        $('.confirm').remove();
        $('.hm_touzhu').remove();
        if(!user){
          hsycmserror('请先登陆',-1);
        }
        add_project(buynum,pid,onemoney)

      })

    }
     //参加合买
     function add_project(buynum,pid,onemoney){
       if(!user){
        hsycmserror('请先登陆',-1);
        return;
      }
      $.ajax({
        type: "POST",
        url: apirooturl + 'hmadd',
        data: {
          action:"add",
          pid:pid,
          buynum:buynum,
          onemoney:onemoney
        },
        success: function(json){
          if(json.sign){             
            hsycms('发起合买成功',1);
          }else{
            hsycmserror(json.message,-1);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          hsycmserror("交易失败,请重新提交！");
        },
        complete: function (jqXHR, textStatus) {
        }
      });
    }
    function FormatNum(obj)
    {
      $(obj).val($(obj).val().replace(/[^\d]/g,''));
    }
    function formatCurrency2(num) {
      num = num.toString().replace(/\$|\,/g,'');
      if(isNaN(num))
      {
        num = "0";
      }
      var sign = (num == (num = Math.abs(num)));
      num = Math.floor(num*100+0.50000000001);
      var cents = num%100;
      num = Math.floor(num/100).toString();
      if(cents<10)
      {
        cents = "0" + cents;
      }
      return (((sign)?'':'-') + num + '.' + cents);
    }

    $('#hm_xq_noe').click(function(){
      $('.hm_xiangqing').removeClass('linearTop');
      $('.hm_xiangqing').addClass('linearBottom');
      setTimeout(function() {
        $('body').removeClass('niubihh');
        $('#alert_bjs').hide();
        $('.hm_xiangqing').hide();
        $('.hm_xiangqing').removeClass('linearBottom');
        $('.hm_xiangqing').addClass('linearTop');
      }, 300);
      
    })
    function hmurl(uid){
      $.ajax({
        url: "/Game.details?no="+uid,
        type: 'GET',
        dataType: "text",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
          var cptitle = $(data).find('#cptitle').text();
          var playtitle = $(data).find('#playtitle').text();
          var expect = $(data).find('#expect').text();
          var isdraw = $(data).find('#isdraw').text();
          var baodi = $(data).find('#baodi').text();
          var amount = $(data).find('#amount').text();
          var hemaipic = $(data).find('#hemaipic').text();
          var buyhave = $(data).find('#buyhave').text();
          var isfull = $(data).find('#isfull').text();
          var pid = $(data).find('#pid').text();
          var tzcode = $(data).find('#tzcode').text();
          if(buyhave=='方案已截止-您可以选择参加其他合买'){
            $('.hm_text').hide();
            $('.hm_text_fa').remove();
            $('#hm_xq_two').css('background-color','#8c8c94');
            $("#hm_xq_two").attr('disabled',true);
            var html = '<div class="hm_text_fa"><span>方案已截止-您可以选择参加其他合买</span></div>';
            $('#hm_buyhave_text').append(html);
          }else if(buyhave=='方案已满员-您可以选择参加其他合买'){
            $('.hm_text').hide();
            $('.hm_text_fa').remove();
            $('#hm_xq_two').css('background-color','#8c8c94');
            $("#hm_xq_two").attr('disabled',true);
            var html = '<div class="hm_text_fa"><span>方案已满员-您可以选择参加其他合买</span></div>';
            $('#hm_buyhave_text').append(html);
          }else{
            $('.hm_text_fa').remove();
            $('#hm_xq_two').css('background-color','#f4586e');
            $("#hm_xq_two").attr('disabled',false);
            $('.hm_text').show();
            
            $('#hm_buyhave').html(buyhave);
          }
          $('#senumber').val(isfull);
          $('#onemoney').val(hemaipic);
          $('#pid').val(pid);
          $('#hm_cptitle').html(cptitle);
          $('#hm_playtitle').html(playtitle);
          $('#hm_expect').html(expect);
          $('#hm_isdraw').html(isdraw);
          $('#hm_baodi').html(baodi);
          $('#hm_amount').html(amount);
          $('#hm_hemaipic').html(hemaipic);
          $('#hm_tzcode').html(tzcode);
          $('.hm_xiangqing').show();
          $('#alert_bjs').show();
          $('body').addClass('niubihh');
        }
      })
    }
    $('#imgtalk').click(function(){
      $('#iconfont').css('transform','rotate(-180deg)');
      $('.allplaytitle').show();
      $('#alert_bj').show();
      $('body').addClass('niubihh');
    })
    $('#alert_bj').click(function(){
      $('.allplaytitle').removeClass('linearTop');
      $('.allplaytitle').addClass('linearBottom');
      setTimeout(function() {
        $('body').removeClass('niubihh');
        $('#alert_bj').hide();
        $('.allplaytitle').hide();
        $('#iconfont').css('transform','rotate(0deg)');
        $('.allplaytitle').removeClass('linearBottom');
        $('.allplaytitle').addClass('linearTop');
      }, 300);
    })
    $('.notice_start').click(function(){
      var text = $(this).text();
      $('#imgtalk').val(text);
      $(this).siblings().removeClass("active");
      $(this).addClass("active");
      ascncp($(this).attr("data"));
      $('#alert_bj').click();
    })
  </script>
</body>
</html>
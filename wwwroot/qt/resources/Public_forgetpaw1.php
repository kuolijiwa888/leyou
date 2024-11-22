<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" href="/ascn/css/login.css"/>
 <script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
</head>
<body>
  <div class="ant-modal-body">
   <div>
    <div class="ant-steps ant-steps-horizontal ant-steps-label-vertical">
     <div class="ant-steps-item ant-steps-item-process ant-steps-item-active">
      <div class="ant-steps-item-container">
       <div class="ant-steps-item-tail"></div>
       <div class="ant-steps-item-icon">
        <span class="ant-steps-icon">1</span>
      </div>
      <div class="ant-steps-item-content">
        <div class="ant-steps-item-title">
         验证用户名
       </div>
     </div>
   </div>
 </div>
 <div class="ant-steps-item ant-steps-item-process ant-steps-item-active">
  <div class="ant-steps-item-container">
   <div class="ant-steps-item-tail"></div>
   <div class="ant-steps-item-icon">
    <span class="ant-steps-icon">2</span>
  </div>
  <div class="ant-steps-item-content">
    <div class="ant-steps-item-title">
     选择找回方式
   </div>
 </div>
</div>
</div>
<div class="ant-steps-item ant-steps-item-wait">
  <div class="ant-steps-item-container">
   <div class="ant-steps-item-tail"></div>
   <div class="ant-steps-item-icon">
    <span class="ant-steps-icon">3</span>
  </div>
  <div class="ant-steps-item-content">
    <div class="ant-steps-item-title">
     设置新密码
   </div>
 </div>
</div>
</div>
<div class="ant-steps-item ant-steps-item-wait">
  <div class="ant-steps-item-container">
   <div class="ant-steps-item-tail"></div>
   <div class="ant-steps-item-icon">
    <span class="ant-steps-icon">4</span>
  </div>
  <div class="ant-steps-item-content">
    <div class="ant-steps-item-title">
     完成
   </div>
 </div>
</div>
</div>
</div>
<div class="zhaohuifangshi">
  <form action="/forgetPaw1" method="post" id="form1">
    <input name="action" value="retPassword" type="hidden">
    <div style="text-align: center;margin-top: 20px;">请选择以下方式找回密码</div>
    <div class="zhaohuifangshi2">
      <div class="qqzhaohui">
        <i class="qq-img"></i>
        <input name="yztype" type="radio" class="" value="qq" checked="checked">
        <span><img src="/ascn/images/way_title2.png"></span>
      </div>
      <div class="emzhaohui">
        <i class="em-img"></i>
        <input type="radio" name="yztype" class="" value="email">
        <span><img src="/ascn/images/way_title1.png"></span>
      </div>
      <div class="smszhaohui">
        <i class="sms-img"></i>
        <input type="radio" name="yztype" class="" value="tel">
        <span><img src="/ascn/images/text-sms.png"></span>
      </div>
    </div>

    <div class="zhaohui-name">
      <span><em id="yztypetxt">QQ号码</em>： </span>
      <input name="yztext" class="input02 input_for_new_home" type="text">
    </div>
  <div class="xiayibu" style="margin-top: 10px;">
    <span></span>
    <button  type="submit">下一步</button>
    <a href="javascript:void(0);" onclick="window.location.href='/forgetPaw';">返回上一步</a>
  </div>
  </form>
</div>


</div>
</div>
<script>
  $(function(){
    $("input[name='yztype']").change(function(){
      var type = $(this).val();
      if(type=='qq')$("#yztypetxt").text('QQ号码');
      if(type=='email')$("#yztypetxt").text('邮箱账号');
      if(type=='modify')$("#yztypetxt").text('预留信息');
      if(type=='tel')$("#yztypetxt").text('手机号码');
    })
  })
</script>
</body>
</html>
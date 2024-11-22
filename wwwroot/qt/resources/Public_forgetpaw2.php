<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" href="/ascn/css/login.css"/>
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
<div class="ant-steps-item ant-steps-item-process ant-steps-item-active">
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
	<form action="/forgetPaw2" method="post" id="form1">
    <input name="action" value="retPassword" type="hidden">
    <div style="text-align: center;margin-top: 20px;">请设置您的新密码</div>
    <div class="zhaohui-name"style="margin-top: 20px;">
     <span>新密码： </span>
     <input type="password" name="pa" class="input02 input_for_new_home">
   </div>
   <div class="zhaohui-name"style="margin-top: 20px;">
     <span>确认新密码： </span>
     <input type="password" name="pa1" class="input02 input_for_new_home">
   </div>
   <div class="xiayibu"style="margin-top: 20px;">
     <span></span>
     <button type="submit">下一步</button>
     <a href="javascript:void(0);" onclick="window.location.href='/forgetPaw1';">返回上一步</a>
   </div>
 </form>
</div>


</div>
</div>
</body>
</html>
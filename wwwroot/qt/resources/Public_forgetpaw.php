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
              <div class="ant-steps-item-title">验证用户名</div>
            </div>
          </div>
        </div>
        <div class="ant-steps-item ant-steps-item-wait">
          <div class="ant-steps-item-container">
            <div class="ant-steps-item-tail"></div>
            <div class="ant-steps-item-icon">
              <span class="ant-steps-icon">2</span>
            </div>
            <div class="ant-steps-item-content">
              <div class="ant-steps-item-title">选择找回方式</div>
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
              <div class="ant-steps-item-title">设置新密码</div>
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
              <div class="ant-steps-item-title">完成</div>
            </div>
          </div>
        </div>
      </div>
      <div class="steps-content">
        <form action="/forgetPaw" method="post" id="form1">
          <div style="text-align: center;margin-top: 20px;">请输入您要找回密码账号</div>
          <div class="zhaohui-name"style="margin-top: 20px;">
            <span>用户名： </span>
            <input type="text" name="userName" datatype="*5-16" placeholder="请输入用户名" class="input02 input_for_new_home" ><span id="userpass"></span>
          </div>
          <div class="xiayibu"style="margin-top: 20px;">
            <span></span>
            <button type="submit">下一步</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
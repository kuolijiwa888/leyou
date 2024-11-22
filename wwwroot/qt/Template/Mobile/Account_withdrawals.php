<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--js等待-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/hsycmsAlert.css">
	<link rel="stylesheet" href="__CSS__/userHome.css">
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		提现
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div class="back2">
		<form class="am-form " method="post" action="{:U('Apijiekou/savetikuanorder')}" url="" checkby_ruivalidate id="register_form"  onsubmit="return checkform(this)" >
			<ul>
				<li>
					<div class="back2-name"><span>持卡人姓名:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;">{$Think.session.userinfo.userbankname}</em></div>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>账户余额:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;">{$userinfo.balance}元</em></div>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>可提现金:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><em style="color: #434354;font-size: .15rem;">{$userinfo.balance}元</em></div>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>提现账户:</span></div>
					<div class="back2-1">
						<div style="width:2.3rem;">
						    <div class="am-fr bank_right_input selected_bank">
							<volist name="banklist" id="vo" key="v">
								<eq name="v" value="1">
									
										<img src="__ROOT__/resources/images/bank/{$vo.banklogo}" style="float: left;margin-top: -0.05rem;width:0.3rem;"  />
										<div class="bank_info" style="margin-left: 0.1rem;">
											<em class="bank-name">{$vo.bankname}</em>
											<em>**********<span class="bank-sum">{$vo._banknumber|substr=-5}</span><i style="padding-left: 0.1rem;">&nabla;</i></em>
										</div>
									
								</eq>
							</volist>
							</div>
							<ul class="bank_list_box bank_right_input" style="display: none;position: absolute;top: 1.9rem;z-index: 99;padding: 0.15rem;background: #fff;box-shadow: 0 0 5px #888;margin-top: 0;">
								<volist name="banklist" id="vo" key="v">
									<li class="bank_list" style="border-bottom: 1px solid #ddd;" data-bank-icon="__ROOT__/resources/images/bank/{$vo.banklogo}" data-bank-name="{$vo.bankname}" data-bank-sum="{$vo._banknumber|substr=-5}">
										<eq name="vo['state']" value="1">
											<input type="radio"  name="bankid" class="isplay_no" value="{$vo.id}" checked="checked">
											<else />
											<input type="radio"  name="bankid" value="{$vo.id}" class="isplay_no" >
										</eq>
										<img src="__ROOT__/resources/images/bank/{$vo.banklogo}" style="float: left;margin-top: -0.05rem;width:30px;"  />
										<div style="margin-left: 0.1rem;padding-bottom: 0.1rem;">
											<em>{$vo.bankname}</em>
											<em>*******{$vo._banknumber|substr=-5}</em>
										</div>
									</li>
								</volist>
								<li style="text-align: center;padding-top: 0.05rem;font-size: .16rem;">请选择你要提现的银行卡</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>提现金额:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><input type="text" name="amount" value="100" placeholder="提款金额至少100元" ></div>
					</div>
				</li>
				<li>
					<div class="back2-name"><span>资金密码:</span></div>
					<div class="back2-1">
						<div style="width:1.99rem;"><input type="password" name="withdraw_pwd" placeholder="请输入您的资金密码"></div>
					</div>
				</li>
			</ul>
			<div class="back-ok">
				<button type="reset" class="chongz" id="refresh">重置</button><button class="queding" type="submit">确定</button>
			</div>
		</form>
	</div>
	<div class="back-tips">
		<div style="padding-top: .35rem;padding-bottom: .1rem;">提现使用需知</div>
		<div style="padding:0 .1rem .1rem .1rem ;color:#777;font-size: 0.14rem;text-align: left;">
			<p>1. 今天还可以提现<em data-tkcount>{$count}</em>次。</p>
			<p>2. 可提现金额=有效投注×3(此项需达到充值金额的30%才计入)+奖金+活动礼金。</p>
			<p>3. 单笔提现最低<em>50</em>元，最高<em>2000000</em>元。</p>
			<p>4. 提现必须为整数，不可带角分厘，否则无法通过！</p>
		</div>
	</div>

	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type='text/javascript' src='/Template/Mobile/js/main.js' charset='utf-8'></script> 
	<script type='text/javascript' src='/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>

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
	<script type="text/javascript">
		$("#refresh").click(function(){
			window.location.reload(true) ;
		});
		$('.selected_bank').click(function (){
			$('.bank_list_box').show();
		})
		$('.bank_list_box').children('.bank_list').click(function (){
			var icon = $(this).attr('data-bank-icon');
			var bank_name = $(this).attr('data-bank-name');
			var bank_sum = $(this).attr('data-bank-sum');

			$(this).parent().hide();
			$(this).find('input[name="bid"]').prop('checked',true);
			$(this).siblings('.bank_list').find('input[name="bid"]').prop('checked',false);

			$('.selected_bank').find('img').attr('src',icon);
			$('.selected_bank').find('.bank-name').text(bank_name);
			$('.selected_bank').find('.bank-sum').text(bank_sum);
		})
		$('.selected_bank').find('use').attr('xlink:href');
	</script>
	<script>
		function hsycms(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-alert').show();
			$('#alert').show();	
		}
		function hsycmserror(text) {
			$('.hsycms-model-text').html(text);
			$('#mask-error').show();
			$('#error').show();	
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
		function checkform(obj){
			$.post($(obj).attr('action'),$(obj).serialize(), function(json){
				if(json.sign){
					hsycms(json.message,'success');
					
					var tkcount = $("[data-tkcount]").text()/1;
					tkcount = tkcount-1;
					if(tkcount<=0){
						tkcount = 0;
					}
					$("[data-tkcount]").text(tkcount);
					setTimeout(function(){
							window.location.href = "/userCenter/billRecord2";
						},2000);
				}else{
					hsycmserror(json.message);
				};
			},'json');
			return false;
		};
	</script>
</body>
</html>
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
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/alert.css">
</head>
<body>
	<!--头部-->
	<header class="gamesheader">
		游戏记录
		<a href="javascript:history.back(-1);"><i class="iconfont icon-1">&#xe677;</i></a>
		<a class="zuijin"><i class="iconfont icon-2">&#xe624;</i></a>
	</header>
	<div class="notice-top">
		<ul>
			<li><a <if condition="$Think.get.itemselect eq '1'">class="notice-active"</if>data="1" href="/userCenter/betRecords/1/0">全部</a></li>
			<li><a <if condition="$Think.get.itemselect eq '2'">class="notice-active"</if>data="2" href="/userCenter/betRecords/2/0">已中</a></li>
			<li><a <if condition="$Think.get.itemselect eq '3'">class="notice-active"</if>data="3" href="/userCenter/betRecords/3/0">未中</a></li>
			<li><a <if condition="$Think.get.itemselect eq '4'">class="notice-active"</if>data="4" href="/userCenter/betRecords/4/0">待开</a></li>
		</ul>
	</div>
	<div class="notice-game" style="margin-bottom: .78rem;">
		<ul>
			<volist name="tzlist" id="vo">
				<a>
					<li onclick="hsycms.alert('model');adad('{$vo.trano}');" <if condition="$vo.isdraw eq '1'">class="zhong"</if><if condition="$vo.isdraw eq '-1'">class="gua"</if>>
						<div class="notice-game-top">
							<i class="iconfont">&#xe653;</i>
							<span>{$vo.cptitle}</span>
							<span style="float:right;">{$vo.oddtime|date="Y-m-d H:i:s",###} 
								<i class="iconfont">&#xe800;</i>
							</span>
						</div>
						<div class="notice-game-bottom">
							<div class="notice-qihao"><p>期号</p><em>{$vo.expect}</em></div>
							<div class="notice-jine"><p>投注金额</p><em>{$vo.amount}</em></div>
							<div class="notice-zhuangt"><em><if condition="$vo.isdraw eq '0'">未开奖</if><if condition="$vo.isdraw eq '1'">已中奖</if><if condition="$vo.isdraw eq '-1'">未中奖</if></em></div>
						</div>
					</li>
				</a>
			</volist>
		</ul>
		<div class="page text-center green-black pagefy">{$pageshow}</div>
	</div>
	
	<div class="hsycms-model-mask" onclick="hsycms.closeAll()" id="mask-model"></div>
	<div style="margin-top: -35vh;"class="hsycms-model1 hsycms-model-model" id="model">
		<div style="position: absolute;top: 0;left: 0;right: 0;z-index: 101 !important;background: linear-gradient(-45deg, #434354 0%, #fff 200%);color: #fff;height: .3375rem;display: flex;align-items: center;justify-content: center;font-weight: normal;padding: 0;background-color: #434354;"class="hscysm-model-title"><span>投注单详情</span></div>
		<div style="background: #f3f3f3;padding-top: .3375rem;height: 65vh;"class="hsycms-model-content">
			<div class="byadad" style="padding-bottom: .41rem;">
				<ul>
					<li><div class="byadad-title">单号:</div><div class="byadad-notice" id="trano"></div></li>
					<li><div class="byadad-title">期号:</div><div class="byadad-notice" id="expect"></div></li>
					<li><div class="byadad-title">用户名:</div><div class="byadad-notice" id="username"></div></li>
					<li><div class="byadad-title">彩种:</div><div class="byadad-notice" id="cptitle"></div></li>
					<li><div class="byadad-title">玩法:</div><div class="byadad-notice" id="playtitle"></div></li>
					<li><div class="byadad-title">类型:</div><div class="byadad-notice" id="ishemai"></div></li>
					<li><div class="byadad-title">投注时间:</div><div class="byadad-notice" id="oddtime"></div></li>
					<li><div class="byadad-title">开奖号码:</div><div class="byadad-notice" id="opencode"></div></li>
					<li><div class="byadad-title">注数:</div><div class="byadad-notice" id="itemcount"></div></li>
					<li><div class="byadad-title">返点:</div><div class="byadad-notice" id="mode"></div></li>
					<li><div class="byadad-title">金额:</div><div class="byadad-notice" id="amount"></div></li>
					<li><div class="byadad-title">中奖金额:</div><div class="byadad-notice" id="okamount"></div></li>
					<li><div class="byadad-title">中奖数量:</div><div class="byadad-notice" id="okcount"></div></li>
					<li><div class="byadad-title">状态:</div><div id="isdraw" class="byadad-notice" id="isdraw"></div></li>
					<li><div class="byadad-title">投注内容:</div><div class="byadad-notice" id="tzcode"></div></li>
				</ul>
			</div>
		</div>
		<div style="border-top: 1px solid rgba(0, 0, 0, 0.1);background-color: #fff;position: absolute;bottom: 0;left: 0;right: 0;height: .4125rem;display: flex;z-index: 101 !important;">
			<button style="font-size: .14rem;background: #fff;display: flex;align-items: center;justify-content: center;color: #333;flex: 1;" class="chedan" onClick="">撤单</button>
			<button style="font-size: .14rem;background-image: linear-gradient(-45deg, #434354 0%, #fff 200%);background-color: #434354;color: #fff;display: flex;align-items: center;justify-content: center;flex: 1;"class="queding" onclick="hsycms.closeAll()" id="mask-model">确定</button></div>
		</div>
		
		<div class="alert_bj" style="position: fixed; z-index: 1000;display:none;"></div>
		<div class="action-sheet caidan dibutop animated" style="display:none;">
			<div class="action-sheet-button1 <if condition="$Think.get.atime eq '0'">active</if>" style="border-radius: .1rem .1rem 0 0;" onclick="return getlist(0);">全部</div>
			<div class="action-sheet-button2 <if condition="$Think.get.atime eq '1'">active</if>" style="border-radius:0" onclick="return getlist(1);">今日</div>
			<div class="action-sheet-button2 <if condition="$Think.get.atime eq '2'">active</if>" style="border-radius:0" onclick="return getlist(2);">昨日</div>
			<div class="action-sheet-button2 <if condition="$Think.get.atime eq '3'">active</if>" style="border-radius: 0 0 .1rem .1rem;" onclick="return getlist(3);">最近七日</div>
			<div class="action-sheet-button">  取消 </div>
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
			<div class="hscysm-model-title">温馨提示</div>
			<div class="hsycms-model-text1"></div>
		</div>

		<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/ascn/mobile/js/hsycmsAlert.js"></script>
		<script>
			function hsycmss(text) {
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
			$('.zuijin').click(function(){
				$('.action-sheet').show();
				$('.alert_bj').show();
			})
			$('.alert_bj').click(function(){
				$('.action-sheet').removeClass('dibutop');
				$('.action-sheet').addClass('dibubottom');
				setTimeout(function(){
				    $('.alert_bj').hide();
					$('.action-sheet').hide();
					$(".action-sheet").removeClass("dibubottom ");
					$(".action-sheet").addClass("dibutop");
				},200);
			})
			$('.action-sheet-button').click(function(){
				$('.action-sheet').removeClass('dibutop');
				$('.action-sheet').addClass('dibubottom');
				setTimeout(function(){
				    $('.alert_bj').hide();
					$('.action-sheet').hide();
					$(".action-sheet").removeClass("dibubottom ");
					$(".action-sheet").addClass("dibutop");
				},200);
			})
			function getlist(atime){
				var itemselect = $('.notice-top').find('.notice-active').attr('data');
				if(itemselect == undefined){
				   itemselect = '1'; 
				}
				window.location.href="/userCenter/betRecords/"+itemselect+"/"+atime;
			}
		</script>

		<script>
			function adad(uid){
				$.ajax({
					url: "/userCenter/adad/"+uid,
					type: 'GET',
					dataType: "text",
					contentType: "application/json; charset=utf-8",
					success: function (data) {
						var trano = $(data).find('#trano').text();
						var expect = $(data).find('#expect').text();
						var username = $(data).find('#username').text();
						var cptitle = $(data).find('#cptitle').text();
						var playtitle = $(data).find('#playtitle').text();
						var ishemai = $(data).find('#ishemai').text();
						var opencode = $(data).find('#opencode').text();
						var itemcount = $(data).find('#itemcount').text();
						var mode = $(data).find('#mode').text();
						var amount = $(data).find('#amount').text();
						var okamount = $(data).find('#okamount').text();
						var okcount = $(data).find('#okcount').text();
						var isdraw = $(data).find('#isdraw').text();
						var tzcode = $(data).find('#tzcode').text();
						var touzhuid = $(data).find('#touzhuid').text();
						var chedan = 'Order_chedan("'+touzhuid+'","'+trano+'")';

						$('.chedan').attr('onClick',chedan);
						console.log(chedan);
						$('#trano').html(trano);
						$('#expect').html(expect);
						$('#username').html(username);
						$('#cptitle').html(cptitle);
						$('#playtitle').html(playtitle);
						$('#ishemai').html(ishemai);
						$('#opencode').html(opencode);
						$('#itemcount').html(itemcount);
						$('#mode').html(mode);
						$('#amount').html(amount);
						$('#okamount').html(okamount);
						$('#okcount').html(okcount);
						$('#isdraw').html(isdraw);
						$('#tzcode').html(tzcode);
					}
				})
			}
			function Order_chedan(id,trano){
			    $('.queding').click();
				var msg = "<span class='hm_touzhu'>您好，是否确定撤单</span>";
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
					$('.hsycms-model-text').html('撤单申请失败');
					$('#mask-error').show();
					$('#error').show();
				})
				$('.confirm .ok').click(function () {
					$('#mask-confirm').hide();
					$('#confirm').hide();
					$('.confirm').remove();
					$('.hm_touzhu').remove();

					$.post("/Apijiekou.chedan",{'id':id,'trano':trano}, function(json){
						if(json.sign==1){
							hsycmss('撤单成功');
						}else{
							hsycmserror(json.message);
						}
					},'json');
				})
			};
		</script>

	</body>
	</html>
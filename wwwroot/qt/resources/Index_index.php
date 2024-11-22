<html class=" js no-touch"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width,initial-scale=1" name="viewport">

	<!--爱尚互联-->
	<link rel="stylesheet" href="__CSS2__/reset.css">
	<script src="/ascn/js/classie.js"></script>


	<script type="text/javascript" src="__JS__/jquery-3.1.1.min.js"></script>
	<!--爱尚互联-->


	<!--爱尚互联-->
	<link type="text/css" rel="stylesheet" href="/ascn/css/lotter.css">
	<link type="text/css" rel="stylesheet" href="/ascn/css/common-white.css">
	<link type="text/css" rel="stylesheet" href="/ascn/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/ascn/css/default.css">
	<link rel="stylesheet" type="text/css" href="/ascn/css/component.css">
	<link id="changelink" rel="stylesheet" href="/ascn/css/indexhei.css">
	<link id="changelink" rel="stylesheet" href="/ascn/css/iconfont.css">
	<script type="text/javascript" src="/ascn/js/jquery-2.2.4.min-2.2.4.js"></script>
	<script type="text/javascript" src="/ascn/js/jquery-1.11.min.js"></script>
	<script language="javascript" type="text/javascript" src="/ascn/js/bootstrap.js"></script>
	<!--爱尚互联-->
</head>

<body class="nsc_background01" onload="checkCookie()" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">



	<div id="header">
		<div class="tbctbc">
			<a href="/home">
				<div class="tbc-item22">
					<div class="nav_item22">
						<div class="icon121"></div>
					</div>
				</div>
			</a>
			<div class="new-menu11">
			    <a href="/lottery" target="max_nav">
				    <div class="tbc-item11">
					    <div class="nav_item11">
					    	<div class="icon411"></div> 
						    <div class="text">
						    	开奖大厅
					    	</div>
					    </div>
				    </div> 
				</a>
				<a href="{:GetVar('kefuthree')}">
					<div class="tbc-item11">
						<div class="nav_item11">
							<div class="icon311"></div> 
							<div class="text">
								客服
							</div>
						</div>
					</div> 
				</a>
				<a href="/lotteryhemai" target="max_nav">
					<div class="tbc-item11">
						<div class="nav_item11">
							<div class="icon211"></div> 
							<div class="text">
								合买大厅
							</div>
						</div>
					</div> 
				</a>
				<!----> 
				<div class="fast-nav-wrapper">
					<div class="fast-nav">
						<ul></ul>
					</div>
				</div>
			</div>
		</div>

		<div class="header_info fr">

			<div style="position: relative;top: -12px;">
				<a target="max_nav" href="/memberCenter/personalInfo">
					<img class="imgtongbu" src="__ROOT__{$userinfo.face}" height="50" width="50" style="margin-right: 20px;border-radius: 50px;">
				</a>
			</div>
			<div style="font-size: 14px;color: #fff;align-items: center;height: 38px;" class="user-text22">
				<div class="nickname22">
					欢迎您！
					<em>{$userinfo['username']}</em>
				</div>
			</div>
			<div style="font-size: 14px;color: #fff;align-items: center;height: 25px;" class="user-text">
				<span class="xiaoxi"></span>
			</div>
			<div class="webedu" style="height: 38px;position:relative;cursor: pointer;">
				<div class="balance22">
					<span class="edu555">可用余额：</span>
					<em class="smallmoney">{$userinfo['balance']}</em>
					<i title="刷新" class="shuaxineee refresh_money" id="showImg"></i>
					
				</div>
				<div class="quanbuyue">
				    <ul>
				        <li>
				            <i class="iconfont">&#xe662;</i>
				            <span class="t_name">彩票余额</span>
				            <span class="t_money">￥<span id="balance">{$userinfo['balance']}</span></span>
				        </li>
				        <li>
				            <i class="iconfont">&#xe662;</i>
				            <span class="t_name">洗码额度</span>
				            <span class="t_money">￥<span id="xima">{$userinfo['xima']}</span></span>
				        </li>
				        <li>
				            <i class="iconfont">&#xe662;</i>
				            <span class="t_name">余额宝</span>
				            <span class="t_money">￥<span id="yeball">{$yeball}</span></span>
				        </li>
				        <li>
				            <i class="iconfont">&#xe662;</i>
				            <span class="t_name">娱乐钱包</span>
				            <span class="t_money">￥<span id="ngbalance">{$userinfo['ngbalance']}</span></span>
				        </li>
				        <li>
				            <i class="iconfont">&#xe662;</i>
				            <span class="t_name">剩余积分</span>
				            <span class="t_jifen"><span id="point">{$userinfo['point']}</span></span>
				        </li>
				    </ul>
				</div>
			</div>	
			<div class="btn-box111">
				<a href="/loginout"><span class="btn11bx"><i class="imgbox22"></i></span></a>
			</div>
		</div>
	</div>


	<!--换肤-->
	<link rel="stylesheet" href="/ascn/css/bg_skin.css" type="text/css">

	<div class="md-modal md-effect-8" id="modal-8">
		<div class="md-content">
			<h3>选择背景</h3>
			<div>
				<div class="beijin">

					<li class="swf11" data="nsc_background01"><a href="javascript:(0);" class=""><img src="/ascn/images/chj.jpg"></a></li>
					<li class="swf11" data="nsc_background02"><a href="javascript:(0);" class=""><img src="/ascn/images/swf.png"></a></li>
					<li class="swf11" data="nsc_background03"><a href="javascript:(0);" class=""><img src="/ascn/images/xyh.png"></a></li>
					<li class="swf11" data="nsc_background04" style="margin-right: 0;"><a href="javascript:(0);"><img src="/ascn/images/zqbb.png"></a></li>
					<li class="swf11" data="nsc_background05"><a href="javascript:(0);"><img src="/ascn/images/hgbz.png"></a></li>
					<li class="swf11" data="nsc_background06"><a href="javascript:(0);" class=""><img src="/ascn/images/paoc.png"></a></li>
					<li class="swf11" data="nsc_background07"><a href="javascript:(0);" class=""><img src="/ascn/images/dah.jpg"></a></li>
					<li class="swf11" data="nsc_background08" style="margin-right: 0;"><a href="javascript:(0);" class=""><img src="/ascn/images/dongm.jpg"></a></li>
				</div></div>
				<div class="skin_page"><a href="javascript:(0);" class="btn_default"><i class="ic-hfmr">↺</i>恢复默认</a><a href="javascript:(0);" class="btn_cancel">取 消</a><a href="javascript:(0);" class="btn_set"><i class="ic-bcsz">✔</i>保存设置</a></div>
			</div>
			<button href="javascript:(0);" style="display: none;" class="md-close">Close me!</button>

		</div>

		<!--换肤-->
		<div class="main_body">
			<div class="nav_left slideNav ">
				<div class="nav_top" style="height: 60px;">
					<div class="logo-wrap">
						<a href="/home" class="logo" id="left_top"></a>
					</div>
					<div href="#" class="change_flex clearFix" style="position: fixed;bottom: 10px;left: 9px;">

						<input style="display:none" class="change_input" id="change_slide" type="checkbox">
						<div class="change_lable fr" for="change_slide"></div>
					</div> 
				</div>

				<div class="list_scroll">
					<div class="lists_wrap lottery_list">
						<div class="panel-group" id="lottery_all" role="tablist" aria-multiselectable="true">
							<!--热门彩-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_11" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_hot.png" class="mCS_img_loaded">
											<span>热门彩</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="hotcaipiao" id="cp" offset="0" length="12">
												<if condition="$cp['typeid'] eq 'k3'">
													<li>
														<a href="/lotterys/k3/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'lhc'">
													<li>
														<a href="/lotterys/lhc/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'ssc'">
													<li>
														<a href="/lotterys/ssc/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'pk10'">
													<li>
														<a href="/lotterys/pk10/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'keno'">
													<li>
														<a href="/lotterys/keno/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'x5'">
													<li>
														<a href="/lotterys/x5/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'dpc'">
													<li>
														<a href="/lotterys/dpc/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
												<if condition="$cp['typeid'] eq 'xy28'">
													<li>
														<a href="/lotterys/xy28/{$cp.name}" target="max_nav"><span class="hot animated"></span>
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--时时彩-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_1" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_ssc.png" class="mCS_img_loaded">
											<span>时时彩</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition="$cp['typeid'] eq 'ssc'">
													<li>
														<a href="/lotterys/ssc/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--选5-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_2" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_llor5.png" class="mCS_img_loaded">
											<span>11选5</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition="$cp['typeid'] eq 'x5'">
													<li>
														<a href="/lotterys/x5/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li> 
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--快3-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_3" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_kuai3.png" class="mCS_img_loaded">
											<span>快三</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition="$cp['typeid'] eq 'k3'">
													<li>
														<a href="/lotterys/k3/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--PC蛋蛋-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_4" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_pcdd.png" class="mCS_img_loaded">
											<span>PC蛋蛋</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition="$cp['typeid'] eq 'xy28'">
													<li>
														<a href="/lotterys/xy28/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--PK10-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_5" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_pk10.png" class="mCS_img_loaded">
											<span>PK10</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition=" $cp['typeid'] eq 'pk10'">
													<li>
														<a href="/lotterys/pk10/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--联销彩-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_6" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/icon_qita.png" class="mCS_img_loaded">
											<span>联销彩</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<volist name="other" id="cp">
												<if condition="$cp['typeid'] eq 'lhc'">
													<li>
														<a href="/lotterys/lhc/{$cp.name}" target="max_nav">
														{$cp[title]}</a>
													</li>
												</if>
											</volist>
										</ul>
									</div>
								</div>
							</div>
							<!--棋牌游戏-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_7" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/left_icon04.png" class="mCS_img_loaded">
											<span>棋牌游戏</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<li>
												<a href="/Game/paly_ky/type_7" target="max_nav">
												开元棋牌</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--电子游戏-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_8" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/left_icon03.png" class="mCS_img_loaded">
											<span>电子游戏</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<li>
												<a href="/Game/paly_bbin/type_2" target="max_nav">
												BBIN电子</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--真人视讯-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_9" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/left_icon01.png" class="mCS_img_loaded">
											<span>真人视讯</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<li>
												<a href="/Game/paly_ag/type_1" target="max_nav">
												AG视讯厅</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--体育赛事-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#lottery_all" href="#collapse_10" aria-expanded="false" class="category collapsed">
											<img src="/ascn/images/left_icon02.png" class="mCS_img_loaded">
											<span>体育赛事</span>
											<i class="glyphicon glyphicon-plus"></i>
										</a>
									</h4>
								</div>
								<div id="collapse_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="lottery_0" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<ul>
											<li>
												<a href="/Game/paly_ibc/type_4" target="max_nav">
												沙巴体育</a>
											</li>
											<li>
												<a href="/Game/paly_ss/type_4" target="max_nav">
												三昇体育</a>
											</li>
											<li>
												<a href="/Game/paly_newbb/type_4" target="max_nav">
												新BB体育</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--电竞牛-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a href="/Game/paly_esb/type_5" target="max_nav">
											<img src="/ascn/images/left_icon06.png" class="mCS_img_loaded">
											<span>电竞牛 &nbsp;[IM]</span>
										</a>
									</h4>
								</div>
							</div>
							<!--div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a href="/Game/paly_avia/type_5" target="max_nav">
											<img src="/ascn/images/left_icon06.png" class="mCS_img_loaded">
											<span>泛亚电竞 &nbsp;</span>
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a href="/Game/paly_newbb/type_5" target="max_nav">
											<img src="/ascn/images/left_icon06.png" class="mCS_img_loaded">
											<span>新BB电竞 &nbsp;</span>
										</a>
									</h4>
								</div>
							</div-->
							<!--手机app-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a href="/mobile" target="max_nav">
											<img src="/ascn/images/left_icon08.png" class="mCS_img_loaded">
											<span>手机APP</span>
										</a>
									</h4>
								</div>
							</div>
							<!--换肤-->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="lottery_0">
									<h4 class="panel-title">
										<a href="#" data-modal="modal-8" class="md-trigger">
											<img src="/ascn/images/left_icon07.png" class="mCS_img_loaded">
											<span>背景切换</span>
										</a>
									</h4>
								</div>
							</div>



						</div>

					</div>

				</div>
				<div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
					<div class="mCSB_draggerContainer">
						<div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 180px; top: 107px; display: block; height: 779px; max-height: 876px;" oncontextmenu="return false;">
							<div class="mCSB_dragger_bar" style="line-height: 180px;">

							</div>
						</div>
						<div class="mCSB_draggerRail">

						</div>
					</div>
				</div>






			</div>
			<div class="section-wrapper" id="index_div">
				<iframe changeable="true" src="/ashome" frameborder="0" id="max_nav" name="max_nav" scrolling="0" width="100%" height="100%" class="bg-gray " style="height: 100%;">

				</iframe>
			</div>

		</div>
		<div class="md-overlay"></div>
		<script type="text/javascript">

			jQuery(document).ready(function($){

				$('.ct h3 span').click(function(){

					$(this).addClass("selected").siblings().removeClass();

					$('.ct > ul').eq($(this).index()).addClass('show');
					$('.ct > ul').eq($(this).index()).siblings().removeClass('show');
				});
				$("pre > code").addClass("language-php");
			});


		</script>
		<script>
			var ck_left_on = 3;
			$(".change_lable ").click(function(){
				if(ck_left_on%2===0){
					$("#header").removeClass("active");
					$(".slideNav ").removeClass("active");
					$(".change_title ").html("界面切换");
					$("#index_div ").removeClass("active");
				}else{
					$("#header").addClass("active");
					$(".slideNav ").addClass("active");
					$(".change_title ").html("...");
					$("#index_div ").addClass("active");
				}
				ck_left_on++;
			})
			$(".main_nav_li li").click(function () {
				$(".main_nav_li li").removeClass('active');
				$(this).addClass('active');
			})
		</script>
		<!--script>
			
			var csslink = document.getElementById("changelink");
			
      
      
      function changetheme(color){
      	csslink.href = "/ascn/css/"+color+".css";
        //保存主题到cookies
        document.cookie="theme="+color;
    }
    
    function loadtheme(){
        //从cookies读取主题
        //var themevalue=document.cookie.split(";")[0].split("=")[1];
        var themevalue=document.cookie.replace(/(?:(?:^|.*;\s*)theme\s*\=\s*([^;]*).*$)|^.*$/, '$1');
        if(themevalue==null){
        	csslink.href = "/ascn/css/indexhei.css";
        }else{
        	csslink.href = "/ascn/css/"+themevalue+".css";
        }
    }
     //初始化主题
      loadtheme();
    
</script-->
<script>
	$(function () {
		$('.refresh_money').click(function () {
			$.ajax({
				url:"{:U('Account/refreshmoney')}",
				type:'POST',
				success :function (json) {
				    var sacn = eval("("+json+")");
					$('.smallmoney').html(sacn.balance);
					$('#balance').html(sacn.balance);
					$('#xima').html(sacn.xima);
					$('#yeball').html(sacn.yeball);
					$('#ngbalance').html(sacn.ngbalance);
					$('#point').html(sacn.point);
				}
			})
		})

	})
</script>
<script>
	window.onload = function(){ 
		var current = 0;
		document.getElementById('showImg').onclick = function(){
			current = (current-360);
			this.style.transform = 'rotate('+current+'deg)';
		}
	};
</script>
<script src="/ascn/js/modernizr.custom.js"></script>

<script src="/ascn/js/modalEffects.js"></script>
<script type="text/javascript" src="/ascn/js/a3bj.js"></script>
</body>
</html>
<html>
<head lang="en"> 

	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
	<meta charset="UTF-8" /> 
	<meta name="renderer" content="webkit" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> 
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	
	<!--爱尚互联-->
	<link rel="stylesheet" href="/ascn/css/animate.min.css">
	<link rel="stylesheet" href="/ascn/css/user.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link type="text/css" rel="stylesheet" href="/ascn/css/common-white.css" /> 
	<link type="text/css" rel="stylesheet" href="/ascn/css/center-white.css" /> 
	<link type="text/css" rel="stylesheet" href="/ascn/css/style_home.css" />
	<link href="/ascn/css/styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="/ascn/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<script type="text/javascript" language="javascript" src="/ascn/js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/ascn/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="/ascn/js/jquery.skitter.min.js"></script>  
	
	
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar: true, 
				dots: true, 
				preview: true
			});
		});
	</script> 
	<!--爱尚互联-->
</head>

<body class="bg-gray" style="" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false"> 
	<div class="user-top-to">
		<div class="user-top-to2">
			<div class="container no-atuo"> 
				<div class="tiger-wrapper" id="content"> 
					<div class="content-left mCustomScrollbar _mCS_1">
						<div id="mCSB_1" class="mCustomScrollBox mCS-dark-thin mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
							<div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr"> 
								<!--内容--> 
								<div class="index_box"href="#">
									<div style="margin: 0 auto;width: 1200px;">	   
										<div id="page"class="fadeInLeft">
											<div id="content">
												<div class="border_box">
													<div class="box_skitter box_skitter_large">
														<ul>
															<volist name="address" id="vo">
																<eq name="vo[id]" value="1">
																	<li><img src="{$vo.address}" class="cube" /></li>
																</eq>
																<eq name="vo[id]" value="2">
																	<li><img src="{$vo.address}" class="block" /></li>
																</eq>
																<eq name="vo[id]" value="3">
																	<li><img src="{$vo.address}" class="cubeStop" /></li>
																</eq>
																<eq name="vo[id]" value="4">
																	<li><img src="{$vo.address}" class="cube" /></li>
																</eq>
																<eq name="vo[id]" value="5">
																	<li><img src="{$vo.address}" class="block" /></li>
																</eq>
															</volist>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="xiaoaiapp fadeInRight"style="animation-duration: 1.0s;">
											<img src="/ascn/images/app.png" class="iosapp">
											<img src="/ascn/images/app.png"class="azapp">
										</div>
									</div>
									<div style="margin: 0 auto;width: 1200px;">	
										<div class="fadeInRight">
											<div class="jiekou3">
												<a href="http://www.baidu.com" class="imgs">
													<img src="/ascn/images/qp.png"><div class="xiaoai22">棋牌游戏</div>
												</a>
												<a href="#" class="imgs">
													<img src="/ascn/images/by.png"><div class="xiaoai22">捕鱼游戏</div>
												</a>
												<a href="#" class="imgs">
													<img src="/ascn/images/zr.png"><div class="xiaoai22">真人视讯</div>
												</a>
												<a href="#" class="imgs">
													<img src="/ascn/images/dj.png"><div class="xiaoai22">电子竞技</div>
												</a>
											</div>
											<div class="xiaoaitongxue">
												<div class="xiaoaiimg"><a href="/resources/lol_s10.php"><img src="/ascn/images/lols10.png"></a></div>
												<div class="xiaoaiimg"><a href="http://www.baidu.com"><img src="/ascn/images/shipin.png"></a></div>
											</div>
										</div>
										<div class="info-wrapper">
											<div class="safety-info">
												<div class="con-wrapper">
													<div class="line-box">
														<div class="hot-lottery">
															安全中心
														</div> 
														<div class="line"></div> 
														<div class="index-more">
															<a href="/memberCenter/personalInfo" class="">更多 &gt;&gt;</a>
														</div>
													</div> 
													<div class="login-info">
														<ul>
															<li>
																<div class="info-title">
																	账号安全等级 ：
																</div> 
																<div class="info-con">
																	<ul class="safety-level low-safety">
																		<div role="slider" aria-valuenow="0.5555555555555556" aria-valuetext="" aria-valuemin="0" aria-valuemax="5" tabindex="0" class="el-rate">
																			<?php if($schedule<30){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(212, 0, 0); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=30 && $schedule<50){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #f00; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #f00; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=50 && $schedule<70){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #FF9800; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else if($schedule>=70 && $schedule<90){echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #cddc39; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: rgb(239, 242, 247); width: 50%;">&#xe638;</i></span>';}else{echo '<span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span><span class="el-rate__item" style="cursor: auto;"><i class="iconfont" style="color: #67c23a; width: 50%;">&#xe638;</i></span>';}?>
																		</div> 
																		<li></li>
																	</ul>
																</div> 
																<div class="perfecting-info">
																	<a href="/memberCenter/personalInfo" class="">【完善信息】</a>
																</div>
															</li> 
															<li>
																<div class="info-title">
																	上次登录IP ：
																</div> 
																<div class="info-con">
																	{$Think.session.lastlogin.lastip}
																</div>
															</li> 
															<li>
																<div class="info-title">
																	上次登录时间 ：
																</div> 
																<div class="info-con">
																	{$Think.session.lastlogin.lasttime}
																</div>
															</li> 
															<li>
																<div class="info-title">
																	上次登录位置 ：
																</div> 
																<div class="info-con">
																	{$Think.session.lastlogin.login_address}
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div> 
											<div class="notice-con">
												<div class="con-wrapper">
													<div class="line-box">
														<div class="notice-title">
															公告中心
														</div> 
														<div class="line"></div> 
														<a href="/memberCenter/Notice">
															<div class="index-more">
																更多 &gt;&gt;
															</div>
														</a>
													</div> 
													<div class="notice-info">
														<volist name="gonggao" id="vo"> 
															<div class="notice-name"href="javascript:void(0);" onclick="ggshow({$vo['id']})">
																<span>{$vo[title]}</span> 
																<em>{$vo.oddtime|date="Y-m-d",###}</em>
															</div>
														</volist>
													</div>
												</div>
											</div>
										</div>
										<div style="margin: 0 auto;width: 1200px;">
											<div class="el-dialog__wrapper" style="z-index: 2005;display:none;">
												<div class="el-dialog noticePopver ascnshow" style="margin-top: 18vh;">
													<div class="el-dialog__header">
														<span class="el-dialog__title"></span>
														<button type="button" aria-label="Close" class="el-dialog__headerbtn"></button>
													</div>
													<div class="el-dialog__body">
														<div class="noticeCon">
															<div class="ncon el-scrollbar">
																<div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
																	<div class="el-scrollbar__view">
																		<div class="tit">
																			<h3 class="ggshowtitle"></h3> 
																			<em class="ggshowoddtime"></em>
																		</div> 
																		<div class="con ggshowcon">

																		</div>
																	</div>
																</div>
																<div class="el-scrollbar__bar is-horizontal">
																	<div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
																</div>
																<div class="el-scrollbar__bar is-vertical">
																	<div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
																</div>
															</div>
															<div class="el-loading-mask" style="display: none;">
																<div class="el-loading-spinner">
																	<svg viewbox="25 25 50 50" class="circular">
																		<circle cx="50" cy="50" r="20" fill="none" class="path"></circle>
																	</svg>
																	
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<!--内容--> 
										</div>

									</div>
								</div> 
							</div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
		<include file="Public/footer" />
	</div>
	<script>
		function ggshow(bid){
			$.ajax({
				url: "/memberCenter/noticeDetail/"+bid,
				type: 'GET',
				success: function (data) {
					var tit = $(data).find('#title').text();
					var tits = '【'+tit+'】';
					var oddtime = $(data).find('#oddtime').text();
					var content = $(data).find('#content').html();
					$('.el-dialog__wrapper').show();
					$('.ggshowtitle').text(tits);
					$('.ggshowoddtime').text(oddtime);
					$('.ggshowcon').html(content);

				}
			})
		}
		$(document).ready(function(){
			$(".el-dialog__header button").click(function(){
				$('.el-dialog').removeClass('ascnshow');
				$('.el-dialog').addClass('ascnhide');
				setTimeout(function() {
					$('.el-dialog__wrapper').hide();
					$('.el-dialog').removeClass('ascnhide');
					$('.el-dialog').addClass('ascnshow');
				}, 200);
			});
		});
	</script>

</body>
</html>
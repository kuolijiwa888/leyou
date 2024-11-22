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
	<link rel="stylesheet" type="text/css" href="/resources/css/artDialog.css">
	<style>
		.end ul li a .icon-7{
			color: #434354;
		}
	</style>
</head>
<body>
	<!--头部-->
	<header id="J-sd-demo"class="indexheader">
		{:GetVar('webtitle')}
		<button class="J-ac-btn" data-type="left"><i class="iconfont icon-1">&#xe602;</i></button>
		<a href="{:GetVar('kefuthree')}"><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div id="J-left" style="display:none">
		<include file="Member/caidan" />
	</div>
	<!--轮播-->
	<div class="banner">
		<ul>
			<li>
				<img src="/ascn/mobile/images/banner1.jpg"alt="">
			</li>
		</ul>
	</div>
	<!--公告-->
	<div class="notice">
		<a href="/userCenter/notice">
			<i class="iconfont icon-3">&#xe61e;</i>
			<li class="noticeli"><span>{$gglist[title]}</span></li>
			<a class="notice2">公告</a>
		</a>
	</div>
	<!--导航图标-->
	<div class="ng5game">
		<ul>
			<li>
				<a href="/lotteryMore">
					<p class="szcp"><i class="iconfont icon-4">&#xea76;</i></p>
					<span>数字彩票</span>
				</a>
			</li>
			<li>
				<a href="/lotteryMore?type=1">
					<p class="zrsx"><i class="iconfont icon-4">&#xe6c3;</i></p>
					<span>真人视讯</span>
				</a>
			</li>
			<li>
				<a href="/lotteryMore?type=2">
					<p class="qpyl"><i class="iconfont icon-5">&#xe6df;</i></p>
					<span>棋牌娱乐</span>
				</a>
			</li>
			<li>
				<a href="/lotteryMore?type=4">
					<p class="dzyy"><i class="iconfont icon-4">&#xe636;</i></p>
					<span>电子游艺</span>
				</a>
			</li>
			<li>
				<a href="/lotteryMore?type=5">
					<p class="tydj"><i class="iconfont icon-4">&#xe61f;</i></p>
					<span>体育电竞</span>
				</a>
			</li>
		</ul>
	</div>
	<!--游戏-->
	<div class="hotgames">
		<div class="hotgames-title">
			<i class="left"></i><a>热门游戏</a><i class="right"></i>
		</div>
		<volist name="bncaipiao" id="value" key="key" >
			<eq name="value[name]" value="ssc1fc">
			    <a href="/lottery/ssc/{$value[name]}">
				<div class="hotgamescqssc">
					<div class="hotcqssc">
						<span>{$value['title']}</span>
						<small>{$value['expect']}</small>
					</div>
					<div class="number">
						<ul><li><span>{$value[opencode][0]}</span></li></ul>
						<ul><li><span>{$value[opencode][1]}</span></li></ul>
						<ul><li><span>{$value[opencode][2]}</span></li></ul>
						<ul><li><span>{$value[opencode][3]}</span></li></ul>
						<ul><li><span>{$value[opencode][4]}</span></li></ul>
					</div>
				</div>
				</a>
			</eq>
		</volist>

		<ul class="hotlotterys">
			<volist name="bncaipiao" id="value" key="key" >
				<eq name="value[name]" value="cqssc">
					<li>
						<a href="/lottery/ssc/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-1.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="ssc1fc">
					<li>
						<a href="/lottery/ssc/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-65.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="gd11x5">
					<li>
						<a href="/lottery/x5/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-9.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="yf11x5">
					<li>
						<a href="/lottery/x5/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-74.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="xy28">
					<li>
						<a href="/lottery/xy28/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-60.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="jsk3">
					<li>
						<a href="/lottery/k3/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-16.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="jisk3">
					<li>
						<a href="/lottery/k3/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-69.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="bjpk10">
					<li>
						<a href="/lottery/pk10/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-53.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
				<eq name="value[name]" value="xyft">
					<li>
						<a href="/lottery/pk10/{$value[name]}">
							<i class="width100"></i>
							<div>
								<img src="/ascn/mobile/images/lottery/game-55.png"alt="{$cp[title]}">
							</div>
							<span><i>{$value['title']}</i><br><i class="two">{$value[ftitle]|msubstr='0','6','utf-8',''}</i></span>
							<i class="iconfont icon-6">&#xe618;</i>
						</a>
					</li>
				</eq>
			</volist>
		</ul>
	</div>
	<!--版权-->
	<div class="copyright">
		<span>Copyright ⓒ 2020 by Corporation, All Rights Reserved.</span><br>
		<span>Technical support:Ascloud/Gaobo Technology</span></i>
	</div>
	<!--底部导航-->
	<include file="Public/footer" />
	<script src="__JS__/jquery-3.1.1.min.js"></script> 
	<script type="text/javascript" src="/resources/js/artDialog.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<!--script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script-->
	<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
	<script type="text/javascript" src="/ascn/mobile/js/zepto.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/zepto2.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/slideAlert.js"></script>
	<script type="text/javascript" src="/resources/js/artDialog.js"></script>

</body>
</html>
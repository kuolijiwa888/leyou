<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{:GetVar('webtitle')}</title>
	<script type="text/javascript" src="/ascn/mobile/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/style.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/icon/iconfont.css">
	<link rel="stylesheet" type="text/css" href="/ascn/mobile/css/swiper-bundle.min.css">
	<script type="text/javascript" src="/ascn/mobile/js/swiper-bundle.min.js"></script>
	<style>
		.end ul li a .icon-8{
			color: #434354;
		}
	</style>
</head>
<body id="J-sd-demo">
	<header id="top"class="gamesheader">
		<button class="J-ac-btn" data-type="left"><i class="iconfont icon-1">&#xe602;</i></button>
		<a href="{:GetVar('kefuthree')}"><i class="iconfont icon-2">&#xe67c;</i></a>
		选择游戏
	</header>
	<div id="J-left" style="display:none">
		<include file="Member/caidan" />
	</div>
	<!---->
	<div class="lotterys-new">
		<div class="lotterys-new-top">
			<ul>
				<li class="border_r_1px active" lottery_code="biaozhun">
					<i><img src="/ascn/mobile/images/ico_gameListTab01.png"></i>
					标准模式
				</li>
				<li class="border_r_1px" lottery_code="shuangmian">
					<i><img src="/ascn/mobile/images/ico_gameListTab02.png"></i>
					双面模式
				</li>
				<li class="border_r_1px" lottery_code="shixun">
					<i><img src="/ascn/mobile/images/ico_gameListTab03.png"></i>
					视讯游艺
				</li>
			</ul>
		</div>
		<!--标准-->
		<div class="swiper-container">
			<div class="ascn30041321 swiper-wrapper">
				<div class="lotterys-new-notice biaozhun swiper-slide">
					<div class="new-left ascn_biaozhun">
						<span class="act" lottery_code="sacn_remen">热门彩种</span>
						<span lottery_code="sacn_ssc">时时彩</span>
						<span lottery_code="sacn_pk10">PK10</span>
						<span lottery_code="sacn_11x5">11选5</span>
						<span lottery_code="sacn_k3">快三</span>
						<span lottery_code="sacn_xy28">PC蛋蛋</span>
						<span lottery_code="sacn_lhc">联销彩</span>
					</div>
					<div class="new-right ascn_biaozhun_30041321">
						<div class="new-right-start sacn_remen">
							<volist name="hotcaipiao" id="cp" offset="0" length="12">
								<if condition="$cp['typeid'] eq 'ssc'">
									<a href="/lottery/ssc/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'x5'">
									<a href="/lottery/x5/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'k3'">
									<a href="/lottery/k3/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'xy28'">
									<a href="/lottery/xy28/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'pk10'">
									<a href="/lottery/pk10/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'lhc'">
									<a href="/lottery/lhc/{$cp.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
							</volist>
						</div>
						<div class="new-right-start sacn_ssc" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="ssc">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacn_pk10" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="pk10">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacn_11x5" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="x5">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacn_k3" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="k3">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacn_xy28" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="xy28">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacn_lhc" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="lhc">
									<a href="/lottery/{$value.typeid}/{$value.name}" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
					</div>
				</div>
				<!--双面-->
				<div class="lotterys-new-notice shuangmian swiper-slide">
					<div class="new-left ascn_shuangmian">
						<span class="act" lottery_code="sacnsm_remen">热门彩种</span>
						<span lottery_code="sacnsm_ssc">时时彩</span>
						<span lottery_code="sacnsm_pk10">PK10</span>
						<span lottery_code="sacnsm_11x5">11选5</span>
						<span lottery_code="sacnsm_k3">快三</span>
						<span lottery_code="sacnsm_xy28">PC蛋蛋</span>
						<span lottery_code="sacnsm_lhc">联销彩</span>
					</div>
					<div class="new-right ascn_shuangmian_30041321">
						<div class="new-right-start sacnsm_remen">
							<volist name="hotcaipiao" id="cp" offset="0" length="12">
								<if condition="$cp['typeid'] eq 'ssc'">
									<a href="/lotterys_hot/ssc/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'x5'">
									<a href="/lotterys_hot/x5/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'k3'">
									<a href="/lotterys_hot/k3/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'xy28'">
									<a href="/lotterys_hot/xy28/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'pk10'">
									<a href="/lotterys_hot/pk10/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
								<if condition="$cp['typeid'] eq 'lhc'">
									<a href="/lotterys_hot/lhc/{$cp.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$cp.name}.png"></div>
										<div>{$cp[title]}</div>
									</a>
								</if>
							</volist>
						</div>
						<div class="new-right-start sacnsm_ssc" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="ssc">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacnsm_pk10" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="pk10">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacnsm_11x5" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="x5">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacnsm_k3" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="k3">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacnsm_xy28" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="xy28">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
						<div class="new-right-start sacnsm_lhc" style="display:none;">
							<volist name="bncaipiao" id="value" key="key" >
								<eq name="value.typeid" value="lhc">
									<a href="/lotterys_hot/{$value.typeid}/{$value.name}/1" class="gameitem">
										<div><img src="/ascn/mobile/images/lottery/game-{$value.name}.png"></div>
										<div>{$value.title}</div>
									</a>
								</eq>
							</volist>
						</div>
					</div>
				</div>
				<!--视讯-->
				<div class="lotterys-new-ng shixun swiper-slide">
					<div class="ng-games-body">
						<div class="ng-body">
							<div class="ng-title"><span>棋牌游戏</span></div>
							<ul class="ng-list clearfix">
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Ky.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-LgQp.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-VgQp.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-LcQp.png"></a>
							</ul>
							<div class="ng-title"><span>真人视讯</span></div>
							<ul class="ng-list clearfix">
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Ag.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Wml.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Ebet.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Ab.png"></a>
							</ul>
							<div class="ng-title"><span>体育游戏</span></div>
							<ul class="ng-list clearfix">
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Tcg.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Ug.png"></a>
								<a href="#"><img src="/ascn/mobile/images/h5-gamelist-Aio.png"></a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!--底部导航-->
	<include file="Public/footer" />
	<script src="/ascn/mobile/js/jquery-3.1.1.min.js"></script>
	<script>
		$(document).on("click", ".ascn_biaozhun span", function() {
			$(this).addClass('act').siblings('span').removeClass('act');
			lottery_code = $(this).attr('lottery_code');
			$(".ascn_biaozhun_30041321 > div."+lottery_code).show().siblings('div').hide();
		});
		$(document).on("click", ".ascn_shuangmian span", function() {
			$(this).addClass('act').siblings('span').removeClass('act');
			lottery_code = $(this).attr('lottery_code');
			$(".ascn_shuangmian_30041321 > div."+lottery_code).show().siblings('div').hide();
		});
	</script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			autoHeight : true,
			scrollbar: {
				el: '.swiper-scrollbar',
				hide: false,
			},
			on: {
				slideChangeTransitionStart: function() {
					$(".lotterys-new-top .active").removeClass('active');
					$(".lotterys-new-top li").eq(this.activeIndex).addClass('active');
				}
			}
		});
		$(".lotterys-new-top li").on('click', function(e) {
			e.preventDefault()
			$(".lotterys-new-top .active").removeClass('active')
			$(this).addClass('active')
			swiper.slideTo($(this).index())
		})
	</script>
	<script type="text/javascript" src="/ascn/mobile/js/zepto.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/zepto2.min.js"></script>
	<script type="text/javascript" src="/ascn/mobile/js/slideAlert.js?_=1223"></script>
</body>
</html>
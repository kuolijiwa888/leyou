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


	<link rel="stylesheet" href="__CSS__/activity.css">
	<style>
		.end ul li a .icon-9{
			color: #434354;
		}
	</style>

	<script src="__JS__/jquery-3.1.1.min.js"></script> 


</head>
<body id="J-sd-demo">
	<!--头部-->
	<header class="indexheader">
		{:GetVar('webtitle')}
		<button class="J-ac-btn" data-type="left"><i class="iconfont icon-1">&#xe602;</i></button>
		<a href="{:GetVar('kefuthree')}"><i class="iconfont icon-2">&#xe67c;</i></a>
	</header>
	<div id="J-left" style="display:none">
		<include file="Member/caidan" />
	</div>

	<div class="indexactivity">
		<ul>
			<li class="J-ac-btn" data-type="bottom">
				<a>
					<div class="activity-no">
						<em>1</em>
					</div>
					<div class="activity-p">
						<p>网银转账银行卡</p>
						<em>活动时间:2019-10-17</em>
					</div>
					<div class="activity-right">
						<i class="iconfont icon-13">&#xe618;</i>
					</div>
				</a>
				<div id="J-bottom" style="display:none">
					<div class="gonggaoxq-top"><span>网银转账银行卡</span></div>
					<div class="gonggaoxq-img"><img src="__IMG__/activity_bg5.jpg"></div>
					<div class="gonggaoxq-img"><img src="__IMG__/201906211324465121.jpg"></div>
				</div>
			</li>
			<li class="J-ac-btn1" data-type="bottom">
				<a>
					<div class="activity-no">
						<em>2</em>
					</div>
					<div class="activity-p">
						<p>首存送彩金，下载APP送彩金</p>
						<em>活动时间:2019-10-17</em>
					</div>
					<div class="activity-right">
						<i class="iconfont icon-13">&#xe618;</i>
					</div>
				</a>
				<div id="J-bottom1" style="display:none">
					<div class="gonggaoxq-top"><span>首存送彩金，下载APP送彩金</span></div>
					<div class="gonggaoxq-img"><img src="__IMG__/activity_bg4.jpg"></div>
					<div class="gonggaoxq-img"><img src="__IMG__/2019080919154286861.jpg"></div>
				</div>
			</li>
			<li class="J-ac-btn2" data-type="bottom">
				<a>
					<div class="activity-no">
						<em>3</em>
					</div>
					<div class="activity-p">
						<p>每日首存</p>
						<em>活动时间:2019-10-17</em>
					</div>
					<div class="activity-right">
						<i class="iconfont icon-13">&#xe618;</i>
					</div>
				</a>
				<div id="J-bottom2" style="display:none">
					<div class="gonggaoxq-top"><span>每日首存</span></div>
					<div class="gonggaoxq-img"><img src="__IMG__/activity_bg7.jpg"></div>
					<div class="gonggaoxq-img"><img src="__IMG__/2019080919123563911.jpg"></div>
				</div>
			</li>
			<li class="J-ac-btn3" data-type="bottom">
				<a>
					<div class="activity-no">
						<em>4</em>
					</div>
					<div class="activity-p">
						<p>每日加奖</p>
						<em>活动时间:2019-10-17</em>
					</div>
					<div class="activity-right">
						<i class="iconfont icon-13">&#xe618;</i>
					</div>
				</a>
				<div id="J-bottom3" style="display:none">
					<div class="gonggaoxq-top"><span>每日首存</span></div>
					<div class="promotion_img">
						<img src="__IMG__/banner2.png" alt="">
					</div>

					<div class="promotion_grade">
						<p>
							<span>当前等级：</span>
							<em>{$userinfo.groupname}</em>
						</p>

						<if condition="$userinfo.groupid neq '10'">
							<p>
								<span>昨日投注：</span>	
								<em><eq name="countamount" value="">0<else />{$countamount}</eq></em>
							</p>
							<p>
								<span>加奖比例：</span>	
								<em>{$fanshuibili}%</em>
							</p>
							<p>
								<span>可得加奖：</span>	
								<em><eq name="jiajiang" value="">0<else />{$jiajiang}</eq></em></em>
							</p>
						</div>
					</if>
					<div class="promotion_btn">
						<notempty name="Think.session.userinfo">

							<if condition="$userinfo.groupid neq '10'">
								<eq name="jiajiang" value="">
									<strong><a href="javascript:void(0);" class="btn no_login_btn">无加奖</a></strong>
									<else />
									<strong><a href="javascript:void(0);" class="btn btn-danger" onclick="qingquyongqu();" >点击领取加奖</a></strong>
								</eq>
								<else />
								<strong><a href="javascript:void(0);" class="btn no_login_btn">无加奖</a></strong>
							</if>
							<else />
							<strong><a href="/login" class="btn no_login_btn">未登录</a></strong>
						</notempty>
					</div>
					<notempty name="Think.session.userinfo">
						<table class="am-table am-table-bordered am-table-sss">
							<tbody>
								<tr><th>领取时等级</th><th>流水金额</th><th>比例</th><th>金额</th><th>时间</th><th>状态</th></tr>
								<volist name="lqlist" id="vo">
									<tr>
										<td>{$vo.groupname}</td>
										<td>{$vo.touzhuedu}</td>
										<td>{$vo.bili}</td>
										<td>{$vo.amount}</td>
										<td>{$vo.oddtime|date="m-d H:i",###}</td>
										<td><if condition="$vo['shenhe'] eq 0"><span style="color:grey">审核中</span><elseif condition="$vo['shenhe'] eq 1"/><span style="color:green">通过</span></if></td></tr>
									</volist>
								</tbody>
							</table>
						</notempty>
						<div class="ty_page pages" id="lrx_ty_page">{$pageshow}</div>
						<div class="promotion_main">
							<div class="promotion_rule">
								<h2 class="promotion_h2">
									加奖比例
								</h2>
								<table class="am-table am-table-bordered">
									<thead>
										<tr>
											<th>等级/投注额</th>
											<volist name="mintozhu" id="value">
												<th>{$value[0]}+</th>
											</volist>
										</tr>
									</thead>
									<tbody>
										<volist name="bilisss"  id="value">
											<tr>
												<td>{$value[0]}</td>
												<td>{$value[1]}%</td>
												<td>{$value[2]}%</td>
												<td>{$value[3]}%</td>
											</tr>
										</volist>
									</tbody>
								</table>
							</div>
							<div class="promotion_explain">
								<h2 class="promotion_h2">
									活动说明
								</h2>
								<p>1、每日加奖在每日凌晨00:20后开放领取；</p>
								<p>2、加奖比例是根据会员等级以及昨日累计投注金额进行一定比例的加奖；</p>
								<!--<p>3、需Vip3以上且昨日投注额大于或等于100才能获得加奖；</p>-->
								<p>3、撤单和其他无效投注将不计算在内；</p>
								<p>4、提款后相应的降级将会影响加奖的比例。</p>
								<p>5、活动奖金逾期未领取，视为自动放弃活动资格。</p>
								<br />
							</div>
						</div>
						<script type="text/javascript">
							function qingquyongqu(){
								$.post("/upgrade",'', function(json){
									if(json.status==1){
										alert(json.info);
										window.location.reload();
									}else{
										alert(json.info);
									}
								},'json');
								return false;
							}
						</script>
					</div>
				</li>
				<li class="J-ac-btn4" data-type="bottom">
					<a>
						<div class="activity-no">
							<em>5</em>
						</div>
						<div class="activity-p">
							<p>晋级奖励</p>
							<em>活动时间:2019-10-17</em>
						</div>
						<div class="activity-right">
							<i class="iconfont icon-13">&#xe618;</i>
						</div>
					</a>
					<div id="J-bottom4" style="display:none">
						<div class="gonggaoxq-top"><span>晋级奖励</span></div>
						<div class="promotion_img">
							<img src="__IMG__/banner1.png" alt="">
						</div>
						<div class="promotion_grade">
							<p>
								<span>当前等级：</span>	
								<em>{$userinfo.groupname}</em>
							</p>
							<p>
								<span>上次晋级等级：</span>
								<neq name="Think.session.userinfo" value="">
									<em><empty name="jjlist[0]['groupid']">VIP1<else/>VIP{$jjlist[0]['groupid']}</empty></em>
								</neq>
							</p>
							<p>
								<span>晋级奖励：</span>
								<neq name="Think.session.userinfo" value="">
									<em><empty name="jlje">0.00 <else />{$jlje}</empty>元</em>
								</neq>
							</p>
						</div>

						<div class="promotion_btn">
							<notempty name="Think.session.userinfo">
								<eq name="jlje" value="0">
									<strong><a href="javascript:void(0);" class="btn no_login_btn">无奖励</a></strong>
									<else />
									<strong><a href="javascript:void(0);" class="btn btn-danger" onclick="jiangli();" >点击领取奖励</a></strong>
								</eq>
								<else />
								<strong><a href="/login" class="btn no_login_btn">未登录</a></strong>
							</notempty>
						</div>
						<notempty name="Think.session.userinfo">
							<table class="am-table am-table-bordered am-table-sss">
								<tbody>
									<tr><th>领取时间</th><th>晋级名称</th><th>晋级积分</th><th>领取奖励</th><th>状态</th></tr>
									<volist name="jjlist" id="vo">
										<if condition="$vo.groupname neq '' ">
											<tr><td>{$vo.oddtime|date="m-d H:i",###}</td>
												<td>{$vo.groupname}</td>
												<td>{$vo.point}</td>
												<td>{$vo.jlje}</td>
												<td><if condition="$vo['shenhe'] eq 0"><span style="color:grey">审核中</span><elseif condition="$vo['shenhe'] eq -1"/><span style="color:red">未通过</span><elseif condition="$vo['shenhe'] eq 1"/><span style="color:green">通过</span></if></td></tr>
											</if>
										</volist>
									</tbody>
								</table>
							</notempty>
							<div class="promotion_main">
								<div class="promotion_rule">
									<h2 class="promotion_h2">
										普级机制
									</h2>
									<table class="am-table am-table-bordered">
										<thead>
											<tr>
												<th>等级</th>
												<th>成长积分</th>
												<th>晋级奖励</th>
												<th>跳级奖励</th>
											</tr>
										</thead>
										<tbody>
											<volist name="allbili"  id="value">
												<tr>
													<td>{$value.groupname}</td>
													<td>{$value.shengjiedu}</td>
													<td>{$value.jjje}</td>
													<td>{$value.tiaoji}</td>
												</tr>
											</volist>
										</tbody>
									</table>
								</div>
								<div class="promotion_explain">
									<h2 class="promotion_h2">
										活动说明
									</h2>
									<p>1、会员每晋升一个等级，都能获得奖励，最高可达{$maxjlje}元。</p>
									<p>2、充值1元可获得1成长积分。</p>
									<br />
									<p>例1：奥巴马从VIP1直接晋升到VIP4，他将能获得1+5+10=16元奖励。</p>
									<p>例2：本拉登从VIP2直接晋升到VIP4，他将能获得5+10=15元奖励。</p>
									<br />
								</div>
							</div>

							<script type="text/javascript">
								function jiangli(){
									$.post("{:U('Activity/jinji')}",'', function(json){
										if(json.status==1){
											alert(json.info);
											window.location.reload();
										}else{
											alert(json.info);
										}
									},'json');
									return false;
								}
							</script>
						</div>
					</li>
					<!--显示过期活动-->
					<li>
						<a>
							<div style="background: #8c8c8c;"class="activity-no">
								<em style="background: #8c8c8c;">6</em>
							</div>
							<div class="activity-p">
								<p style="color: #8c8c8c;">老虎机周存送388元</p>
								<em style="color: #8c8c8c;">活动时间:2019-10-17</em>
							</div>
							<div class="activity-right">
								<i style="font-size: 0.14rem;line-height: 45px;float: right;">已过期</i>
							</div>
						</a>
					</li>
					<li>
						<a>
							<div style="background: #8c8c8c;"class="activity-no">
								<em style="background: #8c8c8c;">7</em>
							</div>
							<div class="activity-p">
								<p style="color: #8c8c8c;">棋牌亏损不要急 彩金来助力</p>
								<em style="color: #8c8c8c;">活动时间:2019-10-17</em>
							</div>
							<div class="activity-right">
								<i style="font-size: 0.14rem;line-height: 45px;float: right;">已过期</i>
							</div>
						</a>
					</li>
					<li>
						<a>
							<div style="background: #8c8c8c;"class="activity-no">
								<em style="background: #8c8c8c;">8</em>
							</div>
							<div class="activity-p">
								<p style="color: #8c8c8c;">周末乐翻天 有存必送</p>
								<em style="color: #8c8c8c;">活动时间:2019-10-17</em>
							</div>
							<div class="activity-right">
								<i style="font-size: 0.14rem;line-height: 45px;float: right;">已过期</i>
							</div>
						</a>
					</li>
					<li>
						<a>
							<div style="background: #8c8c8c;"class="activity-no">
								<em style="background: #8c8c8c;">9</em>
							</div>
							<div class="activity-p">
								<p style="color: #8c8c8c;">如歌岁月，生日献礼</p>
								<em style="color: #8c8c8c;">活动时间:2019-10-17</em>
							</div>
							<div class="activity-right">
								<i style="font-size: 0.14rem;line-height: 45px;float: right;">已过期</i>
							</div>
						</a>
					</li>
					<li>
						<a>
							<div style="background: #8c8c8c;"class="activity-no">
								<em style="background: #8c8c8c;">10</em>
							</div>
							<div class="activity-p">
								<p style="color: #8c8c8c;">下载手机app双重大礼</p>
								<em style="color: #8c8c8c;">活动时间:2019-10-17</em>
							</div>
							<div class="activity-right">
								<i style="font-size: 0.14rem;line-height: 45px;float: right;">已过期</i>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!--版权-->
			<div class="copyright">
				<span>Copyright ⓒ 2020 by Corporation, All Rights Reserved.</span><br>
				<span>Technical support:Ascloud/Gaobo Technology</span></i>
			</div>
			<!--底部导航-->
			<include file="Public/footer" />
			<script type="text/javascript" src="/ascn/mobile/js/zepto.min.js"></script>
			<script type="text/javascript" src="/ascn/mobile/js/zepto2.min.js"></script>
			<script type="text/javascript" src="/ascn/mobile/js/slideAlert.js?_=1223"></script>
		</body>
		</html>
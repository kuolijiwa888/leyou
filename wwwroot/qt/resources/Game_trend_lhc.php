<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{$cptitle}开奖走势图 - {:GetVar('webtitle')}线上平台</title>
	<link rel="stylesheet" href="/ascn/css/games.css">
	<link rel="stylesheet" href="/ascn/css/byzst.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<link rel="stylesheet" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/user.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script>
</head>
<body class="ssc-zst" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
    <div class="user-top-to">
	<div class="user-top-to2">
	<div class="trend_start">
		<!--走势图头部-->
		<div class="trend_top"style="width: 1112px;">
			<div class="chart-wrap0"style="width: 850px;">
				<div class="chart-wrap1">
					<span>基本走势图</span>
					<div class="chart-daxuan">
						<input type="text" readonly="readonly" id="imgtalk" autocomplete="off" placeholder="六合彩" value="六合彩" class="byzs_input1">
						<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;top:0;line-height: 3;" class="iconfont" id="iconfont">&#xe65a;</i>
						<div class="el-select-dropdown el-popper allcp" style="display: none; min-width: 160px;"> 
							<div class="el-scrollbar"> 
								<div class="el-select-dropdown__wrap el-scrollbar__wrap"> 
									<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type"> 
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_ssc/ssc1fc">时时彩</li> 
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_x5/yf11x5">十一选五</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_k3/f1k3">快三</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_xy28/xy28">幸运28</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_pk10/pk101">PK拾</li>
										<li class="el-select-dropdown__item allcpname selected" value="/gameChart/trend_lhc/lhc1f">六合彩</li>
									</ul> 
								</div> 
							</div> 
						</div>
					</div>
					<div class="chart-xixuan">
						<input type="text" readonly="readonly" id="imgtalk1" autocomplete="off" placeholder="选择彩种" value="选择彩种" class="byzs_input1">
						<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;top:0;line-height: 3;" class="iconfont" id="iconfont1">&#xe65a;</i>
						<div class="el-select-dropdown el-popper cpdata" style="display: none; min-width: 160px;"> 
							<div class="el-scrollbar"> 
								<div class="el-select-dropdown__wrap el-scrollbar__wrap"> 
									<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type"> 
										<volist name="other" id="cp">
											<if condition="$cp['typeid'] eq 'lhc'">
												<li class="el-select-dropdown__item cpdataname <eq name="cp[name]" value="$Think.get.code">selected</eq>" value="{$cp.name}">{$cp[title]}</li> 
											</if>
										</volist>
									</ul> 
								</div> 
							</div> 
						</div>
					</div>
				</div>

				<div class="chart-wrap2">
					<div class="ant-checkbox-group">
						<label class="ant-checkbox-group-item ant-checkbox-wrapper">
							<span class="ant-checkbox">
								<input type="checkbox" class="ant-checkbox-input"  name="miss" checked="checked" />
								<span class="ant-checkbox-inner"></span>
							</span>
							<span>遗漏</span>
						</label>
						<label class="ant-checkbox-group-item ant-checkbox-wrapper">
							<span class="ant-checkbox">
								<input type="checkbox" class="ant-checkbox-input" name="missBar" checked="" />
								<span class="ant-checkbox-inner"></span>
							</span>
							<span>遗漏条</span>
						</label>
						<label class="ant-checkbox-group-item ant-checkbox-wrapper">
							<span class="ant-checkbox">
								<input type="checkbox" class="ant-checkbox-input" value="trendLine" checked="" />
								<span class="ant-checkbox-inner"></span>
							</span>
							<span>走势图折线</span>
						</label>
						<label class="ant-checkbox-group-item ant-checkbox-wrapper">
							<span class="ant-checkbox">
								<input type="checkbox" class="ant-checkbox-input" value="coldHotNumber" checked="" />
								<span class="ant-checkbox-inner"></span>
							</span>
							<span>冷热号</span>
						</label>
					</div>

					<div class="ant-radio-group ant-radio-group-outline">
						<label class="ant-radio-button-wrapper <if condition="$Think.get.num neq '30'"><else />ant-radio-button-wrapper-checked</if>">
							<span class="ant-radio-button">
								<span class="ant-radio-button-inner"></span>
							</span>
							<span data='?typeid=<?=$typeid?>&num=30' class="ascntype">近30期</span>
						</label>
						<label class="ant-radio-button-wrapper <if condition="$Think.get.num neq '50'"><else />ant-radio-button-wrapper-checked</if>">
							<span class="ant-radio-button ">
								<span class="ant-radio-button-inner"></span>
							</span>
							<span data='?typeid=<?=$typeid?>&num=50' class="ascntype">近50期</span>
						</label>
						<label class="ant-radio-button-wrapper <if condition="$Think.get.num neq '100'"><else />ant-radio-button-wrapper-checked</if>">
							<span class="ant-radio-button">
								<span class="ant-radio-button-inner"></span>
							</span>
							<span data='?typeid=<?=$typeid?>&num=100' class="ascntype">近100期</span>
						</label>
					</div>
				</div>
			</div>
		</div>







		<!--走势图-->
		<div class="chart">
			<div class="chart-bottom">
				<div class="chart-wrap lhc"style="width: 1112px;">
					<table class="chart-table">
						<thead>
							<tr>
								<td class="chart-issue-title" rowspan="2">
									<div>奖期</div>
								</td>
								<td class="chart-pos-title"colspan="7">
									<div>开奖号码</div>
								</td>
								<td class="chart-pos-title"colspan="7">
									<div>特码双面</div>
								</td>
								<td class="chart-pos-title"colspan="3">
									<div>特码半波</div>
								</td>
							</tr>
							<tr class="border-bottom">
								<td class="pos-title-num border-right"colspan="6">
									<div>正码</div>
								</td>
								<td class="pos-title-num border-right"colspan="1">
									<div>特码</div>
								</td>
								<td class="pos-title-num border-right">
									<div>大小</div>
								</td>
								<td class="pos-title-num border-right">
									<div>单双</div>
								</td>
								<td class="pos-title-num border-right">
									<div>合大小</div>
								</td>
								<td class="pos-title-num border-right">
									<div>合单双</div>
								</td>
								<td class="pos-title-num border-right">
									<div>大小单双</div>
								</td>
								<td class="pos-title-num border-right">
									<div>尾大小</div>
								</td>
								<td class="pos-title-num border-right">
									<div>家禽野兽</div>
								</td>
								<td class="pos-title-num border-right">
									<div>大小</div>
								</td>
								<td class="pos-title-num border-right">
									<div>单双</div>
								</td>
								<td class="pos-title-num border-right">
									<div>合单双</div>
								</td>
							</tr>
						</thead>

						<tbody>
							{$trendhtml}
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
	<include file="Public/footer" />
	</div>
	<script>
		$(function(){
			var title = $('.cpdata').find('.selected').text();
			$('#imgtalk1').val(title);
			if(title == ''){
				$('#imgtalk1').val('选择彩种'); 
			}
		})
		$('.ascntype').click(function(){
			var data = $(this).attr('data');
			var url = data;
			window.location.href= url;
		})
		$('#imgtalk').click(function(e){
			e.stopPropagation();
			if($('.allcp').css("display")=='none'){
				$('#iconfont').css('transform','rotate(180deg)');
				$('.allcp').slideDown(300);
			}else{
				$('#iconfont').css('transform','rotate(0deg)');
				$('.allcp').slideUp(300);
			}
		})
		$('#imgtalk1').click(function(e){
			e.stopPropagation();
			if($('.cpdata').css("display")=='none'){
				$('#iconfont1').css('transform','rotate(180deg)');
				$('.cpdata').slideDown(300);
			}else{
				$('#iconfont1').css('transform','rotate(0deg)');
				$('.cpdata').slideUp(300);
			}
		})
		$(document).click(function(){
			$('#iconfont').css('transform','rotate(0deg)');
			$('#iconfont1').css('transform','rotate(0deg)');
			$('.allcp').hide();
			$('.cpdata').hide();
		});
		$('.allcpname').click(function(){
			var text = $(this).text();
			var allcpname = $(this).attr('value');
			$('#imgtalk').val(text);
			var url = allcpname;
			window.location.href= url;
		})
		$('.cpdataname').click(function(){
			var text = $(this).text();
			var cpdataname = $(this).attr('value');
			$('#imgtalk1').val(text);
			var url = "/gameChart/trend_lhc/"+cpdataname;
			window.location.href= url;
		})
	</script>
</body>
</html>
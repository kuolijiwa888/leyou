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
		<div class="trend_top" style="width: 1504px;">
			<div class="chart-wrap0">
				<div class="chart-wrap1">
					<span>基本走势图</span>
					<div class="chart-daxuan">
						<input type="text" readonly="readonly" id="imgtalk" autocomplete="off" placeholder="十一选五" value="十一选五" class="byzs_input1">
						<i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;top:0;line-height: 3;" class="iconfont" id="iconfont">&#xe65a;</i>
						<div class="el-select-dropdown el-popper allcp" style="display: none; min-width: 160px;"> 
							<div class="el-scrollbar"> 
								<div class="el-select-dropdown__wrap el-scrollbar__wrap"> 
									<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type"> 
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_ssc/ssc1fc">时时彩</li> 
										<li class="el-select-dropdown__item allcpname selected" value="/gameChart/trend_x5/yf11x5">十一选五</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_k3/f1k3">快三</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_xy28/xy28">幸运28</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_pk10/pk101">PK拾</li>
										<li class="el-select-dropdown__item allcpname" value="/gameChart/trend_lhc/lhc1f">六合彩</li>
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
											<if condition="$cp['typeid'] eq 'x5'">
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
							<span class="ant-checkbox ant-checkbox-checked" id="ylou">
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
							<span class="ant-checkbox ant-checkbox-checked" id="zxian">
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
				<div class="chart-wrap" style="width: 1504px;">
					<table class="chart-table" chartsTable>
						<thead>
							<tr>
								<td class="chart-issue-title" rowspan="2">
									<div>奖期</div>
								</td>
								<td class="chart-open-code-title" rowspan="2">
									<div>开奖号码</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>万位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>千位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>百位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>十位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>个位</div>
								</td>
								<td class="chart-distribution-title" colspan="11">
									<div>号码分布</div>
								</td>
							</tr>
							<tr class="border-bottom">
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="distribution-title-num">
									<i>1</i>
								</td>
								<td class="distribution-title-num">
									<i>2</i>
								</td>
								<td class="distribution-title-num">
									<i>3</i>
								</td>
								<td class="distribution-title-num">
									<i>4</i>
								</td>
								<td class="distribution-title-num">
									<i>5</i>
								</td>
								<td class="distribution-title-num">
									<i>6</i>
								</td>
								<td class="distribution-title-num">
									<i>7</i>
								</td>
								<td class="distribution-title-num">
									<i>8</i>
								</td>
								<td class="distribution-title-num">
									<i>9</i>
								</td>
								<td class="distribution-title-num">
									<i>10</i>
								</td>
								<td class="distribution-title-num border-right">
									<i>11</i>
								</td>
							</tr>
						</thead>

						<tbody id="cpdata">
							{$trendhtml}
							<tr id="totalRow111" style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="chart-issue border-right">出现总次数</td>
								<td class="chart-open-code border-right"></td>
								{$trendhtml1}
							</tr>
							<tr id="totalRow11" style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="chart-issue border-right">平均遗漏值</td>
								<td class="chart-open-code border-right"></td>
								{$trendhtml2}
							</tr>
							<tr id="totalRow2" style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="chart-issue border-right">最大遗漏值</td>
								<td class="chart-open-code border-right"></td>
								{$trendhtml3}
							</tr>
							<tr id="totalRow2" style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="chart-issue border-right">最大连出值</td>
								<td class="chart-open-code border-right"></td>
								{$trendhtml4}
							</tr>
							<tr style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="chart-issue-title" rowspan="2">
									<div>奖期</div>
								</td>
								<td class="chart-open-code-title" rowspan="2">
									<div>开奖号码</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>万位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>千位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>百位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>十位</div>
								</td>
								<td class="chart-pos-title" colspan="11">
									<div>个位</div>
								</td>
								<td class="chart-distribution-title" colspan="11">
									<div>号码分布</div>
								</td>
							</tr>
							<tr class="border-bottom" style="border-bottom: 1px solid #e0e0e0;background-color: #252525;color: #fff;">
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="pos-title-num">
									<i>1</i>
								</td>
								<td class="pos-title-num">
									<i>2</i>
								</td>
								<td class="pos-title-num">
									<i>3</i>
								</td>
								<td class="pos-title-num">
									<i>4</i>
								</td>
								<td class="pos-title-num">
									<i>5</i>
								</td>
								<td class="pos-title-num">
									<i>6</i>
								</td>
								<td class="pos-title-num">
									<i>7</i>
								</td>
								<td class="pos-title-num">
									<i>8</i>
								</td>
								<td class="pos-title-num">
									<i>9</i>
								</td>
								<td class="pos-title-num">
									<i>10</i>
								</td>
								<td class="pos-title-num border-right">
									<i>11</i>
								</td>
								<td class="distribution-title-num">
									<i>1</i>
								</td>
								<td class="distribution-title-num">
									<i>2</i>
								</td>
								<td class="distribution-title-num">
									<i>3</i>
								</td>
								<td class="distribution-title-num">
									<i>4</i>
								</td>
								<td class="distribution-title-num">
									<i>5</i>
								</td>
								<td class="distribution-title-num">
									<i>6</i>
								</td>
								<td class="distribution-title-num">
									<i>7</i>
								</td>
								<td class="distribution-title-num">
									<i>8</i>
								</td>
								<td class="distribution-title-num">
									<i>9</i>
								</td>
								<td class="distribution-title-num">
									<i>10</i>
								</td>
								<td class="distribution-title-num border-right">
									<i>11</i>
								</td>
							</tr>
						</tbody>

					</table>
					<div id="addCanvas"></div>
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
		$('#ylou').click(function(){
			if($('i.ylou').css("display")=='none'){
				$("i.ylou").css('display','block');
				$(this).addClass('ant-checkbox-checked');
			}else{
				$("i.ylou").css('display','none');
				$(this).removeClass('ant-checkbox-checked');
			}
		})
		$('#zxian').click(function(){
			if($('#addCanvas').css('display')=="none"){
				$('#addCanvas').css('display','block')
				$(this).addClass('ant-checkbox-checked');
			}else{
				$('#addCanvas').css('display','none');
				$(this).removeClass('ant-checkbox-checked');
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
			var url = "/gameChart/trend_x5/"+cpdataname;
			window.location.href= url;
		})
	</script>
	<script type="text/javascript">
        //fromLeft函数，即产生的折线是从左上角到右下角
        function fromLeft(obj) {
        	var chartsObj = obj;
            var w = parseInt(chartsObj.disWidth);//canvas的宽
            var h = parseInt(chartsObj.disHeight);//canvas的高
            var slw = parseInt(chartsObj.selfW);//单元框的宽
            var slh = parseInt(chartsObj.selfH);//单元框的高
            var cvsL = parseInt(chartsObj.cvsleft);//canvas的top
            var cvsT = parseInt(chartsObj.cvsTop);//canvas的left
            //使canvas的位置，即canvas的左上角与右下角移到两个目标单元框的中心点
            var cvsLeft = cvsL + (slw/2);
            var cvsTop = cvsT + (slh/2);
            
            
            // 创建canvas标签并设置对应的样式属性
            var canvas = document.createElement("canvas");
            canvas.style.top = cvsTop + 'px';
            canvas.style.left = cvsLeft + 'px';
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            canvas.width = w;
            canvas.height = h;
            
            
            // 创建画布，画线
            var context = canvas.getContext("2d");//创建
            context.beginPath();//开始画布
            context.strokeStyle = '#c84c59';//设置线条颜色
            context.lineCap = 'round';//设置线条头尾形状
            context.lineWidth = '2';//设置线条宽度
            context.moveTo(0,0);//移到画笔到原点(0,0)位置
            context.lineTo(w, h);//从(0,0)位置开始画线到右下角
            context.stroke();//填充
            context.closePath();//关闭画布
            
            
            // 把创建好的canvas插入页面
            $("#addCanvas").append(canvas)
        }
        //fromRight函数，即产生的折线是从右上角到左下角
        function fromRight(obj) {
        	var chartsObj = obj;
        	var w = parseInt(chartsObj.disWidth);
        	var h = parseInt(chartsObj.disHeight);
        	var slw = parseInt(chartsObj.selfW);
        	var slh = parseInt(chartsObj.selfH);
        	var cvsL = parseInt(chartsObj.cvsleft);
        	var cvsT = parseInt(chartsObj.cvsTop);
        	var cvsLeft = cvsL + (slw/2) - w;
        	var cvsTop = cvsT + (slh/2);
        	
        	
            // 创建canvas标签并设置对应的样式属性
            var canvas = document.createElement("canvas");
            canvas.style.top = cvsTop + 'px';
            canvas.style.left = cvsLeft + 'px';
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            canvas.width = w;
            canvas.height = h;
            
            
            // 创建画布，画线
            var context = canvas.getContext("2d");
            context.beginPath();
            context.strokeStyle = '#c84c59';
            context.lineCap = 'round';
            context.lineWidth = '2';
            context.moveTo(w,0);
            context.lineTo(0, h);
            context.stroke();
            context.closePath();
            
            
            // 把创建好的canvas插入页面
            $("#addCanvas").append(canvas)
        }
        var brr = $(".byzstxt .selected-num").parent();
        
        var num = (<if condition="$Think.get.num eq '30'">30<elseif condition="$Think.get.num eq '50'"/>50<elseif condition="$Think.get.num eq '100'"/>100<else />30</if>-1)*5
        	//声明chartsObj空对象，用于存储需要传入函数的参数
        	var chartsObj = {};
        	for (var i = 0; i <num; i++) {
            // 判断本期的中奖号码第一位数与下一期中奖号码第一位数谁大谁小
            var direction = brr[i].offsetLeft - brr[i + 5].offsetLeft;
            //获取本期的中奖号码第一位与下一期中奖号码第一位两球外框单元格的上边的距离绝对值
            chartsObj.disHeight = Math.abs(brr[i].offsetTop - brr[i + 5].offsetTop)-15
            //获取本期的中奖号码第一位与下一期中奖号码第一位两球外框单元格的左侧的距离绝对值
            chartsObj.disWidth = Math.abs(brr[i].offsetLeft - brr[i + 5].offsetLeft)
            //获取球外框单元格的自身高度
            chartsObj.selfW = brr[i].clientWidth;
            //获取球外框单元格的自身宽度
            chartsObj.selfH = brr[i].clientHeight;
            //获取canvas的position的top的值，根据当前球的外框的offsetTop来决定
            chartsObj.cvsTop = brr[i].offsetTop+8;
            //获取canvas的position的left的值，根据当前球的外框的offsetLeft来决定
            chartsObj.cvsleft = brr[i].offsetLeft;
            //根据上面变量direction的正负来判断执行哪个函数
            if(direction < 0) {
            	fromLeft(chartsObj);
            } else {
            	fromRight(chartsObj);
            }
            
        }
    </script>
    <style type="text/css">
    	#addCanvas canvas {
    		position: absolute;
    	}
    </style>
</body>
</html>
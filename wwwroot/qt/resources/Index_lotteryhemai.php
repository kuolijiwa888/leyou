<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content.top="ie=edge">
	<script type="text/javascript" src="/ascn/js/time.js"></script><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/time.css"><!--loading-->
	<link rel="stylesheet" type="text/css" href="/ascn/css/ashemai.css">
	<link rel="stylesheet" type="text/css" href="/ascn/css/user.css">
	<link rel="stylesheet" type="text/css" href="/ascn/css/vendor.css">
	<link rel="stylesheet" href="/ascn/css/iconfont.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="__JS__/index.js"></script> 
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type="text/javascript" src="__ROOT__/resources/js2/HeMaitabGame.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>

</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
    <div class="user-top-to">
        <div class="user-top-to2">
	<div style="width:1200px;margin:0 auto;">
		<div class="hemai">
			<div class="hm_title">
				<span>热门方案</span>
			</div>

			<div class="hm_notice">
				<div class="hm_notice_top">
					<a href="javascript:void(0);" class="ascncp" data="ssc1fc"><span>一分时时彩</span></a>
					<a href="javascript:void(0);" class="ascncp" data="f1k3"><span>一分快三</span></a>
					<a href="javascript:void(0);" class="ascncp" data="lhc1f"><span>一分六合彩</span></a>
					<a href="javascript:void(0);" class="ascncp" data="yf11x5"><span>一分十一选五</span></a>
					<a href="javascript:void(0);" class="ascncp" data="xy28"><span>幸运28</span></a>
					<a href="javascript:void(0);" class="ascncp" data="pk101"><span>一分赛车</span></a>
					<a href="javascript:void(0);" class="ascncp" data="xjssc"><span>新疆时时彩</span></a>
					<a href="javascript:void(0);" class="ascncp" data="jsk3"><span>江苏快三</span></a>
					<a href="javascript:void(0);" class="ascncp" data="xyft"><span>幸运飞艇</span></a>
				</div>

				<div class="hm_notice_input">
					<div class="hm_notice_input_1">
						<input type="text" id="imgtalk" autocomplete="off" readonly="readonly" placeholder="全部彩种" style="cursor: pointer;">
						<span class="hm_notice_i"><i style="color: #a2a2a2;font-size: 12px;position: absolute;right: 17px;transition: all 0.5s ease-in-out;"class="iconfont" id="iconfont">&#xe65a;</i></span>
					</div>

					<div class="el-select-dropdown el-popper" style="min-width: 193px;display:none;"> 
						<div class="el-scrollbar"> 
							<div class="el-select-dropdown__wrap el-scrollbar__wrap"> 
								<ul class="el-scrollbar__view el-select-dropdown__list" name="type" id="type"> 
									<li class="el-select-dropdown__item addselected selected" value="all" data="all">全部彩种</li>
									<volist name="list" id="cp">
										<li class="el-select-dropdown__item" value="{$cp[name]}" data="{$cp['name']}">{$cp['title']}</li>
									</volist> 
								</ul> 
							</div> 
						</div> 
					</div>

				</div>

			</div>
			<div class="hm_notice_start">
				<div class="hm_notice_start_title">
					<table cellspacing="0" cellpadding="0" style="width: 100%;">
						<colgroup>
							<col name="hmnoticestarttitle_1" width="110">
							<col name="hmnoticestarttitle_2" width="150">
							<col name="hmnoticestarttitle_3" width="120">
							<col name="hmnoticestarttitle_4" width="120">
							<col name="hmnoticestarttitle_5" width="130">
							<col name="hmnoticestarttitle_6" width="150">
							<col name="hmnoticestarttitle_7" width="143">
							<col name="hmnoticestarttitle_8" width="175">
							<col name="hmnoticestarttitle_9" width="60">
						</colgroup>
						<thead>
							<tr>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_1"><div class="cell">排序</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_2"><div class="cell">彩种</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_3"><div class="cell">发起人</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_4"><div class="cell">合买战绩</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_5"><div class="cell">方案金额</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_6"><div class="cell">剩余份数</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_7"><div class="cell">保底+进度</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_8"><div class="cell">认购份数</div></th>
								<th colspan="1" rowspan="1" class="hmnoticestarttitle_9"><div class="cell">操作</div></th>
							</tr>
						</thead>
					</table>
				</div>
				<!--合买注单开始-->
				<div class="hm_notice_start_article">
					<table class="rec_table" cellspacing="0" cellpadding="0" style="width: 100%;">
						<colgroup>
							<col name="hmnoticestartarticle_1" width="110">
							<col name="hmnoticestartarticle_2" width="150">
							<col name="hmnoticestartarticle_3" width="120">
							<col name="hmnoticestartarticle_4" width="120">
							<col name="hmnoticestartarticle_5" width="130">
							<col name="hmnoticestartarticle_6" width="150">
							<col name="hmnoticestartarticle_7" width="143">
							<col name="hmnoticestartarticle_8" width="175">
							<col name="hmnoticestartarticle_9" width="60">
						</colgroup>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
			<div id="page_wrapper" class="pagehemai"></div>
		</div>
	</div>
</div>
	<include file="Public/footer" />
</div>
</body>
</html>
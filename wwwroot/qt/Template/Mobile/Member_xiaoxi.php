<include file="Public/header" />
<link rel="stylesheet" href="__CSS__/userHome.css">
<body class="bg_fff">
	<header data-am-widget="header"class="am-header am-header-default header nav_bg am-header-fixed">
		<div class="am-header-left am-header-nav">
			<a href="javascript:history.back(-1);" class="">
				<i class="iconfont icon-arrow-left"></i>
			</a>
      	</div>
		<h1 class="am-header-title activity_h1">
			消息通知
		</h1>
	</header>
	
	<div data-am-widget="" class="am-tabs am-tabs-d2 billrecord_main">

			<div data-tab-panel-2 class="am-tab-panel ">
				<div data-am-widget="list_news" class="am-list-news am-list-news-default" >
					<div class="am-list-news-bd">
						<ul class="am-list">
							<volist name="mxlist" id="vo">
							<a href="/userCenter/xiaoinfo/{$vo['id']}" style="padding-right: 0px;">
							<li class="am-g am-list-item-dated">
								<p class="am-cf">
									<span class="what_type am-fl">{$vo.title}</span>
									
								</p>
								<p class="am-cf billrecord_time">
									<span class="am-fl">{$vo.add_time|date="Y-m-d H:i:s",###}</span>
									<if condition="$vo['is_see'] eq 0">
										<em class="am-fr" style="color:green">未读</em>
										<elseif condition="$vo['is_see'] eq 1" />
										<em class="am-fr" style="color:grey">已读</em>
										
									</if>
								</p>
								</a>
							</li>
							</volist>
						</ul>
						<div class="page">{$pageshow}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<include file="Public/footer" />
</body>
</html>
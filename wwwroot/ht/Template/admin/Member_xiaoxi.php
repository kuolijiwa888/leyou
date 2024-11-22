<div class="layui-card" style="box-shadow: none;border: none;">
	<div class="layui-tab layui-tab-brief">
		<ul class="layui-tab-title" style="text-align: center;">
			<li class="layui-this">充值信息<span id="chongzhi"></span></li>
			<li>提款信息<span id="tikuan"></span></li>
			<li>绑卡信息<span id="bangka"></span></li>
		</ul>
		<div class="layui-tab-content" style="padding: 0;">
			<!-- tab1 -->
			<div class="layui-tab-item layui-show">
				<div class="message-list" id="chongzhi_xinxi">
					<div class="message-list-empty" id="chongzhi_tongzhi" style="display:block;">
						<i class="layui-icon layui-icon-notice"></i>
						<div>没有通知</div>
					</div>
				</div>
			</div>
			<!-- tab2 -->
			<div class="layui-tab-item">
				<div class="message-list" id="tikuan_xinxi">
					<div class="message-list-empty" id="tikuan_tongzhi" style="display:block;">
						<i class="layui-icon layui-icon-notice"></i>
						<div>没有通知</div>
					</div>
				</div>
			</div>
			<!-- tab3 -->
			<div class="layui-tab-item">
				<div class="message-list" id="bangka_xinxi">
					<div class="message-list-empty" id="bangka_tongzhi" style="display:block;">
						<i class="layui-icon layui-icon-notice"></i>
						<div>没有通知</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	layui.use(['element', 'admin'], function () {
		var $ = layui.jquery;
		var admin = layui.admin;
	});
</script>
<script>
	function checkspecks(){
		$.getJSON("/Admincenter/Index.checkspeck.do", function(data){
			if(data.sign){
				if(data.tkcount>0){
					var tikuan = $('#tikuan');
					tikuan.text('('+data.tkcount+')');
					var html1 = '';
					for(var i=0;i<data.tkcount;i++){
						html1 += '<a class="message-list-item" onclick="withdraw()" href="javascript:;"><i class="layui-icon layui-icon-speaker message-item-icon"></i><div class="message-item-right"><h2 class="message-item-title">你收到了1条提款信息</h2></div></a>';
					}
					$('#tikuan_xinxi').append(html1);
					$('#tikuan_tongzhi').hide();
				}else if(data.czcount>0){
					var chongzhi = $('#chongzhi');
					chongzhi.text('('+data.czcount+')');
					var html2 = '';
					for(var i=0;i<data.czcount;i++){
						html2 += '<a class="message-list-item" onclick="recharge()" href="javascript:;"><i class="layui-icon layui-icon-speaker message-item-icon"></i><div class="message-item-right"><h2 class="message-item-title">你收到了1条充值信息</h2></div></a>';
					}
					$('#chongzhi_xinxi').append(html2);
					$('#chongzhi_tongzhi').hide();
				}else if(data.bankbindcount>0){
					var bangka = $('#bangka');
					bangka.text('('+data.bankbindcount+')');
					var html3 = '';
					for(var i=0;i<data.bankbindcount;i++){
						html3 += '<a class="message-list-item" onclick="banklist()" href="javascript:;"><i class="layui-icon layui-icon-speaker message-item-icon"></i><div class="message-item-right"><h2 class="message-item-title">你收到了1条绑卡信息</h2></div></a>';
					}
					$('#bangka_xinxi').append(html3);
					$('#bangka_tongzhi').hide();
				}
			}
		});
	}
	checkspecks();
	function withdraw(){
	    $('.admin-iframe').attr('src','/Admincenter/Member.withdraw.do');
	}
	function recharge(){
	    $('.admin-iframe').attr('src','/Admincenter/Member.recharge.do');
	}
	function banklist(){
	    $('.admin-iframe').attr('src','/Admincenter/Member.banklist.do');
	}
</script>

<style>
	/** 消息列表样式 */
	.message-list {
		position: absolute;
		top: 48px;
		left: 0;
		right: 0;
		bottom: 45px;
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
	}

	.message-list-item {
		display: block;
		padding: 10px 20px;
		line-height: 24px;
		position: relative;
		border-bottom: 1px solid #e8e8e8;
	}

	.message-list-item:hover, .message-btn-clear:hover, .message-btn-more:hover {
		background: #F2F2F2;
	}

	.message-list-item .message-item-icon {
		width: 40px;
		height: 40px;
		line-height: 40px;
		margin-top: -20px;
		border-radius: 50%;
		position: absolute;
		left: 20px;
		top: 50%;
	}

	.message-list-item .message-item-icon.layui-icon {
		color: #fff;
		font-size: 22px;
		text-align: center;
		background-color: #FE5D58;
	}

	.message-list-item .message-item-icon + .message-item-right {
		margin-left: 55px;
	}

	.message-list-item .message-item-title {
		color: #666;
		font-size: 14px;
	}

	.message-list-item .message-item-text {
		color: #999;
		font-size: 12px;
	}

	.message-list-item > .layui-badge {
		position: absolute;
		right: 20px;
		top: 12px;
	}

	.message-list-item > .layui-badge + .message-item-right {
		margin-right: 50px;
	}

	.message-btn-clear, .message-btn-more {
		color: #666;
		display: block;
		padding: 10px 5px;
		line-height: 24px;
		text-align: center;
		cursor: pointer;
	}

	.message-btn-clear {
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		border-top: 1px solid #e8e8e8;
	}

	.message-btn-more {
		color: #666;
		font-size: 13px;
	}

	.message-btn-more.ew-btn-loading > .ew-btn-loading-text {
		font-size: 13px !important;
	}

	.message-list-empty {
		color: #999;
		padding: 100px 0;
		text-align: center;
		display: none;
	}

	.message-list-empty > .layui-icon {
		color: #ccc;
		display: block;
		font-size: 45px;
		margin-bottom: 15px;
	}


	/** //消息列表样式结束 */
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>赠送活动</title>
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
	<style>
		#AjaxPostForm{
			max-width: 700px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<!-- 正文开始 -->
	<div class="layui-fluid">
		<div class="layui-card">
			<div class="layui-card-body">
				<!-- 表单开始 -->
				<form class="layui-form" lay-filter="AjaxPostForm" id="AjaxPostForm" method="post" action="{:url('System/settingdo')}" confirm="确定吗修改系统配置吗？">
					<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
						<ul class="layui-tab-title">
							<li class="layui-this">充值活动</li>
							<li class="">消费活动</li>
							<li class="">亏损活动</li>
							<li class="">代理分红</li>
							<li class="">其他</li>
						</ul>
						<div class="layui-tab-content">
							<div class="layui-tab-item layui-show">
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>单次充值满：</span><input type="text" name="info[activity_cz0_money]" value="{$setlist.activity_cz0_money}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[activity_cz0_zsmoney]" value="{$setlist.activity_cz0_zsmoney}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>单次充值满：</span><input type="text" name="info[activity_cz1_money]" value="{$setlist.activity_cz1_money}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[activity_cz1_zsmoney]" value="{$setlist.activity_cz1_zsmoney}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>单次充值满：</span><input type="text" name="info[activity_cz2_money]" value="{$setlist.activity_cz2_money}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[activity_cz2_zsmoney]" value="{$setlist.activity_cz2_zsmoney}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>单次充值满：</span><input type="text" name="info[activity_cz3_money]" value="{$setlist.activity_cz3_money}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[activity_cz3_zsmoney]" value="{$setlist.activity_cz3_zsmoney}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>单次充值满：</span><input type="text" name="info[activity_cz4_money]" value="{$setlist.activity_cz4_money}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[activity_cz4_zsmoney]" value="{$setlist.activity_cz4_zsmoney}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
							</div>
							<div class="layui-tab-item">
							    <div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日消费满：</span><input type="text" name="info[riCommissionBase0_0]" value="{$setlist.riCommissionBase0_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riCommissionBase0_1]" value="{$setlist.riCommissionBase0_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riCommissionBase0_2]" value="{$setlist.riCommissionBase0_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日消费满：</span><input type="text" name="info[riCommissionBase1_0]" value="{$setlist.riCommissionBase1_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riCommissionBase1_1]" value="{$setlist.riCommissionBase1_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riCommissionBase1_2]" value="{$setlist.riCommissionBase1_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日消费满：</span><input type="text" name="info[riCommissionBase2_0]" value="{$setlist.riCommissionBase2_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riCommissionBase2_1]" value="{$setlist.riCommissionBase2_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riCommissionBase2_2]" value="{$setlist.riCommissionBase2_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月消费满：</span><input type="text" name="info[yueCommissionBase0_0]" value="{$setlist.yueCommissionBase0_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueCommissionBase0_1]" value="{$setlist.yueCommissionBase0_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueCommissionBase0_2]" value="{$setlist.yueCommissionBase0_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月消费满：</span><input type="text" name="info[yueCommissionBase1_0]" value="{$setlist.yueCommissionBase1_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueCommissionBase1_1]" value="{$setlist.yueCommissionBase1_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueCommissionBase1_2]" value="{$setlist.yueCommissionBase1_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月消费满：</span><input type="text" name="info[yueCommissionBase2_0]" value="{$setlist.yueCommissionBase2_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueCommissionBase2_1]" value="{$setlist.yueCommissionBase2_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueCommissionBase2_2]" value="{$setlist.yueCommissionBase2_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
							</div>
							<div class="layui-tab-item">
							    <div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日亏损满：</span><input type="text" name="info[riKuisunBase0_0]" value="{$setlist.riKuisunBase0_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riKuisunBase0_1]" value="{$setlist.riKuisunBase0_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riKuisunBase0_2]" value="{$setlist.riKuisunBase0_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日亏损满：</span><input type="text" name="info[riKuisunBase1_0]" value="{$setlist.riKuisunBase1_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riKuisunBase1_1]" value="{$setlist.riKuisunBase1_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riKuisunBase1_2]" value="{$setlist.riKuisunBase1_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>日亏损满：</span><input type="text" name="info[riKuisunBase2_0]" value="{$setlist.riKuisunBase2_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[riKuisunBase2_1]" value="{$setlist.riKuisunBase2_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[riKuisunBase2_2]" value="{$setlist.riKuisunBase2_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月亏损满：</span><input type="text" name="info[yueKuisunBase0_0]" value="{$setlist.yueKuisunBase0_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueKuisunBase0_1]" value="{$setlist.yueKuisunBase0_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueKuisunBase0_2]" value="{$setlist.yueKuisunBase0_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月亏损满：</span><input type="text" name="info[yueKuisunBase1_0]" value="{$setlist.yueKuisunBase1_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueKuisunBase1_1]" value="{$setlist.yueKuisunBase1_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueKuisunBase1_2]" value="{$setlist.yueKuisunBase1_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月亏损满：</span><input type="text" name="info[yueKuisunBase2_0]" value="{$setlist.yueKuisunBase2_0}" style="width:100px;" class="layui-input inline-block"><span>元，本人赠送：</span>
										<input type="text" name="info[yueKuisunBase2_1]" value="{$setlist.yueKuisunBase2_1}" style="width:100px;" class="layui-input inline-block"><span>%，上家赠送：</span>
										<input type="text" name="info[yueKuisunBase2_2]" value="{$setlist.yueKuisunBase2_2}" style="width:100px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
							</div>
							<div class="layui-tab-item">
							    <div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月下线亏损满：</span><input type="text" name="info[agentBonusBase0_0]" value="{$setlist.agentBonusBase0_0}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[agentBonusBase0_1]" value="{$setlist.agentBonusBase0_1}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月下线亏损满：</span><input type="text" name="info[agentBonusBase1_0]" value="{$setlist.agentBonusBase1_0}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[agentBonusBase1_1]" value="{$setlist.agentBonusBase1_1}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月下线亏损满：</span><input type="text" name="info[agentBonusBase2_0]" value="{$setlist.agentBonusBase2_0}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[agentBonusBase2_1]" value="{$setlist.agentBonusBase2_1}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
								<div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>月下线亏损满：</span><input type="text" name="info[agentBonusBase3_0]" value="{$setlist.agentBonusBase3_0}" style="width:160px;" class="layui-input inline-block"><span>元，赠送：</span>
										<input type="text" name="info[agentBonusBase3_1]" value="{$setlist.agentBonusBase3_1}" style="width:160px;" class="layui-input inline-block"><span>%</span>
									</div>
								</div>
							</div>
							<div class="layui-tab-item">
							    <div class="layui-form-item">
									<div class="layui-input-block"style="margin-left:0;text-align: center;">
										<span>绑定银行账户赠送本人：</span><input type="text" name="info[bindcardamount]" value="{$setlist.bindcardamount}" style="width:160px;" class="layui-input inline-block"><span> 元，0为关闭活动。</span>
									</div>
								</div>
							</div>
						</div>
					</div>  
					<div class="layui-form-item">
						<div class="layui-input-block"style="margin-left:0;text-align: center;">
							<button class="layui-btn" lay-filter="formBasSubmit" type="submit">&emsp;保存&emsp;</button>
							<button onClick="layer_close();" class="layui-btn layui-btn-primary" type="button">&emsp;取消&emsp;</button>
						</div>
					</div>
				</form>
				<!-- //表单结束 -->
			</div>
		</div>
	</div>
	{include file="Public/footer" /}
	<!-- js部分 -->
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
	<script>
		layui.use(['layer', 'form', 'laydate','element'], function () {
			var $ = layui.jquery;
			var layer = layui.layer;
			var form = layui.form;
			var laydate = layui.laydate;
			var element = layui.element;
		});
	</script>
</body>
</html>
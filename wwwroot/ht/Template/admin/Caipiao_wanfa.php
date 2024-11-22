<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<title>玩法管理</title> 
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css" /> 
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all" /> 
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script>
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script>
	<style>
		.layui-table-view .layui-table-cell .layui-select-title .layui-input {
			height: 28px;
			line-height: 28px;
		}

		.layui-table-view [lay-size="lg"] .layui-table-cell .layui-select-title .layui-input {
			height: 40px;
			line-height: 40px;
		}

		.layui-table-view [lay-size="lg"] .layui-table-cell .layui-select-title .layui-input {
			height: 40px;
			line-height: 40px;
		}

		.layui-table-view [lay-size="sm"] .layui-table-cell .layui-select-title .layui-input {
			height: 20px;
			line-height: 20px;
		}

		.layui-table-view [lay-size="sm"] .layui-table-cell .layui-btn-xs {
			height: 18px;
			line-height: 18px;
		}
		u{
			text-decoration: none;
		}
		.layui-form.layui-border-box.layui-table-view{
			margin-top: 0;
		}
	</style> 
</head> 
<body onscroll="layui.admin.hideFixedEl();"> 
	<!-- 正文开始 --> 
	<div class="layui-fluid"> 
		<div class="layui-card"> 
			<div class="layui-card-body"> 
				<!-- 表格工具栏 --> 
				<div class="page-container"> 
					<!-- 表格工具栏 --> 
					<div class="layui-tab">
						<ul class="layui-tab-title">
							<li class="layui-this" lottery_code="k3">快三</li>
							<li lottery_code="ssc">时时彩</li>
							<li lottery_code="pk10">PK10</li>
							<li lottery_code="keno">快乐彩</li>
							<li lottery_code="x5">十一选五</li>
							<li lottery_code="dp3">3D/PL3</li>
							<li lottery_code="lhc">六合彩</li>
							<li lottery_code="xy28">幸运28</li>
						</ul>
						<div class="layui-form layui-border-box layui-table-view">
							<div class="a3cloud">
								<div class="layui-table-header k3">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="11%" />
											<col name="laytable-cell-1-0-1" width="11%" />
											<col name="laytable-cell-1-0-2" width="11%" />
											<col name="laytable-cell-1-0-3" width="11%" />
											<col name="laytable-cell-1-0-4" width="11%" />
											<col name="laytable-cell-1-0-5" width="11%" />
											<col name="laytable-cell-1-0-6" width="11%" />
											<col name="laytable-cell-1-0-7" width="11%" />
											<col name="laytable-cell-1-0-8" width="11%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>赔率</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最高消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="11%" />
												<col name="laytable-cell-1-0-1" width="11%" />
												<col name="laytable-cell-1-0-2" width="11%" />
												<col name="laytable-cell-1-0-3" width="11%" />
												<col name="laytable-cell-1-0-4" width="11%" />
												<col name="laytable-cell-1-0-5" width="11%" />
												<col name="laytable-cell-1-0-6" width="11%" />
												<col name="laytable-cell-1-0-7" width="11%" />
												<col name="laytable-cell-1-0-8" width="11%" />
											</colgroup>
											<tbody>
												{volist name="k3" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="k3" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="rate-{$item.playid}" defaultValue="{$_item['rate']}" name="rate" value="{$_item['rate']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header ssc" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="10%" />
											<col name="laytable-cell-1-0-1" width="10%" />
											<col name="laytable-cell-1-0-2" width="10%" />
											<col name="laytable-cell-1-0-3" width="10%" />
											<col name="laytable-cell-1-0-4" width="10%" />
											<col name="laytable-cell-1-0-5" width="10%" />
											<col name="laytable-cell-1-0-6" width="10%" />
											<col name="laytable-cell-1-0-7" width="10%" />
											<col name="laytable-cell-1-0-8" width="10%" />
											<col name="laytable-cell-1-0-9" width="10%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最低奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>中奖最高奖金</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>最高消费消费</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-9" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="10%" />
												<col name="laytable-cell-1-0-1" width="10%" />
												<col name="laytable-cell-1-0-2" width="10%" />
												<col name="laytable-cell-1-0-3" width="10%" />
												<col name="laytable-cell-1-0-4" width="10%" />
												<col name="laytable-cell-1-0-5" width="10%" />
												<col name="laytable-cell-1-0-6" width="10%" />
												<col name="laytable-cell-1-0-7" width="10%" />
												<col name="laytable-cell-1-0-8" width="10%" />
												<col name="laytable-cell-1-0-9" width="10%" />
											</colgroup>
											<tbody>
												{volist name="ssc" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="ssc" defaultValue="{$_item['typeid']}"">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxjj-{$item.playid}" defaultValue="{$_item['maxjj']}" name="maxjj" value="{$_item['maxjj']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minjj-{$item.playid}" defaultValue="{$_item['minjj']}" name="minjj" value="{$_item['minjj']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-9" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header pk10" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="10%" />
											<col name="laytable-cell-1-0-1" width="10%" />
											<col name="laytable-cell-1-0-2" width="10%" />
											<col name="laytable-cell-1-0-3" width="10%" />
											<col name="laytable-cell-1-0-4" width="10%" />
											<col name="laytable-cell-1-0-5" width="10%" />
											<col name="laytable-cell-1-0-6" width="10%" />
											<col name="laytable-cell-1-0-7" width="10%" />
											<col name="laytable-cell-1-0-8" width="10%" />
											<col name="laytable-cell-1-0-9" width="10%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最低奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>中奖最高奖金</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>最高消费消费</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-9" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="10%" />
												<col name="laytable-cell-1-0-1" width="10%" />
												<col name="laytable-cell-1-0-2" width="10%" />
												<col name="laytable-cell-1-0-3" width="10%" />
												<col name="laytable-cell-1-0-4" width="10%" />
												<col name="laytable-cell-1-0-5" width="10%" />
												<col name="laytable-cell-1-0-6" width="10%" />
												<col name="laytable-cell-1-0-7" width="10%" />
												<col name="laytable-cell-1-0-8" width="10%" />
												<col name="laytable-cell-1-0-9" width="10%" />
											</colgroup>
											<tbody>
												{volist name="pk10" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="pk10" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxjj-{$item.playid}" defaultValue="{$_item['maxjj']}" name="maxjj" value="{$_item['maxjj']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minjj-{$item.playid}" defaultValue="{$_item['minjj']}" name="minjj" value="{$_item['minjj']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-9" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header keno" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="10%" />
											<col name="laytable-cell-1-0-1" width="10%" />
											<col name="laytable-cell-1-0-2" width="10%" />
											<col name="laytable-cell-1-0-3" width="10%" />
											<col name="laytable-cell-1-0-4" width="10%" />
											<col name="laytable-cell-1-0-5" width="10%" />
											<col name="laytable-cell-1-0-6" width="10%" />
											<col name="laytable-cell-1-0-7" width="10%" />
											<col name="laytable-cell-1-0-8" width="10%" />
											<col name="laytable-cell-1-0-9" width="10%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最低奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>中奖最高奖金</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>最高消费消费</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-9" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="10%" />
												<col name="laytable-cell-1-0-1" width="10%" />
												<col name="laytable-cell-1-0-2" width="10%" />
												<col name="laytable-cell-1-0-3" width="10%" />
												<col name="laytable-cell-1-0-4" width="10%" />
												<col name="laytable-cell-1-0-5" width="10%" />
												<col name="laytable-cell-1-0-6" width="10%" />
												<col name="laytable-cell-1-0-7" width="10%" />
												<col name="laytable-cell-1-0-8" width="10%" />
												<col name="laytable-cell-1-0-9" width="10%" />
											</colgroup>
											<tbody>
												{volist name="keno" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="keno" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxjj-{$item.playid}" defaultValue="{$_item['maxjj']}" name="maxjj" value="{$_item['maxjj']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minjj-{$item.playid}" defaultValue="{$_item['minjj']}" name="minjj" value="{$_item['minjj']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-9" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header x5" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="10%" />
											<col name="laytable-cell-1-0-1" width="10%" />
											<col name="laytable-cell-1-0-2" width="10%" />
											<col name="laytable-cell-1-0-3" width="10%" />
											<col name="laytable-cell-1-0-4" width="10%" />
											<col name="laytable-cell-1-0-5" width="10%" />
											<col name="laytable-cell-1-0-6" width="10%" />
											<col name="laytable-cell-1-0-7" width="10%" />
											<col name="laytable-cell-1-0-8" width="10%" />
											<col name="laytable-cell-1-0-9" width="10%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最低奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>中奖最高奖金</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>最高消费消费</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-9" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="10%" />
												<col name="laytable-cell-1-0-1" width="10%" />
												<col name="laytable-cell-1-0-2" width="10%" />
												<col name="laytable-cell-1-0-3" width="10%" />
												<col name="laytable-cell-1-0-4" width="10%" />
												<col name="laytable-cell-1-0-5" width="10%" />
												<col name="laytable-cell-1-0-6" width="10%" />
												<col name="laytable-cell-1-0-7" width="10%" />
												<col name="laytable-cell-1-0-8" width="10%" />
												<col name="laytable-cell-1-0-9" width="10%" />
											</colgroup>
											<tbody>
												{volist name="x5" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="x5" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxjj-{$item.playid}" defaultValue="{$_item['maxjj']}" name="maxjj" value="{$_item['maxjj']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minjj-{$item.playid}" defaultValue="{$_item['minjj']}" name="minjj" value="{$_item['minjj']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-9" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header dp3" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="10%" />
											<col name="laytable-cell-1-0-1" width="10%" />
											<col name="laytable-cell-1-0-2" width="10%" />
											<col name="laytable-cell-1-0-3" width="10%" />
											<col name="laytable-cell-1-0-4" width="10%" />
											<col name="laytable-cell-1-0-5" width="10%" />
											<col name="laytable-cell-1-0-6" width="10%" />
											<col name="laytable-cell-1-0-7" width="10%" />
											<col name="laytable-cell-1-0-8" width="10%" />
											<col name="laytable-cell-1-0-9" width="10%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最低奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>中奖最高奖金</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>最高消费消费</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-9" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="10%" />
												<col name="laytable-cell-1-0-1" width="10%" />
												<col name="laytable-cell-1-0-2" width="10%" />
												<col name="laytable-cell-1-0-3" width="10%" />
												<col name="laytable-cell-1-0-4" width="10%" />
												<col name="laytable-cell-1-0-5" width="10%" />
												<col name="laytable-cell-1-0-6" width="10%" />
												<col name="laytable-cell-1-0-7" width="10%" />
												<col name="laytable-cell-1-0-8" width="10%" />
												<col name="laytable-cell-1-0-9" width="10%" />
											</colgroup>
											<tbody>
												{volist name="dp3" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="dpc" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxjj-{$item.playid}" defaultValue="{$_item['maxjj']}" name="maxjj" value="{$_item['maxjj']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minjj-{$item.playid}" defaultValue="{$_item['minjj']}" name="minjj" value="{$_item['minjj']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-9" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header lhc" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="11%" />
											<col name="laytable-cell-1-0-1" width="11%" />
											<col name="laytable-cell-1-0-2" width="11%" />
											<col name="laytable-cell-1-0-3" width="11%" />
											<col name="laytable-cell-1-0-4" width="11%" />
											<col name="laytable-cell-1-0-5" width="11%" />
											<col name="laytable-cell-1-0-6" width="11%" />
											<col name="laytable-cell-1-0-7" width="11%" />
											<col name="laytable-cell-1-0-8" width="11%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>赔率</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最高消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="11%" />
												<col name="laytable-cell-1-0-1" width="11%" />
												<col name="laytable-cell-1-0-2" width="11%" />
												<col name="laytable-cell-1-0-3" width="11%" />
												<col name="laytable-cell-1-0-4" width="11%" />
												<col name="laytable-cell-1-0-5" width="11%" />
												<col name="laytable-cell-1-0-6" width="11%" />
												<col name="laytable-cell-1-0-7" width="11%" />
												<col name="laytable-cell-1-0-8" width="11%" />
											</colgroup>
											<tbody>
												{volist name="lhc" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="lhc" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="rate-{$item.playid}" defaultValue="{$_item['rate']}" name="rate" value="{$_item['rate']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
								<div class="layui-table-header xy28" style="display: none;">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="11%" />
											<col name="laytable-cell-1-0-1" width="11%" />
											<col name="laytable-cell-1-0-2" width="11%" />
											<col name="laytable-cell-1-0-3" width="11%" />
											<col name="laytable-cell-1-0-4" width="11%" />
											<col name="laytable-cell-1-0-5" width="11%" />
											<col name="laytable-cell-1-0-6" width="11%" />
											<col name="laytable-cell-1-0-7" width="11%" />
											<col name="laytable-cell-1-0-8" width="11%" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class="">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>玩法</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class="">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>赔率</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class="">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>最高奖金</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class="">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>总注数</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class="">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>最高注数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class="">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>最低消费</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class="">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>最高消费</span>
													</div>
												</th>
												<th data-field="9" data-key="1-0-7" class="">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="10" data-key="1-0-8" class="">
													<div class="layui-table-cell laytable-cell-1-0-8" align="center">
														<span>操作</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
									<div class="admin404 layui-table-main">
										<table cellspacing="0" cellpadding="0" border="0" class="layui-table"style="width: 100%;">
											<colgroup>
												<col name="laytable-cell-1-0-0" width="11%" />
												<col name="laytable-cell-1-0-1" width="11%" />
												<col name="laytable-cell-1-0-2" width="11%" />
												<col name="laytable-cell-1-0-3" width="11%" />
												<col name="laytable-cell-1-0-4" width="11%" />
												<col name="laytable-cell-1-0-5" width="11%" />
												<col name="laytable-cell-1-0-6" width="11%" />
												<col name="laytable-cell-1-0-7" width="11%" />
												<col name="laytable-cell-1-0-8" width="11%" />
											</colgroup>
											<tbody>
												{volist name="xy28" id="vo"}
												{volist name="vo['list']" id="item"}
												<tr data-index="0">
													{php}
													$_item = $$item['playid'];
													{/php}
													<td data-field="1" data-key="1-0-0" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-0">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="title-{$item.playid}" defaultValue="{$_item['title']}" name="title" value="{$_item['title']}">
															<input class="input-text size-S input-change" style="width:80px;" id="typeid-{$item.playid}" type="hidden" name="typeid" value="xy28" defaultValue="{$_item['typeid']}">
															<input class="input-text size-S input-change" style="width:80px;" id="playid-{$item.playid}" type="hidden" name="playid" value="{$item.playid}" defaultValue="{$item.playid}">
														</div>
													</td>
													<td data-field="2" data-key="1-0-1" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-1">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="rate-{$item.playid}" defaultValue="{$_item['rate']}" name="rate" value="{$_item['rate']}">
														</div>
													</td>
													<td data-field="3" data-key="1-0-2" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-2">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxprize-{$item.playid}" defaultValue="{$_item['maxprize']}" name="maxprize" value="{$_item['maxprize']}">
														</div>
													</td>
													<td data-field="4" data-key="1-0-3" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-3">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="totalzs-{$item.playid}" defaultValue="{$_item['totalzs']}" name="totalzs" value="{$_item['totalzs']}">
														</div>
													</td>
													<td data-field="5" data-key="1-0-4" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-4">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxzs-{$item.playid}" defaultValue="{$_item['maxzs']}" name="maxzs" value="{$_item['maxzs']}">
														</div>
													</td>
													<td data-field="6" data-key="1-0-5" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-5">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="minxf-{$item.playid}" defaultValue="{$_item['minxf']}" name="minxf" value="{$_item['minxf']}">
														</div>
													</td>
													<td data-field="7" data-key="1-0-6" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-6">
															<input class="layui-input input-change" type="text" style="height: 28px;display:inline-block;padding-left:0;text-align: center;" id="maxxf-{$item.playid}" defaultValue="{$_item['maxxf']}" name="maxxf" value="{$_item['maxxf']}">
														</div>
													</td>
													<td data-field="9" data-key="1-0-7" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-7">
															<u ascn-url="{:url('setwfstatus',['typeid'=>$_item['typeid'],'playid'=>$item['playid'],'name'=>'isopen'])}" value="{if condition="$_item['isopen'] eq 1"}启用{else /}停用{/if}">
																<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="启用|停用" {if condition="$_item['isopen'] eq 1"}checked{/if}/>
															</u>
														</div>
													</td>
													<td data-field="10" data-key="1-0-8" align="center" class="">
														<div class="layui-table-cell laytable-cell-1-0-8"> 
															<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onClick="baocun('{$item.playid}');">保存</u> 
														</div>
													</td>
												</tr>
												{/volist}
												{/volist}
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<!-- 数据表格 --> 
							{include file="Public/footer" /}

							<script>
								layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate','element'], function () {
									var $ = layui.jquery;
									var layer = layui.layer;
									var form = layui.form;
									var table = layui.table;
									var util = layui.util;
									var dropdown = layui.dropdown;
									var laydate = layui.laydate;
									var element = layui.element;


									var insTb = layui.table;


								});
							</script> 
							<script>
								$(document).on("click", "[ascn-url]", function() {
									var obj       = $(this);
									var url       = $(this).attr('ascn-url');
									var issuccess = obj.hasClass('label-success');
									$.getJSON(url, function(json){
										if(json.status==1){
											layer.msg('操作成功',{icon: 1,time:1000});
										}else{
											layer.msg(json.info,{icon: 2,time:2000});
										};
									});
								});

							</script>
							<script>
								function baocun($id){
									var typeid = $("#typeid-"+$id),
									playid = $("#playid-"+$id),
									maxjj  = $("#maxjj-"+$id),
									minjj  = $("#minjj-"+$id),
									maxrate  = $("#maxrate-"+$id),
									minrate  = $("#minrate-"+$id),
									rate   = $("#rate-"+$id),
									maxzs  = $("#maxzs-"+$id),
									minxf  = $("#minxf-"+$id),
									maxxf  = $("#maxxf-"+$id),
									title  = $("#title-"+$id),
									maxprize  = $("#maxprize-"+$id),
									totalzs  = $("#totalzs-"+$id),
									url       = "{:url('wfbaocun')}";
									$.ajax({
										type : "POST",
										url  : url,
										data : {
											'id':$id,
											'typeid':typeid.val(),
											'playid':playid.val(),
											'maxjj':maxjj.val(),
											'minjj':minjj.val(),
											'maxrate':maxrate.val(),
											'minrate':minrate.val(),
											'rate':rate.val(),
											'maxzs':maxzs.val(),
											'minxf':minxf.val(),
											'maxxf':maxxf.val(),
											'maxprize':maxprize.val(),
											'totalzs':totalzs.val(),
											'title':title.val()
										},
										success : function (json) {
											if(json.status==1){
												layer.msg(json.info,{icon:1,time:2000});
											}else if(json.status==0){
												layer.msg(json.info,{icon:2,time:3000});
											}
										}
									})
								};
							</script>
							<script type="text/javascript">
								$(document).on("click", ".layui-tab-title li", function() {
									lottery_code = $(this).attr('lottery_code');
									$(".a3cloud > div."+lottery_code).show().siblings('div').hide();
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
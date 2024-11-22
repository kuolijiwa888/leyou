<html>
<head> 
	<meta charset="utf-8" /> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<title>会员管理</title> 
	<link rel="stylesheet" href="./assets/libs/layui/css/layui.css" /> 
	<link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all" /> 
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
<body> 
	<div class="layui-fluid"> 
		<div class="layui-card"> 
			<div class="layui-card-body"> 
				<!-- 表格工具栏 --> 
				<div class="page-container"> 
					<!-- 数据表格 --> 
					<form method="post" action="/Admincenter/Caipiao.fadan.do"> 
						<div class="layui-form layui-border-box layui-table-view" lay-filter="LAY-table-1" lay-id="tbBasicTable">
							<div class="layui-table-box">
								<div class="layui-table-header">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="175px" />
											<col name="laytable-cell-1-0-1" width="135px" />
											<col name="laytable-cell-1-0-2" width="193px" />
											<col name="laytable-cell-1-0-3" width="193px" />
											<col name="laytable-cell-1-0-4" width="193px" />
											<col name="laytable-cell-1-0-5" width="197px" />
											<col name="laytable-cell-1-0-6" width="135px" />
											<col name="laytable-cell-1-0-7" width="396px" />
										</colgroup>
										<thead>
											<tr>
												<th data-field="1" data-key="1-0-0" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-0" align="center">
														<span>彩种</span>
													</div>
												</th>
												<th data-field="2" data-key="1-0-1" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-1" align="center">
														<span>状态</span>
													</div>
												</th>
												<th data-field="3" data-key="1-0-2" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-2" align="center">
														<span>单期发单数</span>
													</div>
												</th>
												<th data-field="4" data-key="1-0-3" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-3" align="center">
														<span>保密类型</span>
													</div>
												</th>
												<th data-field="5" data-key="1-0-4" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-4" align="center">
														<span>投注倍数</span>
													</div>
												</th>
												<th data-field="6" data-key="1-0-5" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-5" align="center">
														<span>合买比例</span>
													</div>
												</th>
												<th data-field="7" data-key="1-0-6" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-6" align="center">
														<span>是否保底</span>
													</div>
												</th>
												<th data-field="8" data-key="1-0-7" class=" layui-unselect">
													<div class="layui-table-cell laytable-cell-1-0-7" align="center">
														<span>玩法</span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="layui-table-body layui-table-main">
									<table cellspacing="0" cellpadding="0" border="0" class="layui-table" style="width: 100%;">
										<colgroup>
											<col name="laytable-cell-1-0-0" width="175px" />
											<col name="laytable-cell-1-0-1" width="135px" />
											<col name="laytable-cell-1-0-2" width="193px" />
											<col name="laytable-cell-1-0-3" width="193px" />
											<col name="laytable-cell-1-0-4" width="193px" />
											<col name="laytable-cell-1-0-5" width="197px" />
											<col name="laytable-cell-1-0-6" width="135px" />
											<col name="laytable-cell-1-0-7" width="396px" />
										</colgroup>
										<tbody>
											{volist name="fadan_caipiao_list" id="vo"}
											<tr data-index="0" class="">
												<td data-field="1" data-key="1-0-0" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-0">{$vo.title}</div>
												</td>
												<td data-field="2" data-key="1-0-1" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-1"> 
														{if condition="$vo['hemai_status'] eq 1"}
														<u onclick="change('{$vo.name}','0');" value="{if condition="$vo['hemai_status'] eq 1"}开启{else /}关闭{/if}">
															<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="开启|关闭" {if condition="$vo['hemai_status'] eq 1"}checked{/if}/>
														</u>
														{else /}
														<u onclick="change('{$vo.name}','1');" value="{if condition="$vo['hemai_status'] eq 1"}开启{else /}关闭{/if}">
															<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="开启|关闭" {if condition="$vo['hemai_status'] eq 1"}checked{/if}/>
														</u>
														{/if}
													</div>
												</td>
												<td data-field="3" data-key="1-0-2" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-2"> 
														<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" id="{$vo.name}sum" value="{$vo.hemai_danqi_sum}" />
														<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onclick="changeLotNum('{$vo.name}sum','{$vo.name}')">确定</u> 
													</div>
												</td>
												<td data-field="4" data-key="1-0-3" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-3">
														<div class="ew-select-fixed" style="width: 100px;display: inline-block;">
															<select name="{$vo.name}Csecurity">
																<option value="">请选择</option>
																<option value="0" {if condition="$vo['hemai_baomi_type'] eq 0"}selected="selected"{/if}>完全公开</option> 
																<option value="1" {if condition="$vo['hemai_baomi_type'] eq 1"}selected="selected"{/if}>开奖后公开</option> 
																<option value="2" {if condition="$vo['hemai_baomi_type'] eq 2"}selected="selected"{/if}>仅跟单人可看</option> 
																<option value="3" {if condition="$vo['hemai_baomi_type'] eq 3"}selected="selected"{/if}>完全保密</option> 
															</select>
														</div>
														<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onclick="changeSecurity('{$vo.name}Csecurity','{$vo.name}')">确定</u> 
													</div>
												</td>
												<td data-field="5" data-key="1-0-4" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-4"> 
														<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" id="{$vo.name}beishu" value="{$vo.hemai_touzhu_beishu}" /> 
														<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onclick="changeBeishu('{$vo.name}beishu','{$vo.name}')">确定</u> 
													</div>
												</td>
												<td data-field="6" data-key="1-0-5" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-5"> 
														<input class="layui-input input-change" type="text" style="width:100px;height: 28px;display:inline-block;padding-left:0;text-align: center;" id="{$vo.name}percent" value="{$vo.hemai_touzhe_bili}" /> % 
														<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onclick="buypercent('{$vo.name}percent','{$vo.name}')">确定</u> 
													</div>
												</td>
												<td data-field="7" data-key="1-0-6" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-6"> 
														{if condition="$vo['hemai_baodi_status'] eq 1"}
														<u onclick="change_baodi('{$vo.name}','0');" value="{if condition="$vo['hemai_baodi_status'] eq 1"}开启{else /}关闭{/if}">
															<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="开启|关闭" {if condition="$vo['hemai_baodi_status'] eq 1"}checked{/if}/>
														</u>
														{else /}
														<u onclick="change_baodi('{$vo.name}','1');" value="{if condition="$vo['hemai_baodi_status'] eq 1"}开启{else /}关闭{/if}">
															<input type="checkbox" class="userId" lay-filter="userTbStateCk"  lay-skin="switch" lay-text="开启|关闭" {if condition="$vo['hemai_baodi_status'] eq 1"}checked{/if}/>
														</u>
														{/if}
													</div>
												</td>
												<td data-field="8" data-key="1-0-7" align="center" class="">
													<div class="layui-table-cell laytable-cell-1-0-7"> 
														{if condition="$vo['typeid'] eq ssc"}
														{volist name="ssc" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq k3"}
														{volist name="k3" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq keno"}
														{volist name="keno" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq x5"}
														{volist name="x5" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq lhc"}
														{volist name="lhc" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq dpc"}
														{volist name="dpc" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq xy28"}
														{volist name="xy28" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}

														{if condition="$vo['typeid'] eq pk10"}
														{volist name="pk10" id="voo"}
														<input type="checkbox" name="{$vo.name}" value="{$key}" lay-skin="primary" lay-filter="layTableAllChoose" {php}if(in_array($key, $vo['hemai_wanfa_type'])){echo 'checked';}{/php}/>
														<div class="layui-unselect layui-form-checkbox" lay-skin="primary">
															<i class="layui-icon layui-icon-ok"></i>
														</div>{$voo.title}
														{/volist}
														{/if}
														<u style="cursor:pointer" class="layui-btn layui-btn-primary layui-btn-xs" onclick="confirmType('{$vo.name}','{$vo.name}')" >确定</u> 
													</div>
												</td>
											</tr>
											{/volist}
										</tbody>
									</table>
								</div>
							</div>
						</div> 
					</form>
				</div> 
			</div> 
			<div class="layui-card"> 
			</div> 
		</div> 
	</div> 
	{include file="Public/footer" /}
	<!-- js部分 --> 
	<script type="text/javascript" src="./assets/libs/layui/layui.js"></script> 
	<script type="text/javascript" src="./assets/js/common.js?v=318"></script> 
	<script>
		layui.use(['layer', 'form'], function () {
			var $ = layui.jquery;
			var layer = layui.layer;
			var form = layui.form;
		});
	</script> 
	<script>
		function change(lot, value) {
			$.post("/Admincenter/caipiao.change_hemai_status", {
				cpname : lot,
				cp_hemai_status : value
			}, function(data) {
				layer.msg(data.msg);
				setTimeout(function(){
				    location.reload();
				},300)
			},'json')

		}

		function change_baodi(lot, value) {
			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lot,
				hemai_baodi_status : value
			}, function(data) {
				layer.msg(data.msg);
				setTimeout(function(){
				    location.reload();
				},300)
			},'json')

		}

		function confirmType(lot,lotname) {
			var type="";
			$("input[name='"+lot+"']:checkbox").each(function() {
				if ($(this).is(":checked")) { 
					type=type+$(this).val()+",";
				} 
			});
			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lotname,
				hemai_wanfa_type : type
			}, function(data) {
				layer.msg(data.msg);
			},'json')
		}
		function changeBeishu(id,lotname){

			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lotname,
				hemai_touzhu_beishu : $("#"+id).val()
			}, function(data) {
				layer.msg(data.msg);
			},'json')
		}
		function changeLotNum(id,lotname){

			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lotname,
				hemai_danqi_sum : $("#"+id).val()
			}, function(data) {
				layer.msg(data.msg);
			},'json')
		}
		function changeSecurity(id,lotname){
			var v=$("select[name='"+id+"']").val();
			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lotname,
				hemai_baomi_type : v
			}, function(data) {
				layer.msg(data.msg);
			},'json')
		}
		function buypercent(id,lotname){

			$.post("/Admincenter/caipiao.change_hemai_value", {
				cpname : lotname,
				hemai_touzhe_bili : $("#"+id).val()
			}, function(data) {
				layer.msg(data.msg);
			},'json')
		}
	</script>	
</body>
</html>
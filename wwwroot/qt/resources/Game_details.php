<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>合买详细</title>
	<meta name="keywords" content="合买详细">
	<meta name="description" content="合买详细">
	<meta http-equiv="Expires" content="0"><meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta http-equiv="Cache" content="no-cache">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<link rel="stylesheet" href="/ascn/css/hmicon.css">
	<link rel="stylesheet" href="/ascn/css/hemaigroup.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/resources/js/way.min.js"></script>
	<script type="text/javascript" src="/resources/main/common.js"></script>
	<script type="text/javascript" src="/resources/js2/hemaidetils.js"></script>
	<script src="/ascn/js/MiniDialog-es5.min.js"></script>
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<div class="docBody clearfix">
		<div id="mainBody"> <div class="game_header clearfix">
			<div class="headerBox">
				<div class="det_t_bg">
					<div class="media-left">
						<eq name="cp.typeid" value="k3">
							<i class="iconfont">&#xe607;</i>
						</eq>
						<eq name="cp.typeid" value="lhc">
							<i class="iconfont" style="color:#07b39e">&#xe65a;</i>
						</eq>
						<eq name="cp.typeid" value="ssc">
							<i class="iconfont special " >&#xe657;</i>
						</eq>
						<eq name="cp.typeid" value="pk10">
							<i class="icon--pk iconfont " style="color:#f22751" ></i>
						</eq>
						<eq name="cp.typeid" value="keno">
							<i class="icon-kuaile8 iconfont " style="color:#fc5826" ></i>
						</eq>
						<eq name="cp.typeid" value="x5">
							<i class="icon-11xuan5 iconfont " style="color:#218ddd" ></i>
						</eq>
						<eq name="cp.typeid" value="dpc">
							<i class="<?php if(strstr($cp['name'],'3d')){echo 'icon-fucai3d fc3d_c';}else{echo ' icon-pailie3 pl3_c';}?>  iconfont " style="color:<?php if(strstr($cp['name'],'3d')){echo '#00b7ee';}else{echo '#38b366';}?>" ></i>
						</eq>
					</div>

					<div class="clearfix titleBox">
						<h1>{$result[0]['cptitle']}</h1>
						<div class="abstract">
							<span>发起时间：{$result[0]['oddtime']|date="Y-m-d H:i",###}</span>
							<span>编号：{$result[0]['trano']}</span>
							<strong class="gameperiod">期号：{$result[0]['expect']}</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="topWrap clearfix">
			<div class="userInfoBox">
				<div class="clearfix userInfo">
					<img style="display:inline;float:left;margin:0 15px 0 10px;border:1px solid #C2C2C2;height:60px;width:60px;" src="{$face[0]['face']}">
					<div class="userName">
						发起人<strong id="username">{$result[0]['username']|msubstr=0,2,'utf-8',false}****</strong>
					</div>
				</div>
				<ul class="list clearfix">					
					<li><span class="textL">中奖宣言：</span><strong id="word">简单号码成就巨奖梦想</strong></li>
				</ul>
			</div>
			<div class="scheme">
				<ul class="list">
					<li class="caseStatus" style="font-weight:900">方案状态：<strong id="status"><font color="#0091D1">
						<if condition="$result[0]['isdraw'] eq 0">未开奖
							<elseif condition="$result[0]['isdraw'] eq 1"/><font color="#FF070B">已中奖</font>
							<elseif condition="$result[0]['isdraw'] eq -1"/><font color="#727171">未中奖</font>
							<elseif condition="$result[0]['isdraw'] eq -2"/><font color="#727171">已撤单</font>
						</if>					
					</font></strong></li>
					<li>方案进度：<div class="progressBox baodi">
						<div class="progressBar"><span style="width:{$result[0]['jindu']*100}%" class="progress"><strong>{$result[0]['jindu']*100}</strong>%
						</span>					
						<i style="right:{$result[0]['bdjindu']*100}%"></i>
					</div>
					<if condition="$result[0]['isbaodi'] eq 1">
						<em class="icoBaodi">保底
							<strong>{$result[0]['bdjindu']*100}%</strong>
						</em>
					</if>
				</div></li>
				<li>中奖金额：<strong id="winmoney"><font color="#FE5400">{$result[0]['okamount']}</font> 元</strong></li>
			</ul>
			<ul id="centerh" class="ulTable clearfix">
				<li><span>总金额</span><strong>{$result[0]['amount']} 元</strong></li>
				<li><span>剩余份数</span><strong>{$result[0]['isfull']} 份</strong></li>
				<li><span>保底金额</span><strong>
					<if condition="$result[0]['isbaodi'] eq 1">
						{$result[0]['baodi']*$result[0]['hemaipic']}元
						<else/>未保底
					</if>
				</strong></li>
				<li><span>总份数</span><strong>{$result[0]['fenshu']}份</strong></li>
				<li style="border-right:0;"><span>每份金额</span><strong>{$result[0]['hemaipic']} 元</strong></li>
			</ul>
		</div>
		<div id="tzot" style="padding:10px">
			<table id="gaopinNumberTable" class="user_table" style="height:100px" width="100%" cellspacing="0" cellpadding="0" border="0">
				<thead>
					<tr><td>投注号码</td></tr>

					<if condition="$result[0]['showtype'] eq 0">			
						<tr><td style="background:#FFFFFF; padding:15px; text-align:center;">[{$result[0]['playtitle']}]{$result[0]['tzcode']}</td></tr>
						<elseif condition="$result[0]['showtype'] eq 1"/>
						<if condition="($result[0]['username'] eq $_SESSION['userinfo']['username']) OR $result[0]['isdraw'] eq 1 OR $result[0]['isdraw'] eq -1 OR $result[0]['isdraw'] eq -2">
							<tr><td style="background:#FFFFFF; padding:15px; text-align:center;">[{$result[0]['playtitle']}]{$result[0]['tzcode']}</td></tr>
							<else/>
							<tr><td><strong>该方案选择<strong class='c_ba2636'>开奖后公开</strong></strong></td></tr>	
						</if>
						<elseif condition="$result[0]['showtype'] eq 2"/>
						<if condition="$inlist eq 'false'">
							<tr><td style="background:#FFFFFF; padding:15px; text-align:center;">[{$result[0]['playtitle']}]{$result[0]['tzcode']}</td></tr>
							<else/>
							<tr><td><strong>该方案选择<strong class='c_ba2636'>参与可见</strong>（仅对加入方案人公开）</strong></td></tr>
						</if>
						<elseif condition="$result[0]['showtype'] eq 3"/>
						<if condition="($result[0]['username'] eq $_SESSION['userinfo']['username'])">
							<tr><td style="background:#FFFFFF; padding:15px; text-align:center;">[{$result[0]['playtitle']}]{$result[0]['tzcode']}</td></tr>
							<else/>				
							<tr><td><strong>该方案选择<strong class="c_ba2636">永久保密</strong>（仅方案发起人可见）</strong></td></tr>
						</if>
					</if>

				</thead></table>
			</div>
			<div id="paybox" class="paybox">
				<if condition="($result[0]['isfull'] neq 0) AND $isstop eq false">

					<div id="touzhu">
						<p>
							剩余 <strong class="c_ba2636" id="buyhave">{$result[0]['isfull']}</strong> 份 我要买 <input
							style="ime-mode: disabled;" size="5" onkeyup="FormatNum(this)"id="buynum"
							name="buynum" value="1"  max="{$result[0]['isfull']}"
							placeholder="剩余{$result[0]['isfull']}份" class="input"
							onpaste="return false" autocomplete="off"> 份。 
						</p>
						<a id="addproject" herf="javascript:;" rel="nofollow" class="betting_Btn" title="立即投注"style="background: #a68f4c;">立即投注</a>	
						<input name="senumber" id="senumber" value="{$result[0]['isfull']}" type="hidden">
						<input name="onemoney" id="onemoney" value="{$result[0]['hemaipic']}" type="hidden">
						<input name="pid" id="pid" value="{$result[0]['id']}" type="hidden">

					</div>				
					<elseif condition="$isstop eq true"/>
					<div id="jiezhi">
						<a class="end_Btn" href="javascript:;" rel="nofollow" title="方案已截止">方案已截止</a>
						<a target="_blank" href="/Index.hemai.do">您可以选择参加其他合买>></a>
					</div>

					<else/>	
					<div id="manyuan">
						<a class="full_Btn" href="javascript:;" rel="nofollow" title="方案已满员">方案已满员</a>
						<a target="_blank" href="/Index.hemai.do">您可以选择参加其他合买&gt;&gt;</a>
					</div>
				</if>
			</div>
		</div>
		<div class="number_user_wrap">
			<ul class="number_user_tab clearfix" id="joinTab">
				<li class="an_cur"><a href="javascript:void(0);">期号详情</a></li>
				<li class=""><a href="javascript:void(0);">参与用户</a></li>
			</ul>
			<!--选号详情 start -->
			<div id="show_list_div">
				<table class="user_table hmxq" style="display: table;" width="100%" cellspacing="0" cellpadding="0" border="0">
					<thead>
						<tr>
							<td width="10%">期号</td>
							<td width="10%">金额</td>
							<td width="10%">倍数</td>
							<td width="10%">开奖号码</td>
							<td width="15%">开奖时间</td>
							<td width="10%">奖金</td>
							<td width="10%">状态</td>
							<td width="10%">操作</td>
						</tr>
					</thead><tbody class="testtest"><tr><td>{$result[0]['expect']}</td><td>￥{$result[0]['amount']}</td><td>{$result[0]['beishu']} 倍</td><td>{$result[0]['opencode']}</td><td>
						<if condition="$result[0]['opentime'] eq 0">
							--
							<else/>
							{$result[0]['opentime']||date="Y-m-d H:i:s",###}
						</if>
					</td><td>{$result[0]['okamount']}</td>
					<td class="red"><b>
						<if condition="$result[0]['isdraw'] eq 0">未开奖
							<elseif condition="$result[0]['isdraw'] eq 1"/><font color="#FF070B">已中奖</font>
							<elseif condition="$result[0]['isdraw'] eq -1"/><font color="#727171">未中奖</font>
							<elseif condition="$result[0]['isdraw'] eq -2"/><font color="#727171">已撤单</font>
						</if>	
					</b></td><td>--</td>
				</tr></tbody>

			</table>
			<!--选号详情 start -->
			<!--合买参与用户 start -->
			<table class="user_table" style="display: none;" width="100%" cellspacing="0" cellpadding="0" border="0">
				<thead>
					<tr>
						<th width="15%" style="text-align:center;">序号</th>
						<th width="20%" style="text-align:center;">用户名</th>
						<th width="20%" style="text-align:center;">认购金额（元）</th>
						<th width="20%" style="text-align:center;">中奖金额（元）</th>
						<th width="25%" style="text-align:center;">参与时间</th>
					</tr>
				</thead><tbody>

					<volist name="resulthm" id="vo">
						<tr>
							<td>{$i}</td>
							<td>{$vo['username']|msubstr=0,2,'utf-8',false}****</td>
							<td>{$vo['hemaipic']*$vo['rengou']}</td>
							<td>￥{$vo['okamount']}</td>
							<td>{$vo['oddtime']|date="Y-m-d H:i:s",###}</td>
						</tr>
					</volist>
				</tbody>

			</table>
			<!--合买参与用户 end -->
		</div>
	</div>
</div>
</div>










<script>
	$(function(){
		$("#addproject").click(check_project);
	});
	function check_project()
	{
		var buynum =$("#buynum").val();
		var senumber = Number($("#senumber").val());
		var onemoney = $("#onemoney").val();
		var pid  = $("#pid").val();
		
		if (buynum=="")
		{
			Dialog.error('温馨提示',"认购份数不能为空！");
			$("#buynum").focus();
			return;
		}
		else if (Number(buynum) <= 0)
		{
			Dialog.error('温馨提示',"认购份数不能小于1！");
			$("#buynum").focus();
			return;
		}
		else if (Number(buynum) > Number(senumber))
		{
			Dialog.error('温馨提示',"您认购份数不能大于剩余份数！");
			$("#buynum").focus();
			return;
		}
		
		var msg = "<p style='margin: 0 0 -5px;font-weight: 600; font-size:14px;padding:.2em;'>您好，请您确认</p>";
		msg = msg + "<p style='margin: 0 0 -5px;text-align:left;text-indent:2em;font-weight: 400;font-size:14px;padding:.2em;'>认购份数：<font color='red' style='font-weight:bold'>"+buynum+"</font>份</p>";
		msg = msg + "<p style='margin: 0 0 -5px;text-align:left;text-indent:2em;font-weight: 400;font-size:14px;padding:.2em;'>认购金额：<font color='red' style='font-weight:bold'>"+buynum*formatCurrency2(onemoney)+"元</font></p>";

		Dialog({
			title: "我要合买",
			content: msg,
			ok: {
				callback: function () {
					if(!user){
						Dialog.error('温馨提示','请先登陆');
					}
					add_project(buynum,pid,onemoney)
				}
			},
			cancel: {
				callback: function () {
					
				}
			}
		});

	}
   //参加合买
   function add_project(buynum,pid,onemoney){	
   	if(!user){
   		Dialog.error('温馨提示','请先登陆');
   		return;
   	}
   	$.ajax({
   		type: "POST",
   		url: apirooturl + 'hmadd',
   		data: {
   			action:"add",
   			pid:pid,
   			buynum:buynum,
   			onemoney:onemoney
   		},
   		success: function(json){
   			if(json.sign){             
   				Dialog.success('温馨提示','发起合买成功');
   				LottName = $(".ulMode1 li[class='active']").attr("data");
   				if(LottName){				
   					do_search();
   				}else{				
   					do_search_index();
   				}

   			}else{
   				Dialog.error('温馨提示',json.message);
   			}
   		},
   		error: function (jqXHR, textStatus, errorThrown) {
   			Dialog.error('温馨提示',"交易失败,请重新提交！");
   		},
   		complete: function (jqXHR, textStatus) {
   		}
   	});
   }
   
   function FormatNum(obj)
   {
   	$(obj).val($(obj).val().replace(/[^\d]/g,''));
   }
   function formatCurrency2(num) {
   	num = num.toString().replace(/\$|\,/g,'');
   	if(isNaN(num))
   	{
   		num = "0";
   	}
   	var sign = (num == (num = Math.abs(num)));
   	num = Math.floor(num*100+0.50000000001);
   	var cents = num%100;
   	num = Math.floor(num/100).toString();
   	if(cents<10)
   	{
   		cents = "0" + cents;
   	}
   	return (((sign)?'':'-') + num + '.' + cents);
   }
</script>
</body>
</html>
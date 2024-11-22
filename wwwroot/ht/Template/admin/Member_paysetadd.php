<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>存款方式添加/修改</title>
    <link rel="stylesheet" href="./assets/libs/layui/css/layui.css"/>
    <link rel="stylesheet" href="./assets/module/admin.css?v=318" media="all"/>
    <style>
        #AjaxPostForm {
            max-width: 700px;
            margin: 30px auto;
        }

        #AjaxPostForm .layui-form-item {
            margin-bottom: 25px;
        }
        .layui-upload-img {
            width: 92px;
            height: 92px;
            margin: 0 10px 10px 0;
        }
    </style>
</head>
<body>
    <!-- 正文开始 -->
    <div class="layui-fluid">
        <div class="layui-card">
            <div class="layui-card-body">
                <div class="layui-form-item">
					<label class="layui-form-label layui-form-required" style="width: 100px;">本地文件上传:</label>
					<form enctype="multipart/form-data" method="post" name="fileinfo" id="fileinfo">
						<div style="position: relative;display: inline-block;line-height: 50px;border: 1px solid #DFDFDF;">
							<input type="file" name="file" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg" style="position: absolute;left: 0;top: 0;z-index: 10;width: 102px;height: 38px;opacity: .01;cursor: pointer;">
							<span style="margin: 0 15px;text-align: center;"><i class="layui-icon"></i>上传图片</span>
						</form>
						<button type="button" class="layui-btn" onclick='send()'>开始上传</button>
					</div>
				</div>
                <!-- 表单开始 -->
                <form action="{:U(CONTROLLER_NAME.'/'.ACTION_NAME)}" method="post" class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
                    {present name="info"}
                    <input name="id" type="hidden" value="{$info[$_pk]}">
                    {/present}
                    <div class="layui-form-item">
                        <label class="layui-form-label">是否线上支付:</label>
                        <div class="layui-input-block" id="IsPurchased">
                            <input type="radio" id="isonline-1" name="isonline" value="1" {if condition="$info['isonline'] eq 1"}checked{/if} title="是" lay-filter="ascn">
                            <input type="radio" id="isonline-0" name="isonline" value="-1" {if condition="$info['isonline'] eq -1"}checked{/if} title="否" lay-filter="ascn">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标识:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.paytype}" placeholder="标识" name="paytype" class="layui-input"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">名称:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.paytypetitle}" placeholder="支付方式名称" name="paytypetitle" class="layui-input"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">副名称:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.ftitle}" placeholder="副名称" name="ftitle" class="layui-input"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">充值金额设置:</label>
                        <div class="layui-input-block">
                            <input type="text" name="minmoney" value="{$info.minmoney}" placeholder="最低充值金额" type="text" class="layui-input"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">充值金额设置:</label>
                        <div class="layui-input-block">
                            <input type="text" name="maxmoney" value="{$info.maxmoney}" placeholder="最高充值金额" class="layui-input"/>
                        </div>
                    </div>
                    <div id="payisonline1" style="display: none;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">商户标识:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.merchantid}" placeholder="商户标识" name="configs[merchantid]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">商家密钥1:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.merchantkey1}" placeholder="商家密钥1" name="configs[merchantkey1]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">商家密钥2:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.merchantkey2}" placeholder="商家密钥2" name="configs[merchantkey2]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">前台跳转地址:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.redirecturl}" placeholder="前台跳转地址" name="configs[redirecturl]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">前台通知地址:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.hrefbackurl}" placeholder="前台通知地址" name="configs[hrefbackurl]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">异步通知地址:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.returnbackurl}" placeholder="异步通知地址" name="configs[returnbackurl]" class="layui-input"/>
                            </div>
                        </div>
                    </div>
                    <div id="payisonline0" style="display: none;">
                        <div class="layui-form-item">
                            <label class="layui-form-label">收款人姓名:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.bankname}" placeholder="收款人姓名" name="configs[bankname]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">收款人账号:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.bankcode}" placeholder="收款人账号" name="configs[bankcode]" class="layui-input"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">是否二维码支付:</label>
                            <div class="layui-input-block" id="IsPurchased">
                                <input type="radio" id="isewm-1" name="configs[isewm]" value="1" {if condition="$configs['isewm'] eq 1"}checked{/if} title="是" lay-filter="ascn">
                                <input type="radio" id="isewm-0" name="configs[isewm]" value="-1" {if condition="$configs['isewm'] eq -1"}checked{/if} title="否" lay-filter="ascn">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">二维码:</label>
                            <div class="layui-input-block">
                                <input type="text" value="{$configs.ewmurl}" placeholder="二维码" name="configs[ewmurl]" id="ewmurl" class="layui-input"/>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">支付说明:</label>
                        <div class="layui-input-block">
                            <textarea id="ascntext" name="remark">{$info.remark}</textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">状态:</label>
                        <div class="layui-input-block" id="IsPurchased">
                            <input type="radio" id="state-1" name="state" value="1" {if condition="$info['state'] eq 1"}checked{/if} title="启用">
                            <input type="radio" id="state-0" name="state" value="-1" {if condition="$info['state'] eq -1"}checked{/if} title="禁用">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button type="submit" class="layui-btn" lay-filter="formBasSubmit" lay-submit>&emsp;提交&emsp;</button>
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
        layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate','layedit','upload'], function () {
            var $ = layui.jquery;
            var layer = layui.layer;
            var form = layui.form;
            var table = layui.table;
            var util = layui.util;
            var dropdown = layui.dropdown;
            var laydate = layui.laydate;
            var layedit = layui.layedit;
            var upload = layui.upload;
            layedit.build('ascntext'); 


            /* 渲染laydate */
            laydate.render({
                elem: '#tbAdvSelDate',
                type: 'time',
                format: 'HH:mm',
            });
            laydate.render({
                elem: '#tbAdvSelDate1',
                type: 'time',
                format: 'HH:mm',
            });
            form.on('radio(ascn)', function (data) {        
                xitongcaiset($('#IsPurchased input[name="isonline"]:checked').val());
            });
        });


        function xitongcaiset(type){
            if(type==1){
                $("#payisonline1").show();
                $("#payisonline0").hide();
            }else if(type==-1){
                $("#payisonline0").show();
                $("#payisonline1").hide();
            }
        }
    </script>
    <script type="text/javascript">
		function send(){
			var fd = new FormData(document.getElementById("fileinfo"));
			$.ajax({
				url: "{:U('System/upload')}",
				type: "POST",
				data: fd,
				processData: false,  
				contentType: false,   
				success:function(data){
					layer.msg('上传成功！');
					$('#ewmurl').val(data);
				},
				fail:function(data){
					layer.msg('上传失败！');
				}
			},'json');	
		}
	</script>
</body>
</html>
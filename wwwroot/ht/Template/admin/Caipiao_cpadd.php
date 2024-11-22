<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>彩种管理</title>
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
    </style>
</head>
<body>
    <!-- 正文开始 -->
    <div class="layui-fluid">
        <div class="layui-card">
            <div class="layui-card-body">
                <!-- 表单开始 -->
                <form class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm">
                    {present name="info"}
                    <input name="id" type="hidden" value="{$info[$_pk]}">
                    {/present}
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">彩票分类:</label>
                        <div class="layui-input-block">
                            <select name="typeid" lay-verType="tips" lay-verify="required" required>
                                {foreach name="cpcategory" item="cptype" key="cpk"}
                                <option value="{$cpk}" {if condition="$info[typeid] eq $cpk"}selected{/if}>{$cptype}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">彩种名称:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.title}" placeholder="彩种名称" name="title" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                        </div>
                    </div>
                    {notpresent name="info"}
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">彩种标示(唯一值):</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.name}" placeholder="彩种标示 如cqssc" name="name" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                        </div>
                    </div>
                    {/notpresent}
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">停止投注间隔:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info['ftime']}" placeholder="停止投注间隔" name="ftime" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">期数:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info['qishu']}" placeholder="期数" name="qishu" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">彩种简介:</label>
                        <div class="layui-input-block">
                            <input type="text" value="{$info.ftitle}" placeholder="彩种简介" name="ftitle" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">彩票类型:</label>
                        <div class="layui-input-block" id="IsPurchased">
                            <input type="radio" name="issys"  id="issys-1" value="1" {if condition="$info[issys] eq 1"}checked{/if} title="系统彩票" lay-filter="ascn">
                            <input type="radio" name="issys" id="issys-0" value="0" {if condition="$info[issys] eq 0"}checked{/if} title="第三方平台" lay-filter="ascn">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label layui-form-required">杀大赔小(仅限系统彩):</label>
                        <div class="layui-input-block">
                            <input type="radio" name="issd" id="issd-1" value="1" {if condition="$info[issd] eq 1"}checked{/if} title="开启">
                            <input type="radio" name="issd" id="issd-0" value="0" {if condition="$info[issd] eq 0"}checked{/if} title="关闭">
                        </div>
                    </div>
                    <div id="xitongcaisetbox" style="display:none;">
                    <div class="layui-form-item">
                        <label class="layui-form-label">关盘开始时间:</label>
                        <div class="layui-input-block">
                            <input id="tbAdvSelDate" name="date" placeholder="请选择开始和结束日期" class="layui-input icon-date" autocomplete="off" lay-verType="tips"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关盘结束时间:</label>
                        <div class="layui-input-block">
                            <input id="tbAdvSelDate1" name="date" placeholder="请选择开始和结束日期" class="layui-input icon-date"
                            autocomplete="off" lay-verType="tips"/>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">开奖时间：:</label>
                        <div class="layui-input-block">
                            <select name="expecttime" lay-verType="tips">
                                <option value="0">==选择开奖时间==</option>
                                <option value="1" {if condition="$info['expecttime'] eq '1'"}selected{/if}>1分钟一期</option>
                                <option value="2" {if condition="$info['expecttime'] eq '2'"}selected{/if}>2分钟一期</option>
                                <option value="3" {if condition="$info['expecttime'] eq '3'"}selected{/if}>3分钟一期</option>
                                <option value="5" {if condition="$info['expecttime'] eq '5'"}selected{/if}>5分钟一期</option>
                                <option value="10" {if condition="$info['expecttime'] eq '10'"}selected{/if}>10分钟一期</option>
                            </select>
                        </div>
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
        layui.use(['layer', 'form', 'table', 'util', 'dropdown', 'laydate'], function () {
            var $ = layui.jquery;
            var layer = layui.layer;
            var form = layui.form;
            var table = layui.table;
            var util = layui.util;
            var dropdown = layui.dropdown;
            var laydate = layui.laydate;

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
                xitongcaiset($('#IsPurchased input[name="issys"]:checked').val());
            });
        });
        function xitongcaiset(type){
            if(type==1){
                $("#xitongcaisetbox").show();
            }else{
                $("#xitongcaisetbox").hide();
            }
        }
    </script>
</body>
</html>
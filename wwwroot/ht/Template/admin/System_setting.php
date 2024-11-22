<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>基本设置</title>
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
                <form class="layui-form" id="AjaxPostForm" lay-filter="AjaxPostForm" method="post" action="{:url('System/settingdo')}" confirm="确定吗修改系统配置吗？">
                    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                      <ul class="layui-tab-title">
                        <li class="layui-this">基本设置</li>
                        <li>运维设置</li>
                        <li>后台设置</li>
                        <li>邮件设置</li>
                        <li>其他设置</li>
                        
                    </ul>
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <div class="layui-form-item">
                                <label class="layui-form-label">网站名称：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[webtitle]" placeholder="控制在25个字、50个字节以内" value="{$setlist.webtitle}" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">关键词：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[keywords]" placeholder="5个左右,8汉字以内,用英文,隔开" value="{$setlist.keywords}" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">描述：</label>
                                <div class="layui-input-block">
                                    <textarea name="info[description]"placeholder="空制在80个汉字，160个字符以内" class="layui-textarea" lay-vertype="tips" lay-verify="required" required="" style="margin-top: 0px; margin-bottom: 0px; height: 100px;">{$setlist.description}</textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">推荐码：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[defaulttjcode]" value="{$setlist.defaulttjcode}" style="width:160px;" class="layui-input inline-block"><span> 此功能针对散户，代理链接则不显示。</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">前台登录：</label>
                                <div class="layui-input-block">
                                    <span>密码错误：</span><input type="text" value="{$setlist.loginerrornum_q}" name="info[loginerrornum_q]" style="width:160px;" class="layui-input inline-block"><span> 次后，禁止登陆</span>
                                    <input type="text" value="{$setlist.loginerrorclosetime_q}" name="info[loginerrorclosetime_q]" style="width:160px;" class="layui-input inline-block"><span> 小时。</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">IP黑名单：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[ipblackisopen]" value="1" {if condition="$setlist['ipblackisopen'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[ipblackisopen]" value="0" {if condition="$setlist['ipblackisopen'] eq 0"}checked{/if} title="关闭">
                                    <textarea name="info[ipblacklist]" class="layui-textarea"style="margin-top:10px">{$setlist.ipblacklist}</textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">IP白名单：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[ipwhiteisopen]" value="1" {if condition="$setlist['ipwhiteisopen'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[ipwhiteisopen]" value="0" {if condition="$setlist['ipwhiteisopen'] eq 0"}checked{/if} title="关闭">
                                    <textarea name="info[ipwhitelist]" class="layui-textarea"style="margin-top:10px">{$setlist.ipwhitelist}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label">NG接口：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[switch_ng]" value="1" {if condition="$setlist['switch_ng'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[switch_ng]" value="0" {if condition="$setlist['switch_ng'] eq 0"}checked{/if} title="关闭">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">Api_account：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[api_account]" placeholder="api_account" value="{$setlist.api_account}" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">Sign_key：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[sign_key]" placeholder="sign_key" value="{$setlist.sign_key}" class="layui-input" lay-verType="tips" lay-verify="required" required/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">允许撤单：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[iskillorder]" value="1" {if condition="$setlist['iskillorder'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[iskillorder]" value="0" {if condition="$setlist['iskillorder'] eq 0"}checked{/if} title="关闭">
                                </div>
                            </div>
                            <!--div class="layui-form-item">
                                <label class="layui-form-label">私彩利润：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[xtclirun]"value="{$setlist.xtclirun}"  style="width:160px;" class="layui-input inline-block" lay-verType="tips" lay-verify="required" required><span> 0为随机，设置好后需要重启采集器。</span>
                                </div>
                            </div-->
                            <div class="layui-form-item">
                                <label class="layui-form-label">绑卡数：</label>
                                <div class="layui-input-block">
                                    <span>最大绑定数：</span><input type="text" name="info[sysBankMaxNum]" value="{$setlist.sysBankMaxNum}" style="width:160px;" class="layui-input inline-block" lay-verType="tips" lay-verify="required" required><span> 张</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">提款限制：</label>
                                <div class="layui-input-block">
                                    <span>打码量：</span><input type="text" name="info[damaliang]" value="{$setlist.damaliang}" style="width:160px;" class="layui-input inline-block"><span> %,(打码量 = 充值金额 乘 **%)，</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>排队人数：</span><input type="text" name="info[paiduinum]" value="{$setlist.paiduinum}" style="width:160px;" class="layui-input inline-block"><span> 人,(排队人数=真人人数+后台)，</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>时间段从：</span><input type="text" name="info[tikuanstart]" value="{$setlist.tikuanstart}" style="width:160px;" class="layui-input inline-block">
                                    <span>到：</span><input type="text" name="info[tikuanend]" value="{$setlist.tikuanend}" style="width:160px;" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>超出收取费用：</span><input type="text" name="info[tikuannumoverbilv]" value="{$setlist.tikuannumoverbilv}" style="width:80px;" class="layui-input inline-block"><span> %，</span>
                                    <span>最低：</span><input type="text" name="info[tikuannumovermin]" value="{$setlist.tikuannumovermin}" style="width:80px;" class="layui-input inline-block"><span> 元，</span>
                                    <span>最高：</span><input type="text" name="info[tikuannumovermax]" value="{$setlist.tikuannumovermax}" style="width:80px;" class="layui-input inline-block"><span> 元，</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>最低提款：</span><input type="text" name="info[tikuanMin]" value="{$setlist.tikuanMin}" style="width:160px;" class="layui-input inline-block"><span> 元，</span>
                                    <span>最高提款：</span><input type="text" name="info[tikuanMax]" value="{$setlist.tikuanMax}" style="width:160px;" class="layui-input inline-block"><span> 元。</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>日提款限额：</span><input type="text" name="info[ritikuanxiane]" value="{$setlist.ritikuanxiane}" style="width:160px;" class="layui-input inline-block"><span> 元，</span>
                                    <span>日提款次数：</span><input type="text" name="info[tikuannum]" value="{$setlist.tikuannum}" style="width:160px;" class="layui-input inline-block"><span> 次，</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">返点限制：</label>
                                <div class="layui-input-block">
                                    <span>最大：</span><input type="text" name="info[fanDianMax]" value="{$setlist.fanDianMax}" style="width:160px;" class="layui-input inline-block"><span> %，</span>
                                    <span>最小：</span><input type="text" name="info[fanDianMin]" value="{$setlist.fanDianMin}" style="width:160px;" class="layui-input inline-block"><span> %。</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">积分规则：</label>
                                <div class="layui-input-block">
                                    <span>每充值：</span><input type="text" name="info[pointchongzhi]" value="{$setlist.pointchongzhi}" style="width:160px;" class="layui-input inline-block"><span> 元，</span>
                                    <span>积分增加：</span><input type="text" name="info[pointchongzhiadd]" value="{$setlist.pointchongzhiadd}" style="width:160px;" class="layui-input inline-block"><span> 分。</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">客服QQ：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[kefuqq]" placeholder="客服QQ" value="{$setlist.kefuqq}" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">客服链接：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[kefuthree]" placeholder="客服链接代码" value="{$setlist.kefuthree}" class="layui-input inline-block">
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label">后台登录：</label>
                                <div class="layui-input-block">
                                    <span>密码错误：</span><input type="text" value="{$setlist.loginerrornum}" name="info[loginerrornum]" style="width:160px;" class="layui-input inline-block"><span>次后，禁止登陆</span>
                                    <input type="text" value="{$setlist.loginerrorclosetime}" name="info[loginerrorclosetime]" style="width:160px;" class="layui-input inline-block"><span>小时</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">图像验证：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[islogincode]" value="1" {if condition="$setlist['islogincode'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[islogincode]" value="0" {if condition="$setlist['islogincode'] eq 0"}checked{/if} title="关闭">
                                    <div><span>选择后台登录是否启动验证码登录。</span></div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">邮箱验证：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[isemailcode]" value="1" {if condition="$setlist['isemailcode'] eq 1"}checked{/if} title="开启">
                                    <input type="radio" name="info[isemailcode]" value="0" {if condition="$setlist['isemailcode'] eq 0"}checked{/if} title="关闭">
                                    <div><span>选择后台登录是否启动邮箱验证登录，</span><span>注意：请务必保证邮件服务器能正常通过smtp发送邮件，否则后台无法登陆。</span></div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <span>邮箱验证码过期时间：<input type="text" name="info[adminemailcodetime]" value="{$setlist.adminemailcodetime}" style="width:80px;" placeholder="后台邮件验证码过期时间" class="layui-input inline-block"> 秒，</span>
                                    <span>后台邮件验证码接收邮箱：<input type="text" name="info[getemailcode]" value="{$setlist.getemailcode}" style="width:145px;"placeholder="后台邮件验证码接收邮箱" class="layui-input inline-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 120px;">邮件服务器：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="info[SMTP_HOST]"  value="{$setlist.SMTP_HOST}" placeholder="邮件服务器" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 120px;">安全协议：</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="info[SMTP_SSL]" value="1" {if condition="$setlist['SMTP_SSL'] eq 1"}checked{/if} title="SSL连接">
                                    <input type="radio" name="info[SMTP_SSL]" value="0" {if condition="$setlist['SMTP_SSL'] eq 0"}checked{/if} title="普通连接">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">邮件发送端口：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[SMTP_PORT]" value="{$setlist.SMTP_PORT}" placeholder="邮件发送端口" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">你的邮箱名：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[FROM_EMAIL]" value="{$setlist.FROM_EMAIL}" placeholder="你的邮箱名" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">发件人地址：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[SMTP_USER]" value="{$setlist.SMTP_USER}" placeholder="发件人地址" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">发件人姓名：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[FROM_NAME]" value="{$setlist.FROM_NAME}" placeholder="发件人姓名" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">回复邮件地址：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[REPLY_EMAIL]" value="{$setlist.REPLY_EMAIL}" placeholder="回复邮件地址" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">回复邮件姓名：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[REPLY_NAME]" value="{$setlist.REPLY_NAME}" placeholder="回复邮件姓名" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width: 100px;">邮箱密码：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="password" name="info[SMTP_PASS]" value="{$setlist.SMTP_PASS}" placeholder="邮箱密码" class="layui-input inline-block">
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width:100px;">采集接口设置：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <input type="text" name="info[caijieapiurl]" value="{$setlist.caijieapiurl}" placeholder="采集接口设置" class="layui-input inline-block">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width:100px;">允许前台IP地址：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <textarea name="info[weballowips]" class="layui-textarea">{$setlist.weballowips}</textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width:100px;">后台提示音：</label>
                                <div class="layui-input-block"style="margin-left:130px;">
                                    <span>充值提示音：</span><input type="radio" name="info[czaudioplay]" value="1" {if condition="$setlist['czaudioplay'] eq 1"}checked{/if} title="开启提示">
                                    <input type="radio" name="info[czaudioplay]" value="0" {if condition="$setlist['czaudioplay'] eq 0"}checked{/if} title="关闭提示">
                                    <span>提示：</span><input type="number" name="info[czaudioplaytime]" value="{$setlist.czaudioplaytime}" style="width:160px;" class="layui-input inline-block">
                                    <span>分钟内的，超过：</span><input type="number" name="info[czaudioqxtime]" value="{$setlist.czaudioqxtime}" style="width:160px;" class="layui-input inline-block"><span>分钟自动关闭</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width:100px;">后台提示音：</label>
                                <div class="layui-input-block">
                                    <span>提款提示音：</span><input type="radio" name="info[tkaudioplay]" value="1" {if condition="$setlist['tkaudioplay'] eq 1"}checked{/if} title="开启提示">
                                    <input type="radio" name="info[tkaudioplay]" value="0" {if condition="$setlist['tkaudioplay'] eq 0"}checked{/if} title="关闭提示">
                                    <input type="number" name="info[tkaudioplaytime]" value="{$setlist.tkaudioplaytime}" style="width:160px;" class="layui-input inline-block"><span>分钟内的</span>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label"style="width:100px;">后台提示音：</label>
                                <div class="layui-input-block">
                                    <span>银行绑定提示音：</span><input type="radio" name="info[cardaudioplay]" value="1" {if condition="$setlist['cardaudioplay'] eq 1"}checked{/if} title="开启提示">
                                    <input type="radio" name="info[cardaudioplay]" value="0" {if condition="$setlist['cardaudioplay'] eq 0"}checked{/if} title="关闭提示">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>  
                <div class="layui-form-item">
                    <div class="layui-input-block">
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
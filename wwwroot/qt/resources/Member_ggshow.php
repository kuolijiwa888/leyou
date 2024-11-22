<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>{:GetVar('webtitle')}</title>
    <meta name="keywords" content="关键字">
    <meta name="description" content="网站主要内容">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >

    <link rel="stylesheet" href="__CSS2__/bootstrap.min.css">
    <link rel="stylesheet" href="__CSS2__/reset.css">
    <link rel="stylesheet" href="__CSS2__/icon.css">
    <link rel="stylesheet" href="__CSS2__/header.css">
    <link rel="stylesheet" href="__CSS2__/bankCard.css">
    <link rel="stylesheet" href="__CSS2__/userInfo.css">
    <link rel="stylesheet" href="__CSS2__/footer.css">
    <link rel="stylesheet" href="__JS2__/layer/skin/default/layer.css">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_i3jm0mkwlui8uxr.css">
    
</head>
<body ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">


<div class="vip_info clearfix container">

    <div class="pull-right vip_info_pan">
        <div class="vip_info_title">
            网站公告
        </div>
        <div class="vip_info_content help_right_content ">
            <h4 class="text-center red" id="title">{$ggshow.title}</h4>
            <p class="text-center" id="oddtime">{$ggshow.oddtime|date="Y-m-d",###}</p>
            <div class="bankcard_item_box clearfix"  style="margin:20px 10px;" id="content">
                {$ggshow.content}
            </div>
        </div>
    </div>
</div>

</body>
</html>
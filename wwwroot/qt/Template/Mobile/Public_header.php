<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{:GetVar('webtitle')}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=none">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">

    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="__IMG__/icon.jpg">
    <link rel="apple-touch-startup-image" href="__IMG__/strat.jpg" />

    <link rel="stylesheet" type="text/css" href="__JS__/layer/mobile/need/layer.css">
    <link rel="stylesheet" href="__CSS__/amazeui.min.css">
    <link rel="stylesheet" href="__CSS__/common2.css">
    <link rel="stylesheet" href="__CSS__/index.css">
    <link rel="stylesheet" href="__CSS__/icon.css">
    <link rel="stylesheet" href="/resources/css/artDialog.css">
    <script>
        var Webconfigs = {
            "ROOT" : "__ROOT__"
        }
    </script>
</head>
<script src="__JS__/jquery-3.1.1.min.js"></script> 
<script type="text/javascript" src="/resources/js/artDialog.js"></script>
<script type="text/javascript" src="/resources/js/way.min.js"></script>
<script type="text/javascript" src="/resources/main/common.js"></script>
<script src="__JS__/require.js" data-main="__JS__/main"></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/main.js' charset='utf-8'></script>
<script type='text/javascript' src='__ROOT__/Template/Mobile/js/jquery.zclip.min.js' charset='utf-8'></script>
<script>
    if(('standalone' in window.navigator)&&window.navigator.standalone){  
    var noddy,remotes=false;  
    document.addEventListener('click',function(event){  
            noddy=event.target;  
            while(noddy.nodeName!=='A'&&noddy.nodeName!=='HTML') noddy=noddy.parentNode;  
            if('href' in noddy&&noddy.href.indexOf('http')!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){  
                    event.preventDefault();  
                    document.location.href=noddy.href;  
            }  
    },false);  
}  
</script>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>{:GetVar('webtitle')}</title>
	<meta name="keywords" content="{:GetVar('keywords')}" />
	<meta name="description" content="{:GetVar('description')}" />
  <style type="text/css">
  ::-webkit-scrollbar{
  display:none;
}
  	html, body, img, ul, li
  	*{ margin: 0; padding: 0;}
  	ul{ list-style: none;}
    body{ width: 100%; background-color: #000; background-image: url('/ascn/images/mobile/bodybg.png');  background-size: cover; background-repeat: no-repeat; min-width: 1920px; min-height: 1080px; font-family:"微软雅黑"; overflow-x: hidden; }
    .ovBox{ width: 1021px; height: 1080px; position: absolute; right: 0; bottom: 0; z-index: 9; overflow: hidden; z-index: 8;}
    .phoneBox{ background: url('/ascn/images/mobile/phoneimg.png') no-repeat; width: 1021px; height: 1046px; position: absolute; right: 0; top: 0; z-index: 9; animation: phoneI 1s linear infinite alternate; -webkit-animation: phoneI 1s linear infinite alternate; }
    @Keyframes phoneI{
    	from { top: 34px; }
    	to { top: 60px; }
    }
    @-webkit-Keyframes phoneI{
    	from { top: 34px; }
    	to { top: 60px; }
    }
    .container{ margin: 0 auto; position: relative; z-index: 9; width: 1600px; height: 1080px; overflow: hidden;}
    .container .txtBox{ padding-top: 237px; }
    .container .txtBox .txtImg{ width: 948px; height: 84px; background: url('/ascn/images/mobile/txtimg.png'); background-repeat: no-repeat;}
    .container .txtBox .txtList{ font-size: 49px; font-weight: 400; color: #fff; margin-top: 20px; }
    .container .txtBox .txtList span{ margin: 0; padding: 0;}
    .container .txtBox .dec{ font-size: 24px; color: #9A9BA5; margin-top: 28px; }

    .btnBox{ margin-top: 90px;}
    /*//开始下载按钮*/
    .btnBox .downLoadBtn{ width: 297px; height: 84px; background: #C94B59; line-height: 84px; text-align: center; border-radius: 9px; margin-right: 5px; float: left;}
    .btnBox .downLoadBtn .btnA{ color: #FEFEFE; font-size: 30px; display: flex; justify-content: center; align-items: center;cursor: pointer; }
    .btnBox .downLoadBtn .btnA .icon1{ width: 51px; height: 42px; background: url('/ascn/images/mobile/downloadimg.png'); background-repeat: no-repeat; margin-right: 18px;}
    .btnBox .downLoadBtn .btnA .txt{}
    .btnBox .downLoadBtn .qrCode{ background: #35374E; box-shadow:0px 2px 9px 0px rgba(0, 0, 0, 0.13); border-radius: 12px; width: 301px; height: 275px; opacity: 0; padding: 45px 0 0 0;overflow: hidden;}
    .btnBox .downLoadBtn .qrCode .codeBG{ background: #FFF; width: 226px; height: 220px; margin-left: 28px; padding: 10px;}
    .btnBox .downLoadBtn .qrCode img{ width: 100%; height: 100%;}
    .btnBox .downLoadBtn:hover .qrCode{ animation: QRcode 1s; -webkit-animation: QRcode 1s; animation-fill-mode: forwards; -webkit-animation-fill-mode: forwards;}
    @Keyframes QRcode{
    	from { height: 0; opacity: 0;}
    	to { height: 275px; opacity: 1;}
    }
    @-webkit-Keyframes QRcode{
    	from {height: 0; opacity: 0; }
    	to { height: 275px; opacity: 1;}
    }

   /* //历史版本按钮*/
    .btnBox .historyBtn{ width: 297px; height: 84px; background: #6396CF; line-height: 84px; text-align: center; border-radius: 9px; float: left; margin-right:5px;}
    .btnBox .historyBtn .btnA{ color: #FEFEFE; font-size: 30px; display: flex; justify-content: center; align-items: center;cursor: pointer; height: 84px; }
    .btnBox .historyBtn .btnA .icon1{ width: 43px; height: 43px; background: url('/ascn/images/mobile/hisicon.png'); background-repeat: no-repeat; margin-right: 13px;}
    .btnBox .historyBtn .btnA .txt{ line-height: 27px; display: flex; flex-direction: column; align-items: start; }
    .btnBox .historyBtn .btnA .txt #totalV{ min-width: 40px; display: inline-block; }
    .btnBox .historyBtn .btnA .txt .sp{ font-size: 16px; color: #fff; display: block; }
    .btnBox .historyBtn .switchBox{ background: #35374E; box-shadow:0px 2px 9px 0px rgba(0, 0, 0, 0.13); border-radius: 12px; width: 301px; height: 320px; overflow: hidden; opacity: 0; }
    .btnBox .historyBtn .switchBox .tabA { height: 57px; width: 100px;height: 57px; background: #3D3F5A; line-height: 57px; width: 100%;}

    .btnBox .historyBtn .switchBox .tabA a{ color: #fff;color: #FEFEFE; font-size: 16px; width: 49%; display: inline-block;}
    .btnBox .historyBtn .switchBox .tabA a.active{ background: #C94B59; }
    .btnBox .historyBtn .switchBox .tabContain{ width: 100%; position: relative;height: 100%;}
    .btnBox .historyBtn .switchBox .tabContain .tab1{ position: absolute; font-size: 14px; color: #fff; line-height: 20px; width: 100%; text-align: left; padding: 24px 24px 0 24px;}
    .btnBox .historyBtn .switchBox .tabContain .tab2{ display: none; }
    .btnBox .historyBtn:hover .switchBox{ animation: QRcode 1s; -webkit-animation: QRcode 1s; animation-fill-mode: forwards; -webkit-animation-fill-mode: forwards; }

	@media screen and (max-width: 320px){

	}
  </style>
</head>
<body>
	<div class="container">
		<div class="ovBox">
			<div class="phoneBox"></div>
		 </div>
		<div class="txtBox">
<h1 style="    color: #ff3c53;    margin: 0px;    font-size: 60px;">乐游APP下载-v14.2.4</h1>
			<div class="txtList">
极致流畅 轻松享受
			</div>
			<div class="dec">各类彩票、竞技赛事、真人娱乐、电子游戏、棋牌，
所有娱乐尽在聚星娱乐，给您极致体验。</div>

		</div>
		<!-- 下载按钮 -->
		<div class="btnBox">
            <div class="historyBtn">
				<a class="btnA">
					<div class="icon1"></div>
					<div class="txt">
						<span class="tit">苹果用户下载</span>
						<span class="sp">最新迭代版本：<span id="totalV">14.2.3</span></span>
					</div>
				</a>			
				<div class="switchBox">				
					<div class="qrCode">
					<DIV class="codeBG">
						<img style="width: 87%;"src="static/images/qrcode.png"/>
					</DIV>
				</div>
				</div>
			</div>
			            <div class="historyBtn">
				<a class="btnA">
					<div class="icon1"></div>
					<div class="txt">
						<span class="tit">安卓用户下载</span>
						<span class="sp">最新迭代版本：<span id="totalV">14.2.3</span></span>
					</div>
				</a>			
				<div class="switchBox">				
					<div class="qrCode">
					<DIV class="codeBG">
						<img style="width: 87%;"src="static/images/qrcode.png"/>
					</DIV>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</body>
</html>
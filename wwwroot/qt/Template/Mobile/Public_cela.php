<style>
	.sideMenu{
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.5);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
   }
   .menuMain {
    width: 60%;
    height: 100%;
    background-color: #fff;
    float: right;
    overflow-y: auto;
}
.topInfo {
    background: #dc3b3f;
    background: linear-gradient(bottom,#dc3b3f 2%,#dc3b40 50%,#db3b40 51%,#d7363b);
    background: -webkit-linear-gradient(bottom,#dc3b3f 2%,#dc3b40 50%,#db3b40 51%,#d7363b);
    padding: 1em .25em 1em .5em;
    color: #fff;
}
.myImg {
    width: 3.2em;
    float: left;
    margin-right: .5rem;
}
.myImg img {
    border-radius: .15em;
    height: 3.2em;
    width: 3.2em;
}
img {
    border: 0;
    vertical-align: middle;
}
.myInfo {
    font-size: 1.1em;
    float: left;
}
.myInfo>p {
    line-height: 1.5;
}
.myInfo>p:last-child {
    font-size: .85em;
}
.refresh {
    float: right;
    font-size: .9em;
    height: 2.8em;
    line-height: 2.4em;
    width: 20%;
    text-align: center;
    padding-right: 7%;
}
.navBar {
    background-color: #fff;
    height: calc(100vh - 4.4em);
}
.navBar>a {
    display: block;
    border-bottom: 1px solid #d0d0d0;
    color: #333;
    padding: .5em;
    font-size: .8em;
    min-height: 2.82em;
}
.navBar>a>i {
    margin-right: .2em;
    font-size: 1.5em;
}
.navBar>a> {
    vertical-align: middle;
}
.assistantText {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #d0d0d0;
    color: #333;
    padding: .5em;
    font-size: .8em;
    min-height: 2.82em;
}
.notCTCP {
    height: 45px;
    width: 18px;
    position: absolute;
    right: 0;
    background-color: #164630;
    text-align: right;
    line-height: 59px;
}
.triangle {
    display: inline-block;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 14px 9px 14px 0;
    border-color: transparent #fff transparent transparent;
    margin-right: 2px;
}
.icon-shuaxin {
    font-size: 1.2rem;
    line-height: 2.8rem;
    color: #fff;
    transition: all 0.4s;
   float: right;
}
	</style>

	<div class="cela">
  <div  class="sideMenu" style="display:none">
  <div style="width:40%;height:100%;position: fixed;" id="zhongji"></div>
    <div  class="menuMain">
      <div  class="topInfo fix">
        <div  class="myImg">
          <img  src="__ROOT__{$userinfo['face']}"></div>
        <div  class="myInfo">
          <p >{$userinfo['username']}</p>
          <p >¥<span class="wrapRefreshShow">{$userinfo['balance']}</span></p></div>
        <div  class="refresh my_home_refresh" onclick='sx()'>
        <i  class="iconfont icon-shuaxin"></i></div>
      </div>
      
 <div  class="navBar">
        <a  href="/userCenter/rechargeWay">
          <i  class="iconfont icon-chongzhi" style="color:#ff2323;"></i>
          <span >我要充值</span></a>
     
		<a href="/userCenter/withdrawals">
          <i  class="iconfont icon-tixian" style="color:#ee983d;"></i>
          <span >我要提现</span></a>
        <a  href="/userCenter/billRecord" class="active">
          <i  class="iconfont  icon-jiaoyijilu" style="color:#4ad2c8;"></i>
          <span >交易记录</span></a>
        <a  href="/userCenter/betRecord" class="active">
          <i  class="iconfont icon-touzhujilu" style="color:#62a5f6;"></i>
          <span >投注记录</span></a>
        <a  href="/userCenter/PLstatement" class="active">
          <i  class="iconfont icon-shuju" style="color:#ffb74d;"></i>
          <span >今日盈亏</span></a>
        <a  href="{:GetVar('kefuthree')}" class="active">
          <i  class="iconfont icon-kefu" style="color:#63b4f6;"></i>
          <span >在线客服</span></a>
        <a  href="javascript:if(confirm('是否退出？'))location='{:U

('Public/LoginOut')}'" class="active">
          <i  class="iconfont icon-arrowright"></i>
          <span >退出登录</span></a>
      </div>
    </div>
  </div>
</div>
<script>
		$('.notCTCP').click(function(){

	$('.sideMenu').show();
	
	});
    $('#zhongji').click(function(){
    // $('.sideMenu').animate({right:"-200px"},1000,function(){
    
     $('.sideMenu').hide();
    // });
    });
    var refresh_index = 0;
        $('.my_home_refresh').click(function (){

            refresh_index++;
            var sum = refresh_index * 360 ;
            $('.icon-shuaxin').css('transform','rotate('+sum+'deg)');
        });

            function sx() {
          
            $.ajax({
                url:"{:U('Account/refreshmoney')}",
                type:'POST',
                success :function (data) {
                 
                    $('.wrapRefreshShow').html(data);
                }
            })
        }
	
	
</script>
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
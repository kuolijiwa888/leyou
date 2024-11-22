<style>
    .theme-red .icon-sanjiaoxing{
        display: inline-block;
        transform: rotate(180deg);
        transition: .6s;
        font-size: 22px;
    }
</style>
<script>
    $(function () {
        $('.refresh_money').click(function () {
            $.ajax({
                url:"{:U('Account/refreshmoney')}",
                type:'POST',
                success :function (data) {
                    $('.wrapRefreshShow').html(data);
                }
            })
        })

    })
</script>
<header class="bar bar-nav theme-red" style="background:#000;text-align:center;">
    <if condition="$userinfo and ($userinfo['islogin'] eq 1)">
    <if condition="(strtolower(CONTROLLER_NAME) eq 'index') and (strtolower(ACTION_NAME) eq 'index')">
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="icon icon-home"></span>
    </a>
    <else />
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="iconfont icon-shouyeshouye1"></span>
    </a>
    </if>
    <if condition="(strtolower(CONTROLLER_NAME) eq 'game') and (strtolower(ACTION_NAME) eq 'k3') and is_array($nowcpinfo)">
    <h1 class="title" onclick="GamePageSwitchToggle();">{$nowcpinfo.title}<i class="iconfont icon-sanjiaoxing"></i></h1>
    
    <else />
    <h1 class="title">{$webheadertitle}</h1>
    </if>

    <else />
    <if condition="(strtolower(CONTROLLER_NAME) eq 'index') and (strtolower(ACTION_NAME) eq 'index')">
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="iconfont icon-shouyeshouye1"></span>
    </a>
    <else />
    <a class="button button-link button-nav pull-left bar-nav-top-left" href="/">
        <span class="icon icon-left"></span>
    </a>
    </if>

    <a class="button button-link button-nav pull-right" onclick="lianxikefu('{$WebConfigs.kefuthree}')">
        <span class="icon icon-message"></span>
        联系客服
    </a>
    <if condition="(strtolower(CONTROLLER_NAME) eq 'game') and (strtolower(ACTION_NAME) eq 'k3') and is_array($nowcpinfo)">
    <h1 class="title" onclick="GamePageSwitchToggle();">{$nowcpinfo.title} <span class="icon icon-down" style="font-size:0.8rem;"></span></h1>
    <!-- <div class="pa yyplay_select_container" id="PageSwitch">
        <volist name="k3list" id="k3vo">
        <a href="{:U('Game/k3',['code'=>$k3vo['name']])}">{$k3vo.title}</a>
        </volist>
    </div> -->
    <else />
    <h1 class="title">{$webheadertitle}</h1>
    </if>
    </if>
    <!-- 选择与切换玩法 -->
        <em class="gameInfo" style="font-size: 12px;display: inline-block;line-height: 13px;text-align: left;margin-top: 13px;">玩<br>法</em>
        <div class="choice_lottery_playdetail_left">
            <a class="choice_playName" href="#">和值</a>
            <i class="iconfont icon-sanjiaoxing" style="color: #f0c930;transform: rotate(180deg);transition: .6s;"></i>
        </div>  
        <div data-v-048b2a82="" id="choseTab" class="choseTab forCtcpRecord" style="line-height: 2.45em;height: 2.45em;box-sizing: border-box;z-index:5;">
          <div data-v-048b2a82="" class="tabInner tabActive"><em data-v-048b2a82="">我要投注</em></div>
          <a href="/userCenter/betRecord" data-v-048b2a82="" class="tabInner"><em data-v-048b2a82="">投注记录</em></a> 
          <span data-v-048b2a82="" class="wrapRefreshEye" style="color: #fff;">￥<font class="wrapRefreshShow">0</font><i style="padding-left: 5%;" class="iconfont refresh_money">&#xe602;</i></span>
        </div>
        <style> 
            .g_Time_Section{
                margin-top: 21px;
            }
            .choseTab .wrapRefreshEye[data-v-048b2a82] {
                position: absolute;
                right: 14px;
                font-size: 14.5px
            }
            .choseTab[data-v-048b2a82] {
                background: #000;
                font-size: .7em;
                text-align: left;
                position: relative;
                height: 1.65em;
                overflow: hidden
            }

            .choseTab .tabInner[data-v-048b2a82] {
                display: inline-block;
                margin-left: 20px;
                position: relative;
                color: hsla(0,0%,100%,.6);
                border-bottom: 4px solid #000
            }

            .choseTab .tabInner.tabActive[data-v-048b2a82] {
                border-color: #fff
            }

            .choseTab .tabInner.tabActive em[data-v-048b2a82] {
                color: #fff
            }
            .yGame_list{
                width: 96px;
                background: #fff;
                position: absolute;
                right: 0;
                top: 50px;
                box-shadow: 0 2px 10px rgba(41,41,41,.08);
                display: none;
                z-index: 5;
            }
            .yGame_list li{
                text-align: center;
                height: 45px;
                line-height: 45px;
                padding: 0;
            }
            .yGame_list li:first-child:before{
                position: absolute;
                content: "";
                display: block;
                width: 0;
                height: 0;
                border-bottom: 1em solid hsla(0,0%,100%,.96);
                border-left: 1em solid transparent;
                right: 0;
                top: -.96em;
            }
            .choseTab[data-v-048b2a82] {
                background: #000;
                font-size: .7em;
                text-align: left;
                position: absolute;
                height: 1.65em;
                overflow: hidden;
                line-height: 1.45em;
                box-sizing: border-box;
                margin: 0;
                left: 0;
                top: 50px;
                width: 100%;
            }
        </style>
  
</header>


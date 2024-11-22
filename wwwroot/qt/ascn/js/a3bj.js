function setCookie(name,value,expire,path) {
	var curdate=new Date();
	var cookie=name+"="+encodeURIComponent(value)+"; ";
	if(expire!=undefined||expire==0){
		if(expire==-1){
			expire=366*86400*1000;//保存一年
		}else{
			expire=parseInt(expire);
		}
		curdate.setTime(curdate.getTime()+expire);
		cookie+="expires="+curdate.toUTCString()+"; ";
	}
	path = path || "/";
	cookie += "path=" + path;
	document.cookie=cookie;
}

function getCookie(name) {
    var re = "(?:; )?" + encodeURIComponent(name) + "=([^;]*);?";
    re = new RegExp(re);
    if (re.test(document.cookie)) {
        return decodeURIComponent(RegExp.$1);
    }
    return '';
}
$(document).ready(function(){
    var bgCssConfig = {"cssName" : "" , "cssNameTemp" : ""};
    var clientObj = {
    	"isclient" : null,
    	
    	setItem : function(name,value){
    		if(this.isclient == 1){
    			setCookie(name,value);
    		}else{
    			localStorage.setItem(name,value);
    		}
    	},
    	getItem : function(name){
    		if(this.isclient == 1){
    			return getCookie(name);
    		}else{
    			return localStorage.getItem(name);
    		}
    	}
    };
    
    //-----end导航弹窗提示
    function initBgCss(){//初始化背景cookie
    	var _localdata;

    	_localdata = clientObj.getItem("bgCss");
        if(_localdata === "" || _localdata === null){
            clientObj.setItem("bgCss","nsc_background01");
            bgCssConfig["cssName"] = "nsc_background01";
            $("body").removeClass().addClass("nsc_background01");
        }else{
            bgCssConfig["cssName"] = _localdata;
            $("body").removeClass().addClass(bgCssConfig["cssName"]);
        }
        $(".beijin li[data='" + bgCssConfig["cssName"] + "']").find("a").addClass("active");
    }
    initBgCss();
    //选择皮肤
    $(".beijin li a").click(function(){
        var inx=$(this).parent("li").index();
        var bg_css = $(this).parent("li").attr("data");
        bgCssConfig["cssNameTemp"] = bg_css;
        /*修改点击区域背景*/
        $(".beijin li").find("a").removeClass("active");
        $(".beijin li").eq(inx).find("a").addClass("active");
        /*修改body背景*/
        $("body").removeClass().addClass(bg_css);
        $(".btn_save").animate({bottom:'5px'});
        return false;
    });

    //恢复默认值
    $(".btn_default").click(function(){
        clientObj.setItem("bgCss","nsc_background01");
        bgCssConfig["cssName"] = "nsc_background01";
        bgCssConfig["cssNameTemp"] = "nsc_background01";

        $(".beijin li a").removeClass();
        $(".beijin li[data='" + bgCssConfig["cssName"] + "']").find("a").addClass("active");
        $("body").removeClass().addClass("nsc_background01");
        $(".md-close").trigger("click");
        return false;
    });

    //保存设置
    $(".btn_set").click(function(){
        if(bgCssConfig["cssNameTemp"] == ""){
           bgCssConfig["cssNameTemp"] = bgCssConfig["cssName"];
        }
        clientObj.setItem("bgCss",bgCssConfig["cssNameTemp"]);
        bgCssConfig["cssName"] = bgCssConfig["cssNameTemp"];
        $(".md-close").trigger("click");
        return false;
    });

    //取消
    $(".btn_cancel").click(function(){
    	clientObj.setItem("bgCss",bgCssConfig["cssName"]);
        $(".md-close").trigger("click");
        return false;
    });
});
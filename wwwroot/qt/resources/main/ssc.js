var lotteryname = null;
var lottery;
var openLotteryList = 0;
var openCodeTimeOut = null;
var ckTimer;
var ClockEnv = {
	num:5,
	numRange:'0-9'
};
var openexpect = 0;

$(function () {
  	lotteryname = null;
var lotteryurl = window.location.href;
	
	if(lotteryurl.substr(lotteryurl.length-1,1)!=1){
		lotteryname = lotteryurl.substring(lotteryurl.lastIndexOf("\/")+1, lotteryurl.length);
	}else{
		var lotteryurl = lotteryurl.substr(lotteryurl.lastIndexOf("\/", lotteryurl.lastIndexOf("\/") - 1) + 1);
		lotteryurl.replace("/1","")
		lotteryname =  lotteryurl.replace("/1","");
		}
		
		
	var url = location.search; //获取url中"?"符后的字串
	var theRequest = new Object();  
	if (url.indexOf("?") != -1) {  
	  var str = url.substr(1);  
	  strs = str.split("&");  
	  for(var i = 0; i < strs.length; i ++) {  
	     theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);  
	  }  
	} 
	
		console.log(lotteryname);
	
	// lotteryname = lotteryurl.substring(lotteryurl.lastIndexOf('=')+1, lotteryurl.length);
	//lotteryname = theRequest.code;
	
		
	if(lotteryname!='undefined'){ 
		Gameinit(lotteryname);
	}else{
		lotteryname = 'cqssc';
		Gameinit(lotteryname);
	};

})

var Gameinit = function (_lotteryname){
  lotteryopencodes(_lotteryname);
  lotterytimes(_lotteryname);
}

//ct 传统玩法下注
function ctSubmit(){
	orderList = [];
	$(".bet-input").each(function(){
		var val  = Number($(this).val());
		if(val > 0){
			var playid = $(this).attr('playid');
			var dataval = $(this).attr('data-val');
			addtotouzhu(playid,dataval,1,1,val);
		}
	});
	
	
	if(orderList.length<1){
      Dialog.error('温馨提示','请选择投注号码');
      return false;
    }
    $('.el-dialog__wrapper').show();

    
    var touzhu = '<div class="dialog-footer">'+
    '<button type="button" class="el-button el-button--default"><span>取 消</span></button>'+
    '<button type="button" class="el-button el-button--primary"><span>立即投注</span></button>'+
    '</div>';

    $('.el-dialog__footer').append(touzhu);
    
    var Orderdetaillist = '';
    var Orderdetailtotalprice    = 0;
    var ratess = k3lotteryrates.rates;
    for (var i = 0; i < orderList.length; i++) {
        var cur_order = orderList[i];
        var rate = ratess[cur_order.playid];
        var oprice = Number(cur_order.price);
        var cur_number = cur_order.number;
        var cur_numbers = cur_number.replace(/\|/g,',');
        Orderdetailtotalprice += oprice;
        Orderdetaillist +="<tr class='el-table__row'><td rowspan='1' colspan='1' class='el-table_3_column_21'><div class='cell'><span>"+cur_number+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_22'><div class='cell'><span>"+cur_numbers+"</span></div></td><td rowspan='1' colspan='1' class='el-table_3_column_23'><div class='cell'>"+cur_order.zhushu+"注</div></td><td rowspan='1' colspan='1' class='el-table_3_column_24'><div class='cell'><span style='font-weight: bold; color: rgb(166, 143, 76);'>"+oprice.toFixed(3)+"</span></div></td></tr>";
    }

    $("#Orderdetaillist").html(Orderdetaillist);
    $("#Orderdetailtotalprice").text(Orderdetailtotalprice.toFixed(3));
    $('.dialog-footer .el-button--default').click(function () {
        $('.el-dialog').removeClass("ascnshow");
        $('.el-dialog').addClass("ascnhide");
        window.setTimeout(function () {
            $('.el-dialog__wrapper').hide();
            $('.el-dialog').removeClass("ascnhide");
            $('.el-dialog').addClass("ascnshow");
            $('.dialog-footer').remove();
        }, 300)
    })
    $('.dialog-footer .el-button--primary').click(function () {
        $('.el-dialog').removeClass("ascnshow");
        $('.el-dialog').addClass("ascnhide");
        window.setTimeout(function () {
            $('.el-dialog__wrapper').hide();
            $('.el-dialog').removeClass("ascnhide");
            $('.el-dialog').addClass("ascnshow");
            $('.dialog-footer').remove();
        }, 300)
      if(!user || user.islogin!=1){
        Dialog.error('温馨提示','请先登陆');
      }

      $.ajax({
        type : "POST",
        url  : apirooturl + 'cpbuy',
        data : {
          "orderList":orderList,
          'expect':lottery.currFullExpect,
          'lotteryname':lotteryname
        },
        success : function (json) {
          if(json.sign){
            $("#orderlist_clear").click();
            getUserBetsListToday(lotteryname);
            Dialog.success('温馨提示','投注成功');
            $(".reset").click();
          }else{
            Dialog.error('温馨提示',json.message);
            $(".reset").click();
          }
        }
      })
    })
}
var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
function generateMixed(n) {
     var res = "";
     for(var i = 0; i < n ; i ++) {
         var id = Math.ceil(Math.random()*35);
         res += chars[id];
     }
     return res;
}
function accMul(arg1,arg2)
{
	var m=0,s1=arg1.toString(),s2=arg2.toString();
	try{m+=s1.split(".")[1].length}catch(e){}
	try{m+=s2.split(".")[1].length}catch(e){}
	return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
}
var addtotouzhu = function(_playid,number,zhushu,isshow,minxf){//addtotouzhu(playid,dataval,1,1,val);
	ratess = k3lotteryrates.rates;
	if(ratess==null){
		return false;
	}
	var rate = ratess[_playid];
	if(parseInt(rate.minjj)<1)rate.minjj = 1;
	if(parseInt(rate.maxprize)<1)rate.maxprize = 30000;
	var trano= generateMixed(20);
	var tab  = $('.xiad-left dl');
	var orderDetail = rate.playid +'###'+ number;
	var $Detailnode = $(".xiad-left dl dd[orderDetail='"+orderDetail+"']");
	var numberremark='';
	
	
	/*if(number.indexOf('#') > 0){
		numberremark = '['+number+']';
	}*/
	if(isshow==1 || isshow==true){
		numberremark = '['+number+']';
	}
	if($Detailnode.length>0){
		var price = parseInt($Detailnode.find('input.orderprice').val())+1;
		var okmoney = accMul(price,rate.maxjj);
		$Detailnode.find('input.orderprice').val(price).focus();
		$Detailnode.find('.order_money').text(okmoney.toFixed(3));

		//alt('存在相同投注号码，已经为您翻倍',1);
		trano= $Detailnode.attr('id');
		if(orderList.length>=1)for(var o in orderList) {
			if(orderList[o]['trano']==trano){
				orderList[o]['price'] = price;
			}
		}

		return false;
	}else{
		var array = { 
			'trano':trano,
			'playtitle':rate.title,
			'playid':rate.playid,
			'number':number,
			'zhushu':zhushu?parseInt(zhushu):1,
			'price':minxf,
			'minxf':rate.minxf,
			'totalzs':rate.totalzs,
			'maxjj':rate.maxjj,
			'minjj':rate.minjj,
			'maxzs':rate.maxzs,
			'rate':rate.maxjj,
			'beishu':minxf

		}; 
		orderList.unshift(array);//push (unshift)ie兼容待测试
		console.log(orderList);

	}
	//console.log(orderList);
	/*var $okamount = accMul(rate.minxf,rate.maxjj);
	var y_zhushus = zhushu?parseInt(zhushu):1;
	if(minxf) rate.minxf =  minxf;
	//console.log($okamount);
	var html = '';
	html += '<dd id="'+trano+'" playid="'+rate.playid+'" orderDetail="' + rate.playid +'###'+ number + '">';
	html += '<span class="xq" title="投注号码:'+number+'">'+rate.title+numberremark+'</span><span>总共<em  class="c_red ys_zhushu">'+y_zhushus+'</em>注</span>';
	html += '<ul>';
		html += '<li>每注<input class="orderprice" value="'+parseInt(rate.minxf)+'" size="5" style="color:black;" onblur="changeorderprice(this.value,\''+trano+'\');" onafterpaste="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" onkeyup="formatIntVal(this);changebetokmoney(this.value,\''+rate.rate+'\',\''+trano+'\');" maxlength="6">元</li>';
		html += '<li style="margin-left:20px;"> 每注可赢金额：<t class="order_money mark">'+$okamount.toFixed(3)+'</t>元</li>';
		html += '<li class="sc"><a href="javascript:delOrder(\''+trano+'\')"><i class="fa fa-times"></i></a></li>';
	html += '</ul>';
	html += '<input class="min-xf" value="'+rate.minjj+'" type="hidden">';
	html += '<input class="max-maxprize" value="'+rate.maxprize+'" type="hidden">';
	html += '</dd>';
	tab.prepend(html);*/
}

//获取开奖时间
var yIndex = 1;
var lotterytimesId;
var lotterytimes = function(lotteryname){
	clearTimeout(lotterytimesId);
	var ret = null;var retopen = null;
	var url = apirooturl + 'lotterytimes';
	$.post(url, {'lotteryname':lotteryname,'cptype':'ssc'}, function(data) {
		if(data.sign==true){
			lottery = data.data;
			way.set("showLotteryTitle.name", lottery.shortname);
			way.set("showExpect", lottery);
			openLotteryList = $('#ssc_winning_sum').find('li');
			openLotteryList.each(function (i) {
				setLotterNumber(i,'gif')
			})
			if(yIndex > 1){
				var html =  '<div class="naranja-notification naranja-log">'+
				'<div class="naranja-body-notification narj-log">'+
				'<div class="naranja-icon narj-icon-log">'+
				'<svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">'+
				'<circle cx="24" cy="24" r="24" fill="#EEEEEE"></circle>'+
				'<path d="M26.595 37.5C26.3313 37.9546 25.9528 38.332 25.4973 38.5943C25.0419 38.8566 24.5256 38.9947 24 38.9947C23.4744 38.9947 22.9581 38.8566 22.5027 38.5943C22.0472 38.332 21.6687 37.9546 21.405 37.5M39 31.5H9C10.1935 31.5 11.3381 31.0259 12.182 30.182C13.0259 29.3381 13.5 28.1935 13.5 27V19.5C13.5 16.7152 14.6062 14.0445 16.5754 12.0754C18.5445 10.1062 21.2152 9 24 9C26.7848 9 29.4555 10.1062 31.4246 12.0754C33.3938 14.0445 34.5 16.7152 34.5 19.5V27C34.5 28.1935 34.9741 29.3381 35.818 30.182C36.6619 31.0259 37.8065 31.5 39 31.5V31.5Z" stroke="black" stroke-opacity="0.73" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>'+
				'</svg>'+
				'</div>'+
				'<div class="naranja-text-and-title">'+
				'<p class="naranja-title">温馨提示</p>'+
				'<p class="naranja-parragraph narj-title"><span style="color:red;">'+lottery.lastFullExpect+'</span>期已截止<br />当前期号<span style="color:red;">'+lottery.currFullExpect+'</span><br />投注时请注意期号</p>'+
				'<div class="naranja-buttons-container" style="margin-left: 30px;">'+
				'<button>确定</button>'+
				'</div>'+
				'</div>'+
				'<div class="naranja-close-icon">'+
				'<svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">'+
				'<path d="M9.70711 1.7071C10.0976 1.31659 10.0976 0.683407 9.70711 0.292889C9.31659 -0.0976295 8.68341 -0.0976295 8.29289 0.292889L5 3.58578L1.70711 0.292889C1.31659 -0.0976295 0.68342 -0.0976295 0.292894 0.292889C-0.0976315 0.683407 -0.0976315 1.31659 0.292894 1.7071L3.58579 5L0.292894 8.29289C-0.0976315 8.68341 -0.0976315 9.31659 0.292894 9.7071C0.68342 10.0976 1.31659 10.0976 1.70711 9.7071L5 6.41421L8.29289 9.7071C8.68341 10.0976 9.31659 10.0976 9.70711 9.7071C10.0976 9.31659 10.0976 8.68341 9.70711 8.29289L6.41422 5L9.70711 1.7071Z" fill="black" fill-opacity="0.37"></path>'+
				'</svg>'+
				'</div>'+
				'</div>'+
				'</div>';
				$('.naranja-notification-box').append(html);
				setTimeout(function(){
						$('.naranja-log').css({"height":"145px"});
				},100);
				var htmls =  '<div class="naranja-notification naranja-success">'+
				'<div class="naranja-body-notification narj-success">'+
				'<div class="naranja-icon narj-icon-success">'+
				'<svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="24" cy="24" r="24" fill="#6ED69A" fill-opacity="0.62"></circle><path d="M36 16.5L19.5 33L12 25.5" stroke="#11B674" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>'+
				'</div>'+
				'<div class="naranja-text-and-title">'+
				'<p class="naranja-title">温馨提示</p>'+
				'<p class="naranja-parragraph"><span style="color:red;">'+lottery.lastFullExpect+'</span>期通知已确认</p>'+
				'</div>'+
				'</div>'+
				'</div>';
				
				$('#content .naranja-buttons-container button').click(function(){
				    $(this).closest('.naranja-log').css({"height":"0px"});
				    $(this).closest('.naranja-notification-box').append(htmls);
				    $(this).closest('.naranja-log').remove();
				    //$('.naranja-success').show();
				    setTimeout(function(){
				        $('.naranja-success').css({"height":"85px"});
				    },100);
				    setTimeout(function(){
						$('#content .naranja-success:last').remove();
				    },3000);
				})

				$('#content .naranja-log .naranja-close-icon').click(function(){
				    $(this).closest('.naranja-log').css({"height":"0px"});
				    $(this).closest('.naranja-notification-box').append(htmls);
				    $(this).closest('.naranja-log').remove();
				    //$('.naranja-success').show();
				    setTimeout(function(){
				        $('.naranja-success').css({"height":"85px"});
				    },100);
				    setTimeout(function(){
						$('#content .naranja-success:last').remove();
				    },3000);
				})

			}
			yIndex++;
			if (lottery.remainTime && eval(lottery.remainTime) > 1) {
				//alert(111);
				countdownTime(lottery.remainTime, lotterytimes, lotteryname);
				ret = lottery.lastFullExpect;
				retopen = lottery.openRemainTime;
				if (ret) {
					clearTimeout(openCodeTimeOut);
					openexpect = lottery.lastFullExpect;
						ckTimer = true;
						start();
						openCodeTimeOut = setTimeout(function () {
							loadopencode(lotteryname);
						},5000);
				}
			} else {
				if (lottery.currFullExpect == "000000") {
					ret = lottery.lastFullExpect;
				} else {
					lotterytimesId = setTimeout(function () {
						lotterytimes(lotteryname);
					}, 5000);
				}
			}
		}else if(data.sign==false){
			//alt(data.message,-1);
			lotterytimesId = setTimeout(function () {
				lotterytimes(lotteryname);
			}, 5000);
		}
	},'json');
}


//开奖公告
var lotteryopencodesid;
var lotteryopencodes = function(lotteryname){
	clearTimeout(lotteryopencodesid);
	var url = apirooturl + 'lotteryopencodes';
	var html='',$node = $(".lishi").find('table').find('tbody');
	$node.html('');
		
	$.post(url, {'lotteryname':lotteryname,'num':30}, function(data) {
		if(data.sign==true){
			var lotlist = data.data;

			for(var o in lotlist){
				var openinfo = lotlist[o];
				if(!openinfo.opencode)openinfo.opencode='0,0,0';
				var array = (openinfo.opencode).split(",");
				var sum = parseInt(array[0])+parseInt(array[1])+parseInt(array[2]);
        var yopentimes = format(openinfo.opentime * 1000);
        var yopentimes_arr = yopentimes.split(' ');
        var yopentime = yopentimes_arr[1];
				html += '<div class="lotterys"><div class="rq">'+openinfo.expect+'</div><div class="hm"><span class="qiu">'+parseInt(array[0])+'</span><span class="qiu">'+parseInt(array[1])+'</span><span class="qiu">'+parseInt(array[2])+'</span><span class="qiu">'+parseInt(array[3])+'</span><span class="qiu">'+parseInt(array[4])+'</span></div><!--div class="kjtime"><span class="kjtimes">'+yopentime+'</span></div--></div>';
				
			}
			$node.html(html);
		}else if(data.sign==false){
			lotteryopencodesid = setTimeout(function () {
				lotteryopencodes();
			}, 5000);
		}
	},'json');
}

//获取最后开奖期号
var loadopencodecount = 0;//防止无限循环导致卡死
var loadopencode = function(lotteryname){
	
	var url = apirooturl + 'loadopencode';
    var ret = false;
	clearTimeout(openCodeTimeOut);
	 $.ajax({  
         type:'post',      
         url:url,  
         data:{'lotteryname':lotteryname,'expect':openexpect},  
         cache:false,  
         dataType:'json',  
         success:function(msg){ 
            if (msg.sign == true) {
                if (msg.data.opencode.length > 0) {
					          loadopencodecount = 0;
                    if (openCodeTimeOut) {
                        clearTimeout(openCodeTimeOut);
                    }
                    var lastExpect = way.get("showExpect.lastFullExpect");

                    if (lastExpect == openexpect) {
                        // 页面开奖号列表赋值
                        var openCodeListVal = $(".lishi").find('table').find('tbody').html();
                        if (lotteryname == "azjn") {
                            openexpect = openexpect.substr(12, openexpect.length);
                        }

                        ckTimer = true;
                        var openCode = msg.data.opencode;
						
                        var openCodes = openCode.split(',');
                        var sum = parseInt(openCodes[0])+parseInt(openCodes[1])+parseInt(openCodes[2]);
                        var yopentimes = format(msg.data.opentime * 1000);
                        var yopentimes_arr = yopentimes.split(' ');
                        var yopentime = yopentimes_arr[1];
                        var html = '<div class="lotterys"><div class="rq">' + openexpect + '</div><div class="hm';
                        html += '">';
                        for (var j = 0; j < openCodes.length; j++) {
                          if(j == openCodes.length - 1){
                            html += '<span class="qiu">' + openCodes[j] + '</span>';
                          } else {
                            html += '<span class="qiu">' + openCodes[j] + '</span>';
                          }
                        }
                        html += '</div><!--div class="kjtime"><span class="kjtimes">'+yopentime+'</span></div--></div>';
                        if (openCodeListVal.indexOf(openexpect) < 0) {
														$(".lishi").find('table').find('tbody').find('tr:last').remove();
                            $(".lishi").find('table').find('tbody').prepend(html);          
                        }
                        stopLottery(openCode);
                        getUserBetsListToday();
                    }
                } else {
                    ret = true;
                }
				var lastExpect = way.get("showExpect.expect");
				if (lastExpect == openexpect && msg.data.opencode.length<=0) {
					if (openCodeTimeOut) {
						clearTimeout(openCodeTimeOut);
					}
					openCodeTimeOut = setInterval(function () {
						loadopencode(lotteryname, openexpect);
					}, 5 * 1000);
				}
            }else{
				loadopencodecount++;
				if(loadopencodecount<=80){
						openCodeTimeOut = setInterval(function () {
							loadopencode(lotteryname, openexpect);
						}, 5 * 1000);
				}else{
					window.location.reload();
				}

			}
        },
        error: function() {
            // 请求出错后5秒钟请求一次直到请求成功
            openCodeTimeOut = setTimeout(function() {
                loadopencode(lotteryname, openexpect);
            }, 1000 * 5);
        }
    });
}


function add0(m){return m<10?'0'+m:m }

/**
 * 
 * 
 * @param {shijianchuo} 是整数，否则要parseInt转换
 * @returns 时间格式
 */
function format(shijianchuo){
  var time = new Date(shijianchuo);
  var y = time.getFullYear();
  var m = time.getMonth()+1;
  var d = time.getDate();
  var h = time.getHours();
  var mm = time.getMinutes();
  var s = time.getSeconds();
  return y+'-'+add0(m)+'-'+add0(d)+' '+add0(h)+':'+add0(mm)+':'+add0(s);
}


// 倒计时定时器
var CDTime = null;
function countdownTime(leftSec, callback, shortName) {
    var h, m, s, t;
    var h1, m1, s1;
    var h2, m2, s2;
    if (CDTime) {
        clearInterval(CDTime);
    }
    var localCurrentTime = new Date();
    t = leftSec * 1000;
    var endTime = localCurrentTime.getTime() + t;

    if (t > 0) {
        h = Math.floor(t / 1000 / 60 / 60 % 24);
        if (h < 10) {
            h1 = "0";
            h2 = ""+ h;
        } else {
            h1 =  ""+ Math.floor(h/10);
            h2 =  ""+ h%10;
        }
        m = Math.floor(t / 1000 / 60 % 60);
        if (m < 10) {
            m1 = "0";
            m2 = ""+ m;
        } else {
            m1 =  ""+ Math.floor(m/10);
            m2 =  ""+ m%10;
        }
        s = Math.floor(t / 1000 % 60);
        if (s < 10) {
            s1 = "0";
            s2 = ""+ s;
        } else {
            s1 =  ""+ Math.floor(s/10);
            s2 =  ""+ s%10;
        }
        way.set("gametimes", h1+h2 + ':' + m1+m2 + ':' + s1+s2);
		$(".gametimes").text(h1+h2 + ':' + m1+m2 + ':' + s1+s2);
        // way.set("gametimes.h1", h1);
        // way.set("gametimes.h2", h2);
        // way.set("gametimes.m1", m1);
        // way.set("gametimes.m2", m2);
        // way.set("gametimes.s1", s1);
        // way.set("gametimes.s2", s2);
        way.set("gametimes.h", h1+h2);
        way.set("gametimes.m", m1+m2);
        way.set("gametimes.s", s1+s2);
        CDTime = setInterval(function() {
            t = endTime - (new Date()).getTime();
            if (t >= 0) {
                h = Math.floor(t / 1000 / 60 / 60 % 24);
                if (h < 10) {
                    h1 = "0";
                    h2 = "" + h;
                } else {
                    h1 = "" + Math.floor(h/10);
                    h2 = "" + h%10;
                }
                m = Math.floor(t / 1000 / 60 % 60);
                if (m < 10) {
                    m1 = "0";
                    m2 = "" + m;
                } else {
                    m1 = "" + Math.floor(m/10);
                    m2 = "" + m%10;
                }
                s = Math.floor(t / 1000 % 60);
                if (s < 10) {
                    s1 = "0";
                    s2 = "" + s;
                } else {
                    s1 = "" + Math.floor(s/10);
                    s2 = "" + s%10;
                }
                way.set("gametimes", h1+h2 + ':' + m1+m2 + ':' + s1+s2);
				$(".gametimes").text(h1+h2 + ':' + m1+m2 + ':' + s1+s2);
                // way.set("gametimes.h1", h1);
                // way.set("gametimes.h2", h2);
                // way.set("gametimes.m1", m1);
                // way.set("gametimes.m2", m2);
                // way.set("gametimes.s1", s1);
                // way.set("gametimes.s2", s2);
                way.set("gametimes.h", h1+h2);
                way.set("gametimes.m", m1+m2);
                way.set("gametimes.s", s1+s2);
            } else {
                //audioPlay(2);
                clearInterval(CDTime);
                (eval(callback))(shortName);

            }
        }, 500);

    } else {
        (eval(callback))(shortName);
    }
}

function start() {

    var n_numRangeArray = ClockEnv.numRange.split("-");
    if (ckTimer) {
        openLottery(ClockEnv.num, n_numRangeArray[1]);
    }
}
// 开奖过程
var T10;
var T9;
var T8;
var T7;
var T6;
var T5;
var T4;
var T3;
var T2;
var T1;
function openLottery(ball, maxnum) {
	if (T10) {
		clearInterval(T10);
		way.set("showExpect.openCode10", " ");
	}
	if (T9) {
		clearInterval(T9);
		way.set("showExpect.openCode9", " ");
	}
	if (T8) {
		clearInterval(T8);
		way.set("showExpect.openCode8", " ");
	}
	if (T7) {
		clearInterval(T7);
		way.set("showExpect.openCode7", " ");
	}
	if (T6) {
		clearInterval(T6);
		way.set("showExpect.openCode6", " ");
	}
	if (T5) {
		clearInterval(T5);
		way.set("showExpect.openCode5", " ");
	}
	if (T4) {
		clearInterval(T4);
		way.set("showExpect.openCode4", " ");
	}
	if (T3) {
		clearInterval(T3);
		way.set("showExpect.openCode3", " ");
	}
	if (T2) {
		clearInterval(T2);
		way.set("showExpect.openCode2", " ");
	}
	if (T1) {
		clearInterval(T1);
		way.set("showExpect.openCode1", " ");
	}
	var qiuanimation3Div = $("#qiuanimation3");
	if(qiuanimation3Div.length > 0) {
		qiuanimation3Div.hide();
		qiuanimation3Div.find("div.bigone").empty();
		qiuanimation3Div.find("div.bigone").hide();
	}
	var qiuanimation5Div = $("#qiuanimation5");
	if(qiuanimation5Div.length > 0) {
		qiuanimation5Div.hide();
		qiuanimation5Div.find("div.bigone").empty();
		qiuanimation5Div.find("div.bigone").hide();
	}
	$(".kaijq").find('ul').hide();
	if (ball == 3) {
		$(".lotter-bigqiu3").show();
	} else if (ball == 5) {
		$(".lotter-bigqiu5").show();
	} else if (ball == 8) {
		$(".lotter-bigsmll8").show();
	} else if (ball == 10) {
		$(".lotter-bigsmll10").show();
	} 
	Lottery(ball, maxnum);

}
function Lottery(num, maxnum) {
	if (num >= 10) {
		T10 = window.setInterval(function() {
			openLottery10(maxnum);
		}, 50);
	}
	if (num >= 9) {
		T9 = window.setInterval(function() {
			openLottery9(maxnum);
		}, 50);
	}
	if (num >= 8) {
		T8 = window.setInterval(function() {
			openLottery8(maxnum);
		}, 50);
	}
	if (num >= 7) {
		T7 = window.setInterval(function() {
			openLottery7(maxnum);
		}, 50);
	}
	if (num >= 6) {
		T6 = window.setInterval(function() {
			openLottery6(maxnum);
		}, 50);
	}
	if (num >= 5) {
		T5 = window.setInterval(function() {
			openLottery5(maxnum);
		}, 50);
	}
	if (num >= 4) {
		T4 = window.setInterval(function() {
			openLottery4(maxnum);
		}, 50);
	}
	if (num >= 3) {
		T3 = window.setInterval(function() {
			openLottery3(maxnum);
		}, 50);
	}
	if (num >= 2) {
		T2 = window.setInterval(function() {
			openLottery2(maxnum);
		}, 50);
	}
	if (num >= 1) {
		T1 = window.setInterval(function() {
			openLottery1(maxnum);
		}, 50);
	}
}
var s_sum1 = 0;
var s_sum2 = 0;
var s_sum3 = 0;
var openLotteryListC = '';

function openLottery1(maxnum) {
	s_sum1 = Math.round(Math.random() * (maxnum - 1) + 1);
	way.set("showExpect.openCode1", s_sum1);
}

function openLottery2(maxnum) {
	s_sum2 = Math.round(Math.random() * (maxnum - 1) + 1);
	way.set("showExpect.openCode2", s_sum2);
}

function openLottery3(maxnum) {
	s_sum3 = Math.round(Math.random() * (maxnum - 1) + 1);
	way.set("showExpect.openCode3", s_sum3);
}

function openLottery4(maxnum) {
	way.set("showExpect.openCode4", Math
			.round(Math.random() * (maxnum - 1) + 1));
}

function openLottery5(maxnum) {
	way.set("showExpect.openCode5", Math
			.round(Math.random() * (maxnum - 1) + 1));
}
function openLottery6(maxnum) {
	way.set("showExpect.openCode6", Math
			.round(Math.random() * (maxnum - 1) + 1));
}

function openLottery7(maxnum) {
	way.set("showExpect.openCode7", Math
			.round(Math.random() * (maxnum - 1) + 1));
}

function openLottery8(maxnum) {
	way.set("showExpect.openCode8", Math
			.round(Math.random() * (maxnum - 1) + 1));
}
function openLottery9(maxnum) {
	way.set("showExpect.openCode9", Math
			.round(Math.random() * (maxnum - 1) + 1));
}
function openLottery10(maxnum) {
	way.set("showExpect.openCode10", Math.round(Math.random() * (maxnum - 1) + 1));
}

// 停止开奖
function stopLottery(codes) {
	var nums = codes.split(',');
	if (nums.length >= 10) {
		setTimeout(function() {
			clearInterval(T10);
			way.set("showExpect.openCode10", nums[9] + "");
//			if(nums.length==10){
//				showLottery();
//			}
		}, 4000);
	}
	if (nums.length >= 9) {
		setTimeout(function() {
			clearInterval(T9);
			way.set("showExpect.openCode9", nums[8] + "");
//			if(nums.length==9){
//				showLottery();
//			}
		}, 4000);
	}
	if (nums.length >= 8) {
		setTimeout(function() {
			clearInterval(T8);
			way.set("showExpect.openCode8", nums[7] + "");
//			if(nums.length==8){
//				showLottery();
//			}
		}, 4000);
	}
	if (nums.length >= 7) {
		setTimeout(function() {
			clearInterval(T7);
			way.set("showExpect.openCode7", nums[6] + "");
//			if(nums.length==7){
//				showLottery();
//			}
		}, 3500);
	}
	if (nums.length >= 6) {
		setTimeout(function() {
			clearInterval(T6);
			way.set("showExpect.openCode6", nums[5] + "");
//			if(nums.length==6){
//				showLottery();
//			}
		}, 3000);
	}
	if (nums.length >= 5) {
		setTimeout(function() {
			clearInterval(T5);
      setLotterNumber(4,nums[4]);
			way.set("showExpect.openCode5", nums[4] + "");
			// if(nums.length==5){
			// 	showLottery();
			// }
		}, 2500);
	}
	if (nums.length >= 4) {
		setTimeout(function() {
			clearInterval(T4);
      setLotterNumber(3,nums[3]);
			way.set("showExpect.openCode4", nums[3] + "");
//			if(nums.length==4){
//				showLottery();
//			}
		}, 2000);
	}
	if (nums.length >= 3) {
		setTimeout(function() {
			var openLotteryList = $('#ssc_winning_sum').find('li');
			clearInterval(T3);
      setLotterNumber(2,nums[2]);
			way.set("showExpect.openCode3", nums[2] + "");
//			if(nums.length==3){
//				showLottery();
//			}
		}, 1500);
	}
	if (nums.length >= 2) {
		setTimeout(function() {
			var openLotteryList = $('#ssc_winning_sum').find('li');
			clearInterval(T2);
      setLotterNumber(1,nums[1]);
			way.set("showExpect.openCode2", nums[1] + "");
//			if(nums.length==2){
//				showLottery();
//			}
		}, 1000);
	}
	if (nums.length >= 1) {
		setTimeout(function() {
			clearInterval(T1);
      setLotterNumber(0,nums[0]);
			way.set("showExpect.openCode1", nums[0] + "");
//			if(nums.length==1){
//				showLottery();
//			}
		}, 200);
	}
}

function setLotterNumber(_index,_nums) {
	if(openLotteryList == 0){
		openLotteryList = $('#ssc_winning_sum').find('li');
	}
	// openLotteryListC = openLotteryList.eq(_index).attr('class');
	// openLotteryListC = openLotteryListC.substring(0,openLotteryListC.lastIndexOf('_')+1);
  if(_nums == 'gif'){
    openLotteryList.eq(_index).attr('class','ssc_winning_sum_gif');
    $('#ssc_winning_sum').find('li').css('text-indent','-9999px');
  }else{
    openLotteryList.eq(_index).attr('class','ssc_winning_sum_bg');
    $('#ssc_winning_sum').find('li').css('text-indent','0');
  }
	
}
/**
 * 当天投注记录
 * @param shortName
 */
function getUserBetsListToday(_lotteryname) {
	if(!user || user.islogin!=1){
		return false;
	}
	lotteryname = _lotteryname?_lotteryname:lotteryname;
	var tabs = $("#userBetsListToday");
	tabs.empty();
	var url = apirooturl + 'betslisttoday';
	var pagination = $.pagination({
		render: '.paging',
		pageSize: jqueryGridRows,
		pageLength: 7,
		ajaxType: 'post',
		//hideInfos: false,
		hideGo: true,
		ajaxUrl: url,
		ajaxData: {
			"lotteryname": lotteryname,'jqueryGridPage': jqueryGridPage,'jqueryGridRows': jqueryGridRows
		},
		complete: function() {},
		success: function(data) {
			tabs.empty();
			$.each(data, function(index, val) {
				var html = '<tr id="'+val.trano+'" onclick="getBillInfo(\''+val.trano+'\');" style="cursor: pointer;">';
                html += '<td>' + val.trano + '</td>';
				html += '<td>' + val.expect + '</td>';
				html += '<td>' + val.type + '</td>';
				html += '<td>' + val.opencode + '</td>';
				html += '<td>' + val.playtitle + '</td>';
				html += '<td>' + val.mode + '</td>';
				html += '<td>' + val.amount + '</td>';
				html += '<td>' + (val.okamount ? val.okamount : 0) + '</td>';
				html += '<td>' + val.oddtime + '</td>';
				html += '<td>';
				//'<td>' + val.betsTimes + '</td>' +
				if(val.isdraw == -1) { // 未中奖绿色
					html += '<span style="color:green">未中奖</span>';
				} else if(val.isdraw == 1) { // 已中奖红色
					html += '<span style="color:red">已中奖</span>';
				}else if(val.isdraw == -2) {
					html += '<del>已撤单</del>';
				}else if(val.isdraw == 0) {
					html += '<span>未开奖</span>';
				}else{
					html += '<span>未知状态</span>';
				}
				html += '</td>';
				html += '</tr>';
				tabs.append(html);
			});
		},
		pageError: function(response) {},
		emptyData: function() {}
	});
	pagination.init();
}
//Even_Gpc.js
var perMoney=0; //合买 每份金额
var fenshu = 0; //合买 分成份数
var buyCount = 0; //合买 购买份数
var baodiCount = 0; //合买 保底份数


/*取消合买 事件*/
$(function(){
    
    $(document).on("click", ".leixing div", function() {
    $(this).addClass('active').siblings('div').removeClass('active');

    var pan = $(this).hasClass('active');
        if(pan){
            $(this).attr('data','yes').siblings('div').attr('data','no');
        }
    });
	/*自购 合买 事件*/
	ZG_HM_Even();	
	})
	
	
	/*自购 合买 事件*/
function ZG_HM_Even()
{	
	/*取消合买 事件*/
	$("#hmreset").click(function(){		
		$("#zgDiv").show();
		$("#hmDiv").hide();
	})
	/*合买 事件 显示合买信息*/
	$("#btn_buy_hm").click(function(){				
		$("#zgDiv").hide();
		$("#hmDiv").show();
		SetHM();
	});
	
	/*合买 分成份数*/
	$("#fsInput").keyup(function(){
		$(this).val($(this).val().replace(/[^\d]/g,''));
		var totalmoney=0;
		
		if($(".hemaijinerMoney").length>0){
			totalmoney = Number($(".hemaijinerMoney").text());
		}
				
		
		fenshu = Number($(this).val());
		perMoney = 0;
		if (fenshu > 0)
		{
			perMoney = totalmoney/fenshu;
		}
		$("#fsMoney").text(formatCurrency(perMoney));
		$("#rgInput").keyup();

	});
	
	/*合买 购买份数*/
	$("#rgInput").keyup(function(){
		$(this).val($(this).val().replace(/[^\d]/g,''));
		buyCount = Number($(this).val());
		$("#buyMoney").text(formatCurrency(perMoney*buyCount));
		$("#rgScale").text(fenshu>0?(parseInt(buyCount/fenshu*10000+0.5)/100):0);
		if( buyCount >= fenshu *0.02 ){
			$("#rgErr").hide();
		}
		else
		{
			$("#rgErr").show().text("至少需要认购"+Math.ceil(fenshu*0.02)+"份");
		}
		
	});
	


	
	/*合买 保底份数*/
	$("#bdInput").keyup(function(){
		$(this).val($(this).val().replace(/[^\d]/g,''));
		baodiCount = Number($(this).val());
		$("#bdMoney").text(formatCurrency(perMoney*baodiCount));
		$("#bdScale").text(fenshu>0?(parseInt(baodiCount/fenshu*10000+0.5)/100):0);
		if(baodiCount >= fenshu *0.02 ){
			$("#bdErr").hide();
		}
		else
		{
			$("#bdErr").show().text("至少需要保底"+Math.ceil(fenshu*0.02)+"份");
		}
	});
	
	/*合买 事件 提交合买信息*/
	//$("#f_submit_order_hemai").click(function(){
			
	//})
	
}


//设置合买界面
function SetHM()
{		
		var fenshu=0;
		if($(".hemaijinerMoney").length>0){
			fenshu = Number($(".hemaijinerMoney").text());
		}
		
		$("#fsInput").val( Math.floor(fenshu));
		if(fenshu>0)
		{
			
			perMoney = 1;
		}
		else
		{
			perMoney = 0;
		}
		$("#fsMoney").text(formatCurrency(perMoney));
		buyCount = Number($("#rgInput").val());
		$("#buyMoney").text(formatCurrency(perMoney*buyCount));
		var baodi = $("#isbaodi").attr("data");
		if (baodi='yes')
		{
			baodiCount = Number($("#bdInput").val());
		}
		else
		{
			baodiCount = 0;
		}
		$("#bdMoney").text(formatCurrency(perMoney*baodiCount));
		if (fenshu>0)
		{
			$("#rgScale").text(parseInt(buyCount / fenshu * 10000+0.5) / 100)
			$("#bdScale").text(parseInt(baodiCount / fenshu * 10000+0.5) / 100)
			
		}	
}

//JS 货币格式化
function formatCurrency(num) {
	num = num.toString().replace(/\$|\,/g,'');
	if(isNaN(num))
	{
		num = "0";
	}
	var sign = (num == (num = Math.abs(num)));
	num = Math.floor(num*100+0.50000000001);
	var cents = num%100;
	num = Math.floor(num/100).toString();
	if(cents<10)
	{
		cents = "0" + cents;
	}
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
	{
		num = num.substring(0,num.length-(4*i+3))+','+num.substring(num.length-(4*i+3));
	}
	return (((sign)?'':'-') + '￥' + num + '.' + cents);
}




//Buy_Tradecelerity.js


$(function(){	
   /*合买 是否保底*/
	$('#isbaodi').click(function(){
        $(this).toggleClass('active');
        var pan = $(this).hasClass('active');
        
        if(pan){
            $(this).attr('data','yes');
            $("#bdInput").attr("disabled",false);
            var countNum=$("#fsInput").val();
	        var mynum=$("#rgInput").val();
	        var num=countNum-mynum;
	        $("#bdInput").val(num);
		    baodiCount=Number($("#bdInput").val());//这个是保底
			$("#bdMoney").text(formatCurrency(perMoney*baodiCount));
		    $("#bdScale").text(fenshu>0?(parseInt(baodiCount/fenshu*10000+0.5)/100):0);
			$("#bdInput").removeAttr('disabled');
        }else{
            $(this).attr('data','no');
            baodiCount = 0;
			$("#bdInput").attr("disabled",true);
			$("#bdMoney").text("￥0.00");
			$("#bdScale").text("0");
			$("#bdErr").hide();
        }
    })
	
	//认购改变   by  dongsheng
	$("#rgInput").keyup(function(){
	    var countNum=$("#fsInput").val();
				$("#isbaodi").attr("data","yes");
	    $("#bdInput").attr('disabled',false);
	   var mynum=$(this).val();
	    var num=countNum-mynum;
	    $("#bdInput").val(num);
		baodiCount=Number($("#bdInput").val());//这个是保底
		$("#bdMoney").text(formatCurrency(perMoney*baodiCount));
		$("#bdScale").text(fenshu>0?(parseInt(baodiCount/fenshu*10000+0.5)/100):0);
		$("#bdInput").removeAttr('disabled');
	});	
	
	
	
	
})
var page ={
  pagesize:20,
  pageindex:1,
  countpage:0,
  countrs:0,
  closesize:false
}
function createpage(){
  $("#page_wrapper").empty();
  if(page.countrs >0)
  {
    var str = "";
    if(page.closesize)
    {
      str += "每页: <a href='javascript:;' onclick='setpagesize(20)' style='"+(page.pagesize==20?"color:red;":"")+"'>20</a>";
      str += " <a href='javascript:;' onclick='setpagesize(30)' style='"+(page.pagesize==30?"color:red;":"")+"'>30</a> ";
      str += " <a href='javascript:;' onclick='setpagesize(50)' style='"+(page.pagesize==50?"color:red;":"")+"'>50</a> ";
    }
    if(page.pageindex>1)
    {
      str +="<a class='h_l' href='javascript:;' onclick='setpageindex(1)'>首页</a>"
      str +="<a class='pre'  href='javascript:;' onclick='setpageindex("+(page.pageindex-1)+")'>上一页</a>"
    }
    else
    {
      str +="<a class='h_l' href='javascript:;'>首页</a>"
      str +="<a class='pre' href='javascript:;'>上一页</a>"
    }
    if(page.pageindex<page.countpage)
    {
      str +="<a class='next'  href='javascript:;' onclick='setpageindex("+(page.pageindex+1)+")'>下一页</a>"
      str +="<a class='h_l'  href='javascript:;' onclick='setpageindex("+(page.countpage)+")'>尾页</a>"
    }
    else
    {
      str +="<a class='next'  href='javascript:;'>下一页</a>"
      str +="<a class='h_l'  href='javascript:;'>尾页</a>"
    }
    str += "<div style='color: #8c8c8c;'>页次：";
    str += "<span style='color:#434354'>"+page.pageindex+"</span>"
    str += "/"
    str += page.countpage
    str += "记录："+page.countrs+"条</div> "
    $("#page_wrapper").html(str)
  }
}

function setpagesize(pagesize)
{
  page.pagesize=pagesize;
  do_search()
}
function setpageindex(index)
{
  page.pageindex=index;
  do_search()
}
function FormatNum(obj)
{
  $(obj).val($(obj).val().replace(/[^\d]/g,''));
}

function formatCurrency2(num) {
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
  return (((sign)?'':'-') + num + '.' + cents);
}


$(function(){
  do_search();
  
  /*合买查询条件事件绑定*/    
  $("#findstr").keyup(function(){ do_search();});
  $("#tcSelect,#ztSelect,#jeSelect,#mfSelect,#jdSelect,#bdSelect,#IsLotid,#myqihao").change(function(){do_search();});
  
  /*返回继续购买*/
  $("#aContinue").click(function(){
    alertdiv.close('_ajax_common_div5');
    do_search();
  });
  
  /*关闭购买成功提示*/
  $("#_ajax_common_btn5").click(function(){
    alertdiv.close('_ajax_common_div5');
    do_search();
  });
  /*合买导航栏样式及彩种选择事件绑定*/
  $(".ulMode1 li,.leftLink").click(function(){
    try{$(".ulMode1 li[class='active']").removeClass();
    $(this).addClass("active");}catch(e){;}
    do_search();
  }
  )
});

function Record_(record){
  var am = record,ar = Math.floor(am / 10000000),val_="";
  if (ar > 0 )
    val_ += "<img src='../../Images/y4.gif' />",val_ += "<img src='../../Images/s" + ar + ".png' />",am = am - 10000000 * ar;
  ar = Math.floor(am / 1000000)
  if (ar > 0) 
    val_ += "<img src='../../Images/y3.gif' />",val_ += "<img src='../../Images/s" + ar + ".png' />",am = am - 1000000 * ar;
  ar = Math.floor(am / 100000)
  if (ar > 0) 
    val_ += "<img src='../../Images/y2.gif' />",val_ += "<img src='../../Images/s" + ar + ".png' />",am = am - 100000 * ar;
  ar = Math.floor(am / 10000)
  if (ar > 0)
    val_ += "<img src='../../Images/y1.gif' />",val_ += "<img src='../../Images/s" + ar + ".png' />",am = am - 10000 * ar;
  return val_;  
}

function DomAdd(data)
{
  if(data.length<0 || data =="[]" || data ==""){
    $("#list_data").html("<tr><td colspan='9'>抱歉！没有找到符合条件的结果！</td></tr>");  
    page.pagesize = page.pageindex = page.countrs =0;
    createpage();return;  
  }
  var context = data[0],page_ = data[1],tr = "";  
  $.each(context,function(key,value){
    var key_1 = (page_.pageindex>1?(Number(page_.pageindex)-1)*Number(page_.pagesize)+Number(key):Number(key))+1,val = "",key_2 = (key_1%2)==0?"th_on":"th_even"; 
    if(value.lotteryname == '竞彩足球')
     value.url = '/Trade/Jczq/view.html?id='+value.id;
   else
   {
    var lottName = value.lotteryid.match(/[a-zA-Z]/g).join("").toLowerCase().replace(/(\w)/,function(v){return v.toUpperCase()});
    if(lottName.indexOf("ssc")!=-1){ lottName = lottName.replace("ssc","Ssc");}
    else if(lottName.indexOf("syxw")>-1){ lottName = lottName.replace("syxw","Syxw");}
    else if(lottName.indexOf("ks")>-1){ lottName = lottName.replace("ks","Ks");}
    lottName = lottName == "CqSsc"?"Ssc":lottName;
    lottName = lottName == "JxSyxw"?"Syxw":lottName;            
    value.url = '/Game.details?no='+value.id;
  }   
  if(value.state == 1 || value.state ==-1){
    val = '<button class="issue hm_button stop">已完成</button>'
  }else if(value.state == -2 || value.state == -3){
    val = '<button class="issue hm_button stop">已完成</button>'
  }else if(value.state == 0 || value.state == 2){
    val = '<button class="issue hm_button start">进行中</button>'
  }
  
  if(value.state == 0 && value.ssy>0){
    val = '<button class="issue hm_button start">进行中</button>'
  } 
  
  tr += ''      
  +'<div class="shareInfo" onclick="hmurl('+value.id+')"><div class="title"><div class="avatar"><div class="circular--portrait"><img src="'+value.face+'"></div></div>'
  +'<div style="vertical-align: middle; line-height: .35rem;"><span>'+value.lotteryname+' - '+value.playtitle+'</span>'
  +'<span style="float: right; font-size: .12rem;">总份/余份：<span style="color: rgb(238, 146, 0);">'+value.fenshu+' / '+value.ssy+'</span></span></div>'
        +'<div><span>发起人：<span>'+value.username+'</span></span><span style="float: right;">战绩：<span style="color: red; font-weight: bold;">'+ Record_(value.record)+''+value.record+'</span></span></div></div>'//战绩'+value.record+'
        +'<div class="line"><span>金额：<span style="color: red; font-weight: bold;">'+value.money+'</span></span>'
        +'<span class="issue">发起时间：<span>'+getLocalTime(value.oddtime)+'</span></span></div>'
        +'<div class="line"><span>进度：<span style="color: red; font-weight: bold;">'+(Math.ceil(value.jdbfb*100))+'%'
        if((value.bdbfb*100)>1){ tr+='+'+Math.ceil((value.bdbfb*100))+'%<span class="bao">保</span></span></span>'; } 
        tr+='<span class="action">'+val+'</span>'
        +'</div></div>'
      })
  $("#list_data").html(tr);
  page.pagesize = Number(page_.pagesize);
  page.pageindex = Number(page_.pageindex);
  page.countpage = Number(page_.countpage);
  page.countrs = Number(page_.countrs);
  createpage();
}


function getLocalTime(nS) {     
  return  new Date(parseInt(nS) * 1000).Format("yyyy-MM-dd hh:mm");  
}     
Date.prototype.Format = function (fmt) { 
  var o = {
    "M+": this.getMonth() + 1, 
    "d+": this.getDate(), 
    "h+": this.getHours(), 
    "m+": this.getMinutes(), 
    "s+": this.getSeconds(), 
    "q+": Math.floor((this.getMonth() + 3) / 3), 
    "S": this.getMilliseconds() 
  };
  if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
  for (var k in o)
    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
  return fmt;
}

function ascncp(name){
  if($(".ulMode1 li[class='active']"))
    LottName = $(".ulMode1 li[class='active']").attr("data"); 
  jestr = $("#jeSelect").val(); 
  $.ajax({
    type : "POST",
    url  :  apirooturl + 'hmlist',
    data : {
      "action":"hmlist",
      "jeSelect1":'',
      "jeSelect2":'',
      "mfSelect":$("#mfSelect").val(),
      "jdSelect":$("#jdSelect").val(),
      "lotteryname":name,
      "myqihao":$("#myqihao").val(),
      "bdSelect":$("#bdSelect").val(),
      "Pageno":page.pageindex 
    },
    success : function (data) {
      DomAdd(eval(data));
    }
  });
}

function do_search(){
  if($(".ulMode1 li[class='active']"))
    LottName = $(".ulMode1 li[class='active']").attr("data"); 
  jestr = $("#jeSelect").val(); 
  $.ajax({
    type : "POST",
    url  :  apirooturl + 'hmlist',
    data : {
      "action":"hmlist",
      "jeSelect1":'',
      "jeSelect2":'',
      "mfSelect":$("#mfSelect").val(),
      "jdSelect":$("#jdSelect").val(),
      "lotteryname":'all',
      "myqihao":$("#myqihao").val(),
      "bdSelect":$("#bdSelect").val(),
      "Pageno":page.pageindex 
    },
    success : function (data) {
      DomAdd(eval(data));
    }
  });
}
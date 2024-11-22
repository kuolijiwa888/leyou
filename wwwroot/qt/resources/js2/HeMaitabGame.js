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
    str += "<span style='color:red'>"+page.pageindex+"</span>"
    str += "/"
    str += page.countpage+'<span>页</span>'
    str += "，记录总数："+page.countrs+"条 "
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
  console.log(num);
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
  $('#imgtalk').click(function(e){
    e.stopPropagation();
    if($('.el-select-dropdown').css("display")=='none'){
      $('#iconfont').css('transform','rotate(180deg)');
      $('.el-select-dropdown').slideDown(300);
    }else{
      $('#iconfont').css('transform','rotate(0deg)');
      $('.el-select-dropdown').slideUp(300);
    }
  })
  $(document).click(function(){
    $('#iconfont').css('transform','rotate(0deg)');
    $('.el-select-dropdown').hide();
  });
  $(document).click(function(){
    $('#iconfont').css('transform','rotate(0deg)');
    $('.el-select-dropdown').hide();
  });
  $('.el-select-dropdown__item').click(function(){
    var text = $(this).text();
    $('#imgtalk').val(text);
    $(this).siblings().removeClass("selected");
    $(this).addClass("selected");
    ascnname($(this).attr("data"));
  })
  $('.ascncp').click(function(){
    $(this).siblings().removeClass("hemai-curr");
    $(this).addClass("hemai-curr");
    ascncp($(this).attr("data"));
  })
  //do_search_index();
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
  if(data[0]=='' || data.length<0 || data =="[]" || data ==""){
    $("table.rec_table > tbody").html("<div class='hemaiwuimg'><img src='/ascn/images/wushuju.png'><div>暂 无 数 据</div></div>"); 
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
    
      //value.url = '/Trade/'+lottName+'/Project-Info-'+value.id+'.html';
      value.url = '/Game.details?no='+value.id;
    }   
    if(value.state == 1 || value.state ==-1){
      val = '<div class="hm_by cell">已成功</div></td>'
    }else if(value.state == -2 || value.state == -3){
      val = '<div class="hm_by cell">已成功</div></td>'
    }else if(value.state == 0 || value.state == 2){
      val = '<div class="hm_blue cell">进行中</div></td>'
    }
    
    if(value.state == 0 && value.ssy>0){
      val = "<div class='cell hm_no'>"
      +"<input type='hidden' name='pid' value='"+value.id+"' />"
      +"<input type='hidden' name='senumber' value='"+value.ssy+"' />"
      +"<input type='hidden' name='onemoney' value='"+value.onemoney+"'/>"
      +"<input type='text' value='1' name='buynum'  onkeyup='FormatNum(this)'  placeholder='份数' class='hm_money'><i class='hm_fen'>份</i><a href='javascript:void(0);'class='hm_buy' onclick='AddProject(this)'>购买</a></div>";
    } 

    tr += '<tr class="'+key_2+'" onmouseover="this.className=\'listmouseover\'" onmouseout="this.className=\''+key_2+'\'">'
    +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_1"><div class="cell">'+key_1+'</div></td>'
    +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_2"><div class="cell">'+value.lotteryname+'</div></td>'
    +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_3"style="text-align:left;"><div class="cell"><div class="byhm_myimg"><img style="display:inline;vertical-align:middle;border:1px solid #C2C2C2;height: 25px;width: 25px;border-radius: 50%;" src='+value.face+'></div>'+value.username+'</div></td>'
        +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_4"><div class="cell">'+ Record_(value.record)+''+value.record+'</div></td>'//战绩'+value.record+'
        +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_5"><div class="cell">'+value.money+'元</div></td>'
        +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_6"><div class="cell">'+value.ssy+'份</div></td>'
        +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_7"><div class="cell">'+(Math.ceil(value.jdbfb*100))+'%';
        if((value.bdbfb*100)>1){ tr+='+'+Math.ceil((value.bdbfb*100))+'%<span class="hm_bao">保</span></div></td>'; } 
        tr+='<td colspan="1" rowspan="1" class="hmnoticestartarticle_8">'+val+'</td>'

        +'<td colspan="1" rowspan="1" class="hmnoticestartarticle_9"><div class="cell"><a href="'+value.url+'" class="hm_by">详情</a></div></td></tr>'
      })
  $("table.rec_table > tbody").html(tr);
  page.pagesize = Number(page_.pagesize);
  page.pageindex = Number(page_.pageindex);
  page.countpage = Number(page_.countpage);
  page.countrs = Number(page_.countrs);
  createpage();
}
function ascncp(name){
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
function ascnname(name){
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
  
  var LottName;
  if($(".el-scrollbar__view [class='active']")){
    LottName = $(".el-scrollbar__view [class='active']").attr("data");    
  }
  console.log(LottName);
  if(typeof LottName==='undefined'){
    LottName='all';
  }   
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
      "lotteryname":LottName,
      "myqihao":$("#myqihao").val(),
      "bdSelect":$("#bdSelect").val(),
      "Pageno":page.pageindex 
    },
    success : function (data) {
      DomAdd(eval(data));
    }
  });
}

function do_search_index(){
  jestr = $("#jeSelect").val(); 
  $.ajax({
    type : "POST",
    url  :  apirooturl + 'hmlist',
    data : {
      "action":"hmlist",
      "jeSelect1":jestr.split(",")[0],
      "jeSelect2":jestr.split(",")[1],
      "mfSelect":$("#mfSelect").val(),
      "jdSelect":$("#jdSelect").val(),
      "lotteryname":"all",
      "myqihao":$("#myqihao").val(),
      "bdSelect":$("#bdSelect").val(),
      "Pageno":page.pageindex 
    },
    success : function (data) {
      DomAdd(eval(data));
    }
  });
}
//购买按钮事件
function AddProject(obj)
{

  var td = $(obj).parent('div'),buynum = $(td).find("input[name=buynum]").val(),pid = $(td).find("input[name=pid]").val(),senumber = $(td).find("input[name=senumber]").val(),
  onemoney = $(td).find("input[name=onemoney]").val();
  console.log(td);
  
  if (buynum=="")
  {
    Dialog.error('温馨提示','认购份数不能为空！');
    $(td).find("input[name=buynum]").focus();
    return;
  }
  else if (Number(buynum) <= 0)
  {
    Dialog.error('温馨提示',"认购份数不能为空！");
    $(td).find("input[name=buynum]").focus();
    return;
  }
  else if (Number(buynum) > Number(senumber))
  {
    Dialog.error('温馨提示',"您认购份数不能大于剩余份数！");
    $(td).find("input[name=buynum]").focus();
    return;
  }
  var msg = "<p style='font-weight: 600; font-size:14px;padding:.2em;'>您好，请您确认</p>";
  msg = msg + "<p style='text-align:left;text-indent:2em;font-weight: 400;font-size:14px;padding:.2em;'>认购份数：<font color='red' style='font-weight:bold'>"+buynum+"</font>份</p>";
  msg = msg + "<p style='text-align:left;text-indent:2em;font-weight: 400;font-size:14px;padding:.2em;'>认购金额：<font color='red' style='font-weight:bold'>"+buynum*formatCurrency2(onemoney)+"元</font></p>";
  
  Dialog({
    title: "我要合买",
    content: msg,
    ok: {
      callback: function () {
        if(!user){
          Dialog.error('温馨提示','请先登陆');
        }
        add_project(buynum,pid,onemoney)
      }
    },
    cancel: {
      callback: function () {
        
      }
    }
  });
}
//参加合买
function add_project(buynum,pid,onemoney){  
  if(!user){
    Dialog.error('温馨提示','请先登陆');
    return;
  }
  $.ajax({
    type: "POST",
    url: apirooturl + 'hmadd',
    data: {
      action:"add",
      pid:pid,
      buynum:buynum,
      onemoney:onemoney
    },
    success: function(json){
      if(json.sign){             
        Dialog.success('温馨提示','发起合买成功');
        LottName = $(".ulMode1 li[class='active']").attr("data");
        //if(LottName){       
          do_search();
        //}else{        
        //  do_search_index();
        //}               
      }else{
        Dialog.error('温馨提示',json.message);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      Dialog.error('温馨提示',"交易失败,请重新提交！");
    },
    complete: function (jqXHR, textStatus) {
    }
  });
}


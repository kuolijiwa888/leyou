$(function(){
	$("#joinTab > li").click(function(){
		var index = $(this).index();
		$("#joinTab > li").removeClass("an_cur")
		$("#joinTab > li").eq(index).addClass("an_cur");
		$("#show_list_div > table").hide();
		$("#show_list_div > table").eq(index).show();
	});
});
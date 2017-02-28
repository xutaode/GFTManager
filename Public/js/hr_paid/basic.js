/* by seaou,seaou.com,qq:3026026 */

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
 }

$(function(){
	_index = getQueryString("_index") || 0;
	$(".top_nav li:eq("+_index+") > a").addClass("current");
	$(".top_nav li:eq("+_index+") > a").next("dl").show().stop().animate({left:"0px",opacity:"1"},"0.3");//初始化a
});

$(".top_nav li").hover( function(){	
	$(".top_nav li > a").removeClass("active");
	$(".top_nav li:eq("+_index+") > a").next("dl").hide().stop().animate({left:"20px",opacity:"0"},"0.2");
	$(this).children("a").addClass("active");
	$(this).children("dl").show().stop().animate({left:"0px",opacity:"1"},"0.3");
	},function(){
		//把活动中的a停止
		$(this).children("dl").stop().animate({left:"20px",opacity:"0"},"0.2",function(){
			$(this).hide();
			});
		//把原来的a还原
		$(".top_nav li:eq("+_index+") > a").next("dl").show().stop().animate({left:"0px",opacity:"1"},"0.3");
		$(this).children("a").removeClass("active");//移除hover状态
});
		
var tabs_con = $(".tabs_con .con"); 
tabs_con.filter(":first").show().stop().animate({top:"0",opacity:"1"},"0.3");
$(".tabs_nav li a:first").addClass("current");


$(".tabs_nav li a").click(function () {
	tabs_con.hide().stop().animate({top:"20px",opacity:"0"},"0.2");
	tabs_con.filter(this.hash).show().stop().animate({top:"0",opacity:"1"},"0.3");
	$(".tabs_nav li a").removeClass("current");
	$(this).addClass("current");
	return false;
});	

$(".pop_close").click( function(){
	$(".pop_window").stop().animate({top:"40%",opacity:"0"},"0.2",function(){
		$(this).hide();
	});
	$(".pop_div").hide();
});

//提交表单参数设置
function FormData(fieldIDs){
    var date = '';
    if(!fieldIDs||fieldIDs==null){
      return '';
    }
    var len = fieldIDs.length;
    for(var i=0;i<len;i++){
       if($("#"+fieldIDs[i]).val()!=""){
         date+=fieldIDs[i]+'='+encodeURIComponent($("#"+fieldIDs[i]).val());
      }else{
         if(document.getElementById("z"+fieldIDs[i])){
             date+=fieldIDs[i]+'='+encodeURIComponent(document.getElementById("z"+fieldIDs[i]).value);
	     }else{
	    	 date+=fieldIDs[i]+'='+encodeURIComponent($("#"+fieldIDs[i]).val());
	     }
      }
      if(i+1!=len) {date+='&';} 
    }
    return date;
 }
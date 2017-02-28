// JavaScript Document
/*! jQuery v1.7.1 jquery.com | jquery.org/license */
	String.prototype.trim=function(){
	    return this.replace(/(^\s*)|(\s*$)/g, "");
	}
	String.prototype.ltrim=function(){
	    return this.replace(/(^\s*)/g,"");
	}
	String.prototype.rtrim=function(){
	    return this.replace(/(\s*$)/g,"");
	}
   function updateFirm(action){
	  var len = $(".firmTab input").length;
	  if(len==0){
		  $(".firmTab td[name='firmNotReq']").each(function(){
			  var id = $(this).children("span").attr("id");
			  var html = ($(this).children("span").html()).trim();
			  if(html=="" || html=="undefined"){
				  $(this).html("<input id='"+id+"' class='text_input' type='text'/>");
			  }else{
				  var val = $(this).children("span").html();
				  $(this).html("<input id='"+id+"' class='text_input' value='"+val+"' type='text'/>");
			  }
			  $("#firmEditBtn").html("保存");
		  });
	  }else{
		  if(!checkFirmUpdate()){
			   return false;
		  }
		  updateFirminfo(action);
		  
		  $(".firmTab td[name='firmNotReq']").each(function(){
			  var val = $(this).children("input").val();
			  var id = $(this).children("input").attr("id");
			  $(this).html("<span id='"+id+"'>"+val+"</span>");
			  $("#firmEditBtn").html("修改");
		  });
	  }
  }

  function checkFirmUpdate(){
	   var checkNoFlag = checkNo("BIZ_TEL_NO") && checkNo("TECH_TEL_NO") && checkNo("SERV_TEL_NO");
	   var checkEmailFlag = checkEmail("BIZ_EMAIL") && checkEmail("TECH_EMAIL") && checkEmail("SERV_EMAIL");
	   var checkLengthFlag = checkLength("BIZ_CONTACT",30) && checkLength("TECH_CONTACT",30) && checkLength("SERV_CONTACT",30);
	   return checkNoFlag && checkEmailFlag && checkLengthFlag;
  }
  
  //验证手机号
  function checkNo(id){
	  var conn=$("#"+id).val();
	  if(conn==""){
		  return true;
	  }
	  
	  var reg0=/^0?(13[0-9]|15[012356789]|18[0236789]|14[57])[0-9]{8}$/;
	  var reg1=/(\d{3}-\d{8})|(\d{4}-\d{7})/;
	  var mob=$("#SERV_MOB_NO").val();
	  var fieldNam = $("#"+id).parent("td").prev("th").html().replace("：","");;
	  if(id=='SERV_MOB_NO' && mob==''){
	    if(conn.length==0){
	     layer.alert("【"+fieldNam+"】客服联系人电话不能为空！");
	     return false;
	    }else{
	      if(reg0.test(conn)||reg1.test(conn)){
	         return true;
	       }else{
	    	 layer.alert("【"+fieldNam+"】输入的联系电话有误！");
	         return false;
	       }
	    }
	  }else{
	      if(conn.length==0){
	          return true;
	      }else{
	         if(reg0.test(conn)||reg1.test(conn)){
	             return true;
	         }else{
	        	layer.alert("【"+fieldNam+"】输入的联系电话不正确！");
	            return false;
	          }
	       }
	    }
	 }
  
  //验证邮箱
  function checkEmail(id){
	  var conn=$("#"+id).val();
	  if(conn==""){
		  return true;
	  }
	  
	  var reg0=/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	  var fieldNam = $("#"+id).parent("td").prev("th").html().replace("：","");
	  if(conn.length==0){
	    return true;
	  }else if(conn.length>40){
	    layer.alert("【"+fieldNam+"】邮箱地址过长！");
	    return false;
	  }else if(!reg0.test(conn)){
	    layer.alert("【"+fieldNam+"】请输入真实的邮箱地址！");
	    return false;
	  }else{
	     return true;
	  }
  }
  
  //验证长度
  function checkLength(id,len){
     var em=$("#"+id).val();
     if(em==""){
		  return true;
	 }
     
     var sum=0; 
      for(var i = 0;i<em.length;i++){    
          if((em.charCodeAt(i)>=0)&&(em.charCodeAt(i)<=255)){  
          sum=sum+1;   
          }else{   
           sum=sum+3;   
          }    
      }
     if(sum<=len){
        return true;
     }else{
        var fieldNam = $("#"+id).parent("td").prev("th").html().replace("：","");;
        layer.alert("【"+fieldNam+"】输入的信息太长！");
        return false;
     }
}
  
  //更新商户信息
  function updateFirminfo(action){
       var dataarr = new Array("SYSCOD","CUST_ID","BIZ_TEL_NO","BIZ_CONTACT","BIZ_EMAIL","TECH_CONTACT","TECH_TEL_NO","TECH_EMAIL","SERV_CONTACT","SERV_EMAIL","SERV_TEL_NO","PAY_CHANNEL");
       var data =action+"?"+FormData(dataarr)+"&ise="+Math.random();
       var result = $.ajax({
       type:"POST",
       url:data,
       dataType:"json",
       error:function(){
           layer.alert("修改错误，请稍后再试");
       },
       success: function(etf){
	       if(etf.RSPCOD != '00000' && etf.RSPCOD !='' ){
		       layer.alert(etf.RSPMSG+"，保存失败！");
		       $("#firmEditBtn").click();
	       }else{
	    	   layer.alert("保存成功！");
	       }
       }
   });

}

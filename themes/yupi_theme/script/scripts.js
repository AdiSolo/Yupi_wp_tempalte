jQuery.fn.DefaultValue=function(a){return this.each(function(){if(this.type!="text"&&this.type!="password"&&this.type!="textarea"){return}var b=this;if(this.value==""){this.value=a}else{return}jQuery(this).focus(function(){if(this.value==a||this.value==""){this.value=""}});jQuery(this).blur(function(){if(this.value==a||this.value==""){this.value=a}});$(this).parents("form").each(function(){$(this).submit(function(){if(b.value==a){b.value=""}})})})};
$(".close-source").click(function () {
    $(".visitor-source").css("display", "none");
    }); 
	



	

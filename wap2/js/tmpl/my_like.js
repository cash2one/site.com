var page=10;
var curpage=1;
var hasmore=true;
var key=getCookie("key");

$(function(){
	
	if(!key){
		location.href="login.html"
	}
	
	get_list();
	
	$(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });

});

//关注店铺列表
function get_list() {
	
	if(!hasmore) {
				
		return false;
		
	}
	hasmore = false;
	
	$.ajax({
		
		type : "GET",
		url  : ApiUrl1+"/index.php?act=micro_like&op=my_like_1_5",
		data : {'key':key,'curpage':curpage,'page':page},
		dataType:"json",
		
		success:function(data) {
			
			//console.log(data);
			if (!data) {
				data = [];
				data.datas = [];
			}
			curpage++;
			var my_like_list_html = "";
			my_like_list_html =  template.render("my_like_list_model", data);
			$("#my_like_list").append(my_like_list_html);
			hasmore = data.hasmore
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
	});
	
}

/**
 * 关注店铺列表
 * add by lizh 11:24 2016/7/26
 */
function cancel_favorites_store(obj,id) {
	
	$.ajax({
		
		type : "POST",
		url  : ApiUrl+"/index.php?act=member_favorites_store&op=favorites_del",
		data : {'key':key,'store_id':id},
		dataType:"json",
		
		success:function(data) {
			
			console.log(data);
			if(data.datas == 1) {
				
				history.go(0);
				
			}
			
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
	});
	
}
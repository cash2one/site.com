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
	
	get_wx_shart();

});

//关注店铺列表
function get_list() {
	
	if(!hasmore) {
				
		return false;
		
	}
	hasmore = false;
	
	$.ajax({
		
		type : "GET",
		url  : ApiUrl+"/index.php?act=member_favorites_store&op=favorites_list",
		data : {'key':key,'curpage':curpage,'page':page},
		dataType:"json",
		
		success:function(data) {
			
			console.log(data);
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.favorites_list = []
			}
			curpage++;
			var favorites_store_list_html = "";
			favorites_store_list_html =  template.render("favorites_store_list_model", data.datas);
			$("#favorites_store_list").append(favorites_store_list_html);
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
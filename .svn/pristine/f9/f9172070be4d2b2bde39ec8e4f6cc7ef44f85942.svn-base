var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {
	//get_list();
    get_special_list();
    //getCartCount(t);
    //$("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
});

function get_special_list(){

       $.getJSON(ApiUrl + "/index.php?act=member_index&op=more_myself_favorites_showcase" , {'key':key},
		function(b) {
			if (!b){
				b = [];
				b.datas = [];
				b.datas.micro_personal_class_list = []
			}
			
                        
			var showcase_html = template.render("showcase_model", b.datas);
			$("#showcase").append(showcase_html);

		})
        
}
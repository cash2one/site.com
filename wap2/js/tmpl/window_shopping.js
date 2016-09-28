var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var t= getCookie("key");
$(function() {
	get_list();
        get_special_list();
        getCartCount(t);
        $("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
});
function get_list() {

	
	$.getJSON(ApiUrl + "/index.php?act=goods_class" ,
		function(e) {
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.class_list = []
			}
			var r = template.render("home_body", e);
			$("#product_list .goods-secrch-list").append(r);
		})
}
function get_special_list(){
    
    
       $.getJSON(ApiUrl + "/index.php?act=index&op=special_list" ,
		function(b) {
			if (!b){
				b = [];
				b.datas = [];
				b.datas.special_list = []
			}
			
                        
			var n = template.render("special_body", b);
			$("#special_list").append(n);
		})
        
}
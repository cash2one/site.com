var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {
	get_list();
    get_special_list();
    //getCartCount(t);
    //$("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
});
function get_list() {

	
	$.getJSON(ApiUrl + "/index.php?act=goods_class" ,
		function(e) {
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.class_list = []
			}
			var classification_list_html = template.render("classification_list_model", e.datas);
			$("#classification_list").append(classification_list_html);
		})
}
function get_special_list(){

       $.getJSON(ApiUrl + "/index.php?act=index&op=special_list_1_5" , {'key':key},
		function(b) {
			if (!b){
				b = [];
				b.datas = [];
				b.datas.banner = []
				b.datas.hot_topics = []
				b.datas.guess_like = []
				b.datas.micro_personal_class_list = []
			}
			
                        
			var hot_topic_html = template.render("hot_topic_model", b.datas);
			var you_may_like_html = template.render("you_may_like_model", b.datas);
			var banner_html = template.render("banner_model", b.datas);
			var micro_personal_class_list_html = template.render("micro_personal_class_list_model", b.datas);
			$("#hot_topic").append(hot_topic_html);
			$("#you_may_like").append(you_may_like_html);
			$("#banner").append(banner_html);
			$("#micro_personal_class_list").append(micro_personal_class_list_html);
		})
        
}
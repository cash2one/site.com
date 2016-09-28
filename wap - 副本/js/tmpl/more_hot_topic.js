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

       $.getJSON(ApiUrl + "/index.php?act=index&op=more_hot_topics" , 
		function(b) {
			if (!b){
				b = [];
				b.datas = [];
				b.datas.hot_topics = []
			}
			
                        
			var hot_topic_html = template.render("hot_topics_model", b.datas);
			$("#hot_topics_list").append(hot_topic_html);

		})
        
}
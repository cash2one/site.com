var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {
	get_list();
    get_special_list();
    get_daily_list();
     $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_daily_list();
			
        }
    });
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
function get_daily_list() {
    var page = 4;
	
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;

    $.getJSON(ApiUrl + "/index.php?act=cms_article&op=daily_articles" + window.location.search.replace("?", "&"), param,
        function (data) {

            if (!data) {
                data = [];
                data.datas = [];
                data.datas.cms_article_list = [];
				
            }
            $(".loading").remove();
            curpage++;
            
			var daily_article_html = "";
			
			
          
			
			daily_article_html = template.render("daily_article_model", data.datas);
		       $("#daily_article").append(daily_article_html);
			
			
            hasmore = data.hasmore;
        }
    )
}
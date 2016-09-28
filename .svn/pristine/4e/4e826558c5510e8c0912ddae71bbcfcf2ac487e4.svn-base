var page = pagesize;
var curpage = 1;
var hasmore = true;
var t= getCookie("key");
$(function() {
 
    get_list();
    getCartCount(t);
    $("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });
});
function get_list() {
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;

    $.getJSON(ApiUrl + "/index.php?act=cms&op=article_list&class_id=5" + window.location.search.replace("?", "&"), param,
    function(e) {
        if (!e) {
            e = [];
            e.datas = [];
            e.data.article_list = [];
        }
        
        $(".loading").remove();
        curpage++;
        var r = template.render("article_body", e);
        $("#article_list").append(r);
        hasmore = e.hasmore
    })
     $.getJSON(ApiUrl + "/index.php?act=cms&op=article_list&class_id=4" + window.location.search.replace("?", "&"), param,
    function(a) {
        if (!a) {
            a = [];
            a.datas = [];
            a.data.article_list = [];
        }
        
        $(".loading").remove();
        curpage++;
        var html = template.render("review_body", a);
        $("#review").append(html);
        hasmore = a.hasmore
    })
}

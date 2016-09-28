var gc_id = getQueryString("gc_id");
var gc_id2 = getQueryString("gc_id2");
var page = pagesize;
var curpage = 1;
var hasmore = true;
$(function(){
	$.ajax({
		url:ApiUrl+"/index.php?act=goods_class&gc_id="+gc_id,
		type:'get',
		dataType:'json',
		success:function(e){
                     if (!e) {
				e = [];
				e.datas = [];
				e.datas.class_list = []
			}
			var html = template.render("home_body", e);
			$("#product_list").append(html);
                        $(".cat-2-item").click(function(){
                            location.href = WapSiteUrl+"/tmpl/window_shopping_cat.html?gc_id="+$(this).attr('gc_id');
                        });
                    }
            });
    });
    
 var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var keyword = decodeURIComponent(getQueryString("keyword"));
var gc_id = getQueryString("gc_id");
var b_id = getQueryString("b_id");
var key = getQueryString("key");
var order = getQueryString("order");
var area_id = getQueryString("area_id");
var price_from = getQueryString("price_from");
var price_to = getQueryString("price_to");
var own_shop = getQueryString("own_shop");
var gift = getQueryString("gift");
var groupbuy = getQueryString("groupbuy");
var xianshi = getQueryString("xianshi");
var virtual = getQueryString("virtual");
var ci = getQueryString("ci");
var myDate = new Date;
var searchTimes = myDate.getTime();
$(function() {
    $.animationLeft({
        valve: "#search_adv",
        wrapper: ".nctouch-full-mask",
        scroll: "#list-items-scroll"
    });
    $("#header").on("click", ".header-inp",
    function() {
        location.href = WapSiteUrl + "/tmpl/search.html?keyword=" + keyword
    });
    if (keyword != "") {
        $("#keyword").html(keyword)
    }
    $("#show_style").click(function() {
        if ($("#product_list").hasClass("grid")) {
            $(this).find("span").removeClass("browse-grid").addClass("browse-list");
            $("#product_list").removeClass("grid").addClass("list")
        } else {
            $(this).find("span").addClass("browse-grid").removeClass("browse-list");
            $("#product_list").addClass("grid").removeClass("list")
        }
    });
    $("#sort_default").click(function() {
        if ($("#sort_inner").hasClass("hide")) {
            $("#sort_inner").removeClass("hide")
        } else {
            $("#sort_inner").addClass("hide")
        }
    });
    $("#nav_ul").find("a").click(function() {
        $(this).addClass("current").parent().siblings().find("a").removeClass("current");
        if (!$("#sort_inner").hasClass("hide") && $(this).parent().index() > 0) {
            $("#sort_inner").addClass("hide")
        }
    });
    $("#sort_inner").find("a").click(function() {
        $("#sort_inner").addClass("hide").find("a").removeClass("cur");
        var e = $(this).addClass("cur").text();
        $("#sort_default").html(e + "<i></i>")
    });
    $("#product_list").on("click", ".goods-store a",
    function() {
        var e = $(this);
        var r = $(this).attr("data-id");
        var i = $(this).text();
        $.getJSON(ApiUrl + "/index.php?act=store&op=store_credit", {
            store_id: r
        },
        function(t) {
            var a = "<dl>" + '<dt><a href="store.html?store_id=' + r + '">' + i + '<span class="arrow-r"></span></a></dt>' + '<dd class="' + t.datas.store_credit.store_desccredit.percent_class + '">描述相符：<em>' + t.datas.store_credit.store_desccredit.credit + "</em><i></i></dd>" + '<dd class="' + t.datas.store_credit.store_servicecredit.percent_class + '">服务态度：<em>' + t.datas.store_credit.store_servicecredit.credit + "</em><i></i></dd>" + '<dd class="' + t.datas.store_credit.store_deliverycredit.percent_class + '">发货速度：<em>' + t.datas.store_credit.store_deliverycredit.credit + "</em><i></i></dd>" + "</dl>";
            e.next().html(a).show()
        })
    }).on("click", ".sotre-creidt-layout",
    function() {
        $(this).hide()
    });
    get_list();
    get_salenum();
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
    if (gc_id != "") {
        param.gc_id = gc_id
    } else if (keyword != "") {
        param.keyword = keyword
    } else if (b_id != "") {
        param.b_id = b_id
    }
    if (key != "") {
        param.key = key
    }
    if (order != "") {
        param.order = order
    }
    $.getJSON(ApiUrl + "/index.php?act=goods&op=goods_list" + window.location.search.replace("?", "&"), param,
    function(e) {
        if (!e) {
            e = [];
            e.datas = [];
            e.datas.goods_list = []
        }
        $(".loading").remove();
        curpage++; 
        var r = template.render("goods_body", e);
        $("#goods_list").append(r);
        hasmore = e.hasmore
    })
   
}
function get_salenum(){
     $.getJSON(ApiUrl + "/index.php?act=goods&op=goods_list&key=2&page=6" ,
    function(e) {
        if (!e) {
            e = [];
            e.datas = [];
            e.datas.goods_list = []
        }
        var html = template.render("salenum_body", e);
	$("#goods_salenum").append(html);
    })
}

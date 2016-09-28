var gc_id = getQueryString("gc_id");
var store_id = getQueryString("store_id");
var page = pagesize;
var curpage = 1;
var hasmore = true;
var e = getCookie("key");
$(function() {
    var a = 0;
    get_store_list()
    get_class_list();
    get_list();
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });
    getCartCount(e);
    $("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
});
function get_store_list() {

	
	$.getJSON(ApiUrl + "/index.php?act=store&op=store_list" ,
		function(e) {
			if (!e) {
				e = [];
				e.datas = [];
			}
			var r = template.render("store_body", e);
			$("#store_list").append(r);
                       
		})
}
function get_list() {
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
     if (key != "") {
        param.key = key
    }
    param.curpage = curpage;
if (gc_id != "") {
        param.class_id = class_id
    }
    
    $.getJSON(ApiUrl + "/index.php?act=store&op=store_bind_class_list" + window.location.search.replace("?", "&"), param,
    function(a) {
        if (!a) {
            a = [];
            a.datas = [];
        }
        
        $(".loading").remove();
        curpage++;
        var r = template.render("body", a);
        
        $("#list").append(r);
        hasmore = a.hasmore
         $(".categroy").click(function(){
           location.href = WapSiteUrl+"/tmpl/art_make.html?class_id="+$(this).attr('class_id');
         });
         if (a) {
               
                 $(".store_notcollect").show();
                $(".store_collected").hide()
            } else {
                 $(".store_notcollect").hide();
                $(".store_collected").show()
            }
            
       
            $(".store_notcollect").click(function () {
                 var n = $(this).attr("data-id");
              var t = favoriteStore(n);
        
            if (t) {
                $("#store_notcollect_"+n).hide();
                $("#store_collected_"+n).show();
                var o;
                var s = (o = parseInt($(".store_favornum_hide_"+n).val())) > 0 ? o + 1 : 1;
                $(".store_favornum_"+n).html(s);
                $(".store_favornum_hide_"+n).val(s)
            }
        });
        $(".store_collected").click(function () {
             var n = $(this).attr("data-id");
            var t = dropFavoriteStore(n);
            if (t) {
                $("#store_collected_"+n).hide();
                $("#store_notcollect_"+n).show();
                var o;
                var s = (o = parseInt($(".store_favornum_hide_"+n).val())) > 1 ? o - 1 : 0;
                $(".store_favornum_"+n).html(s);
                $(".store_favornum_hide"+n).val(s)
            }
        })
         
    })
}
function get_class_list() {

	
	$.getJSON(ApiUrl + "/index.php?act=goods_class" ,
		function(e) {
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.class_list = []
			}
			var r = template.render("class_body", e);
			$("#class_list").append(r);
                 document.getElementById("sx-jiantou").onclick=function(){
                    this.previousElementSibling.style.display =this.previousElementSibling.style.display=="block"?"none":"block";
                    console.log(this.children[0].src)
                    this.children[0].src=this.children[0].src=="../img/down_icon.png?1"?"../img/up_icom.png?1":"../img/down_icon.png?1";
                  }
		})
                
                
}

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

    $.getJSON(MobileUrl + "/index.php?act=store&op=store_list" + window.location.search.replace("?", "&"), param,
    function(e) {
        if (!e) {
            e = [];
            e.datas = [];
        }
        $(".loading").remove();
        curpage++;
        var r = template.render("store_body", e);
        
        $("#store_list").append(r);
             var n = $(this).attr("data-id");
                 var t = favoriteStore(n);
                 console.log(n);
       var dddian =$(".dddian");
          for(var k =0,len=dddian.length;k< len;k++){
            dddian[k].onclick=function(){
                this.nextElementSibling.style.display=this.nextElementSibling.style.display=="block"?"none":"block";
     
            }
        }
    })
}

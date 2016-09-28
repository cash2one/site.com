var page = pagesize;
var curpage = 1;
var hasmore = true;
var price_id = getQueryString("price_id");
var sex_id = getQueryString("sex_id");
var year_id = getQueryString("year_id");
var relationship_id = getQueryString("relationship_id");
var scenes_id = getQueryString("scenes_id");
$(function () {
    get_array();
    get_commend_list();
    get_list();
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });
})
function get_list() {
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false
    param = {};
    param.page = page;
    param.curpage = curpage;
    
      if(price_id){
    param.price_id = price_id;
    }
        if(sex_id){
    param.sex_id = sex_id;
    }
        if(year_id){
    param.year_id = year_id;
    }
        if(relationship_id){
    param.relationship_id = relationship_id;
    }
        if(scenes_id){
    param.scenes_id = scenes_id;
    }
    $.getJSON(ApiUrl + "/index.php?act=happy_send&op=index", param,
            function (e) {
                if (!e) {
                    e = [];
                    e.datas = [];
                }
                $(".loading").remove();
                curpage++;
                var r = template.render("home_body", e);
                $("#product_list").append(r);
                 hasmore = e.hasmore
            })
}
function get_commend_list() {


    $.getJSON(ApiUrl + "/index.php?act=happy_send&op=commend_list",
            function (a) {
                if (!a) {
                    a = [];
                    a.datas = [];
                }
                var x = template.render("commend_body", a);
                console.log(a);
                $("#commend_list").append(x);
            })
}
function get_array() {
    $.getJSON(ApiUrl + "/index.php?act=happy_send&op=array", function (e) {
        if (!e) {
            e = [];
            e.datas = [];
        }
        var r = template.render("array_body", e);
                console.log(e);
                $("#array_list").append(r);
        return e
    })
}

function init_get_list(a, b,c,d,e) {
    $("#product_list").html("");
     $("#footer").removeClass("posa");
    price_id = a;
    relationship_id = b;
    scenes_id =c;
    sex_id =d;
    year_id = e;
    
    curpage = 1;
    hasmore = true;
    get_list();
}
    
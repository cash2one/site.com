$(function () {
    Array.prototype.unique = function () {
        var e = [];
        for (var t = 0; t < this.length; t++) {
            if (e.indexOf(this[t]) == -1)e.push(this[t])
        }
        return e
    };
    var e = decodeURIComponent(getQueryString("keyword"));
    if (e) {
        $("#keyword").val(e);
        writeClear($("#keyword"))
    }
    $("#keyword").on("input", function () {
        var e = $.trim($("#keyword").val());
        if (e == "") {
            $("#search_tip_list_container").hide()
        } else {
            $.getJSON(ApiUrl + "/index.php?act=goods&op=auto_complete", {term: $("#keyword").val()}, function (e) {
                if (!e.datas.error) {
                    var t = e.datas;
                    t.WapSiteUrl = WapSiteUrl;
                    if (t.list.length > 0) {
                        $("#search_tip_list_container").html(template.render("search_tip_list_script", t)).show()
                    } else {
                        $("#search_tip_list_container").hide()
                    }
                }
            })
        }
    });
    $(".input-del").click(function () {
        $(this).parent().removeClass("write").find("input").val("")
    });
    template.helper("$buildUrl", buildUrl);

    select_goods_list();
});

//查询艺品记录
function select_goods_list() {
    
     $.getJSON(ApiUrl + "/index.php?act=index&op=search_key_list", function (e) {
        var t = e.datas;
        t.WapSiteUrl = WapSiteUrl;
         t.yipincss = 1;
         t.pinpaicss = 0;
        $("#select_list").html(template.render("select_list_model", t));
        $("#history_list").html(template.render("history_list_model", t));
        
        $('#store').click(function() {
            
            select_store_list();
            
        });
    });
    
}

//查询品牌记录
function select_store_list() {
    
     $.getJSON(ApiUrl + "/index.php?act=index&op=search_brand_key_list", function (e) {
        var t = e.datas;
        t.WapSiteUrl = WapSiteUrl;
         console.log(t);
         t.yipincss = 0;
         t.pinpaicss = 1;
        $("#select_list").html(template.render("select_list_model", t));
        $("#history_list").html(template.render("history_list_model", t));
        
        $('#goods').click(function() {
            
            select_goods_list();
            
        });
        
    });
    
}

//删除历史记录
function delete_history(obj) {
    
    $(obj).parent().css("display","none");
    
}

//清空所有历史记录
function remove_all_history(obj) {
    
    $(obj).prev().css("display","none");
    
}

//清空搜索
function remove_keyword() {
    
    $('#keyword').val("");
    
}

//搜索
function select_keyword() {

    if ($("#keyword").val() == "") {
        window.location.href = buildUrl("keyword", getCookie("deft_key_value") ? getCookie("deft_key_value") : "")
    } else {
        window.location.href = buildUrl("keyword", $("#keyword").val());
        addCookie('his_sh',$("#keyword").val(),144);
    }

}


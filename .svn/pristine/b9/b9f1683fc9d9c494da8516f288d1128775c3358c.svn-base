var page = 5;
var curpage = 1;
var hasmore = true;

$(function () {

    get_list();


    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list();
          

        }
    });


    $("#def_sort").click(function () {

        window.location.reload();



    });


    $("#new_sort").click(function () {
        $(".loading").remove();
        
        if (!hasmore) {
            return false
        }
        hasmore = false;
     
        var curpage = 1;

        $.ajax({
            url: ApiUrl + "/index.php?act=index&op=designers_1_5_3",
            type: 'GET',
            dataType: 'json',
            data: {order: '2', curpage: curpage},
            error: function () {


            },
            success: function (result) {

                var html = '';
                $("#store2").css('display', 'block');
                $("#store").css('display', 'none');
                html += template.render("store_model2", result);
                $("#store").html("");
                $("#store2").html(html);

              
                hasmore = result.hasmore;

                $(window).scroll(function () {
                
                    if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
           
                        $(".loading").remove();
                        curpage++;
                        if (curpage <= result.page_total) {
                            $.ajax({
                                url: ApiUrl + "/index.php?act=index&op=designers_1_5_3",
                                type: 'GET',
                            
                                dataType: 'json',
                                data: {order: '2', curpage: curpage},
                                error: function () {
                                   
                                },
                                success: function (result) {



                                    var html = '';
                              
                                    html = template.render("store_model2", result);
                                    $("#store").html("");

                                    $("#store2").append(html);

                                 
                                }

                            });
                        }

                    }


                });


            }

        });


    });
});

//获取设计师品牌列表
function get_list() {

    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;


    $.getJSON(ApiUrl + "/index.php?act=index&op=designers_1_5_3" + window.location.search.replace("?", "&"), param,
            function (data) {

                if (!data) {
                    data = [];
                  

                }
                $(".loading").remove();
                curpage++;

                var store_html = "";
                store_html = template.render("store_model", data);
                $("#store").append(store_html);

                hasmore = data.hasmore;
            }
    )
}






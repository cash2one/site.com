
var hasmore = true;

$(function () {

    get_list();

/*
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list();

        }
    });
    
   */
  $("#def_sort").click(function(){
 

     $.ajax({
                url: ApiUrl + "/index.php?act=index&op=designers_1_5_3&order=",
                type: 'get',
                //cache: false,
                //contentType: "application/json;charset=utf-8",
                dataType: 'json',
                data: {order: ''},
                error: function () {
                  //alert("no");  
                   
                },
                success: function (data) {
                  $("#store").html("");
                  get_list();

                }

            });
        
        });
    $("#new_sort").click(function(){
 

     $.ajax({
                url: ApiUrl + "/index.php?act=index&op=designers_1_5_3&order=",
                type: 'get',
                //cache: false,
                //contentType: "application/json;charset=utf-8",
                dataType: 'json',
                data: {order: 2},
                error: function () {
                  //alert("no");  
                   
                },
                success: function (data) {
                  //alert(data);
                  $("#store").html("");
                 get_new_list();
                
                 
                 

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



    $.getJSON(ApiUrl + "/index.php?act=index&op=designers_1_5_3",
            function (data) {

                if (!data) {
                    data = [];
                    //data.datas = [];

                }
                $(".loading").remove();


                var store_html = "";
                store_html = template.render("store_model", data);
                $("#store").append(store_html);
               
                hasmore = data.hasmore;
            }
    )
}

//获取最新设计师品牌列表
function get_new_list() {
    
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;



    $.getJSON(ApiUrl + "/index.php?act=index&op=designers_1_5_3&order=2",
            function (data) {

                if (!data) {
                    data = [];
                    //data.datas = [];

                }
                $(".loading").remove();


                var store_html = "";
                store_html = template.render("store_model", data);
                $("#store").append(store_html);
               
                hasmore = data.hasmore;
            }
    )
}




var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {
    get_list();
    get_special_list();
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
        }
    )
}
function get_special_list(){

    /**
       * 1、html ：买手笔记模型数据
       * 2、adv_list_html ：头部滚动模型数据
       * 3、Designer_brand_html ：设计师品牌模型数据
       * 4、Notes_ingenuity_html ：匠心手记模型数据
       * 5、goods_new_html ：最新单品模型数据
       * 6、you_like_html ：猜你喜欢模型数据
       * 7、goods_popular_html ：心水尖货模型数据
       *
       * last update by lizh 16:12 2016/7/6
       */
    $.ajax({
        
        url: MobileUrl + "/index.php?act=index&op=index_1_5",
        type: 'GET',
        data: {'key': key},
        dataType: 'json',
        
        success: function(result) {
            var data = result.datas;
            var Designer_brand_html = '';
            Designer_brand_html += template.render("Designer_brand_model", data);
            $("#Designer_brand").html(Designer_brand_html);

        }
    });
        
}
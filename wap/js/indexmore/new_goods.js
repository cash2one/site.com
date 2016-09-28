var page = 10;
var curpage = 1;
var hasmore = true;

$(function () {

    get_list();
	
    
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list();
			
        }
    });
	
});

//获取最新单品
function get_list() {
	
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;

    $.getJSON(ApiUrl + "/index.php?act=index&op=new_goods_1_5_3" + window.location.search.replace("?", "&"), param,
        function (data) {

            if (!data) {
                data = [];
                data.datas = [];
                data.datas.goods_head = [];
				data.datas.goods_list = [];
				data.datas.banner = []
            }
            $(".loading").remove();
            curpage++;
            
			var banner_head_html = "";
			var goods_head_html = "";
			var banner_other_html = "";
			var goods_left_html = "";
			var goods_right_html = "";
			
          
			
				banner_head_html = template.render("banner_head_model", data.datas);
				$("#banner_head").append(banner_head_html);
				goods_head_html = template.render("goods_head_model", data.datas);
				$("#goods_head").append(goods_head_html);
			
			
			banner_other_html = template.render("banner_other_model", data.datas);
            $("#banner_other").append(banner_other_html);
			goods_left_html = template.render("goods_left_model", data.datas);
            $("#goods_left").append(goods_left_html);
			goods_right_html = template.render("goods_right_model", data.datas);
            $("#goods_right").append(goods_right_html);
			
            hasmore = data.hasmore;
        }
    )
}

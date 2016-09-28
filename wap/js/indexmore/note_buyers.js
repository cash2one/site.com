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

//获取买手笔记列表
function get_list() {
	
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;

    $.getJSON(ApiUrl + "/index.php?act=index&op=note_buyers_1_5_3" + window.location.search.replace("?", "&"), param,
        function (data) {

            if (!data) {
                data = [];
                data.datas = [];
                data.datas.special_list = []
            }
            $(".loading").remove();
            curpage++;
            var note_buyers_list_html = "";
            note_buyers_list_html = template.render("note_buyers_list_model", data.datas);
            $("#note_buyers_list").append(note_buyers_list_html);
            hasmore = data.hasmore;
        }
    )
}
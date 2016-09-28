var key = getCookie("key");
var page = pagesize;
var curpage = 1;
var hasmore = true;
$(function () {

    get_received_list();
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_received_list()
        }
    });
});

function get_received_list() {
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;
    $.ajax({
        type: 'GET',
        url: ApiUrl + '/index.php?act=member_greeting_cards&op=reciver_list',
        dataType: 'json',
        data: {key: key, page: page, curpage: curpage},
        success: function (data) {
            if (!data) {
                data.datas = [];
            }
            $(".loading").remove();
            curpage++;
            var reciver_list_html = "";
            reciver_list_html = template.render("reciver_list_model", data);
            $("#reciver_list").append(reciver_list_html);
            hasmore = data.hasmore
        }
    });

}
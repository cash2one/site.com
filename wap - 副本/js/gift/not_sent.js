var key = getCookie("key");
var page = pagesize;
var curpage = 1;
var hasmore = true;
$(function () {

    get_not_sent_list_html();
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_not_sent_list_html()
        }
    });
});

function get_not_sent_list_html() {
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
        url: ApiUrl + '/index.php?act=member_greeting_cards&op=order_list',
        dataType: 'json',
        data: {key: key, page: page, curpage: curpage},
        success: function (data) {
            if (!data) {
                data.datas = [];
            }
            $(".loading").remove();
            curpage++;
            var not_sent_list_html = "";
            not_sent_list_html = template.render("not_sent_model", data);
            $("#not_sent_list").append(not_sent_list_html);
            hasmore = data.hasmore
        }
    });

}
function jump_page() {
    var order_id = $('#xuanzhong').attr("value");
    window.location.href = WapSiteUrl + '/gift/make_card.html' + '?order_id=' + order_id;

}
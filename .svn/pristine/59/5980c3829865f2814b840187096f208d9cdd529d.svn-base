var key = getCookie("key");
var order_id = getQueryString('order_id');
$(function () {

    get_cart_list();

});

function get_cart_list() {

    $.ajax({
        type: 'GET',
        url: ApiUrl + '/index.php?act=get_greeting_cards&op=get_service_card_file',
        data: {key: key},
        dataType: 'json',
        success: function (data) {

            if (!data) {
                data.datas = [];
            }

            var card_list_html = "";
            card_list_html = template.render("card_list_model", data);
            $("#card_list").append(card_list_html);

        }
    });

}

//创建贺卡
function create_card() {

    var message = $('.swiper-slide-active').children('div').find('textarea[name="content"]').val();
    var image = $('.swiper-slide-active').children('div').find('input[name="img_name"]').val();

    $.ajax({
        type: 'POST',
        url: ApiUrl + '/index.php?act=member_greeting_cards&op=card_save',
        data: {'message': message, 'image': image, 'order_id': order_id, 'key': key},
        dataType: 'json',
        success: function (a) {
            $.sDialog({
                skin: "red",
                content: a.datas.message,
                okBtn: true,
                cancelBtn: true,
                okFn: function () {
                   
                },
                cancelFn: function () {
                    window.location.href = WapSiteUrl;
                }

            })

        }
    });

}

function return_last_page() {

    window.location.href = WapSiteUrl + '/gift/querenjieshou.html' + '?name=' + name + '&src=' + src + '&m=' + member_id + '&t=' + t;

}
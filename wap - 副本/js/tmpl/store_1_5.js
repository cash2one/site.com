
var id = getQueryString('store_id');

$(function () {

    $.ajax({
        type: "GET",
        url: ApiUrl + "/index.php?act=store&op=store_detail_1_5",
        data: {store_id: id},
        dataType: "json",
        success: function (data) {
            console.log(data);
            var store_detail_html = "";
			store_detail_html =  template.render("store_detail_model", data.datas);
			$("#store_detail").append(store_detail_html);
			$("#set_head_store_name").text(data.datas.store_info.store_name);
        }
    });

});
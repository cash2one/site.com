var key = getCookie("key");
var name = getQueryString('n');
var member_id = getQueryString('m');
var time = getQueryString('t');

$(function() {

    get_goods_info();
	
});

function get_goods_info() {
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=get_goods_info',
		data : {'m':member_id,'t':time},
		dataType : 'json',
		
		success : function(data) {
			
			if (!data) {
				data.datas = [];
				data.datas.goods_id = "";
				data.datas.goods_name = "";
				data.datas.goods_spec = "";
				data.datas.goods_image = "";
			}
			
			var goods_info_html = "";
			goods_info_html = template.render("goods_info_model", data.datas);
			$("#goods_info").prepend(goods_info_html);

		}
	});
	
}
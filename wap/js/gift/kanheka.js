var key = getCookie("key");
var name = getQueryString('n');
var member_id = getQueryString('m');
var t = getQueryString('t');

$(function() {

    get_cart_info();
	
});

function get_cart_info() {
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=get_cart_info',
		data : {'m':member_id,'t':t},
		dataType : 'json',
		
		success : function(data) {
			
			if (!data) {
				data.datas = [];
				data.datas.message = "";
				data.datas.datas.member_name = "";
				data.datas.datas.mp3 = "";
				data.datas.datas.image = "";
			}
			
			var card_info_html = "";
			card_info_html = template.render("card_info_model", data.datas);
			$("#card_info").append(card_info_html);

		}
	});
	
}
var key = getCookie("key");
var member_id = getQueryString('m');
var time = getQueryString('t');
var name = getQueryString('name');
var src = getQueryString('src');

$(function() {

    get_cart_info();
	
});

function get_cart_info() {

	$('#member_name').text('@'+decodeURI(name));
	$('#goods_img').attr("src",src);
	
	$.ajax({
		
		type : 'POST',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=remove_key',
		data : {"t":time,"m":member_id},
		dataType : 'json',
		
		success : function(data) {
			console.log('ok');
		},
		
		error : function(data) {
			console.log('error');
		}
		
	});
	
}
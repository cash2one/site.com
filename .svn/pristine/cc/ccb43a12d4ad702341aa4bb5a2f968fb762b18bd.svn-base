var key = getCookie("key");
var name = getQueryString('n');
var member_id = getQueryString('m');
var time = getQueryString('t');

$(function() {

    get_goods_list();
	
});

function get_goods_list() {
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=reset_goods',
		data : {'m':member_id,'t':time},
		dataType : 'json',
		
		success : function(data) {
			
			if (!data) {
				data.datas = [];
				data.datas.goods_list = [];
			}
			
			var goods_list_select_html = "";
			goods_list_select_html = template.render("goods_list_select_model", data.datas);
			$("#goods_list_select").append(goods_list_select_html);

		}
	});
	
}

//选定商品
function select_goods() {
	
	var goods_id = $('.flip-current').find('input[type="hidden"]').val();
	console.log(goods_id);
	
	$.ajax({
		
		type : 'POST',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=update_order_goods',
		data : {'m':member_id,'t':time,'g':goods_id},
		dataType : 'json',
		
		success : function(data) {

			window.location.href = WapSiteUrl + '/gift/tianxieziliao.html' + '?m='+member_id+'&t='+time;

		}
	});
	
}
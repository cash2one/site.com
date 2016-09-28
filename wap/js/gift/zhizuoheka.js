var key = getCookie("key");
var member_id = getQueryString('m');
var t = getQueryString('t');
var src = getQueryString('src');
var name = getQueryString('name');

$(function() {

    get_cart_list();
	
});

function get_cart_list() {
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=get_service_card_file',
		data : {'m':member_id,'t':t},
		dataType : 'json',
		
		success : function(data) {
			
			if (!data) {
				data.datas = [];
			}
			
			var card_list_html = "";
			card_list_html = template.render("card_list_model", data);
			$("#card_list").append(card_list_html);

		}
	});
	
}

//创建答礼卡
function create_card() {
	
	var content = $('.swiper-slide-active').children('div').find('textarea[name="content"]').val();
	var img_name = $('.swiper-slide-active').children('div').find('input[name="img_name"]').val();
	
	$.ajax({
		
		type : 'POST',
		url : ApiUrl + '/index.php?act=get_greeting_cards&op=create_card',
		data : {'content':content,'img_name':img_name,'card_type':'r','order_id':member_id,'key':key,'mp3':"",'is_see':1},
		dataType : 'json',
		
		success : function(data) {
			
			$.sDialog({
				
				skin: "red",
				content: data.datas.message,
				okBtn: true,
				cancelBtn: true,
				okFn: function () {
                                    //window.location.href = WapSiteUrl + '/gift/querenjieshou.html' + '?name='+name+'&src='+src+'&m='+member_id+'&t='+t;
				},
				cancelFn: function () {
                                    //window.location.href = WapSiteUrl + '/gift/querenjieshou.html' + '?name='+name+'&src='+src+'&m='+member_id+'&t='+t;
				}

			})

		}
	});
	
}

function return_last_page() {
	
	window.location.href = WapSiteUrl + '/gift/querenjieshou.html' + '?name='+name+'&src='+src+'&m='+member_id+'&t='+t;
	
}
var key = getCookie("key");

$(function () {

    get_list();


});

/**
 * 获取礼品卡列表
 * add by lizh 12:11 2016/8/1
 */ 
function get_list() {
	
	$.ajax({
		url: ApiUrl + "/index.php?act=card&op=get_card_list",
		type: "post",
		data: {'key': key},
		dataType: "json",
		success: function (data) {
			if (checkLogin(data.login)) {
				
				var gift_card_list_html = "";
				gift_card_list_html = template.render("gift_card_list_model", data.datas);
				$("#gift_card_list").append(gift_card_list_html);

				$("#ToBuyStep2").click(function() {

					set_card_order();

				})
				
			}
		}
	})
	
}

/**
 * 设置礼品卡用户信息
 * add by lizh 11:30 2016/8/3
 */
 function set_gift_card_member_data(member_id,member_name) {
	 
	$('#set_gift_card_member_name').text(member_name);
	$('#set_gift_card_member_id').val(member_id);

	document.getElementsByClassName("xuanzhehaoyou")[0].style.display = "none"
	 
 }
 
/**
 * 设置礼品卡价格
 * add by lizh 11:30 2016/8/3
 */
 function get_card_price(card_price,id,obj) {

	$('#set_card_price').val(card_price);
	$('#set_card_id').val(id);
	var colors=document.getElementById("kaqian").children;
	$('#kaqian li').each(function(){
		
		this.className="";
		
	})

	obj.className="lihover";

 }

/**
 * 创建礼品卡订单
 * add by lizh 16:02 2016/8/4
 */
function set_card_order() {
	
	if(!checkFromData()) {
		
		return false;
		
	}
	
	var get_gift_card_form_data = $('#get_gift_card_form_data').serialize();
	get_gift_card_form_data += '&key='+key;

	$.ajax({
		url: ApiUrl + "/index.php?act=member_buy&op=buy_card",
		type: "post",
		data: get_gift_card_form_data,
		dataType: "json",
		success: function (data) {
			toPay(data.datas.pay_sn, "member_buy", "card_pay")
		}
	})
	
 }
 
 function checkFromData() {
	
	var card_price = $('#set_card_price').val();
	var member_id = $('#set_gift_card_member_id').val();
	if(card_price == 0 || member_id == 0) {
		
		$('#error_from_data').text('*请选择赠送金额与赠送人');
		return false;
	}
	
	$('#error_from_data').text('');
	return true;
	 
 }
$(function() {

	var key = getCookie("key"); //登录状态
	var member_id = getQueryString("member_id"); //登录状态
	/**
	 * last update by lizh 10:30 2016/8/13
	 */
    $.ajax({
		
        type: 'GET',    
        url: ApiUrl + "/index.php?act=member_index_other&op=index_1_5",
		data: {'key': key,'member_id':member_id},
        dataType: 'json',
        
        success: function(result) {
            
			var other_member_html = '';
			other_member_html += template.render("other_member_model", result.datas);
			$("#other_member").html(other_member_html);
			
        }
    });

});

/**
 * 用户关注
 * add by lizh 14:14 2014/7/13
 */
function member_attention(obj,id) {
	
	var key = getCookie('key');
	//console.log(obj.previousElementSibling.children[0].innerHTML);
	
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return;
		
	}
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=sns_friend&op=add_follow',
		data : {'member_id':id,'key':key},
		dataType : 'json',
		
		success : function(data) {
			
			if(data.datas.result) {
				
				layer.tips(data.datas.message, obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				
			} else {
				
				layer.tips(data.datas.message, obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
			}

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

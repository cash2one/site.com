var key = getCookie("key");
var personal_id = getQueryString("personal_id");

$(function () {

	getLikeList();
	
});

function getLikeList() {
	
	$.ajax({
		
		url: ApiUrl1 + "/index.php?act=micro&op=like_inspiration",
		type: "GET",
		dataType: "json",
		data: {'key': key,'personal_id':personal_id},
		
		success: function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
			}

			var like_html = "";
			like_html = template.render("like_model", data);
			$("#like").append(like_html);

		}
	})
}

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
			
			if(data.datas.result) {
				
				$(obj).html('<s>已关注</s>');
				
			}

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}


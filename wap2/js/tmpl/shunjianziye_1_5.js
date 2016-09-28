var id = getQueryString('personal_id');
var key = getCookie("key");

$(function () {

    /**
     * add by lizh 18:34 2016/7/12
	 * update by lizh 14:27 2016/7/27
     */ 
    $.ajax({
        url: ApiUrl1 + "/index.php?act=micro&op=inspirationDetail",
        type: 'get',
		data:{'personal_id':id,'key':key},
        dataType: 'json',
        success: function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.micro_personal_detail = [];
				data.datas.micro_comment_list = [];
				data.datas.guess_like = [];
			}
            var inspiration_info_html = '';
			inspiration_info_html = template.render("inspiration_info_model", data.datas);
			$("#inspiration_info").append(inspiration_info_html);
			
			var share_control_html = '';
			share_control_html = template.render("share_control_model", data.datas);
			$("#share_control").append(share_control_html);
			
			var user_comment_html = '';
			user_comment_html = template.render("user_comment_model", data.datas);
			$("#user_comment").prepend(user_comment_html);
			
			var featured_products_html = '';
			featured_products_html = template.render("featured_products_model", data.datas);
			$("#featured_products").append(featured_products_html);
			
			var footer_html = '';
			footer_html = template.render("footer_model", data.datas);
			$("#footer").append(footer_html);

		}
        
    });
	
	if(key != null) {
		
		get_like_list();
		
	}
	
	get_wx_shart();
	
});

/**
 * 用户点赞
 * add by lizh 17:06 2016/7/27
 */
function member_like(obj,id,flag) {
	
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return;
		
	}
	$.ajax({
		
		type : 'GET',
		url : ApiUrl1 + '/index.php?act=micro_like&op=like_save',
		data : {'like_id':id,'key':key},
		dataType : 'json',
		
		success : function(data) {
			
			layer.tips(data.datas.message, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			
			if(flag == 1) {
				
				if(data.datas['result']) {
				
					obj.children[1].innerHTML = data.datas['like_count'];
					
				}
				
			}

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

/**
 * 用户评论
 * add by lizh 11:28 2016/7/28
 */	
function send_info(){ 
	
	var key = getCookie('key');
	if(key == null) {
		
		location.href = WapSiteUrl + '/tmpl/member/login.html';
		return false;
		
	}
	
	var value = $('#send_info').val();
	console.log(value);
	if(value == null || value == "") {
		
		layer.tips('用户评论无法为空', $('#send_info'), {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return false;
		
	}
	
	$.ajax({
		
		type : 'POST',
		url : ApiUrl1 + '/index.php?act=micro_comment&op=comment_add',
		data : {'comment_message':value,'key':key,'personal_id':id},
		dataType : 'json',
		
		success : function(data) {

			if(data.datas.status == 1) {
				
				var user_comment_html = '';
				user_comment_html = template.render("user_comment_model_add_to", data.datas);
				$("#user_comment").prepend(user_comment_html);
				$('#send_info').val("");
				
			}
			
			layer.tips(data.datas.message, $('#send_info'), {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});

			n=0; 
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

/**
 * 用户评论点赞
 * add by lizh 14:51 2016/7/28
 */	
function comment_like(obj,comment_id){ 
	
	var key = getCookie('key');
	if(key == null) {
		
		location.href = WapSiteUrl + '/tmpl/member/login.html';
		return false;
		
	}

	$.ajax({
		
		type : 'POST',
		url : ApiUrl1 + '/index.php?act=micro_comment&op=comment_like',
		data : {'comment_id':comment_id,'key':key},
		dataType : 'json',
		
		success : function(data) {

			layer.tips(data.datas.message, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			
			obj.children[1].innerHTML = data.datas['like_count'];

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

/**
 * 我的橱窗接口
 * add by lizh 16:10 2016/7/30
 */
function get_like_list() {
	
    $.getJSON(ApiUrl1 + "/index.php?act=micro&op=getPersonalLike_wap_1_5",{'key':key},
		function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.goods_list = []
				data.datas.favorites_list = []
			}
			
			var showcase_list_html = "";
			showcase_list_html = template.render("showcase_list_model", data.datas);
			$("#tanchuk").html(showcase_list_html);
			
			$("#caozuot").click(function(){
				//console.log(document.getElementById("tanchuk_id"));
				document.getElementById("tanchuk_id").style.display="block";
			
			});
			
			$("#caozuot2").click(function(){
				//console.log(document.getElementById("tanchuk_id"));
				document.getElementById("tanchuk_id").style.display="block";
			
			});
			
		}
	)

}

/*
 * 用户收藏
 * add by lizh 14:33 2016/07/21
 */
function member_favorites(obj,id){
	
	personal_id = $('#set_personal_id').val();
	if(personal_id == 0) {
		
		layer.tips('异常操作', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
		
	}
	
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
	}
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=member_favorites_class&op=favorites_add',
		data : {'personal_id':personal_id,'key':key,'favorites_class_id':id},
		dataType : 'json',
		
		success : function(data) {
			
			layer.tips(data.datas.message, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
 
}

/*
 * 跳转新建橱窗
 * add by lizh 14:56 2016/07/21
 */
function create_favorites_class(obj,id){
	
	personal_id = $('#set_personal_id').val();
	if(personal_id == 0) {
		
		layer.tips('异常操作', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
		
	}
	
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
	}
	
	window.location.href = WapSiteUrl + '/tmpl/new_showcase.html?personal_id='+personal_id;
 
}


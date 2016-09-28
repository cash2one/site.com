var key= getCookie("key");
var get_data= getQueryString("class_id");

$(function() {
	get_list();
	get_like_list();
	get_wx_shart();

});
function get_list() {
	
	
	$.getJSON(ApiUrl + "/index.php?act=index&op=hot_topic_info_1_5" ,{'class_id':get_data},
		function(e) {
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.micro_personal = []	
			}
			
			e.datas.get_data = [];
			e.datas.get_data['class_id'] = get_data
			
			var personal_list_html = template.render("personal_list_model", e.datas);
			$("#personal_list").append(personal_list_html);
			
			var header_r_html = template.render("header_r_mode", e.datas);
			$("#header_r").html(header_r_html);
			//console.log(e.datas);
			
		})
}

/**
 * 橱窗列表
 * add by lizh 11:15 2016/8/6
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
			$("#tanchuk").append(showcase_list_html);

		}
	)
}

/**
 * 微信分享
 * add by lizh 11:33 2016/7/19
 */
function get_wx_shart() {
    $.getJSON(ApiUrl + "/index.php?act=wx_interface&op=get_wx_share_interface",{},
		function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.signPackage = [];
			}

			var wx_share_html = "";
			wx_share_html = template.render("wx_share_model", data.datas);
			$("#wx_share").append(wx_share_html);

		}
	)
}

/**
 * 用户关注
 * add by lizh 14:14 2014/7/13
 */
function member_attention(obj,id,state) {
	
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
			
			if(state == 2) {
				
				obj.previousElementSibling.children[0].innerHTML = '+' + data.datas.count_friend;
				
			}

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

/**
 * 用户点赞
 * add by lizh 14:14 2014/7/13
 */
function member_like(obj,id) {
	
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
			
			if(data.datas['result']) {
				
				obj.children[1].innerHTML = data.datas['like_count'];
				
			}
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}
/*
 * 用户收藏窗口
 * add by lizh 14:19 2016/07/21
 */
function member_favorites_window(obj,id){
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
	}

	document.getElementById("tanchuk").style.display="block";
	document.getElementById("set_personal_id").value=id;	

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

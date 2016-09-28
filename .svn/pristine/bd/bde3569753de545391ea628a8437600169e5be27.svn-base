var page = pagesize;
var t= getCookie("key");
var like_id= getQueryString("like_id");
var curpage = 1;
var hasmore = true;
var footer = false;
var myDate = new Date;
var searchTimes = myDate.getTime();
$(function () {
	
	get_like_list();
    get_list();
    get_wx_shart();
	
	//get_showcase_list();
    /* getCartCount(t);
	var showcase_list_html = "";
	showcase_list_html = template.render("showcase_list_model", "");
	$("#tanchuk").append(showcase_list_html); */
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });
	
});
function get_list() {
	
    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;

    $.getJSON(ApiUrl1 + "/index.php?act=micro&op=get_personal_list_wap_1_5" + window.location.search.replace("?", "&"), param,
		function (e) {
			
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.goods_list = []
			}
			
			
			$(".loading").remove();
			curpage++;
			var inspiration_list_html = "";
			inspiration_list_html = template.render("inspiration_list_model", e);
			$("#inspiration_list").append(inspiration_list_html);
			hasmore = e.hasmore
		}
	)
}
/**
 * 红人榜
 * add by lizh 11:33 2016/7/19
 */
function get_like_list() {
    $.getJSON(ApiUrl1 + "/index.php?act=micro&op=getPersonalLike_wap_1_5",{'key':t},
		function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.goods_list = []
				data.datas.favorites_list = []
			}

			var favorite_list_html = "";
			favorite_list_html = template.render("favorite_list_model", data);
			$("#favorite_list").append(favorite_list_html);
			
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
/* function get_wx_shart() {
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
} */

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
			
			if(state == 0) {
				
				$(obj).prev().text(data.datas.count_friend);
				
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

var ifm= document.getElementById("iframepage");

function get_wx_share(personal_id,commend_message,commend_image) {
	
	ifm.style.display="block";
	
	//分享到微信好友
	wx.onMenuShareAppMessage({
		title: '',
		desc: commend_message,
		link: WapSiteUrl+ '/tmpl/shunjianziye.html?personal_id='+personal_id,
		imgUrl: commend_image,
		trigger: function (res) {
			// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
			alert('用户点击发送给朋友');
		},
		success: function (res) {
			alert('已分享');
		},
		cancel: function (res) {
			alert('已取消');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//分享到微信朋友圈
	wx.onMenuShareTimeline({
		title: '',
		link: WapSiteUrl+ '/tmpl/shunjianziye.html?personal_id='+personal_id,
		imgUrl: commend_image,
		trigger: function (res) {
			// 不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回
			//alert('用户点击分享到朋友圈');
		},
		success: function (res) {
			alert('已分享');
		},
		cancel: function (res) {
			alert('已取消');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//分享到QQ好友
	wx.onMenuShareQQ({
		title: '',
		desc: commend_message,
		link: WapSiteUrl+ '/tmpl/shunjianziye.html?personal_id='+personal_id,
		imgUrl: commend_image,
		trigger: function (res) {
			alert('用户点击分享到QQ');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('已分享');
		},
		cancel: function (res) {
			alert('已取消');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//分享到QQ空间
	wx.onMenuShareQZone({
		title: '',
		desc: commend_message,
		link: WapSiteUrl+ '/tmpl/shunjianziye.html?personal_id='+personal_id,
		imgUrl: commend_image,
		trigger: function (res) {
			alert('用户点击分享到QZone');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('已分享');
		},
		cancel: function (res) {
			alert('已取消');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//分享到微博
	wx.onMenuShareWeibo({
		title: '',
		desc: commend_message,
		link: WapSiteUrl+ '/tmpl/shunjianziye.html?personal_id='+personal_id,
		imgUrl: commend_image,
		trigger: function (res) {
			alert('用户点击分享到微博');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('已分享');
		},
		cancel: function (res) {
			alert('已取消');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
}

 //**********设置高度*******
function reinitIframe(){
	ifm.height=document.documentElement.clientHeight;
}




/**
 * 微信分享配置
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

//微信分享
function get_wx_share(name, img, message,url_data) {
	
	/* var ifm= document.getElementById("iframepage");
	ifm.style.display="block"; */
	//console.log('ok');

	var url = WapSiteUrl+ url_data;
	
	//分享到微信好友
	wx.onMenuShareAppMessage({
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
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
		title: name,
		link: url,
		imgUrl: img,
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
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
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
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
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
		title: name,name,
		desc: message,
		link: url,
		imgUrl: img,
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

/* function reinitIframe(){
	var ifm= document.getElementById("iframepage");
	ifm.height=document.documentElement.clientHeight;
} */


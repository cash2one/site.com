

/**
 * ΢�ŷ�������
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

//΢�ŷ���
function get_wx_share(name, img, message,url_data) {
	
	/* var ifm= document.getElementById("iframepage");
	ifm.style.display="block"; */
	//console.log('ok');

	var url = WapSiteUrl+ url_data;
	
	//����΢�ź���
	wx.onMenuShareAppMessage({
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
		trigger: function (res) {
			// ��Ҫ������trigger��ʹ��ajax�첽�����޸ı��η�������ݣ���Ϊ�ͻ��˷��������һ��ͬ����������ʱ��ʹ��ajax�Ļذ��ỹû�з���
			alert('�û�������͸�����');
		},
		success: function (res) {
			alert('�ѷ���');
		},
		cancel: function (res) {
			alert('��ȡ��');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//����΢������Ȧ
	wx.onMenuShareTimeline({
		title: name,
		link: url,
		imgUrl: img,
		trigger: function (res) {
			// ��Ҫ������trigger��ʹ��ajax�첽�����޸ı��η�������ݣ���Ϊ�ͻ��˷��������һ��ͬ����������ʱ��ʹ��ajax�Ļذ��ỹû�з���
			//alert('�û������������Ȧ');
		},
		success: function (res) {
			alert('�ѷ���');
		},
		cancel: function (res) {
			alert('��ȡ��');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//����QQ����
	wx.onMenuShareQQ({
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
		trigger: function (res) {
			alert('�û��������QQ');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('�ѷ���');
		},
		cancel: function (res) {
			alert('��ȡ��');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//����QQ�ռ�
	wx.onMenuShareQZone({
		title: name,
		desc: message,
		link: url,
		imgUrl: img,
		trigger: function (res) {
			alert('�û��������QZone');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('�ѷ���');
		},
		cancel: function (res) {
			alert('��ȡ��');
		},
		fail: function (res) {
			alert(JSON.stringify(res));
		}
	});
	
	//����΢��
	wx.onMenuShareWeibo({
		title: name,name,
		desc: message,
		link: url,
		imgUrl: img,
		trigger: function (res) {
			alert('�û��������΢��');
		},
		complete: function (res) {
			alert(JSON.stringify(res));
		},
		success: function (res) {
			alert('�ѷ���');
		},
		cancel: function (res) {
			alert('��ȡ��');
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


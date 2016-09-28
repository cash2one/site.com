
var hasmore = true;
var curpage = 1;
var page=10;

$(function() {
	
	var member_login_key = getCookie('key');
	$('#member_login_key').val(member_login_key);
	/**
	 * last update by lizh 19:11 2016/7/8
	 */
	
	if(member_login_key == null || member_login_key == '') {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
		
	} else {
		
		loadchatData_1_5(1);
		
		$(window).scroll(function() {

			if ($(document).scrollTop() <= 0) {
				
				loadchatData_1_5(0);
				
			}

		});

	}
    

});

/**
 * @加载聊天记录
 * @hasmore = true 有下一页
 * @curpage ： 页码
 * add by lizh 12:31 2016/7/9 
 */
function loadchatData_1_5(first_status) {
	
	var member_login_key = getCookie('key');
	
	if (!hasmore) {
        
		return false
    
	}
    hasmore = false;
	
	$.ajax({
        
        url: ApiUrl + "/index.php?act=member_wap_message&op=content_list",
        type: 'GET',
		data:{'key':member_login_key,"page":page,"curpage":curpage},
        dataType: 'json',
        
        success: function(data) {
			
			var content_html = "";

			data.first_status = first_status;
				
			content_html += template.render("content_model", data);
			$("#content").prepend(content_html);
			
			curpage++;
			hasmore = data.hasmore;
			var h = $(document).scrollTop()+10;
			$(document).scrollTop(h);
			//console.log(data);
			
        }
    });
	
	
}

/**
 * @用户发送留言内容
 * add by lizh 16:37 2016/7/7
 */
function send_conten() {

	send_content = $('#send_content').val();
	if(send_content == null || send_content == "") {

		layer.tips('请输入发送信息', '#send_content', {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return false;

	}

	$.ajax({

        url: ApiUrl + "/index.php?act=member_wap_message&op=client_send_content",
        type: 'POST',
		data:$('#send_contens').serialize(),
        dataType: 'json',

        success: function(data) {
			var datas = data.datas;
			var str = '<li>'
						+'<div class="isme">'
						+'<div class="isme-pic">'+'<img src="'+ datas.info[0].member_avatar +'" alt=""/></div>'
						+'<div class="send">'
						+'<div class="arrow"></div>'
						+'<i>'+datas.info[0].content+'</i>'
						+'</div>'
						+'<div class="clearb"></div>'
						+'</div>'
						+'</li>';

			$('#content_info').append(str);
			//console.log(data);
			$('#send_content').val("");
			var h = $(document).height()-$(window).height();
			$(document).scrollTop(h);

        }
    });

}
/**
 * 获取js的cookie
 */
function getCookie(e) {
    var t = document.cookie;
    var a = t.split("; ");
    for (var n = 0; n < a.length; n++) {
        var r = a[n].split("=");
        if (r[0] == e) return unescape(r[1])
    }
    return null
}

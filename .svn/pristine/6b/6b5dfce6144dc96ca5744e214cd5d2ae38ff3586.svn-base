$(function () {
    if (getQueryString("key") != "") {
        var a = getQueryString("key");
        var e = getQueryString("username");
        addCookie("key", a);
        addCookie("username", e)
    } else {
        var a = getCookie("key")
    }
    if (a) {
        $.ajax({
            type: "post",
            url: ApiUrl + "/index.php?act=member_index&op=index_1_5",
            data: {key: a},
            dataType: "json",
            success: function (data) {
				
                //console.log(data);
				var member_info = data.datas.member_info;
				$('#member_avatar').attr('src',member_info.avatar);
				$('#member_areainfo').text(member_info.member_areainfo);
				$('#interested_person').text(member_info.interested_person);
				$('#fans').text(member_info.fans);
				$('#member_showcase').text(member_info.member_showcase);
				
				//我的瞬间
				var my_moment_html = '';
				my_moment_html += template.render("my_moment_model", data.datas);
				$("#my_moment").html(my_moment_html);
				
				//我的橱窗
				var showcase_html = '';
				showcase_html += template.render("showcase_model", data.datas);
				$("#showcase").html(showcase_html);
				
            }
        })
    } else {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
        return false
    }
    $.scrollTransparent()
});

function addFriend() {
	
	var key = getCookie('key');
	if(key == null || key == "") {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
		
	} else {
		
		window.location.href = SiteUrl +'/wap/feedback/tianjiahaoyou.html';
		
	}
	
}

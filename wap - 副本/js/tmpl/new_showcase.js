$(function () {
	
    var e = getCookie("key");
	$('#set_personal_id').val(getQueryString('personal_id'));
    if (!e) {
        window.location.href = WapSiteUrl + "/tmpl/member/login.html"
    }

	$(".btn-l").click(function () {
		
		var r = $("form").serializeArray();
		var a = {};
		a.key = e;
		for (var o = 0; o < r.length; o++) {
			a[r[o].name] = r[o].value
		}

		a['visible_state'] = document.getElementById("xuanzm").datavalue;
		$.ajax({
			type: "post",
			url: ApiUrl + "/index.php?act=member_favorites_class&op=create_favorites",
			data: a,
			dataType: "json",
			async: false,
			success: function (e) {
				
				if(e.datas.status) {
					
					window.location.href = WapSiteUrl + "/tmpl/find_1.html";
					
				}
				
			}
		})
	})

});


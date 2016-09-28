
var img_src = "";
$(function () {
    var e = getCookie("key");
	
    if (!e) {
        window.location.href = WapSiteUrl + "/tmpl/member/login.html"
    }
	
	$('input[name="file"]').ajaxUploadImage({
		
		url: ApiUrl1 + "/index.php?act=micro_sent&op=personal_image_upload",
		data: {'img':img_src,'key': e},
		start: function (e) {
			e.parent().after('<div class="upload-loading"><i></i></div>');
			e.parent().siblings(".pic-thumb").remove()
		},
		success: function (e, r) {
			console.log(ApiUrl1 + "/index.php?act=micro_sent&op=personal_image_upload&img_src="+img_src+"")
			checkLogin(r.login);
			if (r.datas.error) {
				e.parent().siblings(".upload-loading").remove();
				$.sDialog({skin: "red", content: "图片尺寸过大！", okBtn: false, cancelBtn: false});
				return false
			}
			
			img_src = r.datas.file;
			
			e.parent().after('<div class="pic-thumb"><img src="' + r.datas.pic + '"/></div>');
			e.parent().siblings(".upload-loading").remove();
			e.parents("a").next().val(r.datas.file);
			console.log(r.datas);
		}
	});
        $(".btn-l").click(function () {
            var r = $("form").serializeArray();
            var a = {};
            a.key = e;
            for (var o = 0; o < r.length; o++) {
                a[r[o].name] = r[o].value
            }

            if (a.commend_message.length == 0) {
                $.sDialog({skin: "red", content: "请填写分享感想", okBtn: false, cancelBtn: false});
                return false
            }
            $.ajax({
                type: "post",
                url: ApiUrl1 + "/index.php?act=micro_sent&op=personal_save",
                data: a,
                dataType: "json",
                async: false,
                success: function (e) {
                    checkLogin(e.login);
                    if (e.datas.error) {
                        $.sDialog({skin: "red", content: e.datas.error, okBtn: false, cancelBtn: false});
                        return false
                    }
                    window.location.href = WapSiteUrl + "/tmpl/member/member.html"
                }
            })
        })
 
});

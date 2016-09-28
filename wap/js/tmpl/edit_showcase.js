var fav_class_id = getQueryString('favorites_class_id');
var e = getCookie("key");
$(function () {
    
    get_list(0);
    $('#set_personal_id').val(getQueryString('personal_id'));
    if (!e) {
        window.location.href = WapSiteUrl + "/tmpl/member/login.html"
    }

});

function get_list(num) {
	
    $.getJSON(ApiUrl + "/index.php?act=index&op=showcase_detail" ,{'favorites_class_id':fav_class_id},
        function(e) {
            if (!e) {
                e = [];
                e.datas = [];
                e.datas.favorites_class_list = []
                e.datas.micro_personal = []
            }
        
            if(num == 0) {

               var showcase_info_html = template.render("edit_showcase_model", e.datas);
               $("#edit_showcase").append(showcase_info_html);  

            }
            
            $(".btn-l").click(function () {
                var e = getCookie("key");
                var r = $("form").serializeArray();
                var a = {};
                a.key = e;
                for (var o = 0; o < r.length; o++) {
                        a[r[o].name] = r[o].value
                }

                a['visible_state'] = document.getElementById("xuanzm").datavalue;
                a['fav_class_id'] = fav_class_id;
                $.ajax({
                    type: "post",
                    url: ApiUrl + "/index.php?act=member_favorites_class&op=edit_favorites",
                    data: a,
                    dataType: "json",
                    async: false,
                    success: function (data) {

                        if(data.datas.status) {

                            history.go(-1);

                        }

                    }
                })
            })

        }
    )
}


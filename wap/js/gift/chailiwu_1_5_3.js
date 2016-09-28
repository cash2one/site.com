var key = getCookie("key");
var name = getQueryString('n');
var member_id = getQueryString('m');
var time = getQueryString('t');

$(function() {

    get_cart_info_1_5_3();
	
});

function get_cart_info_1_5_3() {
	
	$.ajax({
		
            type : 'GET',
            url : ApiUrl + '/index.php?act=get_greeting_cards&op=get_cart_info_1_5_3',
            data : {'m':member_id,'t':time},
            dataType : 'json',

            success : function(data) {
                
                if (!data) {
                    data.datas = [];
                    data.datas.bg_img = "";
                    data.datas.image = "";
                    data.datas.member_avatar = "";
                    data.datas.member_name = "";
                    data.datas.message = "";
                }

                var main_html = "";
                main_html = template.render("main_model", data);
                $("#main").prepend(main_html);
                
                if(data.datas.bg_img != "" || data.datas.bg_img != null) {
                    
                    $('.beijing').css({'background':'url("'+data.datas.bg_img+'")', 'background-size': '100% 100%', "background-repeat" : "no-repeat", "background-position" : "center"});

                }
                
                $('.sonli-btn').click(function(){
                    
                    window.location.href= WapSiteUrl+"/gift/tianxieziliao.html?m="+member_id+"&t="+time;
                    
                });
                

            }
	});
	
}
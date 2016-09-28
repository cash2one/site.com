var page = pagesize;
var t= getCookie("key");
var like_id= getQueryString("like_id");
var curpage = 1;
var hasmore = true;
var footer = false;
var myDate = new Date;
var searchTimes = myDate.getTime();
$(function () {

    get_list();
    getCartCount(t);
    $("#cart_count,#cart_count1").html("<sup>" + getCookie("cart_count") + "</sup>");
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
	//console.log(ApiUrl1 + "/index.php?act=micro&op=get_personal_list_wap" + window.location.search.replace("?", "&"));

    $.getJSON(ApiUrl1 + "/index.php?act=micro&op=get_personal_list_wap" + window.location.search.replace("?", "&"), param,
		function (e) {
			if (!e) {
				e = [];
				e.datas = [];
				e.datas.goods_list = []
			}
			$(".loading").remove();
			curpage++;
			var r = template.render("home_body", e);
			$("#product_list .goods-secrch-list").append(r);
			/* if (e) {
				$(".unlike").show();
				$(".like").hide()
			} else {
				 $(".unlike").hide();
				$(".like").show()
			} */
	  
			hasmore = e.hasmore
		}
	)
}

/**
 * 用户点赞
 * add by lizh 14:14 2014/7/13
 */
function member_like(obj,id) {
	
	var key = getCookie('key');
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl1 + '/index.php?act=micro&op=inspirationLike',
		data : {'personal_id':id,'key':key},
		dataType : 'json',
		
		success : function(data) {
			
			layer.tips(data.datas.message, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			
			if(data.datas['status'] == 1) {
				
				var like_count_value = parseInt($('#store_favornum_hide_'+id).val()) + 1;
				$('#store_favornum_hide_'+id).val(like_count_value);
				$('#show_like_count_'+id).text(like_count_value);
				
			}
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}


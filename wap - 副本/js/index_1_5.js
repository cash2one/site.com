$(function() {

    var headerClone = $('#header').clone();
    $(window).scroll(function(){
        if ($(window).scrollTop() <= $('#main-container1').height()) {
            headerClone = $('#header').clone();
            $('#header').remove();
            headerClone.addClass('transparent').removeClass('');
            headerClone.prependTo('.nctouch-home-top');
        } else {
            headerClone = $('#header').clone();
            $('#header').remove();
            headerClone.addClass('').removeClass('transparent');
            headerClone.prependTo('body');
        }
    });
	
	//获取购物车数量
	if(getCookie("cart_count") == null || getCookie("cart_count") == 0) {
		
		$("#cart_count").css('display', 'none');
		
	} else {
		
		$("#cart_count").html("<sup>" + getCookie("cart_count") + "</sup>");
		
	}
	
	var a = getCookie("key"); //登录状态
	/**
	 * 1、html ：买手笔记模型数据
	 * 2、adv_list_html ：头部滚动模型数据
	 * 3、Designer_brand_html ：设计师品牌模型数据
	 * 4、Notes_ingenuity_html ：匠心手记模型数据
	 * 5、goods_new_html ：最新单品模型数据
	 * 6、you_like_html ：猜你喜欢模型数据
	 * 7、goods_popular_html ：心水尖货模型数据
	 *
	 * last update by lizh 16:12 2016/7/6
	 */
    $.ajax({
        
        url: MobileUrl + "/index.php?act=index&op=index_1_5",
        type: 'GET',
		data: {key: a},
        dataType: 'json',
        
        success: function(result) {
            var data = result.datas;
            var html = '';                
			var adv_list_html = '';
			var Designer_brand_html = '';
			var Notes_ingenuity_html = '';
			var goods_new_html = '';
			var you_like_html = '';
			var goods_popular_html = '';
			
            html += template.render("Note_buyers_model", data);
			adv_list_html += template.render("adv_list", data);
			Designer_brand_html += template.render("Designer_brand_model", data);
			Notes_ingenuity_html += template.render("Notes_ingenuity_model", data);
			goods_new_html += template.render("goods_new_model", data);
			you_like_html += template.render("you_like_model", data);
			goods_popular_html += template.render("goods_popular_model", data);
			
			
			
            $("#Note_buyers").html(html);
			$("#Designer_brand").html(Designer_brand_html);
			$("#Notes_ingenuity").html(Notes_ingenuity_html);
			$("#goods_new").html(goods_new_html);
			$("#you_like").html(you_like_html);
			$("#goods_popular").html(goods_popular_html);
			$("#main-container1").html(adv_list_html);
			
			//首页头部图片滑动效果
			$('.adv_list').each(function() {
                if ($(this).find('.item').length < 2) {
                    return;
                }

                Swipe(this, {
                    startSlide: 2,
                    speed: 400,
                    auto: 3000,
                    continuous: true,
                    disableScroll: false,
                    stopPropagation: false,
                    callback: function(index, elem) {},
                    transitionEnd: function(index, elem) {}
                });
            });

        }
    });

});

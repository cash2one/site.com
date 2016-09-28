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

    $.ajax({
        
        url: MobileUrl + "/index.php?act=index&op=index_1_5",
        type: 'get',
        dataType: 'json',
        
        success: function(result) {
            var data = result.datas;
            var html = '';
			var adv_list_html = '';
            html += template.render("Note_buyers_model", data);
			adv_list_html += template.render("adv_list", data);
			
			$("#main-container1").html(adv_list_html);
            $("#Note_buyers").html(html);
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


$(function() {
    var article_id = getQueryString("article_id");
    var article_title = decodeURI(getQueryString("article_title"));//解决中文乱码
    $('.header-title>h1').html(article_title);
    $('title').html(article_title);
    $.ajax({
        url: ApiUrl + "/index.php?act=cms_article&op=cms_article_show",
        data: {
            article_id: article_id
        },
        type: "get",
        success: function(result) {
        	//console.log(result);
            $("#cms-article-content").html(result);

            var img = new Image();
            var win_width = $(window).width();
            console.log(win_width);
            $('#cms-article-content img').each(function(){
                
                img.src = $(this).attr("src");
                var w = img.width;
                if(w>win_width){
                    $(this).css({"width":"100%"});
                }
                //console.log(w);
            });
        }
    });
   
});
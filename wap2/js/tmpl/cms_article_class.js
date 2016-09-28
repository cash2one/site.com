//v3-b11
$(function(){
    var class_id = getQueryString('class_id')
    
    if (class_id=='') {
        window.location.href = WapSiteUrl + '/index.html';
        return;
    }
    else {
        $.ajax({
            url:ApiUrl+"/index.php?act=cms_article_class&op=index",
            type:'get',
            data:{class_id:class_id},
            jsonp:'callback',
            dataType:'jsonp',
            success:function(result){
                console.log(result.datas);
                var data = result.datas;
                data.WapSiteUrl = WapSiteUrl;
                var html = template.render('cms-article-class', data);              
                $("#cms-article-content").html(html);
            }
        });
    }   
});

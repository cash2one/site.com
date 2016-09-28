

var hasmore = true;

 $(function () {
 
 get_list();
 
 /*
 $(window).scroll(function () {
 if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
 get_list();
 
 }
 });
 */
 });
 
//匠心手记列表�
function get_list() {

    $(".loading").remove();
    if (!hasmore) {
        return false
    }
    hasmore = false;
   


    $.getJSON(ApiUrl + "/index.php?act=cms&op=article_list&class_id=6",
            function (data) {

                if (!data) {
                    data = [];
                    data.datas = [];

                }
                


                var article_list_html = "";




                article_list_html = template.render("article_list_model", data);
                $("#article_list").append(article_list_html);
               

                hasmore = data.hasmore;
            }
    )
}

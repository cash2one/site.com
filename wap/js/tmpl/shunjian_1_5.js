var id = getQueryString('personal_id');
$(function () {

    /**
     * add by lizh 18:34 2016/7/12
     */ 
    $.ajax({
        url: ApiUrl1 + "/index.php?act=micro&op=inspirationDetail&personal_id=" + id,
        type: 'get',
        dataType: 'json',
        success: function (result) {
            var data = result.datas;
            data.WapSiteUrl = WapSiteUrl;
            var shunjian_detail_html = '';
  $.getJSON(ApiUrl +"/api/jssdk/sample.php", function(data2){
             data["sign_package"] = data2;
             console.log(data);
            shunjian_detail_html = template.render("shunjian_detail_model", data);
            $("#shunjian_detail").html(shunjian_detail_html);
             })
        }
        
 
    });
    

});









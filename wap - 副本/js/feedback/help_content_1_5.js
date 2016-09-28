$(function() {
	
	var url = window.location.href;
	var id = getUrlParam('article_id');
	
	/**
	 * add by lizh 10:36 2016/7/8
	 */
    $.ajax({
        
        url: MobileUrl + "/index.php?act=feedback&op=help_content_1_5&article_id="+id,
        type: 'GET',
        dataType: 'json',
        
        success: function(result) {
           
			var data = result.datas;
			var help_content_html = '';
			help_content_html = template.render("help_content_model", data);
			$("#help_content").html(data['article_data'][0].article_content);
			$("#title").html(data['article_data'][0].article_title);
			//console.log(data['article_data'][0].article_title);
			
        }
		
    });

});

//获取url中的参数
function getUrlParam(name) {
	
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
	var r = window.location.search.substr(1).match(reg);  //匹配目标参数
	if (r != null) return unescape(r[2]); return null; //返回参数值

}


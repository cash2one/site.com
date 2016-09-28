$(function() {
	
	/**
	 * add by lizh 10:36 2016/7/8
	 */
    $.ajax({
        
        url: MobileUrl + "/index.php?act=feedback&op=bangzhu_1_5",
        type: 'GET',
        dataType: 'json',
        
        success: function(result) {
           
			var data = result.datas;
			var help_content_html = '';
			help_content_html += template.render("help_content_model", data);
			//console.log(help_content_html);
			$("#help_content").html(help_content_html);
			
        }
		
    });

});

/**
 * @搜索
 * add by lizh 12:30 2016/7/8
 */
 function selectContent(content) {

	getAjax(content);
 
 }
 
 /**
 * @帮助搜索
 * add by lizh 14:31 2016/7/8
 */
 function selectHelpContent() {
	 
	var content = $('#select_help_content').val();
	getAjax(content);
 
 }
 
 function getAjax(content) {
	
	$.ajax({
        
        url: MobileUrl + "/index.php?act=feedback&op=select_help_content_1_5",
        type: 'GET',
		data: {'article_content':content},
        dataType: 'json',
        
        success: function(result) {
			
			var data = result.datas;
			var help_content_html = '';
			help_content_html += template.render("help_content_model", data);
			//console.log(help_content_html);
			$("#help_content").html(help_content_html);
			
        }
		
    });
	 
 }
 
function addCustomerService() {
	
	var key = getCookie('key');
	if(key == null || key == "") {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
		
	} else {
		
		window.location.href = SiteUrl +'/wap/feedback/feedback.html';
		
	}
	
}

function getCookie(e) {
    var t = document.cookie;
    var a = t.split("; ");
    for (var n = 0; n < a.length; n++) {
        var r = a[n].split("=");
        if (r[0] == e) return unescape(r[1])
    }
    return null
}


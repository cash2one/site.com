
var hasmore = true;
var curpage = 1;
var page=20;

$(function() {
	
	
	/**
	 * add by lizh 18:13 2016/7/8
	 */
    loadSeviceInfo_1_5();
	$(window).scroll(function() {

		if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
			
			loadSeviceInfo_1_5();
			//alert('到底部了');
		}
	});

});

function loadSeviceInfo_1_5() {
	
	var key = getCookie('key');
	
	if (!hasmore) {
        
		return false
    
	}
    hasmore = false;
	
	$.ajax({
        
        url: ApiUrl + "/index.php?act=member_wap_message&op=system_message&key="+key,
        type: 'GET',
		data:{"page":page,"curpage":curpage},
        dataType: 'json',
        
        success: function(result) {
           
		   //console.log(result);
			var service_list_html = '';
			service_list_html += template.render("service_list_model", result);
			$("#service_list").append(service_list_html);
			curpage++;
			hasmore = result.hasmore;
        }
		
    });
	
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




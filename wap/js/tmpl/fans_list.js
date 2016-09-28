$(function() {
	
	var key = getCookie('key');
	/**
	 * add by lizh 16:53 2016/7/8
	 */
    $.ajax({
        
        url: ApiUrl + "/index.php?act=sns_friend&op=fans_list&key="+key,
        type: 'GET',
        dataType: 'json',
        
        success: function(result) {
           
			var add_friends_html = '';
			add_friends_html += template.render("add_friends_model", result);
			$("#add_friends").html(add_friends_html);
        }
		
    });

});

function getCookie(e) {
    var t = document.cookie;
    var a = t.split("; ");
    for (var n = 0; n < a.length; n++) {
        var r = a[n].split("=");
        if (r[0] == e) return unescape(r[1])
    }
    return null
}

/**
 * @关注好友
 * add by lizh 17:18 2016/7/8
 */
 function attention(id, state, obj) {
	
	var key = getCookie('key');
	
	if(state == 0) {
		
		var url = ApiUrl + "/index.php?act=sns_friend&op=add_follow&key="+key+"&member_id="+id;
		
	} else {
		
		var url = ApiUrl + "/index.php?act=sns_friend&op=del_follow&key="+key+"&member_id="+id;
		
	}
	
	$.ajax({
        
        url: url,
        type: 'GET',
        dataType: 'json',
        
        success: function(result) {
			
			if(state == 0) {
				
				$('#'+obj).html('<s onclick=attention("'+id+'","'+1+'","a_'+id+'")>- 已关注</s>');
				
				
			} else {
				
				$('#'+obj).html('<s onclick=attention("'+id+'","'+0+'","a_'+id+'")>+ 关注</s>');
				
			}
			
        }
		
    });
 
 }
 
 /**
  * 隐藏关注
  * add by lizh 18:47 2016/7/8
  */
 function divToggle(id) {
	
	$('#'+id).css('display','none');
	
 }



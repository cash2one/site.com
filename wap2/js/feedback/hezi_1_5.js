$(function() {
	
	var key = getCookie('key');
	/**
	 * add by lizh 15:58 2016/7/9
	 */
    $.ajax({
        
        url: ApiUrl + "/index.php?act=member_wap_message&op=count&key="+key,
        type: 'GET',
        dataType: 'json',
        
        success: function(result) {
			
			//console.log(result);
			
			if(result.datas.error == null || result.datas.error == undefined) {
				
				var servies_count = result.datas.servies_count;
				var system_count = result.datas.system_count;
				if(servies_count > 0) {
					
					if(servies_count > 99) {
						
						$('#friend_num').html('<s>'+'99+'+'</s><img src="img/moreleft.png" alt=""/>');
						
					} else {
						
						$('#friend_num').html('<s>'+servies_count+'</s><img src="img/moreleft.png" alt=""/>');
						
					}
					
				} else {
					
					$('#friend_num').html('<img src="img/moreleft.png" alt=""/>');
					
				}
				
				if(system_count > 0) {
					
					if(system_count > 99) {
						
						$('#sevice_num').html('<s>'+'99+'+'</s><img src="img/moreleft.png" alt=""/>');
						
					} else {
						
						$('#sevice_num').html('<s>'+system_count+'</s><img src="img/moreleft.png" alt=""/>');
						
					}
					
					
				} else {
					
					$('#sevice_num').html('<img src="img/moreleft.png" alt=""/>');
					
				}
				
				
			} else {
				
				var servies_count = result.datas.servies_count;
				var system_count = result.datas.system_count;
				$('#friend_num').html('<img src="img/moreleft.png" alt=""/>');
				$('#sevice_num').html('<img src="img/moreleft.png" alt=""/>');
				
			}
			
			
        }
		
    });

});

function addFriend() {
	
	var key = getCookie('key');
	if(key == null || key == "") {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
		
	} else {
		
		window.location.href = SiteUrl +'/wap/feedback/tianjiahaoyou.html';
		
	}
	
}

function addSeviceInfo() {
	
	var key = getCookie('key');
	if(key == null || key == "") {
		
		window.location.href = SiteUrl +'/wap/tmpl/member/login.html';
		
	} else {
		
		window.location.href = SiteUrl +'/wap/feedback/xitts.html';
		
	}
	
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




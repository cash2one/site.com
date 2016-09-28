//v3-b11
                    $(function(){
                    $.ajax({
			url:ApiUrl1+"/index.php?act=micro&op=get_personal_list",
			type:'get',
			jsonp:'callback',
			dataType:'jsonp',
			success:function(result){
                              console.log(result.datas);
				var html = template.render("micro_list", result.datas);	
                                
                                $('#micro_content').html(html);
			}
		});
});
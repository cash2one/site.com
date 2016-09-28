/**
 * ajax访问艺见、艺访、最佳艺匠坊的数据
 */
function ajaxLoadData(url, type) {
				
	$.ajax({
					
		type:"GET",
		url:url,
		data:{article_class_id:type},
		dataType:"json",
					
		success : function(data) {
					
			if(type == 3) {
						
				loadYiJianModel(data, '艺见');
					
			}
					
			if(type == 1) {
						
				loadYiFangModel(data, '艺访');
						
			}
			
			if(type == 7) {
						
				loadYiJiangModel(data, '最佳艺匠坊');
						
			}
	
		},
					
		error : function() {
						
			alert('参数错误');
						
		}
					
	});
				
}

/**
 * 加载艺见模板
 */		
function loadYiJianModel(json, name) {
				
	var data = json.data[0];
				
	var page = json.page;

	var str = '<div class="yuding-tit yijian-tit">'
				+ '<span >' + name + '</span>'
                + '<span class="turn-lr">';
						
	if(page['leftPageUrl'] == '#') {
							
		str += '<i class="yuding-tit-left"></i>';
							
	} else {
							
		str += '<i class="yuding-tit-left" onclick="ajaxLoadData(' + "'" + page['leftPageUrl'] + "'" + ', 3)"></i>';
							
	}
						
	if(page['rightPageUrl'] == '#') {
							
		str += '<i class="yuding-tit-right"></i>';
							
	} else {
							
		str += '<i class="yuding-tit-right" onclick="ajaxLoadData(' + "'" +  page['rightPageUrl'] + "'" + ', 3)"></i>';
							
	}
                                                    
   str += '</span>'
            + '<div style="clear: both"></div>'
			+ '</div>'
			+ '<div class="yijian-pic">'
			+ '<a href="' + data['a_href'] + '" style="font-size:12px">'
			+ '<img src="' + data['img_src'] + '" alt=""/>'
			+ '</a>'
			+ '</div>'
			+ '<div class="yijian-text">'
			+ '<p><a href="' + data['a_href'] + '" style="font-size:12px">' + data['article_title'] + '</a></p>'
			+  '<div>'
			+ '<span><a href="' + data['a_href'] + '" style="font-size:12px;color:#999999;">' + data['article_abstract'] + '</a></span>'
			+ '</div>'
			+ '</div>';
			
	$('#yijianModel').html('');
	$('#yijianModel').html(str);
}
		
/**
 * 加载艺访模板
 */	
function loadYiFangModel(json, name) {
				
	var data = json.data[0];
				
	var page = json.page;

	var str = '<div class="yuding-tit yijian-tit">'
				+'<span >' + name + '</span>'
				+'<span class="turn-lr">';

	if(page['leftPageUrl'] == '#') {
							
		str += '<i class="yuding-tit-left"></i>';
							
	} else {
							
		str += '<i class="yuding-tit-left" onclick="ajaxLoadData(' + "'" + page['leftPageUrl'] + "'" + ', 1)"></i>';
							
	}
						
	if(page['rightPageUrl'] == '#') {
								
		str += '<i class="yuding-tit-right"></i>';
								
	} else {
								
		str += '<i class="yuding-tit-right" onclick="ajaxLoadData(' + "'" +  page['rightPageUrl'] + "'" + ', 1)"></i>';
								
	}
							
	str += '</span>'
			+ '<div style="clear: both"></div>'
			+ '</div>';
								
	str += '<div class="yifang-pic">'
			+ '<a href="' + data['a_href'] + '" style="font-size:12px">'
			+ '<img src="' + data['img_src'] + '" alt=""/>'
			+ '</a>'
			+ '</div>'
			+ '<div class="yifang-text">'
			+ '<p>' + '<a href="' + data['a_href'] + '" style="font-size:12px">' + data['article_title'] + '</a></p>'
			+ '<i></i>'
			+ '<span><a href="' + data['a_href'] + '" style="font-size:12px;color:#999999;">'+ data['article_abstract'] + '</a></span>'
			+ '</div>'
			+ '<div style="clear: both"></div>';
			//+ '</div>';
			
	$('#yifangModel').html('');
	$('#yifangModel').html(str);
	
}

/**
 * 加载最佳艺匠坊
 */	
function loadYiJiangModel(json, name) {
			
	var data = json.data;
	//console.log(data);			
	var page = json.page;

	var str = '<div class="yuding-tit zj-yjf-tit">' 
                + '<span>' + name + '</span>'
                + '<span class="turn-lr">';
            
	if(page['leftPageUrl'] == '#') {
							
		str += '<i class="yuding-tit-left"></i>';
							
	} else {
							
		str += '<i class="yuding-tit-left" onclick="ajaxLoadData(' + "'" + page['leftPageUrl'] + "'" + ', 7)"></i>';
							
	}
						
	if(page['rightPageUrl'] == '#') {
											
		str += '<i class="yuding-tit-right"></i>';
											
	} else {
											
		str += '<i class="yuding-tit-right" onclick="ajaxLoadData(' + "'" +  page['rightPageUrl'] + "'" + ', 7)"></i>';
											
	}
				
	str += '</span>';
				
    str +=  '<div style="clear: both"></div>' + '</div>';
				   
	var sln=0; 
	var count_sl= data.length;	
				
	for(i=0; i< data.length; i++) {
				
		if(sln == 0) {
					
             str += '<div class="zj--yjf-mian">'
						
					+ '<a href="' + data[i]['a_href'] + '" target="_blank">'
						 
					+ '<div class="zj--yjf-bg">'
					+ '<img src="' + data[i]['img_src'] + '" width="100%" height="150PX" data-image="' + data[i]['img_src'] + '" alt="设计师">'
					+ '<div class="zj-yjf-head">'
					+ '<img src="' +  data[i]['img_src_logo'] + '" alt=""/>'
					+ '</div>'
					+ '</div>'
					+ '</a>'
                    + '<div class="add">'
                    + '<span><a href="' + data[i]['a_href'] + '" target="_blank">' + data[i]['store_name'] + '</a></span>'
					+ '<div class="add-pic">'
                    + '<ul>';
					
					var slg=1;
					var search_list_goods = data[i]['search_list_goods'];
					for(n=0; n<search_list_goods.length; n++) {
									
						str += '<li>' 
						       + '<a href="' +search_list_goods[n]['goods_href']+ '">'
							   + '<img src="' + search_list_goods[n]['img_src'] + '" alt="" />'
							   + '</a>'
							   +'</li>';

						if(n ==5 || slg >= 3){ 
								
							break; 
							
						} 
							
						slg++;

					}
                                 
                str += '</ul>'
						+ '</div>'
						+ '<div style="clear: both"></div>'
						+ '<a href="' + data[i]['a_href'] + '" target="_blank">'
						+ '<div class="add-more">查看更多</div>'
						+ '</a>'
						+ '</div>'
						+ '</div>';
				   
		} else {
				
			if(sln == 1) {
							
				str += '<div class="zj-yjf-tit-t">' + name + '</div>'
						+ '<div class="zj-yjf-t-main">';
			
			}
						
			if(sln == 1) {
								
				str += '<a href="' + data[i]['a_href'] + '" target="_blank">'
						+ '<div class="zj-yjf-t-head">'
						
						+ '<img src="' + data[i]['img_src_logo'] + '" alt=""/>'
						
						+ '</div>'
						+ '</a>'
						+ '<div class="zj-yjf-t-yonghu">'
						+ '<div>'
						+ '<div class="zj-yjf-t-xinxi">'
						+ '<span><a href="' + data[i]['a_href'] + '" target="_blank">' + data[i]['store_name'] + '</a></span>'
						+ '</div>'
						+ '<div class="zj-yjf-t-gz">'
						+ '<a href="javascript:void(0);" onclick="' + data[i]['onclick_function'] + '">'
						+ '<i class="zj-yjf-t-gz-g shoucan-m"></i>'
						+ '关注'
						+'</a>'
						+ '</div>'
						+ '</div>'
					    + '</div>'
						+ '<div class="zj-yjf-t-pic">'
						+ '<ul>';
								   
						var slg=1; 
						var search_list_goods = data[i]['search_list_goods'];
						for(n=0; n<search_list_goods.length; n++) {
									
							str += '<li>'
								 + '<a href="' +search_list_goods[n]['goods_href']+ '">'
								 + '<img src="' + search_list_goods[n]['img_src'] + '" alt="" />'
								 + '</a>'
								 + '</li>';

							if(n ==5 || slg >= 4){ 
								
								break; 
							
							} 
							
							slg++;

						}
								   
						str += '</ul>'
								+ '<div style="clear: both"></div>'
							    + '</div>';
			
			} else if(sln >= 2) {
								
				str += '<div class="zj-yjf-pm">'
						+ '<div class="zj-yjf-pm-m" style="width: 293px;">'
						//+ '<span>' + sln + '</span>'
						+ '<span></span>'
						+ '<div class="zj-yjf-pm-head">'
						+ '<a href="' + data[i]['a_href'] + '" target="_blank">'
						+ '<img src="' + data[i]['img_src_logo'] + '" alt=""/>'
						+ '</a>'
						+ '</div>'
						+ '<span class="zj-yjf-pm-n"><a href="' + data[i]['a_href'] + '" target="_blank">' + data[i]['store_name'] + '</a></span>'
						+ '<span class="zj-yjf-pm-s">'+data[i]['store_click']+'</span>'
						+ '</div>'
						+ '</div>';
								
			}
						
			if(sln == count_sl) {
				
				str += '</div>';
			
			}	
						 
		}
				   
		sln++;	
				
	}  
	   	
	$('#designersModel').html('');
	$('#designersModel').html(str);
	
}

/**
 * 切换新品ul
 */		
function newGoodsOpen(name) {
			
	if(name == 'left') {
				
		$('#leftNewGoods').css('display', 'block');
		$('#rightNewGoods').css('display', 'none');
				
	}
			
	if(name == 'right') {
				
		$('#leftNewGoods').css('display', 'none');
		$('#rightNewGoods').css('display', 'block');
				
	}
			
}

/**
 * 切换登录后新进的和关注的界面
 */	
function newstore(name) {
			
	if(name == 'xinjing') {
				
		$('#xinjing').css('display', 'block');
		$('#guanzhude-main_id').css('display', 'none');
		$('#xinjing_span').css( "border-bottom", "2px solid #373946");
        $('#xinjing_span').css( "height", "57px");
        $("#guangzhu_span").removeAttr("style");
				
	}
	if(name == 'guanzhude-main') {
		$('#xinjing').css('display', 'none');
		$('#guanzhude-main_id').css('display', 'block');
		$('#guangzhu_span').css( "border-bottom", "2px solid #373946");
        $('#guangzhu_span').css( "height", "57px");
        $("#xinjing_span").removeAttr("style");
	}
}
/*****************************************************/
//返回顶部
$(document).ready(function(){
	var btn=document.getElementById("gotop");
	var loading=document.getElementById("loading");
	var flssMain=document.getElementById("flss-main");
	var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
	window.onscroll=set;
	btn.onclick=function (){
		btn.style.opacity="0.5";
		window.onscroll=null;
		this.timer=setInterval(function(){
			scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
			scrollTop-=Math.ceil(scrollTop*0.1);
			if(scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
			if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop=scrollTop;
			if (document.body.scrollTop > 0) document.body.scrollTop=scrollTop;
		},10);
	};
	function set(){
		scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
		btn.style.opacity=scrollTop?'1':"0.5";
		if (document.body.scrollTop > 0 || window.pageYOffset > 0 || document.body.scrollTop > 0){
			flssMain.style.display="none";
			feilicon.className="feilicon";
		}
		if (document.body.scrollTop > 2283 || window.pageYOffset > 2283 || document.body.scrollTop > 2283){
			loading.className="loadingF";
		}else{
			loading.className="loading";
		}
	}

});
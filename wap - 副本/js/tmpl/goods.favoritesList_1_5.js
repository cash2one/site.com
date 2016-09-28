var page =20;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {
	
	get_list();
	get_wx_shart();
	$(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
            get_list()
        }
    });
    
});

//加载心愿单列表
function get_list() {

	if (!hasmore) {
        return false
    }
	
	hasmore = false;
    param = {};
    param.page = page;
    param.curpage = curpage;
    param.key = key;

	$.getJSON(ApiUrl + "/index.php?act=member_favorites&op=favorites_list" , param,
		function(data) {
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.favorites_list = []
			}
			
			curpage++;
			hasmore = data.hasmore
			var favorites_list_html = template.render("favorites_list_model", data.datas);
			$("#favorites_list").append(favorites_list_html);
		}
	)
}

/**
 * 微信分享
 * add by lizh 11:33 2016/7/19
 */
/* function get_wx_shart() {
    $.getJSON(ApiUrl + "/index.php?act=wx_interface&op=get_wx_share_interface",{},
		function (data) {
			
			if (!data) {
				data = [];
				data.datas = [];
				data.datas.signPackage = [];
			}

			var wx_share_html = "";
			wx_share_html = template.render("wx_share_model", data.datas);
			$("#wx_share").append(wx_share_html);

		}
	)
} */

/**
 * 勾选商品
 * add by lizh 10:01 2016/7/25
 */
function selectGoods(obj,id) {
	
	select_status = $(obj)[0].value;
	
	if(select_status == null || select_status == '' || typeof(select_status) == "undefined") {
		
		$(obj)[0].value = 0;
		select_status = 0;
		
	}
	
	var goods_id = $('#select_goods_id').val();
	if(select_status == 0) {
		
		$(obj)[0].value = 1;
		if(goods_id == 0) {
			
			$('#select_goods_id').val(id); 
			
		} else {
			
			goods_id = goods_id + ','+ id;
			$('#select_goods_id').val(goods_id); 
			
		}
		$(obj).html('<img src="../img/yijingxuanz.png" alt=""/>');
		
	} else {
		
		
		$(obj)[0].value = 0;
		//console.log(goods_id.indexOf(','));
		if(goods_id.indexOf(',') != '-1') {
			
			var check_str = goods_id.replace(id+',','');
			if(check_str == goods_id) {
				
				$('#select_goods_id').val(goods_id.replace(','+id,''));
				
			} else {
				
				$('#select_goods_id').val(check_str);
				
			}
			
			
		} else {
			
			var goods_id = goods_id.replace(id,'');
			
			if(goods_id == null || goods_id == "") {
				
				$('#select_goods_id').val(0);
				
			}
			
			
		}

		$(obj).html('<img src="../img/weibeixuanj.png" alt=""/>');
		
	}
	
	if($('#select_goods_id').val() != '0') {
		
		var select_goods_id = $('#select_goods_id').val();
		$('#select_goods_count').text(select_goods_id.split(",").length);
		
	} else {
		
		$('#select_goods_count').text(0);
		
	}
	
	
}

/**
 * 删除商品
 * add by lizh 10:45 2016/7/25
 */
function del_goods(obj) {
	
	var select_goods_id = $('#select_goods_id').val();

	if(select_goods_id == 0) {
		
		layer.tips('请选择删除商品', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return false;
		
	}
	
	$.ajax({
		
		type:"POST",
		url:ApiUrl + '/index.php?act=member_favorites&op=favorites_del',
		data:{"fav_id":select_goods_id,"key":key},
		dataType:"json",
		
		success:function(data) {
			
			if(data.datas == 1) {
				
				layer.tips('删除成功', obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				history.go(0);
				return true;
				
			} else {
				
				layer.tips('请选择删除商品', obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				return false;
				
			}
			
		},
		
		error: function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

/**
 * 添加购物车
 * add by lizh 10:45 2016/7/25
 */
function add_goods_cart(obj) {
	
	var select_goods_id = $('#select_goods_id').val();

	if(select_goods_id == 0) {
		
		layer.tips('请选择添加商品', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return false;
		
	}
	
	$.ajax({
		
		type:"POST",
		url:ApiUrl + '/index.php?act=member_cart&op=many_cart_add',
		data:{"goods_id":select_goods_id,"key":key},
		dataType:"json",
		
		success:function(data) {
			
			var resule = data.datas;
			
			var add_cart_num = resule.buy_goods_true.message;

			layer.tips(add_cart_num, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			return true;

		},
		
		error: function(e) {
			
			console.log(e);
			
		}
		
	});
	
}


/**
 * 选择所有商品
 * add by lizh 12:17 2016/7/25
 */
 function selectAllGoods(obj) {
	
	if($('#bianjih').css('display') == 'block') {
		
		return false;
		
	}
	
	$('.xuanz').each(function(index) {
		
		var value = $(this).next().val();
		selectGoods(this,value);

	});
	
	select_status = $(obj)[0].value;
	
	if(select_status == null || select_status == '' || typeof(select_status) == "undefined") {
		
		$(obj)[0].value = 0;
		select_status = 0;
		
	}
	
	if(select_status == 0) {
		
		$(obj).html('<img src="../img/yijingxuanz.png" alt=""/>');
		$(obj)[0].value = 1;
		
	} else if(select_status == 1) {
		
		$(obj).html('<img src="../img/weibeixuanj.png" alt=""/>');
		$(obj)[0].value = 0;
		
	}
	
	

 }

/**
 * 清空所有选择
 * add by lizh 12:17 2016/7/25
 */
 function clear_select_goods() {
	
	
	$('.xuanz').each(function(index) {
		$(this)[0].value = 0;
		$(this).html('<img src="../img/weibeixuanj.png" alt=""/>');
	});
	
	$('#select_goods_count').text(0);
	$('#select_goods_id').val(0);
	
	$('.xuanall')[0].value = 0;
	$('.xuanall').html('<img src="../img/weibeixuanj.png" alt=""/>');
	 
 }

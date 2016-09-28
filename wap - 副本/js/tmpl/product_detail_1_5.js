var goods_id = getQueryString("goods_id");
var map_list = [];
var map_index_id = "";
var store_id;
var buyNow;
var colors;
var sizes;
var is_happysend = getQueryString('is_happysend')
$(function () {
	
	template.helper("isEmpty", function (e) {
        for (var t in e) {
            return false
        }
        return true
    });
	
	//加载模板
	getGoodsInfo(goods_id,1);
	
	//点击进入商品评价
	$("body").on("click", "#goodsEvaluation1", function () {
        
		window.location.href = WapSiteUrl + "/tmpl/product_eval_list.html?goods_id=" + goods_id
    
	});
	
	//点击进入店铺详情页
	$("body").on("click", "#login_store", function () {
        
		window.location.href = WapSiteUrl + "/tmpl/store.html?store_id=" + store_id
    
	});
        
	var  a =  window.location.href;
	get_wx_shart(a);

});

function getGoodsInfo(id,num) {
	
	var e = getCookie("key");
	
	/**
	 * @product_detail_html:商品详情模板
	 * @head_swiper_html:头部图片滑动模板
	 * @choose_the_specifications：选择规格模板
	 */
	$.ajax({
        
        url: ApiUrl + "/index.php?act=goods&op=goods_detail_1_5",
        type: 'GET',
		data: {'goods_id': goods_id, 'key': e},
        dataType: 'json',
        
        success: function(result) {
            var data = result.datas;
            var product_detail_html = '';                
            var head_swiper_html = '';                
            var choose_the_specifications_html = '';

			if (data.goods_info.spec_name) {
				var c = $.map(data.goods_info.spec_name, function (e, t) {
					var o = {};
					o["goods_spec_id"] = t;
					o["goods_spec_name"] = e;
					if (data.goods_info.spec_value) {
						$.map(data.goods_info.spec_value, function (e, a) {
							if (t == a) {
								o["goods_spec_value"] = $.map(e, function (e, t) {
									var o = {};
									o["specs_value_id"] = t;
									o["specs_value_name"] = e;
									return o
								})
							}
						});
						return o
					} else {
						goods_info.spec_value = []
					}
				});
				data.goods_map_spec = c
			} else {
				data.goods_map_spec = []
			}
			
            product_detail_html += template.render("product_detail_model", data);
            head_swiper_html += template.render("head_swiper_model", data);
           

            $("#product_detail").html(product_detail_html);
            $("#head_swiper").html(head_swiper_html);
			
			if(num == 1) {
				
				choose_the_specifications_html += template.render("choose_the_specifications_model", data);
				$("#choose_the_specifications").html(choose_the_specifications_html);
			
			}
            
			
			var p = {};
			p["spec_list"] = data.spec_list;
			$(".spec li").click(function () {
				var e = this;
				getGoods_id(e, p)
			});
			
			
			//打开规格选择弹窗
			document.getElementById("buy-now").onclick=function(){
				if($('#jairugouwuche').css('display') == 'none') {
					
					document.getElementById("jairugouwuche").style.display="block";
					
				} else {
					
					if (data.goods_info.is_virtual == "1") {//是否虚拟商品
						$("#buy-now").click(function () {
							var e = getCookie("key");
							if (!e) {
								window.location.href = WapSiteUrl + "/tmpl/member/login.html";
								return false
							}
							var t = parseInt($("#buynum").text()) || 0;
							if (t < 1) {
								layer.tips('参数错误！', '#buy-now', {
									tips: [1, '#0FA6D8'] //还可配置颜色
								});
								//$.sDialog({skin: "red", content: "参数错误！", okBtn: false, cancelBtn: false});
								return
							}
							if (t > data.goods_info.goods_storage) {
								layer.tips('库存不足！', '#buy-now', {
									tips: [1, '#0FA6D8'] //还可配置颜色
								});
								//$.sDialog({skin: "red", content: "库存不足！", okBtn: false, cancelBtn: false});
								return
							}
							if (data.goods_info.buyLimitation > 0 && t > data.goods_info.buyLimitation) {
								layer.tips('超过限购数量！', '#buy-now', {
									tips: [1, '#0FA6D8'] //还可配置颜色
								});
								//$.sDialog({skin: "red", content: "超过限购数量！", okBtn: false, cancelBtn: false});
								return
							}
							var o = {};
							o.key = e;
							o.cart_id = id;
							o.quantity = t;
							$.ajax({
								type: "post",
								url: ApiUrl + "/index.php?act=member_vr_buy&op=buy_step1",
								data: o,
								dataType: "json",
								success: function (e) {
									if (e.datas.error) {
										$.sDialog({skin: "red", content: e.datas.error, okBtn: false, cancelBtn: false})
									} else {
										location.href = WapSiteUrl + "/tmpl/order/vr_buy_step1.html?goods_id=" + id + "&quantity=" + t
									}
								}
							})
						})
					} else {

						var e = getCookie("key");
						if (!e) {
							window.location.href = WapSiteUrl + "/tmpl/member/login.html"
						} else {
							var t = parseInt($("#buynum").text()) || 0;//商品个数
							if (t < 1) {

								layer.tips('参数错误！', '#buy-now', {
									tips: [1, '#0FA6D8'] //还可配置颜色
								});
								return
							}
							if (t > data.goods_info.goods_storage) {
								
								layer.tips('库存不足！', '#buy-now', {
									tips: [1, '#0FA6D8'] //还可配置颜色
								});
								//$.sDialog({skin: "red", content: "库存不足！", okBtn: false, cancelBtn: false});
								return
							}
							var o = {};
							o.key = e;
							o.cart_id = id + "|" + t;
							$.ajax({
								type: "post",
								url: ApiUrl + "/index.php?act=member_buy&op=buy_step1&is_happysend="+is_happysend,
								data: o,
								dataType: "json",
								success: function (e) {
									if (e.datas.error) {
										
										layer.tips(e.datas.error, '#buy-now', {
											tips: [1, '#0FA6D8'] //还可配置颜色
										});
										
									} else {
										location.href = WapSiteUrl + "/tmpl/order/buy_step1.html?goods_id=" + id + "&buynum=" + t+"&is_happysend="+is_happysend;
									}
								}
							})
						}

					}
					
				}
			};
			if(is_happysend==1){
                            $('#buy-now').html('<img src="img/sent.png" alt=""/>微信送礼');
                        }
			//打开规格选择弹窗
			$("body").on("click", "#add-cart", function () {
				
				if($('#jairugouwuche').css('display') == 'none') {
					
					document.getElementById("jairugouwuche").style.display="block";
					
				} else {

					var e = getCookie("key");
					var t = parseInt($("#buynum").text());
					if (!e) {
						
						window.location.href = SiteUrl + '/wap/tmpl/member/login.html';
						
					} else {
						$.ajax({
							url: ApiUrl + "/index.php?act=member_cart&op=cart_add",
							data: {key: e, goods_id: id, quantity: t},
							type: "post",
							success: function (e) {
								var t = $.parseJSON(e);
								if (checkLogin(t.login)) {
									if (!t.datas.error) {
										//show_tip();
										layer.tips('成功加入购物袋', '#add-cart', {
											tips: [1, '#0FA6D8'] //还可配置颜色
										});
										delCookie("cart_count");
										getCartCount();
										$("#cart_count,#cart_count1").html("<sup>" + getCookie("cart_count") + "</sup>")
									} else {
										
										layer.tips(t.datas.error, '#add-cart', {
											tips: [1, '#0FA6D8'] //还可配置颜色
										});
										/* $.sDialog({
											skin: "red",
											content: t.datas.error,
											okBtn: false,
											cancelBtn: false
										}) */
									}
								}
							}
						})
					}
				}
				
			});
			
			//点击进入客服中心
			$(".kefu").click(function () {
                window.location.href = WapSiteUrl + "/tmpl/member/chat_info.html?goods_id=" + id + "&t_id=" + data.store_info.member_id
            })
			//console.log(data);
			store_id = data.store_info.store_id;
        }
	})
	
}

//获取goods_id
function getGoods_id(e, t) {
	
	$(e).addClass("hover").siblings().removeClass("hover");
	var o = $(".spec").find("li.hover");
	var a = [];
	$.each(o, function (e, t) {
		a.push(parseInt($(t).attr("specs_value_id")) || 0)
	});
	var i = a.sort(function (e, t) {
		return e - t
	}).join("|");
	console.log(t);
	goods_id = t.spec_list[i];
	console.log(goods_id);
	//重新加载模板
	getGoodsInfo(goods_id,2);
	
}

//关注店铺
function favorites_store(id) {
	
	
	var e = getCookie("key");
	
	
	$.ajax({
        
        url: ApiUrl + "/index.php?act=member_favorites_store&op=favorites_add",
        type: 'POST',
		data: {'store_id': id, 'key': e},
        dataType: 'json',
        
        success: function(result) {
           
			var data = result.datas;
		   
			if(data == 1) {
			   
				layer.tips('收藏成功', '#favorites_store_img', {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
			   
			} else {
				
				layer.tips(data.error, '#favorites_store_img', {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				
			}
		   //console.log(result);
		   
        },
		
		error: function(e) {
			
			
			console.log(e);
			
		}
	})
	
}

function show_tip() {
    var e = $(".goods-pic > img").clone().css({"z-index": "999", height: "3rem", width: "3rem"});
    e.fly({
        start: {
            left: $(".goods-pic > img").offset().left,
            top: $(".goods-pic > img").offset().top - $(window).scrollTop()
        },
        end: {
            left: $("#cart_count1").offset().left + 40,
            top: $("#cart_count1").offset().top - $(window).scrollTop(),
            width: 0,
            height: 0
        },
        onEnd: function () {
            e.remove()
        }
    })
}

function calc(btn){
	 
	var suliang=document.getElementById("jiajian").children[1];
	if(btn.innerHTML=="+"){
		suliang.innerHTML=parseInt(suliang.innerHTML)+1;
	}else{
		if(--suliang.innerHTML==0){
		   suliang.innerHTML=1;
		}
	}

}

/**
 * 用户关注
 * add by lizh 14:54 2014/7/22
 */
function getFavorites(obj,id) {
	
	var key = getCookie('key');
	//console.log(obj.previousElementSibling.children[0].innerHTML);
	
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		return;
		
	}
	
	$.ajax({

		type : 'POST',
		url : ApiUrl + '/index.php?act=member_favorites&op=favorites_add',
		data : {'goods_id':id,'key':key},
		dataType : 'json',
		
		success : function(data) {
			console.log(data);
			
			if(data.datas == 1) {
				
				layer.tips('成功加入心愿单', obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				var favorites_count = parseInt($('#favorites_count').text())+1;
				console.log(favorites_count);
				$('#favorites_count').text(favorites_count);
				
			} else {
				
				layer.tips(data.datas.error, obj, {
					tips: [1, '#0FA6D8'] //还可配置颜色
				});
				
			}

		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
	
}

function s(e, t) {
	var o = e.length;
	while (o--) {
		if (e[o] === t) {
			return true
		}
	}
	return false
}

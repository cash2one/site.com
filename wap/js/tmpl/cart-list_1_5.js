var key = getCookie("key");

$(function () {

	getCartList();
	
});

function getCartList() {
	
	$.ajax({
		
		url: ApiUrl + "/index.php?act=member_cart&op=cart_list",
		type: "post",
		dataType: "json",
		data: {'key': key},
		
		success: function (data) {
			
			//console.log(data);
			var cart_list_html = "";
			$('#gouwuche').text('编辑');
			cart_list_html = template.render("cart_list_model", data.datas);
			$("#cart_list").html(cart_list_html);

			if(data.datas.cart_count == null || data.datas.cart_count == '') {
				
				data.datas.cart_count = 0;
				
			}
			
			if(data.datas.sum == null || data.datas.sum == '') {
				
				data.datas.sum = 0.00;
				
			}
			
			$("#set_sum").text('¥'+data.datas.sum);
			$("#set_cart_count").text(data.datas.cart_count);
			
			$("#cart-list-wp").on("click", ".check-out > a", function () {
				if (!$(this).parent().hasClass("ok")) {
					return false
				}
				var t = [];
				$(".cart-litemw-cnt").each(function () {
					if ($(this).find('input[name="cart_id"]').prop("checked")) {
						var a = $(this).find('input[name="cart_id"]').val();
						var e = parseInt($(this).find(".value-box").find("input").val());
						var r = a + "|" + e;
						t.push(r)
					}
				});
				var a = t.toString();
				window.location.href = WapSiteUrl + "/tmpl/order/buy_step1.html?ifcart=1&cart_id=" + a
			});

            var gCheck=document.getElementsByClassName("all_checkbox")[0];
			var store = document.getElementsByClassName("store_checkbox");
			$('.goods_checkbox').click(function(){
				//console.log(this.parentNode.parentNode.parentNode);
				//console.log(this.checked);
				var dianAll=this.parentNode.parentNode.parentNode;
				var dianPu=dianAll.getElementsByClassName("store_checkbox")[0];
				var shangpin=dianAll.getElementsByClassName("goods_checkbox");
				for(var i= 0,leng=shangpin.length;i<leng;i++){
					if(shangpin[i].checked==false){
					   dianPu.checked=false;
						allcheck();
						break;
					}else{
						dianPu.checked=true;
						allcheck();
					}
				}
				select_goods();
			});
			
			$('.gouwud-t').on("click",'.store_checkbox',function(){
				//console.log(this.checked);
				//console.log(this.parentNode.parentNode);
				var dianAll=this.parentNode.parentNode;
				var shangpin=dianAll.getElementsByClassName("goods_checkbox");
				for(var i= 0,leng=shangpin.length;i<leng;i++){
					if(this.checked==false){
						shangpin[i].checked=false;
						allcheck();
					}else{
						shangpin[i].checked=true;
						allcheck();
					}
				}
				select_goods();
			});
			$('.all_checkbox').click(function() {
				for (var d = 0, dleng = store.length; d < dleng; d++) {
					var shangpin = store[d].parentNode.parentNode.getElementsByClassName("goods_checkbox");
					for (var i = 0, leng = shangpin.length; i < leng; i++) {
						if (this.checked == true) {
							//for (var i = 0, leng = shangpin.length; i < leng; i++) {
							//	shangpin[i].checked = true;
							//}
							store[d].checked = true;
							shangpin[i].checked = true;
						} else {
							store[d].checked = false;
							shangpin[i].checked = false;
						}
					}
				}
				select_goods();
			});
            //判断是否全选中
			function allcheck(){
				for (var d = 0, dleng = store.length; d < dleng; d++) {
					if (store[d].checked == false) {
						gCheck.checked=false;
						break;
					}else{
						gCheck.checked=true;
					}
				}
			}
			/**
			 * 增加商品数量
			 * add by lizh 14:60 2016/7/29
			 */
			var gouwudX=document.getElementsByClassName("gouwud-x");
			var bianJi=document.getElementsByClassName("bianji");
			var spsuliang=document.getElementsByClassName("spsuliang");
			var dianpou=document.getElementsByClassName("dianpou");
			var allxuanzhong=document.getElementById("allxuanzhong");
			$('.spsuliang').click(function(e){
				
				var e = e || window.event;
				var el = e.target || e.srcElement; //通过事件对象的target属性获取触发元素
				var cls = el.className; //触发元素的class
				var countInout = this.getElementsByClassName('zhi')[0]; // 数目input
				var value = parseInt(countInout.value); //数目
				var gouwudq=this.parentNode.parentNode.parentNode;
				var suliang=gouwudq.getElementsByClassName("suliang")[0];
				var goods_num=gouwudq.getElementsByClassName("goods_num")[0];
				var goods_storage = $(this).children('input[type="hidden"]').val();
				//通过判断触发元素的class确定用户点击了哪个元素
				switch (cls) {
				   case 'jia': //点击了加号
						if(value<goods_storage){
							countInout.value = value + 1;
							suliang.innerHTML="x"+countInout.value;
							goods_num.value=countInout.value;
						}
						break;
				   case 'jian': //点击了减号
						if (value > 1) {
						   countInout.value = value - 1;
						   suliang.innerHTML="x"+countInout.value;
						   goods_num.value=countInout.value;
						}
						break;
				}
				//console.log($(this).attr("cart_id"));
				add_goods_num(parseInt($(this).attr("cart_id")),countInout.value);
				
				
			});

		}
	})
}

/**
 * 结算
 * @cart_id : 购物车商品ID
 * @goods_num : 购买商品数量
 * add by lizh 19:20 2016/7/28
 */
function billing(obj) {
	
	var t = [];
	
	$('.gouwud-q').each(function(){
		
		var check = $(this).find("input[class='goods_checkbox']").is(':checked');
		if(check == true) {
			var cart_id = $(this).children("input[type='hidden']")[0].value;
			var goods_num = $(this).children("input[type='hidden']")[1].value;
			var r = cart_id + "|" + goods_num;
			t.push(r);
		}
		
	});

	var a = t.toString();
	if(a != "") {
		
		window.location.href = WapSiteUrl + "/tmpl/order/buy_step1.html?ifcart=1&cart_id=" + a
		
	} else {
		
		$.sDialog({
		skin: "red",
		content: "请选择结算的商品",
		okBtn: true,
		cancelBtn: true,

	})
		
	}
	
	
}

/**
 * 选择商品
 * @goods_price ：商品价格
 * @num ：选择数量
 * add by lizh 9:52 2016/7/29
 */
function select_goods() {
	
	var num = 0;
	var goods_price = 0;
	$('.gouwud-q').each(function(){

		var check1 = $(this).find("input[class='goods_checkbox']").is(':checked');

		if(check1 == true) {
			
			goods_price += parseInt($(this).children("input[type='hidden']")[2].value) * parseInt($(this).children("input[type='hidden']")[1].value);
			num++;
			
		}

	});
		
	$("#set_sum").text('¥'+goods_price);
	$("#set_cart_count").text(num);
	
}

/**
 * 删除商品确认框
 * add by lizh 14:60 2016/7/29
 */
function del_goods_confim(id) {
	
	$.sDialog({
		skin: "red",
		content: "确认删除吗？",
		okBtn: true,
		cancelBtn: true,
		okFn: function () {
			del_goods(id)
		}
	})
	
}

/**
 * 删除商品
 * add by lizh 14:60 2016/7/29
 */
function del_goods(id) {
	$.ajax({
		url: ApiUrl + "/index.php?act=member_cart&op=cart_del",
		type: "post",
		data: {'key': key, 'cart_id': id},
		dataType: "json",
		success: function (t) {
			if (checkLogin(t.login)) {
				if (!t.datas.error && t.datas == "1") {
					
					getCartList();

				} else {
					
					alert(t.datas.error)
				
				}
			}
		}
	})
}

/**
 * 增加商品数量
 * add by lizh 14:60 2016/7/29
 */
function add_goods_num(id,num) {
	
	$.ajax({
		url: ApiUrl + "/index.php?act=member_cart&op=cart_edit_quantity",
		type: "post",
		data: {'key': key, 'cart_id': id, 'quantity': num},
		dataType: "json",
		success: function (t) {

			select_goods();
			
		}
	})
	
}

/**
 * 设置商品规格
 * add by lizh 17:20 2016/7/29
 */
function set_goods_spec(id,cart_id,goods_num) {

	$.ajax({
		url: ApiUrl + "/index.php?act=goods&op=get_goods_spec",
		type: "GET",
		data: {'key': key, 'goods_id': id},
		dataType: "json",
		success: function (data) {
			
			if (data.datas.goods_info.spec_name) {
				
				var c = $.map(data.datas.goods_info.spec_name, function (e, t) {
					var o = {};
					o["goods_spec_id"] = t;
					o["goods_spec_name"] = e;
					if (data.datas.goods_info.spec_value) {
						$.map(data.datas.goods_info.spec_value, function (e, a) {
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
				data.datas.goods_map_spec = c
			
			} else {
				
				data.datas.goods_map_spec = [];
				
			}

			var update_goods_spec_html = "";
			update_goods_spec_html = template.render("update_goods_spec_model", data.datas);
			$("#update_goods_spec").html(update_goods_spec_html);
			document.getElementsByClassName("guige-waiku")[0].style.display="block";
			//选择规格
			$('.color li').click(function(){
				
				for(var i= 0, lent=this.parentNode.children.length; i<lent; i++){
					
					if(this.parentNode.children[i].className == 'goods_spec_id') {

						this.parentNode.children[i].value = $(this).children('input').val();
						
					} else {
						
						this.parentNode.children[i].className="";
						
					}
					
				
				}
				
				this.className="hover";
				update_goods_spec(data.datas.spec_list,cart_id,goods_num);
				
			});

		}
	})
	
}

/**
 * 重选商品规格
 * add by lizh 11:31 2016/7/30
 */
function update_goods_spec(spec_list,cart_id,goods_num) {
	
	var id = [];
	$('.goods_spec_id').each(function(){
		
		 id.push($(this).val());

		/* if(id == "") {
			
			id += $(this).val();
			
		} else {
			
			id += '|' + $(this).val();
			
		} */
		
		
	});
	
	var i = id.sort(function (e, t) {
		return e - t
	}).join("|");
	goods_id = spec_list[i];
	//goods_id = spec_list[id];
	//console.log(goods_id);
	
	$.ajax({
		url: ApiUrl + "/index.php?act=member_cart&op=cart_edit_spec",
		type: "post",
		data: {'key': key, 'cart_id': cart_id,'goods_num':goods_num,'goods_id':goods_id},
		dataType: "json",
		success: function (t) {
			
			if(t.datas.status == 1) {
				
				getCartList();
				goods_info = t.datas.info;
				$('#spec_goods_image').html('<img src="'+goods_info.goods_image+'" alt=""/>');
				$('#spec_goods_price').html('¥'+goods_info.goods_price);
				$('#spec_goods_storage').html('库存'+goods_info.goods_storage+'件');
				
			} else {
				
				$.sDialog({
					skin: "red",
					content: t.datas.message,
					okBtn: true,
					cancelBtn: true,

				})
				
			}

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

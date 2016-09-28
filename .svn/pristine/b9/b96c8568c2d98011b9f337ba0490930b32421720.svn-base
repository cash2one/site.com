//弹出窗函数
(function($){
	$.fn.iOpenTheWindow = function(){
			_element = $(this);
			//滚动条
			var scroll_height = $(document).scrollTop();
			//浏览器窗口宽度
			var window_width = $(window).width();
			//浏览器窗口高度
			var window_height = $(window).height();
			//目标窗口宽度
			var target_width = _element.innerWidth();
			//目标窗口高度
			var target_height = _element.innerHeight();
			//弹出窗口的宽度
			var current_width = window_width/2 - target_width/2;
			//弹出窗口的高度
			var current_height = window_height/2 - target_height/2 + scroll_height;
			//_element.parent().css({"position":"relative"});
			_element.css({"display":"block","position":"absolute","z-index":"1999","top":current_height+"px","left":current_width+"px"});
	}
	//弹出窗口关闭
	$.fn.iCloseTheWindow = function(){
		$(this).css({display:'none'});
	}
})(jQuery);
jQuery(function(){
	if(d.user_name){
		var sFloatName = d.user_name;
	}else{
		var sFloatName = "";
	}
	
	if(sFloatName != ""){
		jQuery('#floating_right_window .right_float_member .member_ico_right').html(d.rank_name);
		jQuery('#floating_right_window .right_float_member font').html(osCutString(sFloatName,20));
		
		jQuery('#floating_right_window .float_order_left .member_order_1 span').html("( " + d.order_unpay + " )");
		jQuery('#floating_right_window .float_order_left .member_order_2 span').html("( " + d.order_shipped + " )");
		jQuery('#floating_right_window .float_order_left .member_order_3 span').html("( " + d.order_uncomment + " )");
		jQuery('#floating_right_window .float_member_right .member_order_1 span').html(d.pay_points);
		jQuery('#floating_right_window .float_member_right .member_order_2 span').html(d.user_money);
		if(parseInt(d.voucher_num) > 0){
			jQuery('#floating_right_window .float_member_right .member_order_3').html("<a href='/home.php?act=user_voucher' target='_blank' >"+d.voucher_num+"</a>张可用优惠券");
		}else{
			jQuery('#floating_right_window .float_member_right .member_order_3 span').html(d.voucher_num);
		}
		
	};
	
	//“近期浏览”数据添加 -开始-
	jQuery.ajax({
		type:"GET",
		url:'/get_daily_goods.php?act=his',
		async:true,
		success:function(data){
			var dis =null;
			dis = eval('('+data+')');
			if(dis == "0"){
				jQuery('#floating_right_window .floating_scan_ul').append("<li class='floating_scan_none'>您最近没有浏览任何商品！</li>");
			}else{
				jQuery.each(dis,function(key,value){
					jQuery('#floating_right_window .floating_scan_ul').append("<li><a href='"+ value.href +"' class='track' name='public-history-item' target='_blank'><img src='http://i.liveport.cn/themes/live/images/replace_pic_bar.png' class='lazyLoadImg' data-original='http://i.liveport.cn/"+ value.src +"' width='90' height='90' /></a></li>");
				});
				/* 添加track */
				var obj = jQuery('.floating_scan_ul a');
				insert_click(obj, 'a');
			}
		}
	});
	//“近期浏览”数据添加 -结束-
	jQuery('#floating_right_window').css("height", jQuery(window).height() + "px");
	
	if(d.cart_num > 0){
		if(d.cart_num > 99){
			d.cart_num = 99;
		}
		jQuery('#floating_right_window .floating_window_bag a span').html( d.cart_num );
	}else{
		jQuery('#floating_right_window .floating_window_bag a span').html("0");	
	}


	//右侧浮窗“近期浏览”
	jQuery("#floating_right_window .floating_window_scan").hover(function(){
		jQuery(this).addClass("floating_window_scan_hover");
		jQuery(this).find("img").each(function(){
			jQuery(this).attr("src",jQuery(this).attr('data-original'));
		});
		jQuery(this).find(".floating_scan_main").stop().fadeIn(200);

	},function(){
			jQuery(this).find(".floating_scan_main").stop().fadeOut(200);
			jQuery(this).removeClass("floating_window_scan_hover");	
	});
	//右侧窗口“登录窗口”
	jQuery("#floating_right_window .floating_window_logo").hover(function(){
		//判断是否已经登录
		jQuery(this).addClass("right_float_login_hover");
		if(sFloatName == ""){
			jQuery(this).find(".right_float_login").stop().fadeIn(200);
		}else{
			jQuery(this).find(".right_float_member").stop().fadeIn(200);		
		};
	},function(){
		jQuery(this).find(".right_float_login,.right_float_member").stop().fadeOut(200);
		jQuery(this).removeClass("right_float_login_hover");	
	});
	//返回顶部
    jQuery('#floating_right_window .floating_window_return').click(function (){
		var judgeTemplate = jQuery("#floating_right_window").parent().attr("id");
		
		if(judgeTemplate == "category_contenter"){
			jQuery("#category_contenter").scrollTop(0);
			return false;
		}else{
			//jQuery(window).scrollTop(0); 
			jQuery("html,body").animate({'scrollTop': 0 }, 1000);
			return false;
		}
	});
	//浮栏右侧底部
	jQuery(".floating_window li a").hover(
		function(){
			jQuery(this).each(function(){
				jQuery(this).parent().find("span").css("display","block").stop().animate({right:"30px"},"500");
				jQuery(this).parent().find("font").css("display","block");
			});
		}, function(){
			jQuery(this).each(function(){
				jQuery(this).parent().find("span").stop().css({"display":"none","right":"-85px"});
				jQuery(this).parent().find("font").css("display","none");
			});
		}
	);
	//浮栏右侧登录LOGO
	jQuery(".floating_window_logo a.floating_logo_a").click(function(){
		return false;
	});
	//登录窗口
	//输入框
	jQuery(".window_content_label .mini_input").click(function(){
		jQuery(this).find("label").css("display","none");
		jQuery(this).children(".mini_content_input")[0].focus();
	});
	jQuery("input.mini_content_input").focus(function(){
		jQuery(this).parent().find("label").css("display","none");
	});
	jQuery("input.mini_content_input").blur(function(){
		var miniInputThis = jQuery(this).val();
		if(miniInputThis == ""){
			jQuery(this).parent().find("label").css("display","block");
			return false;
		};
		var name = jQuery(this).attr('name');
		switch(name){
		case 'user_name_float':
			if(!check_email(miniInputThis)){
				error_login(name, '邮箱地址输入有误，请重新输入');
			}else{
				success_login(name);
			}
			break;
		case 'user_pass_float':
			if(miniInputThis == ''){
				error_login(name,'密码不能为空，请重新输入');
			}else{
				success_login(name);
			}
			break;
		}
	});

	//登录窗口关闭按钮
	jQuery('.window_close_span').click(function(){
		jQuery(".right_float_login").iCloseTheWindow();
		jQuery(".right_float_member").iCloseTheWindow();
	});
	//输入密码后捕获回车事件
	jQuery('.right_float_login input.mini_content_input').keyup(function(e){
		var keycode=e.which;
		if(keycode==13) jQuery('button.log_button_label').click();
	});
});
jQuery(window).resize(function() {
  jQuery('#floating_right_window').css("height", jQuery(window).height() + "px");
});

//登录
function userLoginRight()
{
	jQuery(".mini_ico").each(function(i){
		jQuery(this).removeClass("mini_ico_success").removeClass("mini_ico_error");
	});
	jQuery(".error_prompt").each(function(i){
		jQuery(this).html("");
	});
	
	var username = jQuery("input[name='user_name_float']").val();
	var password = jQuery("input[name='user_pass_float']").val();
	//var remember = jQuery("input[name='remember_float']").val();
	var remember = 1;
	//var captcha = jQuery("input[name='user_captcha_float']").val();
	var captcha = '';
	
	if(username == ""){
		error_login('user_name_float','邮箱地址不能为空，请重新输入');
		return false;
	}else if(!check_email(username)){
		error_login('user_name_float','邮箱地址输入有误，请重新输入');
		return false;
	}else{
		success_login('user_name_float');
	}
	if(password == ""){
		error_login('user_pass_float','密码不能为空，请重新输入');
		return false;
	}else{
		success_login('user_pass_float');
	}
	
	jQuery(".log_button button").attr("disabled",true).html('正在登录...');
	
	/*正在登录中*/
	jQuery.post(
		'/api/login.php?act=login',
		{'username':username, 'password':password, 'captcha':captcha, 'remember':remember},
		function(data){
			jQuery(".log_button button").attr("disabled",false).html('立即登录');
			data = eval('('+data+')');
			if(data.error == 0){
				location.reload();
			}else{
				switch(data.status){
					case 101:
						error_login('user_captcha_float','验证码输入有误，请重新输入');
						break;
					case 102:
						error_login('user_name_float','邮箱或密码输入有误，请重新输入');
						error_num = data.data.error_num;
						if(error_num >= 3){
							show_captcha();
						}
						break;
				}
			}
		}
	);
}
//验证邮箱
function check_email(email){
	var reg=/^\w+((-\w+)|(\.\w+))*\@{1}\w+(-\w+)*\.{1}\w{2,4}(\.{0,1}\w{2}){0,1}/ig;
	if(!reg.test(email)){
		return false;
	}
	return true;
}
//验证手机号
function check_mobile(mobile){
	var reg= /^1[3-8]+\d{9}$/;
	if(!reg.test(mobile)){
		return false;
	}
	return true;
}
//登陆信息错误
function error_login(name_val,msg){
	jQuery("input[name="+name_val+"]").parent().next().removeClass("mini_ico_error").removeClass("mini_ico_success").addClass("mini_ico_error")
	jQuery("input[name="+name_val+"]").parent().parent().next().html(msg);
}
//登陆信息正确
function success_login(name_val){
	jQuery("input[name="+name_val+"]").parent().next().removeClass("mini_ico_error").removeClass("mini_ico_success").addClass("mini_ico_success");
	jQuery("input[name="+name_val+"]").parent().parent().next().html('');
}


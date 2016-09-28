
    <div class="title-main-wai">
        <div class="title-main">
            <span id="loading"><a href="index.php?act=login&op=index">登录</a></span>
            <span id="register"><a href="index.php?act=login&op=register">注册</a></span>
        </div>
    </div>
	
	<form id="login_form" method="post" action="index.php?act=login&op=index" class="bg">
		
		<?php Security::getToken(); ?>
		<input type="hidden" name="form_submit" value="ok" />
        <input name="nchash" type="hidden" value="<?php echo getNchash(); ?>" />
		
		<div class="denglu-main" id="denglu-main" >
			<div class="denglu-box">
				<div class="yonghu-denglu">
					<div>
						<input type="text" autocomplete="off" name="user_name" id="user_name" placeholder="请输入账号" autofocus />
						<label></label>
					</div>
					<div>
						<input type="password" name="password" autocomplete="off"  id="password" placeholder="请输入密码"/>
						<label></label>
					</div>
				</div>
				<div class="rem-or-forget">
					<span><input type="checkbox" name="memory" value="1" id="memory_me"><label for="memory_me">记住我</label></span>
					<span><a href="index.php?act=login&op=forget_password">忘记密码？</a></span>
				</div>

				<input type="submit" class="submit" style="width:100%" value="<?php echo $lang['login_index_login']; ?>">
				
				<!--<div class="submit">
					确定
				</div>-->
			</div>
		</div>
	
	</form>
	
   <style>
         .wx_window{width: 400px;height:auto;display:none;position: absolute;top: 150px;left: 40%;background: #D8D8D8 ;z-index: 1111;}
         .wx_window .wx_tit h1{font-size: 20px;line-height: 40px;font-weight: bold;text-indent: 1em;margin-bottom: 10px;position: relative;}
         .wx_window .wx_tit .wx_close{position: absolute;right:3px;top: 4px;cursor:pointer;width: 20px;height: 20px;border-radius: 10px;background: url(<?php echo SHOP_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;display: block;}
         .wx_window .wx_tit .wx_close:hover{background: #F71F07 url(<?php echo SHOP_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;}
    </style>
    
    <?php if ($output['setting_config']['qq_isuse'] == 1 || $output['setting_config']['sina_isuse'] == 1 || $output['setting_config']['wx_isuse'] == 1) { ?>
        <ul class="other-loding">
            <?php if ($output['setting_config']['qq_isuse'] == 1){?>
            <li><a href="<?php echo SHOP_SITE_URL;?>/api.php?act=toqq" title="QQ" class="qq"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuH0Soq_42_42.png" alt=""/></span><i>QQ</i></a></li>
            <?php } ?>
            <?php if ($output['setting_config']['sina_isuse'] == 1){?>
            <li><a href="<?php echo SHOP_SITE_URL;?>/api.php?act=tosina" title="新浪微博" class="sina"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuHzyoq_42_42.png" alt=""/></span><i>新浪</i></a></li>
            <?php } ?>
            <?php if ($output['setting_config']['wx_isuse'] == 1){ ?>
            <li><a href="javascript:void(0);" class="wx" id="wx_btn"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuH0Coq_42_42.png" alt=""/></span><i>微信</i></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    
    <div class="wx_window">
        <div class="wx_tit"><h1>微信账号登录</h1><span class="wx_close"></span></div>
        <div class="nc-login-content tc" id="login_container"></div>
    </div>

<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.poshytip.min.js" charset="utf-8"></script> 

<script>

/*微信登陆*/
$(function(){
    $.getScript("<?php echo C('https')?'https':'http';?>://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js", function(){
        var obj = new WxLogin({
            id:"login_container", 
            appid: "<?php echo $output['setting_config']['wx_appid'];?>", 
            scope: "snsapi_login", 
            redirect_uri: "<?php echo SHOP_SITE_URL.'/index.php?act=connect_wx&op=get_info';?>",
            state: "",
            style: "",
            href: ""
        });
    });
})

/*微信登陆弹出*/
$('.wx').click(function(){
    $('.wx_window').fadeIn('slow');
});

$('.wx_close').click(function(){
    $('.wx_window').fadeOut('slow');
});

$(document).ready(function(){
	
    $("#login_form").validate({
		
		errorPlacement: function(error, element){
			
			var error_td = element.parent('div');	
			error_td.find('label').hide();
			error_td.append(error);
		
		},
			
        onkeyup: false,
        
		rules: {
				
			user_name: "required",
            password: "required"
				
<?php if (C('captcha_status_login') == '1') { ?>
                
			, captcha : {
                
				required : true,
                        
				remote   : {
							
					url : '<?php echo SHOP_SITE_URL ?>/index.php?act=seccode&op=check&nchash=<?php echo getNchash(); ?>',
                    type: 'get',
                           
					data:{
                                
						captcha : function(){
                                                    
							return $('#captcha').val();
                                
						}
                            
					},
                            
					complete: function(data) {
                                                    
						if (data.responseText == 'false') {
                                                    
							document.getElementById('codeimage').src = '<?php echo SHOP_SITE_URL ?>/index.php?act=seccode&op=makecode&nchash=<?php echo getNchash(); ?>&t=' + Math.random();
                                
						}
                            
					}
                        
				}
						
            }
<?php } ?>
			
		},
                                
		messages: {
                                
			user_name: "<?php echo $lang['login_index_input_username']; ?>",
            password: "<?php echo $lang['login_index_input_password']; ?>"

<?php if (C('captcha_status_login') == '1') { ?>
                
			, captcha : {
                    
				required : '<?php echo $lang['login_index_input_checkcode']; ?>',
                remote	 : '<?php echo $lang['login_index_wrong_checkcode']; ?>'
                
			}

<?php } ?>
        
		}
    
	});

});

</script>

<script language="javascript">
	
	function get_mobile_code(){
		
		var ok=check_data(false);
		
		if(ok==false) {
				
			return false;
		
		}
			
		$.getJSON('index.php?act=login&op=sendmbcode',{mobile:jQuery.trim($('#register_mobile').val())},function(data){

			if (data.state == 'true') {
			
				RemainTime();
		
			} else {
				
				alert(data.msg);
		
			}
			
        });
	
	};
	
	var iTime = 59;
	var Account;
	function RemainTime(){
		document.getElementById('btnGetCode').disabled = true;
		var iSecond,sSecond="",sTime="";
		if (iTime >= 0){
			iSecond = parseInt(iTime%60);
			iMinute = parseInt(iTime/60)
			if (iSecond >= 0){
				if(iMinute>0){
					sSecond = iMinute + "分" + iSecond + "秒";
				}else{
					sSecond = iSecond + "秒";
				}
			}
			sTime=sSecond;
			if(iTime==0){
				clearTimeout(Account);
				sTime='获取手机验证码';
				iTime = 59;
				document.getElementById('btnGetCode').disabled = false;
			}else{
				Account = setTimeout("RemainTime()",1000);
				iTime=iTime-1;
			}
		}else{
			sTime='没有倒计时';
		}
		document.getElementById('btnGetCode').value = sTime;
	}	
	
//提交验证
function register()
{	
    var ok=check_data(true);
	if(ok==false)
	{
		return false;
	}
	ok=check_mobile_code();
	return ok;
}

function check_data(is_submit)
{
	var mobile=$("#register_mobile");
	var mobile_code=$("#mobile_code");
	if (mobile.val() == "")
	{
	    alert("请输入手机号!");
	    mobile.focus();
	    return false;
	}else if(mobile.val().length!=11){
		alert("请输入正确的手机号!");
	    mobile.focus();
	    return false;
	}
	if(is_submit)
	{
	  if (mobile_code.val()== "")
	  {
		alert("请输入收到的验证码!");
		mobile_code.focus();
		return (false);
	  }
	}
	return true;
}

function check_mobile_code() {
	
	var mobile=$("#mobile").val();
	var mobile_code=$("#mobile_code").val();
	var myurl = "index.php?act=login&op=check_mobile_code&mobile=" + mobile+"&mobile_code="+mobile_code;
	var htmlobj = $.ajax({ url: myurl, async: false, dataType: "text" });
	var re = htmlobj.responseText;
	
	if (re == "false") {
	  
	  alert("您输入的手机验证码不正确");
	  return false;
	
	}
	
	return true;

}

</script>



    <div class="title-main-wai">
        <div class="title-main">
            <span id="loading"><a href="index.php?act=login&op=register">注册</a></span>
            <span id="register"><a href="index.php?act=login&op=index">登录</a></span>
        </div>
    </div>
	
    <form id="register_form" method="post" action="<?php echo SHOP_SITE_URL;?>/index.php?act=login&op=usersave" onsubmit="return register()">
    <?php Security::getToken();?>
    
	<div class="zhuce-main" id="zhuce-main" style="display: block;">
        <div class="zhuce-box">
            <div class="yonghu-zuce">
                <div>
					<input type="text" id="register_user_name" name="user_name" title="<?php echo $lang['login_register_username_to_login'];?>" class="text tip" placeholder="请输入账号" autofocus />
					<label></label>
				</div>
				<div><input type="password" id="register_password" name="password" class="text tip" placeholder="请输入密码" title="<?php echo $lang['login_register_password_to_login'];?>"/><label></label></div>
				<div><input type="password" id="register_password_confirm" name="password_confirm" class="text tip" placeholder="请确认密码" title="<?php echo $lang['login_register_input_password_again'];?>"/><label></label></div>
				<div><input type="text" id="register_mobile" name="mobile" class="text tip" placeholder="请输入手机号" title="请输入手机号码"/><label></label></div>

                <span>
                    <div class="yanzhenma" style="margin:0 0 10% 0"><input type="text" autocomplete="off" name="mobile_code" placeholder="短信校验码" title="短信校验码" id="mobile_code" class="valid text fl tip"><label></label></div>
                    <div class="huoqu" style="margin:0 0 10% 0" onclick="get_mobile_code();">获取短信验证码</div>
				</span>
				
                <i style="clear: both ;display:block;"></i>
                <?php if(C('captcha_status_register') == '1') { ?>
                
				<span>
                    <div class="yanzhenma"><input type="text" id="captcha" name="captcha" class="text w50 fl tip" maxlength="4" size="10" placeholder="验证码" title="<?php echo $lang['login_register_input_code'];?>"/><label></label></div>
					<img onclick="javascript:document.getElementById('codeimage').src='index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();" src="index.php?act=seccode&op=makecode&nchash=<?php echo getNchash(); ?>" title="" name="codeimage" border="0" id="codeimage" class="fl ml5" style="margin-left:3%;width:35%"/>
                    <!-- <div class="huoqu">13465464</div> -->
                
				</span>
				<i style="clear: both ;display:block;"></i>
				<?php } ?>
                
            </div>
            <div class="rem-or-forget">
				 
               <input id="clause" name="agree" type="checkbox" class="vm ml10"  value="1" checked="checked">同意网站服务条款
			   <label></label>
				
            </div>
			<input type="hidden" name="ref_url" value="<?php echo $_GET['ref_url']?>">
			<input type="hidden" name="nchash"  value="<?php echo getNchash();?>" />
			<input type="hidden" name="form_submit" value="ok" />
			<input type="submit" class="submit" style="width:100%" value="提交">
        
		</div>
    </div>
	
	</form>
	
    <ul class="other-loding">
        <li><a href="http://www.wantease.com/api.php?act=toqq" title="QQ" class="qq"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuH0Soq_42_42.png" alt=""/></span><i>QQ</i></a></li>
        <li><a href="http://www.wantease.com/api.php?act=tosina" title="新浪微博" class="sina"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuHzyoq_42_42.png" alt=""/></span><i>新浪</i></a></li>
        <!-- <li><span><img src="http://localhost/wantease.com-master/shop/resource/newimg/lALOKBuH0Coq_42_42.png" alt=""/></span><i>微信</i></li> -->
        <li><a href="javascript:void(0);" class="wx" id="wx_btn"><span><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/lALOKBuH0Coq_42_42.png" alt=""/></span><i>微信</i></a></li>
    </ul>
	<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.poshytip.min.js" charset="utf-8"></script> 
	
<script>

//注册表单提示
$('.tip').poshytip({
	className: 'tip-yellowsimple',
	showOn: 'focus',
	alignTo: 'target',
	alignX: 'center',
	alignY: 'top',
	offsetX: 0,
	offsetY: 5,
	allowTipHover: false
});

//注册表单验证
$(function(){
	
	jQuery.validator.addMethod("lettersonly", function(value, element) {
			
		return this.optional(element) || /^[^:%,'\*\"\s\<\>\&]+$/i.test(value);
	
	}, "Letters only please"); 
		
	jQuery.validator.addMethod("lettersmin", function(value, element) {
		
		return this.optional(element) || ($.trim(value.replace(/[^\u0000-\u00ff]/g,"aa")).length>=3);
	
	}, "Letters min please"); 
		
	jQuery.validator.addMethod("lettersmax", function(value, element) {
			
		return this.optional(element) || ($.trim(value.replace(/[^\u0000-\u00ff]/g,"aa")).length<=15);
	
	}, "Letters max please");
    
	$("#register_form").validate({
		
        errorPlacement: function(error, element){
            //var error_td = element.parent('dd');
            var error_td = element.parent('div');
            error_td.find('label').hide();
            error_td.append(error);
			console.log(error);
        },
		
        onkeyup: false,
		
        rules : {
			
            user_name : {
				
                required : true,
                lettersmin : true,
                lettersmax : true,
                lettersonly : true,
                remote   : {
                    
					url :'index.php?act=login&op=check_member&column=ok',
                    type:'get',
                    data:{
                        
						user_name : function(){
                            
							return $('#register_user_name').val();
                        
						}
						
                    }
					
                }
				
            },
			
            password : {
				
                required : true,
                minlength: 6,
				maxlength: 20
            
			},
			
            password_confirm : {
                
				required : true,
                equalTo  : '#register_password'
            
			},
			
            mobile : {
                
				required : true,
				minlength: 11,
				maxlength: 11,
                
				remote   : {
                    
					url : 'index.php?act=login&op=check_mobile',
                    type: 'get',
                    data:{
                        mobile : function(){
                            return $('#register_mobile').val();
                        }
                    }
                
				}
            
			},
			
			mobile_code : {
                
				required : true
			
			},
			
			<?php if(C('captcha_status_register') == '1') { ?>
            
			captcha : {
                required : true,
                remote   : {
                    url : 'index.php?act=seccode&op=check&nchash=<?php echo getNchash();?>',
                    type: 'get',
                    data:{
                        captcha : function(){
                            return $('#captcha').val();
                        }
                    },
                    complete: function(data) {
                        if(data.responseText == 'false') {
                        	document.getElementById('codeimage').src='<?php echo SHOP_SITE_URL?>/index.php?act=seccode&op=makecode&nchash=<?php echo getNchash();?>&t=' + Math.random();
                        }
                    }
                }
            },
			
			<?php } ?>
            
			agree : {
                
				required : true
            
			}
			
        },
		
        messages : {
            user_name : {
				 
				required : '用户名不能为空',
                lettersmin : '用户名必须在3-15个字符之间',
                lettersmax : '用户名必须在3-15个字符之间',
				lettersonly: '用户名不能包含敏感字符',
				remote	 : '该用户名已经存在'
				
                /* required : '<?php echo $register_lang['login_register_input_username'];?>',
                lettersmin : '<?php echo $register_lang['login_register_username_range'];?>',
                lettersmax : '<?php echo $register_lang['login_register_username_range'];?>',
				lettersonly: '<?php echo $register_lang['login_register_username_lettersonly'];?>',
				remote	 : '<?php echo $register_lang['login_register_username_exists'];?>' */
            
			},
			
            password  : {
                
				required : '密码不能为空',
                minlength: '密码长度应在6-20个字符之间',
				maxlength: '密码长度应在6-20个字符之间'
				/* required : '<?php echo $register_lang['login_register_input_password'];?>',
                minlength: '<?php echo $register_lang['login_register_password_range'];?>',
				maxlength: '<?php echo $register_lang['login_register_password_range'];?>' */
            
			},
            password_confirm : {
				
				required : '请再次输入您的密码',
                equalTo  : '两次输入的密码不一致'
                /* required : '<?php echo $register_lang['login_register_input_password_again'];?>',
                equalTo  : '<?php echo $register_lang['login_register_password_not_same'];?>' */
				
            },
            mobile : {
                required : '手机号码不能为空',
				minlength: '手机号码长度应是11个字符',
				maxlength: '手机号码长度应是11个字符',
				remote	 : '该手机号码已经存在'
            },
			 mobile_code : {
                required : '短信验证码不能为空'
			 },
			<?php if(C('captcha_status_register') == '1') { ?>
            captcha : {
				
				required : '请输入验证码',
				remote	 : '验证码不正确'
               /*  required : '<?php echo $register_lang['login_register_input_text_in_image'];?>',
				remote	 : '<?php echo $register_lang['login_register_code_wrong'];?>' */
            },
			<?php } ?>
            agree : {
                
				required : '请阅读并同意该协议'
				//required : '<?php echo $register_lang['login_register_must_agree'];?>'
            }
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
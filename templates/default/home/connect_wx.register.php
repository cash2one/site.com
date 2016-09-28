<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="nc-login-layout">
  <div class="openid"><span class="avatar"><img src="<?php echo $output['headimgurl'];?>" /></span><span>您使用微信账号<a href="#register_form"><?php echo $output['user_info']['nickname']; ?></a>注册成功，系统为您随机新建商城用户名<br/>
    及密码，请牢记或自行修改；也可<a href="index.php">跳过该步骤</a>直接登录。</span></div>
  <div class="left-pic"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/login_openid.jpg" /> </div>
  <div class="nc-login">
    <div class="arrow"></div>
    <div class="nc-wx-mode">
      <ul class="tabs-nav">
        <li><a href="javascript:void(0);">完善账号信息<i></i></a></li>
      </ul>
      <div id="tabs_container" class="tabs-container">
        <div id="register" class="tabs-content">
          <form name="register_form" id="register_form" class="nc-login-form" method="post" action="index.php?act=connect_wx&op=edit_info">
            <input type="hidden" value="ok" name="form_submit">
            <dl>
              <dd>
                <span>用 户 名：</span><input type="text" value="<?php echo $_SESSION['member_name'];?>" id="user" name="user" class="text" readOnly/>
              </dd>
            </dl>
            <dl>
              <dd>
                <span>设置密码：</span><input type="text" value="<?php echo $output['password'];?>" id="password" name="password" class="text" tipMsg="<?php echo $lang['login_register_password_to_login'];?>"/>
              </dd>
            </dl>
            <dl class="mt15">
              <dd>
                <span>设置邮箱：</span><input type="text" id="email" name="email" class="text" tipMsg="<?php echo $lang['login_register_input_valid_email'];?>"/>
              </dd>
            </dl>
            <div class="submit-div">
              <input type="submit" name="submit" value="<?php echo $lang['login_register_enter_now'];?>" class="submit"/><a href="<?php echo SHOP_SITE_URL;?>" style="color:#F76F0F;display:inline-block;margin-left:14px;">以后再说，返回首页</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
/*屏蔽头部搜索及导航菜单*/
.head-search-bar, .head-user-menu, .public-nav-layout ,.header_log_span1,.header_log_span2  {
  display: none !important;
} 

  /* 注册表单样式 */
.nc-login-layout { width: 1000px; margin: 20px auto; position: relative; z-index: 1;}
.nc-login-layout .openid { font-size: 14px; color: #AAA; line-height: 20px; height: 40px; position: absolute; z-index: 1; top: 60px; right: 0;}
.nc-login-layout .openid span { vertical-align: top; display: inline-block; *display: inline; *zoom: 1;}
.nc-login-layout .openid .avatar { width: 40px; height: 40px; margin-right: 6px; border-radius: 100%;}
.nc-login-layout .openid .avatar img { width: 40px; height: 40px; border-radius: 100%;}
.nc-login-layout .openid a { font-weight: 600; margin: 0 4px;color:#F76F0F;}

.nc-login { z-index: 2;background-color: #FFF; width: 440px; height:350px;padding: 0px 19px; border: solid 1px #E6E6E6; border-radius: 4px; float:right; position: relative; z-index: 1;background: #F9F9F9; top: 30px;}
.nc-login .arrow { background: url(../images/login_pic.png) no-repeat -280px 0; width: 17px; height: 9px; position: absolute; z-index: 1; top: -9px; left: 160px;}
.nc-login .tabs-container { margin-top: 30px; padding: 0 40px;}
.nc-login .tabs-content { width: 352px; }
.nc-login .nc-login-form dl { width: 348px;}
.nc-login .nc-login-form dl dd .text { width: 240px;height:20px;margin:5px 0;text-indent: 3px;}
.nc-login .nc-login-form dl dd span{ width: 70px;display: inline-block;text-align: right;}
.nc-login .nc-login-form .submit-div .submit { padding: 5px 20px;background:#ffa223;border-radius: 5px;margin:10px auto;cursor: pointer;}
.nc-login .nc-login-form .submit-div{text-align: center;}
.nc-login-layout .left-pic { width: 450px; height: 350px; float:left; margin: 30px 0; position: relative; z-index:1;}
.nc-login-layout .left-pic img { max-width: 450px; max-height: 350px; position: absolute; z-index:1; top:0; left:0 }
.nc-login-layout .left-pic span { position:absolute; z-index: 2; top:220px; left:100px; line-height:32px; font-size: 24px; font-family:"microsoft yahei"; width: 250px; text-align: center; }
.nc-login-layout .left-pic p a { color: #FFF; position:absolute; z-index: 2; top:270px; left: 165px; line-height:28px; font-size: 12px; width: 120px; text-align: center; }

.tabs-nav { font-size: 0;  word-spacing:-1em; border-bottom: solid 1px #E6E6E6;height:32px;}
.tabs-nav li { vertical-align: bottom; letter-spacing: normal; word-spacing: normal; text-align: center; display: inline-block; *display: inline; width: 100%; height: 40px; margin-bottom: -1px; *zoom: 1;}
.tabs-nav li a { font-size: 18px; color: #999; line-height: 24px; padding-bottom: 13px; position: relative; z-index: 1;}
.tabs-nav li a:hover { text-decoration: none; color: #000;}
.tabs-nav li a.tabulous_active { color: #F32613; display: block; border-bottom: 3px solid #F32613}
.tabs-nav li a i { font-size: 0; line-height: 0; border-color: #F32613 transparent transparent transparent; border-style: solid dashed dashed dashed; border-width: 7px; display: none; width: 0; height: 0; margin-left: -4px; position: absolute; z-index: 1; left: 50%; bottom: -17px;}
.tabs-nav li a.tabulous_active i { display: block;}
.tabs-container { position: relative; z-index: 1;top:70px;}
.nc-register-mode .tabs-content { padding: 50px 80px 0 100px;}

</style>
<script type="text/javascript">
$(function(){
	//初始化Input的灰色提示信息  
	$('input[tipMsg]').inputTipText();
	//登录方式切换
	$('.nc-wx-mode').tabulous({
		 effect: 'flip'//动画反转效果
	});
    //注册表单验证
        $('#register_form').validate({
            errorPlacement: function(error, element){
            var error_td = element.parent('dd');
            error_td.append(error);
            element.parents('dl:first').addClass('error');
        },
        success: function(label) {
            label.parents('dl:first').removeClass('error').find('label').remove();
        },
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: 'index.php?act=login&op=check_email',
                        type: 'get',
                        data: {
                            email: function() {
                                return $('#email').val();
                            }
                        }
                    }
                }
        },
        messages : {
            password  : {
                required : '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_input_password'];?>',
                minlength: '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_password_range'];?>',
				maxlength: '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_password_range'];?>'
            },
            email : {
                required : '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_input_email'];?>',
                email    : '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_invalid_email'];?>',
				remote	 : '<i class="icon-exclamation-sign"></i><?php echo $lang['login_register_email_exists'];?>'
            }
        }
    });
});
</script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>注册－<?php echo ($f_siteTitle); ?></title>
<meta  name="keywords"  content="<?php echo C('keyword');?>">
<meta  name="description"  content="<?php echo C('content');?>">
<link  rel="shortcut icon"  href="<?php echo RES;?>/images/favicon.ico"  type="image/x-icon"> 
<link  href="<?php echo RES;?>/css/login.css"  rel="stylesheet"  type="text/css">
<script  type="text/javascript"  src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<link href="favicon.ico" rel="Shortcut Icon"></link>
</head>
<body>
	<div  class="collwe_logo"><a  href="<?php echo C('site_url');?>"></a></div>
	<div  class="reg_login">
		<h2>注册<?php echo ($f_siteName); ?></h2>
		  <form action="<?php echo U('Users/checkreg');?>" method="post" style="text-align: center;">
			<ul>
				<li  class="input_text">
				<label  for="username"  class="login_pad">帐号</label><input  type="text"  name="username"  id="err_username"  class="text"></li>
				<li  class="input_text"><label  for="password"  class="login_pad">密码</label><input  type="password"  name="password"  id="err_password"  class="text"></li>
				<li  class="input_text"><label  for="repassword"  class="login_pad">密码重复</label><input  type="password"  name="repassword"  id="err_repassword"  class="text"></li>
				<li  class="input_text"><label  for="email"  class="login_pad">邮箱</label><input  type="text"  name="email"  id="err_registeremail"  class="text"></li>
				<li  class="input_text"><th>验证码</th>
                        <td>
                        <script>
                        function refreshImg(){
                        	document.getElementById("txtCheckCode").src="/index.php?m=Index&a=verify&s="+Math.random();
                        }
                        </script>
                        <input name="verifycode" type="text" size="4" style="width:80px;" class="text" maxlength="4" />&nbsp;<img src="<?php echo U('Index/verify');?>" id="txtCheckCode"/>&nbsp;<a href="javascript:refreshImg();" style="color:#666">看不清？换一张</a></td></li>
				
				<input  type="hidden"  name="from"  value="">
				<li>
                <span>
				 <input  type="image" name="登陆<?php echo ($f_siteName); ?>"  src="<?php echo RES;?>/images/login.png">
				</span>
                </li>
			</ul>
		</form>
	</div>
	<div  class="footer">
	Copyright © 2011-<?php echo date('Y',time());?> <?php echo ($f_siteName); ?>, Inc. All Rights Reserved </div>
<div  style="display:none;">
<script  type="text/javascript">
$('.input_text input').focus(function(){
	$(this).prev().hide();
}).blur(function(){
	if(!$(this).val()){
		$(this).prev().show();
	}
})
</script>
</div>
</body></html>
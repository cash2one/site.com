<?php if (!defined('THINK_PATH')) exit(); if($usertplid == 2){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<link rel=​"stylesheet" type=​"text/​css" href=​"/​tpl/​User/​default/​common/​css/style_tanceng.css?BPm" />
<link rel=​"stylesheet" type=​"text/​css" href=​"/tpl/User/default/common/css/animate.css?BPm" />
</head>
<body id="nv_member" class="pg_CURMODULE">
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid != 0): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:101px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: right; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
    MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome"></div>
    <div class="memberinfo"  id="destoon_member">   
        <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php echo U('Index/login');?>">注册</a>
            <?php else: ?>
            你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
            <a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>   
    </div>
</div>
    <div class="logo">
        <div style="float:left"><h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" height="55" /></a></h1></div>
            
            <div class="navr">
            <ul id="topMenu">
                <li style="width:85px"></li>
                <?php if($typsz['help'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 6): ?><li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/help'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>帮助中心<?php else: echo ($pigvo['name']); endif; ?></a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li><?php endif; ?>
                <?php if($typsz['login'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 5): ?><li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('User/Index/index'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>管理中心<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li><?php endif; ?>
                <?php if($typsz['common'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 4): ?><li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/common'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>产品案例<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">产品案例</a></li><?php endif; ?>
                <?php if($typsz['prize'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 3): ?><li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/price'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>资费说明<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li><?php endif; ?>
                <?php if($typsz['about'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 2): ?><li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/about'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>关于我们<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li><?php endif; ?>
                <?php if($typsz['fc'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 1): ?><li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/fc'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>功能介绍<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li><?php endif; ?>                
                <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>       
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>


<div id="mu" class="cl"></div>
</div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp">
    <?php if($usertplid == 0): ?><link href="./tpl/User/default/common/css/style.css?id=103" rel="stylesheet" type="text/css" />
  <?php else: ?>
    <link href="./tpl/User/default/common/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" /><?php endif; ?>
 <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle">
        <h2>管理平台</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        <div class="sideBar">
          <div class="catalogList">
            <ul class="<?php if($usertplid != 0): ?>newskin<?php endif; ?>">
            	<li class="subCatalogList"> <a class="secnav_1" href="<?php echo U('Index/useredit');?>">修改密码</a> </li>
				<li class=" subCatalogList "> <a class="secnav_2" href="<?php echo U('Index/index');?>">我的公众号</a></li>
				<li class=" subCatalogList "> <a class="secnav_3" href="<?php if(($hasWeixin) == "0"): ?>javascript:alert('您不可以使用此功能，请联系您的网站管理员处理');<?php else: echo U('Index/add'); endif; ?>">添加公众号</a> </li>
				<li class=" subCatalogList "> <a class="secnav_4" href="<?php echo U('Alipay/index');?>">会员充值</a> </li>
				<li class=" subCatalogList "> <a class="secnav_6" href="<?php echo U('Sms/index');?>">短信管理</a> </li>
				<?php if($thisUser['invitecode']): ?><li class=" subCatalogList "> <a class="secnav_7" href="<?php echo U('Index/invite');?>">邀请朋友</a> </li><?php endif; ?>
        <li class=" subCatalogList "> <a class="secnav_8" href="<?php echo U('Index/switchTpl');?>">切换模板</a> </li>
        <li class=" subCatalogList "> <a class="secnav_9" href="<?php if(C('open_biz') == 0): ?>javascript:alert('请联系站长在后台开启企业号');<?php else: echo U('Index/add',array('biz'=>1)); endif; ?>">添加企业号</a> </li>
            </ul>
          </div>
        </div>

<div class="content">
<form action="<?php if(C('pay_type') == 'tenpay'): echo U('Tenpay/recharge'); else: echo U('Alipay/recharge'); endif; ?>" method="post" onsubmit="return checkcz()">
<table class="table table-hover" style="width:300px;">
<!-- <tr>
  <td><li style="display:none"> <b>充值用户名: </b></td><td><input type="text" name="uname" value="<?php echo (session('uname')); ?>" size="60" > <b>充值帐号,默认即可请勿修改</b></td></li>
</tr> -->
<tr>
  <li><td><b>账户余额: </td><td></b><input type="text" style="border:none;width:30px;" name="moneybalance" value="<?php echo ($thisUser["moneybalance"]); ?>" id="needmoneybalanceprice" size="10" disabled> 元<b></b></td></li>
</tr>
<tr>
  <li><td><b>充值金额: </td><td></b><input type="text" name="price" style="width:50px;" value="<?php echo ($user["price"]); ?>" id="price" size="10"> 元 <b></b></td></li>
</tr>
<tr>
  <li><td colspan="2" style="text-align:center;"><span class="bottonbox"><button class="btnGrayS" type="submit" style="text-align:center;">确 认</button></span></td></li>
</tr>
</table>
</form>
<?php }else{ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">

<div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid != 0): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:101px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: right; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
    MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome"></div>
    <div class="memberinfo"  id="destoon_member">   
        <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php echo U('Index/login');?>">注册</a>
            <?php else: ?>
            你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
            <a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>   
    </div>
</div>
    <div class="logo">
        <div style="float:left"><h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" height="55" /></a></h1></div>
            
            <div class="navr">
            <ul id="topMenu">
                <li style="width:85px"></li>
                <?php if($typsz['help'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 6): ?><li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/help'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>帮助中心<?php else: echo ($pigvo['name']); endif; ?></a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li><?php endif; ?>
                <?php if($typsz['login'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 5): ?><li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('User/Index/index'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>管理中心<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li><?php endif; ?>
                <?php if($typsz['common'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 4): ?><li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/common'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>产品案例<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">产品案例</a></li><?php endif; ?>
                <?php if($typsz['prize'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 3): ?><li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/price'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>资费说明<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li><?php endif; ?>
                <?php if($typsz['about'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 2): ?><li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/about'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>关于我们<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li><?php endif; ?>
                <?php if($typsz['fc'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 1): ?><li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/fc'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>功能介绍<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li><?php endif; ?>                
                <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>       
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>



<div id="wp" class="wp"><link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css">
 <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle" style="padding: 20px;">
        <h2>会员充值</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        <div class="sideBar">
          <div class="catalogList">
            <ul>
    
        <li > <a href="index.php?g=User&amp;m=Index&amp;a=index">我的公众号</a></li>
        <li class=" subCatalogList "><a href="index.php?g=User&amp;m=Index&amp;a=add">添加公众号</a> </li>
        <li class="selected"> <a href="/index.php?g=User&m=Alipay&a=index">会员充值</a> </li>
            </ul>
          </div>
        </div>
<script src="./tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script>
function addFee(){
  art.dialog.open('?g=User&m=Alipay&a=add',{lock:true,title:'充值续费',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.45});
}
</script>

<div class="content">
<style>
.usercontent ul li{
float:none;
line-height:50px;
padding-left:10px;
}
input{border: 1px solid #DDDDDD;height:30px;width:200px;margin-left:10px;}
.new-btn-login{
    background-color: transparent;
    background-image: url("<?php echo RES;?>/images/img/new-btn-fixed.png");
    border: medium none;
  border:1px solid red;
  
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
  color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
  
}
.new-btn-login:hover{
  background-position: 0 -167px;
  width: 82px;
  color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bottonbox{
border: 1px solid #D74C00;
padding: 1px;
display: inline-block;
}
</style>
<script>

$(function(){

});
function checkcz(){
  return true;
}
</script>
<div class="usercontent">
<ul>
<form action="<?php if(C('pay_type') == 'tenpay'): echo U('Tenpay/recharge'); else: echo U('Alipay/recharge'); endif; ?>" method="post" onsubmit="return checkcz()">
  <li style="display:none"> <b>充值用户名: </b><input type="text" name="uname" value="<?php echo (session('uname')); ?>" size="60" > <b>充值帐号,默认即可请勿修改</b></li>
  <li> <b>账户余额: </b><input type="text" style="border:none;width:30px;" name="moneybalance" value="<?php echo ($thisUser["moneybalance"]); ?>" id="needmoneybalanceprice" size="10" disabled> 元<b></b> <span style="margin-left:50px"><a href="###" onclick="addFee()" id="smemberss" class="green"><em>升级vip续费</em></a></span></li>
  <li> <b>充值金额: </b><input type="text" name="price" style="width:50px;" value="<?php echo ($user["price"]); ?>" id="price" size="10"> 元 <b></b></li>

  <li><span class="bottonbox"><button class="new-btn-login" type="submit" style="text-align:center;">确 认</button></span></li>
</ul>
<?php } ?>
        <div class="clr"></div>
      </div>
          <div class="cLine">
            <div class="pageNavigator right">
              <div class="pages"></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
</div>

</div>

</div>

</div>

</div>

</div>

<?php if($_SESSION['is_syn']== 0): ?><style>

.IndexFoot {

	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px

}

.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}

.foot .foot_page{ float:left; width:600px;color:white;}

.foot .foot_page a{ color:white; text-decoration:none;}

#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}

.alert-success{color: #993300;background-color: #fcf8e3;border-color: #faebcc;}

</style>



<?php
 if($ischild == 1){ if($usertplid == 2){ $usertplid =1; } } ?>

<?php if($usertplid != 2): ?><div class="IndexFoot" style="height:120px;clear:both">

<div class="foot" style="padding-top:20px;">

<div class="foot_page" >

<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>,微信公众平台营销</a><br/>

帮助您快速搭建属于自己的营销平台,构建自己的客户群体。

</div>

<div id="copyright" style="color:white;">

	<?php echo ($f_siteName); ?>(c)版权所有 <br/>

	技术支持：广州壹正信息科技有限公司



</div>

    </div>

</div><?php endif; ?>

<!-- 帮助悬浮开始 -->

<?php  $data_g=GROUP_NAME; $server = getUpdateServer(); $users=M('Users')->where(array('id'=>$_SESSION['uid']))->find(); if(C('close_help') == 1 && $users['sysuser'] == 0){ $data_g='notingh'; }else{ $textHelp=0; } ?>     

<?php if($usertplid == 2): if(C('close_help') != 1){ $data = array( 'key' => C('server_key'), 'domain' => C('server_topdomain'), 'is_text' => $textHelp, 'data_g' => $data_g, 'data_m' => MODULE_NAME, 'data_a' => ACTION_NAME ); if(!C('emergent_mode')): if(function_exists('curl_init')){ $ch = curl_init(); curl_setopt($ch, CURLOPT_TIMEOUT, 4); curl_setopt($ch, CURLOPT_URL, 'http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data)); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HEADER, 0); $content = curl_exec($ch);curl_close($ch); }else{ $opts = array( 'http'=>array( 'method'=>'GET', 'timeout'=>4, ) ); $fp= stream_context_create($opts); $content = file_get_contents( 'http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data), false, $fp); fpassthru($fp); } endif; $content = json_decode($content,true); } ?>

</div>

</div>

<style>

	.tab ul li{padding:0 11px}

	.alert h4 {color: #000;}

	#tags .btnGreen{background-color: #44b549;}

	#tags .btnGreen:hover,#tags .btnGreen:focus,#tags .btnGreenactive{background-color: #44b549;border-color: #44b549;color: #FFFFFF;}

	.mini-navbar .nav > li:nth-last-child(13) ul{margin-top: -421px;}

	.mini-navbar .nav > li:nth-last-child(3) ul{margin-top: -159px;}

	.mini-navbar .nav > li:nth-last-child(4) ul{margin-top: -427px;}

	.mini-navbar .nav > li:nth-last-child(10) ul{margin-top: -85px;}

	#js_editform{width:618px;}

	.lianjie{background: #44b549;color: #fff;margin: 0px 15px;padding: 5px 10px;border-radius: 6px;font-size: 11px;line-height: 14px;margin-top: 3px;}

	.lianjie a:link{color: #fff;}

	.lianjie a:hover {color: #000;}

</style>

<div class="small-chat-box fadeInRight animated" style="margin-right: 100px;margin-bottom:100px;">

        <div class="heading" draggable="true">

             <center><a style="height: auto;width: auto;display: initial;background:#2f4050;padding: 0px 0px 0px 50px;text-align:center;color:#fff;border-radius:0;margin-right:0px;margin-bottom: 0px;" class="open-small-chat">相关帮助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</a></center>	

        </div>

        <div class="content" style="height:220px;">

		<span class="help_content"></span>

			<span class="loading" >

				<img  style="margin-left:50px;" src="./tpl/static/cutprice/js/artDialog/skins/icons/loading.gif" /> 正在加载帮助教程...

			</span>

        </div>

        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank"><div class="form-chat btn btn-primary" style="  text-align: center;">

        在线客服

        </div></a>

    </div>

    <div id="small-chat">

        <span class="badge badge-warning pull-right">不懂就点我</span>

        <a class="open-small-chat">

            <i class="fa fa-weixin" style="width:70px;font-size:40px;"></i>帮助

        </a>

    </div>

</div>

<script type="text/javascript">

		var oDiv1 = document.getElementById('small-chat');

		oDiv1.onclick = function(){

		var flag = true;

			if(flag) {

				$.ajax({

					type : 'GET',

					url : '<?php echo U('User/Index/ajax_help', array('group'=>GROUP_NAME,'module'=>MODULE_NAME, 'action'=>ACTION_NAME)); ?>',

					dataType : 'html',

					success : function (data) {

						if (data) {

							$('.help_content').html(data);

						}

						flag = false;

						$('.loading').hide();

					}

				});

			}

		}

		function openwin(url,iHeight,iWidth){

			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;

			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");

		}

	</script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/bootstrap.min.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/inspinia.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/pace/pace.min.js"></script>

<?php else: ?>

	<?php if(C('close_help') == 0): ?>

	<link href="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/css/zuoce.css" type="text/css" rel="stylesheet"/>

	<div class="zuoce zuoce_clear">

		<div id="Layer1">

			<a href="javascript:"><img src="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/images/ou_03.png"/></a>

		</div>

		<div id="Layer2" style="display:none;height:400px;overflow-y:scroll;">

			<p class="xiangGuan zuoce_clear">相关帮助</p>

			<span class="help_content"></span>

			<span class="loading" >

				<img  style="margin-left:50px;" src="./tpl/static/cutprice/js/artDialog/skins/icons/loading.gif" /> 正在加载帮助教程...

			</span>

			

			<!--p class="anNiuo clear"><a href="#">进入帮助中心27</a></p-->

			<p class="anNiut zuoce_clear"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank">在线客服</a></p>

		</div>

	</div>

	<script type="text/javascript">

		window.onload = function(){

			var oDiv1 = document.getElementById('Layer1');

			var oDiv2 = document.getElementById('Layer2');

			var flag = true;

			oDiv1.onclick = function(){

				oDiv2.style.display = oDiv2.style.display == 'block' ? 'none' : 'block';

				if(flag) {

					$.ajax({

						type : 'GET',

						url : '<?php echo U('User/Index/ajax_help', array('group'=>GROUP_NAME,'module'=>MODULE_NAME, 'action'=>ACTION_NAME)); ?>',

						dataType : 'html',

						success : function (data) {

							if (data) {

								$('.help_content').html(data);

							}

							flag = false;

							$('.loading').hide();

						}

					});

				}

			}

		}

		function openwin(url,iHeight,iWidth){

			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;

			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");

		}

	</script>

	<?php endif; endif; ?>

<!-- 帮助悬浮结束 -->

<div style="display:none">

<?php echo ($alert); ?> 

<?php echo base64_decode(C('countsz'));?>

</div><?php endif; ?>

</body>



<?php if(MODULE_NAME == 'Function' && ACTION_NAME == 'welcome'){ ?>

<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>



<script type="text/javascript">





    var myChart = echarts.init(document.getElementById('main')); 

   



    var option = {

        title : {

            text: '<?php if($charts["ifnull"] == 1): ?>本月关注和文本请求数据统计示例图(您暂时没有数据)<?php else: ?>本月关注和文本请求数据统计<?php endif; ?>',

            x:'left'

        },

        tooltip : {

            trigger: 'axis'

        },

        legend: {

            data:['文本请求数','关注数'],

            x: 'right'

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: false},

                dataView : {show: false, readOnly: false},

                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},

                restore : {show: false} ,

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        xAxis : [

            {

                type : 'category',

                boundaryGap : false,

                data : [<?php echo ($charts["xAxis"]); ?>]

            }

        ],

        yAxis : [

            {

                type : 'value'

            }

        ],

        series : [

            {

                name:'文本请求数',

                type:'line',

                tiled: '总量',

                data: [<?php echo ($charts["text"]); ?>]

            },    

            {

                "name":'关注数',

                "type":'line',

                "tiled": '总量',

                data:[<?php echo ($charts["follow"]); ?>]

            }

       



        ]



    };                   



    myChart.setOption(option); 





    var myChart2 = echarts.init(document.getElementById('pieMain')); 

               

    var option2 = {

        title : {

            text: '<?php if($pie["ifnull"] == 1): ?>7日内粉丝行为分析示例图(您暂时没有数据)<?php else: ?>7日内粉丝行为分析<?php endif; ?>',

            x:'center'

        },

        tooltip : {

            trigger: 'item',

            formatter: "{a} <br/>{b} : {c} ({d}%)"

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: true},

                dataView : {show: true, readOnly: false},

                restore : {show: true},

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        series : [

            {

                name:'粉丝行为统计',

                type:'pie',

                radius : ['50%', '70%'],

                itemStyle : {

                    normal : {

                        label : {

                            show : false

                        },

                        labelLine : {

                            show : false

                        }

                    },

                    emphasis : {

                        label : {

                            show : true,

                            position : 'center',

                            textStyle : {

                                fontSize : '18',

                                fontWeight : 'bold'

                            }

                        }

                    }

                },

                data:[ 

                    <?php echo ($pie["series"]); ?>

                

                ]

            }

        ]

    };

     myChart2.setOption(option2,true); 





    var myChart3 = echarts.init(document.getElementById('pieMain2')); 

    var option3 = {

        title : {

            text: '<?php if($sex_series["ifnull"] == 1): ?>会员性别统计示例图(您暂时没有数据)<?php else: ?>会员性别统计<?php endif; ?>',

            x:'center'

        },

        tooltip : {

            trigger: 'item',

            formatter: "{a} <br/>{b} : {c} ({d}%)"

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: true},

                dataView : {show: true, readOnly: false},

                restore : {show: true},

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        series : [

            {

                name:'会员性别统计',

                type:'pie',

                radius : ['50%', '70%'],

                itemStyle : {

                    normal : {

                        label : {

                            show : false

                        },

                        labelLine : {

                            show : false

                        }

                    },

                    emphasis : {

                        label : {

                            show : true,

                            position : 'center',

                            textStyle : {

                                fontSize : '18',

                                fontWeight : 'bold'

                            }

                        }

                    }

                },

                data:[

                  <?php echo ($sex_series['series']); ?>

                ]

            }

        ]

    };                     



  myChart3.setOption(option3,true); 







    </script>

<?php } ?>



<?php if(MODULE_NAME == 'RecognitionData' && ACTION_NAME == 'index'){?>

	<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>



	<script type="text/javascript">

	<?php if($_GET['rid'] != ''){?>

		var myChart = echarts.init(document.getElementById('main')); 

	   



		var option = {

			title : {

				//text: '<?php if($charts["ifnull"] == 1): ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计示例图（没有数据）<?php else: ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计<?php endif; ?>',

				x:'left'

			},

			tooltip : {

				trigger: 'axis'

			},

			legend: {

				data:['每日扫描次数','每日扫描人数'],

				x: 'right'

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: false},

					dataView : {show: false, readOnly: false},

					magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},

					restore : {show: false} ,

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			xAxis : [

				{

					type : 'category',

					boundaryGap : false,

					data : [<?php echo ($charts["xAxis"]); ?>]

				}

			],

			yAxis : [

				{

					type : 'value'

				}

			],

			series : [

				{

					name:'每日扫描次数',

					type:'line',

					tiled: '总量',

					data: [<?php echo ($charts["cishu"]); ?>]

				},    

				{

					"name":'每日扫描人数',

					"type":'line',

					"tiled": '总量',

					data:[<?php echo ($charts["renshu"]); ?>]

				}

		   



			]



		};                   



		myChart.setOption(option); 

	<?php }else{?>

		var myChart2 = echarts.init(document.getElementById('pieMain')); 

				   

		var option2 = {

			title : {

				//text: '<?php if($cishu["ifnull"] == 1): ?>本月扫描次数分析示例图（没有数据）<?php else: ?>本月扫描次数分析图<?php endif; ?>',

				x:'center'

			},

			tooltip : {

				trigger: 'item',

				formatter: "{a} <br/>{b} : {c} ({d}%)"

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: true},

					dataView : {show: true, readOnly: false},

					restore : {show: true},

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			series : [

				{

					name:'本月扫描次数统计',

					type:'pie',

					radius : ['50%', '70%'],

					itemStyle : {

						normal : {

							label : {

								show : false

							},

							labelLine : {

								show : false

							}

						},

						emphasis : {

							label : {

								show : true,

								position : 'center',

								textStyle : {

									fontSize : '18',

									fontWeight : 'bold'

								}

							}

						}

					},

					data:[ 

						<?php echo ($cishu["series"]); ?>

					

					]

				}

			]

		};

		 myChart2.setOption(option2,true); 

		 

		 

		

		var myChart3 = echarts.init(document.getElementById('pieMain2')); 

		var option3 = {

			title : {

				//text: '<?php if($renshu["ifnull"] == 1): ?>本月扫描人数分析示例图（没有数据）<?php else: ?>本月扫描人数分析图<?php endif; ?>',

				x:'center'

			},

			tooltip : {

				trigger: 'item',

				formatter: "{a} <br/>{b} : {c} ({d}%)"

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: true},

					dataView : {show: true, readOnly: false},

					restore : {show: true},

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			series : [

				{

					name:'本月扫描人数统计',

					type:'pie',

					radius : ['50%', '70%'],

					itemStyle : {

						normal : {

							label : {

								show : false

							},

							labelLine : {

								show : false

							}

						},

						emphasis : {

							label : {

								show : true,

								position : 'center',

								textStyle : {

									fontSize : '18',

									fontWeight : 'bold'

								}

							}

						}

					},

					data:[

					  <?php echo ($renshu['series']); ?>

					]

				}

			]

		};                     



	  myChart3.setOption(option3,true); 

	<?php }?>

	</script>

<?php }?>

</html>
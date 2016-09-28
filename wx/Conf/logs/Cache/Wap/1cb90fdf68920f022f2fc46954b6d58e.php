<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title><?php echo ($res["title"]); ?>-<?php echo ($tpl["wxname"]); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/yl/news.css" rel="stylesheet" type="text/css" />

<script src="<?php echo RES;?>/js/yl/audio.min.js" type="text/javascript"></script>
<?php if($res['is_focus'] == '0'): ?><style>
#content .is_hidden{display: none;}
</style><?php endif; ?>
    <script>
      audiojs.events.ready(function() {
        audiojs.createAll();
      });
    </script>
</head> 
<script>
window.onload = function ()
{
var oWin = document.getElementById("win");
var oLay = document.getElementById("overlay");	
var oBtn = document.getElementById("popmenu");
var oClose = document.getElementById("close");
oBtn.onclick = function ()
{
oLay.style.display = "block";
oWin.style.display = "block"	
};
oLay.onclick = function ()
{
oLay.style.display = "none";
oWin.style.display = "none"	
}
};
</script>
<body id="news">
<div id="ui-header">
<div class="fixed">
<a class="ui-title" id="popmenu">选择分类</a>
<a class="ui-btn-left_pre" href="javascript:history.go(-1)"></a>
<a class="ui-btn-right_home" href="<?php echo U('Index/index',array('token'=>$tpl['token']));?>"></a>
</div>
</div>
<div id="overlay"></div>
<div id="win">
<ul class="dropdown"> 
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/lists',array('token'=>$vo['token'],'classid'=>$vo['id']));?>"><span><?php echo ($vo["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
 	
<div class="clr"></div>
</ul>
</div>
<div class="Listpage">
<div class="top46"></div>
<div class="page-bizinfo">

<div class="header" style="position: relative;">
<h1 id="activity-name"><?php echo ($res["title"]); ?></h1>
<span id="post-date"><?php echo (date("y-m-d",$res["createtime"])); ?></span>
</div>
<a id="biz-link" class="btn" href="<?php echo U('Index/index',array('token'=>$res['token']));?>"  data-transition="slide" >
<div class="arrow">
<div class="icons arrow-r"></div>
</div>
<div class="logo">
<div class="circle"></div>
<img id="img" src="<?php echo ($tpl["headerpic"]); ?>">
</div>
<div id="nickname"><?php echo ($tpl["wxname"]); ?></div>
<div id="weixinid">微信号:<?php echo ($tpl["weixin"]); ?></div>
</a>
<?php if(($res["showpic"]) == "1"): ?><div class="showpic"><img src="<?php echo ($res["pic"]); ?>" /></div><?php endif; ?>
<div class="text" id="content">
<?php echo (htmlspecialchars_decode($res["info"])); ?>
</div>

 <script>

function dourl(url){
location.href= url;
}
</script>

</div>	

    <div class="list">
<div id="olload">
<span>往期回顾</span>
</div>

<div id="oldlist">
<ul>
  <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lo): $mod = ($i % 2 );++$i;?><li class="newsmore">
	<!--在整合列表页和分类也的时候，这里修改过模板-->
		<a href="<?php echo U('Index/content',array('token'=>$lo['token'],'id'=>$lo['id'],'classid'=>intval($_GET['classid'])));?>">
		<div class="olditem">
		<div class="title"><?php echo ($lo["title"]); ?></div> 
		</div>
		</a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
   <a class="more" href="<?php echo U('Index/lists',array('token'=>$res['token'],'classid'=>$res['classid']));?>">更多精彩内容</a>	</div>
</div>
<a class="footer" href="#news" target="_self"><span class="top">返回顶部</span></a>

</div>

 <div style="display:none"><?php echo (htmlspecialchars_decode($res["tongji"])); ?></div>

  <div class="copyright">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div> 
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> <style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0;}
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.top_menu { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 45px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#697077), to(#3F434E), color-stop(60%, #464A53)); box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; background: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(0, 0, 0, 0.1)), color-stop(50%, rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.5))), -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255, 255, 255, 0.1)), color-stop(50%, rgba(255, 255, 255, 0.15)), to(rgba(255, 255, 255, 0.15))); ; -webkit-background-size:1px 100%, 1px 100%; background-size:1px 100%, 1px 100%; background-position: 1px center, 2px center; background-repeat: no-repeat; position:relative; text-align:center; width:33%; }
.top_menu>li:first-child { background:none; }
.top_bar .top_menu>li>a { line-height:45px; display:block; text-align:center; color:#d5d5d5; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.6); -webkit-box-flex:1; }
.top_bar .top_menu li a label { padding:0; font-size:14px; overflow:hidden; }
.top_bar .top_menu>li>a img { display: inline-block; height: 14px; width: 14px; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { padding: 0; position: absolute; z-index: 500; bottom: 60px; right: 10px; width: 100px; margin-left:0; background: red; border: 1px solid #3D3D46; border-radius: 5px; background: -webkit-gradient(linear, 0 0, 0 100%, from(#697077), to(#3F434E), color-stop(60%, #464A53)); box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
.menu_font:before, .menu_font:after { content:""; display:inline-block; position:absolute; z-index:240; bottom:0; left: 80%; margin-left:-8px; margin-bottom:-16px; width:0; height:0; border:8px solid red; border-color:#3D3D46 transparent transparent transparent; }
.menu_font:after { z-index:501; border-color:#3F434E transparent transparent transparent; margin-bottom:-15px; margin-left:-8px; }
.menu_font.hidden { display:none; }
.top_menu li:last-of-type a { background: none; }
.top_menu>li:last-of-type>a label { padding: 0 0 0 3px; }
.menu_font li:first-child { background: none; }
.menu_font li { line-height:50px; text-align:center; background: -webkit-gradient(linear, 0 0, 100% 0, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0)), color-stop(50%, rgba(255, 255, 255, 0.15))), -webkit-gradient(linear, 0 0, 100% 0, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0)), color-stop(50%, rgba(0, 0, 0, 0.4))); background-size:100% 1px, 100% 1px; background-repeat:no-repeat; background-position: center 2px, center 1px; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 50px; line-height: 50px !important; position: relative; color:#d5d5d5; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.6); display: block; width: 100%; text-align:center; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
#menu_list0 { right:0; left:10px; }
#menu_list0:before, #menu_list0:after { left: 20%; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333; }
.menu_font li a:hover, .menu_font li a:active { background-color:#333; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
#cate17 .device {margin-bottom: 46px;}
#cate17 #indicator {bottom: 130px;}
.copyright{margin-bottom:20px;}
</style>
 
<div id="sharemcover" onclick="document.getElementById(&#39;sharemcover&#39;).style.display=&#39;&#39;;" style=" display:none"><img src="./style14_files/MgnnofmleM.png"></div>

<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
    <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a <?php if($vo['vo']){echo 'onclick="javascript:displayit('.$vo['k'].')"';}else{echo 'href="'.$vo['url'].'"';}?>><label><?php echo ($vo["name"]); ?></label></a>
        <?php if ($vo['vo']){ ?>
            <ul id="menu_list<?php echo ($vo['k']); ?>" class="menu_font" style=" display:none">
            <?php if(is_array($vo['vo'])): $i = 0; $__LIST__ = $vo['vo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo ($vo["url"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
             <?php
 } ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div>
<!-- share -->

		<script type="text/javascript">

			window.shareData = {  
				"moduleName":"Img",
				"moduleID": '<?php echo (intval($_GET["id"])); ?>',
				"imgUrl": "<?php echo ($res["pic"]); ?>", 
				"timeLineLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"weiboLink": "<?php echo ($f_siteUrl); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid'],'id'=>intval($_GET['id'])));?>",
				"tTitle": "<?php echo ($res["title"]); ?>-<?php echo ($tpl["wxname"]); ?>",
				"tContent": "<?php echo (str_replace('"','',str_replace("\r\n",' ',mb_substr(trim(strip_tags(htmlspecialchars_decode($res["text"]))),0,30,'utf-8')))); ?>"
			};
		</script>	

<?php echo ($shareScript); ?>
</body>
</html>
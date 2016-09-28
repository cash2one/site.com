<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style>
body{line-height:180%;}
ul.modules li{padding:4px 10px;margin:4px;background:#efefef;float:left;width:27%;}
ul.modules li div.mleft{float:left;width:40%}
ul.modules li div.mright{float:right;width:55%;text-align:right;}
</style>
</head>
<body style="background:#fff;padding:20px 20px;">
<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;">使用方法：点击对应内容后面的“选中”即可。<a href="?g=User&m=Link&a=insert<?php if (intval($_GET['iskeyword'])){?>&iskeyword=1<?php }?>">点击这里返回模块选择</a></div>
<div style="width: 200px;float: left;"><h4><?php echo ($moduleName); ?>列表</h4> </div>
<?php if($img == 1): ?><div style="float:right;"><form method="post" enctype="multipart/form-data" >
<input type="text" name="ssimg" placeholder="输入图文标题" class="px" style="width:180px;height: 14px;margin-bottom:5px;">
<input type="submit" value="搜索" style="background-image: none !important;border: none !important;text-shadow: none !important;margin-left: 5px;padding: 2px 8px !important;cursor: pointer !important;display: inline-block !important;overflow: visible !important;-webkit-border-radius: 2px !important;background-color: #44b549 !important;color: #fff !important;font-size: 14px !important;"></form></div><?php endif; ?>
<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
<thead>
<tr>
<th>标题</th>
<th style=" width:80px;">操作 <span class="tooltips" ><?php if($usertplid == 2): ?><i class="fa fa-bullhorn" style="color:#1ab394;"></i><?php else: ?><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><?php endif; ?><span>
<p>点击“选中”即可</p>
</span></span></th>
</tr>
</thead>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($m["name"]); ?></td><td class="norightborder"><a href="###" onclick="returnHomepage('<?php if (!intval($_GET['iskeyword'])){ echo ($m["linkcode"]); }else{ echo ($m["keyword"]); }?>')">选中</a> <?php if($m['sub'] != NULL): if (!intval($_GET['iskeyword'])){?>&nbsp;<a href="<?php echo ($m["sublink"]); ?>">详情</a><?php } endif; ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="footactions" style="padding-left:10px">
  <div class="pages"><?php echo ($page); ?></div>
</div>
<script>
var domid=art.dialog.data('domid');
// 返回数据到主页面
function returnHomepage(url){
	var origin = artDialog.open.origin;
	var dom = origin.document.getElementById(domid);
	dom.value=url;
	setTimeout("art.dialog.close()", 100 )
}
</script>
</body>
</html>
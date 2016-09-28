<?php
defined('InShopNC') or exit('Access Invalid!');

$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$uachar = "/(nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|mobile)/i";
if (($ua == '' || preg_match($uachar, $ua)) && !strpos(strtolower($_SERVER['REQUEST_URI']), 'wap')) {
    global $config;
    if (!empty($config['wap_site_url'])) {
        $url = $config['wap_site_url'];
        switch ($_GET['act']) {
            case 'goods':
                $url .= '/tmpl/product_detail.html?goods_id=' . $_GET['goods_id'];
                break;
            case 'store_list':
                $url .= '/shop.html';
                break;
            case 'show_store':
                $url .= '/tmpl/go_store.html?store_id=' . $_GET['store_id'];
                break;
        }
    } else {
        $url = $config['site_url'];
    }
    header('Location:' . $url);
    exit();
    if (!empty($Loaction)) {
        header("Location: $Loaction\n");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
	
	<head lang="en">
		
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo SHOP_SITE_URL;?>/resource/newcss/index-1.css"/>
		<style>
			
			body{
				background-color:#000;
                <!--width: 100%; -->
                height: 100%;
                position: absolute;
			}
			a{text-decoration:none}
			
			.d1,.d3,.d4{
			 margin:5px 0px;
			 width:200px;
			 background-color:#eee;
			}
			.d1{
			 border:1px solid #444;
			 height:100px;
			 padding:15px 15px 5px;
			}
			
		</style>
		
	</head>
	<body class="login-layout">
		
		<a href="index.php?act=seller_login&op=show_login" style="margin:3% 0 0 72%;height:25px;">
			<img src="<?php echo SHOP_SITE_URL;?>/resource/newimg/lALOSYNW_yjMtA_180_40.png" style="margin:3%"/>
		</a>
	
	</body>
</html>
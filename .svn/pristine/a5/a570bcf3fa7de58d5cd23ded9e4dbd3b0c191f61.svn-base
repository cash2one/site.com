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
<!doctype html>
<html lang="zh">
 <html xmlns:wb="http://open.weibo.com/wb">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
        <title><?php echo $output['html_title']; ?></title>
        <meta name="keywords" content="<?php echo $output['seo_keywords']; ?>" />
        <meta name="description" content="<?php echo $output['seo_description']; ?>" />
               <!-- 新浪微博第三方登录-->
<meta property="wb:webmaster" content="09a8f004a5a1377a" />
<meta property="qc:admins" content="36543447376716451356375" />
        <?php echo html_entity_decode($output['setting_config']['qq_appcode'], ENT_QUOTES); ?><?php echo html_entity_decode($output['setting_config']['sina_appcode'], ENT_QUOTES); ?><?php echo html_entity_decode($output['setting_config']['share_qqzone_appcode'], ENT_QUOTES); ?><?php echo html_entity_decode($output['setting_config']['share_sinaweibo_appcode'], ENT_QUOTES); ?>
        <style type="text/css">
            body {
                _behavior: url(<?php echo CMS_TEMPLATES_URL;
        ?>/css/csshover.htc);
            }
        </style>
        <link rel="shortcut icon" href="<?php echo BASE_SITE_URL; ?>/favicon.ico" />
        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/base.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/base2.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/home_header.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/home_login.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/layout.css" rel="stylesheet" type="text/css">

        <!--Freamwork 模板样式 start-->

        <link href="<?php echo CMS_TEMPLATES_URL; ?>/css/font-awesome.min.css" rel="stylesheet" />

        <!--            [if IE 7]>
                      <link rel="stylesheet" href="<?php echo CMS_TEMPLATES_URL; ?>/css/font-awesome-ie7.min.css">
                    <![endif]
                     HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
                    [if lt IE 9]>
                          <script src="<?php echo RESOURCE_SITE_URL; ?>/js/html5shiv.js"></script>
                          <script src="<?php echo RESOURCE_SITE_URL; ?>/js/respond.min.js"></script>
                    <![endif]
                    [if IE 6]>
                    <script src="<?php echo RESOURCE_SITE_URL; ?>/js/IE6_PNG.js"></script>
                    <script>
                    DD_belatedPNG.fix('.pngFix');
                    </script>
                    <script>
                    // <![CDATA[
                    if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
                    try{
                    document.execCommand("BackgroundImageCache", false, true);
                       }
                    catch(e){}
                    // ]]>
                    </script>
                    <![endif]-->
        <script>
            var COOKIE_PRE = '<?php echo COOKIE_PRE; ?>';
            var _CHARSET = '<?php echo strtolower(CHARSET); ?>';
            var SITEURL = '<?php echo SHOP_SITE_URL; ?>';
            var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL; ?>';
            var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
            var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
            var CMS_TEMPLATES_URL = '<?php echo CMS_TEMPLATES_URL; ?>';
        </script>
        <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=1788946725" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.js"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/common.js" charset="utf-8"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery-ui/jquery.ui.js"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.validation.min.js"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.masonry.js"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
        <script type="text/javascript">
            var PRICE_FORMAT = '<?php echo $lang['currency']; ?>%s';
            $(function() {
                //首页左侧分类菜单
                $(".category ul.menu").find("li").each(
                        function() {
                            $(this).hover(
                                    function() {
                                        var cat_id = $(this).attr("cat_id");
                                        var menu = $(this).find("div[cat_menu_id='" + cat_id + "']");
                                        menu.show();
                                        $(this).addClass("hover");
                                        var menu_height = menu.height();
                                        if (menu_height < 60)
                                            menu.height(80);
                                        menu_height = menu.height();
                                        var li_top = $(this).position().top;
                                        $(menu).css("top", -li_top + 38);
                                    },
                                    function() {
                                        $(this).removeClass("hover");
                                        var cat_id = $(this).attr("cat_id");
                                        $(this).find("div[cat_menu_id='" + cat_id + "']").hide();
                                    }
                            );
                        }
                );
                $(".head-user-menu dl").hover(function() {
                    $(this).addClass("hover");
                },
                        function() {
                            $(this).removeClass("hover");
                        });
                $('.head-user-menu .my-mall').mouseover(function() {// 最近浏览的商品
                    load_history_information();
                    $(this).unbind('mouseover');
                });
                $('.head-user-menu .my-cart').mouseover(function() {// 运行加载购物车
                    load_cart_information();
                    $(this).unbind('mouseover');
                });
                $('#button').click(function() {
                    if ($('#keyword').val() == '') {
                        return false;
                    }
                });
            <?php if (C('fullindexer.open')) { ?>
                    // input ajax tips
                    $('#keyword').focus(function() {
                        if ($(this).val() == $(this).attr('title')) {
                            $(this).val('').removeClass('tips');
                        }
                    }).blur(function() {
                        if ($(this).val() == '' || $(this).val() == $(this).attr('title')) {
                            $(this).addClass('tips').val($(this).attr('title'));
                        }
                    }).blur().autocomplete({
                        source: function(request, response) {
                            $.getJSON('<?php echo SHOP_SITE_URL; ?>/index.php?act=search&op=auto_complete', request, function(data, status, xhr) {
                                $('#top_search_box > ul').unwrap();
                                response(data);
                                if (status == 'success') {
                                    $('body > ul:last').wrap("<div id='top_search_box'></div>").css({'zIndex': '1000', 'width': '362px'});
                                }
                            });
                        },
                        select: function(ev, ui) {
                            $('#keyword').val(ui.item.label);
                            $('#top_search_form').submit();
                        }
                    });
            <?php } ?>
            });

            $(function() {
                //search
                var act = "<?php echo $_GET['act'] ?>";
                if (act == "store_list") {
                    $("#search").children('ul').children('li:eq(1)').addClass("current");
                    $("#search").children('ul').children('li:eq(0)').removeClass("current");
                }
                var key = "<?php echo $_GET['key'] ?>";
                $("#search").children('ul').children('li:eq(2)').removeClass("current");
                switch (key)
                {
                    case '0':
                        $("#search").children('ul').children('li:eq(2)').addClass("current");//默认
                        break;
                    case '1':
                        $("#search").children('ul').children('li:eq(3)').addClass("current");//销量
                        break;
                    case '2':
                        $("#search").children('ul').children('li:eq(4)').addClass("current");//人气
                        break;
                    case '3':
                        $("#search").children('ul').children('li:eq(5)').addClass("current");//价格
                        break;
                    case '4':
                        $("#search").children('ul').children('li:eq(6)').addClass("current");//收藏
                        break;
                }
                $("#search").children('ul').children('li').click(function() {
                    $(this).parent().children('li').removeClass("current");
                    $(this).addClass("current");
                    $('#search_act').attr("value", $(this).attr("act"));
                    $('#keyword').attr("placeholder", $(this).attr("title"));
                    $('#search_key').attr("value", $(this).attr("key"));
                });
                $("#keyword").blur();
            });
		
        </script>
</head>
<body> 
	    
    <!-- PublicTopLayout Begin -->
    <?php require_once template('layout/layout_top'); ?>
    <!-- PublicHeadLayout Begin -->
    <div class="header-wrap">
        <header class="public-head-layout wrapper" >
            <h1 class="site-logo"><a href="<?php echo BASE_SITE_URL; ?>"><img src="<?php echo UPLOAD_SITE_URL . DS . ATTACH_COMMON . DS . $output['setting_config']['site_logo']; ?>" class="pngFix"></a><img src="<?php echo UPLOAD_SITE_URL; ?>/shop/common/logo_02.gif"></h1> 
			
           
            <div class="head-search-bar-r">
               <div id="search" class="head-search-bar" >
                    <!--商品和店铺-->
                    <ul class="tab">
                        <li title="请输入您要搜索的商品关键字" act="search" class="current">商品</li>
                        <li title="请输入您要搜索的店铺关键字" act="store_list">店铺</li>
                    </ul>

                    <ul class="tab1">
                        <li key="0" class="current">默认</li>
                        <li key="1" >销量</li>
                        <li key="2" >人气</li>
                        <li key="3" >价格</li>
                        <li key="4" >收藏</li>
                    </ul>

                    
                    <div class="t-sou">
                        <form method="get" action="<?php echo SHOP_SITE_URL; ?>">
                            <input type="hidden" value="search" id="search_act" name="act">
                            <input type="hidden" value="key" id="search_key" name="key">
                            <input class="t-sou-input"  placeholder="请输入关键字" name="keyword" id="keyword" type="text" class="input-text" value="<?php echo $_GET['keyword']; ?>">
                            <span class="t-sou-icon"><input type="submit" id="button" value="" class="input-submit"></span>
                        </form>
                         
                     </div> 

                    <div class="keyword"><?php echo $lang['hot_search'] . $lang['nc_colon']; ?>
                        <ul>
                            <?php
                            if (is_array($output['hot_search']) && !empty($output['hot_search'])) {
                                foreach ($output['hot_search'] as $val) {
                                    ?>
                                    <li><a href="<?php echo urlShop('search', 'index', array('keyword' => $val)); ?>"><?php echo $val; ?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
               <div class="head-user-menu" >
                   
                    <dl class="my-cart">
                        <?php if ($output['cart_goods_num'] > 0) { ?>
                            <div class="addcart-goods-num"><?php echo $output['cart_goods_num']; ?></div>
                        <?php } ?>
                        <dt><span class="jiesuan"></span></span>购物车/结算</dt>
                        <dd>
                            <div class="sub-title">
                                <h4>最新加入的商品</h4>
                            </div>
                            <div class="incart-goods-box">
                                <div class="incart-goods"> <img class="loading" src="<?php echo CMS_TEMPLATES_URL; ?>/images/loading.gif" /> </div>
                            </div>
                            <div class="checkout"> <span class="total-price">共<i><?php echo $output['cart_goods_num']; ?></i><?php echo $lang['nc_kindof_goods']; ?></span><a href="<?php echo SHOP_SITE_URL; ?>/index.php?act=cart" class="btn-cart">结算购物车中的商品</a> </div>
                        </dd>
                    </dl>
                     
                </div><!--购物车结算 结束-->
            </div>
           <div style="clear:both;"></div>
        </header>
    </div>
    <div style="clear:both;"></div>
    <!-- PublicHeadLayout End -->

    <!-- publicNavLayout Begin -->
    <nav class="public-nav-layout">
        <div class="wrapper">
            <ul class="site-menu">
             
                <?php if (!empty($output['nav_list']) && is_array($output['nav_list'])) { ?>
                    <?php foreach ($output['nav_list'] as $nav) { ?>
                        <?php if ($nav['nav_location'] == '1') { ?>
                            <li><a
                                <?php
                                if ($nav['nav_new_open']) {
                                    echo ' target="_blank"';
                                }
                                switch ($nav['nav_type']) {
                                    case '0':
                                        echo ' href="' . $nav['nav_url'] . '"';
                                        break;
                                    case '1':
                                        echo ' href="' . urlShop('search', 'index', array('cate_id' => $nav['item_id'])) . '"';
                                        if (isset($_GET['cate_id']) && $_GET['cate_id'] == $nav['item_id']) {
                                            echo ' class="current"';
                                        }
                                        break;
                                    case '2':
                                        echo ' href="' . urlShop('article', 'article', array('ac_id' => $nav['item_id'])) . '"';
                                        if (isset($_GET['ac_id']) && $_GET['ac_id'] == $nav['item_id']) {
                                            echo ' class="current"';
                                        }
                                        break;
                                    case '3':
                                        echo ' href="' . urlShop('activity', 'index', array('activity_id' => $nav['item_id'])) . '"';
                                        if (isset($_GET['activity_id']) && $_GET['activity_id'] == $nav['item_id']) {
                                            echo ' class="current"';
                                        }
                                        break;
                                }
                                ?>><?php echo $nav['nav_title']; ?></a>
                              </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
            </ul>
        </div>
    </nav>
<script>
	//取得cookie     
	function getCookie(name) {    
	 var nameEQ = name + "=";    
	 var ca = document.cookie.split(';');    //把cookie分割成组     
	 for(var i=0;i < ca.length;i++) {    
		 var c = ca[i];                      //取得字符串     
		 while (c.charAt(0)==' ') {          //判断一下字符串有没有前导空格     
		 c = c.substring(1,c.length);      //有的话，从第二位开始取     
	 }    
		 if (c.indexOf(nameEQ) == 0) {       //如果含有我们要的name     
		  return unescape(c.substring(nameEQ.length,c.length));    //解码并截取我们要值     
		 }    
	 }    
	 return false;    
	}  
//设置cookie     
	function setCookie(name, value, seconds) {    
		 seconds = seconds || 0;   //seconds有值就直接赋值，没有为0，这个根php不一样。     
		 var expires = "";    
		 if (seconds != 0 ) {      //设置cookie生存时间     
			 var date = new Date();    
			 date.setTime(date.getTime()+(seconds*10000000));    
			 expires = "; expires="+date.toGMTString();    
		 }    
		 document.cookie = name+"="+escape(value)+expires+"; path=/";   //转码并赋值     
	}     


</script>
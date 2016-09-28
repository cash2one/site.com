<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo SHOP_TEMPLATES_URL;?>/css/layout.css" rel="stylesheet" type="text/css">
        <link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/css/common.css" rel="stylesheet" type="text/css">
            <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/jquery.min.js" language="javascript" type="text/javascript"></script>
            <!--[if lte IE 6]>
            <script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/pngfix.js"></script>
            <![endif]-->

            <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/rejs.js" language="javascript" type="text/javascript"></script>

            <link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/css/recss.css" type="text/css" rel="stylesheet" />
    </head>
    <body>



        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/jquery.autocomplete-min.js" type="text/javascript"></script>




        <!-- +++++品牌详情页主体内容+++++ -开始- -->
        <div id="brand_details_main">
            <!-- 位置导航 -->

            <!-- 广告位 -->
            <div id="brand_details_advertis">
                <a class="brand_advertis_left"><img src="<?php echo brandImage($output['brand']['brand_pic1']); ?>" width="730" height="280" alt="" /></a>
                <ul class="brand_advertis_right">
                    <li class="advertis_right_img"><img src="<?php echo brandImage($output['brand']['brand_pic']); ?>"width="180" height="90" alt="" /></li>
                    <li class="advertis_right_title"><?php echo $output['brand']['brand_advertisement1']; ?></li>
                    <!----><li><?php echo $output['brand']['brand_advertisement2']; ?></li><!---->
                </ul>
            </div>
            <!-- 品牌详情 -开始- -->
            <div id="brand_details">
                <!-- 品牌详情 -左侧内容- -->
                <div class="brand_details_left">
                    <h3 class="brand_introduce_h3"><?php echo $output['brand']['brand_name']; ?> 品牌简述</h3>
                    <div class="brand_introduce">
                        <?php echo $output['brand']['brand_introduction']; ?>
                    </div>
                </div>
                <!-- 品牌详情 -右侧内容- -->
                <div class="brand_details_right">
                    <h3 class="details_right_h3"><?php echo $output['brand']['brand_name']; ?></h3>
                    <ul class="details_right_ul">
                        <li class="details_right_one"><?php echo $output['brand']['brand_country']; ?> </li>
                        <li class="details_right_two"><?php echo $output['brand']['brand_class']; ?> </li>
                        <li class="details_right_three"><?php echo $output['brand']['brand_initial']; ?> </li>
                        <li class="details_right_fourth"><?php echo $output['brand']['brand_style']; ?> </li>
                    </ul>
                    <ul class="details_right_bottom">
                        <li class="details_right_last"></li>
                    </ul>
                </div>
            </div>
            <!-- 品牌详情 -结束- -->



        </div>
        <div class="brand_tab_module">
            <div class="module_kuanshi">
                <!--  商品列表页排序 -->
                <div class="product_list" style="margin-bottom:0;">
                    <!-- 列表页正文头部排列方式和数量信息 -开始- -->
                    <div class="product_list_header">
                        <ul class="product_arrange">
                            <li>排列方式：</li> <li <?php if (!$_GET['key']) { ?>class="selected"<?php } ?>><a href="<?php echo dropParam(array('order', 'key')); ?>" class="nobg" title="<?php echo $lang['brand_index_default_sort']; ?>"><?php echo $lang['brand_index_default']; ?></a></li>
                            <li <?php if ($_GET['key'] == '1') { ?>class="selected"<?php } ?>><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1') ? replaceParam(array('key' => '1', 'order' => '1')) : replaceParam(array('key' => '1', 'order' => '2')); ?>" <?php if ($_GET['key'] == '1') { ?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc'; ?>"<?php } ?> title="<?php echo ($_GET['order'] == 'desc' && $_GET['key'] == '1') ? $lang['brand_index_sold_asc'] : $lang['brand_index_sold_desc']; ?>"><?php echo $lang['brand_index_sold']; ?><i></i></a></li>
                            <li <?php if ($_GET['key'] == '2') { ?>class="selected"<?php } ?>><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '2') ? replaceParam(array('key' => '2', 'order' => '1')) : replaceParam(array('key' => '2', 'order' => '2')); ?>" <?php if ($_GET['key'] == '2') { ?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc'; ?>"<?php } ?> title="<?php echo ($_GET['order'] == 'desc' && $_GET['key'] == '2') ? $lang['brand_index_click_asc'] : $lang['brand_index_click_desc']; ?>"><?php echo $lang['brand_index_click'] ?><i></i></a></li>
                            <li <?php if ($_GET['key'] == '3') { ?>class="selected"<?php } ?>><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3') ? replaceParam(array('key' => '3', 'order' => '1')) : replaceParam(array('key' => '3', 'order' => '2')); ?>" <?php if ($_GET['key'] == '3') { ?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc'; ?>"<?php } ?> title="<?php echo ($_GET['order'] == 'desc' && $_GET['key'] == '3') ? $lang['brand_index_price_asc'] : $lang['brand_index_price_desc']; ?>"><?php echo $lang['brand_index_price']; ?><i></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- 商品列表页排序 --> 
                <!-- 商品列表页排序 -->
                <div class="goods_list_area">
                    <div id="goodsBox" class="box">
                        <?php require_once (BASE_TPL_PATH . '/home/goods.squares.php'); ?>	
                    </div>
                      <div class="tc mt20 mb20">
        <div class="pagination"> <?php echo $output['show_page']; ?> </div>
      </div>
                </div>
            </div>
            <div class="module_jieshao" style="display:none;">
                <!------------------------- 品牌Tab主体内容 -品牌介绍 -开始 -------------------------->

                <!------------------------- 品牌Tab主体内容 -品牌介绍 -结束 -------------------------->
            </div>  
            <!----------------------------- 品牌Tab主体内容 -品牌评测 -开始 -------------------------->
            <!-- 品牌主体内容 -品牌评测 -结束- -->
        </div>
        <!-- +++++品牌详情页主体内容+++++ -结束- -->


        <script type="text/javascript">
            var process_request = "";
        </script>
        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/jquery-base.js" type="text/javascript"></script>
        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/js.js" type="text/javascript"></script>
        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/jquery.scroll.bottom.load.js" type="text/javascript"></script>

        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/brand.js" type="text/javascript"></script>
        <!-- 首页尾部内容 -开始- -->
        <script src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/rejs.js" language="javascript" type="text/javascript"></script>
        <style type="text/css">
            /*右侧浮标*/
            .right_float .s_right_float_ico a{ width:120px;}
            /* 首页左侧lottery520_topic */
            .s_gift_float_left{ width:200px;height:610px;overflow:hidden;left:10px;z-index:1999;}

        </style>
        <!--“gift排行“活动 浮动广告，开始  -->
        <!-- 
        <div id="s_gift_top_float" class="s_gift_float_left">
        </div>
        -->

        <!-- 整站侧边浮窗 -开始- --><!-- 整站侧边浮窗 -结束- -->
        <!-- Live800默认跟踪代码: 开始-->
        <script language="javascript" src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/monitor.js"></script>
        <!-- Live800默认跟踪代码: 结束-->

        <!-- 首页尾部内容 -结束- -->
    </body>
</html>

<?php defined('InShopNC') or exit('Access Invalid!'); ?>

<script src="<?php echo SHOP_RESOURCE_SITE_URL; ?>/js/jquery-2.1.4.min.js"></script>
<!--名人堂插件-->
<script src="<?php echo SHOP_RESOURCE_SITE_URL; ?>/js/jR3DCarousel.min.js"></script>

<!--index 当前页面样式以及js start-->
<link rel="stylesheet" media="screen" href="<?php echo SHOP_TEMPLATES_URL; ?>/css/index1.css">
<script type="text/javascript" src="<?php echo SHOP_RESOURCE_SITE_URL; ?>/js/home_index.js" charset="utf-8"></script>

<!-- js调用部分begin index 焦点图 -->
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider.css" type="text/css" rel="stylesheet" />
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider_diy.css" type="text/css" rel="stylesheet" />
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery/jquery.flexslider-min.js"></script>

<!-- 代码begin index 焦点图-->
<div class="flexslider control-nav-img-internally control-nav-on-center" id="lunbo_01">
    <ul class="slides">
        <li><?php echo loadadv(1258); ?></li>
        <li><?php echo loadadv(1259); ?></li>
        <li><?php echo loadadv(1260); ?></li>
        <li><?php echo loadadv(1261); ?></li>
        <li><?php echo loadadv(1262); ?></li>
    </ul>
</div>

<!-- 新品 --> 
<div class="new-shangping" id="pos1">
    <div class="w-container"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/xinpin.png" alt="新品首发"></div>	

    <div class="list">
        <div class="pull-left">
            <div class="list-pic"><a href="<?php echo $output['adv_info1'][0]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info1'][0]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info1'][0]['adv_title']; ?></p><p> <?php echo $output['adv_info1'][0]['adv_price']; ?></p></div>
        </div>
        <div class="pull-right">
            <div class="col-one">
              <div class="list-pic"><a href="<?php echo $output['adv_info11'][0]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info11'][0]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info11'][0]['adv_title']; ?></p><p> <?php echo $output['adv_info11'][0]['adv_price']; ?></p></div>
            </div>
            <div class="col-two">
               <div class="list-pic"><a href="<?php echo $output['adv_info111'][0]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info111'][0]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info111'][0]['adv_title']; ?></p><p> <?php echo $output['adv_info111'][0]['adv_price']; ?></p></div>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="pull-right">
            <div class="col-one">
                 <div class="list-pic"><a href="<?php echo $output['adv_info11'][1]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info11'][1]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info11'][1]['adv_title']; ?></p><p> <?php echo $output['adv_info11'][1]['adv_price']; ?></p></div>
            </div>
            <div class="col-two">
                  <div class="list-pic"><a href="<?php echo $output['adv_info111'][1]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info111'][1]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info111'][1]['adv_title']; ?></p><p> <?php echo $output['adv_info111'][1]['adv_price']; ?></p></div>
            </div>
        </div>
        <div class="pull-left">
           <div class="list-pic"><a href="<?php echo $output['adv_info1'][1]['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $output['adv_info1'][1]['adv_content']['adv_pic']; ?>" alt="新品首发"></a></div>
            <div class="list-text"><p> <?php echo $output['adv_info1'][1]['adv_title']; ?></p><p> <?php echo $output['adv_info1'][1]['adv_price']; ?></p></div>
        </div>
    </div>
   
</div>
<!-- 玩咖 -->
<div class="wanka">
    <div class="w-container"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/wanka.png" alt="玩咖"></div>	
   <div class="wankamain"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=35"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/wankaone.png" alt="玩咖"></a></div>
   <div class="wankamain"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=37"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/wankatwo.png" alt="玩咖"></a></div>
   <div style="clear:both;"></div>
</div>
<!-- 设计师 -->
<div class="shejishi-zong" id="pos6">
    <div class="w-container">
        <div><img src="<?php echo UPLOAD_SITE_URL; ?>/index/shejiguan.png" alt="设计师"></div>
    </div>
    <div class="w-container" >
        <div class="sheji">
            <?php if (!empty($output['store_list']) && is_array($output['store_list'])) { ?>
                <?php foreach ($output['store_list'] as $skey => $store) { ?>
                    <div class="pull-left">
                        <div class="shejishi">
                            <div class="list-pic"><a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>"   target="_blank"><img src="<?php echo getStoreLogo($store['store_avatar']); ?>"width="300" height="300"data-image="<?php echo getStoreLogo($store['store_avatar']); ?>" alt="设计师"></a></div>
                            <div class="list-text"><a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>"   target="_blank"><?php echo $store['store_name']; ?></a></div>
                        </div>

                        <ul class="zuopin">
                            <?php if (!empty($store['search_list_goods']) && is_array($store['search_list_goods'])) { ?>
                                <?php foreach ($store['search_list_goods'] as $key => $search_list_goods) { ?>
                                    <li class="flip-container">
                                        <div class="front red" style=" width:100%; height:100%;"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $search_list_goods['goods_id']));?>"><img src="<?php echo thumb($search_list_goods); ?>"width="150" height="151"data-image="<?php echo thumb($search_list_goods); ?>" alt="设计师商品"></a> </div>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </ul>

                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<!--聚拾寨-->
<div class="jushizhai-wai" id="pos4">
    <div class="jushizhai-zong">
        <div class="w-container">
            <img src="<?php echo UPLOAD_SITE_URL; ?>/index/gouyishi.png" alt="购艺市">
        </div>
        <div class="jushizai-banner">
            <div id="flash">
                <ul id="pic">
                    <?php if (loadadvs(1269)) {$ad_list = loadadvs(1269);foreach ($ad_list as $key => $value) {$pic_content = unserialize($ad_list[$key]['adv_content']);?>
                    <li style="display:block"><img src="<?php echo UPLOAD_SITE_URL.'/'.ATTACH_ADV.'/'.$pic_content['adv_pic'];?>" alt="banner"></li>
                    <?php }}?>
                </ul>
                <ol id="num">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
                <span class="arrow" id="left"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/moreleft.png" alt="左"></span>
                <span class="arrow" id="right"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/moreright.png" alt="右"></span> 
            </div>
        </div>
<!--        <div class="w-container">
            <img src="<?php echo UPLOAD_SITE_URL; ?>/index/jushizaititile1.jpg" alt="">
        </div>-->
        <div class="jushizhai">
            <ul class="jushizhai-list">
                <?php if (!empty($output['groupbuy_list_time']) && is_array($output['groupbuy_list_time'])) { ?>
                    <?php foreach ($output['groupbuy_list_time'] as $key => $groupbuy) { ?>
                        <li>
                            <div class="jushizhai-cont">
                                <img src="<?php echo gthumb($groupbuy['groupbuy_image1'], 240);?>" alt="抢购商品">
                                <span>
                                    <p><?php echo $groupbuy['goods_name']; ?></p>
                                    
                                </span>
                                
                            </div>
                            <div class="jushizhai-text">
                                <div class="price pull-left">抢购价：¥<?php echo $groupbuy['groupbuy_price']; ?>元</div>
                                <div class="pull-right">
                                    <?php if($groupbuy['start_time'] > TIMESTAMP){?>
                                        <a href="<?php echo $groupbuy['goods_url']; ?>"><?php echo $groupbuy['button_text'];?></a>
                                    <?php }else{?>
                                        <a href="<?php echo $groupbuy['goods_url'];?>">马上抢</a>
                                    <?php }?>
                                    <!-- <span id="list_count_down" class="settime" startTime="<?php echo $groupbuy['start_time_text'];?>" endTime="<?php echo $groupbuy['end_time_text'];?>"></span> -->

                                </div>
                            </div>

                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>


<!--        <div class="w-container">
            <img src="<?php echo UPLOAD_SITE_URL; ?>/index/jushizaititile2.jpg" alt="">
        </div>
        <div class="jushizhai">
            <ul class="jushizhai-list">
                <?php if (!empty($output['groupbuy1']) && is_array($output['groupbuy1'])) { ?>
                    <?php foreach ($output['groupbuy1'] as $key => $groupbuy) { ?>
                        <li>
                            <div class="jushizhai-cont">
                                <img src="<?php echo $groupbuy['groupbuy_image']; ?>" alt="">
                                <span>
                                    <p><?php echo $groupbuy['goods_name']; ?></p>
                                </span>
                            </div>
                            <div class="jushizhai-text">
                                <div class="price pull-left">抢购价：¥<?php echo $groupbuy['groupbuy_price']; ?>元</div>
                                <div class="pull-right">
                                    <span class="stock">仅限：<?php echo $groupbuy['goods_storage']; ?>件</span>
                                    <a href="<?php echo $groupbuy['goods_url']; ?>">马上抢</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>-->

    </div>
    <div style="clear:both;"></div>
</div>
<div style="clear:both"></div>
<!-- 明星栏 -->

<!-- 品牌街 -->  


<div class="pingpai-zong"  id="pos5">
    <div class="w-container" ><img src="<?php echo UPLOAD_SITE_URL; ?>/index/pinpaijie.png" alt="品牌街"></div>
    
    <div class="tab-container">
            
    <ul  class="menu-pingpai">
        <?php if (!empty($output['class_list']) && is_array($output['class_list'])) { ?>
            <?php foreach ($output['class_list'] as $ckey => $class_list) { ?>
        <li>
            <dl>
                <dt><img src="<?php echo UPLOAD_SITE_URL.DS.'index'.DS.$class_list['type_id'].'@2x.png'; ?>" alt="一级分类"></dt>
                <dd><?php echo $class_list['gc_name'] ?></dd>
            </dl>
        </li>
      <?php } ?>
   <?php } ?>
</div>
    
    
    </ul>
       
 <?php if (!empty($output['class_list']) && is_array($output['class_list'])) { ?>
            <?php foreach ($output['class_list'] as $ckey => $class_list) { ?>
       <div class="twelve">
                <div class="pinpai-cont">
                    <div class="pinpai-title"><?php echo $class_list['gc_name']; ?></div>
                    <div class="pull-left"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $class_list['like_count'][0]['goods_id']));?>"><img src="<?php echo thumb($class_list['like_count'][0]); ?>" width="310" height="310" alt="商品"/></a><span>商城价：¥<?php echo $class_list['like_count'][0]['goods_price']; ?></span></div>
                    <ul class="pull-cont">
                        <?php if (!empty($class_list['goods_list']) && is_array($class_list['goods_list'])) { ?>
                            <?php foreach ($output['class_list'][$ckey]['goods_list'] as $gkey => $goods_list) { ?>
                        <li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>"><img src="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>"></a><span>商城价：¥<?php echo $goods_list['goods_price']; ?></span></li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                    <div class="pull-right"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $class_list['goods_salenum'][0]['goods_id']));?>"><img src="<?php echo thumb($class_list['goods_salenum'][0]); ?>" width="310" height="310" alt="商品"/></a><span>商城价：¥<?php echo $class_list['goods_salenum'][0]['goods_price']; ?></span></div>
                    <div class="more">more</div>
                </div>


                <ul class="pinpaidian">
                    <?php if (!empty($class_list['brands_list']) && is_array($class_list['brands_list'])) { ?>
                        <?php foreach ($class_list['brands_list'] as $bkey => $brands_list) { ?>
                            <li><img src="<?php echo $brands_list['brand_pic']; ?>" width="120" height="120" alt=""></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
       
        <div style="clear:both;"></div>
         </div>
     <?php } ?>
   <?php } ?>
</div>
<!-- 酱紫爱 -->  
<div class="jianziai" id="pos3">
    <div class="w-container" id="pos3"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/jiangziai.png"></div>
    <div class="jianziai-cont">
        <div class="jianziai-all">
             <?php if (!empty($output['adv_info2']) && is_array($output['adv_info2'])) { ?>
           <?php  foreach ($output['adv_info2'] as $akey => $adv1 ){?>
            <div class="jianziai-main">
                <div class="jianziai-pic"><a href="<?php echo $adv1['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $adv1['adv_content']['adv_pic']; ?>"></a></div>
                <div class="jianziai-text"><p><?php echo $adv1['adv_title'];?></p><span><?php echo $adv1['adv_price'];?></span></div>
            </div>
            <?php }?>
            <?php }?>
            <div class="change" id="change-one">换一批</div>
            <div class="jianziai-change-pic">
                <img src="<?php echo UPLOAD_SITE_URL; ?>/index/xinyibaobei.png">
            </div>
        </div>
        <div class="jianziai-all">
            <?php if (!empty($output['adv_info3']) && is_array($output['adv_info3'])) { ?>
           <?php  foreach ($output['adv_info3'] as $akey => $adv1 ){?>
             <div class="jianziai-main">
                <div class="jianziai-pic"><a href="<?php echo $adv1['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $adv1['adv_content']['adv_pic']; ?>"></a></div>
                <div class="jianziai-text"><p><?php echo $adv1['adv_title'];?></p><span><?php echo $adv1['adv_price'];?></span></div>
            </div>
             <?php }?>
            <?php }?>
            <div class="change" id="change-two">换一批</div>
            <div class="jianziai-change-pic">
                <img src="<?php echo UPLOAD_SITE_URL; ?>/index/guangchuchuang.png">
            </div>
        </div>
        <div class="jianziai-all">
            <?php if (!empty($output['adv_info4']) && is_array($output['adv_info4'])) { ?>
           <?php  foreach ($output['adv_info4'] as $akey => $adv1 ){?>
             <div class="jianziai-main">
                <div class="jianziai-pic"><a href="<?php echo $adv1['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $adv1['adv_content']['adv_pic']; ?>"></a></div>
                <div class="jianziai-text"><p><?php echo $adv1['adv_title'];?></p><span><?php echo $adv1['adv_price'];?></span></div>
            </div>
            <?php }?>
            <?php }?>
            <div class="change" id="change-three">换一批</div>
            <div class="jianziai-change-pic">
                <img src="<?php echo UPLOAD_SITE_URL; ?>/index/dazheyouhi.png">
            </div>
        </div>
        <div class="jianziai-all" >
             <?php if (!empty($output['adv_info5']) && is_array($output['adv_info5'])) { ?>
           <?php  foreach ($output['adv_info5'] as $akey => $adv1 ){?>
            <div class="jianziai-main">
                <div class="jianziai-pic"><a href="<?php echo $adv1['adv_content']['adv_pic_url']; ?>"><img src="<?php echo $adv1['adv_content']['adv_pic']; ?>"></a></div>
                <div class="jianziai-text"><p><?php echo $adv1['adv_title'];?></p><span><?php echo $adv1['adv_price'];?></span></div>
            </div>
            <?php }?>
            <?php }?>
            <div class="change" id="change-four">换一批</div>
            <div class="jianziai-change-pic">
                <img src="<?php echo UPLOAD_SITE_URL; ?>/index/shenmiliwu.png">
            </div>  
        </div>
    </div>
    <div style="clear:both;"></div>
</div>

<!-- 锚点 -->
<div class="mddw">
    <!-- <a href="#新品首发" class="pos1"></a>
    <a href="#品牌" class="pos2"></a>
    <a href="#酱紫爱" class="pos3"></a>
    <a href="#聚拾寨" class="pos4"></a>
    <a href="#设计师" class="pos5"></a> -->
    <ul class="mddw_nav">
        <li><a class="pos1"></a></li>
        <li><a class="pos2"></a></li>
        <li><a class="pos3"></a></li>
        <li><a class="pos4"></a></li>
        <li><a class="pos5"></a></li>
		<li><a class="pos6"></a></li>
    </ul>
</div>
<div class="team w-container">
    <img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/index/团队图.jpg">
</div>

<!-- 视频 -->
<div class="w-good-box">
    <div class="video_hover">
        <div id="video_btn"></div>
    </div>
</div>
<div id="mask"></div>
<div class="video_window">
    <embed width="720" height="400" align="middle" type="application/x-shockwave-flash" allowscriptaccess="always" quality="high" allowfullscreen="true" src="http://player.youku.com/player.php/sid/XMTQwMDU4MDgzMg==/v.swf">
    <img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/common/close_btn.png"  id="close_btn"/>
</div>

<!--StandardLayout Begin
<div class="nav_Sidebar" style="z-index:100000;">
    <a class="nav_Sidebar_1" href="#新品首发" ></a>
    <a class="nav_Sidebar_2" href="#品牌" ></a>
    <a class="nav_Sidebar_3" href="#酱紫爱" ></a>
    <a class="nav_Sidebar_4" href="#聚拾寨" ></a>
    <a class="nav_Sidebar_5" href="#设计师" ></a>

</div>
StandardLayout End-->

<!-- 底部保证横条 -->
<div class="wrapper">
    <div class="mt10"><?php echo loadadv(9, 'html'); ?></div>
</div>
<div class="footer-line"></div>

<style>
    /* 锚点 */
    .main_floor{width:1200px;}
    .mddw{width: 38px; height: 175px; position: fixed; top: 30%; left: 48%; margin-left: -660px;z-index:1111;display:none;border:1px solid #ccc;background: #fff;}
    .mddw_nav{width: 38px; height: 175px;}
    .mddw li{width: 38px;height:35px;}
    .mddw a{width: 38px;height:35px;display: inline-block;background-image:url(<?php echo SHOP_SITE_URL; ?>/templates/default/images/home-nav-icon.png);} 
    .mddw a.pos1{background-position:  0 0px;}
    .mddw a.pos2{background-position:  0 -34px;}
    .mddw a.pos3{background-position:  0 -68px;}
    .mddw a.pos4{background-position:  0 -102px;}
    .mddw a.pos5{background-position:  0 -136px;}
    .mddw a:hover{background-image:url(<?php echo SHOP_SITE_URL; ?>/templates/default/images/home-nav-icon-hover2.png);} 
    .mddw a.current{background-image:url(<?php echo SHOP_SITE_URL; ?>/templates/default/images/home-nav-icon-hover.png);}
    /* 视频 */
    .w-good-box{position:relative;}
    #mask{position:fixed; top:0; left:0; z-index:10000;width:100%; height:100%; background:#000;
          filter:alpha(opacity=50); -moz-opacity:0.7;opacity:0.5;display:none;}
    .video_window{display:none;background:#000;position:fixed;top:180px;left:30%;z-index:10001;}
    #close_btn{z-index:10000;position:absolute;top:0;right:-56px;cursor:pointer;}
    #video_btn{width: 110px; height:110px;margin:260px auto;z-index: 100;cursor:pointer;border-radius: 55px;background: url(<?php echo SHOP_TEMPLATES_URL; ?>/images/index/vd_bt.png) no-repeat center center;}
    .w-good-box{background:url(<?php echo SHOP_TEMPLATES_URL; ?>/images/index/vd_bg.jpg) no-repeat center center;position:relative;width: 100%;height:630px;}
    .video_hover{width:100%;height:630px;position:absolute;left:0;top:0;}
    .video_hover:hover{width:100%;height:630px;background:rgba(0,0,0,0.5);position:absolute;left:0;top:0;}
    .video_hover:hover #video_btn{background: url(<?php echo SHOP_TEMPLATES_URL; ?>/images/index/vd_btn.png) no-repeat center center;}
    #timeCon{font-family:Arial, Helvetica, sans-serif; font-weight:400;font-size: 58px;color: #e50011; position:absolute;right:90px;top:50px;}
    /*酱紫添加竖线*/
    .zi_shu{width:8px;}
    .zi_shu div{height:200px;border-left:1px solid #ccc;margin:0 auto;width:1px;}

</style>
<script>
//轮播图隐藏掉图片，获取图片src属性，并把该属性作为a标签的背景图片属性

    $('.flexslider .slides img').hide();
    var slide_a = $('.flexslider .slides li');
    for (i = 0; i <= slide_a.length; i++) {
        var src = $('.flexslider .slides img')[i].src;

        $('.flexslider .slides a')[i].style.background = "url(" + src + ") no-repeat center center";
    }


</script>
<script>
    $(function () {
        $('#lunbo_01').flexslider({
            directionNav: true,
            pauseOnAction: false
        });
        $('#lunbo_02').flexslider({
            directionNav: false,
            pauseOnAction: false
        });
        $('#lunbo_03').flexslider({
            directionNav: false,
            pauseOnAction: false
        });
        $('#lunbo_04').flexslider({
            directionNav: false,
            pauseOnAction: false
        });
        $('#lunbo_05').flexslider({
            directionNav: false,
            pauseOnAction: false
        });

        $('#fs_02').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 10
        });

        $('#fs_04').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 10
        });

        $('#fs_05').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 10
        });

        $('#fs_06').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 10
        });

        $('#fs_03').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 10
        });
    });
</script>

<script type="text/javascript">

        var xinpin = $("#pos1").offset().top;//距页顶偏移量 
        var mingren = $("#pos2").offset().top;
        var jiangziai = $("#pos3").offset().top;
        var jushizai = $("#pos4").offset().top;
        var pingpaijie = $("#pos5").offset().top;
		var shejishi = $("#pos6").offset().top;

    $(document).scroll(function () {
       // console.log(xinpin);
	//	console.log(mingren);
	//	console.log(jiangziai);
	//	console.log(jushizai);
	//	console.log(pingpaijie);
	//	console.log(shejishi);
        if ($(window).scrollTop() > 750) {
            $(".mddw").fadeIn();
        }
        else {
            $(".mddw").fadeOut();
        }
        
        if ($(window).scrollTop() > xinpin && $(window).scrollTop () <mingren){
            $(".pos1").addClass("current").parent().siblings().find("a").removeClass("current");
        }else if($(window).scrollTop() > mingren && $(window).scrollTop () <jiangziai){
			$(".pos2").addClass("current").parent().siblings().find("a").removeClass("current");
		}else if($(window).scrollTop() > jiangziai && $(window).scrollTop () <jushizai){
			$(".pos3").addClass("current").parent().siblings().find("a").removeClass("current");
		}else if($(window).scrollTop() > jushizai && $(window).scrollTop () <pingpaijie){
			$(".pos4").addClass("current").parent().siblings().find("a").removeClass("current");
		}else if($(window).scrollTop() > pingpaijie && $(window).scrollTop () <shejishi){
			$(".pos5").addClass("current").parent().siblings().find("a").removeClass("current");
		}else if($(window).scrollTop() > shejishi ){
			$(".pos6").addClass("current").parent().siblings().find("a").removeClass("current");
		}
    });

    $(".mddw_nav li a").click(function () {

        var el = $(this).attr('class');
        $('html, body').animate({
            scrollTop: $("#" + el).offset().top
        }, 300);
        $(this).addClass("current").parent().siblings().find("a").removeClass("current");

    });
    /*去掉底部横栏a标签href属性*/
    $('.wrapper .mt10 a').removeAttr("href");

    /*抢购倒计时*/
    groupbyCountdown();
</script>
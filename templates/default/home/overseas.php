<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb"> 
    <head>
        <title>玩艺网-有名堂</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo SHOP_TEMPLATES_URL;?>/css/layout.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="<?php echo SHOP_TEMPLATES_URL; ?>/css/css/common.css" rel="stylesheet" media="screen" />
        <script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL; ?>/js/js/compress.js"></script>
        <link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider_diy.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
        <!-- js调用部分begin index 焦点图 -->
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery/jquery.flexslider-min.js"></script>
        <script src="<?php echo RESOURCE_SITE_URL; ?>/js/slider-lr2.js"></script>
    </head>
    <body>
        <div class="flexslider control-nav-img-internally control-nav-on-center" id="lunbo_01">
            <ul class="slides">
                <li><?php echo loadadv(1266); ?></li>
                <li><?php echo loadadv(1267); ?></li>
                <li><?php echo loadadv(1268); ?></li>
            </ul>
        </div>

        <div class="layout layout-response designer-list lazyload clearfix">

            <br/>
<div class="squares" nc_type="current_display_mode">
    <input type="hidden" id="lockcompare" value="unlock" />
  <?php if(!empty($output['goods_list']) && is_array($output['goods_list'])){?>
    <ul class="list_pic" style="width:1200px;">
    <?php foreach($output['goods_list'] as $value){?>
        <li class="item" style="width:228px;">
      <div class="goods-content" nctype_goods=" <?php echo $value['goods_id'];?>" nctype_store="<?php echo $value['store_id'];?>">
        <div class="goods-pic"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank" title="<?php echo $value['goods_name'];?>"><img src="<?php echo thumb($value, 240);?>" title="<?php echo $value['goods_name'];?>" alt="<?php echo $value['goods_name'];?>" /></a></div>
        <?php if (C('groupbuy_allow') && $value['goods_promotion_type'] == 1) {?>
        <div class="goods-promotion"><span>抢购商品</span></div>
        <?php } elseif (C('promotion_allow') && $value['goods_promotion_type'] == 2)  {?>
        <div class="goods-promotion"><span>限时折扣</span></div>
        <?php }?>
        <div class="goods-info">
          <div class="goods-pic-scroll-show">
            <ul>
            <?php if(!empty($value['image'])) {?>
              <?php $i=0;foreach ($value['image'] as $val) {$i++?>
              <li<?php if($i==1) {?> class="selected"<?php }?>><a href="javascript:void(0);"><img src="<?php echo thumb($val, 60);?>"/></a></li>
              <?php }?>
            <?php } else {?>
              <li class="selected"><a href="javascript:void(0);"><img src="<?php echo thumb($value, 60);?>" /></a></li>
            <?php }?>
            </ul>
          </div>
          <div class="goods-name"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank" title="<?php echo $value['goods_jingle'];?>"><?php echo $value['goods_name_highlight'];?><em><?php echo $value['goods_jingle'];?></em></a></div>
          <div class="goods-price"> <em class="sale-price" title="<?php echo $lang['goods_class_index_store_goods_price'].$lang['nc_colon'].$lang['currency'].$value['goods_promotion_price'];?>"><?php echo ncPriceFormatForList($value['goods_promotion_price']);?></em> <em class="market-price" title="市场价：<?php echo $lang['currency'].$value['goods_marketprice'];?>"><?php echo ncPriceFormatForList($value['goods_marketprice']);?></em> <span class="raty" data-score="<?php echo $value['evaluation_good_star'];?>"></span> </div>
  
          <div class="sell-stat">
            <ul>
              <li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $value['goods_id']));?>#ncGoodsRate" target="_blank" class="status"><?php echo $value['goods_salenum'];?></a>
                <p>商品销量</p>
              </li>
              <li><a href="<?php echo urlShop('goods', 'comments_list', array('goods_id' => $value['goods_id']));?>" target="_blank"><?php echo $value['evaluation_count'];?></a>
                <p>用户评论</p>
              </li>
              <li><em member_id="<?php echo $value['member_id'];?>">&nbsp;</em></li>
            </ul>
          </div>
          <div class="store" ><a href="<?php echo urlShop('show_store','index',array('store_id'=>$value['store_id']), $value['store_domain']);?>" title="<?php echo $value['store_name'];?>" class="name" style="width:100%;"><?php echo $value['store_name'];?></a></div>
<!--          <div class="add-cart">
            <?php if ($value['goods_storage'] == 0) {?>
            <?php if ($value['is_appoint'] == 1) {?>
            <a href="javascript:void(0);" onclick="<?php if ($_SESSION['is_login'] !== '1'){?>login_dialog();<?php }else{?>ajax_form('arrival_notice', '立即预约', '<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $value['goods_id'], 'type' => 2));?>', 350);<?php }?>"><i class="icon-bullhorn"></i>立即预约</a>
            <?php } else {?>
            <a href="javascript:void(0);" onclick="<?php if ($_SESSION['is_login'] !== '1'){?>login_dialog();<?php }else{?>ajax_form('arrival_notice', '到货通知', '<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $value['goods_id'], 'type' => 2));?>', 350);<?php }?>"><i class="icon-bullhorn"></i>到货通知</a>
            <?php }?>
            <?php } else {?>
            <?php if ($value['is_virtual'] == 1 || $value['is_fcode'] == 1 || $value['is_presell'] == 1) {?>
            <a href="javascript:void(0);" nctype="buy_now" data-param="{goods_id:<?php echo $value['goods_id'];?>}"><i class="icon-shopping-cart"></i>
            <?php if ($value['is_fcode'] == 1) {?>
            F码购买
            <?php } else if ($value['is_presell'] == 1) {echo '预售购买';} else {?>
            立即购买
            <?php }?>
            </a>
            <?php } else {?>
            <a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:<?php echo $value['goods_id'];?>}" style="width:100%;"><i class="icon-shopping-cart"></i>加入购物车</a>
            <?php }?>
            <?php }?>
          </div>-->
        </div>
      </div>
    </li>
    <?php }?>
    <div class="clear"></div>
  </ul>
  <?php }else{?>
  <div id="no_results" class="no-results"><i></i><?php echo $lang['index_no_record'];?></div>
  <?php }?>
</div>
<form id="buynow_form" method="post" action="<?php echo SHOP_SITE_URL;?>/index.php" target="_blank">
  <input id="act" name="act" type="hidden" value="buy" />
  <input id="op" name="op" type="hidden" value="buy_step1" />
  <input id="goods_id" name="cart_id[]" type="hidden"/>
</form>

        </div>
            <div class="tc mt20 mb20">
                <div class="pagination"> <?php echo $output['show_page']; ?> </div>
            </div>






    </body>
</html>
<script>
    $(function() {
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

        $('#w-jianzi li').click(function() {
            $('.w-zi-arrow').addClass('w-hide');
            $('.w-tuopan').addClass('w-hide');

            $(this).children('.w-zi-arrow').removeClass('w-hide');
            var link = $(this).attr('link');
            $(link).removeClass('w-hide');
        });


        $('.w-navjs li').hover(function() {
            //$(this).children('.w-tan-la').css("display","block");
            var tanLaDom = $(this).children('.w-tan-la');
            tanLaDom.css("display", "block");
            var tanLaHeight = tanLaDom.height();
            tanLaDom.css("height", "0");
            tanLaDom.animate(
                    {
                        "height": tanLaHeight
                    },
            300,
                    "swing"
                    );
        }, function() {
            $(this).children('.w-tan-la').css("display", "none");
        });


        $('.w-top-box tr td ul li').hover(function() {
            var topTan = $(this).children('.w-ttan-box');
            topTan.css("display", "block");
            var topHeight = topTan.height();
            topTan.css("height", "0");
            topTan.animate(
                    {
                        "height": topHeight
                    },
            300,
                    "swing"
                    );
        }, function() {
            $(this).children('.w-ttan-box').css("display", "none");
        });

        //w-car w-car-box
        $('.w-car').hover(function() {
            $(this).children('.w-car-box').css("display", "block");
        }, function() {
            $(this).children('.w-car-box').css("display", "none");
        });

        function goodBox() {
            $('.good_img').animate({
                'left': '0'
            }, 2000, function() {
                $(this).animate({
                    'left': '-20'
                }, 2000, function() {
                    $(this).animate({
                        'left': '20'
                    }, 2000);
                });
            });
        }
        goodBox()
        setInterval(goodBox, 6000);



    });


</script>
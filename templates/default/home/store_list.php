<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
    <head>
        <title>玩艺网-设计师</title>
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
     <style>
         *{margin: 0; padding: 0;text-decoration: none; list-style-type:none;}
		 .squares{padding-top:20px;width: 1200px; margin: auto;}
        .conter{  background:url(<?php echo SHOP_TEMPLATES_URL; ?>/images/beijing.png) #f0f6ff repeat-x; width: 380px; height: 680px;border: 1px solid #c5d8e0; box-shadow:1px 1px 10px #ddebfa; text-align: center; color: #6e8793; border-radius: 5px; float:left;margin-left:14px;margin-bottom:20px; }
        .shejishi-title{ min-width: 110px; height: 50px; position: relative; margin-top:30px;}
		.shejishi-title  >h1{font-size:25px ;}
        .shejishi-title > i{display:inline;border: 1px solid #6e8793;width: 50px; position: absolute; left :40%; margin-top: 5px;}
        .add{ margin: 12px 0;}
        .main{width: 327px; height: 58px; font-size: 13px; margin: 0 auto; overflow:hidden; text-align:left;}
        .touxiang{cursor: pointer; width: 120px; height: 120px; background: #666666; margin:  0 auto;margin-top: 10px; border-radius:50%;overflow: hidden;}
        .touxiang>img{ height: 100%; width: 100%;}
        .gerenlianxi{margin: 15px 0;}
        .liangxi-pic {cursor: pointer;text-align: center; }
        .liangxi-pic > li{ cursor: pointer;width: 24px;height: 22px;display: inline-block;margin:0 2px; }
		.liangxi-pic > li>img{width:100%;height:100%;}
        .herenzuoping{margin-bottom: 15px;}
        .herenzuoping >ul {text-align: center; }
        .herenzuoping ul > li{ cursor: pointer;width: 110px;height: 110px;background: #666666;display: inline-block;margin-bottom: 5px; }
        .more{ cursor: pointer;width: 100px;height: 32px; border: 2px solid #6e8793;margin:0 auto;line-height: 31px; border-radius: 16px; background:#f0f6ff;font-size:14px; }
		.liangxi{ margin-left:15px; }
		.liangxi > li{z-index:10; position:relative; cursor: pointer;display: none;}
	
        .liangxi > li >div{display:inline;}
		.zhanghao{ background: #507080;color: #fff;padding: 2px 0;font-size: 17px;vertical-align: -4px;}
     </style>
    </head>
    <body>
      <div id="navs-arrival" class="clearfix" style="height:10px;"></div>
              <div class="flexslider control-nav-img-internally control-nav-on-center" id="lunbo_01">
        <ul class="slides">
            <li><?php echo loadadv(1263);?></li>
            <li><?php echo loadadv(1264); ?></li>
            <li><?php echo loadadv(1265); ?></li>
        </ul>
    </div>
    <div class="squares" nc_type="current_display_mode" >
        <?php if (!empty($output['store_list']) && is_array($output['store_list'])) { ?>
         <?php foreach ($output['store_list'] as $skey => $store) { ?>
         <div class="conter">
            <div class="shejishi-title">
                <h1><?php echo $store['store_name'];?></h1>
                <i></i>
            </div>
    
            <div class="add"><?php echo $store['area_info'];?></div>
            <p class="main"><?php echo mb_strimwidth($store['store_description'], 0,210, '...');?></p>
            <div class="touxiang"><img src="<?php echo getStoreLogo($store['store_avatar']);?>" alt="" /></div>
            <div class="gerenlianxi">
                <ul class="liangxi-pic">
                    <?php if(!empty($store['store_qq'])){?>
                    <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $store['store_qq'];?>&site=qq&menu=yes" title="QQ: <?php echo $store['store_qq'];?>" target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/liupingqq.png" alt=""/></a></li>
                     <?php }?>
                    <li><img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/liupingxinfeng.png" alt=""/></li>
                </ul>
            </div>
            <div class="herenzuoping">
                <ul>
                    <?php foreach ($store['search_list_goods'] as $key => $search_list_goods) { ?> 
                    <li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $search_list_goods['goods_id']));?>"><img src="<?php echo thumb($search_list_goods); ?>"width="110" height="110"data-image="<?php echo thumb($search_list_goods); ?>"></a> </li>
                     <?php if($key ==5){ break;?>
                     <?php }?>
                    <?php }?>
                </ul>
            </div>
            <a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>" target="_blank" title="<?php echo $store['store_name'];?>"><div class="more">进入</div></a>
        </div>
 <?php }?>
  <?php }?>
    </div>
  </body>
   
</html>
<script>
$(function() {
	//设计师联系方式显示隐藏
		var gerenlianxi=document.getElementsByClassName("gerenlianxi");
		for(var i=0,len=gerenlianxi.length; i<len; i++){
			$(gerenlianxi[i]).bind("mouseover mouseout",function() {
				var event=window.event||arguments[0];
				var src=event.target||event.srcElement;
				if(src.nodeName == "UL"){
					return fuClass(src);
				}else if(src.nodeName=="IMG"){
				    show(src.parentNode);
				}else{
					return
				}
				
			});
		}
		//给liangxi-pic 的 LI附上class
		function fuClass(srcul){
			for(var i=0,len=srcul.children.length; i<len; i++){
				srcul.children[i].className = i;
				srcul.previousElementSibling.children[i].style.display = "none";
			}
		}
		//对比两 ul 下的 class
       function show(srcli){
		   if(srcli.parentNode.previousElementSibling.children[srcli.className].style.display == "none" ){
			   srcli.parentNode.previousElementSibling.children[srcli.className].style.display="block";
			   srcli.parentNode.previousElementSibling.style.marginTop="-26px";
		   }else{
			   srcli.parentNode.previousElementSibling.children[srcli.className].style.display="none";
			   srcli.parentNode.previousElementSibling.style.marginTop="0";
		   }
	   }
		var conter=document.getElementsByClassName("conter");
		for(var k= 0, conterlen=conter.length;k<conterlen;k++){
			var liangxi=conter[k].getElementsByClassName("liangxi")[0].children;
			for(var u= 0, liangxilen=liangxi.length;u<liangxilen;u++){
				//var zhangSRC=liangxi[u].children[1].innerHTML;
				var lione=liangxi[0].children[1].innerHTML;
				liOne(liangxi[0],lione);
				var litwo=liangxi[1].children[1].innerHTML;
				liTwo(liangxi[1],litwo);
				var lithree=liangxi[2].children[1].innerHTML;
				liThree(liangxi[2],lithree);
				var lifour=liangxi[3].children[1].innerHTML;
				liFour(liangxi[3],lifour);
			}
		}
		function liOne(li,lione){
			var l = 0;
			var a = lione;
			for (var i=0;i<a.length;i++) {
				if (a[i].charCodeAt(0)<299) {
						l++;
				} else {
						l+=2;
				}
			}
			if(l>10&&l<20){
				li.style.left=5*l-50+"px";
			}else if(l>20) {
				li.style.left = 5 * l - 57 + "px";
			}else {
				li.style.left = 5 * l - 43 + "px";
			}
		}
		function liTwo(li,litwo){
			var l = 0;
			var a = litwo;
			for (var i=0;i<a.length;i++) {
				if (a[i].charCodeAt(0)<299) {
					l++;
				} else {
					l+=2;
				}
			}
			if(l>20) {
				li.style.left = 5 * l - 25 + "px";
			}else if( l >10&&l<20){
				li.style.left = 5 * l - 20+"px";
			}else {
				li.style.left = 5 * l - 12 + "px";
			}
		}
		function liThree(li,lithree){
			var l = 0;
			var a = lithree;
			for (var i=0;i<a.length;i++) {
				if (a[i].charCodeAt(0)<299) {
					l++;
				} else {
					l+=2;
				}
			}
			if(l>20) {
				li.style.left = 5 * l +5 + "px";
			}else if( l >10&&l<20){
				li.style.left = 5 * l + 13+"px";
			}else {
				li.style.left = 5 * l +20+ "px";
			}
		}
		function liFour(li,lifour){
			var l = 0;
			var a = lifour;
			for (var i=0;i<a.length;i++) {
				if (a[i].charCodeAt(0)<299) {
					l++;
				} else {
					l+=2;
				}
			}
			if(l>20) {
				li.style.left = 5 * l +42 + "px";
			}else if( l >10&&l<20){
				li.style.left = 5 * l +45+"px";
			}else {
				li.style.left = 5 * l +50+ "px";
			}
		}
	/****************************************************************/
	
	
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
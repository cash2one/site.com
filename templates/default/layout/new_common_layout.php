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
    <title><?php echo $output['html_title']; ?></title>
    <link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/dengluye.css"/>
    <link href="<?php echo SHOP_SITE_URL;?>/templates/default/newcss/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/base.css" rel="stylesheet" type="text/css">
	<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/home_login.css" rel="stylesheet" type="text/css">
    
	<script>
		var COOKIE_PRE = '<?php echo COOKIE_PRE; ?>';
		var _CHARSET = '<?php echo strtolower(CHARSET); ?>';
		var SITEURL = '<?php echo SHOP_SITE_URL; ?>';
		var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL; ?>';
		var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
		var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
		var SHOP_TEMPLATES_URL = '<?php echo SHOP_TEMPLATES_URL; ?>';
		//console.log(SITEURL);
		//console.log(SITEURL);
	</script>
	
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.js"></script>
    <script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.validation.min.js"></script>
	
    <script src="<?php echo RESOURCE_SITE_URL; ?>/js/common.js" charset="utf-8"></script>
	<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery-ui/jquery.ui.js"></script>
	<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.validation.min.js"></script>
    <script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.masonry.js"></script>
    <script src="<?php echo RESOURCE_SITE_URL; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
	
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/header.css"/>

    <!--<script src="http://localhost/wantease.com-master/shop/resource/newjs/jquery-1.11.3.js"></script>
    <script src="<?php echo SHOP_SITE_URL;?>/resource/newjs/dnegluye.js"></script>-->
</head>
<body>
<div id="append_parent"></div>
<div>
 <div class="nav">
         <div class="nav-left">
			<a href="<?php echo C('new_index_url'); ?>">
            <img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/indexlogo.png" alt=""/>
			</a>
            <div class="feileishousuo" id="feileishousuo">
               <span class="feilicon" id="feilicon"></span>
            </div>
         </div>
        <div class="nav-right">
            <div class="nav-ll">
             <span class="youmingtang">
                  <i>有名堂</i>
                  <div class="ymt-ziye">
                      <u></u>
                      <i><a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=allpinpai" target="_blank">品牌</a></i>
                      <i><a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=alljiangzao" target="_blank">匠造</a></i>
                  </div>
             </span>
             <span  class="yiquan"><a href="index.php?act=index&op=cms">艺圈</a></span>
             <span>
				<?php if ($_SESSION['is_login']) {?>
					
					<i class="yidenglu">
                     <div>
                         <img src="<?php echo getMemberAvatarForID($_SESSION['member_id']); ?>" alt=""/><u><?php echo $_SESSION['member_name'];?></u>
                     </div>
                     <div class="ab-out">
                         <u></u>
                         <i><a href="<?php echo urlShop('member','home');?>">关于我</a></i>
                         <i><a href="index.php?act=login&amp;op=logout">退出登录</a></i>
                     </div>
                 </i>
					
				<?php } else { ?>
					<i class="weidenglu"><a href="index.php?act=login&op=index">登录<a>/<a href="index.php?act=login&op=register">注册</a></i>
                 
				 <?php } ?>
             </span>
             <span class="gouwuche">
				<a href="index.php?act=cart">
                 <img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/gouwuche.png" alt=""/>
				 <?php if ($output['cart_goods_num'] > 0) { ?>
                 <i id="top_cart_num"><?php echo $output['cart_goods_num']; ?></i>
				 <?php } else { ?>
					
					<i id="top_cart_num">0</i>
				 <?php } ?>
				 </a>
             </span>
            </div>
            <div class="nav-rr">
               <span><a href="index.php?act=seller_login&op=show_login">商家登录</a></span>
               <span><a href="index.php?act=article&op=article&ac_id=7">关于玩艺</a></span>
            </div>
        </div>
        <div class="shousuo">
			<form method="get" action="<?php echo SHOP_SITE_URL; ?>">
					<span class="search">
						<input type="text" autocomplete="off" onkeyup="searchHistory()" onclick="searchHistory()" placeholder="请输入关键字" name="keyword" id="keyword" value="<?php echo $_GET['keyword']; ?>"  class="shousuo-input"/>
						<input type="hidden" value="search" id="search_act" name="act">
                        <input type="hidden" value="key" id="search_key" name="key">
						<i>
							<img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/indexsuch.png" class="search-img" alt=""/>
							<button type="submit" class="search-btn">搜索</button>
						</i>
					</span>
				</form>
            
            <div class="shousuo-guanjian" style="z-index:999">
                <!--<i>adfsfasdf注册</i>
                <i>adfsfasdf注册</i>
                <i>adfsfasdf注册</i>
                <i>adfsfasdf注册</i>-->
            </div>
        </div>
        <div style="clear: both"></div>
        <div class="flss-main" id="flss-main">
            <div class="fenleiyi">
				<?php if(!empty($output['all_goods_class_array'])) { ?>
				<ul>
				<?php $count = count($output['all_goods_class_array'])-1; foreach($output['all_goods_class_array'] as $kAll => $vAll){ ?>
			
					<li onclick="getDownGoodsClass(<?php echo $vAll['gc_id']; ?>)">
						
							<?php echo $vAll['gc_name']; ?>
						
					</li>
					
					<?php if($count != $kAll) { ?>
					<li>|</li>
					<?PHP }?>
				<?php } ?>
				</ul>
				<?php } ?>
               <!-- <ul>
                    <li>女士用品</li>
                    <li>|</li>
                    <li>我爱我家</li>
                    <li>|</li>
                    <li>科技数码</li>
                    <li>|</li>
                    <li>艺术生活</li>
                    <li>|</li>
                    <li>男士用品</li>
                    <li>|</li>
                    <li>美味餐厨</li>
                    <li>|</li>
                    <li>欢乐办公</li>
                    <li>|</li>
                    <li>旅行必备</li>
                </ul> -->
            </div>
            <div style="clear: both"></div>
            <div id="down_goods_class_array" class="fenleier">
				
				<?php if(!empty($output['down_goods_class_array'])){ ?>
				<ul>
				<?php foreach($output['down_goods_class_array'] as $kDown => $vDown){ ?>
			
					<li>
						<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vDown['gc_id']; ?>" >
							<?php echo $vDown['gc_name']; ?>
						</a>
					</li>
		 
				<?php } ?>
				</ul>
				<?php } ?>
                 <!-- <ul>
                    <li>格调</li>
                    <li>卧室</li>
                    <li>卫浴</li>
                    <li>收纳</li>
                    <li>照明</li>
                    <li>家具</li>
                </ul> -->
            </div>
        </div>
    </div>
	<script >

      $(document).ready(function(){

        $(".shousuo-input").focus(function(){
            $(".shousuo").animate({width:'350px'},"slow");
        });

        var flss=document.getElementById("feileishousuo");
        var flssMain=document.getElementById("flss-main");
        var feilicon=document.getElementById("feilicon");
        flss.onclick=function(){
            flssMain.style.display=flssMain.style.display=="block"?"none":"block";
            flssMain.style.width = document.body.clientWidth+"px";
            feilicon.className=feilicon.className=="feilicon"?"feilicon hover":"feilicon";
         }
		 if (window.addEventListener)
                window.addEventListener('DOMMouseScroll', wheel, false);
                window.onmousewheel = document.onmousewheel = wheel;

               function handle(delta) {
                  /* var s = delta + ": ";*/
                   if (delta <0)
                   flssMain.style.display="none";
                   feilicon.className="feilicon";
                       /*s += "您在向下滚……";
                   else
                       s += "您在向上滚……";
                 console.log(s);*/
               }
               function wheel(event){
                   var delta = 0;
                   if (!event) event = window.event;
                   if (event.wheelDelta) {
                       delta = event.wheelDelta/120;
                       if (window.opera) delta = -delta;
                   } else if (event.detail) {
                       delta = -event.detail/3;
                   }
                   if (delta)
                       handle(delta);
               }

	
    });
	
	function getDownGoodsClass(id) {

		var url = <?php echo "'".C('shop_site_url')."'"; ?> + "/index.php?act=goods&op=getDownGoodsClass";
		
		$.ajax({
					
			type:"GET",
			url:url,
			data: {'gc_id':id},
			dataType:"json",
					
			success: function(data) {

				var info = data.info;
				
				var str = '';
				
				str += '<ul>';
				
				for(i=0; i<info.length; i++) {
					
					str += '<li>';
					str += '<a href="' + info[i]['a_href'] + '" >';
					str += info[i]['gc_name'];
					str += '</a>';
					str += '</li>';
				}
				
				str += '</ul>';

				$('#down_goods_class_array').html(str);
				//console.log(data);
						
			},
					
			error : function(e) {
						
				console.log("e");
						
			}
					
		});
					
	}
	
		/**
         * 搜索品牌与匠造的DIV层
         * add by lizh 10:45 2016/7/2  
         */
        function searchHistory() {
           
            var input_value = $('#keyword').val();
			 
            if(input_value != null && input_value != "") {
                
                $('.shousuo-guanjian').css('display','block');
                var str = '<i><a href="index.php?act=search&op=allpinpai&value='+input_value+'">搜索有关于"'+input_value+'"的品牌</a></i>' 
                            + '<i><a href="index.php?act=search&op=alljiangzao&value='+input_value+'">搜索有关于"'+input_value+'"的匠造</a></i>'
                $('.shousuo-guanjian').html(str);
                
            } else {
                
                $('.shousuo-guanjian').css('display','none');
                $('.shousuo-guanjian').html('');
                
            }
        
        }
</script>
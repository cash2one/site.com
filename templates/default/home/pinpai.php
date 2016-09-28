<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/jiangzao.css"/>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiwu.css"/>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/pingpai.css"/>

<div class="jiangzao">
    <div class="titleName">
        <span><a href="index.php?act=search&op=allyiwu">艺物</a></span>
        <span ><a href="index.php?act=search&op=alljiangzao">匠造</a></span>
        <span style="background: #fff;"><a href="index.php?act=search&op=allpinpai">品牌</a></span>
    </div>
    <div style="clear: both;"></div>
    <div class="nav-bar">
        <div class="left-nav">
            <span><a href="index.php?act=search&op=allpinpai">综合</a></span><i>|</i>
            <span>
				<a href="index.php?act=search&op=allpinpai&key=store_click&order=<?php if($_GET['key'] == 'store_click' && $_GET['order'] == 'desc') { echo 'asc'; } else { echo 'desc'; } ?>">
					<?php  echo ($_GET['order'] == 'desc' && $_GET['key'] == 'store_click')?$lang['goods_class_index_click_asc']:$lang['goods_class_index_click_desc']; ?>
				</a>
			</span>
			<i>|</i>
            <span>
				<a href="index.php?act=search&op=allpinpai&key=store_sales&order=<?php if($_GET['key'] == 'store_sales' && $_GET['order'] == 'desc') { echo 'asc'; } else { echo 'desc'; } ?>">
					<?php echo ($_GET['order'] == 'desc' && $_GET['key'] == 'store_sales')?$lang['goods_class_index_sold_asc']:$lang['goods_class_index_sold_desc']; ?>
				</a>
			</span>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="pingpai">
            
            <?php $i = 1; ?>
            <?php foreach($output['store_list'] as $k => $v) { ?>
                
                 <div class="zj--yjf-mian">
                    
                    <div class="zj--yjf-bg">
                        
                            <div class="zj--yjf-bg">
								<a href="<?php echo $v['a_href']; ?>" target="_blank">
                                <img src="<?php echo $v['img_src']; ?>" alt="设计师">
								</a>
                                <div class="zj-yjf-head">
									<a href="<?php echo $v['a_href']; ?>" target="_blank">
                                    <img src="<?php echo $v['img_src_logo']; ?>" alt="">
									</a>
                                </div>
                            </div>
                        
                        <div class="add">
                            <span>
                                <a href="<?php echo $v['a_href']; ?>" target="_blank"><?php echo $v['store_name']; ?></a>
                            </span>
                            <div class="add-pic">
                                <ul>
                                <?php $slg = 1; ?>
                                <?php foreach($v['search_list_goods'] as $k2 => $v2) { ?>
                                    <li>
										<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $v2['goods_id'])); ?>">
                                        <img src="<?php echo $v2['img_src']; ?>" alt="">
										</a>
                                    </li>
                                    <?php if($slg >= 3) { ?>
                                        <?php break; ?>
									 <?php } ?>
                                    <?php $slg++; ?>
                                <?php } ?>
                                </ul>
                            </div>
                            <div style="clear: both"></div>
                             <div class="add-more">  <a href="<?php echo $v['a_href']; ?>" target="_blank">查看更多</a>  </div>
                        </div>
                    </div>
                </div>
          
                <?php $i++; ?>
            <?php } ?>

        <div style="clear: both;"></div>
        <div class="yushu">
            <?php echo $output['show_page']; ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
                 var browser=navigator.appName
                 var b_version=navigator.appVersion
                 var version=b_version.split(";");
                 var trim_Version=version[1].replace(/[ ]/g,"");
          		  if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0"|| browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0"||browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0"){

			   $(".zj--yjf-mian:nth-child(odd)").css("margin-right","16px");
			   $(".add-pic ul li:nth-child(2)").css("margin"," 0 8px");
			}
      })

   </script>
</body>
</html>
<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/jiangzao.css"/>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiwu.css"/>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/index.css"/>

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
    <div class="jiangzao-main all-shadow">
        
        <div class="jianzao-list">
            
            <?php $i = 1; ?>
            <?php foreach($output['store_list'] as $k => $v) { ?>
                
                <?php if($i%2 != 0) { ?>
            
                <div style="float: left;width: 49%;margin-bottom: 10px;height: 326px;">
                
                <?php } else { ?>
                
                <div style="float:right;width: 49%;margin-bottom: 10px;height: 326px;">  
                
                <?php } ?>
                    
                    <div class="zj--yjf-mian" style="height: 326px;">
                        <a href="<?php echo $v['a_href']; ?>" target="_blank">
                            <div class="zj--yjf-bg">
                                <img src="<?php echo $v['img_src']; ?>" width="100%" height="150PX" data-image="<?php echo $v['img_src']; ?>" alt="设计师">
                                <div class="zj-yjf-head">
                                    <img src="<?php echo $v['img_src_logo']; ?>" alt="">
                                </div>
                            </div>
                        </a>
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
                            <a href="<?php echo $v['a_href']; ?>" target="_blank">
                                <div class="add-more">查看更多</div>
                            </a>  
                        </div>
                    </div>
                </div>
          
                <?php $i++; ?>
            <?php } ?>

        </div>
        
        <div style="clear: both;"></div>
        <div class="yushu">
            <?php echo $output['show_page']; ?>
        </div>
    </div>
</div>
</body>
</html>
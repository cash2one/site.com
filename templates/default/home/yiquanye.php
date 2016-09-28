
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiquanye.css"/>
<div class="main">
	<?php if(!empty($output['cms_article_data_1']['data'])) { ?>
    <div>
        <div class="tle">
            <span><?php echo $output['cms_article_data_1']['name']; ?></span>
            <span class="tle-more">
				<img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_1']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
			</span>
            <div style="clear: both"></div>
        </div>
        <div class="banner-pic">
            <ul>
                <?php foreach($output['cms_article_data_1']['data'] as $k => $v ) { ?>
                <?php $article_url = getCMSArticleUrl($v['article_id']); ?>
					<li class="<?php echo 'l'.$k; ?>" onclick="yifanurl('<?php echo $article_url; ?>')"></li>
				<?php } ?>
            </ul>
        </div>
    </div>
	<?php } ?>
	
	<?php if(!empty($output['cms_article_data_3']['data'])) { ?>
    <div class="all jian">
        <div class="tle">
            <span><?php echo $output['cms_article_data_3']['name']; ?></span>
            <span class="tle-more">
				<img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_3']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
			</span>
            <div style="clear: both"></div>
        </div>
		
		<?php foreach($output['cms_article_data_3']['data'] as $k_3 => $v_3){ ?>
			
			<?php $article_url = getCMSArticleUrl($v_3['article_id']); ?>
			<div class="huigu-everyone">
				<div class="pic"><a href="<?php echo $article_url; ?>"><img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v_3['article_publisher_id'].DS.unserialize($v_3['article_image'])['name']; ?>" alt=""/></a></div>
				<div class="everyone-text">
					<div>
						<span class="huoname"><a href="<?php echo $article_url; ?>" style="font-size:12px"><?php echo $v_3['article_title']; ?></a></span>
					</div>
					<div class="everyone-text-l">
							<span class="wenzhyang">
								<a href="<?php echo $article_url; ?>">
									<?php echo $v_3['article_abstract']; ?>
								</a>
							</span>
					</div>
					<div class="huigu-everyone-th">
							<span class="huigu-everyone-time">
									<i><?php echo date('Y-m-d', $v_3['article_publish_time']); ?></i>
									<!-- <s>14:23</s> -->
							</span>
						<div class="you-ping">
							<span><i></i></span>
							<span><i></i><?php echo $v_3['article_click']; ?></span>
						</div>
						<div style="clear: both"></div>
					</div>
				</div>
			</div>

		<?php } ?>

    </div>
	<?php } ?>
	
	<?php if(!empty($output['cms_article_data_6']['data'])) { ?>
    <div class="all jian">
        <div class="tle">
            <span><?php echo $output['cms_article_data_6']['name']; ?></span>
            <span class="tle-more">
                <img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_6']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
            </span>
            <div style="clear: both"></div>
        </div>
		<?php  $count_6 = count($output['cms_article_data_6']['data']); ?>
        <?php foreach($output['cms_article_data_6']['data'] as $k_6 => $v_6){ ?>
			
            <?php $article_url = getCMSArticleUrl($v_6['article_id']); ?>
            <div class="huigu-everyone">
                <div class="pic"><a href="<?php echo $article_url; ?>"><img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v_6['article_publisher_id'].DS.unserialize($v_6['article_image'])['name']; ?>" alt=""/></a></div>
                <div class="everyone-text">
                    <div>
                        <span class="huoname"><a href="<?php echo $article_url; ?>"><?php echo $v_6['article_title']; ?></a></span>
                    </div>
                    <div class="everyone-text-l">
                            <span class="wenzhyang">
                                <a href="<?php echo $article_url; ?>">
                                    <?php echo $v_6['article_abstract']; ?>
                                </a>
                            </span>
                    </div>
                    <div class="huigu-everyone-th">
                            <span class="huigu-everyone-time">
                                    <i><?php echo date('Y-m-d', $v_6['article_publish_time']); ?></i>
<!--                                    <s>14:23</s>-->
                            </span>
                        <div class="you-ping">
                            <span><i></i></span>
                            <span><i></i><?php echo $v_6['article_click']; ?></span>
                        </div>
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
		<?php if($count_6%3 > 0) { ?>
			<div class="huigu-everyone">
				
			</div>
		<?php } ?>
		<div style="clear: both"></div>
    </div>
   <?php } ?>
	
	<?php if(!empty($output['cms_article_data_5']['data'])) { ?>
    <div class="all jian">
        <div class="tle">
            <span><?php echo $output['cms_article_data_5']['name']; ?></span>
            <span class="tle-more">
				<img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_5']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
			</span>
            <div style="clear: both"></div>
        </div>
        <div>
		
		<?php foreach($output['cms_article_data_5']['data'] as $k_5 => $v_5){ ?>
			<?php $article_url = getCMSArticleUrl($v_5['article_id']); ?>
			
			<a href="<?php echo $article_url; ?>" style="font-size:12px">
            <div class="yishenghuo-main">
                <div class="yishenghuo-day"><?php echo mb_substr($v_5['article_title'],0,3,'utf-8').'...'; ?></div>
                <div class="yishenghuo-img">
                    <img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v_5['article_publisher_id'].DS.unserialize($v_5['article_image'])['name']; ?>" alt=""/>
                </div>
            </div>
            </a>
		<?php } ?>

        </div>
    </div>
	<?php } ?>
	
	<?php if(!empty($output['cms_article_data_5']['data'])) { ?>
    <div class="all jian">
        <div class="tle">
            <span><?php echo $output['cms_article_data_4']['name']; ?></span>
            <span class="tle-more">
				<img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_4']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
			</span>
            <div style="clear: both"></div>
        </div>
        <div>
            <div class="wangqi-huig">
				
				<?php foreach($output['cms_article_data_4']['data'] as $k_4 => $v_4){ ?>
					<?php $article_url = getCMSArticleUrl($v_4['article_id']); ?>
					
					<a href="<?php echo $article_url; ?>" style="font-size:12px">
					<div class="wangqi-p">
						<img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v_4['article_publisher_id'].DS.unserialize($v_4['article_image'])['name']; ?>" alt=""/>
						<div class="wangqi-t">
							<div>
								<h4><?php echo $v_4['article_title']; ?></h4>
								<span><?php echo mb_substr($v_4['article_abstract'],0,30,'utf-8').'...'; ?></span>
							</div>
						</div>
					</div>
					</a>
				<?php } ?>

            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
	<?php } ?>
</div>
<style>
	
 <?php if(!empty($output['cms_article_data_1']['data'])) { ?> 
    <?php $i = 0; foreach($output['cms_article_data_1']['data'] as $k2 => $v2) { ?>
        <?php if($i == 0) { ?>
            .banner-pic .<?php echo 'l'.$k2; ?>{background-image:url(<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v2['article_publisher_id'].DS.unserialize($v2['article_image'])['name']; ?>);width:652px;}
        <?php } else { ?>
             .banner-pic .<?php echo 'l'.$k2; ?>{background-image:url(<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$v2['article_publisher_id'].DS.unserialize($v2['article_image'])['name']; ?>);}
        <?php } ?>
    <?php $i++; } ?>
<?php } ?>
	
</style>
<script type="text/javascript">
    
    function yifanurl(url) {
        
       window.open(url);
        
    }
    
</script>

</body>
<script type="text/javascript">
    $(".banner-pic ul li").hover(function(){
        $(this).stop(true).animate({width:"652px"},500).siblings().stop(true).animate({width:"78px"},500);
    });

</script>

</html>
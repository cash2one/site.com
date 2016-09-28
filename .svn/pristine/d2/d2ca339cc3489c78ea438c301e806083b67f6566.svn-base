
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiquanye.css"/>
<div class="main">

    <div class="all jian">
        <div class="tle">
            <span><?php echo $output['cms_article_data_all']['name']; ?></span>
            <span>
                <img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/morepic.png" alt=""/>
                <a href="index.php?act=index&op=moreCms&class_id=<?php echo $output['cms_article_data_all']['class_id']; ?>" style="color:#00cf9e;font-size: 18px;margin-top: 9px">
                    MORE
                </a>
            </span>
            <div style="clear: both"></div>
        </div>
		
		<?php foreach($output['cms_article_data_all']['data'] as $k_3 => $v_3){ ?>
			
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

</div>

</body>
<script type="text/javascript">
    
    $(".banner-pic ul li").hover(function(){
        $(this).stop(true).animate({width:"652px"},500).siblings().stop(true).animate({width:"78px"},500);
    });
    
</script>
</html>
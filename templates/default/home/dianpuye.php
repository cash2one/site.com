	
	<?php defined('InShopNC') or exit('Access Invalid!');?>
	<?php 
		//加载店铺装修静态页
		if(isset($output['decoration_file'])) { 
				require($output['decoration_file']);
		} 
	?>
	
<?php if(!$output['store_decoration_only']) { ?>
	
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/dianpuye.js"></script>
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/dianpuye.css"/>
	
	    <div class="new-shangpin">
        <!-- <span class="new-shangpin-iti">新品<i>N E W S</i></span> -->
        <span class="new-shangpin-iti"><?php echo $lang['show_store_index_new_goods'];?><i>N E W S</i></span>
        <div class="">
		
			
			
		<?php if(!empty($output['new_goods_list']) && is_array($output['new_goods_list'])){?>	
			
			<?php $count = count($output['new_goods_list']);  $num = 1;
			
				foreach($output['new_goods_list'] as $value){ ?>
			
			<?php if($num <= 2) { ?>
				
				<?php if($num == 1){ ?>
				
					<div class="new-left">
				
				<?php } ?>
				
					<div class="new-left-pic">
						<img src="<?php echo thumb($value, 240);?>" alt="<?php echo $value['goods_name'];?>"/>
					</div>
					<div class="new-left-test">
						<p><?php echo $value['goods_name'];?></p>
						<i><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></i>
					</div>
					
					
					<!-- <div class="new-left-pic"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/></div>
					<div class="new-left-test">
						<p>DMC雪人从撒旦法</p>
						<i>￥880</i>
					</div> -->
				
				<?php if($num == 2 || $count == $num){ ?>
				
					</div>
			    
				<?php } ?>
			
			<?php } ?>

			<?php if($num > 2 && $num == 3) { ?>
				<div class="new-middle" id="flash">
					<ul id="pic">
					<?php if (is_array($value['image'])) {?>
						<?php $i=0;foreach ($value['image'] as $val) {$i++?>
							<li  <?php if($i==1) { ?> style="display:block" <?php } ?> ><img src="<?php echo thumb($value, 60);?>" alt=""></li>
						<?php }?>
					<?php } else {?>
						<li  style="display:block"><?php echo thumb($value, 60);?></li>
					<?php }?>

					</ul>
					<ol id="num">
						<li class="active"></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			<?php } ?>

			<?php if($num > 3) { ?>
				
				<?php if($num == 4){ ?>
				
					 <div class="new-right" style="width:220px">
				
				<?php } ?>
					
					<div class="new-left-pic"><img src="<?php echo thumb($value, 60);?>" alt="" /></div>
						<div class="new-left-test">
							<p><?php echo $value['goods_name'];?></p>
							<i><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></i>
					</div>
				
					<!-- <div class="new-left-pic">
						<img src="<?php echo thumb($value, 240);?>" alt=""/>
					</div>
					<div class="new-left-test">
						<p><?php echo $value['goods_name'];?></p>
						<i><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></i>
					</div> -->

				<?php if($num == 5 || $count == $num){ ?>
				
					</div>
			    
				<?php } ?>
			
			<?php } ?>

			<?php $num++; } ?>
			
		<?php }else{ ?>
				
				<div class="nothing">
				  <p><?php echo $lang['show_store_index_no_record'];?></p>
				</div>
			
		<?php } ?>
			
        </div>
    </div>
	
    <!--<div class="new-shangpin">
        <span class="new-shangpin-iti">新品<i>N E W S</i></span>
        <div class="">
            <div class="new-left">
                <div class="new-left-pic"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/></div>
                <div class="new-left-test">
                    <p>DMC雪人从撒旦法</p>
                    <i>￥880</i>
                </div>
                <div class="new-left-pic"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/></div>
                <div class="new-left-test">
                    <p>DMC雪人从撒旦法</p>
                    <i>￥880</i>
                </div>
            </div>
            <div class="new-middle" id="flash">
                <ul id="pic">
                    <li style="display:block"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""></li>
                    <li ><img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""></li>
                    <li><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""></li>
                </ul>
                <ol id="num">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
            <div class="new-right">
                <div class="new-left-pic"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/></div>
                <div class="new-left-test">
                    <p>DMC雪人从撒旦法</p>
                    <i>￥880</i>
                </div>
                <div class="new-left-pic"><img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/></div>
                <div class="new-left-test">
                    <p>DMC雪人从撒旦法</p>
                    <i>￥880</i>
                </div>
            </div>
        </div>
    </div> -->
    <div class="tuijian-cp-o">
        <div class="tuijian-cp-nav">
            <ul>
                <li>产品</li>
                <li>价格</li>
                <li>销量</li>
            </ul>
            <div>
                <input type="text" />
                <span>联系客服</span>
            </div>
        </div>
        <div class="tuijian-cp-main">
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="tuijian-cp-o tuijian-cp-t">
        <div class="tuijian-cp-nav">
            其他推荐
        </div>
        <div class="tuijian-cp-main">
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="tuijian-cp-t-chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>品牌名</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="tuijian-cp-t-chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>品牌名</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="tuijian-cp-t-chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>品牌名</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div class="chanpin">
                <div class="chanpin-pic">
                    <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                    <div class="chanpin-tc">
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                        <span><img src="" alt=""/></span>
                    </div>
                </div>
                <div class="tuijian-cp-t-chanpin-test">
                    <span>dmv阿斯顿发生</span>
                    <span>品牌名</span>
                    <span>点赞数64546465</span>
                    <span>¥456.00</span>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
	
<?php } ?>
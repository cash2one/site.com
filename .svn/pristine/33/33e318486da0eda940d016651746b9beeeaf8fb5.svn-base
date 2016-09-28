	
	<?php defined('InShopNC') or exit('Access Invalid!');?>
	<?php 
		//加载店铺装修静态页
		if(isset($output['decoration_file'])) {

			require($output['decoration_file']);
		} 
	?>
	
<?php if(!$output['store_decoration_only']) { ?>

	    <div class="new-shangpin">
        <span class="new-shangpin-iti"><?php echo $lang['show_store_index_new_goods'];?><i>N E W S</i></span>
        <div class="">
	
		<?php if(!empty($output['new_goods_list']) && is_array($output['new_goods_list'])){?>	
			
			<?php $count = count($output['new_goods_list']);  $num = 1;
			
				foreach($output['new_goods_list'] as $value){ ?>
			
			<?php if($num <= 2) { ?>
				
				<?php if($num == 1){ ?>
				
					<div class="new-left">
				
				<?php } ?>
					
					<a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" title="<?php echo $value['goods_name'];?>" target="_blank">
					
					<div class="new-left-pic">
						<img src="<?php echo thumb($value,360);?>" alt="<?php echo mb_substr($value['goods_name'],0,8,'utf-8').'...';?>"/>
					</div>
					
					</a>
					
					<div class="new-left-test">
						<p><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" title="<?php echo $value['goods_name'];?>" target="_blank"><?php echo mb_substr($value['goods_name'],0,8,'utf-8').'...';?></a></p>
						<i><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></i>
					</div>
				
				<?php if($num == 2 || $count == $num){ ?>
				
					</div>
			    
				<?php } ?>
			
			<?php } ?>

			<?php if($num > 2 && $num == 3) { ?>
			
				<a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" title="<?php echo $value['goods_name'];?>" target="_blank">
				
				<div class="new-middle" id="flash">
					<ul id="pic">
					<?php if (is_array($value['image'])) {?>
						<?php $i=0;foreach ($value['image'] as $val) {$i++?>
							<li  <?php if($i==1) { ?> style="display:block" <?php } ?> ><img src="<?php echo thumb($value,1280);?>" alt=""></li>
						<?php }?>
					<?php } else {?>
						<li  style="display:block"><?php echo thumb($value,1280);?></li>
					<?php }?>

					</ul>
					<ol id="num">
						<li class="active"></li>
						<li></li>
						<li></li>
					</ol>
				</div>
				
				</a>
				
			<?php } ?>

			<?php if($num > 3) { ?>
				
				<?php if($num == 4){ ?>
				
					<div class="new-right" style="width:220px">
				
				<?php } ?>
					
					<a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" title="<?php echo $value['goods_name'];?>" target="_blank">
						<div class="new-left-pic"><img src="<?php echo thumb($value,360);?>" alt="" /></div>
					</a>
					
					<div class="new-left-test">
						<p><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" title="<?php echo $value['goods_name'];?>" target="_blank"><?php echo mb_substr($value['goods_name'],0,8,'utf-8').'...'; ?></a></p>
						<i><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></i>
					</div>

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

    <div class="tuijian-cp-o">
        <div class="tuijian-cp-nav">
            <ul>
                <li><a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id'])).'&typeclass=goods_name';?>" class="img">产品</a></li>
                <li><a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id'])).'&typeclass=goods_price';?>" class="img">价格</a></li>
                <li><a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id'])).'&typeclass=goods_salenum';?>" class="img">销量</a></li>
            </ul>
            <div>
				<form style="float:left;margin:0 10px 0 0" id="" name="searchShop" method="get" action="index.php" >
					<input type="hidden" name="act" value="show_store" />
					<input type="hidden" name="op" value="goods_all" />
					<input type="hidden" name="store_id" value="<?php echo $output['store_info']['store_id'];?>" />
					<input type="text" class="text w120" name="inkeyword" value="<?php echo $_GET['inkeyword'];?>" placeholder="搜索店内商品">
				</form>
                <div class="service">
					<div class="displayed"><i></i>在线客服-- 
					  <div class="sub">
						<?php include template('store/callcenter');?>
					  </div>
					</div>
				</div>
            </div>
        </div>
        <div class="tuijian-cp-main">
			
			<?php if(!empty($output['rand_recommended_goods_list']) && is_array($output['rand_recommended_goods_list'])){?>
			
			<?php foreach($output['rand_recommended_goods_list'] as $value){?>
			
				<div class="chanpin">
					<div class="chanpin-pic">
						<img src="<?php echo thumb($value,360);?>" alt=""/>
						<a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" class="goods-thumb" title="<?php echo $value['goods_name']; ?>" target="_blank">
						<div class="chanpin-tc">
							<?php if (is_array($value['image'])) { ?>
									
									<?php $i=0;foreach ($value['image'] as $val) {$i++ ?>
										
										<?php if($i > 3) { break; } ?>
										<span><img src="<?php echo thumb($val,60);?>"/></span>
									
									<?php } ?>
									
								<?php } else { ?>
								
									<span><img src="<?php echo thumb($val,60);?>"/></span>
								
								<?php } ?>
						</div>
						</a>
					</div>
					<div class="chanpin-test">
						<span><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" class="goods-thumb" title="<?php echo $value['goods_name']; ?>" target="_blank"><?php echo mb_substr($value['goods_name'],0,8,'utf-8').'...';?></a></span>
						<span><?php echo $lang['show_store_index_be_sold'];?><?php echo $value['goods_salenum'];?><?php echo $lang['nc_jian'];?></span>
						<span><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></span>
					</div>
				</div>
			
			<?php }?>
			
			<?php }else{?>
				<div class="nothing">
				  <p><?php echo $lang['show_store_index_no_record'];?></p>
				</div>
			<?php }?>

            <div style="clear: both"></div>
        </div>
    </div>
	
    <div class="tuijian-cp-o tuijian-cp-t">
        <div class="tuijian-cp-nav">
            <?php echo $lang['show_store_index_recommend'];?>
        </div>
        <div class="tuijian-cp-main">
			
			<?php if(!empty($output['recommended_goods_list']) && is_array($output['recommended_goods_list'])){?>
			
			<?php foreach($output['recommended_goods_list'] as $value){?>
            
				<div class="chanpin">
					<div class="chanpin-pic">
						
						<img src="<?php echo thumb($value,360);?>" alt="<?php echo $value['goods_name'];?>"/>
						
						<a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" class="goods-thumb" target="_blank">
						
							<div class="chanpin-tc">
								<?php if (is_array($value['image'])) { ?>
									
									<?php $i=0;foreach ($value['image'] as $val) {$i++ ?>
										
										<?php if($i > 3) { break; } ?>
										<span><img src="<?php echo thumb($val,60);?>"/></span>
									
									<?php } ?>
									
								<?php } else { ?>
								
									<span><img src="<?php echo thumb($val,60);?>"/></span>
								
								<?php } ?>
							</div>
						
						</a>
						
					</div>
					<div class="tuijian-cp-t-chanpin-test">
						<span><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$value['goods_id']));?>" class="goods-thumb" target="_blank"><?php echo mb_substr($value['goods_name'],0,8,'utf-8').'...';?></a></span>
						<span></span>
						<span><?php echo $lang['show_store_index_be_sold'];?><?php echo $value['goods_salenum'];?><?php echo $lang['nc_jian'];?></span>
						<span><?php echo $lang['currency'];?><?php echo $value['goods_promotion_price']?></span>
					</div>
				</div>
			
			<?php }?>
			
			<?php }else{?>
				<div class="nothing">
				  <p><?php echo $lang['show_store_index_no_record'];?></p>
				</div>
			<?php }?>

            <div style="clear: both"></div>
        </div>
    </div>
	
<?php } ?>
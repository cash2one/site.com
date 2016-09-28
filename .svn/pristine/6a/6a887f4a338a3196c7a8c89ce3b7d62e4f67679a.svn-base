	<?php defined('InShopNC') or exit('Access Invalid!');?>
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/fenleiye.css"/>
	<div class="fenlei">
         <ul class="fenlei-oe">
		 
		 <?php foreach($output['all_goods_class_array'] as $kAll => $vAll){ ?>
			
			<li>
				<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vAll['gc_id']; ?>" >
					<?php echo $vAll['gc_name']; ?>
				</a>
			</li>
		 
		 <?php } ?>

         </ul>
		 <div style="clear: both;"></div>
         <ul class="fenlei-tw">
		 <?php if(!empty($output['goods_class_array'])) { ?>
		 <?php foreach($output['goods_class_array'] as $kgca => $vgca) { ?>
		 
			<?php if(!empty($vgca['class2'])) { ?>
			<?php $i =0; foreach($vgca['class2'] as $kgca_2 => $vgca_2) { ?>
			
				<?php if($i == 0) {?>
				
				
					<li>
						<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vgca_2['gc_id']; ?>" >
				
							<?php echo $vgca_2['gc_name']; ?>
							
						</a>
					</li>
				
				<?php } else { ?>
				
					<li>/</li>
					<li>
						<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vgca_2['gc_id']; ?>" >
				
							<?php echo $vgca_2['gc_name']; ?>
				
						</a>
					</li>
					
				<?php } $i++; ?>

			<?php } ?>
			<?php } ?>
		 <?php } ?>
		 <?php } ?>
         </ul>

       <div style="clear: both;"></div>
   </div>
   <div class="xiangqing-main">
		
		<?php if(!empty($output['goods_class_array'])){ ?>
			
       <div class="xiangqing-l">
		
		<ul>
		<?php foreach($output['goods_class_array'] as $kgca => $vgca) { ?>
			<?php if(!empty($vgca['class2'])) { ?> 
			<?php foreach($vgca['class2'] as $kgca_2 => $vgca_2) { ?>

				<?php if(!empty($vgca_2['class3'])) { ?>

					<?php foreach($vgca_2['class3'] as $kgca_3 => $vgca_3) {?>

						<li>
						
							<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vgca_3['gc_id']; ?>" >
							
							<?php echo $vgca_3['gc_name']; ?>
							
							</a>
							
						</li>
						<i></i>
					<?php }?>

				<?php } ?>

			<?php }?>
			<?php } ?>
		<?php } ?>
		</ul>

       </div>
	   
	   <?php } ?>
	   
       <div class="xiangqing-r">

           <div class="paiming">
               <ul>
                   <li><a href="<?php echo dropParam(array('order', 'key'));?>"  title="<?php echo $lang['goods_class_index_default_sort'];?>"><?php echo $lang['goods_class_index_default'];?></a><i></i></li>
                   <li><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1') ? replaceParam(array('key' => '1', 'order' => '1')):replaceParam(array('key' => '1', 'order' => '2')); ?>" <?php if($_GET['key'] == '1'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1')?$lang['goods_class_index_sold_asc']:$lang['goods_class_index_sold_desc']; ?>"><?php echo $lang['goods_class_index_sold'];?><i></i></a></li>
                   <li><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '2') ? replaceParam(array('key' => '2', 'order' => '1')):replaceParam(array('key' => '2', 'order' => '2')); ?>" <?php if($_GET['key'] == '2'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php  echo ($_GET['order'] == '2' && $_GET['key'] == '2')?$lang['goods_class_index_click_asc']:$lang['goods_class_index_click_desc']; ?>"><?php echo $lang['goods_class_index_click']?><i></i></a></li>
                   <li><a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3') ? replaceParam(array('key' => '3', 'order' => '1')):replaceParam(array('key' => '3', 'order' => '2')); ?>" <?php if($_GET['key'] == '3'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3')?$lang['goods_class_index_price_asc']:$lang['goods_class_index_price_desc']; ?>"><?php echo $lang['goods_class_index_price'];?><i></i></a></li>
               </ul>
           </div>
           <div class="shangpin-list">
				<?php require_once (BASE_TPL_PATH.'/home/goods.squares_new.php');?>

           </div>
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
      			   $(".fenlei  .fenlei-tw >li:nth-child(even)").css("margin","0 40px");
      			   $(".chanpin:nth-child(4n)").css("margin-right","0");
      			}
            })
       </script>
</body>
</html>
	
	<?php defined('InShopNC') or exit('Access Invalid!');?>
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiwu.css"/>
   <div class="yiwu">
       <div class="titleName">
           <span style="background:#fff"><a href="index.php?act=search&op=allyiwu">艺物</a></span>
           <span><a href="index.php?act=search&op=alljiangzao">匠造</a></span>
           <span><a href="index.php?act=search&op=allpinpai">品牌</a></span>
       </div>
       <div style="clear: both;"></div>
       <div class="nav-bar">
           <div class="left-nav">
               <span >
                   <a href="<?php echo dropParam(array('order', 'key'));?>"  title="<?php echo $lang['goods_class_index_default_sort'];?>">综合</a>
               </span>
               <i>|</i>
               <span>
                   <a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '2') ? replaceParam(array('key' => '2', 'order' => '1')):replaceParam(array('key' => '2', 'order' => '2')); ?>" <?php if($_GET['key'] == '2'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php  echo ($_GET['order'] == '2' && $_GET['key'] == '2')?$lang['goods_class_index_click_asc']:$lang['goods_class_index_click_desc']; ?>">
                       <?php  echo ($_GET['order'] == '2' && $_GET['key'] == '2')?$lang['goods_class_index_click_asc']:$lang['goods_class_index_click_desc']; ?><i></i>
                   </a>
               </span>
               <i>|</i>
               <span>
                   <a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1') ? replaceParam(array('key' => '1', 'order' => '1')):replaceParam(array('key' => '1', 'order' => '2')); ?>" <?php if($_GET['key'] == '1'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1')?$lang['goods_class_index_sold_asc']:$lang['goods_class_index_sold_desc']; ?>">
                       <?php echo ($_GET['order'] == '2' && $_GET['key'] == '1')?$lang['goods_class_index_sold_asc']:$lang['goods_class_index_sold_desc']; ?><i></i>
                   </a>
               </span>
               <!--<i>|</i>
                <span>
                    <span>
                        <a href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3') ? replaceParam(array('key' => '3', 'order' => '1')):replaceParam(array('key' => '3', 'order' => '2')); ?>" <?php if($_GET['key'] == '3'){?>class="<?php echo $_GET['order'] == 1 ? 'asc' : 'desc';?>"<?php }?> title="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3')?$lang['ggoods_class_index_province_asc']:$lang['goods_class_index_province_desc']; ?>">
                            <?php echo $lang['goods_class_index_province'];?><img src="<?php echo SHOP_SITE_URL;?>/resource/newimg/xialaijiantou.png" alt="">
                        </a>
                    </span>
                    <div></div>
                </span>-->
           </div>
           <!-- <div class="right-nav">
               <div class="dianpu">
                   <span>店铺类型<img src="<?php echo SHOP_SITE_URL;?>/resource/newimg/xialaijiantou.png" alt=""/></span>
                   <div class="leixxing">
					<?php foreach($output['all_goods_class_array'] as $kAll => $vAll){ ?>
						<span>
							<a href="<?php echo C('shop_site_url'); ?>/index.php?act=search&op=index&cate_id=<?php echo $vAll['gc_id']; ?>" >
								<?php echo $vAll['gc_name']; ?>
							</a>
						</span>
					<?php } ?>
                   </div>
               </div>
           </div> -->
       </div>
       <div style="clear: both;"></div>
       <div class="yiwu-main" >
           <div class="shangpin-list">
				<?php require_once (BASE_TPL_PATH.'/home/goods.squares_new.php');?>
               <!-- <div class="chanpin all-shadow">
                   <div class="chanpin-pic">
                       <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                       <div class="chanpin-tc">
                           <span class="cp-good"></span>
                           <span class="cp-fx"></span>
                           <span class="cp-gu"></span>
                       </div>
                   </div>
                   <div class="chanpin-test">
                       <span>dmv阿斯顿发生</span>
                       <span>品牌名</span>
                       <span><i></i>64546465</span>
                       <span>¥456.00</span>
                   </div>
               </div>
               <div class="chanpin all-shadow">
                   <div class="chanpin-pic">
                       <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                       <div class="chanpin-tc">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </div>
                   <div class="chanpin-test">
                       <span>dmv阿斯顿发生</span>
                       <span>品牌名</span>
                       <span><i></i>64546465</span>
                       <span>¥456.00</span>
                   </div>
               </div>
               <div class="chanpin all-shadow">
                   <div class="chanpin-pic">
                       <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                       <div class="chanpin-tc">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </div>
                   <div class="chanpin-test">
                       <span>dmv阿斯顿发生</span>
                       <span>品牌名</span>
                       <span><i></i>64546465</span>
                       <span>¥456.00</span>
                   </div>
               </div>
               <div class="chanpin all-shadow">
                   <div class="chanpin-pic">
                       <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                       <div class="chanpin-tc">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </div>
                   <div class="chanpin-test">
                       <span>dmv阿斯顿发生</span>
                       <span>品牌名</span>
                       <span><i></i>64546465</span>
                       <span>¥456.00</span>
                   </div>
               </div>
               <div class="chanpin all-shadow">
                   <div class="chanpin-pic">
                       <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                       <div class="chanpin-tc">
                           <span></span>
                           <span></span>
                           <span></span>
                       </div>
                   </div>
                   <div class="chanpin-test">
                       <span>dmv阿斯顿发生</span>
                       <span>品牌名</span>
                       <span><i></i>64546465</span>
                       <span>¥456.00</span>
                   </div>
               </div> -->
           </div>
       </div>
       <div style="clear: both;"></div>
       <div class="yushu">
			<?php echo $output['show_page']; ?>
           <!-- <span>上一页</span>
           <ul>
               <li>1</li>
               <li>2</li>
               <li>3</li>
               <li>4</li>
               <li>5</li>
               <li>6</li>
           </ul>
           <span>...</span>
           <span>尾页</span>
           <span>下一页</span> -->
       </div>
   </div>
    <script>
        $(document).ready(function(){
                     var browser=navigator.appName
                     var b_version=navigator.appVersion
                     var version=b_version.split(";");
                     var trim_Version=version[1].replace(/[ ]/g,"");
              		  if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0"|| browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0"||browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0"){
              	
   			   $(".chanpin:nth-child(4n)").css("margin-right","0");
   			}
         })
    </script>
</body>
</html>
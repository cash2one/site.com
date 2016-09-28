<?php defined('InShopNC') or exit('Access Invalid!'); ?>
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/jiangzao.css"/>
    <link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/yiwu.css"/>
	
    <div class="jiangzao">
        <div class="titleName">
			<span><a href="index.php?act=search&op=allyiwu">艺物</a></span>
			<span style="background: #fff;"><a href="index.php?act=search&op=alljiangzao">匠造</a></span>
			<span><a href="index.php?act=search&op=allpinpai">品牌</a></span>
        </div>
        <div style="clear: both;"></div>
        <div class="nav-bar">
            <div class="left-nav">
            <span><a href="index.php?act=search&op=alljiangzao">综合</a></span><i>|</i>
            <span>
				<a href="index.php?act=search&op=alljiangzao&key=store_click&order=<?php if($_GET['key'] == 'store_click' && $_GET['order'] == 'desc') { echo 'asc'; } else { echo 'desc'; } ?>">
					<?php  echo ($_GET['order'] == 'desc' && $_GET['key'] == 'store_click')?$lang['goods_class_index_click_asc']:$lang['goods_class_index_click_desc']; ?>
				</a>
			</span>
			<i>|</i>
            <span>
				<a href="index.php?act=search&op=alljiangzao&key=store_sales&order=<?php if($_GET['key'] == 'store_sales' && $_GET['order'] == 'desc') { echo 'asc'; } else { echo 'desc'; } ?>">
					<?php echo ($_GET['order'] == 'desc' && $_GET['key'] == 'store_sales')?$lang['goods_class_index_sold_asc']:$lang['goods_class_index_sold_desc']; ?>
				</a>
			</span>
            <!--<i>|</i>
			<span>
                <span><a href="index.php?act=search&op=alljiangzao&key=address&order=<?php if($_GET['order'] == 'asc' || $_GET['order'] == null) { echo 'desc'; } else { echo 'asc'; } ?>">所在点</a><img src="<?php echo SHOP_SITE_URL;?>/resource/newimg/xialaijiantou.png" alt=""/></span>
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
        <div class="jiangzao-main all-shadow">
            <div class="jianzao-list">

				<?php if (!empty($output['store_list']) && is_array($output['store_list'])) { ?>
					<?php foreach ($output['store_list'] as $skey => $store) { ?>
						<div class="jianzao-xinxi all-shadow">
							<span class="jztouxiang"><a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>" target="_blank" title="<?php echo $store['store_name'];?>"><img src="<?php echo getStoreLogo($store['store_avatar']);?>" alt="" /></a></span>
							<span class="jiangzaoyh">
								<p><a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>" target="_blank" title="<?php echo $store['store_name'];?>"><?php echo $store['store_name'];?></a></p>
								<div>
									<a href="<?php echo urlShop('show_store', '', array('store_id' => $store['store_id']), $store['store_domain']); ?>" target="_blank" title="<?php echo $store['store_name'];?>">
									<i><?php echo $store['area_info'];?></i>
									</a>
									<!-- <i>挖法士大</i> -->
								</div>
							</span>
							<span class="guanzhu">
								
								<?php if($_SESSION['is_login']){ ?>
									<a href="javascript:void(0);" title="" onclick="meberKeepStore(<?php echo $store['store_id']; ?>)">
										<i></i>
										关注
									</a>
								<?php } else { ?>
									<a href="javascript:void(0);" title="" onclick="login_dialog()">
										<i></i>
										关注
									</a>
								<?php } ?>
							</span>
							<div style="clear: both;"></div>
							<ul>
								<?php $i=1; foreach ($store['search_list_goods'] as $key => $search_list_goods) { ?> 
									
									<li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $search_list_goods['goods_id']));?>"><img src="<?php echo thumb($search_list_goods); ?>" data-image="<?php echo thumb($search_list_goods); ?>"></a> </li>

									<?php if($key ==5 || $i >= 4){ break; } $i++; ?>

								<?php }?>

							</ul>
							<div style="clear: both;"></div>
						</div>
					<?php }?>
				<?php }?>
				
				<!-- S 提示 -->
				<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/layer.js" type="text/javascript" charset="utf-8"></script> 
				<!-- E 提示 -->
	
				<script>

					function meberKeepStore(id) {

							url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=meberKeepStore';
							//console.log(url);
							$.ajax({

									type:'GET',
									url: url,
									data:{store_id:id},
									dataType:'json',

									success : function(data) {

										layer.tips(data.info, obj, {
											tips: [1, '#0FA6D8'] //还可配置颜色
										});

									},

									error : function(e) {

											console.log(e);

									}

							});

					}

				</script>

            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
   <script>
    $(document).ready(function(){
                 var browser=navigator.appName
                 var b_version=navigator.appVersion
                 var version=b_version.split(";");
                 var trim_Version=version[1].replace(/[ ]/g,"");
          		  if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0"|| browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0"||browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0"){

			   $(".jianzao-xinxi:nth-child(odd)").css("margin-right","16px");
			}
      })

   </script>
</body>
</html>
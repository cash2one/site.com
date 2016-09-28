<?php defined('InShopNC') or exit('Access Invalid!');?>
<?php include template('layout/new_common_layout');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/shop.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL?>/css/shop_custom.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/store/style/<?php echo $output['store_theme'];?>/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/member.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/shop.js" charset="utf-8"></script>
<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/dianpuye.js"></script>
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/dianpuye.css"/>

	<div class="header">
		
		<?php if(isset($output['decoration_banner'])) { ?>
			<!-- 启用店铺装修 -->
			<?php if($output['decoration_banner']['display'] == 'true') { ?>
				
				<div id="decoration_banner" class="dianpu-main">
					<img src="<?php echo $output['decoration_banner']['image_url'];?>" alt="">
				</div>
				
			<?php } ?>
			 
		<?php } else { ?>
		
			<!-- 不启用店铺装修 -->
			<div class="dianpu-main">

				<?php if(!empty($output['store_info']['store_banner'])){?>
				
					<img src="<?php echo getStoreLogo($output['store_info']['store_banner'],'store_avatar');?>" alt="<?php echo $output['store_info']['store_name']; ?>" title="<?php echo $output['store_info']['store_name']; ?>">
					<div class="dianpulogo">
						<img src="<?php echo getStoreLogo($output['store_info']['store_avatar'],'store_logo');?>" alt=""/>
					</div>
					
				<?php }else{ ?>
					
					<div class="ncs-default-banner"></div>
				
				<?php } ?>
				
				<div class="gz-sc">
					<a class="gz-sc" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepStore(<?php echo $output['store_info']['store_id']; ?>,this)<?php } else { ?> promptLogin(this)<?php } ?>">
						<span>关注</span>
					</a>
					<!-- <span>收藏</span> -->
				</div>
			
	
			
			</div>
			<div class="dianpu-xinxi" style="height: 100px;">
				<div class="dianpuname"><a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$output['store_info']['store_id']));?>" class="img"><?php echo $output['store_info']['store_name']; ?></a></div>
				<div class="dianpujianjie" style="margin-top: 20px;"><?php echo $output['store_info']['area_info']; ?></div>
			</div>
			
		<?php } ?>
		
	</div>
	
	
	
	<?php require_once($tpl_file); ?>
	
	<!-- S 提示 -->
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/layer.js" type="text/javascript" charset="utf-8"></script> 
	<!-- E 提示 -->

<script type="text/javascript">
	
	function promptLogin(obj) {
			
		login_dialog();
			
	}
		
	function meberKeepStore(id,obj) {

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
					//window.location.reload();
					//console.log(data);
					
				},
				
				error : function(e) {
					
					console.log(e);
					
				}
				
			});
			
	}
	
	$(function(){
		$('a[nctype="search_in_store"]').click(function(){
			if ($('#keyword').val() == '') {
				return false;
			}
			$('#search_act').val('show_store');
			$('<input type="hidden" value="<?php echo $output['store_info']['store_id'];?>" name="store_id" /> <input type="hidden" name="op" value="goods_all" />').appendTo("#formSearch");
			$('#formSearch').submit();
		});
		$('a[nctype="search_in_shop"]').click(function(){
			if ($('#keyword').val() == '') {
				return false;
			}
			$('#formSearch').submit();
		});
		$('#keyword').css("color","#999999");

		var storeTrends	= true;
		$('.favorites').mouseover(function(){
			var $this = $(this);
			if(storeTrends){
				$.getJSON('index.php?act=show_store&op=ajax_store_trend_count&store_id=<?php echo $output['store_info']['store_id'];?>', function(data){
					$this.find('li:eq(2)').find('a').html(data.count);
					storeTrends = false;
				});
			}
		});

		$('a[nctype="share_store"]').click(function(){
			<?php if ($_SESSION['is_login'] !== '1'){?>
			login_dialog();
			<?php } else {?>
			ajax_form('sharestore', '分享店铺', 'index.php?act=member_snsindex&op=sharestore_one&inajax=1&sid=<?php echo $output['store_info']['store_id'];?>');
			<?php }?>
		});
	});
</script>
	
</body>
</html>

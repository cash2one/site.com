			
			<?php if(!empty($output['goods_list']) && is_array($output['goods_list'])){?>
				
				<?php foreach($output['goods_list'] as $value){?>
				   
					<div id="shop_basket_<?php echo $value['goods_id'];?>" class="chanpin all-shadow">
					   <div id="shop_basket" class="chanpin-pic">
					   
							
							<img src="<?php echo thumb($value, 240);?>" title="<?php echo $value['goods_name'];?>" alt="" />
							
							
							<!-- <a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank" title="<?php echo $value['goods_name'];?>"> -->
							
								<div class="chanpin-tc">

									<span   class="cp-good" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $value['goods_id']; ?>, this)<?php } else { ?>promptLogin()<?php } ?>"></span>
									
									<?php if($_SESSION['is_login']){ ?>
										<span class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $value['goods_id']; ?>"}'></span>
									<?php } else { ?>
										<span class="cp-fx" onclick="promptLogin()"></span>
									<?php } ?>
									
									<?php if($value['goods_storage'] > 0 ) { ?>
										<!-- <span onclick="addcart_id(<?php echo $value['goods_id']; ?>, checkQuantity(), 'addcart_callback','shop_basket_<?php echo $value['goods_id'];?>')"></span> -->
									<?php } ?>
										<span   class="cp-gu"  onclick ="javascript:location.href = '<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>'" target="_blank" title="<?php echo $value['goods_name'];?>">
											
										</span>
									

								</div>
							
							<!-- </a> -->
							
					   </div>
					   <div class="chanpin-test">

							<span>
                                <a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_blank" title="<?php echo $value['goods_name']; ?>"><?php if(mb_strlen($value['goods_name'],'utf-8') > 8) {echo mb_substr($value['goods_name'], 0,8,'utf-8').'...';} else {echo $value['goods_name'];} ?></a>
							</span>
                            <span><?php echo $value['brand_name']; ?></span>
                            <span><i></i><?php echo $value['goods_like_count']; ?></span>
                            <span>
                                <em class="sale-price" title="<?php echo $lang['goods_class_index_store_goods_price'].$lang['nc_colon'].$lang['currency'].$value['goods_promotion_price'];?>"><?php echo ncPriceFormatForList($value['goods_promotion_price']);?></em></span>
                            </span>

					   </div>
					</div>
				   
				<?php }?>
			   
               <!-- <div class="chanpin all-shadow">
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
			
			<?php }else{?>
				
				<div id="no_results" class="no-results">
					<i></i><?php echo $lang['index_no_record'];?>
				</div>
			
			<?php } ?>
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/home_goods.css" rel="stylesheet" type="text/css">					
<!-- S 加入购物车弹出提示框 -->
<div class="ncs-cart-popup">
    <dl>
        <dt>成功添加到购物车<a title="关闭" onClick="$('.ncs-cart-popup').css({'display': 'none'});">X</a></dt>
        <dd>
			购物车共有 <strong id="bold_num"></strong>  种商品
			总金额为：<em id="bold_mly" class="saleP"></em>
		</dd>
        <dd class="btns">
            <a href="javascript:void(0);" class="ncs-btn-mini ncs-btn-green" onClick="location.href = '<?php echo SHOP_SITE_URL . DS ?>index.php?act=cart'">查看购物车</a> 
            <a href="javascript:void(0);" class="ncs-btn-mini" value="" onClick="$('.ncs-cart-popup').css({'display': 'none'});">继续购物</a>
        </dd>
    </dl>
</div>
<!-- E 加入购物车弹出提示框 -->
	
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/common.js" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery-ui/jquery.ui.js"></script>
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.validation.min.js"></script>
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.masonry.js"></script>
	
<!-- S 详情的 分享的JS -->
<script src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" type="text/javascript" charset="utf-8"></script> 
<!-- E 详情的 -->	

<!-- S 提示 -->
<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/layer.js" type="text/javascript" charset="utf-8"></script> 
<!-- E 提示 -->

<script src="<?php echo RESOURCE_SITE_URL; ?>/js/common.js" charset="utf-8"></script>
<script>

	function promptLogin() {
			
		login_dialog();
			
	}
	
	// 验证购买数量
    function checkQuantity() {
        
        return 1;
    
	}
    
	/* 加入购物车后的效果函数 */
    function addcart_callback(data,id) {
        console.log(data);
        $('#bold_num').html(data.num);
        $('#bold_mly').html(price_format(data.amount));
		$('#top_cart_num').text(data.num);
        $('.ncs-cart-popup').css('margin-left', $("#"+id).position().left - 19);
        $('.ncs-cart-popup').css('margin-top', $("#"+id).position().top + 12);

        $('.ncs-cart-popup').fadeIn('fast');
        
    }
	
	
	/* 商品点赞 */
	function meberLikeGoods(id, obj) {

			url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=meberLikeGoods';
			//console.log(url);
			$.ajax({
				
				type:'GET',
				url: url,
				data:{goods_id:id},
				dataType:'json',
				
				success : function(data) {
					
					layer.tips(data.info, obj, {
						tips: [1, '#0FA6D8'] //还可配置颜色
					});
					//$(obj).css('color', 'red');
					//console.log(obj);
					
				},
				
				error : function(e) {
					
					console.log(e);
					console.log('error');
					
				}
				
			});
			
	}
	/* function meberLikeGoods(id) {

        url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=meberLikeGoods';
        //console.log(url);
        $.ajax({

            type:'GET',
            url: url,
            data:{goods_id:id},
            dataType:'json',

            success : function(data) {

               // $(obj).css('color', 'red');
               //console.log(data);

            },

            error : function(e) {

                //console.log(e);
                console.log('error');

            }

        });

    } */
    
</script>
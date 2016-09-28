
<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/xiangqingye.css"/>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_goods.css" rel="stylesheet" type="text/css">
 
<style type="text/css">
.ncs-goods-picture .levelB, .ncs-goods-picture .levelC { cursor: url(<?php echo SHOP_TEMPLATES_URL;?>/images/shop/zoom.cur), pointer;}
.ncs-goods-picture .levelD { cursor: url(<?php echo SHOP_TEMPLATES_URL;?>/images/shop/hand.cur), move\9;}
</style>

					<!-- S umditor文本框 -->
					<link href="<?php echo SHOP_TEMPLATES_URL;?>/newjs/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
					<script type="text/javascript" charset="utf-8" src="<?php echo SHOP_TEMPLATES_URL;?>/newjs/umeditor.config.js"></script>
					<script type="text/javascript" charset="utf-8" src="<?php echo SHOP_TEMPLATES_URL;?>/newjs/umeditor.min.js"></script>
					<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/newjs/lang/zh-cn/zh-cn.js"></script>
					<style type="text/css">
						
						.btn {
							display: inline-block;
							*display: inline;
							padding: 4px 12px;
							margin-bottom: 0;
							*margin-left: .3em;
							font-size: 14px;
							line-height: 20px;
							color: #333333;
							text-align: center;
							text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
							vertical-align: middle;
							cursor: pointer;
							background-color: #f5f5f5;
							*background-color: #e6e6e6;
							background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
							background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
							background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
							background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
							background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
							background-repeat: repeat-x;
							border: 1px solid #cccccc;
							*border: 0;
							border-color: #e6e6e6 #e6e6e6 #bfbfbf;
							border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
							border-bottom-color: #b3b3b3;
							-webkit-border-radius: 4px;
							-moz-border-radius: 4px;
							border-radius: 4px;
							filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
							filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
							*zoom: 1;
							-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
							-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
							box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
						}

						.btn:hover,
						.btn:focus,
						.btn:active,
						.btn.active,
						.btn.disabled,
						.btn[disabled] {
							color: #333333;
							background-color: #e6e6e6;
							*background-color: #d9d9d9;
						}

						.btn:active,
						.btn.active {
							background-color: #cccccc \9;
						}

						.btn:first-child {
							*margin-left: 0;
						}

						.btn:hover,
						.btn:focus {
							color: #333333;
							text-decoration: none;
							background-position: 0 -15px;
							-webkit-transition: background-position 0.1s linear;
							-moz-transition: background-position 0.1s linear;
							-o-transition: background-position 0.1s linear;
							transition: background-position 0.1s linear;
						}

						.btn:focus {
							outline: thin dotted #333;
							outline: 5px auto -webkit-focus-ring-color;
							outline-offset: -2px;
						}

						.btn.active,
						.btn:active {
							background-image: none;
							outline: 0;
							-webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
							-moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
							box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
						}

						.btn.disabled,
						.btn[disabled] {
							cursor: default;
							background-image: none;
							opacity: 0.65;
							filter: alpha(opacity=65);
							-webkit-box-shadow: none;
							-moz-box-shadow: none;
							box-shadow: none;
						}
					</style>
					<!-- E umditor文本框 -->

<div class="main">
    <div class="fl">
        <div class="banner all-shadow">
            <?php $nimg = 1; $countimg = count($output['goods_image']); ?>
			<?php foreach($output['goods_image'] as $kimg => $vimg) { ?>
				<?php $goodsImgArray = json_decode($vimg, true); ?>
				
				<?php if($nimg == 1) { ?> 
				<div class="big-pic" id="big-pic-img">
					<img src="<?php echo $goodsImgArray['levelD']; ?>" alt=""/>
				</div>
				<div class="zhangshi-pic">
					<ul>
				<?php } ?>

					<li onclick="replacementImg(this)"><img src="<?php echo $goodsImgArray['levelC']; ?>" data-img="<?php echo $goodsImgArray['levelD']; ?>" alt=""/></li>
				
				<?php if($nimg == $countimg) { ?>
					</ul>
				</div>
				<?php } ?>
				
				<?php $nimg++; ?> 
			<?php } ?>
            <div style="clear:both"></div>
        </div>
        <div class="changpin-nav all-shadow">
            <a href="#xiangqing"><span>详情</span></a>
            <a href="#xiangqing"><span>参数</span></a>
            <a href="#pinlun"><span>评论</span></a>
        </div>
        <div class="chanping-pic all-shadow">
			<a name="xiangqing"></a>
			<!--S 满就送 -->
			<?php if($output['mansong_info']) { ?>
			<div class="nc-mansong">
				<div class="nc-mansong-ico"></div>
				<dl class="nc-mansong-content">
					<dt>
						<?php echo $output['mansong_info']['mansong_name'];?>
						<time>
							( <?php echo $lang['nc_promotion_time'];?>
							<?php echo $lang['nc_colon'];?>
							<?php echo date('Y-m-d',$output['mansong_info']['start_time']).'--'.date('Y-m-d',$output['mansong_info']['end_time']);?> )
						</time>
					</dt>
					<dd>
						<?php foreach($output['mansong_info']['rules'] as $rule) { ?>
						<span><?php echo $lang['nc_man'];?><em><?php echo ncPriceFormat($rule['price']);?></em><?php echo $lang['nc_yuan'];?>
						<?php if(!empty($rule['discount'])) { ?>
						， <?php echo $lang['nc_reduce'];?><i><?php echo ncPriceFormat($rule['discount']);?></i><?php echo $lang['nc_yuan'];?>
						<?php } ?>
						<?php if(!empty($rule['goods_id'])) { ?>
						， <?php echo $lang['nc_gift'];?> <a href="<?php echo $rule['goods_url'];?>" title="<?php echo $rule['mansong_goods_name'];?>" target="_blank"> <img src="<?php echo cthumb($rule['goods_image'], 60);?>" alt="<?php echo $rule['mansong_goods_name'];?>"> </a>&nbsp;。
						<?php } ?>
						</span>
						<?php } ?>
					</dd>
					<dd class="nc-mansong-remark"><?php echo $output['mansong_info']['remark'];?></dd>
				</dl>
			</div>
			<?php } ?>
			<!--E 满就送 -->
			
			<?php echo $output['goods']['goods_body']; ?>
            <!-- <img src="/newimg/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
            <img src="/newimg/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
            <img src="/newimg/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
            <img src="/newimg/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/> -->
        </div>
        <div class="pingjia all-shadow">
            <a name="pinlun"></a>
            <div class="gerenpingjia">
                <span class="touxiang">
                    <img src="<?php echo getStoreLogo($output['store_info']['store_avatar'],'store_logo');?>" alt=""/> 
                </span>
                <div class="wenben">

					<form id="member_evaluate_info" style="margin-top: 15px;">
					<!-- <textarea id="geval_content" name="geval_content" cols="115" rows="15" style="height:130px;margin-top: 15px;"></textarea> -->
					<script id="geval_content" name="geval_content" type="text/plain"></script>
					
					<input type="hidden" name="geval_orderno" value="0"/>
					<input type="hidden" name="geval_ordergoodsid" value="0"/>
					<input type="hidden" name="geval_goodsid" value="<?php echo $output['goods']['goods_id']; ?>"/>
					<input type="hidden" name="geval_goodsname" value="<?php echo $output['goods']['goods_name']; ?>"/>
					<input type="hidden" name="geval_goodsprice" value="<?php echo $output['goods']['goods_price']; ?>"/>
					<input type="hidden" name="geval_goodsimage" value="<?php echo $output['goods']['goods_image']; ?>"/>
					<input type="hidden" name="geval_scores" value="5" />
					<input type="hidden" name="geval_isanonymous" value="0"/>
					<input type="hidden" name="geval_storeid" value="<?php echo $output['store_data']['store_id']; ?>"/>
					<input type="hidden" name="geval_storename" value="<?php echo $output['store_data']['store_name']; ?>"/>
					<input type="hidden" name="geval_frommemberid" value="<?php echo $_SESSION['member_id']; ?>"/>
					<input type="hidden" name="geval_frommembername" value="<?php echo $_SESSION['member_name']; ?>"/>
					<input type="hidden" name="geval_state" value="0"/>
					<input type="hidden" name="up_geval_id" value="0"/>
					</form>
					
					<script type="text/javascript">
						var um = UM.getEditor('geval_content',{
							
							toolbar:  ['bold italic underline fullscreen', '| justifyleft justifycenter justifyright', 'emotion'],
							initialFrameWidth : 720,
							initialFrameHeight : 130
							
						});
					</script>
					
					<br/>
                   <!--  <p contenteditable="true"></p>-->
                    <div class="biaoqing">
                        <!--  <span></span>
                        <span></span>-->
                    </div>
					<div style="padding:19px 0 0 0;float:left">
						<span id="geval_content_error" style="color:red;margin-left: 430px;"></span>
					</div>
					
                    <input type="button" value="回复" onclick="memberEvaluateInfo('geval_content','member_evaluate_info','geval_content_error')" />

                </div>
                <div style="clear: both;"></div>
            </div>
			
			<?php foreach($output['all_evaluate_info'] as $kinfo => $vinfo) { ?>
				
				<div class="huifu">
					<span class="touxiang">
					   <img src="<?php echo getMemberAvatarForID($vinfo['geval_frommemberid']);?>" alt=""/>
					</span>
					<div class="huifu-right">
						<div class="name">
							<i ><?php echo $vinfo['geval_frommembername']; ?></i>
							<span>发表于<?php echo date('m月d日H:i', $vinfo['geval_addtime']); ?></span>
						</div>
						<div class="huifu-main"><?php echo htmlspecialchars_decode($vinfo['geval_content']); ?></div>
						<?php if(!empty($vinfo['child_evaluate_info'])) { ?> 
						<?php foreach($vinfo['child_evaluate_info'] as $kcei => $vcei){ ?>
						<div class="bierenhuifu">
							<span class="birentouxiang">
								<img src="<?php echo getMemberAvatarForID($vcei['geval_frommemberid']);?>" alt=""/>
							</span>
							<div class="bierenhuifuname" style="width: 89%;float: right;">
								<i><?php echo $vcei['geval_frommembername']; ?>:</i>
								<u style="float: right;word-break: break-all;width: 93%;"><?php echo htmlspecialchars_decode($vcei['geval_content']); ?></u>
							</div>
							<div style="clear: both;"></div>
						</div>
						<?php } ?>
						<?php }?>
						<div class="huiying">
							<i onclick="user_approve(<?php echo $vinfo['geval_id']; ?>, this)"><u></u>点赞</i>
							<i onclick="member_evaluate_parent(<?php echo $vinfo['geval_id']; ?>)">回复</i>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
				
			<?php } ?>
			
            <!-- <div class="huifu">
                <span class="touxiang">
                    <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                </span>
                <div class="huifu-right">
                    <div class="name"><i >asd阿萨德</i><span>发表于1月19日15:12</span></div>
                    <div class="huifu-main">阿士大夫撒旦发顺丰阿萨德阿斯顿撒大声的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的</div>
                    <div class="huiying"><i><u></u>点赞</i><i>回复</i></div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="huifu">
                <span class="touxiang">
                    <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                </span>
                <div class="huifu-right">
                    <div class="name"><i >asd阿萨德</i><span>发表于1月19日15:12</span></div>
                    <div class="huifu-main">阿士大夫撒旦发顺丰阿萨德阿斯顿撒大声的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的</div>
                    <div class="bierenhuifu">
                        <span class="birentouxiang">
                            <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                        </span>
                        <div class="bierenhuifuname"><i>asfasdz著作</i><u>:asdfasdasdfasdfasds</u></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="huiying"><i>点赞</i><i>回复</i></div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="huifu">
                <span class="touxiang">
                    <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                </span>
                <div class="huifu-right">
                    <div class="name"><i >asd阿萨德</i><span>发表于1月19日15:12</span></div>
                    <div class="huifu-main">阿士大夫撒旦发顺丰阿萨德阿斯顿撒大声的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的是的</div>
                    <div class="bierenhuifu">
                        <span class="birentouxiang">
                            <img src="img/u=2559190858,4096339284&fm=21&gp=0.jpg" alt=""/>
                        </span>
                        <div class="bierenhuifuname"><i>asfasdz著作</i><u>:asdfasdasdfasdfasds</u></div>
                        <div style="clear: both;"></div>
                    </div>
                    <div class="huiying"><i>点赞</i><i>回复</i></div>
                    <div class="huifu-geren">
                        <p contenteditable="true"></p>
                        <input type="submit" value="回复"/>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div> -->
        </div>
    </div>
    <div class="fr">
        <div class="zj--yjf-mian all-shadow">
			<a href="<?php echo C('shop_site_url'); ?>/index.php?act=show_store&op=index&store_id=<?php echo $output['store_data']['store_id']; ?>">
			
            <div class="zj--yjf-bg">
                <img src="<?php echo getStoreLogo($output['store_info']['store_banner'],'store_avatar');?>" alt=""/>
                <div class="zj-yjf-head">
                    <img src="<?php echo getStoreLogo($output['store_info']['store_avatar'],'store_logo');?>" alt=""/>
                </div>
            </div>
            
			</a>
			
			<div class="add">
                <span>
					<a href="<?php echo C('shop_site_url'); ?>/index.php?act=show_store&op=index&store_id=<?php echo $output['store_data']['store_id']; ?>"><?php echo $output['store_data']['store_name']; ?></a>
				</span>
                <!-- <span>121,345  fans</span> -->
            </div>
        </div>
        <div class="dianpu-mian">
            <h4><?php echo $output['goods']['goods_name']; ?></h4>
            <p><?php echo str_replace("\n", "<br>", $output['goods']['goods_jingle']);?></p>
            
			<!-- S 促销 -->
			<?php if (isset($output['goods']['promotion_type']) || $output['goods']['have_gift'] == 'gift') {?>
			<div class="youhui">
                <span>促销信息</span>
				
                <!-- S 限时折扣 -->
				<?php if ($output['goods']['promotion_type'] == 'xianshi') {?>
				
					<?php echo '直降：'.$lang['currency'].$output['goods']['down_price'];?>
					<?php if($output['goods']['lower_limit']) {?>
						<em><?php echo sprintf('最低%s件起',$output['goods']['lower_limit']);?></em>
					<?php } ?>
					<span><?php echo $output['goods']['explain'];?></span>
				
				<?php }?>
				<!-- E 限时折扣  -->
				
				<!-- S 抢购-->
				<?php if ($output['goods']['promotion_type'] == 'groupbuy') { ?>
				
					<?php if ($output['goods']['upper_limit']) { ?>
						<em><?php echo sprintf('最多限购%s件',$output['goods']['upper_limit']);?></em>
					<?php } ?>
					<span><?php echo $output['goods']['remark'];?></span>
				
				<?php } ?>
				<!-- E 抢购 -->
				
				<!-- S 赠品 -->
				<?php if ($output['goods']['have_gift'] == 'gift') {?>
					<?php echo '赠品'?> <span>赠下方的热销商品，赠完即止</span>
				<?php }?>
				<!-- E 赠品 -->
				
            </div>
			<?php } ?>
			<!-- E 促销 -->
			
            <div class="how-much">
                
				<?php if (isset($output['goods']['goods_promotion_price']) && !empty($output['goods']['goods_promotion_price'])) {?>
                
					<span>RMB<u><?php echo $lang['currency'].$output['goods']['goods_promotion_price'];?></u></span>

				<?php } else {?>
                
					<span>RMB<u><?php echo $lang['currency'].$output['goods']['goods_price'];?></u></span>
				
				<?php }?>

				<!-- S 物流运费  预售商品不显示物流 -->
				<?php if ($output['goods']['is_virtual'] == 0) { ?>
					
					<?php if ($output['goods']['goods_transfee_charge'] == 1){?>
						<?php echo $lang['goods_index_freight'].$lang['nc_colon'];?>
					<?php }else{ ?>
					<!-- 如果买家承担运费 -->
					<!-- 如果使用了运费模板 -->
						<?php if ($output['goods']['transport_id'] != '0'){?>
							<?php echo $lang['goods_index_trans_to'];?>
							<a href="javascript:void(0)" id="ncrecive">
							<?php echo $lang['goods_index_trans_country'];?>
							</a>
							<?php echo $lang['nc_colon'];?>
							<div class="ncs-freight-box" id="transport_pannel">
							<?php if (is_array($output['area_list'])){?>
								<?php foreach($output['area_list'] as $k=>$v){?>
									<a href="javascript:void(0)" nctype="<?php echo $k;?>">
										<?php echo $v;?>
									</a>
								<?php }?>
							<?php } ?>
							</div>
						<?php } else { ?>
							<?php echo $lang['goods_index_trans_zcountry'];?><?php echo $lang['nc_colon'];?>
						<?php } ?>
					<?php } ?>
					
					<?php if($output['goods']['promotion_type'] == 'groupbuy') { ?>
						<span><?php echo $lang['goods_index_groupbuy_no_shipping_fee'];?></span>
					<?php } else { ?>
						<?php if ($output['goods']['goods_freight'] == 0){?>
							<span id="nc_kd"><?php echo $lang['goods_index_trans_for_seller'];?></span>
						<?php }else{?>
							<!-- 如果买家承担运费 -->
							<span id="nc_kd">运费<?php echo $lang['nc_colon'];?><em><?php echo $output['goods']['goods_freight'];?></em><?php echo $lang['goods_index_yuan'];?></span>
						<?php }?>
					<?php }?>
					
					<!-- <span>运&nbsp;&nbsp;&nbsp;&nbsp;费<u>199.00</u></span> -->
				
				<?php } ?>
				<!-- E 物流运费 --->
		
            </div>
			
			<!-- S 赠品 -->
			<?php if ($output['goods']['have_gift'] == 'gift') { ?>
				<dl>
					<dt>赠&#12288;&#12288;品：</dt>
					<dd class="goods-gift" id="ncsGoodsGift">
						<?php if (!empty($output['gift_array'])) {?>
							<ul>
							  <?php foreach ($output['gift_array'] as $val){?>
							  <li>
								<div class="goods-gift-thumb"><span><img src="<?php echo cthumb($val['gift_goodsimage'], '60', $output['goods']['store_id']);?>"></span></div>
								<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $val['gift_goodsid']));?>" class="goods-gift-name" target="_blank"><?php echo $val['gift_goodsname']?></a><em>x<?php echo $val['gift_amount'];?></em> </li>
							  <?php }?>
							</ul>
						<?php }?>
					</dd>
				</dl>
			<?php } ?>
			<!-- S 赠品 -->
			
            <?php if($output['goods']['goods_state'] != 10 && $output['goods']['goods_verify'] == 1){ ?>
				
				 <!-- S 商品规格值-->
				<?php if(is_array($output['goods']['spec_name'])) { ?>
				<?php foreach ($output['goods']['spec_name'] as $key => $val) { ?>
	
					<div class="ncs-key" nctype="nc-spec">

					<u style="color: #999;float: left;margin-right: 14px;font-size: 14px;"><?php echo $val;?><?php echo $lang['nc_colon'];?></u>
					
					<?php if (is_array($output['goods']['spec_value'][$key]) and !empty($output['goods']['spec_value'][$key])) {?>
					
						<ul nctyle="ul_sign">
							
							<?php foreach($output['goods']['spec_value'][$key] as $k => $v) {?>
							  <?php if( $key == 1 ){?>
								<!-- 图片类型规格-->
								<li class="sp-img"><a href="javascript:void(0);" class="<?php if (isset($output['goods']['goods_spec'][$k])) {echo 'hovered';}?>" data-param="{valid:<?php echo $k;?>}" title="<?php echo $v;?>"><img src="<?php echo $output['spec_image'][$k];?>"/><i></i></a></li>
							  <?php }else{?>
								<!-- 文字类型规格-->
								<li class="sp-img" style="margin-bottom:5px"><a href="javascript:void(0)" class="<?php if (isset($output['goods']['goods_spec'][$k])) { echo 'hovered';} ?>" data-param="{valid:<?php echo $k;?>}"><?php echo $v;?><i></i></a></li>
							  <?php }?>
							<?php }?>

						</ul>
					
					<?php }?>
					
				</div>
				
				<?php }?>
				<?php } ?>
				<!-- <div class="yanse chima">
					<u>选尺码</u>
					<ul>
						<li>标准</li>
						<li>S</li>
						<li>M</li>
						<li>L</li>
					</ul>
				</div> -->
				<!-- <div class="yanse chima">
					<u>选尺码</u>
					<ul>
						<li>标准</li>
						<li>S</li>
						<li>M</li>
						<li>L</li>
					</ul>
				</div> -->
				<div class="yanse suliang" >
					<u>数量<?php echo $lang['nc_colon'];?></u>
					<input type="number" id="quantity" value="1"  min="1" max="<?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) { ?><?php echo ($output['goods']['promotion_type'] == 'groupbuy' && $output['goods']['upper_limit'] > 0 && $output['goods']['upper_limit'] < $output['goods']['virtual_limit']) ? $output['goods']['upper_limit'] : $output['goods']['virtual_limit'];?><?php } else { ?><?php echo $output['goods']['goods_storage']; ?><?php } ?>" <?php if ($output['goods']['is_fcode'] == 1) { ?> readonly <?php } ?>/>
					<?php if ($output['goods']['is_fcode'] == 1) {?>
						<span style="margin-left: 5px;">（每个F码优先购买一件商品）</span>(<?php echo $lang['goods_index_stock'];?><em nctype="goods_stock"><?php echo $output['goods']['goods_storage']; ?></em><?php echo $lang['nc_jian'];?>)
					<?php } else { ?>
						<span>
							(<?php echo $lang['goods_index_stock'];?>
							<em nctype="goods_stock">
								<?php echo $output['goods']['goods_storage']; ?>
							</em>
							<?php echo $lang['nc_jian'];?>
							<!-- 虚拟商品限购数 -->
							<?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) { ?>，
								每人次限购
								<strong>
									<!-- 虚拟抢购 设置了虚拟抢购限购数 该数小于原商品限购数 -->
									<?php echo ($output['goods']['promotion_type'] == 'groupbuy' && $output['goods']['upper_limit'] > 0 && $output['goods']['upper_limit'] < $output['goods']['virtual_limit']) ? $output['goods']['upper_limit'] : $output['goods']['virtual_limit'];?>
								</strong>件
							<?php } ?>)
						</span>
					<?php } ?>
				</div>
				
				<?php if (!empty($output['goods']['goods_spec'])) {?>
			
					<span class="yes">
						<?php echo $lang['goods_index_you_choose'];?> 
						<strong><?php echo implode($lang['nc_comma'], $output['goods']['goods_spec']);?></strong>
					</span>
				
				<?php } ?>
				<?php if ($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0) {?>
					
					<span class="no">
						<i class="icon-exclamation-sign"></i>&nbsp;
						<?php echo $lang['goods_index_understock_prompt'];?>
					</span>
				
				<?php } else {?>
				
					<!-- 立即购买-->
					<a href="javascript:void(0);" nctype="buynow_submit" class="buynow <?php if ($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0 || ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_indate'] < TIMESTAMP)) {?>no-buynow<?php }?>" title="<?php echo $output['goods']['buynow_text'];?>">
					<div class="buy-noe">
						<i></i><?php echo $output['goods']['buynow_text'];?>
					</div>
					</a>
					
					<?php if ($output['goods']['cart'] == true) {?>
						<!-- 加入购物车-->
						<a id="shop_basket" href="javascript:void(0);" nctype="addcart_submit" class="addcart <?php if ($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0) {?>no-addcart<?php }?>" title="<?php echo $lang['goods_index_add_to_cart'];?>">
						<div class="fangru-gwc">
							<i></i><?php echo $lang['goods_index_add_to_cart'];?>
						</div>
						</a>
					
					<?php } ?>
					
				<?php }?>
				
				<!-- S到货通知 -->
				<?php if ($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0) {?>
					<a href="javascript:void(0);" nctype="arrival_notice" class="arrival" title="到货通知">（<i class="icon-bullhorn"></i>到货通知）</a>
				<?php }?>
				<!-- E到货通知 -->
				
				<!-- S 加入购物车弹出提示框 -->
				  <div class="ncs-cart-popup">
					<dl>
					  <dt><?php echo $lang['goods_index_cart_success'];?><a title="<?php echo $lang['goods_index_close'];?>" onClick="$('.ncs-cart-popup').css({'display':'none'});">X</a></dt>
					  <dd>
						<?php echo $lang['goods_index_cart_have'];?> <strong id="bold_num"></strong> <?php echo $lang['goods_index_number_of_goods'];?>
						<?php echo $lang['goods_index_total_price']; ?><?php echo $lang['nc_colon']; ?><em id="bold_mly" class="saleP"></em>
					  </dd>
					  <dd class="btns"><a href="javascript:void(0);" class="ncs-btn-mini ncs-btn-green" onClick="location.href='<?php echo SHOP_SITE_URL.DS?>index.php?act=cart'"><?php echo $lang['goods_index_view_cart'];?></a> <a href="javascript:void(0);" class="ncs-btn-mini" value="" onClick="$('.ncs-cart-popup').css({'display':'none'});"><?php echo $lang['goods_index_continue_shopping'];?></a></dd>
					</dl>
				  </div>
				<!-- E 加入购物车弹出提示框 -->
				
				<!-- <div class="buy-noe"><i></i>立即购买</div> -->
			
			<?php }else{?>
			  
				<div class="ncs-saleout">
					<dl>
						<dt><i class="icon-info-sign"></i><?php echo $lang['goods_index_is_no_show'];?></dt>
						<dd><?php echo $lang['goods_index_is_no_show_message_one'];?></dd>
						<dd><?php echo $lang['goods_index_is_no_show_message_two_1'];?>&nbsp;<a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$output['goods']['store_id']), $output['store_info']['store_domain']);?>" class="ncs-btn-mini"><?php echo $lang['goods_index_is_no_show_message_two_2'];?></a>&nbsp;<?php echo $lang['goods_index_is_no_show_message_two_3'];?> </dd>
					</dl>
				</div>
			
			<?php }?>
			
            <div class="fx-sc-jr">
              <ul >

					<li class="weibo"><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $output['goods']['goods_id'];?>"}'><?php echo $lang['goods_index_snsshare_goods'];?><i></i></a></li>
                    <li class="shoucang">
						<?php if($_SESSION['is_login']){ ?>
							<a href="javascript:collect_goods('<?php echo $output['goods']['goods_id']; ?>','count','goods_collect');" class="favorite"><?php echo $lang['goods_index_favorite_goods'];?><i></i></a>
						<?php } else { ?>
							<a href="javascript:login_dialog()" class="favorite"><?php echo $lang['goods_index_favorite_goods'];?><i></i></a>
						<?php } ?>
					</li>
                    <li class="showAddList">
                        <a href="javascript:void(0);" class="compare" <?php if(!$_SESSION['is_login']){ ?>onclick="login_dialog()"<?php } ?>>加入清单<i></i></a>
                        <div class="addListDiv">

                            <?php if($_SESSION['is_login']){ ?>

                                <div class="new-list">

                                    <?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
                                        <span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $output['goods']['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
                                    <?php } ?>

                                </div>
                                <div class="new-list-two">
                                    <span>创建新列表</span>
                                    <span id="<?php echo $output['goods']['goods_id'].'_createlist'; ?>">
                                        <input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
                                        <a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $output['goods']['goods_id'].'_createlist'; ?>', <?php echo $output['goods']['goods_id']; ?>,this)" style="font-size: 10px;">创建</a>
                                    </span>
                                </div>

                            <?php } ?>

                        </div>
                    </li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>
<style>
    
    .addListDiv{
        position: absolute;
        width: 150px;
        margin-left: -6px;
        margin-top: 4px;
        border-radius: 4px;
        background-color: white;
        border: 1px solid #999999;
        display: none;
        text-align: left;
    }
    
    .new-list-two >span {
        height: 36px;
        line-height: 36px;
        display: block;
        color: #14ceb6;
        padding: 0 8px;
        
    }
    
    .new-list >span:hover{
        background: #eeeeee;
        cursor: pointer;
    }
    
    .new-list-two >span input {
        width: 100px;
    }
    
    .new-list >span {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 0 8px;
        height: 28px;
        line-height: 28px;
        font-size: 12px;
        color: #333333;
    }
    
    <?php if($_SESSION['is_login']) {?>
        .showAddList:hover .addListDiv {

            display: block;
        }
    <?php } ?>
    
</style>

<div id="up_geval_id_model" class="gerenpingjia modelpostion">
    <div class="modelhead">
        <a href="javascript:void(0);" style="float:right; margin: 20px" onclick="closeModel()">Χ</a>
    </div>
    <div>
        <span class="touxiang" style="margin-left: 10px;">
            <img src="<?php echo getMemberAvatarForID($_SESSION['member_id']);?>" alt=""/> 
        </span>
        <div class="wenben">
            <form id="member_evaluate_info_2" style="margin-top: 15px;">

                <script id="geval_content_2" name="geval_content" type="text/plain"></script>

                <input type="hidden" name="geval_orderno" value="0"/>
                <input type="hidden" name="geval_ordergoodsid" value="0"/>
                <input type="hidden" name="geval_goodsid" value="<?php echo $output['goods']['goods_id']; ?>"/>
                <input type="hidden" name="geval_goodsname" value="<?php echo $output['goods']['goods_name']; ?>"/>
                <input type="hidden" name="geval_goodsprice" value="<?php echo $output['goods']['goods_price']; ?>"/>
                <input type="hidden" name="geval_goodsimage" value="<?php echo $output['goods']['goods_image']; ?>"/>
                <input type="hidden" name="geval_scores" value="5" />
                <input type="hidden" name="geval_isanonymous" value="0"/>
                <input type="hidden" name="geval_storeid" value="<?php echo $output['store_data']['store_id']; ?>"/>
                <input type="hidden" name="geval_storename" value="<?php echo $output['store_data']['store_name']; ?>"/>
                <input type="hidden" name="geval_frommemberid" value="<?php echo $_SESSION['member_id']; ?>"/>
                <input type="hidden" name="geval_frommembername" value="<?php echo $_SESSION['member_name']; ?>"/>
                <input type="hidden" name="geval_state" value="0"/>
                <input type="hidden" id="up_geval_id" name="up_geval_id" value="0"/>

            </form>

            <script type="text/javascript">
                var um = UM.getEditor('geval_content_2',{

                    toolbar:  ['bold italic underline fullscreen', '| justifyleft justifycenter justifyright', 'emotion'],
                    initialFrameWidth : 720,
                    initialFrameHeight : 130

                });
            </script>

            <br/>

            <div class="biaoqing">
                <!--  <span></span>
                <span></span>-->
            </div>
            <div style="padding:19px 0 0 0;float:left">
                    <span id="geval_content_error_2" style="color:red;margin-left: 430px;"></span>
            </div>

            <input type="button" value="回复" onclick="memberEvaluateInfo('geval_content_2','member_evaluate_info_2','geval_content_error_2')" />

        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<style>
    
    .modelpostion {
        
        position: fixed;
        background-color: rgba(178, 235, 255, 0.86);
        left: 20%;
        top: 25%;
        display: none;
        z-index: 999;
        
    }
    
     .modelhead {
        
        background-color: rgba(255, 255, 255, 0.68);
        width: 100%;
        float: left;
       
    }
    
</style>


<form id="buynow_form" method="post" action="<?php echo SHOP_SITE_URL;?>/index.php">
  <input id="act" name="act" type="hidden" value="buy" />
  <input id="op" name="op" type="hidden" value="buy_step1" />
  <input id="cart_id" name="cart_id[]" type="hidden"/>
</form>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.charCount.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/common.js" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.ajaxContent.pack.js" type="text/javascript"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.F_slider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.raty/jquery.raty.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/custom.min.js" charset="utf-8"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/styles/nyroModal.css" rel="stylesheet" type="text/css" id="cssfile2" />

<!-- S 提示 -->
<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/layer.js" type="text/javascript" charset="utf-8"></script> 
<!-- E 提示 -->

<script>
    
    /**
     * @将商品加入收藏列表
     * add by lizh 16:49 2016/7/2 
     */
    function selectKeepGoodsClass(id,goodsId,obj) {

        url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=selectKeepGoodsClass';
        data = {favorites_class_id: id, goods_id: goodsId};
        getAjax(url, data, null,obj);

    }
    
    /**
     * @调用ajax
     * add by lizh 16:49 2016/7/2 
     */
    function getAjax(url, data, getfunction,obj) {

        $.ajax({

            type:'GET',
            url: url,
            data:data,
            dataType:'json',

            success : function(data) {

                if(data.status == 0) {

                    layer.tips(data.info, obj, {
                            tips: [1, '#0FA6D8'] //还可配置颜色
                    });

                } else {

                    layer.tips(data.info, obj, {
                            tips: [1, '#0FA6D8'] //还可配置颜色
                    });

                }


            },

            error : function(e) {

                console.log('error');

            }

        });

    }
    
    /**
     * @创建收藏列表
     * add by lizh 16:53 2016/7/2
     */
    function createKeepGoodsClassList(id, one_goods_list,obj) {
			
        url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=createKeepGoodsClassList';

        $.ajax({

            type:'GET',
            url: url,
            data:{favorites_class_name:$("#" + id + ">input").val(),div_id:id, goods_id:one_goods_list},
            dataType:'json',

            success : function(data) {

                    if(data.status == 0) {

                            layer.tips(data.info, obj, {
                                    tips: [1, '#0FA6D8'] //还可配置颜色
                            });

                    } else {

                            layer.tips('创建成功', obj, {
                                    tips: [1, '#0FA6D8'] //还可配置颜色
                            });
                            //console.log(getfunction);
                            loadKeeppGoodsClassData(data);

                    }


            },

            error : function(e) {

                    console.log('error');

            }

        });

    }
    
    /**
     * @加载收藏列表数据
     * add by lizh 16:56 2016/7/2
     */
    function loadKeeppGoodsClassData(data) {
			
        var id = data.div_id;
        var info = data.info;
        var img_src = <?php echo "'". SHOP_TEMPLATES_URL ."'"; ?> + '/newimg/yixuanzhong.png';
        var str = "";

        for(i=0; i<info.length; i++) {

                str += '<span onclick="selectKeepGoodsClass(' + info[i]['favorites_class_id'] + ',' + data.goods_id +',this)"><img src="' +img_src+'" alt=""/>'+info[i]['favorites_class_name']+'</span>';

        }

        $(".new-list").html("");
        $(".new-list").html(str);

    }

</script>

<script>

/**
 * ajax评论
 * update by lizh 16:32 2016/6/30 
 */
function memberEvaluateInfo(ue_id,form_id,error_id) {
	
	var geval_content = UM.getEditor(ue_id).getContent(); //$('#geval_content').val();
	//console.log(geval_content);
	var is_login = <?php echo '"'.$_SESSION['is_login'].'"'; ?>;
	//console.log(is_login);
	if(is_login) {
		
		if(geval_content == "" || geval_content == null) {
			
			$('#'+error_id).text('*评论内容不能为空');
			
		} else {
			
			var url = <?php echo "'".C('shop_site_url')."'"; ?> + "/index.php?act=goods&op=memberEvaluateInfo";
	
			$.ajax({
				
				type:"POST",
				url:url,
				data: $("#"+form_id).serialize(),
				dataType:"json",
				
				success: function(data) {
					
					$('#up_geval_id').val(0);
					window.location.reload();
					console.log(data);
					
				},
				
				error : function(e) {
					
					console.log("e");
					
				}
				
			});
			
		}
		
		
	} else {
		
		login_dialog();
		
	}
	
}

	/**
	 * @ajax用户点赞
	 * add by lizh 17:48 2016/6/28
	 */
	function user_approve(id, obj) {

		var is_login = <?php echo '"'.$_SESSION['is_login'].'"'; ?>;
		//console.log(is_login);
		if(is_login) {

			var url = <?php echo "'".C('shop_site_url')."'"; ?> + "/index.php?act=goods&op=user_approve";
		
			$.ajax({
					
				type:"GET",
				url:url,
				data: {'geval_id':id},
				dataType:"json",
					
				success: function(data) {
					
					layer.tips('点赞成功', obj, {
                        tips: [1, '#0FA6D8'] //还可配置颜色
                    });
					console.log(data);
						
				},
					
				error : function(e) {
						
					console.log("e");
						
				}
					
			});
			
		} else {
			
			login_dialog();
			
		}
		
	}
	
	/**
     * @用户回复
     * add by lizh 2:51 2016/6/30 
	 */
	function member_evaluate_parent(id) {
        
        var is_login = <?php echo '"'.$_SESSION['is_login'].'"'; ?>;
            
        if(is_login) {
            $('#up_geval_id').val(id);
            $('#up_geval_id_model').show();
        } else {
            login_dialog();
        }
        
    }
    
	/**
     * @关闭弹窗
     * add by lizh 16:31 2016/6/30 
	 */
    function closeModel() {
        
        $('#up_geval_id').val(0);
        $('#up_geval_id_model').hide();
    }


</script>

<script type="text/javascript">

//js改变主图
function replacementImg(obj) {
	
	var big_img = $(obj).find('img').attr('data-img');
	var str = '<img src="' + big_img + '" alt=""/>'
	$('#big-pic-img').html(str);
	
}

    //收藏分享处下拉操作
    jQuery.divselect = function(divselectid,inputselectid) {
      var inputselect = $(inputselectid);
      $(divselectid).mouseover(function(){
          var ul = $(divselectid+" ul");
          ul.slideDown("fast");
          if(ul.css("display")=="none"){
              ul.slideDown("fast");
          }
      });
      $(divselectid).live('mouseleave',function(){
          $(divselectid+" ul").hide();
      });
    };
$(function(){
	//赠品处滚条
	$('#ncsGoodsGift').perfectScrollbar();
    <?php if ($output['goods']['goods_state'] == 1 && $output['goods']['goods_storage'] > 0 ) {?>
    // 加入购物车
    $('a[nctype="addcart_submit"]').click(function(){
        addcart(<?php echo $output['goods']['goods_id'];?>, checkQuantity(),'addcart_callback');
    });
        <?php if (!($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_indate'] < TIMESTAMP)) {?>
        // 立即购买
        $('a[nctype="buynow_submit"]').click(function(){
			
			console.log('点击购买');
            buynow(<?php echo $output['goods']['goods_id']?>,checkQuantity());
        });
        <?php }?>
    <?php }?>
    // 到货通知
    <?php if ($output['goods']['goods_storage'] == 0 || $output['goods']['goods_state'] == 0) {?>
    $('a[nctype="arrival_notice"]').click(function(){
        <?php if ($_SESSION['is_login'] !== '1'){?>
        login_dialog();
        <?php }else{?>
        ajax_form('arrival_notice', '到货通知','<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $output['goods']['goods_id']));?>', 350);
        <?php }?>
    });
    <?php }?>
    <?php if (($output['goods']['goods_state'] == 0 || $output['goods']['goods_storage'] <= 0) && $output['goods']['is_appoint'] == 1) {?>
    $('a[nctype="appoint_submit"]').click(function(){
        <?php if ($_SESSION['is_login'] !== '1'){?>
        login_dialog();
        <?php }else{?>
        ajax_form('arrival_notice', '立即预约', '<?php echo urlShop('goods', 'arrival_notice', array('goods_id' => $output['goods']['goods_id'], 'type' => 2));?>', 350);
        <?php }?>
    });
    <?php }?>
    //浮动导航  waypoints.js
    $('#main-nav').waypoint(function(event, direction) {
        $(this).parent().parent().parent().toggleClass('sticky', direction === "down");
        event.stopPropagation();
    });

    // 分享收藏下拉操作
    $.divselect("#handle-l");
    $.divselect("#handle-r");

    // 规格选择
    $('div[nctype="nc-spec"]').find('a').each(function(){
        $(this).click(function(){
            if ($(this).hasClass('hovered')) {
                return false;
            }
            $(this).parents('ul:first').find('a').removeClass('hovered');
            $(this).addClass('hovered');
            checkSpec();
        });
    });

});

function checkSpec() {
    var spec_param = <?php echo $output['spec_list'];?>;
    var spec = new Array();
    $('ul[nctyle="ul_sign"]').find('.hovered').each(function(){
        var data_str = ''; eval('data_str =' + $(this).attr('data-param'));
        spec.push(data_str.valid);
    });
    spec1 = spec.sort(function(a,b){
        return a-b;
    });
    var spec_sign = spec1.join('|');
    $.each(spec_param, function(i, n){
        if (n.sign == spec_sign) {
            window.location.href = n.url;
        }
    });
}

// 验证购买数量
function checkQuantity(){
    var quantity = parseInt($("#quantity").val());
    if (quantity < 1) {
        alert("<?php echo $lang['goods_index_pleaseaddnum'];?>");
        $("#quantity").val('1');
        return false;
    }
    max = parseInt($('[nctype="goods_stock"]').text());
    <?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) {?>
    max = <?php echo $output['goods']['virtual_limit'];?>;
    if(quantity > max){
        alert('最多限购'+max+'件');
        return false;
    }
    <?php } ?>
    <?php if (!empty($output['goods']['upper_limit'])) {?>
    max = <?php echo $output['goods']['upper_limit'];?>;
    if(quantity > max){
        alert('最多限购'+max+'件');
        return false;
    }
    <?php } ?>
    if(quantity > max){
        alert("<?php echo $lang['goods_index_add_too_much'];?>");
        return false;
    }
    return quantity;
}

// 立即购买js
function buynow(goods_id,quantity){
	
	console.log(goods_id);
	console.log(quantity);
<?php if ($_SESSION['is_login'] !== '1'){?>
	login_dialog();
<?php }else{?>
    if (!quantity) {
        return;
    }
    <?php if ($_SESSION['store_id'] == $output['goods']['store_id']) { ?>
    alert('不能购买自己店铺的商品');return;
    <?php } ?>
    $("#cart_id").val(goods_id+'|'+quantity);
    $("#buynow_form").submit();
<?php }?>
}

$(function(){
    //选择地区查看运费
    $('#transport_pannel>a').click(function(){
    	var id = $(this).attr('nctype');
    	if (id=='undefined') return false;
    	var _self = this,tpl_id = '<?php echo $output['goods']['transport_id'];?>';
	    var url = 'index.php?act=goods&op=calc&rand='+Math.random();
	    $('#transport_price').css('display','none');
	    $('#loading_price').css('display','');
	    $.getJSON(url, {'id':id,'tid':tpl_id}, function(data){
	    	if (data == null) return false;
	        if(data != 'undefined') {$('#nc_kd').html('运费<?php echo $lang['nc_colon'];?><em>' + data + '</em><?php echo $lang['goods_index_yuan'];?>');}else{'<?php echo $lang['goods_index_trans_for_seller'];?>';}
	        $('#transport_price').css('display','');
	    	$('#loading_price').css('display','none');
	        $('#ncrecive').html($(_self).html());
	    });
    });
    $("#nc-bundling").load('index.php?act=goods&op=get_bundling&goods_id=<?php echo $output['goods']['goods_id'];?>', function(){
        if($(this).html() != '') {
            $(this).show();
        }
    });
    $("#salelog_demo").load('index.php?act=goods&op=salelog&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>&vr=<?php echo $output['goods']['is_virtual'];?>', function(){
        // Membership card
        $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
    });
	$("#consulting_demo").load('index.php?act=goods&op=consulting&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>', function(){
		// Membership card
		$(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
	});

/** goods.php **/
	// 商品内容部分折叠收起侧边栏控制
	$('#fold').click(function(){
  		$('.ncs-goods-layout').toggleClass('expanded');
	});
	// 商品内容介绍Tab样式切换控制
	$('#categorymenu').find("li").click(function(){
		$('#categorymenu').find("li").removeClass('current');
		$(this).addClass('current');
	});
	// 商品详情默认情况下显示全部
	$('#tabGoodsIntro').click(function(){
		$('.bd').css('display','');
		$('.hd').css('display','');
	});
	// 点击评价隐藏其他以及其标题栏
	$('#tabGoodsRate').click(function(){
		$('.bd').css('display','none');
		$('#ncGoodsRate').css('display','');
		$('.hd').css('display','none');
	});
	// 点击成交隐藏其他以及其标题
	$('#tabGoodsTraded').click(function(){
		$('.bd').css('display','none');
		$('#ncGoodsTraded').css('display','');
		$('.hd').css('display','none');
	});
	// 点击咨询隐藏其他以及其标题
	$('#tabGuestbook').click(function(){
		$('.bd').css('display','none');
		$('#ncGuestbook').css('display','');
		$('.hd').css('display','none');
	});
	//商品排行Tab切换
	$(".ncs-top-tab > li > a").mouseover(function(e) {
		if (e.target == this) {
			var tabs = $(this).parent().parent().children("li");
			var panels = $(this).parent().parent().parent().children(".ncs-top-panel");
			var index = $.inArray(this, $(this).parent().parent().find("a"));
			if (panels.eq(index)[0]) {
				tabs.removeClass("current ").eq(index).addClass("current ");
				panels.addClass("hide").eq(index).removeClass("hide");
			}
		}
	});
	//信用评价动态评分打分人次Tab切换
	$(".ncs-rate-tab > li > a").mouseover(function(e) {
		if (e.target == this) {
			var tabs = $(this).parent().parent().children("li");
			var panels = $(this).parent().parent().parent().children(".ncs-rate-panel");
			var index = $.inArray(this, $(this).parent().parent().find("a"));
			if (panels.eq(index)[0]) {
				tabs.removeClass("current ").eq(index).addClass("current ");
				panels.addClass("hide").eq(index).removeClass("hide");
			}
		}
	});

//触及显示缩略图
	$('.goods-pic > .thumb').hover(
		function(){
			$(this).next().css('display','block');
		},
		function(){
			$(this).next().css('display','none');
		}
	);

	/* 商品购买数量增减js */
	// 增加
	$('.increase').click(function(){
		num = parseInt($('#quantity').val());
	    <?php if ($output['goods']['is_virtual'] == 1 && $output['goods']['virtual_limit'] > 0) {?>
	    max = <?php echo $output['goods']['virtual_limit'];?>;
	    if(num >= max){
	        alert('最多限购'+max+'件');
	        return false;
	    }
	    <?php } ?>
	    <?php if (!empty($output['goods']['upper_limit'])) {?>
	    max = <?php echo $output['goods']['upper_limit'];?>;
	    if(num >= max){
	        alert('最多限购'+max+'件');
	        return false;
	    }
	    <?php } ?>
		max = parseInt($('[nctype="goods_stock"]').text());
		if(num < max){
			$('#quantity').val(num+1);
		}
	});
	//减少
	$('.decrease').click(function(){
		num = parseInt($('#quantity').val());
		if(num > 1){
			$('#quantity').val(num-1);
		}
	});

    //评价列表
    $('#comment_tab').on('click', 'li', function() {
        $('#comment_tab li').removeClass('current');
        $(this).addClass('current');
        load_goodseval($(this).attr('data-type'));
    });
    load_goodseval('all');
    function load_goodseval(type) {
        var url = '<?php echo urlShop('goods', 'comments', array('goods_id' => $output['goods']['goods_id']));?>';
        url += '&type=' + type;
        $("#goodseval").load(url, function(){
            $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
        });
    }

    //记录浏览历史
	$.get("index.php?act=goods&op=addbrowse",{gid:<?php echo $output['goods']['goods_id'];?>});
	//初始化对比按钮
	initCompare();
});
/* 加入购物车后的效果函数 */
function addcart_callback(data){
	$('#bold_num').html(data.num);
    $('#bold_mly').html(price_format(data.amount));
	$('#top_cart_num').text(data.num);
	$('.ncs-cart-popup').css('margin-left', $("#shop_basket").position().left-19);
	$('.ncs-cart-popup').css('margin-top', $("#shop_basket").position().top+5);
	
    $('.ncs-cart-popup').fadeIn('fast');
}

</script>

</body>
</html>
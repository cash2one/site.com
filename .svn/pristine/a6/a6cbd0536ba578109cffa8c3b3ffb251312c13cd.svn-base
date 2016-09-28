
	<link rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL; ?>/newcss/index.css"/>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.lazyload.js"></script>
    <script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.nicescroll.js"></script>
    <script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/index.js"></script>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/newindex.js"></script>

	
	<!-- “加入清单”的手拉琴效果-->
	<!-- <link rel="stylesheet" href="<?php echo SHOP_SITE_URL;?>/resource/newcss/lanrenzhijia.css"/> -->
	<!-- <script>document.documentElement.className = "js";</script>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/json2.js"></script>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.collapse.js"></script>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.collapse_storage.js"></script>
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/jquery.collapse_cookie_storage.js"></script>
	“加入清单”的手拉琴效果-->
	
    <div class="main">
        <div class="fl">
             <div class="banner"><?php echo loadadv(1279);?></div>
             <div class="yuding">
                 <div class="yuding-tit">
                     <span >新品首发</span>
                     <span class="turn-lr">
                         <i class="yuding-tit-left" onclick="newGoodsOpen('left')"></i>
                         <i class="yuding-tit-right" onclick="newGoodsOpen('right')"></i>
                     </span>
                     <div style="clear: both"></div>
                 </div>
                 <ul id="leftNewGoods" style="display:block">
                     <li>
                        <img class="lazy" data-original="<?php echo $output['adv_info1'][0]['adv_content']['adv_pic']; ?>" alt="新品首发">
						 
						<a href="<?php echo $output['adv_info1'][0]['adv_content']['adv_pic_url']; ?>" target="_blank">
                         <div class="li-hover">
                             <div>
                                 <div class="li-hover-text">
                                    <p><?php echo $output['adv_info1'][0]['adv_title']; ?></p>
                                    <span><?php echo $output['adv_info1'][0]['adv_price']; ?></span>
                                 </div>
                                 <div class="ding">
                                     订
                                 </div>
                             </div>
                         </div>
						</a> 
						 
                     </li>
                     <li>
                        <img class="lazy" data-original="<?php echo $output['adv_info11'][0]['adv_content']['adv_pic']; ?>" alt="新品首发">
                        
						<a href="<?php echo $output['adv_info11'][0]['adv_content']['adv_pic_url']; ?>" target="_blank">
						<div class="li-hover">
                             <div>
                                 <div class="li-hover-text" >
                                    <p><?php echo $output['adv_info11'][0]['adv_title']; ?></p>
                                    <span><?php echo $output['adv_info11'][0]['adv_price']; ?></span>
                                 </div>
                                 <div class="ding">
                                     订
                                 </div>
                             </div>
                        </div>
						</a>
						
                     </li>
                     <li>
						
						<img class="lazy" data-original="<?php echo $output['adv_info111'][1]['adv_content']['adv_pic']; ?>" alt="新品首发">
                         
						<a href="<?php echo $output['adv_info111'][1]['adv_content']['adv_pic_url']; ?>" target="_blank"> 
						<div class="li-hover">
                             <div>
                                 <div  class="li-hover-text">
                                    <p><?php echo $output['adv_info111'][1]['adv_title']; ?></p>
                                    <span><?php echo $output['adv_info111'][1]['adv_price']; ?></span>
                                 </div>
                                 <div class="ding">
                                     订
                                 </div>
                             </div>
                         </div>
						 </a>	
                     </li>
                     <li>
                         <img class="lazy" data-original="<?php echo $output['adv_info11'][1]['adv_content']['adv_pic']; ?>" alt="新品首发">
                         <a href="<?php echo $output['adv_info11'][1]['adv_content']['adv_pic_url']; ?>" target="_blank">
						 <div class="li-hover">
                             <div>
                                 <div  class="li-hover-text">
                                     <p><?php echo $output['adv_info11'][1]['adv_title']; ?></p>
                                     <span><?php echo $output['adv_info11'][1]['adv_price']; ?></span>
                                 </div>
                                 <div class="ding">
                                     订
                                 </div>
                             </div>
                         </div>
						 </a>
                     </li>
                 </ul>
				 <ul id="rightNewGoods" style="display:none">
                     <li>
                        <img class="lazy" data-original="<?php echo $output['adv_info1'][1]['adv_content']['adv_pic']; ?>" alt="新品首发">
						 
						<a href="<?php echo $output['adv_info1'][1]['adv_content']['adv_pic_url']; ?>" target="_blank">
                         <div class="li-hover">
                             <div>
                                 <div  class="li-hover-text">
                                    <p><?php echo $output['adv_info1'][1]['adv_title']; ?></p>
                                    <span><?php echo $output['adv_info1'][1]['adv_price']; ?></span>
                                 </div>
                                 <div class="ding">
                                     订
                                 </div>
                             </div>
                         </div>
						</a> 
						 
                     </li>
                 </ul>
             </div>
             <div class="lanmu">
				
				<?php if (!empty($output['one_goods_list_array']) && is_array($output['one_goods_list_array'])) { $num = 1; $count = 1; ?>
                <?php foreach ($output['one_goods_list_array'] as $gokey => $one_goods_list) { ?>
						
						<?php if($num <= 3) { ?>

							<?php if($num == 1) { ?> 
								
							<div class="zuo-lei">

									<div class="big-main">
										<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
										    	<img class="lazy" data-original="<?php echo thumb($one_goods_list, 360); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
										    </a>
											</div>
											<div class="cp-text">
												<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
											</div>

										<div class="dianzan">
											 <span>
												<span <?php echo $one_goods_list['style_class']; ?>>
													<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
														<i class="dianzan-m"></i>
														点赞
													</a>
												</span>
												<span >
													<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
														<i class="shoucan-m"></i>
														收藏
													</a>
												</span>
											 </span>
											 <span class="dianzan-more">
												  <div class="fenxiang-more">
												  
													 <?php if($_SESSION['is_login']){ ?>
														
														<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
														<span>加入清单<i class="fenxiang-t"></i></span>
														<div class="new-list">
															<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
															<?php } ?>
														</div>
														<div class="new-list-two">
                                                            <span>创建新列表</span>
															<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
															</span>
														</div>
																
													<?php } else { ?>
															
														<span>
															<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
														</span>
														<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																
													<?php } ?>
													
												  </div>
											 </span>
										</div>
									</div>
	
							<?php } else if($num == 2) { ?>
							
								<div class="small-main">

										<div class="small-left">
											<div class="cp-pic">
											    <a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												   <img class="lazy" data-original="<?php echo thumb($one_goods_list); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
												</a>
											</div>
											<div class="cp-text">
												 <a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												    <i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												 </a>
												<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
											</div>
												<div class="dianzan">
													 <span <?php echo $one_goods_list['style_class']; ?>>
														<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, , this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="dianzan-m"></i>
															
																点赞
														</a>
													</span>
													<span >
														<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="shoucan-m"></i>
															收藏
														</a>
													</span>
												 </span>
												 <span class="dianzan-more">
													  <div class="fenxiang-more">
															<?php if($_SESSION['is_login']){ ?>
														
																<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																<span>加入清单<i class="fenxiang-t"></i></span>
																<div class="new-list">
																	<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																		<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																	<?php } ?>
																</div>
																<div class="new-list-two">
																	<span>创建新列表</span>
																	<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																		<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																		<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																	</span>
																</div>
																		
															<?php } else { ?>
																	
																<span>
																	<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																</span>
																<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																		
															<?php } ?>
													  </div>
												 </span>
												</div>
										</div>
										
									</a>
									
									<?php if($count == count($output['goods_list_array'])) { ?> 
									
											<div style="clear: both"></div>
										</div>	
										
									<?php } ?>
									
								<?php } else if($num == 3) { ?> 

										<div class="small-right">
											<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<img class="lazy" data-original="<?php echo thumb($one_goods_list); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
											</a>
											</div>
											<div class="cp-text">
													<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
													<i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
													</a>
												<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
											</div>
												<div class="dianzan">
													 <span>
														<span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														<span >
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														</span>
													 </span>
													 <span class="dianzan-more">
														  <div class="fenxiang-more">
															  <?php if($_SESSION['is_login']){ ?>
														
																	<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																	<span>加入清单<i class="fenxiang-t"></i></span>
																	<div class="new-list">
																		<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																			<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																		<?php } ?>
																	</div>
																	<div class="new-list-two">
																		<span>创建新列表</span>
																		<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																			<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																			<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																		</span>
																	</div>
																			
																<?php } else { ?>
																		
																	<span>
																		<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																	</span>
																	<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																			
																<?php } ?>
														  </div>
													 </span>
												</div>
										</div>
									</a>
									
									<div style="clear: both"></div>
								</div>	
									
							<?php }  ?>

							
							<?php if($num == 3 || $count == count($output['goods_list_array'])) { ?>
								
								</div>
								
							<?php } } ?>

						
						<?php if($num > 3 && $num <= 6) { ?>
							
							<?php if($num == 4) { ?> 
								
								<div class="you-lei">
								
									<div class="small-main">

											<div class="small-left">
												<div class="cp-pic">
													<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												    	<img class="lazy" data-original="<?php echo thumb($one_goods_list); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
												    </a>
												</div>
												<div class="cp-text">
													<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
													<i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
													</a>
													<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
												</div>
												<div class="dianzan">
													<span>
														<span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														<span >
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														</span>
													</span>
													<span class="dianzan-more">
														<div class="fenxiang-more">
															<?php if($_SESSION['is_login']){ ?>
														
																<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																<span>加入清单<i class="fenxiang-t"></i></span>
																<div class="new-list">
																	<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																		<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																	<?php } ?>
																</div>
																<div class="new-list-two">
																	<span>创建新列表</span>
																	<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																		<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																		<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																	</span>
																</div>
																		
															<?php } else { ?>
																	
																<span>
																	<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																</span>
																<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																		
															<?php } ?>
														</div>
													</span>
												</div>
											</div>
									
										</a>
										
								<?php if($count == count($output['goods_list_array'])) { ?>
									
									</div>
								
								<?php } ?>
							
							<?php } else if($num == 5) { ?>

										<div class="small-right">
											<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<img class="lazy" data-original="<?php echo thumb($one_goods_list); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
											</a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
											</div>
											<div class="dianzan">
												<span>
													<span <?php echo $one_goods_list['style_class']; ?>>
														<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="dianzan-m"></i>
															点赞
														</a>
													</span>
													<span >
														<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="shoucan-m"></i>
															收藏
														</a>
													</span>
												</span>
												<span class="dianzan-more">
													<div class="fenxiang-more">
														<?php if($_SESSION['is_login']){ ?>
														
															<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
															<span>加入清单<i class="fenxiang-t"></i></span>
															<div class="new-list">
																<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																	<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																<?php } ?>
															</div>
															<div class="new-list-two">
																<span>创建新列表</span>
																<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																	<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																	<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																</span>
															</div>
																	
														<?php } else { ?>
																
															<span>
																<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
															</span>
															<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																	
														<?php } ?>
													</div>
												</span>
											</div>
										</div>
										<div style="clear: both"></div>
											
									</a>
								
								</div>
								
							<?php } else if($num == 6) { ?>

									<div class="big-main">
											<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<img class="lazy" data-original="<?php echo thumb($one_goods_list, 360); ?>" width="150" height="150" alt="<?php echo $one_goods_list['goods_name']; ?>">
											</a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $one_goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($one_goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $one_goods_list['goods_price']; ?></i>
											</div>
											<div class="dianzan">
													 <span>
														<span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														 <span >
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $one_goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														 </span>
													 </span>
													 <span class="dianzan-more">
														  <div class="fenxiang-more">
																<?php if($_SESSION['is_login']){ ?>
														
																	<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																	<span>加入清单<i class="fenxiang-t"></i></span>
																	<div class="new-list">
																		<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																			<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																		<?php } ?>
																	</div>
																	<div class="new-list-two">
																		<span>创建新列表</span>
																		<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																			<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																			<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																		</span>
																	</div>
																			
																<?php } else { ?>
																		
																	<span>
																		<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																	</span>
																	<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																			
																<?php } ?>
														  </div>
													 </span>
											</div>
									</div>
								</a>
								
							<?php $num = 0; } ?>

							<?php if($num == 0 || $count == count($output['goods_list_array']))  { ?>
									
								</div>
								
							<?php } ?>
						
						<?php } ?>

				<?php $num++; $count++; } ?>
				
            <?php }  ?>

             </div>
             <div style="clear: both"></div>
             <div class="banner-two" style="background: #fff;">
				 <img src="<?php echo UPLOAD_SITE_URL; ?>/index/gouyishi.png" alt="购艺市" style="height: 272px;width: 100%;">
             </div>
			 
			<?php if (!empty($output['goods_list_array']) && is_array($output['goods_list_array'])) { $num = 1; $count = 1; ?>
                <?php foreach ($output['goods_list_array'] as $gkey => $goods_list) { ?>
							
					<?php if($num == 1) { ?>
						
						<div style="clear: both"></div>
						<div class="lanmu">
						
					<?php } ?>
						
						<?php if($num <= 3) { ?>

							<?php if($num == 1) { ?> 
								
							<div class="zuo-lei">

									<div class="big-main">
										<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
										    	<img class="lazy" data-original="<?php echo thumb($goods_list, 360); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
											</a>
										</div>
										<div class="cp-text">
										   <a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
											  <i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
											</a>
											<i>¥<?php echo $goods_list['goods_price']; ?></i>
										</div>
										<div class="dianzan">
											 <span>
												 <span <?php echo $one_goods_list['style_class']; ?>>
													<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
														<i class="dianzan-m"></i>
														点赞
													</a>
												</span>
												 <span >
													<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
														<i class="shoucan-m"></i>
														收藏
													</a>
													</span>
											 </span>
											 <span class="dianzan-more">

												 <div class="fenxiang-more">
													<?php if($_SESSION['is_login']){ ?>
														
														<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
														<span>加入清单<i class="fenxiang-t"></i></span>
														<div class="new-list">
															<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
															<?php } ?>
														</div>
														<div class="new-list-two">
                                                            <span>创建新列表</span>
															<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
															</span>
														</div>
																
													<?php } else { ?>
															
														<span>
															<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
														</span>
														<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																
													<?php } ?>
                                                                        
                                                   </div>
												   <!--<u class="triangle-down "></u>-->
											 </span>
										</div>
									</div>
									
								</a>
								
							<?php } else if($num == 2) { ?>
							
								<div class="small-main">

										<div class="small-left">
											<div class="cp-pic">
										    	<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
											    	<img class="lazy" data-original="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
											    </a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $goods_list['goods_price']; ?></i>
											</div>
											<div class="dianzan">
												 <span>
													<span <?php echo $one_goods_list['style_class']; ?>>
														<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="dianzan-m"></i>
															点赞
														</a>
													</span>
													<span >
														<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="shoucan-m"></i>
															收藏
														</a>
													</span>
												 </span>
												 <span class="dianzan-more">
													  <div class="fenxiang-more">
															<?php if($_SESSION['is_login']){ ?>
														
																<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																<span>加入清单<i class="fenxiang-t"></i></span>
																<div class="new-list">
																	<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																		<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																	<?php } ?>
																</div>
																<div class="new-list-two">
																	<span>创建新列表</span>
																	<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																		<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																		<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																	</span>
																</div>
																		
															<?php } else { ?>
																	
																<span>
																	<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																</span>
																<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																		
															<?php } ?>

													  </div>
												 </span>
											</div>
										</div>
										
									</a>
									
									<?php if($count == count($output['goods_list_array'])) { ?> 
									
											<div style="clear: both"></div>
										</div>	
										
									<?php } ?>
									
								<?php } else if($num == 3) { ?> 
									

							
										<div class="small-right">
											<div class="cp-pic">
											    <a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												   <img class="lazy" data-original="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
										        </a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $goods_list['goods_price']; ?></i>
											</div>
												<div class="dianzan">
													 <span>
														<span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														<span >
															
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														</span>
													 </span>
													 <span class="dianzan-more">
														  <div class="fenxiang-more">
																<?php if($_SESSION['is_login']){ ?>
														
																	<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																	<span>加入清单<i class="fenxiang-t"></i></span>
																	<div class="new-list">
																		<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																			<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																		<?php } ?>
																	</div>
																	<div class="new-list-two">
																		<span>创建新列表</span>
																		<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																			<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																			<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																		</span>
																	</div>
																			
																<?php } else { ?>
																		
																	<span>
																		<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																	</span>
																	<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																			
																<?php } ?>
														  </div>
													 </span>
												</div>
										</div>
									</a>
									
									<div style="clear: both"></div>
								</div>	
									
							<?php }  ?>

							
							<?php if($num == 3 || $count == count($output['goods_list_array'])) { ?>
								
								</div>
								
							<?php } } ?>

						
						<?php if($num > 3 && $num <= 6) { ?>
							
							<?php if($num == 4) { ?> 
								
								<div class="you-lei">
								
									<div class="small-main">
						

									
											<div class="small-left">
												<div class="cp-pic">
											    	<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
													    <img class="lazy" data-original="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
												   </a>
												</div>
												<div class="cp-text">
												<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
													<i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
													  </a>
													<i>¥<?php echo $goods_list['goods_price']; ?></i>
												</div>
												<div class="dianzan">
													<span>
														<span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														<span >
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														</span>
													</span>
													<span class="dianzan-more">
														<div class="fenxiang-more">
															<?php if($_SESSION['is_login']){ ?>
														
																<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																<span>加入清单<i class="fenxiang-t"></i></span>
																<div class="new-list">
																	<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																		<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																	<?php } ?>
																</div>
																<div class="new-list-two">
																	<span>创建新列表</span>
																	<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																		<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																		<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																	</span>
																</div>
																		
															<?php } else { ?>
																	
																<span>
																	<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																</span>
																<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																		
															<?php } ?>
														</div>
													</span>
												</div>
											</div>
									
										</a>
										
								<?php if($count == count($output['goods_list_array'])) { ?>
									
									</div>
								
								<?php } ?>
							
							<?php } else if($num == 5) { ?>
								

								
										<div class="small-right">
											<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<img class="lazy" data-original="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
											</a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $goods_list['goods_price']; ?></i>
											</div>
											<div class="dianzan">
												<span>
													<span <?php echo $one_goods_list['style_class']; ?>>
														<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="dianzan-m"></i>
															点赞
														</a>
													</span>
													<span >
														<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
															<i class="shoucan-m"></i>
															收藏
														</a>
													</span>
												</span>
												<span class="dianzan-more">
													<div class="fenxiang-more">
														<?php if($_SESSION['is_login']){ ?>
														
															<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
															<span>加入清单<i class="fenxiang-t"></i></span>
															<div class="new-list">
																<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																	<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																<?php } ?>
															</div>
															<div class="new-list-two">
																<span>创建新列表</span>
																<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																	<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																	<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																</span>
															</div>
																	
														<?php } else { ?>
																
															<span>
																<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
															</span>
															<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																	
														<?php } ?>
													</div>
												</span>
											</div>
										</div>
										<div style="clear: both"></div>
											
									</a>
								
								</div>
								
							<?php } else if($num == 6) { ?> 
							

					
									<div class="big-main">
											<div class="cp-pic">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<img class="lazy" data-original="<?php echo thumb($goods_list, 360); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>">
											</a>
											</div>
											<div class="cp-text">
											<a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>" target="_blank">
												<i><?php echo mb_substr($goods_list['goods_name'],0,10,'utf-8').'...'; ?></i>
												</a>
												<i>¥<?php echo $goods_list['goods_price']; ?></i>
											</div>
											<div class="dianzan">
													 <span>
														 <span <?php echo $one_goods_list['style_class']; ?>>
															<a class="idclass" href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberLikeGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="dianzan-m"></i>
																点赞
															</a>
														</span>
														<span >
															<a href="javascript:void(0);" onclick="<?php if($_SESSION['is_login']){ ?>meberKeepGoods(<?php echo $goods_list['goods_id']; ?>, this)<?php } else { ?> promptLogin(this)<?php } ?>">
																<i class="shoucan-m"></i>
																收藏
															</a>
														 </span>
													 </span>
													 <span class="dianzan-more">
														  <div class="fenxiang-more">
																<?php if($_SESSION['is_login']){ ?>
														
																	<span><a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"<?php echo $one_goods_list['goods_id'];?>"}'>分享好友</a><i class="fenxiang-f"></i></span>
																	<span>加入清单<i class="fenxiang-t"></i></span>
																	<div class="new-list">
																		<?php foreach($output['favorites_class_data'] as $kfc => $vfc) { ?>
																			<span onclick="selectKeepGoodsClass(<?php echo $vfc['favorites_class_id']; ?>, <?php echo $one_goods_list['goods_id']; ?>,this)"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/newimg/yixuanzhong.png" alt=""/><?php echo $vfc['favorites_class_name']; ?></span>
																		<?php } ?>
																	</div>
																	<div class="new-list-two">
																		<span>创建新列表</span>
																		<span id="<?php echo $one_goods_list['goods_id'].'_createlist'; ?>">
																			<input class="inputtype" type="text" maxlength="13" placeholder="输入名称"/>
																			<a class="atype" href="javascript:void(0);" onclick="createKeepGoodsClassList('<?php echo $one_goods_list['goods_id'].'_createlist'; ?>', <?php echo $one_goods_list['goods_id']; ?>,this)">创建</a>
																		</span>
																	</div>
																			
																<?php } else { ?>
																		
																	<span>
																		<a href="javascript:void(0);" onclick="promptLogin(this)">分享好友<i class="fenxiang-f"></i></a>
																	</span>
																	<span><a href="javascript:void(0);" onclick="promptLogin(this)">加入列表<i class="fenxiang-t"></i></a></span>
																			
																<?php } ?>
														  </div>
													 </span>
											</div>
									</div>
								</a>
								
							<?php $num = 0; } ?>

							<?php if($num == 0 || $count == count($output['goods_list_array']))  { ?>
									
								</div>
								
							<?php } ?>
						
						<?php } ?>

					<?php if($count == count($output['goods_list_array']) || $num == 0) { ?>

							<div style="clear: both"></div>
						</div>
					
					<?php } ?>

				<?php $num++; $count++; } ?>
				
            <?php }  ?>
		</div>
		
        <div class="fr">
               <div class="loading" id="loading">
                      <div class="loading-tit">
							<span id="xinjing_span" <?php if($_SESSION['is_login']) { ?>onclick="newstore('xinjing')" <?php } ?>>新进的</span>
							<span id="guangzhu_span" <?php if($_SESSION['is_login']) { ?>style="border-bottom:2px solid #373946;height:57px" onclick="newstore('guanzhude-main')" <?php } ?>>关注的</span>
                      </div>
                      <div style="clear: both"></div>
                       <div  style="display: <?php if($_SESSION['is_login']) { echo 'none'; } else { echo "block"; } ?>" class="no-loading" >
                          <div class="load-pic"><img src="<?php echo C('new_index_url'); ?>/data/upload/shop/common/04979573716033444.png" class="pngFix"></div>
							<div class="load-but">
                              <span><a href="index.php?act=login&op=index" style="color:#fff">登录/Login </a></span>
                              <span><a href="index.php?act=login&op=register" style="color:#fff">注册/Signup </a></span>
							</div>
                            <div class="open-dian"><a href="index.php?act=show_joinin&op=index" style="color: #14CEB6;">我要开店</a></div>
                       </div>
					   
					<?php if($_SESSION['is_login']) { ?>
						
						<?php if(!empty($output['member_store'])) { ?>
						
							<div  style="display: block" class="guanzhude" id="guanzhude-main_id">
							   <ul class="guanzhude-main" id="guanzhude-main">
									
									<?php foreach($output['member_store'] as $k => $v) { ?> 
									
										<li>
										
											<div class="guanzhude-pic"><img src="<?php echo getStoreLogo($v['store_avatar']);?>" alt=""/></div>
											<div class="guanzhude-t">
											   <span><a href="index.php?act=show_store&op=index&store_id=<?php echo $v['store_id']; ?>"><?php echo $v['store_name']; ?></a></span>
											   <span><?php echo $v['area_info']; ?></span>
											</div>
											<div class="guanzhude-s"><?php echo '+'.$v['store_click']; ?></div>
			
										</li>
								
									<?php } ?>
			
								</ul>
								<div class="open-dian"><a href="index.php?act=member_favorites&op=fslist" target="_blank" style="color:#14CEB6">查看更多</a></div>
							</div>
					
						<?php } else { ?>
					
							<div  style="display: block" class="no-guangzhu" id="guanzhude-main_id">
							   <br>关注更多你喜欢的店铺<br>获取最新商品动态 </span>
							</div>
							
						<?php } ?>
					
						<div  style="display: none" class="xinjing" id="xinjing">
                           
						   <ul class="xingjing-tx">
							
								<?php foreach($output['store_list'] as $ksl => $vsl) { ?> 
									
									<li>
										<div class="">
											
											<div class="xinjin-tou">
												<a href="index.php?act=show_store&op=index&store_id=<?php echo $vsl['store_id']; ?>">
												<img src="<?php echo getStoreLogo($vsl['store_avatar'],'store_logo'); ?>" alt=""/>
												</a>
											</div>
											
											<div class="xinjia-sj">
												<span class="xinjia-n"><a href="index.php?act=show_store&op=index&store_id=<?php echo $vsl['store_id']; ?>"><?php echo $vsl['store_name']; ?></a></span>
												<span class="xinjia-a">
													<i><?php echo $vsl['area_info']; ?></i>
												</span>
											</div>
											<div class="zj-yjf-t-gz">
												
												<a href="javascript:void(0);" onclick="meberKeepStore(<?php echo $vsl['store_id']; ?>, this)">
												<i class="zj-yjf-t-gz-g shoucan-m"></i>
												关注
												</a>
											</div>
										</div>
										<div style="clear: both"></div>
										<ul class="xinjin-pic">
											<?php $slg=1; foreach($vsl['search_list_goods'] as $k1 => $v1) { ?>
											<li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $v1['goods_id'])); ?>"><img src="<?php echo thumb($v1); ?>" alt=""/></a></li>
											<?php if($k1 ==5 || $slg >= 4){ break; } ?>
											<?php $slg++;} ?>
										</ul>
										
										<div style="clear: both"></div>
									
									</li>
								
								<?php } ?>
                       
                           </ul>
                       </div>
					
					<?php } ?>
               </div>
			   
			   <!-- S 最佳艺匠坊-->
               <div id="designersModel" class="zuijia-yjf">
                    
				   
                   <!-- <div class="zj-yjf-tit-t">最佳艺匠坊</div>
                   <div class="zj-yjf-t-main">
                       <div class="zj-yjf-t-head">
                           <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                       </div>
                       <div class="zj-yjf-t-yonghu">
                           <div>
                               <div class="zj-yjf-t-xinxi">
                                   <span>asdfa</span>
                                   <span>121,345 fans</span>
                               </div>
                               <div class="zj-yjf-t-gz"><i class="zj-yjf-t-gz-g shoucan-m"></i>关注</div>
                           </div>
                       </div>
                       <div class="zj-yjf-t-pic">
                           <ul>
                               <li><img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/></li>
                               <li><img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/></li>
                               <li><img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/></li>
                               <li><img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/></li>
                           </ul>
                           <div style="clear: both"></div>
                       </div>
                       <div class="zj-yjf-pm">
                            <div class="zj-yjf-pm-m">
                                <span>3</span>
                                <div class="zj-yjf-pm-head">
                                    <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                                </div>
                                <span class="zj-yjf-pm-n">lady gugug</span>
                                <span class="zj-yjf-pm-s">65456</span>
                            </div>
                       </div>
                       <div class="zj-yjf-pm">
                           <div class="zj-yjf-pm-m">
                               <span>3</span>
                               <div class="zj-yjf-pm-head">
                                   <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                               </div>
                               <span class="zj-yjf-pm-n">lady gugug</span>
                               <span class="zj-yjf-pm-s">65456</span>
                           </div>
                       </div>
                       <div class="zj-yjf-pm">
                           <div class="zj-yjf-pm-m">
                               <span>3</span>
                               <div class="zj-yjf-pm-head">
                                   <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                               </div>
                               <span class="zj-yjf-pm-n">lady gugug</span>
                               <span class="zj-yjf-pm-s">65456</span>
                           </div>
                       </div>
                       <div class="zj-yjf-pm">
                           <div class="zj-yjf-pm-m">
                               <span>3</span>
                               <div class="zj-yjf-pm-head">
                                   <img src="img/u=2981245480,1562730640&fm=11&gp=0.jpg" alt=""/>
                               </div>
                               <span class="zj-yjf-pm-n">lady gugug</span>
                               <span class="zj-yjf-pm-s">65456</span>
                           </div>
                       </div>
                   </div>-->
               </div>
			   <!-- E 最佳艺匠坊-->
			   <!-- S 艺见模板-->
               <div id="yijianModel" class="yijian">
                  <!-- <div class="yuding-tit yijian-tit">
                       <span ><?php echo $output['cms_article_data_1']['name']; ?></span>
                         <span class="turn-lr">
                             <i class="yuding-tit-left"></i>
                             <i class="yuding-tit-right"></i>
                         </span>
                           <div style="clear: both"></div>
                   </div>
                   <div class="yijian-pic">
                       <img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS. $output['cms_article_data_1']['data']['article_publisher_id'].DS.unserialize($output['cms_article_data_1']['data']['article_image'])['name']; ?>" alt=""/>
                   </div>
                   <div class="yijian-text">
                       <p><a href="<?php echo getCMSArticleUrl($output['cms_article_data_1']['data']['article_id']); ?>" style="font-size:12px"><?php echo $output['cms_article_data_1']['data']['article_title']; ?></a></p>
                       <div>
					   
                           <span><?php echo $output['cms_article_data_1']['data']['article_abstract']; ?></span>

						   
                       </div>
                   </div> -->
               </div>
			   <!-- E 艺见模板-->
			   <!-- S 艺访模板-->
               <div id="yifangModel" class="yifang">
                <!-- <div class="yuding-tit yijian-tit">
                    <span ><?php echo $output['cms_article_data_3']['name']; ?></span>
                     <span class="turn-lr">
                         <i class="yuding-tit-left"></i>
                         <i class="yuding-tit-right"></i>
                     </span>
                    <div style="clear: both"></div>
                </div>
                <div class="yifang-pic">
                    <img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS. $output['cms_article_data_3']['data']['article_publisher_id'].DS.unserialize($output['cms_article_data_3']['data']['article_image'])['name']; ?>" alt=""/>
                </div>
                <div class="yifang-text">
                    <p><a href="<?php echo getCMSArticleUrl($output['cms_article_data_3']['data']['article_id']); ?>" style="font-size:12px"><?php echo mb_substr($output['cms_article_data_3']['data']['article_title'],0,8, 'utf-8').'...'; ?></a></p>
                    <i></i>
                    <span><?php echo mb_substr($output['cms_article_data_3']['data']['article_abstract'],0,20, 'utf-8').'...'; ?></span>
                </div>
                <div style="clear: both"></div> -->
				</div>
				<!-- E 艺访模板-->
				
                <div class="yishenghuo">
                <div class="yuding-tit yijian-tit">
                    <span >艺生活</span>

                    <div style="clear: both"></div>
                </div>

                <?php foreach($output['cms_article_data_5']['data'] as $k5 => $v5) { ?>
				
					<div class="yishenghuo-main">
						<div class="yishenghuo-day"><?php echo mb_substr($v5['article_title'],0,3,'utf-8').'...'; ?></div>
						<div>
							<a href="<?php echo getCMSArticleUrl($v5['article_id']); ?>">
								<img src="<?php echo C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS. $v5['article_publisher_id'].DS.unserialize($v5['article_image'])['name']; ?>" style="width: 304px;height: 150px;" alt="玩咖">
							</a>
						</div>
					</div>
				
				<?php } ?>
                <div class="yishenghuo-more"><a href="index.php?act=index&op=cms">查看更多</a></div>
            </div>
        </div>
    </div>

	<!-- S 详情的 -->
	<script src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" type="text/javascript" charset="utf-8"></script> 
	<!-- E 详情的 -->
	
	<!-- S 提示 -->
	<script src="<?php echo SHOP_TEMPLATES_URL; ?>/newjs/layer.js" type="text/javascript" charset="utf-8"></script> 
	<!-- E 提示 -->
	
	<script>
		
		$(function(){  

			$("img.lazy").lazyload({
				threshold : 1000
			});
			ajaxLoadData(<?php echo "'".C('shop_site_url')."'";; ?> + '/index.php?act=index&op=ajaxLoadData', 3);
			ajaxLoadData(<?php echo "'".C('shop_site_url')."'";; ?> + '/index.php?act=index&op=ajaxLoadData', 1);
			ajaxLoadData(<?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=ajaxDesignersData', 7);
		});
		
	</script>
	
	<script>

		function promptLogin(obj) {
			
			login_dialog();
			
		}
		
		function meberKeepGoods(id,obj) {

			url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=meberKeepGoods';
			
			$.ajax({
				
				type:'GET',
				url: url,
				data:{goods_id:id},
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
		
		function meberKeepStore(id, obj) {

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
					
					var member_favorites_data = data.member_favorites_data;
					if(member_favorites_data != null) {

					   loadGuanZhuModel(member_favorites_data);
					   
					}
					
				},
				
				error : function(e) {
					
					console.log(e);
					
				}
				
			});
			
		}
		
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
		
		function selectKeepGoodsClass(id,goodsId,obj) {
			
			url = <?php echo "'".C('shop_site_url')."'"; ?> + '/index.php?act=index&op=selectKeepGoodsClass';
			data = {favorites_class_id: id, goods_id: goodsId};
			getAjax(url, data, null,obj);
			
		}
		
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
		
		/**
		 * @加载最新关注的店铺
		 * add by lizh 4:09 2016/7/4
		 */
		function loadGuanZhuModel(data) {

			var str = "";
			for(var i=0;i<data.length; i++) {

				str += '<li>';
				str += '<div class="guanzhude-pic">'
				str += '<img src="' + data[i]['img_src'] + '" alt=""/>';
				str += '</div>';
				str += '<div class="guanzhude-t">';
				str += '<span>';
				str += '<a href="index.php?act=show_store&op=index&store_id='+data[i]['store_id']+'">'+data[i]['store_name']+'</a>';
				str += '</span>';
				str += '<span>'+data[i]['area_info']+'</span>';
				str += '</div>';
				str += '<div class="guanzhude-s">'+ '+' + data[i]['store_click'] + '</div>';
				str += '</li>';

			}

			var id_name = '#guanzhude-main_id';
			if(!$(id_name).hasClass('guanzhude')) {
				
				$(id_name).removeClass("no-guangzhu"); 
				$(id_name).addClass("guanzhude");
				str = '<ul class="guanzhude-main" id="guanzhude-main" style="overflow: hidden;outline: none;">' + str + '</ul>';
				str += '<div class="open-dian"><a href="index.php?act=member_favorites&op=fslist" target="_blank" style="color:#14CEB6">查看更多</a></div>';
				$(id_name).html(str);
				
			} else {
				
				$('#guanzhude-main').append(str);
				
			}

		}
 		
	</script>
	
</body>
</html>
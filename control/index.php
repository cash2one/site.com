 <?php

/**
 * 默认展示页面
 *
 *
 * *by 多用户商城 www.abc.com 多用户商城 运营版 */
defined('InShopNC') or exit('Access Invalid!');

class indexControl extends BaseHomeControl {
	
	/**
	 * update by lizh 10:32 2016/7/4
	 */
    public function indexOp() {
		
		Language::read('home_index_index');
        Tpl::output('index_sign', 'index');
		
        //把加密的用户id写入cookie  by 3 3h ao.co m 已换另一个方式，临时去掉此方法
        //$uid = $_GET['uid'];
        //setcookie('uid', $uid);
        $uid = intval(base64_decode($_COOKIE['uid']));

        //zmr>v30
        $zmr = intval($_GET['zmr']);
        if ($zmr > 0) {
            setcookie('zmr', $zmr);
        }


        //抢购专区
        Language::read('member_groupbuy');
        $model_groupbuy = Model('groupbuy');
        $group_list = $model_groupbuy->getGroupbuyCommendedList(4);
        Tpl::output('group_list', $group_list);
		//友情链接
        $model_link = Model('link');
        $link_list = $model_link->getLinkList($condition, $page);
        /**
         * 整理图片链接
         */
        if (is_array($link_list)) {
            foreach ($link_list as $k => $v) {
                if (!empty($v['link_pic'])) {
                    $link_list[$k]['link_pic'] = UPLOAD_SITE_URL . '/' . ATTACH_PATH . '/common/' . DS . $v['link_pic'];
                }
            }
        }
        Tpl::output('$link_list', $link_list);
        //限时折扣
        $model_xianshi_goods = Model('p_xianshi_goods');
        $xianshi_item = $model_xianshi_goods->getXianshiGoodsCommendList(4);
        Tpl::output('xianshi_item', $xianshi_item);

        //聚拾寨
        //限时
        $model_brand = Model('brand');
        $model_goods = Model('goods');
        $where['is_vr'] = 0;
        $where['groupbuy_type'] = 0;
        $groupbuy_list_time = $model_groupbuy->getGroupbuyExtendList($where);
        if (!empty($groupbuy_list_time)) {
            foreach ($groupbuy_list_time as $key => $val) {
                if ($val['end_time'] < TIMESTAMP) {
                    unset($groupbuy_list_time[$key]);//删除已结束抢购
                }
            }
        }
        //删除后，下标重排序
        $groupbuy_list_time = array_merge($groupbuy_list_time);
        Tpl::output('groupbuy_list_time', $groupbuy_list_time);

        //品牌街
        $model_goods_class = Model('goods_class');
        $model_mb_category = Model('mb_category');
		$store_table = Model('store');
        $model_goods = Model('goods');
        $goods_class_array = Model('goods_class')->getGoodsClassForCacheModel();

        $class_list = $model_goods_class->getGoodsClassListByParentId(0);
		
        $mb_categroy = $model_mb_category->getLinkList(array());
        $mb_categroy = array_under_reset($mb_categroy, 'gc_id');
		
		$goods_list_array = array();
		$goods_list_num = 0;
		$one_goods_list_num = 0;
		$class_list_num = 1;
		
        foreach ($class_list as $key => $value) {
            if (!empty($mb_categroy[$value['gc_id']])) {
                $class_list[$key]['image'] = UPLOAD_SITE_URL . DS . ATTACH_MOBILE . DS . 'category' . DS . $mb_categroy[$value['gc_id']]['gc_thumb'];
            } else {
                $class_list[$key]['image'] = '';
            }

            $class_list[$key]['text'] = '';
            $child_class_string = $goods_class_array[$value['gc_id']]['child'];
            $child_class_array = explode(',', $child_class_string);
            foreach ($child_class_array as $child_class) {
                $class_list[$key]['text'] .= $goods_class_array[$child_class]['gc_name'] . '/';
            }

            $class_list[$key]['text'] = rtrim($class_list[$key]['text'], '/');
            $condition['gc_id_1'] = $class_list[$key]['gc_id'];
//            $field = 'goods_name,gc_id,goods_marketprice,goods_price,goods_promotion_price,goods_promotion_type';

			/**
			 * 获取品牌街未关闭的店铺的商品列表
			 */
           // $goodsList = $model_goods->getStoreOpenGoodsList($condition, $field,  'rand()', $limit = 0, 6);
            $goodsList = $model_goods->getStoreOpenGoodsList($condition);
			
			if(!empty($goodsList)) {
				
				foreach($goodsList as $k => $v) {
					
					if($_SESSION['is_login']) {
						
						$checkCmsLike = Model() -> table('cms_like') -> where(array(like_object_id => $v['goods_id'], like_member_id => $_SESSION['member_id'])) -> select();
						if(!empty($checkCmsLike)) {
							
							$v['style_class'] = "style='color:red'";
							
						} else {
							
							$v['style_class'] = "";
							
						}
						
					} else {
						
						$v['style_class'] = "";
						
					}
					
					if($class_list_num == 1) {
						
						$one_goods_list_array[$one_goods_list_num] = $v;
						$one_goods_list_num++;
						
					} else {
						
						$goods_list_array[$goods_list_num] = $v;
						$goods_list_num++;
						
					}
					
					
				}
				
				unset($k, $v);
				
			}
			
            $class_list[$key]['goods_list'] = $model_goods->getGoodsList($condition, $field,  'rand()', $limit = 0, 6);
            $class_list[$key]['goods_salenum'] = $model_goods->getGoodsList($condition, $field,  'rand()', $limit = 0, 1);
            $class_list[$key]['like_count'] = $model_goods->getGoodsList($condition, $field, 'rand()', $limit = 0, 1);
            $class_list[$key]['brands_list'] = Model('brand')->getBrandPassedList(array('class_id' => $class_list[$key]['gc_id']),'*',8,'brand_pic desc');
            if (!empty($class_list[$key]['brands_list'])) {
                foreach ($class_list[$key]['brands_list'] as $bkey => $bval) {
                    $class_list[$key]['brands_list'][$bkey]['brand_pic'] = brandImage($bval['brand_pic']);
                }
            }
			$class_list_num++;
        }

        Tpl::output('class_list', $class_list);
		Tpl::output('one_goods_list_array', $one_goods_list_array);
		Tpl::output('goods_list_array', $goods_list_array);
		
		/**
		 * 登录用户关注的店铺
		 */
		$model_favorites = Model('favorites');
		$member_store = array();
		$member_store_num = 0;
			
		if($_SESSION['is_login']) {
			
			$member_id = $_SESSION['member_id'];
			//$member_favorites = $model_favorites -> where(array('store_id' => array('neq',0))) -> select();
			$member_favorites = $model_favorites  -> query("select * from wantease_favorites where store_id != 0 and fav_type = 'store' and member_id = ".$member_id);
			
			if(!empty($member_favorites)) {
				
				foreach($member_favorites as $mf_key => $mf_value) {
				
					$store_id = $mf_value['store_id'];
					$member_storeData = $store_table -> find($store_id);
					$store_state = $member_storeData['store_state'];
					
					if($store_state == 1) {
						
						$store_slide = $member_storeData['store_slide'];
						$store_slide_array = explode(',', $store_slide);
						$store_slide_array = array_filter($store_slide_array);
						$member_storeData['store_slide_array'] = $store_slide_array;
						
						$member_store[$member_store_num] = $member_storeData;
						
						$member_store_num++;
					
					}
				
				}
				
			}

			Tpl::output('member_store', $member_store);
			
			//收藏列表
			$favorites_class = Model('favorites_class');
			$favorites_class_data = Model() -> table('favorites_class') -> where(array(member_id => $member_id,favorites_class_type => 'goods')) -> select();
			Tpl::output('favorites_class_data', $favorites_class_data);
		
		}
		
		
        //品牌街对应商品
        $model_goods = Model('goods');
        $goods_list = $model_goods->getGoodsList($condition, $field = '*', $group = '', $order = '', $limit = 0, 6, $lock = false, $count = 0);

        Tpl::output('goods_list', $goods_list);
         //广告板块 新品首发
         $adv_model = Model('adv');
        $condition['ap_id'] =1056; 
        
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info1', $adv_info);
                 //广告板块 新品首发
         $adv_model = Model('adv');
        $condition['ap_id'] =1057; 
        
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info11', $adv_info);
                 //广告板块 新品首发
         $adv_model = Model('adv');
        $condition['ap_id'] =1058; 
        
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info111', $adv_info);
         //广告板块 心意宝贝
         $adv_model = Model('adv');
        $condition['ap_id'] =1065;  
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info2', $adv_info);
         //广告板块 逛橱窗
         $adv_model = Model('adv');
        $condition['ap_id'] =1113;  
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info3', $adv_info);
         //广告板块 打折优惠
         $adv_model = Model('adv');
        $condition['ap_id'] =1125;  
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info4', $adv_info);
         //广告板块 神秘礼品
         $adv_model = Model('adv');
        $condition['ap_id'] =1137;  
        $adv_info = $adv_model->getList($condition,4,4,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        Tpl::output('adv_info5', $adv_info);
        
        //设计师板块
        $model_store = Model('store');
        $condition = 'store_state = 1';
        $order = "rand()";
        $store_list = $model_store->where($condition)->order($order)->page(4)->select();
		
        //获取店铺商品数，推荐商品列表等信息
        $store_list = $model_store->getStoreSearchList($store_list);
		
        foreach ($store_list as $key => $value) {
            $store_list[$key]['search_list_goods'] = $store_list[$key]['search_list_goods'];
        }
        
        //print_r($store_list);exit();

        $statistics['store'] = Model('store')->getStoreCount(array());
        Tpl::output('store_count', $statistics['store']);
        Tpl::output('store_list', $store_list);
		
		//艺见和艺访
		/* $model_cms_article = Model('cms_article');
		$cms_article_data_1['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> order('rand()') -> where(array(article_class_id => 1)) ->limit(1) -> find();
		$cms_article_data_1['name'] = '艺访';
		
		$cms_article_data_3['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> order('rand()') -> where(array(article_class_id => 3)) ->limit(1) -> find();
		$cms_article_data_3['name'] = '艺见';
		
		Tpl::output('cms_article_data_1', $cms_article_data_1);
		Tpl::output('cms_article_data_3', $cms_article_data_3);
		
        //板块信息
        $model_web_config = Model('web_config');
        $web_html = $model_web_config->getWebHtml('index'); */
        Tpl::output('web_html', $web_html);
		
		//艺生活
		$model_cms_article = Model('cms_article');
		$cms_article_data_5['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> order('rand()') -> where(array(article_class_id => 5)) ->limit(2) -> select();
		$cms_article_data_5['name'] = '艺生活';
		Tpl::output('cms_article_data_5', $cms_article_data_5);

        Model('seo')->type('index')->show();
        //Tpl::showpage('index');
			
        Tpl::showpage('newindex');
    }
	
	/**
	 * ajax加载主页的最佳艺匠访
	 */
	public function ajaxDesignersDataOp() {
		
		//设计师板块
        $model_store = Model('store');
        $condition = 'store_state = 1';
        $store_list = $model_store->where($condition)-> page(4) -> select();
		
        //获取店铺商品数，推荐商品列表等信息
        $store_list = $model_store->getStoreSearchList($store_list);
		$sln = 0;
		
		foreach($store_list as $k => $v) {
			
			$store_list[$k]['a_href'] = urlShop('show_store', '', array('store_id' => $v['store_id']), $v['store_domain']);
			$store_list[$k]['img_src'] = getStoreLogo($v['store_banner']);
			$store_list[$k]['img_src_logo'] = getStoreLogo($v['store_avatar']);
			//$store_list[$k]['a_href'] = urlShop('show_store', '', array('store_id' => $v['store_id']), $v['store_domain']);
			$search_list_goods = $v['search_list_goods'];
			
			if($sln == 1) {
				
				$str_len = mb_strlen($v['store_name'],'utf-8');
				
				if($str_len > 10) {
					
					$store_list[$k]['store_name'] = mb_substr($v['store_name'],0,10, 'utf-8').'...';
					
				}
				
				
			} else if($sln >= 2) {
				
				$str_len = mb_strlen($v['store_name'],'utf-8');
				
				if($str_len > 5) {
					
					$store_list[$k]['store_name'] = mb_substr($v['store_name'],0,5, 'utf-8').'...';
					
				}
				
				
			}
			
			if($_SESSION['is_login']) { 
			
				$store_list[$k]['onclick_function'] = "meberKeepStore(" . $v['store_id'] . ", this)";
			 
			} else {
				
				$store_list[$k]['onclick_function'] = "promptLogin(this)";
				
			}
			
			foreach($search_list_goods as $k1 => $v1) {
				
				$store_list[$k]['search_list_goods'][$k1]['img_src'] = thumb($v1);
				$store_list[$k]['search_list_goods'][$k1]['goods_href'] = urlShop('goods', 'index', array('goods_id' => $v1['goods_id']));
			}
			
			$sln++;
			
		}
		
		$cms_article_data['data'] = $store_list;
		
		$page_array = $model_store -> showpage(6);
		$cms_article_data['page'] = $page_array;
		
		echo json_encode($cms_article_data, JSON_UNESCAPED_UNICODE);
		
	}
	
	/**
	 * ajax加载主页的艺见和艺访
	 */
	public function ajaxLoadDataOp() {
		
		$model_cms_article = Model('cms_article');
		$data = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $_GET['article_class_id'])) -> page(1) -> select();
		
		foreach($data as $k => $v) {
			
			$img_src = C('new_index_url').DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS. $v['article_publisher_id'].DS.unserialize($v['article_image'])['name'];
			
			if($_GET['article_class_id'] == 1) {
				
				$data[$k]['article_title'] = mb_substr($v['article_title'],0,8, 'utf-8').'...';
				$data[$k]['article_abstract'] = mb_substr($v['article_abstract'],0,20, 'utf-8').'...';
				
			}
			
			$data[$k]['img_src'] = $img_src;
			$data[$k]['a_href'] =  getCMSArticleUrl($v['article_id']);
			
		}
		
		$cms_article_data['data'] = $data;
		
		$page_array = $model_cms_article -> showpage(6);
		$cms_article_data['page'] = $page_array;
		
		echo json_encode($cms_article_data, JSON_UNESCAPED_UNICODE);
		
	}
	
	/**
	 * ajax收藏商品
	 * update by lizh 11:47 2016/6/30
	 * update by lizh 10:35 2016/7/4
	 */
	public function meberKeepGoodsOp() {

		$goods = Model('goods');
		$store = Model('store');
		
		$goods_id = $_GET['goods_id'];
		$member_id = $_SESSION['member_id'];
		
		if(!empty($goods_id) || !empty($member_id)) {
			
			$checkFavorites = Model() -> table('favorites') -> where(array(fav_id => $goods_id, member_id => $member_id, favorites_class_id => 0,fav_type => 'goods')) -> select();
			
			if(empty($checkFavorites)) {
				
				$goods_data = $goods -> where(array(goods_id => $goods_id)) -> find();
				$store_id = $goods_data['store_id'];
				$store_data = $store -> where(array(store_id => $store_id)) -> find();
				
				$insert_array['fav_id'] = $goods_id;
				$insert_array['member_id'] = $member_id;
				$insert_array['fav_time'] = time();
				$insert_array['fav_type'] = 'goods';
				$insert_array['goods_name'] = $goods_data['goods_name'];
				$insert_array['goods_image'] = $goods_data['goods_image'];
				$insert_array['gc_id'] = $goods_data['gc_id'];
				$insert_array['log_price'] = $goods_data['goods_price'];
				$insert_array['store_id'] = $store_id;
				$insert_array['store_name'] = $store_data['store_name'];
				$insert_array['sc_id'] = $store_data['sc_id'];
				$insert_array['favorites_class_id'] = 0;
				$result = Model() -> table('favorites') -> insert($insert_array);
				$goods_result =Model() -> table('goods') -> where(array(goods_id => $goods_id)) -> update(array(goods_collect => array('exp', 'goods_collect+1')));
				echo json_encode(array(status => 1, info => '收藏成功'), JSON_UNESCAPED_UNICODE);
				
			} else {
				
				echo json_encode(array(status => 1, info => '商品已收藏'), JSON_UNESCAPED_UNICODE);
				
			}

		}
		
	}
	
	/**
	 * ajax关注店铺
	 * update by lizh 10:35 2016/7/4
	 * update by lizh 16:02 2016/7/4
	 */
	public function meberKeepStoreOp() {

		$goods = Model('goods');
		$store = Model('store');
		
		$store_id = $_GET['store_id'];
		$member_id = $_SESSION['member_id'];
		
		if(!empty($store_id) || !empty($member_id)) {
			
			$checkFavorites = Model() -> table('favorites') -> where(array(fav_id => $store_id, member_id => $member_id,fav_type => 'store')) -> select();
			
			if(empty($checkFavorites)) {

				$store_data = $store -> where(array(store_id => $store_id)) -> find();
				
				$insert_array['fav_id'] = $store_id;
				$insert_array['member_id'] = $member_id;
				$insert_array['fav_time'] = time();
				$insert_array['fav_type'] = 'store';
				//$insert_array['goods_name'] = $goods_data['goods_name'];
				//$insert_array['goods_image'] = $goods_data['goods_image'];
				$insert_array['gc_id'] = 0;
				$insert_array['log_price'] = '0.00';
				$insert_array['store_id'] = $store_id;
				$insert_array['store_name'] = $store_data['store_name'];
				$insert_array['sc_id'] = $store_data['sc_id'];
				
				$result = Model() -> table('favorites') -> insert($insert_array);
				$member_favorites_data = Model() -> table('favorites') -> where(array(log_id => $result)) -> select();
                           
				$member_store = array();
                if(!empty($member_favorites_data)) {
                                
					$store_table = Model('store');
					$member_store_num = 0;
					
					foreach($member_favorites_data as $mf_key => $mf_value) {
	
						$store_id = $mf_value['store_id'];
						$member_storeData = $store_table -> find($store_id);
						$store_state = $member_storeData['store_state'];

						if($store_state == 1) {

							$store_slide = $member_storeData['store_slide'];
							$store_slide_array = explode(',', $store_slide);
							$store_slide_array = array_filter($store_slide_array);
							$member_storeData['store_slide_array'] = $store_slide_array;

							$member_store[$member_store_num] = $member_storeData;
							$member_store[$member_store_num]['img_src'] = getStoreLogo($member_storeData['store_avatar']);
							$member_store_num++;

						}
	
					}
                                
                }
                            
				if(empty($member_store)) {
					
					$member_store = null;
					
				}
				
				echo json_encode(array(status => 1, info => '成功关注店铺', member_favorites_data => $member_store), JSON_UNESCAPED_UNICODE);
				
			} else {
				
				$member_store = null;
				echo json_encode(array(status => 1, info => '店铺已关注', member_favorites_data => $member_store), JSON_UNESCAPED_UNICODE);
				
			}

		}
		
	}
	
	/**
	 * ajax商品点赞
	 */
	public function meberLikeGoodsOp() {

		$goods = Model('goods');
		$store = Model('store');
		
		$goods_id = $_GET['goods_id'];
		$member_id = $_SESSION['member_id'];
		
		if(!empty($goods_id) || !empty($member_id)) {
			
			$checkCmsLike = Model() -> table('cms_like') -> where(array(like_object_id => $goods_id, like_member_id => $member_id)) -> select();
			
			if(empty($checkCmsLike)) {

				$store_data = $store -> where(array(store_id => $store_id)) -> find();
				
				$insert_array['like_object_id'] = $goods_id;
				$insert_array['like_member_id'] = $member_id;
				$insert_array['like_time'] = time();
				
				$result = Model() -> table('cms_like') -> insert($insert_array);
				echo json_encode(array(status => 1, info => '点赞成功'), JSON_UNESCAPED_UNICODE);
				
			} else {
				
				echo json_encode(array(status => 1, info => '商品已点赞'), JSON_UNESCAPED_UNICODE);
				
			}

		}
		
	}
	
	/**
	 * ajax创建收藏分类列表
	 */
	public function createKeepGoodsClassListOp() {
		
		$favorites_class = Model('favorites_class');
		$favorites_class_name = $_GET['favorites_class_name'];
		$member_id = $_SESSION['member_id'];
		
		if(!empty($favorites_class_name) && !empty($member_id)) {
			
			$favorites_class_data = $favorites_class -> where(array(favorites_class_name => $favorites_class_name, member_id => $member_id,favorites_class_type => 'goods')) -> select();
			
			if(empty($favorites_class_data)) {
				
				$insert_array['favorites_class_name'] = $favorites_class_name;
				$insert_array['member_id'] = $member_id;
				$insert_array['create_time'] = time();
				$insert_array['favorites_class_type'] = 'goods';
				
				$result = $favorites_class -> insert($insert_array);
				$data = $favorites_class -> where(array(member_id => $member_id, favorites_class_type => 'goods')) -> select();
				echo json_encode(array(status => 1, info => $data, div_id => $_GET['div_id'], goods_id => $_GET['goods_id']), JSON_UNESCAPED_UNICODE);

			} else {
				
				echo json_encode(array(status => 0, info => '分类名无法重复'), JSON_UNESCAPED_UNICODE);
				
			}	
			
		} else {
			
			echo json_encode(array(status => 0, info => '未输入分类名'), JSON_UNESCAPED_UNICODE);
			
		}
		
	}
	
	/**
	 * ajax收藏商品到收藏的分类
	 * update by lizh 11:48 2016/6/30
	 * update by lizh 10:35 2016/7/4
	 */
	public function selectKeepGoodsClassOp() {
		
		$goods = Model('goods');
		$store = Model('store');
		
		$goods_id = $_GET['goods_id'];
		$favorites_class_id = $_GET['favorites_class_id'];
		$member_id = $_SESSION['member_id'];
		
		if(!empty($goods_id) || !empty($member_id)) {
			
			$checkFavorites = Model() -> table('favorites') -> where(array(fav_id => $goods_id, member_id => $member_id, favorites_class_id => $favorites_class_id,fav_type => 'goods')) -> select();
			
			if(empty($checkFavorites)) {
				
				$goods_data = $goods -> where(array(goods_id => $goods_id)) -> find();
				$store_id = $goods_data['store_id'];
				$store_data = $store -> where(array(store_id => $store_id)) -> find();
				
				$insert_array['fav_id'] = $goods_id;
				$insert_array['favorites_class_id'] = $favorites_class_id;
				$insert_array['member_id'] = $member_id;
				$insert_array['fav_time'] = time();
				$insert_array['fav_type'] = 'goods';
				$insert_array['goods_name'] = $goods_data['goods_name'];
				$insert_array['goods_image'] = $goods_data['goods_image'];
				$insert_array['gc_id'] = $goods_data['gc_id'];
				$insert_array['log_price'] = $goods_data['goods_price'];
				$insert_array['store_id'] = $store_id;
				$insert_array['store_name'] = $store_data['store_name'];
				$insert_array['sc_id'] = $store_data['sc_id'];
				
				$result = Model() -> table('favorites') -> insert($insert_array);
				$goods_result =Model() -> table('goods') -> where(array(goods_id => $goods_id)) -> update(array(goods_collect => array('exp', 'goods_collect+1')));
				echo json_encode(array(status => 1, info => '收藏成功'), JSON_UNESCAPED_UNICODE);
				
			} else {
				
				echo json_encode(array(status => 1, info => '商品已收藏'), JSON_UNESCAPED_UNICODE);
				
			}

		}
		
	}
	
	//艺圈
	public function cmsOp() {
		
		$model_cms_article_class = Model('cms_article_class');
		$model_cms_article = Model('cms_article');
		
		$cms_article_class_data = $model_cms_article_class -> select();
		
		foreach($cms_article_class_data as $kArticleClass => $vArticleClass) {
			
			$article_class_id = $vArticleClass['class_id'];
			
			if($article_class_id == 1) {
				
				$cms_article_data_1['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $article_class_id)) ->order('rand()') -> limit(5) -> select();
				$cms_article_data_1['name'] = $vArticleClass['class_name'];
				$cms_article_data_1['class_id'] = $vArticleClass['class_id'];
				
			}
			
			if($article_class_id == 3) {
				
				$cms_article_data_3['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $article_class_id)) ->order('rand()') ->  limit(6) -> select();
				$cms_article_data_3['name'] = $vArticleClass['class_name'];
				$cms_article_data_3['class_id'] = $vArticleClass['class_id'];
				
			}
			
			if($article_class_id == 6) {
				
				$cms_article_data_6['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $article_class_id)) ->order('rand()') ->  limit(3) -> select();
				$cms_article_data_6['name'] = $vArticleClass['class_name'];
				$cms_article_data_6['class_id'] = $vArticleClass['class_id'];
				
			}
			
			if($article_class_id == 5) {
				
				$cms_article_data_5['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $article_class_id)) ->order('rand()') ->  limit(4) -> select();
				$cms_article_data_5['name'] = $vArticleClass['class_name'];
				$cms_article_data_5['class_id'] = $vArticleClass['class_id'];
				
			}
			
			if($article_class_id == 4) {
				
				$cms_article_data_4['data'] = $model_cms_article -> field('article_id, article_publisher_id,article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $article_class_id)) ->order('rand()') ->  limit(4) -> select();
				$cms_article_data_4['name'] = $vArticleClass['class_name'];
				$cms_article_data_4['class_id'] = $vArticleClass['class_id'];
				
			}
			
		}
		
	
		/* foreach($cms_article_data_3['data'] as $key => $value) {
			
			echo $article_url = getCMSArticleUrl($value['article_id']);exit; 
			
		} */
		
		Tpl::output('cms_article_data_1', $cms_article_data_1);
		Tpl::output('cms_article_data_6', $cms_article_data_6);
		Tpl::output('cms_article_data_3', $cms_article_data_3);
		Tpl::output('cms_article_data_4', $cms_article_data_4);
		Tpl::output('cms_article_data_5', $cms_article_data_5);
		
		Tpl::showpage('yiquanye');
		
	}
	
	//更多艺全坊
    public function moreCmsOp() {
        
        $class_id = $_GET['class_id'];
        if(empty($class_id)) {
            
            $class_id = 1;
            
        }
        
        $model_cms_article_class = Model('cms_article_class');
        $model_cms_article = Model('cms_article');
        
        $cms_article_class_data = $model_cms_article_class -> where(array(class_id => $class_id)) -> find();
        $cms_article_data_all['data'] = $model_cms_article -> field('article_id, article_publisher_id, article_title, article_abstract, article_publish_time, article_click, article_image') -> where(array(article_class_id => $class_id)) -> select();
        $cms_article_data_all['name'] = $cms_article_class_data['class_name'];
        $cms_article_data_all['class_id'] = $cms_article_class_data['class_id'];
        
        Tpl::output('cms_article_data_all', $cms_article_data_all);

        Tpl::showpage('yiquanye_more');

    }

    //json输出商品分类
    public function josn_classOp() {
        /**
         * 实例化商品分类模型
         */
        $model_class = Model('goods_class');
        $goods_class = $model_class->getGoodsClassListByParentId(intval($_GET['gc_id']));
        $array = array();
        if (is_array($goods_class) and count($goods_class) > 0) {
            foreach ($goods_class as $val) {
                $array[$val['gc_id']] = array('gc_id' => $val['gc_id'], 'gc_name' => htmlspecialchars($val['gc_name']), 'gc_parent_id' => $val['gc_parent_id'], 'commis_rate' => $val['commis_rate'], 'gc_sort' => $val['gc_sort']);
            }
        }
        /**
         * 转码
         */
        if (strtoupper(CHARSET) == 'GBK') {
            $array = Language::getUTF8(array_values($array)); //网站GBK使用编码时,转换为UTF-8,防止json输出汉字问题
        } else {
            $array = array_values($array);
        }
        echo $_GET['callback'] . '(' . json_encode($array) . ')';
    }

    //闲置物品地区json输出
    public function flea_areaOp() {
        if (intval($_GET['check']) > 0) {
            $_GET['area_id'] = $_GET['region_id'];
        }
        if (intval($_GET['area_id']) == 0) {
            return;
        }
        $model_area = Model('flea_area');
        $area_array = $model_area->getListArea(array('flea_area_parent_id' => intval($_GET['area_id'])), 'flea_area_sort desc');
        $array = array();
        if (is_array($area_array) and count($area_array) > 0) {
            foreach ($area_array as $val) {
                $array[$val['flea_area_id']] = array('flea_area_id' => $val['flea_area_id'], 'flea_area_name' => htmlspecialchars($val['flea_area_name']), 'flea_area_parent_id' => $val['flea_area_parent_id'], 'flea_area_sort' => $val['flea_area_sort']);
            }
            /**
             * 转码
             */
            if (strtoupper(CHARSET) == 'GBK') {
                $array = Language::getUTF8(array_values($array)); //网站GBK使用编码时,转换为UTF-8,防止json输出汉字问题
            } else {
                $array = array_values($array);
            }
        }
        if (intval($_GET['check']) > 0) {//判断当前地区是否为最后一级
            if (!empty($array) && is_array($array)) {
                echo 'false';
            } else {
                echo 'true';
            }
        } else {
            echo json_encode($array);
        }
    }

    //json输出闲置物品分类
    public function josn_flea_classOp() {
        /**
         * 实例化商品分类模型
         */
        $model_class = Model('flea_class');
        $goods_class = $model_class->getClassList(array('gc_parent_id' => intval($_GET['gc_id'])));
        $array = array();
        if (is_array($goods_class) and count($goods_class) > 0) {
            foreach ($goods_class as $val) {
                $array[$val['gc_id']] = array('gc_id' => $val['gc_id'], 'gc_name' => htmlspecialchars($val['gc_name']), 'gc_parent_id' => $val['gc_parent_id'], 'gc_sort' => $val['gc_sort']);
            }
        }
        /**
         * 转码
         */
        if (strtoupper(CHARSET) == 'GBK') {
            $array = Language::getUTF8(array_values($array)); //网站GBK使用编码时,转换为UTF-8,防止json输出汉字问题
        } else {
            $array = array_values($array);
        }
        echo json_encode($array);
    }

    /**
     * json输出地址数组 原data/resource/js/area_array.js
     */
    public function json_areaOp() {
        echo $_GET['callback'] . '(' . json_encode(Model('area')->getAreaArrayForJson()) . ')';
    }

    //判断是否登录
    public function loginOp() {
        echo ($_SESSION['is_login'] == '1') ? '1' : '0';
    }

    /**
     * 头部最近浏览的商品
     */
    public function viewed_infoOp() {
        $info = array();
        if ($_SESSION['is_login'] == '1') {
            $member_id = $_SESSION['member_id'];
            $info['m_id'] = $member_id;
            if (C('voucher_allow') == 1) {
                $time_to = time(); //当前日期
                $info['voucher'] = Model()->table('voucher')->where(array('voucher_owner_id' => $member_id, 'voucher_state' => 1,
                            'voucher_start_date' => array('elt', $time_to), 'voucher_end_date' => array('egt', $time_to)))->count();
            }
            $time_to = strtotime(date('Y-m-d')); //当前日期
            $time_from = date('Y-m-d', ($time_to - 60 * 60 * 24 * 7)); //7天前
            $info['consult'] = Model()->table('consult')->where(array('member_id' => $member_id,
                        'consult_reply_time' => array(array('gt', strtotime($time_from)), array('lt', $time_to + 60 * 60 * 24), 'and')))->count();
        }
        $goods_list = Model('goods_browse')->getViewedGoodsList($_SESSION['member_id'], 5);
        if (is_array($goods_list) && !empty($goods_list)) {
            $viewed_goods = array();
            foreach ($goods_list as $key => $val) {
                $goods_id = $val['goods_id'];
                $val['url'] = urlShop('goods', 'index', array('goods_id' => $goods_id));
                $val['goods_image'] = thumb($val, 60);
                $viewed_goods[$goods_id] = $val;
            }
            $info['viewed_goods'] = $viewed_goods;
        }
        if (strtoupper(CHARSET) == 'GBK') {
            $info = Language::getUTF8($info);
        }
        echo json_encode($info);
    }

    /**
     * 查询每月的周数组
     */
    public function getweekofmonthOp() {
        import('function.datehelper');
        $year = $_GET['y'];
        $month = $_GET['m'];
        $week_arr = getMonthWeekArr($year, $month);
        echo json_encode($week_arr);
        die;
    }

}

<?php
/**
 * 商品列表
 *
 ***/


defined('InShopNC') or exit('Access Invalid!');

class searchControl extends BaseHomeControl {


    //每页显示商品数
    const PAGESIZE = 40;

    //模型对象
    private $_model_search;

    public function indexOp() {
        Language::read('home_goods_class_index');
        $this->_model_search = Model('search');
        //显示左侧分类
        //默认分类，从而显示相应的属性和品牌
        $default_classid = intval($_GET['cate_id']);
        if (intval($_GET['cate_id']) > 0) {
            $goods_class_array = $this->_model_search->getLeftCategory_new(array($_GET['cate_id']));
			
        } elseif ($_GET['keyword'] != '') {
            //从TAG中查找分类
            $goods_class_array = $this->_model_search->getTagCategory($_GET['keyword']);
            //取出第一个分类作为默认分类，从而显示相应的属性和品牌
            $default_classid = $goods_class_array[0];
            $goods_class_array = $this->_model_search->getLeftCategory_new($goods_class_array, 1);;
        }
		
		$all_goods_class_array = Model('goods_class') -> where(array(gc_parent_id => 0)) -> select();
		
		Tpl::output('all_goods_class_array', $all_goods_class_array);
		Tpl::output('goods_class_array', $goods_class_array);
        Tpl::output('default_classid', $default_classid);

        //优先从全文索引库里查找
        list($indexer_ids,$indexer_count) = $this->_model_search->indexerSearch($_GET,self::PAGESIZE);

        //获得经过属性过滤的商品信息
        list($goods_param, $brand_array, $attr_array, $checked_brand, $checked_attr) = $this->_model_search->getAttr($_GET, $default_classid);
        Tpl::output('brand_array', $brand_array);
        Tpl::output('attr_array', $attr_array);
        Tpl::output('checked_brand', $checked_brand);
        Tpl::output('checked_attr', $checked_attr);

        //处理排序
        $order = 'is_own_shop desc,goods_id desc';
        if (in_array($_GET['key'],array('1','2','3'))) {
            $sequence = $_GET['order'] == '1' ? 'asc' : 'desc';
            $order = str_replace(array('1','2','3'), array('goods_salenum','goods_click','goods_promotion_price'), $_GET['key']);
            $order .= ' '.$sequence;
        }
        $model_goods = Model('goods');
        // 字段
        $fields = "goods_id,brand_id,goods_commonid,goods_name,goods_jingle,gc_id,store_id,store_name,goods_price,goods_promotion_price,goods_promotion_type,goods_marketprice,goods_storage,goods_image,goods_freight,goods_salenum,color_id,evaluation_good_star,evaluation_count,is_virtual,is_fcode,is_appoint,is_presell,have_gift";

        $condition = array();
        if (is_array($indexer_ids)) {

            //商品主键搜索
            $condition['goods_id'] = array('in',$indexer_ids);
            $goods_list = $model_goods->getGoodsOnlineList($condition, $fields, 0, $order, self::PAGESIZE, null, false);
			
			foreach($goods_list as $kgl => $vgl) {
				
				$store_id = $vgl['store_id'];
				$store_data = Model('store') -> where(array(store_id => $store_id)) -> find();
				$store_state = $store_data['store_state'];
				
				if($store_state == 0 || $store_state == 2) {
					
					unset($goods_list[$kgl]);
					continue;
					
				}
				
				$brand_id = $vgl['brand_id'];
				if(empty($brand_id)) {
					
					$goods_list[$kgl]['brand_name'] = "";
					
				} else {
					
					$brand_name = Model('brand') -> field('brand_name') -> where(array(brand_id => $brand_id)) -> find();
					$goods_list[$kgl]['brand_name'] = $brand_name['brand_name'];

				}

				$goods_id = $vgl['goods_id'];
				$goods_like_count = Model('cms_like') -> where(array(like_object_id => $goods_id)) -> count();
				$goods_list[$kgl]['goods_like_count'] = $goods_like_count;
				
			}
			
            //如果有商品下架等情况，则删除下架商品的搜索索引信息
            if (count($goods_list) != count($indexer_ids)) {
                $this->_model_search->delInvalidGoods($goods_list, $indexer_ids);
            }

            pagecmd('setEachNum',self::PAGESIZE);
            pagecmd('setTotalNum',$indexer_count);

        } else {
            //执行正常搜索
            if (isset($goods_param['class'])) {
                $condition['gc_id_'.$goods_param['class']['depth']] = $goods_param['class']['gc_id'];
            }
            if (intval($_GET['b_id']) > 0) {
                $condition['brand_id'] = intval($_GET['b_id']);
            }
            if ($_GET['keyword'] != '') {
                $condition['goods_name|goods_jingle'] = array('like', '%' . $_GET['keyword'] . '%');
            }   
            if (intval($_GET['area_id']) > 0) {
                $condition['areaid_1'] = intval($_GET['area_id']);
            }
            if ($_GET['type'] == 1) {
                $condition['is_own_shop'] = 1;
            }
            if ($_GET['gift'] == 1) {
                $condition['have_gift'] = 1;
            }
            if (isset($goods_param['goodsid_array'])){
                $condition['goods_id'] = array('in', $goods_param['goodsid_array']);
            }
            $goods_list = $model_goods->getGoodsListByColorDistinct($condition, $fields, $order, self::PAGESIZE);
			foreach($goods_list as $kgl => $vgl) {
				
				$store_id = $vgl['store_id'];
				$store_data = Model('store') -> where(array(store_id => $store_id)) -> find();
				$store_state = $store_data['store_state'];
				
				if($store_state == 0 || $store_state == 2) {
					
					unset($goods_list[$kgl]);
					continue;
					
				}
				
				$brand_id = $vgl['brand_id'];
				if(empty($brand_id)) {
					
					$goods_list[$kgl]['brand_name'] = "";
					
				} else {
					
					$brand_name = Model('brand') -> field('brand_name') -> where(array(brand_id => $brand_id)) -> find();
					$goods_list[$kgl]['brand_name'] = $brand_name['brand_name'];

				}

				$goods_id = $vgl['goods_id'];
				$goods_like_count = Model('cms_like') -> where(array(like_object_id => $goods_id)) -> count();
				$goods_list[$kgl]['goods_like_count'] = $goods_like_count;

			}
		
		}
        
        Tpl::output('show_page1', $model_goods->showpage(4));
        Tpl::output('show_page', $model_goods->showpage(7));

        // 商品多图
        if (!empty($goods_list)) {
            $commonid_array = array(); // 商品公共id数组
            $storeid_array = array();       // 店铺id数组
            foreach ($goods_list as $value) {
                $commonid_array[] = $value['goods_commonid'];
                $storeid_array[] = $value['store_id'];
            }
            $commonid_array = array_unique($commonid_array);
            $storeid_array = array_unique($storeid_array);

            // 商品多图
            $goodsimage_more = Model('goods')->getGoodsImageList(array('goods_commonid' => array('in', $commonid_array)));
			
			

            // 店铺
            $store_list = Model('store')->getStoreMemberIDList($storeid_array);
            //搜索的关键字
            $search_keyword = trim($_GET['keyword']);
            foreach ($goods_list as $key => $value) {
                // 商品多图
				//zmr>v30
				$n=0;
                foreach ($goodsimage_more as $v) {
                    if ($value['goods_commonid'] == $v['goods_commonid'] && $value['store_id'] == $v['store_id'] && $value['color_id'] == $v['color_id']) {
						$n++;
						$goods_list[$key]['image'][] = $v;
						if($n>=5)break;
                    }
                }
				
                // 店铺的开店会员编号
                $store_id = $value['store_id'];
                $goods_list[$key]['member_id'] = $store_list[$store_id]['member_id'];
                $goods_list[$key]['store_domain'] = $store_list[$store_id]['store_domain'];
                //将关键字置红
                if ($search_keyword){
                    $goods_list[$key]['goods_name_highlight'] = str_replace($search_keyword,'<font style="color:#f00;">'.$search_keyword.'</font>',$value['goods_name']);
                } else {
                    $goods_list[$key]['goods_name_highlight'] = $value['goods_name'];
                }
            }
        }
        Tpl::output('goods_list', $goods_list);
        if ($_GET['keyword'] != ''){
            Tpl::output('show_keyword',  $_GET['keyword']);
        } else {
            Tpl::output('show_keyword',  $goods_param['class']['gc_name']);
        }

        $model_goods_class = Model('goods_class');

        // SEO
        if ($_GET['keyword'] == '') {
            $seo_class_name = $goods_param['class']['gc_name'];
            if (is_numeric($_GET['cate_id']) && empty($_GET['keyword'])) {
                $seo_info = $model_goods_class->getKeyWords(intval($_GET['cate_id']));
                if (empty($seo_info[1])) {
                    $seo_info[1] = C('site_name') . ' - ' . $seo_class_name;
                }
                Model('seo')->type($seo_info)->param(array('name' => $seo_class_name))->show();
            }
        } elseif ($_GET['keyword'] != '') {
            Tpl::output('html_title', (empty($_GET['keyword']) ? '' : $_GET['keyword'] . ' - ') . C('site_name') . L('nc_common_search'));
        }

        // 当前位置导航
        $nav_link_list = $model_goods_class->getGoodsClassNav(intval($_GET['cate_id']));
        Tpl::output('nav_link_list', $nav_link_list );

        // 得到自定义导航信息
        $nav_id = intval($_GET['nav_id']) ? intval($_GET['nav_id']) : 0;
        Tpl::output('index_sign', $nav_id);

        // 地区
        $province_array = Model('area')->getTopLevelAreas();
        Tpl::output('province_array', $province_array);

        loadfunc('search');

        // 浏览过的商品
        $viewed_goods = Model('goods_browse')->getViewedGoodsList($_SESSION['member_id'],20);
        Tpl::output('viewed_goods',$viewed_goods);
        //Tpl::showpage('search');
       if($_GET['keyword'] != '') {
			
			Tpl::showpage('yiwu');
			
		} else {
			
			Tpl::showpage('fenleiye');
			
		}
    }
	
	 /**
     * 获取客户端IP
     */
    private function getIP() { 
   
        if (getenv("HTTP_CLIENT_IP")) 
            $ip = getenv("HTTP_CLIENT_IP"); 
        else if(getenv("HTTP_X_FORWARDED_FOR")) 
            $ip = getenv("HTTP_X_FORWARDED_FOR"); 
        else if(getenv("REMOTE_ADDR")) 
            $ip = getenv("REMOTE_ADDR"); 
        else 
            $ip = "Unknow"; 

        return $ip; 
    }
    
    /**
     * 获取IP所在地理位置
     * province : 省份
     */
    private function getIpLookup() {
        
        $ip = $this ->getIP();
        
        if(empty($ip)){
            
          return "Unknow";
          
        }
        
        $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);  
       
        if(empty($res)){ 
            
            return "Unknow";
            
        }
        
        $jsonMatches = array();  
        preg_match('#\{.+?\}#', $res, $jsonMatches);  
        
        if(!isset($jsonMatches[0])){ 
            
            return "Unknow";
            
        }
        
        $json = json_decode($jsonMatches[0], true);  
        if(isset($json['ret']) && $json['ret'] == 1){  
          
            $json['ip'] = $ip;  
            unset($json['ret']);  
        
          
        } else {  
          
            return "Unknow";
            
        }
        
        return $json['province'];  
 
    } 
	
	 /**
     * 获取所有品牌
	 * update by lizh 11:34 2016/7/2
     */
    public function allpinpaiOp() {
		
		Language::read('home_goods_class_index');
        $model_store = Model('store');
        if(!empty($_GET['value'])) {
            
            $condition = 'store_name like "%'.$_GET['value'].'%" and store_state = 1 and sc_id = 11';
            
        } else {
            
            $condition = 'store_state = 1 and sc_id = 11';
            
        }
        //处理排序
        $order = 'store_sort asc';
        
        $store_list = $model_store->where($condition)-> order($order) -> page(10) -> select();
		
        //获取店铺商品数，推荐商品列表等信息
        $store_list = $model_store->getStoreSearchList($store_list);
        
        //信用度排序
        if($_GET['key'] == 'store_credit') {
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'store_credit_average');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'store_credit_average');
            }
        }else if($_GET['key'] == 'store_sales') {//销量排行
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'num_sales_jq');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'num_sales_jq');
            }
        } else if($_GET['key'] == 'store_click') {
            
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'store_click');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'store_click');
            }
            
        }

        foreach($store_list as $k => $v) {

            $store_list[$k]['a_href'] = urlShop('show_store', '', array('store_id' => $v['store_id']), $v['store_domain']);
            $store_list[$k]['img_src'] = getStoreLogo($v['store_banner']);
            $store_list[$k]['img_src_logo'] = getStoreLogo($v['store_avatar']);
            //$store_list[$k]['a_href'] = urlShop('show_store', '', array('store_id' => $v['store_id']), $v['store_domain']);
            $search_list_goods = $v['search_list_goods'];
			
			$str_len = mb_strlen($v['store_name'],'utf-8');
			if($str_len > 10) {
				
				$store_list[$k]['store_name'] = mb_substr($v['store_name'],0,10, 'utf-8').'...';
				
			}
            
            foreach($search_list_goods as $k1 => $v1) {

                $store_list[$k]['search_list_goods'][$k1]['img_src'] = thumb($v1);

            }

        }
		
		
        $show_page = $model_store -> showpage(7);

        Tpl::output('store_list', $store_list);
        Tpl::output('show_page', $show_page);
        Tpl::showpage('pinpai');
     	
    }
	
	/**
     * 获取所有艺物
     */
    public function allyiwuOp() {
        
        Language::read('home_goods_class_index');
        $model_goods = Model('goods');

        //处理排序
        $order = 'is_own_shop desc,goods_id desc';
        if (in_array($_GET['key'],array('1','2','3'))) {
            
			$province = $this -> getIpLookup();
            if($province == 'Unknow') {

                $province = '广东';

            }
            $currentAddress = 'INSTR(area_info,'. '"'.$province.'"'.')';
			
            $sequence = $_GET['order'] == '1' ? 'asc' : 'desc';
            $order = str_replace(array('1','2','3'), array('goods_salenum','goods_click',$currentAddress), $_GET['key']);
            $order .= ' '.$sequence;
        
        }
        
        if($_GET['key'] == 3) {
            
            // 字段
            $fields = "goods.goods_id, goods.brand_id, goods.goods_commonid, goods.goods_name, goods.goods_jingle, goods.gc_id, goods.store_id, goods.store_name, goods.goods_price, goods.goods_promotion_price, goods.goods_promotion_type, goods.goods_marketprice, goods.goods_storage, goods.goods_image, goods.goods_freight, goods.goods_salenum, goods.color_id, goods.evaluation_good_star, goods.evaluation_count, goods.is_virtual, goods.is_fcode, goods.is_appoint, goods.is_presell, goods.have_gift";
            $goods_list = $model_goods->getGoodsListByAddressOrder(array(), $fields, $order, self::PAGESIZE);
            
        } else {
            
            // 字段
            $fields = "goods_id,brand_id,goods_commonid,goods_name,goods_jingle,gc_id,store_id,store_name,goods_price,goods_promotion_price,goods_promotion_type,goods_marketprice,goods_storage,goods_image,goods_freight,goods_salenum,color_id,evaluation_good_star,evaluation_count,is_virtual,is_fcode,is_appoint,is_presell,have_gift";
            $goods_list = $model_goods->getGoodsListByColorDistinct(array(), $fields, $order, self::PAGESIZE);
            
        }
        foreach($goods_list as $kgl => $vgl) {

            $store_id = $vgl['store_id'];
            $store_data = Model('store') -> where(array(store_id => $store_id)) -> find();
            $store_state = $store_data['store_state'];

            if($store_state == 0 || $store_state == 2) {

                unset($goods_list[$kgl]);
				continue;
				
            }
			
			$brand_id = $vgl['brand_id'];
			if(empty($brand_id)) {
					
				$goods_list[$kgl]['brand_name'] = "";
					
			} else {
					
				$brand_name = Model('brand') -> field('brand_name') -> where(array(brand_id => $brand_id)) -> find();
				$goods_list[$kgl]['brand_name'] = $brand_name['brand_name'];

			}

			$goods_id = $vgl['goods_id'];
			$goods_like_count = Model('cms_like') -> where(array(like_object_id => $goods_id)) -> count();
			$goods_list[$kgl]['goods_like_count'] = $goods_like_count;
				
        }
        
        // 商品多图
        if (!empty($goods_list)) {
            $commonid_array = array(); // 商品公共id数组
            $storeid_array = array();       // 店铺id数组
            foreach ($goods_list as $value) {
                $commonid_array[] = $value['goods_commonid'];
                $storeid_array[] = $value['store_id'];
            }
            $commonid_array = array_unique($commonid_array);
            $storeid_array = array_unique($storeid_array);

            // 商品多图
            $goodsimage_more = Model('goods')->getGoodsImageList(array('goods_commonid' => array('in', $commonid_array)));

            // 店铺
            $store_list = Model('store')->getStoreMemberIDList($storeid_array);
         
            foreach ($goods_list as $key => $value) {
                // 商品多图
                //zmr>v30
                $n=0;
                foreach ($goodsimage_more as $v) {
                    if ($value['goods_commonid'] == $v['goods_commonid'] && $value['store_id'] == $v['store_id'] && $value['color_id'] == $v['color_id']) {
                        $n++;
                        $goods_list[$key]['image'][] = $v;
                        if($n>=5) {
                            break;
                        }
                    }
                }
				
                // 店铺的开店会员编号
                $store_id = $value['store_id'];
                $goods_list[$key]['member_id'] = $store_list[$store_id]['member_id'];
                $goods_list[$key]['store_domain'] = $store_list[$store_id]['store_domain'];
                $goods_list[$key]['goods_name_highlight'] = $value['goods_name'];
                
            }
        }
        
        loadfunc('search');
        Tpl::output('goods_list', $goods_list);
        Tpl::output('show_page', $model_goods->showpage(7));
        Tpl::showpage('yiwu');
    
    }
	
	/**
     * 获取所有匠造
	 * update by lizh 11:35 2016/7/2
     */
    public function alljiangzaoOp(){

        //读取语言包
        Language::read('home_goods_class_index');	
        $lang = Language::getLangContent();

        /**
         * 店铺类型
         */
        $all_goods_class_array = Model('goods_class') -> where(array(gc_parent_id => 0)) -> select();
        Tpl::output('all_goods_class_array', $all_goods_class_array);

        //店铺类目快速搜索
        $class_list = ($h = F('store_class')) ? $h : rkcache('store_class',true,'file');
        if (!key_exists($_GET['cate_id'],$class_list)) $_GET['cate_id'] = 0;
        Tpl::output('class_list',$class_list);

        //店铺搜索
        $model = Model();
        $condition = array();
        $keyword = trim($_GET['keyword']);
        
        if(C('fullindexer.open') && !empty($keyword)){
            //全文搜索
            $condition = $this->full_search($keyword);
        }else{
            if ($keyword != ''){
                $condition['store_name|store_zy'] = array('like','%'.$keyword.'%');
            }

            if ($_GET['user_name'] != ''){
                $condition['member_name'] = trim($_GET['user_name']);
            }
        }
        
        if (!empty($_GET['area_info'])){
            $condition['area_info'] = array('like','%'.$_GET['area_info'].'%');
        }
        
        if ($_GET['cate_id'] > 0){
            $child = array_merge((array)$class_list[$_GET['cate_id']]['child'],array($_GET['cate_id']));
            $condition['sc_id'] = array('in',$child);
        }

        //$condition['store_state'] = 1;

        if (!in_array($_GET['order'],array('desc','asc'))){
            unset($_GET['order']);
        }
        if (!in_array($_GET['key'],array('store_sales','store_credit','store_click','address'))){
            unset($_GET['key']);
        }

        if($_GET['key'] == 'address') {
            
            $province = $this -> getIpLookup();
            if($province == 'Unknow') {

                $province = '广东';

            }
            $currentAddress = 'INSTR(area_info,'. '"'.$province.'"'.')'." ".$_GET['order'];
            
            $order = $currentAddress;
           
        } else {
            
            $order = 'store_sort asc'; 
            
        }

        if (isset($condition['store.store_id'])){
            $condition['store_id'] = $condition['store.store_id'];unset($condition['store.store_id']);
        }
        
        $condition['sc_id'] = 5;
        $condition['store_state'] = 1;
        $model_store = Model('store');
		if(!empty($_GET['value'])) {
            $value = '%'.$_GET['value'].'%';
            $condition['store_name'] = array('like',$value);
            
        }
        $store_list = $model_store->where($condition)->order($order)->page(50)->select();

        //获取店铺商品数，推荐商品列表等信息
        $store_list = $model_store->getStoreSearchList($store_list);
        //print_r($store_list);exit();
        //信用度排序
        if($_GET['key'] == 'store_credit') {
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'store_credit_average');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'store_credit_average');
            }
        }else if($_GET['key'] == 'store_sales') {//销量排行
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'num_sales_jq');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'num_sales_jq');
            }
        } else if($_GET['key'] == 'store_click') {
            
            if($_GET['order'] == 'desc') {
                $store_list = sortClass::sortArrayDesc($store_list, 'store_click');
            }else {
                $store_list = sortClass::sortArrayAsc($store_list, 'store_click');
            }
            
        }
        
        Tpl::output('store_list',$store_list);

        Tpl::output('show_page',$model->showpage(2));
        //当前位置
        if (intval($_GET['cate_id']) > 0){
            
            $nav_link[1]['link'] = 'index.php?act=shop_search';
            $nav_link[1]['title'] = $lang['site_search_store'];
            $nav =$class_list[$_GET['cate_id']];
            //如果有父级
            if ($nav['sc_parent_id'] > 0){
                
                $tmp = $class_list[$nav['sc_parent_id']];
                //存入父级
                $nav_link[] = array(
                    'title'=> $tmp['sc_name'],
                    'link' => "index.php?act=store_list&cate_id=".$nav['sc_parent_id']
                );
                
            }
            
            //存入当前级
            $nav_link[] = array(
                'title'=>$nav['sc_name']
            );
            
        }else{
            
            $nav_link[1]['link'] = 'index.php';
            $nav_link[1]['title'] = $lang['homepage'];
            $nav_link[2]['title'] = $lang['site_search_store'];
        
        }

        $purl = $this->getParam();
        Tpl::output('nav_link_list',$nav_link);
        Tpl::output('purl', urlShop($purl['act'], $purl['op'], $purl['param']));

        //SEO
        Model('seo')->type('index')->show();
        Tpl::output('html_title',(empty($_GET['keyword']) ? '' : $_GET['keyword'].' - ').C('site_name').$lang['nc_common_search']);

        //Tpl::showpage('store_list');
        Tpl::showpage('jiangzaoye');

    }
    
    private function getParam() {
        
        $param = $_GET;
        $purl = array();
        $purl['act'] = $param['act'];
        unset($param['act']);
        $purl['op'] = $param['op'];
        unset($param['op']); unset($param['curpage']);
        $purl['param'] = $param;
        return $purl;
    
    }

    /**
     * 获得推荐商品
     */
    public function get_booth_goodsOp() {
        $gc_id = $_GET['cate_id'];
        if ($gc_id <= 0) {
            return false;
        }
        // 获取分类id及其所有子集分类id
        $goods_class = Model('goods_class')->getGoodsClassForCacheModel();
        if (empty($goods_class[$gc_id])) {
            return false;
        }
        $child = (!empty($goods_class[$gc_id]['child'])) ? explode(',', $goods_class[$gc_id]['child']) : array();
        $childchild = (!empty($goods_class[$gc_id]['childchild'])) ? explode(',', $goods_class[$gc_id]['childchild']) : array();
        $gcid_array = array_merge(array($gc_id), $child, $childchild);
        // 查询添加到推荐展位中的商品id
        $boothgoods_list = Model('p_booth')->getBoothGoodsList(array('gc_id' => array('in', $gcid_array)), 'goods_id', 0, 4, 'rand()');
        if (empty($boothgoods_list)) {
            return false;
        }

        $goodsid_array = array();
        foreach ($boothgoods_list as $val) {
            $goodsid_array[] = $val['goods_id'];
        }

        $fieldstr = "goods_id,goods_commonid,goods_name,goods_jingle,store_id,store_name,goods_price,goods_promotion_price,goods_promotion_type,goods_marketprice,goods_storage,goods_image,goods_freight,goods_salenum,color_id,evaluation_count";
        $goods_list = Model('goods')->getGoodsOnlineList(array('goods_id' => array('in', $goodsid_array)), $fieldstr);
        if (empty($goods_list)) {
            return false;
        }

        Tpl::output('goods_list', $goods_list);
        Tpl::showpage('goods.booth', 'null_layout');
    }

	public function auto_completeOp() {
	    try {
    	    require(BASE_DATA_PATH.'/api/xs/lib/XS.php');
    	    $obj_doc = new XSDocument();
    	    $obj_xs = new XS(C('fullindexer.appname'));
    	    $obj_index = $obj_xs->index;
    	    $obj_search = $obj_xs->search;
    	    $obj_search->setCharset(CHARSET);
            $corrected = $obj_search->getExpandedQuery($_GET['term']);
            if (count($corrected) !== 0) {
                $data = array();
                foreach ($corrected as $word)
                {
                    $row['id'] = $word;
                    $row['label'] = $word;
                    $row['value'] = $word;
                    $data[] = $row;
                }
                exit(json_encode($data));
            }
        } catch (XSException $e) {
            if (is_object($obj_index)) {
                $obj_index->flushIndex();
            }
//             Log::record('search\auto_complete'.$e->getMessage(),Log::RUN);
        }
	}

	/**
	 * 获得猜你喜欢
	 */
	public function get_guesslikeOp(){
	    $goodslist = Model('goods_browse')->getGuessLikeGoods($_SESSION['member_id'], 20);
	    Tpl::output('goodslist',$goodslist);
	    Tpl::showpage('goods_guesslike','null_layout');
	}
}

class sortClass{
	//升序
	public static function sortArrayAsc($preData,$sortType='store_sort'){
		$sortData = array();
		foreach ($preData as $key_i => $value_i){
			$price_i = $value_i[$sortType];
			$min_key = '';
			$sort_total = count($sortData);
			foreach ($sortData as $key_j => $value_j){
				if($price_i<$value_j[$sortType]){
					$min_key = $key_j+1;
					break;
				}
			}
			if(empty($min_key)){
				array_push($sortData, $value_i);
			}else {
				$sortData1 = array_slice($sortData, 0,$min_key-1);
				array_push($sortData1, $value_i);
				if(($min_key-1)<$sort_total){
					$sortData2 = array_slice($sortData, $min_key-1);
					foreach ($sortData2 as $value){
						array_push($sortData1, $value);
					}
				}
				$sortData = $sortData1;
			}
		}
		return $sortData;
	}
	//降序
	public static function sortArrayDesc($preData,$sortType='store_sort'){
            $sortData = array();
            foreach ($preData as $key_i => $value_i){
                $price_i = $value_i[$sortType];
                $min_key = '';
                $sort_total = count($sortData);
                foreach ($sortData as $key_j => $value_j){
                    if($price_i>$value_j[$sortType]){
                        $min_key = $key_j+1;
                        break;
                    }
                }
                if(empty($min_key)){
                    array_push($sortData, $value_i);
                }else {
                    $sortData1 = array_slice($sortData, 0,$min_key-1);
                    array_push($sortData1, $value_i);
                    if(($min_key-1)<$sort_total){
                            $sortData2 = array_slice($sortData, $min_key-1);
                            foreach ($sortData2 as $value){
                                array_push($sortData1, $value);
                            }
                    }
                    $sortData = $sortData1;
                }
            }
            return $sortData;
	}
}

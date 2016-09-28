<?php
/**
 * 商品
 *
 *
 *
 * by www.shopnc.cn ShopNc商城V17 大数据版
 */
defined('InShopNC') or exit('Access Invalid!');
class storeControl extends mobileHomeControl{

	public function __construct() {
        parent::__construct();
    }

    /**
     * 商品列表
     */
    public function goods_listOp() {
        $model_goods = Model('goods');

        //查询条件
        $condition = array();
        if(!empty($_GET['store_id']) && intval($_GET['store_id']) > 0) {
            $condition['store_id'] = $_GET['store_id'];
        } elseif (!empty($_GET['keyword'])) { 
            $condition['goods_name|goods_jingle'] = array('like', '%' . $_GET['keyword'] . '%');
        }

        //所需字段
        $fieldstr = "goods_id,goods_commonid,store_id,goods_name,goods_price,goods_marketprice,goods_image,goods_salenum,evaluation_good_star,evaluation_count";

        //排序方式
        $order = $this->_goods_list_order($_GET['key'], $_GET['order']);

        $goods_list = $model_goods->getGoodsListByColorDistinct($condition, $fieldstr, $order, $this->page);
        $page_count = $model_goods->gettotalpage();

        //处理商品列表(团购、限时折扣、商品图片)
        $goods_list = $this->_goods_list_extend($goods_list);

        output_data(array('goods_list' => $goods_list), mobile_page($page_count));
    }

    /**
     * 商品列表排序方式
     */
    private function _goods_list_order($key, $order) {
        $result = 'goods_id desc';
        if (!empty($key)) {

            $sequence = 'desc';
            if($order == 1) {
                $sequence = 'asc';
            }

            switch ($key) {
                //销量
                case '1' :
                    $result = 'goods_salenum' . ' ' . $sequence;
                    break;
                //浏览量
                case '2' : 
                    $result = 'goods_click' . ' ' . $sequence;
                    break;
                //价格
                case '3' :
                    $result = 'goods_price' . ' ' . $sequence;
                    break;
            }
        }
        return $result;
    }

    /**
     * 处理商品列表(团购、限时折扣、商品图片)
     */
    private function _goods_list_extend($goods_list) {
        //获取商品列表编号数组
        $commonid_array = array();
        $goodsid_array = array();
        foreach($goods_list as $key => $value) {
            $commonid_array[] = $value['goods_commonid'];
            $goodsid_array[] = $value['goods_id'];
        }

        //促销
        $groupbuy_list = Model('groupbuy')->getGroupbuyListByGoodsCommonIDString(implode(',', $commonid_array));
        $xianshi_list = Model('p_xianshi_goods')->getXianshiGoodsListByGoodsString(implode(',', $goodsid_array));
        foreach ($goods_list as $key => $value) {
            //团购
            if (isset($groupbuy_list[$value['goods_commonid']])) {
                $goods_list[$key]['goods_price'] = $groupbuy_list[$value['goods_commonid']]['groupbuy_price'];
                $goods_list[$key]['group_flag'] = true;
            } else {
                $goods_list[$key]['group_flag'] = false;
            }

            //限时折扣
            if (isset($xianshi_list[$value['goods_id']]) && !$goods_list[$key]['group_flag']) {
                $goods_list[$key]['goods_price'] = $xianshi_list[$value['goods_id']]['xianshi_price'];
                $goods_list[$key]['xianshi_flag'] = true;
            } else {
                $goods_list[$key]['xianshi_flag'] = false;
            }

            //商品图片url
            $goods_list[$key]['goods_image_url'] = cthumb($value['goods_image'], 360, $value['store_id']); 

            unset($goods_list[$key]['store_id']);
            unset($goods_list[$key]['goods_commonid']);
            unset($goods_list[$key]['nc_distinct']);
        }

        return $goods_list;
    }

    /**
     * 商品详细页
     */
    public function store_detailOp() {
        $store_id = intval($_GET ['store_id']);
        // 商品详细信息
        $model_store = Model('store');
        $store_info = $model_store->getStoreOnlineInfoByID($store_id);
        if (empty($store_info)) {
            output_error('店铺不存在');
        }
        $store_detail['store_pf'] = $store_info['store_credit'];
        $store_detail['store_info'] = $store_info;
        // //店铺导航
        // $model_store_navigation = Model('store_navigation');
        // $store_navigation_list = $model_store_navigation->getStoreNavigationList(array('sn_store_id' => $store_id));
        // $store_detail['store_navigation_list'] = $store_navigation_list;
         //幻灯片图片
         if($this->store_info['store_slide'] != '' && $this->store_info['store_slide'] != ',,,,'){
             $store_detail['store_slide'] = explode(',', $this->store_info['store_slide']);
             $store_detail['store_slide_url'] = explode(',', $this->store_info['store_slide_url']);
         }
          foreach ($store_detail as $key => $value) {
                 $store_detail[$key]['store_avatar'] = UPLOAD_SITE_URL.'/'.ATTACH_STORE.'/'.$store_detail[$key]['store_avatar'];
          }
          if ($memberId = $this->getMemberIdIfExists()) {
            $c = (int) Model('favorites')->getStoreFavoritesCountByStoreId($_GET['store_id'], $memberId);
            $store_detail['is_favorate'] = $c ;
        } else {
            $store_detail['is_favorate'] = '0';
        }
        //店铺详细信息处理
        // $store_detail = $this->_store_detail_extend($store_info);
        output_data($store_detail);
    }
    public function store_listOp(){
             $model_store = Model('store');
             $condition['store_state'] = 1;
             $condition['sc_id'] =  array('in',"1,2");
             $store_list = $model_store->where($condition)->field('store_id,store_name,store_avatar,sc_id,app_banner,store_collect')->order('store_id asc')->page(10)->select();
             $store_list = $model_store->getStoreSearchList($store_list);
             foreach ($store_list as $key => $value) {
                 $store_list[$key]['store_avatar'] = UPLOAD_SITE_URL.'/'.ATTACH_STORE.'/'.$store_list[$key]['store_avatar'];
                  $store_list[$key]['app_banner'] = $store_list[$key]['app_banner'] ?  UPLOAD_SITE_URL . '/' . ATTACH_STORE . '/' . $store_list[$key]['app_banner'] : '';
                 foreach ( $store_list[$key]['search_list_goods'] as $k => $v) {
                   $store_list[$key]['search_list_goods'][$k]['goods_image'] = thumb($v,240);
                 }
                  $store_list[$key]['store_state'] = 0;
             }
             if (!empty($_POST['key'])) {
            $model_mb_user_token = Model('mb_user_token');
            $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($_POST['key']);
            $model_member = Model('member');
            $this->member_info = $model_member->getMemberInfoByID($mb_user_token_info['member_id']);
            $favorites_model = Model('favorites');
            $insert_arr = array();
            $insert_arr['member_id'] = $this->member_info['member_id'];
            $insert_arr['member_name'] = $this->member_info['member_name'];
            $insert_arr['fav_id'] = $fav_id;
            $insert_arr['fav_type'] = 'store';
            $insert_arr['fav_time'] = time();
            $result = $favorites_model->addFavorites($insert_arr);

            if ($result) {
                //增加收藏数量
                $store_model = Model('store');
                $store_model->editStore(array('store_collect' => array('exp', 'store_collect+1')), array('store_id' => $fav_id));
                $favorites_info = $favorites_model->getOneFavorites(array(
                    'fav_id' => $store_list[$key]['store_id'],
                    'fav_type' => 'store',
                    'member_id' => $this->member_info['member_id'],
                ));
            }
            if (!empty($favorites_info)) {
                $store_list[$key]['store_state'] = '1';
            }
        }
             output_data($store_list);
        }

    /**
     * 店铺详细信息处理
     */
    private function _store_detail_extend($store_detail) {
        //整理数据
        unset($store_detail['store_info']['goods_commonid']);
        unset($store_detail['store_info']['gc_id']);
        unset($store_detail['store_info']['gc_name']);
        // unset($goods_detail['goods_info']['store_id']);
        // unset($goods_detail['goods_info']['store_name']);
        unset($store_detail['store_info']['brand_id']);
        unset($store_detail['store_info']['brand_name']);
        unset($store_detail['store_info']['type_id']);
        unset($store_detail['store_info']['goods_image']);
        unset($store_detail['store_info']['goods_body']);
        unset($store_detail['store_info']['goods_state']);
        unset($store_detail['store_info']['goods_stateremark']);
        unset($store_detail['store_info']['goods_verify']);
        unset($store_detail['store_info']['goods_verifyremark']);
        unset($store_detail['store_info']['goods_lock']);
        unset($store_detail['store_info']['goods_addtime']);
        unset($store_detail['store_info']['goods_edittime']);
        unset($store_detail['store_info']['goods_selltime']);
        unset($store_detail['store_info']['goods_show']);
        unset($store_detail['store_info']['goods_commend']);

        return $store_detail;
    }

    // /**
    //  * 商品详细页
    //  */
    // public function goods_bodyOp() {
    //     $store_id = intval($_GET ['store_id']);

    //     $model_goods = Model('goods');

    //     $goods_info = $model_goods->getGoodsInfo(array('goods_id' => $goods_id));
    //     $goods_common_info = $model_goods->getGoodeCommonInfo(array('goods_commonid' => $goods_info['goods_commonid']));

    //     Tpl::output('goods_common_info', $goods_common_info);
    //     Tpl::showpage('goods_body');
    // }
    
        
}

<?php

/**
 * 前台分类
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class overseasControl extends BaseHomeControl {
 //每页显示商品数
    const PAGESIZE = 50;

    //模型对象
    private $_model_search;
    /**
     * 分类列表
     */
    public function indexOp() {
        Language::read('home_overseas_index');
        $lang = Language::getLangContent();
        //导航
        $nav_link = array(
            '0' => array('title' => $lang['homepage'], 'link' => SHOP_SITE_URL),
            '1' => array('title' => $lang['overseas_index_class'])
        );
        Tpl::output('nav_link_list', $nav_link);
          $model_goods = Model('goods');
        // 字段
        $fields = "goods_id,goods_commonid,goods_name,goods_jingle,gc_id,store_id,store_name,goods_price,goods_promotion_price,goods_promotion_type,goods_marketprice,goods_storage,goods_image,goods_freight,goods_salenum,color_id,evaluation_good_star,evaluation_count,is_virtual,is_fcode,is_appoint,is_presell,have_gift";

        $condition = array();
        if (is_array($indexer_ids)) {

            //商品主键搜索
            $condition['goods_id'] = array('in',$indexer_ids);
            $goods_list = $model_goods->getGoodsOnlineList($condition, $fields, 0, 'goods_id asc', self::PAGESIZE, null, false);

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
            $goods_list = $model_goods->getGoodsListByColorDistinct($condition, $fields, 'goods_id desc', self::PAGESIZE);
        }
        
        Tpl::output('show_page1', $model_goods->showpage(4));
        Tpl::output('show_page', $model_goods->showpage(5));
        //  var_dump($goods_list);exit;
        Tpl::output('goods_list', $goods_list);
        Tpl::output('html_title', C('site_name') . ' - ' . Language::get('overseas_index_goods_class'));
        Tpl::showpage('overseas');
    }
    
    private function _goods_list_order($key, $order) {
        $result = 'is_own_shop desc,goods_id desc';
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
    public function getGoodsCount($condition) {
        return $this->table('goods')->where($condition)->count();
    }
}

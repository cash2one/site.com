<?php

/**
 * 聚拾寨
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class groupbuyControl extends apiHomeControl {

    /**
     * 单个活动信息页
     */
    public function indexOp() {
        $model_groupbuy = Model('groupbuy');
        $condition_groupbuy = array();
        $condition_groupbuy['groupbuy_type'] = 1;
        $groupbuy = $model_groupbuy->getGroupbuyList($condition_groupbuy, $this->page);
        $page_count = $model_groupbuy->gettotalpage();
        foreach ($groupbuy as $key => $value) {
            $groupbuy[$key]['groupbuy_image'] = 'http://www.wantease.com/data/upload/shop/groupbuy/' . $groupbuy[$key][store_id] . '/' . $groupbuy[$key]['groupbuy_image'];
            $groupbuy[$key]['groupbuy_image1'] = 'http://www.wantease.com/data/upload/shop/groupbuy/' . $groupbuy[$key][store_id] . '/' . $groupbuy[$key]['groupbuy_image1'];
            $groupbuy[$key]['goods_image'] = thumb(array('goods_id'=>$groupbuy[$key]['goods_id']),240);
            $groupbuy[$key]['width'] = getimagesize($groupbuy[$key]['groupbuy_image'])[0];
            $groupbuy[$key]['height'] = getimagesize($groupbuy[$key]['groupbuy_image'])[1];
            
        }
        output_data($groupbuy, mobile_page($page_count));
    }

}

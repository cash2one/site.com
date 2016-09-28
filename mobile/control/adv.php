<?php
/**
 * 文章 
 * ShopNc - www.shopnc.cn * 
 **/

defined('InShopNC') or exit('Access Invalid!');
class advControl extends mobileHomeControl{

	public function __construct() {
        parent::__construct();
    }

    /**
     * 文章列表
     */
    public function index1Op() {
          $adv_model = Model('adv');
       $condition['ap_id'] =1065; 
        $adv_info = $adv_model->getList($condition,12,12,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        output_data($adv_info);
    }
       public function index2Op() {
          $adv_model = Model('adv');
       $condition['ap_id'] =1113; 
        $adv_info = $adv_model->getList($condition,12,12,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        output_data($adv_info);
    }
       public function index3Op() {
          $adv_model = Model('adv');
       $condition['ap_id'] =1125; 
        $adv_info = $adv_model->getList($condition,12,12,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        output_data($adv_info);
    }
       public function index4Op() {
          $adv_model = Model('adv');
       $condition['ap_id'] =1137; 
        $adv_info = $adv_model->getList($condition,12,12,'ap_id asc');
        foreach ($adv_info as $akey => $avalue) {
            $adv_info[$akey]['adv_content'] = unserialize($adv_info[$akey]['adv_content']);
            $adv_info[$akey]['adv_content']['adv_pic'] = UPLOAD_SITE_URL."/".ATTACH_ADV."/".$adv_info[$akey]['adv_content']['adv_pic'];
            $adv_info[$akey]['adv_content']['adv_pic_url'] = 'http://'. $adv_info[$akey]['adv_content']['adv_pic_url'];
        }
        output_data($adv_info);
    }
    

}

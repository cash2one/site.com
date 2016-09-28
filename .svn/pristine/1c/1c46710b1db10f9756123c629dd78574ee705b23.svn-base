<?php
/**
 * 瞬间
 *
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class store_inspirationControl extends BaseSellerControl{

    /**
     * 认领瞬间列表
     * add by lizh 18:00 2016/7/15 
     */
    public function indexOp() {

        $model_personal = Model('micro_personal');
        $condition = array();
        $condition = '(micro_personal_check.store_id != '.$_SESSION['store_id'].' or micro_personal_check.store_id is null) and micro_personal.flag_state = 0';
        $field = 'micro_personal.personal_id, micro_personal.commend_member_id, micro_personal.commend_time,micro_personal.commend_image, micro_personal.commend_message, member.member_name ';
        $list = $model_personal->getNoExistByCheckWithUserInfo($condition,10,'micro_personal.personal_id desc',$field);
        Tpl::output('show_page',$model_personal->showpage(2));
        Tpl::output('list',$list);
        Tpl::showpage('inspiration_claim');

    }
	
    /**
     * 认领瞬间商品
     * add by lizh 19:29 2016/7/15
     */
    public function add_inspiration_goodsOp() {
		
        $rs = chksubmit();
        if($rs) {

            $micro_personal_check = Model('micro_personal_check');
            $insertArray['craeted_time'] = time();
            $store_id = $_SESSION['store_id'];
            $personal_id = $_POST['personal_id'];

            $micro_personal_check_result = $micro_personal_check -> isExist(array(store_id => $store_id, personal_id => $personal_id));
            if($micro_personal_check_result) {

                showMessage('你已认领过该商品；请耐心等待审核', getReferer(), 'html', 'error');

            }

            $insertArray['store_id'] = $store_id;
            $store = Model('store');
            $insertArray['store_name'] = $store -> getfby_store_id($store_id,'store_name');
            $check_state = 0;
            $insertArray['personal_id'] = $personal_id;
            $insertArray['goods_url'] = $_POST['goods_url'];


            $rs = $micro_personal_check -> save($insertArray);
            if($rs) {

                //redirect();
                showMessage('认领成功；请等待后台审核', urlShop('my_inspiration', 'index'));
            } else {

                showMessage('认领失败', getReferer(), 'html', 'error');

            }

        } else {

            $micro_personal = Model('micro_personal');
            $personal_id = $_GET['personal_id'];
            $result = $micro_personal -> getOne(array(personal_id => $personal_id)); 
            if(empty($result)) {

                    showDialog('找不到该瞬间');//没有这个瞬间商品
                    return;
            }

            $result['commend_image'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$result['commend_member_id'].'/'.$result['commend_image'];
            $member = Model('member');
            $member_id = $result['commend_member_id'];
            $result['member_name'] = $member -> getfby_member_id($member_id,'member_name'); 

            Tpl::output('micro_personal', $result);
            Tpl::output('personal_id', $personal_id);
            Tpl::showpage('add_inspiration_goods.step1');

        }
		
    }   
}


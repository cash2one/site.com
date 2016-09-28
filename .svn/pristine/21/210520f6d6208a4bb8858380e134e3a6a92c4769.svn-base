<?php
/**
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class my_inspirationControl extends BaseSellerControl{

                 /**
                 * 我的认领瞬间列表
                 * add by niro 16:00 2016/7/16 
                 */
        public function indexOp() {

        $model_personal = Model('micro_personal');
        $condition = array();
        $condition['micro_personal_check.store_id'] =  $_SESSION['store_id'];
        $field = 'micro_personal.personal_id, micro_personal.commend_member_id, micro_personal.commend_image, micro_personal.commend_message,micro_personal_check.check_state,micro_personal_check.check_reply ';
        $list = $model_personal->getMyCheck($condition,10,'personal_id desc',$field);
        Tpl::output('show_page',$model_personal->showpage(2));
        Tpl::output('list',$list);
        Tpl::showpage('my_inspiration');

        }


    
}


<?php

/**
 * 达人秀
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class micro_sentControl extends apiMemberControl {

    public function personal_image_uploadOp() {
        $data = array();
        $data['status'] = 'success';
        if(isset($this->member_info['member_id'])) {
            if(!empty($_FILES['file']['name'])) {
                $upload = new UploadFile();
                $upload->set('default_dir',ATTACH_MICROSHOP . DS . $this->member_info['member_id']);
                $upload->set('thumb_width','60,240');
                $upload->set('thumb_height', '5000,50000');
                $upload->set('thumb_ext',	'_tiny,_list');	
                $result = $upload->upfile('file');
                if(!$result) {
                    $data['status'] = 'fail';
                    $data['error'] = $upload->error;
                }
                $data['file'] =  $upload->getSysSetPath().$upload->file_name;
                $data['pic'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$this->member_info['member_id'].DS.$data['file'];
            }
        } else {
            $data['status'] = 'fail';
            $data['error'] = '未登录';
        }
        output_data($data);
    
    }

    /**
     * 个人秀图片删除
     * */
    public function personal_image_deleteOp() {
        $data = array();
        $data['status'] = 'success';
        self::drop_personal_image($_GET['image_name']);
        output_data($data);
    }
	
	/**
	 * update by lizh 2016/7/18
	 */
    public function personal_saveOp() {
        $personal_limit = $this->check_personal_limit();
        if (empty($_POST['commend_message'])) {
            $personal_info['commend_message'] = '还不错吧^-^';
        } else {
            $personal_info['commend_message'] = $_POST['commend_message'];
        }
	
        $personal_info['commend_member_id'] = $this->member_info['member_id'];
        $personal_info['commend_image'] = trim($_POST['personal_image']);
         if ($_POST['position']) {	
        $personal_info['position'] = trim($_POST['position']);
         }
        $personal_info['commend_time'] = time();
//        $personal_info['class_id'] =  intval($_POST['personal_class']);
//        $personal_link_array = array();
//        if(!empty($_POST['personal_buy_link'])) {
//            $model_goods_info = Model('goods_info_by_url');
//            for ($i = 0,$count = count($_POST['personal_buy_link']); $i < $count; $i++) {
//                $check_link = $model_goods_info->check_personal_buy_link($_POST['personal_buy_link'][$i]);
//                if($check_link) {
//                    $personal_link_array[$i]['link'] = $_POST['personal_buy_link'][$i];
//                    $personal_link_array[$i]['image'] = $_POST['personal_buy_image'][$i];
//                    $personal_link_array[$i]['price'] = $_POST['personal_buy_price'][$i];
//                    $personal_link_array[$i]['title'] = $_POST['personal_buy_title'][$i];
//                }
//            }
//        }
//        $personal_info['commend_buy'] = serialize($personal_link_array);
        $personal_info['microshop_commend'] = 0;
        $personal_info['microshop_sort'] = 255;

        $model_personal = Model('micro_personal');
        $result = $model_personal->save($personal_info);
        $message = '保存失败';
        //分享内容
        if ($result) {
            output_data('1');
//            //计数
//            $model_micro_member_info = Model('micro_member_info');
//            $model_micro_member_info->updateMemberPersonalCount($this->member_info['member_id'],'+');
//            if(isset($_POST['share_app_items'])) {
//                $personal_info['type'] = 'personal';
//                $personal_info['url'] = MICROSHOP_SITE_URL.DS."index.php?act=personal&op=detail&personal_id=".$result;
//                self::share_app_publish('publish',$personal_info);
//            }
        }
//        showDialog($message,MICROSHOP_SITE_URL.DS.'index.php?act=home&op=personal',$result? 'succ' : 'error','');
    }

    private function check_personal_limit() {
        $personal_limit = C('microshop_personal_limit');
        if (empty($personal_limit)) {
            return TRUE;
        }
        $model = Model('micro_member_info');
        $micro_member_info = $model->getOneById($this->member_info['member_id']);
        if (empty($micro_member_info)) {
            return TRUE;
        }
        if ($micro_member_info['personal_count'] < $personal_limit) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}

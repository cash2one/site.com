<?php

/**
 * 达人秀
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class micro_classControl extends apiMemberControl {
    
	/**
	 * 加入新创建橱窗列表
	 * add by lizh 15:04 2016/7/12
         * add by niro 10:46 2016.7.20
	 */
	public function post_showcase_listOp() {
		
		$micro_personal_class = Model('micro_personal_class');
		$insert_array['class_name'] = $_GET['class_name'];
                $insert_array['class_introduction'] = $_GET['class_introduction'];
		$insert_array['class_sort'] = 255;
		$insert_array['member_id'] = $this ->member_info['member_id'] ;

		$micro_personal_class -> save($insert_array);
		$micro_personal_class_data = $micro_personal_class -> getOne(array(class_id => $insert_array['class_name'],member_id=>$insert_array['member_id']));
		$micro_personal = Model('micro_personal');
                $update_array = array();
                $update_array['class_id'] = $micro_personal_class_data['class_id'];
                $where_array['personal_id'] = $_GET['personal_id'];
                $data = $micro_personal->modify($update_array,$where_array);
		output_data(array(status => 1, info => '操作成功', data => $data));

	}
	/**
	 * 获取橱窗详情
	 * add by lizh 16:26 2016/7/12
	 */
	public function get_showcase_detailOp() {
		
		$micro_personal_class = Model('micro_personal_class');
		
		$member_id = $this->member_info['member_id'] ;
		$micro_personal_class_data = $micro_personal_class -> getList(array('member_id' => $member_id), 10, 'class_id', '*');
		
		$micro_personal = Model('micro_personal');
		$data = $micro_personal -> getShowcaseList($micro_personal_class_data);
               
		
		output_data($data);
	}
        
        /**
	 * 获取橱窗列表
	 * add by lizh 16:26 2016/7/12
	 */
	public function get_showcase_listOp() {
		
		$micro_personal_class = Model('micro_personal_class');
		
		$member_id = $this->member_info['member_id'] ;
		$micro_personal_class_data = $micro_personal_class -> getList(array('member_id' => $member_id), 10, 'class_id', '*');

		
		output_data($micro_personal_class_data);
	}
        
}

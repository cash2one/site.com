<?php
/**
 * 商品分类管理
 *
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class goods_inspirationControl extends SystemControl{

	public function __construct(){
		
		parent::__construct();
		
		Language::read('goods_class');
	}

	/**
	 * 瞬间审核
	 * add by lizh 16:40 2016/7/16
	 */
	public function inspirationOp(){
		
		$micro_personal_check = Model('micro_personal_check');
		$list = $micro_personal_check -> getList(array(), 10, 'check_state asc, craeted_time desc', '*');
		
		$micro_personal = Model('micro_personal');
		foreach($list as $k => $v) {
			
			$personal_id = $v['personal_id'];
			$micro_personal_list = $micro_personal -> getOne(array(personal_id => $personal_id));
			$file_list_name = str_replace('.', '_list.', $micro_personal_list['commend_image']);
			$file_tiny_name = str_replace('.', '_tiny.', $micro_personal_list['commend_image']);
			$file_list_path = $micro_personal_list['commend_member_id'].DS.$file_list_name;
			$file_tiny_path = $micro_personal_list['commend_member_id'].DS.$file_tiny_name;
			
			if(is_file(BASE_UPLOAD_PATH.DS.ATTACH_MICROSHOP.DS.$file_list_path)) {
				 
                $personal_list_image = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$file_list_path;
            
			} else {
                
				$personal_list_image = getMicroshopDefaultImage();
            
			}
			
			if(is_file(BASE_UPLOAD_PATH.DS.ATTACH_MICROSHOP.DS.$file_tiny_path)) {
				 
                $personal_tiny_image = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$file_tiny_path;
            
			} else {
                
				$personal_tiny_image = getMicroshopDefaultImage();
            
			}
			
			$list[$k]['personal_list_image'] = $personal_list_image;
			$list[$k]['personal_tiny_image'] = $personal_tiny_image;
			$list[$k]['flag_state'] = $micro_personal_list['flag_state'];

			if(!preg_match('/http:\/\//', $v['goods_url'])) {
				
				$list[$k]['goods_url'] = 'http://'.$v['goods_url'];
				
			}
			
			switch($v['check_state']) {
				
				case 0: $list[$k]['check_state_name'] = '未审核';break;
				case 1: $list[$k]['check_state_name'] = '审核通过';break;
				case 2: $list[$k]['check_state_name'] = '审核未通过';break;
				
			}

		}
		
        Tpl::output('show_page',$micro_personal_check->showpage(2));
        Tpl::output('list',$list);
        Tpl::showpage('inspiration.check');
		
	}
	
	/**
	 * 瞬间审核
	 * add by lizh 16:40 2016/7/16
	 */
	public function inspirationUpdateOp(){
		
		$rs = chksubmit();
		if($rs) {
			
			$check_id = $_POST['check_id'];
			$update_array['check_state'] = $_POST['check_state'];
			$update_array['check_reply'] = $_POST['check_reply'];
			$update_array['last_time'] = time();
			
			$micro_personal_check = Model('micro_personal_check');
			$rs = $micro_personal_check -> where(array(check_id => $check_id)) -> update($update_array);
			$micro_personal_check_data = $micro_personal_check -> where(array(check_id => $check_id)) -> find();
			$personal_id = $micro_personal_check_data['personal_id'];
			$check_state = $micro_personal_check_data['check_state'];
			$goods_url = $micro_personal_check_data['goods_url'];
			
			$micro_personal = Model('micro_personal');
			if($check_state == 1) {
				
				$rs = $micro_personal -> where(array(personal_id => $personal_id)) -> update(array(flag_state => 1,goods_url => $goods_url));
				
			}
			
			$this -> inspirationOp();
			
		} else {
			
			Tpl::showpage('inspiration_check_update');
			
		}
        
		
	}

}

<?php
/**
 * 活动
 *
 *
 *
 ***/


defined('InShopNC') or exit('Access Invalid!');

class activityControl extends apiHomeControl {
	/**
	 * 单个活动信息页
	 */
	public function indexOp(){
		
		$store_id = intval($_GET['store_id']) ? intval($_GET['store_id']) : 0 ;
//		//查询活动信息
		$activity_id = intval($_GET['activity_id']);
		
		$activity	= Model('activity')->getOneById($activity_id);
		
		//查询活动内容信息
		$list	= array();
		$list	= Model('activity_detail')->where($store_id)->select();
		output_data($list);
	}
}

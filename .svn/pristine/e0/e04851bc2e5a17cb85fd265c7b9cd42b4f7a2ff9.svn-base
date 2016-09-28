<?php
/**
 * 文章
 *
 *
 *
 ***/


defined('InShopNC') or exit('Access Invalid!');

class ringControl extends BaseHomeControl {
	/**
	 * 默认进入页面
	 */
	public function indexOp(){
                $model_member = Model('member');
                $member_count = $model_member->getMemberCount($condition);
                echo json_encode($member_count);
		}
        public function countOp(){
             $model_member = Model('member');
              $data['member_count'] = $model_member->getMemberCount($condition);
              $data['new_message_count'] =  $data['member_count']-$_POST['count'];
             
              echo json_encode($data);
         }
	}
	


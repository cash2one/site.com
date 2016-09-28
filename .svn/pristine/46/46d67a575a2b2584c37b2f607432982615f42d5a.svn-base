<?php
/**
 * 合作伙伴管理
 *
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class wap_messageControl extends SystemControl{
	public function __construct(){
		parent::__construct();
		Language::read('mobile');
	}
	/**
	 * 意见反馈
	 */
	public function flistOp(){
		$model_wap_message = Model('wap_message');
                $condition = "wap_feedback_id in (SELECT SUBSTRING_INDEX(GROUP_CONCAT(wap_feedback_id ORDER BY wap_feedback_id),',',1) FROM wantease_wap_message GROUP BY member_id )";
                $list = Model()->table('wap_message')->where($condition)->order('wap_feedback_id desc')->page(10)->select();
                $model_member = Model('member');     
                foreach ($list as $key => $value) {   
                    $member_info = $model_member->getMemberInfoByID($value['member_id']);
                    $list[$key]['member_name'] = $member_info['member_name'];
                }

		Tpl::output('list', $list);
		Tpl::output('page', $model_wap_message->showpage());
		Tpl::showpage('wap_message.index');
	}
        
        public function editOp() {
            	$model_wap_message = Model('wap_message');
		$list = $model_wap_message->getMessage(array('member_id'=>$_GET['member_id']),'','*','wap_feedback_id desc');
                $model_member = Model('member'); 
                foreach ($list as $key => $value) {   
                    $member_info = $model_member->getMemberInfoByID($value['member_id']);
                    $list[$key]['member_name'] = $member_info['member_name'];
                }
             if (chksubmit()) {
            
            $content = trim($_POST['content']);
            $update['feedback_state'] = 1;
            $update['content'] = $content;
            $update['ftime'] = TIMESTAMP;
            $update['is_admin'] = 1;
            $result = $model_wap_message->insertMessage($update);
            if ($result) {
                $model_wap_message->editMessageFeedbackState($_GET['member_id']);  //改变回复状态
                showMessage('回复成功', urlAdmin('wap_message', 'edit',array('member_id'=>$_GET['member_id'])));
            } else {
                showMessage('回复失败');
            }
        }
		Tpl::output('list', $list);
		Tpl::output('page', $model_wap_message->showpage());
		Tpl::showpage('wap_message.edit');
        }

}

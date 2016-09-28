<?php
/**
 * 买家退款
 *
 *
 *
 ***/


defined('InShopNC') or exit('Access Invalid!');

class member_refundControl extends mobileMemberControl {
	public function __construct(){
		parent::__construct();
	}
	/**
	 * 添加订单商品部分退款
	 *
	 */
	public function add_refundOp(){
		$model_refund = Model('refund_return');
		$order_id = intval($_POST['order_id']);
		$goods_id = intval($_POST['goods_id']);//订单商品表编号
		$condition = array();
		$condition['buyer_id'] = $this->member_info['member_id'];
		$condition['order_id'] = $order_id;
		$order = $model_refund->getOrderList($condition, $goods_id);
                $goods_list = $order['extend_order_goods'];
		$goods = $goods_list[0];
		$order_id = $order['order_id'];
            $model_refund = Model('refund_return');
		$condition = array();
                $condition['reason_id'] = intval($_POST['reason_id']);
		$reason_info = $model_refund->getReason($condition);
		if ( $goods_id > 0){
			$refund_array = array();
                            $reason_array = array();
			    $refund_array['reason_info'] = $reason_info['reason_info'];
                        
//
//            $pic_array = array();
//            $pic_array['buyer'] = $this->upload_pic();//上传凭证
//            $info = serialize($pic_array);
//            $refund_array['pic_info'] = $info;

			$model_trade = Model('trade');
			$order_shipped = $model_trade->getOrderState('order_shipped');//订单状态30:已发货
			if ($order['order_state'] == $order_shipped) {
			    $refund_array['order_lock'] = '2';//锁定类型:1为不用锁定,2为需要锁定
			}
			$refund_array['refund_type'] = $_POST['refund_type'];//类型:1为退款,2为退货
//			$show_url = 'index.php?act=member_return&op=index';
			$refund_array['return_type'] = '2';//退货类型:1为不用退货,2为需要退货
			if ($refund_array['refund_type'] != '2') {
			    $refund_array['refund_type'] = '1';
			    $refund_array['return_type'] = '1';
			}
			$refund_array['seller_state'] = '1';//状态:1为待审核,2为同意,3为不同意
			$refund_array['refund_amount'] = ncPriceFormat($_POST['refund_amount']);
                        $reason_array['pic_info'] = $_POST['pic_info'];
			$refund_array['goods_num'] = $goods['goods_num'];
			$refund_array['buyer_message'] = $_POST['buyer_message'];
			$refund_array['add_time'] = time();
			$state = $model_refund->addRefundReturn($refund_array,$order,$goods);
			if ($state) {
    			if ($order['order_state'] == $order_shipped) {
    			    $model_refund->editOrderLock($order_id);
    			}

                            output_data('退货申请成功');
			} else {
                            output_data('退货申请失败');
			}
		}
	}
	/**
	 * 添加全部退款即取消订单
	 *
	 */
	public function add_refund_allOp(){
		$model_order = Model('order');
		$model_trade = Model('trade');
		$model_refund = Model('refund_return');
		$order_id = intval($_GET['order_id']);
		$condition = array();
		$condition['buyer_id'] = $_SESSION['member_id'];
		$condition['order_id'] = $order_id;
		$order = $model_refund->getRightOrderList($condition);
		Tpl::output('order',$order);
		$order_amount = $order['order_amount'];//订单金额
		$condition = array();
		$condition['buyer_id'] = $order['buyer_id'];
		$condition['order_id'] = $order['order_id'];
		$condition['goods_id'] = '0';
		$condition['seller_state'] = array('lt','3');
		$refund_list = $model_refund->getRefundReturnList($condition);
		$refund = array();
		if (!empty($refund_list) && is_array($refund_list)) {
			$refund = $refund_list[0];
		}
	    $order_paid = $model_trade->getOrderState('order_paid');//订单状态20:已付款
	    $payment_code = $order['payment_code'];//支付方式
		if ($refund['refund_id'] > 0 || $order['order_state'] != $order_paid || $payment_code == 'offline') {//检查订单状态,防止页面刷新不及时造成数据错误
			showDialog(Language::get('wrong_argument'),'index.php?act=member_order&op=index','error');
		}
		if (chksubmit()) {
			$refund_array = array();
			$refund_array['refund_type'] = '1';//类型:1为退款,2为退货
			$refund_array['seller_state'] = '1';//状态:1为待审核,2为同意,3为不同意
			$refund_array['order_lock'] = '2';//锁定类型:1为不用锁定,2为需要锁定
			$refund_array['goods_id'] = '0';
			$refund_array['order_goods_id'] = '0';
			$refund_array['reason_id'] = '0';
			$refund_array['reason_info'] = '取消订单，全部退款';
			$refund_array['goods_name'] = '订单商品全部退款';
			$refund_array['refund_amount'] = ncPriceFormat($order_amount);
			$refund_array['buyer_message'] = $_POST['buyer_message'];
			$refund_array['add_time'] = time();

            $pic_array = array();
            $pic_array['buyer'] = $this->upload_pic();//上传凭证
            $info = serialize($pic_array);
            $refund_array['pic_info'] = $info;
			$state = $model_refund->addRefundReturn($refund_array,$order);

			if ($state) {
			    $model_refund->editOrderLock($order_id);
				showDialog(Language::get('nc_common_save_succ'),'index.php?act=member_refund&op=index','succ');
			} else {
				showDialog(Language::get('nc_common_save_fail'),'reload','error');
			}
		}
	    Tpl::showpage('member_refund_all');
	}
	/**
	 * 退款记录列表页
	 *
	 */
	public function indexOp(){
		$model_refund = Model('refund_return');
		$condition = array();
		$condition['buyer_id'] = $this->member_info['member_id'];
		$refund_list = $model_refund->getRefundList($condition,10);
        output_data($refund_list);
	}
        
        /**
         * 退款原因列表
         */
        public function refund_reasonOp() {
            $model_reason = Model('refund_return');
            $reason = $model_reason->getReasonList($condition);
            foreach ($reason as $key => $value) {
                
            }
            output_data($reason);
        }
        
	/**
	 * 退款记录查看
	 *
	 */
	public function viewOp(){
		$model_refund = Model('refund_return');
		$condition = array();
		$condition['buyer_id'] = $_SESSION['member_id'];
		$condition['refund_id'] = intval($_GET['refund_id']);
		$refund_list = $model_refund->getRefundList($condition);
		$refund = $refund_list[0];
		Tpl::output('refund',$refund);
		$info['buyer'] = array();
	    if(!empty($refund['pic_info'])) {
	        $info = unserialize($refund['pic_info']);
	    }
		Tpl::output('pic_list',$info['buyer']);
		$condition = array();
		$condition['order_id'] = $refund['order_id'];
		$model_refund->getRightOrderList($condition, $refund['order_goods_id']);
		Tpl::showpage('member_refund_view');
	}
	/**
	 * 上传凭证
	 *
	 */
    private function upload_pic() {
       $data = array();
        $data['status'] = 'success';
        if(isset($this->member_info['member_id'])) {
            if(!empty($_FILES['file']['name'])) {
                $upload = new UploadFile();
                $upload->set('default_dir',ATTACH_PATH.DS.'refund'.DS. $this->member_info['member_id']);
                $upload->set('thumb_width','60,240');
                $upload->set('thumb_height', '5000,50000');
                $upload->set('thumb_ext',	'_tiny');	
                $result = $upload->upfile('file');
                if(!$result) {
                    $data['status'] = 'fail';
                    $data['error'] = $upload->error;
                }
                $data['file'] =  $upload->getSysSetPath().$upload->file_name;
            }
        } else {
            $data['status'] = 'fail';
            $data['error'] = '未登录';
        }
        output_data($data);
    }
	/**
	 * 用户中心右边，小导航
	 *
	 * @param string	$menu_type	导航类型
	 * @param string 	$menu_key	当前导航的menu_key
	 * @return
	 */
	private function profile_menu($menu_type,$menu_key='') {
		$menu_array = array();
		switch ($menu_type) {
			case 'member_order':
				$menu_array = array(
				array('menu_key'=>'buyer_refund','menu_name'=>Language::get('nc_member_path_buyer_refund'),	'menu_url'=>'index.php?act=member_refund'),
				array('menu_key'=>'buyer_return','menu_name'=>Language::get('nc_member_path_buyer_return'),	'menu_url'=>'index.php?act=member_return'),
				array('menu_key'=>'buyer_vr_refund','menu_name'=>'虚拟兑码退款',	'menu_url'=>'index.php?act=member_vr_refund'));
				break;
		}
		Tpl::output('member_menu',$menu_array);
		Tpl::output('menu_key',$menu_key);
	}
}

<?php
/**
 * 虚拟订单行为
 *
 
 */
defined('InShopNC') or exit('Access Invalid!');
class card_combinationLogic {

    /**
     * 支付订单
     * @param array $order_info
     * @param string $role 操作角色 buyer、seller、admin、system 分别代表买家、商家、管理员、系统
     * @param string $post
     * @return array
     */
    public function changeOrderStatePay($order_info, $role, $post) {
        try {

            $card_combination = Model('card_combination');
            $card_combination->beginTransaction();

            $model_pd = Model('predeposit');
            //下单，支付被冻结的充值卡
            $rcb_amount = floatval($order_info['rcb_amount']);
            if ($rcb_amount > 0) {
                $data_pd = array();
                $data_pd['member_id'] = $order_info['buyer_id'];
                $data_pd['member_name'] = $order_info['buyer_name'];
                $data_pd['amount'] = $rcb_amount;
                $data_pd['order_sn'] = $order_info['order_sn'];
                $model_pd->changeRcb('order_comb_pay',$data_pd);
            }

            //下单，支付被冻结的预存款
            $pd_amount = floatval($order_info['pd_amount']);
            if ($pd_amount > 0) {
                $data_pd = array();
                $data_pd['member_id'] = $order_info['buyer_id'];
                $data_pd['member_name'] = $order_info['buyer_name'];
                $data_pd['amount'] = $pd_amount;
                $data_pd['order_sn'] = $order_info['order_sn'];
                $model_pd->changePd('order_comb_pay',$data_pd);
            }

            //更新订单状态
            $update_order = array();
            $update_order['order_state'] = 1;
            $update_order['payment_time'] = $post['payment_time'] ? strtotime($post['payment_time']) : TIMESTAMP;
            /* $update_order['payment_code'] = $post['payment_code'];
            $update_order['trade_no'] = $post['trade_no']; */
            $update = $card_combination->editOrder($update_order,array('order_id'=>$order_info['order_id']));
            if (!$update) {
                throw new Exception(L('nc_common_save_fail'));
            }

            //发放兑换码
            /* $insert = $card_combination->addOrderCode($order_info);
            if (!$insert) {
                throw new Exception('兑换码发送失败');
            } */

            // 支付成功发送买家消息
            /* $param = array();
            $param['code'] = 'order_payment_success';
            $param['member_id'] = $order_info['buyer_id'];
            $param['param'] = array(
                    'order_sn' => $order_info['order_sn'],
                    'order_url' => urlShop('member_vr_order', 'show_order', array('order_id' => $order_info['order_id']))
            );
            QueueClient::push('sendMemberMsg', $param); */

            // 支付成功发送店铺消息
            /* $param = array();
            $param['code'] = 'new_order';
            $param['store_id'] = $order_info['store_id'];
            $param['param'] = array(
                    'order_sn' => $order_info['order_sn']
            );
            QueueClient::push('sendStoreMsg', $param); */
            
            $card_combination->commit();
            return callback(true,'更新成功');

        } catch (Exception $e) {
            $card_combination->rollback();
            return callback(false,$e->getMessage());
        }
    }
	
	/**
	 * APP端支付完成获取；验证用户是否存在；获取礼品卡key
	 * add by lizh 15:45 2016/8/5
	 */
	public function getKey($pay_sn, $member_mobile) {
		
		$card_combination = Model('card_combination');
		$card_combination_info = $card_combination -> getOne(array(pay_sn => $pay_sn,member_mobile => $member_mobile));
		if(empty($card_combination_info)) {
			
			$return['url'] = "";
			$return['message'] = "礼品卡不存在";
			return callback(0,$return);
			
		}
		
		$member_id = $card_combination_info['member_id'];
		$bill_state = $card_combination_info['bill_state'];
		if($bill_state == 0) {
			
			$return['url'] = "";
			$return['message'] = "礼品单未支付";
			return callback(0,$return);
			
		}
		
		$card_check = Model('card_check');
		$combination_id = $card_combination_info['combination_id'];
		$rs = $card_check -> isExist(array(combination_id => $combination_id));
		
		if(!$rs) {
			
			if(empty($member_id)) {
			
				$key = md5($card_combination_info['combination_id'].$member_mobile.$pay_sn);
				$insert_array['combination_id'] = $card_combination_info['combination_id'];
				$insert_array['sign'] = $key;
				$insert_array['create_time'] = time();
				$insert_array['check_state'] = 0;
				$insert_array['flag_state'] = 0;

				$result = $card_check -> save($insert_array);
				
				$card_check_info = $card_check -> getOne(array(check_id => $result));
				$return['url'] = 'http://www.site.com/wap/tmpl/member/register.html?key='.$card_check_info['sign'];
				$return['message'] = "用户未注册";
				//$return['state'] = 0;
				
			} else {
				
				//$return['state'] = 1;
				$return['url'] = "";
				$return['message'] = "已用户注册";
				
			}
			
			return callback(1, $return);
			
		} else {
			
			$return['url'] = "";
			$return['message'] = "key已经存在；无法重新获取";
			return callback(0,$return);
			
		}
		
	}
}
<?php

/**
 * 活动
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class micro_likeControl extends apiMemberControl {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 点赞保存
     * */
    public function like_saveOp() {

        $data = array();
        $data['result'] = 'true';
        $data['message'] = '点赞成功';
        $like_id = intval($_GET['like_id']);
        $like_type = 2;
        if ($like_id <= 0 || empty($like_type)) {
            $data['result'] = 'false';
            $data['message'] = '点赞失败';
        }

        $param = array();
        $param['like_type'] = $like_type;
        $param["like_object_id"] = $like_id;
        $param['like_member_id'] = $this->member_info['member_id'];
        $model_like = Model('micro_like');
        $model_micro_personal = Model('micro_personal');
        $is_exist = $model_like->isExist($param);
        if (!$is_exist) {
            $param['like_time'] = time();
            $result = $model_like->save($param);
            if ($result) {
                $model = Model();
                //喜欢计数加1
                $update = array(
                    'like_count' => array('exp', 'like_count+1')
                );
                $condition = array();
                $condition['personal_id'] = $like_id;
                $model->table("micro_personal")->where($condition)->update($update);
                $micro = $model_micro_personal->getOne($condition, '', 'like_count,commend_member_id');
                $param = array();
                                $param['code'] = 'like_notice';
                                $param['member_id'] = $micro['commend_member_id'];
                                $param['type'] = 6;
                                $param['param'] = array(
                                    'member_name' =>  $this->member_info['member_truename'],
                                    'commend_message' => Model('micro_personal')->getfby_personal_id($_GET['like_id'],'commend_message')
                                );
                 QueueClient::push('sendMemberMsg', $param);
                //返回信息
                $data['like_count'] = $micro['like_count'];
                $data['result'] = 'true';
                $array = array("点赞棒棒哒","爱你mua~~","点完赞关注我一下嘛","爱我你就赞赞我","敢不敢给我32个赞","我欣赏你的点赞","感谢你真诚的点赞","你点赞的样子好美","爱点赞的都颜值高","我也喜欢你");
                $rand=array_rand($array,1);
                $data['message'] = $array[$rand];
            } else {
                $data['result'] = 'false';
                $data['message'] = '保存失败';
            }
        } else {
            $data['result'] = 'false';
            $data['message'] = '已经点过赞了';
            $condition = array();
            $condition['personal_id'] = $like_id;
            $micro = $model_micro_personal->getOne($condition, '', 'like_count');
            $data['like_count'] = $micro['like_count'];
        }

        output_data($data);
    }

    /**
     * 喜欢删除
     * */
    public function like_dropOp() {
        $like_id = intval($_GET['like_id']);
        if ($like_id > 0) {
            $model_like = Model('micro_like');
            $model_micro_personal = Model('micro_personal');
            $param = array();
            $param["like_object_id"] = $like_id;
            $param['like_member_id'] = $this->member_info['member_id'];
            $is_exist = $model_like->isExist($param);
            if ($is_exist) {
                $model = Model();
                $result = $model_like->drop(array("like_object_id" => $like_id));
                $update = array(
                    'like_count' => array('exp', 'like_count-1')
                );

                $condition = array();
                $condition['personal_id'] = $like_id;
                $model->table('micro_personal')->where($condition)->update($update);
                if ($result) {
                    $data['result'] = 'true';
                    $data['message'] = '取消点赞成功';
                    $condition = array();
                    $condition["personal_id"] = $like_id;
                    $micro = $model_micro_personal->getOne($condition, '', 'like_count');
                    $data['like_count'] = $micro['like_count'];
                }
            } else {
                $data['result'] = 'false';
                $data['message'] = '取消点赞失败';
                $condition = array();
                $condition["personal_id"] = $like_id;
                $micro = $model_micro_personal->getOne($condition, '', 'like_count');
                $data['like_count'] = $micro['like_count'];
            }
        }
        output_data($data);
    }

    /**
     * 我的点赞
     * add by niro 15:42 2016/7/15
     */
   /*  public function my_likeOp() {
        $model_like = Model('micro_like');
        $condition = array();
        $condition['micro_like.like_member_id'] = $this->member_info['member_id'];
        $like_list = $model_like->getPersonalList($condition, $this->page, 'like_id desc', '*');
        foreach ($like_list as $key => $value) {
            $like_list[$key]['commend_image'] = UPLOAD_SITE_URL . DS . ATTACH_MICROSHOP . DS . $value['commend_member_id'] . DS . $value['commend_image'];
        }
        $page_count = $model_like->gettotalpage();
        output_data($like_list, mobile_page($page_count));
    } */
	
	/**
     * 我的点赞列表
     * add by lizh 12:04 2016/7/26
     */
    public function my_like_1_5Op() {
		
        $model_like = Model('micro_like');
        $condition = array();
        $condition['micro_like.like_member_id'] = $this->member_info['member_id'];
		$field = 'micro_personal.personal_id,micro_personal.commend_message,micro_personal.commend_member_id,micro_personal.commend_image,micro_personal.like_count,micro_personal.position'
				 .',micro_like.like_time'
				 .',member.member_id,member.member_name,member.member_avatar';
        $like_list = $model_like->getPersonalList($condition, $this->page, 'like_id desc', $field);
		
		$i = 0;
		$data_array = array();
        foreach ($like_list as $key => $value) {
            
			$data = "";
			$data = date('d.m月',$value['like_time']);
			$data_array[$data] = $data;
			$i++;
			
		}
		
		$n = 0;
		$list_array = array();
		foreach($data_array as $k2 => $v2) {
			
			$data = $v2;
			
			foreach($like_list as $key2 => $value2) {
				
				$value2['commend_image'] = UPLOAD_SITE_URL . DS . ATTACH_MICROSHOP . DS . $value2['commend_member_id'] . DS . $value2['commend_image'];
				$value2['member_avatar'] = getMemberAvatar($value2['member_avatar']);
				$like_time_day = date('d',$value2['like_time']);
				$like_time_mon = date('m月',$value2['like_time']);
				$data2 = date('d.m月',$value2['like_time']);
				
				if($data == $data2) {
					
					$list_array[$n]['data'] = $data2;
					$list_array[$n]['data_day'] = $like_time_day;
					$list_array[$n]['data_mon'] = $like_time_mon;
					$list_array[$n]['info'][] = $value2;
					
				}
				
			}
			
			$n++;
			
		}
		
        $page_count = $model_like->gettotalpage();
        output_data($list_array, mobile_page($page_count));
    
	}

    /**
     * 找灵感点赞接口
     * add by lizh 09:37 2016/7/13
     */
    public function inspirationLikeOp() {

        if (empty($_GET['member_id']) && empty($_GET['key'])) {

            output_data(array(status => 0, message => '用户未登录'));
        }

        if (!empty($_GET['key'])) {

            $key = $_GET['key'];

            $model_mb_user_token = Model('mb_user_token');
            $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($key);

            if (empty($mb_user_token_info)) {

                output_data(array(status => 0, message => '用户未登录'));
            } else {

                $member_id = $mb_user_token_info['member_id'];
            }
        }

        if (!empty($_GET['member_id'])) {

            $member_id = $_GET['member_id'];
        }

        $personal_id = $_GET['personal_id'];

        $micro_like = Model('micro_like');
        $result = $micro_like->setUsersPointLike($member_id, $personal_id);

        if ($result == 1) {

            output_data(array(status => 1, message => '点赞成功'));
        } else if ($result == 0) {

            output_data(array(status => 0, message => '点赞失败'));
        } else if ($result == 2) {

            output_data(array(status => 0, message => '用户已点赞'));
        }
    }

}

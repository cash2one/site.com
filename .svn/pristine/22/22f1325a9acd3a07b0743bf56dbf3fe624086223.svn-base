<?php

/**
 * 活动
 *
 *
 *
 **/
defined('InShopNC') or exit('Access Invalid!');

class microControl extends apiHomeControl {

    /**
     * 单个活动信息页
     */
    public function get_personal_listOp() {
        $model_personal = Model('micro_personal');
         $order = 'personal_id desc,microshop_sort asc,like_count desc';
        $page = $_GET['page'];
        $condition['microshop_commend'] = 1;
        if($_GET['keyword']){
        $condition['commend_message'] = array('like', '%' . $_GET['keyword'] . '%');
        }
        $field = 'micro_personal.*,member.member_name,member.member_truename,member.member_avatar,member_areainfo';
        $list = $model_personal->getListWithUserInfo($condition, $this->page, $order, $field);
        $page_count = $model_personal->gettotalpage();
        foreach ($list as $key => $value) {
           if($list[$key]['commend_image']){
                        $file_name = str_replace('.', '_'.'tiny'.'.', $list[$key]['commend_image']);
                        $file_name_list = str_replace('.', '_'.'list'.'.', $list[$key]['commend_image']);
            $list[$key]['commend_image'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].'/'.$list[$key]['commend_image'];
             $list[$key]['commend_image_tiny'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name  ;
             $list[$key]['commend_image_list'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name_list  ;
             }
            $list[$key]['member_avatar'] =  getMemberAvatarForID($list[$key]['commend_member_id']);
            $list[$key]['image_width'] = @getimagesize($list[$key]['commend_image'])[0];
            if(empty($list[$key]['image_width'])){
                 $list[$key]['image_width'] = 0;
            }
            $list[$key]['image_height'] = @getimagesize($list[$key]['commend_image'])[1];
if(empty($list[$key]['image_height'])){
                  $list[$key]['image_height'] = 0;
            }
                     if($list[$key]['position']){
						$list[$key]['position'] = @explode('-',$list[$key]['position']);
						foreach ($list[$key]['position'] as $k => $v) {
	//                        list($micro_personal_detail['position'][$key]['type'],$micro_personal_detail['position'][$key]['derection'],$micro_personal_detail['position'][$key]['x'],$micro_personal_detail['position'][$key]['y'],$micro_personal_detail['position'][$key]['text']) = explode(',', $value); 
						   $micro_personal_detailbb =  explode(',', $v);
	//                       //$micro_personal_detail['position'][$key]['t']=$micro_personal_detail['position'][$key][0];
	//
						 
							$micro_personal_detailcc['type'] = $micro_personal_detailbb[0];
							$micro_personal_detailcc['derection'] = $micro_personal_detailbb[1];
							$micro_personal_detailcc['x'] = $micro_personal_detailbb[2];
							$micro_personal_detailcc['y'] = $micro_personal_detailbb[3];
							$micro_personal_detailcc['text'] = $micro_personal_detailbb[4];
						   $list[$key]['position'][$k] = $micro_personal_detailcc;
                       
						}
              
					} else {
						
						$list[$key]['position'] = array();
						
					}
//                else {
//                    $list[$key]['position']=null;
//                }
        }
        output_data($list,  mobile_page($page_count));
    }

    /**
     * 单个活动信息页
     */
    public function get_personal_list_wapOp() {
        $model_personal = Model('micro_personal');
        $order = 'personal_id desc';
        $page = $_GET['page'];
        $condition['microshop_commend'] = 1;
        if($_GET['keyword']){
            $condition['commend_message'] = array('like', '%' . $_GET['keyword'] . '%');
        }
        $field = 'micro_personal.*,member.member_name,member.member_truename,member.member_avatar,member_areainfo';
        $list = $model_personal->getListWithUserInfo($condition, $this->page, $order, $field);
        $page_count = $model_personal->gettotalpage();
        foreach ($list as $key => $value) {
            if($list[$key]['commend_image']){
                $file_name = str_replace('.', '_'.'tiny'.'.', $list[$key]['commend_image']);
                $file_name_list = str_replace('.', '_'.'list'.'.', $list[$key]['commend_image']);
                $list[$key]['commend_image'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].'/'.$list[$key]['commend_image'];
                $list[$key]['commend_image_tiny'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name  ;
                $list[$key]['commend_image_list'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name_list  ;
            }
            $list[$key]['member_avatar'] =  getMemberAvatarForID($list[$key]['commend_member_id']);
            $list[$key]['image_width'] = @getimagesize($list[$key]['commend_image'])[0];
            $list[$key]['image_height'] = @getimagesize($list[$key]['commend_image'])[1];

        }
        $list_wap['goods_list'] = $list;
        output_data($list_wap,  mobile_page($page_count));
    }
    
    /**
     * 评论列表
     */
    public function comment_listOp() {
        $comment_id = intval($_GET['comment_id']);
        $model_comment = Model('micro_comment');
        $page = intval($_GET['page']);
        if($comment_id > 0) {
            $condition = array();
            $condition['comment_object_id'] = $comment_id;
            $comment_type = 2;
            if(!empty($comment_type)) {
                $condition['comment_type'] = $comment_type; 
                $field = 'micro_comment.*,member.member_name,member.member_truename,member.member_avatar';
                $comment_list = $model_comment->getListWithUserInfo($condition,$page,'comment_time desc',$field);
                foreach ($comment_list as $key => $value) {
                    $comment_list[$key]['member_avatar'] =  getMemberAvatarForID($comment_list[$key]['comment_member_id']);
                    $comment_list[$key]['comment_message'] = json_decode($comment_list[$key]['comment_message']);
					if($comment_list[$key]['comment_image']){
                        $file_name = str_replace('.', '_'.'tiny'.'.', $comment_list[$key]['comment_image']);
                        $file_name_list = str_replace('.', '_'.'list'.'.', $comment_list[$key]['comment_image']);
						$comment_list[$key]['comment_image'] =     UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP_COMMENT.DS.$comment_list[$key]['comment_member_id'].DS.$comment_list[$key]['comment_image'];
						$comment_list[$key]['comment_image_tiny'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP_COMMENT.DS.$comment_list[$key]['comment_member_id'].DS.$file_name  ;
						$comment_list[$key]['comment_image_list'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP_COMMENT.DS.$comment_list[$key]['comment_member_id'].DS.$file_name_list  ;
                    }
                }
                output_data($comment_list);
            }
        }
    }

    /**
     * 瞬间列表
     * add by lizh 10:52 2016/7/19
     */
    public function get_personal_list_wap_1_5Op() {
        $model_personal = Model('micro_personal');
        $micro_like = Model('micro_like');
        $sns_friend = Model('sns_friend');
        $order = 'micro_personal.microshop_sort asc,micro_personal.personal_id desc';
        $page = $_GET['page'];
        $condition['microshop_commend'] = 1;
		
        //用户ID
        $member_key = $_GET['key'];
        $model_mb_user_token = Model('mb_user_token');
        $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($member_key);
        $member_id = $mb_user_token_info['member_id'];

        $field = 'micro_personal.*,member.member_name,member.member_truename,member.member_avatar,member_areainfo';
        $list = $model_personal->getListWithUserInfo($condition, $this->page, $order, $field);
		
        $page_count = $model_personal->gettotalpage();
        
        foreach ($list as $key => $value) {
			
            if($list[$key]['commend_image']){
                $file_name = str_replace('.', '_'.'tiny'.'.', $list[$key]['commend_image']);
                $file_name_list = str_replace('.', '_'.'list'.'.', $list[$key]['commend_image']);
                $list[$key]['commend_image'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].'/'.$list[$key]['commend_image'];
                $list[$key]['commend_image_tiny'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name  ;
                $list[$key]['commend_image_list'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$list[$key]['commend_member_id'].DS.$file_name_list  ;
            }
			
            $list[$key]['member_avatar'] =  getMemberAvatarForID($list[$key]['commend_member_id']);
            $list[$key]['image_width'] = @getimagesize($list[$key]['commend_image'])[0];
            $list[$key]['image_height'] = @getimagesize($list[$key]['commend_image'])[1];
            
            if($value['flag_state'] == 1) {
			
                $url_str = $value['goods_url'];
                $url_array = parse_url($url_str);

                $url_get_value_array = $this -> convertUrlQuery($url_array['query']);

                if(!empty($url_get_value_array['goods_id'])) {

                        $list[$key]['goods_id'] = $url_get_value_array['goods_id'];

                } else {

                        $list[$key]['flag_state'] = 0;

                }

            }
            
            if($list[$key]['position']){
                $list[$key]['position'] = @explode('-',$list[$key]['position']);
                foreach ($list[$key]['position'] as $k => $v) {

                    $micro_personal_detailbb =  explode(',', $v);
                    $list[$key]['position'][$k] = array();
                    $micro_personal_detailcc = array();
                    $micro_personal_detailcc['type'] = $micro_personal_detailbb[0];
                    $micro_personal_detailcc['derection'] = $micro_personal_detailbb[1];
                    $micro_personal_detailcc['x'] = $micro_personal_detailbb[2];
                    $micro_personal_detailcc['y'] = $micro_personal_detailbb[3];
                    $micro_personal_detailcc['text'] = $micro_personal_detailbb[4];
                    $list[$key]['position'][$k] = $micro_personal_detailcc;

                }

            } else {

                $list[$key]['position'] = array();

            }
			
            if(empty($member_key)) {

                $list[$key]['is_like'] = 0;
                $list[$key]['is_friend'] = 0;

            } else {

                $like_exist = $micro_like -> isExist(array(like_member_id => $member_id, like_object_id => $value['personal_id'], like_type => 2));
                $friend_exist = $sns_friend -> countFriend(array(friend_frommid => $member_id, friend_tomid => $value['commend_member_id']));

                if($like_exist) {

                    $list[$key]['is_like'] = 1;

                } else {

                    $list[$key]['is_like'] = 0;

                }

                if($friend_exist > 0) {

                    $list[$key]['is_friend'] = 1;

                } else {

                    $list[$key]['is_friend'] = 0;

                }

            }
            //getListFriend($condition,$field='*',$obj_page='',$order='friend_id desc',$limit='',$group='')
            $condition = 'friend_tomid = '. $value['commend_member_id'];
            $micro_like_data = $sns_friend -> getListFriend($condition, 'friend_frommid', '', 'friend_id desc',4,'');
            foreach($micro_like_data as $k => $v) {

                $micro_like_data[$k]['member_avatar'] = getMemberAvatarForID($v['friend_frommid']);
                $micro_like_data[$k]['like_member_id'] = $v['friend_frommid'];

            }

            $list[$key]['micro_like_data'] = $micro_like_data;
            $list[$key]['commend_time'] = date('Y/m/d',$value['commend_time']);
            $list[$key]['count_friend'] = $sns_friend -> countFriend(array(friend_tomid => $value['commend_member_id']));

        }
 
        $list_wap['goods_list'] = $list;  //瞬间列表
        output_data($list_wap,  mobile_page($page_count));
    
    }
	
    /**
     * WAP端红人榜和橱窗列表接口
     * add by lizh 11:26 2016/7/19
     */
    public function getPersonalLike_wap_1_5Op() {

         //用户ID
        $member_key = $_GET['key'];
        $model_mb_user_token = Model('mb_user_token');
        $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($member_key);
        $member_id = $mb_user_token_info['member_id'];

        $model_personal = Model('micro_personal');
        $member = Model('member');
        $micro_like = Model('micro_like');
        $sns_friend = Model('sns_friend');
        $personal_like_list = $sns_friend -> getQuery("select COUNT(*) AS count_friend, wf.friend_tomid from wantease_sns_friend wf where wf.friend_tomid != 0 GROUP BY wf.friend_tomid ORDER BY count_friend desc limit 0,20");
      
//$field = 'member.member_id,member.member_name,member.member_avatar';
        //$personal_like_list = $model_personal -> getGroupListWithUserInfo(array(),null,'like_count desc',$field,20,'micro_personal.commend_member_id');
        foreach($personal_like_list as $k => $v) {

            $personal_like_list[$k]['member_avatar'] = getMemberAvatarForID($v['friend_tomid']);
            $member_info = array();
            $member_info = $member -> getMemberInfo(array(member_id => $v['friend_tomid']), 'member_name,member_truename');
            $personal_like_list[$k]['member_name'] = $member_info['member_name'];
            $personal_like_list[$k]['member_truename'] = $member_info['member_truename'];
            $personal_like_list[$k]['member_id'] = $v['friend_tomid'];
            unset($personal_like_list[$k]['friend_tomid']);
            //$personal_like_list[$k]['count_friend'] = $sns_friend -> countFriend(array(friend_tomid => $v['member_id']));

            if(empty($member_key)) {

                $personal_like_list[$k]['is_like'] = 0;
                $personal_like_list[$k]['is_friend'] = 0;

            } else {

                $like_exist = $micro_like -> isExist(array(like_member_id => $member_id, like_object_id => $v['personal_id'], like_type => 2));
                $friend_exist = $sns_friend -> countFriend(array(friend_frommid => $member_id, friend_tomid => $v['friend_tomid']));
              
                if($like_exist) {

                    $personal_like_list[$k]['is_like'] = 1;

                } else {

                    $personal_like_list[$k]['is_like'] = 0;

                }

                if($friend_exist > 0) {

                    $personal_like_list[$k]['is_friend'] = 1;

                } else {

                    $personal_like_list[$k]['is_friend'] = 0;

                }

            }
            //$count_friend_array[] = $personal_like_list[$k]['count_friend'];
        }

        //array_multisort($count_friend_array,SORT_NUMERIC,SORT_DESC,$personal_like_list);
        $list_wap['personal_like_list'] = $personal_like_list;  //红人榜

        $model_class = Model('favorites_class');

        $key = $_POST['key'];
        if (empty($key)) {
            $key = $_GET['key'];
        }
        $model_mb_user_token = Model('mb_user_token');
        $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($key);
        $favorites_list = $model_class->getFavoritesList(array(
            'member_id'=>$mb_user_token_info['member_id'],favorites_class_type => 'showcase'
        ), '*', 0);

        foreach($favorites_list as $k => $v) {

            if(!empty($v['favorites_img'])) {

                $favorites_list[$k]['favorites_img'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$v['favorites_img'];

            } else {

                $favorites_list[$k]['favorites_img'] = UPLOAD_SITE_URL.DS.defaultGoodsImage('240');

            }


        }

        if(empty($favorites_list)) {

             $list_wap['favorites_list'] = array();  //橱窗列表

        } else {

            $list_wap['favorites_list'] = $favorites_list;  //橱窗列表

        }

        output_data($list_wap);
    }
	
    /**
     * 找灵感详情页
     * add by lizh 11:59 2016/7/11
     * update by lizh 11:06 2016/7/27
     */
    public function inspirationDetailOp() {
        $personal_id = $_GET['personal_id'];
        $micro_personal = Model('micro_personal');
        //更新瞬间点击数
        $rs = $micro_personal -> modify(array('click_count' =>array('exp','click_count+1')), array(personal_id => $personal_id));
        //瞬间信息
        $micro_personal_detail = $micro_personal -> getOne(array(personal_id => $personal_id));

        $micro_personal_detail['commend_image'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$micro_personal_detail['commend_member_id'].'/'.$micro_personal_detail['commend_image'];
        $micro_personal_detail['member_avatar'] = getMemberAvatarForID($micro_personal_detail['commend_member_id']);
        $member_data = Model() -> table('member') -> where(array(member_id => $micro_personal_detail['commend_member_id'])) -> find();
        $micro_personal_detail['member_name'] = $member_data['member_name'];
        $micro_personal_detail['member_truename'] = $member_data['member_truename'];
        $micro_personal_detail['commend_time'] = date('Y/m/d', $micro_personal_detail['commend_time']);

        if($micro_personal_detail['flag_state'] == 1) {

            $url_str = $micro_personal_detail['goods_url'];
            $url_array = parse_url($url_str);

            $url_get_value_array = $this -> convertUrlQuery($url_array['query']);

            if(!empty($url_get_value_array['goods_id'])) {

                $micro_personal_detail['goods_id'] = $url_get_value_array['goods_id'];

            } else {

                $micro_personal_detail['flag_state'] = 0;

            }

        }

        if($micro_personal_detail['position']){
            $micro_personal_detail['position'] = (array)explode('-',$micro_personal_detail['position']);
            foreach ($micro_personal_detail['position'] as $key => $value) {

                $micro_personal_detailbb =  explode(',', $value);
                $micro_personal_detailcc['type'] = $micro_personal_detailbb[0];
                $micro_personal_detailcc['derection'] = $micro_personal_detailbb[1];
                $micro_personal_detailcc['x'] = $micro_personal_detailbb[2];
                $micro_personal_detailcc['y'] = $micro_personal_detailbb[3];
                $micro_personal_detailcc['text'] = $micro_personal_detailbb[4];
                $micro_personal_detail['position'][$key] = $micro_personal_detailcc;

            }

        } else {

            $micro_personal_detail['position'] = array();

        }

        //用户评论
        $micro_comment = Model('micro_comment');
        $field = "micro_comment.comment_id,micro_comment.comment_message,micro_comment.comment_time,micro_comment.like_count,member.member_id,member.member_name,member.member_truename,member.member_avatar";
        $micro_comment_list = $micro_comment -> getListWithUserInfo(array(comment_object_id => $personal_id,comment_type => 2), 0, 'micro_comment.comment_id desc', $field);

        foreach($micro_comment_list as $k => $v) {

            $micro_comment_list[$k]['comment_time'] = date('Y/m/d',$v['comment_time']);
            $micro_comment_list[$k]['member_avatar'] = getMemberAvatar($v['member_avatar']);
            $micro_comment_list[$k]['comment_message'] = json_decode($micro_comment_list[$k]['comment_message']);

        }

        //推荐商品
        $model_goods = Model('goods');
        $condition = array();
        $guess_like = $model_goods->getGoodsListByColorDistinct($condition, 'goods_id,goods_name,goods_promotion_price,goods_price,goods_image', 'rand()', '5');
        foreach ($guess_like as $key => $value) {
            $guess_like[$key]['goods_image'] = thumb($value,360);
        }

        $login_data = array();
        if(!empty($_GET['key'])) {
            $model_mb_user_token = Model('mb_user_token');
            $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($_GET['key']);
            $member_id = $mb_user_token_info['member_id'];
            $_SESSION['invite_mycode'] = Model('member')->table('member')->getfby_member_id($member_id, 'invite_mycode');
            if($micro_personal_detail['commend_member_id']==$member_id){
                $login_data['is_owner'] =1;
                $micro_personal_detail['myself_state']  = 1; 
            }else{
                $login_data['is_owner'] =0;
                $micro_personal_detail['myself_state']  = 0; 
            }
            $login_data['avatar'] = getMemberAvatarForID($member_id);

            $micro_like = Model('micro_like');
            $rs = $micro_like -> isExist(array("like_type" => 2, "like_object_id" => $personal_id, like_member_id => $member_id));
            if($rs) {

                $micro_personal_detail['is_like']  = 1; 

            } else {

                $micro_personal_detail['is_like']  = 0; 

            }

        } else {

            $login_data['avatar'] = UPLOAD_SITE_URL.DS.defaultGoodsImage('360');
            $micro_personal_detail['is_like']  = 0; 
            $micro_personal_detail['myself_state']  = 0; 
        }

        /* $jssdk = new JSSDK("wx80efdffe7df441b2", "a8d6a3d92f41fd9a8b5843f6c065d5fd");
        $signPackage = $jssdk->GetSignPackage(); */
        //$list_wap['signPackage'] = $signPackage;
        output_data(array(micro_personal_detail => $micro_personal_detail, micro_comment_list => $micro_comment_list,guess_like => $guess_like,login_data => $login_data));

    }
	
	/**
	 * Returns the url query as associative array
	 *
	 * @param    string    query
	 * @return    array    params
	 */
	private function convertUrlQuery($query) {
/* print_r();
exit; */
            $query = ($query);
            /* echo htmlspecialchars_decode($query);
            echo '<br/>'; */
            $queryParts = explode('&', htmlspecialchars_decode($query));
            /* print_r($queryParts);
            exit;*/
            $params = array();
            foreach ($queryParts as $param)	{

                    $item = explode('=', $param);
                    $params[$item[0]] = $item[1];
            }
            return $params;

	}
	
	//瞬间关注的人
	public function like_inspirationOp() {
		
            $member_id = $_GET['personal_id'];

            $key = $_GET['key'];

            $my_member_id = 0;
            if(!empty($key)) {

                $model_mb_user_token = Model('mb_user_token');
                $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($key);
                $my_member_id = $mb_user_token_info['member_id'];
            }

            $sns_friend = Model('sns_friend');
            $like_list = $sns_friend -> getListFriend("friend_tomid =".$member_id, 'friend_frommid');
            $like_inspiration_member = array();
            if(!empty($like_list)) {

                $member = Model('member');
                $sns_friend = Model('sns_friend');
                $favorites = Model('favorites');

                foreach($like_list as $k => $v) {

                    $member_id = $v['friend_frommid'];
                    $like_inspiration_member[] = $member -> getMemberInfo(array(member_id => $member_id), 'member_id,member_name,member_truename,member_avatar');
                }

                foreach($like_inspiration_member as $k2 => $v2) {

                    $member_id = $v2['member_id'];
                    $like_inspiration_member[$k2]['member_avatar'] = getMemberAvatar($v2['member_avatar']);
                    if($my_member_id != 0) {

                            $data = $sns_friend -> getListFriend("friend_tomid = $member_id and friend_frommid = $my_member_id");

                            if(empty($data)) {

                                $like_inspiration_member[$k2]['like_state'] = 0;

                            } else {

                                $like_inspiration_member[$k2]['like_state'] = 1;

                            }

                    } else {

                        $like_inspiration_member[$k2]['like_state'] = 0;

                    }
                    $like_inspiration_member[$k2]['like_count'] = $sns_friend -> countFriend(array(friend_frommid => $member_id));
                    $like_inspiration_member[$k2]['like_my_count'] = $sns_friend -> countFriend(array(friend_tomid => $member_id));
                    $like_inspiration_member[$k2]['showcase_count'] = $favorites -> getShowcase_classFavoritesCountByBrandsId($member_id);

                } 

            }

            output_data($like_inspiration_member,array(page_total => 100));
		
	}
	

}

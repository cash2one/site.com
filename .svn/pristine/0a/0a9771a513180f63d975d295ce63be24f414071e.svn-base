<?php

/**
 * 活动
 *
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class microControl extends apiHomeControl {

    /**
     * 单个活动信息页
     */
    public function get_personal_listOp() {
        $model_personal = Model('micro_personal');
         $order = 'like_count desc';
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
            $list[$key]['image_width'] = getimagesize($list[$key]['commend_image'])[0];
            if(empty($list[$key]['image_width'])){
                 $list[$key]['image_width'] = 0;
            }
            $list[$key]['image_height'] = getimagesize($list[$key]['commend_image'])[1];
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
		    if($list[$key]['position']){
				$list[$key]['position'] = @explode('-',$list[$key]['position']);
				foreach ($list[$key]['position'] as $k => $v) {
//                        list($micro_personal_detail['position'][$key]['type'],$micro_personal_detail['position'][$key]['derection'],$micro_personal_detail['position'][$key]['x'],$micro_personal_detail['position'][$key]['y'],$micro_personal_detail['position'][$key]['text']) = explode(',', $value); 
				   $micro_personal_detailbb =  explode(',', $v);
//                       //$micro_personal_detail['position'][$key]['t']=$micro_personal_detail['position'][$key][0];
//
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
			$micro_like_data = $micro_like -> where(array(like_object_id => $value['personal_id'], like_type => 2)) -> limit(4) -> select();
			foreach($micro_like_data as $k => $v) {
				$micro_like_data[$k]['member_avatar'] = getMemberAvatarForID($v['like_member_id']);
			}
			
			$list[$key]['micro_like_data'] = $micro_like_data;
			
			$list[$key]['count_friend'] = $sns_friend -> countFriend(array(friend_tomid => $value['commend_member_id']));

        }
 
		$list_wap['goods_list'] = $list;  //瞬间列表
		
		/* $member = Model('member');
		$field = 'member.member_id,member.member_name,member.member_avatar';
		$personal_like_list = $model_personal -> getListWithUserInfo(array(),null,'like_count desc',$field,3);
		foreach($personal_like_list as $k => $v) {

			$personal_like_list[$k]['member_avatar'] = getMemberAvatarForID($v['member_id']);
			
		}
        $list_wap['personal_like_list'] = $personal_like_list;  */ //红人榜
		
		output_data($list_wap,  mobile_page($page_count));
    
	}
	/**
	 * WAP端红人榜和橱窗列表接口
	 * add by lizh 11:26 2016/7/19
	 */
	public function getPersonalLike_wap_1_5Op() {
		
		$model_personal = Model('micro_personal');
		$field = 'member.member_id,member.member_name,member.member_avatar';
		$personal_like_list = $model_personal -> getGroupListWithUserInfo(array(),null,'like_count desc',$field,3,'micro_personal.commend_member_id');
		foreach($personal_like_list as $k => $v) {

			$personal_like_list[$k]['member_avatar'] = getMemberAvatarForID($v['member_id']);
			
		}
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
				
				$favorites_list[$k]['favorites_img'] = UPLOAD_SITE_URL.DS.ATTACH_MICROSHOP.DS.$mb_user_token_info['member_id'].DS.$v['favorites_img'];
				
			} else {
				
				$favorites_list[$k]['favorites_img'] = UPLOAD_SITE_URL.DS.defaultGoodsImage('240');
				
			}
			
			
		}
		
		$list_wap['favorites_list'] = $favorites_list;  //橱窗列表
		
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
		$micro_personal_detail['commend_time'] = date('Y/m/d', $micro_personal_detail['commend_time']);

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
		
		}
		
		//用户评论
		$micro_comment = Model('micro_comment');
		$field = "micro_comment.comment_id,micro_comment.comment_message,micro_comment.comment_time,member.member_id,member.member_name,member.member_avatar";
		$micro_comment_list = $micro_comment -> getListWithUserInfo(array(comment_object_id => $personal_id,comment_type => 2), 0, 'micro_comment.comment_id desc', $field);
		
		foreach($micro_comment_list as $k => $v) {
			
			$micro_comment_list[$k]['comment_time'] = date('Y/m/d',$v['comment_time']);
			$micro_comment_list[$k]['member_avatar'] = getMemberAvatar($v['member_avatar']);
			$micro_comment_list[$k]['like_count'] = 0;
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
			$mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($key);
			$member_id = $mb_user_token_info['member_id'];
			
			$login_data['avatar'] = getMemberAvatarForID($member_id);
			
		} else {
			
			$login_data['avatar'] = UPLOAD_SITE_URL.DS.defaultGoodsImage('360');
			
		}
		
		output_data(array(micro_personal_detail => $micro_personal_detail, micro_comment_list => $micro_comment_list,guess_like => $guess_like,login_data => $login_data));
	
	}
	

}

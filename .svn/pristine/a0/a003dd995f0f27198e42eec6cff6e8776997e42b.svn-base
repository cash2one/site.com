<?php

/**
 * 文章 
 * */
defined('InShopNC') or exit('Access Invalid!');

class cms_commentControl extends mobileMemberControl {

    public function __construct() {
        parent::__construct();
    }

    public function comment_saveOp() {
        if (!empty($_POST['comment_id'])) {
            $param = array();
            $param['comment_type'] = 1;
            $param["comment_object_id"] = 1;
            if (strtoupper(CHARSET) == 'GBK') {
                $param['comment_message'] = Language::getGBK(trim($_POST['comment_message']));
            } else {
                $param['comment_message'] = trim($_POST['comment_message']);
            }
            $param['comment_member_id'] = $this->member_info['member_id'];
            $param['comment_time'] = time();

            $model_comment = Model('cms_comment');

            if (!empty($_POST['comment_id'])) {
                $comment_detail = $model_comment->getOne(array('comment_id' => $_POST['comment_id']));
                if (empty($comment_detail['comment_quote'])) {
                    $param['comment_quote'] = $_POST['comment_id'];
                } else {
                    $param['comment_quote'] = $comment_detail['comment_quote'] . ',' . $_POST['comment_id'];
                }
            } else {
                $param['comment_quote'] = '';
            }

            $result = $model_comment->save($param);
            if ($result) {

                //评论计数加1
                $model = Model();
                $update = array();
                $update["article_comment_count"] = array('exp', "article_comment_count" . '+1');
                $condition = array();
                $condition["comment_object_id"] = 1;
                $model->modify($update, $condition);

                //返回信息
                $data['result'] = 'true';
                $data['message'] = "评论成功";
                $data['member_name'] = $this->member_info['member_name'] ;
                $data['member_avatar'] = getMemberAvatar($this->member_info['member_avatar']);
//                $data['member_link'] = SITEURL . DS . 'index.php?act=member_snshome&mid=' . $_SESSION['member_id'];
                $data['comment_message'] = parsesmiles(stripslashes($param['comment_message']));
                $data['comment_time'] = date('Y-m-d H:i:s', $param['comment_time']);
                $data['comment_id'] = $result;
            } else {
                $data['result'] = 'false';
                $data['message'] = "评论失败";
            }
        } else {
            $data['result'] = 'false';
            $data['message'] = "未登录";
        }
    }
    
   
}

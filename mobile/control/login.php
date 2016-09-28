<?php
/**
 * 前台登录 退出操作
 *
 *
 *
 *
 * 
 */

use Shopnc\Tpl;

defined('InShopNC') or exit('Access Invalid!');

class loginControl extends mobileHomeControl {

	public function __construct(){
		parent::__construct();
	}

    private function isQQLogin(){
        return !empty($_GET[type]);
    }
	/**
	 * 登录
	 */
	public function indexOp(){
        if(!$this->isQQLogin()){
            if(empty($_POST['username']) || empty($_POST['password']) || !in_array($_POST['client'], $this->client_type_array)) {
                output_error('登录失败');
            }
        }
		$model_member = Model('member');
        $array = array();
        if($this->isQQLogin()){
            $array['member_qqopenid']	= $_SESSION['openid'];
        }else{
            $array['member_name|member_mobile']	= $_POST['username'];
            $array['member_passwd']	= md5($_POST['password']);
        }

        $member_info = $model_member->getMemberInfo($array);

        if(!empty($member_info)) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if($token){
                    if($this->isQQLogin()){
                        setNc2Cookie('username',$member_info['member_name']);
                        setNc2Cookie('key',$token);
                        header("location:".WAP_SITE_URL.'/tmpl/member/member.html?act=member');
                    }else{
                        output_data(array('username' => $member_info['member_name'], 'key' => $token));
                    }
            } else {
                output_error('登录失败');
            }
        } else {
            output_error('用户名密码错误');
        }
    }

    public function update_truenameOp(){
        $model_member = Model('member');
        $condition1 = array();
        $condition1 = '(member_truename = "" or member_truename is null)';
        $members=  $model_member->getMemberList($condition1, $field = 'member_id', $page = 0, $order = 'member_id desc', $limit = '');

        foreach ($members as $k=>$v){
            $condition['member_id'] = $v['member_id'];
            $data['member_truename'] = '玩艺网_'.$v['member_id'];
            $model_member->editMember($condition, $data);
        }
        echo "OK";
    }
    public function update_yujuOp(){
        $model_member = Model('member');
        $condition1 = array();
        $condition1 = '(member_yuju = "" or member_yuju is null)';
        $members=  $model_member->getMemberList($condition1, $field = 'member_id', $page = 0, $order = 'member_id desc', $limit = '');

        foreach ($members as $k=>$v){
            $condition['member_id'] = $v['member_id'];
            $data['member_yuju'] = '我还没想好我要做什么';
            $model_member->editMember($condition, $data);
        }
        echo "OK";
    }

    /**
     * 登录生成token
     */
    private function _get_token($member_id, $member_name, $client,$device_tokens) {
        $model_mb_user_token = Model('mb_user_token');

        //重新登录后以前的令牌失效
        //暂时停用
        //$condition = array();
        //$condition['member_id'] = $member_id;
        //$condition['client_type'] = $_POST['client'];
        //$model_mb_user_token->delMbUserToken($condition);

        //生成新的token
        $mb_user_token_info = array();
        $token = md5($member_name . strval(TIMESTAMP) . strval(rand(0,999999)));
        $mb_user_token_info['member_id'] = $member_id;
        $mb_user_token_info['member_name'] = $member_name;
        $mb_user_token_info['token'] = $token;
        $mb_user_token_info['login_time'] = TIMESTAMP;
        $mb_user_token_info['client_type'] = $_POST['client'] == null ? 'Android' : $_POST['client'] ;

        $result = $model_mb_user_token->addMbUserToken($mb_user_token_info);
        //存储IOS或安卓端的手机设备号信息;用于友盟推送
        $member = Model('member');
        if(strtolower($mb_user_token_info['client_type']) == 'android' || strtolower($mb_user_token_info['client_type']) == 'ios') {
            $member_info = array();
            $member_info['device_tokens'] = $device_tokens;
            $member_info['member_login_time'] = $mb_user_token_info['login_time'];
            $member -> editMember(array(member_id => $mb_user_token_info['member_id']), $member_info);
            
        }
        if($result) {
            return $token;
        } else {
            return null;
        }

    }

	/**
	 * 注册 重复注册验证 
	 */
	public function registerOp(){
		 if (process::islock('reg')){
			output_error('您的操作过于频繁，请稍后再试');
		} 
		$model_member	= Model('member');
        $register_info = array();
        $register_info['username'] = $_POST['username'];
        $register_info['password'] = $_POST['password'];
        $register_info['password_confirm'] = $_POST['password_confirm'];
        $register_info['email'] = $_POST['email'];
        $member_info = $model_member->register($register_info);
        if(!isset($member_info['error'])) {
	   process::addprocess('reg');
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if($token) {
                output_data(array('username' => $member_info['member_name'], 'key' => $token));
            } else {
                output_error('注册失败');
            }
        } else {
			output_error($member_info['error']);
        }

    }
}

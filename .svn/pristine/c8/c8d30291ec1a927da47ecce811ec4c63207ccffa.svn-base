<?php

/**
 * 前台登录 退出操作
 *
 *

 */
//use Shopnc\Tpl;

defined('InShopNC') or exit('Access Invalid!');

//Base::autoload('vendor/autoload');
class loginControl extends apiHomeControl {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 登录
     */
    public function indexOp() {
        if (empty($_POST['username']) || empty($_POST['password']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('登录失败');
        }

        $model_member = Model('member');

        $array = array();
        $array['member_name|member_mobile'] = $_POST['username'];
        $array['member_passwd'] = md5($_POST['password']);
        $member_info = $model_member->getMemberInfo($array);
        if (empty($member_info) && preg_match('/^0?(13|15|17|18|14)[0-9]{9}$/i', $_POST['username'])) {//根据会员名没找到时查手机号
            $array = array();
            $array['member_name'] = $_POST['username'];
            $array['member_passwd'] = md5($_POST['password']);
            $member_info = $model_member->getMemberInfo($array);
        }
        if (empty($member_info) && (strpos($_POST['username'], '@') > 0)) {//按邮箱和密码查询会员
            $array = array();
            $array['member_name'] = $_POST['username'];
            $array['member_passwd'] = md5($_POST['password']);

            $member_info = $model_member->getMemberInfo($array);
        }

        if (!empty($member_info)) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            $avatar = getMemberAvatar($member_info['member_avatar']);
            if ($token) {
                output_data(array('username' => $member_info['member_name'], 'member_truename'=>$member_info['member_truename'],'avatar'=>$avatar,'userid' => $member_info['member_id'], 'key' => $token));
            } else {
                output_error('登录失败');
            }
        } else {
            output_error('用户名密码错误');
        }
    }

    /*
     * 微信登录
     */

    public function index_wxOp() {
        if (empty($_POST['openid']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('登录失败');
        }

        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('wx_unionid' => $_POST['openid']));


        if (!empty($member_info)) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                $avatar = getMemberAvatar($member_info['member_avatar']);
                output_data(array('username' => $member_info['member_name'],'member_truename' => $member_info['member_truename'],'avatar'=>$avatar, 'userid' => $member_info['member_id'], 'key' => $token));
            } else {
                output_error('登录失败');
            }
        } else {
            $this->_register_wx($_POST['openid'], $_POST['member_name'], $_POST['img_url']);
            exit;
        }
    }

    /**
     * 微信注册
     */
    public function _register_wx() {
        $unionid = $_POST['openid'];
        $member_name = $_POST['member_name'];
        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
        $password = rand(100000, 999999);
        $member = array();
        $member['member_passwd'] = $password;
        $member['member_email'] = '';
        $member['member_truename'] = $member_name;
        $member['wx_unionid'] = $unionid;
        if (empty($member_info)) {
            $member['member_name'] = $member_name;
            $result = $model_member->addMember($member);
        } else {
            for ($i = 1; $i < 999; $i++) {
                $rand += $i;
                $member_name = $member_name . $rand;
                $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
                if (empty($member_info)) {//查询为空表示当前会员名可用
                    $member['member_name'] = $member_name;
                    $result = $model_member->addMember($member);
                    break;
                }
            }
        }
        $headimgurl = $_POST['img_url']; //用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像）
        $headimgurl = substr($headimgurl, 0, -1) . '132';
        $avatar = @copy($headimgurl, BASE_UPLOAD_PATH . '/' . ATTACH_AVATAR . "/avatar_$result.jpg");
        if ($avatar) {
            $model_member->editMember(array('member_id' => $result), array('member_avatar' => "avatar_$result.jpg"));
        }
        $member = $model_member->getMemberInfo(array('member_name' => $member_name));
        if (!isset($member['error'])) {
            $token = $this->_get_token($member['member_id'], $member['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                $avatar = getMemberAvatar($member['member_avatar']);
                output_data(array(
                    'username' => $member['member_name'],
                    'member_truename'=>$member['member_truename'],
                    'avatar'=>$avatar,
                    'uid' => $member['member_id'],
                    'key' => $token)
                );
            } else {
                output_error('注册失败');
            }
        } else {
            output_error('注册失败');
        }
    }

    /*
     * qq登录
     */

    public function index_qqOp() {
        if (empty($_POST['openid']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('登录失败');
        }

        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('member_qqopenid' => $_POST['openid']));


        if (!empty($member_info)) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                $avatar = getMemberAvatar($member_info['member_avatar']);
                output_data(array('username' => $member_info['member_name'],'member_truename' => $member_info['member_truename'],'avatar'=>$avatar, 'userid' => $member_info['member_id'], 'key' => $token));
            } else {
                output_error('登录失败');
            }
        } else {
            $this->_register_qq($_POST['openid'], $_POST['member_name'], $_POST['img_url']);
            exit;
        }
    }

    /**
     * qq注册
     */
        public function _register_qq() {
        $unionid = $_POST['openid'];
        $member_name = $_POST['member_name'];
        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
        $password = rand(100000, 999999);
        $member = array();
        $member['member_passwd'] = $password;
        $member['member_email'] = '';
        $member['member_truename'] = $member_name;
        $member['member_qqopenid'] = $unionid;
        if (empty($member_info)) {
            $member['member_name'] = $member_name;
            $result = $model_member->addMember($member);
           
        } else {
            for ($i = 1; $i < 999; $i++) {
                $rand += $i;
                $member_name = $member_name . $rand;
                $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
                if (empty($member_info)) {//查询为空表示当前会员名可用
                    $member['member_name'] = $member_name;
                    $result = $model_member->addMember($member);
                    break;
                }
            }
        }
        $headimgurl = $_POST['img_url']; //用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像）
        $avatar = @copy($headimgurl, BASE_UPLOAD_PATH . '/' . ATTACH_AVATAR . "/avatar_$result.jpg");
        if ($avatar) {
            $model_member->editMember(array('member_id' => $result), array('member_avatar' => "avatar_$result.jpg"));
        }
        $member = $model_member->getMemberInfo(array('member_name' => $member_name));
         if (!isset($member['error'])) {
            $token = $this->_get_token($member['member_id'], $member['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                $avatar = getMemberAvatar($member['member_avatar']);
                output_data(array(
                    'username' => $member['member_name'],
                    'member_truename'=>$member['member_truename'],
                    'avatar'=>$avatar,
                    'uid' => $member['member_id'],
                    'key' => $token)
                );
           } else {
                output_error('注册失败');
            }
        } else {
            output_error('注册失败');
        }
    }

    /*
     * 微博登录
     */

    public function index_sinaOp() {
        if (empty($_POST['openid']) || !in_array($_POST['client'], $this->client_type_array)) {
            output_error('登录失败');
        }

        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('member_sinaopenid' => $_POST['openid']));


        if (!empty($member_info)) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
               $avatar = getMemberAvatar($member_info['member_avatar']);
                output_data(array('username' => $member_info['member_name'],'member_truename' => $member_info['member_truename'],'avatar'=>$avatar, 'userid' => $member_info['member_id'], 'key' => $token));
            } else {
                output_error('登录失败');
            }
        } else {
            $this->_register_sina($_POST['openid'], $_POST['member_name'], $_POST['img_url']);
            exit;
        }
    }

    /**
     * 微信注册
     */
    public function _register_sina() {
        $unionid = $_POST['openid'];
        $member_name = $_POST['member_name'];
        $model_member = Model('member');
        $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
        $password = rand(100000, 999999);
        $member = array();
        $member['member_passwd'] = $password;
        $member['member_email'] = '';
        $member['member_truename'] = $member_name;
        $member['member_sinaopenid'] = $unionid;

        if (empty($member_info)) {
            $member['member_name'] = $member_name;
            $result = $model_member->addMember($member);
        } else {
            for ($i = 1; $i < 999; $i++) {
                $rand += $i;
                $member_name = $member_name . $rand;
                $member_info = $model_member->getMemberInfo(array('member_name' => $member_name));
                if (empty($member_info)) {//查询为空表示当前会员名可用
                    $member['member_name'] = $member_name;
                    $result = $model_member->addMember($member);
                    break;
                }
            }
        }
        $headimgurl = $_POST['img_url']; //用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像）
        $headimgurl = substr($headimgurl, 0, -1) . '132';
        $avatar = @copy($headimgurl, BASE_UPLOAD_PATH . '/' . ATTACH_AVATAR . "/avatar_$result.jpg");
        if ($avatar) {
            $model_member->editMember(array('member_id' => $result), array('member_avatar' => "avatar_$result.jpg"));
        }
        $member = $model_member->getMemberInfo(array('member_name' => $member_name));
        if (!isset($member['error'])) {
            $token = $this->_get_token($member['member_id'], $member['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                $avatar = getMemberAvatar($member['member_avatar']);
                output_data(array(
                    'username' => $member['member_name'],
                    'member_truename'=>$member['member_truename'],
                    'avatar'=>$avatar,
                    'uid' => $member['member_id'],
                    'key' => $token)
                );
            } else {
                output_error('注册失败');
            }
        } else {
            output_error('注册失败');
        }
    }

    /**
     * 登录生成token
     */
    private function _get_token($member_id, $member_name, $client, $device_tokens) {
        $model_mb_user_token = Model('mb_user_token');

        //重新登录后以前的令牌失效
        //暂时停用
        //$condition = array();
        //$condition['member_id'] = $member_id;
        //$condition['client_type'] = $_POST['client'];
        //$model_mb_user_token->delMbUserToken($condition); ww w.sho pjl.co m出 品
        //生成新的token
        $mb_user_token_info = array();
        $token = md5($member_name . strval(TIMESTAMP) . strval(rand(0, 999999)));
        $mb_user_token_info['member_id'] = $member_id;
        $mb_user_token_info['member_name'] = $member_name;
        $mb_user_token_info['token'] = $token;
        $mb_user_token_info['login_time'] = TIMESTAMP;
        $mb_user_token_info['client_type'] = $_POST['client'] == null ? 'Android' : $_POST['client'];

        $result = $model_mb_user_token->addMbUserToken($mb_user_token_info);
        //存储IOS或安卓端的手机设备号信息;用于友盟推送
        $member = Model('member');
        if(strtolower($mb_user_token_info['client_type']) == 'android' || strtolower($mb_user_token_info['client_type']) == 'ios') {
            $member_info = array();
            $member_info['device_tokens'] = $device_tokens;
            $member_info['member_login_time'] = $mb_user_token_info['login_time'];
            $member -> editMember(array(member_id => $mb_user_token_info['member_id']), $member_info);
            
        }
        if ($result) {
            return $token;
        } else {
            return null;
        }
    }

    /**
     * 注册
     */
    public function registerOp() {
        $model_member = Model('member');
        $register_info = array();
        $register_info['username'] = $_POST['username'];
        $register_info['password'] = $_POST['password'];
        $register_info['password_confirm'] = $_POST['password_confirm'];
        $register_info['email'] = $_POST['email'];
        $member_info = $model_member->register($register_info);
        if (!isset($member_info['error'])) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
               $avatar = getMemberAvatar($member_info['member_avatar']);
                output_data(array(
                    'username' => $member_info['member_name'],
                    'member_truename'=>$member_info['member_truename'],
                    'avatar'=>$avatar,
                    'uid' => $member_info['member_id'],
                    'key' => $token)
                );
            } else {
                output_error('注册失败');
            }
        } else {
            output_error($member_info['error']);
        }
    }

    /**
     * 手机号注册
     */
    public function phone_registerOp() {
        $model_member = Model('member');

        $register_info = array();

        $register_info['username'] = $_POST['username'];

        $register_info['password'] = $_POST['password'];
        
        if($_POST['invite_mycode']){
        $register_info['invite_mycode'] = $_POST['invite_mycode'];    
        }

        $register_info['password_confirm'] = $_POST['password_confirm'];

        $register_info['mobile'] = $_POST['mobile'];
        if($_POST['inviter_id']){
        $register_info['inviter_id'] = $_POST['inviter_id'];    
        }
        $member_info = $model_member->mobile_register($register_info);

        if (!isset($member_info['error'])) {
            $token = $this->_get_token($member_info['member_id'], $member_info['member_name'], $_POST['client'],$_POST['device_tokens']);
            if ($token) {
                 $avatar = getMemberAvatar($member_info['member_avatar']);
                output_data(array(
                    'username' => $member_info['member_name'],
                    'member_truename'=>$member_info['member_truename'],
                    'avatar'=>$avatar,
                    'uid' => $member_info['member_id'],
                    'key' => $token)
                );
            } else {
                output_error('注册失败');
            }
        } else {
            output_error($member_info['error']);
        }
    }

    public function phone_statusOp() {
        $member_model = Model('member');
        $check_member_mobile = $member_model->getMemberInfo(array('member_mobile' => $_GET['mobile']));
        if (is_array($check_member_mobile) and count($check_member_mobile) > 0) {
            output_data('1');
        } else {
            output_data('0');
        }
    }

    //zmr>>>
    //发送手机验证码
    public function sendmbcodeOp() {
        if (empty($_GET['mobile'])) {
            exit(json_encode(array('state' => 'false', 'msg' => '请输入手机号码')));
        }
        $member_mobile = trim($_GET['mobile']);
        $member_model = Model('member');

//        $member = $member_model->getMemberInfo(array('member_mobile' => $member_mobile));
//        if (!empty($member) && $member["member_id"] > 0) {
//            exit(json_encode(array('state' => 'false', 'msg' => '该手机号已被使用，请更换其它手机号')));
//        }
        $verify_code = rand(1, 9) . rand(100, 999);
        $model_tpl = Model('mail_templates');
        $tpl_info = $model_tpl->getTplInfo(array('code' => 'authenticate'));
        $param = array();
        $param['site_name'] = C('site_name');
        $param['send_time'] = date('Y-m-d H:i', TIMESTAMP);
        $param['verify_code'] = $verify_code;
        $message = ncReplaceText($tpl_info['content'], $param);
        $sms = new Sms();
        $result = $sms->send($_GET["mobile"], $message);
        if ($result) {
            $_SESSION['mobile_auth_code'] = $verify_code;
            $_SESSION['reg_mobile_code'] = $member_mobile;
            output_data("1");
//            exit(json_encode(array('state'=>'true','msg'=>'发送成功')));
        } else {
            $_SESSION['mobile_auth_code'] = '';
            $_SESSION['reg_mobile_code'] = '';
            output_data("0");
//            exit(json_encode(array('state'=>'false','msg'=>'发送失败')));
        }
    }

    public function check_mobile_codeOp() {
        $new_code = $_SESSION['mobile_auth_code'];
        $mobile_code = trim($_GET['mobile_code']);
        if ($_SESSION['reg_mobile_code'] != trim($_GET['mobile'])) {
            //手机号码已变动过，请重新填写。
            output_data("0");
            return;
        }
        if ($mobile_code == '') {
            output_data("0");
            return;
        }
        if ($new_code != $mobile_code) {
            output_data("0");
            return;
        } else {
            output_data("1");
            return;
        }
    }

    //
    public function find_passwordOp() {
        $model_member = Model('member');
        $member = $model_member->getMemberInfo(array('member_mobile' => $_POST['mobile']));
        if(empty($member)){
            output_data("0");
        }
        $update = $model_member->editMember(array('member_mobile' => $_POST['mobile']), array('member_passwd' => md5(trim($_POST['password']))));
        $message = $update ? '密码设置成功' : '密码设置失败';
        unset($_SESSION['auth_modify_passwd']);
        output_data($message);
    }

}

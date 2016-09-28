<?php
/**
 * 对接友盟推送接口
 * add by lizh 14:28 2016/8/31
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class umeng_pushControl extends SystemControl{

    public function __construct(){

        parent::__construct();

    }

    public function indexOp(){
        
        $member = Model('member');
        $condition = 'device_tokens != ""';
        $member_data = $member -> getMemberList($condition, 'member_id,member_name,member_truename', 0, 'member_id desc', '');

        Tpl::output('list',$member_data);
        Tpl::showpage('umeng_push_form');

    }
    
    //友盟推送
    public function umengpushOp() {

        $member_id = $_POST['member_id'];
        $member = Model('member');
        $condition = array();
        if(!empty($member_id)) {
            
            $condition['member_id'] = $member_id;
            $member_info  =$member -> getMemberInfo($condition, 'device_tokens');
            $device_tokens = $member_info['device_tokens'];
            $mb_user_token = Model('mb_user_token');
            $condition['client_type'] =array('in','android,ios');
            $mb_user_token_info = $mb_user_token->getMbUserTokenInfo_order($condition, 'client_type', 'token_id desc');
            $client_type = $mb_user_token_info['client_type'];
            
        } else {
            
            $device_tokens = "";
            $client_type = 'all';
        }
;
        $ticker = $_POST['mark'];
        $text = $_POST['message'];
        $param = array();
        $param['type'] = $_POST['type'];
        $param['id'] = $_POST['id'];
        
        if($_POST['user_type'] == 0) {
            
            $type = "broadcast";
 
            $umengPushAPI_Android = new UmengPushAPI('574d3c2be0f55abb7a002143','nfief43ezonetaxeaguxzziegfulzu6c');
            $rs = $umengPushAPI_Android -> sendAndroidBroadcast($ticker,$text,$type,$param);

            $umengPushAPI_IOS = new UmengPushAPI('574c0922e0f55ac362000f78','3lkyyzyymosgbij02kil7f5hqmst6s1r');
            $rs = $umengPushAPI_IOS -> sendIOSBroadcast($text,$type,$param);
 
        } else {
            
            $type = "unicast";
            if(strtolower($client_type) == 'android') {
              
                $umengPushAPI_Android = new UmengPushAPI('574d3c2be0f55abb7a002143','nfief43ezonetaxeaguxzziegfulzu6c');
                $rs = $umengPushAPI_Android -> sendAndroidUnicast($device_tokens,$ticker,$text,$type,$param);

            }

            if(strtolower($client_type) == 'ios') {

                $umengPushAPI_IOS = new UmengPushAPI('574c0922e0f55ac362000f78','3lkyyzyymosgbij02kil7f5hqmst6s1r');
                $rs = $umengPushAPI_IOS -> sendIOSUnicast($device_tokens,$ticker,$text,$type,$param);

            }
            
        }
        
        echo $rs;
    }
   
}

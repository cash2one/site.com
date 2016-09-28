<?php

/**
 * 商品栏目管理
 *
 *
 * * */
defined('InShopNC') or exit('Access Invalid!');

class goodsControl extends SystemControl {

    const EXPORT_SIZE = 5000;

    public function __construct() {
        parent::__construct();
        Language::read('goods');
    }

    /**
     * 商品设置
     */
    public function goods_setOp() {
        $model_setting = Model('setting');
        if (chksubmit()) {
            $update_array = array();
            $update_array['goods_verify'] = $_POST['goods_verify'];
            $result = $model_setting->updateSetting($update_array);
            if ($result === true) {
                $this->log(L('nc_edit,nc_goods_set'), 1);
                showMessage(L('nc_common_save_succ'));
            } else {
                $this->log(L('nc_edit,nc_goods_set'), 0);
                showMessage(L('nc_common_save_fail'));
            }
        }
        $list_setting = $model_setting->getListSetting();
        Tpl::output('list_setting', $list_setting);
        Tpl::showpage('goods.setting');
    }

    /**
     * 商品管理
     */
    public function goodsOp() {
        $model_goods = Model('goods');
        /**
         * 处理商品分类
         */
        $choose_gcid = ($t = intval($_REQUEST['choose_gcid'])) > 0 ? $t : 0;
        $gccache_arr = Model('goods_class')->getGoodsclassCache($choose_gcid, 3);
        Tpl::output('gc_json', json_encode($gccache_arr['showclass']));
        Tpl::output('gc_choose_json', json_encode($gccache_arr['choose_gcid']));

        /**
         * 查询条件
         */
        $where = array();
        if ($_GET['search_goods_name'] != '') {
            $where['goods_name'] = array('like', '%' . trim($_GET['search_goods_name']) . '%');
        }
        if (intval($_GET['search_commonid']) > 0) {
            $where['goods_commonid'] = intval($_GET['search_commonid']);
        }
        if ($_GET['search_store_name'] != '') {
            $where['store_name'] = array('like', '%' . trim($_GET['search_store_name']) . '%');
        }
        if (intval($_GET['b_id']) > 0) {
            $where['brand_id'] = intval($_GET['b_id']);
        }
        if ($choose_gcid > 0) {
            $where['gc_id_' . ($gccache_arr['showclass'][$choose_gcid]['depth'])] = $choose_gcid;
        }
        if (in_array($_GET['search_state'], array('0', '1', '10'))) {
            $where['goods_state'] = $_GET['search_state'];
        }
        if (in_array($_GET['search_verify'], array('0', '1', '10'))) {
            $where['goods_verify'] = $_GET['search_verify'];
        }
        if (is_numeric($_GET['is_recommend'])) {
            $where['is_recommend'] = intval($_GET['is_recommend']);
            Tpl::output('is_recommend', intval($_GET['is_recommend']));
        }
        if (is_numeric($_GET['is_new'])) {
            $where['is_new'] = intval($_GET['is_new']);
            Tpl::output('is_new', intval($_GET['is_new']));
        }
        if (is_numeric($_GET['is_popular'])) {
            $where['is_popular'] = intval($_GET['is_popular']);
            Tpl::output('is_popular', intval($_GET['is_popular']));
        }
        if (is_numeric($_GET['is_happysend'])) {
            $where['is_happysend'] = intval($_GET['is_happysend']);
            Tpl::output('is_happysend', intval($_GET['is_happysend']));
        }

        switch ($_GET['type']) {
            // 禁售
            case 'lockup':
                $goods_list = $model_goods->getGoodsCommonLockUpList($where);
                break;
            // 等待审核
            case 'waitverify':
                $goods_list = $model_goods->getGoodsCommonWaitVerifyList($where, '*', 10, 'goods_verify desc, goods_commonid desc');
                break;
            // 全部商品
            default:
                $goods_list = $model_goods->getGoodsCommonList($where);
                break;
        }

        Tpl::output('goods_list', $goods_list);
        Tpl::output('page', $model_goods->showpage(2));

        $storage_array = $model_goods->calculateStorage($goods_list);
        Tpl::output('storage_array', $storage_array);

        // 品牌
        $brand_list = Model('brand')->getBrandPassedList(array());

        Tpl::output('search', $_GET);
        Tpl::output('brand_list', $brand_list);

        Tpl::output('state', array('1' => '出售中', '0' => '仓库中', '10' => '违规下架'));

        Tpl::output('verify', array('1' => '通过', '0' => '未通过', '10' => '等待审核'));

        Tpl::output('ownShopIds', array_fill_keys(Model('store')->getOwnShopIds(), true));

        switch ($_GET['type']) {
            // 禁售
            case 'lockup':
                Tpl::showpage('goods.close');
                break;
            // 等待审核
            case 'waitverify':
                Tpl::showpage('goods.verify');
                break;
            // 全部商品
            default:
                Tpl::showpage('goods.index');
                break;
        }
    }

    /**
     * ajax操作
     */
    public function ajaxOp() {

        switch ($_GET['branch']) {
            //推荐
            case 'is_recommend':
                if (intval($_GET['id']) > 0) {
                    $model = Model('goods_common');
                    $condition['goods_commonid'] = intval($_GET['id']);
                    $update[$_GET['column']] = trim($_GET['value']);
                    $model->where($condition)->update($update);

                    echo 'true';
                    die;
                } else {
                    echo 'false';
                    die;
                }
                break;
            case 'is_new':
                if (intval($_GET['id']) > 0) {
                    $model = Model('goods_common');
                    $condition['goods_commonid'] = intval($_GET['id']);
                    $update[$_GET['column']] = trim($_GET['value']);
                    $model->where($condition)->update($update);

                    echo 'true';
                    die;
                } else {
                    echo 'false';
                    die;
                }
                break;
            case 'is_popular':
                if (intval($_GET['id']) > 0) {
                    $model = Model('goods_common');
                    $condition['goods_commonid'] = intval($_GET['id']);
                    $update[$_GET['column']] = trim($_GET['value']);
                    $model->where($condition)->update($update);

                    echo 'true';
                    die;
                } else {
                    echo 'false';
                    die;
                }
                break;
            case 'is_happysend':
                if (intval($_GET['id']) > 0) {
                    $model = Model('goods_common');
                    $condition['goods_commonid'] = intval($_GET['id']);
                    $update[$_GET['column']] = trim($_GET['value']);
                    $model->where($condition)->update($update);
                    echo 'true';
                    die;
                } else {
                    echo 'false';
                    die;
                }
                break;
        }
    }

    /**
     * 违规下架
     */
    public function goods_lockupOp() {
        if (chksubmit()) {
            $commonids = $_POST['commonids'];
            $commonid_array = explode(',', $commonids);
            foreach ($commonid_array as $value) {
                if (!is_numeric($value)) {
                    showDialog(L('nc_common_op_fail'), 'reload');
                }
            }
            $update = array();
            $update['goods_stateremark'] = trim($_POST['close_reason']);

            $where = array();
            $where['goods_commonid'] = array('in', $commonid_array);

            Model('goods')->editProducesLockUp($update, $where);
            showDialog(L('nc_common_op_succ'), 'reload', 'succ');
        }
        Tpl::output('commonids', $_GET['id']);
        Tpl::showpage('goods.close_remark', 'null_layout');
    }

    
    /**
     * 编辑欢乐送商品的属性
     */
    public function goods_editOp() {
        $common_id = intval($_GET['goods_commonid']);
        if ($common_id <= 0) {
            showDialog(L('nc_common_op_fail'), 'reload');
        }
        $goods_info = Model('goods')->getGoodeCommonInfo(array('goods_commonid' => $common_id), 'hps_id');
        $model_happy_send = Model('happy_send');
      
            $hps_info = $model_happy_send->getAttribute(array('hps_id' => $goods_info['hps_id']));
            $hps_info['price'] = $model_happy_send->getAttributeValue(array('hps_value_id' => $hps_info['price_id']));
            $hps_info['sex'] = $model_happy_send->getAttributeValue(array('hps_value_id' => $hps_info['sex_id']));
            $hps_info['year'] = $model_happy_send->getAttributeValue(array('hps_value_id' => $hps_info['year_id']));
            $hps_info['scenes'] = $model_happy_send->getAttributeValue(array('hps_value_id' => $hps_info['scenes_id']));
            $hps_info['relationship'] = $model_happy_send->getAttributeValue(array('hps_value_id' => $hps_info['relationship_id']));
            $hps_info['price'] = $hps_info['price']['attr_value_name'];
            $hps_info['sex'] = $hps_info['sex']['attr_value_name'];
            $hps_info['year'] = $hps_info['year']['attr_value_name'];
            $hps_info['relationship'] = $hps_info['relationship']['attr_value_name'];
            $hps_info['scenes'] = $hps_info['scenes']['attr_value_name'];
            $hps_info['scenes_array'] = $model_happy_send->getAttributeValueList(array('type' => 'scenes'), 'attr_value_name,hps_value_id');
            $hps_info['price_array'] = $model_happy_send->getAttributeValueList(array('type' => 'price'), 'attr_value_name,hps_value_id');
            $hps_info['sex_array'] = $model_happy_send->getAttributeValueList(array('type' => 'sex'), 'attr_value_name,hps_value_id');
            $hps_info['relationship_array'] = $model_happy_send->getAttributeValueList(array('type' => 'relationship'), 'attr_value_name,hps_value_id');
            $hps_info['year_array'] = $model_happy_send->getAttributeValueList(array('type' => 'year'), 'attr_value_name,hps_value_id');
         
//        $hps_info['price_array'] = array_values($hps_info['price_array']);
//        $hps_info['sex_array'] = array_values($hps_info['sex_array']);
//        $hps_info['relationship_array'] = array_values($hps_info['relationship_array']);
//        $hps_info['year_array'] = array_values($hps_info['year_array']);
          if (chksubmit()) {
            if ($goods_info['hps_id'] == 0) {
                       $insert = array();
            $insert['sex_id'] = $_POST['sex_id'];
            $insert['year_id'] = $_POST['year_id'];
            $insert['price_id'] = $_POST['price_id'];
            $insert['relationship_id'] = $_POST['relationship_id'];
            $insert['scenes_id'] = $_POST['scenes_id'];
           
            $insert=  Model('happy_send')->addAttribute($insert);
            Model('goods')->editGoodsCommon(array('hps_id'=>$insert),array('goods_commonid' => $common_id));
            
            if($insert){
             showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            }
         
            } else {
            $condition = array();
            $condition['hps_id'] = $goods_info['hps_id'];
            $update = array();
            if($_POST['sex_id']){
            $update['sex_id'] = $_POST['sex_id'];
            }
            if($_POST['year_id']){
            $update['year_id'] = $_POST['year_id'];
            }
            if($_POST['price_id']){
            $update['price_id'] = $_POST['price_id'];
            }
            if($_POST['scenes_id']){
            $update['scenes_id'] = $_POST['scenes_id'];
            }
            if($_POST['relationship_id']){
            $update['relationship_id'] = $_POST['relationship_id'];
            }
            $update = $model_happy_send->editAttribute($update, $condition);
            if($update){
             showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            }
        }
          }

//        showDialog(L('nc_common_op_succ'), 'reload', 'succ');
        Tpl::output('hps_info', $hps_info);
        Tpl::showpage('goods.edit');
    }

    /**
     * 删除商品
     */
    public function goods_delOp() {
        $common_id = intval($_GET['goods_id']);
        if ($common_id <= 0) {
            showDialog(L('nc_common_op_fail'), 'reload');
        }
        Model('goods')->delGoodsAll(array('goods_commonid' => $common_id));
        showDialog(L('nc_common_op_succ'), 'reload', 'succ');
    }

    /**
     * 审核商品
     */
    public function goods_verifyOp() {
        if (chksubmit()) {
            $commonids = $_POST['commonids'];
            $commonid_array = explode(',', $commonids);
            foreach ($commonid_array as $value) {
                if (!is_numeric($value)) {
                    showDialog(L('nc_common_op_fail'), 'reload');
                }
            }
            $update2 = array();
            $update2['goods_verify'] = intval($_POST['verify_state']);

            $update1 = array();
            $update1['goods_verifyremark'] = trim($_POST['verify_reason']);
            $update1 = array_merge($update1, $update2);
            $where = array();
            $where['goods_commonid'] = array('in', $commonid_array);

            $model_goods = Model('goods');
            if (intval($_POST['verify_state']) == 0) {
                $model_goods->editProducesVerifyFail($where, $update1, $update2);
            } else {
                $model_goods->editProduces($where, $update1, $update2);
            }
            showDialog(L('nc_common_op_succ'), 'reload', 'succ');
        }
        Tpl::output('commonids', $_GET['id']);
        Tpl::showpage('goods.verify_remark', 'null_layout');
    }

    /**
     * ajax获取商品列表
     */
    public function get_goods_list_ajaxOp() {
        $commonid = $_GET['commonid'];
        if ($commonid <= 0) {
            echo 'false';
            exit();
        }
        $model_goods = Model('goods');
        $goodscommon_list = $model_goods->getGoodeCommonInfoByID($commonid, 'spec_name');
        if (empty($goodscommon_list)) {
            echo 'false';
            exit();
        }
        $goods_list = $model_goods->getGoodsList(array('goods_commonid' => $commonid), 'goods_id,goods_spec,store_id,goods_price,goods_serial,goods_storage,goods_image');
        if (empty($goods_list)) {
            echo 'false';
            exit();
        }

        $spec_name = array_values((array) unserialize($goodscommon_list['spec_name']));
        foreach ($goods_list as $key => $val) {
            $goods_spec = array_values((array) unserialize($val['goods_spec']));
            $spec_array = array();
            foreach ($goods_spec as $k => $v) {
                $spec_array[] = '<div class="goods_spec">' . $spec_name[$k] . L('nc_colon') . '<em title="' . $v . '">' . $v . '</em>' . '</div>';
            }
            $goods_list[$key]['goods_image'] = thumb($val, '60');
            $goods_list[$key]['goods_spec'] = implode('', $spec_array);
            $goods_list[$key]['url'] = urlShop('goods', 'index', array('goods_id' => $val['goods_id']));
        }

        /**
         * 转码
         */
        if (strtoupper(CHARSET) == 'GBK') {
            Language::getUTF8($goods_list);
        }
        echo json_encode($goods_list);
    }

    /*
     * 欢乐送价格列表
     */

    public function attr_listOp() {
        $model_happy_send = Model('happy_send');
        $update = array();

        $attr_list = $model_happy_send->getAttributeList($update, 10);
        Tpl::output('attr_list', $attr_list);
        Tpl::output('show_page', $model_happy_send->showpage());

        Tpl::showpage('attr.list');
    }

    /**
     * 新增属性
     *
     */
    public function add_attrOp() {
        $model_happy_send = Model('happy_send');
        if (chksubmit()) {
            $attr_array = array();
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $attr_array['type'] = 'price';
            $state = $model_happy_send->addAttributeValue($attr_array);
            if ($state) {
                $this->log('新增,编号' . $state);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::showpage('goods.add');
    }

    /**
     * 新增属性
     *
     */
    public function add_attr_1Op() {
        $model_happy_send = Model('happy_send');
        if (chksubmit()) {
            $attr_array = array();
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $attr_array['type'] = 'relationship';

            $state = $model_happy_send->addAttributeValue($attr_array);
            if ($state) {
                $this->log('新增,编号' . $state);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::showpage('goods.add_1');
    }

    /**
     * 新增属性
     *
     */
    public function add_attr_2Op() {
        $model_happy_send = Model('happy_send');
        if (chksubmit()) {
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $attr_array['type'] = 'sex';

            $state = $model_happy_send->addAttributeValue($attr_array);
            if ($state) {
                $this->log('新增,编号' . $state);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::showpage('goods.add_2');
    }

        /**
     * 新增属性
     *
     */
    public function add_attr_3Op() {
        $model_happy_send = Model('happy_send');
        if (chksubmit()) {
            $attr_array = array();
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $attr_array['type'] = 'year';;

            $state = $model_happy_send->addAttributeValue($attr_array);
            if ($state) {
                $this->log('新增,编号' . $state);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::showpage('goods.add_3');
    }
        public function add_attr_4Op() {
        $model_happy_send = Model('happy_send');
        if (chksubmit()) {
            $attr_array = array();
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $attr_array['type'] = 'scenes';;

            $state = $model_happy_send->addAttributeValue($attr_array);
            if ($state) {
                $this->log('新增,编号' . $state);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=goods&op=goods');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::showpage('goods.add_4');
    }
    /**
     * 编辑退款退货原因
     *
     */
    public function edit_attrOp() {
        $model_happy_send = Model('happy_send');
        $update = array();
        $update['hps_value_id'] = intval($_GET['hps_value_id']);
        $reason_list = $model_happy_send->getAttributeList($update);
        $reason = $reason_list[$update['hps_id']];
        if (chksubmit()) {
            $attr_array = array();
            $attr_array['hps_id'] = $_POST['hps_id'];
            $attr_array['attr_value_name'] = $_POST['attr_value_name'];
            $attr_array['hps_value_sort'] = intval($_POST['hps_value_sort']);
            $state = $model_happy_send->editAttributeValue($update, $attr_array);
            if ($state) {
                $this->log('编辑，编号' . $update['reason_id']);
                showMessage(Language::get('nc_common_save_succ'), 'index.php?act=refund&op=reason');
            } else {
                showMessage(Language::get('nc_common_save_fail'));
            }
        }
        Tpl::output('reason', $reason);
        Tpl::showpage('attr.edit');
    }

    /**
     * 删除退款退货原因
     *
     */
    public function del_attrOp() {
        $model_happy_send = Model('happy_send');
        $update = array();
        $update['reason_id'] = intval($_GET['reason_id']);
        $state = $model_happy_send->delReason($update);
        if ($state) {
            $this->log('删除退款退货原因，编号' . $update['reason_id']);
            showMessage(Language::get('nc_common_del_succ'), 'index.php?act=goods&op=attr_list');
        } else {
            showMessage(Language::get('nc_common_del_fail'));
        }
    }

}

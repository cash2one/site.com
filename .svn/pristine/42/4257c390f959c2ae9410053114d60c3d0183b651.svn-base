<?php

/**
 * cms首页
 *
 *
 *
 * 
 */
defined('InShopNC') or exit('Access Invalid!');

class indexControl extends mobileHomeControl {

    public function __construct() {
        parent::__construct();
    }

    /**
     * 首页
     */
    public function indexOp() {
        //头部广告图start
        $model_mb_special = Model('mb_special');
        $condition['item_type'] = 'adv_list';
        $condition['special_id'] = 0;
        $adv_list = $model_mb_special->table('mb_special_item')->field('item_data')->where($condition)->find();
        $item_data = unserialize($adv_list['item_data']);

        foreach ($item_data['item'] as $k1 => $v1) {
            $item_data['item'][$k1]['image'] = getMbSpecialImageUrl($v1['image']);
        }
        $item_data['item'] = array_values($item_data['item']);
        //头部广告图end
        //设计师品牌start
        $model_goods = Model('goods');
        $model_store = Model('store');
        $condition = array();
        $condition['store_state'] = 1;
        $condition['sc_id'] = array('in', "2,11");
        $store_list = $model_store->where($condition)->field('store_id,store_name,store_avatar,sc_id,app_banner,store_collect')->order('is_recommend desc,store_collect desc')->page(5)->select();

        foreach ($store_list as $key => $value) {
            $store_list[$key]['store_avatar'] = UPLOAD_SITE_URL . '/' . ATTACH_STORE . '/' . $store_list[$key]['store_avatar'];
            $condition['store_id'] = $value['store_id'];
            $store_list[$key]['search_list_goods'] = $model_goods->getIsrecommendGoods(array('store_id' => $value['store_id']), $this->page);
            // $store_list[$key]['search_list_goods'] = $model_goods->getGoodsListByColorDistinct(array('store_id'=>$value['store_id']),'goods_id,store_id,goods_name,goods_image,goods_price,goods_salenum','goods_salenum desc',$this->page);

            foreach ($store_list[$key]['search_list_goods'] as $k => $v) {
                $store_list[$key]['search_list_goods'][$k]['goods_image'] = thumb($v, 240);
            }

            $store_list[$key]['store_state'] = '0';

            if (!empty($_POST['key'])) {
                $model_mb_user_token = Model('mb_user_token');
                $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($_POST['key']);
                $model_member = Model('member');
                $this->member_info = $model_member->getMemberInfoByID($mb_user_token_info['member_id']);
                $favorites_model = Model('favorites');
                $store_model = Model('store');
                $favorites_info = $favorites_model->getOneFavorites(array(
                    'fav_id' => $store_list[$key]['store_id'],
                    'fav_type' => 'store',
                    'member_id' => $this->member_info['member_id'],
                ));

                if (!empty($favorites_info)) {
                    $store_list[$key]['store_state'] = '1';
                }
            }
        }
        $item_data['store_list'] = $store_list;
        //设计师品牌end
        //本周设计师start
        $model_store = Model('store');
        $condition = array();
        $condition['sc_id'] = 4;
        $condition['store_state'] = 1;
        $condition['is_recommend'] = 1;

        $desinger = $model_store->where($condition)->field('store_id,store_name,seller_name,store_avatar,store_collect')->find();
        $desinger['seller_name'] = $desinger['store_name'];
        $desinger['store_state'] = '0';
        if (!empty($_POST['key'])) {
            $model_mb_user_token = Model('mb_user_token');
            $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($_POST['key']);
            $model_member = Model('member');
            $this->member_info = $model_member->getMemberInfoByID($mb_user_token_info['member_id']);
            $favorites_model = Model('favorites');
            $store_model = Model('store');
            $store_model->editStore(array('store_collect' => array('exp', 'store_collect+1')), array('store_id' => '6'));
            $favorites_info = $favorites_model->getOneFavorites(array(
                'fav_id' => $desinger['store_id'],
                'fav_type' => 'store',
                'member_id' => $this->member_info['member_id'],
            ));
            if (!empty($favorites_info)) {
                $desinger['store_state'] = '1';
            }
        }

        $desinger['store_avatar'] = getStoreLogo($desinger['store_avatar'], $type = 'store_avatar');
        $field = 'goods_id,store_id,goods_name,goods_image,goods_price,goods_salenum,goods_state';
        //获取店铺商品数，推荐商品列表等信息
        $desinger['search_list_goods'] = array();
        $condition = array();
        $condition['goods_state'] = 1;
        $condition['store_id'] = $desinger['store_id'];
        $desinger['search_list_goods'] = $model_goods->getGoodsListByColorDistinct($condition, 'goods_id,store_id,goods_name,goods_image,goods_price,goods_salenum', 'goods_salenum desc', $this->page);
        foreach ($desinger['search_list_goods'] as $key => $value) {
            $desinger['search_list_goods'][$key]['goods_image'] = cthumb($value['goods_image']);
        }
        $item_data['desinger'] = $desinger;
        //本周设计师end
        //新艺品start  手机端=>首页=>商品模块
        $goods_list = $model_mb_special->table('mb_special_item')->field('item_data')->where(array('item_type' => 'goods', 'item_usable' => 1))->find();
        $goods_data = unserialize($goods_list['item_data']);

        $where['goods_id'] = array('in', implode(',', $goods_data['item']));
        $item_data['product'] = $model_goods->getGoodsList($where, 'goods_id,store_id,goods_name,goods_image,goods_price', '', '', 0, 10);

        foreach ($item_data['product'] as $pk => $pv) {
            $item_data['product'][$pk]['goods_image'] = cthumb($pv['goods_image']);
        }
        //新艺品end
        //艺见start CMS=>文章管理=>分类艺见
        $cms_article_model = Model('cms_article');
        $item_data['cms_article'] = $cms_article_model->getOne(array('article_class_id' => 3), 'article_id desc', 'article_id,article_title,article_image,article_publisher_id,article_abstract,like_count');
        $item_data['cms_article']['article_image'] = 'http://www.wantease.com' . DS . DIR_UPLOAD . DS . ATTACH_CMS . DS . 'article' . DS . $item_data['cms_article']['article_publisher_id'] . DS . unserialize($item_data['cms_article']['article_image'])['name'];
        //艺见end
        //艺生活start  CMS=>文章管理=>分类艺生活
        $cms_article_model = Model('cms_article');
        list($item_data['events'], $item_data['events1']) = $cms_article_model->getList(array('article_class_id' => 5), '2', 'article_id desc', 'article_id,article_title,article_image,article_publisher_id,article_publish_time');
        $item_data['events']['article_image'] = 'http://www.wantease.com' . DS . DIR_UPLOAD . DS . ATTACH_CMS . DS . 'article' . DS . $item_data['events']['article_publisher_id'] . DS . unserialize($item_data['events']['article_image'])['name'];
        $item_data['events']['article_publish_time'] = date('M. j', $item_data['events']['article_publish_time']);
        $item_data['events1']['article_image'] = 'http://www.wantease.com' . DS . DIR_UPLOAD . DS . ATTACH_CMS . DS . 'article' . DS . $item_data['events1']['article_publisher_id'] . DS . unserialize($item_data['events1']['article_image'])['name'];
        $item_data['events1']['article_publish_time'] = date('M. j', $item_data['events1']['article_publish_time']);
        //艺生活end
        //找灵感start
        $model_personal = Model('micro_personal');
        $page_number = $_GET['page'];
        $field = 'micro_personal.personal_id,micro_personal.commend_member_id,micro_personal.goods_id,micro_personal.commend_image,commend_time,micro_personal.commend_message,micro_personal.like_count,member.member_name,member.member_truename,member.member_avatar';
        $condition = array();
        $order = 'like_count asc';
        $item_data['micro_personal'] = $model_personal->getListWithUserInfo($condition, $page_number, $order, $field);
        $micro_personal_all = $model_personal->getListWithUserInfo($condition, '', $order, $field);
        pagecmd('setEachNum', $page_number);
        if (empty($page_number)) {
            $page_count = 1;
        } else {
            $page_count = ceil(count($micro_personal_all) / $page_number);
        }
        foreach ($item_data['micro_personal'] as $key => $value) {
            if ($item_data['micro_personal'][$key]['commend_image']) {
                $file_name_list = str_replace('.', '_' . 'list' . '.', $item_data['micro_personal'][$key]['commend_image']);
                $item_data['micro_personal'][$key]['commend_image'] = UPLOAD_SITE_URL . DS . ATTACH_MICROSHOP . DS . $item_data['micro_personal'][$key]['commend_member_id'] . DS . $item_data['micro_personal'][$key]['commend_image'];
                $item_data['micro_personal'][$key]['commend_image_list'] = UPLOAD_SITE_URL . DS . ATTACH_MICROSHOP . DS . $item_data['micro_personal'][$key]['commend_member_id'] . DS . $file_name_list;
            }
            $item_data['micro_personal'][$key]['member_avatar'] = getMemberAvatarForID($item_data['micro_personal'][$key]['commend_member_id']);

            $item_data['micro_personal'][$key]['image_width'] = @getimagesize($item_data['micro_personal'][$key]['commend_image_list'])[0];
            $item_data['micro_personal'][$key]['image_height'] = @getimagesize($item_data['micro_personal'][$key]['commend_image_list'])[1];
        }
        //找灵感end

        output_data($item_data, mobile_page($page_count));
    }

    public function index_1_5Op() {
        //banner
        $condition['ap_id'] = 1280;
        $condition['field'] = 'adv_content,store_id';
        $adv_list = Model('adv')->getList($condition);
        foreach ($adv_list as $key => $value) {
            $adv_list[$key] = unserialize($value['adv_content']);
            $adv_list[$key]['store_id'] = $value['store_id'];
            $adv_list[$key]['adv_pic'] = UPLOAD_SITE_URL . "/" . ATTACH_ADV . "/" . unserialize($value['adv_content'])['adv_pic'];
        }

        //新品
        $model_goods = Model('goods');
        $condition = array();
        $condition['goods_common.is_new'] = 1;
        $goods_new = $model_goods->getGoodsListByRecommend($condition, 'goods.goods_id,goods.goods_name,goods.goods_promotion_price,goods.goods_price,goods.goods_image', 'goods_id desc', '20');
        foreach ($goods_new as $key => $value) {
            //$goods_new[$key]['goods_image'] = thumb($value);
            if(strpos(thumb($value,500),'default_goods_image_500.gif')){
                $goods_new[$key]['goods_image'] = thumb($value);
            }else{
                $goods_new[$key]['goods_image'] = thumb($value,500);
            }
        }
        //尖货
        $condition = array();
        $condition['goods_common.is_popular'] = 1;
        $goods_pop = $model_goods->getGoodsListByRecommend($condition, 'goods.goods_id,goods.goods_name,goods.goods_promotion_price,goods.goods_price,goods.goods_image', 'goods_id desc', '20');
        foreach ($goods_pop as $key => $value) {
            //$goods_pop[$key]['goods_image'] = thumb($value);
            if(strpos(thumb($value,500),'default_goods_image_500.gif')){
                $goods_pop[$key]['goods_image'] = thumb($value);
            }else{
                $goods_pop[$key]['goods_image'] = thumb($value,500);
            }
        }
        //买手笔记
        $condition = array();
        $condition['state'] = 1;
        $model_mb_special = Model('mb_special');
        $special_list = $model_mb_special->getMbSpecialList($condition, 8, 'special_order asc', '*');
        $page_count = $model_mb_special->gettotalpage();
        foreach ($special_list as $key => $value) {
            if ($special_list) {
                $special_list[$key]['special_banner'] = UPLOAD_SITE_URL . DS . ATTACH_MB_SPECIAL . DS . $value['special_banner'];
            }
            $special_list[$key]['goods_list'] = $model_mb_special->getMbSpecialItemUsableListByID($value['special_id']);
           foreach ($special_list[$key]['goods_list'] as $k => $v) {
               $goods_list = $v['goods']['item'];
            }
            $special_list[$key]['goods_list'] = $goods_list;
        }
        //设计师品牌
        $model_store = Model('store');
        $condition = array();
        $condition['is_recommend'] = 1;
        $store_list = $model_store->getStoreOnlineList($condition, 20, 'store_id desc', 'store_id,store_name,store_avatar,sc_id,app_banner,store_collect');
        foreach ($store_list as $key => $value) {
            $store_list[$key]['store_name'] = htmlspecialchars_decode($store_list[$key]['store_name']);
            $store_list[$key]['store_avatar'] = getStoreLogo($store_list[$key]['store_avatar'], 'store_avatar');
            $store_list[$key]['search_list_goods'] = $model_goods->getIsrecommendGoods(array('store_id' => $value['store_id']), $this->page);
            $store_list[$key]['app_banner'] = $store_list[$key]['app_banner'] ? UPLOAD_SITE_URL . '/' . ATTACH_STORE . '/' . $store_list[$key]['app_banner'] : "";
            foreach ($store_list[$key]['search_list_goods'] as $k => $v) {
                $store_list[$key]['search_list_goods'][$k]['goods_image'] = thumb($v, 240);
            }
        }
        //匠心笔记
        $model_cms_article = Model('cms_article');
        $condition = array();
        $condition['article_class_id'] = 6;
        $article_list = $model_cms_article->getList($condition, 5, 'article_sort asc,article_id desc', 'article_id,article_title,article_image,article_publisher_id,article_abstract,article_publish_time,like_count,article_keyword,store_id');

        foreach ($article_list as $key => $value) {
            $article_list[$key]['article_image'] = BASE_SITE_URL . DS . DS . DIR_UPLOAD . DS . ATTACH_CMS . DS . 'article' . DS . $article_list[$key]['article_publisher_id'] . DS . unserialize($article_list[$key]['article_image'])['name'];
            $article_list[$key]['article_publish_time'] = date('M. j', $article_list[$key]['article_publish_time']);
            $article_list[$key]['url'] = BASE_SITE_URL . DS . 'wap/tmpl/cms_article_show_1.html?article_id=' . $article_list[$key]['article_id'];
        }
        //猜你喜欢
        $model_goods_browse = Model('goods_browse');

        if (!empty($_GET['key'])) {
            $model_mb_user_token = Model('mb_user_token');
            $mb_user_token_info = $model_mb_user_token->getMbUserTokenInfoByToken($_GET['key']);
            $model_member = Model('member');
            $member_info = $model_member->getMemberInfoByID($mb_user_token_info['member_id']);
            $guess_like = $model_goods_browse->getViewedGoodsList($member_info['member_id'], 20);
            if (count($guess_like) < 5) {
                 $condition = array();
                $guess_like = $model_goods->getGoodsListByColorDistinct($condition, 'goods_id,goods_name,goods_promotion_price,goods_price,goods_image', 'goods_id desc', '20');
           }

          foreach ($guess_like as $key => $value) {
                //$guess_like[$key]['goods_image'] = thumb($value);
              if(strpos(thumb($value,500),'default_goods_image_500.gif')){
                  $guess_like[$key]['goods_image'] = thumb($value);
              }else{
                  $guess_like[$key]['goods_image'] = thumb($value,500);
              }
            }
        }else{
	    $condition = array();
            $guess_like = $model_goods->getGoodsListByColorDistinct($condition, 'goods_id,goods_name,goods_promotion_price,goods_price,goods_image', 'goods_id desc', '20');
            foreach ($guess_like as $key => $value) {
                //$guess_like[$key]['goods_image'] = thumb($value);
                if(strpos(thumb($value,500),'default_goods_image_500.gif')){
                    $guess_like[$key]['goods_image'] = thumb($value);
                }else{
                    $guess_like[$key]['goods_image'] = thumb($value,500);
                }
            }
        } 
        
        

        output_data(array('banner' => $adv_list, 'special_list' => $special_list, 'goods_new' => $goods_new, 'goods_popular' => $goods_pop, 'store_list' => $store_list, 'article_list' => $article_list, 'guess_like' => $guess_like));
    }

    /**
     * 专题
     */
    public function specialOp() {
        $model_mb_special = Model('mb_special');
        $data = $model_mb_special->getMbSpecialItemUsableListByID($_GET['special_id']);
        $this->_output_special($data, $_GET['type'], $_GET['special_id']);
    }

    /**
     * 输出专题
     */
    private function _output_special($data, $type = 'json', $special_id = 0) {
        $model_special = Model('mb_special');
        if ($_GET['type'] == 'html') {
            $html_path = $model_special->getMbSpecialHtmlPath($special_id);
            if (!is_file($html_path)) {
                ob_start();
                Tpl::output('list', $data);
                Tpl::showpage('mb_special');
                file_put_contents($html_path, ob_get_clean());
            }
            header('Location: ' . $model_special->getMbSpecialHtmlUrl($special_id));
            die;
        } else {
            output_data($data);
        }
    }

    /**
     * android客户端版本号
     */
    public function apk_versionOp() {
        $version = C('mobile_apk_version');
        $url = C('mobile_apk');
        if (empty($version)) {
            $version = '';
        }
        if (empty($url)) {
            $url = '';
        }

        output_data(array('version' => $version, 'url' => $url));
    }

}

<?php
/**
 * cms文章分类
 *
 *
 *
 *
 */
defined('InShopNC') or exit('Access Invalid!');
class cms_articleControl extends SystemControl{
    //文章状态草稿箱
    const ARTICLE_STATE_DRAFT = 1;
    //文章状态待审核
    const ARTICLE_STATE_VERIFY = 2;
    //文章状态已发布
    const ARTICLE_STATE_PUBLISHED = 3;
    //文章状态回收站
    const ARTICLE_STATE_RECYCLE = 4;

    public function __construct(){
        parent::__construct();
        Language::read('cms');
    }

    public function indexOp() {
        $this->cms_article_listOp();
    }

    /**
     * cms文章列表
     **/
    public function cms_article_listOp() {
        $admin = $this->getAdminInfo();
        TPL::output('admin',$admin);
        $condition = array();
        if(!empty($_GET['article_state'])) {
            $condition['article_state'] = $_GET['article_state'];
        }
        
        /**
         * version 1.5.3 新增类别收索
         */
        if(!empty($_GET['article_class_id'])) {
            $condition['article_class_id'] = $_GET['article_class_id'];
        }
        
        $cms_article_class = Model('cms_article_class');
        $cms_article_class_data = $cms_article_class -> getList(array(),'', '', 'class_id,class_name');
        TPL::output('cms_article_class_data',$cms_article_class_data);
        
        $this->get_cms_article_list($condition, 'list');
    }

    /**
     * 待审核文章列表
     */
    public function cms_article_list_verifyOp() {
        $condition = array();
        $condition['article_state'] = self::ARTICLE_STATE_VERIFY;
        $this->get_cms_article_list($condition, 'list_verify');
    }

    /**
     * 已发布文章列表
     */
    public function cms_article_list_publishedOp() {
        $condition = array();
        $condition['article_state'] = self::ARTICLE_STATE_PUBLISHED;
        $this->get_cms_article_list($condition, 'list_published');
    }

    private function get_cms_article_list($condition, $menu_key) {
        if(!empty($_GET['article_title'])) {
            $condition['article_title'] = array('like', '%'.$_GET['article_title'].'%');
        }
        if(!empty($_GET['article_publisher_name'])) {
            $condition['article_publisher_name'] = array('like', '%'.$_GET['article_publisher_name'].'%');
        }

        $model_article = Model('cms_article');
        $article_list = $model_article->getList($condition, 10, 'article_id desc');
        for ($i = 0, $j = count($article_list); $i < $j; $i++) {
            if($article_list[$i]['article_state'] == self::ARTICLE_STATE_VERIFY) {
                $article_list[$i]['verify_able'] = true;
            }
            if($article_list[$i]['article_state'] == self::ARTICLE_STATE_PUBLISHED) {
                $article_list[$i]['callback_able'] = true;
            }
        }
        $this->show_menu($menu_key);
        Tpl::output('show_page',$model_article->showpage(2));
        Tpl::output('list',$article_list);
        Tpl::output('article_state_list', $this->get_article_state_list());
        Tpl::showpage("cms_article.list");
    }

    /**
     * cms文章审核
     */
    public function cms_article_verifyOp() {
        if(intval($_POST['verify_state']) === 1) {
            $this->cms_article_state_modify(self::ARTICLE_STATE_PUBLISHED);
        } else {
            $this->cms_article_state_modify(self::ARTICLE_STATE_DRAFT, array('article_verify_reason' => $_POST['verify_reason']));
        }
    }

    /**
     * cms文章收回
     */
    public function cms_article_callbackOp() {
        $this->cms_article_state_modify(self::ARTICLE_STATE_DRAFT);
    }

    /**
     * 修改文章状态
     */
    private function cms_article_state_modify($new_state, $param = array()) {
        $article_id = $_POST['article_id'];
        $model_article = Model('cms_article');
        $param['article_state'] = $new_state;
        $model_article->modify($param, array('article_id'=>array('in', $article_id)));
        showMessage(Language::get('nc_common_op_succ'), '');
    }

    /**
     * cms文章分类排序修改
     */
    public function update_article_sortOp() {
        if(intval($_GET['id']) <= 0) {
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('param_error')));
            die;
        }
        $new_sort = intval($_GET['value']);
        if ($new_sort > 255){
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('class_sort_error')));
            die;
        } else {
            $model_class = Model("cms_article");
            $result = $model_class->modify(array('article_sort'=>$new_sort),array('article_id'=>$_GET['id']));
            if($result) {
                echo json_encode(array('result'=>TRUE,'message'=>'class_add_success'));
                die;
            } else {
                echo json_encode(array('result'=>FALSE,'message'=>Language::get('class_add_fail')));
                die;
            }
        }
    }

    /**
     * cms文章分类排序修改
     */
    public function update_article_clickOp() {
        if(intval($_GET['id']) <= 0 || intval($_GET['value']) < 0) {
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('param_error')));die;
        }
        $model_class = Model("cms_article");
        $result = $model_class->modify(array('article_click'=>$_GET['value']),array('article_id'=>$_GET['id']));
        if($result) {
            echo json_encode(array('result'=>TRUE,'message'=>''));die;
        } else {
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('param_error')));die;
        }
    }


    /**
     * cms文章删除
     **/
     public function cms_article_dropOp() {
        $article_id = trim($_POST['article_id']);
        $model_article = Model('cms_article');
        $condition = array();
        $condition['article_id'] = array('in',$article_id);
        $result = $model_article->drop($condition);
        if($result) {
            $this->log(Language::get('cms_log_article_drop').$article_id, 1);
            showMessage(Language::get('nc_common_del_succ'),'');
        } else {
            $this->log(Language::get('cms_log_article_drop').$article_id, 0);
            showMessage(Language::get('nc_common_del_fail'),'','','error');
        }
     }

    /**
     * ajax操作
     */
    public function ajaxOp(){
        if(intval($_GET['id']) > 0) {
            $flag = FALSE;
            switch ($_GET['branch']){
            case 'article_commend':
                $flag = TRUE;
                break;
            case 'article_commend_image':
                $flag = TRUE;
                break;
            case 'article_comment':
                $flag = TRUE;
                break;
            case 'article_attitude':
                $flag = TRUE;
                break;
            }
            if($flag) {
                $model= Model('cms_article');
                $update[$_GET['column']] = trim($_GET['value']);
                $condition['article_id'] = intval($_GET['id']);
                $model->modify($update,$condition);
                echo 'true';die;
            } else {
                echo 'false';die;
            }
        }
    }


    /**
     * 获取文章状态列表
     */
    private function get_article_state_list() {
        $array = array();
        $array[self::ARTICLE_STATE_DRAFT] = array('text'=>Language::get('cms_text_draft'));
        $array[self::ARTICLE_STATE_VERIFY] = array('text'=>Language::get('cms_text_verify'));
        $array[self::ARTICLE_STATE_PUBLISHED] = array('text'=>Language::get('cms_text_published'));
        $array[self::ARTICLE_STATE_RECYCLE] = array('text'=>Language::get('cms_text_recycle'));
        return $array;
    }

    private function show_menu($menu_key) {
        $menu_array = array(
            'list'=>array('menu_type'=>'link','menu_name'=>Language::get('nc_list'),'menu_url'=>'index.php?act=cms_article&op=cms_article_list'),
            'list_verify'=>array('menu_type'=>'link','menu_name'=>Language::get('cms_article_list_verify'),'menu_url'=>'index.php?act=cms_article&op=cms_article_list_verify'),
            'list_published'=>array('menu_type'=>'link','menu_name'=>Language::get('cms_article_list_published'),'menu_url'=>'index.php?act=cms_article&op=cms_article_list_published'),
        );
        $menu_array[$menu_key]['menu_type'] = 'text';
        Tpl::output('menu',$menu_array);
    }


    /**
     * 文章添加
     */
    public function cms_article_addOp(){
        $admin = $this->getAdminInfo();

        $model_article = Model('cms_article');
        /**
         * 保存
         */
        if (chksubmit()){
            //验证
            $obj_validate = new Validate();
            $obj_validate->validateparam = array(
                array("input"=>$_POST["article_title"], "require"=>"true", "message"=>'标题不能为空'),
                array("input"=>$_POST["article_content"], "require"=>"true", "message"=>'内容不能为空'),
                array("input"=>$_POST["article_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'排序为0-255的整数'),
            );
            $error = $obj_validate->validate();

            if ($error != ''){
                showMessage($error);
            }else {

                $insert_array = array();
                $insert_array['article_class_id'] = trim($_POST['article_class_id']);
                $insert_array['article_title'] = trim($_POST['article_title']);
                $insert_array['article_title_short'] = trim($_POST['article_title_short']);
                $insert_array['article_abstract'] = trim($_POST['article_abstract']);
                $insert_array['article_keyword'] = trim($_POST['article_keyword']);
                $insert_array['article_id'] = intval($_POST['article_id']);
                $insert_array['article_attachment_path'] = $admin['id'];
                $insert_array['article_sort'] = trim($_POST['article_sort']);
                $insert_array['article_content'] = trim($_POST['article_content']);
                $insert_array['store_id'] = trim($_POST['store_id']);
                $insert_array['article_origin'] = trim($_POST['article_origin']);
                $insert_array['article_origin_address'] = trim($_POST['article_origin_address']);
                $insert_array['article_state'] = '3';
                $update_array['article_publisher_id'] = $admin['id'];
                $insert_array['article_publish_time'] = time();
                $insert_array['article_start_time'] = strtotime($_POST['article_start_time']);
                $insert_array['article_end_time'] = strtotime($_POST['article_end_time']);
                //$insert_array['article_tag'] = trim($_POST['article_tag']);
                //是否管理员发布
                if (!empty($_POST['article_author'])) {
                    $insert_array['article_author'] = trim($_POST['article_author']);
                    $insert_array['article_publisher_name'] = trim($_POST['article_author']);
                } else {
                   $insert_array['article_author'] = $admin['name'];
                   $insert_array['article_publisher_name'] = $admin['name'];
                }
                //获取添加商品的关键字和值
                $goods_input = $_POST['article_goods_add'];
                $insert_array['article_goods_list'] = serialize($goods_input);//序列化
                //echo '<pre>';print_r($insert_array);exit;

                $result = $model_article->add($insert_array);//返回ID

                //echo $result;exit;
                if ($result){

                    //修改封面图片，判断是否有上传文件
                    if ($_FILES['up_pic']['name'] != '') {
                        //先添加文章得到ID，ID做文件名，上传图片，存入数据库，再更新article_image
                        $upload_name = $_FILES['up_pic']['name'];
                        $upload = new UploadFile();
                        $upload->set('default_dir',ATTACH_CMS_ARTICLE.DS.$admin['id']);//图片保存路径
                        $upload->set('thumb_width','56,240');//设置上传后生成的缩略图宽度
                        $upload->set('thumb_height', '50000,5000');
                        $upload->set('thumb_ext', '_tiny,_list');//设置上传后生成的缩略图(超小，小)
                        $upload->set('file_name',$upload_name);//图片保存名称（原图）
                        
                        $res = $upload->upfile('up_pic');//返回true/false

                        if ($res){
                            $_POST['up_pic'] = $upload->file_name;
                        }else {
                            echo 'error1';exit;
                        }
                        //图片数据入库
                        $model_upload = Model('upload');
                        $update_upload = array();
                        $update_upload['file_name'] = $_POST['up_pic'];
                        $update_upload['upload_type'] = '7';
                        $update_upload['file_size'] = $_FILES['up_pic']['size'];
                        $update_upload['upload_time'] = time();
                        $callback = $model_upload->update($update_upload);

                        $img_info = getimagesize(UPLOAD_SITE_URL.DS.ATTACH_CMS_ARTICLE.DS.$admin['id'].DS.$upload_name);
                        $upload_pic['name'] = $_FILES['up_pic']['name'];
                        $upload_pic['width'] = $img_info[0];//宽
                        $upload_pic['height'] = $img_info[1];//高
                        $upload_pic['path'] = $admin['id'];

                        //更新article_image
                        $article_edit['article_id'] = $result;
                        $article_edit['article_image'] = serialize($upload_pic);//序列化
                        $model_article->article_edit($article_edit);
                    }
                      if ($_FILES['up_pic1']['name'] != '') {
                        //先添加文章得到ID，ID做文件名，上传图片，存入数据库，再更新article_image
                        $upload_name = $_FILES['up_pic1']['name'];
                        $upload = new UploadFile();
                        $upload->set('default_dir',ATTACH_CMS_ARTICLE.DS."wap_".$admin['id']);//图片保存路径
                        $upload->set('thumb_width','56,240');//设置上传后生成的缩略图宽度
                        $upload->set('thumb_height', '50000,5000');
                        $upload->set('thumb_ext', '_tiny,_list');//设置上传后生成的缩略图(超小，小)
                        $upload->set('file_name',$upload_name);//图片保存名称（原图）
                        
                        $res = $upload->upfile('up_pic1');//返回true/false

                        if ($res){
                            $_POST['up_pic1'] = $upload->file_name;
                        }else {
                            echo 'error1';exit;
                        }
                        $article_edit['article_id'] = $result;
                        $article_edit['article_image_wap'] = UPLOAD_SITE_URL.DS.ATTACH_CMS_ARTICLE.DS."wap_".$admin['id'].DS.$upload_name;
                        $model_article->article_edit($article_edit);

                    }

                    $url = array(
                        array(
                            'url'=>'index.php?act=cms_article&op=cms_article_list',
                            'msg'=>"返回列表页",
                        ),
                        array(
                            'url'=>'index.php?act=cms_article&op=cms_article_add&ac_id='.intval($_POST['ac_id']),
                            'msg'=>"继续添加",
                        ),
                    );
                    $this->log(L('添加成功').'['.$_POST['article_title'].']',null);
                    showMessage("添加成功",$url);
                    
                }else {
                    showMessage("添加失败");
                }
            }
        }
        
        $model_class = Model('cms_article_class');
        $cms_article_class = $model_class->table('cms_article_class')->field('class_id,class_name,class_sort')->select();

        $this->show_menu($menu_key);

        //cms标签列表
        $model_tag = Model('cms_tag');
        $tag_list = $model_tag->getList(TRUE, null, 'tag_sort asc');
        Tpl::output('tag_list', $tag_list);
        
        TPL::output('admin',$admin);
        Tpl::output('file_upload',$file_upload);
        Tpl::output('cms_article_class',$cms_article_class);
        Tpl::output('art_detail',$art_detail);
        Tpl::showpage("cms_article_add");
        
    }

    /**
     * 编辑文章
     */
    public function cms_article_editOp() {
        //管理员信息
        $admin = $this->getAdminInfo();

        $model_article = Model('cms_article');

        if (chksubmit()){

            /**
             * 验证
             */
            $obj_validate = new Validate();
            $obj_validate->validateparam = array(
                array("input"=>$_POST["article_title"], "require"=>"true", "message"=>'标题不能为空'),
                array("input"=>$_POST["article_content"], "require"=>"true", "message"=>'内容不能为空'),
                array("input"=>$_POST["article_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'排序为0-255的整数'),
            );
            $error = $obj_validate->validate();

            if ($error != ''){
                showMessage($error);
            }else {
                $update_array = array();
                $update_array['article_id'] = intval($_POST['article_id']);
                $update_array['article_title'] = trim($_POST['article_title']);
                $update_array['article_abstract'] = trim($_POST['article_abstract']);
                $update_array['article_keyword'] = trim($_POST['article_keyword']);
                $update_array['article_publisher_id'] = $admin['id'];
                $update_array['article_class_id'] = intval($_POST['article_class_id']);
                $update_array['article_sort'] = trim($_POST['article_sort']);
                $update_array['store_id'] = trim($_POST['store_id']);
                $update_array['article_content'] = trim($_POST['article_content']);
                //$update_array['article_tag'] = trim($_POST['article_tag']);
                $update_array['article_modify_time'] = time();
                //获取添加商品的关键字和值
                $goods_input = $_POST['article_goods_add'];
                $update_array['article_goods_list'] = serialize($goods_input);//序列化
                $update_array['article_start_time'] = strtotime($_POST['article_start_time']);;
                $update_array['article_end_time'] = strtotime($_POST['article_end_time']);;
                //echo '<pre>';print_r($update_array);exit;

                $result = $model_article->article_edit($update_array);//返回true/false

                //var_dump($result);exit;
                if ($result){

                    //修改封面图片，判断是否有上传文件
                    if ($_FILES['up_pic']['name'] != '') {
                        //先添加文章得到ID，ID做文件名，上传图片，存入数据库，再更新article_image
                        $upload_name = $_FILES['up_pic']['name'];
                        $upload = new UploadFile();
                        $upload->set('default_dir',ATTACH_CMS_ARTICLE.DS.$admin['id']);//图片保存路径
                        $upload->set('thumb_width','56,240');
                        $upload->set('thumb_height', '50000,5000');
                        $upload->set('thumb_ext', '_tiny,_list');//设置上传后生成的缩略图(超小，小)
                        $upload->set('file_name',$upload_name);//图片保存名称（原图）
                        
                        $res = $upload->upfile('up_pic');//返回true/false

                        if ($res){
                            $_POST['up_pic'] = $upload->file_name;
                        }else {
                            echo 'error1';exit;
                        }
                        //图片数据入库
                        $model_upload = Model('upload');
                        $update_upload = array();
                        $update_upload['file_name'] = $_POST['up_pic'];
                        $update_upload['upload_type'] = '7';
                        $update_upload['file_size'] = $_FILES['up_pic']['size'];
                        $update_upload['upload_time'] = time();
                        $callback = $model_upload->update($update_upload);

                        $img_info = getimagesize(UPLOAD_SITE_URL.DS.ATTACH_CMS_ARTICLE.DS.$admin['id'].DS.$upload_name);
                        $upload_pic['name'] = $_FILES['up_pic']['name'];
                        $upload_pic['width'] = $img_info[0];//宽
                        $upload_pic['height'] = $img_info[1];//高
                        $upload_pic['path'] = $admin['id'];
                        //更新article_image
                        $article_edit['article_id'] = intval($_POST['article_id']);
                        $article_edit['article_image'] = serialize($upload_pic);//序列化
                        $model_article->article_edit($article_edit);
                    }
                    
                     if ($_FILES['up_pic1']['name'] != '') {
                        //先添加文章得到ID，ID做文件名，上传图片，存入数据库，再更新article_image
                        $upload_name = $_FILES['up_pic1']['name'];
                        $upload = new UploadFile();
                        $upload->set('default_dir',ATTACH_CMS_ARTICLE.DS."wap_".$admin['id']);//图片保存路径
                        $upload->set('thumb_width','56,240');
                        $upload->set('thumb_height', '50000,5000');
                        $upload->set('thumb_ext', '_tiny,_list');//设置上传后生成的缩略图(超小，小)
                        $upload->set('file_name',$upload_name);//图片保存名称（原图）
                        
                        $res = $upload->upfile('up_pic1');//返回true/false

                        if ($res){
                            $_POST['up_pic1'] = $upload->file_name;
                        }else {
                            echo 'error1';exit;
                        }
                      $article_edit['article_id'] = intval($_POST['article_id']);
                      $article_edit['article_image_wap'] = $_FILES['up_pic1']['name'];
                      $model_article->article_edit($article_edit);
                    }
                    $url = array(
                        array(
                            'url'=>$_POST['ref_url'],
                            'msg'=>'返回列表页',
                        ),
                        array(
                            'url'=>'index.php?act=cms_article&op=cms_article_edit&article_id='.intval($_POST['article_id']),
                            'msg'=>'重新编辑',
                        ),
                    );
                    $this->log(L('编辑成功').'['.$_POST['article_title'].']',null);
                    showMessage('编辑成功',$url);
                }else {
                    showMessage('编辑失败');
                }
            }
        }
        //头部菜单
        $this->show_menu($menu_key);
        //分类
        $model_class = Model('cms_article_class');
        $cms_article_class = $model_class->table('cms_article_class')->field('class_id,class_name,class_sort')->select();

        $article_id = trim($_GET['article_id']);
        $model_article = Model('cms_article');

        $condition=array();
        $condition['article_id'] = $article_id;
        $art_detail = $model_article->getOne($condition);
        $art_detail['article_goods_list'] = unserialize($art_detail['article_goods_list']);
        $art_detail['article_image'] = unserialize($art_detail['article_image']);

        #图片上传
        $model_upload = Model('upload');
        $condition['upload_type'] = '1';
        $file_upload = $model_upload->getUploadList($condition);
        if (is_array($file_upload)){
            foreach ($file_upload as $k => $v){
                $file_upload[$k]['upload_path'] = UPLOAD_SITE_URL.'/'.ATTACH_CMS_ARTICLE.'/'.$file_upload[$k]['file_name'];
            }
        }
        
        TPL::output('admin',$admin);
        //cms标签列表
        $model_tag = Model('cms_tag');
        $tag_list = $model_tag->getList(TRUE, null, 'tag_sort asc');
        Tpl::output('tag_list', $tag_list);

        Tpl::output('file_upload',$file_upload);
        Tpl::output('cms_article_class',$cms_article_class);
        Tpl::output('art_detail',$art_detail);
        Tpl::showpage("cms_article_edit");
    }


}

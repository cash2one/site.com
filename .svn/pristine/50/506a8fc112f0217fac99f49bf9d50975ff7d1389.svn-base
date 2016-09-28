<?php
/**
 * 对接友盟推送接口
 * add by lizh 14:28 2016/8/31
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class designers_liveControl extends SystemControl{

    public function __construct(){

        parent::__construct();

    }

    public function indexOp(){
        
        $live = Model('live');
        $condition = array();
       // $condition['live_state'] = 0;
        $live_data = $live -> getList($condition, 10, 'live_sort asc', 'live_id,live_message,live_name,live_avatar,live_url,live_state,live_sort', '');
        Tpl::output('show_page',$live->showpage(2));
        Tpl::output('list',$live_data);
        Tpl::showpage('designers_live.list');

    }
    
    /**
     * 视频添加
     */
    public function designers_live_addOp(){
        
        $model_live = Model('live');
        /**
         * 保存
         */
        if (chksubmit()){
           
            //验证
            $obj_validate = new Validate();
            $obj_validate->validateparam = array(
                array("input"=>$_POST["live_name"], "require"=>"true", "message"=>'标题不能为空'),
                array("input"=>$_POST["live_message"], "require"=>"true", "message"=>'内容不能为空'),
                array("input"=>$_POST["live_url"], "require"=>"true", "message"=>'视频地址不能为空'),
                array("input"=>$_POST["live_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'排序为0-255的整数'),
            );
            $error = $obj_validate->validate();
             
            if ($error != ''){
                showMessage($error);
            }else {

                $insert_array = array();
                $insert_array['live_name'] = trim($_POST['live_name']);
                $insert_array['live_message'] = trim($_POST['live_message']);
                $insert_array['live_url'] = trim($_POST['live_url']);
                $insert_array['live_sort'] = trim($_POST['live_sort']);
                $insert_array['live_state'] = 0;
                $insert_array['create_time'] = time();

                $result = $model_live->save($insert_array);//返回ID
               
                //echo $result;exit;
                if ($result){

                    //修改封面图片，判断是否有上传文件
                    if ($_FILES['live_avatar']['name'] != '') {
                        //先添加文章得到ID，ID做文件名，上传图片，存入数据库，再更新article_image
                        $upload_name = $_FILES['live_avatar']['name'];
                        $upload = new UploadFile();
                        $upload->set('default_dir',ATTACH_DESIGNERS_LIVE);//图片保存路径
                        $upload->set('thumb_width','56,240');//设置上传后生成的缩略图宽度
                        $upload->set('thumb_height', '50000,5000');
                        $upload->set('thumb_ext', '_tiny,_list');//设置上传后生成的缩略图(超小，小)
                        $upload->set('file_name',$upload_name);//图片保存名称（原图）
                        
                        $res = $upload->upfile('live_avatar');//返回true/false

                        if ($res){
                            $_POST['up_pic'] = $upload->file_name;
                        }else {
                            echo 'error1';exit;
                        }

                        //更新article_image
                        $where_array['live_id'] = $result;
                        $update_array['live_avatar'] = $upload_name;
                        $model_live->modify($update_array,$where_array);
                    }
 
                    $url = array(
                        array(
                            'url'=>'index.php?act=designers_live&op=designers_live.list',
                            'msg'=>"返回列表页",
                        ),
                        array(
                            'url'=>'index.php?act=designers_live&op=designers_live.add',
                            'msg'=>"继续添加",
                        ),
                    );
                    $this->log(L('添加成功').'['.$_POST['live_name'].']',null);
                    showMessage("添加成功",$url);
                    
                }else {
                    showMessage("添加失败");
                }
            }
        }

        Tpl::showpage("designers_live.add");
        
    }
    
     /**
     * 排序修改
     */
    public function update_designers_live_sortOp() {
        if(intval($_GET['id']) <= 0) {
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('param_error')));
            die;
        }
        $new_sort = intval($_GET['value']);
        if ($new_sort > 255){
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('class_sort_error')));
            die;
        } else {
            $model_live = Model("live");
            $result = $model_live->modify(array('live_sort'=>$new_sort),array('live_id'=>$_GET['id']));
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
     * 状态修改
     */
    public function update_designers_live_stateOp() {
        if(intval($_GET['id']) <= 0) {
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('param_error')));
            die;
        }
        $new_sort = intval($_GET['value']);
        if ($new_sort > 255){
            echo json_encode(array('result'=>FALSE,'message'=>Language::get('class_sort_error')));
            die;
        } else {
            $model_live = Model("live");
            $result = $model_live->modify(array('live_state'=>$new_sort),array('live_id'=>$_GET['id']));
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
     * ajax操作
     */
    public function ajaxOp(){
        if(intval($_GET['id']) > 0) {
            $flag = FALSE;
            switch ($_GET['branch']){
            case 'live_state':
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
                $model= Model('live');
                $update[$_GET['column']] = trim($_GET['value']);
                $condition['live_id'] = intval($_GET['id']);
                $model->modify($update,$condition);
                echo 'true';die;
            } else {
                echo 'false';die;
            }
        }
    }
   
}

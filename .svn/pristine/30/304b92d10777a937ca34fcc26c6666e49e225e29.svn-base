<?php
/**
 * 新闻
 *
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class newsControl extends SystemControl{
	public function __construct(){
		parent::__construct();
	}
	/**
	 * 新闻管理
	 */
	public function newsOp(){
		$model_news = Model('news');
		/**
		 * 删除
		 */
		if (chksubmit()){
			if (is_array($_POST['del_id']) && !empty($_POST['del_id'])){
				$model_upload = Model('upload');
				foreach ($_POST['del_id'] as $k => $v){
					$v = intval($v);
					/**
					 * 删除图片
					 */
					$condition['upload_type'] = '1';
					$condition['item_id'] = $v;
					$upload_list = $model_upload->getUploadList($condition);
					if (is_array($upload_list)){
						foreach ($upload_list as $k_upload => $v_upload){
							$model_upload->del($v_upload['upload_id']);
							@unlink(BASE_UPLOAD_PATH.DS.ATTACH_NEWS.DS.$v_upload['file_name']);
						}
					}
					$model_news->del($v);
				}
				$this->log(L('news_index_del_succ').'[ID:'.implode(',',$_POST['del_id']).']',null);
				showMessage('删除新闻成功。');
			}else {
				showMessage('请选择要删除的内容');
			}
		}
		/**
		 * 检索条件
		 */
		$condition['nc_id'] = intval($_GET['search_nc_id']);
		$condition['like_title'] = trim($_GET['search_title']);
		/**
		 * 分页
		 */
		$page	= new Page();
		$page->setEachNum(10);
		$page->setStyle('admin');
		/**
		 * 列表
		 */
		$news_list = $model_news->getnewsList($condition,$page);
		/**
		 * 整理列表内容
		 */
		if (is_array($news_list)){
			/**
			 * 取新闻分类
			 */
			$model_class = Model('news_class');
			$class_list = $model_class->getClassList($condition);
			$tmp_class_name = array();
			if (is_array($class_list)){
				foreach ($class_list as $k => $v){
					$tmp_class_name[$v['nc_id']] = $v['nc_name'];
				}
			}

			foreach ($news_list as $k => $v){
				/**
				 * 发布时间
				 */
				$news_list[$k]['news_time'] = date('Y-m-d H:i:s',$v['news_time']);
				/**
				 * 所属分类
				 */
				if (@array_key_exists($v['nc_id'],$tmp_class_name)){
					$news_list[$k]['nc_name'] = $tmp_class_name[$v['nc_id']];
				}
			}
		}
		/**
		 * 分类列表
		 */
		$model_class = Model('news_class');
		$parent_list = $model_class->getTreeClassList(2);
		if (is_array($parent_list)){
			$unset_sign = false;
			foreach ($parent_list as $k => $v){
				$parent_list[$k]['nc_name'] = str_repeat("&nbsp;",$v['deep']*2).$v['nc_name'];
			}
		}

		Tpl::output('news_list',$news_list);
		Tpl::output('page',$page->show());
		Tpl::output('search_title',trim($_GET['search_title']));
		Tpl::output('search_nc_id',intval($_GET['search_nc_id']));
		Tpl::output('parent_list',$parent_list);
		Tpl::showpage('news.index');
	}

	/**
	 * 新闻添加
	 */
	public function news_addOp(){
		$model_news = Model('news');
		/**
		 * 保存
		 */
		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
				array("input"=>$_POST["news_title"], "require"=>"true", "message"=>'标题不能为空'),
				array("input"=>$_POST["nc_id"], "require"=>"true", "message"=>'分类不能为空'),
				//array("input"=>$_POST["news_url"], 'validator'=>'Url', "message"=>'链接错误'),
				//array("input"=>$_POST["vedio_url"], 'validator'=>'Url', "message"=>'视频链接错误'),
				array("input"=>$_POST["news_content"], "require"=>"true", "message"=>'内容不能为空'),
				array("input"=>$_POST["news_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'请输入有效的整数0-255'),
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {

				$insert_array = array();
				$insert_array['news_title'] = trim($_POST['news_title']);
				$insert_array['nc_id'] = intval($_POST['nc_id']);
				$insert_array['news_url'] = trim($_POST['news_url']);
				$insert_array['vedio_url'] = trim($_POST['vedio_url']);
				$insert_array['news_show'] = trim($_POST['news_show']);
				$insert_array['news_sort'] = trim($_POST['news_sort']);
				$insert_array['news_content'] = trim($_POST['news_content']);
				$insert_array['news_time'] = time();
				$result = $model_news->add($insert_array);
				if ($result){
					/**
					 * 更新图片信息ID
					 */
					$model_upload = Model('upload');
					if (is_array($_POST['file_id'])){
						foreach ($_POST['file_id'] as $k => $v){
							$v = intval($v);
							$update_array = array();
							$update_array['upload_id'] = $v;
							$update_array['item_id'] = $result;
							$model_upload->update($update_array);
							unset($update_array);
						}
					}

					$url = array(
						array(
							'url'=>'index.php?act=news&op=news',
							'msg'=>"返回新闻列表",
						),
						array(
							'url'=>'index.php?act=news&op=news_add&nc_id='.intval($_POST['nc_id']),
							'msg'=>"继续新增新闻",
						),
					);
					$this->log(L('news_add_ok').'['.$_POST['news_title'].']',null);
					showMessage("添加成功",$url);
				}else {
					showMessage("添加失败");
				}
			}
		}
		/**
		 * 分类列表
		 */
		$model_class = Model('news_class');
		$parent_list = $model_class->getTreeClassList(2);
		if (is_array($parent_list)){
			$unset_sign = false;
			foreach ($parent_list as $k => $v){
				$parent_list[$k]['nc_name'] = str_repeat("&nbsp;",$v['deep']*2).$v['nc_name'];
			}
		}
		/**
		 * 模型实例化
		 */
		$model_upload = Model('upload');
		$condition['upload_type'] = '1';
		$condition['item_id'] = '0';
		$file_upload = $model_upload->getUploadList($condition);
		if (is_array($file_upload)){
			foreach ($file_upload as $k => $v){
				$file_upload[$k]['upload_path'] = UPLOAD_SITE_URL.'/'.ATTACH_NEWS.'/'.$file_upload[$k]['file_name'];
			}
		}

		Tpl::output('PHPSESSID',session_id());
		Tpl::output('nc_id',intval($_GET['nc_id']));
		Tpl::output('parent_list',$parent_list);
		Tpl::output('file_upload',$file_upload);
		Tpl::showpage('news.add');
	}

	/**
	 * 新闻编辑
	 */
	public function news_editOp(){
		$model_news = Model('news');

		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
				array("input"=>$_POST["news_title"], "require"=>"true", "message"=>'标题不能为空'),
				array("input"=>$_POST["nc_id"], "require"=>"true", "message"=>'分类不能为空'),
				//array("input"=>$_POST["news_url"], 'validator'=>'Url', "message"=>'链接错误'),
				//array("input"=>$_POST["vedio_url"], 'validator'=>'Url', "message"=>'视频链接错误'),
				array("input"=>$_POST["news_content"], "require"=>"true", "message"=>'内容不能为空'),
				array("input"=>$_POST["news_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'请输入有效的整数0-255'),
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {

				$update_array = array();
				$update_array['news_id'] = intval($_POST['news_id']);
				$update_array['news_title'] = trim($_POST['news_title']);
				$update_array['nc_id'] = intval($_POST['nc_id']);
				$update_array['news_url'] = trim($_POST['news_url']);
				$update_array['vedio_url'] = trim($_POST['vedio_url']);
				$update_array['news_show'] = trim($_POST['news_show']);
				$update_array['news_sort'] = trim($_POST['news_sort']);
				$update_array['news_content'] = trim($_POST['news_content']);

				$result = $model_news->update($update_array);
				if ($result){
					/**
					 * 更新图片信息ID
					 */
					$model_upload = Model('upload');
					if (is_array($_POST['file_id'])){
						foreach ($_POST['file_id'] as $k => $v){
							$update_array = array();
							$update_array['upload_id'] = intval($v);
							$update_array['item_id'] = intval($_POST['news_id']);
							$model_upload->update($update_array);
							unset($update_array);
						}
					}

					$url = array(
						array(
							'url'=>$_POST['ref_url'],
							'msg'=>'返回新闻列表',
						),
						array(
							'url'=>'index.php?act=news&op=news_edit&news_id='.intval($_POST['news_id']),
							'msg'=>'重新编辑该新闻',
						),
					);
					$this->log(L('news_edit_succ').'['.$_POST['news_title'].']',null);
					showMessage('编辑新闻成功',$url);
				}else {
					showMessage('编辑新闻失败');
				}
			}
		}

		$news_array = $model_news->getOnenews(intval($_GET['news_id']));
		if (empty($news_array)){
			showMessage('参数错误');
		}
		/**
		 * 新闻类别模型实例化
		 */
		$model_class = Model('news_class');
		/**
		 * 父类列表，只取到第一级
		 */
		$parent_list = $model_class->getTreeClassList(2);
		if (is_array($parent_list)){
			$unset_sign = false;
			foreach ($parent_list as $k => $v){
				$parent_list[$k]['nc_name'] = str_repeat("&nbsp;",$v['deep']*2).$v['nc_name'];
			}
		}
		/**
		 * 模型实例化
		 */
		$model_upload = Model('upload');
		$condition['upload_type'] = '1';
		$condition['item_id'] = $news_array['news_id'];
		$file_upload = $model_upload->getUploadList($condition);
		if (is_array($file_upload)){
			foreach ($file_upload as $k => $v){
				$file_upload[$k]['upload_path'] = UPLOAD_SITE_URL.'/'.ATTACH_NEWS.'/'.$file_upload[$k]['file_name'];
			}
		}

		Tpl::output('PHPSESSID',session_id());
		Tpl::output('file_upload',$file_upload);
		Tpl::output('parent_list',$parent_list);
		Tpl::output('news_array',$news_array);
		Tpl::showpage('news.edit');
	}
	/**
	 * 新闻图片上传
	 */
	public function news_pic_uploadOp(){
		/**
		 * 上传图片
		 */
		$upload = new UploadFile();
		$upload->set('default_dir',ATTACH_NEWS);
		$result = $upload->upfile('fileupload');
		if ($result){
			$_POST['pic'] = $upload->file_name;
		}else {
			echo 'error';exit;
		}
		/**
		 * 模型实例化
		 */
		$model_upload = Model('upload');
		/**
		 * 图片数据入库
		 */
		$insert_array = array();
		$insert_array['file_name'] = $_POST['pic'];
		$insert_array['upload_type'] = '1';
		$insert_array['file_size'] = $_FILES['fileupload']['size'];
		$insert_array['upload_time'] = time();
		$insert_array['item_id'] = intval($_POST['item_id']);
		$result = $model_upload->add($insert_array);
		if ($result){
			$data = array();
			$data['file_id'] = $result;
			$data['file_name'] = $_POST['pic'];
			$data['file_path'] = $_POST['pic'];
			/**
			 * 整理为json格式
			 */
			$output = json_encode($data);
			echo $output;
		}

	}
	/**
	 * ajax操作
	 */
	public function ajaxOp(){
		switch ($_GET['branch']){
			/**
			 * 删除新闻图片
			 */
			case 'del_file_upload':
				if (intval($_GET['file_id']) > 0){
					$model_upload = Model('upload');
					/**
					 * 删除图片
					 */
					$file_array = $model_upload->getOneUpload(intval($_GET['file_id']));
					@unlink(BASE_UPLOAD_PATH.DS.ATTACH_NEWS.DS.$file_array['file_name']);
					/**
					 * 删除信息
					 */
					$model_upload->del(intval($_GET['file_id']));
					echo 'true';exit;
				}else {
					echo 'false';exit;
				}
				break;
		}
	}
}

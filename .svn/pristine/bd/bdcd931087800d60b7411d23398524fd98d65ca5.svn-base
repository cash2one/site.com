<?php
/**
 * 新闻分类
 *
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class news_classControl extends SystemControl{
	public function __construct(){
		parent::__construct();
	}

	/**
	 * 新闻分类
	 */
	public function news_classOp(){
		$model_class = Model('news_class');
		//删除
		if (chksubmit()){
			if (!empty($_POST['check_nc_id'])){
				if (is_array($_POST['check_nc_id'])){
					$del_array = $model_class->getChildClass($_POST['check_nc_id']);
					if (is_array($del_array)){
						foreach ($del_array as $k => $v){
							$model_class->del($v['nc_id']);
						}
					}
				}
				$this->log(l('nc_del,news_class_index_class'),1);
				showMessage('删除成功');
			}else {
				showMessage('请选择要删除的内容');
			}
		}
		/**
		 * 父ID
		 */
		$parent_id = $_GET['nc_parent_id']?intval($_GET['nc_parent_id']):0;
		/**
		 * 列表
		 */
		$tmp_list = $model_class->getTreeClassList(2);

		
		if (is_array($tmp_list)){
			foreach ($tmp_list as $k => $v){

				if ($v['nc_parent_id'] == $parent_id){
					/**
					 * 判断是否有子类
					 */
					if ($tmp_list[$k+1]['deep'] > $v['deep']){

						$v['have_child'] = 1;
					}
					$class_list[] = $v;
				}
			}
		}
Tpl::output('tmp_list',$tmp_list);
		if ($_GET['ajax'] == '1'){
			/**
			 * 转码
			 */
			if (strtoupper(CHARSET) == 'GBK'){
				$class_list = Language::getUTF8($class_list);
			}
			$output = json_encode($class_list);
			print_r($output);
			exit;
		}else {
			Tpl::output('class_list',$class_list);
			Tpl::showpage('news_class.index');
		}
	}

	/**
	 * 新闻分类 新增
	 */
	public function news_class_addOp(){
		$model_class = Model('news_class');
		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
				array("input"=>$_POST["nc_name"], "require"=>"true", "message"=>'分类名称不能为空'),
				array("input"=>$_POST["nc_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'请输入有效的整数0-255'),
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {

				$insert_array = array();
				$insert_array['nc_name'] = trim($_POST['nc_name']);
				$insert_array['nc_parent_id'] = intval($_POST['nc_parent_id']);
				$insert_array['nc_sort'] = trim($_POST['nc_sort']);

				$result = $model_class->add($insert_array);
				if ($result){
					$url = array(
						array(
							'url'=>'index.php?act=news_class&op=news_class_add&nc_parent_id='.intval($_POST['nc_parent_id']),
							'msg'=>'继续添加分类',
						),
						array(
							'url'=>'index.php?act=news_class&op=news_class',
							'msg'=>'返回分类列表',
						)
					);
					$this->log(l('nc_add,news_class_index_class').'['.$_POST['nc_name'].']',1);
					showMessage('分类添加成功',$url);
				}else {
					showMessage('分类添加失败');
				}
			}
		}
		/**
		 * 父类列表，只取到第三级
		 */
		$parent_list = $model_class->getTreeClassList(1);
		if (is_array($parent_list)){
			foreach ($parent_list as $k => $v){
				$parent_list[$k]['nc_name'] = str_repeat("&nbsp;",$v['deep']*2).$v['nc_name'];
			}
		}

		Tpl::output('nc_parent_id',intval($_GET['nc_parent_id']));
		Tpl::output('parent_list',$parent_list);
		Tpl::showpage('news_class.add');
	}

	/**
	 * 新闻分类编辑
	 */
	public function news_class_editOp(){
		$model_class = Model('news_class');

		if (chksubmit()){
			/**
			 * 验证
			 */
			$obj_validate = new Validate();
			$obj_validate->validateparam = array(
				array("input"=>$_POST["nc_name"], "require"=>"true", "message"=>'分类名称不能为空'),
				array("input"=>$_POST["nc_sort"], "require"=>"true", 'validator'=>'Number', "message"=>'分类排序仅能为数字'),
			);
			$error = $obj_validate->validate();
			if ($error != ''){
				showMessage($error);
			}else {

				$update_array = array();
				$update_array['nc_id'] = intval($_POST['nc_id']);
				$update_array['nc_name'] = trim($_POST['nc_name']);
//				$update_array['nc_parent_id'] = intval($_POST['nc_parent_id']);
				$update_array['nc_sort'] =trim($_POST['nc_sort']);

				$result = $model_class->update($update_array);
				if ($result){
					$url = array(
						array(
							'url'=>'index.php?act=news_class&op=news_class',
							'msg'=>'返回分类列表',
						),
						array(
							'url'=>'index.php?act=news_class&op=news_class_edit&nc_id='.intval($_POST['nc_id']),
							'msg'=>'重新编辑该分类',
						),
					);
					$this->log(l('nc_edit,news_class_index_class').'['.$_POST['nc_name'].']',1);
					showMessage('编辑分类成功','index.php?act=news_class&op=news_class');
				}else {
					showMessage('编辑分类失败');
				}
			}
		}

		$class_array = $model_class->getOneClass(intval($_GET['nc_id']));
		if (empty($class_array)){
			showMessage('参数错误1');
		}

		Tpl::output('class_array',$class_array);
		Tpl::showpage('news_class.edit');
	}

	/**
	 * 删除分类
	 */
	public function news_class_delOp(){
		$model_class = Model('news_class');
		if (intval($_GET['nc_id']) > 0){
			$array = array(intval($_GET['nc_id']));

			$del_array = $model_class->getChildClass($array);
			if (is_array($del_array)){
				foreach ($del_array as $k => $v){
					$model_class->del($v['nc_id']);
				}
			}
			$this->log(l('nc_add,news_class_index_class').'[ID:'.intval($_GET['nc_id']).']',1);
			showMessage('删除成功','index.php?act=news_class&op=news_class');
		}else {
			showMessage('请选择要删除的内容','index.php?act=news_class&op=news_class');
		}
	}
	/**
	 * ajax操作
	 */
	public function ajaxOp(){
		switch ($_GET['branch']){
			/**
			 * 分类：验证是否有重复的名称
			 */
			case 'news_class_name':
				$model_class = Model('news_class');
				$class_array = $model_class->getOneClass(intval($_GET['id']));

				$condition['nc_name'] = trim($_GET['value']);
				$condition['nc_parent_id'] = $class_array['nc_parent_id'];
				$condition['no_nc_id'] = intval($_GET['id']);
				$class_list = $model_class->getClassList($condition);
				if (empty($class_list)){
					$update_array = array();
					$update_array['nc_id'] = intval($_GET['id']);
					$update_array['nc_name'] = trim($_GET['value']);
					$model_class->update($update_array);
					echo 'true';exit;
				}else {
					echo 'false';exit;
				}
				break;
			/**
			 * 分类： 排序 显示 设置
			 */
			case 'news_class_sort':
				$model_class = Model('news_class');
				$update_array = array();
				$update_array['nc_id'] = intval($_GET['id']);
				$update_array[$_GET['column']] = trim($_GET['value']);
				$result = $model_class->update($update_array);
				echo 'true';exit;
				break;
			/**
			 * 分类：添加、修改操作中 检测类别名称是否有重复
			 */
			case 'check_class_name':
				$model_class = Model('news_class');
				$condition['nc_name'] = trim($_GET['nc_name']);
				$condition['nc_parent_id'] = intval($_GET['nc_parent_id']);
				$condition['no_nc_id'] = intval($_GET['nc_id']);
				$class_list = $model_class->getClassList($condition);
				if (empty($class_list)){
					echo 'true';exit;
				}else {
					echo 'false';exit;
				}
				break;
		}
	}
}

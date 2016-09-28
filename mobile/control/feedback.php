<?php

defined('InShopNC') or exit('Access Invalid!');

class feedbackControl {

	/**
	 * @帮助页接口
	 * add by lizh 10:41 2016/7/8
	 */
    public function bangzhu_1_5Op() {
        
		$article_class = Model('article_class');
		$article_class_data = $article_class -> getClassList(array(ac_type => 'wap'));
        
		$ac_id = $article_class_data[0]['ac_id'];
		
		$article = Model('article');
		$article_data = Model() -> table('article') -> field('article_id, article_title, article_wap_icon') -> where(array(ac_id => $ac_id, article_show => 1)) -> select();
		foreach($article_data as $k => $v) {
			
			$article_wap_icon = $v['article_wap_icon'];
			$icon_url = C('upload_site_url').'/cms/ac_icon/'.$article_wap_icon;
			$article_data[$k]['icon_url'] = $icon_url;
			
		}
		
		output_data(array('article_class' => $article_class_data[0], 'article_data' => $article_data));
    }
	
	/**
	 * @帮助内容接口
	 * add by lizh 10:41 2016/7/8
	 */
    public function help_content_1_5Op() {
        
		$article_id = $_GET['article_id'];
		if(empty($article_id)) {
			
			output_data(array('status' => 0, 'article_data' => array(0 => array('article_title' => '帮助', 'article_content' => '<span>暂无内容；敬请期待！！！</span>'))));
			
		}

		$article = Model('article');
		$article_data = Model() -> table('article') -> field('article_id, article_title, article_content') -> where(array(article_id => $article_id)) -> select();
		
		foreach($article_data as $k => $v) {
			
			$article_content = htmlspecialchars_decode($v['article_content']);
			$article_data[$k]['article_data_html'] = $article_content;
			if(empty($article_content)) {
				
				$article_data[$k]['article_content'] = '<span>暂无内容；敬请期待！！！</span>';
				
			}
			
		}
		
		output_data(array('status' => 1, 'article_data' => $article_data));
    }
	
	/**
	 * @搜索帮助内容接口
	 * add by lizh 10:41 2016/7/8
	 */
    public function select_help_content_1_5Op() {
        
		$article_class = Model('article_class');
		$article_class_data = $article_class -> getClassList(array(ac_type => 'wap'));  
		$ac_id = $article_class_data[0]['ac_id'];
		
		$article_content = '%'.$_GET['article_content'].'%';
		$article = Model('article');
		$where_str = '(article_title like "'.$article_content.'" or article_content like "'.$article_content.'") and (ac_id='.$ac_id.' and article_show = 1)';
		//echo $where_str;
		$article_data = Model() -> table('article') -> field('article_id, article_title, article_wap_icon') -> where($where_str) -> select();
		foreach($article_data as $k => $v) {
			
			$article_wap_icon = $v['article_wap_icon'];
			$icon_url = C('upload_site_url').'/cms/ac_icon/'.$article_wap_icon;
			$article_data[$k]['icon_url'] = $icon_url;
			
		}
		output_data(array('article_class' => $article_class_data[0], 'article_data' => $article_data));
		
    }

}

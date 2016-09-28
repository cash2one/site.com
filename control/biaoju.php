<?php
/**
 * 镖局首页
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class biaojuControl extends BaseBiaojuControl{

	public function __construct() {
		parent::__construct();
    }
	public function indexOp(){
       Tpl::showpage('index');
	}
}

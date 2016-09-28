<?php
/**
 * 商标注册服务
 *
 *
 ***/

defined('InShopNC') or exit('Access Invalid!');
class biaoju_buyControl extends BaseBiaojuControl{

	public function __construct() {
		parent::__construct();
        Tpl::output('index_sign','index');
    }
	public function indexOp(){
       Tpl::showpage('buy');
	}
}

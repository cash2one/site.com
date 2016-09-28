<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/newswelcome/js/jquery-1.10.2.min.js"  type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<?php if($usertplid == 0){ ?>
    <link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common.css?BPm" />
<?php }elseif($usertplid == 1){ ?>
    <link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common.css?BPm" />
<?php }else{ ?>
    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/jquery-2.1.1.js"></script>
    <link href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style-<?php echo ($usertplid); ?>.css?id=103" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); echo ltrim(RES,'.');?>/css/style_2_common_2.css?BPm" />
    <link href="<?php echo ($staticPath); ?>/tpl/static/new/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo ($staticPath); ?>/tpl/static/new/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo ($staticPath); ?>/tpl/static/new/css/style.css" rel="stylesheet">
        <style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        margin-left: 13px;
        margin-right: 5px;
    }
    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translateX(200px);
            transform: translateX(200px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }
    .fadeInRight {
        -webkit-animation-name: fadeInRight;
    }

    .alink a:link {color: #fff}
    .alink a:hover {color: #000}
    .pace-done{min-width:1345px;overflow-x:auto;}
    .alert h4 {color: #000;}
    </style>
<?php } ?>
<style type="text/css">
  .welcome1{
    border: 1px solid #EAEAEA;
    position: relative;
  }
  .welcome1 li{
    float: left;  
    height: 50px;
    width: 12.323%; 
    text-align:center;
    /*font-weight: bold;*/
    position: relative;
    font-size: 1.25em;
    border: 1px solid #DFDFDF;
    background: #F3F3F3;
  }
  .welcome1 ul{
    /*max-width: 981px;*/
  }
  .welcome1 li a{
    line-height:3.5;
  }
  .welcome1 li.tab-current{
    border-right:0;   
    border-left:0;
    border-bottom:0;
    background: none;
  }
  .content1{
    margin:80px auto;
    top:80px;
  }
  .img1{
    margin: 60px 29px 0px 29px;
    width:120px;
    height:150px;
    float: left;
    text-align: center;
  }
  .img1 a {
    line-height: 50px;
  }
  .img1 a:hover{
    text-decoration:none;  
  } 
   .content ul li.guanzhu {
  color: #fff;
    float: left;
    height: 96px;
    margin-right: 1px;
    overflow: hidden;
    width: 24.8%;
    background:#7cbae5;
  }

 .content ul li.huiyuanka {
  color: #fff;
    float: left;
    height: 96px;
    margin-right: 1px;
    overflow: hidden;
    width: 24.8%;
    background:#cec0f4;
  }
 .content ul li.liulan {
  color: #fff;
    float: left;
    height: 96px;
    margin-right: 1px;
    overflow: hidden;
    width: 24.8%;
    background:#81d2cf;
  }
 .content ul li.fangke {
  color: #fff;
    float: left;
    height: 96px;
    margin-right: 1px;
    overflow: hidden;
    width: 24.8%;
    background:#92bf77;
  }
 .content ol li{
  float: left;
    height:120px;
    overflow: hidden;
    width:120px;
  padding:0px 15px;
  }
 .content ul li.guanzhu a,
 .content ul li.huiyuanka a,
 .content ul li.liulan a,
 .content ul li.fangke a
 {
    color: #fff;
    display: block;
    font-size:22px;
    height: 96px;
    overflow: hidden;
    /*width: 224px;*/
    padding-top:10px;
  text-align:center;
}
 .content ul li a:hover {
  text-decoration:none;
}
</style>
<style>
.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:101px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}
.toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.toplink .welcome{ float:left;}
.toplink .memberinfo{ float:right;}
.toplink .memberinfo a{ color:#999;}
.toplink .memberinfo a:hover{ color:#F90}
.toplink .memberinfo a.green{ background:none; color:#0C0}

.logo { color: #333; height:70px; font-size:16px;}
h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.navr {width:auto;overflow:hidden;}
.navr li {text-align:center; float: left; height:25px; font-size:1em; width:12%; margin-right:5px;}
.navr li a {width:100%; line-height:25px; float: left;height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#1ab394;}
.navr li.menuon {background:#1ab394; display:block; width:12%;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
</style>
</head>
<?php $Cashierpath=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'Cashier'.DIRECTORY_SEPARATOR.'pigcms'.DIRECTORY_SEPARATOR.'base.php'; $CashierOff=ture; if(file_exists($Cashierpath)){ $CashierOff=false; } $menus=array( array( 'name'=>'基础设置', 'iconName'=>'base', 'display'=>0, 'subs'=>array( array('name'=>'关注时回复与帮助','link'=>U('Areply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Areply')), array('name'=>'微信－文本回复','link'=>U('Text/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Text')), array('name'=>'微信－图文回复','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'微信－多图文回复','link'=>U('Img/multi',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'multi')), array('name'=>'微信－语音回复','link'=>U('Voiceresponse/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Voiceresponse')), array('name'=>'微信－群发消息','link'=>U('Message/sendHistory',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Message')), array('name'=>'微信－模板消息','link'=>U('TemplateMsg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'TemplateMsg')), array('name'=>'LBS商家连锁','link'=>U('Company/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Company')), array('name'=>'自定义菜单','link'=>U('Diymen/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Diymen')), array('name'=>'自动获取粉丝信息','link'=>U('Auth/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Auth')), array('name'=>'店员管理','f'=>'Assistente','link'=>U('Assistente/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Assistente')), array('name'=>'回答不上来的配置','link'=>U('Other/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Other')), )), array( 'name'=>'微网站', 'iconName'=>'site', 'display'=>0, 'subs'=>array( array('name'=>'首页回复配置','f'=>'Home','link'=>U('Home/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'set')), array('name'=>'分类管理','f'=>'Home','link'=>U('Classify/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Classify')), array('name'=>'H5动态自定义模板','f'=>'CustomTmpls','link'=>U('CustomTmpls/dynamic',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'CustomTmpls','a'=>'dynamic')), array('name'=>'静态模板管理','f'=>'Home','link'=>U('Tmpls/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Tmpls','a'=>'index')), array('name'=>'文章管理','f'=>'Home','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'首页幻灯片','f'=>'Home','link'=>U('Flash/index',array('token'=>$token,'tip'=>1)),'new'=>0,'selectedCondition'=>array('m'=>'Flash','tip'=>1)), array('name'=>'轮播背景图','f'=>'Home','link'=>U('Flash/index',array('token'=>$token,'tip'=>2)),'new'=>1,'selectedCondition'=>array('m'=>'Flash','tip'=>2)), array('name'=>'底部导航菜单','f'=>'Home','link'=>U('Catemenu/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Catemenu')), array('name'=>'版权设置','f'=>'Home','link'=>U('Home/plugmenu',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'plugmenu')), array('name'=>'在线预览','link'=>U('Yulan/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Yulan'),'blank'=>1), )), array( 'name'=>'人气红包', 'iconName'=>'service', 'display'=>0, 'subs'=>array( array('name'=>'红包设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'index')), array('name'=>'概率设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/rands',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'rands')), array('name'=>'赞助商设置','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/zzs',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'zzs')), array('name'=>'用户管理','f'=>'Hongbaoqiye','link'=>U('Hongbaoqiye/user',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hongbaoqiye','a'=>'user')), )), array( 'name'=>'整点人气红包', 'iconName'=>'crm', 'display'=>0, 'subs'=>array( array('name'=>'整点人气红包','f'=>'Hongbaodl','link'=>U('Hongbaodl/index',array('token'=>$token)),'new'=>0,'test'=>1,'selectedCondition'=>array('m'=>'Hongbaodl','a'=>'index')) )), array( 'name'=>'点赚传媒', 'iconName'=>'service', 'display'=>0, 'subs'=>array( array('name'=>'基础配置','f'=>'Adcms','link'=>U('Adcms/peizhi',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'peizhi')), array('name'=>'公告管理','f'=>'Adcms','link'=>U('Adcms/news_lists',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms'),'exceptCondition'=>array('a'=>'tixian,user_fans,index,user,peizhi,hezuo')), array('name'=>'软文管理','f'=>'Adcms','link'=>U('Adcms/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'index')), array('name'=>'广告管理','f'=>'Adcms','link'=>U('Adcms/flash',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'flash')), array('name'=>'用户管理','f'=>'Adcms','link'=>U('Adcms/user',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms'),'exceptCondition'=>array('a'=>'tixian,index,news_lists,peizhi,hezuo')), array('name'=>'商家合作','f'=>'Adcms','link'=>U('Adcms/hezuo',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'hezuo')), array('name'=>'提现管理','f'=>'Adcms','link'=>U('Adcms/tixian',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'tixian')), array('name'=>'黑名单','f'=>'Adcms','link'=>U('Adcms/black',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Adcms','a'=>'black')) )), array( 'name'=>'游戏&贺卡', 'iconName'=>'game', 'display'=>0, 'subs'=>array( array('name'=>'游戏信息设置','f'=>'Game','link'=>U('Game/config',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'config')), array('name'=>'我的游戏','f'=>'Game','link'=>U('Game/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'index')), array('name'=>'游戏库','f'=>'Game','link'=>U('Game/gameLibrary',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game','a'=>'gameLibrary')), array('name'=>'我的贺卡','f'=>'Card','link'=>U('Card/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Card','a'=>'index')), array('name'=>'贺卡库','f'=>'Card','link'=>U('Card/cardLibrary',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Card','a'=>'cardLibrary')), )), array( 'name'=>'PC网站', 'iconName'=>'scene', 'display'=>0, 'subs'=>array( array('name'=>'基本设置','f'=>'Web','link'=>U('Web/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'set')), array('name'=>'选择模板','f'=>'Web','link'=>U('Web/choose_tpl',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'choose_tpl')), array('name'=>'导航菜单','f'=>'Web','link'=>U('Web/nav',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'nav')), array('name'=>'图集管理','f'=>'Web','link'=>U('Web/flash',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'flash')), array('name'=>'新闻管理','f'=>'Web','link'=>U('Web/news',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'news')), array('name'=>'产品管理','f'=>'Web','link'=>U('Web/product',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'product')), array('name'=>'下载管理','f'=>'Web','link'=>U('Web/down',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'down')), array('name'=>'自定义页面','f'=>'Web','link'=>U('Web/page',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Web','a'=>'page')), )), array( 'name'=>'手机站', 'iconName'=>'site', 'display'=>0, 'subs'=>array( array('name'=>'手机站配置','f'=>'Phone','link'=>U('Phone/baseSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Phone','a'=>'baseSet')) )), array( 'iconName'=>'zhida', 'name'=>'百度直达号', 'display'=>0, 'subs'=>array( array('name'=>'对接配置','f'=>'Zhida','link'=>U('Zhida/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhida','a'=>'index')), )), array( 'name'=>'微场景', 'iconName'=>'ditch', 'display'=>0, 'subs'=>array( array('name'=>'创建场景','f'=>'SeniorScene','link'=>U('SeniorScene/highLive',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene'),'blank'=>1), array('name'=>'我的场景','f'=>'SeniorScene','link'=>U('SeniorScene/highLive',array('token'=>$token,'v'=>'myscene')),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene'),'blank'=>1), array('name'=>'场景关键词','f'=>'SeniorScene','link'=>U('SeniorScene/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'SeniorScene')), )), array( 'iconName'=>'ditch', 'name'=>'高级场景', 'display'=>0, 'subs'=>array( array('name'=>'场景管理','f'=>'Eqx','link'=>U('Eqx/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Eqx','a'=>'index')), array('name'=>'场景回复配置','f'=>'Eqx','link'=>U('Eqx/keywordlist',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Eqx','a'=>'keywordlist')), )), array( 'name'=>'收银台', 'iconName'=>'store', 'display'=>0, 'subs'=>array(array('name'=>'登录收银台','f'=>'Cashier','link'=>U('Cashier/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Cashier'),'blank'=>1) )), array( 'name'=>'微互动', 'iconName'=>'interact', 'display'=>0, 'subs'=>array( array('name'=>'微名片','f'=>'Person_card','link'=>U('Person_card/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Person_card')), array('name'=>'留言板','f'=>'Reply','link'=>U('Reply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Reply')), array('name'=>'微论坛','f'=>'Forum','link'=>U('Forum/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Forum')), array('name'=>'3G图集(相册)','f'=>'Photo','link'=>U('Photo/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Photo')), array('name'=>'3G微投票','f'=>'Vote','link'=>U('Vote/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Vote')), array('name'=>'图文投票','f'=>'Voteimg','link'=>U('Voteimg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Voteimg')), array('name'=>'微预约(万能表单,报名)','f'=>'Custom','link'=>U('Custom/record',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Custom')), array('name'=>'微调研','f'=>'Research','link'=>U('Research/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Research')), array('name'=>'分享管理','f'=>'Share','link'=>U('Share/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Share')), array('name'=>'邀请函','f'=>'Invite','link'=>U('Invite/add',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Invite')), )), array( 'name'=>'行业应用', 'iconName'=>'business', 'display'=>0, 'subs'=>array( array('name'=>'微排号','f'=>'Numqueue','link'=>U('Numqueue/index',array('token'=>$token,'type'=>'Numqueue')),'new'=>1,'selectedCondition'=>array('m'=>'Numqueue','type'=>'Numqueue'),'test'=>0), array('name'=>'微餐饮（无线打印）','f'=>'Repast','link'=>U('Repast/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Repast')), array('name'=>'微外卖[新版]','f'=>'DishOut','link'=>U('DishOut/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'DishOut'),'test'=>0), array('name'=>'全民经纪人','f'=>'MicroBroker','link'=>U('MicroBroker/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'MicroBroker'),'test'=>0), array('name'=>'楼盘房产','f'=>'Estate','link'=>U('Estate/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Estate')), array('name'=>'360°全景','f'=>'Panorama','link'=>U('Panorama/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Panorama')), array('name'=>'微婚庆（喜帖）','f'=>'Wedding','link'=>U('Wedding/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wedding')), array('name'=>'微汽车','f'=>'Car','link'=>U('Car/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Car')), array('name'=>'微教育','f'=>'School','link'=>U('School/index',array('token'=>$token,'type'=>'semester')),'new'=>0,'selectedCondition'=>array('m'=>'School')), array('name'=>'微医疗','f'=>'Medical','link'=>U('Medical/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Medical'),'test'=>0), array('name'=>'酒店宾馆','f'=>'Hotels','link'=>U('Hotels/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Hotels')), array('name'=>'微美容','f'=>'Beauty','link'=>U('Business/index',array('token'=>$token,'type'=>'beauty')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'beauty'),'test'=>0), array('name'=>'微健身','f'=>'Fitness','link'=>U('Business/index',array('token'=>$token,'type'=>'fitness')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'fitness'),'test'=>0,'show'=>1), array('name'=>'微政务','f'=>'Gover','link'=>U('Business/index',array('token'=>$token,'type'=>'gover')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'gover'),'test'=>0,'show'=>1), array('name'=>'微食品','f'=>'Food','link'=>U('Business/index',array('token'=>$token,'type'=>'food')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'food'),'test'=>0), array('name'=>'微旅游','f'=>'Travel','link'=>U('Business/index',array('token'=>$token,'type'=>'travel')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'travel'),'test'=>0), array('name'=>'微花店','f'=>'Flower','link'=>U('Business/index',array('token'=>$token,'type'=>'flower')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'flower'),'test'=>0), array('name'=>'微物业','f'=>'Property','link'=>U('Business/index',array('token'=>$token,'type'=>'property')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'property'),'test'=>0), array('name'=>'微KTV','f'=>'Ktv','link'=>U('Business/index',array('token'=>$token,'type'=>'ktv')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'ktv'),'test'=>0), array('name'=>'微酒吧','f'=>'Bar','link'=>U('Business/index',array('token'=>$token,'type'=>'bar')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'bar'),'test'=>0), array('name'=>'微装修','f'=>'Fitment','link'=>U('Business/index',array('token'=>$token,'type'=>'fitment')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'fitment'),'test'=>0), array('name'=>'微婚庆','f'=>'Wedding','link'=>U('Business/index',array('token'=>$token,'type'=>'wedding')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'wedding'),'test'=>0), array('name'=>'微宠物','f'=>'Affections','link'=>U('Business/index',array('token'=>$token,'type'=>'affections')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'affections'),'test'=>0), array('name'=>'微家政','f'=>'Housekeeper','link'=>U('Business/index',array('token'=>$token,'type'=>'housekeeper')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'housekeeper'),'test'=>0), array('name'=>'微租赁','f'=>'Lease','link'=>U('Business/index',array('token'=>$token,'type'=>'lease')),'new'=>0,'selectedCondition'=>array('m'=>'Business','type'=>'lease'),'test'=>0), array('name'=>'微招聘','link'=>U('Zhaopin/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhaopin')), )), array( 'name'=>'摇一摇.周边', 'iconName'=>'shakearound', 'display'=>0, 'subs'=>array( array('name'=>'设备管理','f'=>'Shakearound','link'=>U('Shakearound/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound')), array('name'=>'页面管理','f'=>'Shakearound','link'=>U('Shakearound/page_index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound','a'=>'page_index')), array('name'=>'统计信息','f'=>'Shakearound','link'=>U('Shakearound/statistics',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shakearound')), )), array( 'name'=>'微现场', 'iconName'=>'scene', 'display'=>0, 'subs'=>array( array('name'=>'微信签到','f'=>'Signin','link'=>U('Signin/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Signin')), array('name'=>'摇一摇','f'=>'Shake','link'=>U('Shake/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shake')), array('name'=>'微信墙','f'=>'Wall','link'=>U('Wall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Wall')), array('name'=>'照片墙','f'=>'Zhaopianwall','link'=>U('Zhaopianwall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Zhaopianwall')), array('name'=>'现场活动','f'=>'Scene','link'=>U('Scene/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Scene')), )), array( 'name'=>'电商系统', 'iconName'=>'store', 'display'=>0, 'subs'=>array( array('name'=>'在线支付设置','link'=>U('Alipay_config/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Alipay_config')), array('name'=>'微信支付证书','link'=>U('Alipay_cert/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Alipay_cert')), array('name'=>'平台支付对帐','link'=>U('Platform/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Platform')), array('name'=>'微信支付账单','link'=>U('WeixinBill/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'WeixinBill')), array('name'=>'微信团购系统','f'=>'Groupon','link'=>U('Groupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Groupon')), array('name'=>'商城分佣管理','f'=>'Store','link'=>U('Store/twitter',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Store','a'=>'twitter')), array('name'=>'微信商城系统','f'=>'Store','link'=>U('Store/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Store')), array('name'=>'微商圈','f'=>'Market','link'=>U('Market/index',array('token'=>$token)),'test'=>0,'selectedCondition'=>array('m'=>'Market')), array('name'=>'微众筹','f'=>'Crowdfunding','link'=>U('Crowdfunding/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Crowdfunding')), array('name'=>'一元夺宝','f'=>'Unitary','link'=>U('Unitary/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Unitary')), array('name'=>'微秒杀','f'=>'Seckill','link'=>U('Seckill/index',array('token'=>$token,'type'=>'seckill')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Seckill')), array('name'=>'微信生活圈','f'=>'LivingCircle','link'=>U('LivingCircle/index',array('token'=>$token,'type'=>'LivingCircle')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'LivingCircle')), array('name'=>'微砍价','f'=>'Bargain','link'=>U('Bargain/index',array('token'=>$token,'type'=>'Bargain')),'new'=>1,'selectedCondition'=>array('m'=>'Bargain')), array('name'=>'降价拍','f'=>'Cutprice','link'=>U('Cutprice/index',array('token'=>$token,'type'=>'Cutprice')),'test'=>0,'selectedCondition'=>array('m'=>'Cutprice')), array('name'=>'微拍卖','f'=>'Auction','link'=>U('Auction/index',array('token'=>$token,'type'=>'Auction')),'new'=>1,'selectedCondition'=>array('m'=>'Auction')), )), array( 'name'=>'多级分销商城', 'iconName'=>'store', 'display'=>0, 'subs'=>array( array('name'=>'微商城(新版)','f'=>'Storenew','link'=>U('Storenew/index',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'商城设置','f'=>'Storenew','link'=>U('Storenew/setting',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'文章管理','f'=>'Storenew','link'=>U('Storenew/news',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'订单管理','f'=>'Storenew','link'=>U('Storenew/orders',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'分销管理','f'=>'Storenew','link'=>U('Storenew/twitter',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'区域管理','f'=>'Storenew','link'=>U('Storenew/quyutwitter',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>1,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'限时竞拍','f'=>'Storenew','link'=>U('Storenew/jingpai',array('token'=>$token,'infotype'=>'Storenew')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'团购管理','f'=>'Storenew','link'=>U('Storenew/groupon',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>1,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'帮助说明','f'=>'Storenew','link'=>U('Storenew/help',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), array('name'=>'黑名单管理','f'=>'Storenew','link'=>U('Storenew/lockuser',array('token'=>$token,'infotype'=>'Storenew')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Storenew')), )), array( 'name'=>'微店系统', 'iconName'=>'micrstore', 'display'=>0, 'subs'=>array( array('name'=>'微店设置','f'=>'Micrstore','link'=>U('Micrstore/index',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'index')), array('name'=>'微店管理','f'=>'Micrstore','link'=>U('Micrstore/api',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'api'),'blank'=>1), array('name'=>'三级分销','f'=>'Micrstore','link'=>U('Micrstore/dis',array('token'=>$token,'infotype'=>'Micrstore')),'new'=>0,'selectedCondition'=>array('m'=>'Micrstore','a'=>'dis'),'blank'=>1), array('name'=>'提现管理','f'=>'Micrstore','link'=>U('Micrstore/withdraw',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Micrstore'),'blank'=>1), )), array( 'name'=>'微粉丝管理CRM', 'iconName'=>'crm', 'display'=>0, 'subs'=>array( array('name'=>'粉丝管理','link'=>U('Wechat_group/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'index')), array('name'=>'分组管理','link'=>U('Wechat_group/groups',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'groups')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Wechat_behavior')), array('name'=>'服务窗粉丝管理','f'=>'Fuwu','link'=>U('Fuwu/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Fuwu')), )), array( 'name'=>'微硬件', 'iconName'=>'hardware', 'display'=>0, 'subs'=>array( array('name'=>'微信wifi设置','link'=>U('Router/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Router')), array('name'=>'无线打印机','link'=>U('Hardware/orderprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'orderprint')), array('name'=>'照片打印机','link'=>U('Hardware/photoprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'photoprint')), )), array( 'name'=>'微渠道', 'iconName'=>'ditch', 'display'=>0, 'subs'=>array( array('name'=>'渠道二维码','link'=>U('Recognition/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Recognition')), array('name'=>'二维码扫描分析','link'=>U('RecognitionData/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'RecognitionData')), )), array( 'name'=>'微客服', 'iconName'=>'service', 'display'=>0, 'subs'=>array( array('name'=>'微信人工客服','f'=>'ServiceUser','link'=>U('ServiceUser/wechatService',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'ServiceUser')), array('name'=>'网页客服管理','f'=>'Service','link'=>U('Service/servicelist',array('token'=>$token,'type'=>'setup')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'setup')), array('name'=>'聊天推广内容','f'=>'Service','link'=>U('Service/preferentiallist',array('token'=>$token,'type'=>'preferential')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'preferential')), array('name'=>'聊天个人板块','f'=>'Service','link'=>U('Service/my',array('token'=>$token,'type'=>'my')),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Service','type'=>'my')), )), array( 'name'=>'微活动', 'iconName'=>'active', 'display'=>0, 'subs'=>array( array('name'=>'朋友圈AD','f'=>'Pengyouquanad','link'=>U('Pengyouquanad/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Pengyouquanad')), array('name'=>'AA活动报名','f'=>'Aaactivity','link'=>U('Aaactivity/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Aaactivity')), array('name'=>'砍价传媒','f'=>'Adkanjia','link'=>U('Adkanjia/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Adkanjia')), array('name'=>'微召唤','f'=>'Weizhaohuan','link'=>U('Weizhaohuan/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Weizhaohuan')), array('name'=>'分享大奖赛','f'=>'Dajiangsai','link'=>U('Dajiangsai/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Dajiangsai')), array('name'=>'一元现金红包','f'=>'Cashbonus','link'=>U('Cashbonus/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Cashbonus')), array('name'=>'集字游戏','f'=>'Collectword','link'=>U('Collectword/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Collectword')), array('name'=>'我要上头条','f'=>'FrontPage','link'=>U('FrontPage/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'FrontPage')), array('name'=>'摇钱树','f'=>'CoinTree','link'=>U('CoinTree/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'CoinTree')), array('name'=>'摇一摇抽奖','f'=>'ShakeLottery','link'=>U('ShakeLottery/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'ShakeLottery')), array('name'=>'微信合体红包','f'=>'Hongbao','link'=>U('Hongbao/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Hongbao')), array('name'=>'粉丝红包','f'=>'DirectHongbao','link'=>U('DirectHongbao/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'DirectHongbao')), array('name'=>'分享助力','f'=>'Helping','link'=>U('Helping/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Helping')), array('name'=>'谁是情圣','f'=>'Sentiment','link'=>U('Sentiment/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Sentiment')), array('name'=>'优惠你说了算','f'=>'YouSetDiscount','link'=>U('YouSetDiscount/index',array('token'=>$token)),'new'=>0,'test'=>1,'selectedCondition'=>array('m'=>'YouSetDiscount')), array('name'=>'人气冲榜','f'=>'Popularity','link'=>U('Popularity/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Popularity')), array('name'=>'幸运大转盘','f'=>'Lottery','link'=>U('Lottery/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lottery')), array('name'=>'幸运九宫格','f'=>'Jiugong','link'=>U('Jiugong/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Jiugong')), array('name'=>'优惠券','f'=>'Coupon','link'=>U('Coupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Coupon')), array('name'=>'刮刮卡','f'=>'Guajiang','link'=>U('Guajiang/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Guajiang')), array('name'=>'幸运水果机','f'=>'LuckyFruit','link'=>U('LuckyFruit/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'LuckyFruit')), array('name'=>'砸金蛋','f'=>'GoldenEgg','link'=>U('GoldenEgg/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'GoldenEgg')), array('name'=>'走鹊桥','f'=>'AppleGame','link'=>U('AppleGame/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'AppleGame')), array('name'=>'摁死小情侣','f'=>'Lovers','link'=>U('Lovers/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lovers')), array('name'=>'中秋吃月饼','f'=>'Autumn','link'=>U('Autumn/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Autumn')), array('name'=>'拆礼盒','f'=>'Autumns','link'=>U('Autumns/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Autumns')), array('name'=>'一战到底','f'=>'Problem','link'=>U('Problem/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Problem')), array('name'=>'微信红包','f'=>'Red_packet','link'=>U('Red_packet/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Red_packet')), array('name'=>'惩罚台','f'=>'Punish','link'=>U('Punish/index',array('token'=>$token)),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Punish')), array('name'=>'趣味测试','f'=>'Test','link'=>U('Test/index',array('token'=>$token,'type'=>'Test')),'new'=>0,'test'=>0,'selectedCondition'=>array('m'=>'Test')), )), array( 'name'=>'会员卡', 'iconName'=>'card', 'display'=>0, 'subs'=>array( array('name'=>'会员卡','f'=>'Member_card','link'=>U('Member_card/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card'),'exceptCondition'=>array('a'=>'replyInfoSet,focus,custom,center,member,coupons,consume_record')), array('name'=>'卡券管理','f'=>'Member_card','link'=>U('Member_card/coupons',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Member_card','a'=>'coupons')), array('name'=>'卡券核销','f'=>'Member_card','link'=>U('Member_card/consume_record',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Member_card','a'=>'consume_record')), array('name'=>'会员中心','f'=>'Member_card','link'=>U('Member_card/center',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'center')), array('name'=>'消费记录','link'=>U('Member_card/member',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'member')), array('name'=>'回复设置','f'=>'Member_card','link'=>U('Member_card/replyInfoSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'replyInfoSet')), array('name'=>'幻灯片广告','f'=>'Member_card','link'=>U('Member_card/focus',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'focus')), array('name'=>'自定义输入项','f'=>'Member_card','link'=>U('Member_card/custom',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'custom')), )), array( 'name'=>'数据魔方', 'iconName'=>'datacube', 'display'=>0, 'subs'=>array( array('name'=>'请求数详情','link'=>U('Requerydata/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Requerydata')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior','a'=>'statistics')), )), array( 'name'=>'二次开发', 'iconName'=>'secondary', 'display'=>0, 'subs'=>array( array('name'=>'融合第三方','link'=>U('Api/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Api')), )), ); ?>
<?php if($usertplid == 2){ ?>
<body style="background-color:#2f4050;">
<?php $userbrowser = $_SERVER['HTTP_USER_AGENT']; if ( preg_match( '/MSIE/i', $userbrowser ) ) { ?>    
    <![if lt IE 9]>
      <div class="alert alert-danger">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
    <![endif]>
<?php } ?>
<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header" style="height: 90px;">
                        <div class="dropdown profile-element"> <span>
                            &nbsp;&nbsp;&nbsp;<a href="<?php echo U('Function/welcome',array('token'=>$token));?>"><img src="<?php echo ($wecha["headerpic"]); ?>" width="60" height="60" class="img-circle"/></a>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <font face="微软雅黑"><?php echo ($wecha["wxname"]); ?></font>
                             </span> <span class="text-muted text-xs block"> 套餐使用 <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs" style="  margin-left: -5%;">
                              <li><a href="#"><strong>微信号：</strong><?php echo ($wecha["weixin"]); ?></a></a></li>
                                <li><a href="#"><strong>VIP有效期：</strong><?php echo (date("Y-m-d",$thisUser["viptime"])); ?></a></a></li>
                                <li><a href="#"><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></a></li>
                                <li><a href="#"><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></a></li>
                                <li><a href="#"><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></a></li>
                                <li><a href="#"><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></a></li>
                                <li><a href="#"><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></a></li>
                                <li><a href="#"><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></a></li>
                                <li><a href="#"><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$thisUser['connectnum']; ?></a></li>
                                <li class="divider"></li>
                                <li><a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" ><b><center>退 出</center></b></a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <b>管理<br />中心</b>
                        </div>
                    </li>
<?php $icn=array('基础设置'=>'fa-th-large','微网站'=>'fa-home','游戏&贺卡'=>'fa-gamepad','PC网站[独立]'=>'fa-desktop','手机站[独立]'=>'fa-tablet','APP打包[独立]'=>'fa-folder','百度直达号'=>'fa-paw','微场景'=>'fa-picture-o','微互动'=>'fa-slideshare','行业应用'=>'fa-taxi','摇一摇.周边'=>'fa-weixin','微现场'=>'fa-wifi','电商系统'=>'fa-shopping-cart','微粉丝管理CRM'=>'fa-group','微硬件'=>'fa-puzzle-piece','微渠道'=>'fa-random','微活动'=>'fa-puzzle-piece','会员卡'=>'fa-credit-card','数据魔方'=>'fa-cube','微店系统'=>'fa-sitemap','微客服'=>'fa-headphones','二次开发'=>'fa-wrench'); foreach ($menus as $mk => $mv){ if(C('router_key') != ''&&$mv['iconName']=='hardware'){ unset($mv['subs'][0]); } if($CashierOff && ($mv['subs'][0]['f']=='Cashier')){ unset($menus[$mk]); } foreach ($mv['subs'] as $mvk => $mvv){ if ($mvv['f'] != NULL && !in_array($mvv['f'], $Allfunc)) { unset($menus[$mk]['subs'][$mvk]); } if ($mvv['selectedCondition']['m'] == 'Web') { $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'Web'.DIRECTORY_SEPARATOR; if (!file_exists($path.'Web_indexAction.class.php')) { unset($menus[$mk]); } } if(isset($group_func) && $_SESSION['role_name'] != '' && $_SESSION['role_name'] == 'staff'){ $not_exists = array('tianqi','qiushi','jishuan','langdu','jiankang','kuaidi','xiaohua','changtoushi','peiliao','liaotian','mengjian','yuyinfanyi','huoche','gongjiao','shenfenzheng','shouji','yinle','fujin','geci','fanyi','api','suanming','baike','caipiao','Zhida','whois','assistente'); if($mvv['f'] != NULL && !in_array($mvv['f'],$group_func)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] != NULL && in_array(strtolower($mvv['f']),$not_exists)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] == NULL){ unset($menus[$mk]['subs'][$mvk]); } if($mv['iconName']=='hardware'){ unset($menus[$mk]['subs']); } if($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(!in_array(ucfirst($mvv['selectedCondition']['type']),$group_func)){ unset($menus[$mk]['subs'][$mvk]); } } } if(in_array($mvv['selectedCondition']['m'],$not_exist) || in_array($mvv['f'],$not_exist)){ if($mvv['selectedCondition']['m'] == 'Home'){ unset($menus[$mk]); }else{ if ($mvv['f'] != NULL) { unset($menus[$mk]['subs'][$mvk]); } } }elseif($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(in_array(ucfirst($mvv['selectedCondition']['type']),$not_exist)){ unset($menus[$mk]['subs'][$mvk]); } } if($menus[$mk]['subs'] == NULL){ unset($menus[$mk]); } } } $i=0; $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } foreach ($icn as $k => $v) { if ($k == $m['name']) { $m['iconName'] = $v; } } if($currentParentMenuID == $i){ echo '<li class="active"><a href="#"><i class="fa '.$m['iconName'].'"></i><span class="nav-label">'.$m['name'].'</span> <span class="fa arrow"></span></a><ul class="nav nav-second-level collapse">'; }else{ echo '<li class=""><a href="#"><i class="fa '.$m['iconName'].'"></i> <span class="nav-label">'.$m['name'].'</span> <span class="fa arrow"></span></a><ul class="nav nav-second-level collapse">'; } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($currentParentMenuID==$i&&$j==$currentMenuID){ $selectedClassStr='active'; } $newStr=''; if ($s['test']){ $newStr.='<span class="test"></span>'; }else { if ($s['new']){ $newStr.='<span class="new"></span>'; } } if ($s['name']!='微信墙'&&$s['name']!='摇一摇'&&$s['name']!='现场活动'){ $target=''; if ($s['blank']){ $target=' target="_blank"'; } if ($s['notinpigcms']&&C('server_topdomain')=='pigcms.cn'){ }else { echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'"'.$target.'>'.$s['name'].'</a>'.$newStr.'</li>'; } }else { switch ($s['name']){ case '微信墙': case '摇一摇': case '现场活动': $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'User'.DIRECTORY_SEPARATOR; if (file_exists($path.'WallAction.class.php')&&file_exists($path.'ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } break; } } if ($s['name']=='静态模板管理'&&is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } $j++; } } echo '</ul>'; $i++; echo '</li>'; } ?>
     </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1" style="background-color:#f3f3f3;">
        <div class="row border-bottom">
        <div class="footer">
            <div style="float:left;">
            </div>
            <div  class="pull-right" style="float:left;">
                <?php echo ($f_siteName); ?>(c)版权所有 <a href="http://www.miibeian.gov.cn" target="_blank"><?php echo C('ipc');?></a>
    技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes"><i class="fa fa-qq"><?php echo ($f_qq); ?></i></a>
            </div>
    </div>
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;height: 70px;">
        <div class="logo">
        <div class="navbar-header" style="width:10%;height:30px;float:left;">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#" style="padding:10px 15px;height:15px;"><i class="fa fa-bars"></i> </a>
          </div>
        <div style="float:right;">
        <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">欢迎使用<?php echo ($f_siteName); ?>!</span>
                </li>
                <li class="dropdown">
                    <a class="count-info" href="<?php echo U('SiteMessage/index', array('token'=>$token));?>">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"><?php if($messageCount == 0): ?>0<?php else: echo ($messageCount); endif; ?></span>
                    </a>
                </li>
                <?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>"><font color="#888" size="2">登录</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <a href="<?php echo U('Index/login');?>"><font color="#888" size="2">注册</font></a></li>
                  <?php else: ?>
                  <li>
                  <a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >
                      <font color="#888" size="2"><i class="fa fa-sign-out"></i> 退 出
                  </font></a></li>
                  &nbsp;&nbsp;&nbsp;
                  <li><a href="<?php echo U('Home/Index/index');?>">
                      <font color="#888" size="2"><i class="fa fa-mail-reply"></i> 返回首页
                  </font></a></li>
                  &nbsp;&nbsp;&nbsp;
                  <li><a href="<?php echo U('User/Index/index');?>">
                      <font color="#888" size="2"><i class="fa fa-mail-reply"></i> 返回管理中心
                  </font></a></li><?php endif; ?>
            </ul>
            </div>
          </div>
        </nav>
        <?php  function convertUrlQuery($query){ $queryParts = explode('&', $query); $params = array(); foreach ($queryParts as $param){ $item = explode('=', $param); $params[$item[0]] = $item[1]; } return $params; } function getUrlQuery($array_query){ $tmp = array(); foreach($array_query as $k=>$param){ $tmp[] = $k.'='.$param; } $params = implode('&',$tmp); return $params; } $str = $_SERVER['REQUEST_URI']; $arr = parse_url($str); $arr_query = convertUrlQuery($arr['query']); $m = $arr_query['m']; $a = $arr_query['a']; $model = array( '欢迎页' =>array('Function' => '功能展示'), '基础设置' =>array('Areply' => '关注时回复与帮助','Home' => '首页回复设置','Text' => '微信-文本回复','Img' => '微信-图文回复','Voiceresponse' => '微信-语音回复','Message' => '微信－群发消息','TemplateMsg' => '微信－模板消息','Company' => 'LBS商家连锁','Diymen' => '自定义菜单','Auth' => '自动获取粉丝信息','Assistente' => '店员管理','Other' => '回答不上来的配置'), '微网站' =>array('Classify' => '分类管理','Essay' => '自定义内容','Tmpls' => '静态模板管理','CustomTmpls' => 'H5动态自定义模板','Flash' => '首页幻灯片','Catemenu' => '底部导航菜单','Live' => '微场景'), '游戏&贺卡' =>array('Game' => '游戏','Card' => '贺卡'), 'PC网站[独立]' =>array('Web' => 'PC站'), '手机网站[独立]' =>array('Phone' => '手机站'), '云打包' =>array('Yundabao' => 'APP打包'), '百度直达号' =>array('Zhida' => '百度直达号'), '微场景' =>array('SeniorScene' => '高级场景'), '微互动' =>array('Person_card' => '微名片','Reply' => '留言板','Forum' => '微论坛','Photo' => '3G图集(相册)','Vote' => '3G微投票','Voteimg' => '图文投票','Custom' => '微预约(万能表单,报名)','Research' => '微调研','Share' => '分享管理','Invite' => '邀请函'), '行业应用' =>array('Numqueue' => '微排号','Repast' => '微餐饮','DishOut' => '微外卖','MicroBroker' => '全民经纪人','Estate' => '楼盘房产','School' => '微教育','Hotels' => '酒店宾馆','Panorama' => '360°全景','Wedding' => '微婚庆（喜帖）','Car' => '微汽车','Medical' => '微医疗','Host' => '通用订单(酒吧KTV)','Business' => '行业应用'), '摇一摇.周边' =>array('Shakearound' => '摇一摇.周边'), '微现场' =>array('Signin' => '微信签到','Shake' => '摇一摇','Wall' => '微信墙','Scene' => '现场活动'), '电商系统' =>array('Alipay_config' => '在线支付设置','Alipay_cert' => '微信支付证书','Platform' => '平台支付对帐','WeixinBill' => '微信支付账单','Groupon' => '微信团购系统','Store' => '商城','Market' => '微商圈','Crowdfunding' => '微众筹','Unitary' => '一元夺宝','Unitary' => '一元夺宝','Seckill' => '微秒杀','LivingCircle' => '微信生活圈','Bargain' => '微砍价','Cutprice' => '降价拍'), '微店系统' =>array('Micrstore' => '微店'), '微粉丝管理CRM' =>array('Wechat_group' => '粉丝管理','Wechat_behavior' => '粉丝行为分析','Fuwu' => '服务窗粉丝管理'), '微硬件' =>array('Router' => '微信wifi设置','Hardware' => '打印机'), '微渠道' =>array('Recognition' => '渠道二维码','RecognitionData' => '二维码扫描分析'), '微客服' =>array('ServiceUser' => '微信人工客服','Service' => '网页客服管理'), '微活动' =>array('CoinTree' => '摇钱树','Hongbao' => '微信合体红包','Helping' => '分享助力','Sentiment' => '谁是情圣','Popularity' => '人气冲榜','Lottery' => '幸运大转盘','Jiugong' => '幸运九宫格','Coupon' => '优惠券','Guajiang' => '刮刮卡','LuckyFruit' => '幸运水果机','GoldenEgg' => '砸金蛋','AppleGame' => '走鹊桥','Lovers' => '摁死小情侣','Autumn' => '中秋吃月饼','Autumns' => '拆礼盒','Problem' => '一战到底','Red_packet' => '微信红包','Punish' => '惩罚台','Test' => '趣味测试'), '会员卡' =>array('Member_card' => '会员卡'), '数据魔方' =>array('Requerydata' => '请求数详情'), '二次开发' =>array('Api' => '融合第三方'), ); foreach ($model as $key => $value) { if (array_key_exists($m,$value)) { $c = $key; } foreach ($value as $k => $v) { if ($m == $k) { $mod =$v; } } } ?>
        
        <div class="row wrapper border-bottom white-bg page-heading" style="margin-left: 0px;height:30px;">
                <div class="col-lg-10" style="margin-top:8px;">
                    <h2 style="font-size: 24px;"><?php echo $mod; ?></h2>
                </div>
            </div>
        <div>
        <div class="animated fadeInRight" style="margin-bottom: 80px;background-color: #fff;margin-top:10px;border: 1px solid rgba(155, 155, 155, 0.36);border-top:5px solid rgba(155, 155, 155, 0.36);">
        <div style="margin-left:1%;margin-right:1%;margin-top:20px;">
<?php }else{ ?>
<body id="nv_member" class="pg_CURMODULE">
<div id="wp" class="wp">
<style>
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}

.pages{padding:3px;margin:3px;text-align:center;}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}
.pages a:hover{border:#999 1px solid;color:#666;}
.pages a:active{border:#999 1px solid;color:#666;}
.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}
.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
</style>

 <?php if(session('isQcloud') == true): ?><link type="text/css" rel="stylesheet" href="http://qzonestyle.gtimg.cn/qcloud/app/open/v1/css/wxcloud.min.css" />


<style>
.px {
  background:#fff;

  border-color:#c9c9c9;

}


input[type=radio] {

  border-radius:55px;

  border: none;

}
.btnGreen {
  border:1px solid #FFFFFF;
  box-shadow:0 1px 1px #0A8DE4;
  -moz-box-shadow:0 1px 1px #0A8DE4;
  -webkit-box-shadow:0 1px 1px #0A8DE4;
  padding:5px 20px;
  cursor:pointer;
  display:inline-block;
  text-align:center;
  vertical-align:bottom;
  overflow:visible;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
*zoom:1;
  background-color:#5ba607;
  background-image:linear-gradient(bottom, #107BAD  3%, #18C2D1 97%, #18C2D1 100%);
  background-image:-moz-linear-gradient(bottom, #107BAD  3%, #0A8DE40 97%, #18C2D1 100%);
  background-image:-webkit-linear-gradient(bottom, #107BAD  3%,#0A8DE4 97%, #18C2D1 100%);
  color:#fff; font-size:14px; line-height: 1.5;
}
.btnGreen:hover {
  background-color:#5ba607;
  background-image:linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
  background-image:-moz-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
  background-image:-webkit-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
  color:#fff
}
.btnGreen:active {
  background-color:#5ba607;
  background-image:linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
  background-image:-moz-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
  background-image:-webkit-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
  color:#fff
}

.btnGreen{border:1px solid #3d810c;box-shadow:0 1px 1px #aaa;-moz-box-shadow:0 1px 1px #aaa;-webkit-box-shadow:0 1px 1px #aaa;padding:5px 20px;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;*zoom:1;background-color:#5ba607;background-image:linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);color:#fff;font-size:14px;line-height:1.5;}.btnGreen:hover{background-color:#5ba607;background-image:linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);color:#fff}.btnGreen:active{background-color:#5ba607;background-image:linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);color:#fff}

</style><?php endif; ?>
<!--对接独立样式27-->
<?php if ($_SESSION['is_syn'] != 0): ?>
<style>
.tableContent {
  background:none !important;
}
  <?php if ($_SESSION['is_syn'] == 1): ?>
  .tableContent .content {
    border-left: 0;
    padding: 5px 10px;
    background-color: #FFFFFF;
    width:820px;
    min-height: inherit;
  }
  .tableContent .content .px {
    width:300px !important;
  }
  <?php endif;?>
  <?php if ($_SESSION['is_syn'] == 2): ?>
  .tableContent .content {
    border-left: 0;
    padding: 5px 10px;
    background-color: #FFFFFF;
    width:95%;
    min-height: inherit;
    margin:0;
    float:left;
  }
  <?php endif;?>
.tableContent .content .bgfc {
  padding:5px;
}
</style>
<script type="text/javascript">
$(function () {
  $('.tableContent form').removeAttr('target');
});
</script>
<?php endif;?>

<!--对接隐藏头部和公用菜单-->
<?php if (!isset($_SESSION['is_syn']) && ($_SESSION['is_syn'] == 0)){ ?>
<?php if (!isset($_SESSION['isQcloud']) && (!isset($_SESSION['role_name']) || $_SESSION['role_name'] != 'staff')){ ?>
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid != 0): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:101px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: right; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
    MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome"></div>
    <div class="memberinfo"  id="destoon_member">   
        <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="<?php echo U('Index/login');?>">注册</a>
            <?php else: ?>
            你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
            <a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>   
    </div>
</div>
    <div class="logo">
        <div style="float:left"><h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" height="55" /></a></h1></div>
            
            <div class="navr">
            <ul id="topMenu">
                <li style="width:85px"></li>
                <?php if($typsz['help'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 6): ?><li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                    <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/help'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>帮助中心<?php else: echo ($pigvo['name']); endif; ?></a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li><?php endif; ?>
                <?php if($typsz['login'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 5): ?><li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('User/Index/index'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>管理中心<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li><?php endif; ?>
                <?php if($typsz['common'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 4): ?><li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/common'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>产品案例<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">产品案例</a></li><?php endif; ?>
                <?php if($typsz['prize'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 3): ?><li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/price'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>资费说明<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li><?php endif; ?>
                <?php if($typsz['about'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 2): ?><li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/about'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>关于我们<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li><?php endif; ?>
                <?php if($typsz['fc'] == 1): if(is_array($zdydh)): $i = 0; $__LIST__ = $zdydh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pigvo): $mod = ($i % 2 );++$i; if($pigvo['type'] == 1): ?><li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?> <?php if($pigvo['dspl'] == 1): ?>style="display:none;"<?php endif; ?>>
                        <a <?php if($pigvo['open'] == '1'): ?>target="_blank"<?php endif; ?> href="<?php if($pigvo['url'] == ''): echo U('Home/Index/fc'); else: echo ($pigvo['url']); endif; ?>"><?php if($pigvo['name'] == ''): ?>功能介绍<?php else: echo ($pigvo['name']); endif; ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                <?php else: ?>
                    <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li><?php endif; ?>                
                <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>       
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>
<?php }else{ ?>
  <div class="topbg">
<div class="top">
<div class="toplink">
<style>
<?php if($usertplid == 1): ?>.topbg{background:url(<?php echo ($staticPath); ?>/tpl/static/newskin/images/top.gif) repeat-x; height:32px; /*box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;*/}
.top {
    margin: 0px auto; width: 988px; height: 101px;
}

.top .toplink{ height:30px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {width: 990px; color: #333; height:70px; font-size:16px;}
.top h1{ font-size:25px;float:left; width:230px; margin:0; padding:0; margin-top:6px; }
.top .navr {WIDTH:750px; float:right; overflow:hidden;}
.top .navr ul{ width:850px;}
.navr li {text-align:center; float: left; height:70px; font-size:1em; width:103px; margin-right:5px;}
.navr li a {width:103px; line-height:70px; float: left; height:100%; color: #333; font-size: 1em; text-decoration:none;}
.navr li a:hover { background:#ebf3e4;}
.navr li.menuon {background:#ebf3e4; display:block; width:103px;}
.navr li.menuon a{color:#333;}
.navr li.menuon a:hover{color:#333;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
<?php else: ?>

.topbg{BACKGROUND-IMAGE: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:40px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 40px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo ($staticPath); echo ltrim(RES,'.');?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}<?php endif; ?>
</style>
<div class="welcome"> </div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION['staff_id']==false && $_SESSION['staff_username']==false): ?><a href="<?php echo U('Index/staff_login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('staff_username')); ?></span></a>&nbsp;&nbsp;&nbsp;
			<a href="javascript:;" onclick="window.location.href = '<?php echo U('Home/Users/staff_logout',array('token'=>$_SESSION['token']));?>'" >退出</a><?php endif; ?>	
	</div>
</div>
    </div>
</div>
<?php } ?>
  <!--中间内容-->

  <div class="contentmanage"<?php if (isset($_SESSION['isQcloud'])){?> style="width:100%"<?php }?>>
  <?php if (!isset($_SESSION['isQcloud'])){ if(!isset($_SESSION['role_name']) || $_SESSION['role_name'] != 'staff'){ ?>
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<a href="<?php echo U('Function/welcome',array('token'=>$token));?>"><img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100" /></a>
</div>

<div id="nickname">
<strong><a href="<?php echo U('Function/welcome',array('token'=>$token));?>"><?php echo ($wecha["wxname"]); ?></a></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['taxisid']-1; ?>" title=""></a></div>
<div id="weixinid"> 
  微信号:<?php echo ($wecha["weixin"]); ?>  
  <?php $messageCount = M('SiteMessage')->where(array('token'=>$token, 'relation'=>'0', 'status'=>'0'))->count(); ?>
  <?php if($messageCount > 0 ): ?><a href="<?php echo U('SiteMessage/index', array('token'=>$token));?>" style="color:red;margin-left:5px;"><?php echo ($messageCount); ?>条未读消息</a>
  <?php else: ?>
    <a href="<?php echo U('SiteMessage/index', array('token'=>$token, 'status'=>'1'));?>" style="color:green;margin-left:5px;">消息</a><?php endif; ?>
</div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php echo (date("Y-m-d",$thisUser["viptime"])); ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<!-- <td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td> -->
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$thisUser['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

<?php } ?>
<?php } ?>
<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
background: #fff;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
  background: #fff;
}

ul#menu a {
  display: block;
  text-decoration: none;
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;

}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
/*.tableContent .content{min-height: 1328px;}*/

a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}

</style>
<style type="text/css">
  .welcome1{
    width:981px;
    border: 1px solid #EAEAEA;
    position: relative;
  }
  .welcome1 li{
    float: left;  
    height: 50px;
    width: 12.323%; 
    text-align:center;
    font-weight: bold;
    position: relative;
    font-size: 1.25em;
    border: 1px solid #DFDFDF;
    background: #F3F3F3;
  }
  .welcome1 ul{
    max-width: 981px;
  }
  .welcome1 li a{
    line-height:3.5;
  }
  .welcome1 li.tab-current{
    border-right:0;   
    border-left:0;
    border-bottom:0;
    background: none;
  }
  .content1{
    margin:80px auto;
    width:900px;
    top:80px;
  }
  .img1{
    margin: 60px 30px 0px 30px;
    width:120px;
    height:150px;
    float: left;
    text-align: center;
  }
  .img1 a {
    line-height: 50px;
  }
  .img1 a:hover{
    text-decoration:none;  
  } 
</style>
<?php } ?>
      <div class="tableContent">
<?php if($_SESSION['is_syn']== 0): if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php foreach ($menus as $mk => $mv){ if(C('router_key') != ''&&$mv['iconName']=='hardware'){ unset($mv['subs'][0]); } if($CashierOff && ($mv['subs'][0]['f']=='Cashier')){ unset($menus[$mk]); } foreach ($mv['subs'] as $mvk => $mvv){ if ($mvv['f'] != NULL && !in_array($mvv['f'], $Allfunc)) { unset($menus[$mk]['subs'][$mvk]); } if ($mvv['selectedCondition']['m'] == 'Web') { $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'Web'.DIRECTORY_SEPARATOR; if (!file_exists($path.'Web_indexAction.class.php')) { unset($menus[$mk]); } } if(isset($group_func) && $_SESSION['role_name'] != '' && $_SESSION['role_name'] == 'staff'){ $not_exists = array('tianqi','qiushi','jishuan','langdu','jiankang','kuaidi','xiaohua','changtoushi','peiliao','liaotian','mengjian','yuyinfanyi','huoche','gongjiao','shenfenzheng','shouji','yinle','fujin','geci','fanyi','api','suanming','baike','caipiao','Zhida','whois','assistente'); if($mvv['f'] != NULL && !in_array($mvv['f'],$group_func)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] != NULL && in_array(strtolower($mvv['f']),$not_exists)){ unset($menus[$mk]['subs'][$mvk]); } if($mvv['f'] == NULL){ unset($menus[$mk]['subs'][$mvk]); } if($mv['iconName']=='hardware'){ unset($menus[$mk]['subs']); } if($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(!in_array(ucfirst($mvv['selectedCondition']['type']),$group_func)){ unset($menus[$mk]['subs'][$mvk]); } } } if(in_array($mvv['selectedCondition']['m'],$not_exist) || in_array($mvv['f'],$not_exist)){ if($mvv['selectedCondition']['m'] == 'Home'){ unset($menus[$mk]); }else{ if ($mvv['f'] != NULL) { unset($menus[$mk]['subs'][$mvk]); } } }elseif($mvv['selectedCondition']['m'] == 'Business'){ if($mvv['selectedCondition']['type'] == 'wedding') $mvv['selectedCondition']['type'] = 'buswedd'; if(in_array(ucfirst($mvv['selectedCondition']['type']),$not_exist)){ unset($menus[$mk]['subs'][$mvk]); } } if($menus[$mk]['subs'] == NULL){ unset($menus[$mk]); } } } $i=0; $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } if($i == 0){ echo '<a class="nav-header'.$aClassStr.'" style="border-top:none !important;"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; }else{ echo '<a class="nav-header'.$aClassStr.'"><b class="'.$m['iconName'].'"></b>'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; } if(C('router_key') == ''&&$m['iconName']=='hardware'){ unset($m['subs'][0]); } if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($currentParentMenuID==$i&&$j==$currentMenuID){ $selectedClassStr='selected'; } $newStr=''; if ($s['test']){ $newStr.='<span class="test"></span>'; }else { if ($s['new']){ $newStr.='<span class="new"></span>'; } } if ($s['name']!='微信墙'&&$s['name']!='摇一摇'&&$s['name']!='现场活动'){ $target=''; if ($s['blank']){ $target=' target="_blank"'; } if ($s['notinpigcms']&&C('server_topdomain')=='pigcms.cn'){ }else { echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'"'.$target.'>'.$s['name'].'</a>'.$newStr.'</li>'; } }else { switch ($s['name']){ case '微信墙': case '摇一摇': case '现场活动': $path=str_replace($_SERVER['SCRIPT_NAME'],'',dirname($_SERVER['SCRIPT_FILENAME'])).DIRECTORY_SEPARATOR.'PigCms'.DIRECTORY_SEPARATOR.'Lib'.DIRECTORY_SEPARATOR.'Action'.DIRECTORY_SEPARATOR.'User'.DIRECTORY_SEPARATOR; if (file_exists($path.'WallAction.class.php')&&file_exists($path.'ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } break; } } if ($s['name']=='静态模板管理'&&is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } $j++; } } echo '</ul>'; $i++; } ?>

<div style="clear:both"></div>
</ul>
</div>
</div>
<?php } endif; ?>
<script type="text/javascript">

  $(document).ready(function(){
    $(".nav-header").mouseover(function(){
      $(this).addClass('navHover');
    }).mouseout(function(){
      $(this).removeClass('navHover');
    }).click(function(){
      $(this).toggleClass('nav-header-current');
      $(this).next('.ckit').slideToggle();
    })
  });

</script>
<?php } ?>

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
 <div class="content" <?php if(session('isQcloud') == true): ?>style="float:center;"<?php endif; ?>>
          <div class="cLineB"><h4>编辑底部菜单</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a></div> 
<div class="msgWrap">
  <form class="form" method="post"   action="<?php echo U('Catemenu/upsave');?>"  enctype="multipart/form-data" >
<TABLE class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
  <THEAD>
  <?php if($fid != 0): ?><TR>
  <TH valign="top"><label for="keyword">上级菜单名称：</label></TH>
  <TD><?php echo ($thisCatemanu["name"]); ?><input type="hidden" name="fid" value="<?php echo ($fid); ?>" /></TD>
  <TD>&nbsp;</TD>
</TR><?php endif; ?>
<TR>
  <TH valign="top"><label for="keyword">菜单名称：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="<?php echo ($info["name"]); ?>" name="name" style="width:500px" ><br />
                  </TD>
  <TD>&nbsp;</TD>
</TR>
                            </THEAD>
  <TBODY><input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>

<TR>
  <TH valign="top"><label for="keyword">图标地址：</label></TH>
  <TD><input type="text" class="px" id="img" value="<?php echo ($info["picurl"]); ?>" name="picurl" style="width:500px" >  <script src="/tpl/static/upyun.js?2013"></script><a href="###" onclick="chooseFile('img','icon')" class="a_upload">选择</a> <a href="###" onclick="upyunPicUpload('img',700,420,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('img')">预览</a><br/>
  <div style="margin:10px 0">您可以点击下面这些图片作为图标（直接点击即可）</div>
  <div style="background:#eee;width:570px;margin:10px 0;text-align:center">
  <?php
 for ($i=1;$i<20;$i++){ echo '<img onclick="document.getElementById(\'img\').value=this.src" onmouseover="this.style.background=\'#ddd\'" onmouseout="this.style.background=\'#eee\'" style="width:30px;cursor:pointer;" src="tpl/User/default/common/images/photo/plugmenu'.$i.'.png" />'; } ?>
  </div></TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="url">外链地址 ：</label></TH>
  <TD><input type="text" class="px" id="url" value="<?php echo ($info["url"]); ?>" name="url" style="width:500px" >  <a href="###" onclick="addLink('url',0)" class="a_choose">从功能库添加</a><br />
  <span style="color:red">如需实现一键拨号，请填写：“tel:您的电话号码”，比如：tel:13888888888</span>
                   </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">排序：</label></TH>
  <TD><input type="text" class="px" id="keyword" value="<?php echo ($info["orderss"]); ?>" name="orderss" style="width:500px" ><br />
                   </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH valign="top"><label for="keyword">是否显示：</label></TH>
  <TD><input type="radio" class="px" id="keyword" value="1" name="status" <?php if($info['status'] == 1): ?>checked<?php endif; ?> />是<br />
  <input type="radio" class="px" id="keyword" value="0" name="status"  <?php if($info['status'] == 0): ?>checked<?php endif; ?> />否
                   </TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TH></TH>
  <TD><button type="submit"  name="button"  class="btnGreen left" >保存</button>
    <div class="clr"></div>
    </TD>
  </TR>
  </TBODY>
</TABLE>
  </form>



  </div> 

        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div> 

<!--底部-->
    </div>
<?php if(session('isQcloud') != true): ?></div>

</div>

</div>

</div>

</div>

</div>

<?php if($_SESSION['is_syn']== 0): ?><style>

.IndexFoot {

	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px

}

.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}

.foot .foot_page{ float:left; width:600px;color:white;}

.foot .foot_page a{ color:white; text-decoration:none;}

#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}

.alert-success{color: #993300;background-color: #fcf8e3;border-color: #faebcc;}

</style>



<?php
 if($ischild == 1){ if($usertplid == 2){ $usertplid =1; } } ?>

<if condition="$usertplid neq 2">

<div class="IndexFoot" style="height:120px;clear:both">

<div class="foot" style="padding-top:20px;">

<div class="foot_page" >

<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>,微信公众平台营销</a><br/>

帮助您快速搭建属于自己的营销平台,构建自己的客户群体。

</div>

<div id="copyright" style="color:white;">

	<?php echo ($f_siteName); ?>(c)版权所有 <br/>

	技术支持：广州壹正信息科技有限公司



</div>

    </div>

</div><?php endif; ?>

<!-- 帮助悬浮开始 -->

<?php  $data_g=GROUP_NAME; $server = getUpdateServer(); $users=M('Users')->where(array('id'=>$_SESSION['uid']))->find(); if(C('close_help') == 1 && $users['sysuser'] == 0){ $data_g='notingh'; }else{ $textHelp=0; } ?>     

<?php if($usertplid == 2): if(C('close_help') != 1){ $data = array( 'key' => C('server_key'), 'domain' => C('server_topdomain'), 'is_text' => $textHelp, 'data_g' => $data_g, 'data_m' => MODULE_NAME, 'data_a' => ACTION_NAME ); if(!C('emergent_mode')): if(function_exists('curl_init')){ $ch = curl_init(); curl_setopt($ch, CURLOPT_TIMEOUT, 4); curl_setopt($ch, CURLOPT_URL, 'http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data)); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_HEADER, 0); $content = curl_exec($ch);curl_close($ch); }else{ $opts = array( 'http'=>array( 'method'=>'GET', 'timeout'=>4, ) ); $fp= stream_context_create($opts); $content = file_get_contents( 'http://sharp2008.vhost024.dns345.cn/up/admin.php?m=help&c=view&a=get_list&'.http_build_query($data), false, $fp); fpassthru($fp); } endif; $content = json_decode($content,true); } ?>

</div>

</div>

<style>

	.tab ul li{padding:0 11px}

	.alert h4 {color: #000;}

	#tags .btnGreen{background-color: #44b549;}

	#tags .btnGreen:hover,#tags .btnGreen:focus,#tags .btnGreenactive{background-color: #44b549;border-color: #44b549;color: #FFFFFF;}

	.mini-navbar .nav > li:nth-last-child(13) ul{margin-top: -421px;}

	.mini-navbar .nav > li:nth-last-child(3) ul{margin-top: -159px;}

	.mini-navbar .nav > li:nth-last-child(4) ul{margin-top: -427px;}

	.mini-navbar .nav > li:nth-last-child(10) ul{margin-top: -85px;}

	#js_editform{width:618px;}

	.lianjie{background: #44b549;color: #fff;margin: 0px 15px;padding: 5px 10px;border-radius: 6px;font-size: 11px;line-height: 14px;margin-top: 3px;}

	.lianjie a:link{color: #fff;}

	.lianjie a:hover {color: #000;}

</style>

<div class="small-chat-box fadeInRight animated" style="margin-right: 100px;margin-bottom:100px;">

        <div class="heading" draggable="true">

             <center><a style="height: auto;width: auto;display: initial;background:#2f4050;padding: 0px 0px 0px 50px;text-align:center;color:#fff;border-radius:0;margin-right:0px;margin-bottom: 0px;" class="open-small-chat">相关帮助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</a></center>	

        </div>

        <div class="content" style="height:220px;">

		<span class="help_content"></span>

			<span class="loading" >

				<img  style="margin-left:50px;" src="./tpl/static/cutprice/js/artDialog/skins/icons/loading.gif" /> 正在加载帮助教程...

			</span>

        </div>

        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank"><div class="form-chat btn btn-primary" style="  text-align: center;">

        在线客服

        </div></a>

    </div>

    <div id="small-chat">

        <span class="badge badge-warning pull-right">不懂就点我</span>

        <a class="open-small-chat">

            <i class="fa fa-weixin" style="width:70px;font-size:40px;"></i>帮助

        </a>

    </div>

</div>

<script type="text/javascript">

		var oDiv1 = document.getElementById('small-chat');

		oDiv1.onclick = function(){

		var flag = true;

			if(flag) {

				$.ajax({

					type : 'GET',

					url : '<?php echo U('User/Index/ajax_help', array('group'=>GROUP_NAME,'module'=>MODULE_NAME, 'action'=>ACTION_NAME)); ?>',

					dataType : 'html',

					success : function (data) {

						if (data) {

							$('.help_content').html(data);

						}

						flag = false;

						$('.loading').hide();

					}

				});

			}

		}

		function openwin(url,iHeight,iWidth){

			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;

			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");

		}

	</script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/bootstrap.min.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/inspinia.js"></script>

    <script src="<?php echo ($staticPath); ?>/tpl/static/new/js/plugins/pace/pace.min.js"></script>

<?php else: ?>

	<?php if(C('close_help') == 0): ?>

	<link href="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/css/zuoce.css" type="text/css" rel="stylesheet"/>

	<div class="zuoce zuoce_clear">

		<div id="Layer1">

			<a href="javascript:"><img src="<?php echo ($staticPath); ?>/tpl/static/help_xuanfu/images/ou_03.png"/></a>

		</div>

		<div id="Layer2" style="display:none;height:400px;overflow-y:scroll;">

			<p class="xiangGuan zuoce_clear">相关帮助</p>

			<span class="help_content"></span>

			<span class="loading" >

				<img  style="margin-left:50px;" src="./tpl/static/cutprice/js/artDialog/skins/icons/loading.gif" /> 正在加载帮助教程...

			</span>

			

			<!--p class="anNiuo clear"><a href="#">进入帮助中心27</a></p-->

			<p class="anNiut zuoce_clear"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes" target="_blank">在线客服</a></p>

		</div>

	</div>

	<script type="text/javascript">

		window.onload = function(){

			var oDiv1 = document.getElementById('Layer1');

			var oDiv2 = document.getElementById('Layer2');

			var flag = true;

			oDiv1.onclick = function(){

				oDiv2.style.display = oDiv2.style.display == 'block' ? 'none' : 'block';

				if(flag) {

					$.ajax({

						type : 'GET',

						url : '<?php echo U('User/Index/ajax_help', array('group'=>GROUP_NAME,'module'=>MODULE_NAME, 'action'=>ACTION_NAME)); ?>',

						dataType : 'html',

						success : function (data) {

							if (data) {

								$('.help_content').html(data);

							}

							flag = false;

							$('.loading').hide();

						}

					});

				}

			}

		}

		function openwin(url,iHeight,iWidth){

			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;

			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");

		}

	</script>

	<?php endif; endif; ?>

<!-- 帮助悬浮结束 -->

<div style="display:none">

<?php echo ($alert); ?> 

<?php echo base64_decode(C('countsz'));?>

</div><?php endif; ?>

</body>



<?php if(MODULE_NAME == 'Function' && ACTION_NAME == 'welcome'){ ?>

<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>



<script type="text/javascript">





    var myChart = echarts.init(document.getElementById('main')); 

   



    var option = {

        title : {

            text: '<?php if($charts["ifnull"] == 1): ?>本月关注和文本请求数据统计示例图(您暂时没有数据)<?php else: ?>本月关注和文本请求数据统计<?php endif; ?>',

            x:'left'

        },

        tooltip : {

            trigger: 'axis'

        },

        legend: {

            data:['文本请求数','关注数'],

            x: 'right'

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: false},

                dataView : {show: false, readOnly: false},

                magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},

                restore : {show: false} ,

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        xAxis : [

            {

                type : 'category',

                boundaryGap : false,

                data : [<?php echo ($charts["xAxis"]); ?>]

            }

        ],

        yAxis : [

            {

                type : 'value'

            }

        ],

        series : [

            {

                name:'文本请求数',

                type:'line',

                tiled: '总量',

                data: [<?php echo ($charts["text"]); ?>]

            },    

            {

                "name":'关注数',

                "type":'line',

                "tiled": '总量',

                data:[<?php echo ($charts["follow"]); ?>]

            }

       



        ]



    };                   



    myChart.setOption(option); 





    var myChart2 = echarts.init(document.getElementById('pieMain')); 

               

    var option2 = {

        title : {

            text: '<?php if($pie["ifnull"] == 1): ?>7日内粉丝行为分析示例图(您暂时没有数据)<?php else: ?>7日内粉丝行为分析<?php endif; ?>',

            x:'center'

        },

        tooltip : {

            trigger: 'item',

            formatter: "{a} <br/>{b} : {c} ({d}%)"

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: true},

                dataView : {show: true, readOnly: false},

                restore : {show: true},

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        series : [

            {

                name:'粉丝行为统计',

                type:'pie',

                radius : ['50%', '70%'],

                itemStyle : {

                    normal : {

                        label : {

                            show : false

                        },

                        labelLine : {

                            show : false

                        }

                    },

                    emphasis : {

                        label : {

                            show : true,

                            position : 'center',

                            textStyle : {

                                fontSize : '18',

                                fontWeight : 'bold'

                            }

                        }

                    }

                },

                data:[ 

                    <?php echo ($pie["series"]); ?>

                

                ]

            }

        ]

    };

     myChart2.setOption(option2,true); 





    var myChart3 = echarts.init(document.getElementById('pieMain2')); 

    var option3 = {

        title : {

            text: '<?php if($sex_series["ifnull"] == 1): ?>会员性别统计示例图(您暂时没有数据)<?php else: ?>会员性别统计<?php endif; ?>',

            x:'center'

        },

        tooltip : {

            trigger: 'item',

            formatter: "{a} <br/>{b} : {c} ({d}%)"

        },

        toolbox: {

            show : false,

            feature : {

                mark : {show: true},

                dataView : {show: true, readOnly: false},

                restore : {show: true},

                saveAsImage : {show: true}

            }

        },

        calculable : true,

        series : [

            {

                name:'会员性别统计',

                type:'pie',

                radius : ['50%', '70%'],

                itemStyle : {

                    normal : {

                        label : {

                            show : false

                        },

                        labelLine : {

                            show : false

                        }

                    },

                    emphasis : {

                        label : {

                            show : true,

                            position : 'center',

                            textStyle : {

                                fontSize : '18',

                                fontWeight : 'bold'

                            }

                        }

                    }

                },

                data:[

                  <?php echo ($sex_series['series']); ?>

                ]

            }

        ]

    };                     



  myChart3.setOption(option3,true); 







    </script>

<?php } ?>



<?php if(MODULE_NAME == 'RecognitionData' && ACTION_NAME == 'index'){?>

	<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>



	<script type="text/javascript">

	<?php if($_GET['rid'] != ''){?>

		var myChart = echarts.init(document.getElementById('main')); 

	   



		var option = {

			title : {

				//text: '<?php if($charts["ifnull"] == 1): ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计示例图（没有数据）<?php else: ?>【<?php echo ($rname); ?>】本月每日扫描次数和人数统计<?php endif; ?>',

				x:'left'

			},

			tooltip : {

				trigger: 'axis'

			},

			legend: {

				data:['每日扫描次数','每日扫描人数'],

				x: 'right'

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: false},

					dataView : {show: false, readOnly: false},

					magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},

					restore : {show: false} ,

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			xAxis : [

				{

					type : 'category',

					boundaryGap : false,

					data : [<?php echo ($charts["xAxis"]); ?>]

				}

			],

			yAxis : [

				{

					type : 'value'

				}

			],

			series : [

				{

					name:'每日扫描次数',

					type:'line',

					tiled: '总量',

					data: [<?php echo ($charts["cishu"]); ?>]

				},    

				{

					"name":'每日扫描人数',

					"type":'line',

					"tiled": '总量',

					data:[<?php echo ($charts["renshu"]); ?>]

				}

		   



			]



		};                   



		myChart.setOption(option); 

	<?php }else{?>

		var myChart2 = echarts.init(document.getElementById('pieMain')); 

				   

		var option2 = {

			title : {

				//text: '<?php if($cishu["ifnull"] == 1): ?>本月扫描次数分析示例图（没有数据）<?php else: ?>本月扫描次数分析图<?php endif; ?>',

				x:'center'

			},

			tooltip : {

				trigger: 'item',

				formatter: "{a} <br/>{b} : {c} ({d}%)"

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: true},

					dataView : {show: true, readOnly: false},

					restore : {show: true},

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			series : [

				{

					name:'本月扫描次数统计',

					type:'pie',

					radius : ['50%', '70%'],

					itemStyle : {

						normal : {

							label : {

								show : false

							},

							labelLine : {

								show : false

							}

						},

						emphasis : {

							label : {

								show : true,

								position : 'center',

								textStyle : {

									fontSize : '18',

									fontWeight : 'bold'

								}

							}

						}

					},

					data:[ 

						<?php echo ($cishu["series"]); ?>

					

					]

				}

			]

		};

		 myChart2.setOption(option2,true); 

		 

		 

		

		var myChart3 = echarts.init(document.getElementById('pieMain2')); 

		var option3 = {

			title : {

				//text: '<?php if($renshu["ifnull"] == 1): ?>本月扫描人数分析示例图（没有数据）<?php else: ?>本月扫描人数分析图<?php endif; ?>',

				x:'center'

			},

			tooltip : {

				trigger: 'item',

				formatter: "{a} <br/>{b} : {c} ({d}%)"

			},

			toolbox: {

				show : false,

				feature : {

					mark : {show: true},

					dataView : {show: true, readOnly: false},

					restore : {show: true},

					saveAsImage : {show: true}

				}

			},

			calculable : true,

			series : [

				{

					name:'本月扫描人数统计',

					type:'pie',

					radius : ['50%', '70%'],

					itemStyle : {

						normal : {

							label : {

								show : false

							},

							labelLine : {

								show : false

							}

						},

						emphasis : {

							label : {

								show : true,

								position : 'center',

								textStyle : {

									fontSize : '18',

									fontWeight : 'bold'

								}

							}

						}

					},

					data:[

					  <?php echo ($renshu['series']); ?>

					]

				}

			]

		};                     



	  myChart3.setOption(option3,true); 

	<?php }?>

	</script>

<?php }?>

</html>
</if>
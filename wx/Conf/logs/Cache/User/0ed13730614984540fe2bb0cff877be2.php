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
<?php
<?php if($usertplid == 2){ ?>
<body style="background-color:#2f4050;">
<?php
    <![if lt IE 9]>
      <div class="alert alert-danger">您正在使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
    <![endif]>
<?php
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
<?php
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
<?php
<?php
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
        <div style="float:left"><h1><a href="./" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" height="55" /></a></h1></div>
            
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
                <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="./">首页</a></li>       
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>
<?php
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
  <?php
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
  <?php
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
<?php
      <div class="tableContent">
<?php if($_SESSION['is_syn']== 0): if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php

<div style="clear:both"></div>
</ul>
</div>
</div>
<?php
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

<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />

<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="/tpl/static/upyun.js"></script>


		<div class="content">
				 
          <div class="cLineB">
              <h4 class="left">多图文回复</h4>
              <div class="clr"></div>
          </div>
		  
<div class="msgWrap form">
<ul id="tags" style="width:100%">
			<li <?php if($_GET['tip'] == NULL): ?>class="selectTag"<?php endif; ?>>
				<a href="?g=User&m=Img&a=multi">添加多图文回复</a> 
			</li>
			<li <?php if($_GET['tip'] == '2'): ?>class="selectTag"<?php endif; ?>>
				<a href="?g=User&m=Img&a=multi&tip=2">多图文回复列表</a> 
			</li>

						<div class="clr" style="height:1px;background:#eee;margin-bottom:20px;"></div>
		</ul>
</div> 

		  
		  
<?php if($_GET['tip'] != '2'): ?><form method="post" action="<?php echo U('Img/multiSave');?>">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>


			  <tr>
				<th valign="top">关键词</th>
				<td><input type="text" class="px" name="keywords" value="" /></td>
			  
			  </tr>


<TR>
  <TH valign="top"><label for="keyword">图文消息</label></TH>
  <TD> <a href="###" onclick="addImgMessage()" class="a_choose">添加图文消息</a>&nbsp;&nbsp;<a href="###" onclick="clearMessage()" class="a_clear">清空重选</a>
		 
  <script>
  function addImgMessage(){
	art.dialog.data('titledom', 'titledom');
	art.dialog.data('imgids', 'imgids');
	art.dialog.data('multinews', 'multinews');
	art.dialog.data('singlenews', 'singlenews');
	
	art.dialog.data('js_appmsg_preview', 'js_appmsg_preview');
	art.dialog.data('multione', 'multione');
	art.dialog.open('?g=User&m=Message&a=img',{lock:true,title:'选择图文消息',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.45});
}
 function clearMessage(){
 	document.getElementById('titledom').innerHTML='';
 	document.getElementById('imgids').value='';
 	document.getElementById('js_appmsg_preview').innerHTML='<div class="appmsg_info"><em class="appmsg_date"></em></div><div class="cover_appmsg_item" id="multione"></div>';
 	document.getElementById('multinews').style.display='none';
 	document.getElementById('singlenews').style.display='';
}
  </script> 
		  
	
  <style>
  html, body {
	/*position:relative;
	height:100%;*/
	color:#222;
	font-family:Microsoft YaHei, Helvitica, Verdana, Tohoma, Arial, san-serif;
	background-color:#ffffff;
	margin:0;
	padding: 0;
	text-decoration: none;
}
body >.tips {
	position:fixed;
	display:none;
	top:50%;
	left:50%;
	z-index:100;
	text-align:center;
	padding:20px;
	width:200px;
}
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
	margin:0;
	padding:0;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}
.text img {
	max-width: 100%;
}
fieldset, img {
	border:0;
}
address, caption, cite, code, dfn, em, th, var {
	font-style:normal;
	font-weight:normal;
}
ol, ul {
	list-style: none outside none;
	margin:0;
	padding: 0;
}
caption, th {
	text-align:left;
}
h1, h2, h3, h5, h6 {
	font-size:100%;
	font-weight:normal;
}
a {
	color:#000000;
	text-decoration: none;
}
.left {
	float:left
}
.right {
	float:right
}
#activity-detail {
	padding:15px 15px 0;
	background:#EFEFEF;
}
.clr {
	display:block;
	clear:both;
	height:1px;
	overflow:hidden;
}
/*文本*/
#iphone {
	background:url(../images/iPhone-render.png) no-repeat 0 0;
	height: 743px;
	position:relative;
	margin: 0 auto;
	overflow:hidden;
	width: 380px;
}
#iphone #activity-detail {
	height: 414px;
	left: 33px;
	overflow: auto;
	padding: 0;
	position: absolute;
	top: 197px;
	width: 319px;
	background:#EFEFEF;
}
#iphone .nickname {
	color: #CCCCCC;
	display: block;
	font-weight: bold;
	line-height: 45px;
	position: absolute;
	text-align: center;
	text-shadow: 0 1px 3px #000000;
	top: 152px;
	left: 33px;
	width: 320px;
}
#news-render {
}
#news-text { 
}
.keywordtext {
	background-color: #F3F1DA;
	height: 366px;
	overflow: auto;
	padding: 0;
	width: 319px;
	left: 33px;
	top: 197px;
	position: absolute;
}
.keywordtext .me {
	margin-top:30px
}
.you {
	float:left;
	width:100%; /*ie6 hack*/
	_background:none;
	_border:none;
}
.me {
	float:right;
	width:100%;
}
.chatItemContent {
	cursor:pointer;
}
.cloudPannel {
	position: relative;
	_position:static;
}
.chatItem {
	padding:4px 0px 10px 0px;
	_background:none;
	_border:none;
}
.chatItem .avatar {
	width:38px;
	height:38px;
	border:1px solid #ccc9;
	border: 1px solid #CCCCCC;
	box-shadow: 0 1px 3px #D3D4D5;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
}
.chatItem .cloud {
	max-width:240px; /*border-radius:11px; border-width:1px; border-style:solid; */
	cursor:default;
	position: static;
}
.chatItem .cloud {/*for ie*/
	/*position: relative;*/
		padding: 0px;
	margin: 0px;
}
.me .avatar {
	float:right;
}
.me .cloud { /*position:relative;*/
	float:right;
	min-width:50px;
	max-width:200px;
	margin:0 15px 0 0;
}
.chatItem .cloudContent { /* position:relative;for ie*/
	text-align:left; /*padding:2px; line-height:1.2; */
	font-weight:normal;
	font-size:16px;
	min-height:20px;
	word-wrap:break-word;
}
.me .cloudText .cloudBody {
	-moz-border-top-colors:none;
	-moz-border-right-colors:none;
	-moz-border-bottom-colors:none;
	-moz-border-left-colors:none;
	border-color:transparent;
	border:1px solid #AFAFAF;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	box-shadow: 0px 1px 3px #D5D5D5;
	border:1px solid #9f9f9f9;
	background:#ECECEC9;
	border-radius:6px9;
	margin-left:8px;
}
.me .cloudContent {
	border:1px solid #eee9;
	border-top:1px solid #FFF;
	border-bottom:1px solid #F2F2F2;
	padding:13px9;
	border-radius:13px9;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	overflow:hidden;
	color:#000;
	text-shadow:none;
	background-color:#ECECEC;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#F4F4F4), to(#E5E5E5),  color-stop(0.1, #F3F3F3), color-stop(0.3, #F1F1F1), color-stop(0.5, #ECECEC), color-stop(0.7, #E9E9E9), color-stop(0.9, #E6E6E6), color-stop(1.0, #E5E5E5));
	background-image:-moz-linear-gradient(top, #F3F3F3 10%, #F1F1F1 30%, #ECECEC 50%, #E9E9E9 70%, #E6E6E6 90%, #E5E5E5 100%);
}/*.cloudText*/
.me .cloudText .cloudArrow {
	position: absolute;
	right: -10px;
	top: 11px;
	width: 13px;
	height: 24px;
	background: url(../images/bubble_right.png) no-repeat;
}
.me .cloudText .cloudContent {
	background-color:#E5E5E5;
	vertical-align: top;
	padding:7px 10px;
	background-color:#ECECEC9;
}
.you .avatar {
	float:left;
}
.you .cloud { /*position:relative;8.3*/
	float:left;
	min-width:50px;
	max-width:200px;
	margin:0 0 0 15px;
}
.you .cloudText .cloudBody {
	-moz-border-top-colors:none;
	-moz-border-right-colors:none;
	-moz-border-bottom-colors:none;
	-moz-border-left-colors:none;
	border-color:transparent;
	/*border-style:solid;
		border-width:1px;
		border-color:#7B9F45 #7B9F45 #7B9F45 #7B9F45;*/
		border: 1px solid #7AA23F;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	box-shadow: 0px 1px 3px #8DA254;
	border:1px solid #73972a9;
	border-radius:6px9;
	/*background-color:#A1D251;
		
		background:-webkit-gradient(linear, left top,left bottom, from(#C2DE8E),to(#8EBF3A), 
			color-stop(0.1,#BFDC89),color-stop(0.2,#B7D978),color-stop(0.3,#B3D870),
			color-stop(0.4,#A8D45D),color-stop(0.5,#A2D254),color-stop(0.6,#9DCE4C),
			color-stop(0.7,#96C742),color-stop(0.8,#92C23E),color-stop(0.9,#8FBF3B),color-stop(1.0,#8EBF3A));
		background-image:-moz-linear-gradient(top, #C2DE8E 0%, #BFDC89 10%, #B7D978 20%, #B3D870 30%, #A8D45D 40%, #A2D254 50%, #9DCE4C 60%, #96C742 70%, #92C23E 80%, #8FBF3B 90%, #8EBF3A 100%);*/
		background-color: #AEDC43;
}
.you .cloudText .cloudContent {
	padding:5px 13px9;
	border-radius:13px9;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	padding:7px 10px;
	text-shadow:none;
	color:#030303;
	/*border-top:1px solid #E3EFC9;
		border-bottom:1px solid #8EBF3A;
		border-right:1px solid #A4D257;
		background-color:#C0DC859;*/
		border-top: 1px solid #DCE6C8;
	border-bottom: 1px solid #B9CF8B;
	border-right: 1px solid #CCDEA3;
}
.you .cloudText .cloudArrow {
	position: absolute;
	left: -6px;
	top: 11px;
	width: 13px;
	height: 24px;
	background: url(../images/bubble_left.png) no-repeat;
}
/*单条多条图文*/
	.chatPanel .media a {
	display:block;
}
.chatPanel .media {
	border:1px solid #cdcdcd;
	box-shadow:0 3px 6px #999999;
	-webkit-border-radius:12px;
	-moz-border-radius:12px;
	border-radius:12px;
	width:285px;
	background-color:#FFFFFF;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#FFFFFF), to(#FFFFFF));
	background-image:-moz-linear-gradient(top, #FFFFFF 0%, #FFFFFF 100%);
	margin:0px auto;
}
.chatPanel .media .mediaPanel {
	padding:0px;
	margin:0px;
}
.chatPanel .media .mediaImg {
	margin: 25px 15px 15px;
	width: 255px;
	position: relative;
}
.chatPanel .media .mediaImg .mediaImgPanel {
	position:relative;
	padding:0px;
	margin:0px;
	max-height:164px;
	overflow:hidden;
}
.chatPanel .media .mediaImg img {
	/* width:100%;
		height:164px;
		position:absolute;
		left:0px;*/
		width:255px;
}
.chatPanel .media .mediaImg .mediaImgFooter {
	position: absolute;
	bottom: 0;
	height:29px;
	background-color:#000;
	background-color:rgba(0, 0, 0, 0.4);
	text-shadow:none;
	color:#FFF;
	text-align:left;
	padding:0px 11px;
	line-height:29px;
	width:233px;
}
.chatPanel .media .mediaImg .mediaImgFooter a:hover p {
	color:#B8B3B3;
}
.chatPanel .media .mediaImg .mediaImgFooter .mesgTitleTitle {
	line-height:28px;
	color:#FFF;
	max-width:240px;
	height:26px;
	white-space:nowrap;
	text-overflow:ellipsis;
	-o-text-overflow:ellipsis;
	overflow:hidden;
	width: 240px;
}
.chatPanel .media .mesgIcon {
	display:inline-block;
	height:19px;
	width:13px;
	margin:8px 0px -2px 4px;
	background:url(../images/mesgIcon.png) no-repeat;
}
.chatPanel .media .mediaContent {
	margin:0px;
	padding:0px;
}
.chatPanel .media .mediaContent .mediaMesg {
	border-top:1px solid #D7D7D7;
	padding:10px;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgDot {
	display: block;
	position:relative;
	top: -3px;
	left:20px;
	height:6px;
	width:6px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle:hover p {
	color:#1A1717;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle a {
	color:#707577;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle a:hover p {
	color:#444440;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgIcon {
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgTitle p {
	line-height:1.5em;
	max-height: 45px;
	max-width: 220px;
	min-width:176px;
	margin-top:2px;
	color:#5D6265;
	text-overflow:ellipsis;
	-o-text-overflow:ellipsis;
	overflow:hidden;
	text-align: left;
	text-overflow:ellipsis;
}
.chatPanel .media .mediaContent .mediaMesg .mediaMesgIcon img {
	height:45px;
	width:45px;
}
/*media mesg detail*/
	.chatPanel .media .mediaHead {
	/*height:48px;*/
		padding:0px 15px 4px;
	border-bottom:0px solid #D3D8DC;
	color:#000000;
	font-size:20px;
}
.chatPanel .media .mediaHead .title {
	line-height:1.2em;
	margin-top: 22px;
	display:block;
	max-width:312px;
	text-align: left;/*height:25px;
		white-space:nowrap;
		text-overflow:ellipsis;
		-o-text-overflow:ellipsis;
		overflow:hidden;*/
	}
.chatPanel .mediaFullText .mediaImg {
	width:255px;
	padding:0;
	margin:0 15px;
	overflow:hidden;
	max-height:164px;
}
.chatPanel .mediaFullText .mediaImg img {
/*margin-top:17px;
		position:absolute;*/
}
.chatPanel .mediaFullText .mediaContent {
	padding:0 0 15px;
	font-size:16px;
	line-height: 1.5em;
	text-align:left;
	color:#222222;
}
.chatPanel .mediaFullText .mediaContentP {
	margin:12px 15px 0px;
	border-bottom:1px solid #D3D8DC;
}
.chatPanel .media .mediaHead .time {
	margin:0px;
	margin-top: 21px;
	color:#8C8C8C;
	background:none;
	width:auto;
	font-size:12px;
}
.chatPanel .media .mediaFooter {
	-webkit-border-radius:0px 0px 12px 12px;
	-moz-border-radius:0px 0px 12px 12px;
	border-radius:0px 0px 12px 12px;
	padding: 0 15px;
}
.chatPanel .media .mediaFooter a {
	color:#222222;
	font-size:16px;
	padding:0;
}
.chatPanel .media .mediaFooter .mesgIcon {
	margin:15px 3px 0px 0px;
}
.chatPanel .media a:hover {
	cursor: pointer;
}
.chatPanel .media a:hover .mesgIcon {
}
.mediaContent a:hover {
	background-color: #F6F6F6;
}
.mediaContent .last:hover {
	-webkit-border-radius:0px 0px 12px 12px;
	-moz-border-radius:0px 0px 12px 12px;
	border-radius:0px 0px 12px 12px;
	background-color: #F6F6F6;
}
.mediaFullText:hover {
	background-color: #F6F6F6;
	background:-webkit-gradient(linear,  left top, left bottom,  from(#F6F6F6), to(#F6F6F6));
	background-image:-moz-linear-gradient(top, #F6F6F6 0%, #F6F6F6 100%);
}


  </style>

	
<div class="chatPanel" style="width:280px;" id="singlenews">
  <div un="item_1741035" class="chatItem you"> 
  　<a target="ddd" href="###">
<div class="media mediaFullText" id="titledom">

<div class="mediaPanel">
<div class="mediaHead"><span class="title" id="zbt">图文消息标题</span><span class="time"><?php echo date('Y-m-d',time());?></span>
<div class="clr"></div>
</div>
<div class="mediaImg"><img id="suicaipic1" src="/tpl/static/message/oid.jpg"></div>
<div class="mediaContent mediaContentP">
<p id="zinfo">消息简介</p>
</div>
<div class="mediaFooter">
<span class="mesgIcon right"></span><span style="line-height:50px;" class="left">查看全文</span>
<div class="clr"></div>
</div>
</div>
</div>
</a>
</div>
</div>  
		  
		  
 
<div style="clear:both"></div>

 <input type="hidden" class="px" id="imgids" value="" name="imgids" style="width:300px" >  <br>
 
 
 
 
 
 <style>
.appmsg{position:relative;overflow:hidden;margin-bottom:20px;border:1px solid #d3d3d3;background-color:#fff;box-shadow:0 1px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 1px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.1);border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}.appmsg_info{font-size:13px;line-height:20px;padding-bottom:6px}.appmsg_date{font-weight:400;font-style:normal}.appmsg_content{padding:0 14px;border-bottom:1px solid #d3d3d3;position:relative;*zoom:1}.appmsg_title{font-weight:400;font-style:normal;font-size:16px;padding-top:6px;line-height:28px;max-height:56px;overflow:hidden;white-space:pre-wrap;word-wrap:normal;word-break:normal}.appmsg_title a{display:block;color:#222}.appmsg_thumb_wrp{height:160px;overflow:hidden}.appmsg_thumb{width:100%}.appmsg_desc{padding:5px 0 10px;white-space:pre-wrap;word-wrap:normal;word-break:normal}.appmsg_opr{background-color:#f4f4f4}.appmsg_opr ul{overflow:hidden;*zoom:1}.appmsg_opr_item{float:left;line-height:44px;height:44px}.appmsg_opr_item a{display:block;border-right:1px solid #d3d3d3;box-shadow:1px 0 0 0 #fff;-moz-box-shadow:1px 0 0 0 #fff;-webkit-box-shadow:1px 0 0 0 #fff;text-align:center;line-height:20px;margin-top:12px}.appmsg_opr_item a.no_extra{border-right-width:0}.appmsg_item{*zoom:1;position:relative;padding:12px 14px;border-top:1px solid #d3d3d3}.appmsg_item:after{content:" ";display:block;height:0;clear:both}.appmsg_item .appmsg_title{line-height:24px;max-height:48px;overflow:hidden;*zoom:1;margin-top:14px}.appmsg_item .appmsg_thumb{float:right;width:78px;height:78px;margin-left:14px}.multi .appmsg_info{padding-top:4px;padding-left:14px;padding-right:14px}.multi .appmsg_content{padding:0}.multi .appmsg_title{font-size:14px;padding-top:0}.cover_appmsg_item{position:relative;margin:0 14px 14px}.cover_appmsg_item .appmsg_title{position:absolute;bottom:0;left:0;width:100%;background:rgba(0,0,0,0.6)!important;filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#99000000',endcolorstr = '#99000000')}.cover_appmsg_item .appmsg_title a{padding:0 4px;color:#fff}.appmsg_mask{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;filter:alpha(opacity = 60);-moz-opacity:.6;-khtml-opacity:.6;opacity:.6;z-index:1}.appmsg .icon_appmsg_selected{display:none;position:absolute;top:50%;left:50%;margin-top:-30px;margin-left:-33px;line-height:999em;overflow:hidden;z-index:1}.dialog_wrp .appmsg:hover{cursor:pointer}.appmsg:hover .appmsg_mask{display:block}.appmsg.selected .appmsg_mask{display:block}.appmsg.selected .icon_appmsg_selected{display:inline-block}.icon_appmsg_selected{background:transparent url(/mpres/htmledition/images/icon/media/icon_appmsg_selected1ccaec.png) no-repeat 0 0;width:75px;height:60px;vertical-align:middle;display:inline-block}.appmsg_thumb.default{display:block;color:#c0c0c0;text-align:center;line-height:160px;font-weight:400;font-style:normal;background-color:#ececec;font-size:22px}.appmsg_item .appmsg_thumb.default{line-height:78px;font-size:16px}.appmsg_edit_mask{display:none;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(229,229,229,0.85)!important;filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#d9e5e5e5',endcolorstr = '#d9e5e5e5');text-align:center}.appmsg_item .appmsg_edit_mask{line-height:102px}.cover_appmsg_item .appmsg_edit_mask{line-height:160px}.appmsg_edit_mask a{margin-left:8px;margin-right:8px}.editing .cover_appmsg_item:hover .appmsg_edit_mask,.editing .appmsg_item:hover .appmsg_edit_mask{display:block}.editing .appmsg_thumb{display:none}.editing .appmsg_thumb.default{display:block}.editing .has_thumb .appmsg_thumb{display:block}.editing .has_thumb .appmsg_thumb.default{display:none}.editing .appmsg_content{box-shadow:none;-moz-box-shadow:none;-webkit-box-shadow:none;border-bottom-width:0}.editing.multi .appmsg_content{border-bottom-width:1px}.appmsg_add{text-align:center;padding:12px 14px;line-height:72px}.appmsg_add a{display:block;font-size:0;text-decoration:none;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:3px dotted #b8b8b8;height:72px}.appmsg_add a i{*vertical-align:baseline}.tab_content .appmsg{width:320px}.appmsg_list{text-align:justify;text-justify:distribute-all-lines;text-align-last:justify;font-size:0;padding-top:38px;margin:0 46px;letter-spacing:-4px}.appmsg_list:after{display:inline-block;width:100%;height:0;font-size:0;margin:0;padding:0;overflow:hidden;content:"."}.appmsg_col{display:inline-block;*display:inline;*zoom:1;vertical-align:top;width:48%;font-size:14px;text-align:left;font-size:14px;letter-spacing:normal}.media_dialog.appmsg_list{position:relative;padding:28px 140px;height:340px;margin-bottom:0;overflow-y:scroll}.page_appmsg_edit .tool_area{clear:both;margin:0;padding:20px 0}.page_appmsg_edit .tool_bar{margin-left:0;margin-right:0}.page_appmsg_edit .appmsg{min-height:180px}.page_appmsg_edit .upload_file_box{top:22px;left:-12px;width:377px;border-color:#d3d3d3;border-radius:0;-moz-border-radius:0;-webkit-border-radius:0}.page_appmsg_edit .upload_preview img{max-width:100px;max-height:100px}.media_preview_area{float:left;width:320px;margin-right:14px}.media_edit_area{display:table-cell;vertical-align:top;float:none;width:auto;*display:block;*zoom:1}.media_edit_area:after{content:" . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . ";visibility:hidden;clear:both;height:0!important;display:block;line-height:0}.edui_editor_wrp{position:relative;z-index:0}.appmsg_edit_item{padding-bottom:1em}.editor_extra_info{text-align:right;padding-top:6px}.editor_extra_info a{color:#a3a3a3}.editor_extra_info a:hover{color:#2e7dc6}
</style>
 
 <div class="media_preview_area" id="multinews" style="display:none">
        <div class="appmsg multi editing">
    	    <div id="js_appmsg_preview" class="appmsg_content">
       <div id="appmsgItem1" data-fileid="" data-id="1" class="js_appmsg_item ">
    
        <div class="appmsg_info">
            <em class="appmsg_date"></em>
        </div>
        <div class="cover_appmsg_item" id="multione"></div>
    
</div>


</div></div>
	</div>		  
		  
		  
  </TD>
  <TD>&nbsp;</TD>
</TR>

<tr>
	<th></th>
	<td><button type="submit" class="btnGreen">保存</button>　<a href="javascript:history.go(-1);" class="btnGray vm">取消</a></td>
</tr>
 </tbody>
</table>	  
</form>
<?php else: ?>
		
<style>
.title_list {
	list-style-type:circle;

}
.title_list li {
	height:23px;
	line-height:23px;
}


</style>		
		<table class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
			<thead>
			<tr>
				<th>编号</th>
				<th>关键词</th>
				<th>绑定图文消息标题</th>
				<th>操作</th>
			</tr>
			</thead>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr valign="top">
				<td><?php echo ($list["id"]); ?></td>
				<td><?php echo ($list["keywords"]); ?></td>
				<td>
					<ul class="title_list">
						<?php $title = $list['title']; ?>
						<?php if(is_array($title)): foreach($title as $key=>$tit): ?><li><?php echo ($tit); ?> &nbsp; <a href="<?php echo U('Img/edit',array('id'=>$key));?>" style="color:rgb(30, 137, 253)">编辑</a></li><?php endforeach; endif; ?>
					</ul>
					
				</td>
				<td><a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Img/multiImgDel',array('id'=>$list['id']));?>')">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
		</table>	  
		  
	<?php echo ($page); endif; ?>
		</div>

        <div class="clr"></div>
      </div>
    </div>
  </div>

  <!--底部-->
  	</div>
</div>

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

<?php if($usertplid != 2): ?><div class="IndexFoot" style="height:120px;clear:both">

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
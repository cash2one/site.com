<?php defined('InShopNC') or exit('Access Invalid!');?>
<?php //echo getChat($layout);?>
<div id="faq">
  <div class="faq-wrapper">
    <?php if(is_array($output['article_list']) && !empty($output['article_list'])){ ?><ul>
    <?php foreach ($output['article_list'] as $k=> $article_class){ ?>
    <?php if(!empty($article_class)){ ?>
   <li> <dl class="s<?php echo ''.$k+1;?>">
      <dt>
        <?php if(is_array($article_class['class'])) echo $article_class['class']['ac_name']; ?>
     
      </dt>
      <?php if(is_array($article_class['list']) && !empty($article_class['list'])){ ?>
      <?php foreach ($article_class['list'] as $article){ ?>
      <dd><i></i><a href="<?php if($article['article_url'] != '')echo $article['article_url'];else echo urlShop('article', 'show',array('article_id'=> $article['article_id']));?>" title="<?php echo $article['article_title']; ?>"> <?php echo $article['article_title'];?> </a></dd>
      <?php }?>
      <?php }?>
    </dl></li>
    <?php }?>
    <?php }?>	    	
	</ul>	
<div class="help">
		<div class="w1190 clearfix">
    		<div class="contact f-l">
    			<div class="contact-border clearfix">
        			<span class="ic tel t20"><?php echo $GLOBALS['setting_config']['site_tel400']; ?></span>
        			<span class="ic mail"><?php echo $GLOBALS['setting_config']['site_email']; ?></span>
        			<div class="attention cleafix">
        				<div class="weixin f-l">						
    <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$GLOBALS['setting_config']['site_logowx']; ?>" class="f-l jImg img-error">
	   					<p class="f-l">
        						<span>扫一扫</span>
        						<span>关注我们</span>
        					</p>
        				</div>
        				<div class="weibo f-l">
        					<div class="ic qq" style="padding-left: 0px;"><?php echo rec(8);?></div>
        					<div class="ic sina" style="padding-left: 0px;"><?php echo rec(7);?></div>
        				</div>
        			</div>
    			</div>
    		</div>
		</div>
	</div>			
    <?php }?>
  </div>
</div>
 
<div id="footer" class="wrapper">
  <p><a href="<?php echo SHOP_SITE_URL;?>"><?php echo $lang['nc_index'];?></a>
    <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
    <?php foreach($output['nav_list'] as $nav){?>
    <?php if($nav['nav_location'] == '2'){?>
    | <a  <?php if($nav['nav_new_open']){?>target="_blank" <?php }?>href="<?php switch($nav['nav_type']){
    	case '0':echo $nav['nav_url'];break;
    	case '1':echo urlShop('search', 'index', array('cate_id'=>$nav['item_id']));break;
    	case '2':echo urlShop('article', 'article',array('ac_id'=>$nav['item_id']));break;
    	case '3':echo urlShop('activity', 'index',array('activity_id'=>$nav['item_id']));break;
    }?>"><?php echo $nav['nav_title'];?></a>
    <?php }?>
    <?php }?>
    <?php }?>
  </p>
  <?php echo $output['setting_config']['shopnc_version'];?> <a href="http://www.miibeian.gov.cn"><?php echo $output['setting_config']['icp_number']; ?></a><br />
  <?php echo html_entity_decode($output['setting_config']['statistics_code'],ENT_QUOTES); ?> <br/>
                <a href="http://www.hd315.gov.cn/" target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/common/bei_an.png" height="40" width="108"><a/>
			<a  i href="http://www.szfw.org/"  target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/common/cheng_xin.png"></a>
			<!-- 诚信网站 -结束- -->

		
			<span  style="display:inline-block;position:relative;width:auto;"> <a href="https://ss.knet.cn/" id="kx_verify" tabindex="-1" target="_blank" kx_type="图标式" style="display:inline-block;"> <img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/common/index.png" style="border:none;" oncontextmenu="return false;" alt="可信网站"> </a> </span>
			<!--可信网站图片LOGO安装结束-->

			<!-- 安全联盟 -开始- -->
			<a target="_blank" logo_size="124x47" logo_type="realname" href="http://www.anquan.org/"></span><img alt="安全联盟认证" style="border: medium none;" src="<?php echo SHOP_TEMPLATES_URL; ?>/images/common/sm_124x47.png" height="47" width="124"></a>
			<!-- 安全联盟 -结束- --></div>
<?php if (C('debug') == 1){?>
<!-- <div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div> <?php print_r(Tpl::showTrace());?> </div>
  </fieldset>
</div> -->
<?php }?>
<!-- 诚信网站 -开始- -->

<script>
    var COOKIE_PRE = '<?php echo COOKIE_PRE; ?>';
    var _CHARSET = '<?php echo strtolower(CHARSET); ?>';
    var SITEURL = '<?php echo SHOP_SITE_URL; ?>';
    var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL; ?>';
    var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
    var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL; ?>';
    var SHOP_TEMPLATES_URL = '<?php echo SHOP_TEMPLATES_URL; ?>';
	console.log(SITEURL);
</script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.cookie.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/compare.js"></script>
<!--<script type="text/javascript">
$(function(){
	// Membership card
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
</script>-->

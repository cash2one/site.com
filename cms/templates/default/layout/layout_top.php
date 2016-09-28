<?php defined('InShopNC') or exit('Access Invalid!');?>
<script src="<?php echo CMS_SITE_URL; ?>/resource/js/compare.js"></script>

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>

<div class="gotop"><a href="javascript:void(0);" id="gotop"><span class="icon"></span></a></div>
    

<script type="text/javascript">
//返回顶部
backTop=function (btnId){
	var btn=document.getElementById(btnId);
	var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	window.onscroll=set;
	btn.onclick=function (){
		btn.style.opacity="0.5";
		window.onscroll=null;
		this.timer=setInterval(function(){
		    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
			scrollTop-=Math.ceil(scrollTop*0.1);
			if(scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
			if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop=scrollTop;
			if (document.body.scrollTop > 0) document.body.scrollTop=scrollTop;
		},10);
	};
	function set(){
	    scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
	    btn.style.opacity=scrollTop?'1':"0.5";
	}
};
backTop('gotop');

</script>

<div class="public-top-layout w">
  <div class="topbar wrapper">
    <div class="user-entry">
        <?php if($_SESSION['is_login'] == '1'){?>
            <?php echo $lang['nc_hello'];?> 
            <span>
                <a href="<?php echo urlShop('member','home');?>"><?php echo $_SESSION['member_name'];?></a>
                <?php if ($output['member_info']['level_name']){ ?>
                    <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go('<?php echo urlShop('pointgrade','index');?>');"><?php echo $output['member_info']['level_name'];?></div>
                <?php } ?>
            </span> 
            <?php echo $lang['nc_comma'],$lang['welcome_to_site'];?> 
            <a href="<?php echo BASE_SITE_URL;?>"  title="<?php echo $lang['homepage'];?>" alt="<?php echo $lang['homepage'];?>">
                <span><?php echo $output['setting_config']['site_name']; ?></span>
            </a> 

            <span>[<a href="<?php echo urlShop('login','logout');?>"><?php echo $lang['nc_logout'];?></a>] </span>
        <?php }else{?>
            <?php echo $lang['nc_hello'].$lang['nc_comma'].$lang['welcome_to_site'];?> <a href="<?php echo BASE_SITE_URL;?>" title="<?php echo $lang['homepage'];?>" alt="<?php echo $lang['homepage'];?>"><?php echo $output['setting_config']['site_name']; ?></a> 
            
            <!--<?php if ($output['setting_config']['qq_isuse'] == 1){?>
                <a href="<?php echo CMS_SITE_URL;?>/api.php?act=toqq" title="QQ" class="qq"><img src="<?php echo CMS_TEMPLATES_URL?>/images/qq_login.png" alt="" height="20" width="20"></a>
            <?php } ?>
            <?php if ($output['setting_config']['sina_isuse'] == 1){?>
                <a href="<?php echo CMS_SITE_URL;?>/api.php?act=tosina" title="<?php echo $lang['nc_otherlogintip_sina']; ?>" class="sina"><img src="<?php echo CMS_TEMPLATES_URL?>/images/sina_login2.png" alt="" height="20" width="20"></a>
            <?php } ?>-->
            <!-- <?php if ($output['setting_config']['wx_isuse'] == 1){?>
                <a href="javascript:void(0);" title="wx" class="wx"><img src="<?php echo CMS_TEMPLATES_URL?>/images/wx_login2.png" alt="" height="20" width="20"></a>
            <?php } ?> -->
            
            <div class="molvkuang">
                  <span class="denglutouxiang"></span>
                  <span><a href="<?php echo urlShop('login');?>"><?php echo $lang['nc_login'];?></a></span> 
                  <span class="shu">|</span>
                  <span><a href="<?php echo urlShop('login','register');?>"><?php echo $lang['nc_register'];?></a></span>
            </div>
      <?php }?>
	        <!--<span style="margin-left:10px;"><a href="index.php?act=invite" style="color:red;">分享可免单</a></span>-->
    </div>
    <div class="nav-left">
        <div class="quick-menu">
          <dl>
            <dt><a href="<?php echo BASE_SITE_URL;?>/wap">手机触屏版</a></dt>
          </dl>
          <!-- <dl>
            <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=show_joinin&op=index" title="免费开店">免费开店</a><i></i></dt>
            <dd>
              <ul>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=show_joinin&op=index" title="招商入驻">招商入驻</a></li>
                <li><a href="<?php echo urlShop('seller_login','show_login');?>" target="_blank" title="登录商家管理中心">商家登录</a></li>
              </ul>
            </dd>
          </dl> -->
          <dl>
            <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order">我的玩艺</a><i></i></dt>
            <dd>
              <ul>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_new">待付款订单</a></li>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_send">待确认收货</a></li>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order&state_type=state_noeval">待评价交易</a></li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist"><?php echo $lang['nc_favorites'];?></a><i></i></dt>
            <dd>
              <ul>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist">商品收藏</a></li>
                <li><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fslist">店铺收藏</a></li>
              </ul>
            </dd>
          </dl>
          <dl>
            <dt>客户服务<i></i></dt>
            <dd>
              <ul>
                <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 2));?>">帮助中心</a></li>
                <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 5));?>">售后服务</a></li>
                <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 6));?>">客服中心</a></li>
              </ul>
            </dd>
           </dl>
          <?php
          if(!empty($output['nav_list']) && is_array($output['nav_list'])){
              foreach($output['nav_list'] as $nav){
              if($nav['nav_location']<1){
                $output['nav_list_top'][] = $nav;
              }
              }
          }
          if(!empty($output['nav_list_top']) && is_array($output['nav_list_top'])){
            ?>
          <dl>
            <dt>站点导航<i></i></dt>
            <dd>
              <ul>
                <?php foreach($output['nav_list_top'] as $nav){?>
                <li><a
            <?php
            if($nav['nav_new_open']) {
                echo ' target="_blank"';
            }
            echo ' href="';
            switch($nav['nav_type']) {
                case '0':echo $nav['nav_url'];break;
                case '1':echo urlShop('search', 'index', array('cate_id'=>$nav['item_id']));break;
                case '2':echo urlShop('article', 'article', array('ac_id'=>$nav['item_id']));break;
                case '3':echo urlShop('activity', 'index', array('activity_id'=>$nav['item_id']));break;
            }
            echo '"';
            ?>><?php echo $nav['nav_title'];?></a></li>
                <?php }?>
              </ul>
            </dd>
          </dl>
          <?php }?>
         <!-- <dl class="weixin">
            <dt>关注我们<i></i></dt>
            <dd>
              <h4>扫描二维码<br/>
                关注商城微信号</h4>
              <img src="<?php echo UPLOAD_SITE_URL.DS.ATTACH_COMMON.DS.$GLOBALS['setting_config']['site_logowx']; ?>" > </dd>
            </dl>-->
        </div>
        <div class="kaidian">
              <span class="zhucheshagnbiao"></span>
              <span><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=show_joinin&op=index" title="招商入驻">商家入驻</a></span> 
              <span class="shu">|</span>
              <span><a href="<?php echo urlShop('seller_login','show_login');?>"/>商家登录</a></span>
        </div>
    </div>
  </div>
</div>

<div class="wx_window">
    <div class="wx_tit"><h1>微信账号登录</h1><span class="wx_close"></span></div>
    <div class="nc-login-content tc" id="login_container"></div>
</div>


<style>
   #wx_btn{padding:0 5px;height:26px;line-height: 26px;text-indent: 30px;background: #eee url(<?php echo CMS_TEMPLATES_URL;?>/images/wx_login.png)no-repeat 5px center;display: inline-block;border-radius: 3px;position: absolute;margin-left:5px;border:1px solid #ccc;}
    .wx_window{width: 400px;height:auto;display:none;position: absolute;top: 150px;left: 40%;background: #D8D8D8 ;z-index: 1111;}
    .wx_window .wx_tit h1{font-size: 20px;line-height: 40px;font-weight: bold;text-indent: 1em;margin-bottom: 10px;position: relative;}
    .wx_window .wx_tit .wx_close{position: absolute;right:3px;top: 4px;cursor:pointer;width: 20px;height: 20px;border-radius: 10px;background: url(<?php echo CMS_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;display: block;}
    .wx_window .wx_tit .wx_close:hover{background: #F71F07 url(<?php echo CMS_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;}
</style>

<script>
$(".quick-menu dl").hover(function() {
        $(this).addClass("hover");
    },
    function() {
        $(this).removeClass("hover");
    });
/*微信登陆*/
$(function(){
    $.getScript("<?php echo C('https')?'https':'http';?>://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js", function(){
        var obj = new WxLogin({
            id:"login_container", 
            appid: "<?php echo $output['setting_config']['wx_appid'];?>", 
            scope: "snsapi_login", 
            redirect_uri: "<?php echo CMS_SITE_URL.'/index.php?act=connect_wx&op=get_info';?>",
            state: "",
            style: "",
            href: ""
        });
    });
});
/*微信登陆弹出*/
$('.wx').click(function(){
    $('.wx_window').fadeIn('slow');
});
$('.wx_close').click(function(){
    $('.wx_window').fadeOut('slow');
});
</script>
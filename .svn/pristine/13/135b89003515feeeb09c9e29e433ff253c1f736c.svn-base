<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_group.css" rel="stylesheet" type="text/css">
<!-- js调用部分begin index 焦点图 -->
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider.css" type="text/css" rel="stylesheet" />
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/flexslider_diy.css" type="text/css" rel="stylesheet" />
<script src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery/jquery.flexslider-min.js"></script>
<style type="text/css">
.nch-breadcrumb-layout {display: none; }
</style>


<!--<?php if (!empty($output['picArr'])) { //echo '<pre>';print_r($output['picArr']); 
?>
<div class="flexslider control-nav-img-internally control-nav-on-center" id="lunbo_01">
    <ul class="slides">
    <?php foreach($output['picArr'] as $k=>$p) { ?>
        <li><a href="<?php echo $p[1];?>"><img src="<?php echo UPLOAD_SITE_URL.'/'.ATTACH_LIVE.'/'.$p[0];?>"></a></li>
    <?php } ?>
        
    </ul>
</div>
<?php } ?> -->
<div id="pic" class="pic"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/jushizai1.jpg" alt=""></div>
<div class="jushizhai-wai">
    <div class="jushizhai-zong">
        <div class="w-container"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/jishiza2.jpg"></div>
        <div class="jushizhai-time">
            <body onload="Re_fresh('2016/2/29 10:00:00',1)">
                <p><span id="times"></span></p>
            </body>
        </div>
 

        <div class="jushizhai-zong-left">
            <?php if (!empty($output['groupbuy_list_time'])) { //echo '<pre>';print_r($output['groupbuy_list_time']);
                ?>
                <?php foreach ($output['groupbuy_list_time'] as $key=>$groupbuy) { ?>
                    <div class="jsz-qianggou">
                        <div class="qianggou-main">
                            <div class="qianggou-pic">
                                <a href="<?php echo $groupbuy['goods_url'];?>" title="<?php echo $groupbuy['groupbuy_name'];?>"><img src="<?php echo gthumb($groupbuy['groupbuy_image'],'mid');?>" alt="" target="_blank"></a>
                            </div>
                            <div class="qianggou-xinxi">
                                <div class="qianggou-logo">
                                    <span>
                                        <img src="<?php if(empty($groupbuy['brand_info']['brand_pic'])){echo UPLOAD_SITE_URL.'/'.ATTACH_STORE.DS,$groupbuy['store_avatar'];}else{echo UPLOAD_SITE_URL,'/shop/brand/',$groupbuy['brand_info']['brand_pic'];}?>" alt="">
                                    </span>
                                    <span class="qianggou-logo-text"><a href="<?php echo $groupbuy['goods_url'];?>" title="<?php echo $groupbuy['goods_name'];?>"><?php echo str_cut($groupbuy['goods_name'],32,'...');?></a></span>
                                </div>
                                <div class="qianggou-text">
                                    <div>聚拾价：¥<i><?php echo $groupbuy['groupbuy_price'];?></i></div>
                                    <span>
                                        <?php if($groupbuy['start_time'] > TIMESTAMP){?>
                                            <sapn style="color:#fff;font-size:18px;"><?php echo $groupbuy['button_text'];?></sapn>
                                            
                                        <?php }else{?>
                                            <a href="<?php echo $groupbuy['goods_url'];?>">马上抢</a>
                                        <?php }?>
                                    </span>
                                    <p class="time"><?php echo $groupbuy['count_down_text'];?> <img src="<?php echo UPLOAD_SITE_URL; ?>/index/clock.png" alt="">
                                        <span id="list_count_down" class="settime" startTime="<?php echo $groupbuy['start_time_text'];?>" endTime="<?php echo $groupbuy['end_time_text'];?>"></span>
                                    </p>
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } else { ?>
                <div class="norecommend">暂时没有限时抢购</div>
            <?php } ?>
        </div>

        <div class="jushizhai-zong-right">
        <!-- <?php echo '<pre>';print_r($output['guesslike']);?> -->
            <div class="cainixihuang">
                <div class="cainixihuang-tital"><h1>猜你喜欢</h1></div>
                <?php if (!empty($output['guesslike'])) { //echo '<pre>';print_r($output['guesslike']);
                    ?>
                    <?php foreach ($output['guesslike'] as $key=>$guesslike) { ?>
                        <div class="cainixihuang-cunt">
                            <div class="cainixihuang-main">
                                <div class="cainixihuang-pic"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$guesslike['goods_id']));?>"><img src="<?php echo cthumb($guesslike['goods_image'], 360);?>" alt=""></a></div>
                                <div class="cainixihuang-text">
                                    <span class="pull-left"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$guesslike['goods_id']));?>"><?php echo str_cut($guesslike['goods_name'],'30','...');?></a></span>
                                    <span class="pull-right">¥<?php echo $guesslike['goods_promotion_price'];?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="norecommend">暂无推荐</div>
                <?php } ?>
           </div>
        </div>

        <!-- <div class="lastCarcy">
            <div class="w-container"><img src="<?php echo UPLOAD_SITE_URL; ?>/index/jishiza1.jpg"></div>
            <div class="jushizhai">
                <?php if (!empty($output['groupbuy_list_num'])) { //echo '<pre>';print_r($output['groupbuy_list_num']);
                ?>
                <?php foreach ($output['groupbuy_list_num'] as $key=>$groupbuy) { 
                    if($groupbuy['end_time'] > time()){
                ?>
                
                <ul class="jushizhai-list">
                    <li>
                        <div class="jushizhai-cont">
                            <a href="<?php echo $groupbuy['goods_url'];?>"><img src="<?php echo gthumb($groupbuy['groupbuy_image'],'mid');?>" alt=""></a>
                            <span>
                              <p><?php echo $groupbuy['groupbuy_name'];?></p>
                              <p><?php echo $groupbuy['goods_name'];?></p>
                            </span>
                        </div>
                        <div class="jushizhai-text">
                            <div class="price pull-left">拾寨价：¥<?php echo $groupbuy['goods_price'];?></div>
                            <div class="pull-right">
                              <span class="stock">剩余：<?php echo $groupbuy['goods_storage'];?>件</span>
                              <a href="<?php echo $groupbuy['goods_url'];?>">马上抢</a>
                            </div>
                        </div>
                                <div class="yishouwang"><img src="<?php echo UPLOAD_SITE_URL; ?>/yisouqing.png"></div>
                    </li>
                </ul>
        
                <?php } }?>
                <?php } else { ?>
                    <ul class="jushizhai-list">暂无推荐</ul>
                <?php } ?>
            </div>
        </div> -->
    </div>
    <div style="clear:both;"></div>
</div>

<script>

    $(function(){
        var pic = document.getElementById("pic");
		if (document.body.clientWidth >= 1920) {
			pic.style.width = 1920 + "px";
		} else {
			pic.style.width = document.body.clientWidth + "px";
		}


        //抢购列表循环倒计时
        groupbyCountdown();
    });
   
    //倒计时，每天10点刷新
    function GtDate(time,t){
        var startime=new Date(time);
        var endtime = new Date();
        var newtime=Math.floor((endtime.getTime()-startime.getTime())/1000);//时间戳的差
        var n=parseInt(newtime/3600/24/t);
        var leftsecond=t*24*3600-(newtime-t*n*24*3600);
        d=parseInt(leftsecond/3600/24);
        h=parseInt((leftsecond/3600)%24);
        m=parseInt((leftsecond/60)%60);
        s=parseInt(leftsecond%60);
        document.getElementById("times").innerHTML= h+"小时"+m+"分"+s+"秒";
        if(leftsecond<=0){
        document.getElementById("times").innerHTML="抢购已结束";
        clearInterval(sh);
        }
    }
    function Re_fresh(time,t){//time参数是刷新的时间点，t是循环的天数
        var sh;
        sh=setInterval(function(){GtDate(time,t);},1000);
    }
//轮播图
    $(function () {
        $('#lunbo_01').flexslider({
            directionNav: true,
            pauseOnAction: false
        });
        
    });
</script>

 <style>
 /* 轮播图*/
 .pic{
    margin: auto;
  }
  .pic>img{ width:100%;}
  .slides li a{display: block;width: 100%;height: 100%;}   
  *{margin: 0; padding: 0;text-decoration: none; list-style-type:none;}
    /*抢购页面*/
  .jushizhai-wai{ background:#eeeeee;padding-bottom:40px;}
   .jushizhai-zong{width:1200px; margin:0 auto;height:100%;padding-top:50px;}
  .jushizhai-time{ width:100%;height:22px;margin-bottom:30px; text-align:center;}
  .jushizhai-time>p{font-size:20px; color:#999999;}
  .jushizhai-zong-left{float:left;width: 836px;}
  .jushizhai-zong-right{float:right; width: 350px;}
  .jsz-qianggou{ width:836px;float:left;height:100%;}
  .cainixihuang{ width:350px;float:right; }
  .qianggou-main{ width:100%;height:300px;margin-bottom:14px;background:#FFFFFF;}
  .qianggou-pic{width:600px;float:left; overflow:hidden;}
  .qianggou-pic>img{width:100%;height:100%;}
  .qianggou-xinxi{float:left; width:236px; height:100%;}
  .qianggou-logo{text-align:center;padding-top:18px;}
  .qianggou-logo >span{height: 34px;
    WIDTH:120PX;
    overflow: hidden;
    margin: auto;
    color: #333333;}
  .qianggou-logo span>img{width: 80px;height:80px;} 
  .qianggou-logo-text{ display:block;font-size:14px;color:#333333;padding-top:10px;border-bottom:1px solid #efefef;padding-bottom:10px;width:192px;margin:0 auto;}
  .qianggou-text>div{margin-top:15px; color:#e43d47;text-align:center;margin-bottom:12px;}
  .qianggou-text>div>i{ font-size:18px; color:#e43d47;}
  .qianggou-text>span{ cursor: pointer; width:100px; height:32px; background:#e43d47;  display:block;text-align:center;line-height:32px;margin:0 auto;border-radius:4px;}
  .qianggou-text>span>a{color:#fff;font-size:18px;}
  .qianggou-text span a:hover{text-decoration: none;} 
  .qianggou-text>p{text-align:center;margin-top:20px;}
  .qianggou-text>p>img{vertical-align:-2px;}
  .cainixihuang{text-align:center;}
  .cainixihuang-tital{width:100%;height:100%;background:#FFFFFF;}
  .cainixihuang-tital>h1{border-bottom:1px solid #dddddd; font-size:16px; color:#333333;width:100%;height:38px;line-height:38px;text-align:center; display:block;margin:0 auto;background:#FFFFFF;}
  .cainixihuang-cunt{padding:10px 10px; width:330px;height:330px; margin-bottom:10px;background:#FFFFFF;}
  .cainixihuang-main{ position:relative;width:330px; height:330px; overflow:hidden;}
  .cainixihuang-pic{width:330px; height:330px;overflow: hidden;}
  .cainixihuang-pic>img{width:100%;height:100%;}
  
  .cainixihuang-main:hover .cainixihuang-text{bottom:0;}
  .cainixihuang-text{ position: absolute;bottom: -48px;height: 48px;width: 330px;font-size: 14px;transition: all 0.2s ease-in;background-color: rgba(0,0,0,0.7);}
  .cainixihuang-text span{line-height:48px;color:#FFFFFF;}
  .cainixihuang-text .pull-left{float:left;margin-left:10px; }
  .cainixihuang-text .pull-right{float:right; margin-right: 10px;}
.cainixihuang-text a{color:#fff;}

  .jushizhai{ width:1200px;  margin:0 auto; background:#EEEEEE;height:100%;}
  .jushizhai-list{ width:calc(100% + 10px); }
  .jushizhai li{ float:left; width:calc(100%/3 - 10px); margin-top:15px;height:390px; margin-right:10px;position:relative;}
  .jushizhai-cont { width:100%;height:332px;  position:relative; overflow:hidden;}
  .jushizhai-cont img{ width:100%; height:100%;}
  .jushizhai-cont span{ position:absolute; bottom:-60px; left:0;background:rgba(0,0,0,0.6);  height:40px; line-height:20px;display:block;  width:100%;transition:all 0.2s ease-in; text-align:left;color:#FFFFFF;padding: 10px;}
  .jushizhai li:hover span{bottom:0;}
  .jushizhai-text{ width:calc(100% - 2px); height:58px; line-height:58px; border:1px solid #ccc; border-top:none; border-bottom-left-radius:4px;border-bottom-right-radius:4px;background:#FFFFFF;}
  .jushizhai-text .price{float: left; padding-left:8px;font-size:16px; color:#E0455B; font-weight:bold;}
    .jushizhai-text .pull-right { float:right;}
    .jushizhai-text .pull-right span{ font-size:10px; color:#666; }
  .jushizhai-text .pull-right a{  display:inline-block; width:100px; height:30px; color:#fff; background:#E0455B; font-weight:bold; border-radius:4px; line-height:30px; text-align:center; margin:14px 10px; text-decoration:none;font-size:18px;}
.yishouwang{
	   z-index:10;
	   width:100%;
	   height:100%;
	   background:rgba(0,0,0,0.5);
	   position:absolute;
	   top:0;
	   display:none;
	}
      .yishouwang>img{
          width: 100%;
          height: 100%;
      }
      .settime{background: url() no-repeat left center;}
  </style>
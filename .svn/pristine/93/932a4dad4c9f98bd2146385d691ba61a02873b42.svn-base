<?php defined('InShopNC') or exit('Access Invalid!');?>
<!-- <link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_activity.css" rel="stylesheet" type="text/css">
<script type="text/javascript" >
  $(document).ready(function(){
    $('#sale').children('ul').children('li').bind('mouseenter',function(){
      $('#sale').children('ul').children('li').attr('class','c1');
      $(this).attr('class','c2');
    });
  
    $('#sale').children('ul').children('li').bind('mouseleave',function(){
      $('#sale').children('ul').children('li').attr('class','c1');
    });
})
</script>
<div class="nch-activity">
  <div id="banner_box">
    <div class="pic"><img src="<?php if(is_file(BASE_UPLOAD_PATH.DS.ATTACH_ACTIVITY.DS.$output['activity']['activity_banner'])){echo UPLOAD_SITE_URL."/".ATTACH_ACTIVITY."/".$output['activity']['activity_banner'];}else{echo SHOP_TEMPLATES_URL."/images/sale_banner.jpg";}?>"/></div>
    
  </div>
  <div class="sale" id="sale">
    <ul class="list_pic">
      <?php if(is_array($output['list']) and !empty($output['list'])){?>
      <?php foreach ($output['list'] as $v) {?>
      <li class="c1">
        <dl>
          <dt class="goodspic"><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$v['goods_id']));?>" target="_blank"><img src="<?php echo thumb($v, 240);?>"/></a></dt>
          <dd class="goodsname"><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$v['goods_id']));?>" target="_blank" title="<?php echo $v['goods_name'];?>"><?php echo $v['goods_name'];?></a></dd>
          <dd class="price">
            <h4><?php echo ncPriceFormatForList($v['goods_price']);?></h4>                              
          </dd>
        </dl>
      </li>
      <?php }?>
      <?php }?>
    </ul>
  </div>
</div> -->
<div id="act_container">
    <?php if(!empty($output['activity'])){?>
    <div class="bj" id="bj">
        <div class="buy-leibiao">
            <span class="chunyou-title"><u><?php echo $output['activity']['activity_title'];?></u><i></i></span>
            <div class="buy-main">
                <?php if(!empty($output['list'])){?>
                <ul>

                <?php foreach($output['list'] as $k=>$v){?>
                    <li>
                        <div class="changping-pic"><img src="<?php echo thumb($v, 240);?>" alt=""/></a>
                        </div>
                        <div class="text">
                                <a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$v['goods_id']));?>"><i><?php echo $v['goods_name'];?></i></a>
                                <a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$v['goods_id']));?>"><p><?php echo $v['goods_jingle'];?></p></a>
                        </div>
                        <div class="money"><i>特惠价：¥</i><u><?php echo $v['goods_price'];?></u><span><a href="<?php echo urlShop('goods', 'index', array('goods_id'=>$v['goods_id']));?>">马上抢购</a></span></div>
                    </li>
                <?php } ?>
                </ul>
                <?php } else{ ?>
                    <p>活动已结束</p>
                <?php } ?>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <?php } else{ ?>
        <p>活动不存在</p>
    <?php } ?>
</div>
<style>
    #act_container{width: 100%;width: 100%;background: url(<?php if(is_file(BASE_UPLOAD_PATH.DS.ATTACH_ACTIVITY.DS.$output['activity']['activity_bg'])){echo UPLOAD_SITE_URL."/".ATTACH_ACTIVITY."/".$output['activity']['activity_bg'];} ?>) no-repeat top center;background-size: 1920px auto; }
*{text-decoration: none;}
.bj{width: 1232px;margin: auto;padding-top: 1050px;}
        .buy-leibiao{margin: auto;width: 1232px;}
        .chunyou-title{display: inline-block;}
        .chunyou-title>u {font-size: 26px;color: #ffffff;background: #ab8059;padding:  7px 10px 7px 19px;float: left;}
        .chunyou-title>i{border: 17px solid transparent;border-left: 67px solid #ab8059;float: left;}
        .buy-main{
            margin-top: 22px;
        }

        .buy-main >ul >li{
            background: #ffffff;
            width: 288px;
            height: 388px;
            float: left;
            margin-right: 16px;
            margin-bottom: 16px;
        }
        .changping-pic{
            margin: 10px 10px;
            width: 268px;
            height: 268px;
        }
		
    .changping-pic  >img{
        width:100%;
      height:100%;
    }
        .text{
            margin-left: 12px;
		width: 94%;
		height: 50px;
        }
        .text>i{
            font-size: 14px;
            color: #666666;
        }
        .text>p{
            font-size: 16px;
            color: #333333;
        }
        .money{
              color:#e60012;
            width: 265px;
            height: 30px;
            margin: auto;
            margin-top: 8px;;
        }
        .money>i{
            font-size: 18px;
            float: left;
            margin-top: 10px;
        }
        .money>u{
			margin-top: 8px;
			font-size: 22px;
			float:left;
        }
        .money>span{
            width: 100px;
            height: 30px;
            background:  #e60012;
            font-size: 16px;
            float: right;
            color: #ffffff;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }
        .money span a{color: #ffffff;}
        .more{
            width: 1200px;
            height: 60px;
            text-align: center;
            background: #ffffff;
            line-height: 60px;
            margin-top: 14px;
            cursor: pointer;
        }
    </style>

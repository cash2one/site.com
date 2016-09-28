<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <title><?php echo ($info["title"]); ?></title> 
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport" /> 
  <link rel="stylesheet" type="text/css" href="tpl/static/Hongbaoqiye/mobile.css" /> 
  <script type="text/javascript" src="tpl/static/Hongbaoqiye/jquery.min.js"></script> 
  <script>

   

	// i= id/class  l = layer 是否显示

	function show(i,l){

		if(l==1){

			$(".layer").fadeIn();

		}

		$(i).fadeIn();

	}

	// i= id/class  l = layer 是否隐藏

	function hide(i,l){

		if(l==1){

			$(".layer").fadeOut();

		}

		$(i).fadeOut();

		var doing = $(i).attr('doing');

		if(doing){

			location.reload();

		}

	}

                    //打开红包浮层

                    function hb(){

                            var eid = $("#take_do");

                            var timer = eid.attr("endtime");

                            if(timer>0){

                                alert("客官不要心急嘛~");

                            }else{

                                $(".layer").fadeIn();

                                $(".layer-red").fadeIn();

                            }

                    }

	function take(){

		var doing = $("#red").attr('doing');

		if(!doing){

			$("#red").attr('doing',1);

			$("#reversal").addClass("reversal");

			$('#reversal').delay(2400).fadeOut(1000);

			$.ajax({

                                                                            type: 'POST',

                                                                            url: 'index.php?g=Wap&m=Hongbaoqiye&a=lingqu&wecha_id=<?php echo ($wecha_id); ?>',
																			

                                                                           

                                                                            dataType : 'json',
																			 

                                                                            success: function(data){

                                                                                    $(".text").html(data.msg);

                                                                                    $("#red").attr('doing',1);

                                                                            },

                                                                            error: function(){

                                                                                    $('.text').html('领取失败<br>请重试');

                                                                                    $("#red").attr('doing',1);

                                                                            }

                                                             });	

			$(".text").delay(2000).fadeIn(); 

		}else{

			alert('亲~点击过快哦，红包已经在路上啦~请耐心等待。');

			//重复点击

		}

	}

                    var page = 2;

	function more(){

		$(".showmore").text('正在加载...');

                                        $.get("index.php?g=Wap&m=Hongbaoqiye&a=page&wecha_id=<?php echo ($wecha_id); ?>", {aid:"{$act['id']}",p:page} ,function(result){

                                            if(!result){

                                                $(".showmore").text('没有更多了...');

                                            }else{

                                                page++;

                                                $(".record").append(result);

                                                $(".showmore").text('查看更多');

                                            }

                                        });

	}

            //执行倒计时

            $(function(){

    	var int = setInterval(function(){

      		dotime(int);	

    	}, 1000);

            });

            function dotime(int){

                var eid = $("#take_do");

                var timer = eid.attr("endtime");

                if(timer>0){

                    timer--;

                    eid.attr({endtime:timer});

                    eid.text("红包还有"+timer+"秒到达战场");

	eid.css({background:"#ccc"}); 

                }else{

                    eid.text("点击抽取(剩余<?php echo ($jihui); ?>次)");

	eid.css({background:"#349800"}); 

	clearInterval(int);

                }

            }

</script> 
 </head> 
 <body> 
  <!-- 黑色遮罩 --> 
  <div class="layer"></div> 
  <!-- rule 浮层 --> 
  <div class="layer-rule" id="rule"> 
   <div class="close" onclick="hide('#rule',1)">
    &times;
   </div> 
   <div class="con"> 
    <center>
      活动规则 
    </center> <?php echo ($info["gz"]); ?> 
   </div> 
  </div> 
  <!-- 不再城市范围内 浮层 --> 
  <div class="layer-city" id="city"> 
   <div class="close" onclick="hide('#city',1)">
    &times;
   </div> 
   <div class="ico">
    <img src="tpl/static/Hongbaoqiye/5.png" />
   </div> 
   <h1>很抱歉!!!</h1> 
   <h2>您所在的区域不能参加此活动</h2> 
   <h2>地区报错请连接Wifi后重试</h2> 
   <h3>您所在的城市：<?php echo ($mycity); ?></h3> 
   <div class="nav">
    本活动仅限<?php echo ($info["quyus"]); echo ($info["quyu"]); ?>限<?php echo ($info["quyux"]); ?>的小伙伴参与
   </div> 
  </div> 
  <!-- 获取更多 浮层 --> 
  <div class="layer-share" id="share"> 
   <div class="close" onclick="hide('#share',1)"></div> 
   <div class="num1">
     <?php echo ($info["haoyou"]); ?>
   </div> 
   <div class="num2">
    <?php echo ($info["choujiangci"]); ?>
   </div> 
  </div> 
  <!-- tips 浮层 --> 
  <div class="tips" id="tips"> 
   <div class="title">
  <?php echo ($tt); ?>
   </div> 
   <div class="sub"> 
    <nav onclick="hide('#tips',1)">
     知道了
    </nav> 
   </div> 
  </div> 
  <!-- 红包 浮层 --> 
  <div class="layer-red" id="red"> 
   <div class="close" onclick="hide('#red',1)"></div> 
   <?php if($pid == ''): ?><div class="head">
    <img src="<?php echo ($user_info["portrait"]); ?>" />
   </div> 
   <div class="nickname">
    <?php echo ($info["banquan"]); ?>
   </div> <?php else: ?>
   <div class="head">
    <img src="<?php echo ($pid_info["portrait"]); ?>" />
   </div> 
   <div class="nickname">
    <?php echo ($pid_info["wechaname"]); ?>
   </div><?php endif; ?>
   <div class="square-spin" onclick="take()"> 
    <div id="reversal">
     ￥
    </div> 
   </div> 
   <div class="text"></div> 
  </div> 
  <!-- page 主体 --> 
  <div class="index"> 
   <div class="top"> 
    <img src="<?php echo ($info["pic"]); ?>" /> 
    <div class="rule" style="background:#F00; padding:2px" onclick="show('#rule',1)">
     秘籍
    </div> 
    <div class="erweima"  style="background:#F00; padding:2px"   >
    <a href="index.php?g=Wap&m=Hongbaoqiye&a=cbt&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>" style="color:white"> 藏宝图</a>
    </div> 
   </div> 
   <div class="member"> 
   <?php if($pid == ''): ?><div class="head">
     <img src="<?php echo ($user_info["portrait"]); ?>" />
    </div> 
    <div class="nickname" style="overflow: hidden;">
  
     土壕<?php echo ($user_info["wechaname"]); ?>的红包
    </div><?php else: ?>
    <div class="head">
     <img src="<?php echo ($pid_info["portrait"]); ?>" />
    </div> 
    <div class="nickname" style="overflow: hidden;">
  
     土壕<?php echo ($pid_info["wechaname"]); ?>的红包
    </div><?php endif; ?>
    
    
    
    
   <?php echo ($div); ?> 
    <a href="index.php?g=Wap&m=Hongbaoqiye&a=todaypm&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>">  <div class="submit" style="background:#349800;" onclick="show(\'#share\',1)">
     今日红包排行榜</div> </a>
    <a href="index.php?g=Wap&m=Hongbaoqiye&a=pm&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>">  <div class="submit" style="background:#349800;" onclick="show(\'#share\',1)">
     红包总排行榜</div> </a>
     
   </div> 
   <?php if($zzs != ''): ?><div class="title1">
     本活动由下面的土壕赞助&nbsp;
    </div> 
    <?php if(is_array($zzs)): $i = 0; $__LIST__ = $zzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"> 
      <div class="advert"> 
       <div class="jump">
        &gt;
       </div> 
       <div class="info"> 
        <div class="icon">
         <img src="<?php echo ($vo["pic"]); ?>" />
        </div> 
        <div class="big"> 
         <div class="slogan">
          <?php echo ($vo["name"]); ?>
         </div> 
         <div class="slogan">
          <?php echo ($vo["info"]); ?>
         </div> 
        </div> 
       </div> 
      </div> </a><?php endforeach; endif; else: echo "" ;endif; endif; ?> 
   <div class="title2">
    看看有哪些小伙伴领到了红包...
   </div> 
   <div class="record">
    <?php if($record == ''): ?><div class="line"> 
     <p style="text-align: center; color: #999">还木有小伙伴参与哦~</p> 
    </div><?php endif; ?>
    
    <?php if(is_array($record)): $i = 0; $__LIST__ = $record;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="line"> 
     <div class="head">
      <img src="<?php echo ($vo["head_pic"]); ?>" />
     </div> 
     <div class="right"> 
      <div class="info"> 
       <div class="user"> 
        <div class="date">
         <?php echo (date('m-d H:i:s',$vo["time"])); ?>
        </div> 
        <div class="big"> 
         <div class="nickname">
          <?php echo ($vo["name"]); ?>
         </div> 
        </div> 
         <div class="slogan"><?php echo ($vo["ly"]); ?></div>
       </div> 
       <div class="slogan">
       
       </div> 
      </div> 
     </div> 
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
   </div> 
   <!-- 记录结束 --> 
   <?php if($record != ''): ?><div class="showmore" onclick="more()">
    查看更多...
   </div><?php endif; ?>
   <div class="footer">
    版权所有 &copy; <?php echo ($info["banquan"]); ?>
   </div> 
  </div>  
 </body>
<script type="text/javascript">
window.shareData = {  
		"moduleName":"Hongbaoqiye",
		"moduleID": "0",
		<?php if($info['state_fanspic'] == '1'): ?>"imgUrl": "<?php echo ($info["pic"]); ?>", 
		<?php else: ?>
		"imgUrl": "<?php echo ($user_info["portrait"]); ?>",<?php endif; ?>
		"timeLineLink":"<?php echo C('site_url'); echo U('Hongbaoqiye/index',array('token'=>$_GET['token'],'pid'=>$wecha_id));?>",
		"sendFriendLink":"<?php echo C('site_url'); echo U('Hongbaoqiye/index',array('token'=>$_GET['token'],'pid'=>$wecha_id));?>",
		"weiboLink":"<?php echo C('site_url'); echo U('Honbaoqiye/index',array('token'=>$_GET['token'],'pid'=>$wecha_id));?>",
		 <?php if($info['state_fansname'] == '1'): ?>"tTitle":"<?php echo ($info["title"]); ?>",
		"tContent":" <?php echo ($info["title"]); ?>"
		<?php else: ?>
		"tTitle":"土壕<?php echo ($user_info["wechaname"]); ?>给你发来一个红包!",
		"tContent":"土壕<?php echo ($user_info["wechaname"]); ?>给你发来一个<?php echo ($info["banquan"]); ?>发布的红包!"<?php endif; ?>
	};

</script>
  <?php echo ($shareScript); ?>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/css/common1.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL; ?>/css/css/brand.css" rel="stylesheet" type="text/css">
    
<div class="shousuotou">
   <i>字母</i>
   <ul class="shousuozimu">
      <li>A</li>
      <li>B</li>
      <li>C</li>
      <li>D</li>
      <li>E</li>
      <li>F</li>
      <li>G</li>
      <li>H</li>
      <li>I</li>
      <li>J</li>
      <li>K</li>
      <li>L</li>
      <li>N</li>
      <li>M</li>
      <li>O</li>
      <li>P</li>
      <li>Q</li>
      <li>R</li>
      <li>S</li>
      <li>T</li>
      <li>U</li>
      <li>V</li>
      <li>W</li>
      <li>X</li>
      <li>Y</li>
      <li>Z</li>
   </ul>
   <span>0&nbsp;&nbsp;&nbsp;~&nbsp;&nbsp;&nbsp;9</span>
</div>
    <?php foreach ($output['brand_r'] as $key => $brand_r) { ?> 
<div class="linggan-list">
     
  <div class="linggan-zimu"><i><?php echo $brand_r['brand_initial']; ?></i></div>
  <div class="linggan-cont">
    <div class="linggan-title">
      <span class="logo"><img src="<?php echo brandImage($brand_r['brand_pic']); ?>"   alt="<?php echo $brand_r['brand_name']; ?>" style="display: block; height:80px;width: 120px; "></span>
    </div>
    <div class="linggan-pic">
    	<div class="pull-left">
      	<div class="max-img"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $brand_r['goods_list'][4]['goods_id']));?>"><img src="<?php echo thumb($brand_r['goods_list'][4]); ?>" width="310" height="310" alt="<?php echo $brand_r['goods_list'][5]['goods_name']; ?>"></a></div>
        <ul class="min-img">
              <?php foreach ($brand_r['goods_list'] as $bkey => $goods_list) { ?> 
              
                    <li><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_list['goods_id']));?>"><img src="<?php echo thumb($goods_list); ?>" width="150" height="150" alt="<?php echo $goods_list['goods_name']; ?>"></a></li>
                <?php if ($bkey == 3) { break; ?>
                        <?php } ?> 
             <?php } ?> 
        </ul>
      </div>
      <div class="pull-right">
          <div class="user-img"><img src="<?php echo SHOP_TEMPLATES_URL; ?>/images/lADOB_SmOSgo_40_40.jpg"></div>
        <h2><?php echo $brand_r['brand_name']; ?></h2>
        <p><span>掌&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;柜：</span><i>小丸子</i></p>
        <p><span>客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服：</span><i>440-136-1368</i></p>
        <p><span>开店时长：</span><i>3年店</i></p>
        <p><span>公 司 名：</span><i><?php echo $brand_r['brand_name']; ?></i></p>
        <p><span>所 在 地：</span><i><?php echo $brand_r['brand_country']; ?></i></p>
      </div>
    </div>
    <div class="jieshao">
    	<div class="pull-left">品牌介绍 <i></i></div>
        <div class="pull-right"><?php echo $brand_r['brand_advertisement2']; ?></div>
    </div>
  </div>
  <div style="clear:both;"></div>

</div>
  <?php } ?>   
  
  <script>
      window.onload=function(){
		var zimu=document.getElementsByClassName("shousuozimu")[0];
	    for(var i=0 ,len=zimu.children.length;i<len;i++){
			zimu.children[i].onclick=function(){
				    bijiaozimu(this.innerHTML.charCodeAt(0))
				}
			}
		
		function bijiaozimu(zimu){
			var lingganzimu=document.getElementsByClassName("linggan-zimu");
			for(var q=0 ,leng=lingganzimu.length;q<leng;q++){
				lingganzimu[q].parentElement.style.display="none";
				if(lingganzimu[q].children[0].innerHTML.charCodeAt(0)==zimu){
				    	lingganzimu[q].parentNode.style.display="block";
				}
			}
		}
	  }
  </script>
</body>
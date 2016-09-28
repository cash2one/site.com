<?php defined('InShopNC') or exit('Access Invalid!');?>
<a href="add_inspiration_goods.step1.php"></a>
<link href="<?php echo SHOP_TEMPLATES_URL?>/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile"/>

<div class="page">
  <form method="post" id="list_form">
    <input id="personal_id" name="personal_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
			<th class="w36">编号</th>
			<th class="w108">瞬间图片</th>
			<th>推荐说明</th>
			<th class="w96 align-center">推荐时间</th>
			<th class="w60 align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($output['list']) && is_array($output['list'])){ ?>
        <?php foreach($output['list'] as $key => $value){ ?>
        <tr class="hover edit">
			<td>
				<a href="<?php echo MICROSHOP_SITE_URL.DS.'index.php?act=personal&op=detail&personal_id='.$value['personal_id'];?>" target="_blank"> <?php echo $value['personal_id'];?> </a>
			</td>
			<td>
				<?php $personal_image_array = getMicroshopPersonalImageUrl($value,'tiny');?>
				<?php $personal_image_array_240 = getMicroshopPersonalImageUrl($value,'list');?>
				<?php for($i=0,$j=count($personal_image_array);$i < $j;$i++) {?>
				<a href="javascript:void(0);" style="background:url(<?php echo $personal_image_array[$i];?>) no-repeat center center; width:60px; height:60px; float:left; margin-right:5px;" > 
					
				<div class="type-file-preview"> <img  src="<?php echo $personal_image_array_240[$i];?>" /> </div>
				</a>
				<?php } ?>
			</td>
			
 
          <td><?php echo $value['commend_message'];?></td>
          <td class="align-center"><?php echo date('Y-m-d',$value['commend_time']);?></td>
          <td class="align-center"><a href="<?php echo C('base_site_url'); ?>/index.php?act=store_inspiration&op=add_inspiration_goods&personal_id=<?php echo $value['personal_id'];?>">认领</a></td>
        </tr>
        <?php } ?>
        <?php }else { ?>
        <tr class="no_data">
          <td colspan="15"><?php echo $lang['nc_no_record'];?></td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr class="tfoot">
			<td colspan="16">
				<div class="pagination"><?php echo $output['show_page'];?></div>
			</td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>

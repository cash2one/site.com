<?php defined('InShopNC') or exit('Access Invalid!');?>
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
			<th class="w60 align-center">审核状态</th>
                        <th>审核说明</th>
                        
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($output['list']) && is_array($output['list'])){ ?>
        <?php foreach($output['list'] as $key => $value){ ?>
        <tr class="hover edit">
			<td>
				<a href="<?php echo MICROSHOP_SITE_URL.DS.'index.php?act=personal&op=detail&personal_id='.$value['personal_id'];?>" > <?php echo $value['personal_id'];?> </a>
			</td>
			<td>
				<?php $personal_image_array = getMicroshopPersonalImageUrl($value,'tiny');?>
				<?php $personal_image_array_240 = getMicroshopPersonalImageUrl($value,'list');?>
				<?php for($i=0,$j=count($personal_image_array);$i < $j;$i++) {?>
				<a href="javascript:void(0);" style="background:url(<?php echo $personal_image_array[$i];?>) no-repeat center center; width:60px; height:60px; float:left; margin-right:5px;" target="_blank"> 
					
				<div class="type-file-preview"> <img  src="<?php echo $personal_image_array_240[$i];?>" /> </div>
				</a>
				<?php } ?>
			</td>
			
          
          <td><?php echo $value['commend_message'];?></td>
          <td class="align-center"><?php if($value['check_state']==0){
    echo '未审核';
          }  elseif ($value['check_state']==1) {
         echo '审核通过';     
          }elseif ($value['check_state']==2) {
    echo '审核不通过';
}?>
          </td>
          <td><?php echo $value['check_reply'];?></td>
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

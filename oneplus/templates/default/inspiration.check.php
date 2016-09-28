<?php defined('InShopNC') or exit('Access Invalid!');?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/i18n/zh-CN.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.edit.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
    //行内ajax编辑
    $('span[nc_type="microshop_sort"]').inline_edit({act: 'microshop',op: 'personal_sort_update'});
    //时间
    $('#commend_time_from').datepicker({dateFormat: 'yy-mm-dd'});
    $('#commend_time_to').datepicker({dateFormat: 'yy-mm-dd'});
});
function submit_batch(){
    /* 获取选中的项 */
    var items = '';
    $('.checkitem:checked').each(function(){
        items += this.value + ',';
    });
    if(items != '') {
        items = items.substr(0, (items.length - 1));
        submit_delete(items);
    }  
    else {
        alert('<?php echo $lang['nc_please_select_item'];?>');
    }
}
function submit_delete(id){
    if(confirm("<?php echo $lang['nc_ensure_del'];?>")) {
        $('#list_form').attr('method','post');
        $('#list_form').attr('action','index.php?act=microshop&op=personal_drop');
        $('#personal_id').val(id);
        $('#list_form').submit();
    }
}
</script>
<div class="page">
  <div class="fixed-empty"></div>
  <form method="post" id="list_form">
    <input id="personal_id" name="personal_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
		  <th class="w36">编号</th>
          <th class="w200">瞬间图片</th>
          <th class="w108">商家</th>
          <th>商品地址</th>
          <th class="w96">审核状态</th>
          <th class="w96 align-center">认领时间</th>
          <th class="w96 align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($output['list']) && is_array($output['list'])){ ?>
        <?php foreach($output['list'] as $key => $value){ ?>
        <tr class="hover edit">
		  <td>
            <?php echo $value['check_id'];?>
          </td>
          <td>
            <a href="javascript:void(0)" style="background:url(<?php echo $value['personal_tiny_image'];?>) no-repeat center center; width:60px; height:60px; float:left; margin-right:5px;" target="_blank"> 
                <img class="show_image" src="<?php echo ADMIN_TEMPLATES_URL;?>/images/transparent.gif" style=" width:60px; height:60px; display:block;"/>
				<div class="type-file-preview"> <img  src="<?php echo $value['personal_list_image'];?>" /> </div>
            </a>
		  </td>
          <td>
            <?php echo $value['store_name'];?>
          </td>
          <td><a href="<?php echo $value['goods_url']; ?>" target="_blank"><?php echo $value['goods_url'];?></a></td>
          <td><?php echo $value['check_state_name'];?></a></td>
          <td class="align-center"><?php echo date('Y-m-d',$value['craeted_time']);?></td>
          <td class="align-center">
			<?php if($value['flag_state'] == 0){ ?>
			<?php if($value['check_state'] == 0){ ?>
			<a href="<?php echo BASE_SITE_URL.DS.'/oneplus/index.php?act=goods_inspiration&op=inspirationUpdate&check_id='.$value['check_id']; ?>">审核</a>
			<?php } else {?>
			<a href="<?php echo BASE_SITE_URL.DS.'/oneplus/index.php?act=goods_inspiration&op=inspirationUpdate&check_id='.$value['check_id']; ?>">重审</a>
			<?php } ?>
			<?php } else { ?>
				瞬间已被认领
			<?php } ?>
		  </td>
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

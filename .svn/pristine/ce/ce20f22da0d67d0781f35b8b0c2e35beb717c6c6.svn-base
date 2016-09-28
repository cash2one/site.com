<?php defined('InShopNC') or exit('Access Invalid!');?>
<div class="page">
  <!-- 页面导航 -->
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['groupbuy_index_manage'];?></h3>
      <ul class="tab-base">
        <?php   foreach($output['menu'] as $menu) {  if($menu['menu_type'] == 'text') { ?>
        <li><a href="JavaScript:void(0);" class="current"><span><?php echo $menu['menu_name'];?></span></a></li>
        <?php }  else { ?>
        <li><a href="<?php echo $menu['menu_url'];?>" ><span><?php echo $menu['menu_name'];?></span></a></li>
        <?php  } }  ?>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="add_form" method="post" enctype="multipart/form-data" action="<?php echo urlAdmin('groupbuy', 'banner_upload');?>">
    <input type="hidden" id="submit_type" name="submit_type" />
    <table class="table tb-type2">
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation">wap端抢购banner图:</label></td>
        </tr>
        <tr class="noborder">
            <td class="vatop rowform">
                <span class="type-file-box">
              <input id="textfield" class="type-file-text" type="text" name="textfield" hidefocus="true">
              <input id="button" class="type-file-button" type="button" value="" name="button">
              <input type="file" class="type-file-file" id="up_pic" name="up_pic" size="30" hidefocus="true" >
              </span>
            </td>
        </tr>
        
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span><?php echo $lang['nc_submit'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
$(document).ready(function(){
    $("#submitBtn").click(function(){
        $("#add_form").submit();
    });
    //页面输入内容验证

});
//submit函数
function submit_form(submit_type){
	$('#submit_type').val(submit_type);
	$('#add_form').submit();
}
</script>

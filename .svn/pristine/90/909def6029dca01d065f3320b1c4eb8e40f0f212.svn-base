<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['goods_index_goods']?></h3>
      <ul class="tab-base">
        <li><a href="<?php echo urlAdmin('goods', 'goods');?>" ><span><?php echo $lang['goods_index_all_goods'];?></span></a></li>
        <li><a href="<?php echo urlAdmin('goods', 'goods', array('type' => 'lockup'));?>"><span><?php echo $lang['goods_index_lock_goods'];?></span></a></li>
        <li><a href="<?php echo urlAdmin('goods', 'goods', array('type' => 'waitverify'));?>"><span>等待审核</span></a></li>
        <li><a href="JavaScript:void(0);"><span><?php echo $lang['nc_goods_set']?></span></a></li>
        <li><a href="JavaScript:void(0);" >编辑</a></li>
         <li><a href="index.php?act=goods&op=add_attr" class="current"><span><?php echo '新增价格';?></span></a></li>
          <li><a href="index.php?act=goods&op=add_attr_1"><span><?php echo '新增关系';?></span></a></li>
           <li><a href="index.php?act=goods&op=add_attr_2"><span><?php echo '新增收件人性别';?></span></a></li>
             <li><a href="index.php?act=goods&op=add_attr_3"><span><?php echo '新增收件人年龄';?></span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="post" name="form_goodsverify" id="post_form">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
       	<tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="attr_value_name">价格:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="attr_value_name" name="attr_value_name" value="" class="txt" type="text"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label class="validation" for="hps_value_sort"><?php echo $lang['nc_sort'];?>:</label>
            </td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="100" name="hps_value_sort" id="hps_value_sort" class="txt"></td>
          <td class="vatop tips">数字范围为0~255，数字越小越靠前</td>
        </tr>
      </tfoot>
       <tfoot>
        <tr class="tfoot">
          <td colspan="15" ><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span><?php echo $lang['nc_submit'];?></span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
//按钮先执行验证再提交表单
$(function(){
	$("#submitBtn").click(function(){
        if($("#post_form").valid()){
            $("#post_form").submit();
    	}
	});
	$("#post_form").validate({
		errorPlacement: function(error, element){
			error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        rules : {
            attr_value_name : {
                required : true
            },
            hps_value_sort : {
                required : true,
                digits   : true
            }
        },
        messages : {
            attr_value_name : {
                required : "价格不能为空"
            },
            hps_value_sort  : {
                required : "排序仅可以为数字",
                digits   : "排序仅可以为数字"
            }
        }
	});
});

</script>

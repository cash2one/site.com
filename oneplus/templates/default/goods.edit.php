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
        <li><a href="JavaScript:void(0);" class="current">编辑</a></li>
         <li><a href="index.php?act=goods&op=add_attr"><span><?php echo '新增价格';?></span></a></li>
          <li><a href="index.php?act=goods&op=add_attr_1"><span><?php echo '新增关系';?></span></a></li>
          <li><a href="index.php?act=goods&op=add_attr_4"><span><?php echo '新增场景';?></span></a></li>
           <li><a href="index.php?act=goods&op=add_attr_2"><span><?php echo '新增收件人性别';?></span></a></li>
             <li><a href="index.php?act=goods&op=add_attr_3"><span><?php echo '新增收件人年龄';?></span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="post_form" method="post" name="form_goodsverify">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
                  <tr>
                      <td class="required" colspan="2"><label class="" for="">价格 </label></td>
        </tr>
            <tr class="noborder">
      <td colspan="2" id="gcategory">
        <select name="price_id" class="class-select">
           <?php if(!empty($output['hps_info']['price'])){ ?>
            <option value="<?php echo $output['hps_info']['price_id'];?>"> <?php echo $output['hps_info']['price']; ?></option>
           <?php }else{ ?>
          <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
           <?php } ?>
          <?php if(!empty($output['hps_info']['price_array'])){ ?>
          <?php foreach($output['hps_info']['price_array'] as $k => $v){ ?>
          <option  value="<?php echo $v['hps_value_id'];?>"><?php echo $v['attr_value_name'];?></option>
          <?php } ?>
          <?php } ?>
         
        </select></td>
    </tr>
                   <tr>
          <td class="required" colspan="2"><label class="" for="">关系</label></td>
        </tr>
    <tr>
       <td colspan="2" id="gcategory">
        <select name="relationship_id" class="class-select">
           <?php if(!empty($output['hps_info']['relationship'])){ ?>
            <option value="<?php echo $output['hps_info']['relationship_id'];?>"> <?php echo $output['hps_info']['relationship']; ?></option>
           <?php }else{ ?>
          <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
           <?php } ?>
          <?php if(!empty($output['hps_info'])){ ?>
          <?php foreach($output['hps_info']['relationship_array'] as $k => $v){ ?>
          <option  value="<?php echo $v['hps_value_id'];?>"><?php echo $v['attr_value_name'];?></option>
          <?php } ?>
          <?php } ?>
        </select></td>
    </tr>
     <tr>
          <td class="required" colspan="2"><label class="" for="">场景</label></td>
        </tr>
    <tr>
       <td colspan="2" id="gcategory">
        <select name="scenes_id" class="class-select">
           <?php if(!empty($output['hps_info']['scenes'])){ ?>
            <option value="<?php echo $output['hps_info']['scenes_id'];?>"> <?php echo $output['hps_info']['scenes']; ?></option>
           <?php }else{ ?>
          <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
           <?php } ?>
          <?php if(!empty($output['hps_info'])){ ?>
          <?php foreach($output['hps_info']['scenes_array'] as $k => $v){ ?>
          <option  value="<?php echo $v['hps_value_id'];?>"><?php echo $v['attr_value_name'];?></option>
          <?php } ?>
          <?php } ?>
        </select></td>
    </tr>
      <tr>
          <td class="required" colspan="2"><label class="" for="">收件人性别</label></td>
        </tr>
    <tr>
      <td colspan="2" id="gcategory">
        <select name="sex_id" class="class-select">
           <?php if(!empty($output['hps_info']['sex'])){ ?>
            <option value="<?php echo $output['hps_info']['sex_id'];?>"> <?php echo $output['hps_info']['sex']; ?></option>
           <?php }else{ ?>
          <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
           <?php } ?>
          <?php if(!empty($output['hps_info'])){ ?>
          <?php foreach($output['hps_info']['sex_array'] as $k => $v){ ?>
          <option name="sex_id" value="<?php echo $v['hps_value_id'];?>"><?php echo $v['attr_value_name'];?></option>
          <?php } ?>
          <?php } ?>
        </select></td>
    </tr>
          <tr>
          <td class="required" colspan="2"><label class="" for="">年龄</label></td>
        </tr>
    <tr>
      <td colspan="2" id="gcategory">
        <select name="year_id" class="class-select">
           <?php if(!empty($output['hps_info']['year'])){ ?>
            <option value="<?php echo $output['hps_info']['year_id'];?>"> <?php echo $output['hps_info']['year']; ?></option>
           <?php }else{ ?>
          <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
           <?php } ?>
          <?php if(!empty($output['hps_info'])){ ?>
          <?php foreach($output['hps_info']['year_array'] as $k => $v){ ?>
          <option name="year_id" value="<?php echo $v['hps_value_id'];?>"><?php echo $v['attr_value_name'];?></option>
          <?php } ?>
          <?php } ?>
        </select></td>
    </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="2" ><a href="JavaScript:void(0);" class="btn"  id="submitBtn"><span><?php echo $lang['nc_submit'];?></span></a></td>
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

});

</script>
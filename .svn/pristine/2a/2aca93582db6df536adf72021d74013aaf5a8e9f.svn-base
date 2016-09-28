<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>新闻分类管理</h3>
      <ul class="tab-base">
        <li><a href="index.php?act=news_class&op=news_class"><span>管理</span></a></li>
        <li><a href="index.php?act=news_class&op=news_class_add"><span>新增</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>编辑</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="news_class_form" method="post" name="newsClassForm">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="nc_id" value="<?php echo $output['class_array']['nc_id'];?>" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="nc_name">分类名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['class_array']['nc_name'];?>" name="nc_name" id="nc_name" class="txt"></td>
          <td class="vatop tips">分类名称</td>
        </tr><!--
        <tr>
          <td colspan="2" class="required"><label for="parent_id"><?php echo $lang['news_class_add_sup_class'];?>:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><select name="nc_parent_id" id="nc_parent_id">
              <option value="0"><?php echo $lang['nc_please_choose'];?>...</option>
              <?php if(!empty($output['parent_list']) && is_array($output['parent_list'])){ ?>
              <?php foreach($output['parent_list'] as $k => $v){ ?>
              <option <?php if($output['class_array']['nc_parent_id'] == $v['nc_id']){ ?>selected='selected'<?php } ?> value="<?php echo $v['nc_id'];?>"><?php echo $v['nc_name'];?></option>
              <?php } ?>
              <?php } ?>
            </select></td>
          <td class="vatop tips"><?php echo $lang['news_class_add_sup_class_notice2'];?></td>
        </tr>
        --><tr>
          <td colspan="2" class="required"><label for="nc_sort">排序:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['class_array']['nc_sort'];?>" name="nc_sort" id="nc_sort" class="txt"></td>
          <td class="vatop tips">更新排序</td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15" ><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
//按钮先执行验证再提交表单
$(function(){$("#submitBtn").click(function(){
    if($("#news_class_form").valid()){
     $("#news_class_form").submit();
	}
	});
});
//
$(document).ready(function(){
	$('#news_class_form').validate({
        errorPlacement: function(error, element){
			error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        rules : {
            nc_name : {
                required : true,
                remote   : {
                url :'index.php?act=news_class&op=ajax&branch=check_class_name',
                type:'get',
                data:{
                    nc_name : function(){
                        return $('#nc_name').val();
                    },
                    nc_parent_id : function() {
                        return $('#nc_parent_id').val();
                    },
                    nc_id : '<?php echo $output['class_array']['nc_id'];?>'
                  }
                }
            },
            nc_sort : {
                number   : true
            }
        },
        messages : {
            nc_name : {
                required : '分类名称不能为空',
                remote   : '该分类名称已存在'
            },
            nc_sort  : {
                number   : '请输入有效的整数0-255'
            }
        }
    });
});
</script>
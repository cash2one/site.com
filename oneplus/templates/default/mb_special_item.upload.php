<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<div id="dialog_add_mb_special" style="display:block;">
    <form id="add_form" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="form_submit" value="ok" />
        <input type="hidden" name="special_id"  value="<?php echo $output['special_id'];?>">
        <table class="table tb-type2">
            <tr>
                <td colspan="2" class="required"><label for="up_pic">封面图片:</label></td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><span class="type-file-box">
                        <input id="textfield" class="type-file-text" type="text" name="textfield" hidefocus="true">
                        <input id="button" class="type-file-button" type="button" value="" name="button">
                        <input type="file" class="type-file-file" id="up_pic" name="up_pic" size="30" hidefocus="true" >
                    </span></td>
                <td class="vatop tips">上传图片</td>
            </tr>
             <tfoot>
                <tr>
                    <td colspan="2"><a id="submit" href="javascript:void(0)" class="btn"><span><?php echo $lang['nc_submit']; ?></span></a></td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            if ($("#add_form").valid()) {
                $("#add_form").submit();
            }
        });
    });
    //提交
    $("#submit").click(function () {
        $("#add_form").submit();
    });
    // 图片上传
    $("#up_pic").change(function () {
        $("#textfield").val($(this).val());
    });
</script> 

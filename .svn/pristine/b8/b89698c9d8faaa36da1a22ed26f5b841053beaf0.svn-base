<?php defined('InShopNC') or exit('Access Invalid!'); ?>

<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <h3><?php echo $lang['brand_index_brand']; ?></h3>
            <ul class="tab-base">
                <li><a href="index.php?act=brand&op=brand"><span><?php echo $lang['nc_manage']; ?></span></a></li>
                <li><a href="JavaScript:void(0);" class="current"><span><?php echo $lang['nc_new']; ?></span></a></li>
                <li><a href="index.php?act=brand&op=brand_apply"><span><?php echo $lang['brand_index_to_audit']; ?></span></a></li>
            </ul>
        </div>
    </div>
    <div class="fixed-empty"></div>
  <form method="post" enctype="multipart/form-data" name="form1">
        <input type="hidden" name="form_submit" value="ok" />
        <table class="table tb-type2 nobdb">
            <tbody>
                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation"><?php echo $lang['brand_index_name']; ?>:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="" name="brand_name" id="brand_name" class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>
                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation"><?php echo $lang['brand_index_country']; ?>:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="" name="brand_country" id="brand_country" class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>
                
                  <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation"><?php echo $lang['buyer_name']; ?>:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="" name="buyer_name"  class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>
                 <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation"><?php echo $lang['buyer_yuju']; ?>:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="" name="buyer_yuju"  class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>
               
                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation">名称首字母:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="" name="brand_initial" id="brand_initial" class="txt"></td>
                    <td class="vatop tips">商家发布商品快捷搜索品牌使用</td>
                </tr>
                <tr>
                    <td colspan="2" class="required"><?php echo $lang['brand_index_class']; ?>: </td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform" id="gcategory"><input type="hidden" value="" name="class_id" class="mls_id">
                        <input type="hidden" value="" name="brand_class" class="mls_name">
                        <select class="class-select">
                            <option value="0"><?php echo $lang['nc_please_choose']; ?>...</option>
                            <?php if (!empty($output['gc_list'])) { ?>
                                <?php foreach ($output['gc_list'] as $k => $v) { ?>
                                    <?php if ($v['gc_parent_id'] == 0) { ?>
                                        <option value="<?php echo $v['gc_id']; ?>"><?php echo $v['gc_name']; ?></option>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </select></td>
                    <td class="vatop tips"><?php echo $lang['brand_index_class_tips']; ?></td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><?php echo $lang['brand_index_pic_sign']; ?>: </td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><span class="type-file-show"><a class="nyroModal" rel="gal" ><img class="show_image" src="<?php echo ADMIN_TEMPLATES_URL; ?>/images/preview.png"></a>
                        </span><span class="type-file-box">
                            <input name="brand_pic" type="file" class="type-file-file" id="brand_pic" size="30" hidefocus="true">
                            <input type='text' name='textfield' id='textfield1' class='type-file-text' />
                            <input type='button' name='button' id='button1' value='' class='type-file-button' />
                        </span></td>
                    <td class="vatop tips"><?php echo $lang['brand_index_upload_tips'] . $lang['brand_add_support_type']; ?>gif,jpg,png</td>
                </tr>
                
                  <tr>
                    <td colspan="2" class="required"><?php echo $lang['brand_banner']; ?>: </td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><span class="type-file-show"><a class="nyroModal" rel="gal" ><img class="show_image" src="<?php echo ADMIN_TEMPLATES_URL; ?>/images/preview.png"></a>
                        </span><span class="type-file-box">
                            <input name="brand_banner" type="file" class="type-file-file" id="brand_banner" size="30" hidefocus="true">
                            <input type='text' name='textfield' id='textfield2' class='type-file-text' />
                            <input type='button' name='button' id='button2' value='' class='type-file-button' />
                        </span></td>
                    <td class="vatop tips"><?php echo $lang['brand_banner_tips'] . $lang['brand_add_support_type']; ?>gif,jpg,png</td>
                </tr>

            

           
            <tr>
                <td colspan="2" class="required"><?php echo$lang['brand_index_introduction']; ?>: </td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><textarea name="brand_introduction" rows="6" class="tarea" id="brand_introduction"  ></textarea></td>
            </tr>
            <tr>
                <td colspan="2" class="required">展示方式: </td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform">
                    <input id="show_type_0" type="radio" checked="checked" value="0" style="margin-bottom:6px;" name="show_type" />
                    <label for="show_type_0">图片</label>
                    <input id="show_type_1" type="radio" value="1" style="margin-bottom:6px;" name="show_type" />
                    <label for="show_type_1">文字</label>
                </td>
                <td class="vatop tips">在“全部品牌”页面的展示方式，如果设置为“图片”则显示该品牌的“品牌图片标识”，如果设置为“文字”则显示该品牌的“品牌名”</td>
            </tr>

            <tr>
                <td colspan="2" class="required"><?php echo $lang['brand_add_if_recommend']; ?>: </td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform onoff"><label for="brand_recommend1" class="cb-enable"><span><?php echo $lang['nc_yes']; ?></span></label>
                    <label for="brand_recommend0" class="cb-disable selected"><span><?php echo $lang['nc_no']; ?></span></label>
                    <input id="brand_recommend1" name="brand_recommend" <?php if ($output['brand_array']['brand_recommend'] == '1') { ?>checked="checked"<?php } ?>  value="1" type="radio">
                    <input id="brand_recommend0" name="brand_recommend" <?php if ($output['brand_array']['brand_recommend'] == '0') { ?>checked="checked"<?php } ?> value="0" type="radio"></td>
                <td class="vatop tips"><?php echo $lang['brand_index_recommend_tips']; ?></td>
            </tr>
            <tr>
                <td colspan="2" class="required"><?php echo $lang['nc_sort']; ?>: </td>
            </tr>
            <tr class="noborder">
                <td class="vatop rowform"><input type="text" value="0" name="brand_sort" id="brand_sort" class="txt"></td>
                <td class="vatop tips"><?php echo $lang['brand_add_update_sort']; ?></td>
            </tr>
            </tbody>
          <tfoot>
        <tr class="tfoot">
          <td colspan="2" ><a href="JavaScript:void(0);" class="btn" onclick="document.form1.submit()"><span><?php echo $lang['nc_submit'];?></span></a></td>
        </tr>
      </tfoot>
        </table>
    </form>
</div>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery-ui/jquery.ui.js"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/ajaxfileupload/ajaxfileupload.js"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.Jcrop/jquery.Jcrop.js"></script>
<link href="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.Jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" id="cssfile2" />
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/common_select.js" charset="utf-8"></script> 
<script type="text/javascript">
//裁剪图片后返回接收函数
    $(function() {
        $("#brand_pic").change(function() {
            $("#textfield1").val($(this).val());
        });
        $("#brand_banner").change(function() {
            $("#textfield2").val($(this).val());
        });
        $("#brand_poster").change(function() {
            $("#textfield3").val($(this).val());
        });
        $("#brand_pic1").change(function() {
            $("#textfield4").val($(this).val());
        });
// 上传图片类型
        $('input[class="type-file-file"]').change(function() {
            var filepatd = $(this).val();
            var extStart = filepatd.lastIndexOf(".");
            var ext = filepatd.substring(extStart, filepatd.lengtd).toUpperCase();
            if (ext != ".PNG" && ext != ".GIF" && ext != ".JPG" && ext != ".JPEG") {
                alert("<?php echo $lang['circle_setting_adv_img_check']; ?>");
                $(this).attr('value', '');
                return false;
            }
        });
        $('#time_zone').attr('value', '<?php echo $output['list_setting']['time_zone']; ?>');
        $('.nyroModal').nyroModal();
    });
</script>
<script type="text/javascript">


    $(function() {



        jQuery.validator.addMethod("initial", function(value, element) {
            return /^[A-Za-z0-9]$/i.test(value);
        }, "");
        $("#form1").validate({
            errorPlacement: function(error, element) {
                error.appendTo(element.parent().parent().prev().find('td:first'));
            },
            rules: {
                brand_name: {
                    required: true,
                    remote: {
                        url: 'index.php?act=brand&op=ajax&branch=check_brand_name',
                        type: 'get',
                        data: {
                            brand_name: function() {
                                return $('#brand_name').val();
                            },
                            id: ''
                        }
                    }
                },
                brand_country: {
                    required: true

                },
                brand_style: {
                    required: true

                },
                brand_introduction: {
                    required: true

                },
                
                brand_initial: {
                    initial: true
                },
                brand_sort: {
                    number: true
                }
            },
            messages: {
                brand_name: {
                    required: '<?php echo $lang['brand_add_name_null']; ?>',
                    remote: '<?php echo $lang['brand_add_name_exists']; ?>'
                },
                brand_country: {
                    required: '<?php echo $lang['brand_add_country_null']; ?>'
                },
                buyer_name: {
                    required: '<?php echo $lang['brand_add_buyer_name_null']; ?>'
                },
                brand_introduction: {
                    required: '<?php echo $lang['brand_add_introduction_null']; ?>'
                },
              
                brand_initial: {
                    initial: '请填写正确首字母',
                },
                brand_sort: {
                    number: '<?php echo $lang['brand_add_sort_int']; ?>'
                }
            }
        });
    });

    gcategoryInit('gcategory');
</script> 

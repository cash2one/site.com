<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/jquery.edit.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL; ?>/js/fileupload/jquery.fileupload.js" charset="utf-8"></script> 
<script type="text/javascript">
//按钮先执行验证再提交表单
    $(function () {
        $("#submitBtn").click(function () {
            if ($("#cms_article_add_form").valid()) {
                $("#cms_article_add_form").submit();
            }
        });
    });
//
    $(document).ready(function () {
        $('#cms_article_add_form').validate({
            errorPlacement: function (error, element) {
                error.appendTo(element.parent().parent().prev().find('td:first'));
            },
            rules: {
                article_title: {
                    required: true
                },
                article_content: {
                    required: true
                },
                article_sort: {
                    number: true
                },
                activity_start_date: {
                    required: true,
                    date: false
                },
                activity_end_date: {
                    required: true,
                    date: false
                },
            },
            messages: {
                article_title: {
                    required: '标题不能为空'
                },
                article_content: {
                    required: '内容不能为空'
                },
                article_sort: {
                    number: '排序为0-255的整数'
                },
                activity_start_date: {
                    required: '开始时间不能为空'
                },
                activity_end_date: {
                    required: '结束时间不能为空'
                },
            }
        });
        // 图片上传
        $('#fileupload').each(function () {
            $(this).fileupload({
                dataType: 'json',
                url: 'index.php?act=cms_article&op=article_pic_upload&item_id=<?php echo $output['art_detail']['article_id']; ?>',
                done: function (e, data) {
                    if (data != 'error') {
                        add_uploadedfile(data.result);
                    }
                }
            });
        });
    });
    function add_uploadedfile(file_data)
    {
        var newImg = '<li id="' + file_data.file_id + '" class="picture"><input type="hidden" name="file_id[]" value="' + file_data.file_id + '" /><div class="size-64x64"><span class="thumb"><i></i><img src="<?php echo UPLOAD_SITE_URL . '/' . ATTACH_CMS_ARTICLE . '/'; ?>' + file_data.file_name + '" alt="' + file_data.file_name + '" width="64px" height="64px"/></span></div><p><span><a href="javascript:insert_editor(\'<?php echo UPLOAD_SITE_URL . '/' . ATTACH_CMS_ARTICLE . '/'; ?>' + file_data.file_name + '\');">插入</a></span><span><a href="javascript:del_file_upload(' + file_data.file_id + ');">删除</a></span></p></li>';
        $('#thumbnails').prepend(newImg);
    }
    function insert_editor(file_path) {
        KE.appendHtml('article_content', '<img src="' + file_path + '" alt="' + file_path + '">');
    }
    function del_file_upload(file_id) {
        if (!window.confirm('确认删除')) {
            return;
        }
        $.getJSON('index.php?act=cms_article&op=img_ajax&branch=del_file_upload&file_id=' + file_id, function (result) {
            if (result) {
                $('#' + file_id).remove();
            } else {
                alert('删除失败');
            }
        });
    }
</script>

<div class="page">

    <div class="fixed-empty"></div>

    <form id="cms_article_add_form" action="<?php echo BASE_SITE_URL.DS.'/oneplus/index.php?act=goods_inspiration&op=inspirationUpdate'; ?>" method="post">
        <input type="hidden" name="form_submit" value="ok" />
        <input type="hidden" name="ref_url" value="<?php echo getReferer(); ?>" />
        <input type="hidden" name="check_id" value="<?php echo $_GET['check_id']; ?>" />
        <table class="table tb-type2">
            <tbody>
                <tr>
                    <td colspan="2"><label class="validation" for="cate_id">审核状态:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
						<select name="check_state" id="check_state">
                            <option value="2">不通过</option>
                            <option value="1">通过</option>
                        </select>
					</td>
                    <td class="vatop tips"></td>
                </tr>
   
                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation" for="article_title">备注:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"> <textarea  id="check_reply" class="textarea" name="check_reply"></textarea></td>
                    <td class="vatop tips">140个字以内</td>
                </tr>

            </tbody>
            <tfoot>
                <tr class="tfoot">
                    <td colspan="15" ><input type="submit" value="提交"/></td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>

<style>
    #goods_type{width: 90px;}
    .goods_list_tr{display:none;}
    .article_goods_ul{clear: both;}
    .article_goods_ul li{clear: both;}
    .add_goods{clear: both;}
    .add_btn{display: inline-block;width: 40px;height: 24px;line-height: 24px;border-radius: 3px;border:1px solid #ccc;vertical-align: top;text-align: center;}
    .add_btn:hover{color:#0D93BF;}
    .btn-cms-tag {
        border: 1px solid #bebebe;
        border-radius: 2px;
        color: #666666;
        cursor: pointer;
        line-height: 20px;
        margin: 5px 10px 5px 0;
        padding: 2px 6px;
    }

    .btn-cms-tag-selected {
        background-color: #1e82ef;
        border-radius: 2px;
        color: #fff;
        cursor: pointer;
        line-height: 20px;
        margin: 5px 10px 5px 0;
        padding: 3px 7px;
    }
</style>

<link type="text/css" rel="stylesheet" href="<?php echo RESOURCE_SITE_URL . "/js/jquery-ui/themes/ui-lightness/jquery.ui.css"; ?>"/>
<script src="<?php echo RESOURCE_SITE_URL . "/js/jquery-ui/jquery.ui.js"; ?>"></script> 
<script src="<?php echo RESOURCE_SITE_URL . "/js/jquery-ui/i18n/zh-CN.js"; ?>" charset="utf-8"></script> 

<script>
    $(document).ready(function () {
        //时间插件
        $("#article_start_time").datepicker({dateFormat: 'yy-mm-dd'});
        $("#article_end_time").datepicker({dateFormat: 'yy-mm-dd'});
        //添加商品 
        $('.add_btn').click(function () {
            var input_val = $(this).siblings('#article_goods_input').val();
            if (input_val.length > 0) {
                var str = "";
                str += "<li class=\"article_goods_li\">";
                str += "<input id=\"article_goods_add\" type=\"text\" name=\"article_goods_add[]\" class=\"txt w200 marginright marginbot vatop\" value=\"" + input_val + "\"><a href=\"javascript:void(0);\" class=\"del_goods\">删除</a>";
                str += "</li>";

                $('.article_goods_ul').append(str);
                $('.goods_list_tr').show();
                $(this).siblings('#article_goods_input').val("");
            } else {
                $('.add_btn').after("<span style='color:red'>&nbsp;&nbsp;&nbsp;不能为空</span>");
            }
            del_goods();
        });

        function del_goods() {
            $('.del_goods').click(function () {
                $(this).parent('.article_goods_li').remove();
            });
        }
        ;
        del_goods();

        $("#up_pic").change(function () {
            $("#textfield1").val($(this).val());
        });
        $("#up_pic1").change(function () {
            $("#textfield2").val($(this).val());
        });

        //标签操作
        $("[nctype='cms_tag']").live("click", function () {
            var current_css = $(this).attr("class");
            if (current_css == "btn-cms-tag") {
                $(this).attr("class", "btn-cms-tag-selected");
            } else {
                $(this).attr("class", "btn-cms-tag");
            }
            var cms_tag_selected = '';
            $(".btn-cms-tag-selected").each(function () {
                cms_tag_selected += $(this).attr("tag_id") + ",";
            });
            $("#article_tag").val(cms_tag_selected.substring(0, cms_tag_selected.length - 1));
        });


    });
</script>
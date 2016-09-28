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
    <div class="fixed-bar">
        <div class="item-title">
            <h3>文章管理</h3>
            <ul class="tab-base">
                <?php foreach ($output['menu'] as $menu) {
                    if ($menu['menu_type'] == 'text') { ?>
                        <li><a href="<?php echo $menu['menu_url']; ?>" class="current"><span><?php echo $menu['menu_name']; ?></span></a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $menu['menu_url']; ?>" <?php if ($menu['target'] == '_blank') echo 'target="_blank"'; ?> ><span><?php echo $menu['menu_name']; ?></span></a></li>
    <?php }
} ?>
                <li><a href="JavaScript:void(0);" class="current"><span>新增</span></a></li>
            </ul>
        </div>
    </div>
    <div class="fixed-empty"></div>

    <!-- 操作提示 -->
    <table class="table tb-type2" id="prompt">
        <tbody>
            <tr class="space odd">
                <th colspan="12" class="nobg"> <div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span> </div>
        </th>
        </tr>
        <tr>
            <td><ul>
                    <li>后台添加的文章默认是发布状态。</li>
                    <li></li>
                </ul></td>
        </tr>
        </tbody>
    </table>
    <form id="cms_article_add_form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="form_submit" value="ok" />
        <input type="hidden" name="article_id" value="<?php echo $output['art_detail']['article_id']; ?>" />
        <input type="hidden" name="ref_url" value="<?php echo getReferer(); ?>" />
        <table class="table tb-type2">
            <tbody>
                <tr>
                    <td colspan="2"><label class="validation" for="cate_id">所属分类:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><select name="article_class_id" id="article_class_id">
                            <option value="">请选择...</option>
                            <?php if (!empty($output['cms_article_class']) && is_array($output['cms_article_class'])) { ?>
                                <?php foreach ($output['cms_article_class'] as $k => $v) { ?>
                                    <option <?php if ($output['art_detail']['article_class_id'] == $v['class_id']) { ?>selected='selected'<?php } ?> value="<?php echo $v['class_id']; ?>"><?php echo $v['class_name']; ?></option>
    <?php } ?>
<?php } ?>
                        </select></td>
                    <td class="vatop tips"></td>
                </tr>
                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation" for="article_title">标题:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="<?php echo $output['art_detail']['article_title']; ?>" name="article_title" id="article_title" class="txt"></td>
                    <td class="vatop tips"></td>
                </tr>

                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation" for="article_title">摘要:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"> <textarea  id="article_abstract" class="textarea" name="article_abstract"></textarea></td>
                    <td class="vatop tips">140个字以内</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2" class="required"><label class="validation" for="article_title">关键字：</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input id="article_keyword" class="txt" name="article_keyword" type="text" value=""/></td>
                    <td class="vatop tips">输入文章关键字，多个关键字请用英文半角逗号分割，例：文章,画报,资讯,CMS。</td>
                </tr>

                <tr>
                    <td colspan="2" class="required">排序:</td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" value="<?php echo $output['art_detail']['article_sort']; ?>" name="article_sort" id="article_sort" class="txt"></td>
                    <td class="vatop tips">输入0~255数字</td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label class="validation" >开始时间:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" id="article_start_time" name="article_start_time" class="txt date" value="" /></td>
                    <td class="vatop tips"></td>
                </tr>
                <tr>
                    <td colspan="2" class="required"><label class="validation" >结束时间:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><input type="text" id="article_end_time" name="article_end_time" class="txt date" value=""/></td>
                    <td class="vatop tips"></td>
                </tr>

                <tr>
                    <td colspan="2" class="required"><label for="up_pic">封面图片:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><span class="type-file-box">
                            <input id="textfield1" class="type-file-text" type="text" name="textfield" hidefocus="true">
                            <input id="button1" class="type-file-button" type="button" value="" name="button">
                            <input type="file" class="type-file-file" id="up_pic" name="up_pic" size="30" hidefocus="true" >
                        </span></td>
                    <td class="vatop tips">上传图片</td>
                </tr>
                <tr>
                    <td colspan="2" class="required"><label for="up_pic">wap端封面图片:</label></td>
                </tr>
                <tr class="noborder">
                    <td class="vatop rowform"><span class="type-file-box">
                            <input id="textfield2" class="type-file-text" type="text" name="textfield" hidefocus="true">
                            <input id="button1" class="type-file-button" type="button" value="" name="button">
                            <input type="file" class="type-file-file" id="up_pic1" name="up_pic1" size="30" hidefocus="true" >
                        </span></td>
                    <td class="vatop tips">上传图片</td>
                </tr>
                <tr>
                    <td colspan="2" class="required"><label class="validation">内容:</label></td>
                </tr>
                <tr class="noborder">
                    <td colspan="2" class="vatop rowform"><?php showEditor('article_content', $output['art_detail']['article_content']); ?></td>
                </tr> 

                <tr class="noborder">
                    <td>作&nbsp; &nbsp; &nbsp;&nbsp;者: <input type="text" value="<?php echo $output['admin']['name']; ?>" name="article_author" id="article_author" class="text w200"></td>
                    <td class="vatop tips">默认发稿人为登录用户名，可自定义修改其他名称，长度控制在10个字内。</td>
                </tr>

                <tr class="noborder">
                    <td colspan="2">文章来源: <input id="article_origin" class="text w200" name="article_origin" type="text" value=""/></td>

                </tr>
                 <tr class="noborder">
                    <td colspan="2">店铺编号: <input id="store_id" class="text w200" name="store_id" type="text" value=""/></td>

                </tr>
                <tr class="noborder">
                    <td class="vatop rowform">
                        <span>来源地址: </span>
                        <input id="article_origin_address" class="text w200" name="article_origin_address" type="text" value=""/></td>
                    <td class="vatop tips">如转载可注明文章来源及跳转地址，默认留空为本站名称及网址。</td>
                </tr>

                <tr class="noborder goods_list_tr" >
                    <td class="vatop rowform" colspan="2">
                        商品编号：<ul class="article_goods_ul"></ul>
                    </td>
                </tr>
                <tr class="noborder" >
                    <td class="vatop rowform" colspan="2">
                        <span class="add_goods">
                            商品编号：<input id="article_goods_input" type="text" name="article_goods_input" class="txt w200 marginright marginbot vatop" value=""><a href="javascript:;" class="add_btn">添加</a>
                        </span>
                        <span style="color: #999;margin-left:20px;">输入商品编号，不能为空；点击添加或删除后必须提交。</span>
                    </td>
                </tr>

                
                <!-- <tr class="noborder">
                    <td class="vatop rowform" colspan="2">
                        标&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;签：<?php if (!empty($output['tag_list']) && is_array($output['tag_list'])) { ?>
                    <?php $tag_selected = explode(',', $output['art_detail']['article_tag']); ?>
                    <?php foreach ($output['tag_list'] as $value) { ?>
                                      <a nctype="cms_tag" class="<?php echo in_array($value['tag_id'], $tag_selected) ? 'btn-cms-tag-selected' : 'btn-cms-tag'; ?>" tag_id="<?php echo $value['tag_id']; ?>"><?php echo $value['tag_name']; ?></a>
    <?php } ?>
<?php } ?>
                        <input id="article_tag" name="article_tag" type="hidden" value="<?php if (!empty($output['art_detail'])) echo $output['art_detail']['article_tag']; ?>"/>
                        <span style="color: #999;margin-left:20px;">添加标签</span>
                    </td>
                </tr> -->

            </tbody>
            <tfoot>
                <tr class="tfoot">
                    <td colspan="15" ><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span>提交</span></a></td>
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
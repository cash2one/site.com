<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>新闻管理</h3>
      <ul class="tab-base">
        <li><a href="index.php?act=news&op=news"><span>管理</span></a></li>
        <li><a href="index.php?act=news&op=news_add"><span>新增</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>编辑</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="news_form" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="news_id" value="<?php echo $output['news_array']['news_id'];?>" />
    <input type="hidden" name="ref_url" value="<?php echo getReferer();?>" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="news_title">标题:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['news_array']['news_title'];?>" name="news_title" id="news_title" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label class="validation" for="cate_id">所属分类:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <select name="nc_id" id="nc_id">
              <option value="">请选择...</option>
              <?php if(!empty($output['parent_list']) && is_array($output['parent_list'])){ ?>
              <?php foreach($output['parent_list'] as $k => $v){ ?>
              <option <?php if($output['news_array']['nc_id'] == $v['nc_id']){ ?>selected='selected'<?php } ?> value="<?php echo $v['nc_id'];?>"><?php echo $v['nc_name'];?></option>
              <?php } ?>
              <?php } ?>
            </select></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="news_url">链接:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['news_array']['news_url'];?>" name="news_url" id="news_url" class="txt"></td>
          <td class="vatop tips">当填写"链接"后点击文章标题将直接跳转至链接地址，不显示文章内容。链接格式请以http://开头</td>
        </tr>
        <tr>

        <tr>
          <td colspan="2" class="required"><label for="newsForm">视频链接:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['news_array']['vedio_url'];?>" name="vedio_url" id="vedio_url" class="txt"></td>
          <td class="vatop tips">填写视频地址</td>
        </tr>

          <td colspan="2" class="required"><label for="if_show">是否显示:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform onoff"><label for="news_show1" class="cb-enable <?php if($output['news_array']['news_show'] == '1'){ ?>selected<?php } ?>" ><span>是</span></label>
            <label for="news_show0" class="cb-disable <?php if($output['news_array']['news_show'] == '0'){ ?>selected<?php } ?>" ><span>否</span></label>
            <input id="news_show1" name="news_show" <?php if($output['news_array']['news_show'] == '1'){ ?>checked="checked"<?php } ?>  value="1" type="radio">
            <input id="news_show0" name="news_show" <?php if($output['news_array']['news_show'] == '0'){ ?>checked="checked"<?php } ?> value="0" type="radio"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required">排序:</td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $output['news_array']['news_sort'];?>" name="news_sort" id="news_sort" class="txt"></td>
          <td class="vatop tips">请输入有效的整数0-255</td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label class="validation">新闻内容:</label></td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="vatop rowform"><?php showEditor('news_content',$output['news_array']['news_content']);?></td>
        </tr>
        <tr>
          <td colspan="2" class="required">图片上传:</td>
        </tr>
        <tr class="noborder">
          <td colspan="3" id="divComUploadContainer"><input type="file" multiple="multiple" id="fileupload" name="fileupload" /></td>
        </tr>
        <tr>
          <td colspan="2" class="required">已传图片:</td>
        </tr>
        <tr class="noborder">
          <td colspan="2"><ul id="thumbnails" class="thumblists">
              <?php if(is_array($output['file_upload'])){?>
              <?php foreach($output['file_upload'] as $k => $v){ ?>
              <li id="<?php echo $v['upload_id'];?>" class="picture" >
                <input type="hidden" name="file_id[]" value="<?php echo $v['upload_id'];?>" />
                <div class="size-64x64"><span class="thumb"><i></i><img src="<?php echo $v['upload_path'];?>" alt="<?php echo $v['file_name'];?>" onload="javascript:DrawImage(this,64,64);"/></span></div>
                <p><span><a href="javascript:insert_editor('<?php echo $v['upload_path'];?>');">插入</a></span><span><a href="javascript:del_file_upload('<?php echo $v['upload_id'];?>');">删除</a></span></p>
              </li>
              <?php } ?>
              <?php } ?>
            </ul></td>
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
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/fileupload/jquery.fileupload.js" charset="utf-8"></script> 
<script>
//按钮先执行验证再提交表单
$(function(){$("#submitBtn").click(function(){
    if($("#news_form").valid()){
     $("#news_form").submit();
	}
	});
});
//
$(document).ready(function(){
	$('#news_form').validate({
        errorPlacement: function(error, element){
			error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        rules : {
            news_title : {
                required   : true
            },
			nc_id : {
                required   : true
            },
			news_url : {
				url : true
            },
			news_content : {
                required   : true
            },
            news_sort : {
                number   : true
            }
        },
        messages : {
            news_title : {
                required   : '新闻标题不能为空'
            },
			nc_id : {
                required   : '新闻分类不能为空'
            },
			news_url : {
				url : '链接错误'
            },
			news_content : {
                required   : '新闻内容不能为空'
            },
            news_sort  : {
                number   : '请输入有效的整数'
            }
        }
    });
    // 图片上传
    $('#fileupload').each(function(){
        $(this).fileupload({
            dataType: 'json',
            url: 'index.php?act=news&op=news_pic_upload&item_id=<?php echo $output['news_array']['news_id'];?>',
            done: function (e,data) {
                if(data != 'error'){
                	add_uploadedfile(data.result);
                }
            }
        });
    });
});
function add_uploadedfile(file_data)
{
	var newImg = '<li id="' + file_data.file_id + '" class="picture"><input type="hidden" name="file_id[]" value="' + file_data.file_id + '" /><div class="size-64x64"><span class="thumb"><i></i><img src="<?php echo UPLOAD_SITE_URL.'/'.ATTACH_NEWS.'/';?>' + file_data.file_name + '" alt="' + file_data.file_name + '" width="64px" height="64px"/></span></div><p><span><a href="javascript:insert_editor(\'<?php echo UPLOAD_SITE_URL.'/'.ATTACH_NEWS.'/';?>' + file_data.file_name + '\');">插入</a></span><span><a href="javascript:del_file_upload(' + file_data.file_id + ');">删除</a></span></p></li>';
    $('#thumbnails').prepend(newImg);
}
function insert_editor(file_path){
	KE.appendHtml('news_content', '<img src="'+ file_path + '" alt="'+ file_path + '">');
}
function del_file_upload(file_id)
{
    if(!window.confirm('确认删除')){
        return;
    }
    $.getJSON('index.php?act=news&op=ajax&branch=del_file_upload&file_id=' + file_id, function(result){
        if(result){
            $('#' + file_id).remove();
        }else{
            alert('删除失败');
        }
    });
}
</script>
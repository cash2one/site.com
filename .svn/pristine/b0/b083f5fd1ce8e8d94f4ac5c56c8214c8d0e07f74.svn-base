<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>新闻管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="index.php?act=news&op=news_add" ><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch" id="formSearch">
    <input type="hidden" value="news" name="act">
    <input type="hidden" value="news" name="op">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <th><label for="search_title">标题</label></th>
          <td><input type="text" value="<?php echo $output['search_title'];?>" name="search_title" id="search_title" class="txt"></td>
          <th><label for="search_nc_id">新闻分类</label></th>
          <td><select name="search_nc_id" id="search_nc_id" class="">
              <option value="">请选择...</option>
              <?php if(!empty($output['parent_list']) && is_array($output['parent_list'])){ ?>
              <?php foreach($output['parent_list'] as $k => $v){ ?>
                <option <?php if($output['search_nc_id'] == $v['nc_id']){ ?>selected='selected'<?php } ?> value="<?php echo $v['nc_id'];?>"><?php echo $v['nc_name'];?></option>
              <?php } ?>
              <?php } ?>
            </select></td>
          <td><a href="javascript:document.formSearch.submit();" class="btn-search " title="查询">&nbsp;</a>
            <?php if($output['search_title'] != '' or $output['search_nc_id'] != ''){?>
            <a href="index.php?act=news&op=news" class="btns " title="取消查询"><span>取消查询</span></a>
            <?php }?>
            
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span></div></th>
      </tr>
      <tr>
        <td><ul>
            <li>新闻</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form method="post" id="form_news">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th class="w24"></th>
          <th class="w48">排序</th>
          <th>标题</th>
          <th>分类</th>
          <th class="align-center">是否显示</th>
          <th class="align-center">添加时间</th>
          <th class="w60 align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($output['news_list']) && is_array($output['news_list'])){ ?>
        <?php foreach($output['news_list'] as $k => $v){ ?>
        <tr class="hover">
          <td><input type="checkbox" name='del_id[]' value="<?php echo $v['news_id']; ?>" class="checkitem"></td>
          <td><?php echo $v['news_sort']; ?></td>
          <td><?php echo $v['news_title']; ?></td>
          <td><?php echo $v['nc_name']; ?></td>
          <td class="align-center"><?php if($v['news_show'] == '0'){echo '否';}else{echo '是';} ?></td>
          <td class="nowrap align-center"><?php echo $v['news_time']; ?></td>
          <td class="align-center"><a href="index.php?act=news&op=news_edit&news_id=<?php echo $v['news_id']; ?>">编辑</a></td>
        </tr>
        <?php } ?>
        <?php }else { ?>
        <tr class="no_data">
          <td colspan="10">没有数据</td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <?php if(!empty($output['news_list']) && is_array($output['news_list'])){ ?>
        <tr class="tfoot">
          <td><input type="checkbox" class="checkall" id="checkallBottom"></td>
          <td colspan="16"><label for="checkallBottom">全选</label>
            &nbsp;&nbsp;<a href="JavaScript:void(0);" class="btn" onclick="if(confirm('确认删除')){$('#form_news').submit();}"><span>删除</span></a>
            <div class="pagination"> <?php echo $output['page'];?> </div></td>
        </tr>
        <?php } ?>
      </tfoot>
    </table>
  </form>
</div>

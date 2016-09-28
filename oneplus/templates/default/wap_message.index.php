<?php defined('InShopNC') or exit('Access Invalid!');?>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['feedback_mange_title'];?></h3>
    </div>
  </div>
<div class="fixed-empty"></div>
<table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title">
            <h5><?php echo $lang['nc_prompts'];?></h5>
            <span class="arrow"></span></div></th>
      </tr>
      <tr>
        <td><ul>
            <li>来自用户的反馈</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form method='post' id="form_link">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2 nobdb">
      <thead>
        <tr class="thead">
          <th><?php echo $lang['feedback_index_content'];?></th>
          <th>用户名</th>
          <th><?php echo $lang['feedback_index_time'];?></th>
          <th>回复状态</th>
          <th class="align-center"><?php echo $lang['nc_handle'];?></th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($output['list']) && is_array($output['list'])){ ?>
        <?php foreach($output['list'] as $k => $v){ ?>
        <tr class="hover edit">
          <td width="705px"><?php echo $output['list'][$k]['content'];?></td>
          <td><?php echo $v['member_name'];?></td>
          <td><?php echo date('Y-m-d H:i:s', $v['ftime']);?></td>
          <td><?php if ($output['list'][0]['feedback_state']==0){?>未回复 <?php }else { ?>已回复 <?php }?></td>
                   <td>
            <a href="<?php echo urlAdmin('wap_message', 'edit', array('member_id' => $v['member_id']));?>">回复</a> 
          </td>
        </tr>
        <?php } ?>
        <?php }else { ?>
        <tr class="no_data">
          <td colspan="10"><?php echo $lang['nc_no_record'];?></td>
        </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <?php if(!empty($output['list']) && is_array($output['list'])){ ?>
        <tr class="tfoot" id="dataFuncs">
          <td><input type="checkbox" class="checkall" id="checkallBottom"></td>
          <td colspan="16" id="batchAction">
            <div class="pagination"> <?php echo $output['page'];?> </div></td>
        </tr>
      </tfoot>
      <?php } ?>
    </table>
  </form>
</div>
<form id="edit_form" method="post" action="<?php echo urlAdmin('wap_message', 'edit');?>">
    <input id="member_id" name="member_id" type="hidden">
</form>
<script type="text/javascript">
    function submit_edit_batch(){
        /* 获取选中的项 */
        var items = '';
        $('.checkitem:checked').each(function(){
            items += this.value + ',';
        });
        if(items != '') {
            items = items.substr(0, (items.length - 1));
            submit_edit(items);
        }  
        else {
            alert('<?php echo $lang['nc_please_select_item'];?>');
        }
    }
    function submit_edit(id){
        if(confirm('<?php echo $lang['nc_ensure_del'];?>')) {
            $('#member_id').val(id);
            $('#edit_form').submit();
        }
    }

    $(document).ready(function(){
        $('#btn_edit_batch').on('click', function() {
            submit_edit_batch();
        });

        $('#btn_edit').on('click', function() {
            submit_edit($(this).attr('data-id'));
        });
    });
</script>

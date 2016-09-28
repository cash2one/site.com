<?php defined('InShopNC') or exit('Access Invalid!'); ?>
<body>
    <div class="duihuakuang">
        <div class="tack-main">
            <span class="date"><?php date($output['list']['ftime']); ?></span>

            <ul>
                <?php if (!empty($output['list']) && is_array($output['list'])) { ?>
                    <?php for ($i = count($output['list']); $i >= 0; $i--) { ?>
                        <?php if ($output['list'][$i]['is_admin'] == 1) { ?>
                           

                                <li>
                            <div class="isme">
                                    <div class="isme-pic"><img src="<?php echo $output['list'][$i]['member_avatar'] ?>" alt=""/></div>
                                    <div class="send">
                                        <div class="arrow"></div>
                                        <i><?php echo $output['list'][$i]['content']; ?></i>
                                    </div>
                                    <div class="clearb"></div>
                            </div>

                            </li>
                        <?php } else { ?>
                            <li>
                                <div class="is-cse">
                                    <div class="isme-pic"><img src="<?php echo $output['list'][$i]['member_avatar'] ?>" alt=""/></div>
                                    <div class="send">
                                        <div class="arrow-left"></div>
                                        <i><?php echo $output['list'][$i]['content']; ?></i>
                                    </div>
                                    <div class="clearb"></div>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                </ul>

                <tr class="no_data">
                    <td colspan="10"><?php echo $lang['nc_no_record']; ?></td>
                </tr>
            <?php } ?>    

        </div>
        <form id="reply_form" method="post" name="reply_form">
            <input type="hidden" name="form_submit" value="ok" />
            <div class="shurukuang">
                <span><input type="text" placeholder="回复" name='content'/></span>
                <span id="submitBtn">发送</span>

            </div>
        </form>
    </div>
</body>
<!--<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['feedback_mange_title']; ?></h3>
    </div>
  </div>
<div class="fixed-empty"></div>

  <form method='post' id="form_link">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2 nobdb">
      <thead>
        <tr class="thead">
          <th>&nbsp;</th>
          <th><?php echo $lang['feedback_index_content']; ?></th>
          <th>用户名</th>
          <th><?php echo $lang['feedback_index_time']; ?></th>
        </tr>
      </thead>
       <div class="tack-main">
      <tbody>
<?php if (!empty($output['list']) && is_array($output['list'])) { ?>
    <?php foreach ($output['list'] as $k => $v) { ?>
                <tr class="hover edit">
                  <td class="w24"><input type="checkbox" name="del_id[]" value="<?php echo $v['member_id']; ?>" class="checkitem"></td>
                  <td width="705px"><?php echo $v['content']; ?></td>
                  <td><?php echo $v['member_name']; ?></td>
                  <td><?php echo date('Y-m-d H:i:s', $v['ftime']); ?></td>
                </tr>
    <?php } ?>
            
<?php } else { ?>
            <tr class="no_data">
              <td colspan="10"><?php echo $lang['nc_no_record']; ?></td>
            </tr>
<?php } ?>
      </tbody>
       </div>
      <tfoot>
<?php if (!empty($output['list']) && is_array($output['list'])) { ?>
            <tr class="tfoot" id="dataFuncs">
              <td><input type="checkbox" class="checkall" id="checkallBottom"></td>
              <td colspan="16" id="batchAction">
              
                <div class="pagination"> <?php echo $output['page']; ?> </div></td>
            </tr>
          </tfoot>
<?php } ?>
    </table>
  </form>
<div class="shurukuang">
<form id="reply_form" method="post" name="reply_form">
     <input type="hidden" name="form_submit" value="ok" />
<table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title">
            <h5><?php echo $lang['nc_prompts']; ?></h5>
            <span class="arrow"></span></div></th>
      </tr>
      <tr>  
        <td><ul>
            <li>来自用户的反馈</li>
          </ul></td>
      </tr>
        <tr>
          <td colspan="2" class="required">回复: </td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea name="content" class="tarea" rows="6"></textarea></td>
          <td class="vatop tips">不能超过255个字符。</td>
        </tr>
    </tbody>
         <tfoot>
        <tr class="tfoot">
          <td colspan="15" ><a href="JavaScript:void(0);" class="btn" id="submitBtn"><span><?php echo $lang['nc_submit']; ?></span></a></td>
        </tr>
      </tfoot>
  </table>
</form>-->

</div>
<link id="cssfile2" type="text/css" rel="stylesheet" href="<?php echo ADMIN_SITE_URL; ?>/templates/default/css/duihuakuang.css">
<script type="text/javascript">
    function submit_delete_batch() {
        /* 获取选中的项 */
        var items = '';
        $('.checkitem:checked').each(function () {
            items += this.value + ',';
        });
        if (items != '') {
            items = items.substr(0, (items.length - 1));
            submit_delete(items);
        }
        else {
            alert('<?php echo $lang['nc_please_select_item']; ?>');
        }
    }
    function submit_delete(id) {
        if (confirm('<?php echo $lang['nc_ensure_del']; ?>')) {
            $('#feedback_id').val(id);
            $('#delete_form').submit();
        }
    }

    $(document).ready(function () {
        $('#btn_delete_batch').on('click', function () {
            submit_delete_batch();
        });

        $('#btn_delete').on('click', function () {
            submit_delete($(this).attr('data-id'));
        });
    });
</script>
<script>
    $(function () {
        //按钮先执行验证再提交表单
        $("#submitBtn").click(function () {
            if ($("#reply_form").valid()) {
                $("#reply_form").submit();
            }
        });
        $("#reply_form").validate({
            errorPlacement: function (error, element) {
                error.appendTo(element.parent().parent().prev().find('td:first'));
            },
            rules: {
                reply_content: {
                    required: true,
                    maxlength: 255
                }
            },
            messages: {
                reply_content: {
                    required: '请填写回复内容',
                    maxlength: '回复内容不能超过255个字符'
                }
            }
        });
    });
</script>

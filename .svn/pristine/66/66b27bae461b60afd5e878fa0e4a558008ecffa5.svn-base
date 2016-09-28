<?php defined('InShopNC') or exit('Access Invalid!');?>

<div class="wrap">
  <div class="tabmenu">
    <?php include template('layout/submenu');?>
  </div>
  <?php if ($output['setting_config']['wx_isuse'] == 1){?>
  <div class="ncm-bind">
    <?php if (!empty($output['member_info']['wx_unionid'])){?>
    <div class="alert">
      <h4>提示信息：</h4>
      <ul>
        <li><?php echo $lang['member_wxconnect_binding_tip_1'];?><em>“<?php echo $_SESSION['member_name'];?>”</em><?php echo $lang['member_wxconnect_binding_tip_2'];?><em>“<?php echo $output['member_info']['wx_infoarr']['nickname'];?>”</em><?php echo $lang['member_wxconnect_binding_tip_3'];?></li>
        <li><?php echo $lang['member_wxconnect_modpw_tip_1']; ?><em>“<?php echo $_SESSION['member_name']; ?>”</em><?php echo $lang['member_wxconnect_modpw_tip_2'];?></li>
      </ul>
    </div>
    <input type="hidden" name="form_submit" value="ok"  />
    <div class="relieve">
      <form method="post" id="editbind_form" name="editbind_form" action="index.php?act=member_connect&op=wxunbind">
        <input type='hidden' id="is_editpw" name="is_editpw" value='no'/>
        <div class="ico-qq"></div>
        <p><?php echo $lang['member_wxconnect_unbind_click']; ?></p>
        <div class="bottom">
          <label class="submit-border">
            <input class="submit" type="submit" value="<?php echo $lang['member_wxconnect_unbind_submit'];?>" />
          </label>
        </div>
      </form>
    </div>
    <div class="revise ncm-default-form ">
      <form method="post" id="editpw_form" name="editpw_form" action="index.php?act=member_connect&op=wxunbind">
        <input type='hidden' id="is_editpw" name="is_editpw" value='yes'/>
        <dl>
          <dt><?php echo $lang['member_wxconnect_modpw_newpw'].$lang['nc_colon']; ?></dt>
          <dd>
            <input type="password"  name="new_password" id="new_password"/>
            <label for="new_password" generated="true" class="error"></label>
          </dd>
        </dl>
        <dl>
          <dt><?php echo $lang['member_wxconnect_modpw_two_password'].$lang['nc_colon']; ?></dt>
          <dd>
            <input type="password"  name="confirm_password" id="confirm_password" />
            <label for="confirm_password" generated="true" class="error"></label>
          </dd>
        </dl>
        <dl class="bottom">
          <dt></dt>
          <dd>
            <label class="submit-border">
              <input class="submit" type="submit" value="<?php echo $lang['member_wxconnect_unbind_updatepw_submit'];?>" />
            </label>
          </dd>
        </dl>
      </form>
    </div>
    <?php } else {?>
    <div class="relieve pt50">
      <p class="ico"><a href="javascript:void(0);" style="display:inline-block;padding:4px 10px;text-indent:20px;background: #4ea335 url(<?php echo SHOP_TEMPLATES_URL;?>/images/weixin.png) no-repeat 4px center;border-radius:5px;color:#fff;">微信绑定</a></p>
      <p class="hint"><?php echo $lang['member_wxconnect_binding_click']; ?></p>
    </div>
    <div class="revise pt50">
      <p class="qq"><?php echo $lang['member_wxconnect_binding_goodtip_1']; ?></p>
      <p><?php echo $lang['member_wxconnect_binding_goodtip_2']; ?></p>
      <p class="hint"><?php echo $lang['member_wxconnect_binding_goodtip_3']; ?></p>
    </div>
    <?php }?>
  </div>
  <?php } else {?>
  <div class="warning-option"><i>&nbsp;</i><span><?php echo $lang['member_wxconnect_unavailable'];?></span></div>
  <?php }?>
</div>

    <div class="wx_window">
        <div class="wx_tit"><h1>微信账号登录</h1><span class="wx_close"></span></div>
        <div class="nc-login-content tc" id="login_container"></div>
    </div>
    

<style>
    #wx_btn{padding:0 5px;height:26px;line-height: 28px;text-indent: 30px;background: #eee url(<?php echo SHOP_TEMPLATES_URL;?>/images/wx_login.png)no-repeat 5px center;display: inline-block;border-radius: 3px;position: absolute;margin-left:5px;border:1px solid #ccc;}
    
    .wx_window{width: 400px;display:none;position: absolute;top: 150px;left: 40%;background: #D8D8D8 ;}
    .wx_window .wx_tit h1{font-size: 20px;line-height: 40px;font-weight: bold;text-indent: 1em;margin-bottom: 10px;position: relative;}
    .wx_window .wx_tit .wx_close{position: absolute;right:3px;top: 4px;cursor:pointer;width: 20px;height: 20px;border-radius: 10px;background: url(<?php echo SHOP_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;display: block;}
    .wx_window .wx_tit .wx_close:hover{background: #F71F07 url(<?php echo SHOP_TEMPLATES_URL;?>/images/appbar-hide.png) no-repeat center center;}
</style>
<script type="text/javascript">

/*微信登陆弹出*/
$('.ico').click(function(){
    $('.wx_window').fadeIn('slow');
});
$('.wx_close').click(function(){
    $('.wx_window').fadeOut('slow');
});


$(function(){
	$("#unbind").hide();

    $('#editpw_form').validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('td').next('td');
            error_td.find('.field_notice').hide();
            error_td.append(error);
        },
        rules : {
            new_password : {
                required   : true,
                minlength  : 6,
                maxlength  : 20
            },
            confirm_password : {
                required   : true,
                equalTo    : '#new_password'
            }
        },
        messages : {
            new_password  : {
                required   : '<i class="icon-exclamation-sign"></i><?php echo $lang['member_wxconnect_new_password_null'];?>',
                minlength  : '<i class="icon-exclamation-sign"></i><?php echo $lang['member_wxconnect_password_range'];?>'
            },
            confirm_password : {
                required   : '<i class="icon-exclamation-sign"></i><?php echo $lang['member_wxconnect_ensure_password_null'];?>',
                equalTo    : '<i class="icon-exclamation-sign"></i><?php echo $lang['member_wxconnect_input_two_password_again'];?>'
            }
        }
    });
});
function showunbind(){
	$("#unbind").show();
}
function showpw(){
	$("#is_editpw").val('yes');
	$("#editbinddiv").hide();
	$("#editpwul").show();
}
</script>

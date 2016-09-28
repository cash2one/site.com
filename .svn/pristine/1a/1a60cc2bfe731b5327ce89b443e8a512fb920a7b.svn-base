<?php defined('InShopNC') or exit('Access Invalid!');?>

<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/js/jquery-2.1.4.min.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />
<style type="text/css">
#fixedNavBar { filter:progid:DXImageTransform.Microsoft.gradient(enabled='true',startColorstr='#CCFFFFFF', endColorstr='#CCFFFFFF');background:rgba(255,255,255,0.8); width: 90px; margin-left: 510px; border-radius: 4px; position: fixed; z-index: 999; top: 172px; left: 50%;}
#fixedNavBar h3 { font-size: 12px; line-height: 24px; text-align: center; margin-top: 4px;}
#fixedNavBar ul { width: 80px; margin: 0 auto 5px auto;}
#fixedNavBar li { margin-top: 5px;}
#fixedNavBar li a { font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px; background-color: #F5F5F5; color: #999; text-align: center; display: block;  height: 20px; border-radius: 10px;}
#fixedNavBar li a:hover { color: #FFF; text-decoration: none; background-color: #27a9e3;}
</style>

<div class="item-publish">
  <form method="post" id="goods_form" action="<?php echo BASE_SITE_URL; ?>/index.php?act=store_inspiration&op=add_inspiration_goods" onsubmit="return checkSubmit()">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="ref_url" value="<?php echo $_GET['ref_url'] ? $_GET['ref_url'] : getReferer();?>" />
    <input type="hidden" name="personal_id" value="<?php echo$output['micro_personal']['personal_id'] ? $output['micro_personal']['personal_id'] : 0;?>" />
    <div class="ncsc-form-goods">
      <h3 id="demo1">瞬间认领</h3>
	  <dl>
        <dt>瞬间图片</dt>
        <dd>
          <div class="ncsc-goods-default-pic">
            <div class="goodspic-uplaod">
              <div class="upload-thumb"> <img nctype="goods_image" src="<?php echo $output['micro_personal']['commend_image'];;?>"/> </div>
            </div>
          </div>
        </dd>
      </dl>
	  <dl>
		<dt>瞬间描述：</dt>
		<dd id="gcategory"> 
			<?php echo $output['micro_personal']['commend_message'];?> 
		</dd>
	  </dl>
	  <dl>
		<dt>发布人：</dt>
		<dd id="gcategory"> 
			<?php echo $output['micro_personal']['member_name'];?> 
		</dd>
	  </dl>
	  <dl>
		<dt><i class="required">*</i>对应平台商品链接</dt>
		<dd>
		  <input id="check_goods_url" name="goods_url" type="text" class="text w400" value="" />
		  <span></span>
		  <p class="hint" style="color:red" id="err_goods_url"></p>
		</dd>
	  </dl>

    </div>  
    <div class="bottom tc hr32">
      <label class="submit-border">
        <input type="submit" class="submit" value="提交审核" />
      </label>
    </div>
  </form>
  <script type="text/javascript">
	function checkSubmit() {
		
		var check_goods_url = $('#check_goods_url').val();
		if(check_goods_url == null || check_goods_url == '') {
			
			$('#err_goods_url').text('商品链接不能为空');
			return false;
			
		}

		return true;

	}
	

  </script>
</div>
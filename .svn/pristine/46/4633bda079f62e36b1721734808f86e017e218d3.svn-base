<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_point.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_login.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/css/wanbishuang.css" rel="stylesheet" type="text/css" />
<div class="ncp-container">
  <div class="ncp-base-layout">
    <div class="ncp-member-left">
      <?php if($_SESSION['is_login'] == '1'){?>
      <?php include_once BASE_TPL_PATH.'/home/pointshop.minfo.php'; ?>
      <?php } else { ?>
      <div class="ncp-not-login">
        <div class="member"><a href="javascript:login_dialog();">立即登录</a>
          <p>获知会员信息详情</p>
        </div>
        <div class="function" style="border: none;">
        <i class="voucher"></i>
          <dl>
            <dt>店铺代金券</dt>
            <dd>换取店铺代金券购买商品更划算</dd>
          </dl>
        </div>
        <div class="function">
        <i class="exchange"></i>
          <dl>
            <dt>积分兑换礼品</dt>
            <dd>可使用积分兑换商城超值礼品</dd>
          </dl>
        </div>
        <div class="button"> <a href="javascript:login_dialog();" class="ncp-btn" style="width:120px;"><?php echo $lang['pointprod_list_hello_login']; ?></a> </div>
      </div>
      <?php }?>
    </div>
    <div class="ncp-banner-right"><?php echo loadadv(35,'html');?></div>
  </div>
    <br/>
    <div id="ubhl_wrap">
		<div id="ubhl_header">
					<div class="youbihuanli_20130819">
					<a href="index.php?act=member_points" target="_brank"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/images/u_gift_header_img.jpg" alt="玩币换礼" /></a>
					
		

	</div>

		</div>

  <?php if (C('voucher_allow')==1){?>
  <div class="ncp-main-layout">
    <div class="title">
      <h3><i class="voucher"></i>热门代金券</h3>
      <span class="more"><a href="<?php echo urlShop('pointvoucher', 'index');?>"><?php echo $lang['home_voucher_moretitle'];?></a></span> </div>
    <?php if (!empty($output['recommend_voucher'])){?>
    <ul class="ncp-voucher-list">
      <?php foreach ($output['recommend_voucher'] as $k=>$v){?>
      <li>
        <div class="ncp-voucher">
          <div class="cut"></div>
          <div class="info"><a href="<?php echo urlShop('show_store', 'index', array('store_id'=>$v['voucher_t_store_id']));?>" class="store"><?php echo $v['voucher_t_storename'];?></a>
            <p class="store-classify"><?php echo $v['voucher_t_sc_name'];?></p>
            <div class="pic"><img src="<?php echo $v['voucher_t_customimg'];?>" onerror="this.src='<?php echo UPLOAD_SITE_URL.DS.defaultGoodsImage(240);?>'"/></div>
          </div>
          <dl class="value">
            <dt><?php echo $lang['currency'];?><em><?php echo $v['voucher_t_price'];?></em></dt>
            <dd>购物满<?php echo $v['voucher_t_limit'];?>元可用</dd>
            <dd class="time">有效期至<?php echo @date('Y-m-d',$v['voucher_t_end_date']);?></dd>
          </dl>
          <div class="point">
            <p class="required">需<em><?php echo $v['voucher_t_points'];?></em>积分</p>
            <p><em><?php echo $v['voucher_t_giveout'];?></em>人已兑换</p>
          </div>
          <div class="button"><a target="_blank" href="javascript:void(0);" nc_type="exchangebtn" data-param='{"vid":"<?php echo $v['voucher_t_id'];?>"}' class="ncp-btn ncp-btn-red">立即兑换</a></div>
        </div>
      </li>
      <?php }?>
    </ul>
    <?php }else{?>
    <div class="norecord"><?php echo $lang['home_voucher_list_null'];?></div>
    <?php }?>
  </div>
  <?php }?>
  <?php if (C('pointprod_isuse')==1){?>
  <div class="ncp-main-layout mb30">
    <div class="title">
      <h3><i class="exchange"></i>热门礼品</h3>
      <span class="more"><a href="<?php echo urlShop('pointprod', 'plist');?>"><?php echo $lang['pointprod_list_more'];?></a></span> </div>
    <?php if (is_array($output['recommend_pointsprod']) && count($output['recommend_pointsprod'])>0){?>
    <ul class="ncp-exchange-list">
      <?php foreach ($output['recommend_pointsprod'] as $k=>$v){?>
      <li>
        <div class="gift-pic"><a target="_blank" href="<?php echo urlShop('pointprod', 'pinfo', array('id' => $v['pgoods_id']));?>"> <img src="<?php echo $v['pgoods_image'] ?>" alt="<?php echo $v['pgoods_name']; ?>" /> </a></div>
        <div class="gift-name"><a href="<?php echo urlShop('pointprod', 'pinfo', array('id' => $v['pgoods_id']));?>" target="_blank" tile="<?php echo $v['pgoods_name']; ?>"><?php echo $v['pgoods_name']; ?></a></div>
        <div class="exchange-rule">
          <?php if (intval($v['pgoods_limitmgrade']) > 0){ ?>
          <span class="pgoods-grade"><?php echo $v['pgoods_limitgradename']; ?></span>
          <?php } ?>
          <span class="pgoods-price"><?php echo $lang['pointprod_goodsprice'].$lang['nc_colon']; ?><em><?php echo $lang['currency'].$v['pgoods_price']; ?></em></span> <span class="pgoods-points"><?php echo $lang['pointprod_pointsname'].$lang['nc_colon'];?><strong><?php echo $v['pgoods_points']; ?></strong><?php echo $lang['points_unit']; ?></span> </div>
      </li>
      <?php } ?>
    </ul>
    <?php }else{?>
    <div class="norecord"><?php echo $lang['pointprod_list_null'];?></div>
    <?php }?>
  </div>
  <?php }?>
    	<div id="ubhl_botm">
            <p style="font-size: 18px;">玩币费用标准</p>
			<p>玩币是玩艺用户在玩艺网站（www.wantease.com）因购物、评价、晒单等活动获得的优惠，是一种增加用户黏性的营销工具。客户因购买、评价（含晒单）第三方卖家商品所获得的优惠，优惠成本由第三方卖家承担，2015年12月05日起，此成本将体现在结算单/日账单中的“玩币”费用项中。
 <br />
	1 1、基础返币规则：
 
购物返币：单件商品（SKU维度）优惠后金额大于等于50元，才可参加购物返币。返玩币比例 “PC\ PAD\M\手Q”端为优惠后金额×0.1%，APP端翻倍。
表1 PC+PAD+M版+手Q 玩艺APP
优惠后金额≥50 0.1% 0.2%
优惠后金额<50 — —
特别说明：“优惠后金额“是指用户实际以现金/银行卡/支付宝/余额方式支付的金额。
评价（含晒单）返币：商品京东价大于等于20元的商品，客户评价（含晒单）才可能获得玩币，是否获得及获得多少还和评价字数及是否晒图有关，具体如下：
表2 图片张数=0 图片张数>0
　 字数<10 字数≥10 字数<10 字数≥10
20≤玩艺价<100 0 10 10 20
玩艺价≥100 0 20 20 40<br />
	2、多倍返币设置：
针对“购物返币”，第三方卖家可登陆商家后台（www.wantese.com），在“我的店铺—店铺管理—返币比例设置”分品类提高返币比例，或/及调低返币门槛：
返币比例调高：以基础返币比例（0.1%）为基准，最高可至10倍（1%），设置完成后，玩艺APP端返币比例自动翻倍。即PC+PAD+M版+手Q端最高返1%，玩艺APP端最高返2%。单件商品最高可获得玩币为500个，玩艺APP翻倍，为1000个。
返币门槛调低：单件商品（SKU维度）优惠后的返币起始价格可从50元向下按10元间隔调整，最低为10元。<br />
	3、玩币促销费用的计算
玩币促销费用由“玩艺”依据发放数量及兑换比例（玩币和现金的抵扣比例为100:1）计算，并通过系统自买家交付的货款中实时扣除，最终体现在商家当期结算单/日账单的“玩币”费用项中，具体查询路径：商家后台—结算管理—往期结算单查询—结算明细查询。<br />
	
			</p>
	</div>
</div>
</div>    
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/home.js" id="dialog_js" charset="utf-8"></script>

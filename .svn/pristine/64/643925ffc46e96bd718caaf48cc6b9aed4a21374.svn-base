<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航管理</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<script src="<?php echo STATICS;?>/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/function.js" type="text/javascript"></script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<div id="artlist">
	<div class="mod kjnav">
		<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U($action.'/'.$vo['name'],array('pid'=>$_GET['pid'],'level'=>3,'title'=>urlencode ($vo['title'])));?>"><?php echo ($vo['title']); ?></a>
		<?php if(($action == 'Article') or ($action == 'Img') or ($action == 'Text') or ($action == 'Voiceresponse')): break; endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>   	
</div>
<div class="cr"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="alist">
	  <tr>
		<td width="150">导航名称</td>
		<td>链接地址</td>
		<td>显示 / 隐藏</td>
		<td>打开方式</td>
		<td width="100">管理操作</td>
	  </tr>

		<tr style="height:50px">
			<td >
				<b><?php if($fc['name'] == ''): ?>功能介绍<?php else: echo ($fc['name']); endif; ?></b>
			</td>
			<td >
				<?php if($fc['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=fc<?php else: echo ($fc['url']); endif; ?> 
			</td>
			<td>
				<?php if($fc['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($fc['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>1,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>

		<tr style="height:50px">
			<td >
				<b><?php if($about['name'] == ''): ?>关于我们<?php else: echo ($about['name']); endif; ?></b>
			</td>
			<td >
				<?php if($about['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=about<?php else: echo ($about['url']); endif; ?> 
			</td>
			<td>
				<?php if($about['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($about['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>2,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>

		<tr style="height:50px">
			<td >
				<b><?php if($price['name'] == ''): ?>资费说明<?php else: echo ($price['name']); endif; ?></b>
			</td>
			<td >
				<?php if($price['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=price<?php else: echo ($price['url']); endif; ?> 
			</td>
			<td>
				<?php if($price['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($price['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>3,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>

		<tr style="height:50px">
			<td >
				<b><?php if($common['name'] == ''): ?>产品案例<?php else: echo ($common['name']); endif; ?></b>
			</td>
			<td >
				<?php if($common['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=common<?php else: echo ($common['url']); endif; ?> 
			</td>
			<td>
				<?php if($common['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($common['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>4,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>

		<tr style="height:50px">
			<td >
				<b><?php if($login['name'] == ''): ?>管理中心<?php else: echo ($login['name']); endif; ?></b>
			</td>
			<td >
				<?php if($login['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=User&m=Index&a=index<?php else: echo ($login['url']); endif; ?>
			</td>
			<td>
				<?php if($login['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($login['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>5,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>
		
		<tr style="height:50px">
			<td >
				<b><?php if($help['name'] == ''): ?>帮助中心<?php else: echo ($help['name']); endif; ?></b>
			</td>
			<td >
				<?php if($help['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=help<?php else: echo ($help['url']); endif; ?> 
			</td>
			<td>
				<?php if($help['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($help['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>6,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>
        
        	<tr style="height:50px">
			<td >
				<b><?php if($help['name'] == ''): ?>帮助中心<?php else: echo ($help['name']); endif; ?></b>
			</td>
			<td >
				<?php if($help['url'] == ''): echo ($f_siteUrl); ?>/index.php?g=Home&m=Index&a=help<?php else: echo ($help['url']); endif; ?> 
			</td>
			<td>
				<?php if($help['dspl'] == 0): ?>显示<?php else: ?>隐藏<?php endif; ?>
			</td>
			<td>
				<?php if($help['open'] == 0): ?>当前窗口打开<?php else: ?>新窗口打开<?php endif; ?>
			</td>
			<td align='center'>
				<a href="<?php echo U('Customs/edit/',array('id'=>7,'pid'=>$pid));?>">修改</a>
			</td>
		</tr>

     <tr bgcolor="#FFFFFF"> 
      <td colspan="8"><div class="listpage"><?php echo ($page); ?></div></td>
    </tr>
   
</table>

<div class="bottom">

</div>

</body>
</html>
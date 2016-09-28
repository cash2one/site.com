<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./tpl/static/tj/bootstrap.min.css">
    <style>
    .mtp30{margin-top: 10px;}
    .warning{background: #FCF8E3;}
    .img30{width: 30px;height:30px;}
    .img20{width: 20px;height:20px;}
    .listsearch{border:1px solid #FFDCAF;border-top: 2px solid #3A5FCD;height:200px;}
    /*.border-color{border-color: #3A5FFE;}*/
    /*.top-color{border-top: 2px solid gray}*/
    .red{color: #FF335D;font-family: '微软雅黑';font-weight: 24px;}
    .searchbody{line-height: 35px;margin-left: 15px;}
    .row a{color: #444;text-decoration: none;}
    /*.row a:hover{color: #FA8D00}*/
    .row li{padding-right: 5px;padding-left: 10px; width: 50px;height: 20px;line-height: 20px;margin-left: 6px}
    .row li a:hover {color: #3A5FCD;text-decoration: underline;}
    .in,.in a{background:lightgray;color: #fff;border-radius: 4px;}
    .in a:hover{color: #fff}
    .table th{text-align:center;}
    .what{width:480px;float:left;margin-left:15px;z-index:99;}

    /* button   
---------------------------------------------- */  
.button {  
    display: inline-block;  
    zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */  
    *display: inline;  
    vertical-align: baseline;  
    margin: 0 2px;  
    outline: none;  
    cursor: pointer;  
    text-align: center;  
    text-decoration: none;  
    font: 14px/100% Arial, Helvetica, sans-serif;  
    padding: .5em 2em .55em;   
    -webkit-border-radius: .5em;   
    -moz-border-radius: .5em;  
    border-radius: .5em;  
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);  
    box-shadow: 0 1px 2px rgba(0,0,0,.2);  
}  
.button:hover {  
    text-decoration: none;  
}  
.button:active {  
    position: relative;  
    top: 1px;  
}  
  
.bigrounded {  
    -webkit-border-radius: 2em;  
    -moz-border-radius: 2em;  
    border-radius: 2em;  
}  
.medium {  
    font-size: 12px;  
    padding: .4em 1.5em .42em;  
}  
.small {  
    font-size: 11px;  
    padding: .2em 1em .275em;  
}
/* white */  
.white {  
    color: #606060;  
    border: solid 1px #b7b7b7;  
    background: #fff;  
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));  
    background: -moz-linear-gradient(top,  #fff,  #ededed);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');  
}  
.white:hover {
    background: #ededed;  
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));  
    background: -moz-linear-gradient(top,  #fff,  #dcdcdc);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');  
}  
.white:active {
    color: #999;  
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));  
    background: -moz-linear-gradient(top,  #ededed,  #fff);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');  
} 
<?php if($get["is_what"] != public_hao): ?>.function a:hover{
        color: #fff;
    }<?php endif; ?>
<?php if($get["is_what"] == public_hao): ?>.public a:hover{
        color: #fff;
    }<?php endif; ?>
/* green */  
.green {  
    color: #e8f0de;  
    border: solid 1px #3A5FCD;  
    background: #3A5FCD;  
    background: -webkit-gradient(linear, left top, left bottom, from(#3A5FCD), to(#3A5FCD));  
    background: -moz-linear-gradient(top,  #3A5FCD,  #3A5FCD);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#3A5FCD', endColorstr='#3A5FCD');  
}
.green:hover {  
    background: #3A5FCD;  
    background: -webkit-gradient(linear, left top, left bottom, from(#3A5FCD), to(#3A5FCD));  
    background: -moz-linear-gradient(top,  #3A5FCD,  #3A5FCD);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#3A5FCD', endColorstr='#3A5FCD');  
}
.green:active {  
    color: #a9c08c;  
    background: -webkit-gradient(linear, left top, left bottom, from(#3A5FCD), to(#3A5FCD));  
    background: -moz-linear-gradient(top,  #3A5FCD,  #3A5FCD);  
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#3A5FCD', endColorstr='#3A5FCD');  
}
.col-md-1 a{
    font-size: 9px;
}
</style>
</head>
<body><br><br>
<div class="what">
<div class="function" style="float:left;"><a href="<?php echo U('Use/index',UseAction::getParams(array('is_what'=>'function','token'=>'alltoken')));?>" class='button <?php if($get["is_what"] != public_hao): ?>green<?php else: ?>white<?php endif; ?>'>功能访问量</a></div>
<?php $token = $_GET['token']; unset($_GET['token']); ?>
<div class="public" style="float:left;"><a href="<?php echo U('Use/index',UseAction::getParams(array('is_what'=>'public_hao','module'=>'wap','time'=>'week')));?>" class='button <?php if($get["is_what"] == public_hao): ?>green<?php else: ?>white<?php endif; ?>'>活跃公众号</a></div>
</div>
<?php $_GET['token'] = $token; ?>
<div style="height:160px;float:left;clear:both;">

<div class="container mtp30" style="width:300px;">
<ul class="list-group">
<li class="list-group-item border-color top-color">
<div class="row">
<div class="col-md-9">
<ul class="nav  nav-pills nav-justified pull-left">
<div class="row">
<div style="float:left;">
<li class='col-md-1 <?php if($get["module"] != user): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('module'=>'wap')));?>"><font size="2">WAP</font></a></li></div>
<div style="float:left;">
<?php if($get["is_what"] != public_hao): if($pc == '1'){ if($get['token'] == '' || $get['token'] == 'alltoken'){ ?>
<li class='col-md-1 <?php if($get["module"] == user): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('module'=>'user')));?>"><font size="2">PC</font></a></li></div>
<?php } } endif; ?>
</div>
</ul>
</div>
</div>
</li>
<li class="list-group-item border-color">
<div class="row">
<div class="col-md-9">
<ul class="nav  nav-pills nav-justified pull-left">
<div class="row">
<?php if($get['is_what'] !== 'public_hao'){ ?>
<?php if($get["token"] == alltoken or $get["token"] == ''): ?><div style="float:left;">
<li class='col-md-1 <?php if($get["time"] != week and $get["time"] != month): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('time'=>'day')));?>"><font size="2">一天</font></a></li></div><?php endif; ?>
<?php } ?>
<div style="float:left;">
<li class='col-md-1 <?php if($get["time"] == week or $get["is_what"] == public_hao): if($get["time"] != month): ?>in<?php endif; endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('time'=>'week')));?>"><font size="2">一周</font></a></li></div>
<div style="float:left;">
<li class='col-md-1 <?php if($get["time"] == month): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('time'=>'month')));?>"><font size="2">一月</font></a></li></div>
</div>
</ul>
</div>
</div>
</li>
<li class="list-group-item border-color">
<div class="row">
<div class="col-md-9">
<ul class="nav  nav-pills nav-justified pull-left">
<div class="row">
<div style="float:left;">

<li class='col-md-1 <?php if($get["lasttime"] != last): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('lasttime'=>'now')));?>"><?php if($get["time"] == month): ?><font size="2">本月</font><?php elseif($get["time"] == week): ?><font size="2">本周</font><?php else: ?><font size="2">今天</font><?php endif; ?></a></li></div>
<div style="float:left;">

<li class='col-md-1 <?php if($get["lasttime"] == last): ?>in<?php endif; ?>'><a href="<?php echo U('Use/index',UseAction::getParams(array('lasttime'=>'last')));?>"><?php if($get["time"] == month): ?><font size="2">上月</font><?php elseif($get["time"] == week): ?><font size="2">上周</font><?php else: ?><font size="2">昨天</font><?php endif; ?></a></li></div>
</div>
</ul>
</div>
</div>
</li>
</div>

</div>
<div style="float:left;clear:both;margin-left:240px;height: 500px;">
<div id="main"></div>
<center><h4><b><?php if($get["is_what"] == 'public_hao'): ?>活跃公众号访问数据统计<?php else: ?>
<?php if($get["token"] != '' and $get["token"] != 'alltoken'): echo ($wxuser); ?>的<?php endif; ?>功能访问数据统计<?php endif; ?></b></h4></center>
<center><?php if($pie["ifnull"] == 1): ?>暂时没有数据<?php endif; ?></center>
<div id="pieMain" style="height:400px;width:480px;float:left;
    clear:both;"></div>
</div>
<?php if($_GET['is_what'] == 'public_hao'){ ?>
    <table class="table table-hover table-bordered" style="width:800px;clear:both;margin-left:60px;text-align:center;">
       <caption></caption>
       <thead>
          <tr>
             <th>排名</th><th>公众号</th><th>访问总量</th><th>比例</th><th>所属平台账号</th><th>操作</th>
          </tr>
       </thead>
       <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i < 51): ?><tr>
             <td><?php echo ($i); ?></td><td><?php echo ($vo["wxname"]); ?></td><td><?php echo ($vo["count"]); ?>次</td><td><?php if($vo['percent'] == '0'): ?>小于0.1%<?php else: echo ($vo["percent"]); ?>%<?php endif; ?></td><td><?php echo ($vo["username"]); ?></td><td><a href="<?php echo U('Use/index',UseAction::getParams(array('token'=>$vo['token'],'is_what'=>'function','wxname'=>$vo['wxname'])));?>">查看详细统计量</a></td>
          </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
       </tbody>
    </table>
<?php }else{ ?>    
    <table class="table table-hover table-bordered" style="width:800px;clear:both;margin-left:60px;text-align:center;clear:both;">
       <caption></caption>
       <thead>
          <tr>
             <th>排名</th><th>功能</th><th>访问量</th><th>比例</th>
          </tr>
       </thead>
       <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i < 51 ): ?><tr>
             <td><?php echo ($i); ?></td><td><?php echo ($vo["controller"]); ?></td><td><?php echo ($vo["count"]); ?>次</td><td><?php if($vo['percent'] == '0'): ?>小于0.1%<?php else: echo ($vo["percent"]); ?>%<?php endif; ?></td>
          </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
       </tbody>
    </table>
<?php } ?>
</body>
<script src="<?php echo ($staticPath); ?>/tpl/static/myChart/js/echarts-plain.js"></script>
<script type="text/javascript">
    var myChart2 = echarts.init(document.getElementById('pieMain'));
    option2 = {
   
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    calculable : true,
    series : [
        {
            name:'功能访问数据统计',
            type:'pie',
            radius : '55%',
            center: ['50%', '65%'],
            data:[
                <?php echo ($pie["series"]); ?>
            ]
        }
    ]
};
     myChart2.setOption(option2,true);
</script>
 </body>
</html>
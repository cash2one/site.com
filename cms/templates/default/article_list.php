
<body>
    <div class="main">
        <div>
            <div class="tle">
                <span>设计师访谈</span>
                <span><img src="<?php echo CMS_TEMPLATES_URL; ?>/images/morepic.png" alt=""/>MORE</span>
                <div style="clear: both"></div>
            </div>
            <div class="banner-pic">
                <ul>
                    <li class="l5"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=26"></a></li>
                    <li class="l4"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=32"></a></li>
                    <li class="l3"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=35"></a></li>
                    <li class="l2"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=37"></a></li>
                    <li class="l1"><a href="http://www.wantease.com/cms/index.php?act=article&op=article_detail&article_id=24"></a></li>
                </ul>
            </div>
        </div>
        <div class="all jian">
            <div class="tle">
                <span>玩艺说</span>
                <span><img src="<?php echo CMS_TEMPLATES_URL; ?>/images/morepic.png" alt=""/>MORE</span>
                <div style="clear: both"></div>
            </div>
            <?php if (!empty($output['article_list']) && is_array($output['article_list'])) { ?>
                <?php foreach ($output['article_list'] as $value) { ?>
                    <div class="huigu-everyone">

                        <?php $article_url = getCMSArticleUrl($value['article_id']); ?>
                        <?php if (!empty($value['article_image'])) { ?>
                        <div class="pic"><a href="<?php echo $article_url; ?>"><img src="<?php echo 'http://www.wantease.com'.DS.DIR_UPLOAD.DS.ATTACH_CMS.DS.'article'.DS.$value['article_publisher_id'].DS.unserialize($value['article_image'])['name']; ?>" alt="" style="width:380px;height:190px;"/></a></div>
                        <?php } ?>
                        <div class="everyone-text">
                            <div class="gerenxinxi">
                                <span class="touxiang"><a href=""><img src="<?php echo CMS_TEMPLATES_URL; ?>/images/touxiang.png" alt=""/></a></span>
                                <div class="gerenxinxi-text">
                                    <span class="huoname"><a href="<?php echo $article_url; ?>" target="_blank"> <?php echo $value['article_title']; ?></span>
                                    <div class="you-ping">
         <!--                               <span><img src="<?php echo CMS_TEMPLATES_URL; ?>/images/pingzan.png" alt=""/>11</span>
                                        <span><img src="<?php echo CMS_TEMPLATES_URL; ?>/images/liuyan.png" alt=""/>12</span>-->
                                    </div>
                                </div>
                            </div>
                            <div class="everyone-text-l">
                                <span class="wenzhyang">
                                    <a href="">

                                    </a>
                                </span>
                            </div>
                            <div class="huigu-everyone-th">
                                <span class="huigu-everyone-time">
                                    <i><?php echo date('Y-m-d', $value['article_publish_time']); ?></i>
                                </span>
                                <div style="clear: both"></div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            <?php } ?>
        </div>


    </div>
</div>

</body>
<script type="text/javascript">
    $(".banner-pic ul li").hover(function () {
        $(this).stop(true).animate({width: "800px"}, 500).siblings().stop(true).animate({width: "96px"}, 500);
    });
</script>
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
        font-style:normal;
        font-weight:normal;
        font-family: "Microsoft YaHei";
    }
    body{
        background-image: url(<?php echo CMS_TEMPLATES_URL; ?>/images/playbg.jpg);
        background-position: center top;
        background-size: auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .main{
        width: 1200px;
        margin: auto;
    }
    .btn{
        margin: auto;
        margin-top: 25px;
    }
    .btn>span{
        width: 585px;
        height: 82px;
        border-radius: 5px;
        background: #14cfb5;
        display: block;
        text-align: center;
        line-height: 80px;
        color: #ffffff;
        float: left;
        font-size: 30px;
        font-weight: 500;
    }
    .btn>span:nth-child(2){
        float: right;
    }
    .btn>span:hover{
        background: #42d9c5;
    }
    .banner-pic{width:1200px;height:400px; margin-left: 8px}
    .banner-pic ul li{list-style:none;width:96px;height:400px;float:left;}
    .banner-pic ul li a{display: block;width: 100%;height: 100%;}
    .banner-pic .l1{background-image:url(<?php echo CMS_TEMPLATES_URL; ?>/images/1.jpg);}
    .banner-pic .l2{background-image:url(<?php echo CMS_TEMPLATES_URL; ?>/images/2.jpg);}
    .banner-pic .l3{background-image:url(<?php echo CMS_TEMPLATES_URL; ?>/images/3.jpg);}
    .banner-pic .l4{background-image:url(<?php echo CMS_TEMPLATES_URL; ?>/images/4.jpg);}
    .banner-pic .l5{background-image:url(<?php echo CMS_TEMPLATES_URL; ?>/images/5.jpg);width:800px;}
    .tle{
        border-bottom: 2px solid #ffffff;
        width: 1200px;
        margin-bottom: 30px;
        margin-top: 60px;
    }
    .tle>span{
        float: left;
        color: #ffffff;
        font-size: 25px;
        margin-bottom: 8px;
    }
    .tle>span:nth-child(2){
        float: right;
        color: #00cf9e;
        font-size: 18px;
        margin-top: 9px;
    }
    .tle>span:nth-child(2)>img{
        margin-right: 5px;
    }
    .everyone-text{
        position: relative;
    }
    .gerenxinxi{
        position: absolute;
        top: -30px;
    }
    .touxiang{
        margin-right: 18px;
        float: left;
    }
    .gerenxinxi .gerenxinxi-text .huoname>a{
        font-size: 14px;
    }
    .gerenxinxi-text{
        padding-top: 40px;
        float: left;
        width: 258px;
    }
    .biaoti{
        margin-top: 18px;
    }
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
        font-style:normal;
        font-weight:normal;
        font-family: "Microsoft YaHei";
    }
    .main{
        width: 1200px;
        margin: auto;
    }
    .banner{
        width: 100%;
        height: 400px;
        background: red;
    }
    .btn{
        margin: auto;
        margin-top: 25px;
    }
    .btn>span{
        width: 585px;
        height: 82px;
        border-radius: 5px;
        background: #14cfb5;
        display: block;
        text-align: center;
        line-height: 82px;
        color: #ffffff;
        float: left;
        font-size: 30px;
        font-weight: 500;
    }
    .btn>span:nth-child(2){
        float: right;
    }
    .btn>span:hover{
        background: #42d9c5;
    }
    .all{
        margin-top: 60px;
    }
    .tle{
        border-bottom: 2px solid #dddddd;
        width: 1200px;
        margin-bottom: 30px;
    }
    .tle>span{
        float: left;
        color: #646464;
        font-size: 25px;
        margin-bottom: 8px;
    }
    .tle>span:nth-child(2){
        float: right;
        color: #00cf9e;
        font-size: 18px;
        margin-top: 9px;
        cursor: pointer;
    }
    .tle>span:nth-child(2)>img{
        margin-right: 5px;
    }
    .pic{
        width: 100%;
        height: 190px;
        background: #646464;
    }
    .pic>img{
        width: 100%;
        height: 100%;
    }
    .everyone{
        width: 585px;
        float: left;
    }
    .everyone:nth-child(2){
        float: right;
    }
    .everyone-text{
        padding:  20px 18px 20px 18px;
        background: #f6f6f6;
    }
    .huoname{
        float: left;
    }
    .huoname>a{
        color: #363636;
        font-weight: 500;
        font-size: 18px;
    }
    .you-ping{
        float: right;
    }
    .you-ping>span{
        cursor: pointer;
        color: #929292;
        margin-left: 10px;
        font-size: 11px;
    }
    .you-ping>span>img{
        margin-right: 6px;
    }
    .wenzhyang{
        width: 385px;
        height: 32px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        overflow: hidden;
        font-size: 12px;
        padding-top: 14px ;
    }
    .wenzhyang>a{
        color: #9a9a9a;
    }
    .time{
        display: block;
        margin-top: 15px;
        font-size: 9px;
        color: #afafaf;
    }
    .everyone-text-l{
        float: left;
    }
    .everyone-text-r{
        float: right;
        width: 116px;
        height: 36px;
        font-size: 18px;
        color: #ffffff;
        background: #14cfb5;
        text-align: center;
        line-height: 36px;
        border-radius: 5px;
        margin-top: 40px;
        font-weight: 500;
        cursor: pointer;
    }
    .huigu-everyone{
        width: 380px;
        float: left;
        margin-left: 30px;
        margin-bottom: 30px;
    }
    .jian{
        margin-left: -30px;
    }
    .jian .tle{
        margin-left: 30px;
    }
    .huigu-everyone .everyone-text .huoname>a{
        font-size: 16px;
    }
    .huigu-everyone .everyone-text-l>span{
        width: 100%;
    }
    .huigu-everyone .everyone-text-l>span>a{
        color: #9a9a9a;
    }
    .huigu-everyone .everyone-text-l{
        float: none;
    }
    .huigu-everyone-th{
        margin-top: 14px;
        width: 100%;
    }
    .huigu-everyone-time{
        float: left;
        color: #afafaf;
    }
    .huigu-everyone-time>i,.huigu-everyone-time>s{
        font-size: 11px;
    }
</style>
</html>
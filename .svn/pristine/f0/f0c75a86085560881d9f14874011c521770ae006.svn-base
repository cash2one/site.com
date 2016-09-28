<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo ADMIN_SITE_URL;?>/resource/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ADMIN_SITE_URL;?>/resource/css/main.css"/>
    
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/modernizr.min.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/bootstrap.min.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/vendor/tabcomplete.min.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/vendor/livefilter.min.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/vendor/src/bootstrap-select.js"></script>
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/vendor/src/filterlist.js"></script>
   <!-- S 提示 -->
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/layer.js" type="text/javascript" charset="utf-8"></script> 
    <!-- E 提示 -->  
    <script src="<?php echo ADMIN_SITE_URL;?>/resource/js/plugins.js"></script>
    
</head>
<body>
<div class="mod mod_max" id="newMsg">
    <div class="mod_header">
        <h1>推送消息</h1>
    </div>
    <div class="mod_body" >
        <div class="wrap">
            <div class="divide_group">
                <div class="msg_about inline">
                    <div class="msg_form_group">
                        <label>消息描述 :</label>
                        <input class="msg_input" type="text" id="mark" placeholder="用于标识消息，方便管理和查找" maxlength="75" style="height: 40px"/>
                    </div>
                    <div class="msg_form_group">
                        <label>内容 :</label>
                        <div class="msg_textarea_wrap inline">
                            <textarea class="msg_textarea msg_textarea_big" id="txt"></textarea>
                            <div class="text_limit">
                                <!--<span class="flRight">-->
                                  <!--<p >还可以输入<span ></span>个字符<p>-->
                                <!--</span>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="preview_wrap inline">
                    <div class="preview_head">
                        <span>预览:</span>
                    </div>
                    <div class="preview_content ios_preview">
                        <div class="pre_title" >玩艺网</div>
                        <div class="pre_text" id="show"></div>
                    </div>
                </div>
            </div>
            <div class="divide_group group-two">
                <div class="msg_form_group">
                    <label>目标用户 :</label>
                    <div class="radio_wrap users_wrap inline">
                        <div class="radio_bottom">
                            <div class="custom_radio">
                                <label for="radio-user-0" class="active">
                                    <input type="radio" value="0" id="radio-user-0" name="user" class="danxuan" checked="checked">
                                    <span>全部用户</span>
                                </label>
                            </div>
                            <div class="custom_radio">
                                <label for="radio-user-2" class="">
                                    <input type="radio" value="1" id="radio-user-2" name="user" class="danxuan">
                                    <span>独立用户</span>
                                </label>
                            </div>
                        </div>
                        <div class="radio-content">
                            <div class="msg_form_group">
                                <!--<label class="bg_label verticalTop">Device Token:</label>-->
                                <div id="bts-ex-5" class="selectpicker" data-clear="true" data-live="true">
                                    <a href="#" class="clear"><span class="fa ">x</span><span class="sr-only">Cancel the selection</span></a>
                                    <button data-id="prov" type="button" class="btn btn-lg btn-block btn-default dropdown-toggle">
                                        <span class="placeholder">Choose an option</span>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="live-filtering" data-clear="true" data-autocomplete="true" data-keys="true">
                                            <label class="sr-only" for="input-bts-ex-5">Search in the list</label>
                                            <div class="search-box">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="search-icon5">
                                                        <span class="fa">x</span>
                                                        <a href="#" class="fa fa-times hide filter-clear"><span class="sr-only">Clear filter</span></a>
                                                    </span>
                                                    <input type="text" placeholder="Search in the list" id="input-bts-ex-5" class="form-control live-search" aria-describedby="search-icon5" tabindex="1" style="height: 40px"/>
                                                </div>
                                            </div>
                                            <div class="list-to-filter">
                                                <ul class="list-unstyled">
                                                    <li class="optgroup">
                                                        <span class="optgroup-header">List Group <span class="subtext"></span></span>
                                                        <ul class="list-unstyled">
                                                            <?php foreach($output['list'] as $k => $v){ ?>
                                                            <li class="filter-item items" data-filter="<?php echo $v['member_truename']; ?>" data-value="<?php echo $v['member_id']; ?>"><?php echo $v['member_truename']; ?></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="no-search-results">
                                                    <div class="alert alert-warning" role="alert"><i class="fa fa-warning margin-right-sm"></i>No entry for <strong>'<span></span>'</strong> was found.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="bts-ex-5" id="member_id" value="">
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="input_box">
                                <input type="text" class="msg_input msg_input_m inline" placeholder="key"  value="type" style="height: 40px" readonly>
                                <select class="msg_input msg_input_m inline" id="type" style="height: 40px;margin: 0 0 0 20px;">
                                    <option value="1" selected>明星店铺</option>
                                    <option value="2">买手笔记</option>
                                    <option value="3">匠心手记</option>
                                    <option value="4">最新单品</option>
                                <select/>
<!--                                <input type="text" class="msg_input msg_input_m inline" placeholder="value" style="height: 40px">-->
                                <span class="cancel_extra"></span>
                            </div>
                            <div class="input_box">
                                <input type="text" class="msg_input msg_input_m inline" placeholder="key" style="height: 40px" value="data" readonly>
                                <input type="text" class="msg_input msg_input_m inline" placeholder="value" id="value" style="height: 40px">
                                <span class="cancel_extra"></span>
                            </div>
                        </div>
                        <div class="msg_form_group msg_submit">
                            <button class="button_default push_submit" onclick="sub_form(this)">提交</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        var otxt=document.getElementById("txt");
        var oshow=document.getElementById("show");
        var btsEx=document.getElementById("bts-ex-5");
        var danxuan=document.getElementsByClassName("danxuan");
        if(document.all){
            otxt.onpropertychange=function(){
            oshow.innerHTML=otxt.value;
            }
        }
        else{
            otxt.oninput=function(){
            oshow.innerHTML=otxt.value;
            }
        }

        for(var i=0, leng=danxuan.length; i<leng; i++){
            danxuan[i].onclick=function (){
                if(danxuan[1].checked==true){
                    btsEx.style.display="block";
                }else{
                    btsEx.style.display="none";
                }
            }
        }

</script>
</body>
</html>



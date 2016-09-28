<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                padding: 0;
                margin: 0;
                background: url("sadfsadfsadf.jpg") no-repeat center;
                background-size: 160% auto; 
            }
            .suliang{
                width: 1600px;
                height: 150px;
                margin: auto;
                margin-top: 300px;
                text-align:center;
            }
            .suliang u{
                text-decoration: none;
                line-height: 50px;
                font-size: 100px;
                color: #ef0f0f;
            }
            .suliang i{
                display: inline-block;
                height: 50px;
                line-height: 50px;
                font-style:normal;
                font-size: 100px;
                color: #ef0f0f;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <div class="wikuang">
            <form id ="showDataForm" ><input id="number"type="hidden" value="<?php echo ($output['count']); ?>" name="count"/></form>
            <div class="suliang"><u>会员数：</u><i id="msg" value=""><?php echo ($output['count']); ?></i></div>

            <audio id="audio">
                <source src="<?php echo SHOP_TEMPLATES_URL; ?>/lingsheng.mp3" type="audio/ogg"> 
                <source src="<?php echo SHOP_TEMPLATES_URL; ?>/lingsheng.mp3" type="audio/mpeg"><embed height="100" width="100" src="<?php echo SHOP_TEMPLATES_URL; ?>/lingsheng.mp3" />
            </audio>
     </div>
    </body>
    <script>

        $(document).ready(function () {
            function shows() {
                 var count = $('#number').val();
                
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "index.php?act=ring&op=count",
                    async: false,
                    cache: false,
                    timeout: 8000, //ajax请求超时时间80秒     
                    data: {time: "4",count:count}, //40秒后无论结果服务器都返回数据   
                    
                    success: function (data) {
                        //从服务器得到数据，显示数据并继续查询     
//                         saveReport();
                        $("#msg").empty(); //清空前一次刷新数据，不清除索表会出错
                        $("#msg").text(data.member_count);
                        $("#number").val(data.member_count);
                        if(data.new_message_count>0){
                            playAudio();
                        }
 
                          
                       


                    },
                    //Ajax请求超时，继续查询     
                    error: function (data) {
                        $("#msg").append("链接有误，请查看网络链接");
                    }

                });
            }
                  function playAudio()
                { 
            var x = document.getElementById("audio"); 
                x.play(); 
                }
            setInterval(function () {
                shows();
            }, 5000);
        });</script>
</html>
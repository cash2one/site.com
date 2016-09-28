$(function() {
    
    var inviter_id = getCookie("inviter_id");
    if(!inviter_id){
        addCookie("inviter_id", getQueryString("inviter_id"),1);
    }
    
    get_mycode();

    $("#refister_mobile_btn").click(function() {
        var rs = check_data();
        if (!rs) {
            return false
        }
        var e = $("#usermobile").val();
        var password = $("#password").val();
        var mobile_code = $("#mobilecode").val();
        var invite_mycode = $("#invite_mycode").val();
        var check = false;
        $.getJSON(
            SiteUrl + "/api/index.php?act=login&op=check_mobile_code", 
            {
                mobile: e,
                mobile_code: mobile_code
            },
            function(a) {
                if (a.datas == 1) {
                    check = true;
                    if (check == true) {
              
                        $.ajax({
                            type: "post",
                            url: SiteUrl + "/api/index.php?act=login&op=phone_register",
                            data: {
                                username: e,
                                password: password,
                                password_confirm: password,
                                mobile: e,
                                inviter_id : inviter_id,
                                invite_mycode : invite_mycode
                            },
                            dataType: "json",
                            success: function(e) {
                                if (!e.datas.error) {
                                    if (typeof e.datas.key == "undefined") {
                                        return false
                                    } else {
                                        updateCookieCart(e.datas.key);
                                        addCookie("username", e.datas.username);
                                        addCookie("key", e.datas.key);

                                        location.href = "http://b.maka.im/k/ZWDLCHD9?DSCKID=01f9e689-9c45-4edf-b05d-00a6de56ff47&DSTIMESTAMP=1474170172724";
                                    }
                                    //errorTipsHide()
                                } else {

                                     $.sDialog({
                                        skin: "green",
                                        content: "注册失败",
                                        okBtn: false,
                                        cancelBtn: false
                                    });
                                }
                            }
                        })

                    } else if (a.datas == 0){
                        return false
                    }
                }else{
                    $.sDialog({
                        skin: "green",
                        content: "手机验证码错误",
                        okBtn: false,
                        cancelBtn: false
                    });

                }
            }
            
        )
    })

    $("#again").click(function() {
        e = $("#usermobile").val();
        if(e == "") {
            
            $.sDialog({
                skin: "green",
                content: "手机号不能为空",
                okBtn: false,
                cancelBtn: false
            });
            return false;
            
        }
        send_sms(e);
    });

    function send_sms(e) {
        $.getJSON(SiteUrl + "/api/index.php?act=login&op=sendmbcode", {
            mobile: e,
        },
        function(e) {
            if (!e.datas.error) {
                $.sDialog({
                    skin: "green",
                    content: "发送成功",
                    okBtn: false,
                    cancelBtn: false
                });
                $(".code-again").hide();
                $("#again").html(59);
                var c = setInterval(function() {
                    var e = $("#again");
                    if(e.html() == "") {
                        
                        e.html(59);
                    }
                    var a = parseInt(e.html() - 1);
                    if (a == 0) {
                        e.html('重新获取')
                        clearInterval(c)
                    } else {
                        e.html(a)
                    }
                },1e3)
                
            } else {
                loadSeccode();
                errorTipsShow("<p>" + e.datas.error + "<p>")
            }
        })
    }

});

//获取邀请码
function get_mycode() {
        
    var key = getQueryString("key");

    $.ajax({

        url: ApiUrl + "/index.php?act=member_index&op=get_invite_mycode",
        type: 'GET',
        data: {key: key},
        dataType: 'json',

        success: function(data) {

           $('#invite_mycode').val(data.datas.invite_mycode);
           $('#invite_mycode_2').text(data.datas.invite_mycode);
           $('#invite_mycode_img').attr('src', data.datas.photo_url);

        }
    })
        
}

//表单验证
function check_data() {
    
    var e = $("#usermobile").val();
    var password = $("#password").val();
    var mobile_code = $("#mobilecode").val();
    var invite_mycode = $("#invite_mycode").val();
    
    if(e == "" || e == null) {
        
        $.sDialog({
            skin: "green",
            content: "手机号不能为空",
            okBtn: false,
            cancelBtn: false
        });
        
        return false;
        
    }
    
    if(password == "" || password == null) {
        
        $.sDialog({
            skin: "green",
            content: "密码不能为空",
            okBtn: false,
            cancelBtn: false
        });
        
        return false;
        
    }
    
    if(mobile_code == "" || mobile_code == null) {
        
        $.sDialog({
            skin: "green",
            content: "验证码不能为空",
            okBtn: false,
            cancelBtn: false
        });
        
        return false;
        
    }
    
    if(invite_mycode == "" || invite_mycode == null) {
        
        $.sDialog({
            skin: "green",
            content: "邀请码不能为空",
            okBtn: false,
            cancelBtn: false
        });
        
        return false;
        
    }
    
    return true;
    
    
}
$(function() {
    var inviter_id = getCookie("inviter_id");
    if(!inviter_id){
    addCookie("inviter_id", getQueryString("inviter_id"),1);
    }
    loadSeccode();
    $("#refreshcode").bind("click",
    function() {
        loadSeccode()
    });
    $.sValid.init({
        rules: {
            usermobile: {
                required: true,
                mobile: true
            },
             password : {
                required : true,
                minlength: 6,
                maxlength: 20
            },
        },
        messages: {
            usermobile: {
                required: "请填写手机号！",
                mobile: "手机号码不正确"
            },
            password  : {
                required : '密码不能为空',
                minlength: '请输入至少6位字符',
                maxlength: '不能多于20位字符'
            },
        },


        callback: function(e, i, r) {
            if (e.length > 0) {
                var l = "";
                $.map(i,
                function(e, i) {
                    l += "<p>" + e + "</p>"
                });
                errorTipsShow(l)
            } else {
                errorTipsHide()
            }
        }
    });

    
    $("#refister_mobile_btn").click(function() {
        if (!$(this).parent().hasClass("ok")) {
            return false
        }
        var e = $("#usermobile").val();
        var password = $("#password").val();
        var password_confirm = $("#password_confirm").val();
        var mobile_code = $("#mobilecode").val();
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
                    if ($.sValid() && check == true) {
              
                        $.ajax({
                            type: "post",
                            url: SiteUrl + "/api/index.php?act=login&op=phone_register",
                            data: {
                                username: e,
                                password: password,
                                password_confirm: password,
                                mobile: e,
                               inviter_id : inviter_id
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

                                        location.href = WapSiteUrl + "/tmpl/member/member.html"
                                    }
                                    errorTipsHide()
                                } else {
                                    errorTipsShow("<p>注册失败</p>")
                                }
                            }
                        })

                    } else if (a.datas == 0){
                        return false
                    }
                }else{
                    errorTipsShow("<p>手机验证码错误</p>")
                }
            }
            
        )

        

    })

    $("#again").click(function() {
        e = $("#usermobile").val();
        c = $("#captcha").val();
        a = $("#codekey").val();
        if(e == "") {
            
            $.sDialog({
                skin: "green",
                content: "手机号不能为空",
                okBtn: false,
                cancelBtn: false
            });
            return false;
            
        }
        send_sms(e)
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
                $(".code-countdown").show().find("em").html(e.datas.sms_time);
                var c = setInterval(function() {
                    var e = $(".code-countdown-em").find("em");
                    if(e.html() == "") {
                        
                        e.html(59);
                    }
                    var a = parseInt(e.html() - 1);
                    if (a == 0) {
                        $(".code-again").show();
                        $(".code-countdown").hide();
                        clearInterval(c)
                    } else {
                        e.html(a)
                    }
                },
                1e3)
            } else {
                loadSeccode();
                errorTipsShow("<p>" + e.datas.error + "<p>")
            }
        })
    }

});
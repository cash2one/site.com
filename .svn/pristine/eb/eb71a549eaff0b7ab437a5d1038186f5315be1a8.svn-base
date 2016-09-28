
$(function () {
    var t = getCookie("key");
    var article_id = getQueryString("article_id");
    var article_title = decodeURI(getQueryString("article_title"));//解决中文乱码
    $('.header-title>h1').html(article_title);
    $('title').html(article_title);
    $.ajax({
        url: ApiUrl + "/index.php?act=cms_article&op=cms_article_show_1",
        data: {
            article_id: article_id, key: t
        },
        dataType: 'json',
        type: "get",
        success: function (result) {
            var e = result.datas.store_state;
            //console.log(result.datas);
            $(".title").html(result.datas.article_title);
            $(".desc").html(result.datas.article_abstract);
            $(".name").html(result.datas.store_name);
            $(".store_description").html(result.datas.store_description);
            $(".avatar").attr({src: result.datas.store_avatar});
            $(".store").attr({href: 'store.html?store_id=' + result.datas.store_id});
            $("#cms-article-content").html(result.datas.article_content);
            if (t) {
                $("#store_notcollect").hide();
                $("#store_collected").show()
            } else {
                $("#store_notcollect").show();
                $("#store_collected").hide()
            }
            $("#store_notcollect").live("click", function () {
                
                if (t) {
                    $("#store_notcollect").hide();
                    $("#store_collected").show();
                }else{
                location.href = "member/login.html"
                }
            });
            $("#store_collected").live("click", function () {
                if (t) {
                    $("#store_collected").hide();
                    $("#store_notcollect").show();
                }else{
                location.href = "member/login.html"
                }
            })
            var lazyImg = new Image();
            lazyImg.src = SiteUrl + "/data/upload/cms/article/wap_" + result.datas.article_publisher_id + "/" + result.datas.article_image_wap;
            lazyImg.onload = function ( ) {
                cover.css({
                    'background-image': 'url(' + lazyImg.src + ')',
                    'background-size': '100%'
                });
            }
            var img = new Image();
            var win_width = $(window).width();
            //console.log(win_width);
            $('#cms-article-content img').each(function () {

                img.src = $(this).attr("src");
                var w = img.width;
                if (w > win_width) {
                    $(this).css({"width": "100%"});
                }
                //console.log(w);
            });
        }
    });
    var pageHeight = document.documentElement.clientHeight,
            cover = $("#cover"),
            content = $("#content"),
            container = $(".container"),
            //                download = $(".download-bar"),
            coverStartPos = 0,
            coverMoved = 0,
            contentStartPos = 0,
            contentMoved = 0,
            minMove = 100;

    cover.bind('touchstart', function (e) {
        coverStartPos = e.touches[0].pageY;
        coverMoved = 0;
    });

    cover.bind('touchmove', function (e) {
        var curPos = e.touches[0].pageY;
        e.preventDefault();
        e.stopPropagation();
        coverMoved = curPos - coverStartPos;
        content.css({'-webkit-transform': 'translateY(' + (coverMoved) + 'px)', '-webkit-transition': 'ms linear'});
    });
    cover.bind('touchend', function (e) {
        if (coverMoved > -minMove) {
            content.css({'-webkit-transform': 'translateY(0px)', '-webkit-transition': '100ms linear'});
        } else {
            content.css({'-webkit-transform': 'translateY(' + -pageHeight + 'px)', '-webkit-transition': '200ms linear', 'margin-bottom': -pageHeight});
            //                download.show();
        }
    })

    content.bind('touchstart', function (e) {
        contentStartPos = e.touches[0].pageY;
        contentMoved = 0;
    })
    content.bind('touchmove', function (e) {
        var curPos = e.touches[0].pageY;
        var curTop = $('body').scrollTop();
        if ((curPos < contentStartPos) || (curPos > contentStartPos && curTop > 0)) {
            return true;
        }
        e.preventDefault();
        e.stopPropagation();
        contentMoved = curPos - contentStartPos;
        content.css({'-webkit-transform': 'translateY(' + (contentMoved - pageHeight) + 'px)', '-webkit-transition': 'ms linear'});
    });
    content.bind('touchend', function (e) {
        if (contentMoved > minMove) {
            content.css({'-webkit-transform': 'translateY(0px)', '-webkit-transition': '200ms linear'});
            //                download.hide();
        } else {
            content.css({'-webkit-transform': 'translateY(' + -pageHeight + 'px)', '-webkit-transition': '100ms linear'});
        }
    })

    //        加载第一页大图
    cover.css({
        'height': pageHeight,
        'background': 'url("loading.gif") center no-repeat',
        'background-size': '60px'
    });
    //        console.log(cover);

    //跳转下载链接
//    $('a,button').click(function (result) {
//        window.location.href = 'http://www.wantease.com/wap/tmpl/store.html?store_id=' + result.datas.store_id;
//        return false;
//    });
});

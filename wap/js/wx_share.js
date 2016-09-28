var ifm= document.getElementById("iframepage");
/**
 * 微信分享配置
 * add by lizh 11:33 2016/7/19
 */
function get_wx_shart(a) {
    $.getJSON(ApiUrl + "/index.php?act=wx_interface&op=get_wx_share_interface",{"url":a},
        function (data) {

            if (!data) {
                data = [];
                data.datas = [];
                data.datas.signPackage = [];
            }
            wx.config({
                debug: false,
                appId: data.datas.signPackage.appId,
                timestamp: data.datas.signPackage.timestamp,
                nonceStr: data.datas.signPackage.nonceStr,
                signature: data.datas.signPackage.signature,
                jsApiList: [
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareWeibo',
                    'onMenuShareQZone'
                ]
            });

        }
    )
}
//微信分享
function get_wx_share(obj) {
    
    zhaozhao();
    var name = $(obj).attr("titile1");
    var img = $(obj).attr("imgUrl");
    var message = $(obj).attr("desc");
    var url = WapSiteUrl + $(obj).attr("link");

    //分享到微信好友
    wx.onMenuShareAppMessage({
        title: name,
        desc: message,
        link: url,
        imgUrl: img
    });

    //分享到微信朋友圈
    wx.onMenuShareTimeline({
        title: name,
        link: url,
        imgUrl: img
    });

    //分享到QQ好友
    wx.onMenuShareQQ({
        title: name,
        desc: message,
        link: url,
        imgUrl: img
    });

    //分享到QQ空间
    wx.onMenuShareQZone({
        title: name,
        desc: message,
        link: url,
        imgUrl: img
    });

    //分享到微博
    wx.onMenuShareWeibo({
        title: name,
        desc: message,
        link: url,
        imgUrl: img
    });

}

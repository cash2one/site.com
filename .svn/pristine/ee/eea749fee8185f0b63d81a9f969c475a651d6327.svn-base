
    function tanchukuang(evt) {
        var tan = document.getElementById("tanchukuang");
        tan.style.display = "block";
    }
    function guantanchukuang(evt) {
        var tan = document.getElementById("tanchukuang");
        tan.style.display = "none";
    }
    //function shouweixin(){
    //    var bigErweima = document.getElementById("bigerweima");
    //    bigErweima.style.display = "none";
    //}
$(document).ready(function () {
    $("#top>i").click(function(){
        $("#top").slideUp();
    });
});
window.onload=function() {
    /******************主页*******************/
    var tan = document.getElementById("tanchukuang");
    var picCont = document.getElementsByClassName("pic-cont");
    //console.log(picCont);
    for (var i = 0, len = picCont.length; i < len; i++) {
        picCont[i].onclick = function () {
            tan.style.display = "block";
        }
    }
    var bigErweima = document.getElementById("bigerweima");
    var weixin = document.getElementById("weixin");
    weixin.onmouseover= function(){
        bigErweima.style.display ="block";
    }
    weixin.onmouseout= function(){
        bigErweima.style.display = "none";
    }
}
    /*******************轮播效果************************/
    $(function() {
        var bannerSlider = new Slider($('#banner_tabs'), {
            time: 5000,
            delay: 400,
            event: 'hover',
            auto: true,
            mode: 'fade',
            controller: $('#bannerCtrl'),
            activeControllerCls: 'active'
        });
        $('#banner_tabs .flex-prev').click(function() {
            bannerSlider.prev()
        });
        $('#banner_tabs .flex-next').click(function() {
            bannerSlider.next()
        });
    })

/************×¢²áÒ³Ãæ***********/
window.onload=function() {
    var tan = document.getElementById("tanchukuang");
    var zhuceMain = document.getElementById("zhuce-main");
//console.log(zhuceMain);
    var allSpan = zhuceMain.getElementsByTagName("span");
//console.log(allSpan);
    for (var q = 0, len = allSpan.length; q < len; q++) {
        allSpan[q].onclick = function () {
            if (this.className == "") {
                tan.style.display = "block";
            }
        }
    }
    var allFtit=document.getElementsByClassName("f-tit");
    //console.log(allFtit);
    for (var w = 0, len = allFtit.length; w < len; w++) {
        allFtit[w].onclick = function () {
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
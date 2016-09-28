/*************×ªÈÃÒ³************/
window.onload=function() {
    var tan = document.getElementById("tanchukuang");
    var effectCont = document.getElementById("effect-cont-copy");
//console.log(effectCont.children);
    for (var e = 0, len = effectCont.children.length; e < len; e++) {
        effectCont.children[e].onclick = function () {
            tan.style.display = "block";
        }
    }
    var effectCont1 = document.getElementById("effect-cont1");
//console.log(effectCont1.children);
    var allU = effectCont1.getElementsByTagName("u");
    for (var r = 0, len = effectCont1.children.length; r < len; r++) {
        allU[r].onclick = function () {
            tan.style.display = "block";
        }
    }
    var allFour = document.getElementById("four-effect");
    //console.log(allFour.children);
    for (var t = 0, len = allFour.children.length; t < len; t++) {
        allFour.children[t].onmouseover = function () {
            var thisImg = this.getElementsByTagName("img")[0];
            //console.log(thisImg);
            thisImg.style.width="160px";
        }
        allFour.children[t].onmouseout = function () {
            var thisImg = this.getElementsByTagName("img")[0];
            //console.log(thisImg);
            thisImg.style.width="143px";
        }
    }
    var copy=document.getElementById("effect-cont-copy");
    var allImg = copy.getElementsByTagName("img");
    for (var b = 0, len = allImg.length; b < len; b++) {
        allImg[b].id = (b+1);
        allImg[b].onmouseover = function () {
            //console.log(this.getAttribute("no"));
            this.src = "http://www.wantease.com/cms/templates/default/css/images/copy" + this.id + "." + this.id + ".png";
        };
        allImg[b].onmouseout = function () {
            //console.log(this.getAttribute("no"));
            this.src = "http://www.wantease.com/cms/templates/default/css/images/copy" + this.id + ".png";
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
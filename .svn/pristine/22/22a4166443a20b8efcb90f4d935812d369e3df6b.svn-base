window.onload=function() {
    /******************ึ๗าณ*******************/
    var tan = document.getElementById("tanchukuang");
    var zhenXuanLei = document.getElementById("zhenxuanlei");
    var allImg = zhenXuanLei.getElementsByTagName("img");

    //console.log(allImg);

    for (var b = 0, len = allImg.length; b < len; b++) {
        allImg[b].onmouseover = function () {
            //console.log(this.getAttribute("no"));
            this.src = "http://www.wantease.com/cms/templates/default/css/images/zhenxuan" + this.getAttribute("no") + "." + this.getAttribute("no") + ".png";
        };
        allImg[b].onmouseout = function () {
            //console.log(this.getAttribute("no"));
            this.src = "http://www.wantease.com/cms/templates/default/css/images/zhenxuan" + this.getAttribute("no") + ".png";
        }
    }
    //for (var b = 0, len = allImg.length; b < len; b++) {
    //    allImg[b].id = (b+1);
    //    allImg[b].onmouseover = function () {
    //        //console.log(this.getAttribute("no"));
    //        this.src = "images/zhenxuan" + this.id + "." + this.id + ".png";
    //    };
    //    allImg[b].onmouseout = function () {
    //        //console.log(this.getAttribute("no"));
    //        this.src = "images/zhenxuan" + this.id + ".png";
    //    }
    //}
    for (var i = 0, len = zhenXuanLei.children.length; i < len; i++) {
        zhenXuanLei.children[i].onclick = function () {
            tan.style.display = "block";
        }
    }
    var moreZhenxuanlei=document.getElementById("more-zhenxuanlei");
    var jiantouImg=moreZhenxuanlei.getElementsByTagName("img")[0];
    //console.log(jiantouImg)
    moreZhenxuanlei.onclick=function(){
        if(zhenxuanlei.parentNode.style.height=="" || zhenxuanlei.parentNode.style.height=="620px"){
            zhenxuanlei.parentNode.style.height="1250px";
            jiantouImg.src="images/aboutjiantouup.png"
        }else{
            zhenxuanlei.parentNode.style.height="620px";
            jiantouImg.src="images/aboutjiantoudown.png"
        }
    };

    var picCont = document.getElementsByClassName("pic-cont");
    //console.log(picCont);
    for (var q = 0, len = picCont.length; q < len; q++) {
        picCont[q].onclick = function () {
            tan.style.display = "block";
        }
    }

    var bannerTitle = document.getElementById("banner-title");
    //console.log(bannerTitle.children);
    var allBanner = document.getElementsByClassName("banner");

    for (var r = 0, len = bannerTitle.children.length; r < len; r++) {
        bannerTitle.children[r].id = r;
        //console.log(bannerTitle.children[r].id);
        bannerTitle.children[r].onmouseover = function () {
            changeOption(this.id);
        }
    }
    function changeOption(curindex){
        //console.log(index);
        for(var j=0,len=allBanner.length;j<len ;j++){
            allBanner[j].style.display="none";
            bannerTitle.children[j].className="";
        }
        allBanner[curindex].style.display="block";
        bannerTitle.children[curindex].className="active";
        index=curindex;
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
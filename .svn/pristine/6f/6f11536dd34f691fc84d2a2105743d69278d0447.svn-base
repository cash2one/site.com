window.onload=function(){
    $("html").removeClass("ui-loading");
      $(".loader-bg").remove();
    var index=0;
    //单击左箭头
    var flipNext=document.getElementsByClassName("flip-item");
    var beijinLi=document.getElementById("beijingchangpintu").children;
    //var left=document.getElementById("left");
    //var right=document.getElementById("right");


    function left(){
        index--;
        if (index<0) {index=flipNext.length-1};
        changeOption(index);
        nowdonghua(index);

    };
    //单击右箭头
    function right(){
        index++;
        if (index>=flipNext.length) {index=0};
        changeOption(index);
        nowdonghua(index);
    };
    function changeOption(curindex){
        for(var j=0;j<flipNext.length;j++){
            flipNext[j].className="flip-item flip-hidden";
        }
        flipNext[curindex].className="flip-item flip-current";
        if(curindex-1<0){
            flipNext[flipNext.length-1].className="flip-item flip-prev";
        }else{
            flipNext[curindex-1].className="flip-item flip-prev";
        }
        if(curindex+1>=flipNext.length){
            flipNext[0].className="flip-item flip-next";
        }else{
            flipNext[curindex+1].className="flip-item flip-next";
        }
    }
    function buttom(){
        var buttonItem=document.getElementById("button-item");
        buttonItem.className="button-item button-down";
        setTimeout(up,600);
    }
    function up(){
        var buttonItem=document.getElementById("button-item");
         buttonItem.className="button-item";
    }
    (function (){
        $(beijinLi[0]).css({"opacity":"1","width":"100%",
            "height":"320px"});
    })();
    function nowdonghua(curindex){
        //console.log(curindex);
        //console.log(beijinLi.length-1);
        //console.log(curindex <= beijinLi.length);
        //console.log(beijinLi[curindex]);
        //console.log($(beijinLi[curindex]));
        if(curindex+1>beijinLi.length-1){
            $(beijinLi[0]).animate({
                "width": "50%",
                "height": "50%",
                "opacity": "0",
                "margin": "25%"
            },300 ,"linear",nextdonghua(curindex));
        }else{
            $(beijinLi[curindex+1]).animate({
                "width": "50%",
                "height": "50%",
                "opacity": "0",
                "margin": "25%"
            },300 ,"linear",nextdonghua(curindex));
        }
        if(curindex-1<0){
            $(beijinLi[beijinLi.length-1]).animate({
                "width": "50%",
                "height": "50%",
                "opacity": "0",
                "margin": "25%"
            },300 ,"linear",nextdonghua(curindex));
        }else{
            $(beijinLi[curindex-1]).animate({
                "width": "50%",
                "height": "50%",
                "opacity": "0",
                "margin": "25%"
            },300 ,"linear",nextdonghua(curindex));
        }
    }
    function nextdonghua(curindex){
        $(beijinLi[curindex]).css({
            "opacity":"0","width":"50%",
            "height":"50%","margin": "25%"}).delay(300).animate({
                "width" : "100%",
                "height" : "100%",
                "opacity" :"1",
                "margin":"0"
            },300);
    }
    $("#touch").on("swiperight swipeleft",function(event){
        if( event.type == "swiperight"){
            left();
            buttom();
        }else if(event.type == "swipeleft" ){
            right();
            buttom();
        }
    });
   //var _startTouchX = 0;
    //var _flipster=document.getElementById("touch");
    //var _flipItems=document.getElementsByClassName("flip-item");
    //_flipster.addEventListener("touchstart", function(e) {
    //    console.log(e.touches[0]);
    //    _startTouchX = e.targetTouches[0].screenX;
    //});
    //
    //_flipster.addEventListener("touchmove", function(e) {
    //    var nowX = e.targetTouches[0].screenX;
    //    var touchDiff = nowX-_startTouchX;
    //    if (touchDiff > _flipItems[0].clientWidth/1.75){
    //        left();
    //        _startTouchX = nowX;
    //    }else if (touchDiff < -1*(_flipItems[0].clientWidth/1.75)){
    //        right();
    //        _startTouchX = nowX;
    //    }
    //});
    //
    //_flipster.addEventListener("touchend", function(e) {
    //    _startTouchX = 0;
    //});;

};

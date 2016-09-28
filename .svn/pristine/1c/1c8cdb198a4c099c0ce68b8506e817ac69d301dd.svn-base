
window.onload=function() {
    var index = 0;
    var timer = null;
    var Allpic = document.getElementById("pic");
    var pic = Allpic.getElementsByTagName("li");
    var Allnum = document.getElementById("num");
    var num = Allnum.getElementsByTagName("li");
    var flash = document.getElementById("flash");


    //鼠标划在窗口上面，停止计时器
    flash.onmouseover = function () {
        clearInterval(timer);
    }
    //鼠标离开窗口，开启计时器
    flash.onmouseout = function () {
        timer = setInterval(run, 5000);
    }
    //鼠标划在页签上面，停止计时器，手动切换
    for (var i = 0; i < num.length; i++) {
        num[i].id = i;
        num[i].onclick = function () {
            clearInterval(timer);
            changeOption(this.id);
        }
    }
    //定义计时器
    timer = setInterval(run, 5000);
    //封装函数run
    function run() {
        index++;
        if (index >= num.length) {
            index = 0
        }
        ;
        changeOption(index);
    }

    //封装函数changeOption
    function changeOption(curindex) {
        for (var j = 0; j < num.length; j++) {
            pic[j].style.display = "none";
            num[j].className = "";
        }
        $(pic[curindex]).fadeIn(1500);
        //pic[curindex].style.display="block"
        num[curindex].className = "active";
        index = curindex;
    }
}
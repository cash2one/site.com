
window.onload=function() {
    var index = 0;
    var timer = null;
    var Allpic = document.getElementById("pic");
    var pic = Allpic.getElementsByTagName("li");
    var Allnum = document.getElementById("num");
    var num = Allnum.getElementsByTagName("li");
    var flash = document.getElementById("flash");


    //��껮�ڴ������棬ֹͣ��ʱ��
    flash.onmouseover = function () {
        clearInterval(timer);
    }
    //����뿪���ڣ�������ʱ��
    flash.onmouseout = function () {
        timer = setInterval(run, 5000);
    }
    //��껮��ҳǩ���棬ֹͣ��ʱ�����ֶ��л�
    for (var i = 0; i < num.length; i++) {
        num[i].id = i;
        num[i].onclick = function () {
            clearInterval(timer);
            changeOption(this.id);
        }
    }
    //�����ʱ��
    timer = setInterval(run, 5000);
    //��װ����run
    function run() {
        index++;
        if (index >= num.length) {
            index = 0
        }
        ;
        changeOption(index);
    }

    //��װ����changeOption
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
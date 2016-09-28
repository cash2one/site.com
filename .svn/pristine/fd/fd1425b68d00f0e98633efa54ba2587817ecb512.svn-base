$(function() {
    var xlc=document.getElementById("xialai-cadan");
    document.getElementById("logo-name").onclick=function(){
        xlc.style.display=xlc.style.display=="block"?"none":"block";
		if(this.children[0].src.substring(24)=="img/uptwo.png" ||this.children[0].src.substring(24)=="img/downtwo.png"){
			this.children[0].src=this.children[0].src.substring(24)=="img/uptwo.png"?"img/downtwo.png":"img/uptwo.png";
		}else{
			this.children[0].src=this.children[0].src.substring(29)=="img/uptwo.png"?"img/downtwo.png":"img/uptwo.png";
		}
    };
	$(document).scroll(function() {
			if ($(window).scrollTop() > 0) {
				document.getElementById("xialai-cadan").style.display = "none";
				document.getElementById("logo-name").children[0].src="img/downtwo.png";
			}
    });
});

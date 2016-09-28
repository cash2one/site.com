window.onload=function(){
     var denglumain=document.getElementById("denglu-main");
     var zhucemain=document.getElementById("zhuce-main");

     $("#loading").click(function(){
          zhucemain.style.display="none";
          $("#denglu-main").show(500);
          this.nextElementSibling.style.borderBottom="none";
          this.style.borderBottom="2px solid #3b4567";
     });
     $("#register").click(function(){
          denglumain.style.display="none";
          $("#zhuce-main").show(500);
          this.previousElementSibling.style.borderBottom="none";
          this.style.borderBottom="2px solid #3b4567";
     });
     //$(".title-main span").hover(function(){
     //     this.style.borderBottom="2px solid #3b4567";
     //},function(){
     //     this.style.borderBottom="none";
     //})
}
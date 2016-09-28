
$(document).ready(function(){

	//酱紫爱
	var jianziaiAll=document.getElementsByClassName("jianziai-all");
	for(var i=0,len=jianziaiAll.length;i<len;i++){
		jianziaiAll[i].onmouseover = function(){
			this.getElementsByClassName("jianziai-change-pic")[0].style.display = "none";
			this.getElementsByClassName("change")[0].style.display = "block";
		};
		jianziaiAll[i].onmouseleave = function(){
			this.getElementsByClassName("jianziai-change-pic")[0].style.display = "block";
			this.getElementsByClassName("change")[0].style.display = "none";
		};
	}
	
	//聚拾寨
			var index=0;
			var timer=null;
			var Allpic=document.getElementById("pic");
			var pic=Allpic.getElementsByTagName("li");
			var Allnum=document.getElementById("num");
			var num=Allnum.getElementsByTagName("li");
			var flash=document.getElementById("flash");
			var left=document.getElementById("left");
			var right=document.getElementById("right");
			//单击左箭头
			left.onclick=function(){
				index--;
				if (index<0) {index=num.length-1};
				changeOption(index);
			}
			//单击右箭头
			right.onclick=function(){
				index++;
				if (index>=num.length) {index=0};
				changeOption(index);
			}	
			//鼠标划在窗口上面，停止计时器
			flash.onmouseover=function(){
				clearInterval(timer);
			}
			//鼠标离开窗口，开启计时器
			flash.onmouseout=function(){
				timer=setInterval(run,5000);
			}
			//鼠标划在页签上面，停止计时器，手动切换
			for(var i=0;i<num.length;i++){
				num[i].id=i;
				num[i].onclick=function(){
					clearInterval(timer);
					changeOption(this.id);
				}
			}	
			//定义计时器
			timer=setInterval(run,5000);
			//封装函数run
			function run(){
				index++;
				if (index>=num.length) {index=0};
				changeOption(index);
			}
			//封装函数changeOption
			function changeOption(curindex){
				for(var j=0;j<num.length;j++){
					pic[j].style.display = "none";
					num[j].className="";
				}
				$(pic[curindex]).fadeIn(1500);
				num[curindex].className="active";
				index=curindex;
			}
			
	//品牌街
	var pingpaiAll=document.getElementsByClassName("menu-pingpai")[0].children;
	var twelve=document.getElementsByClassName("twelve");

	for( var q=0 , pingpaiLen=pingpaiAll.length; q<pingpaiLen ;q++){
	    pingpaiAll[q].id = q;
		twelve[0].style.display="block";
		pingpaiAll[q].onmouseover = function(){
			twelveAllDiv(this.id);
			//this.getElementsByTagName("dt")[0].firstElementChild.src = this.getElementsByTagName("dt")[0].firstElementChild.src.slice(0,-6)+".png";
		};
		//pingpaiAll[q].onmouseout = function(){

			//this.getElementsByTagName("dt")[0].firstElementChild.src = this.getElementsByTagName("dt")[0].firstElementChild.src.slice(0,-4)+"on.png";
		//};
		//pingpaiAll[q].onclick = function(){
		//	twelve[0].style.display="none";
		//	twelveAllDiv(this.id);
		//};
	}
	function twelveAllDiv(thistwelve){
		for( var q=0 , twelveLen=twelve.length; q<twelveLen ;q++){
		   twelve[q].style.display = "none";
		}
		   twelve[thistwelve].style.display = "block";
	}
	
	$.ajax({
		type: 'GET',
		url: 'http://www.wantease.com/mobile/?act=adv&op=index1',
		dataType: 'json',
		success: function(data){
			var i=0;
			var changeOne=document.getElementById("change-one");
			var alljm=changeOne.parentNode.getElementsByClassName("jianziai-main");
			changeOne.onclick = function(){
				if(i>=8){
					i=0;
				}else{
					i+=4;
				}
			   for(var w=0,len=alljm.length;w<len;w++){
				 //console.log(alljm[w]) console.log(data.datas[w+i]);
				 	alljm[w].lastElementChild.children[0].innerHTML=data.datas[w+i].adv_title;
				    //console.log(alljmText);console.log(data.datas[w+i].adv_title);
					alljm[w].firstElementChild.children[0].children[0].src=data.datas[w+i].adv_content.adv_pic;
					//console.log(data.datas[w+i].adv_content.adv_pic);
				}
			};
				
			//console.log(data.datas);
		}
	});
	$.ajax({
		type: 'GET',
		url: 'http://www.wantease.com/mobile/?act=adv&op=index2',
		dataType: 'json',
		success: function(data){
			var i=0;
			var changeTwo=document.getElementById("change-two");
			var alljm=changeTwo.parentNode.getElementsByClassName("jianziai-main");
			changeTwo.onclick = function(){
				if(i>=8){
					i=0;
				}else{
					i+=4;
				}
			   for(var w=0,len=alljm.length;w<len;w++){
				 //console.log(alljm[w]) console.log(data.datas[w+i]);
				 	alljm[w].lastElementChild.children[0].innerHTML=data.datas[w+i].adv_title;
				    //console.log(alljmText);console.log(data.datas[w+i].adv_title);
					alljm[w].firstElementChild.children[0].children[0].src=data.datas[w+i].adv_content.adv_pic;
					//console.log(data.datas[w+i].adv_content.adv_pic);
				}
			};
				
			//console.log(data.datas);
		}
	});
	$.ajax({
		type: 'GET',
		url: 'http://www.wantease.com/mobile/?act=adv&op=index3',
		dataType: 'json',
		success: function(data){
			var i=0;
			var changeThree=document.getElementById("change-three");
			var alljm=changeThree.parentNode.getElementsByClassName("jianziai-main");
			changeThree.onclick = function(){
				if(i>=8){
					i=0;
				}else{
					i+=4;
				}
			   for(var w=0,len=alljm.length;w<len;w++){
				 //console.log(alljm[w]) console.log(data.datas[w+i]);
				 	alljm[w].lastElementChild.children[0].innerHTML=data.datas[w+i].adv_title;
				    //console.log(alljmText);console.log(data.datas[w+i].adv_title);
					alljm[w].firstElementChild.children[0].children[0].src=data.datas[w+i].adv_content.adv_pic;
					//console.log(data.datas[w+i].adv_content.adv_pic);
				}
			};
				
			//console.log(data.datas);
		}
	});
	$.ajax({
		type: 'GET',
		url: 'http://www.wantease.com/mobile/?act=adv&op=index4',
		dataType: 'json',
		success: function(data){
			var i=0;
			var changeFour=document.getElementById("change-four");
			var alljm=changeFour.parentNode.getElementsByClassName("jianziai-main");
			changeFour.onclick = function(){
				if(i>=8){
					i=0;
				}else{
					i+=4;
				}
			   for(var w=0,len=alljm.length;w<len;w++){
				 //console.log(alljm[w]) console.log(data.datas[w+i]);
				 	alljm[w].lastElementChild.children[0].innerHTML=data.datas[w+i].adv_title;
				    //console.log(alljmText);console.log(data.datas[w+i].adv_title);
					alljm[w].firstElementChild.children[0].children[0].src=data.datas[w+i].adv_content.adv_pic;
					//console.log(data.datas[w+i].adv_content.adv_pic);
				}
			};
				
			//console.log(data.datas);
		}
	});

    
    /*视频*/
    $("#video_btn").click(function () {
        $("#mask").show();
        $("#close_btn").show();
        $(".video_window").show();
    });
    $("#close_btn").click(function () {
        $("#mask").hide();
        $("#close_btn").hide();
        $(".video_window").hide();
    });

});


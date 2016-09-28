// 定义全局变量
var posY = 0;
var posYold = 0;
var page 

var ele1,ele2,ele3,ele4,ele5,ele6,ele7,ele8,ele9,ele10
var ele1_h,ele2_h,ele3_h,ele_h4,ele5_h,ele6_h,ele7_h,ele8_h,ele9_h,ele10_h
var leftnva
function initParalaxPage(){
	page.bind('scroll',function() {
		var scrollid = window.setTimeout(function(){
			window.clearTimeout(scrollid);
			scrollfun();	
		},1)
	});
}

function scrollfun(){
	posY = page.scrollTop();
	var layer3  = -(posY);
	if(Math.abs(layer3)>200){
		$(".microNav").fadeIn();
		$(".microNavTop").fadeIn();
		leftnva=$(".microNavTop").position().top+60;
	}
	else
	{
		$(".microNav").fadeOut();
		$(".microNavTop").fadeOut();
	}

	leftnva=$(".microNav").position().top+60;
	if(Math.abs(layer3)>=leftnva){
		$(".microNav li").find("a").removeClass("on")
	}
	if(Math.abs(layer3)>=ele1-leftnva){
		$(".microNav li").find("a").removeClass("on")
		$(".microNav li").eq(0).find("a").addClass("on")
	}
	if(Math.abs(layer3)>=ele2-leftnva){
		$(".microNav li").find("a").removeClass("on")
		$(".microNav li").eq(1).find("a").addClass("on")
	}
	if(Math.abs(layer3)>=ele3-leftnva){
		$(".microNav li").find("a").removeClass("on")
		$(".microNav li").eq(2).find("a").addClass("on")
	}
	if(Math.abs(layer3)>=ele4-leftnva){
		$(".microNav li").find("a").removeClass("on")
		$(".microNav li").eq(3).find("a").addClass("on")
	}
	if(Math.abs(layer3)>=ele5-leftnva){
		$(".microNav li").find("a").removeClass("on")
		$(".microNav li").eq(4).find("a").addClass("on")
	}
	//p1
	if(Math.abs(layer3)<ele1+ele1_h/1.5 && Math.abs(layer3)>ele1-ele1_h/1.5 )
	{
		dl1()
		d1=false;
	}
	else
	{
		undl1()
		d1=true;
	}
	//p2
	if(Math.abs(layer3)<ele2+ele2_h/1.5 && Math.abs(layer3)>ele2-ele2_h/1.5 )
	{
		dl2()
		d2=false;
	}
	else
	{
		undl2()
		d2=true;
	}
	//p3
	if(Math.abs(layer3)<ele3+ele3_h/1.5 && Math.abs(layer3)>ele3-ele3_h/1.5 )
	{
		dl3()
		d3=false;
	}
	else
	{
		undl3()
		d3=true;
	}
	//p4
	if(Math.abs(layer3)<ele4+ele4_h/1.5 && Math.abs(layer3)>ele4-ele4_h/1.5 )
	{
		dl4()
		d4=false;
	}
	else
	{
		undl4()
		d4=true;
	}
	//p5
	if(Math.abs(layer3)<ele5+ele5_h && Math.abs(layer3)>ele5-ele5_h/1.4 )
	{
		dl5()
		d5=false;
	}
	else
	{
		undl5()
		d5=true;
	}
	//alert(posY)
	posYold = page.scrollTop();
}
var d1=true;
var d2=true;
var d3=true;
var d4=true;
var d5=true;
function dl1(){
	if(d1)
	{
		$(".firstBlock li.li_1").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_2").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_3").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_4").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_5").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_6").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_7").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_8").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_9").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_10").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_11").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_12").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_13").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_14").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_15").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_16").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_17").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_18").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_19").stop().animate({left:0,opacity:1},1000)
		$(".firstBlock li.li_20").stop().animate({left:0,opacity:1},1000)
	}
}
function undl1(){
	if(!d1)
	{
		$(".firstBlock li.li_1").stop().animate({left:-200,opacity:0},1000)
		$(".firstBlock li.li_2").stop().animate({left:-200,opacity:0},1000)
		$(".firstBlock li.li_3").stop().animate({left:200,opacity:0},1000)
		$(".firstBlock li.li_4").stop().animate({left:200,opacity:0},1000)
		$(".firstBlock li.li_5").stop().animate({left:-300,opacity:0},1000)
		$(".firstBlock li.li_6").stop().animate({left:-300,opacity:0},1000)
		$(".firstBlock li.li_7").stop().animate({left:300,opacity:0},1000)
		$(".firstBlock li.li_8").stop().animate({left:300,opacity:0},1000)
		$(".firstBlock li.li_9").stop().animate({left:-400,opacity:0},1000)
		$(".firstBlock li.li_10").stop().animate({left:-400,opacity:0},1000)
		$(".firstBlock li.li_11").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_12").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_13").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_14").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_15").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_16").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_17").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_18").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_19").stop().animate({left:400,opacity:0},1000)
		$(".firstBlock li.li_20").stop().animate({left:400,opacity:0},1000)
	}
}
function dl2(){
	if(d2)
	{
		$(".secondBlock li.li_1").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_2").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_3").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_4").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_5").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_6").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_7").stop().animate({top:0,opacity:1},1000)
		
		$(".secondBlock li.li_8").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_9").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_10").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_11").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_12").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_13").stop().animate({top:0,opacity:1},1000)
		$(".secondBlock li.li_14").stop().animate({top:0,opacity:1},1000)
		
		$(".secondBlock li.li_15").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_16").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_17").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_18").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_19").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_20").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_21").stop().animate({bottom:0,opacity:1},1000)
		
		$(".secondBlock li.li_22").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_23").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_24").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_25").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_26").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_27").stop().animate({bottom:0,opacity:1},1000)
		$(".secondBlock li.li_28").stop().animate({bottom:0,opacity:1},1000)
	}
}
function undl2(){
	if(!d2)
	{
		$(".secondBlock li.li_1").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_2").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_3").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_4").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_5").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_6").stop().animate({top:-400,opacity:0},500)
		$(".secondBlock li.li_7").stop().animate({top:-400,opacity:0},500)
		
		$(".secondBlock li.li_8").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_9").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_10").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_11").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_12").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_13").stop().animate({top:-400,opacity:0},1000)
		$(".secondBlock li.li_14").stop().animate({top:-400,opacity:0},1000)
		
		$(".secondBlock li.li_15").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_16").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_17").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_18").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_19").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_20").stop().animate({bottom:-400,opacity:0},1000)
		$(".secondBlock li.li_21").stop().animate({bottom:-400,opacity:0},1000)
		
		$(".secondBlock li.li_22").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_23").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_24").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_25").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_26").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_27").stop().animate({bottom:-400,opacity:0},500)
		$(".secondBlock li.li_28").stop().animate({bottom:-400,opacity:0},500)
	}
}
function dl3(){
	if(d3)
	{
		$(".thirdBlockBg li.li_1").stop().animate({left:0,opacity:1},1000)
		$(".thirdBlockBg li.li_2").stop().animate({left:0,opacity:1},1000)
		$(".thirdBlockBg li.li_3").stop().animate({left:0,opacity:1},1000)
		$(".thirdBlockBg li.li_4").stop().animate({right:0,opacity:1},1000)
		$(".thirdBlockBg li.li_5").stop().animate({right:0,opacity:1},1000)
		$(".thirdBlockBg li.li_6").stop().animate({right:0,opacity:1},1000)
	}
}
function undl3(){
	if(!d3)
	{
		$(".thirdBlockBg li.li_1").stop().animate({left:-200,opacity:0},500)
		$(".thirdBlockBg li.li_2").stop().animate({left:-300,opacity:0},1000)
		$(".thirdBlockBg li.li_3").stop().animate({left:-400,opacity:0},500)
		$(".thirdBlockBg li.li_4").stop().animate({right:-400,opacity:0},1000)
		$(".thirdBlockBg li.li_5").stop().animate({right:-300,opacity:0},500)
		$(".thirdBlockBg li.li_6").stop().animate({right:-200,opacity:0},1000)
	}
}
function dl4(){
	if(d4)
	{
		$(".fourthBlockBg li.li_1").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_2").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_3").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_4").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_5").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_6").stop().animate({top:0,opacity:1},1000)
		$(".fourthBlockBg li.li_7").stop().animate({bottom:0,opacity:1},1000)
		$(".fourthBlockBg li.li_8").stop().animate({bottom:0,opacity:1},1000)
		$(".fourthBlockBg li.li_9").stop().animate({bottom:0,opacity:1},1000)
		$(".fourthBlockBg li.li_10").stop().animate({bottom:0,opacity:1},1000)
		$(".fourthBlockBg li.li_11").stop().animate({bottom:0,opacity:1},1000)
		$(".fourthBlockBg li.li_12").stop().animate({bottom:0,opacity:1},1000)
	}
}
function undl4(){
	if(!d4)
	{
		$(".fourthBlockBg li.li_1").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_2").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_3").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_4").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_5").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_6").stop().animate({top:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_7").stop().animate({bottom:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_8").stop().animate({bottom:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_9").stop().animate({bottom:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_10").stop().animate({bottom:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_11").stop().animate({bottom:-200,opacity:0},1000)
		$(".fourthBlockBg li.li_12").stop().animate({bottom:-200,opacity:0},1000)
	}
}	
function dl5(){
	if(d5)
	{
		$(".fifthBlockBg .title").stop().animate({top:0,opacity:1},1000)
		$(".fifthBlockBg .state").stop().animate({top:0,opacity:1},1000)
		$(".fifthBlockBg li.li_1 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_1 p").stop().animate({right:0,opacity:1},1000)
		$(".fifthBlockBg li.li_2 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_2 p").stop().animate({right:0,opacity:1},1000)
		$(".fifthBlockBg li.li_3 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_3 p").stop().animate({right:0,opacity:1},1000)
		$(".fifthBlockBg li.li_4 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_4 p").stop().animate({right:0,opacity:1},1000)
		$(".fifthBlockBg li.li_5 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_5 p").stop().animate({right:0,opacity:1},1000)
		$(".fifthBlockBg li.li_6 h4").stop().animate({left:0,opacity:1},1000)
		$(".fifthBlockBg li.li_6 p").stop().animate({right:0,opacity:1},1000)
	}
}
function undl5(){
	if(!d5)
	{
		$(".fifthBlockBg .title").stop().animate({top:0,opacity:0},1000)
		$(".fifthBlockBg .state").stop().animate({top:0,opacity:0},1000)
		$(".fifthBlockBg li.li_1 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_1 p").stop().animate({right:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_2 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_2 p").stop().animate({right:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_3 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_3 p").stop().animate({right:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_4 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_4 p").stop().animate({right:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_5 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_5 p").stop().animate({right:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_6 h4").stop().animate({left:-300,opacity:0},1000)
		$(".fifthBlockBg li.li_6 p").stop().animate({right:-300,opacity:0},1000)
	}
}		
	
//全站初始化
$(document).ready(function(){
	$(".microNavTop").click(function(){
		page.scrollTop(0);
		scrollfun();
	})	
	$(".leftn1").click(function(){
		page.scrollTop(ele1);
		scrollfun();
		$(".microNav li a").removeClass("on")
		$(".microNav li.leftn1 a").addClass("on")
	})
	$(".leftn2").click(function(){
		page.scrollTop(ele2);
		scrollfun();
		$(".microNav li a").removeClass("on")
		$(".microNav li.leftn2 a").addClass("on")
	})
	$(".leftn3").click(function(){
		page.scrollTop(ele3);
		scrollfun();
		$(".microNav li a").removeClass("on")
		$(".microNav li.leftn3 a").addClass("on")
	})
	$(".leftn4").click(function(){
		page.scrollTop(ele4);
		scrollfun();
		$(".microNav li a").removeClass("on")
		$(".microNav li.leftn4 a").addClass("on")
	})
	$(".leftn5").click(function(){
		page.scrollTop(ele5);
		scrollfun();
		$(".microNav li a").removeClass("on")
		$(".microNav li.leftn5 a").addClass("on")
	})	
	$(window).resize(function(){
		ele1=500
		ele1_h=$(".firstBlockBg").outerHeight();
		ele2=ele1+ele1_h
		ele2_h=$(".secondBlockBg").outerHeight();
		ele3=ele2+ele2_h
		ele3_h=$(".secondBlockBg").outerHeight();
		ele4=ele3+ele3_h
		ele4_h=$(".fourthBlockBg").outerHeight();
		ele5=ele4+ele4_h
		ele5_h=$(".fifthBlockBg").outerHeight();
		ele6=ele5+ele5_h
		ele6_h=$(".sixthBlockBg").outerHeight();
		$(".main_box").css({height:ele6+ele6_h+$("#footer").outerHeight()+$("#footer2").outerHeight()});
		scrollfun();
	})
	
	window.onload = function() {
			page = jQuery('.wrapper2');
			posYold = page.scrollTop();
			initParalaxPage();
			$(window).resize();
			/*d2=false;
			d3=false;
			d4=false;
			d5=false;
			undl2();
			undl3();
			undl4();
			undl5();
			d2=true;
			d3=true;
			d4=true;
			d5=true;*/
	};
	
	$('.lookDetail').click(function(){
		$('.wrapper2').animate({scrollTop:797},1000);
    });
	
});


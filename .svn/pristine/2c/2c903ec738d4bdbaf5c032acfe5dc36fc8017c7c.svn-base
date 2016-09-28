// JavaScript Document

//nav-main
!$('.nav-main').length > 0 || (function(){

  $('.nav-main li').hover(
	function () {
	  $(this).find('.dropdown-menu-nav-main').css('visibility','visible');
	},
	function () {
	  $(this).find('.dropdown-menu-nav-main').css('visibility','hidden');
	}
  ); 

})();

$('.firstBlock .list li').each(function(index){
	$('.firstBlock .list li').eq(index).addClass('li_'+(index+1));			
});
$('.firstBlock .list li:nth-child(4)').css('marginRight','0');
$('.firstBlock .list li:nth-child(8)').css('marginRight','0');
$('.firstBlock .list li:nth-child(12)').css('marginRight','0');
$('.firstBlock .list li:nth-child(16)').css('marginRight','0');
$('.firstBlock .list li:nth-child(20)').css('marginRight','0');

$('.secondBlock .list li').each(function(index){
	$('.secondBlock .list li').eq(index).addClass('li_'+(index+1));			
});
$('.secondBlock .list li:nth-child(7)').css('marginRight','0');
$('.secondBlock .list li:nth-child(14)').css('marginRight','0');
$('.secondBlock .list li:nth-child(21)').css('marginRight','0');
$('.secondBlock .list li:nth-child(28)').css('marginRight','0');

$('.thirdBlock .list li').each(function(index){
	$('.thirdBlock .list li').eq(index).addClass('li_'+(index+1));			
});
$('.thirdBlock .list li:even').css('backgroundColor','#eaeaea');
$('.thirdBlock .list li:nth-child(1)').find('.title').css('backgroundColor','#e1f7fc');
$('.thirdBlock .list li:nth-child(2)').find('.title').css('backgroundColor','#fcedfb');
$('.thirdBlock .list li:nth-child(3)').find('.title').css('backgroundColor','#f2effc');
$('.thirdBlock .list li:nth-child(4)').find('.title').css('backgroundColor','#effadc');
$('.thirdBlock .list li:nth-child(5)').find('.title').css('backgroundColor','#e5f9fa');
$('.thirdBlock .list li:nth-child(6)').find('.title').css('backgroundColor','#edeefb');

$('.fourthBlock .list li').each(function(index){
	$('.fourthBlock .list li').eq(index).addClass('li_'+(index+1));			
});

$('.fifthBlock .list li').each(function(index){
	$('.fifthBlock .list li').eq(index).addClass('li_'+(index+1));			
});

$('.sixthBlock .list li:nth-child(3)').css('marginRight','0');

!$('.indexScrollBox').length > 0 || (function(){
var scrollPic_02 = new ScrollPic();
	scrollPic_02.scrollContId   = "centerBox"; //内容容器ID
	scrollPic_02.arrLeftId      = "leftBtn"; //左箭头I
	scrollPic_02.arrRightId     = "rightBtn"; //右箭头ID

	scrollPic_02.frameWidth     = 785;//显示框宽
	scrollPic_02.pageWidth      = 785; //翻页宽度

	scrollPic_02.speed          = 20; //移动速度(单位毫秒，越小越
	scrollPic_02.space          = 100; //每次移动像素(单位px，越大
	scrollPic_02.autoPlay       = true; //自动播放
	scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒
	
	scrollPic_02.initialize(); //初始化
})();


!$('.oneTemplet').length > 0 || (function(){
	
var $ = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};

var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}

Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}

var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $(container), oSlider = $(slider), oThis = this;

	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
	oSlider.style.width = parameter*count + "px";
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		false,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){ this.Index = 0; }
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){ oThis.Move(); }, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){ oThis.Index++; oThis.Start(); }, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};

	
function Each(list, fun){
	for (var i = 0, len = list.length; i < len; i++) { fun(list[i], i); }
};

////////////////////////up

/*var objs = $("TempletBtns1").getElementsByTagName("li");

var tv = new TransformView("oneTemplet1", "TempletList1", 271, 3, {
	onStart : function(){ Each(objs, function(o, i){ o.className = tv.Index == i ? "on" : ""; }) }//按钮样式
});

tv.Start();

Each(objs, function(o, i){
	o.onmouseover = function(){
		o.className = "on";
		tv.Auto = false;
		tv.Index = i;
		tv.Start();
	}
	o.onmouseout = function(){
		o.className = "";
		tv.Auto = true;
		tv.Start();
	}
})*/

////////////////////////test1

var objs1 = $("TempletBtns1").getElementsByTagName("li");

var tv1 = new TransformView("oneTemplet1", "TempletList1", 271, 3, {
	onStart: function(){ Each(objs1, function(o, i){ o.className = tv1.Index == i ? "on" : ""; }) },//按钮样式
	Up: false
});

tv1.Start();

Each(objs1, function(o, i){
	o.onmouseover = function(){
		o.className = "on";
		tv1.Auto = false;
		tv1.Index = i;
		tv1.Start();
	}
	o.onmouseout = function(){
		o.className = "";
		tv1.Auto = false;
		tv1.Start();
	}
})

////////////////////////test2

var objs2 = $("TempletBtns2").getElementsByTagName("li");

var tv2 = new TransformView("oneTemplet2", "TempletList2", 271, 3, {
	onStart: function(){ Each(objs2, function(o, i){ o.className = tv2.Index == i ? "on" : ""; }) },//按钮样式
	Up: false
});

tv2.Start();

Each(objs2, function(o, i){
	o.onmouseover = function(){
		o.className = "on";
		tv2.Auto = false;
		tv2.Index = i;
		tv2.Start();
	}
	o.onmouseout = function(){
		o.className = "";
		tv2.Auto = false;
		tv2.Start();
	}
})

////////////////////////test3

var objs3 = $("TempletBtns3").getElementsByTagName("li");

var tv3 = new TransformView("oneTemplet3", "TempletList3", 271, 3, {
	onStart: function(){ Each(objs3, function(o, i){ o.className = tv3.Index == i ? "on" : ""; }) },//按钮样式
	Up: false
});

tv3.Start();

Each(objs3, function(o, i){
	o.onmouseover = function(){
		o.className = "on";
		tv3.Auto = false;
		tv3.Index = i;
		tv3.Start();
	}
	o.onmouseout = function(){
		o.className = "";
		tv3.Auto = false;
		tv3.Start();
	}
})

})();

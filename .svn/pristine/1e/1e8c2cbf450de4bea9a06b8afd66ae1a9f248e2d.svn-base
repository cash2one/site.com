var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
var favorites_class_id= getQueryString("favorites_class_id");
$(function() {
	
    get_list(0);
    get_like_list();
    var a =  window.location.href;
    get_wx_shart(a);

});

function get_list(num) {
	
    $.getJSON(ApiUrl + "/index.php?act=index&op=showcase_detail" ,{'favorites_class_id':favorites_class_id},
        function(e) {
            if (!e) {
                e = [];
                e.datas = [];
                e.datas.favorites_class_list = []
                e.datas.micro_personal = []
            }
        
            if(num == 0) {

               var showcase_info_html = template.render("showcase_info_model", e.datas);
               $("#showcase_info").append(showcase_info_html);  

            }
           
            var personal_list_html = template.render("personal_list_model", e.datas);
            $("#personal_list").html(personal_list_html);

            if(num == 1) {

                var xuanz=document.getElementsByClassName("xuanzhong");
                var jiesfooter=document.getElementById("jiesfooter");
                var wancheng=document.getElementById("wancheng");
                var goumai=document.getElementsByClassName("goumai");

                jiesfooter.style.display="block";
                wancheng.style.display="block";
                goumai[0].style.display="block";
                for(var i= 0,len=xuanz.length;i<len;i++){
                    xuanz[i].style.display="block";
                }
 
        }
        //var header_r_html = template.render("header_r_mode", e.datas);
        //$("#header_r").html(header_r_html);

        }
    )
}

/**
 * 橱窗列表
 * add by lizh 11:15 2016/8/6
 */
function get_like_list() {
    $.getJSON(ApiUrl1 + "/index.php?act=micro&op=getPersonalLike_wap_1_5",{'key':key},
        function (data) {

            if (!data) {
                data = [];
                data.datas = [];
                data.datas.goods_list = []
                data.datas.favorites_list = []
            }

            var showcase_list_html = "";
            showcase_list_html = template.render("showcase_list_model", data.datas);
            $("#tanchuk").append(showcase_list_html);
            
            var showcase_list_html_2 = "";
            showcase_list_html_2 = template.render("showcase_list_model_2", data.datas);
            $("#tanchuk2").append(showcase_list_html_2);

        }
    )
}

/**
 * 用户关注
 * add by lizh 14:14 2014/7/13
 */
function member_attention(obj,id,state) {
	
    var key = getCookie('key');
    //console.log(obj.previousElementSibling.children[0].innerHTML);

    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });
        return;

    }

    $.ajax({

        type : 'GET',
        url : ApiUrl + '/index.php?act=sns_friend&op=add_follow',
        data : {'member_id':id,'key':key},
        dataType : 'json',

        success : function(data) {

            if(data.datas.result) {

                layer.tips(data.datas.message, obj, {
                        tips: [1, '#0FA6D8'] //还可配置颜色
                });

            } else {

                layer.tips(data.datas.message, obj, {
                        tips: [1, '#0FA6D8'] //还可配置颜色
                });
            }

            if(state == 2) {

                obj.previousElementSibling.children[0].innerHTML = '+' + data.datas.count_friend;

            }

        },

        error : function(e) {

            console.log(e);

        }

    });
	
}

/**
 * 用户点赞
 * add by lizh 14:14 2014/7/13
 */
function member_like(obj,id) {
	
    var key = getCookie('key');
    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });
        return;

    }
    $.ajax({

        type : 'GET',
        url : ApiUrl1 + '/index.php?act=micro_like&op=like_save',
        data : {'like_id':id,'key':key},
        dataType : 'json',

        success : function(data) {

            layer.tips(data.datas.message, obj, {
                tips: [1, '#0FA6D8'] //还可配置颜色
            });

            if(data.datas['result']) {

                obj.children[1].innerHTML = data.datas['like_count'];

            }

        },

        error : function(e) {

            console.log(e);

        }

    });
	
}

/**
 * 用户收藏橱窗
 * add by lizh 14:14 2014/7/13
 */
function guangzhu(obj,id) {
	
    var key = getCookie('key');
    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });
        return;

    }
    $.ajax({

        type : 'GET',
        url : ApiUrl + '/index.php?act=member_favorites_class&op=favorites_class_add',
        data : {'favorites_class_id':id,'key':key},
        dataType : 'json',

        success : function(data) {

            layer.tips(data.datas.message, obj, {
                tips: [1, '#0FA6D8'] //还可配置颜色
            });

        },

        error : function(e) {

            console.log(e);

        }

    });
	
}

/*
 * 用户收藏窗口
 * add by lizh 14:19 2016/07/21
 */
function member_favorites_window(obj){
    var key = getCookie('key');
    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;
    }

    document.getElementById("tanchuk").style.display="block";
    document.getElementById("set_personal_id").value=select_moment_personal_id();	

}

/*
 * 用户收藏窗口
 * add by lizh 14:19 2016/07/21
 */
function member_favorites_window2(obj,id){
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
	}

	document.getElementById("tanchuk2").style.display="block";
	document.getElementById("set_personal_id_2").value=id;	

}

/*
 * 用户移动瞬间
 * add by lizh 14:33 2016/07/21
 */
function member_favorites(obj,id){
	
    personal_id = $('#set_personal_id').val();
    if(personal_id == 0 || personal_id == "") {

        layer.tips('异常操作', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;

    }
	
    var key = getCookie('key');
    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;
    }
	
    $.ajax({

        type : 'POST',
        url : ApiUrl + '/index.php?act=index&op=personal_move',
        data : {'personal_id':personal_id,'key':key,'new_favorites_class_id':id,'favorites_class_id':favorites_class_id},
        dataType : 'json',

        success : function(data) {

            layer.tips(data.datas.message, obj, {
                tips: [1, '#0FA6D8'] //还可配置颜色
            }); 
            
            if(data.datas.status) {
                
                get_list(1);
                $('#tanchuk').css('display','none');
                $('#set_personal_id').val(0);
            }
            
        },

        error : function(e) {

            console.log(e);

        }

    });
 
}

/*
 * 用户收藏
 * add by lizh 14:33 2016/07/21
 */
function member_favorites2(obj,id){
	
	personal_id = $('#set_personal_id_2').val();
	if(personal_id == 0) {
		
		layer.tips('异常操作', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
		
	}
	
	var key = getCookie('key');
	if(key == null) {
		
		layer.tips('请先登录', obj, {
			tips: [1, '#0FA6D8'] //还可配置颜色
		});
		
		return false;
	}
	
	$.ajax({
		
		type : 'GET',
		url : ApiUrl + '/index.php?act=member_favorites_class&op=favorites_add',
		data : {'personal_id':personal_id,'key':key,'favorites_class_id':id},
		dataType : 'json',
		
		success : function(data) {
			
			layer.tips(data.datas.message, obj, {
				tips: [1, '#0FA6D8'] //还可配置颜色
			});
			
		},
		
		error : function(e) {
			
			console.log(e);
			
		}
		
	});
 
}

/*
 * 跳转新建橱窗
 * add by lizh 14:56 2016/07/21
 */
function create_favorites_class(obj,id){
    
    var personal_id = $('#set_personal_id_2').val();
    
    if(personal_id == 0 || personal_id == "") {
		
        personal_id = $('#set_personal_id').val();   
		
    }
    
    if(personal_id == 0) {

        layer.tips('异常操作', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;

    }

    var key = getCookie('key');
    if(key == null) {

        layer.tips('请先登录', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;
    }

    window.location.href = WapSiteUrl + '/tmpl/new_showcase.html?personal_id='+personal_id;
 
}

/**
 * 
 * 删除瞬间
 * 接口URL : /mobile1/index.php?act=index&op=personal_del
 */
function del_moment(obj) {
    
    var str =select_moment_log_id();
   
    if(str == "") {

        layer.tips('请选择瞬间', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;
    }
    
    $.ajax({
        
        type : "post",
        url : ApiUrl + '/index.php?act=index&op=personal_del',
        data : {'key':key,'fav_id':str},
        dataType : "json",
        
        success : function(data) {
            
            layer.tips(data.datas.message, obj, {
                tips: [1, '#0FA6D8'] //还可配置颜色
            });
            
            if(data.datas.status) {
                
                get_list(1);
                
            }
            
        },
        
        error : function(e) {
            
            console.log(e);
            
        }
       
        
    })
    
}

//选择橱窗里收藏的主键
function select_moment_log_id() {
    
    var str = "";
    
    $('.goods_checkbox').each(function(){
        
        var check = $(this).is(':checked');

        if(check) {
            
            if(str == "") {
                
                str +=  $(this).val();
                
            } else {
                
                str +=  "," + $(this).val();
                
            }
           
            
        }
        
    });
    
    return str;
    
}

//选择瞬间主键
function select_moment_personal_id() {
    
    var str = "";
    
    $('.xuanzhong').each(function(){
        
        var check = $(this).find("input[class='goods_checkbox']").is(':checked');

        if(check) {
            
            if(str == "") {
                
                str +=  $(this).next("input[type='hidden']").val();
                
            } else {
                
                str +=  "," + $(this).next("input[type='hidden']").val();
                
            }
           
            
        }
        
    });
    
    return str;
    
}

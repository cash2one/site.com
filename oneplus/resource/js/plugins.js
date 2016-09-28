// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

//提交FORM表单
function sub_form(obj) {
    
    var check_data = check_form(obj);
    
    if(!check_data) {
        
        return false;
        
    }
    
    var data = {};
  
    data.mark = $('#mark').val();
    data.message = $('#txt').val();
    data.user_type = $('input[type="radio"]:checked').val();

    data.member_id = $('#member_id').val();
    data.type = $('#type').val();
    data.id = $('#value').val();
    
    var url = "http://" + window.location.host + "/oneplus/index.php?act=umeng_push&op=umengpush"
    
    $.ajax({
        
        type : "POST",
        url : url,
        data : data,
        dataType : "json",
        
        success : function(data) {
            
            layer.tips('已经成功推送给用户', obj, {
                tips: [2, '#0FA6D8'] //还可配置颜色
            });
            
        },
        
        error : function(e) {
            
            layer.tips('推送失败', obj, {
                tips: [2, '#0FA6D8'] //还可配置颜色
            });
            
        }
                
    });

}

//验证FORM表单
function check_form(obj) {
    
    var reslue = true;
    
    if($('#txt').val() == "" || $('#txt').val() == null) {
        
        //$('#txt_error').val('内容不能为空');
        layer.tips('内容不能为空', obj, {
                tips: [2, '#0FA6D8'] //还可配置颜色
        });
        return false;
       
    }
    if($('input[type="radio"]:checked').val() == 1) {
        
        if($('#member_id').val() == "" || $('#member_id').val() == null) {
        
            layer.tips('请选择推送用户', obj, {
                tips: [2, '#0FA6D8'] //还可配置颜色
            });
            return false;
            //console.log('请选择推送用户');
        }
    }
    
    if($('#type').val() == "" || $('#type').val() == null) {
        
        layer.tips('请选择推送类型', obj, {
            tips: [2, '#0FA6D8'] //还可配置颜色
        });
        return false;
        //console.log('请选择推送类型');
    }
    
    if($('#value').val() == "" || $('#value').val() == null) {

        layer.tips('id不能为空', obj, {
            tips: [2, '#0FA6D8'] //还可配置颜色
        });
        return false;
    }
    
    return reslue;
    
}

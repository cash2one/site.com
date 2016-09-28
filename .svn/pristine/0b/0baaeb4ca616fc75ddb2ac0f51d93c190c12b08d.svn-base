var page = pagesize;
var curpage = 1;
var hasmore = true;
var footer = false;
var key= getCookie("key");
$(function() {

    get_special_list(0);

});

//更多我的橱窗列表
function get_special_list(num){

    $.getJSON(ApiUrl + "/index.php?act=member_index&op=more_myself_showcase" , {'key':key},
         function(b) {
             if (!b){
                 b = [];
                 b.datas = [];
                 b.datas.micro_personal_class_list = []
             }
             var showcase_html = template.render("showcase_model", b.datas);
             $("#showcase").html(showcase_html);
             
            if(num == 1) {
                 
                var xuanz=document.getElementsByClassName("xuanzhong");
                var jiesfooter=document.getElementById("jiesfooter");
                jiesfooter.style.display="block";
                for(var i= 0,len=xuanz.length;i<len;i++){
                    xuanz[i].style.display="block";
                }
                 
            }
         }
    )        
}

/**
 * 
 * 删除橱窗
 * 接口URL : /mobile1/index.php?act=index&op=showcase_del
 */
function del_showcase(obj) {
    
    var str =select_showcase();
   
    if(str == "") {

        layer.tips('请选择橱窗', obj, {
            tips: [1, '#0FA6D8'] //还可配置颜色
        });

        return false;
    }
    
    $.ajax({
        
        type : "post",
        url : ApiUrl + '/index.php?act=index&op=showcase_del',
        data : {'key':key,'favorites_class_id':str},
        dataType : "json",
        
        success : function(data) {
            
            layer.tips(data.datas.message, obj, {
                tips: [1, '#0FA6D8'] //还可配置颜色
            });
            
            if(data.datas.status) {
                
                get_special_list(1);

            }
            
        },
        
        error : function(e) {
            
            console.log(e);
            
        }
       
        
    })
    
}

//选择瞬间
function select_showcase() {
    
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
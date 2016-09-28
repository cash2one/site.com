var authController = {};

authController.render = function(controllerName, controller){
  $("." + controllerName + "Html").remove();
    var i = 0;
    $("." + controllerName).each(function(){
        $(this).attr('id', controllerName + i++);
        var html = Template.render($(this).attr('id'), controller);
        var div = $('<div>'+html+'</div>');
        div.children().addClass(controllerName + 'Html');
        $(this).after(div.html());
    });
};

authController.auth = {};
authController.isAnonymous = true;
authController.integrationLoginPageUrl = '';

authService.getAuth(function (data) {
    authController.auth = data.auth;
    authController.isAnonymous = data.isAnonymous;
    authController.integrationLoginPageUrl = data.integrationLoginPageUrl;

    authController.render('authController', authController);
});
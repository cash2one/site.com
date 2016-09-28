var authService = {};
authService.baseUrl = 'http://api.gexia.com/auth/';

authService.bizType = 'GeXia';
if (location.href.toLowerCase().indexOf('siteyun.com') != -1){
authService.bizType = 'SiteYun';
}

authService.getUrl = function(action, id){
  if (id){
    return authService.baseUrl + action + '/' + id + "?bizType=" + authService.bizType + "&callback=?";
  }
  return authService.baseUrl + action  + "?bizType=" + authService.bizType + "&callback=?";
};

authService.getAuth = function(success){
    var url = authService.getUrl('GetAuth');
    $.getJSON(url, null, success);
};

authService.logout = function(success){
    $.getJSON(authService.getUrl('Logout'), null, success);
};

authService.login = function(login, success){
    $.getJSON(authService.getUrl('Login'), login, success);
};

authService.register = function(login, success){
    $.getJSON(authService.getUrl('Register'), login, success);
};

authService.forgetPassword = function(login, success){
    $.getJSON(authService.getUrl('ForgetPassword'), login, success);
};

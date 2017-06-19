myapp.factory("checkuserloginService",function($http){
    return {
        checklogin: function(){
            var get_login = {check:"check"};
            return $http.post("model/account_login.php",JSON.stringify(get_login));
        },
        userlogout:function(){
            var get_login = {check:"logout"};
            return $http.post("model/account_login.php",JSON.stringify(get_login));
        }
    };
});
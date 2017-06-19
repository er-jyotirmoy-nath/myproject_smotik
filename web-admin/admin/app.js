var myapp = angular.module('smotikapp', ['ngRoute','ngSanitize','ui.tinymce']);

myapp.config(function ($routeProvider) {

  $routeProvider.
    when('/dashboard', { templateUrl: "partials/main.php", controller: "mainCtrl" })
    .when('/news_man', { templateUrl: "partials/news.php", controller: "newsCtrl" })
    .when('/blogs_man', { templateUrl: "partials/blogs.php", controller: "blogCtrl" })
    .when('/blog_edit', { templateUrl: "partials/blog_edit.php", controller: "blogeditCtrl" })
    .when('/edit_blog/:blog_id', { templateUrl: "partials/blogs.php", controller: "editblogCtrl" })
    .when('/clients_man', { templateUrl: "partials/clients.php", controller: "clientsCtrl" })
    .when('/testimonials_man', { templateUrl: "partials/testimonials.php", controller: "testimonialCtrl" })
    .when('/products', { templateUrl: "partials/products.php", controller: "productsCtrl" })
    .when('/banners_man', { templateUrl: "partials/banners.php", controller: "bannerCtrl" })
    .when('/aboutus_man', { templateUrl: "partials/aboutus.php", controller: "aboutusCtrl" })
    .when('/entrance_man', { templateUrl: "partials/entrance.php", controller: "entranceCtrl" })
    .when('/login', { templateUrl: "partials/login.php", controller: "loginCtrl" })
    .otherwise({ redirectTo: "/dashboard" });

});

myapp.controller("mainCtrl", ['$scope','$location','checkuserloginService', function ($scope,$location,checkuserloginService) {
        
}]);

myapp.controller("indexCtrl", ['$scope','$location','checkuserloginService', function ($scope,$location,checkuserloginService) {
        
        $scope.logout = function(){
            checkuserloginService.userlogout().success(function(response){
                if(response.error == "false" && response.status == "logout"){
                    window.location.assign('login.html');
                }
            });
        };
}]);

myapp.run(function($rootScope,$location,checkuserloginService){
    var routepermissions = ["/news_man","/blogs_man","/blog_edit","/clients_man","/testimonials_man","/products","/banners_man","/aboutus_man","/entrance_man"];
    $rootScope.$on("$routeChangeStart",function(){
        if(routepermissions.indexOf($location.path()) !== ''){
            checkuserloginService.checklogin().success(function(response){
                console.log(response);
                if(response.error == "true" && response.status == "failure"){
                    window.location.assign('login.html');
                }
            });
        }
    });
});










var myapp = angular.module('smotikapp', ['ui.router','ngSanitize','ui.tinymce']);

myapp.config(function($urlRouterProvider,$stateProvider){
    $urlRouterProvider.otherwise('/dashboard');
    
    $stateProvider.
            state("dashboard",{url:"/dashboard",templateUrl: "partials/main.php", controller: "mainCtrl"})
            .state("news_man",{url:"/news_man",templateUrl: "partials/news.php", controller: "newsCtrl"})
            .state("blogs_man",{url:"/blogs_man",templateUrl: "partials/blogs.php", controller: "blogCtrl"})
            .state("blogs_edit",{url:"/blog_edit",emplateUrl: "partials/blog_edit.php", controller: "blogeditCtrl"})
            .state("blogs_edit.blog",{url:"/edit_blog/:blog_id",templateUrl: "partials/blogs.php", controller: "editblogCtrl"})
            .state("clients_man",{url:"/clients_man",templateUrl: "partials/clients.php", controller: "clientsCtrl"})
            .state("testimonials_man",{url:"/testimonials_man",templateUrl: "partials/testimonials.php", controller: "testimonialCtrl"})
            .state("products",{url:"/products",templateUrl: "partials/products.php", controller: "productsCtrl"})
            .state("banners_man",{url:"/banners_man",templateUrl: "partials/banners.php", controller: "bannerCtrl"})
            .state("aboutus_man",{url:"/aboutus_man",templateUrl: "partials/aboutus.php", controller: "aboutusCtrl"})
            .state("entrance_man",{url:"/entrance_man",templateUrl: "partials/entrance.php", controller: "entranceCtrl"})
            .state("login",{url:'/login',templateUrl: "partials/login.php", controller: "loginCtrl"})
    
});


/*myapp.config(function ($routeProvider) {

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

});*/

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
    $rootScope.$on("$stateChangeStart",function(){
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










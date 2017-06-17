var myapp = angular.module('smotikapp', ['ngRoute','ngSanitize','ui.tinymce']);

myapp.config(function ($routeProvider) {

  $routeProvider.
    when('/', { templateUrl: "partials/main.php", controller: "mainCtrl" })
    .when('/news_man', { templateUrl: "partials/news.php", controller: "newsCtrl" })
    .when('/entrance_management', { templateUrl: "view/pages/entrance.html", controller: "entranceCtrl" })
    .when('/security_management', { templateUrl: "view/pages/security_man.html", controller: "securityCtrl" })
    .when('/smart_home_management', { templateUrl: "view/pages/smart_home_man.html", controller: "smarthomeCtrl" })
    .when('/music_zoning', { templateUrl: "view/pages/music_zone.html", controller: "musicCtrl" })
    .when('/hospitality_solutions', { templateUrl: "view/pages/hospitality_man.html", controller: "hospitalityCtrl" })
    .when('/conference_and_room_automation', { templateUrl: "view/pages/conferance_man.html", controller: "conferenceCtrl" })
    .when('/smart_solutions', { templateUrl: "view/pages/smart_sol_man.html", controller: "smartsolCtrl" })
    .when('/design_your_home', { templateUrl: "view/pages/design_home.html", controller: "designCtrl" })
    .when('/customer_service', { templateUrl: "view/pages/customer_service_man.html", controller: "customerCtrl" })
    .otherwise({ redirectTo: "view/pages/error.html" });

});

myapp.controller("mainCtrl", ['$scope', function ($scope) {

}]);

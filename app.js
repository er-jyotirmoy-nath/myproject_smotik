var newapp = angular.module("smotikapp",['ngRoute']);

newapp.config(function($routeProvider,$locationProvider){

  $routeProvider.
  when('/',{templateUrl:"view/pages/main.php",controller:"mainCtrl"}),
  when('/aboutus',{templateUrl:"view/pages/",controller:"aboutusCtrl"}),
  when('/entrance_management',{templateUrl:"view/pages/",controller:"entranceCtrl"}),
  when('/security_management',{templateUrl:"view/pages/",controller:"securityCtrl"}),
  when('/smart_home_management',{templateUrl:"view/pages/",controller:"smarthomeCtrl"}),
  when('/music_zoning',{templateUrl:"view/pages/",controller:"musicCtrl"}),
  when('/hospitality_solutions',{templateUrl:"view/pages/",controller:"hospitalityCtrl"}),
  when('/conference_and_room_automation',{templateUrl:"view/pages/",controller:"conferenceCtrl"}),
  when('/smart_solutions',{templateUrl:"view/pages/",controller:"smartsolCtrl"}),
  when('/design_your_home',{templateUrl:"view/pages/",controller:"designCtrl"}),
  when('/customer_service',{templateUrl:"view/pages/",controller:"customerCtrl"}),  
 otherwise({redirectTo:"/error"}); 

});

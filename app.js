var newapp = angular.module("smotikapp",[]);

newapp.config(function($routeProvider,$locationProvider){

  $routeProvider.
  when('/',{templateUrl:"view/pages/main.php",controller:"mainCtrl"}),
  when('/',{templateUrl:"view/pages/",controller:""}),
  when('/',{templateUrl:"view/pages/",controller:""}),
  when('/',{templateUrl:"view/pages/",controller:""}),
  when('/',{templateUrl:"view/pages/",controller:""}),
 otherwise({redirectTo:"/error"}); 

});

var smotik_solo = angular.module('solution_module',[]);

smotik_solo.controller('solutioncontactCtrl', ['$scope', 'solutioncontactService', 'productService', function($scope, solutioncontactService, productService) {
    var a = window.location.pathname;
    var arr = a.split('/');
    var option = arr[2];

    switch(option){
        case 'entrance-management.php':
        $scope.filter_prod = 'entrance';
        break;
        case 'security-management.php':
        $scope.filter_prod = 'security';
        break;
        case 'smart-home-management.php':
        $scope.filter_prod = 'smarthome';
        break;
        case 'music-zoning.php':
        $scope.filter_prod = 'music';
        break;
        case 'hospitality-solutions.php':
        $scope.filter_prod = 'hospitality';
        break;
        case 'conference-room-automation.php':
        $scope.filter_prod = 'conferance';
        break;
        case 'smart-solutions.php':
        $scope.filter_prod = 'smartsol';
        break;
    }
    //console.log($scope.filter);
    var fd2 = new FormData();
    fd2.append("get_products", "get_products");
    productService.save_products(fd2).success(function(response) {
        console.log(response);
        $scope.products = response;

    });
}]);
smotik_solo.directive('solutionContact', function() {
    return {
        restrict: "E",
        scope: {
            productlist: "=",
            filter:"="
        },
        controller: function($scope, $http, $uibModal) {
            $scope.searchParameters = {};
            $scope.continueresponse = function() {
                $http.post("web-admin/admin/php/solutions_contact_model.php", JSON.stringify($scope.searchParameters)).success(function(response) {
                    console.log(response);
                    console.log('opening pop up');
                    var modalInstance = $uibModal.open({
                        templateUrl: 'view/pages/popup_tmpl.html'
                    });
                });
            };
            $scope.submitresponse = function() {
                var modalInstance = $uibModal.open({
                    animation:true,
                    controller:function($scope,$http,sendLeadService,$log){
                        $scope.res_message = "";
                        console.log("lead controller Called");
                        var data = {
                                get_sel_prods:"get_sel_prods"
                            };
                            $http.post("web-admin/admin/php/selected_prods.php",
                                JSON.stringify(data)).success(function(response){
                                    $scope.selectedproducts = response;
                                    console.log($scope.selectedproducts);
                                });
                        $scope.sendresponse = function(){
                            var contact_name = $scope.contact_name;
                            var contact_email = $scope.contact_email;
                            var contact_mobile = $scope.contact_mobile;
                            var selected_products = JSON.stringify($scope.selectedproducts);
                            var fd = new FormData();
                            fd.append("contact_name",contact_name);
                            fd.append("contact_email",contact_email);
                            fd.append("contact_mobile",contact_mobile);
                            fd.append("selected_products",selected_products);
                            $scope.res_message = "Sending..";
                            sendLeadService.sendlead(fd).success(function(response){
                                
                                $log.info(response);
                                $scope.res_message = response;
                            });
                        };
                        
                    },
                    templateUrl:'view/pages/submit_response_mail.php'
                });
               
            };
        },
        templateUrl: "view/pages/solution_contact.html"
    };
});

smotik_solo.factory('sendLeadService',['$http',function($http){
    return{
        sendlead:function(send_data){
           return $http.post('model/sendlead_model.php', send_data,{
                transformRequest:angular.identity,
                headers:{
                    "Content-Type":undefined,
                    "Process-Data":false
                }
            });
            }
        }
    
}]);
var smotik_app = angular.module('smotik_app', ['ngSanitize']);

smotik_app.factory('productService', ['$http', function($http){
	return {
		save_products : function(save_data){
			return $http.post("web-admin/admin/php/products_class.php", save_data, {
				transformRequest:angular.identity,
				headers: {"Content-Type":undefined,"Process-Data":false}
			});
		}
	};
}]);

smotik_app.factory('solutioncontactService',['$http',function($http){
        return {

        };
}]);

smotik_app.controller('submitresponseCtrl',['$scope','$http',function($scope,$http){
        $scope.searchParameters = {};
        var names = [];
        $scope.submitresponse = function(){
                names[0] = JSON.stringify($scope.searchParameters);
                window.localStorage.setItem('responses',JSON.stringify(names));
                console.log(JSON.parse(JSON.parse(window.localStorage.getItem('responses'))));
        };
}]);

smotik_app.controller('entranceCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'entrance';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('securityCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'security';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('musicCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'music';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('hospitalityCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'hospitality';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('conferanceCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'conferance';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('smartsolCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'smartsol';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);
smotik_app.controller('smartCtrl', ['$scope','productService', function($scope,productService){
	$scope.filter_prod = 'smarthome';
	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
}]);

smotik_app.controller('solutioncontactCtrl',['$scope','solutioncontactService','productService',function($scope,solutioncontactService,productService){
        var fd2 = new FormData();
                fd2.append("get_products","get_products");
                productService.save_products(fd2).success(function(response){
                        console.log(response);
                        $scope.products = response;
                });
}]);




smotik_app.directive('productListing',function(){
	// Runs during compile
	return {
		
		restrict: 'E', 
		scope: {
			filter_prod:"=",
			products:"="
		},
		 templateUrl: 'view/pages/product_tmp.html'
	};
});

smotik_app.directive('solutionContact',function(){
      return {
        restrict:"E",
        scope:{
                products:"="
        },
        templateUrl:"view/pages/solution_contact.html"
      };  
});
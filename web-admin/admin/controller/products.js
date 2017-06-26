/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

myapp.factory('productService', ['$http', function($http){
	return {
		save_products : function(save_data){
			return $http.post("php/products_class.php", save_data, {
				transformRequest:angular.identity,
				headers: {"Content-Type":undefined,"Process-Data":false}
			});
		}
	};
}])

myapp.controller("productsCtrl",["$scope","productService",function($scope,productService){

		var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});

        $scope.save_prod = function(){
        	var fd = new FormData();
        fd.append("prod_name",$scope.prod_name);
        fd.append("select_section",$scope.select_section);
        fd.append("prod_image_1",$scope.prod_image_1);
        fd.append("prod_image_2",$scope.prod_image_2);
        fd.append("prod_image_3",$scope.prod_image_3);
        fd.append("prod_image_use_1",$scope.prod_image_use_1);
        fd.append("prod_image_use_2",$scope.prod_image_use_2);
        fd.append("prod_image_use_3",$scope.prod_image_use_3);
        fd.append("prod_image_use_4",$scope.prod_image_use_4);
        fd.append("tinymceModel",$scope.tinymceModel);
        fd.append("prod_vis",$scope.prod_vis);
        productService.save_products(fd).success(function(response){
        	if(response.indexOf('Done') != -1){
        		$scope.prod_name = null;
			$scope.select_section = null;
			angular.element("input[type='file']").val(null);
			$scope.tinymceModel = null;
			$scope.prod_vis = null;
			$scope.refresh();
        	alert("Done");
        	}
        	else{
        		alert(response);
        	}
        	

        });
        };

        $scope.delete_product = function(item){
        	var fd3 = new FormData();
        	fd3.append("prod_id",item);
        	fd3.append("delte_prod","yes");
        	productService.save_products(fd3).success(function(response){
        		alert(response);
        		$scope.refresh();
        	});
        };

        $scope.refresh = function(){
        	var fd2 = new FormData();
        	fd2.append("get_products","get_products");
        	productService.save_products(fd2).success(function(response){
        		console.log(response);
        		$scope.products = response;
        	});
        };
}]);
myapp.filter("cutshort",function(){
	return function(input){
		var newresponse = input.substr(0,50);
		return newresponse;
	};

	
});
myapp.service("mainService",['$http','$q',function($http,$q){
	this.getaboutus = function(data){
		var q = $q.defer();
		$http.post("php/aboutus_class.php", data,{
			transformRequest:angular.identity,
			headers:{"Content-Type":undefined,"Process-Data":false}
		}).success(function(response){
			q.resolve(response);
		}).error(function(errorresponse){
			q.reject(errorresponse);
		});
		return q.promise;
	};

	this.getnews = function(send_data){
		var q = $q.defer();
		$http.post("php/news_class.php", send_data).success(function(response){q.resolve(response)}).error(function(error){q.reject(error)});
		return q.promise;
	};

	this.getclients = function(send_data){
		var q = $q.defer();
		$http.post("php/clients_get.php", send_data).success(function(response){q.resolve(response);}).error(function(error){q.reject(error);});
		return q.promise;
	};

	this.getproducts = function(send_data){
		var q = $q.defer();
		$http.post("php/products_class.php", send_data, {
			transformRequest:angular.identity,
			headers:{"Content-Type":undefined,"Process-Data":false}
		}).success(function(response){q.resolve(response);}).error(function(error){q.reject(error);});
		return q.promise;
	};
}]);

myapp.controller("mainCtrl", ['$scope','mainService','Lightbox', function ($scope,mainService,Lightbox) {
        var fd1 = new FormData();$scope.images=[];
        fd1.append("get_content","get_content");
        mainService.getaboutus(fd1).then(
        	function(response){$scope.aboutcontent =response},
        	function(error){console.log(error)}
        	);
        var getnews = {getnews:"get"};
        mainService.getnews(JSON.stringify(getnews)).then(
        	function(response){$scope.newscontent = response},
        	function(error){console.log(error)}
        	);
        var get_clients = {get_clients:"get"};
        mainService.getclients(JSON.stringify(get_clients)).then(
        	function(response){$scope.clientscontent = response;
        		angular.forEach(response,function(i,k){
        			$scope.images.push(i.image_url);
        		});
        		console.log($scope.images);
        	},
        	function(error) {console.log(error)});
        var fd2 = new FormData();
        fd2.append("get_products","get");
        mainService.getproducts(fd2).then(
        	function(response){$scope.productscontents = response},
        	function(error){console.log(error);}
        	);
         $scope.openLightboxModal = function (index) {
	    Lightbox.openModal($scope.images, index);
	  };
}]);
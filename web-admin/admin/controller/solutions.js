myapp.factory('solutionsService', ['$http', function($http){
	return {
		save_content:function (send_data) {
			return $http.post("php/solutions_class.php", send_data, {
				transformRequest:angular.identity,
				headers:{"Content-Type":undefined,"Process-Data":false}
			});
		}
	};
}]);

myapp.controller('solutionsCtrl', ['solutionsService','$scope', function($scope,solutionsService){
	

}]);
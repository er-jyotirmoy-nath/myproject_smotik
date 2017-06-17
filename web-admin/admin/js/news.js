
myapp.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function(){
                scope.$apply(function(){
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);


myapp.controller("newsCtrl", ['$scope','$http', function ($scope,$http) {


$scope.save_news = function(){
  alert();
  var headline = $scope.news_title;
  var image = $scope.news_image;
  var visibility = $scope.news_vis;
  var content = $scope.tinymceModel;
  var fd = new FormData();
  fd.append('headline',headline);
  fd.append('content',content);
  fd.append('image',image);
  //console.log(JSON.stringify(newsobject));
  $http.post("php/news_class.php",fd, {
             transformRequest: angular.identity,
             headers: {'Content-Type': undefined,'Process-Data': false}
         }).success(function(response){
    console.log(response);
  });
};
}]);

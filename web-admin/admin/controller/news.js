myapp.controller("newsCtrl", ['$scope','$http', function ($scope,$http) {

  $scope.news_item = "";
  console.log("Get News Called");
  var getdata = {
    getnews:"get"
  };

  $http.post("php/news_class.php",JSON.stringify(getdata)).success(function(response){
    console.log(response);
  });
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
  fd.append('visibility',visibility);
  //console.log(JSON.stringify(newsobject));
  $http.post("php/news_class.php",fd, {
             transformRequest: angular.identity,
             headers: {'Content-Type': undefined,'Process-Data': false}
         }).success(function(response){
    console.log(response);
  });
};
}]);

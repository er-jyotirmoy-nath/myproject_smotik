/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

myapp.factory("entranceService",function($http){
    return {
        setEntrance: function(set_data){
            return $http.post("entrance_class.php",set_data,{
                transformRequest:angular.identity,
                headers:{"Content-Type":undefined,"Process-Data":false}                
            });
        }
    };
});
myapp.controller("entranceCtrl",["$scope","$http","entranceService",function($scope,$http,entranceService){
        var get_content = "getcontent";
        var fd1 = new FormData();
        fd1.append("get_content",get_content);
        entranceService.setEntrance(fd1).success(function(response){
            console.log(response);
            $scope.entrance_text = response.subtitle;
            $scope.tinymceModel = response.content;
        });
        
        
        $scope.save_content = function () {
            var subtitle = $scope.entrance_text;
            var entrance_about = $scope.tinymceModel;
            var set_content = "save";
            var fd = new FormData();
            fd.append("entrance_text",subtitle);
            fd.append("entrance_about",entrance_about);
            fd.append("set_content",set_content);
            entranceService.setEntrance(fd).success(function(response){
                console.log(response);
                alert(response);
                $scope.refresh();
            });
        };
        
        $scope.refresh = function(){
            var get_content = "getcontent";
        var fd1 = new FormData();
        fd1.append("get_content",get_content);
        entranceService.setEntrance(fd1).success(function(response){
            console.log(response);
            $scope.entrance_text = response.subtitle;
            $scope.tinymceModel = response.content;
        });
        };
}]);
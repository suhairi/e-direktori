var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {

    $scope.search = function(){
        $http.get('staff/api/' + $scope.username).success(function(data, status, headers, config){
            $scope.users = data;
            //console.log($scope.users);
        });

    };

});

// Angular modul
var productApp = angular.module('productApp', []);

productApp.controller('productCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.products = [];

    // Ajax kérés és válasz kezelése (a válasz "data" mezője kell):
    $http.get('/product/list')
        .then(function(resp) {
           console.log(resp);
           $scope.products = resp.data;
        });
}]);
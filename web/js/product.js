// Angular modul
var productApp = angular.module('productApp', []);

productApp.controller('productCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.products = [];

    //Globális változó létrehozása
    $scope.newProduct = {};

    // Ajax kérés és válasz kezelése (a válasz "data" mezője kell):
    $http.get('/product/list')
        .then(function(resp) {
           console.log(resp);
           $scope.products = resp.data;
        });

    //Ajax kérés és válasz kezelése (a post-nál szoktunk küldeni adatot is, most
    // csak egy üres objektumot: {} küldünk.)
    $scope.createProduct = function() {
        $http.post('/product/create', $scope.newProduct)
            .then(function(resp) {
                console.log(resp);
            });
     };

    //A POST függvény meghívása:
    $scope.createProduct();

}]);
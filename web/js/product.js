// Angular modul
var productApp = angular.module('productApp', []);

productApp.controller('productCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.products = [];

    //Globális változó létrehozása
    $scope.newProduct = {};

    // Ajax kérés és válasz kezelése (a válasz "data" mezője kell):
    $http.get('/product/list')
        .then(function(resp) {
           console.log(resp.data);
           $scope.products = resp.data;
        });

    //Ajax kérés és válasz kezelése (a post-nál szoktunk küldeni adatot is, most
    // ez a $scope.newProduct
    //A visszakapott érték a resp-be kerül, amit kiírunk a consolra.
    $scope.createProduct = function() {
        $http.post('/product/create', $scope.newProduct)
            .then(function(resp) {
                console.log(resp);
            });
     };

    $scope.updateProduct = function(product) {
        $http.post('/product/update', product)
            .then(function(resp) {
                console.log(resp);
            });
    };


}]);
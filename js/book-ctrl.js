
(function () {

  "use strict";

  angular.module('BookApp', [])
    .controller('BookCtrl', ['$scope', '$http', function ($scope, $http) {
        $scope.books = [];
        $http({
          method: 'GET',
          url: 'books-api.php'
        }).then(function successCallback(response) {
            $scope.books = response.data;
          }, function errorCallback(response) {       
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
  }]);
  
})();

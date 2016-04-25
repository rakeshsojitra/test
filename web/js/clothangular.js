var clothstudioApp = angular.module('clothstudioApp', []);
clothstudioApp.controller('menSignupController', function ($scope, $http) {
    $scope.formData = {};
    $scope.go = function () {
        var params = JSON.stringify(this.formData);        
        $http.post("/signupnew",params)
        .then(function(response) {
            alert(response);
        });
    }
});
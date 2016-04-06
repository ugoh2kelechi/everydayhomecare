
use 'strict'

var app = angular.module('everydayapp',[]);

app.controller('mainCtrl', ['$scope', function($scope){

	$scope.names = [{'name':'Kester', 'age':'23'}];

}]);
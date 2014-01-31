'use strict';

/* Controllers */

var rankingController = angular.module('etapasController', []);
 
function EtapasCtrl($scope, $http) {

  $scope.queryDescricao = '2014';

  $http({ method: 'GET', url: 'etapas', cache: true }).
    success(function(data, status) {
      $scope.etapas = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $http({ method: 'GET', url: 'rankings', cache: true }).
    success(function(data, status) {
      $scope.rankings = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });
}
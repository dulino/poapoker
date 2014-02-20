'use strict';

/* Controllers */

var homeController = angular.module('homeController', []);
 
function HomeCtrl($scope, $http) {

  $scope.queryDescricao = '2014';

  $http({ method: 'GET', url: 'ultimas/etapas/10', cache: false }).
    success(function(data, status) {
      $scope.etapas = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $http({ method: 'GET', url: 'rankingsemdescartes/1', cache: false }).
    success(function(data, status) {
      $scope.rankingsemdescartes = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });
}
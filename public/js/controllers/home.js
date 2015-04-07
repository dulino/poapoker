'use strict';

/* Controllers */

var homeController = angular.module('homeController', []);
 
function HomeCtrl($scope, $http) {

  $scope.queryDescricao = '2015';

  $http({ method: 'GET', url: 'ultimas/etapas/3', cache: false }).
    success(function(data, status) {
      $scope.etapas = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $http({ method: 'GET', url: 'rankingsemdescartes/3', cache: false }).
    success(function(data, status) {

        angular.forEach(data, function(ranking) {
          ranking.pontuacao = parseInt(ranking.pontuacao);
        });

      $scope.rankingsemdescartes = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });
}
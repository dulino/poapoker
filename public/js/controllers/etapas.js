'use strict';

/* Controllers */

var etapaController = angular.module('etapasController', []);
 
function EtapasCtrl($scope, $http) {

  $scope.queryDescricao = '2014';

  $http({ method: 'GET', url: 'etapas', cache: false }).
    success(function(data, status) {
      $scope.etapas = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $http({ method: 'GET', url: 'rankings', cache: false }).
    success(function(data, status) {
      $scope.rankings = data;
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });


  $scope.clearEtapa = function(etapaId) {
    $http.delete('/etapas/' + etapaId)
      .success(function(data, status) {
        $scope.etapas = _.filter($scope.etapas, function(etapa) {
          return !(etapa.id == parseInt(etapaId));
        });
      })
      .error(function(data, status) {
        console.log(data.error.message);
      });
  }
}
'use strict';

/* Controllers */

var detalhesEtapaController = angular.module('detalhesEtapaController', []);
 
function DetalhesEtapaCtrl($scope, $http, $routeParams) {

  $scope.teste = $routeParams.etapaId;

  $http({ method: 'GET', url: 'detalhes/etapa/' + $routeParams.etapaId, cache: false }).
    success(function(data, status) {
      $scope.etapa = data;

      $scope.$watch('etapa.jogadores', function(jogadores) {
        $scope.qtdRebuys = 0;
        $scope.qtdAddons = 0;
        $scope.eliminados = 0;
        $scope.jogando    = 0;
        angular.forEach(jogadores, function(jogador) {
          $scope.qtdRebuys += jogador.rebuys;
          $scope.qtdAddons += jogador.addons;
          if (jogador.posicao > 0) {
            $scope.eliminados += 1;
          }else {
            $scope.jogando += 1;
          }
        });
      });
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });


  $scope.clearJogadorEtapa = function(jogadorId) {

    $http.delete('/etapajogadores/' + jogadorId)
      .success(function(data, status) {
          $http({ method: 'GET', url: 'detalhes/etapa/' + $routeParams.etapaId, cache: false }).
            success(function(data, status) {
              $scope.etapa.jogadores = data.jogadores;
            });
      })
      .error(function(data, status) {
        console.log(data.error.message);
      });
  
  }

}
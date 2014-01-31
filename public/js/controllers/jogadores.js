'use strict';

/* Controllers */

var jogadorController = angular.module('jogadoresController', []);
 
function JogadoresCtrl($scope, $http) {

  $http({ method: 'GET', url: 'jogadores', cache: true }).
    success(function(data, status) {
      $scope.jogadores = data;
      $scope.estadoInsert = 'show';
      $scope.estadoUpdate = 'hidden';
      $scope.jogadorUpId = '0';
      $scope.jogadorUpNome = 'Teste1';
      $scope.jogadorUpApelido = 'Teste2';
      $scope.jogadorNome = '';
      $scope.jogadorApelido = '';
      $scope.query = '';

    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $scope.addJogador = function() {
      $http.post('/jogadores', { nome: $scope.jogadorNome, apelido: $scope.jogadorApelido } ).success(function(data, status) {
      if(data) {
        var last = _.last($scope.jogadores);
        $scope.jogadores.push({nome: $scope.jogadorNome, apelido: $scope.jogadorApelido, id: data });
        $scope.jogadorNome = '';
        $scope.jogadorApelido = '';
        console.log($scope.jogadores);
      } else {
        console.log('There was a problem. Status: ' + status + '; Data: ' + data);
      }
    }).error(function(data, status) {
      console.log('status: ' + status);
    });
  }

  $scope.clearJogador = function(jogadorId) {
    $http.delete('/jogadores/' + jogadorId)
      .success(function(data, status) {
        $scope.jogadores = _.filter($scope.jogadores, function(jogador) {
          return !(jogador.id == parseInt(jogadorId));
        });

      })
      .error(function(data, status) {
        console.log(data.error.message);
      });
  }

  $scope.setaJogador = function(jogadorId) {
    var alterado = _.findWhere($scope.jogadores, {id: jogadorId});
    $scope.estadoInsert = 'hidden';
    $scope.jogadorUpId = alterado.id;
    $scope.jogadorUpNome = alterado.nome;
    $scope.jogadorUpApelido = alterado.apelido;
    $scope.estadoUpdate = 'show';
  }

  $scope.cancelaEdicao = function() {
    $scope.jogadorUpId = '';
    $scope.jogadorUpNome = '';
    $scope.jogadorUpApelido = '';
    $scope.estadoInsert = 'show';
    $scope.estadoUpdate = 'hidden';
  }

  $scope.updateJogador = function(jogadorId) {
    $http.put('/jogadores/' + jogadorId, { nome: $scope.jogadorUpNome, apelido: $scope.jogadorUpApelido })
        .success(function(data, status) {
          $scope.jogadores = _.filter($scope.jogadores, function(jogador) {
            if(jogador.id == parseInt(jogadorId)) {
              jogador.nome = $scope.jogadorUpNome;
              jogador.apelido = $scope.jogadorUpApelido;
            }
            return true;
          });
          $scope.estadoInsert = 'show';
          $scope.estadoUpdate = 'hidden';
        })
        .error(function(data, status) {
          console.log(status);
        });
  }

  $scope.searchJogador = function (item){
    if (item.nome.indexOf($scope.query)!=-1 || item.apelido.indexOf($scope.query)!=-1) {
      return true;
    }
    return false;
  }
} 

'use strict';

/* Controllers */

var detalhesEtapaController = angular.module('detalhesEtapaController', []);
 
function DetalhesEtapaCtrl($scope, $http, $routeParams) {

  $scope.teste = parseInt("1");

  $http({ method: 'GET', url: 'jogadores', cache: false }).
    success(function(data, status) {
      $scope.listaJogadores = data;
  });

  $http({ method: 'GET', url: 'detalhes/etapa/' + $routeParams.etapaId, cache: false }).
    success(function(data, status) {
      $scope.etapa = data;

      $scope.$watch('etapa.jogadores', function(jogadores) {
        $scope.qtdRebuys = 0;
        $scope.qtdAddons = 0;
        $scope.eliminados = 0;
        $scope.jogando    = 0;
        angular.forEach(jogadores, function(jogador) {
          jogador.addons = parseInt(jogador.addons);
          jogador.rebuys = parseInt(jogador.rebuys);
          $scope.qtdRebuys += parseInt(jogador.rebuys);
          $scope.qtdAddons += parseInt(jogador.addons);
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

  $scope.updateNomeEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'nome', nome: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.updateDataEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'data', data: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.updateValorBuyinEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'valor_buyin', valor_buyin: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.updateFichasBuyinEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'fichas_buyin', fichas_buyin: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.updateValorAddonEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'valor_addon', valor_addon: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.updateFichasAddonEtapa = function(data) {
    $http.put('/etapas/' + $scope.etapa.id, { campo: 'fichas_addon', fichas_addon: data })
      .success(function(data, status) {
        console.log(data);
        return true;
      })
      .error(function(data, status) {
        console.log(data);
      });
  }

  $scope.alteraAddon = function(etapaJogadorId, data) {
      $http.post('/detalhes/alteraaddon/' + etapaJogadorId, { addons: data } )
        .success(function(data, status) {
          console.log(data);
          return true;
        })
        .error(function(data, status) {
          console.log(data);
        });
  }

  $scope.alteraRebuy = function(etapaJogadorId, data) {
      $http.post('/detalhes/alterarebuy/' + etapaJogadorId, { rebuys: data } )
        .success(function(data, status) {
          console.log(data);
          return true;
        })
        .error(function(data, status) {
          console.log(data);
        });
  }

  $scope.updateInfos = function() {
        $scope.qtdRebuys = 0;
        $scope.qtdAddons = 0;
        $scope.eliminados = 0;
        $scope.jogando    = 0;
        angular.forEach($scope.etapa.jogadores, function(jogador) {
          $scope.qtdRebuys += parseInt(jogador.rebuys);
          $scope.qtdAddons += parseInt(jogador.addons);
          if (jogador.posicao > 0) {
            $scope.eliminados += 1;
          }else {
            $scope.jogando += 1;
          }
        });
      }


  $scope.addEtapaJogador = function() {
      $http.post('/etapajogadores', { etapaid: $scope.etapa.id, apelido: $scope.jogadorApelido } )
        .success(function(data, status) {
          if(data) {
            $scope.jogadorApelido  = '';
            $scope.etapa.jogadores = data.jogadores;
          } else {
            console.log('There was a problem. Status: ' + status + '; Data: ' + data);
          }
        })
        .error(function(data, status) {
          console.log('status: ' + status);
        });
  }

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

  $scope.eliminarJogadorEtapa = function(etapaJogadorId) {
      $http.post('/detalhes/eliminajogador/' + etapaJogadorId )
        .success(function(data, status) {
          console.log(data);
          $http({ method: 'GET', url: 'detalhes/etapa/' + $routeParams.etapaId, cache: false }).
            success(function(data, status) {
              $scope.etapa.jogadores = data.jogadores;
            });
        })
        .error(function(data, status) {
          console.log(data);
        });
  }
}
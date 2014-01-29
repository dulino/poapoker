'use strict';

/* Controllers */

var rankingController = angular.module('rankingsController', []);
 
function RankingsCtrl($scope, $http) {

  $http({ method: 'GET', url: 'rankings', cache: true }).
    success(function(data, status) {
      $scope.rankings = data;
      $scope.estadoInsert = 'show';
      $scope.estadoUpdate = 'hidden';
      $scope.rankingUpId = '0';
      $scope.rankingUpDescricao = '';
      $scope.rankingDescricao = '';
    }).error(function(data, status) {
      console.log('Status: ' + status);
    });

  $scope.addRanking = function() {
      $http.post('/rankings', { descricao: $scope.rankingDescricao } ).success(function(data, status) {
      if(data) {
        var last = _.last($scope.rankings);
        $scope.rankings.push({descricao: $scope.rankingDescricao, id: data });
        $scope.rankingDescricao = '';
        console.log($scope.rankings);
      } else {
        console.log('There was a problem. Status: ' + status + '; Data: ' + data);
      }
    }).error(function(data, status) {
      console.log('status: ' + status);
    });
  }

  $scope.clearRanking = function(rankingId) {
    $http.delete('/rankings/' + rankingId)
      .success(function(data, status) {
        $scope.rankings = _.filter($scope.rankings, function(ranking) {
          return !(ranking.id == parseInt(rankingId));
        });
      })
      .error(function(data, status) {
        console.log(data.error.message);
      });
  }

  $scope.setaRanking = function(rankingId) {
    var alterado = _.findWhere($scope.rankings, {id: rankingId});
    $scope.estadoInsert = 'hidden';
    $scope.rankingUpId = alterado.id;
    $scope.rankingUpDescricao = alterado.descricao;
    $scope.estadoUpdate = 'show';
  }

  $scope.cancelaEdicao = function() {
    $scope.rankingUpId = '';
    $scope.rankingUpDescricao = '';
    $scope.estadoInsert = 'show';
    $scope.estadoUpdate = 'hidden';
  }

  $scope.updateRanking = function(rankingId) {
    $http.put('/rankings/' + rankingId, { descricao: $scope.rankingUpDescricao })
        .success(function(data, status) {
          $scope.rankings = _.filter($scope.rankings, function(ranking) {
            if(ranking.id == parseInt(rankingId)) {
              ranking.descricao = $scope.rankingUpDescricao;
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
}
var poapokerApp = angular.module('poapokerApp', [
  'ngRoute',
  'jogadoresController',
  'rankingsController',
  'ui.bootstrap'
]);

poapokerApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/jogadores', {
        templateUrl: 'templates/jogadores.html',
        controller: 'JogadoresCtrl'
      }).
      when('/rankings', {
        templateUrl: 'templates/rankings.html',
        controller: 'RankingsCtrl'
      }).
      otherwise({
        redirectTo: '/jogadores'
      });
  }]);


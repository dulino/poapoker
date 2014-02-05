var poapokerApp = angular.module('poapokerApp', [
  'ngRoute',
  'jogadoresController',
  'rankingsController',
  'etapasController',
  'detalhesEtapaController',
  'ui.bootstrap',
  'xeditable'
]);

poapokerApp.run(function(editableOptions, editableThemes) {
  editableThemes.bs3.inputClass = 'input-sm';
  editableThemes.bs3.buttonsClass = 'btn-sm';
  editableOptions.theme = 'bs3';
});

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
      when('/etapas', {
        templateUrl: 'templates/etapas.html',
        controller: 'EtapasCtrl'
      }).
      when('/detalhes/etapa/:etapaId', {
        templateUrl: 'templates/detalhesEtapa.html',
        controller: 'DetalhesEtapaCtrl'
      }).
      otherwise({
        redirectTo: '/jogadores'
      });
  }]);


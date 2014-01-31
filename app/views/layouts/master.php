<!DOCTYPE html>
<html lang="en" ng-app="poapokerApp">
  <head>
    <title>POAPOKER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/navbar-fixed-top.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/especifica.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-route.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-resource.js"></script>
    <script src="js/controllers/jogadores.js"></script>
    <script src="js/controllers/rankings.js"></script>
    <script src="js/controllers/etapas.js"></script>
    <script src="js/app.js"></script>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ui-bootstrap-tpls-0.10.0.min.js"></script>

  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">POA Poker</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Jogadores</a></li>
            <li><a href="#about">Ranking</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#/jogadores">Jogador</a></li>
                <li><a href="#/rankings">Ranking</a></li>
                <li><a href="#/etapas">Etapa</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container" ng-view>
    </div>
  </body>
</html>
<?php
  include("config.php");
  
  echo(SQL_SERVER);

?>


<!-- index.html -->
<!DOCTYPE html>
<html ng-app="cnpcApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- load bootstrap and fontawesome via CDN -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />
    <link rel="stylesheet" href="css/simple-slideshow-styles.css" />

    <!-- load angular and angular route via CDN -->
    <script src="js/better-simple-slideshow.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/site.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- Set base for HTML5 browsing history -->
    <base href="/">
  </head>
  
  <body ng-controller="mainController">
    <!-- HEADER AND NAVBAR -->

      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Canberra National Pistol Club</a>
          </div>
          
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
              <li><a href="#about"><i class="fa fa-shield"></i>About</a></li>
              <li><a href="#contact"><i class="fa fa-comment"></i>Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- MAIN CONTENT AND INJECTED VIEWS -->
    <div id="main">
      
    <!-- angular templating -->
    <!-- this is where content will be injected -->
    <div ng-view></div>

    </div>
  </body>
</html>
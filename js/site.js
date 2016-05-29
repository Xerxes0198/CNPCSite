var cnpcApp = angular.module('cnpcApp', ['ngRoute']);

cnpcApp.config(function($routeProvider, $locationProvider)
{
  $routeProvider
    .when('/', {
      templateUrl : 'pages/home.html',
      controller  : 'mainController'
    })
    
    .when('/about', {
      templateUrl : 'pages/about.html',
      controller  : 'aboutController'
    })
    
    .when('/contact', {
      templateUrl : 'pages/contact.html',
      controller  : 'contactController'
    });
    
    $locationProvider.html5Mode(true);
});

//Inject scope
cnpcApp.controller('mainController', function($scope)
{
  $scope.message = 'Test Message';
});

cnpcApp.controller('aboutController', function($scope)
{
    $scope.message = 'Look! I am an about page.';
});

cnpcApp.controller('contactController', function($scope)
{
  sendMessage = function()
  {
    //Check fields aren't blank
    
    
    //TODO: Finish checking and message sending
    alert("Apologies, this functionality has not yet been completed."); 
  }
});
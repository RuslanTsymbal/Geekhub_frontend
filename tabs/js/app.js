   var myApp = angular.module('myApp', ['ui.router']);

   angular.module('myApp', ['restangular', 'ui.router'])
       .config(function ($stateProvider, $urlRouterProvider) {
           var partialsUrl = 'templates/';
           $stateProvider
               .state('main', {
                   url: "/main",
                   templateUrl: partialsUrl + 'main.html', controller: 'mainCtrl'
               })

           .state('info', {
               url: "/info",
               templateUrl: partialsUrl + 'info.html', controller: 'infoCtrl'
           })

           .state('contacts', {
               url: "/contacts",
               templateUrl: partialsUrl + 'contacts.html', controller: 'contactsCtrl'
           });
           $urlRouterProvider.otherwise('/main');
       });
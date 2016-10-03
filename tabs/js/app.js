 //  var myApp = angular.module('myApp', [ 'ui.router']);
 //
 ////myApp.config(function ($stateProvider, $urlRouterProvider) {
 //  //          var partialsUrl = 'templates/';
 //  //          $stateProvider
 //  //              .state('main', {
 //  //                  url: "/main",
 //  //                  templateUrl: partialsUrl + 'main.html', controller: 'mainCtrl'
 //  //              })
 //  //
 //  //          .state('info', {
 //  //              url: "/info",
 //  //              templateUrl: partialsUrl + 'info.html', controller: 'infoCtrl'
 //  //          })
 //  //
 //  //          .state('contacts', {
 //  //              url: "/contacts",
 //  //              templateUrl: partialsUrl + 'contacts.html', controller: 'contactsCtrl'
 //  //          });
 //  //          $urlRouterProvider.otherwise('/main');
 //  //      });

 var myApp = angular.module('myApp', ['ui.router']);

 myApp.config(function($stateProvider) {
     var main = {
         name: 'main',
         url: '/main',
         template: '<h3>hello world!</h3>'
     }

     var info = {
         name: 'info',
         url: '/info',
         template: '/templates/info.html'
     }

     var contacts = {
         name: 'contacts',
         url: '/contacts',
         template: '<h3>Its the UI-Router hello world app!</h3>'
     }

     $stateProvider.state(main);
     $stateProvider.state(info);
     $stateProvider.state(contacts);
 });


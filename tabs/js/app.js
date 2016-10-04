var myApp = angular.module('myApp', ['ui.router']);

myApp.config(function ($stateProvider) {
    //debugger;
    var main = {
        name: 'main',
        url: '/main',
        templateUrl: 'templates/main.html',
        controller: 'mainCtrl'
    };

    var info = {
        name: 'info',
        url: '/info',
        templateUrl: 'templates/info.html',
        controller: 'infoCtrl'
    };

    var contacts = {
        name: 'contacts',
        url: '/contacts',
        templateUrl: 'templates/contacts.html',
        controller: 'contactsCtrl'

    };
    $stateProvider.state(main);
    $stateProvider.state(info);
    $stateProvider.state(contacts);

});

/*Получаем говое название Закладки*/

myApp.controller('topCtrl', function ($scope) {
    $scope.addTab = function () {
        var newValueTab = prompt("Введите новое название закладки");
        console.log(newValueTab);
    }
});
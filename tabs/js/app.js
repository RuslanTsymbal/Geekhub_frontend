myApp = angular.module('myApp', ['ui.router']);
var items = {};

myApp.factory('Items',function(){
    //debugger;
    var items = {};
    items.add = function(a){
        items = {value: a};
        return items;
    };
    return items;
});

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

myApp.controller('topCtrl', function ($scope, Items) {
    debugger;
    var newValueTab;
    $scope.addTab = function () {
        debugger;
        newValueTab = prompt("Введите новое название закладки");
        console.log(newValueTab);
        items = Items.add(newValueTab);
        console.log(items);
    };
});


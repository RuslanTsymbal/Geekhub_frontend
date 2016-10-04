angular.module('myApp').component('tabs', {
        templateUrl: 'components/tabs/template.html',
        controller: "tabsCtrl"
    });

myApp.controller('tabsCtrl', function ($scope) {
    //debugger;
    $scope.tabs = [
        {value: 'main', effect : "Удалить"},
        {value: 'info', effect : "Удалить"},
        {value: 'contacts', effect : "Удалить"}
    ];
});


angular.module('myApp').component('tabs', {
        templateUrl: 'components/tabs/template.html',
        controller: "tabsCtrl"
    });

myApp.controller('tabsCtrl', function ($scope, Items) {
debugger;
    $scope.tabs = [
        {value: 'main'},
        {value: 'info'},
        {value: 'contacts'}
    ];
    $scope.dell = "Удалить";

    //$scope.fromFactory = (function (){
    //    alert (Items);
    // });

    //$scope.fromFactory = Items;
    //console.log($scope.fromFactory);
});

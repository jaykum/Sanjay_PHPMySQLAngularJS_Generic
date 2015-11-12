(function () {

    var dataService = function ($http) {

        //var getTable = function () {
        //    return $http.get("services/getTable.php")
        //};

        var getTable = function () {
            return $http.get("services/getTable.php", { timeout: 3000 })
                 .then(function (response) {
                     return response.data;
                 }).catch(function () {
                     return [{'col1':'There was an error in getting the data'}];
                 })
            };

        return {
            getTable: getTable
        };
    };

    var module = angular.module("PHPAngularJSDemo");

    module.factory("dataService", dataService);

}());
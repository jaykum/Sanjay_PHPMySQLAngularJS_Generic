(function () {
    var app = angular.module("PHPAngularJSDemo", []);

    app.controller("firstController", function (dataService) {

        var that = this;
        this.tableData = [{ 'col1': 'No data found yet' }];

        dataService.getTable().then(function (data) {
            that.tableData = data;
        });

        //following code is for a toggle type drop down menue useful for small device implementation
        this.navOpen = false;

        this.toggle = function () {
            this.navOpen = !this.navOpen;
        };

    });

    //nested controller in case you want to compartmentalize some function
    app.controller("secondController", function () {
        this.test1 = "Output of a nested AngularJS controller";
    });


}());
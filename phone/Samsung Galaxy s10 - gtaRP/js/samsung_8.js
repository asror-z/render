var app = angular.module("app", []);
app.controller("ctrl", function ($scope, $timeout) {
    $scope.callStatus = "outgoing";
    $scope.isAcceptVisible = true;
    // Pass Views through this function to toggle
    $scope.toggleView = function (val, contact) {
        //toggle call
        if (val == "call") {
            $scope.callToggle = !$scope.callToggle;
            $scope.call_phone_number = "";
        }
        // toggle calling
        if (val == "calling") {
            $scope.callToggle = false;
            $scope.phoneCallActiveToggle = !$scope.phoneCallActiveToggle;
        }
    };
});
function dis(val) {
    document.getElementById("calling").value += val
}
function clr() {
    document.getElementById("calling").value =  ''
}

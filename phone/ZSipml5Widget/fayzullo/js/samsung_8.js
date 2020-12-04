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

        if (val == "videocall") {
            $scope.callToggle = !$scope.callToggle;
            $scope.call_video_number = "";
        }
        // toggle calling
        if (val == "videocalling") {
            $scope.callToggle = false;
            $scope.videoCallActiveToggle = !$scope.videoCallActiveToggle;
        }

    };
});
function dis(val) {
    document.getElementById("txtPhoneNumber").value += val
}
function clr() {
    document.getElementById("txtPhoneNumber").value = ""
}

$('#res_btn').click(function () {
    // $(this).preventDefault();
    $('.or2').toggleClass('res_active');
});

$('.out_phone').click(function () {
    $('.or2').removeClass('res_active');
});
$('#callBtn').click(function (){
    $('.one').addClass('active');
    $('.two').removeClass('active');
});
$('#videoBtn').click(function (){
    $('.two').addClass('active');
    $('.one').removeClass('active');
});

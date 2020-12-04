$(function () {
    $('#vmap').vectorMap({
        map: 'turkey',
        onRegionClick: function (element, code, region) {
            var message = 'You clicked "'+ region + '" which has the code: '+ code.toUpperCase();
            alert(message);
        }
    });
});

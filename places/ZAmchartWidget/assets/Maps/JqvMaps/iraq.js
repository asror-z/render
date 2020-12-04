$(function () {
    $('#vmap').vectorMap({
        map: 'iraq',
        backgroundColor: '#fff',
        borderColor: '#818181',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#eee',
        enableZoom: false,
        hoverColor: '#DA251D',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        selectedColor: '#fff',
        showTooltip: true,
        onRegionClick: function (element, code, region) {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    });
});

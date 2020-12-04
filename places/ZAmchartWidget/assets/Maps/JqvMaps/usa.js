$(function () {
    $('#vmap').vectorMap({
        map: 'usa_en',
        enableZoom: true,
        showTooltip: true,
        selectedColor: null,
        hoverColor: null,
        colors: {
            mo: '#C9DFAF',
            fl: '#C9DFAF',
            or: '#C9DFAF'
        },
        onRegionClick: function(event, code, region){
            event.preventDefault();
        }
    });
});

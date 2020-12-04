<?php
/**
 * Author:  Zoirjon Sobirov
 * @license  Zoirjon Sobirov
 * linkedIn: https://www.linkedin.com/in/zoirjon-sobirov/
 * Telegram: https://t.me/zoirjon_sobirov
 * @copyright zhead, zstart, zend
 * 36 lines
 */
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    html,body{margin:0px;height:100%;width:100%}
    .container{width:100%;height:100%}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/maptalks/dist/maptalks.min.js"></script>
<body>

<div id="map" class="container" style="width:100%; height:600px"></div>
<script>
    const center = [41.3270415, 69.3235007];
    var map = new maptalks.Map('map', {
        center: center,
        zoom: 14,
        pitch : 45,
        attribution: true,
        zoomControl : true, // add zoom control
        scaleControl : true, // add scale control
        overviewControl : true, // add overview control
        baseLayer: new maptalks.TileLayer('base', {
            urlTemplate: 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',
            subdomains: ['a','b','c','d'],
            attribution: '&copy; <a href="http://osm.org">OpenStreetMap</a> contributors, &copy; <a href="https://carto.com/">CARTO</a>'
        })
    });
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
                let pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var center = map.getCenter();
                var marker1 = new maptalks.Marker(
                    center.sub(0.0009,1),
                    {
                        'symbol' : {
                            'markerFile'   : 'https://cdn.iconscout.com/icon/premium/png-256-thumb/navigation-1783884-1516971.png',
                            'markerWidth'  : 28,
                            'markerHeight' : 40,
                            'markerDx'     : 0,
                            'markerDy'     : 0,
                            'markerOpacity': 1
                        }
                    }
                );

                var point = new maptalks.Marker(
                    [position.coords.latitude, position.coords.longitude],
                    {
                        visible : true,
                        editable : true,
                        cursor : 'pointer',
                        shadowBlur : 0,
                        shadowColor : 'black',
                        draggable : false,
                        dragShadow : false, // display a shadow during dragging
                        drawOnAxis : null,  // force dragging stick on a axis, can be: x, y
                        symbol : {
                            'markerFile'   : 'https://cdn.iconscout.com/icon/premium/png-256-thumb/navigation-1783884-1516971.png',
                            'markerWidth'  : 28,
                            'markerHeight' : 40,
                            'markerDx'     : 0,
                            'markerDy'     : 0,
                            'markerOpacity': 1
                        }
                    }
                );

                new maptalks.VectorLayer('vector', point).addTo(map);

            },
            function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

</script>
</body>
</html>

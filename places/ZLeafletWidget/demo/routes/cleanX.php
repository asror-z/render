<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Leaflet.Control.Gps</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.css"/>
    <link rel="stylesheet"
          href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
    <link rel="stylesheet" href="/render/places/ZLeafletWidget/demo/device_motions/css/leafletNew.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

</head>

<body>

<div id="map"></div>

<br/>
<div id="search-box"></div>
<!-- To display the result -->
<div id="result"></div>

<!--<button id="routeButton">routes</button>-->


<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-gps/f6b4c97ed229a7cd0951948b1af7b46da6780da8/src/leaflet-gps.js"></script>
<script src="https://rawcdn.githack.com/stefanocudini/leaflet-compass/c15c64da0b881a80f8b5b129d3c0a420c95d74ac/src/leaflet-compass.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-search@2.9.8/dist/leaflet-search.src.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.72.0/src/L.Control.Locate.min.js"
        charset="utf-8"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-rotatedmarker@0.2.0/leaflet.rotatedMarker.min.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<script>

    var greenIcon = L.icon({
        iconUrl: '/render/places/ZLeafletWidget/demo/device_motions/images/pngwing.png',
        iconSize: [25, 30], // size of the icon
    });


    var map = new L.map('map', {
        zoom: 16,
        center: new L.latLng([51.575730, 23.002411]),
        //searchControl: {layer: searchLayer},
    });

    //var searchLayer = L.geoJson().addTo(map);

    //map.addControl(new L.Control.Search({layer: searchLayer}));

    map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer


    /*L.Routing.control({

    }).addTo(map);*/



    var lc =  L.control.locate({
        position: 'bottomright',  // задаем местоположение элемента управления
        drawCircle: true,  // определяет, будет ли нарисован круг, показывающий неопределенность местоположени
        follow: false,  // следовать за местоположением пользователя
        setView: false, // автоматически устанавливает вид карты для местоположения пользователя, включается, если `follow` истинно
        keepCurrentZoomLevel: false, //  сохраняет текущий уровень масштабирования карты при отображении местоположения пользователя. (если` false`, используйте maxZoom)
        stopFollowingOnDrag: false, // прекращать отслеживание при перетаскивании карты, если `follow` истинно (устарело, см. ниже)
        remainActive: false, // если true, элемент управления местоположением остается активным при нажатии, даже если местоположение пользователя находится в поле зрения.
        stayActive : false, // если true, контроль местоположения остается активным при щелчке, даже если местоположение пользователя находится в поле зрения
        markerClass: L.circleMarker, // L.circleMarker or L.marker
        circleStyle: {},  // изменить стиль круга вокруг пользователя местонахождения
        markerStyle: {},
        followCircleStyle: {},  // установить различие для стиля круга вокруг местоположения пользователя, следуя
        followMarkerStyle: {},
        icon: 'fas fa-search-location fa-1x',  // класс для значка, fa-location-arrow или fa-map-marker
        iconLoading: 'fa fa-spinner fa-spin',  // класс для загрузки значка
        circlePadding: [0, 0], // отступ вокруг круга точности, значение передается в setBounds
        metric: true,  // использовать метрические или британские единицы
        onLocationError: function(err) {alert(err.message)},  //  определение функции обратного вызова ошибки
        onLocationOutsideMapBounds:  function(context) { // вызывается, когда за пределами карты
            alert(context.options.strings.outsideMapBoundsMsg);
        },
        showPopup: true, // отображаем всплывающее окно, когда пользователь нажимает на
        strings: {
            title: "показать мое местоположение",  // название объекта управления местонахождением
            metersUnit: "meters", // строка для метрических единиц
            feetUnit: "feet", // строка для имперских единиц
            popup: "You are within {distance} {unit} from this point",  // текст, который будет отображаться, если пользователь щелкнет круг
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map" // сообщение по умолчанию для onLocationOutsideMapBounds
        },
        locateOptions: {
            enableHighAccuracy: true
        },  // определяем параметры местоположения, например enableHighAccuracy: true или maxZoom:10
        showAlternatives: true,
    }).addTo(map);

    lc.start();


    /*var geocoder = L.Control.geocoder({
        defaultMarkGeocode: false,
        collapsed: true,
    })
        .on('markgeocode', function (event) {
            var bbox = e.geocode.bbox;
            var poly = L.polygon([
                bbox.getSouthEast(),
                bbox.getNorthEast(),
                bbox.getNorthWest(),
                bbox.getSouthWest()
            ]).addTo(map);
            map.fitBounds(poly.getBounds());
        })
        .addTo(map);*/


    function locate() {
        map.locate({setView: false});
    }

    //setInterval(locate, 500);

    var waypoint = null;

    function setWayPoints(latA,lngA,latB,lngB){
        var routeWaypoint = (L.Routing.control({
            waypoints: [
                L.latLng(latA, lngA),
                L.latLng(latB, lngB)
            ],
        }));

        if (waypoint !== null){
            map.removeControl(waypoint);
            waypoint = routeWaypoint.addTo(map);
            console.log("Working IF condition");
        }else {
            waypoint = routeWaypoint.addTo(map);
            console.log("Working ELSE condition")
        }
    }

    if (window.DeviceOrientationEvent) {
        window.addEventListener('deviceorientation', function (event) {
            let alpha = event.alpha;
            let beta = event.beta;
            let gamma = event.gamma;
            //console.log(gps);
        })
    }
    //gps.addTo(map);

</script>
</body>
</html>

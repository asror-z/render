
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="geoobject_events.js" type="text/javascript"></script>
    <style type="text/css">
        #map {
            width: 100%;
            height: 600px;
            margin: 0;
            padding: 0;
        }

        #log {
            width: 200px;
            height: 100px;
            position: absolute;
            left: 5px;
            bottom: 5px;
            opacity: 0.7;
            padding: 5px;
            font-family: Courier, sans-serif;
            font-size: 14px;
            background: white;
            overflow: auto;
        }
    </style>



<div id="map"></div>
<div id="log"></div>


<script>ymaps.ready(init);

function init () {
    var log = document.getElementById('log'),
        myMap = new ymaps.Map("map", {
            center: [48.856929, 2.341198],
            zoom: 1,
            controls: ['zoomControl']
        }),
        myCircle = new ymaps.Circle([myMap.getCenter(), 1000000], {
            balloonContentBody: 'Балун',
            hintContent: 'Хинт'
        }, {
            draggable: true
        });

    myCircle.events.add([
        'mapchange', 'geometrychange', 'pixelgeometrychange', 'optionschange', 'propertieschange',
        'balloonopen', 'balloonclose', 'hintopen', 'hintclose', 'dragstart', 'dragend'
    ], function (e) {
        log.innerHTML = '@' + e.get('type') + '<br/>' + log.innerHTML;
    });

    myMap.geoObjects.add(myCircle);

    setupControls(myMap, myCircle);
}

function setupControls(map, geoObject) {
    var btnProperty = new ymaps.control.Button('Свойство: balloonHeader'),
        btnOption = new ymaps.control.Button('Опция: geodesic'),
        btnRadius = new ymaps.control.Button('Изменить радиус');

    btnProperty.options.set('maxWidth', 200);
    btnOption.options.set('maxWidth', 200);
    btnRadius.options.set('maxWidth', 200);

    btnProperty.events.add(['select', 'deselect'], function (e) {
        geoObject.properties.set('balloonContentHeader', e.get('type') == 'select' ? 'Заголовок' : undefined);
    });
    btnOption.events.add(['select', 'deselect'], function (e) {
        geoObject.options.set('geodesic', e.get('type') == 'select');
    });
    btnRadius.events.add(['select', 'deselect'], function (e) {
        geoObject.geometry.setRadius(e.get('type') == 'select' ? 2000000 : 1000000);
    });

    map.controls
        .add(btnProperty)
        .add(btnOption)
        .add(btnRadius);
}
</script>


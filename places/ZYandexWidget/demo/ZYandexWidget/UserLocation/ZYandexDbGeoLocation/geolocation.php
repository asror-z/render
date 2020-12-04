
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>

    <style>
        html, body, #map {
            width: 100%; height: 900px;
        }
    </style>

<body>
<div id="map"></div>
</body>
<script>
    ymaps.ready(init);

    function init() {
        var geolocation = ymaps.geolocation,
            myMap = new ymaps.Map('map', {
                center: [55, 34],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            });

        /**
         * Comparing the position calculated from the user's IP address
         * and the position detected using the browser.
         */
        geolocation.get({
            provider: 'yandex',
            mapStateAutoApply: true
        }).then(function (event) {
            // We'll mark the position calculated by IP in red.
            result.geoObjects.options.set('preset', 'islands#redCircleIcon');
            result.geoObjects.get(0).properties.set({
                balloonContentBody: 'My location'
            });
            myMap.geoObjects.add(result.geoObjects);
        });

        geolocation.get({
            provider: 'browser',
            mapStateAutoApply: true
        }).then(function (event) {
            /**
             * We'll mark the position obtained through the browser in blue.
             * If the browser does not support this functionality, the placemark will not be added to the map.
             */
            result.geoObjects.options.set('preset', 'islands#blueCircleIcon');
            myMap.geoObjects.add(result.geoObjects);
        });
    }
</script>


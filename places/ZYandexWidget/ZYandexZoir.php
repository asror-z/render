<!DOCTYPE html>
<html>
    <head>
    <title>Examples. Placemark</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--
        Set your own API-key. Testing key is not valid for other web-sites and services.
        Get your API-key on the Developer Dashboard: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    
    <style>
        html, body, #map {
            width: 100%; height: 100%; padding: 0; margin: 0;
        }
    </style>

</head>
<body>
    <div id="map">
    </div>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                    center: [41.327069, 69.281797],
                    zoom: 12
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Creating a geo object with the "Point" geometry type.
                myGeoObject = new ymaps.GeoObject({
                    // The geometry description.
                    geometry: {
                        type: "Point",
                        coordinates: [41.327069, 69.281797]
                    },
                    // Properties.
                    properties: {
                        // The placemark content.
                        iconContent: 'I\'m draggable',
                        hintContent: 'Come on, drag already!'
                    }
                }, {
                    /**
                     * Options.
                     * The placemark's icon will stretch to fit its contents.
                     */
                    preset: 'islands#blackStretchyIcon',
                    // The placemark can be dragged.
                    draggable: true
                }),
            myMap.geoObjects
                .add(myGeoObject)
                .add(myPieChart)
                .add(new ymaps.Placemark([41.327069, 69.281797], {
                    balloonContent: 'the color of <strong>the water on Bondi Beach</strong>'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }))
                .add(new ymaps.Placemark([55.833436, 37.715175], {
                    balloonContent: '<strong>greyish-brownish-maroon</strong> color'
                }, {
                    preset: 'islands#dotIcon',
                    iconColor: '#735184'
                }))
                .add(new ymaps.Placemark([55.687086, 37.529789], {
                    balloonContent: 'the color of <strong>enamored toads</strong>'
                }, {
                    preset: 'islands#circleIcon',
                    iconColor: '#3caa3c'
                }))
                .add(new ymaps.Placemark([55.782392, 37.614924], {
                    balloonContent: 'the color of <strong>Surprise Dauphin</strong>'
                }, {
                    preset: 'islands#circleDotIcon',
                    iconColor: 'yellow'
                }))
                .add(new ymaps.Placemark([55.642063, 37.656123], {
                    balloonContent: '<strong>red</strong> color'
                }, {
                    preset: 'islands#redSportIcon'
                }))
                .add(new ymaps.Placemark([55.826479, 37.487208], {
                    balloonContent: '<strong>Facebook</strong> color'
                }, {
                    preset: 'islands#governmentCircleIcon',
                    iconColor: '#3b5998'
                }))
                .add(new ymaps.Placemark([55.694843, 37.435023], {
                    balloonContent: '<strong>crocodile\'s nose</strong> color',
                    iconCaption: 'Really, really long but super interesting text'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }))
                .add(new ymaps.Placemark([55.790139, 37.814052], {
                    balloonContent: '<strong>blue</strong> color',
                    iconCaption: 'Really, really long but super interesting text'
                }, {
                    preset: 'islands#blueCircleDotIconWithCaption',
                    iconCaptionMaxWidth: '50'
                }));
        }

    </script>
</body>
</html>

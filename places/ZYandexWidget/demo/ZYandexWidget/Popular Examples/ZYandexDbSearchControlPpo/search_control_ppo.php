
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    <style>
        html, body, #map {
            width: 100%; height: 900px; padding: 0; margin: 0;
        }
    </style>

<div id="map"></div>

<script>
    function init() {
        var myMap = new ymaps.Map('map', {
            center: [55.74, 37.58],
            zoom: 13,
            controls: []
        });

        /**
         * Creating an instance of the "Search on map" control
         * with the option enabled for the business search data provider.
         */
        var searchControl = new ymaps.control.SearchControl({
            options: {
                provider: 'yandex#search'
            }
        });

        myMap.controls.add(searchControl);

        /**
         * Programmatically performing a search for specific cafes within the
         * rectangular map area.
         */
        searchControl.search('Shokoladnitsa');
    }

    ymaps.ready(init);


</script>

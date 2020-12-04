
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    <style>
       #map {
            width: 100%;
            height: 700px;
            padding: 0;
            margin: 0;
        }
    </style>

<body>
<div id="map"></div>
</body>
<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
            center: [41.311081, 69.240562],
            zoom: 13,
            controls: ['routeButtonControl']
        });

        // Get a reference to the routing panel.
        var control = myMap.controls.get('routePanelControl');

// Set states for the routing panel.
            
        
        
    });
</script>



    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<5fb7da25-bc18-4612-b304-83ea2266c510>" type="text/javascript"></script>
    <style type="text/css">
      #map {
            width: 100%;
            height: 900px;
        }
    </style>
<body>
<div id="map"></div>
</body>
    <script>
    ymaps.ready(function () {
        var map = new ymaps.Map('map', {
            center: [55.755249, 37.617437],
            zoom: 4
        });
    });
    </script>

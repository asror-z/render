
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
    <script type="text/javascript">
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [55.753994, 37.622093],
                zoom: 9,
                controls: []
            });

            // Create the route.
            var multiRoute = new ymaps.multiRouter.MultiRoute({
                referencePoints: [
                    [55.734876, 37.59308],
                    [55.761184, 37.57850]
                ]
            }, {
                boundsAutoApply: true
            });

            // Add the route to the map.
            myMap.geoObjects.add(multiRoute);

            // Subscribe to the event for updating route data.
            multiRoute.model.events.add('requestsuccess', function() {
                // Get a reference to the active route.
                // The example uses a driving route, so
                // the getActiveRoute() method returns the multiRouter.driving.Route object.
                var activeRoute = multiRoute.getActiveRoute();
                // Output route information.
                console.log("Distance: " + activeRoute.properties.get("distance").text);
                console.log("Travel time: " + activeRoute.properties.get("duration").text);
                // For driving routes, information about
                // closed sections of road can be output.
                if (activeRoute.properties.get("blocked")) {
                    console.log("The route has sections with closed roads.");
                }
            });
            // Add the route to the map.
            myMap.geoObjects.add(multiRoute);
        });
    </script>  


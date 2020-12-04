
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
        <style>
       #map {
            width: 100%; height: 900px; padding: 0; margin: 0;
        }
    </style>

<body>
<div id="map"></div>
</body>
<script>
    function init () {
        
        var multiRoute = new ymaps.multiRouter.MultiRoute({
            // The description of the reference points on the multi-stop route.
            referencePoints: [
                [55.734876, 37.59308],
                "Moscow, Myasnitskaya Street"
            ],
            // Routing options.
            params: {
                // Limit on the maximum number of routes returned by the router.
                results: 2
            }
        }, {
            // Automatically set the map boundaries so the entire route is visible.
            boundsAutoApply: true
        });

        // Creating buttons for controlling the multiroute.
        var trafficButton = new ymaps.control.Button({
                data: { content: "Considering traffic" },
                options: { selectOnClick: true }
            }),
            viaPointButton = new ymaps.control.Button({
                data: { content: "Adding a throughpoint" },
                options: { selectOnClick: true }
            });

        // Declaring handlers for the buttons.
        trafficButton.events.add('select', function () {
            /**
             * Setting routing parameters for the multiroute model.
             * @see https://api.yandex.com/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel.xml#setParams
             */
            multiRoute.model.setParams({ avoidTrafficJams: true }, true);
        });

        trafficButton.events.add('deselect', function () {
            multiRoute.model.setParams({ avoidTrafficJams: false }, true);
        });

        viaPointButton.events.add('select', function () {
            var referencePoints = multiRoute.model.getReferencePoints();
            referencePoints.splice(1, 0, "Moscow, Solyanka Street, 7");

            multiRoute.model.setReferencePoints(referencePoints, [1]);
        });

        viaPointButton.events.add('deselect', function () {
            var referencePoints = multiRoute.model.getReferencePoints();
            referencePoints.splice(1, 1);
            multiRoute.model.setReferencePoints(referencePoints, []);
        });

        // Creating the map with buttons added to it.
        var myMap = new ymaps.Map('map', {
            center: [55.750625, 37.626],
            zoom: 7,
            controls: [trafficButton, viaPointButton]
        }, {
            buttonMaxWidth: 300
        });

        // Adding a multiroute to the map.
        myMap.geoObjects.add(multiRoute);
    }

    ymaps.ready(init);
</script>



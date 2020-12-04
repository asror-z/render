    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>

    <style>
        html, body, #map {
            width: 100%; height: 600px; padding: 0; margin: 0;
        }
    </style>

<div id="map"></div>

  <script>
      function init () {
          /**
           * Creating a multiroute.
           * @see https://api.yandex.com/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml
           */
          var multiRoute = new ymaps.multiRouter.MultiRoute({
              referencePoints: [
                  [55.749, 37.524],
                  "Moscow, Uspensky Lane, 7"
              ],
              params: {
                  routingMode: 'masstransit'
              }
          }, {
              // Automatically set the map boundaries so the entire route is visible.
              boundsAutoApply: true
          });

          // Creating a button.
          var changeLayoutButton = new ymaps.control.Button({
              data: { content: "Show time for walking segments"},
              options: { selectOnClick: true }
          });

          // Declaring handlers for the button.
          changeLayoutButton.events.add('select', function () {
              multiRoute.options.set(
                  // routeMarkerIconContentlayout - To show the time for all segments.
                  "routeWalkMarkerIconContentLayout",
                  ymaps.templateLayoutFactory.createClass('{{ properties.duration.text }}')
              );
          });

          changeLayoutButton.events.add('deselect', function () {
              multiRoute.options.unset("routeWalkMarkerIconContentLayout");
          });

          // Creating the map with the button added to it.
          var myMap = new ymaps.Map('map', {
              center: [55.739625, 37.54120],
              zoom: 12,
              controls: [changeLayoutButton]
          }, {
              buttonMaxWidth: 300
          });

          // Adding a multiroute to the map.
          myMap.geoObjects.add(multiRoute);
      }

      ymaps.ready(init);
  </script>

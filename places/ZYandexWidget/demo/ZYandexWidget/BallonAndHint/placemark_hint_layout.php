
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510" type="text/javascript"></script>
    <style>
          #map {
            width: 100%; height: 600px; padding: 0; margin: 0;
        }
        
    </style>


<body>
<div id="map"></div>
</body>
 <script>
     ymaps.ready(init);

     function init () {
         var myMap = new ymaps.Map("map", {
                 center: [55.76, 37.64],
                 zoom: 10
             }, {
                 searchControlProvider: 'yandex#search'
             }),
             /**
              * Creating a layout for hint content.
              * The layout is created through the layout factory using a text template.
              */
             HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
                 "<b>{{ properties.object }}</b><br />" +
                 "{{ properties.address }}" +
                 "</div>", {
                     /**
                      * Defining the getShape method,
                      * which will return the size of the hint layout.
                      * This is necessary in order for the hint to automatically
                      * move its position when going off the map.
                      */
                     getShape: function () {
                         var el = this.getElement(),
                             result = null;
                         if (el) {
                             var firstChild = el.firstChild;
                             result = new ymaps.shape.Rectangle(
                                 new ymaps.geometry.pixel.Rectangle([
                                     [0, 0],
                                     [firstChild.offsetWidth, firstChild.offsetHeight]
                                 ])
                             );
                         }
                         return result;
                     }
                 }
             );

         var myPlacemark = new ymaps.Placemark([55.764286, 37.581408], {
             address: "Moscow, Zoologicheskaya Street, 13u2",
             object: "Contemporary Art Center"
         }, {
             hintLayout: HintLayout
         });

         myMap.geoObjects.add(myPlacemark);
     }
 </script>


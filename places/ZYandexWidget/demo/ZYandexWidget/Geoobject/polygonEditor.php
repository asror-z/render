
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<5fb7da25-bc18-4612-b304-83ea2266c510>" type="text/javascript"></script>

    <style>
        #map {
            widht: 100%;
            height: 600px;
        }
    </style>

<body>
<div id="map"></div>
</body>
    <script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.73, 37.75],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Создаем многоугольник без вершин.
        var myPolygon = new ymaps.Polygon([], {}, {
            // Курсор в режиме добавления новых вершин.
            editorDrawingCursor: "crosshair",
            // Максимально допустимое количество вершин.
            editorMaxPoints: 5,
            // Цвет заливки.
            fillColor: '#00FF00',
            // Цвет обводки.
            strokeColor: '#0000FF',
            // Ширина обводки.
            strokeWidth: 5
        });
        // Добавляем многоугольник на карту.
        myMap.geoObjects.add(myPolygon);

        // В режиме добавления новых вершин меняем цвет обводки многоугольника.
        var stateMonitor = new ymaps.Monitor(myPolygon.editor.state);
        stateMonitor.add("drawing", function (newValue) {
            myPolygon.options.set("strokeColor", newValue ? '#FF0000' : '#0000FF');
        });

        // Включаем режим редактирования с возможностью добавления новых вершин.
        myPolygon.editor.startDrawing();
    }
    </script>

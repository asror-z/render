
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<5fb7da25-bc18-4612-b304-83ea2266c510>" type="text/javascript"></script>

    <style>
       #map {
            width: 100%; height: 900px;
        }
    </style>

<body>
<div id="map"></div>

</body>
    <script>ymaps.ready(init);

    function init() {
        // Создаем карту.
        var myMap = new ymaps.Map("map", {
            center: [55.72, 37.64],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        });

        // Создаем ломаную.
        var myPolyline = new ymaps.Polyline([
            // Указываем координаты вершин.
            [55.80, 37.50],
            [55.80, 37.40],
            [55.70, 37.50],
            [55.70, 37.40]
        ], {}, {
            // Задаем опции геообъекта.
            // Цвет с прозрачностью.
            strokeColor: "#00000088",
            // Ширину линии.
            strokeWidth: 4,
            // Максимально допустимое количество вершин в ломаной.
            editorMaxPoints: 6,
            // Добавляем в контекстное меню новый пункт, позволяющий удалить ломаную.
            editorMenuManager: function (items) {
                items.push({
                    title: "Удалить линию",
                    onClick: function () {
                        myMap.geoObjects.remove(myPolyline);
                    }
                });
                return items;
            }
        });

        // Добавляем линию на карту.
        myMap.geoObjects.add(myPolyline);

        // Включаем режим редактирования.
        myPolyline.editor.startEditing();
    }
    </script>
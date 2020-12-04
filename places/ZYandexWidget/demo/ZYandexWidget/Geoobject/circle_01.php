
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    
    <style>
        #map {
            width: 100%; height: 900px; padding: 0; margin: 0;
        }
    </style>


    <div id="map">
        
    </div>


    <script>
        ymaps.ready(init);

        function init() {
            // Создаем карту.
            var myMap = new ymaps.Map("map", {
                center: [55.76, 37.64],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            });

            // Создаем круг.
            var myCircle = new ymaps.Circle([
                // Координаты центра круга.
                [55.76, 37.60],
                // Радиус круга в метрах.
                10000
            ], {
                // Описываем свойства круга.
                // Содержимое балуна.
                balloonContent: "Радиус круга - 10 км",
                // Содержимое хинта.
                hintContent: "Подвинь меня"
            }, {
                // Задаем опции круга.
                // Включаем возможность перетаскивания круга.
                draggable: true,
                // Цвет заливки.
                // Последний байт (77) определяет прозрачность.
                // Прозрачность заливки также можно задать используя опцию "fillOpacity".
                fillColor: "#DB709377",
                // Цвет обводки.
                strokeColor: "#990066",
                // Прозрачность обводки.
                strokeOpacity: 0.8,
                // Ширина обводки в пикселях.
                strokeWidth: 5
            });

            // Добавляем круг на карту.
            myMap.geoObjects.add(myCircle);
        }

    </script>


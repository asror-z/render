
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="placemark_shape.js" type="text/javascript"></script>
    <style>
        html, body, #map {
            width: 100%;
            height: 900px;
            margin: 0;
            padding: 0;
        }

        .placemark_layout_container {
            position: relative;
            font-family: Georgia;
            font-size: 40px;
            text-align: center;
            font-weight: bold;
        }

        /* Квадратный макет метки */
        .square_layout {
            position: absolute;
            left: -23px;
            top: -23px;
            width: 46px;
            height: 46px;
            line-height: 46px;
            border: 2px solid #218703;
            background-color: #F8FDF7;
            color: #218703;
        }

        /* Круглый макет метки */
        .circle_layout {
            background-color: white;
            position: absolute;
            left: -23px;
            top: -23px;
            width: 46px;
            height: 46px;
            border: 2px solid #225D9C;
            color: #225D9C;
            line-height: 46px;
            /* Это CSS свойство не будет работать в Internet Explorer 8 */
            border-radius: 50px;
        }

        /* Макет метки с "хвостиком" */
        .polygon_layout {
            position: relative;
            background: #ffffff;
            border: 4px solid #943A43;
            width: 50px;
            height: 50px;
            position: absolute;
            left: -28px;
            top: -76px;
            color: #943A43;
        }

        .polygon_layout:after, .polygon_layout:before {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
        }

        .polygon_layout:after {
            border-top-color: #943A43;
            border-width: 10px;
            margin-left: -10px;
        }

        .polygon_layout:before {
            border-top-color: #943A43;
            border-width: 16px;
            margin-left: -16px;
        }
    </style>

<div id="map"></div>
<script>ymaps.ready(function () {
    var map = new ymaps.Map('map', {
        center: [55.7, 37.6],
        zoom: 10,
        controls: []
    });

    // Создание метки с квадратной активной областью.
    var squareLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="square_layout">$</div></div>');

    var squarePlacemark = new ymaps.Placemark(
        [55.725118, 37.682145], {
            hintContent: 'Метка с прямоугольным HTML макетом'
        }, {
            iconLayout: squareLayout,
            // Описываем фигуру активной области "Прямоугольник".
            iconShape: {
                type: 'Rectangle',
                // Прямоугольник описывается в виде двух точек - верхней левой и нижней правой.
                coordinates: [
                    [-25, -25], [25, 25]
                ]
            }
        }
    );
    map.geoObjects.add(squarePlacemark);

    // Создание метки с круглой активной областью.
    var circleLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="circle_layout">#</div></div>');

    var circlePlacemark = new ymaps.Placemark(
        [55.783202, 37.605584], {
            hintContent: 'Метка с круглым HTML макетом'
        }, {
            iconLayout: circleLayout,
            // Описываем фигуру активной области "Круг".
            iconShape: {
                type: 'Circle',
                // Круг описывается в виде центра и радиуса
                coordinates: [0, 0],
                radius: 25
            }
        }
    );
    map.geoObjects.add(circlePlacemark);

    // Создание метки со сложной фигурой активной области.
    var polygonLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="polygon_layout">!</div></div>');

    var polygonPlacemark = new ymaps.Placemark(
        [55.662693, 37.558416], {
            hintContent: 'HTML метка сложной формы'
        }, {
            iconLayout: polygonLayout,
            // Описываем фигуру активной области "Полигон".
            iconShape: {
                type: 'Polygon',
                // Полигон описывается в виде трехмерного массива. Массив верхнего уровня содержит контуры полигона.
                // Первый элемента массива - это внешний контур, а остальные - внутренние.
                coordinates: [
                    // Описание внешнего контура полигона в виде массива координат.
                    [[-28,-76],[28,-76],[28,-20],[12,-20],[0,-4],[-12,-20],[-28,-20]]
                    // , ... Описание внутренних контуров - пустых областей внутри внешнего.
                ]
            }
        }
    );
    map.geoObjects.add(polygonPlacemark);
});
</script>

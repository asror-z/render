
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<5fb7da25-bc18-4612-b304-83ea2266c510>" type="text/javascript"></script>

    <style>
         #map {
            width: 100%; height: 700px;
        }
    </style>

<body>
<div id="map"></div>

</body>
<script>ymaps.ready(['AnimatedLine']).then(init);

function init(ymaps) {
    // Создаем карту.
    var myMap = new ymaps.Map("map", {
        center: [55.762, 37.57835813659775],
        zoom: 16
    }, {
        searchControlProvider: 'yandex#search'
    });
    // Создаем ломаные линии.
    var firstAnimatedLine = new ymaps.AnimatedLine([
        [55.76028460519329, 37.57704491961252],
        [55.76068242105497, 37.57704760182153],
        [55.76070813128414, 37.57682497847331],
        [55.76074594041378, 37.57683302510035],
        [55.76070753602857, 37.5772156971609],
        [55.76099639684956, 37.577322985521505],
        [55.760916500352934, 37.578192870439906],
        [55.76091952506843, 37.5785147355217],
        [55.76098304403938, 37.57876954537813],
        [55.76109495816394, 37.57893852454606],
        [55.76122432960969, 37.578535038979666]
    ], {}, {
        // Задаем цвет.
        strokeColor: "#ED4543",
        // Задаем ширину линии.
        strokeWidth: 5,
        // Задаем длительность анимации.
        animationTime: 4000
    });
    var secondAnimatedLine = new ymaps.AnimatedLine([
        [55.761223661714205, 37.57854299428123],
        [55.76129474190374, 37.57836060406823],
        [55.76149285834102, 37.57855640532632],
        [55.76173267134118, 37.57864573959325],
        [55.761782872763874, 37.578559582240004],
        [55.7622647306412, 37.57857741008619],
        [55.76247342821094, 37.57840038429122],
        [55.762818964832924, 37.57765342764373],
        [55.76292179998886, 37.57748713068481],
        [55.762890042102114, 37.577167947812036],
        [55.76292179998886, 37.576878269238435],
        [55.763076052212064, 37.57669587902541],
        [55.76309672830313, 37.57723949881904]
    ], {}, {
        strokeColor: "#1E98FF",
        strokeWidth: 5,
        animationTime: 4000
    });
    // Добавляем линии на карту.
    myMap.geoObjects.add(firstAnimatedLine);
    myMap.geoObjects.add(secondAnimatedLine);
    // Создаем метки.
    var firstPoint = new ymaps.Placemark([55.7602953585417, 37.57705113964169], {}, {
        preset: 'islands#redRapidTransitCircleIcon'
    });
    var secondPoint = new ymaps.Placemark([55.76127880650197, 37.57839413202077], {}, {
        preset: 'islands#blueMoneyCircleIcon'
    });
    var thirdPoint = new ymaps.Placemark([55.763105418792314, 37.57724573612205], {}, {
        preset: 'islands#blackZooIcon'
    });
    // Функция анимации пути.
    function playAnimation() {
        // Убираем вторую линию.
        secondAnimatedLine.reset();
        // Добавляем первую метку на карту.
        myMap.geoObjects.add(firstPoint);
        // Анимируем первую линию.
        firstAnimatedLine.animate()
            // После окончания анимации первой линии добавляем вторую метку на карту и анимируем вторую линию.
            .then(function() {
                myMap.geoObjects.add(secondPoint);
                return secondAnimatedLine.animate();
            })
            // После окончания анимации второй линии добавляем третью метку на карту.
            .then(function() {
                myMap.geoObjects.add(thirdPoint);
                // Добавляем паузу после анимации.
                return ymaps.vow.delay(null, 2000);
            })
            // После паузы перезапускаем анимацию.
            .then(function() {
                // Удаляем метки с карты.
                myMap.geoObjects.remove(firstPoint);
                myMap.geoObjects.remove(secondPoint);
                myMap.geoObjects.remove(thirdPoint);
                // Убираем вторую линию.
                secondAnimatedLine.reset();
                // Перезапускаем анимацию.
                playAnimation();
            });
    }
    // Запускаем анимацию пути.
    playAnimation();
}
</script>
<script>
    ymaps.modules.define('AnimatedLine', [
        'util.defineClass',
        'Polyline',
        'vow'
    ], function(provide, defineClass, Polyline, vow) {

        function AnimatedLine(geometry, properties, options) {
            AnimatedLine.superclass.constructor.call(this, geometry, properties, options);
            this._loopTime = 50;
            this._animationTime = this.options.get('animationTime', 4000);
            // Вычислим длину переданной линии.
            var distance = 0;
            var previousElem = geometry[0];
            this.geometry.getCoordinates().forEach(function(elem) {
                distance += getDistance(elem, previousElem);
                previousElem = elem;
            });
            // Вычислим минимальный интервал отрисовки.
            this._animationInterval = distance / this._animationTime * this._loopTime;
            // Создадим массив с более частым расположением промежуточных точек.
            this._smoothCoords = generateSmoothCoords(geometry, this._animationInterval);
        }
        defineClass(AnimatedLine, Polyline, {
            // Анимировать линию.
            start: function() {
                var value = 0;
                var coords = this._smoothCoords;
                var line = this;
                var loopTime = this._loopTime;
                // Будем добавлять по одной точке каждые 50 мс.
                function loop(value, currentTime, previousTime) {
                    if (value < coords.length) {
                        if (!currentTime || (currentTime - previousTime) > loopTime) {
                            line.geometry.set(value, coords[value]);
                            value++;
                            previousTime = currentTime;
                        }
                        requestAnimationFrame(function(time) {
                            loop(value, time, previousTime || time)
                        });
                    } else {
                        // Бросаем событие окончания отрисовки линии.
                        line.events.fire('animationfinished');
                    }
                }

                loop(value);
            },
            // Убрать отрисованную линию.
            reset: function() {
                this.geometry.setCoordinates([]);
            },
            // Запустить полный цикл анимации.
            animate: function() {
                this.reset();
                this.start();
                var deferred = vow.defer();
                this.events.once('animationfinished', function() {
                    deferred.resolve();
                });
                return deferred.promise();
            }

        });
        // Функция генерации частых координат по заданной линии.
        function generateSmoothCoords(coords, interval) {
            var smoothCoords = [];
            smoothCoords.push(coords[0]);
            for (var i = 1; i < coords.length; i++) {
                var difference = [coords[i][0] - coords[i - 1][0], coords[i][1] - coords[i - 1][1]];
                var maxAmount = Math.max(Math.abs(difference[0] / interval), Math.abs(difference[1] / interval));
                var minDifference = [difference[0] / maxAmount, difference[1] / maxAmount];
                var lastCoord = coords[i - 1];
                while (maxAmount > 1) {
                    lastCoord = [lastCoord[0] + minDifference[0], lastCoord[1] + minDifference[1]];
                    smoothCoords.push(lastCoord);
                    maxAmount--;
                }
                smoothCoords.push(coords[i])
            }
            return smoothCoords;
        }
        // Функция нахождения расстояния между двумя точками на плоскости.
        function getDistance(point1, point2) {
            return Math.sqrt(
                Math.pow((point2[0] - point1[0]), 2) +
                Math.pow((point2[1] - point1[1]), 2)
            );
        }
        provide(AnimatedLine);
    });
</script>


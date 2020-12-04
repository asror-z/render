
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=< 5fb7da25-bc18-4612-b304-83ea2266c510>" type="text/javascript"></script>

    <style type="text/css">
               #map {
            widht: 100%;
            height: 600px;
        }

        .placemark {
            background-image: url('https://sandbox.api.maps.yandex.net/examples/ru/2.1/placemark_layout/img/small.svg');
            background-size: 100%;
            width: 34px;
            height: 34px;
            margin-left: -17px;
            margin-top: -17px;
        }

        .active {
            background-image: url('https://sandbox.api.maps.yandex.net/examples/ru/2.1/placemark_layout/img/big.svg');
            width: 60px;
            height: 60px;
            margin-left: -30px;
            margin-top: -60px;

        }

        @keyframes show-big-placemark {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes show-small-placemark {
            0% {
                transform: scale(1);
                background-image: url('https://sandbox.api.maps.yandex.net/examples/ru/2.1/placemark_layout/img/big.svg');
                width: 60px;
                height: 60px;
                margin-left: -30px;
                margin-top: -60px
            }
            100% {
                transform: scale(0);
                background-image: url('https://sandbox.api.maps.yandex.net/examples/ru/2.1/placemark_layout/img/big.svg');
            }
        }
    </style>
<body>

<div id="map"></div>

</body>
<script>
    ymaps.ready(function () {
        var map = new ymaps.Map('map', {
            center: [55.755, 37.617],
            zoom: 10
        });
        // Создадим макет метки.
        var animatedLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="placemark"></div>',
            {
                build: function () {
                    animatedLayout.superclass.build.call(this);
                    var element = this.getParentElement().getElementsByClassName('placemark')[0];
                    // Если метка выбрана, то увеличим её размер.
                    var size = this.isActive ? 60 : 34;
                    // При задании для метки своего HTML макета, фигуру активной области
                    // необходимо задать самостоятельно - иначе метка будет неинтерактивной.
                    // Создадим фигуру активной области "Круг".
                    var smallShape = {type: 'Circle', coordinates: [0, 0], radius: size / 2};
                    var bigShape = {type: 'Circle', coordinates: [0, -30], radius: size / 2};
                    // Зададим фигуру активной области.
                    this.getData().options.set('shape', this.isActive ? bigShape : smallShape);
                    // Если метка выбрана, то зададим класс и запустим анимацию.
                    if (this.isActive) {
                        element.classList.add("active");
                        element.style.animation = ".35s show-big-placemark";
                    } else if (this.inited) {
                        element.classList.remove("active");
                        element.style.animation = ".35s show-small-placemark";
                    }
                    if (!this.inited) {
                        this.inited = true;
                        this.isActive = false;
                        // При клике по метке будем перестраивать макет.
                        this.getData().geoObject.events.add('click', function () {
                            this.isActive = !this.isActive;
                            this.rebuild();
                        }, this);
                    }
                }
            }
        );
        map.geoObjects.add(new ymaps.Placemark([55.755, 37.617], {}, {
            iconLayout: animatedLayout,
            hasBalloon: false
        }));
    });
</script>


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
<script>
    ymaps.modules.define(
        'DeliveryCalculator',
        ['util.defineClass', 'vow'],
        function (provide, defineClass, vow) {
            /**
             * @class DeliveryCalculator Calculating delivery cost.
             * @param {Object} map Instance of the map.
             */
            function DeliveryCalculator(map) {
                this._map = map;
                this._startPoint = null;
                this._finishPoint = null;
                this._route = null;
                this._startPointBalloonContent;
                this._finishPointBalloonContent;

                map.events.add('click', this._onClick, this);
            }

            defineClass(DeliveryCalculator, {

                _setPointData: function (pointType, position, content) {
                    if (pointType == 'start') {
                        this._startPointBalloonContent = content;
                        this._startPoint.geometry.setCoordinates(position);
                        this._startPoint.properties.set('balloonContentBody', "Waiting for data");
                    } else {
                        this._finishPointBalloonContent = content;
                        this._finishPoint.geometry.setCoordinates(position);
                        this._finishPoint.properties.set('balloonContentBody', "Waiting for data");
                    }
                },


                _addNewPoint: function (pointType, position) {

                    if (!position) position = [19.163570, -156.155197];

                    if (pointType == 'start' && !this._startPoint) {
                        this._startPoint = new ymaps.Placemark(position, {iconContent: 'A'}, {draggable: true});
                        this._startPoint.events.add('dragend', this._onStartDragEnd, this);
                        this._map.geoObjects.add(this._startPoint);
                    }
                    if (pointType == 'finish' && !this._finishPoint) {
                        this._finishPoint = new ymaps.Placemark(position, {iconContent: 'B'}, {
                            draggable: true,
                            balloonAutoPan: false
                        });
                        this._finishPoint.events.add('dragend', this._onFinishDragEnd, this);
                        this._map.geoObjects.add(this._finishPoint);
                    }
                },


                setPoint: function (pointType, position, address) {
                    if (!this._startPoint || !this._finishPoint) {
                        this._addNewPoint(pointType, position);
                    }
                    if (!address) {
                        this._reverseGeocode(position).then(function (content) {
                            this._setPointData(pointType, position, content);
                            this._setupRoute();
                        }, this)
                    } else {
                        this._setPointData(pointType, position, address);
                        this._setupRoute();
                    }
                },


                _reverseGeocode: function (point) {
                    return ymaps.geocode(point).then(function (res) {

                        return res.geoObjects.get(0) &&
                            res.geoObjects.get(0).properties.get('balloonContentBody') || '';
                    });

                },


                _geocode: function (address) {
                    return ymaps.geocode(address).then(function (res) {

                        var balloonContent = res.geoObjects.get(0) &&
                            res.geoObjects.get(0).properties.get("balloonContent") || '',
                            coords = res.geoObjects.get(0) &&
                                res.geoObjects.get(0).geometry.getCoordinates() || '';

                        return [coords, balloonContent];
                    });

                },


                calculate: function (routeLength) {
                    // Constants.
                    var DELIVERY_TARIF = 20, // The cost per kilometer.
                        MINIMUM_COST = 500; // The minimal cost.

                    return Math.max(routeLength * DELIVERY_TARIF, MINIMUM_COST);
                },


                _setupRoute: function () {
                    // Deleting the previous route from the map.
                    if (this._route) {
                        this._map.geoObjects.remove(this._route);
                    }

                    if (this._startPoint && this._finishPoint) {
                        var start = this._startPoint.geometry.getCoordinates(),
                            finish = this._finishPoint.geometry.getCoordinates(),
                            startBalloon = this._startPointBalloonContent,
                            finishBalloon = this._finishPointBalloonContent;
                        if (this._deferred && !this._deferred.promise().isResolved()) {
                            this._deferred.reject('New request');
                        }
                        var deferred = this._deferred = vow.defer();
                        // Drawing the route through the specified points.
                        ymaps.route([start, finish])
                            .then(function (router) {
                                if (!deferred.promise().isRejected()) {
                                    var price = this.calculate(Math.round(router.getLength() / 1000)),
                                        distance = ymaps.formatter.distance(router.getLength()),
                                        message = '<span>Distance: ' + distance + '.</span><br/>' +
                                            '<span style="font-weight: bold; font-style: italic">Cost of delivery: %s rubles</span>';

                                    this._route = router.getPaths(); // Getting a collection of paths that make up the route.

                                    this._route.options.set({strokeWidth: 5, strokeColor: '0000ffff', opacity: 0.5});
                                    this._map.geoObjects.add(this._route); // Adding the route to the map.
                                    // Setting the balloon content for the starting and ending markers.
                                    this._startPoint.properties.set('balloonContentBody', startBalloon + message.replace('%s', price));
                                    this._finishPoint.properties.set('balloonContentBody', finishBalloon + message.replace('%s', price));

                                    this._map.setBounds(this._route.getBounds(), {checkZoomRange: true}).then(function () {

                                    }, this);
                                    deferred.resolve();
                                }

                            }, function (err) {

                                this._finishPoint.properties.set('balloonContentBody', "Can't build route");
                                this._finishPoint.balloon.open();
                                this._finishPoint.balloon.autoPan();
                            }, this);

                    }
                },


                _onClick: function (event) {
                    if (this._startPoint) {
                        this.setPoint("finish", event.get('coords'));
                    } else {
                        this.setPoint("start", event.get('coords'));
                    }
                },


                _onStartDragEnd: function () {
                    this.setPoint('start', this._startPoint.geometry.getCoordinates());
                },

                _onFinishDragEnd: function () {
                    this.setPoint('finish', this._finishPoint.geometry.getCoordinates());
                },
                
                setRoute: function (startPoint, finishPoint) {
                    if (!this._startPoint) {
                        this._addNewPoint("start");
                    }
                    if (!this._finishPoint) {
                        this._addNewPoint("finish");
                    }
                    if (typeof(startPoint) === "string" && typeof(finishPoint) === "string") {
                        vow.all([this._geocode(startPoint), this._geocode(finishPoint)]).then(function (res) {
                            this._setPointData("start", res[0][0], res[0][1]);
                            this._setPointData("finish", res[1][0], res[1][1]);
                            this._setupRoute();
                        }, this);
                    } else if (typeof(startPoint) === "string") {
                        vow.all([this._geocode(startPoint), this._reverseGeocode(finishPoint)]).then(function (res) {
                            this._setPointData("start", res[0][0], res[0][1]);
                            this._setPointData("finish", finishPoint, res[1]);
                            this._setupRoute();
                        }, this);
                    } else if (typeof(finishPoint) === "string") {
                        vow.all([this._reverseGeocode(startPoint), this._geocode(finishPoint)]).then(function (res) {
                            this._setPointData("start", startPoint, res[0]);
                            this._setPointData("finish", res[1][0], res[1][1]);
                            this._setupRoute();
                        }, this);
                    } else {
                        vow.all([this._reverseGeocode(startPoint), this._reverseGeocode(finishPoint)]).then(function (res) {
                            this._setPointData("start", startPoint, res[0]);
                            this._setPointData("finish", finishPoint, res[1]);
                            this._setupRoute();
                        }, this);

                    }
                }
            });

            provide(DeliveryCalculator);
        }
    );

</script>
<script>
    ymaps.ready(['DeliveryCalculator']).then(function init() {
        var myMap = new ymaps.Map('map', {
                center: [60.906882, 30.067233],
                zoom: 9,
                type: 'yandex#map',
                controls: []
            }),
            searchStartPoint = new ymaps.control.SearchControl({
                options: {
                    useMapBounds: true,
                    noPlacemark: true,
                    noPopup: true,
                    placeholderContent: 'Address of the starting point',
                    size: 'large'
                }
            }),
            searchFinishPoint = new ymaps.control.SearchControl({
                options: {
                    useMapBounds: true,
                    noCentering: true,
                    noPopup: true,
                    noPlacemark: true,
                    placeholderContent: 'Address of the destination point',
                    size: 'large',
                    float: 'none',
                    position: {left: 10, top: 44}
                }
            }),
            calculator = new ymaps.DeliveryCalculator(myMap),
            routeButton = new ymaps.control.Button({
                data: {content: 'Moscow-St. Petersburg'},
                options: {selectOnClick: false, maxWidth: 200}
            });

        myMap.controls.add(searchStartPoint)
            .add(searchFinishPoint)
            .add(routeButton, {float: 'none', position: {left: 10, bottom: 40}});

        searchStartPoint.events
            .add('resultselect', function (e) {
                var results = searchStartPoint.getResultsArray(),
                    selected = e.get('index'),
                    point = results[selected].geometry.getCoordinates(),
                    balloonContent = results[selected].properties.get("balloonContent");

                // Setting the start of the route.
                calculator.setPoint("start", point, balloonContent);

            })
            .add('load', function (event) {
                /**
                 * The 'skip' field indicates that it's not shuffling through search result pages.
                 * The 'getResultsCount' field indicates that there is at least one result.
                 */
                if (!event.get('skip') && searchStartPoint.getResultsCount()) {
                    searchStartPoint.showResult(0);
                }
            });

        searchFinishPoint.events
            .add('resultselect', function (e) {
                var results = searchFinishPoint.getResultsArray(),
                    selected = e.get('index'),
                    point = results[selected].geometry.getCoordinates(),
                    balloonContent = results[selected].properties.get("balloonContent");

                // Setting the route destination.
                calculator.setPoint("finish", point, balloonContent);
            })
            .add('load', function (event) {
                /**
                 * The 'skip' field indicates that it's not shuffling through search result pages.
                 * The 'getResultsCount' field indicates that there is at least one result.
                 */
                if (!event.get('skip') && searchFinishPoint.getResultsCount()) {
                    searchFinishPoint.showResult(0);
                }
            });

        routeButton.events
            .add('click', function () {
                calculator.setRoute([59.939095, 30.315868], [55.757026, 37.615032])
            });
    });
</script>


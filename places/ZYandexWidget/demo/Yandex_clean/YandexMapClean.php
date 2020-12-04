<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Current Location to Address</title>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=5fb7da25-bc18-4612-b304-83ea2266c510"
        type="text/javascript"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js" type="text/javascript"></script>
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div id="map"></div>
    <script>
        ymaps.ready(function () {

            var myMap = new ymaps.Map('map', {
                center: [55.753994, 37.622093],
                zoom: 9,
                // Добавим кнопку для построения маршрутов на карту.

                behaviors: 'default',

                type: 'yandex#map',
                autoFitToViewport: 'ifNull',
                exitFullscreenByEsc: true,
                fullscreenZIndex: 10000,
                mapAutoFocus: true,
                maxAnimationZoomDifference: 5,
                nativeFullscreen: false,
                /*projection: ,*/
                suppressMapOpenBlock: false,
                suppressObsoleteBrowserNotifier: false,
                yandexMapAutoSwitch: true,
                yandexMapDisablePoiInteractivity: true,


                /**
                 *
                 * https://tech.yandex.com/maps/jsbox/2.1/customSet_controls
                 * @type {Controls}
                 */

                controls: [
                    'routeButtonControl',
                    'zoomControl',
                    'searchControl',
                    'typeSelector',
                    'geolocationControl',
                    'fullscreenControl',
                    'customControl',
                    'rulerControl',

                ],




            },

                {
                    searchControlProvider: 'yandex#search'
                });


            let control = myMap.controls.get(
                'routeButtonControl',
                'zoomControl',
                'searchControl',
                'typeSelector',
                'geolocationControl',
                'fullscreenControl',
                'customControl',
                'rulerControl',

            );

            // Зададим координаты пункта отправления с помощью геолокации.
            control.routePanel.geolocate('from');

            // Откроем панель для построения маршрутов.
            control.state.set('expanded', true);




            /**
             *
             * https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Balloon-docpage/
             *
             */

            // Creating an independent balloon instance and displaying it in the center of the map.
            var balloon = new ymaps.Balloon(myMap);
            // Here map options are set to parent options,
            // where they contain default values for mandatory options.
            balloon.options.setParent(myMap.options);

            // Opening a balloon at the center of the map:
            balloon.open(myMap.getCenter());


            myMap.balloon.open([41.3, 69.25], "HERE I",
                {
                    // Option: do not show the close button.
                    closeButton: false,
                    autoPan: true,
                    autoPanCheckZoomRange: true,
                    autoPanDuration: 200,
                    autoPanMargin: 34,
                    autoPanUseMapMargin: true,
                    closeTimeout: 700,
                    /*contentLayout: balloon,
                    interactivityModel:'interactivityModel',*/
                    layout: 'islands#balloon',
                    maxHeight: 1400,
                    maxWidht: 1000,
                    minHeight: 100,
                    minWidht: 100,
                    ofset: '',
                    _openTimeout: 1500,
                    pane: 'ballon',
                    panelContentLayout: null,
                    panelMaxHeightRatio: 0,  //need 0
                    panelMaxMapArea: 1,
                    shadow: true,
                    /*shadowLayout:,*/
                    shadowOffset: [0, 0],
                    zIndex: '2',
                });




            /**
             *
             * https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/behavior.DblClickZoom-docpage/
             *
             */
            myMap.behaviors
                /**
                 * Disabling some of the behaviors enabled by default:
                 *-drag-moving the map while holding down the left mouse button;
                 *-magnifier.rightButton-zooming in on the area selected with the right mouse button.
                 */
                .disable(['drag', 'rightMouseButtonMagnifier'])

                .enable('unruler');   // need <--RULER
            /**
             * Using options to change the property of a behavior:
             * zooming with the scroll wheel will be slow,
             * 1/2 zoom level per second.
             */
            myMap.options.set('scrollZoomSpeed', 0, {
                DblClickZoom: {
                    centering: true,
                    duration: 100,
                    UseMapMargin: true,
                },


                Drag: {
                    actionCursor: 'grabbing',
                    cursor: 'grab',
                    inertia: true,
                    inertiaDuration: true,
                    tremor: 2
                },

                LeftMouseButtonMagnifier: {
                    actionCursor: 'crosshari',
                    cursor: 'zoom',
                    duration: 300
                },

                MultiTouch: {
                    tremor: 20

                },

                RightMouseButtonMagnifie: {
                    actionCursor: 'crosshari',
                    duration: 300
                },

                ScrollZoom: {
                    maximumDelta: 5,
                    speed: 5,
                }
            });






            /**
             *
             * https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.Manager-docpage/
             * @type {ymapsCircle}
             */

            var circle = new ymaps.Circle([[50, 75], 1000000], {
                geodesic: true,
                cursor: 'pointer',
                draggable: false,
                fill: true,
                fillColor: '0066ff99',
                fillMethod: 'stretch',
                fillOpacity: 1,
                hasBallon: true,
                hashInt: true,
                hideIconOnBalloonOpen: true,
                interactiveZIndex: false,
                interactivityModel: "default#geoObject",
                opacity: 1,
                openBalloonOnClick: true,
                openEmptyBalloon: false,
                openEmptyHint: false,
                openHintOnHover: true,
                outline: true,
                pane: "areas",
                strokeColor: "0066ffff",
                strokeOpacity: 1,
                syncOverlayInit: false,
                useMapMarginInDragging: true,
            });


            myMap.controls.add(circle);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.Button-docpage/
             * @type {buttonControl}
             */


            // Creating a button and adding it to the map.
            var button = new ymaps.control.Button({
                data: {
                    // Setting an icon for the button.
                    image: 'images/button.jpg',
                    // Text on the icon.
                    content: 'Save',
                    // Text for the popup hint.
                    title: 'Click to save the route'
                },
                options: {
                    // Setting up the button options.

                    selectOnClick: true,
                    adjustMapMargin: false,
                    float: 'right',
                    floatIndex: 0,
                    position_bottom: 'auto',
                    position_left: 'auto',
                    position_right: 'auto',
                    position_top: 'auto',
                    size: 'auto',
                    visible: true,
                    enbled: true,
                    selected: false,

                    // The button will have three states-icon, text, and icon + text.
                    // So we'll define three values for the button width for all states.
                    maxWidth: [30, 100, 150]
                }
            });
            map.controls.add(button, { float: 'left', floatIndex: 100 });




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.Button-docpage/
             * @type {buttonControl}
             */


            // Adding the control to the map and immediately switching it
            // to the full-screen mode.
            var fullscreenControl = new ymaps.control.FullscreenControl(
                {
                    options: {
                        adjustMapMargin: false,
                        float: 'right',
                        floatIndex: 300,
                        maxWidth: 28,
                        position_bottom: 'auto',
                        position_left: 'auto',
                        position_right: 'auto',
                        position_top: 'auto',
                        visible: true,
                        enbled: true,
                        selected: false,
                    }
                }
            );
            myMap.controls.add(fullscreenControl);
            fullscreenControl.enterFullscreen();



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.Button-docpage/
             * @type {GeolocationControl}
             */

            // Adding the control with a custom geolocation placemark on the map.
            var geolocationControl = new ymaps.control.GeolocationControl({
                options: {
                    noPlacemark: true,
                    adjustMapMargin: false,
                    float: 'right',
                    floatIndex: 300,
                    maxWidth: 28,
                    position_bottom: 'auto',
                    position_left: 'auto',
                    position_right: 'auto',
                    position_top: 'auto',
                    visible: true,
                    useMapMargin: true,

                }

            });

            myMap.controls.add(geolocationControl);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.ListBox-docpage/
             * @type {ListBox}
             */


            // Handling a click on list items.
            var cityList = new ymaps.control.ListBox({
                data: {
                    content: 'Select a city'
                },
                items: [
                    new ymaps.control.ListBoxItem('Moscow'),
                    new ymaps.control.ListBoxItem('Novosibirsk'),
                    new ymaps.control.ListBoxItem({
                        options: {
                            type: 'separator',
                            adjustMapMargin: false,
                            collapseOnBlur: true,
                            expandOnClick: true,
                            float: 'right',
                            floatIndex: 0,
                            maxWidth: 90,
                            /*popupFloat:'',*/
                            /*position:'',*/
                            position_bottom: 'auto',
                            position_left: 'auto',
                            position_right: 'auto',
                            position_top: 'auto',
                            visible: true,
                            useMapMargin: true,
                        }
                    }),
                    new ymaps.control.ListBoxItem('New York'),
                ]
            });
            cityList.get(0).events.add('click', function () {
                map.setCenter([55.752736, 37.606815]);
            });
            cityList.get(1).events.add('click', function () {
                map.setCenter([55.026366, 82.907803]);
            });
            cityList.get(3).events.add('click', function () {
                map.setCenter([40.695537, -73.97552]);
            });
            map.controls.add(cityList, { floatIndex: 0 });



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.RouteButton-docpage/
             * @type {RouteButton}
             */

            // Creating a RouteButton control and adding it to the map.
            var routeButton = new ymaps.control.RouteButton({
                options: {
                    adjustMapMargin: false,
                    collapseOnBlur: true,
                    autofocus: true,
                    float: 'right',
                    floatIndex: 0,
                    popupWidth: '210px',
                    popupFloat: 'auto',
                    position_bottom: 'auto',
                    position_left: 10,
                    position_right: 'auto',
                    size: 'auto',
                    position_top: 108,
                    visible: true,
                    expanded: false,
                }
            });
            myMap.controls.add(routeButton);


            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.RouteButton-docpage/
             * @type {RoutePanel}
             */
            // Example 2.
            // Creating 300px-wide route panel with header with filled starting point.
            myMap.controls.add('routePanelControl', {
                maxWidth: 300,
            });
            var routePanel = myMap.controls.get('routePanelControl').routePanel;
            routePanel.options.set('adjustMapMargin', true, {
                autofocus: true,
                float: left,
                floatIndex: 0,
                maxWidth: '210px',
                title: 'Routes',
                visible: true,

            }

            );
            routePanel.state.set({
                fromEnabled: false,
                from: "moscow",
                to: "saint petersburg",
                type: "auto"
            }
            );



            /**
             *
             *https://tech.yandex.ru/maps/jsapi/doc/2.1/ref/reference/control.RulerControl-docpage/
             * @type {rulerControl}
             */


            var rulerControl = new ymaps.control.RulerControl({
                options: {
                    adjustMapMargin: false,
                    position_bottom: '30',
                    position_left: 'auto',
                    position_right: 10,
                    visible: true,
                    scaleLine: true,
                    position_top: 'auto',
                    layout: 'round#rulerLayout'
                }
            });
            myMap.controls.add(rulerControl);





            /**
             *
             *https://tech.yandex.ru/maps/jsapi/doc/2.1/ref/reference/control.SearchControl-docpage/
             * @type {searchControl}
             */
            // Creating a control and adding it to the map.

            var searchControl = new ymaps.control.SearchControl({
                options: {
                    float: 'right',
                    formLayout: 'islands#searchControlFormLayout',
                    kind: 'house',
                    layout: 'islands#searchControlLayout',
                    floatIndex: 200,
                    maxWidth: [30, 72, 315],
                    noCentering: false,
                    noPlacemark: false,
                    adjustMapMargin: false,
                    noSelect: false,
                    noSuggestPanel: false,
                    popupLayout: 'islands#searchControlPopupLayout',
                    position_bottom: 'auto',
                    position_left: 'auto',
                    position_right: 'auto',
                    provider: 'yandex#map',
                    searchCoordOrder: 'latlong',
                    size: 'auto',
                    suppressYandexSearch: false,
                    position_top: 'auto',
                    fitMaxWidth: false,
                    zoomMargin: 0,
                    useMapMargin: true,
                }
            });
            myMap.controls.add(searchControl);




            /**
             *
             * https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.TrafficControl-docpage/
             * @type {TrafficControl}
             */


            var trafficControl = new ymaps.control.TrafficControl({
                state: {
                    adjustMapMargin: false,
                    collapseOnBlur: true,
                    float: 'right',
                    floatIndex: 100,
                    maxWidht: [26, 195, 195],
                    popupWidth: '210px',
                    position_bottom: 'auto',
                    position_left: 10,
                    position_right: 'auto',
                    size: 'auto',
                    position_top: 108,
                    visible: true,
                    trafficShown: false,
                    providerKey: 'traffic#actual',

                }
            });
            map.controls.add(trafficControl, { top: 10, left: 10 });


            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/control.TrafficControl-docpage/
             * @type {ZoomControl}   */


            // Creating a small zoom control and adding it to the map.
            var zoomControl = new ymaps.control.ZoomControl({
                options: {
                    adjustMapMargin: false,
                    position_bottom: 'auto',
                    position_left: 10,
                    position_right: 'auto',
                    position_top: 108,
                    size: 'auto',
                    visible: true,
                    zoomDuration: 200,
                    zoomStep: 1,
                }
            });
            myMap.controls.add(zoomControl);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/hotspot.Layer-docpage/
             * @type {hotstopLayer}
             *
             *
             */
            // Creating the source for hotspot data. We aren't setting the key value,
            // so the name of the handler function (padding jsonp in the request) is generated automatically.

            var tileUrlTemplate = 'hotspot_data/%z/tile_x=%x&y=%y',

                /**
                 * The template for the callback function that the server will wrap tile data in
                 * An example of a callback function after substitution is 'testCallback_tile_x_1_y_2_z_9'.
                 */
                keyTemplate = 'testCallback_tile_%c',

                /**
                 * URL of the map layer tiles.
                 * Example of the URL after substitution -
                 * '.../hotspot_layer/images/9/tile_x=1&y=2.png'.
                 */
                imgUrlTemplate = 'images/%z/tile_x=%x&y=%y.png',

                // Creating the data source for the hotpsot layer.
                objSource = new ymaps.hotspot.ObjectSource(tileUrlTemplate, keyTemplate),

                // Creating the images layer and the hotspot layer.
                imgLayer = new ymaps.Layer(imgUrlTemplate, { tileTransparent: true }),
                hotspotLayer = new ymaps.hotspot.Layer(objSource, {
                    cursor: 'pointer',
                    dontChangeCursor: false,
                    hasBalloon: true,
                    hashInt: true,
                    interactivityModel: 'default#layer',
                    openBalloonOnClick: true,
                    openEmptyBalloon: false,
                    openEmptyHint: false,
                    openHintOnHover: true,
                    pane: 'events',
                });

            // Adding layers to the map.
            myMap.layers.add(hotspotLayer);
            myMap.layers.add(imgLayer);






            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/layer.tileContainer.CanvasContainer-docpage/
             * @type {CanvasContainer}
             *
             *
             */
            layer.tileContainer.CanvasContainer(layer[{
                options: {
                    notFoundTile: null,
                    tileClass: 'default#canvas',
                    tileTransparent: false,

                }
            }]);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/layer.tileContainer.DomContainer-docpage/
             * @type {DomContainer}
             *
             *
             */
            layer.tileContainer.DomContainer(layer[{
                options: {
                    notFoundTile: null,
                    tileClass: 'default#dom',
                    tileTransparent: false,
                }
            }]);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Layer-docpage/
             * @type {layers}
             *
             *
             */

            // Adds an OSM layer to the map.
            map.layers.add(new ymaps.Layer('http://tile.openstreetmap.org/%z/%x/%y.png', {
                projection: ymaps.projection.sphericalMercator
            }));
            map.copyrights.add('&amp;copy; OpenStreetMap contributors, CC-BY-SA');

            Layer(tileUrlTemplate[{
                options: {
                    brightness: 0.5,
                    notFoundTile: null,
                    pane: 'ground',
                    titleSize: [256, 256],
                    tileTransparent: false,
                    /*zIndex:,*/

                }
            }]);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/layout.Image-docpage/
             * @type {placemark}
             *
             *
             */
            // Creating a round placemark with a 20-pixel radius.
            var placemark = new ymaps.Placemark([59.936952, 30.343334], null, {
                iconLayout: 'default#image',
                iconImageHref: '/render/Images/Galleries/CSSJS/Fancyapps Fancybox/html_files/604514162_640.jpg',
                iconImageSize: [40, 40],
                iconImageOffset: [-20, -20],
                // Defining a hotspot on top of the image.
                iconShape: {
                    type: 'Circle',
                    coordinates: [0, 0],
                    radius: 20
                },
            });




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/layout.Image-docpage/
             * @type {geoObject}
             *
             *
             */

            var geoObject = new ymaps.Placemark([55.25, 37.43], {
                // Data for generating a diagram.
                data: [
                    { weight: 5, color: '#224080' },
                    { weight: 3, color: '#408022' },
                    { weight: 2, color: '#802240' },
                    {
                        options: {
                            pieChartRadius: 25 + 2 * Math.log(sum),
                            pieChartCoreFillStyle: 'white',
                            pieChartCoreRadius: 15,
                            pieChartStrokeStyle: 'white',
                            pieChartStrokeWidth: 2,
                        }

                    }
                ]
            }, {
                iconLayout: 'default#pieChart',
                // You can also use the "icon" prefix to redefine layout options.
                iconPieChartCoreRadius: 15
            });

            myMap.geoObjects.add(geoObject);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/LoadingObjectManager-docpage/
             * @type {objectManager}
             *
             *
             */


            var objectManager = new ymaps.LoadingObjectManager('http://myServer.com/tile?bbox=%b', {
                // Enabling clustering.
                clusterize: true,
                // Cluster options are set with the "cluster" prefix.
                clusterHasBalloon: false,
                // Geo object options are set with the "geoObject" prefix.
                geoObjectOpenBalloonOnClick: false
            });

            // You can set options directly for child collections.
            objectManager.clusters.options.set({
                preset: 'islands#grayClusterIcons',
                clusterize: false,
                loadTileSize: 256,
                paddingParamName: 'callback',
                paddingTemplate: null,
                splitRequests: false,
                syncOverlayInit: false,
                viewportMargin: 128,
                hintContentLayout: ymaps.templateLayoutFactory.createClass('Group of objects'),
            });
            objectManager.objects.options.set('preset', 'islands#grayIcon');


            // Initializing a map with a known view area.
            // We assume that jQuery is enabled on the page.




            // Initializing a map from geocoding results.




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/map.layer.Manager-docpage/
             * @type {mapLayer}
             *
             *
             */

            map.layer.Manager(map[{
                options: {
                    rafficImageZIndex: 201,
                    trafficInfoZIndex: 1,
                    trafficJamZIndex: 0,

                }
            }]);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/multiRouter.Editor-docpage/
             * @type {multiRoute}
             *
             *
             */

            multiRouter.Editor(multiRoute[state[{
                options: {
                    drawOver: true,
                    midPointsType: "way",

                }
            }]]);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/multiRouter.MultiRoute-docpage/
             * @type {multiRoute}
             *
             *
             */



            let multiRoute = new ymaps.multiRouter.MultiRoute({
                referencePoints: ['Moscow, Leninsky Prospekt', 'Moscow, Kulakov pereulok'],
            }, {
                editorDrawOver: false,
                wayPointDraggable: true,
                viaPointDraggable: true,
                // Setting a custom design for multi-route lines.
                routeStrokeColor: "000088",
                routeActiveStrokeColor: "ff0000",
                pinIconFillColor: "ff0000",
                activeRouteAutoSelection: true,
                boundsAutoApply: false,
                useMapMargin: true,
                zoomMargin: 0,
                preventDragUpdate: false,
            });
            myMap.geoObjects.add(multiRoute);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.Circle-docpage/
             * @type {circle}
             *
             *
             */

            overlay.Circle(geometry[data[{
                options: {
                    fillMethod: 'stretch',
                    interactive: true,

                }
            }]]);


            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.hotspot.Placemark-docpage/
             * @type {Placemarkcircle}
             *
             *
             */


            overlay.hotspot.Placemark(geometry[data[{
                options:
                {
                    interactive: 'true',
                    interactivityModel: 'default#geoObject',
                    offset: [0, 0],
                    pane: 'places',
                }
            }]]);





            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.hotspot.Polygon-docpage/
             * @type {Polygoncircle}
             *
             *
             */

            overlay.Circle(geometry[data[{
                options: {
                    fillMethod: 'stretch',
                    interactive: true,

                }
            }]]);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.hotspot.Rectangle-docpage/
             * @type {RectangleCircle}
             *
             *
             */

            overlay.Circle(geometry[data[{
                options: {
                    fillMethod: 'stretch',
                    interactive: true,

                }
            }]]);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.html.Balloon-docpage/
             * @type {htmlBallon}
             *
             *
             */

            overlay.html.Balloon(geometry[data[{
                options: {
                    interactivityModel: "default#opaque",
                    offset: [0, 0],
                    pane: 'ballon',
                    shadow: true,
                    shadowOffset: [0, 0],
                    shadowsPane: 'shadows'
                }
            }]]);





            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.html.Hint-docpage/
             * @type {htmlHintOverlay}
             *
             *
             */

            overlay.html.Hint(geometry[data[{
                options: {
                    interactivityModel: "default#opaque",
                    pane: 'outerHint',

                }
            }]]);




            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.html.Placemark-docpage/
             * @type {htmlPlacemark}
             *
             *
             */

            overlay.html.Placemark(geometry[data[{
                options: {
                    interactivityModel: "default#geoObject",
                    offset: [0, 0],
                    pane: 'places',
                    shadow: false,
                    shadowOffset: [0, 0],
                    shadowsPane: 'shadows'
                }
            }]]);



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/overlay.html.Rectangle-docpage/
             * @type {htmlPlacemark}
             *
             *
             */

            overlay.html.Restangle(geometry[data[{
                options: {
                    fillMethod: 'stretch',
                    interactivityModel: "default#geoObject",
                    pane: 'areas',
                }
            }]]);






            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/panorama.createPlayer-docpage/
             * @type {panoramaCreatePlayer}
             *
             *
             */

            { vow.Promise } panorama.createPlayer(element, point[{
                options: {
                    direction: 'auto',
                    layer: 'yandex#panorama',
                    span: 'auto',

                }
            }])



            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/panorama.Player-docpage/
             * @type {panoramaPlayer}
             *
             *
             */
            panorama.Player(element, panorama[{
                option: {
                    autoFitToViewport: 'always',
                    // controls:,
                    direction: 'auto',
                    hotkeysEnabled: false,
                    scrollZoomBehavior: true,
                    span: 'auto',
                    suppressMapOpenBlock: false,
                }
            }])


            /**
                   *
                   *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/panorama.Player-docpage/
                   * @type {createPlacemark}
                   *
                   *
                   */
            // Creating a placemark.
            var placemark = new ymaps.Placemark([55.75, 37.61], {
                balloonContent: '&lt;img src="/publish/image/filter_images/img1.jpg" /&gt;',
                iconContent: "Azerbaijan"
            }, {
                preset: "islands#yellowStretchyIcon",
                // Disabling the close balloon button.
                balloonCloseButton: false,
                // The balloon will open and close when the placemark icon is clicked.
                hideIconOnBalloonOpen: false,
                cursor: "pointer",
                draggable: false,
                hasBalloon: true,
                hasHint: true,
                hideIconOnBalloonOpen: true,
                // iconOffset:,
                interactiveZIndex: true,
                interactivityModel: "default#geoObject",
                openBalloonOnClick: true,
                openEmptyBalloon: false,
                openEmptyHint: false,
                openHintOnHover: true,
                pane: 'places',
                pointOverlay: "default#placemark",
                syncOverlayInit: false,
                useMapMarginInDragging: false,
                visible: true,

            });
            geoMap.geoObjects.add(placemark);



            /**
                         *
                         *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Polygon-docpage/
                         * @type {Polygon}
                         *
                         *
                         */
            var polygon = new ymaps.Polygon([
                // Coordinates of the outer contour.
                [[-80, 60], [-90, 50], [-60, 40], [-80, 60]],
                // Coordinates of the inner contour.
                [[-90, 80], [-90, 30], [-20, 40], [-90, 80]],
                [{
                    cursor: 'pointer',
                    draggable: 'false',
                    fill: 'true',
                    fillColor: "0066ff99",
                    // fillImageHref:,
                    fillMethod: 'stretch',
                    fillOpacity: 1,
                    hasBalloon: true,
                    hasHint: true,
                    interactiveZIndex: fase,
                    interactivityModel: "default#geoObject",
                    opacity: 1,
                    openBalloonOnClick: true,
                    openEmptyBalloon: false,
                    openEmptyHint: false,
                    openHintOnHover: true,
                    outline: true,
                    pane: "areas",
                    polygonOverlay: "default#polygon",
                    strokeColor: "0066ffff",
                    strokeOpacity: 1,
                    // strokeStyle:,
                    strokeWidth: 1,
                    syncOverlayInit: false,
                    useMapMarginInDragging: true,
                    visible: true,

                }]
            ], {
                hintContent: "Polygon"
            }, {
                fillColor: '#6699ff',
                // Making the polygon transparent for map events.
                interactivityModel: 'default#transparent',
                strokeWidth: 8,
                opacity: 0.5
            });
            myMap.geoObjects.add(polygon);
            myMap.setBounds(polygon.geometry.getBounds());




            /**
                        *
                        *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Polyline-docpage/
                        * @type {Polyline}
                        *
                        *
                        */
            // Creating a polyline
            var polyline = new ymaps.Polyline([
                [-80, 60], [-90, 50], [-60, 40], [-80, 60]
            ], {
                hintContent: "Polyline"
            }, {
                cursor: 'pointer',
                hasBalloon: true,
                hasHint: true,
                interactiveZIndex: false,
                interactivityModel: 'default#geoObject',
                lineStringOverlay: 'default#polyline',
                opacity: 1,
                openBalloonOnClick: true,
                openEmptyBalloon: false,
                openEmptyHint: false,
                openHintOnHover: true,
                pane: 'areas',
                strokeColor: "0066ffff",
                strokeOpacity: 1,
                strokeWidth: 1,
                syncOverlayInit: false,
                useMapMarginInDragging: true,
                visible: true,
                //zIndex:,
                draggable: false,
                strokeWidth: 4,
                // The first number sets the stroke length. The second number sets the gap length.
                strokeStyle: '1 5'
            });
            // Adding the polyline to the map.
            myMap.geoObjects.add(polyline);
            // Setting the polyline borders for the map.
            myMap.setBounds(polyline.geometry.getBounds());


            /**
            *
            *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Popup-docpage/
            * @type {Popup}
            *
            *
            */
            Popup(map[{
                closeTimeout: 700,
                // interactivityModel:,
                openTimeout: 150,
                // pane:,
                // projection:,
                // zIndex:,

            }]);


            /**
             *
             *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Rectangle-docpage/
             * @type {RectangleCircle}
             *
             *
             */
            // Creating a geodesic circle with a radius of 1000 kilometers.
            var circle = new ymaps.Circle([[50, 50], 1000000], {}, {
                draggable: true
            });
            // Adding the circle to the map.
            myMap.geoObjects.add(circle);

            // Creating a rectangle based on the circle's boundaries.
            var rectangle = new ymaps.Rectangle(circle.geometry.getBounds(), {}, {
                cursor: "pointer",
                draggable: false,
                fillColor: "0066ff99",
                // fillImageHref:,
                fillMethod: 'stretch',
                fillOpacity: 1,
                hasBalloon: true,
                hasHint: true,
                interactiveZIndex: false,
                interactivityModel: "default#geoObject",
                opacity: 1,
                openBalloonOnClick: truem,
                openEmptyBalloon: false,
                openEmptyHint: false,
                openHintOnHover: true,
                outline: true,
                pane: "places",
                rectangleOverlay: "default#rectangle",
                strokeColor: "0066ffff",
                strokeOpacity: 1,
                // strokeStyle:,
                strokeWidth: 1,
                syncOverlayInit: false,
                useMapMarginInDragging: true,
                visible: true,
                // zIndex:,
                fill: true,
                coordRendering: "boundsPath",
                strokeWidth: 4
            });
            // Adding the rectangle to the map.
            myMap.geoObjects.add(rectangle);

            // Updating the rectangle's coordinates when changing the circle geometry.
            circle.geometry.events.add("change", function (event) {
                this.geometry.setCoordinates(event.get("target").getBounds());
            }, rectangle);



            /**
            *
            *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/Popup-docpage/
            * @type {regios}
            *
            *
            */
            ymaps.regions.load('RU', {
                lang: 'en', quality: 1,
            }).then(function (event) {
                geoMap.geoObjects.add(result.geoObjects);
            });



            /**
                        *
                        *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/RemoteObjectManager-docpage/
                        * @type {remoteObjectManager}
                        *
                        *
                        */
            var objectManager = new ymaps.RemoteObjectManager('http://myServer.com/tile?bbox=%b', {
                // Cluster options are set with the "cluster" prefix.
                clusterHasBalloon: false,
                // Geo object options are set with the "geoObject" prefix.
                geoObjectOpenBalloonOnClick: false,
                loadTileSize: 256,
                paddingParamName: 'callback',
                paddingTemplate: null,
                splitRequests: false,
                syncOverlayInit: false
            });

            // You can set options directly for child collections.
            objectManager.clusters.set({
                preset: 'islands#grayClusterIcons',
                hintContentLayout: ymaps.templateLayoutFactory.createClass('Group of objects')
            });
            objectManager.objects.set('preset', 'islands#grayIcon');



            /**
                        *
                        *https://tech.yandex.com/maps/jsapi/doc/2.1/ref/reference/RemoteObjectManager-docpage/
                        * @type {remoteObjectManager}
                        *
                        *
                        */

            // Building the route from Korolev to Krasnogorsk via Khimki and Mytischi,
            // where Mytischi is a throughpoint. Setting coordinates for Krasnogorsk.
            ymaps.route([
                'Korolev',
                { type: 'viaPoint', point: 'Mytischi' },
                'Himki',
                { type: 'wayPoint', point: [55.811511, 37.312518] }
            ], {
                mapStateAutoApply: true
            }).then(function (route) {
                route.getPaths().options.set({
                    // the balloon only shows information about the travel time with traffic
                    balloonContentLayout: ymaps.templateLayoutFactory.createClass('{{ properties.humanJamsTime }}'),
                    // you can make settings for route graphics
                    strokeColor: '0000ffff',
                    opacity: 0.9,
                    avoidTrafficJams:false,
                    // boundedBy:,
                    mapStateAutoApply:false,
                    multiRoute:false,
                    reverseGeocoding:false,
                    routingMode:'auto',
                    // searchCoordOrder:,
                    strictBounds:false,
                    useMapMargin:true,
                    viaIndexes:[],
                    zoomMargin:0
                });
                // adding the route to the map
                map.geoObjects.add(route);
            });



            


        });


    </script>
</body>

</html>

<!Document html>
<html>
<head>
<!--
$this->fileJs('https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js', 2);
        $url = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places';
        $this->fileJs($url, View::POS_END);
        $this->fileJs('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js', View::POS_END);
        $this->fileCss('\render\places\ZGoogleWidget\asset\main\css\styleDb27.css');
-->
    <style>
        .pac-container, .pac-logo {
            z-index: 999999!important;
        }

    </style>
    <link href="..asset/main/css/styleDb27.css" type="text/css" rel="stylesheet">
    <script src="..asset/main/js/main.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js" ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&libraries=places" ></script>
    <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" ></script>

</head>
<body>
<div class="row">
    <div id="locations">
    </div>
    <div class="col-12">
        <div class="col-md-6 sidebar pl-3 Small shadow" id="Sidebar">
            <!--search header-->
            <div id="right-panel"class="ctn map-sidebar-back w-100">
                <div class="map-saibar hidden-map-sidebar">
                    <div class="map-search-in d-flex justify-content-around align-items-center mt-3">
                        <div class="map-search-location">
                            <i class="far fa-circle"></i>
                            <div class="circle-box">
                                <div class="location-circle"></div>
                                <div class="location-circle"></div>
                                <div class="location-circle"></div>
                            </div>
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div id="directions" class="map-search-from">
                            <!--<input class="form-control" id="direction_a" type="text" placeholder="Укажите пункт отправления или выберите его на карте..."> <br>
                            <input class="form-control" id="direction_b" type="text" placeholder="Укажите пункт назначения...">
    -->
                        </div>
                    </div>

                </div>

                <div class="distance-map Small shadow p-3">
                    <p class="pt-2 pl-4 h5">Общее расстояние: <span id="total"></span></p>
                </div>
            </div>
        </div>

        <div id="Openbtn" class="openbtn"><i class="fas fa-chevron-right"></i></div>
        <div id="map" style="height: 90vh; width: 100%;" >

        </div>

    </div>

</div>
<script>
    bootbox.confirm({
        message: "Do you want to start Driving ?",
        buttons: {
            confirm: {
                label: 'YES',
                className: 'btn-success'
            },
            cancel: {
                label: 'NO',
                className: 'btn-danger'
            }
        },
        callback: function (event) {
            console.log('return' + result);
            if (result === true) {

                var openCheck = 0;



                $('#Openbtn').on('click', function() {

                    console.log("ERROR FIXING" + openCheck)  ;
                    if(openCheck != 1){
                        document.getElementById("Sidebar").style.left = "-15px";
                        document.getElementById("Openbtn").style.marginLeft = "415px";
                        document.getElementById("Openbtn").style.transform="rotate(180deg)";
                        openCheck = 1;
                    }else{
                        document.getElementById("Sidebar").style.left = "-450px";
                        document.getElementById("Openbtn").style.marginLeft= "0";
                        document.getElementById("Openbtn").style.transform="rotate(360deg)";
                        openCheck = 0;
                    }
                })

                //#endregion
                //#region global vars
                /*API key*/
                var key = 'AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo';
                /*Is show in map input search auto complete*/
                var searchAutoComplete = {searchAutoComplete};

                /*Is show image*/
                var searchPlaceImageShow = {searchPlaceImageShow};
                //#endregion

                /*If loaded show map*/
                $('#{id}').ready(
                    function () {

                        /*For direction Render global*/
                        var directionsRenderer;


                        var cnt_ind = 0;


                        var map;


                        /*For save searched place_id*/
                        var searchPlaceId = "";

                        /*For save markers on map*/
                        var allMarkers = [];

                        /*For config max marker count*/
                        var count_markers = {markerCount};

                        /*For direction Service*/
                        var directionsService;


                        /*For change markers*/
                        var cnt_edited = 0;

                        var mapUseType = '{mapUseType}';

                        console.log("{id} " + mapUseType +" map creating...")

                        //#region init
                        var options = {
                            center:{lat:41.32, lng: 69.22},
                            zoom: {zoom},
                            mapTypeId: '{mapType}'
                        }
                        map = new google.maps.Map(document.getElementById('{id}'),options);

                        var savedData = mapValueInstalization();
                        console.log(savedData);
                        allMarkers = savedData.map(function(location, i) {
                            console.log(location[0])
                            var marker = new google.maps.Marker({
                                position: {lat:parseFloat(location.lat), lng: parseFloat(location.lng)},
                                label: 'Z' + i,
                                title: location.address,
                            });
                            var userAddress =  location.user_entered_address;
                            var address     =  location.address;
                            var contentString = userAddress + '<br>' + address;
                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            infowindow.open(map, marker);
                            return marker;
                        });
                        console.log(allMarkers);
                        console.log('markers')


                        //endregion

                        if (mapUseType === 'read') {
                            createReadMap();
                        } else {
                            // Add a marker clusterer to manage the markers.
                            var markerCluster = new MarkerClusterer(map, allMarkers,
                                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

                            createWriteMap();
                        }


                        //region Write Map
                        function createWriteMap()
                        {

                            map.addListener('click', function(event) {
                                /*If selected place id*/
                                if (allMarkers.length < count_markers)
                                {
                                    var marker = new google.maps.Marker({
                                        position: event.latLng,
                                        draggable: {draggable},
                                        title: '' ,
                                        map: map
                                    });

                                    pushData(map, event.latLng.lat(), event.latLng.lng(), marker, allMarkers.length, 'push');

                                    allMarkers.push(marker);
                                    console.log('saqlandi');
                                    console.log(count_markers);
                                }
                                else if (allMarkers.length >= count_markers) {
                                    console.log("Oграниченный маркер!!");
                                    var marker = new google.maps.Marker({
                                        position: event.latLng,
                                        draggable: {draggable},
                                        title: '' ,
                                        map: map
                                    });
                                    allMarkers.forEach(function (m) {m.setMap(null);});


                                    var editing_index = allMarkers.length - count_markers + cnt_edited;
                                    allMarkers[editing_index] = marker;
                                    console.log(editing_index);
                                    console.log(allMarkers);
                                    for (var i = 0; i < allMarkers.length; i++) {
                                        allMarkers[i].setMap(map);
                                    }
                                    pushData(map,  event.latLng.lat(), event.latLng.lng(), marker, editing_index, 'edit');

                                    cnt_edited = (cnt_edited + 1) % count_markers;
                                }
                                else {
                                    alert("Пожалуйста сначала выберите место на панели поиска!")
                                }
                            });

                            //#region Search with depend
                            var Placeinput = document.getElementById('{depend_id}');
                            var searchBoxPlace = new google.maps.places.SearchBox(Placeinput);

                            map.addListener('bounds_changed', function () {
                                searchBoxPlace.setBounds(map.getBounds());
                            });

                            var markers = [];

                            searchBoxPlace.addListener('places_changed', function () {
                                var places = searchBoxPlace.getPlaces();

                                if(places.length === 0)
                                    return null;

                                markers.forEach(function (m) {m.setMap(null);});
                                markers = [];

                                var bounds = new google.maps.LatLngBounds();
                                places.forEach(function (p) {
                                    if(!p.geometry)
                                        return null;

                                    markers.push(new google.maps.Marker({
                                        map:map,
                                        title: p.name,
                                        position: p.geometry.location,
                                        // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
                                    }));
                                    console.log('Topildi ');
                                    console.log(p.place_id);
                                    searchPlaceId = p.place_id;


                                    getPlaceImage(searchPlaceId);

                                    if(p.geometry.viewport)
                                        bounds.union(p.geometry.viewport);
                                    else bounds.union(p.geometry.location);
                                })
                                map.fitBounds(bounds);

                                if (searchAutoComplete) {
                                    document.getElementById('search_map_{id}').value =  document.getElementById('{depend_id}').value;
                                }

                            })
                            //#endregion

                            //#region search in map
                            if (searchAutoComplete)
                            {
                                console.log("Have search")
                                /*********************************************************************************/
                                var input = document.getElementById('search_map_{id}');
                                var searchBox = new google.maps.places.SearchBox(input);

                                map.addListener('bounds_changed', function () {
                                    searchBox.setBounds(map.getBounds());
                                });

                                markers = [];
                                /*For in search in map*/
                                searchBox.addListener('places_changed', function () {
                                    var places = searchBox.getPlaces();

                                    if(places.length === 0)
                                        return null;

                                    markers.forEach(function (m) {m.setMap(null);});
                                    markers = [];

                                    var bounds = new google.maps.LatLngBounds();
                                    places.forEach(function (p) {
                                        if(!p.geometry)
                                            return null;

                                        markers.push(new google.maps.Marker({
                                            map:map,
                                            title: p.name,
                                            position: p.geometry.location,
                                            // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
                                        }));
                                        console.log('User qidirdi va ' + p.place_id + ' topildi');
                                        var place_id = p.place_id;

                                        getPlaceImage(p.place_id);

                                        if(p.geometry.viewport)
                                            bounds.union(p.geometry.viewport);
                                        else bounds.union(p.geometry.location);
                                    })

                                    map.fitBounds(bounds);
                                    document.getElementById('{depend_id}').value = document.getElementById('search_map_{id}').value;
                                })
                            }
                            //#endregion


                        }
                        //#endregion


                        //#region Create Read Map

                        function createReadMap()
                        {
                            //#region navigation
                            directionsRenderer = new google.maps.DirectionsRenderer;
                            directionsService = new google.maps.DirectionsService;

                            directionsRenderer = new google.maps.DirectionsRenderer({
                                draggable: {draggable},
                                map: map,
                                panel: document.getElementById('right-panel'),
                            });

                            directionsRenderer.addListener('directions_changed', function() {
                                computeTotalDistance(directionsRenderer.getDirections());
                            });

                            var trafficLayer = new google.maps.TrafficLayer();
                            trafficLayer.setMap(map);

                            console.log("Direction");

                            /* setInterval( */
                            optimalPoints();
                            /*70000);*/
                            //#endregion
                        }
                        //#endregion

                        /*  setInterval(function(){
                             setTimeout(function() {
                                 optimalPoints();
                                console.log('run');
                             },60000);
                          }, 10000); */

                        //#region Functions
                        /*Prevent to press ENTER button in search area*/
                        $(window).keydown(function(event){
                            if(event.keyCode == 13) {
                                event.preventDefault();
                                return false;
                            }
                        });
                        $('#click_sidebar').on('click', function() {
                            $('#right-panel').toggle();
                        });

                        //Get image of place with google PlacesService
                        function getPlaceImage(place_id){
                            if (searchPlaceImageShow){
                                var request = {
                                    placeId: place_id,
                                    fields: ['name','photos']
                                };

                                service = new google.maps.places.PlacesService(map);
                                service.getDetails(request, changeImage);

                                function changeImage(place, status) {
                                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                                        if (place.hasOwnProperty('photos')) {
                                            $('#place_image_{id}').css('display','') ;
                                            document.getElementById("place_image_{id}").src = place.photos[0].getUrl();
                                        }
                                        else $('#place_image_{id}').css('display','none');
                                    }
                                }
                            }
                        }

                        //Add new marker
                        function placeAddress(markerLat, markerLng) {
                            var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ markerLat +','+ markerLng +'&key='+key;

                            var res;

                            console.log('coming ' + urlLink);
                            return  fetch(urlLink)
                                //.then(response => response.json())
                                .then((response) => {
                                    if(response.ok) {
                                        return response.json();
                                    } else {
                                        throw new Error('Server response wasn\'t OK');
                                    }
                                })
                                .then(data => {
                                    var address = data.results[0].formatted_address;
                                    console.log(data)
                                    var place_id = data.results[0].place_id;
                                    return address;
                                })
                                .catch(err => console.warn(err.message));

                        }

                        //For save or edit markers
                        function pushData(map, lat, lng, marker, index, type){

                            var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ lat +','+ lng +'&key='+key;
                            /************************************************************************/
                            console.log("Push data type " + type)

                            bootbox.prompt({
                                title: "добавить ваше местоположение!",
                                centerVertical: true,
                                callback: function(result){
                                    console.log(result);

                                    fetch(urlLink)
                                        .then(response => response.json())
                                        .then(data => {
                                            var address = data.results[0].formatted_address;
                                            var place_id = data.results[0].place_id;

                                            /*Fixing*/
                                            /* if (searchPlaceId.length === 0)
                                                 place_id = data.results[0].place_id;*/
                                            //console.log(data.results[0].place_id);
                                            var contentString = '<b style="text-align:center">'+result+'</b><br>'+address;
                                            var infowindow = new google.maps.InfoWindow({
                                                content: contentString
                                            });
                                            infowindow.open(map, marker);

                                            /*if draggable = true           Marker after dragend change info window data*/
                                            google.maps.event.addListener(marker, 'dragend', function() {
                                                console.log('marker')
                                                console.log(marker.getPosition().lat());
                                                console.log(marker.getPosition().lng());
                                                var funcAddress = placeAddress(marker.getPosition().lat(), marker.getPosition().lng());

                                                var link = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ marker.getPosition().lat() +','+ marker.getPosition().lng() +'&key='+key;
                                                console.log('returned');
                                                console.log(funcAddress);
                                                bootbox.prompt({
                                                    title: "добавить ваше местоположение!",
                                                    centerVertical: true,
                                                    callback: function(result){
                                                        var user_entered_address = result;

                                                        console.log(result);
                                                        //fetch function here
                                                        fetch(link)
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                console.log('fetch');

                                                                console.log(data);
                                                                var address = data.results[0].formatted_address;
                                                                var place_id = data.results[0].place_id;

                                                                /*Fixing*/
                                                                /* if (searchPlaceId.length === 0)
                                                                     place_id = data.results[0].place_id;*/
                                                                //console.log(data.results[0].place_id);
                                                                var contentString = '<b style="text-align:center">'+result+'</b><br>'+address;
                                                                infowindow.setContent(contentString)
                                                                infowindow.open(map, marker);

                                                            })
                                                    }
                                                });

                                                console.log('salo')
                                            });

                                            /* var address_area_input = $(valueOfInput).val();*/

                                            if (type === 'push') {
                                                console.log("pushing " + index);
                                                $("<input hidden type='text' name = '{name}[" +index + "][place_id]' value='" + place_id + "'>").appendTo('#locations');
                                                $("<input hidden type='text' name = '{name}["+ index + "][address]' value='" + address + "'>").appendTo('#locations');
                                                $("<input hidden type='text' name = '{name}["+ index + "][user_entered_address]' value='" + result + "'>").appendTo('#locations');
                                                $("<input hidden type='text' name = '{name}["+ index + "][lat]' value=" + lat + ">").appendTo('#locations');
                                                $("<input hidden type='text' name = '{name}["+ index + "][lng]' value=" + lng + ">").appendTo('#locations');
                                                $("<hr>").appendTo('#locations');
                                            }
                                            else if (type === 'edit') {

                                                $("input[name='{name}["+ index + "][address]'").val(address);
                                                $("input[name='{name}["+ index + "][user_entered_address]'").val(result);
                                                $("input[name='{name}["+ index + "][lat]'").val(lat);
                                                $("input[name='{name}["+ index + "][lng]'").val(lng);
                                            }

                                        })
                                        .catch(err => console.warn(err.message));

                                }
                            });
                        }

                        /*load data to showing map*/
                        function mapValueInstalization() {
                            var data = {generateAlreadySaved};
                            console.log(data);

                            var index = 0;
                            for(var i = 0; i < data.length; i++)
                            {
                                $("<input hidden type='text' name = '{name}[" + index + "][place_id]' value='" + data[i].place_id + "'>").appendTo('#locations');
                                $("<input hidden type='text' name = '{name}[" + index + "][address]' value='" + data[i].address+ "'>").appendTo('#locations');
                                $("<input hidden type='text' name = '{name}[" + index + "][user_entered_address]' value='" + data[i].user_entered_address + "'>").appendTo('#locations');
                                $("<input hidden type='text' name = '{name}[" + index + "][lat]' value=" + data[i].lat + ">").appendTo('#locations');
                                $("<input hidden type='text' name = '{name}[" + index + "][lng]' value=" + data[i].lng + ">").appendTo('#locations');
                                $("<hr>").appendTo('#locations');
                                console.log(data[i].address);
                                index++;

                            }
                            return data;
                        }


                        //#region For direction
                        /*Create Direction routes*/

                        function optimalPoints() {
                            var limitWayPoints = {limitWayPoints};
                            var coords = [];

                            for (var i = 0; i < allMarkers.length; i++)
                            {
                                if (coords.length >= limitWayPoints) break;
                                coords.push({
                                    x: allMarkers[i].position.lng(),
                                    y: allMarkers[i].position.lat()
                                });
                                $("<input type='text' class='form-control' disabled id='direction_"+ i + "' value='" + allMarkers[i].title + "'>").appendTo('#directions');
                                $("<br>").appendTo('#directions');
                            }
                            /*If not draw direction*/
                            if (coords.length < 2) return null;
                            console.log("coords")
                            console.log(coords);

                            /*Max distance will min number*/
                            var mxDistance = -1000;
                            var Aindex, Bindex;
                            for (var i = 0; i < coords.length; i++)
                            {
                                for (var j = i + 1; j < coords.length; j++)
                                {
                                    var dis = distance(coords[i].x, coords[i].y, coords[j].x, coords[j].y);
                                    if (mxDistance < dis)
                                    {
                                        mxDistance = dis;
                                        Aindex = i;
                                        Bindex = j;
                                    }
                                }
                            }

                            console.log("Maximal distance = " + mxDistance +" of points " + Aindex + " and " + Bindex);

                            var image = {
                                url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                                // This marker is 20 pixels wide by 32 pixels high.
                                size: new google.maps.Size(140, 32),
                                // The origin for this image is (0, 0).
                                origin: new google.maps.Point(0, 0),
                                // The anchor for this image is the base of the flagpole at (0, 32).
                                anchor: new google.maps.Point(0, 32)
                            };
                            infoWindow = new google.maps.InfoWindow;

                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(function(position) {
                                    var pos = {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude
                                    };
                                    var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ position.coords.latitude+','+ position.coords.longitude +'&key='+key;
                                    fetch(urlLink) // Call the fetch function passing the url of the API as a parameter
                                        .then(response => response.json())
                                        .then(data => {
                                            // Your code for handling the data you get from the API
                                            var address = data.results[0].formatted_address;
                                            var place_id = data.results[0].place_id;

                                            console.log(place_id )
                                            $("<input hidden type='text' name = '{name}[" + index + "][place_id]' value='" + place_id + "'>").appendTo('#locations');
                                            $("<input hidden type='text' name = '{name}[address]' value='" + address + "'>").appendTo('#locations');
                                            $("<input hidden type='text' name = '{name}["+ index + "][lat]' value=" + position.coords.latitude+ ">").appendTo('#locations');
                                            $("<input hidden type='text' name = '{name}["+ index + "][lng]' value=" + position.coords.longitude + ">").appendTo('#locations');
                                            $("<hr>").appendTo('#locations');
                                            console.log('address ');

                                        })
                                        .catch(function() {
                                            // This is where you run code if the server returns any errors


                                        });
                                    infoWindow.setPosition(pos);
                                    /* infoWindow.setContent('Location found.');*/
                                    /* infoWindow.open(map);*/
                                    map.setCenter(pos);
                                    var directionMarkerA = new google.maps.Marker({
                                        map: map,
                                        icon: {
                                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                                        },
                                        position: pos,
                                        draggable: {draggable},
                                    });
                                    var directionMarkerB = new google.maps.Marker({
                                        map: map,
                                        icon: image,
                                        position: allMarkers[Bindex].getPosition(),
                                        draggable: {draggable},

                                    });

                                    var directionWayPoints = [];
                                    console.log("Get position")
                                    console.log(allMarkers[0].getPosition());
                                    for (var i = 0; i < coords.length; i++){
                                        if (i === Aindex || i === Bindex) continue;

                                        directionWayPoints.push({
                                            location: {lat:coords[i].y, lng: coords[i].x},
                                            stopover: true
                                        });
                                    }
                                    createDirection(directionMarkerA,directionMarkerB,directionWayPoints);


                                }, function() {
                                    handleLocationError(true, infoWindow, map.getCenter());
                                });
                            } else {
                                // Browser doesn't support Geolocation
                                handleLocationError(false, infoWindow, map.getCenter());
                            }
                            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                infoWindow.setPosition(pos);
                                infoWindow.setContent(browserHasGeolocation ?
                                    'Error: The Geolocation service failed.' :
                                    'Error: Your browser doesn\'t support geolocation.');
                                infoWindow.open(map);
                            }
                        }


                        function distance(x1, y1, x2, y2) {
                            return (x1 - x2)*(x1 - x2) + (y1 - y2)*(y1 - y2);
                        }
                        function createDirection(directionA, directionB, wayPoints) {

                            directionsService.route({
                                origin: directionA.getPosition(),
                                destination: directionB.getPosition(),
                                optimizeWaypoints: {optimizeWaypoints},

                                waypoints: wayPoints,

                                travelMode: "DRIVING",
                                /*drivingOptions: {
                                    departureTime: new Date(Date.now()),  // for the time N milliseconds from now.
                                    trafficModel: 'optimistic'
                                }*/
                            }, function(response, status) {
                                console.log(response)
                                console.log("response")
                                if (status === 'OK') {
                                    directionsRenderer.setDirections(response);
                                } else {
                                    window.alert('Directions request failed due to ' + status);
                                }
                            });
                        }

                        /*Create Direction routes calc distance*/
                        function computeTotalDistance(result) {
                            var total = 0;
                            var totalTime = 0;
                            var myroute = result.routes[0];
                            for (var i = 0; i < myroute.legs.length; i++) {
                                total += myroute.legs[i].distance.value;
                                totalTime += myroute.legs[i].duration.value;
                            }
                            total = total / 1000;
                            document.getElementById('total').innerHTML = total + ' km <br>' + (totalTime/60) + ' min with ' + 'DRIVING';
                        }
                        //#endregion


                        //#endregion

                    });

            }else if (result === false) {
                console.log('False');
            }
        }

    });
</script>
</body>
</html>

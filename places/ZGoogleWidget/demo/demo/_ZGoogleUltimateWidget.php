<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <title>Map</title>
</head>
<body>
<div class="row">

    <div id="{id}-locations">
    </div>
    <div class="col-md-12">
        <div class="col-lg-7 col-md-7 col-sm-7" id="search_area">

        </div>
        <div id="map" style="height: {height}px; width: content-box;" >
        </div>
    </div>
</div>
<script>
    function createMap() {
        var map;
        var cnt_ind;

        /*For get already saved data*/
        var savedData = "";

        /*For save searched place_id*/
        var searchPlaceId = "";

        /*For save markers on map*/
        var allMarkers = [];

        /*For config max marker count*/
        var count_markers = {matkerCount};

        /*For change markers*/
        var cnt_edited = 0;

        var markersOnMap;

        /*Is show in map input search auto complete*/
        var searchAutoComplete = {searchAutoComplete};

        /*Is show image*/
        var searchPlaceImageShow = {searchPlaceImageShow};

        /*API key*/
        var key = 'AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo';
        var options = {
            center:{lat:41.32, lng: 69.22},
            zoom: {zoom},
            mapTypeId: '{mapType}'
        }
        map = new google.maps.Map(document.getElementById('map'),options);

        var markersOnMap = savedData.map(function(location, i) {

            var marker = new google.maps.Marker({
                position: {lat:parseFloat(location.lat), lng: parseFloat(location.lng)},
                label: 'Z' + i,
            });
            allMarkers.push(marker);
            return marker;
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markersOnMap,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

        map.addListener('click', function(event) {

            /*If selected place id*/
            if (allMarkers.length < count_markers)
            {
                pushData(event.latLng.lat(), event.latLng.lng(), cnt_ind, 'push');

                cnt_ind ++;
                console.log('saqlandi');
                console.log(count_markers);
            }
            else if (allMarkers.length >= count_markers) {
                //alert("Oграниченный маркер!!");

                allMarkers.forEach(function (m) {m.setMap(null);});

                var editing_index = cnt_ind - count_markers + cnt_edited;

                pushData(event.latLng.lat(), event.latLng.lng(), editing_index, 'edit');

                cnt_edited = (cnt_edited + 1) % count_markers;
            }
            else {
                alert("Пожалуйста сначала выберите место на панели поиска!")
            }
        });

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




        /*Prevent to press ENTER button in search area*/

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        /*********************************************************************************/
        /*IP address*/
        var btn_address = document.getElementById('getmyAddress');
        $(btn_address).on('click', function() {
            infoWindow = new google.maps.InfoWindow;
            var location = navigator.geolocation;

            if (location) {
                location.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent();

                        markers.push(new google.maps.Marker({
                            map:map,
                            title: pos.name,
                            position:pos,
                            // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
                        }));
                        /*infoWindow.open(map);*/

                        map.setCenter(pos);

                        var urlLink2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+position.coords.latitude+','+position.coords.longitude+'&key='+key;
                        fetch(urlLink2)
                            .then(response => response.json())
                            .then(data => {
                                var dataFet = data.results[0].formatted_address;
                                console.log(data);
                                var contentString = dataFet;
                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });

                                infowindow.open(map, marker,document.contentString.insertAdjacentHTML(
                                    "beforeend",
                                ));
                            })
                            .catch(err => console.warn(err.message));
                    },
                    function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        });
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: Служба геолокации не удалась.' :
                'Error: Ваш браузер не поддерживает геолокацию.');
            infoWindow.open(map);
        }

//#region search in map
        if (searchAutoComplete)
        {
            /*********************************************************************************/
            var input = document.getElementById('search_map');
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
                    console.log('User qidirdi va topildi');
                    console.log(p.place_id);
                    var place_id = p.place_id;
                    $("<input hidden type='text' name = '{name}[" + cnt_ind + "][place_id]' value=" + place_id + ">").appendTo('#locations-{id}');

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

    //Sending request via AJAX to get image of countries
    function getPlaceImage(place_id){
        if (searchPlaceImageShow){
            //404 image
            var imageNotFound = 'https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png';
            //Ajax request
            $.ajax({url: "\service.aspx?namespace=inputs&service=depDrops&method=map&args=" + place_id, success: function(result){
                    if (result!=='https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled-1150x647.png'){

                        $('#place_image').css('display','') ;
                        document.getElementById("place_image").src = result;
                    }
                    else{
                        $('#place_image').css('display','none');
                    }
                }});
        }
    }

    //For save or edit markers
    function pushData(lat, lng, index, type)
    {
        var marker = new google.maps.Marker({
            position: {lat:lat, lng: lng},
            draggable: {draggable},
            title: '' ,
            map: map
        });

        if (type === 'push') {
            allMarkers.push(marker);
        }
        else if(type === 'edit') {
            allMarkers[index] = marker;

            for (var i = 0; i < allMarkers.length; i++) {
                allMarkers[i].setMap(map);
            }
        }
        /************************************************************************/
        var urlLink = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ lat +','+ lng +'&key='+key;

        /******************************************************************/
        bootbox.prompt({
            title: "добавить ваше местоположение!",
            centerVertical: true,
            callback: function(result){
                console.log(result);

                fetch(urlLink)
                    .then(response => response.json())
                    .then(data => {
                        var address = data.results[0].formatted_address;
                        var place_id = searchPlaceId;
                        if (searchPlaceId.length === 0)
                            place_id = data.results[0].place_id;
                        //console.log(data.results[0].place_id);
                        var contentString = '<b style="text-align:center">'+result+'</b><br>'+address;
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });
                        infowindow.open(map, marker)

                        /* var address_area_input = $(valueOfInput).val();*/

                        if (type === 'push') {
                            $("<input hidden type='text' name = '{name}[" +index + "][place_id]' value='" + place_id + "'>").appendTo('#locations-{id}');
                            $("<input hidden type='text' name = '{name}["+ index + "][address]' value='" + address + "'>").appendTo('#locations-{id}');
                            $("<input hidden type='text' name = '{name}["+ index + "][user_entered_address]' value='" + result + "'>").appendTo('#locations-{id}');
                            $("<input hidden type='text' name = '{name}["+ index + "][lat]' value=" + lat + ">").appendTo('#locations-{id}');
                            $("<input hidden type='text' name = '{name}["+ index + "][lng]' value=" + lng + ">").appendTo('#locations-{id}');
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

    /*If loaded show map*/
    $(document).ready(function () {

        savedData = {generateAlreadySaved};
        cnt_ind = 0;
        for(var i = 0; i < savedData.length; i++)
        {
            console.log(savedData[i]);
            $("<input hidden type='text' name = '{name}[" + cnt_ind + "][place_id]' value='" + savedData[i].place_id + "'>").appendTo('#locations-{id}');
            $("<input hidden type='text' name = '{name}[" + cnt_ind + "][user_entered_address]' value='" + savedData[i].result + "'>").appendTo('#locations-{id}');
            $("<input hidden type='text' name = '{name}[" + cnt_ind + "][address]' value='" + savedData[i].address+ "'>").appendTo('#locations-{id}');
            $("<input hidden type='text' name = '{name}[" + cnt_ind + "][lat]' value=" + savedData[i].lat + ">").appendTo('#locations-{id}');
            $("<input hidden type='text' name = '{name}[" + cnt_ind + "][lng]' value=" + savedData[i].lng + ">").appendTo('#locations-{id}');
            cnt_ind++;
        }

    });
</script>
</body>
</html>
                                                     


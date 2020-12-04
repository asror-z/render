<!DOCTYPE html>
<html>
<head>

    <style>
        #map {
            height: 100%;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #over_map {
            position: absolute;
            top: 10px;
            left: 89%;
            z-index: 99;
            background-color: #ccffcc;
            padding: 10px;
        }
    </style>
</head>

<body>
<div id="map"></div>

<div id="over_map">
    <div>
        <span>Online Cars: </span><span id="cars">0</span>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.17.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.17.2/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>

<script>
    // Replace your Configuration here..
    var config = {
        apiKey: "AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo",
        authDomain: "realtime-on-map-example.firebaseapp.com",
        databaseURL: "https://realtime-on-map-example.firebaseio.com",
        projectId: "realtime-on-map-example",
        storageBucket: "",
        messagingSenderId: "851837622908"
    };
    firebase.initializeApp(config);
</script>

<script>

    // counter for online cars...
    var cars_count = 0;

    // markers array to store all the markers, so that we could remove marker when any car goes offline and its data will be remove from realtime database...
    var markers = [];
    var map;
    function initMap() { // Google Map Initialization...
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: new google.maps.LatLng(31.52011, 74.368604),
            mapTypeId: 'terrain'
        });
    }

    // This Function will create a car icon with angle and add/display that marker on the map
    function AddCar(data) {

        var icon = { // car icon
            path: 'M29.395,0H17.636c-3.117,0-5.643,3.467-5.643,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759   c3.116,0,5.644-2.527,5.644-5.644V6.584C35.037,3.467,32.511,0,29.395,0z M34.05,14.188v11.665l-2.729,0.351v-4.806L34.05,14.188z    M32.618,10.773c-1.016,3.9-2.219,8.51-2.219,8.51H16.631l-2.222-8.51C14.41,10.773,23.293,7.755,32.618,10.773z M15.741,21.713   v4.492l-2.73-0.349V14.502L15.741,21.713z M13.011,37.938V27.579l2.73,0.343v8.196L13.011,37.938z M14.568,40.882l2.218-3.336   h13.771l2.219,3.336H14.568z M31.321,35.805v-7.872l2.729-0.355v10.048L31.321,35.805',
            scale: 0.4,
            fillColor: "#427af4", //<-- Car Color, you can change it
            fillOpacity: 1,
            strokeWeight: 1,
            anchor: new google.maps.Point(0, 5),
            rotation: data.val().angle //<-- Car angle
        };

        var uluru = { lat: data.val().lat, lng: data.val().lng };

        var marker = new google.maps.Marker({
            position: uluru,
            icon: icon,
            map: map
        });

        markers[data.key] = marker; // add marker in the markers array...
        document.getElementById("cars").innerHTML = cars_count;
    }

    // get firebase database reference...
    var cars_Ref = firebase.database().ref('/');

    // this event will be triggered when a new object will be added in the database...
    cars_Ref.on('child_added', function (data) {
        cars_count++;
        AddCar(data);
    });

    // this event will be triggered on location change of any car...
    cars_Ref.on('child_changed', function (data) {
        markers[data.key].setMap(null);
        AddCar(data);
    });

    // If any car goes offline then this event will get triggered and we'll remove the marker of that car...
    cars_Ref.on('child_removed', function (data) {
        markers[data.key].setMap(null);
        cars_count--;
        document.getElementById("cars").innerHTML = cars_count;
    });

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxS5l87lclaC6MIWSGejdCXL13wSShRo&callback=initMap">
</script>

</body>
</html>

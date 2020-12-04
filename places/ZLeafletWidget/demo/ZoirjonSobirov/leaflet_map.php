<?php
/***
 * @author Zoirjon Sobirov
*/
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/dexie/dist/dexie.min.js"></script>

    <script src="https://rawcdn.githack.com/helgasoft/leaflet.dexie/319e585048a6b28047fa33c0d6ba9c643faa511d/dist/leaflet.dexie.min.js"></script>
</head>
<body>
<div id="map" style="height: 95vh"></div>

<script>
//start | ZoirjonSobirov |2020.10.10
    var baseLayer = L.tileLayer.offline('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    { subdomains: 'abc', maxZoom: 16});
    var control = L.control.savetiles(baseLayer, {});

    var map = L.map('map');
    baseLayer.addTo(map);
    control.addTo(map);

    const tblName = 'test';
    control._db.version(1).stores( { [tblName]: '' });	// create table
    control.openDB().then(() => {
        control.setTable(tblName);
        control.putItem('mapCenter', { lat:41.32, lng: 69.22 });// write
    }).then(() => {
        control.getItem('mapCenter').then(value => map.setView(value, 14));	// read
    }).catch(err => alert(err.message));
//end | ZoirjonSobirov |2020.10.10
</script>
</body>
</html>

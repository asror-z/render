    /*If selected place id*/
    if (allMarkers.length < count_markers){
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


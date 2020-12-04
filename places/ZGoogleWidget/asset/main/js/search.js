function SearchMap(inputId) {
    var input = document.getElementById(inputId);
    var searchBox = new google.maps.places.SearchBox(input);

    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });

    markers = [];
    /*For in search in map*/
    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if(places.length === 0)
            return;

        markers.forEach(function (m) {m.setMap(null);});
        markers = [];

        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (p) {
            if(!p.geometry)
                return;

            markers.push(new google.maps.Marker({
                map:map,
                title: p.name,
                position: p.geometry.location,
                // icon: 'https://maps.google.com/maps/contrib/104742213001054094436',
            }));
            console.log('User qidirdi va topildi');
            console.log(p.place_id);
            var place_id = p.place_id;

            getPlaceImage(p.place_id);

            if(p.geometry.viewport)
                bounds.union(p.geometry.viewport);
            else bounds.union(p.geometry.location);
        })

        map.fitBounds(bounds);
        //document.getElementById('{depend_id}').value = document.getElementById('search_map_{id}').value;
    })

}

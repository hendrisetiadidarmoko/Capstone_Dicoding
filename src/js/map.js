function initialize() {
    var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(-7.411098489278937, 109.22631444005974),
        disableDefaultUI: false
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);
}

var officeLocations = [

    [1, 'Toko Maggot',
        'JL. Jenderal Soedirman, Dusun I Sokaraja Tengah, Sokaraja Tengah, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181',
        -7.4576737, 109.2925581
    ]
];

function setMarkers(map, locations) {
    // console.log(locations);
    for (var i = 0; i < locations.length; i++) {

        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[3], office[4]);
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var contentString =
            '<div id="content" class="">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
            '<div id="bodyContent">' + '<h6>Alamat : </h6>'+
            '<p class="">' + office[2] + '</p>' +
            '<a href="./shop-toko">Detail Toko</a>' +
            '<div class="view-link"> Klik untuk melihat lokasi : ' +
            '<a target="_blank" href="https://www.google.com/maps?q=' + office[3] + ',' + office[4] +
            '"><span>View on Google Maps</span></a> ' +
            '</div>' +
            '</div>' +
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon: '../img/markermap.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({
        content: content
    });
    return function() {
        infowindow.setContent(content);
        infowindow.open(map, this);
    };
}

initialize();
// Initialize and add the map
function initMap() {
  var points = [
    ['<a href="individual_sample.html?id=1">mamad</a>', 59.9362384705039, 30.19232525792222],
    ['<a href="individual_sample.html?id=2">mamad</a>', 59.941412822085645, 30.263564729357767],
    ['<a>href="individual_sample.html?id=3">mamad</a>', 59.939177197629455, 30.273554411974955]
];

  // The map
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: {lat: 59.9362384705039, lng: 30.19232525792222},
  });

  //Google Maps InfoWindow
  var infowindow = new google.maps.InfoWindow();

  // close the info window
  google.maps.event.addListener(map, 'click', function() {
    infoWindow.close();
  });

  var markers = [];
  for (var i = 0; i < points.length; i++) {
    // The marker
    markers[i] = new google.maps.Marker({
      position: {lat: points[i][1], lng: points[i][2]},
      map: map,
      details: points[i][0]
    });

    google.maps.event.addListener(markers[i], 'click', function(){
      var marker = this;
      infowindow.setContent( marker.details );
      infowindow.open(map, marker);
    });
  }
}


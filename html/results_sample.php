<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Review Freak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script>
      // Initialize and add the map
      function resultsMap() {
        var points = [
          ['<p>Location 1</p> <a href="individual_sample.html?id=1">More Info</a>', 59.9362384705039, 30.19232525792222],
          ['<p>Location 2</p> <a href="individual_sample.html?id=2">More Info</a>', 59.941412822085645, 30.263564729357767],
          ['<p>Location 3</p> <a href="individual_sample.html?id=3">More Info</a>', 59.939177197629455, 30.273554411974955]
        ];

        // Constructing the map by passing a DOM location and options object
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
    </script>

  </head>
  <body>
    <nav>
      <input type="checkbox" id="bars">
      <label for="bars" class="barsbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Review Freak</label>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="search.html">Search</a></li>
        <li><a href="submission.php">Submit</a></li>
        <li><a href="registration.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="individual_sample.html">Sample Review</a></li>
        <li><a class="active" href="results_sample.html">Reviews</a></li>
      </ul>
    </nav>
    <!--It's not a good approch to deal directly with body So, create a wrapper container and make it a full-window height.-->
    <div style="background: url(assets/images/ReviewTimeTransparent.png)" class="min-height bckground-cover"> 
      <div class="container py-5">
          <header class="text-center text-dark py-5">
              <h1 class="display-4 font-weight-bold mb-4">If It Exists, We Have Reviews For It</h1>
              <p style="font-size:1.25rem;font-weight:700">Join and start helping the community</p>
          </header>
      </div>
    </div>
    <br>
    <h3>Results:</h3>
    <div class="Results">
      <table style="width:80%; margin-top: 25px; margin: auto;">
        <tr>
          <th>Object Name</th>
          <th>Location (Coordinates)</th>
          <th>Rating</th>
        </tr>
        <tr>
          <td>Mcdonalds</td>
          <td>(44.3535, 19.018)</td>
          <td>5/10</td>
        </tr>
        <tr>
          <td>Mcdonalds</td>
          <td>(18.309, 19.6788)</td>
          <td>5.5/10</td>
        </tr>
        <tr>
          <td>Mcdonalds</td>
          <td>(25.8193, 25.3456)</td>
          <td>5.8/10</td>
        </tr>
      </table>
      <br>
      <div id="map"></div>
    </div>
    <div id="test"></div>
    <?php
    include 'footer.html';
   ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm0ZHNBRqGaLQZmcToRBLz4fy_RnJeh_4&callback=resultsMap&libraries=&v=weekly" async></script>
  </body>
</html>
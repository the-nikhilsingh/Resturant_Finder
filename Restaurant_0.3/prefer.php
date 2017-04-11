<html lang="en">
<script type="text/javascript" src="geo.js"></script>
<head>
<?php
session_start();
if(isset($_POST['submit'])){
  $uname =  $_POST['username'];

  $_SESSION["uname"] = $uname;
 
}
?>
<meta charset="UTF-8">
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
<title>Location</title>
</head>
<body>
   <form action="Home.php" method="post">
      <select name="vegs">
  <option value="V">V</option>
  <option value="NV">NV</option>
</select>
  <select name="cusine">
  <option value="Italian">Italian</option>
  <option value="Chinese">Chinese</option>
  <option value="Indian">Indian</option>
  
  <option value="Continental">Continental</option>
  <option value="North Indian">North Indian</option>
</select>
	   <input type="hidden" name="lat" id="lat" />
      <input type="hidden" name="long" id="long" />
    
      <input type="submit" name="submit" value="submit" onclick="getLocation()">
      <div id="demo" style="color:white; text-align:center;"></div>
    </form>
<div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu2HYE-1knokiUmNcI1Cw0dHzyiALai08&callback=initMap">
    </script>


</body>
    <script>
   la =0;
   lo =0;

   var x = document.getElementById("demo");
   if (navigator.geolocation) {
       navigator.geolocation.getCurrentPosition(showPosition);
   } else {
       x.innerHTML = "Geolocation is not supported by this browser.";
   }


   function showPosition(position) {
       x.innerHTML = "Your current Location<br>Latitude: " + position.coords.latitude +
       "<br>Longitude: " + position.coords.longitude;
       la = position.coords.latitude;
       lo = position.coords.longitude;
       document.getElementById("lat").value= la;
       document.getElementById("long").value= lo;
   }


   </script>

</html>

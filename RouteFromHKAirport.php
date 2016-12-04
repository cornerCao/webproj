<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8" />
  <title>Find a route using Geolocation and Google Maps API</title>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/common.css" rel="stylesheet">

  <script>
    function clearDiv(){
      document.getElementById("panel").innerHTML = "";
      document.getElementById("error").innerHTML = "";
    }
    function calculateRoute(from, to) {
      // Center initialized to Naples, Italy
      var myOptions = {
        zoom: 10,
        center: new google.maps.LatLng(40.84, 14.25),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      // Draw the map
      var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);

      var directionsDisplay = new google.maps.DirectionsRenderer;
      var directionsService = new google.maps.DirectionsService();
      var directionsRequest = {
        origin: from,
        destination: to,
        travelMode: google.maps.DirectionsTravelMode.TRANSIT,
        unitSystem: google.maps.UnitSystem.METRIC
      };

      directionsDisplay.setMap(mapObject);
      directionsDisplay.setPanel(document.getElementById('panel'));
      directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              /*
               new google.maps.DirectionsRenderer({
               map: mapObject,
               directions: response
               });
               */
              directionsDisplay.setDirections(response);
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
      );
    }

    $(document).ready(function() {
      // If the browser supports the Geolocation API
      if (typeof navigator.geolocation == "undefined") {
        $("#error").text("Your browser doesn't support the Geolocation API");
        return;
      }

      $("#from-link, #to-link").click(function(event) {
        event.preventDefault();
        var addressId = this.id.substring(0, this.id.indexOf("-"));

        navigator.geolocation.getCurrentPosition(function(position) {
              var geocoder = new google.maps.Geocoder();
              geocoder.geocode({
                    "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                  },
                  function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK)
                      $("#" + addressId).val(results[0].formatted_address);
                    else
                      $("#error").append("Unable to retrieve your address<br />");
                  });
            },
            function(positionError){
              $("#error").append("Error: " + positionError.message + "<br />");
            },
            {
              enableHighAccuracy: true,
              timeout: 10 * 1000 // 10 seconds
            });
      });

      $("#calculate-route").submit(function(event) {
        event.preventDefault();
        clearDiv();
        calculateRoute("Hong Kong International Airport", $("#to").val());
      });
    });
  </script>
  <style type="text/css">
    .mainDiv{
      margin: 70px 10px;
    }
    .mainDiv > h1{
      font-size: 20px;
    }

    #map {
      width: 500px;
      height: 400px;
      margin-top: 10px;
    }

    form > input:nth-child(2){
      padding:5px;
      font-size: 12px;
    }

  </style>
</head>
<body>
<?$active="route";
include_once "helper/nav.php";
?>
<div class="mainDiv">
  <h1>From HK Airport to your conference venue:</h1>
  <form id="calculate-route" name="calculate-route" action="#" method="get">
    <label for="to">To:</label>
    <input type="text" id="to" name="to" required="required" placeholder="Enter your conference venue" size="30" />
    <br />

    <input class="blueButton" type="submit" />
    <input class="blueButton" type="reset"  onclick="document.location.reload();" />
  </form>
  <div id="map"></div>
  <div id="panel"></div>
  <p id="error"></p>
</div>
<script>
  <?php
  if(isset($_GET['venue'])){?>
  $("#to").val('<?echo $_GET['venue'];?>');
  <?}
  ?>

</script>
</body>


</html>

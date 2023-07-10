<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Tracker</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdoGRT74zTDjERexmVKtzEH90UvXKQasE&libraries=visualization"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script>
        // Replace 'YOUR_API_KEY' with your actual Google Maps API key
        var API_KEY = 'AIzaSyBdoGRT74zTDjERexmVKtzEH90UvXKQasE';

        // Define the target location
        var targetLocation = { lat: 16.054573, lng: 120.375717 }; // Example: New York, NY

        // Initialize the map
        var map = new google.maps.Map(document.getElementById('map'), {
            center: targetLocation,
            zoom: 15
        });

        // Create a marker for the target location
        var marker = new google.maps.Marker({
            position: targetLocation,
            map: map
        });

        // Continuously track the target location
        function trackLocation() {
            // Get the current location
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address': 'Maasin, Pangasinan' }, function(results, status) {
                if (status === 'OK') {
                    // Extract the latitude and longitude of the target location
                    var lat = results[0].geometry.location.lat();
                    var lng = results[0].geometry.location.lng();

                    // Print the current coordinates
                    console.log('Latitude: ' + lat + ', Longitude: ' + lng);

                    // Update the marker position
                    marker.setPosition({ lat: lat, lng: lng });

                    // Call the function again after 1 second
                    setTimeout(trackLocation, 1000);
                }
            });
        }

        // Start tracking the location
        trackLocation();
    </script>
</body>
</html>

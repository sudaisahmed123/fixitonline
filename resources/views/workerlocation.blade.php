<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Worker</title>
    <link rel="icon" href="assets/icon/favicon.png?v=1" type="image/png">
   
   

    <script>
        function initMap() {
            const userLocation = {
                lat: {{ $latitude }},
                lng: {{ $longitude }}
            };
            const map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: userLocation,
            });

            const workerMarker = new google.maps.Marker({
                position: userLocation,
                map: map,
                title: "Worker's Location",
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            function updateWorkerLocation() {
                fetch('/location/{workerid}')
                    .then(response => response.json())
                    .then(data => {
                        const newLocation = { lat: data.latitude, lng: data.longitude };
                        workerMarker.setPosition(newLocation);
                        map.setCenter(newLocation);
                        displayDirections(userLocation, newLocation);
                    })
                    .catch(error => console.error('Error fetching worker location:', error));
            }

            function displayDirections(start, end) {
                directionsService.route({
                    origin: start,
                    destination: end,
                    travelMode: 'DRIVING'
                }, (response, status) => {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }

            // Initialize directions
            displayDirections(userLocation, userLocation);

            setInterval(updateWorkerLocation, 5000); // Update every 5 seconds
        }

        window.onload = initMap;
    </script>
</head>
<body>

    <h1>Track Worker</h1>
    <div id="map" style="height: 500px; width: 100%;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBziijLmgTuZFv4HugbGhEX8RZtvQld7vQ"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <style>

.appointment-details {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 2px 2px 15px black,-2px -2px 15px black;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    
        .details-section {
            margin-bottom: 20px;
        }
    
        h2, h3 {
            margin-bottom: 10px;
        }
    
        p {
            margin: 5px 0;
        }
    
        .actions {
            text-align: center;
        }
    
        .btn-complete {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    
        .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: black;
            color:white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color:#fd7e14;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
        } */
    </style>
</head>
<body>
    <!-- <div class="container">
        <h2 style="color:white">Appointment Details</h2>
       
        <table>
            <tr>
                <th>Appointment ID</th>
                <td id="appointmentId">{{$appointment->id}}</td>
            </tr>
            <tr>
                <th>Client Name</th>
                <td id="clientName">{{$appointment->fullName}}</td>
            </tr>
            <tr>
                <th>Contact Information</th>
                <td id="contactInfo">{{$appointment->email}}</td>
            </tr>
            <tr>
                <th>Date & Time</th>
                <td id="dateTime">{{$appointment->formatted_date}} {{$appointment->formatted_time}}</td>
            </tr>
            <tr>
                <th>Appointment Details</th>
                <td id="details">{{$worker->Category}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td style="color:green;" id="status">{{$appointment->status}}</td>
            </tr>
            <tr>
                <th>City</th>
                <td id="status">{{$appointment->city}}</td>
            </tr>
            <tr>
                <th>State</th>
                <td id="status">{{$appointment->state}}</td>
            </tr>
            <tr>
                <th>Complete Location</th>
                <td id="status">{{$appointment->area}}</td>
            </tr>
            <tr>
                <th>Notes</th>
                <td id="notes">Bring the previous campaign data.</td>
            </tr>
        </table>
        <div style="display:flex; justify-content:center" class="container1">
        <a style="background-color:white; color:black;" href="/workerdashboard" class="btn">Back to Appointments</a>
        <form action="{{route('appointment.confirm',$appointment->id)}}" method="post">
            @csrf
        <button style="background-color: #fd7e14; margin-left: 10px; border:none; outline:none; cursor:pointer" type="submit" class="btn">Confirm Appointment</button>
        </form>
        </div>
    </div> -->


    <div class="appointment-details">
        <h2>Appointment Details</h2>
    
        <div class="details-section">
            <h3>Customer Information</h3>
            <p><strong>Name:</strong> {{$appointment->fullName}}</p>
            <p><strong>Contact:</strong>{{$appointment->phoneNumber}}</</p>
            <p><strong>Address:</strong> {{$appointment->city}}, {{$appointment->state}}, {{$appointment->area}} </p>
        </div>
    
        <div class="details-section">
            <h3>Service Information</h3>
            <p><strong>Service Type:</strong>{{$worker->Category}}</p>
            <p><strong>Date & Time:</strong> {{$appointment->formatted_date}}, {{$appointment->formatted_time}}</p>
            <p><strong>Status:</strong>{{$appointment->status}}</p>
        </div>
    
        <div class="details-section">
            <h3>Location</h3>
            <div id="map" style="height: 400px; width: 100%;"></div>
        </div>
    
        <div class="details-section actions">
        <div style="display:flex; justify-content:center" class="container1">
        <a style="background-color:black; color:white; padding:10px 15px; text-decoration:none;" href="/workerdashboard" class="btn">Back to Appointments</a>
        <form action="{{route('appointment.confirm',$appointment->id)}}" method="post">
            @csrf
        <button style="background-color: #fd7e14; margin-left: 10px; border:none; outline:none; cursor:pointer;  padding:10px 15px; text-decoration:none;" type="submit" class="btn">Confirm Appointment</button>
        </form>
        </div>
        </div>
    </div>

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

            function updateWorkerLocation() {
                fetch('/location/{workerid}')
                    .then(response => response.json())
                    .then(data => {
                        const newLocation = { lat: data.latitude, lng: data.longitude };
                        workerMarker.setPosition(newLocation);
                        map.setCenter(newLocation);
                    })
                    .catch(error => console.error('Error fetching worker location:', error));
            }

            setInterval(updateWorkerLocation, 5000); // Update every 5 seconds
        }

        window.onload = initMap;
    </script>
   <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBziijLmgTuZFv4HugbGhEX8RZtvQld7vQ"></script>
</body>
</html>

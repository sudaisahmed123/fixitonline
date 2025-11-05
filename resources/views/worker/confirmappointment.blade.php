@extends('layouts.adminworker')
@section('workercontent')


<style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
            margin: 20px 0px 40px 0px;
        }
        .grid-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background-color:white;
            box-shadow: 2px 2px 15px black;
        }
    </style>

<script>
    let trackingInterval;

    function startTracking() {
        if (navigator.geolocation) {
            alert('Location tracking started');
            trackingInterval = navigator.geolocation.watchPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                // Send worker location to the backend
                fetch('/update-worker-location', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        latitude: latitude,
                        longitude: longitude,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if(data.status === 'success') {
                        console.log('Location updated successfully');
                    } else {
                        console.error('Error updating location:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }, function(error) {
                console.error('Error getting location:', error.message);
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function stopTracking() {
        if (trackingInterval) {
            navigator.geolocation.clearWatch(trackingInterval);
            alert('Location tracking stopped'); 
            console.log('Tracking stopped');
        }
    }
</script>

<div class="page-body-wrapper">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Appointment List</h4>
                            <span>List of Customers' Appointments</span>
                            <span style="color:red">If you have completed your appointment, press the completed button.</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive theme-scrollbar">
                                <table class="display" id="appointment-table">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Client Email</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($confirmappointments as $app)
                                            <tr>
                                                <td>{{ $app->fullName }}</td>
                                                <td>{{ $app->email }}</td>
                                                <td>{{ $app->formatted_date }}</td>
                                                <td>{{ $app->formatted_time }}</td>
                                                <td>{{ $app->status }}</td>
                                                @if($app->status == 'confirmed')
                                                    <td>
                                                        <a style="background-color:#fda700" class="btn" href="{{ url('completed/' . $app->id) }}">Completed</a>
                                                        <button onclick="startTracking()" class="btn btn-success">Start Tracking</button>
                                                        <button onclick="stopTracking()" class="btn btn-danger">Stop Tracking</button>
                                                        
                                                    </td>
                                                @else
                                                    <td>Not available</td>
                                                @endif
                                            </tr>
                                        @endforeach

                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Client Email</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Time</th>
                                            <th>Phone Number</th>
                                            <th>Location</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
<center><h2> Confirmed Appointment List</h2></center>
                
            <div class="grid-container">
            @foreach($confirmappointments as $app)
        <div class="grid-item">
            <p><strong>Customer Name:</strong> {{$app->fullName}}</p>
            <p><strong>Date & Time:</strong> {{$app->formatted_date}} & {{$app->formatted_time}} </p>
            <p><strong>Service Type:</strong>{{$app->worker->Category}}</p>
            @if($app->status == 'confirmed')
                                                    
                                                        <a style="background-color:#fda700;width:100%" class="btn" href="{{ url('completed/' . $app->id) }}">Completed</a>
                                                        
                                                        
                                                        <button style="width:100%;margin-top:10px" onclick="startTracking()" class="btn btn-success">Start Tracking</button>
                                                      
                                                        <center> <button style="margin-top:10px; width:100%" onclick="stopTracking()" class="btn btn-danger">Stop Tracking</button></center>
                                                       
                                                        
                                                    
                                                @else
                                                    <td>Not available</td>
                                                @endif
        </div>
        @endforeach
      
        <!-- More grid items -->
    </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<!-- DataTables Initialization -->
<script>
$(document).ready(function() {
    $('#appointment-table').DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "ordering": true,
        "lengthChange": true,
        "pageLength": 10, // Number of rows per page
        "language": {
            "search": "Search records:",
            "paginate": {
                "next": "Next",
                "previous": "Previous"
            },
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
    });
});
</script>

<!-- Custom CSS -->
<style>
    #appointment-table {
        width: 100%;
        border-collapse: collapse;
    }

    #appointment-table thead th, #appointment-table tfoot th {
        background-color: black; /* Navy Blue */
        color: #fda700;
        text-align: left;
    }

    #appointment-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #appointment-table tbody tr:hover {
        background-color: #ddd;
    }

    #appointment-table thead th {
        padding: 12px;
    }

    #appointment-table tbody td {
        padding: 8px;
    }

    /* Pagination styling */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5em;
        border: 1px solid #003366; /* Navy Blue */
        background: #003366; /* Navy Blue */
        color: white;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #00509e; /* Darker Blue */
        border: 1px solid #00509e; /* Darker Blue */
    }

    .dataTables_wrapper .dataTables_filter input {
        margin: 0.5em;
        padding: 0.5em;
        border: 1px solid #003366; /* Navy Blue */
        border-radius: 4px;
    }

    .dataTables_wrapper .dataTables_info {
        padding: 0.5em;
    }
</style>
@endsection


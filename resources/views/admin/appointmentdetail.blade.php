<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/costem.css') }}" rel="stylesheet">
 
</head>

<body>

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Appointment Details</h4>
                </div>
                <div class="card-body" >
                    <table class="table table-striped">
                        <tr>
                            <th>Client Name:</th>
                            <td>{{$appointment->fullName}}</td>
                        </tr>
                        <tr>
                            <th>Appointment Date:</th>
                            <td>{{$appointment->formatted_date}}</td>
                        </tr>
                        <tr>
                            <th>Time:</th>
                            <td>{{$appointment->formatted_time}}</td>
                        </tr>
                        <tr>
                            <th>Client Number:  City: State: Postal Code</th>
                            <td>{{$appointment->phoneNumber}}  {{$appointment->city}} {{$appointment->state}} {{$appointment->code}}</td>
                        </tr>
                        <tr>
                            <th>Worker:</th>
                            <td>{{$worker->Name}} {{$worker->lastname}}</td>
                        </tr>
                        <tr>
                            <th>Worker Category:</th>
                            <td>{{$worker->Category}}</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>{{$appointment->status}}</td>
                        </tr>
                        <tr>
                            <th>Location:</th>
                            <td>{{$appointment->state}}</td>
                        </tr>
                        <tr>
                            <th>About Your Issue:</th>
                            <td>{{$appointment->area}}</td>
                        </tr>
                    </table>
                    <div style="display:flex; justify-content:center; padding:20px;border:none; outline:none" class="container1">
                    <a style="background-color:black; margin:0px 10px;" href="/appointmenttable" class="btn btn-primary">Back to Appointments</a>
                    @if($appointment->status!=='Approved')
                    <form action="{{route('appointment.accept',$appointment->id)}}" method="post">
                        @csrf
                    <button style="background-color:#fd7e14; border:none; outline:none;"  type="submit" class="btn btn-success">Confirm</button>
                    </form>
                    <!-- <a href="accept/{{$appointment->id}}" class="btn btn-primary">Confirm Appointment</a> -->
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/costem.js')}}"></script>
  
</body>
</html>
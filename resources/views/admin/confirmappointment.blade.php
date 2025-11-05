@extends('layouts.admindashboard')
@section('admincontent')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects">
                            <div class="tbl-caption">
                                <h4 class="heading mb-0">Active Projects</h4>
                            </div>
                            <!-- Search bar -->
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Appointment ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        
                                        <th>Appointment Status</th>
                                        
                                        <th>User Email</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($appointments as $app)
    <tr>
        <td>{{ $app->id }}</td>
        <td>{{ $app->fullName }}</td>
        <td>{{ $app->email }}</td>
        <td style="color:green">{{ $app->status}}</td>
        <td>{{ $app->user ? $app->user->email : 'N/A' }}</td>
        <td><a class="btn btn-danger" href="appdelete/{{$app->id}}">Delete</a></td>
        <!-- @if($app->status!=='Approved')
        <td><a class="btn btn-success" href="accept/{{$app->id}}">Accept</a></td>
        <td><a class="btn btn-danger" href="appointmentdetail/{{$app->id}}">see data</a></td>
        @else
        <td><a class="btn btn-danger" href="appdelete/{{$app->id}}">Delete</a></td>
        <td><a class="btn btn-danger" href="appointmentdetail/{{$app->id}}">see data</a></td>
        @endif -->
    </tr>
@endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Appointment ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        
                                        <th>Worker Status</th>
                                        
                                        <th>User Email</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });

    });
</script>
@endsection

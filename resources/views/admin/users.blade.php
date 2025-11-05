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
                                        <h4 class="heading mb-0">Registered Users</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>User Email</th>
                                                <th>User Email Verified At</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($sd as $ds)
                                            <tr>
                                                <td>{{$ds->id}}</td>
                                                <td>{{$ds->name}}</td>
                                                <td>{{$ds->email}}</td>
                                                <td>{{$ds->email_verified_at}}</td>
                                            </tr>
                                            @endforeach
                                    

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>

@endsection

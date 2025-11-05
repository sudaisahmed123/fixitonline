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
                                        <th>Id</th>
                                        <th>Workers Name</th>
                                        <th>Email</th>
                                        <th>Age | Birth Date</th>
                                        <th>Skill</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($approved as $wor )
                                    <tr>
                                        <td>{{ $wor->id }}</td>
                                        <td>{{ $wor->Name }} {{ $wor->lastname }}</td>
                                        <td>{{ $wor->Email }}</td>
                                        <td>{{ $wor->Age }} | {{ $wor->Date }}</td>
                                        <td>{{ $wor->Category }}</td>
                                        <td style="color:rgb(43, 226, 7)
                                        ">{{ $wor->role }}</td>
                                         <td><a class="btn btn-danger" href="delete/{{ $wor->id }}">Delete</a></td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Workers Name</th>
                                        <th>Email</th>
                                        <th>Age | Birth Date</th>
                                        <th>Skill</th>
                                        <th>Status</th>

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

@extends('layouts.admindashboard')
@section('admincontent')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 6000 // Automatically close after 1.5 seconds
    });
</script>
@endif

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
                                    @foreach ($pl as $lp )
                                    <tr>
                                        <td>{{ $lp->id }}</td>
                                        <td>{{ $lp->Name }} {{ $lp->lastname }}</td>
                                        <td>{{ $lp->Email }}</td>
                                        <td>{{ $lp->Age }} | {{ $lp->Date }}</td>
                                        <td>{{ $lp->Category }}</td>
                                        <td style="color:red
                                        ">{{ $lp->role }}</td>
                                        <td><a style="background-color:  #F8B940; padding:5px 10px; border-radius:20px" href="workerview/{{ $lp->id }}">More Details</a></td>
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

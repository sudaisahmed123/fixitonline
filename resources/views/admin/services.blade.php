@extends('layouts.admindashboard')
@section('admincontent')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="formbold-form-wrapper">
                <form action="/ser" method="POST" enctype="multipart/form-data">
                    <center><h2 style="color:black">Add Services</h2></center>
                    @csrf
                    <div class="mb-3">
    <label style="color:black;" for="worker" class="form-label">Services Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputName" required  placeholder="Service Name">
 
  </div>
  <div class="mb-3">
    <label style="color:black;" for="worker" class="form-label ">Services Description</label>
    <input name="des" type="text" class="form-control" id="exampleInputdes" required  placeholder="Service Description">
  
  </div>
  <div class="mb-3">
    <label style="color:black;" for="worker" class="form-label">Services Link</label>
    <input name="link" type="text" class="form-control" id="exampleInputName" required placeholder="Service Link" >
    
  </div>
  <div class="mb-3">
    <label style="color:black;" for="worker" class="form-label">Services Image</label>
    <input name="image" type="file" class="form-control" id="exampleInputName" required >
   
  </div>
  <div class="mb-3">
    <label style="color:black;" for="worker" class="form-label">Services Icon</label>
    <input name="icon" type="file" class="form-control" id="exampleInputName" required>
    
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500 // Automatically close after 1.5 seconds
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
                                        <button class="btn btn-success" id="open-modal-button">Add Services</button>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Services Name</th>
                                                <th>Services Image</th>
                                                <th>Services Icon</th>
                                                <th>Create Time</th>
                                                <th>Update Time</th>
                                                <th>Action</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($service as $ser)
                                            <tr>
                                                <td>{{ $ser->id }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 ms-2">{{$ser->name}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 ms-2">{{$ser->image}}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 ms-2">{{$ser->icon}}</p>
                                                    </div>
                                                </td>


                                                <td>
                                                    <span>{{$ser->created_at  }}</span>
                                                </td>
                                                <td>
                                                    <span>{{$ser->updated_at  }}</span>
                                                </td>
                                                <td><a class="btn btn-danger" href="deleteservice1/{{$ser->id}}">Delete</a></td>
                                              

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
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("open-modal-button");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
@endsection

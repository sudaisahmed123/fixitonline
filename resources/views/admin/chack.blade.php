@extends('layouts.admindashboard')
@section('admincontent')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<div id="myModal" class="modal" >
    <div class="modal-content" style="background-color:#182237">
        <span class="close">&times;</span>
        <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="formbold-form-wrapper">
                <form action="/cat" method="POST" style="background-color:#182237">
                    @csrf
                    <div class="formbold-mb-5">
                        <label style="color:white" for="worker" class="formbold-form-label">Add Category</label>
                        <input
                            type="text"
                            name="Categorie"
                            id="name"
                            placeholder="Enter Your Category"
                            class="formbold-form-input" required
                        />
                    </div>
                    <!-- Other input fields omitted for brevity -->
                    <button type="submit" class="formbold-btn">Save</button>
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
                                        <button class="btn btn-success" id="open-modal-button">Add Category</button>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Category</th>
                                                <th>Create Time</th>
                                                <th>Update Time</th>
                                                <th>Delete</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $categorie)
                                            <tr>
                                                <td>{{ $categorie->id }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 ms-2">{{$categorie->Categorie}}</p>
                                                    </div>
                                                </td>


                                                <td>
                                                    <span>{{$categorie->created_at  }}</span>
                                                </td>
                                                <td>
                                                    <span>{{$categorie->updated_at  }}</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="del/{{$categorie->id}}">Delete</a>
                                                </td>

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

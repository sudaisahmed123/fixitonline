<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Worker Details</title>
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
    <style>
        /* Your CSS styles here */
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #182237;
            position: relative;
            height: 100%;
        }
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }
        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }
        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
        }
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
            color: #F8B940;
            font-weight: 800;
        }
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #ffffff;
        }
        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }
        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }
        .account-settings .about p {
            font-size: 0.825rem;
        }
        .form-control {
            border: 1px solid #cfd1d8;
            border-radius: 2px;
            font-size: .825rem;
            background: #222B40;
            color: #ffffff;
        }
        .card {
            background: #222B40;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
            color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .button {
            background-color: #F8B940;
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            float: right;
        }
        .button:hover {
            background-color: #000000;
        }
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: scroll;
            background-color:  #222B40;
        }
        .modal-content {
            position: relative;
            margin: 5% auto;
            width: 90%;
            max-width: 800px;
            background-color:  #222B40;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .close {
            position: absolute;
            top: 10px;
            right: 50px;
            font-size: 24px;
            color: #fffbfb;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #ff0000;
            text-decoration: none;
            cursor: pointer;
        }
        /* Download button styles */
        .download-sign {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: #aaa;
            cursor: pointer;
        }
        .download-sign:hover,
        .download-sign:focus {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                @if ($chck)
                                    <div class="user-avatar">
                                        <img src="{{ asset('userimages/'.$chck->profilePic) }}" alt="Profile Picture">
                                    </div>
                                    <h5 class="user-name">{{ $chck->Name }} {{ $chck->lastname }}</h5>
                                    <h6 class="user-email">{{ $chck->Email }}</h6>
                                    <h6 class="user-email"> Status: <span style="color: red">{{ $chck->role }}</span> </h6>
                                    <div class="about">
                                        <h5>About</h5>
                                        <p>{{ $chck->Bio }}</p>
                                    </div>
                                @else
                                    <p>No worker details found.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        @if ($chck)
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Phone Number</label>
                                        <h5>{{ $chck->PhoneNumber }}</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Date Of Birth</label>
                                        <h5>{{ $chck->Date }}</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Age</label>
                                        <h5>{{ $chck->age }}</h5>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Password</label>
                                        <h5>{{ $chck->Password }}</h5>
                                    </div>
                                </div> -->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Category</label>
                                        <h5>{{ $chck->Category }}</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Gender</label>
                                        <h5>{{ $chck->Gender }}</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Date Of Application</label>
                                        <h5>{{ $chck->created_at }}</h5>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Confirm Paasword</label>
                                        <h5>{{ $chck->confirm }}</h5>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Street</label>
                                        <h5>{{ $chck->street }}</h5>
                                    </div>
                                </div> -->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">City</label>
                                        <h5>{{ $chck->city }}</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Full address</label>
                                        <h5>{{ $chck->state }}</h5>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Zip Code</label>
                                        <h5>{{ $chck->code }}</h5>
                                    </div>
                                </div> -->
                            </div>
                            <div class="flex" style="display: flex; flex-wrap:wrap; ">
                            <form action="{{ route('workers.approve', $chck->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>


                            <form style="margin:0px 10px"  action="{{ route('workers.reject', $chck->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Reject</button>
                            </form>
                        </div>
                            <!-- PDF Modal -->
                            <button id="openModalBtn" class="button">Open PDF</button>
                            <div id="pdfModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" id="closeModal">&times;</span>
                                    <embed src="{{ asset('useruploads/'.$chck->FileUpload) }}" type="application/pdf" width="100%" height="500px" />
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for modal handling
        var modal = document.getElementById('pdfModal');
        var btn = document.getElementById("openModalBtn");
        var span = document.getElementById("closeModal");

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>

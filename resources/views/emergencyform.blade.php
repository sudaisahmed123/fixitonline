@extends('layouts.headerFooter')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
        /* Container Styles */
        .container {
            margin-top: 50px;
        }

        /* Card Styles */
        .card {
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Card Header */
        .card-header {
            background-color: #fda700;
            border-radius: 15px 15px 0 0;
            padding: 25px;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        /* Form Fields */
        .form-control {
            border-radius: 10px;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ced4da;
            margin-bottom: 15px;
        }

        /* Submit Button */
        .btn-primary {
            background-color: #fda700;
            border: none;
            font-size: 1.2rem;
            padding: 12px 0;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #fda700;
        }

        /* Media Query for Smaller Screens */
        @media (max-width: 767.98px) {
            .container {
                margin-top: 30px;
            }

            .col-md-6 {
                width: 100%;
            }

            .card {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Book an Appointment with {{ $worker->Name }}
                </div>
                <div class="card-body">
                    <form action="/createemergency" method="POST">
                        @csrf
                        <input type="hidden" name="worker_id" value="{{ $worker->id }}">

                        <!-- Additional Appointment Form Fields -->
                        <div class="form-group">
                            <label for="date">Your Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Your Number:</label>
                            <input type="number" name="number" id="number" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="date">Select Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="time">Select Time:</label>
                            <input type="time" name="time" id="time" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="notes">Additional Notes:</label>
                            <textarea name="notes" id="notes" class="form-control" rows="4" placeholder="Any specific instructions or issues?"></textarea>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block w-100">Book Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional but recommended for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
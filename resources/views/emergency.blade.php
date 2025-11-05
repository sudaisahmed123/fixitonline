@extends('layouts.headerFooter')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
    /* Container Styles */
.container {
    margin-top: 50px;
}

/* Card Styles */
.card {
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

/* Card Header Styles */
.card-header {
    background-color: #fda700; /* Primary Color */
    border-bottom: none;
    border-radius: 10px 10px 0 0;
    font-weight: bold;
    padding: 20px;
}

/* Category Label and Select */
.form-group label {
    font-size: 1.1rem;
    color: #333;
}

.form-control {
    border-radius: 5px;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ced4da;
}

/* Submit Button Styles */
.btn-success {
    background-color: #fda700;
    border: none;
    font-size: 1.1rem;
    padding: 10px 0;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color:#fda700;
}

/* Text Centering and Margin */
.text-center {
    margin-top: 20px;
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

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'error!',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 6000 // Automatically close after 1.5 seconds
    });
</script>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center bg- text-white">
                    <h4>Emergency Appointment</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('emergency.selectWorker')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="category">Select Category:</label>
                            <select name="category" id="category" class="form-control">
                                <option value="" disabled selected>Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->Categorie }}">{{ $category->Categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="City">Select City:</label>
                            <select name="city" id="category" class="form-control">
                                <option value="" disabled selected>Select a City</option>
                                @foreach($cities as $category)
                                    <option value="{{ $category->city }}">{{ $category->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area">Select location:</label>
                            <select name="area" id="category" class="form-control">
                                <option value="" disabled selected>Select a Location</option>
                                @foreach($states as $category)
                                    <option value="{{ $category->state }}">{{ $category->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-block">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
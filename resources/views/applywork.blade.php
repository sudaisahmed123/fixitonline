@extends('layouts.headerFooter')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

<style>
    .main {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f9;
    }
    .form-container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }
    .form-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }
    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .form-group input:focus {
        border-color: #007BFF;
        outline: none;
    }
    .form-group button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }
    .form-group button:hover {
        background-color: #0056b3;
    }
</style>

<div class="main">
    <div class="form-container">
        <h2>Registration Form</h2>
        <form id="registerForm" action="/workerregister" method="post" onsubmit="return getLocationAndSubmit(event)">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="number">Phone Number:</label>
                <input type="tel" id="phone" name="number" required>
                <!-- Hidden field for storing the full phone number -->
                <input type="hidden" id="fullPhone" name="full_phone">
            </div>
            <div class="form-group">
                <label for="cnic">Cnic:</label>
                <input type="tel" id="cnic" name="cnic" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city">
            </div>

            <!-- Hidden fields for latitude and longitude -->
            <input type="hidden" id="latitude" name="latitude">
            <input type="hidden" id="longitude" name="longitude">

            <div class="form-group">
                <button type="submit" style="background-color:black">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    // Initialize Intl Tel Input for the phone field
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "pk",
        onlyCountries: ["pk"],
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        dropdownContainer: null
    });

    // Function to get location and submit form
    function getLocationAndSubmit(event) {
        event.preventDefault(); // Prevent form from submitting immediately

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // Get user location
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                // Set the values in the hidden inputs
                document.getElementById('latitude').value = latitude;
                document.getElementById('longitude').value = longitude;

                // Get the full phone number with the country code
                const fullPhoneNumber = iti.getNumber(); // This gives you the full number with country code
                document.getElementById('fullPhone').value = fullPhoneNumber;

                // Now submit the form after setting the location
                document.getElementById('registerForm').submit();

            }, function() {
                alert("Unable to retrieve your location.");
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }
</script>

@endsection

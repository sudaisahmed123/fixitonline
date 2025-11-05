<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fffcfc;
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 90%;
            max-width: 600px;
            background-color: #222;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input, .input-group select, .input-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding-left: 40px;
            box-sizing: border-box;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: black;
        }

        .input-group .alert {
            color: #f00;
            font-size: 14px;
            margin-top: 5px;
        }

        button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #d6960a;
            color: black;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .input-group.upload {
            background-color: #444;
            padding: 15px;
            border-radius: 5px;
        }

        .input-group.upload input[type="file"] {
            height: 0;
            width: 0;
            opacity: 0;
            position: absolute;
        }

        .input-group.upload label {
            display: block;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .file-info {
            margin-top: 10px;
            font-size: 14px;
            color: #ddd;
        }

        @media (max-width: 768px) {
            form {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <form action="/cba" id="multiStepForm" method="post" enctype="multipart/form-data">
        @csrf
        <center><h1>Application Workers</h1></center>
        
        <!-- Step 1 -->
        <div class="step active">
        <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="hidden" name="workerId" placeholder="Full Name" value="{{$worker->id}}" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="Name" placeholder="Full Name" value="{{$worker->name}}" required>
            </div>
            <!-- <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" placeholder="Last Name" required>
            </div> -->
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="PhoneNumber" value="{{$worker->number}}" placeholder="Phone Number. Use [+92xxxxxxxxxx] Format" required pattern="^(\+92)?[0-9]{10}$" title="Please enter a valid phone number. Either 11 digits or with +92 and 10 digits.">
            </div>
            <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="password" placeholder="Password" required pattern="[A-Za-z0-9]{8,}" title="Please enter a valid password (at least 8 characters long, including letters and/or numbers)">
</div>
<div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="confirmpassword" id="confirm_password" placeholder="Confirm Password" required title="Please enter the same password as above.">
</div>
<div class="input-group">
    
    <input type="hidden" name="latitude" value="{{$worker->latitude}}"  required >
</div>
<div class="input-group">
   
    <input type="hidden" name="longitude"  value="{{$worker->longitude}}" required>
</div>
            <!-- <div class="input-group">
                <i class="fas fa-road"></i>
                <input type="text" name="street" placeholder="Street Address" required>
            </div> -->
            <div class="input-group">
                <i class="fas fa-city"></i>
                <input type="text" name="city" placeholder="City" value="{{$worker->city}}" required>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="step">
            <div class="input-group">
                <i class="fas fa-globe"></i>
                <input type="text" name="state" placeholder="Enter your full address" required>
            </div>
            <!-- <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="code" placeholder="Zip Code" required pattern="[0-9]{5}" title="Please enter a valid 5-digit zip code">
            </div> -->
            <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" id="dob" name="Date" placeholder="Date of Birth" required>
            </div>
            <div class="input-group">
                <i class="fas fa-calendar-day"></i>
                <input type="text" id="age" name="age" placeholder="Age" readonly>
            </div>
            <div class="input-group">
                <i class="fas fa-venus-mars"></i>
                <select name="Gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="step">
            <div class="input-group">
                <i class="fas fa-list"></i>
                <select name="Category" required>
                    <option value="">Select Category</option>
                    
                       @foreach($cat as $ca)
                            <option value="{{$ca->Categorie}}">{{$ca->Categorie}}</option>
                  
                            @endforeach
                       
                 
                      
                
                </select>
            </div>
            <div class="input-group">
                <i class="fas fa-info-circle"></i>
                <textarea name="Bio" placeholder="Your Profile Description"></textarea>
            </div>
            <div class="input-group upload">
                <label for="profilePic">Upload Profile Picture</label>
                <input type="file" id="profilePic" name="profilePic" accept="image/*" required>
                <div id="profilePicInfo" class="file-info">No file selected</div>
            </div>
            <div class="input-group upload">
                <label for="cnicUpload">Upload CNIC</label>
                <input type="file" id="cnicUpload" name="FileUpload" accept=".pdf" required>
                <div id="cnicUploadInfo" class="file-info">No file selected</div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="buttons">
            <button type="button" id="prevBtn" onclick="prevStep()">Previous</button>
            <button type="button" id="nextBtn" onclick="nextStep()">Next</button>
            <button type="submit" id="submitBtn" style="display: none;">Submit</button>
        </div>
    </form>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');

        function validateStep(step) {
            const inputs = steps[step].querySelectorAll('input, select, textarea');
            let isValid = true;

            // Clear previous error messages
            steps[step].querySelectorAll('.alert').forEach(errorElement => errorElement.remove());

            inputs.forEach(input => {
                // Check required fields
                if (input.hasAttribute('required') && input.value.trim() === '') {
                    isValid = false;
                    const errorMessage = input.getAttribute('title') || 'Please fill out this field.';
                    const errorElement = document.createElement('div');
                    errorElement.classList.add('alert');
                    errorElement.textContent = errorMessage;
                    input.parentNode.appendChild(errorElement);
                }

                // Check pattern if defined
                if (input.hasAttribute('pattern') && input.value.trim() !== '') {
                    const pattern = new RegExp(input.getAttribute('pattern'));
                    if (!pattern.test(input.value)) {
                        isValid = false;
                        const errorMessage = input.getAttribute('title') || 'Invalid input format.';
                        const errorElement = document.createElement('div');
                        errorElement.classList.add('alert');
                        errorElement.textContent = errorMessage;
                        input.parentNode.appendChild(errorElement);
                    }
                }

                // Additional check for phone number
                if (input.name === 'PhoneNumber' && input.value.trim() !== '') {
                    const phoneNumber = input.value.trim();
                    if (!/^(\+92)?[0-9]{10}$/.test(phoneNumber)) {
                        isValid = false;
                        const errorMessage = 'Phone number must be either 11 digits or with +92 and 10 digits.';
                        const errorElement = document.createElement('div');
                        errorElement.classList.add('alert');
                        errorElement.textContent = errorMessage;
                        input.parentNode.appendChild(errorElement);
                    }
                }
            });
            const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    if (password !== confirmPassword) {
        isValid = false;
        const errorElement = document.createElement('div');
        errorElement.classList.add('alert');
        errorElement.textContent = 'Passwords do not match.';
        document.getElementById('confirm_password').parentNode.appendChild(errorElement);
    }

            return isValid;
        }

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.toggle('active', index === step);
            });
            prevBtn.style.display = step === 0 ? 'none' : 'inline';
            nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline';
            submitBtn.style.display = step === steps.length - 1 ? 'inline' : 'none';
        }

        function nextStep() {
            if (validateStep(currentStep)) {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Initialize form
        showStep(currentStep);

        // JavaScript to handle file name display
        document.getElementById('profilePic').addEventListener('change', function() {
            const fileName = this.files.length > 0 ? this.files[0].name : 'No file selected';
            document.getElementById('profilePicInfo').textContent = fileName;
        });

        document.getElementById('cnicUpload').addEventListener('change', function() {
            const fileName = this.files.length > 0 ? this.files[0].name : 'No file selected';
            document.getElementById('cnicUploadInfo').textContent = fileName;
        });

        function calculateAge(birthDate) {
            const today = new Date();
            const birthDateObj = new Date(birthDate);
            let age = today.getFullYear() - birthDateObj.getFullYear();
            const monthDiff = today.getMonth() - birthDateObj.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDateObj.getDate())) {
                age--;
            }
            return age;
        }

        document.getElementById('dob').addEventListener('change', function() {
            const dobValue = this.value;
            document.getElementById('age').value = dobValue ? calculateAge(dobValue) : '';
        });

    </script>
</body>
</html>

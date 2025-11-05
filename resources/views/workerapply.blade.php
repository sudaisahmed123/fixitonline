<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/icon/favicon.png?v=1" type="image/png">
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
            color: black; /* Black color for icons */
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
    <form id="multiStepForm" action="" method="POST">
        <!-- Step 1 -->
        <div class="step active">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="firstName" placeholder="First Name" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lastName" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="tel" name="phoneNumber" placeholder="Phone Number" required pattern="[0-9]{10}" title="Please enter a valid phone number (10 digits only) Example 03300000000">
            </div>
            <div class="input-group">
                <i class="fas fa-road"></i>
                <input type="text" name="street" placeholder="Street Address" required>
            </div>
            <div class="input-group">
                <i class="fas fa-city"></i>
                <input type="text" name="city" placeholder="City" required>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="step">
            <div class="input-group">
                <i class="fas fa-globe"></i>
                <input type="text" name="state" placeholder="State" required>
            </div>
            <div class="input-group">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="zipCode" placeholder="Zip Code" required pattern="[0-9]{5}" title="Please enter a valid 5-digit zip code">
            </div>
            <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" id="dob" name="dob" placeholder="Date of Birth" required>
            </div>
            <div class="input-group">
                <i class="fas fa-calendar-day"></i>
                <input type="text" id="age" name="age" placeholder="Age" readonly>
            </div>
            <div class="input-group">
                <i class="fas fa-venus-mars"></i>
                <select name="gender" required>
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
                <select name="category" required>
                    <option value="">Select Category</option>
                    <option value="Category1">Category 1</option>
                    <option value="Category2">Category 2</option>
                </select>
            </div>

            <div class="input-group upload">
                <label for="profilePic">Upload Profile Picture</label>
                <input type="file" id="profilePic" name="profilePic" accept="image/*" required>
                <div id="profilePicInfo" class="file-info">No file selected</div>
            </div>
            <div class="input-group upload">
                <label for="cnicUpload">Upload CNIC</label>
                <input type="file" id="cnicUpload" name="cnicUpload" accept=".pdf" required>
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
            const errorElements = steps[step].querySelectorAll('.alert');
            errorElements.forEach(errorElement => errorElement.remove());

            inputs.forEach(input => {
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
                if (input.name === 'phoneNumber' && input.value.trim() !== '') {
                    const phoneNumber = input.value.trim();
                    if (phoneNumber.length !== 10) { // Adjusted length to 10
                        isValid = false;
                        const errorMessage = 'Phone number must be exactly 10 digits.';
                        const errorElement = document.createElement('div');
                        errorElement.classList.add('alert');
                        errorElement.textContent = errorMessage;
                        input.parentNode.appendChild(errorElement);
                    }
                }
            });

            return isValid;
        }

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.remove('active');
                if (index === step) {
                    element.classList.add('active');
                }
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
            if (dobValue) {
                const age = calculateAge(dobValue);
                document.getElementById('age').value = age;
            } else {
                document.getElementById('age').value = '';
            }
        });
    </script>
</body>
</html>

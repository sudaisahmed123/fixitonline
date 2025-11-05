<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Worker Profile</title>
    <link rel="shortcut icon" href="workerassets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('workerassets/images/fav-icon.png') }}">
    <link rel="stylesheet" href="{{asset('workerassets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('workerassets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('workerassets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('workerassets/css/circle.css') }}">
    <link rel="stylesheet" href="{{ asset('workerassets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('workerassets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('workerassets/css/style.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



    <script>
        function getLocationAndSubmit() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Get user location
                    let latitude = position.coords.latitude;
                    let longitude = position.coords.longitude;

                    // Set the values in the hidden inputs
                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;

                    // Submit the form
                    
                    phoneInput.value = iti.getNumber();  // Ensure the full international number is submitted
   document.getElementById('appointment-form').submit();
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }
    </script>
    
</head>

<style>
    /* Modal styles */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 999; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    .modal-content {
      background-color: #fefefe;
      margin: 10% auto; /* 10% from the top and centered horizontally */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 600px; /* Set a maximum width */
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}




* {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: "Inter", Arial, Helvetica, sans-serif;
    }
    .formbold-mb-5 {
      margin-bottom: 20px;
    }
    .formbold-pt-3 {
      padding-top: 12px;
    }
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 550px;
      width: 100%;
      background: white;
    }
    .formbold-form-label {
      display: block;
      font-weight: 500;
      font-size: 16px;
      color: #07074d;
      margin-bottom: 12px;
    }
    .formbold-form-label-2 {
      font-weight: 600;
      font-size: 20px;
      margin-bottom: 20px;
    }

    .formbold-form-input {
      width: 100%;
      padding: 12px 24px;
      border-radius: 6px;
      border: 1px solid #e0e0e0;
      background: white;
      font-weight: 500;
      font-size: 16px;
      color: #6b7280;
      outline: none;
      resize: none;
    }
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-btn {
      text-align: center;
      font-size: 16px;
      border-radius: 6px;
      padding: 14px 32px;
      border: none;
      font-weight: 600;
      background-color: #6a64f1;
      color: white;
      width: 100%;
      cursor: pointer;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold--mx-3 {
      margin-left: -12px;
      margin-right: -12px;
    }
    .formbold-px-3 {
      padding-left: 12px;
      padding-right: 12px;
    }
    .flex {
      display: flex;
    }
    .flex-wrap {
      flex-wrap: wrap;
    }
    .w-full {
      width: 100%;
    }
    @media (min-width: 540px) {
      .sm\:w-half {
        width: 50%;
      }
    }
   

</style>

<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="formbold-form-wrapper">
              <form id="appointment-form" action="/appointment" method="POST">
                @csrf
              
                  <div class="formbold-mb-5">
                    <input
                      type="hidden"
                      name="worker"
                      id="name"
                      value="{{ $pro->id }}"
                      class="formbold-form-input" 
                    />
                  </div>
                <div class="formbold-mb-5">
                  <label for="name" class="formbold-form-label"> Full Name </label>
                  <input
                    type="text"
                    name="fullName"
                    id="name"
                    placeholder="Full Name"
                    class="formbold-form-input" required
                  />
                </div>
                <div class="formbold-mb-5">
                  <label for="phone" class="formbold-form-label"> Phone Number </label>
                  <input
    type="tel"
    name="phoneNumber"
    id="phone"
    placeholder="Enter your phone number"
    class="formbold-form-input"
    required
  />
                </div>
                <div class="formbold-mb-5">
                  <label for="email" class="formbold-form-label"> Email Address </label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    class="formbold-form-input" required
                  />
                </div>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5 w-full">
                      <label for="date" class="formbold-form-label"> Date </label>
                      <input
                        type="date"
                        name="date"
                        id="date"
                        class="formbold-form-input" required
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <label for="time" class="formbold-form-label"> Time </label>
                      <input
                        type="time"
                        name="time"
                        id="time"
                        class="formbold-form-input" required
                      />
                    </div>
                  </div>
                </div>

                <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">
            Address Details
        </label>
        <div class="flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                    <input
                        type="text"
                        name="city"
                        id="city"
                        placeholder="Enter city"
                        class="formbold-form-input" required
                    />
                </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                    <textarea name="state" 
                              id="state" 
                              cols="30" 
                              rows="1" 
                              placeholder="Enter your full address" 
                              style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px;" required></textarea>
                </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
                <div class="formbold-mb-5">
                    <label for="notes">Additional Notes:</label>
                    <textarea style="width:100%" name="area" id="notes" class="form-control" rows="4" placeholder="Any specific instructions or issues?" required></textarea>
                </div>
            </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                      <input type="hidden" name="latitude" id="latitude">
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                      <input type="hidden" name="longitude" id="longitude">
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <button type="button" onclick="getLocationAndSubmit()" class="formbold-btn">Book Appointment</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const workerId = {{ $pro->id }}; // Worker ID from modal's hidden input field
        fetch(`/worker/${workerId}/appointments`)
            .then(response => response.json())
            .then(bookedDates => {
                flatpickr("#date", {
                    dateFormat: "Y-m-d",
                    disable: bookedDates // Disable all booked dates
                });
            });
    });
</script> -->


    <div  class="container profile-container">
        <div class="row">

            <!--#################### Left Side Profile Card Starts Here ####################-->

            <div id="menu-jk" class="col-lg-4" >
                <div class="profile-cover" style="z-index:;" >
                    <div class="top-links no-margin">
                        <!-- <a class="share dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-share-alt"></i>
                              </a> -->
                        <!-- <div class="dropdown-menu shar-icons" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item fb" href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                            <a class="dropdown-item tw" href="#"><i class="fab fa-twitter-square"></i> Twitter </a>
                            <a class="dropdown-item pin" href="#"><i class="fab fa-pinterest-square"></i> Pintrest</a>
                            <a class="dropdown-item ins" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        </div> -->

                        <!-- <a class="cv" href=""><i class="fas fa-cloud-download-alt"></i></a> -->
                    </div>
                    <div class="image-details">
                        <img src="{{ asset('userimages/'.$pro->profilePic) }}" alt="">
                        <h5>{{ $pro->Name }} {{$pro->lastname}}</h5>
                        <h6>{{ $pro->Category }}</h6>
                        <p>{{ $pro->Bio }}</p>
                    </div>
                    <div class="counts">
                        <div class="count-box">
                            <div class="boxs">
                                <!-- <i data-feather="calendar"></i> <br>
                                <b>8</b>
                                <p>Years</p> -->
                            </div>
                            <div class="boxs">
                                <!-- <i data-feather="dollar-sign"></i> <br>
                                <b>35</b>
                                <p> Per - Hour</p> -->
                            </div>
                            <div class="boxs">
                                <!-- <i data-feather="box"></i> <br>
                                <b> 76</b>
                                <p> Projects</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="bottom-links row no-margin">
                        <ul style="display:flex; justify-content:center; align-items:center">

                            <li  ><a  href="#contactus"><i style="background-color:black" class="fas fa-user-plus"></i></a></li>


                        </ul>
                    </div>
                </div>
            </div>

            <!--#################### Right Side Starts Here ####################-->

            <div class="col-lg-8">
                <div class="profile-detail">

                    <!--#################### About Me Starts Here ####################-->

                    <div class="row right-title">
                        <div class="col-sm-1 col-2 icob">
                            <i style="background-color:#fd7e14" class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="col-sm-11 col-10 titb">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="about row">


                        <div class="col-md-4 bimg">
                            <img src="{{ asset('userimages/'.$pro->profilePic) }}" alt="">
                        </div>
                        <div class="col-md-8 about-detail">


                            <div class="detal-jumbo">
                                <h3>Hellow I'm {{$pro->Category}}</h3>
                                <p>{{$pro->Bio}}</p>
                            </div>
                            <div class="links">
                                <div class="row ">
                                    <div class=" col-md-12">
                                        <ul class="btn-link">
                                            <li class="hire" style="background-color:black">
                                                <a  href="#" id="hire-me-button"><i class="fas fa-paper-plane"></i> Hire Me</a>
                                                <!-- {{-- <button id="hire-me-button"><i class="fas fa-paper-plane">Hire Me</button> --}} -->
                                            </li>
                                            <li class="download">
                                                <a href="{{ asset('useruploads/'.$pro->FileUpload) }}" download="{{$pro->FileUpload}}"><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="personali">
                                <ul>
                                    <li><i data-feather="user"></i> {{ $pro->Name }} {{$pro->lastname}}</li>
                                    <li><i data-feather="map-pin"></i> {{ $pro->city }} {{$pro->state}}</li>
                                    <li><i data-feather="user"></i>{{ $pro->age }}</li>
                                    <li><i data-feather="calendar"></i>{{$pro->Date}}</li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gender-trans" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1.707L3.5 2.793l.646-.647a.5.5 0 1 1 .708.708l-.647.646.822.822A4 4 0 0 1 8 3c1.18 0 2.239.51 2.971 1.322L14.293 1H11.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 0 1-3.05-5.814l-.95-.949-.646.647a.5.5 0 1 1-.708-.708l.647-.646L1 1.707V3.5a.5.5 0 0 1-1 0zm5.49 4.856a3 3 0 1 0 5.02 3.288 3 3 0 0 0-5.02-3.288"/>
</svg>{{$pro->Gender}}</li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
  <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
  <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
</svg>{{$pro->Category}}</li>
                                    <li><i data-feather="phone-call"></i> {{ $pro->PhoneNumber }} </li>
                                    <li style="color:green; font-weight:700"><i data-feather="file-text"></i> {{ $pro->role }}</li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    <!--#################### Skills Starts Here ####################-->




                    <!--#################### Services Starts Here ####################-->



                    <!--#################### Hobbies Starts Here ####################-->




                    <!--#################### Testimonial Starts Here ####################-->


                    <div class="title-2 row no-margin">
    <h2>My Testimonials</h2>
</div>

<div id="owl-demo" class="test-row row owl-carousel">
    @if($pro->reviews->isNotEmpty())
        @foreach($pro->reviews as $review)
            <div class="item"> 
                <div class="test-key">
                    <img src="/workerassets/images/testimonial/user.png" alt="Testimonial Image">

                    <h4>{{ $review->ReviewName }}</h4> 
                    
                    <div class="icons">
                        @for ($i = 0; $i < $review->Rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        @for ($i = $review->Rating; $i < 5; $i++)
                            <i class="far fa-star"></i> 
                        @endfor
                    </div>

                    <p><i>{{$review->ReviewComment}}</i></p>
                </div>
            </div>
        @endforeach
    @else
        <p>No reviews available</p>
    @endif
</div>



                    <!--#################### Portfolio Starts Here ####################-->





                    <!--#################### Hire Me Starts Here ####################-->


                    <div class="row right-title">
                        <div class="col-sm-1 col-2 icob">
                            <i style="background-color:#fd7e14" class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="col-sm-11 col-10 titb">
                            <h2>Hire Me</h2>
                        </div>
                    </div>
                    <div class="hire-me-row no-margin row">
                        <div class="col-md-6">
                            <div class="row singe-col">
                                <div class="col-2 icons">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="col-10 pl-0 drtg">
                                    <b>Address</b>
                                    <p>{{ $pro->city }} , {{ $pro->state }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row singe-col">
                                <div class="col-2 icons">
                                    <i data-feather="phone"></i>
                                </div>
                                <div class="col-10 pl-0 drtg">
                                    <b>Phone</b>
                                    <p>{{ $pro->PhoneNumber }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row singe-col">
                                <div class="col-2 icons">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="col-10 pl-0 drtg">
                                    <b>Email </b>
                                    <p>{{  $pro->Email}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row singe-col">
                                <div class="col-2 icons">
                                    <i data-feather="clock"></i>
                                </div>
                                <div class="col-10 pl-0 drtg">
                                    <b>Working Hours</b>
                                    <p>Daily 09:00AM TO 06:00PM</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--#################### Educational Details Starts Here ####################-->

                    <!-- <div class="title-2 row no-margin">
                        <h2>Educational Details</h2>
                    </div>

                    <div class="resume-cover">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="cbp_tmtimeline">
                                    <li>
                                        <time class="cbp_tmtime"><span class="hidden">2012 - 2014</span></time>


                                        <div class="cbp_tmicon"><i class="fas fa-graduation-cap"></i></div>

                                        <div class="cbp_tmlabel empty"> <span>
                                                <h4>Computer Engineering</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptatibus, maiores suscipit sequi veritatis saepe aspernatur.</p>
                                            </span> </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime"><span>2008 - 2013</span></time>

                                        <div class="cbp_tmicon bg-info"><i class="fas fa-user-graduate"></i></div>

                                        <div class="cbp_tmlabel">
                                            <h4>UG Information Technology</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptatibus, maiores suscipit sequi veritatis saepe aspernatur.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>
                                                2015 -2017
                                            </span> </time>
                                        <div class="cbp_tmicon bg-green"> <i class="fas fa-school"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h4>High School</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptatibus, maiores suscipit sequi veritatis saepe aspernatur.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>2013 - 2015</span></time>
                                        <div class="cbp_tmicon bg-blush"><i class="fas fa-chalkboard"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h4>Primary School</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptatibus, maiores suscipit sequi veritatis saepe aspernatur.</p>
                                        </div>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div> -->

                    <!--#################### Contact Me Starts Here ####################-->
                    <div class="title-2 contact-titl row no-margin">
                        <h2>Get in Touch</h2>
                        <p>If you have any questions about my consulting services, please contact me</p>
                    </div>

                    <div class="contact-form" id="contactus">
                        <form action="mail.php" method="post">
                            <div class="row-form row">
                                <div class="col-md-6">
                                    <label>Full Name</label>
                                    <input required placeholder="Enter Full Name" name="name" type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>E-Mail Address</label>
                                    <input required placeholder="Enter Full Name" name="email" type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>Subject</label>
                                    <input placeholder="Enter Full Name" name="subject" type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label>Message</label>
                                    <textarea placeholder="Enter Your Message" name="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 mt-4 right">
                                    <input name="submit" value="1" type="hidden">
                                    <button style="background-color:black" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    // Get the modal element
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById('hire-me-button');

    // When the user clicks on the button, open the modal
   // When the user clicks on the button, open the modal
btn.addEventListener('click', function() {
    modal.style.display = 'block';

    // Assuming the worker ID is available as a hidden input field
    var workerId = {{ $pro->id }};  // Replace with dynamic worker ID
    
    // Fetch booked appointments for this worker when modal opens
    fetch(`/worker/${workerId}/appointments`)
        .then(response => response.json())
        .then(bookedDates => {
            // Initialize the Flatpickr and disable the booked dates
            flatpickr("#date", {
                dateFormat: "Y-m-d",
                disable: bookedDates,  // Disable the dates that are already booked
                minDate: "today"       // Disable past dates
            });
        })
        .catch(error => {
            console.error('Error fetching appointments:', error);
        });
});

    // When the user clicks on <span> (x), close the modal
    var span = document.getElementsByClassName('close')[0];
    span.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // When the user clicks anywhere outside of the modal, close it
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>

<script>
const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
   initialCountry: "pk",   // Set Pakistan as the default country
   onlyCountries: ["pk"],  // Restrict to Pakistan only
   separateDialCode: true, // Display +92 separately
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   dropdownContainer: null // Disable the dropdown for country selection
});




</script>


<script src="{{asset('workerassets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('workerassets/js/popper.min.js')}}"></script>
<script src="{{asset('workerassets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('workerassets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('workerassets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{asset('workerassets/js/script.js')}}"></script>

</html>

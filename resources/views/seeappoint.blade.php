<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Fixit Online | Homepage</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Color Switcher Mockup -->
    <link href="assets/css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="assets/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="assets/js/respond.js"></script><![endif]-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="./assets/fonts/flaticon.woff">
     <link rel="stylesheet" href="./assets/fonts/fontawesome-webfont.woff2">
     <link rel="stylesheet" href="./assets/css/flaticon.css">
     <link rel="stylesheet" href="./assets/css/font-awesome.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->
    

</head>

 
<style>



</style>
<body>
<style>
        /* Inline CSS for demonstration; you can move this to public/css/invoice.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .invoice {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        header p {
            margin: 5px 0;
        }
        .worker-info, .client-info, .appointment-details {
            margin-bottom: 20px;
        }
        .worker-info h2, .client-info h2, .appointment-details h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 10px;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        thead {
            background-color: #f4f4f4;
        }
        footer {
            border-top: 2px solid #333;
            padding-top: 10px;
            text-align: center;
        }
        #searchInput {
            margin-bottom: 10px;
            padding: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .invoice {
                padding: 10px;
            }
            header h1 {
                font-size: 20px;
            }
            table, th, td {
                font-size: 14px;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 18px;
            }
            table, th, td {
                font-size: 12px;
            }
            footer {
                font-size: 14px;
            }
        }
    </style>

    <!-- <div class="page-wrapper"> -->

        <!-- Preloader -->
     <!-- <div class="preloader"></div>  -->

        <!-- Main Header / Header Style Four -->
        <header class="main-header header-style-four">

            <!-- Header Top Four -->
            <div class="header-top-four">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left clearfix">
                            <ul class="list">
                                <li><span class="fa fa-map-marker"></span>Pakistan Karachi </li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right clearfix">

                            <!-- Phone -->
                            <div style="font-size:20px;" class="phone"><span style="font-size:20px">Welcome:</span> {{ Auth::check() && Auth()->User()->name ? Auth()->User()->name : 'Guest' }} </div>
                            <!-- Social Nav -->
                            <ul class="social-nav">
                                <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/facebook.png" alt=""></span></a></li>
                                <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/google.png" alt=""></span></a></li>
                                <li><a href="#"><span ><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/twitter.jpg" alt=""></span></a></li>
                                <!-- <li><a href="#"><span class="fa fa-skype"></span></a></li> -->
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div style="width:170px; height:180px;" class="logo"><a href="/"><img style="width:100%; height:100%;" src="assets/images/fixitonline.png" alt="" title=""></a></div>
                        </div>
                        <!-- <div class="pull-left logo-box">
                            <div style="" class="logo"><a href="index.html"><img style="" src="assets/images/logo-7.png" alt="" title=""></a></div>
                        </div> -->

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span><img style="width:50px; height:50px; border-radius:30%; outline:none" src="assets/icon/mail1.png" alt=""></span></div>
                                <ul>
                                    <li><strong>Mail Us On</strong></li>
                                    <li>fixitonline@gmail.com</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span><img style="width:45px; height:45px; border-radius:30%; outline:none" src="assets/icon/phone.png" alt=""></span></div>
                                <ul>
                                    <li><strong>Mon - Sat: 9am To 6pm</strong></li>
                                    <li>Sunday Holiday</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <a style="background-color:black; color:white" href="/applywork" class="theme-btn btn-style-one" id=""><span class="txt">Apply For Work</span></a>
                            </div>

                           


                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Header Lower-->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="nav-outer clearfix">

                        <!-- Grid Box -->
                        <div class="grid-box navSidebar-button">
                            <a href="#" class="icon flaticon-menu-1"></a>
                        </div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
        <ul class="navigation clearfix">
            <li class="dropdown current"><a href="/">Home</a>
                <!-- Dropdown content -->
                <ul>
                <li><a href="/">Home</a></li>
                    <li><a href="/plumber">Plumber Services</a></li>
                    <li><a href="/electrician">Electricians Services</a></li>
                    <li><a href="/acrepair">Ac Repairing Services</a></li>
                    <li><a href="/carpainter">Car Painter Services</a></li>
                    <li><a href="/carmechanic">Car Mechanic Services</a></li>
                    <li><a href="/painter">Painter Services</a></li>

                </ul>
            </li>
            <li class=""><a href="/about">About us</a>
                <!-- Dropdown content -->
            </li>
            <li class=""><a href="/services">Services</a>
                <!-- Dropdown content -->
            </li>
             <!-- <li class=""><a href="#">Blog</a>
               
            </li>  -->
            <li><a href="/contactus">Contact us</a></li>

            @guest
            
    <li class="dropdown white">
        <a style="background-color:black; color:white;border:2px solid yellow;" href="/login">Login</a>
        <ul>
            <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/login">Login As User</a></li>
            <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/loginworker">Login As Worker</a></li>
        </ul>
    </li>
    <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/register">Register</a></li>
@else
    @if(auth()->user()->isAdmin())
        <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/dashboard">Dashboard</a></li>
    @elseif(auth()->user()->isUser())
        <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/seeappoint">See Your Appointment</a></li>
    @endif
    <li>
        <li class=""><a style="background-color:black; color:white;border:2px solid yellow;" id="logout-link" href="#" onclick="logout()">Logout</a>
    </li>
    <li>
        <li style="padding:0px 0px 0px 20px" class=""><a style="background-color:red; color:white;border:2px solid yellow;" href="{{route('emergency.appointment')}}">Emergency
            <span><img style="width:25px; height:25px; border-radius:50%;" src="assets/icon/emergency1.jpg" alt="Emergency Appointment"></span>
        </a>
    </li>
@endguest

         
        </ul>
    </div>
</nav>
<script>
    function logout() {
        // Create a form element
        var form = document.createElement('form');
        form.setAttribute('method', 'post'); // Set method to POST
        form.setAttribute('action', '/logout'); // Specify the action URL

        // Create a hidden input field for CSRF token
        var csrfField = document.createElement('input');
        csrfField.setAttribute('type', 'hidden');
        csrfField.setAttribute('name', '_token'); // Set the name attribute
        csrfField.setAttribute('value', '{{ csrf_token() }}'); // Set the value to the CSRF token

        // Append the CSRF token input field to the form
        form.appendChild(csrfField);

        // Append the form to the document body
        document.body.appendChild(form);

        // Submit the form
        form.submit();
    }
</script>

                        <!-- Main Menu End-->

                        <!-- Options Box -->
                        <div class="options-box clearfix">

                            <!-- Cart Box -->
                      
                            <!-- End Cart Box -->

                            <!-- Login Box -->
                            <!-- <div class="login-box offset-side-bar">
                                <a href="#" class="icon fa fa-cog"></a>
                            </div> -->

                            <!-- Search Box-->
                            <!-- <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Lower-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu  navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li class="dropdown active"><a href="/">Home</a>
                                        <ul>
                                        <li><a href="/">Home</a></li>
                                            <li><a href="/plumber">Plumber Services</a></li>
                                            <li><a href="/electrician">Electricians Services</a></li>
                                            <li><a href="/acrepair">Ac Repairing Services</a></li>
                                            <li><a href="/carpainter">Car Painter Services</a></li>
                                            <li><a href="/carmechanic">Car Mechanic Services</a></li>
                                            <li><a href="/painter">Painter Services</a></li>

                                        </ul>
                                    </li>
                                    <li class=""><a href="/about">About us</a>
                                         <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="price.html">Price</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="comming-soon.html">Comming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="/services">Services</a>
                                         <ul>
                                            <li><a href="services-single.html">Plumber</a></li>
                                            <li><a href="comming-soon.html">Electrician</a></li>
                                            <li><a href="comming-soon.html">Ac Reparing</a></li>
                                            <li><a href="comming-soon.html">Car Mechanic</a></li>
                                            <li><a href="comming-soon.html">Car Painter</a></li>
                                            <li><a href="comming-soon.html">Home Decorator</a></li>

                                        </ul>
                                    </li>
                                   
                               
                                    
                                   
                                    <li><a href="/contactus">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Options Box -->
                        <div class="options-box clearfix">

                            <!-- Cart Box -->
                            <div class="cart-box">
                                <div class="dropdown">
                                    <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-shopping-bag-1"></span></button>
                                    <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu">

                                        <div class="cart-product">
                                            <div class="inner">
                                                <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                                <div class="image"><img src="assets/images/resource/post-thumb-3.jpg" alt="" /></div>
                                                <h3><a href="shop-single.html">Product 01</a></h3>
                                                <div class="quantity-text">Quantity 01</div>
                                                <div class="price">$49.00</div>
                                            </div>
                                        </div>
                                        <div class="cart-product">
                                            <div class="inner">
                                                <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                                <div class="image"><img src="assets/images/resource/post-thumb-2.jpg" alt="" /></div>
                                                <h3><a href="shop-single.html">Product 02</a></h3>
                                                <div class="quantity-text">Quantity 21</div>
                                                <div class="price">$49.00</div>
                                            </div>
                                        </div>
                                        <div class="cart-total">Sub Total: <span>$99</span></div>
                                        <ul class="btns-boxed">
                                            <li><a href="shoping-cart.html">View Cart</a></li>
                                            <li><a href="checkout.html">CheckOut</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- End Cart Box -->

                            <!-- Login Box -->
                            <div class="login-box offset-side-bar">
                                <a href="#" class="icon fa fa-cog"></a>
                            </div>

                            <!-- Grid Box -->
                            <div class="grid-box navSidebar-button">
                                <a href="#" class="icon fa fa-th"></a>
                            </div>

                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!-- End Main Header -->


        <div class="invoice">
    <header>
        <h1>Appointment Invoice</h1>
        <p><strong>Appointment ID:</strong> {{ $appointments->first()->id ?? 'N/A' }}</p>
        <p><strong>Appointment Status:</strong> {{ $appointments->first()->status ?? 'N/A' }}</p>
        <p><strong>Date:</strong> <span id="invoiceDate">{{ date('F j, Y') }}</span></p>
    </header>

    <section class="client-info">
        <h2>Client Information</h2>
        @if($appointments->first())
            <p><strong>Name:</strong> {{ $appointments->first()->fullName ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $appointments->first()->email ?? 'N/A' }}</p>
        @else
            <p>Client information not available.</p>
        @endif
    </section>

    <section class="appointment-details">
        <h2>Appointment Details</h2>
        <input type="text" id="searchInput" placeholder="Search appointments...">
        @if($appointments->isEmpty())
            <p>No approved appointments found.</p>
        @else
            <table id="appointmentsTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($appointments as $appointment)
    <tr>
        <td>{{ $appointment->date }}</td>
        <td>{{ $appointment->time }}</td>
        <td>{{ $appointment->area }}</td>
        <td>{{ $appointment->worker->Category }}</td>
        <td>
            @if($appointment->status == 'processing')
                <!-- Show "Work Done" button when the status is 'processing' -->
                <form action="{{ route('appointments.complete', $appointment->id) }}" method="post">
                    @csrf
                    <button type="submit" style="background-color:#fda700; color:white; padding:5px 15px">Work Done</button>
                </form>
            @elseif($appointment->status == 'confirmed')
                <!-- Show "Worker Location" button only when status is 'confirmed' -->
                <a style="background-color:#fda700; color:white; padding:8.5px 15px" href="/location/{{$appointment->userid}}">Worker Location</a>
            @endif

            @if($appointment->status == 'complete')
                <!-- Show a message once the appointment is complete -->
                <h3>Thanks For Your Comment</h3>
            @endif
        </td>
    </tr>
@endforeach

                </tbody>
            </table>
        @endif
    </section>

    <footer>
        <h3>Thank you for choosing our service!</h3>
        <button style="background-color:black; color:white; padding:5px 15px" id="printButton">Print Invoice</button>
    </footer>
</div>

         <!-- Main Footer -->
         <footer class="main-footer style-four">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">

                            <!-- Big Column -->
                            <div class="big-column col-lg-6 col-md-12 col-sm-12">
                                <div class="row clearfix">

                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget logo-widget">
                                            <div class="logo" style="width:150px; height:150px; background-color:white; border-radius:20px">
                                                <a href="/"><img style="width:100%; height:100%" src="assets/images/fixitonline.png" alt="" /></a>
                                            </div>
                                            <div class="text">
                                                <p>Fixit Online is your one-call solution for a wide range of home maintenance and repair needs. We are fully insured professional team.</p>
                                                <p>We arrive on time in uniform and a marked van with the tols to complete the job right.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget news-widget">
                                            <div class="footer-title">
                                                <h4>Latest News & Artical</h4>
                                            </div>

                                            <!--News Widget Block-->
                                            <div class="news-widget-block">
                                                <div class="widget-inner">
                                                    <div class="image">
                                                        <img src="assets/images/resource/news-image-1.jpg" alt="" />
                                                    </div>
                                                    <div class="post-date">August 1, 2018</div>
                                                    <h3><a href="blog-detail.html">Creating drama and feeling with...</a></h3>
                                                </div>
                                            </div>

                                            <!--News Widget Block-->
                                            <div class="news-widget-block">
                                                <div class="widget-inner">
                                                    <div class="image">
                                                        <img src="assets/images/resource/news-image-2.jpg" alt="" />
                                                    </div>
                                                    <div class="post-date">August 1, 2018</div>
                                                    <h3><a href="blog-detail.html">Wondering if interior is dying...</a></h3>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Big Column -->
                            <div class="big-column col-lg-6 col-md-12 col-sm-12">
                                <div class="row clearfix">

                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <div class="footer-title">
                                                <h4>Important Links</h4>
                                            </div>
                                            <ul class="list-link">
                                                <li><a href="">About Us</a></li>
                                                <li><a href="">Our Projects</a></li>
                                                <li><a href="">From Blog</a></li>
                                                <li><a href="">Our Mission</a></li>
                                                <li><a href="">Contact Us</a></li>
                                                <li><a href="">Get a Quot</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget newsletter-widget">
                                            <div class="footer-title">
                                                <h4>Subscribe to Newsletter</h4>
                                            </div>
                                            <div class="text">Subscribe to our newsletter to receive exclusive information</div>
                                            <div class="newsletter-form style-two">
                                                <form method="post" action="contact.html">
                                                    <div class="form-group">
                                                        <input type="email" name="email" value="" placeholder="Email" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="theme-btn submit-btn"><span class="txt">Submit Now</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom-three">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <div class="copyright">2023 © All Rights Reserved by <a href="#">Fixit Online</a></div>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <ul class="social-nav">
                                <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/facebook.png" alt=""></span></a></li>
                                <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/google.png" alt=""></span></a></li>
                                <li><a href="#"><span ><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/twitter.jpg" alt=""></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Main Footer -->

            <!-- Sidebar Cart Item -->
            <div class="xs-sidebar-group cart-group login-group">
                <div class="xs-overlay xs-bg-black"></div>
                <div class="xs-sidebar-widget">
                    <div class="sidebar-widget-container">
                        <div class="widget-heading">
                            <a href="#" class="close-side-widget">
                        X
                    </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <h3>Login Here</h3>
                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="text" name="Name" value="" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" value="" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="Email" value="" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="PhoneNumber" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Password" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Date" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Age" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Age" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">

                 <span  style="color:white">Gender: </span>          <label style="color:white" class="one" for="">Male:</label>
                     <input type="radio" name="gender" class="stree" id="street" value="Male" required>
                     <label style="color:white"  class="two" for="">Female:</label>
                        <input type="radio" name="gender" class="stree" id="street" value="Female" required >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Occupation" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                       <textarea name="Bio" col="30" row="30" id="" placeholder="About You"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Age" value="" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-two"><span class="txt">Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END sidebar widget item -->

            <!-- Sidebar Cart Item -->
            <div class="xs-sidebar-group info-group">
                <div class="xs-overlay xs-bg-black"></div>
                <div class="xs-sidebar-widget">
                    <div class="sidebar-widget-container">
                        <div class="widget-heading">
                            <a href="#" class="close-side-widget">
                        X
                    </a>
                        </div>
                        <div class="sidebar-textwidget">

                            <!-- Sidebar Info Content -->
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo">
                                        <a href="/"><img src="assets/images/fixitonline.png" alt="" style="width:150px; height:180px;" /></a>
                                    </div>
                                    <div class="content-box">
                                        <h2>About Us</h2>
                                        <p class="text">Core values are the fundamental beliefs of a person or organization. The core values are the ples that dictate behavior and action suas labore saperet has there any quote for write lorem percit latineu.</p>
                                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                                    </div>
                                    <div class="contact-info">
                                        <h2>Contact Info</h2>
                                        <ul class="list-style-one">
                                            <li><span class="icon fa fa-location-arrow"></span>Karachi</li>
                                            <li><span class="icon fa fa-phone"></span>+923022587244</li>
                                            <li><span class="icon fa fa-envelope"></span>fixitonline@gmail.com</li>
                                            <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                        </ul>
                                    </div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                    <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/facebook.png" alt=""></span></a></li>
                                <li><a href="#"><span><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/google.png" alt=""></span></a></li>
                                <li><a href="#"><span ><img style="width:30px; height:30px; border-radius:50%; outline:none" src="assets/icon/twitter.jpg" alt=""></span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END sidebar widget item -->

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

        <!-- Color Palate / Color Switcher -->
        <div class="color-palate">
            <div class="color-trigger">
                <i class="fa fa-gear"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="assets/css/color-themes/default-theme.css"></span>
                    <span class="palate green-color" data-theme-file="assets/css/color-themes/green-theme.css"></span>
                    <span class="palate olive-color" data-theme-file="assets/css/color-themes/olive-theme.css"></span>
                    <span class="palate orange-color" data-theme-file="assets/css/color-themes/orange-theme.css"></span>
                    <span class="palate purple-color" data-theme-file="assets/css/color-themes/purple-theme.css"></span>
                    <span class="palate teal-color" data-theme-file="assets/css/color-themes/teal-theme.css"></span>
                    <span class="palate brown-color" data-theme-file="assets/css/color-themes/brown-theme.css"></span>
                    <span class="palate redd-color" data-theme-file="assets/css/color-themes/redd-color.css"></span>
                </div>
            </div>

            <ul class="box-version option-box">
                <li class="box">Boxed</li>
                <li>Full width</li>
            </ul>
            <ul class="rtl-version option-box">
                <li class="rtl">RTL Version</li>
                <li>LTR Version</li>
            </ul>

            <a href="#" class="purchase-btn">Purchase now $17</a>

            <div class="palate-foo">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
            </div>

        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/nav-tool.js"></script>
        <script src="assets/js/mixitup.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/color-settings.js"></script>

        <!-- <script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/chat.js'></script> -->
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

        <script>
            var botmanWidget = {
                aboutText:'Chat with us',
                introMessage:"Hello! How can we assist you today?",
                bubbleBackground: "#fda700",
                mainColor:'#fda700',
                placeholderText: 'Send a message...',
                title:'Fixit Online: Chat with us',
                mainBackground:'#fda700',
                widgetBackground: '#fda700',
                bubbleAvatarUrl:  'assets/images/chatbot.png',

              
};
botmanWidget.on('widget:loaded', function() {
        // Wait until the widget is fully loaded
        var widgetHeader = document.querySelector('.botman-chat-widget .bm-widget-header');
        if (widgetHeader) {
            var headerText = widgetHeader.querySelector('h1');
            if (headerText) {
                headerText.textContent = 'Your Custom Header Text';
            }
        }
    });
        </script>
        <script>
            // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
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



// form js
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var inputs = document.querySelectorAll('input, select, textarea');
    var valid = true;

    inputs.forEach(function(input) {
        var alert = input.parentElement.querySelector('.alert');
        alert.innerHTML = '';

        if (!input.checkValidity()) {
            valid = false;
            alert.innerHTML = 'Invalid input';
        }
    });

    if (!valid) {
        event.preventDefault(); // Prevent form submission
    }
});


        </script>
        

    </body>

    </html>
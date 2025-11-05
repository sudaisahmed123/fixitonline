<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Fixit Online | Homepage</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

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

</head>
<style>
    /* CSS for modal */
/* CSS for modal */
/* CSS for modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 10px; /* Set top to 0 to start from the top */
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #ffffff;

    margin: 0 auto; /* Center horizontally */
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    max-height: 80%;
    overflow-y: auto;
    top: 0; /* Ensure modal content starts from the top */
    bottom: auto; /* Reset bottom position */
    transform: translateY(0); /* Reset transform */
}

.close {
    color: #000000;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: rgb(0, 0, 0);
    text-decoration: none;
    cursor: pointer;
}
input{
    border: 2px solid rgb(255, 255, 255);
    width: 100%;
    height: 30px;
}
label{
    color: white;

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
}

.input-group i {
    position: absolute;
    left: 10px;
    top: 20%;
    transform: translateY(-50%);
}

.input-group .alert {
    color: #f00;
    font-size: 14px;
    margin-top: 5px;
}

button {
    background-color: #000000;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #d6960a;
    color: black
}



</style>

<body>

    <!-- <div class="page-wrapper"> -->

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Four -->
        <header class="main-header header-style-four">

            <!-- Header Top Four -->
            <div class="header-top-four">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left clearfix">
                            <ul class="list">
                                <li><span class="fa fa-map-marker"></span>Old Buffalo Street Northwest #205, New York</li>
                            </ul>
                        </div>

                        <!--Top Right-->
                        <div class="top-right clearfix">

                            <!-- Phone -->
                            <div class="phone"><span>Need Help?:</span> Call: +321 123 45 978</div>
                            <!-- Social Nav -->
                            <ul class="social-nav">
                                <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
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
                            <div class="logo"><a href="index.html"><img src="assets/images/logo-7.png" alt="" title=""></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-message-1"></span></div>
                                <ul>
                                    <li><strong>Mail Us On</strong></li>
                                    <li>support@industry.com</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                                <ul>
                                    <li><strong>Mon - Sat: 9am To 6pm</strong></li>
                                    <li>Sunday Holiday</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <a style="background-color:black; color:white" href="#mymodal" class="theme-btn btn-style-one" id="openModalBtn"><span class="txt">Apply For Work</span></a>
                            </div>

                            <!-- Modal -->
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <center><h3>Only For Workers</h3></center>
                                    <span class="close">&times;</span>
                                    <!-- Your application form goes here -->
                                    <form action="/cba" method="post" id="registrationForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="Name" placeholder="Name" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="lastname" placeholder="Last Name" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-phone"></i>
                                            <input type="tel" name="PhoneNumber" placeholder="Phone Number" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="Email" placeholder="Email" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" name="Password" placeholder="Password" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-lock"></i>
                                            <input type="password" name="confirm" placeholder="Confirm Password" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-road"></i>
                                            <input type="text" name="street" placeholder="Enter Street" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-city"></i>
                                            <input type="text" name="city" placeholder="Enter City" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-globe"></i>
                                            <input type="text" name="state" placeholder="Enter State" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <input type="number" name="code" placeholder="Zip Code" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-calendar-alt"></i>
                                            <input type="date" name="Date" placeholder="Date of Birth" required>
                                            <div class="alert"></div>
                                        </div>

                                        <div class="input-group">
                                            <i class="fas fa-venus-mars"></i>
                                            <select name="Gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <div class="alert"></div>
                                        </div>

                                        <div class="input-group">
                                            <i class="fas fa-info-circle"></i>
                                            <textarea name="Bio" placeholder="Bio"></textarea>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-list"></i>
                                            <select name="Category" required>
                                                <option value="">Select Category</option>
                                                <option value="plumber">Plumber</option>
                                                <option value="electrician">Electrician</option>
                                                <option value="ac_repair">AC Repair</option>
                                                <option value="car_mechanic">Car Mechanic</option>
                                                <option value="car_painter">Car Painter</option>
                                                <option value="painter">Painter</option>
                                            </select>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fas fa-image white"></i>
                                            <input style="height:50px; background-color:white;" type="file" name="profilePic" accept="image/*" required>
                                            <div class="alert"></div>
                                        </div>
                                        <div class="input-group">
                                            <i class="fa fa-file-upload white"></i>
                                            <input style="height:50px; background-color:white;" type="file" name="FileUpload" required placeholder="Choose a Pdf File">
                                            <div class="alert"></div>
                                        </div>

                                      <center><button  type="submit">Submit</button></center>
                                    </form>

                                </div>
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
                    <li><a href="/plumber">Plumber Services</a></li>
                    <li><a href="/electrician">Electricians Services</a></li>
                    <li><a href="/acrepairing">Ac Repairing Services</a></li>
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
            {{-- <li class=""><a href="#">Blog</a>
                <!-- Dropdown content -->
            </li> --}}
            <li><a href="/contactus">Contact us</a></li>

            @guest
            <li class="dropdown white"><a style="background-color:black; color:white;border:2px solid yellow;" href="/login">Login</a>

                   <ul>
                       <li><a style="background-color:black; color:white;border:2px solid yellow; " href="/login">Login As User</a></li>
                       <li><a style="background-color:black; color:white;border:2px solid yellow; " href="/loginworker">Login As Worker</a></li>
                   </ul>
               </li>
                <li><a style="background-color:black; color:white;border:2px solid yellow;" href="/register">Register</a></li>
            @else
                <li class=""><a style="background-color:black; color:white;border:2px solid yellow;" id="logout-link" href="#" onclick="logout()">Logout</a>



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
            <!--End Header Lower-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="assets/images/logo-small-4.png" alt="" title=""></a>
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
                                    <li class="dropdown active"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="/plumber">Plumber Services</a></li>
                                            <li><a href="/electrician">Electricians Services</a></li>
                                            <li><a href="/acrepair">Ac Repairing Services</a></li>
                                            <li><a href="/carpainter">Car Painter Services</a></li>
                                            <li><a href="/carmechanic">Car Mechanic Services</a></li>
                                            <li><a href="/painter">Painter Services</a></li>

                                        </ul>
                                    </li>
                                    <li class=""><a href="/about">About us</a>
                                        {{-- <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="price.html">Price</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="comming-soon.html">Comming Soon</a></li>
                                        </ul> --}}
                                    </li>
                                    <li class=""><a href="/services">Services</a>
                                        {{-- <ul>
                                            <li><a href="services-single.html">Plumber</a></li>
                                            <li><a href="comming-soon.html">Electrician</a></li>
                                            <li><a href="comming-soon.html">Ac Reparing</a></li>
                                            <li><a href="comming-soon.html">Car Mechanic</a></li>
                                            <li><a href="comming-soon.html">Car Painter</a></li>
                                            <li><a href="comming-soon.html">Home Decorator</a></li>

                                        </ul> --}}
                                    </li>
                                    {{-- <li class="dropdown"><a href="#">Projects</a>
                                        <ul>
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="projects-single.html">Projects Single</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu-bar row clearfix">
                                                <div class="column col-lg-4 col-md-4 col-sm-12">
                                                    <h3>About Us</h3>
                                                    <ul>
                                                        <li><a href="about.html">About us</a></li>
                                                        <li><a href="price.html">Price</a></li>
                                                        <li><a href="faq.html">Faq's</a></li>
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="testimonial.html">Testimonial</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-lg-4 col-md-4 col-sm-12">
                                                    <h3>Services</h3>
                                                    <ul>
                                                        <li><a href="services.html">Services</a></li>

                                                    </ul>
                                                </div>
                                                <div class="column col-lg-4 col-md-4 col-sm-12">
                                                    <h3>Blog</h3>
                                                    <ul>
                                                        <li><a href="blog.html">Our Blog</a></li>
                                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                                        <li><a href="error-page.html">Error Page</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-detail.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop Details</a></li>
                                            <li><a href="shoping-cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                        </ul>
                                    </li> --}}
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
            

@yield('service content')


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
                                            <div class="logo">
                                                <a href="index.html"><img src="assets/images/logo-8.png" alt="" /></a>
                                            </div>
                                            <div class="text">
                                                <p>Helperman is your one-call solution for a wide range of home maintenance and repair needs. We are fully insured professional team.</p>
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
                                <div class="copyright">2023 © All Rights Reserved by <a href="#">Expert-themes</a></div>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
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
                                        <a href="index.html"><img src="assets/images/logo-3.png" alt="" /></a>
                                    </div>
                                    <div class="content-box">
                                        <h2>About Us</h2>
                                        <p class="text">Core values are the fundamental beliefs of a person or organization. The core values are the ples that dictate behavior and action suas labore saperet has there any quote for write lorem percit latineu.</p>
                                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                                    </div>
                                    <div class="contact-info">
                                        <h2>Contact Info</h2>
                                        <ul class="list-style-one">
                                            <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                            <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                            <li><span class="icon fa fa-envelope"></span>factory@gmail.com</li>
                                            <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                        </ul>
                                    </div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                        <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                        <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                        <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                        <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
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

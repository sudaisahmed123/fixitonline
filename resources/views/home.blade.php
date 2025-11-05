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
   <!-- Main Slider Four -->
   <section class="main-slider-four">
                    <div class="slider-outer">

                        <!-- Client Testimonial Carousel -->
                        <div class="slider-carousel owl-carousel owl-theme">

                            <!-- Slider Block -->
                            <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                                <div class="auto-container clearfix">
                                    <div class="inner-block">
                                        <h2>Build Everything <br> You Need</h2>
                                        <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                        <a href="about.html" class="theme-btn btn-style-eleven"><span class="txt">Get A Quote</span></a>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/main-slider/content-image-1.png" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Block -->
                            <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                                <div class="auto-container clearfix">
                                    <div class="inner-block">
                                        <h2>Build Everything <br> You Need</h2>
                                        <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                        <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/main-slider/content-image-2.png" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Block -->
                            <div class="slider-block" style="background-image: url(assets/images/main-slider/image-3.jpg)">
                                <div class="auto-container clearfix">
                                    <div class="inner-block">
                                        <h2>Build Everything <br> You Need</h2>
                                        <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                        <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/main-slider/content-image-3.png" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Block -->
                            <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                                <div class="auto-container clearfix">
                                    <div class="inner-block">
                                        <h2>Build Everything <br> You Need</h2>
                                        <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                        <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/main-slider/content-image-1.png" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Block -->
                            <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                                <div class="auto-container clearfix">
                                    <div class="inner-block">
                                        <h2>Build Everything <br> You Need</h2>
                                        <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                        <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/main-slider/content-image-2.png" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!--Product Thumbs Carousel-->
                      
                        <div class="client-thumb-outer">
                       
                        <!-- <div class="thumb-item">
                            <a href="{{route('emergency.appointment')}}">             <figure style="transform: rotate(270deg)" class="thumb-box"><img src="assets/icon/emergency1.jpg" alt="Emergency Appointment">
                              
                              </figure>
                              
                              </div>
                              <div class="thumb-item">
                          
                           <span ><h6 style="Color:white; transform:rotate(270deg); padding:30px">Emergency Appointment </h6></span> 
                    
                      
                      
                      </div></a> -->
                       

                    </div>

                </section>
                <!-- End Main Slider -->
        <!-- Main Slider Four -->
        <!-- <section class="main-slider-four">
            <div class="slider-outer"> -->

                <!-- Client Testimonial Carousel -->
                <!-- <div class="slider-carousel owl-carousel owl-theme"> -->

                    <!-- Slider Block -->
                    <!-- <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-eleven"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-1.png" alt="" />
                            </div>
                        </div>
                    </div> -->

                    <!-- Slider Block -->
                    <!-- <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-2.png" alt="" />
                            </div>
                        </div>
                    </div> -->

                    <!-- Slider Block -->
                    <!-- <div class="slider-block" style="background-image: url(assets/images/main-slider/image-3.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-3.png" alt="" />
                            </div>
                        </div>
                    </div> -->

                    <!-- Slider Block -->
                    <!-- <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-1.png" alt="" />
                            </div>
                        </div>
                    </div> -->

                    <!-- Slider Block -->
                    <!-- <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-2.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div> -->

                <!--Product Thumbs Carousel-->
                <!-- <div class="client-thumb-outer">
                    <div class="slider-thumb-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-2.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-3.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-1.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-2.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-3.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                    </div>
                </div>

            </div>

        </section> -->
        <!-- End Main Slider -->

        <!-- About Section Four -->
        <section class="about-section-four">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Blocks Column -->
                    <div class="blocks-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="blocks-outer">

                                <!-- About Block -->
                                <div class="about-block">
                                    <div class="inner-block">
                                        <div class="icon"><img style="width:40px; height:40px; border-radius:50%; outline:none" src="assets/icon/plumber.png" alt=""></div>
                                        <div class="title">Fully Insured</div>
                                        <h3>Professionals</h3>
                                    </div>
                                </div>

                                <!-- About Block -->
                                <div class="about-block">
                                    <div class="inner-block">
                                    <div class="icon"><img style="width:40px; height:40px; border-radius:50%; outline:none" src="assets/icon/trophy.png" alt=""></div>
                                        <div class="title">We offer Satisfaction</div>
                                        <h3>100% Guaranteed</h3>
                                    </div>
                                </div>

                                <!-- About Block -->
                                <div class="about-block">
                                    <div class="inner-block">
                                    <div class="icon"><img style="width:40px; height:40px; border-radius:50%; outline:none" src="assets/icon/costemer-support.png" alt=""></div>
                                        <div class="title">Equipped with</div>
                                        <h3>All Latest Tools</h3>
                                    </div>
                                </div>

                                <!-- About Block -->
                                <div class="about-block">
                                    <div class="inner-block">
                                    <div class="icon"><img style="width:40px; height:40px; border-radius:50%; outline:none" src="assets/icon/sketch.png" alt=""></div>
                                        <div class="title">We’re Available</div>
                                        <h3>7 Days a Week</h3>
                                    </div>
                                </div>

                                <!-- About Block -->
                                <!-- <div class="about-block">
                                    <div class="inner-block">
                                        <div class="icon flaticon-plumber"></div>
                                        <div class="title">Fully Insured</div>
                                        <h3>Professionals</h3>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Upper Box -->
                            <div class="upper-box">
                                <div class="experiance-box">
                                    <div class="box-inner">
                                        <div class="number">2</div>
                                        <div class="txt">Years of <br> Fixit Online Experience</div>
                                    </div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/resource/about-5.jpg" alt="" />
                                </div>
                                <div class="small-image">
                                    <img src="assets/images/resource/about-6.jpg" alt="" />
                                </div>
                            </div>
                            <!-- Lower Box -->
                            <div class="lower-box">
                                <div class="title">The Smart Man Company</div>
                                <h3>We Offer One Stop-Shop for All Your Home <br> and Commercial Projects!</h3>
                                <div class="text">Veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exa aute irure dolor in reprehenderit in voluptate velit esse cillum dolore nulla par. Excepteur sint occaecat. Ut enim ad minim veniam.</div>
                                <div class="clearfix">
                                    <a href="/about" class="theme-btn btn-style-six"><span class="txt">More About Us</span></a>
                                    <!-- <div class="signature"><img src="assets/images/icons/signature-2.jpg" alt="" /></div> -->
                                    <div style="padding:0px 20px;" class="info">For Emergency Fixing or Appointment<span>+92 3022587244</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End About Section Four -->

        <!-- Services Section Four -->
        <section class="main-slider-four">
            <div class="slider-outer">

                <!-- Client Testimonial Carousel -->
                <div class="slider-carousel owl-carousel owl-theme">

                    <!-- Slider Block -->
                    <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-eleven"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Slider Block -->
                    <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-2.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Slider Block -->
                    <div class="slider-block" style="background-image: url(assets/images/main-slider/image-3.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-3.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Slider Block -->
                    <div class="slider-block" style="background-image: url(assets/images/main-slider/image-1.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-1.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Slider Block -->
                    <div class="slider-block" style="background-image: url(assets/images/main-slider/image-2.jpg)">
                        <div class="auto-container clearfix">
                            <div class="inner-block">
                                <h2>Build Everything <br> You Need</h2>
                                <div class="text">Construction is the process of constructing <br> an infrastructure.</div>
                                <a href="about.html" class="theme-btn btn-style-six"><span class="txt">Get A Quote</span></a>
                            </div>
                            <div class="image">
                                <img src="assets/images/main-slider/content-image-2.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>

                <!--Product Thumbs Carousel-->
                <div class="client-thumb-outer">
                    <div class="slider-thumb-carousel owl-carousel owl-theme">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-2.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-3.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-1.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-2.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="assets/images/main-slider/thumb-3.jpg" alt=""><span class="plus flaticon-plus-symbol"></span></figure>
                        </div>
                    </div>
                </div>

            </div>

        </section>
<!-- Services Section Four -->
<section class="services-section-four">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title-two centered">
            <h2>Best Fixit Online Services</h2>
            <div class="title">
                <span class="left-separate"></span>
                What We Do For You
                <span class="right-separate"></span>
            </div>
            <div class="text">Fixit Online is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home <br> improvement and repair, providing virtually any home repair.</div>
        </div>

        <div class="three-item-carousel owl-carousel owl-theme">
            @foreach($service as $se)
            <!-- Services Block Five -->
            <div class="services-block-five">
                <div class="inner-box">
                    <div class="image">
                        <a href="{{ $se->link }}">
                            <img style="width: 100%; height:270px" src="{{ asset('serviceimages/'.$se->image) }}" alt="" />
                        </a>
                        <a href="{{ $se->link }}" class="read-more">Read More</a>
                    </div>
                    <div class="lower-content">
                        <div style="border-radius:10px" class="icon">
                            <img src="assets/icon/tap.webp" alt="">
                        </div>
                        <h3><a href="{{ $se->link }}">{{ $se->name }}</a></h3>
                        <div class="text">{{ $se->des }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>


</style>
        <!-- End Services Section Four -->
          <!-- Counter Section Four -->
          <section class="counter-section-four" style="background-image:url(images/background/16.jpg)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two light centered">
                    <h2>Achivements in Number</h2>
                    <div class="title"><span class="left-separate"></span> Fun Facts <span class="right-separate"></span></div>
                    <div class="text">Fixit Online is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home <br> improvement and repair, providing virtually any home repair.</div>
                </div>

                <!-- Fact Counter -->
                <div class="fact-counter style-three">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="840">0</span>+
                                    </div>
                                    <h4 class="counter-title">Projects Completed <br> Successfully</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="5000" data-stop="560">0</span>+
                                    </div>
                                    <h4 class="counter-title">Professional Service <br> Employ</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="2000" data-stop="170">0</span>+
                                    </div>
                                    <h4 class="counter-title">Branches Running <br> Worldwide</h4>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3500" data-stop="4.5">0</span>+
                                    </div>
                                    <h4 class="counter-title">Average Rating By <br> Customers</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="btn-box text-center">
                    <a href="projects.html" class="theme-btn btn-style-six"><span class="txt">Start Your Project</span></a>
                </div>

            </div>
        </section>
        <!-- End Services Section Four -->

        <!-- Counter Section Four -->
        
        <!-- End Counter Section Four -->

        <!-- Projects Section Three -->
        <section class="projects-section-three" style="background-image:url(assets/images/background/17.jpg)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two centered">
                    <h2>Great Completed Works</h2>
                    <div class="title"><span class="left-separate"></span> Our Projects <span class="right-separate"></span></div>
                </div>

                <div class="inner-container">

                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!-- Project Block Three -->
                        <div class="project-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/gallery/11-2.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><a href="projects-single.html">More Detail</a></li>
                                        <li><a href="assets/images/gallery/11-2.jpg" class="lightbox-image" data-fancybox-group="gallery-two">Zoom Project</a></li>
                                    </ul>
                                    <div class="content" style="background-image:url(assets/images/background/18.jpg)">
                                        <div class="content-inner">
                                            <h3><a href="projects-single.html">Air Conditioner Instalment</a></h3>
                                            <div class="designation">Electrical Work</div>
                                            <a href="projects-single.html" class="arrow flaticon-right-arrows-couple"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Block Three -->
                        <div class="project-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/gallery/11-1.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><a href="projects-single.html">More Detail</a></li>
                                        <li><a href="assets/images/gallery/11-1.jpg" class="lightbox-image" data-fancybox-group="gallery-two">Zoom Project</a></li>
                                    </ul>
                                    <div class="content" style="background-image:url(assets/images/background/18.jpg)">
                                        <div class="content-inner">
                                            <h3><a href="projects-single.html">Air Conditioner Instalment</a></h3>
                                            <div class="designation">Electrical Work</div>
                                            <a href="projects-single.html" class="arrow flaticon-right-arrows-couple"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Project Block Three -->
                        <div class="project-block-three">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/gallery/11.jpg" alt="" />
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><a href="projects-single.html">More Detail</a></li>
                                        <li><a href="assets/images/gallery/11.jpg" class="lightbox-image" data-fancybox-group="gallery-two">Zoom Project</a></li>
                                    </ul>
                                    <div class="content" style="background-image:url(assets/images/background/18.jpg)">
                                        <div class="content-inner">
                                            <h3><a href="projects-single.html">Air Conditioner Instalment</a></h3>
                                            <div class="designation">Electrical Work</div>
                                            <a href="projects-single.html" class="arrow flaticon-right-arrows-couple"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- More Projects -->
                    <div class="more-projects">
                        <div class="projects-inner clearfix">
                            <div class="pull-left">
                                <div class="text">WE HAVE DONE MORE THAN 800 PROJECTS</div>
                            </div>
                            <div class="pull-right">
                                <a href="projects.html" class="theme-btn view-btn">VIEW ALL HERE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Projects Section Three -->

        <!-- Steps Section -->
        <section class="steps-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two light centered">
                    <h2>Four Easiest Ways To Build</h2>
                    <div class="title"><span class="left-separate"></span> Working Process <span class="right-separate"></span></div>
                    <div class="text">Our Company can carry out projects which require the highest standards <br> of finish and finesse.</div>
                </div>

                <div class="row clearfix">

                    <!-- Step Block -->
                    <div class="step-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon"><img style="width:100px; height:100px; border-radius:50%; outline:none" src="assets/icon/plumber-white.png" alt=""></div>
                                <span class="number">01</span>
                            </div>
                            <h3>Book For Service</h3>
                            <div class="text">Book a call on our website or <br> (+321) 456 78 901</div>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                            <div class="icon"><img style="width:100px; height:100px; border-radius:50%; outline:none" src="assets/icon/user.png" alt=""></div>
                            <span class="number">01</span>
                                <span class="number">02</span>
                            </div>
                            <h3>Meet Our Man</h3>
                            <div class="text">Our professional & expert staff <br> will meet you in 24 hrs</div>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                            <div class="icon"><img style="width:100px; height:100px; border-radius:50%; outline:none" src="assets/icon/gear.png" alt=""></div>
                            <span class="number">01</span>
                                <span class="number">03</span>
                            </div>
                            <h3>Fix a Problem</h3>
                            <div class="text">He fix your all the problems <br> with good quality</div>
                        </div>
                    </div>

                    <!-- Step Block -->
                    <div class="step-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon-box">
                            <div class="icon"><img style="width:100px; height:100px; border-radius:50%; outline:none" src="assets/icon/coin.png" alt=""></div>
                            <span class="number">01</span>
                                <span class="number">04</span>
                            </div>
                            <h3>Make Payment</h3>
                            <div class="text">Pay your payment after your <br> satisfaction</div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Steps Section -->

        <!-- Testimonial Section Four -->
        <section class="testimonial-section-four" style="background-image:url(assets/images/background/20.jpg)">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two">
                    <h2>Words From Customers</h2>
                    <div class="title"><span class="left-separate"></span> Our Testimonial <span class="right-separate"></span></div>
                </div>
                <div class="inner-container">

                    <div class="two-item-carousel owl-carousel owl-theme">

                        <!-- Testimonial Block Four -->
                        <div class="testimonial-block-four">
                            <div class="inner-box">
                                <div class="upper-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="quote flaticon-right-quote-sign"></div>
                                    <center> <div><img style="width:50px; height:50px;" src="assets/icon/comment.png" alt=""></div></center>
                                   
                                    <div class="text">This was the 2nd time I used Wireman for some mywork I had done to my home in Celebration Oklahoma. I just want to thank your great service.</div>
                                </div>
                                <div class="lower-content">
                                    <div class="lower-inner">
                                        <div class="image">
                                            <img src="assets/images/resource/author-8.jpg" alt="" />
                                        </div>
                                        <h3>Mark Laiman</h3>
                                        <div class="designation">Oklahoma City, United States</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block Four -->
                        <div class="testimonial-block-four">
                            <div class="inner-box">
                                <div class="upper-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="quote flaticon-right-quote-sign"></div>
                                     <center> <div><img style="width:50px; height:50px;" src="assets/icon/comment.png" alt=""></div></center>
                                    <div class="text">My Electrician, Bayer, was very knowledgeable, had a great work ethic and was very friendly and outgoing. He did an excellent job on my fence.</div>
                                </div>
                                <div class="lower-content">
                                    <div class="lower-inner">
                                        <div class="image">
                                            <img src="assets/images/resource/author-9.jpg" alt="" />
                                        </div>
                                        <h3>Lauria Tampal</h3>
                                        <div class="designation">Chairman, Sun Solutions</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block Four -->
                        <div class="testimonial-block-four">
                            <div class="inner-box">
                                <div class="upper-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="quote flaticon-right-quote-sign"></div>
                                    <center> <div><img style="width:50px; height:50px;" src="assets/icon/comment.png" alt=""></div></center>
                                    <div class="text">This was the 2nd time I used Wireman for some mywork I had done to my home in Celebration Oklahoma. I just want to thank your great service.</div>
                                </div>
                                <div class="lower-content">
                                    <div class="lower-inner">
                                        <div class="image">
                                            <img src="assets/images/resource/author-8.jpg" alt="" />
                                        </div>
                                        <h3>Mark Laiman</h3>
                                        <div class="designation">Oklahoma City, United States</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Block Four -->
                        <div class="testimonial-block-four">
                            <div class="inner-box">
                                <div class="upper-content">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="quote flaticon-right-quote-sign"></div>
                                    <center> <div><img style="width:50px; height:50px;" src="assets/icon/comment.png" alt=""></div></center>
                                    <div class="text">My Electrician, Bayer, was very knowledgeable, had a great work ethic and was very friendly and outgoing. He did an excellent job on my fence.</div>
                                </div>
                                <div class="lower-content">
                                    <div class="lower-inner">
                                        <div class="image">
                                            <img src="assets/images/resource/author-9.jpg" alt="" />
                                        </div>
                                        <h3>Lauria Tampal</h3>
                                        <div class="designation">Chairman, Sun Solutions</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Testimonial Section Four -->

        <!-- Team Section Four -->
        <section class="team-section-four">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two centered">
                    <h2>Great Team Workers</h2>
                    <div class="title"><span class="left-separate"></span> Our Helperman <span class="right-separate"></span></div>
                </div>

                <div class="row clearfix">

                    <!-- Team Block Four -->
                    <div class="team-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <!-- Social Nav -->
                                <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                                <img src="assets/images/resource/team-11.jpg" alt="" />
                                <!-- Author -->
                                <div class="author">Handy Plumber</div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Danuak Sartfa</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block Four -->
                    <div class="team-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <!-- Social Nav -->
                                <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                                <img src="assets/images/resource/team-12.jpg" alt="" />
                                <!-- Author -->
                                <div class="author">Handy Corporate</div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Daniya Molika</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block Four -->
                    <div class="team-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <!-- Social Nav -->
                                <ul class="social-nav">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                                <img src="assets/images/resource/team-13.jpg" alt="" />
                                <!-- Author -->
                                <div class="author">Handy Plumber</div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">Rojares Beltain</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Team Section Four -->

        <!--Contact Info Section-->
        <section class="update-contact-info-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/fixitonline.png" alt="" /></a>
                            </div>
                            <div class="text">Over 2 years experience and knowledge international standards, technologicaly changes our system, we are dedicated to provides the best solutions to our valued customers there are many variations solutions.</div>
                            <!--List Style Three-->
                            <ul class="list-style-three">
                                <li><strong> +92 3022587244</strong>Mon-Fri, 9am until 6pm</li>
                                <li><strong>fixitonline@gmail.com</strong>We reply within 24 hours</li>
                                <li><strong>Pakistan,</strong> Karachi Garden</li>
                            </ul>
                        </div>
                    </div>
                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Contact Us</h2>
                                <div class="separater"></div>
                            </div>
                            <!-- Default Form -->
                            <div class="update-default-form">
                                <!--Default Form-->
                                <form method="post" action="/complain">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="name" placeholder="Enter Name" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="Enter Email" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="subject" placeholder="Enter Subject" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="phone" placeholder="Enter Phone" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea name="massage" placeholder="Massage"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn btn-style-six" type="submit" name="submit-form"><span class="txt">Send Now</span></button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                            <!--End Default Form -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Info Section-->

        <!-- Team Section Five -->
 
        <!-- End Team Section Five -->

        <!-- Blog Section Four -->
        <section class="blog-section-four">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title-two centered">
                    <h2>Latest From Our Blog</h2>
                    <div class="title"><span class="left-separate"></span> News & Update <span class="right-separate"></span></div>
                </div>

                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-6 col-sm-12">

                        <!-- News Block Six -->
                        <div class="news-block-six">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="assets/images/resource/news-12.jpg" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li>In Maintenance</li>
                                        <li>4 Comments</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Have you been checking your home monthly basis?</a></h3>
                                    <div class="text">Denounce with righteous indignation and men who are so beguiled and demorcharms some pleasure of the moment. then we complete the work in case.</div>
                                    <a href="blog-detail.html" class="read-more">Read More</a>
                                    <!-- Author Box -->
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <img src="assets/images/resource/author-10.jpg" alt="" />
                                            </div>
                                            <div class="author">Posted By <span>JONATHAN WINDY</span></div>
                                            <div class="post-date">24 <br> MAR</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Update Block -->
                        <div class="update-block">
                            <a href="blog-detail.html">If You Check More Update <span>Click</span> Here Now</a>
                        </div>

                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-6 col-sm-12">

                        <!-- News Block Six -->
                        <div class="news-block-six style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="assets/images/resource/news-13.jpg" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li>In Maintenance</li>
                                        <li>4 Comments</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Modification for your aging parents</a></h3>
                                    <!-- Author Box -->
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <img src="assets/images/resource/author-11.jpg" alt="" />
                                            </div>
                                            <div class="author">Posted By <span>WINDY ROJARS</span></div>
                                            <div class="post-date">24 <br> MAR</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- News Block Six -->
                        <div class="news-block-six style-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="blog-detail.html"><img src="assets/images/resource/news-14.jpg" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li>In Maintenance</li>
                                        <li>4 Comments</li>
                                    </ul>
                                    <h3><a href="blog-detail.html">Use Brick Borders for Path Edging</a></h3>
                                    <!-- Author Box -->
                                    <div class="author-box">
                                        <div class="box-inner">
                                            <div class="author-image">
                                                <img src="assets/images/resource/author-12.jpg" alt="" />
                                            </div>
                                            <div class="author">Posted By <span>Micky MONIA</span></div>
                                            <div class="post-date">24 <br> MAR</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Blog Section Four -->

    
@endsection


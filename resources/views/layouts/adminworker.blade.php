<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="workeradminassets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="workeradminassets/images/favicon.png" type="image/x-icon">
    <title>Fixit Online Worker Dashboard</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/style.css">
    <link id="color" rel="stylesheet" href="workeradminassets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="workeradminassets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">




</head>
<style>
    #c-pills-tab{
        display:none;
    }
</style>

<body>
    <div class="loader-wrapper">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner-1"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="page-header row">
            <div class="header-logo-wrapper col-auto">
                <div class="logo-wrapper"><a style="font-size:22px; color:white" href="/workerdashboard">FixitOnline</a></div>
            </div>
            <div class="col-4 col-xl-4 page-title">
                <h4 style="color:#fda700; background-color:black; text-align:center; padding:20px 0px; border-radius:20px" class="f-w-700">Worker Dashboard</h4>
               
            </div>
            <!-- Page Header Start-->
            <div class="header-wrapper col m-0" >
                <div class="row">
                    <form class="form-inline search-full col" action="#" method="get">
                        <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                <div class="u-posRelative">
                                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                                </div>
                                <div class="Typeahead-menu"></div>
                            </div>
                        </div>
                    </form>
                    <div class="header-logo-wrapper col-auto p-0">
                        <div class="logo-wrapper"><a style="font-size:22px; color:white" href="/workerdashboard">FixitOnline</a></div>
                        <div class="toggle-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>
                        </div>
                    </div>
                    <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                        <ul class="nav-menus">
                            <li> <span class="header-search">
                    <svg>
                      <use href="workeradminassets/svg/icon-sprite.svg#search"></use>
                    </svg></span></li>
                            
                           
                          
                      
                            <li class="profile-nav onhover-dropdown px-0 py-0">
                                <div class="d-flex profile-media align-items-center"><img class="img-30" src="workeradminassets/images/dashboard/profile.png" alt="">
                                    <div class="flex-grow-1"><span> {{ Auth::guard('worker')->check() ? Auth::guard('worker')->user()->Name : 'Guest' }}</span>
                                        <p class="mb-0 font-outfit">{{ Auth::guard('worker')->check() ? Auth::guard('worker')->user()->Category : 'Guest' }}<i class="fa fa-angle-down"></i></p>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div">
                                    <li><a href="private-chat.html"><i data-feather="user"></i><span>Account </span></a></li>
                                    <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                    <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                                    <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                                    <!-- <li><a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a></li> -->
                                     <form action="/logout1" method="post">
                                        @csrf
<button type="submit" class="btn btn-danger">Log Out</button>
                                     </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <script class="result-template" type="text/x-handlebars-template">
                        <div class="ProfileCard u-cf">
                            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                            <div class="ProfileCard-details">
                                <div class="ProfileCard-realName"></div>
                            </div>
                        </div>
                    </script>
                    <script class="empty-template" type="text/x-handlebars-template">
                        <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                    </script>
                </div>
            </div>
            <!-- Page Header Ends                              -->
        </div>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper"><a style="font-size:22px; color:white" href="/workerdashboard">FixitOnline</a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar">
                            <svg class="stroke-icon sidebar-toggle status_toggle middle">
                  <use href="workeradminassets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
                            <svg class="fill-icon sidebar-toggle status_toggle middle">
                  <use href="workeradminassets/svg/icon-sprite.svg#fill-toggle-icon"></use>
                </svg>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="workeradminassets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="workeradminassets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="pin-title sidebar-main-title">
                                    <div>
                                        <h6>Pinned</h6>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                    </div>
                                </li>
                                
                                
    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="/workerdashboard">
            <i class="bi bi-house"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="/confirmappointmentworker">
            <i class="bi bi-check-circle"></i>
            <span class="lan-">Confirm Appointments</span>
        </a>
    </li>

    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="/completedappointment">
            <i class="bi bi-check-all"></i>
            <span class="lan-">Completed Appointments</span>
        </a>
    </li>

    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title" href="/reviewget">
            <i class="bi bi-star"></i>
            <span class="lan-">Your Reviews</span>
        </a>
    </li>
</ul>


                              
                                       
                               
                                      
                                       
                                
                                       
                               
                               

                               
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

@yield('workercontent')

              <!-- footer start-->
              <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
                            <p class="mb-0 f-w-600">Copyright <span class="year-update"> </span> © FixitOnline </p>
                            <p class="mb-0 f-w-600">
                                <svg class="footer-icon">
                    <use href="workeradminassets/svg/icon-sprite.svg#footer-heart"> </use>
                  </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="workeradminassets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="workeradminassets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="workeradminassets/js/icons/feather-icon/feather.min.js"></script>
    <script src="workeradminassets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="workeradminassets/js/scrollbar/simplebar.js"></script>
    <script src="workeradminassets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="workeradminassets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="workeradminassets/js/sidebar-menu.js"></script>
    <script src="workeradminassets/js/sidebar-pin.js"></script>
    <script src="workeradminassets/js/slick/slick.min.js"></script>
    <script src="workeradminassets/js/slick/slick.js"></script>
    <script src="workeradminassets/js/header-slick.js"></script>
    <script src="workeradminassets/js/counter/jquery.waypoints.min.js"></script>
    <script src="workeradminassets/js/counter/jquery.counterup.min.js"></script>
    <script src="workeradminassets/js/counter/counter-custom.js"></script>
    <!-- calendar js-->
    <script src="workeradminassets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="workeradminassets/js/support-ticket-custom.js"></script>
    <script src="workeradminassets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="workeradminassets/js/script.js"></script>
    <script src="workeradminassets/js/script1.js"></script>
    <script src="workeradminassets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
     <!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    let trackingInterval;

    function startTracking() {
        if (navigator.geolocation) {
            trackingInterval = navigator.geolocation.watchPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                // Send worker location to the backend
                fetch('/update-worker-location', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        latitude: latitude,
                        longitude: longitude,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if(data.status === 'success') {
                        console.log('Location updated successfully');
                    } else {
                        console.error('Error updating location:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }, function(error) {
                console.error('Error getting location:', error.message);
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function stopTracking() {
        if (trackingInterval) {
            navigator.geolocation.clearWatch(trackingInterval);
            console.log('Tracking stopped');
        }
    }
</script>
</body>

</html>
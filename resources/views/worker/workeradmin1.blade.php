@extends('layouts.admindashboard')
@section('admincontent')
<!-- Content body start
        *********************************** -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<style>


.card1 {
    position: relative;
    width: 100%; 
    max-width: 300px; 
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    margin-bottom: 20px; 
}

.card1:hover {
    transform: translateY(-5px);
}

.card1 img {
    width: 100%;
    height: 200px; 
    object-fit: cover;
}

.card-content1 {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    color: #fff;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.card1:hover .card-content1 {
    transform: translateY(0);
}

.card-content1 h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.card-content1 p {
    font-size: 14px;
    margin-bottom: 15px;
    line-height: 1.5;
}

.btn1 {
    display: inline-block;
    padding: 10px 20px;
    background-color: #eb0505;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn1:hover {
    background-color: #ca0606;
}

@media (max-width: 768px) {
    .card1 {
        max-width: 100%; 
    }
}
.card-container1 {
    display: flex;
    justify-content: center; 
    gap: 20px; 
    background-color: #222B40;
    width:98%;
    margin: auto;
    border-radius:10px;
    padding:20px 0px
}

</style>

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500 // Automatically close after 1.5 seconds
    });
</script>
@endif

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                               <h4>Services Section</h4>
                            
                               <div class="card-container1">
                     
   
   

    
           <div class="card1">
            <img src="" alt="Card Image">
            <div class="card-content1">
                <h2></h2>
                <p></p>
                <a href="" class="btn1">Delete Service</a>
            </div>
        </div>
        <form action="/logout1" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    
    
       
   
    
  


    
   


                                
                                 

                                

                                 </div>
                                   
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 respo col-xxl-4 col-lg-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card my-calendar">
                                    <div class="card-body schedules-cal p-2">
                                        <input type="text" class="form-control d-none" id="datetimepicker1">
                                        <div class="events">
                                            <h6>events</h6>
                                            <div class="dz-scroll event-scroll">
                                                <div class="event-media">
                                                    <div class="d-flex align-items-center">
                                                        <div class="event-box">
                                                            <h5 class="mb-0">20</h5>
                                                            <span>Mon</span>
                                                        </div>
                                                        <div class="event-data ms-2">
                                                            <h5 class="mb-0"><a href="project.html">Development planning</a></h5>
                                                            <span>w3it Technologies</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-white">12:05 PM</span>
                                                </div>
                                                <div class="event-media">
                                                    <div class="d-flex align-items-center">
                                                        <div class="event-box">
                                                            <h5 class="mb-0">20</h5>
                                                            <span>Mon</span>
                                                        </div>
                                                        <div class="event-data ms-2">
                                                            <h5 class="mb-0"><a href="project.html">Desinging planning</a></h5>
                                                            <span>w3it Technologies</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-white">12:05 PM</span>
                                                </div>
                                                <div class="event-media">
                                                    <div class="d-flex align-items-center">
                                                        <div class="event-box">
                                                            <h5 class="mb-0">20</h5>
                                                            <span>Mon</span>
                                                        </div>
                                                        <div class="event-data ms-2">
                                                            <h5 class="mb-0"><a href="project.html">Frontend Designing</a></h5>
                                                            <span>w3it Technologies</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-white">12:05 PM</span>
                                                </div>
                                                <div class="event-media">
                                                    <div class="d-flex align-items-center">
                                                        <div class="event-box">
                                                            <h5 class="mb-0">20</h5>
                                                            <span>Mon</span>
                                                        </div>
                                                        <div class="event-data ms-2">
                                                            <h5 class="mb-0"><a href="project.html">Software planning</a></h5>
                                                            <span>w3it Technologies</span>
                                                        </div>
                                                    </div>
                                                    <span class="text-white">12:05 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card same-card chart-chart">
                                    <div class="card-body d-flex align-items-center  py-2">
                                        <div id="AllProject"></div>
                                        <ul class="project-list">
                                            <li>
                                                <h6>All Projects</h6>
                                            </li>
                                            <li>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="#3AC977"/>
												</svg> Compete
                                            </li>
                                            <li>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--primary)"/>
												</svg> Pending
                                            </li>
                                            <li>
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="10" height="10" rx="3" fill="var(--secondary)"/>
												</svg> Not Start
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects">
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">Active Projects</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                <th>Project Name</th>
                                                <th>Project Lead</th>
                                                <th>Progress</th>
                                                <th>Assignee</th>
                                                <th>Status</th>
                                                <th>Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($appointments as $app)
                                            <tr>
                                                <td>{{ $app->id }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Liam Risher</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-primary">53%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>Bender Project</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Oliver Noah</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-danger">30%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-danger light border-0">Pending</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Canary</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Elijah James</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-success">40%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-success light border-0">Completed</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Casanova</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">William Risher</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-primary">53%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bigfish</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Donald Benjamin</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-danger">30%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-danger light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Matadors</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Liam Risher</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-primary">53%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mercury</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Oliver Noah</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:30%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-danger">30%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic777.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-danger light border-0">Pending</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Whistler</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Elijah James</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" style="width:40%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-success">40%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-success light border-0">Completed</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Time Projects</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">Lucas</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" style="width:33%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-primary">33%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fast Ball</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">William Risher</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="tbl-progress-box">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" style="width:53%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                        </div>
                                                        <span class="text-primary">53%</span>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <div class="avatar-list avatar-list-stacked">
                                                        <img src="images/contacts/pic1.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                        <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                        <img src="images/contacts/pic999.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">Inprogress</span>
                                                </td>
                                                <td>
                                                    <span>06 Sep 2021</span>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-8 col-lg-7">
                        <div class="card h-auto">
                            <div class="card-header border-0 pb-3">
                                <h4 class="heading mb-0">Running Projects</h4>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary">View All</a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-media">
                                                        <img src="images/p1.gif" alt="">
                                                    </div>
                                                    <div class="media-data">
                                                        <h4><a href="project.html">Development planning</a></h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                                <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                            </div>
                                                            <span>21+ Team</span>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div>
                                                            <span class="badge badge-danger light border-0">Pending</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-media">
                                                        <img src="images/p3.gif" alt="">
                                                    </div>
                                                    <div class="media-data">
                                                        <h4><a href="project.html">Desinging planning</a></h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                                <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                            </div>
                                                            <span>21+ Team</span>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div>
                                                            <span class="badge badge-info light border-0">Inprogress</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-media">
                                                        <img src="images/p.gif" alt="">
                                                    </div>
                                                    <div class="media-data">
                                                        <h4><a href="project.html">Frontend Designing</a></h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                                <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                            </div>
                                                            <span>21+ Team</span>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div>
                                                            <span class="badge badge-warning light border-0">Inprogress</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-media">
                                                        <img src="images/p2.gif" alt="">
                                                    </div>
                                                    <div class="media-data">
                                                        <h4>Compete this projects Monday</h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                                <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt="">
                                                            </div>
                                                            <span>21+ Team</span>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div>
                                                            <span class="badge badge-primary light border-0">Inprogress</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
@endsection
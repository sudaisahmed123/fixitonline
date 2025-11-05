@extends('layouts.admindashboard')
@section('admincontent')
<!-- Content body start
        *********************************** -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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




   

    .modal {
    z-index: 1050 !important; 
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

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                               


                            


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
    <h1 class="mb-4">Unanswered Questions</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="background-color:#182237; color:white">Question</th>
                <th style="background-color:#182237; color:white">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->question }}</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#answerModal{{ $question->id }}">
                            Add Answer
                        </button>

                        <!-- Modal for answering the question -->
                        <div class="modal fade" id="answerModal{{ $question->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="background-color:#182237;">
                                    <div class="modal-header">
                                        <center> <h5 style="color:white;" class="modal-title" id="exampleModalLabel">Answer Question</h5></center>
                                       
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.answer-question', $question->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <!-- <label style="color:black;" for="answer"></label> -->
                                                 <h5 style="color:white;">{{ $question->question }}</h5>
                                                <textarea name="answer" row="5"  cols="30" class="form-control" placeholder= "Enter your answer here"required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit Answer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
                  
                    <!-- <div class="container mt-5">
    <h1 class="text-center mb-4">Unanswered Questions</h1>

    @if ($questions->isEmpty())
        <div class="alert alert-info text-center" role="alert">
            No unanswered questions found.
        </div>
    @else
        @foreach($questions as $question)
            <div class="card mb-4">
                <div class="card-header">
                    <strong>Question:</strong> {{ $question->question }}
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.answer-question', $question->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="answer-{{ $question->id }}" class="form-label">Your Answer:</label>
                            <textarea id="answer-{{ $question->id }}" name="answer" class="form-control" rows="3" placeholder="Enter your answer here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Answer</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div> -->








                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects">
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">Register Workers</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Cnic</th>
                                                <th>City</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($register as $reg)
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    
                                                        <p class="mb-0 ms-2">{{$reg->name}}</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge  light border-0">{{$reg->number}}</span>
                                                </td>
                                                
                                               
                                               
                                             
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">{{$reg->cnic}}</span>
                                                </td>
                                                <td>
                                                    <span>{{$reg->city}}</span>
                                                </td>
                                                <td> <span class="badge badge-danger light border-0"><a href="/applicationworker/{{$reg->id}}" class="btn1">Register Worker</a></span></td>
                                             
                                            </tr>
                                            @endforeach
                                         
                                            

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects">
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">Emergency Appointment</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th>City</th>
                                                <th>Category</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($emergency as $em)
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    
                                                        <p class="mb-0 ms-2">{{$em->name}}</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge  light border-0">{{$em->number}}</span>
                                                </td>
                                                
                                               
                                               
                                                <td class="pe-0">
                                                    <span style="color:green" class="badge badge-success light border-0">{{$em->date}}</span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">{{$em->time}}</span>
                                                </td>
                                                <td>
                                                    <span>{{$em->notes}}</span>
                                                </td>
                                             
                                            </tr>
                                            @endforeach
                                         
                                            

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive active-projects">
                                    <div class="tbl-caption">
                                        <h4 class="heading mb-0">Approved Workers</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th>City</th>
                                                <th>Category</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($approved as $app)
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('userimages/'.$app->profilePic)}}" class="avatar avatar-md rounded-circle" alt="">
                                                        <p class="mb-0 ms-2">{{$app->Name}}</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge  light border-0">{{$app->PhoneNumber}}</span>
                                                </td>
                                                
                                               
                                               
                                                <td class="pe-0">
                                                    <span style="color:green" class="badge badge-success light border-0">{{$app->role}}</span>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">{{$app->city}}</span>
                                                </td>
                                                <td>
                                                    <span>{{$app->Category}}</span>
                                                </td>
                                             
                                            </tr>
                                            @endforeach
                                         
                                            

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12 col-lg-7" style="width:100%">
                        <div class="card h-auto">
                            <div class="card-header border-0 pb-3" style="background-color:#222B40">
                                <h4 class="heading mb-0">Website Services</h4>
                                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary">View All</a> -->
                            </div>
                            <div class="card-body pt-0">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                    @foreach($service as $ser)
                                        <div class="swiper-slide">
                                            <div class="card" style="width:250px;">
                                                <div class="card-body" style="width:100%;">
                                                    <div class="card-media">
                                                        <img src="{{asset('serviceimages/'.$ser->image)}}" alt="">
                                                    </div>
                                                    <div class="media-data">
                                                        <h4><a href="project.html">{{$ser->name}}</a></h4>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-list avatar-list-stacked">
                                                                <p>{{$ser->des}}</p>
                                                                <!--<img src="{{asset('serviceimages/'.$ser->image)}}" class="avatar avatar-md  rounded-circle" alt="">
                                                                 <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                                                <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle" alt=""> -->
                                                            </div>
                                                        </div>
                                                        <div class="dateformat d-flex justify-content-between align-items-end">
                                                            <!-- <div>
                                                                <p>Due Date</p>
                                                                <span>06 Sep 2021</span>
                                                            </div> -->
                                                            <span class="badge badge-danger light border-0"><a href="deleteservice/{{$ser->id}}" class="btn1">Delete Service</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                     
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
                                        <h4 class="heading mb-0">Complain</h4>
                                    </div>
                                    <table id="projects-tbl" class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Massage</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($complain as $co)
                                            <tr>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    
                                                        <p class="mb-0 ms-2">{{$co->name}}</p>
                                                    </div>
                                                </td>
                                                <td class="pe-0">
                                                    <span class="badge  light border-0">{{$co->email}}</span>
                                                </td>
                                                
                                               
                                               
                                             
                                                <td class="pe-0">
                                                    <span class="badge badge-primary light border-0">{{$co->phone}}</span>
                                                </td>
                                                <td>
                                                    <span>{{$co->massage}}</span>
                                                </td>
                                                <td> <span class="badge badge-danger light border-0"><a href="/complain/{{$co->id}}" class="btn1">Delete</a></span></td>
                                             
                                            </tr>
                                            @endforeach
                                         
                                            

                                        </tbody>

                                    </table>
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

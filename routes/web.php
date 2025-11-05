<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\admin;
use App\Models\application;
use App\Models\appointment;
use App\Models\emergency;
use App\Models\cetegorie;
use App\Models\service;
use App\Models\Review;
use App\Models\ApprovedWorker;
use App\Models\register;
use App\Models\UnansweredQuestion;
use App\Models\complain;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\RasaController;




Route::get('/', function () {
    // $categories = cetegorie::get();
    $service = service::get();
    $reviews = Review::get();
    return view('home', compact('service','reviews'));
    
    return view('home');
});


Route::get('/workerdashboard', function () {
    $worker = auth()->guard('worker')->user();
    $appointments = Appointment::where('workerid', $worker->id)->where('status', 'Approved')
    ->get();
    $emergency = emergency::where('Workerid', $worker->id)
    ->get();
       
    
    return view('worker.workeradmin', compact('appointments','emergency'));
    return view('worker.workeradmin');
});
Route::get('/approver', function () {
    return view('admin.approver');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('about');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/plan', function () {
    return view('plan');
});
Route::get('/projects', function () {
    return view('projects');
});
// Route::get('/services', function () {
//     $categories = cetegorie::get();
//     return view ('home', compact('categories'));
//     return view('services');
// });
Route::get('/team', function () {
    return view('team');
});
Route::get('/services', function () {
    $service = service::get();
    return view('services', compact('service'));

    // return view('services');
});
Route::get('/test', function () {
    return view('testinomial');
});
// Route::get('/admin', function () {
//     return view('admin');
// });
Route::get('/user', function () {
    return view('admin.users');
});
Route::get('/loginworker', function () {
    return view('workerlogin');
});
Route::get('/applicationworker', function () {

    return view('applicworker');
});




// Service Tamplate routes


Route::get('/carmechanic', function () {
    return view('servicetamplate.carmechanic');
});
Route::get('/carpainter', function () {
    return view('servicetamplate.carpainter');
});
Route::get('/electrician', function () {
    return view('servicetamplate.electrician');
})->middleware('auth');
Route::get('/painter', function () {
    return view('servicetamplate.painter');
});
Route::get('/acrepair', function () {
    return view('servicetamplate.acrepair');
});


// Electrician Routes

Route::get('/electricianhome', function () {
    return view('Electrician.electrician');
});

// AC Routes

Route::get('/acrepair', function () {
    return view('ac.ac');
});
Route::get('/workerview', function () {
    // $chck = application::find($id);
    // return view('admin.workerview', compact('chck'));
    return view('admin.workerview');
});
// Route::get('/application', function () {
//     return view('applicworker');
// });
Route::get('/workers', function () {

    // $pl = DB::table('applications')->where('Category','=','Plumber')->get();
    $pl = application::get();
    // $worker = application::find($id); // Replace with your actual model and data fetching logic

    // return view('admin.workers', compact('worker'));

    return view('admin.workers', compact('pl'));
    return view('admin.workers');
});

Route::get('/approvedworkers', function () {
    return view('admin.approveddatail');
});
// worker login
Route::get('/workerlogin', function () {
    return view('workerlogin');
});

Route::get('/reviews', function () {

    return view('reviews');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/reviewget', function () {
    return view('worker.reviews');
});
Route::get('/service', function () {
    $service = service::get();
    return view('admin.services', compact('service'));
    return view('admin.services');
});
Route::get('/chack', function () {
    return view('admin.chack');
});
Route::get('/seeappoint', function () {
    return view('seeappoint');
});
Route::get('/appointmentdetail', function () {
    return view('admin.appointmentdetail');
});
Route::get('/workerappointmentdetail', function () {
    return view('worker.workerappointmentdetail');
});
Route::get('/confirmappointmentworker', function () {
    return view('worker.confirmappointment');
});
Route::get('/completedappointment', function () {
    $worker = auth()->guard('worker')->user();
    $confirmappointments = Appointment::where('workerid', $worker->id)->whereIn('status', ['processing', 'complete'])
    ->get();
   

    return view('worker.completedappointment', compact('confirmappointments'));
    // return view('worker.completedappointment');
});

Route::get('/appointmenttable', function () {
    $appointments = Appointment::with('user', 'worker')
            ->where('status', 'pending')
            ->get();

    // Return view or JSON response as needed
    return view('admin.appointmenttable', compact('appointments'));
    return view('admin.appointmenttable');
});
Route::get('/confirmappointment', function () {
    $appointments = Appointment::with('user', 'worker')
            ->where('status', 'Approved')
            ->get(); $appointments = Appointment::with('user', 'worker')->get();

    // Return view or JSON response as needed
    return view('admin.confirmappointment', compact('appointments'));
    return view('admin.confirmappointment');
});

Route::get('/emergency', function () {


    return view('emergency');
});
Route::get('/location', function () {

    return view('workerlocation');
});
Route::get('/emergencyform', function () {

    return view('emergencyform');
});
Route::get('/applywork', function () {

    return view('applywork');
});
Route::get('/chathelp', function () {

    return view('chathelp');
});


// Middleware

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
       
        if(Auth::User()->email == "sudaisahmad2514@gmail.com" || Auth::User()->password == "xiedplbtedrhjibo"){
            $service = service::get();
            $approved = ApprovedWorker::get();
            $emergency = emergency::get();
            $register = register::get();
            $complain = complain::get();
            $questions =UnansweredQuestion::where('is_answered', false)->get();
           
            return view('admin', compact('service','approved','emergency','register','complain','questions'));
            // $approved = ApprovedWorker::get();
            // return view('admin', compact('approved'));
            // return view('admin');
        }else{
            $service = service::get();
            return view('home', compact('service'));    
        }

        Route::get('/plumber', function () {
            return view('servicetamplate.plumber');
           
        });
       
       
    })->name('dashboard');
 
    // worker profile
Route::get('/profile', function () {

    return view('workerprofile');
});

});
Route::get('/user',[myController::class,('getdata')]);
Route::get('/approvedworkers',[WorkerController::class,('getdata')]);
Route::post('/cba',[myController::class,('insertdata')]);
Route::get('/workerview/{id}',[myController::class,('checkdata')]);
Route::get('/plumber',[WorkerController::class,('calldata')])->middleware('auth');
Route::post('/workers/{id}/approve',[WorkerController::class,('approve')])->name('workers.approve');
Route::post('/workers/{id}/reject',[WorkerController::class,('reject')])->name('workers.reject');
Route::post('/workerlogin',[WorkerController::class,('customlogin')]);
Route::get('/pro/{id}',[WorkerController::class,('getpro')]);
Route::get('/chack',[myController::class,('chackdata')]);
Route::get('/del/{id}',[myController::class,('delete')]);
Route::get('/upd/{id}',[myController::class,('update')]);
// Route::get('/user/id', 'WorkerController@fetchUserId');






Route::get('/carmechanic',[WorkerController::class,('calldata2')])->middleware('auth');
Route::get('/carpainter',[WorkerController::class,('calldata3')])->middleware('auth');
Route::get('/electrician',[WorkerController::class,('calldata4')])->middleware('auth');
Route::get('/painter',[WorkerController::class,('calldata5')])->middleware('auth');
Route::get('/acrepair',[WorkerController::class,('calldata6')])->middleware('auth');
Route::get('/delete/{id}',[WorkerController::class,('deletedata')])->middleware('auth');

// routes/appointment
Route::post('/appointment',[appointmentController::class,('create')]);
Route::post('/appointmenttable',[appointmentController::class,('gatdata')]);
Route::post('/appointmenttable',[appointmentController::class,('gatdata1')]);
Route::post('/cat',[myController::class,('catdata')]);
Route::get('/',[myController::class,('calldata')]);
Route::post('/ser',[myController::class,('insertservice')]);
Route::get('/service',[myController::class,('getservice')]);
Route::get('/appdelete/{id}',[WorkerController::class,('deleteappointment')]);

// Route::get('/accept/{id}', [WorkerController::class, 'acceptappointment'])->name('appointment.accept');
Route::get('/deleteservice/{id}',[myController::class,('deleteservice')]);
Route::get('/deleteservice1/{id}',[myController::class,('deleteservice1')]);
Route::get('/',[myController::class,('getservice2')]);
Route::get('/applicationworker',[admin::class,('calldata')]);
Route::get('/seeappoint',[admin::class,('getappointment')]);
// Route::get('/seeworkerappoint/{id}',[admin::class,('getworkerappointment')]);
Route::get('/worker/appointment/{appointment_id?}', [admin::class, 'getworkerappointment'])->name('worker.appointment');
Route::get('/appointmentdetail/{id}',[admin::class,('chackappointment')]);
Route::post('/appointment/{id}/accept',[admin::class,'acceptappointment'])->name('appointment.accept');
Route::get('/seedetail/{id}',[admin::class,('getdetail')]);
Route::post('/appointment/{id}/confirm',[admin::class,'confirm'])->name('appointment.confirm');
Route::get('/completed/{id}',[admin::class,('completed')]);



Route::middleware(['auth:worker'])->group(function(){
    Route::get('/workerdashboard',[admin::class,('dashboard')]);
    Route::get('/confirmappointmentworker',[admin::class,('dashboard1')]);
    Route::get('/completedappointment',[admin::class,('dashboard2')]);
    // Route::get('/workeradmin', [AdminController::class, 'workeradmin']);
});

Route::middleware(['auth'])->group(function(){
Route::post('appointments/{id}/complete',[admin::class,'complete'])->name('appointments.complete');
Route::get('reviews/create/{workerid}',[admin::class,'create'])->name('reviews.create');
Route::post('reviews', [admin::class, 'store'])->name('reviews.store');

});

Route::post('/logout1', [admin::class, 'logout1']);
Route::get('/reviewget',[admin::class,('getreview')]);

Route::get('/emergency-appointment',[appointmentController::class,'showCategories'])->name('emergency.appointment');

Route::post('/emergency-select-worker',[appointmentController::class,'selectWorker'])->name('emergency.selectWorker');
Route::post('/createemergency',[appointmentController::class,'emergency']);

Route::post('/workerregister',[appointmentController::class,'worker']);
Route::get('/applicationworker/{id}',[appointmentController::class,('workerid')]);

Route::post('/complain',[admin::class,'complain']);
Route::get('/complain/{id}',[admin::class,'delete']);



// Route::post('/book-appointment', [appointmentController::class, 'bookAppointment']);


// Web routes with session-based authentication
Route::middleware('auth:worker')->group(function () {
    // POST route to update worker's location
    Route::post('/update-worker-location', [WorkerController::class, 'updateWorkerLocation']);
    
    // Optionally: Get the worker's current location
  
});
Route::get('/location/{workerid}', [TrackingController::class, 'getWorkerLocation']);



// Route::get('/botman', [BotmanController::class, 'handle']);
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);


Route::get('/worker/{workerId}/appointments', [admin::class, 'getWorkerAppointments']);



// Route::post('/chat', [RasaController::class, 'chat']);
// Route::get('/dashboard', [admin::class, 'unansweredQuestions'])->name('admin.unanswered-questions');
Route::post('/admin/answer-question/{id}', [admin::class, 'answerQuestion'])->name('admin.answer-question');











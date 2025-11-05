<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApprovedWorker;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\TwilioService;

class WorkerController extends Controller
{
  protected $twilioService;

  public function __construct(TwilioService $twilioService) {
      $this->twilioService = $twilioService;
  }
  
  public function approve($id) {
      $worker = Application::find($id);
  
      if (!$worker) {
          return redirect()->back()->with('error', 'Worker not found');
      }
  
      // Use a database transaction to ensure atomicity
      DB::beginTransaction();
  
      try {
          // Create ApprovedWorker record
          ApprovedWorker::create([
              'Name' => $worker->Name,
              'PhoneNumber' => $worker->PhoneNumber,
              'password' => $worker->password,
              'confirmpassword' => $worker->confirmpassword,
              'age' => $worker->age,
              'city' => $worker->city,
              'state' => $worker->state,
              'Date' => $worker->Date,
              'Gender' => $worker->Gender,
              'Bio' => $worker->Bio,
              'Category' => $worker->Category,
              'profilePic' => $worker->profilePic,
              'FileUpload' => $worker->FileUpload,
              'role' => 'approved',
              'latitude' => $worker->latitude,
              'longitude' => $worker->longitude,
          ]);
  
          // Attempt to send the SMS
          $this->twilioService->sendSms($worker->PhoneNumber, 'Your Application has been Approved. Welcome to Fixit Online');
  
          // If SMS is successful, delete the worker record from the Application table
          $worker->delete();
  
          // Commit the transaction
          DB::commit();
  
          // Redirect back with success message
          return redirect('/workers')->with('success', 'Worker Approved and SMS sent Successfully');
          
      } catch (\Exception $e) {
          // Rollback the transaction in case of an error
          DB::rollBack();
  
          // Log the error for debugging
          Log::error('Failed to send SMS or approve worker: '.$e->getMessage());
  
          // Redirect back with error message
          return redirect()->back()->with('error', 'Failed to approve worker: '.$e->getMessage());
      }
  }
  
    public function reject($id){
        $worker = Application::find($id);
        if($worker){
            $worker->delete();
           
            return redirect('/workers');

        }


    }

    // approved workers get data
    public function getdata(){
        $approved = ApprovedWorker::get();
        return view('admin.approveddatail', compact('approved'));
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'login' => 'required',
        ]);

        $user = ApprovedWorker::where('PhoneNumber', $request->login)
                    ->Where('password', $request->password)
                    ->first();

        if ($user) {
            Auth::guard('worker')->login($user);
            return redirect('/workerdashboard');
        }
        Log::warning('Failed login attempt', ['login' => $request->login]);

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    //   public function calldata(){
    //     // $wk = DB::table('approved_workers')->where('Category','=','Plumber')->paginate(9);
    //     $wk = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
    //     ->select('approved_workers.*',
    //     DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Plumber')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);

       


    //     return view('servicetamplate.plumber',compact('wk'));

    //   }


    public function calldata(){
        // $wk = DB::table('approved_workers')->where('Category','=','Plumber')->paginate(9);
        $wk = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Plumber')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);

       


        return view('servicetamplate.plumber',compact('wk'));
      }
      public function calldata2(){
        // $cm = DB::table('approved_workers')->where('Category','=','Car Mechanic')->paginate(9);
        $cm = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Car Mechanic')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);
        return view('servicetamplate.carmechanic',compact('cm'));
      }

      public function calldata3(){
        // $cp = DB::table('approved_workers')->where('Category','=','Car Painter')->paginate(9);
        $cp = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Carpenter')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);
    
        return view('servicetamplate.carpainter',compact('cp'));
      }
      public function calldata4(){
        // $el = DB::table('approved_workers')->where('Category','=','Electrician')->paginate(9);
        $el = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Electrician')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);
        return view('servicetamplate.electrician',compact('el'));
      }
         public function calldata5(){
        // $pa = DB::table('approved_workers')->where('Category','=','Painter')->paginate(9);
        $pa = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Painter')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);
        return view('servicetamplate.painter',compact('pa'));
      }

      public function calldata6(){
        // $ar = DB::table('approved_workers')->where('Category','=','Ac Repair')->paginate(9);
        $ar = ApprovedWorker::with('reviews')->leftJoin('reviews','approved_workers.id','=','reviews.workerid')
        ->select('approved_workers.*',
        DB::raw('AVG(reviews.Rating) as average_rating'))->where('Category','Ac Repair')->groupBy('approved_workers.id')->orderByDesc('average_rating')->paginate(9);
        return view('servicetamplate.acrepair',compact('ar'));
      }

      public function deletedata(Request $req){
        $approved = ApprovedWorker::find($req->id);

        $approved->delete();
        return redirect('/approvedworkers')->with('success', 'Worker Deleted');
    }
public function getpro($id){
    // $pro = ApprovedWorker::find($id);
    $pro = ApprovedWorker::with('reviews')->find($id);

    return view('workerprofile', compact('pro'));

}
public function deleteappointment(Request $req){
$app = Appointment::find($req->id);
$app->delete();
return redirect('/appointmenttable')->with('success', 'Appointment Deleted');


}

    // Send approval notification email
        // Mail::raw('You are approved for working', function ($message) use ($worker) {
        //     $message->to($worker->Email)->subject('Approval Notification');
        // });

         // Mail::raw('Your Application Is Rejected', function ($message) use ($worker) {
            //     $message->to($worker->Email)->subject('Rejection Notification');
            // });


        // In WorkerController.php

public function updateWorkerLocation(Request $request)
{
    $validatedData = $request->validate([
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    // Assuming the worker is authenticated and uses a custom guard
    $workerId = auth('worker')->id();

    // Find the worker's current confirmed appointment
    $appointment = Appointment::where('workerid', $workerId)
                                ->where('status', 'confirmed') // Check for active appointments
                                ->first();

    if ($appointment) {
        // Update appointment with worker's location
        $appointment->latitude = $validatedData['latitude'];
        $appointment->longitude = $validatedData['longitude'];
        $appointment->save();

        return response()->json(['status' => 'success']);
    } else {
        return response()->json(['status' => 'error', 'message' => 'No active appointment found'], 404);
    }
}

        }  


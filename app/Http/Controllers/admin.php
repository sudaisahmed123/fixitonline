<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\cetegorie;
use App\Models\emergency;
use App\Models\Review;
use App\Models\complain;
use App\Models\UnansweredQuestion;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function dashboard()
    {
        $worker = auth()->guard('worker')->user();
        // if (!$worker) {
        //     return redirect()->route('login')->withErrors('You must be logged in to view your reviews.');
        // }
        $appointments = Appointment::where('workerid', $worker->id)->where('status', 'Approved')
        ->get();
        $emergency = emergency::where('Workerid', $worker->id)
        ->get();
       
    
        return view('worker.workeradmin', compact('appointments','emergency'));
    }
    public function dashboard1()
    {
        $worker = auth()->guard('worker')->user();
        $confirmappointments = Appointment::where('workerid', $worker->id)->where('status', 'confirmed')
        ->get();
       
    
        return view('worker.confirmappointment', compact('confirmappointments'));
    }
    public function dashboard2()
    {
        $worker = auth()->guard('worker')->user();
        $confirmappointments = Appointment::where('workerid', $worker->id)->whereIn('status', ['processing', 'complete'])
        ->get();
       
    
        return view('worker.completedappointment', compact('confirmappointments'));
    }
    public function logout1(){
        Auth::guard('worker')->logout();
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
    public function calldata(){
        $cat = cetegorie::get();
        return view('applicworker', compact('cat'));
    }
    public function workeradmin(){
        $worker = auth()->guard('worker')->user();
        $appointments = Appointment::where('workerid', $worker->id)->get();
       
    
        return view('worker.workeradmin', compact('appointments'));
    }
    public function getappointment()
    {
        
        $user = Auth::User();

        
        if (!$user) {
            
            return redirect()->route('login')->withErrors('You must be logged in to view your appointments.');
        }

      
        $appointments = Appointment::where('userid', $user->id)
        ->whereIn('status', ['Approved', 'confirmed','processing','complete'])
                                    ->get();

       
        return view('seeappoint', [
            'appointments' => $appointments,
            'worker' => $appointments->first()->worker ?? null 
        ]);
    }
    public function chackappointment($id)
    {
        $appointment = Appointment::find($id);
    
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
    
        
        $worker = $appointment->worker;
    
        return view('admin.appointmentdetail', [
            'appointment' => $appointment,
            'worker' => $worker,
        ]);
    }
    public function acceptappointment($id,Request $request){
        $accept = Appointment::find($id);
        if($accept){
          $accept->status='Approved';
          $accept->save();
          return redirect('/appointmenttable')->with('success','Appointment Approved Successfully.');
        }
        return redirect('/appointmenttable')->with('error','Appointment not found.');
      }
      public function getdetail($id)
      {
          $appointment = Appointment::find($id);
      
          if (!$appointment) {
              return redirect()->back()->with('error', 'Appointment not found');
          }
      
          
          $worker = $appointment->worker;
      
          return view('worker.workerappointmentdetail', [
              'appointment' => $appointment,
              'worker' => $worker,
              'latitude' => $appointment->latitude,
                'longitude' => $appointment->longitude,
          ]);
      }

      public function confirm($id,Request $request){
        $confirm = Appointment::find($id);
        if($confirm){
            $confirm->status = 'confirmed';
            $confirm->save();
            return redirect('/workerdashboard')->with('success','Appointment confirmed successfully');
        }
        return redirect('/workerdashboard')->with('error','Appointment not found');
        
      }

      public function completed($id){
        $complete = Appointment::find($id);
        if($complete){
            $complete->status = 'processing';
            $complete->save();
            return redirect('/confirmappointmentworker')->with('success','Appointment in a processing');
        }
        return redirect('/confirmappointmentworker')->with('success','Appointment not found');
      }


    //   public function getworkerappointment()
    //   {
          
    //     $worker = auth()->guard('worker')->user();
  
          
    //       if (!$worker) {
              
    //           return redirect()->route('login')->withErrors('You must be logged in to view your appointments.');
    //       }
  
        
    //       $appointments = Appointment::where('workerid', $worker->id)
    //       ->whereIn('status', ['Approved', 'confirmed','processing','complete'])
    //                                   ->get();
  
         
    //       return view('seeworkerappoint', [
    //           'appointments' => $appointments,
    //           'worker' => $appointments->first()->worker ?? null 
    //       ]);
    //   }
    public function getworkerappointment($appointment_id = null)
{
    $worker = auth()->guard('worker')->user();

    if (!$worker) {
        return redirect()->route('login')->withErrors('You must be logged in to view your appointments.');
    }

    if ($appointment_id) {
        // Retrieve the specific appointment by ID
        $appointment = Appointment::where('workerid', $worker->id)
                                   ->where('id', $appointment_id)
                                   ->whereIn('status', ['Approved', 'confirmed', 'processing', 'complete'])
                                   ->first();

        if (!$appointment) {
            return redirect()->route('seeworkerappoint')->withErrors('Appointment not found.');
        }

        return view('seeworkerappoint', [
            'appointments' => [$appointment], // Pass the specific appointment in an array
            'worker' => $appointment->worker ?? null
        ]);
    }

    // Retrieve all appointments if no specific appointment ID is provided
    $appointments = Appointment::where('workerid', $worker->id)
                                ->whereIn('status', ['Approved', 'confirmed', 'processing', 'complete'])
                                ->get();

    return view('seeworkerappoint', [
        'appointments' => $appointments,
        'worker' => $appointments->first()->worker ?? null 
    ]);
}


      public function complete($id) {
        $appointment = Appointment::findOrFail($id);
    
        // Check if the current user is authorized to complete the appointment
        if ($appointment->userid != auth()->id()) {
            return redirect('/seeappoint')
                ->with('error', 'You are not authorized to complete this appointment')
                ->setStatusCode(403);
        }
    
        // Mark appointment as complete and save
        $appointment->status = 'complete';
        $appointment->save();
    
        // Redirect to the review creation page with a success message
        return redirect()->route('reviews.create', ['workerid' => $appointment->workerid])
            ->with('success', 'Appointment marked as complete. You can now review the worker.');
    }
    
    public function create($workerid) {
        return view('reviews', compact('workerid'));
    }
    
    public function store(Request $request) {
        // Validate the review data
        $request->validate([
            'ReviewName' => 'required',
            'ReviewEmail' => 'required',
            'Rating' => 'required|integer|between:1,5',
            'ReviewComment' => 'required',
        ]);
    
        // Create a new review
        Review::create([
            'userid' => auth()->id(),
            'workerid' => $request->workerid,
            'ReviewName' => $request->ReviewName,
            'ReviewEmail' => $request->ReviewEmail,
            'Rating' => $request->Rating,
            'ReviewComment' => $request->ReviewComment,
        ]);
    
        // Redirect to appointments with a success message
        return redirect('/seeappoint')->with('success', 'Review submitted successfully.');
    }

    public function getreview(){
        $worker = auth()->guard('worker')->user();
        $review = Review::where('workerid',$worker->id)->get();

        return view('worker.reviews',compact('review'));
    }
    
public function complain(Request $req){
    $table = new complain();
    $table->name = $req->name;
    $table->email = $req->email;
    $table->phone = $req->phone;
    $table->subject = $req->subject;
    $table->massage = $req->massage;
    $table->save();
    return redirect()->back()->with('success','Your massage was registerd');

}

public function delete(Request $req){
    $table = complain::find($req->id);
    $table->delete();
    return redirect()->back()->with('success','Deleted succesfully');
}

public function getWorkerAppointments($workerId)
{
    // Fetch appointments where status is not "complete"
    $appointments = Appointment::where('workerid', $workerId)
                                ->where('status', '!=', 'complete') // Filter out completed appointments
                                ->pluck('date')
                                ->toArray();

    // Return the dates as a JSON response
    return response()->json($appointments);
}

public function unansweredQuestions()
{
    $questions = \App\Models\UnansweredQuestion::where('is_answered', false)->get();
    return view('admin', compact('questions'));
}

public function answerQuestion(Request $request, $id)
{
    $question = UnansweredQuestion::findOrFail($id);
    $question->answer = $request->input('answer');
    $question->is_answered = true;
    $question->save();

    return redirect()->back()->with('success', 'Answered created successfully!');
}

}


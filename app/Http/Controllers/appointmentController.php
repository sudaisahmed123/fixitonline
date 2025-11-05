<?php

namespace App\Http\Controllers;
use App\Models\appointment;
use App\Models\approvedWorker;
use App\Models\User;
use App\Models\cetegorie;
use App\Models\emergency;
use App\Models\register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class appointmentController extends Controller
{
      public function create(Request $req)
    {
       
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You need to be logged in to create an appointment.');
        }

       
        $appointment = new Appointment();
        $appointment->fullName = $req->fullName;
        $appointment->phoneNumber = $req->phoneNumber;
        $appointment->email = $req->email;
        $appointment->date = $req->date;
        $appointment->time = $req->time;
        $appointment->area = $req->area;
        $appointment->city = $req->city;
        $appointment->state = $req->state;
        $appointment->code = $req->code;
        $appointment->userid = Auth::id();
        $appointment->workerid = $req->worker;
        $appointment->latitude = $req->latitude;
        $appointment->longitude = $req->longitude;
       


        $appointment->save();
        Mail::raw("Your appointment has been successfully registered. Please wait while the admin reviews and approves your appointment. Then click see your appointment button in website", function ($message) use ($appointment) {
          $message->to($appointment->email)->subject('Appointment Notification');
      });
        return redirect('/')->with('success','Your appointment was successfully registered');
    }

    public function getdata()
    {
        $appointments = Appointment::with('user', 'worker')
            ->where('status', 'pending')
            ->get();
           
        
        return view('admin.appointmenttable', compact('appointments'));
    }
    public function getdata1()
    {
        $appointments = Appointment::with('user', 'worker')
            ->where('status', 'Approved')
            ->get();
           
        
        return view('admin.appointmenttable', compact('appointments'));
    }

public function showCategories()
{
    // Fetch categories from the Category table
    $categories = cetegorie::all();

    // Fetch unique cities and states from the ApprovedWorker table
    $cities = ApprovedWorker::select('city')->distinct()->get();
    $states = ApprovedWorker::select('state')->distinct()->get();

    // Pass categories, cities, and states to the view
    return view('emergency', compact('categories', 'cities', 'states'));
}


  public function selectWorker(Request $request)
  {
      $category = $request->input('category');
      $city = $request->input('city');
      $state = $request->input('area'); // Assuming you want to use 'area' instead of 'state'
  
      // Ensure that the category, city, and area are provided
      if ($category && $city && $state) {
          // Fetch the worker based on category, city, and area
          $worker = ApprovedWorker::where('Category', $category)
              ->where('city', $city)
              ->where('state', $state) // Use 'area' as per your form
              ->whereDoesntHave('appointments')
              ->first();
  
          if ($worker) {
              return view('emergencyform', compact('worker'));
          } else {
              return redirect()->back()->with('error', 'No available workers for this category and location');
          }
      } else {
          return redirect()->back()->with('error', 'Please select a category, city, and area');
      }
  }
  
  public function emergency(Request $req){
    $table = new emergency();
   $table->name = $req->name;
   $table->number = $req->number;
   $table->date = $req->date;
   $table->time = $req->time;
   $table->notes = $req->notes;
   $table->Workerid = $req->worker_id;
   $table->Userid = Auth::id();
   $table->save();
   return redirect('/')->with('success','Your Appointment Booked Successfully');
  }


  public function worker(Request $req){
    $table= new register();
    $table->name = $req->name;
    $table->number = $req->number;
    $table->cnic = $req->cnic;
    $table->city = $req->city;
    $table->latitude = $req->latitude;
    $table->longitude = $req->longitude;

    $table->save();
    return redirect('/')->with('success','Registration successfully');
  }

  public function workerid($id){
    $worker = register::find($id);
    $cat = cetegorie::get();
    return view('applicworker', compact('worker','cat'));
  }
}



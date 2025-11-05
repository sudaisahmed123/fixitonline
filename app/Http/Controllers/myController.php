<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\application;
use App\Models\cetegorie;
use App\Models\service;
use App\Models\register;


use Illuminate\Http\Request;

class myController extends Controller
{
    public function getdata(){
        $sd = DB::table('users')->where('role','=','0')->get();
        //  $pl = DB::table('applications')->where('Category','=','Plumber')->get();
        $pl = application::get();

        return view('admin.users', compact('sd','pl'));
    }
    public function insertdata(Request $req) {
        // Assuming the worker ID is passed in the request
        $workerId = $req->workerId; // This should be set in your form
    
        // Create a new application record
        $table = new application();
        $table->Name = $req->Name;
        $table->PhoneNumber = $req->PhoneNumber;
        $table->password = $req->password;
        $table->confirmpassword = $req->confirmpassword;
        $table->city = $req->city;
        $table->state = $req->state;
        $table->Date = $req->Date;
        $table->age = $req->age;
        $table->Gender = $req->Gender;
        $table->Category = $req->Category;
        $table->Bio = $req->Bio;
        $table->latitude = $req->latitude;
        $table->longitude = $req->longitude;
    
        // Handle profile picture upload
        if ($req->hasFile('profilePic')) {
            $profileImage = $req->file('profilePic');
            $profileImageName = rand() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('userimages'), $profileImageName);
            $table->profilePic = $profileImageName;
        }
    
        // Handle file upload
        if ($req->hasFile('FileUpload')) {
            $uploadedFile = $req->file('FileUpload');
            $uploadedFileName = rand() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('useruploads'), $uploadedFileName);
            $table->FileUpload = $uploadedFileName;
        }
    
        // Save the new application record
        $table->save();
    
        // Delete the worker record from the register table
        if ($workerId) {
            $workerRecord = register::find($workerId);
            if ($workerRecord) {
                $workerRecord->delete();
            }
        }
    
        return redirect('/dashboard')->with('success', 'Worker added successfully and removed from register');
    }
        public function checkdata($id){
        $chck = application::find($id);
        return view('admin.workerview', compact('chck'));

    }
    public function catdata(Request $req){
        $categorie = new cetegorie();
        $categorie->Categorie = $req->Categorie;
        $categorie->save();
        return redirect('/chack');
    }
    public function calldata(){
        $categories = cetegorie::get();
        return view ('applicworker', compact('categories'));
    }

    public function chackdata(){
        $categories = cetegorie::get();
        return view ('admin.chack', compact('categories'));
    }
    public function delete(Request $req){
        $categories = cetegorie::find($req->id);
        $categories->delete();
        return redirect('/chack')->with('success', 'Category deleted successfully.');
    }
    public function insertservice(Request $req){
        $service = new service();
        $service->name = $req->name;
        $service->des = $req->des;
        $service->link = $req->link;
        $serviceImage = $req->file('image');
        $serviceImageName = rand() . '.' . $serviceImage->getClientOriginalExtension();
        $serviceImage->move(public_path('serviceimages'), $serviceImageName);
        $service->image = $serviceImageName;
        $serviceImage = $req->file('icon');
        $serviceImageName = rand() . '.' . $serviceImage->getClientOriginalExtension();
        $serviceImage->move(public_path('serviceicons'), $serviceImageName);
        $service->icon = $serviceImageName;
        $service->save();
        return redirect('/service')->with('success', 'Service Added Successfully');

    }
    public function getservice(){
        $service = service::get();
        return view('admin.services', compact('service'));
    }
    public function deleteservice(Request $req){
        $ser = service::find($req->id);
        $ser->delete();
        return redirect('/dashboard')->with('success', 'Service deleted successfully.');
    }
    public function deleteservice1(Request $req){
        $ser = service::find($req->id);
        $ser->delete();
        return redirect('/service')->with('success', 'Service deleted successfully.');
    }
    public function getservice2(){
        $service = service::get();
        return view('home', compact('service'));
    }


}



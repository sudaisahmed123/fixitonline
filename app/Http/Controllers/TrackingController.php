<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class TrackingController extends Controller
{
    public function getWorkerLocation($workerId)
    {
        $location = Appointment::where('userid', $workerId)->first();

        if ($location) {
            return view('workerlocation', [
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
            ]);
        } else {
            return response()->json(['error' => 'Location not found'], 404);
        }
    }
}

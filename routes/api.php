<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\TrackingController;

Route::get('/user', function (Request $request) {
    return $request->user();

    Route::post('/update-worker-location', [WorkerController::class, 'updateWorkerLocation']);

    // Route to fetch worker's current location (GET request)
    Route::get('/get-worker-location/{workerId}', [TrackingController::class, 'getWorkerLocation']);
})->middleware('auth:sanctum');



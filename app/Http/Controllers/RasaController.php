<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RasaController extends Controller
{
    public function chat(Request $request)
    {
        // Get the user message from the request
        $message = $request->input('message');

        // Send the message to Rasa
        $response = Http::post('http://localhost:5005/webhooks/rest/webhook', [
            'sender' => 'user',
            'message' => $message,
        ]);

        // Return the response from Rasa
        return response()->json($response->json());
    }
}


<?php
namespace App\Services;

use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;
use Illuminate\Support\Facades\Log;

class TwilioService
{
    protected $client;

    
    public function __construct() {
        $this->client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    
    public function sendSms($to, $message)
    {
        try {
            $this->client->messages->create(
                $to,
                [
                    'from' => env('TWILIO_PHONE_NUMBER'), 
                    'body' => $message
                ]
            );
            dd('hfyfvhvj');
            Log::info('SMS sent to ' . $to);
        } catch (TwilioException $e) {
            Log::error('Twilio Error: ' . $e->getMessage());
        }
    }
}

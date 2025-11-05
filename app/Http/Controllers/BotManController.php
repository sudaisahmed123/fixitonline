<?php

namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Middleware\Dialogflow;
use BotMan\Drivers\Web\WebDriver;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use App\Models\User;
use SimilarText;

class BotManController extends Controller
{
    // protected $botman;
    // public function __construct()
    // {
    //     $this->botman = BotManFactory::create(config('botman'));
    // }
    // public function handle()
    // {
    //     $this->botman->hears('Hello|Hi|Hey', function (BotMan $bot) {
    //         $bot->reply('Hello! I am here to help you with our technicians. You can ask me about plumbers, electricians, AC repair, car painting, and more. How can I assist you today?');
    //     });
    //     $this->botman->hears('Technician ki availability kaise check karein|Technician keasy deakhen|Technician keasy book kren|Technician ko keasy order kren| kia technicians availabe hen', function (BotMan $bot) {
    //         $bot->reply('Aap technician ke profile par jaakar unki availability dekh sakte hain. Agar ap ko plumber Electrician etc neend h To ap ko in k page men jana ho ga navbar men home p cursor le k jaen ap ko pages dikh jaen gy. Hamari website par aapko technician ke available slots milenge jahan se aap appointment book kar sakte hain.');
    //     });

    //     $this->botman->hears('Technician ko hire karne ka process kya hai', function (BotMan $bot) {
    //         $bot->reply('Aap hamari website par Services men dekh sakte hain, aur apne requirements ke hisaab se unhe hire kar sakte hain. Bas appointment book karein aur hum aapko appointment confirm karne ke liye contact karenge.');
    //     });
    
    //     $this->botman->hears('plumber|kia ap k pas plumber he', function (BotMan $bot) {
    //         $bot->reply('We have experienced plumbers available. You can book an appointment or ask for more details about our plumbing services.');
    //     });
    
    //     $this->botman->hears('electrician|electrical', function (BotMan $bot) {
    //         $bot->reply('Our electricians are ready to assist you with any electrical issues. You can book an appointment or inquire about our electrical services.');
    //     });
    
    //     $this->botman->hears('AC repair|air conditioning', function (BotMan $bot) {
    //         $bot->reply('We provide AC repair services. Let us know if you need to book an appointment or need more information.');
    //     });
    
    //     $this->botman->hears('car painting|painting', function (BotMan $bot) {
    //         $bot->reply('Our car painting services are top-notch. You can book an appointment or ask for more details.');
    //     });

    //     // Handle appointment status queries
    //     $this->botman->hears('appointment status|appointment check|Kia meri appointment booked he|Kia meri appointment hui', function (BotMan $bot) {
    //         if (!Auth::check()) {
    //             $bot->reply('Please log in to check your appointment status.');
    //             return;
    //         }

    //         $user = Auth::User(); // Get authenticated user
    //         $appointments = Appointment::where('userid', $user->id)->get();

    //         if ($appointments->isEmpty()) {
    //             $bot->reply('You do not have any appointments scheduled.');
    //         } else {
    //             foreach ($appointments as $appointment) {
    //                 $bot->reply("Appointment with {$appointment->fullName}, Category: {$appointment->worker->Category} is scheduled for {$appointment->date} at {$appointment->time}. Status: {$appointment->status}");
    //             }
    //         }
    //     });
    //     $this->botman->hears('book appointment|schedule appointment', function (BotMan $bot) {
    //         $bot->reply('To book an appointment, please provide details about the service you need and your preferred date and time.');
    //         // You can add more logic here to handle the appointment booking process
    //     });

    //     // Fallback for unrecognized input: Show suggestions only when input is not recognized
    //     $this->botman->fallback(function (BotMan $bot) {
    //         $bot->reply("Sorry, I didn't understand that. Here are some common questions you can ask:");

    //         // Show suggestions using buttons
    //         $this->suggestQuestions($bot);
    //     });

    //     // Start listening to the inputs
    //     $this->botman->listen();
    // }

    // // Function to show common suggestions to the user
    // private function suggestQuestions(BotMan $bot)
    // {
    //     // Define a list of common questions
    //     $questions = [
    //         'Technician keasy book kren',
    //         'kia ap k pas plumber he',
    //         'Kia meri appointment booked he',
    //         'Electrician ki services kia hain',
    //         'AC repair services ke details',
    //         'Car painting services ke bare mein',
    //         'Appointment status kaise check karein',
    //         'Book appointment kaise karein'
    //     ];

    //     // Build a list of buttons for suggestions
    //     $question = Question::create('Here are some common questions you can ask:')
    //         ->addButtons([
    //             Button::create($questions[0])->value($questions[0]),
    //             Button::create($questions[1])->value($questions[1]),
    //             Button::create($questions[2])->value($questions[2]),
    //             Button::create($questions[3])->value($questions[3]),
    //             Button::create($questions[4])->value($questions[4]),
    //             Button::create($questions[5])->value($questions[5]),
    //             Button::create($questions[6])->value($questions[6]),
    //             Button::create($questions[7])->value($questions[7]),
    //         ]);

    //     // Send the question with the buttons to the user
    //     $bot->reply($question);
    // }

    protected $botman;

    public function __construct()
    {
        $this->botman = BotManFactory::create(config('botman'));
    }
    
    public function handle()
    {
        $botman = app('botman');
    
        $botman->hears('{message}', function($bot, $message) {
            // Check if the user is asking about appointment status
            if (strpos(strtolower($message), 'appointment') !== false || 
                strpos(strtolower($message), 'status') !== false) {
                    
                // Check if the user is authenticated
                if (!Auth::check()) {
                    $bot->reply('Please log in to check your appointment status.');
                    return;
                }
    
                $user = Auth::user(); // Get authenticated user
                $appointments = Appointment::where('userid', $user->id)->get();
    
                if ($appointments->isEmpty()) {
                    $bot->reply('You do not have any appointments scheduled.');
                } else {
                    foreach ($appointments as $appointment) {
                        $bot->reply("Appointment with {$appointment->fullName}, Category: {$appointment->worker->Category} is scheduled for {$appointment->date} at {$appointment->time}. Status: {$appointment->status}");
                    }
                }
                return; // Exit the function here to prevent further processing
            }
    
            // Attempt to find a similar question in the database
            $this->handleUserQuestion($bot, $message);
        });
    
        $botman->listen();
    }
    
    private function handleUserQuestion($bot, $userMessage)
    {
        // Fetch all unanswered questions from the database
        $questions = \App\Models\UnansweredQuestion::all();
        $bestMatch = null;
        $highestSimilarity = 0;
    
        // Check for the best matching question
        foreach ($questions as $question) {
            similar_text(strtolower($userMessage), strtolower($question->question), $percent);
    
            // Update the best match if the similarity percentage is higher
            if ($percent > $highestSimilarity) {
                $highestSimilarity = $percent;
                $bestMatch = $question;
            }
        }
    
        // Determine if a close enough match was found
        if ($highestSimilarity >= 70) { // You can adjust this threshold as needed
            $bot->reply($bestMatch->answer); // Respond with the answer from the database
        } else {
            // If no close match was found, save the question
            \App\Models\UnansweredQuestion::create([
                'question' => $userMessage,
            ]);
            $bot->reply("Our service is currently busy. Your question has been recorded and will be answered soon.");
        }
    }
    
    

}

    


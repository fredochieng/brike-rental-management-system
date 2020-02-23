<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\AfricaTalking;
use App\Models\Message;
use Carbon\Carbon;

class SendSMSJob {
    use Dispatchable, Queueable;

    /**
    * Create a new job instance.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /**
    * Execute the job.
    *
    * @return void
    */

    public function handle() {
        $message_status = 1;
        $messages = Message::getMessages()->where( 'message_status', $message_status );

        $current_date = Carbon::now();
        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();
        $shortCode = AfricaTalking::getShortCode();
        $current_time = Carbon::now( 'Africa/Nairobi' );

        // Initialize the SDK
        $AT = new AfricasTalking( $username, $apiKey );

        // Get the SMS service
        $sms = $AT->sms();

        if ( count( $messages ) > 0 ) {
            foreach ( $messages as $key => $value ) {
                // Set your shortCode or senderId
                $from = $shortCode;
                // Set the numbers you want to send to in international format
                $recipients = $value->phone_no;

                // Set your message
                $message = $value->message;

                try {
                    // Thats it, hit send and we'll take care of the rest
            $result = $sms->send( [
                'to'      => $recipients,
                'message' => $message,
                'from' => $from
            ] );

             $update_message = array(
                    'message_status' => 2,
                    'sent_at' => $current_time
                );
                $update_message_status = Message::where( 'id', $value->id )->update( $update_message );
            
           print_r( $result );
        } catch ( Exception $e ) {
            echo 'Error: '.$e->getMessage();
                }
            }
        }
    }
}

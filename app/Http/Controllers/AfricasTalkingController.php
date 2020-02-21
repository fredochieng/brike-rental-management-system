<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\AfricaTalking;
use App\Models\MonthlyPayment;
use DB;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;

class AfricasTalkingController extends Controller {
    public function sendSMS() {

        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();

        // Initialize the SDK
        $AT = new AfricasTalking( $username, $apiKey );

        // Get the SMS service
        $sms = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = '+254708823158,+254708405346';

        // Set your message
        $message = 'Hello dear client. This is a test message from Fredrick';

        // Set your shortCode or senderId
        $from = '16967';

        try {
            // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from' => $from
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
    }

    public function fetchMessages() {
        // Set your app credentials
        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();

        // Initialize the SDK
        $AT       = new AfricasTalking( $username, $apiKey );

        // Get the sms service
        $sms      = $AT->sms();

        // Our API will return 100 messages at a time back to you
        // starting with what you currently believe is the lastReceivedId.
        // Specify 0 for the first time you access the method
        // and the ID of the last message we sent you on subsequent calls
        $lastReceivedId = 'ATXid_4e44375d51101fa0e411c981f63b095d';

        try {
            //Fetch all messages using a loop
            do {
                $messages = $sms->fetchMessages( [
                    'lastReceivedId' => $lastReceivedId
                ] );

                foreach ( $messages as $message ) {
                    print_r( $message );

                    // Reassign the lastReceivedId
                    $lastReceivedId = $message->id;
                }
            }
            while( count( $results ) > 0 );

            // $messages = $sms->fetchMessages();
            // dd( $messages );

            // NOTE: Be sure to save the lastReceivedId for next time
        } catch ( Exception $e ) {
            echo 'Error: '.$e->getMessage();
        }
    }

    public function getBalance() {
        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();
        $balance = AfricaTalking::getBalance( $username, $apiKey );
        dd( $balance );
    }

    public function sendRentPaymentReminderSMS() {
           $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'payment_status', 3 );

             $current_date = Carbon::now();
             $current_date = new DateTime( $current_date );
             $current_date = $current_date->format( 'M Y' );

             $payment_status = 3;

           $rent_trackers = DB::table( 'tenant_monthly_payments' )->select(
                    DB::raw( 'tenant_monthly_payments.id as room_id' ),
                    DB::raw( 'tenant_monthly_payments.id as track_id' ),
                    DB::raw( 'tenant_monthly_payments.payment_status' ),
                    DB::raw( 'tenant_monthly_payments.period' ),
                    DB::raw( 'tenant_monthly_payments.balance_due' ),
                    DB::raw( 'tenant_monthly_payments.rent_amount' ),
                    DB::raw( 'tenant_monthly_payments.amount_paid' ),
                    DB::raw( 'rent_payment_status.id' ),
                    DB::raw( 'rooms.id' ),
                    DB::raw( 'rooms.property_id' ),
                    DB::raw( 'rooms.room_no' ),
                    DB::raw('room_assignments.room_id as assign_room_id'),
                    DB::raw('room_assignments.tenant_id'),
                    DB::raw('tenants.id as t_id'),
                    DB::raw('tenants.t_phone'),
                    DB::raw('tenants.t_name'),
                    DB::raw( 'properties.id as prop_id' ),
                    DB::raw( 'properties.prop_name' )
          )
                ->leftJoin( 'rent_payment_status', 'tenant_monthly_payments.payment_status', 'rent_payment_status.id' )
                ->leftJoin( 'rooms', 'tenant_monthly_payments.room_id', 'rooms.id' )
                ->leftJoin( 'room_assignments', 'tenant_monthly_payments.room_id', 'room_assignments.room_id' )
                ->leftJoin( 'tenants', 'room_assignments.tenant_id', 'tenants.id' )
                ->leftJoin( 'properties', 'rooms.property_id', 'properties.id' )
                ->where('tenant_monthly_payments.period', $current_date)
                ->where('tenant_monthly_payments.payment_status', $payment_status)
                ->orderBy( 'tenant_monthly_payments.id', 'asc' )->get();
                
                 $rent_trackers->map(function ($item) {

            
            $item->message = 'Hello '. $item->t_name. ', kindly pay your rent for '. $item->period.
            '. Rent amount Kshs '. $item->balance_due. '. Please pay Kshs '. $item->balance_due.'.'.
            ' to Paybill 867643 Account Number '. $item->room_no .'.'.
            ' Please ignore this message if you have already paid. Thank you';
            return $item;
        });

        echo "<pre>";
        print_r( $rent_trackers );
        exit;
                

                // foreach ($rent_trackers as $key => $value) {
                //     dd($value);
                // }

               // foreach ($rent_trackers as $key => $value) {
                    $tenants_phones = json_decode(json_encode($rent_trackers), true);
                   $to = array_column($tenants_phones, 't_phone');
                $to =  implode(",", $to);
               // }

             //  dd($to);


        $username = AfricaTalking::getUsername();
        $apiKey   = AfricaTalking::getAPIKey();

        // Initialize the SDK
        $AT = new AfricasTalking( $username, $apiKey );

        // Get the SMS service
        $sms = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = $to;

        // Set your message
        $message = 'Hello Fredrick. This is to notify you that you need to clear your February rent of KES 10, 000 by 05/02/2010';
        $message = $rent_trackers[0]->message;

        // Set your shortCode or senderId
        $from = '16967';

              try {
            // Thats it, hit send and we'll take care of the rest
            $result = $sms->send( [
                'to'      => $recipients,
                'message' => $message,
                'from' => $from
            ] );

            print_r( $result );
        } catch ( Exception $e ) {
            echo 'Error: '.$e->getMessage();
        }

    }
}

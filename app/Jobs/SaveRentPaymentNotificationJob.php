<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\MonthlyPayment;
use App\Models\Message;
use DB;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;

class SaveRentPaymentNotificationJob {
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
        $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'payment_status', 3 );
        $current_date = Carbon::now();
        $current_date = new DateTime( $current_date );
        $current_date = $current_date->format( 'M Y' );

        $payment_status = 3;
        $is_vacant = 0;
        $sms_reminder_sent = 0;

        $rent_trackers = MonthlyPayment::getTracksForSMS()
        ->where( 'period', $current_date )
        ->where( 'payment_status', $payment_status )
        ->where( 'sms_reminder_sent', $sms_reminder_sent )
        ->where( 'is_vacant', $is_vacant );

        if ( count( $rent_trackers ) > 0 ) {

            foreach ( $rent_trackers as $key => $value ) {

                $message = new Message();
                $message_title = 'Rent Payment Reminder';
                $message->message_title = $message_title;
                $message->message = $value->message;
                $message->phone_no = $value->t_phone;

                $message->save();

                $update_track = array(
                    'sms_reminder_sent' => 1
                );
                $update_sms_reminder_sent = MonthlyPayment::where( 'id', $value->track_id )->update( $update_track );
            }
        }

        // foreach ( $rent_trackers as $key => $value ) {
        //     dd( $value );
        // }

        // foreach ( $rent_trackers as $key => $value ) {
        //     $tenants_phones = json_decode( json_encode( $rent_trackers ), true );
        //    $to = array_column( $tenants_phones, 't_phone' );
        // $to =  implode( ',', $to );
        // }

    }
}

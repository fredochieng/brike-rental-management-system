<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\RoomAssignment;
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

                $room_tennats_count = count( RoomAssignment::all()->where( 'room_id', $value->room_id )->where( 'r_end_date', '' ) );

                /** Make sure category 1 is hostels */
                if ( $value->category_id == 1 ) {
                    $message_body = 'Hello '. $value->tenant_name. ', kindly pay your rent for '. $value->period.'.'.
                    ' Rent amount Kshs '. $value->bal_due_hostel. '. Please pay Kshs '. $value->bal_due_hostel.'.'.
                    ' to Paybill 867643 Account Number '. $value->room_no .'.'.
                    ' Please ignore this message if you have already paid. Thank you';
                } else {

                    $message_body = 'Hello '. $value->tenant_name. ', kindly pay your rent for '. $value->period.'.'.
                    ' Rent amount Kshs '. $value->balance_due. '. Please pay Kshs '. $value->balance_due.'.'.
                    ' to Paybill 867643 Account Number '. $value->room_no .'.'.
                    ' Please ignore this message if you have already paid. Thank you';
                }

                $message = new Message();
                $message_title = 'Rent Payment Reminder';
                $message->message_title = $message_title;
                $message->message = $message_body;
                $message->phone_no = $value->t_phone;

                $message->save();

                $update_track = array(
                    'sms_reminder_sent' => 1
                );
                $update_sms_reminder_sent = MonthlyPayment::where( 'id', $value->track_id )->update( $update_track );
            }
        }
    }
}

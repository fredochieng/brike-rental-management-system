<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Transaction;
use App\Models\MonthlyPayment;

class ProcessPaymentsJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
    * Create a new job instance.
    *
    * @return void
    */
    private $date;

    public function __construct( $date = null ) {
        if ( $date == null ) {
            $date = Carbon::now();
        }
        $this->date = $date;
    }

    /**
    * Execute the job.
    *
    * @return void
    */

    public function handle() {
        $today = $this->date->toDateString();

        $transactions = Transaction::getPayments()->where( 'cron_processed', '=', 0 )->first();

        // echo '<pre>';
        // print_r( $transactions );
        // exit;

        // $monthly_payments = MonthlyPayment::getMonthlyPaymentsTrack();
        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();
        Log::info( '*************************************** TRANSACTION BATCH PROCESSING STARTED AT: ' .$now. ' ********************************************' );
        //foreach ( $transactions as $key => $value ) {
        $transaction_id = $transactions->transaction_id;
        $t_phone = $transactions->t_phone;
        $room_id = $transactions->room_id;

        $trans_amount = $transactions->trans_amount;

        if ( !empty( $room_id ) ) {

            $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->whereIn( 'payment_status', [2, 3] );
            //dd( $monthly_track );

            foreach ( $monthly_track as $key => $value ) {
                if ( $value->pay_status == 2 ) {

                    dd( $value );
                    dd( 'fredrick' );
                    $rent_amount = $value->rent_amount;
                    $amount_paid = $value->amount_paid;
                    $balance_due = $value->balance_due;
                    $new_amount_paid = $amount_paid + $trans_amount;
                    $new_balance_due = $balance_due - $trans_amount;

                    if ( $new_amount_paid > $rent_amount ) {
                        dd( 'carry forward the overpayment' );
                    } elseif ( $new_amount_paid == $rent_amount ) {
                        $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->where( 'pay_status', 2 )->first();
                        $track_id = $monthly_track->track_id;

                        $update_track = MonthlyPayment::where( 'id', $track_id )->update( [
                            'amount_paid' => $new_amount_paid,
                            'balance_due' => $new_balance_due,
                            'payment_status' => 1
                        ] );

                        dd( 'rent paid fully' );
                    } elseif ( $new_amount_paid < $rent_amount ) {
                        $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->where( 'payment_status', 2 )->first();
                        $update_track = MonthlyPayment::where( 'id', $track_id )->update( [
                            'amount_paid' => $new_amount_paid,
                            'balance_due' => $new_balance_due
                        ] );
                        dd( 'rent partially paid' );
                    }
                    // dd( $new_amount_paid );
                } elseif ( $value->pay_status == 3 ) {
                    dd( 'christine' );
                }
            }

            // $update_track = Transaction::where( 'id', $transaction_id )->update( [
            //     'cron_processed' => 1
            // ] );

            /** Log the action in the logs file */

            Log::info( 'Transaction processing for : '.$transactions->trans_id . ' successful. Transaction details-> '. json_encode( $transactions->trans_id ) .' at '.$now );

            // echo '<pre>';
            // print_r( $transactions );
            // exit;
        } else {
            Log::error( 'Transaction processing for : '.$transactions->trans_id . ' failed. Transaction details----> '. json_encode( $transactions->trans_id ) .' at '.$now );
        }
        //  }
        Log::info( '*************************************** TRANSACTION BATCH PROCESSING ENDED AT: ' .$now. ' ********************************************' );

    }
}

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

        $transactions = Transaction::getPayments()->where( 'cron_processed', '=', 0 )->where('trans_confirmed', '=', 1)->first();

        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();
        Log::info( '*************************************** TRANSACTION BATCH PROCESSING STARTED AT: ' .$now. ' ********************************************' );

        if ( !empty( $transactions ) ) {
            $transaction_id = $transactions->transaction_id;
            $t_phone = $transactions->t_phone;
            $room_id = $transactions->room_id;

            $trans_amount = $transactions->trans_amount;

            if ( !empty( $room_id ) ) {

                $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->whereIn( 'payment_status', [2, 3] )->first();

                if ( !empty( $monthly_track ) ) {
                    /** Checks to make sure tenant monthly payment track exists
                    * This can be achieved by running a cron job to auto-populate the records
                    */

                    $rent_amount = $monthly_track->rent_amount;
                    $amount_paid = $monthly_track->amount_paid;
                    $balance_due = $monthly_track->balance_due;
                    $new_amount_paid = $amount_paid + $trans_amount;
                    $new_balance_due = $balance_due - $trans_amount;

                    /** The excess amount that will be carried forward to the next month
                    * in case of excess payment by the client
                    */
                    $amount_cf = $trans_amount - $balance_due;
                    $cf_months =  $amount_cf / $rent_amount ;

                    $cf_months = sprintf( '%.1f', $cf_months );
                    $less_cf_amount = $amount_cf - $rent_amount * floor( $cf_months );

                    if ( $new_amount_paid > $rent_amount ) {
                        /** Perform over payment actions */
                        $track_id = $monthly_track->track_id;

                        $update_track = MonthlyPayment::where( 'id', $track_id )->update( [
                            'amount_paid' => $rent_amount,
                            'balance_due' => 0,
                            'payment_status' => 1
                        ] );

                        /** Get room's next monthly payment to be updated with the overpayment */
    
                    $next_monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->where( 'payment_status', 3 );
    
                    if ( count( $next_monthly_track ) == 0 ) {
                        $insert_monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->last();
                        dd($insert_monthly_track);
                    } else {
                           $cf_months_count = ( int ) floor( $amount_cf / $rent_amount );
                         /** Get the next payment tracks to be paid/updated, should match the number of cf_months_count above */
                            $next_monthly_tracks = DB::table( 'tenant_monthly_payments' )->select(
                                DB::raw( 'tenant_monthly_payments.*' ),
                                DB::raw( 'tenant_monthly_payments.payment_status as pay_status' ),
                                DB::raw( 'tenant_monthly_payments.id as track_id' )
                            )
                            ->orderBy( 'tenant_monthly_payments.id', 'asc' )
                            ->where( 'room_id', $room_id )
                            ->where( 'payment_status', 3 )
                            ->limit( $cf_months_count )
                            ->get();
    
                              /** Update the next payment tracks with full rent amount */
                            foreach ( $next_monthly_tracks as $key => $value ) {
                                $update_next_tracks = MonthlyPayment::where( 'id', $value->track_id )->update( [
                                    'amount_paid' => $rent_amount,
                                    'balance_due' => 0,
                                    'payment_status' => 1
                                ] );
                            }
    
                        if ( strpos( '.0', $cf_months ) == false ) {
                              /** Checks if there will be a partial payment for the next track */
                            $cf_months = ( int ) floor( $amount_cf / $rent_amount );
    
                            /** Get the track to be updated with partial payment */
                            $less_monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->where( 'payment_status', 3 )->first();
    
                            $less_track_id = $less_monthly_track->track_id;
    
                             /** Update the next payment track with partial payment */
                            $update_next_tracks = MonthlyPayment::where( 'id', $less_track_id )->update( [
                                'amount_paid' => $less_cf_amount,
                                'balance_due' => $less_monthly_track->rent_amount - $less_cf_amount,
                                'payment_status' => 2
                            ] );
                        } 
                    }
                } elseif ( $new_amount_paid == $rent_amount ) {
                    $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->whereIn( 'pay_status', [2, 3] )->first();
                    $track_id = $monthly_track->track_id;
    
                    $update_track = MonthlyPayment::where( 'id', $track_id )->update( [
                        'amount_paid' => $new_amount_paid,
                        'balance_due' => $new_balance_due,
                        'payment_status' => 1
                    ] );
    
                    echo( 'rent paid fully for the month' );
                } elseif ( $new_amount_paid < $rent_amount ) {
                    $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where( 'room_id', $room_id )->whereIn( 'payment_status', [2, 3] )->first();
                    
                    $track_id = $monthly_track->track_id;
                    $update_track = MonthlyPayment::where( 'id', $track_id )->update( [
                        'amount_paid' => $new_amount_paid,
                        'balance_due' => $new_balance_due,
                        'payment_status' => 2
                    ] );
                }

                /** Update the transaction as processed */
                $update_track = Transaction::where( 'id', $transaction_id )->update( [
                'cron_processed' => 1
            ] );

            /** Log the action in the logs file */

            Log::info( 'Transaction processing for : '.$transactions->trans_id . ' successful. Transaction details-> '. 
            json_encode( $transactions->trans_id ) .' at '.$now );
            }else{
                /** Write a query to insert some records into the database */
            }

        } else {
            Log::error( 'Transaction processing for : '.$transactions->trans_id . ' failed. Transaction details----> '.
             json_encode( $transactions->trans_id ) .' at '.$now );
        }
        //  }
        Log::info( '*************************************** TRANSACTION BATCH PROCESSING ENDED AT: ' .$now. ' ********************************************' );

                    }
                }

            }

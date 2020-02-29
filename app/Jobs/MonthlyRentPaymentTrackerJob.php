<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use DB;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use App\Models\Rooms;
use App\Models\MonthlyPayment;
use Illuminate\Support\Facades\Log;

class MonthlyRentPaymentTrackerJob {
    use Dispatchable, Queueable;

    /**
    * Create a new job instance.
    *
    * @return void
    */

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
        $start_date = Carbon::parse( $this->date->startOfMonth()->toDateString() );
        $end_date = $start_date->addMonths( 12 );

        $start_date = $this->date->startOfMonth()->toDateString();

        $start_date = new DateTime( $start_date );
        $end_date = new DateTime( $end_date );

        $dates = array();
        for ( $i = $start_date; $i <= $end_date; $i->modify( '+1 month' ) ) {
            $dates[] = $i->format( 'M Y' );
        }

        $is_vacant = 0;
        $rooms = DB::table( 'rooms' )->select(
            DB::raw( 'rooms.variation_val_id' ),
            DB::raw( 'rooms.id as room_id' ),
            DB::raw( 'rooms.is_vacant' ),
            DB::raw( 'variation_value_template.id as var_val_id' ),
            DB::raw( 'variation_value_template.name as var_name' ),
            DB::raw( 'variations.id as var_id' ),
            DB::raw( 'variations.monthly_rent' ),
            DB::raw( 'properties.id as prop_id' ),
            DB::raw( 'properties.category_id' )
            //				DB::raw( 'room_assignments.room_id' ),
            //				DB::raw( 'room_assignments.r_start_date' )
        )
        ->leftJoin( 'variation_value_template', 'rooms.variation_val_id', 'variation_value_template.id' )
        ->leftJoin( 'variations', 'variation_value_template.id', 'variations.id' )
        ->leftJoin( 'properties', 'rooms.property_id', 'properties.id' )
        //	->leftJoin( 'room_assignments', 'rooms.id', '=', 'room_assignments.room_id' )
        //->where( 'room_assignments.r_end_date', '=', null )
        ->where( 'rooms.is_vacant', '=', $is_vacant )
        ->orderBy( 'rooms.id', 'asc' )->get();

        dd( $rooms );

        if ( !empty( $rooms ) ) {
            foreach ( $dates as $key => $period ) {

                foreach ( $rooms as $key => $value ) {

                    $tracks = array(
                        'tenant_id' => 1,
                        'room_id' => $value->room_id,
                        'payment_status' => 3,
                        'period' => $period,
                        'rent_amount' => $value->monthly_rent,
                        'amount_paid' => '0.00',
                        'balance_due' => $value->monthly_rent
                    );
                    $save_tracks = DB::table( 'tenant_monthly_payments' )->insert( $tracks );
                }
            }
        }
    }
}

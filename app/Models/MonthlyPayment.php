<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MonthlyPayment extends Model {
    protected $table = 'tenant_monthly_payments';

    public static function getMonthlyPaymentsTrack() {
        $monthly_payment_track = DB::table( 'tenant_monthly_payments' )->select(
            DB::raw( 'tenant_monthly_payments.*' ),
            DB::raw( 'tenant_monthly_payments.payment_status as pay_status' ),
            DB::raw( 'tenant_monthly_payments.id as track_id' )
        )
        ->orderBy( 'tenant_monthly_payments.id', 'asc' )
        ->get();

        return $monthly_payment_track;
    }

    public static function getPaymentTracker() {
        $rent_trackers = DB::table( 'tenant_monthly_payments' )->select(
            DB::raw( 'tenant_monthly_payments.*' ),
            DB::raw( 'tenant_monthly_payments.id as track_id' ),
            DB::raw( 'tenant_monthly_payments.created_at as track_date' ),
            DB::raw( 'rent_payment_status.id' ),
            DB::raw( 'rent_payment_status.rent_status' ),
            DB::raw( 'rooms.id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'properties.id as prop_id' ),
            DB::raw( 'properties.prop_name' )
        )
        ->leftJoin( 'rent_payment_status', 'tenant_monthly_payments.payment_status', 'rent_payment_status.id' )
        ->leftJoin( 'rooms', 'tenant_monthly_payments.room_id', 'rooms.id' )
        ->leftJoin( 'properties', 'rooms.property_id', 'properties.id' )
        ->orderBy( 'tenant_monthly_payments.id', 'desc' )->get();
        return $rent_trackers;
    }
}

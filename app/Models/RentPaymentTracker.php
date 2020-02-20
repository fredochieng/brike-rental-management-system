<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class RentPaymentTracker extends Model {
    protected $table = 'tenant_monthly_payments';

    public static function getPaymentTracker() {
        $rent_trackers = DB::table( 'tenant_monthly_payments' )->select(
            DB::raw( 'tenant_monthly_payments.*' ),
            DB::raw( 'tenant_monthly_payments.created_at as track_date' )
        )
        ->orderBy( 'tenant_monthly_payments.id', 'desc' )->get();
        return $rent_trackers;
    }
}

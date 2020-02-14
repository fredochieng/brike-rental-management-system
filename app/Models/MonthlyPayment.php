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
}

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

    public static function getTracksForSMS(){

           $rent_trackers = DB::table( 'tenant_monthly_payments' )->select(
                    DB::raw( 'tenant_monthly_payments.id as room_id' ),
                    DB::raw( 'tenant_monthly_payments.id as track_id' ),
                    DB::raw( 'tenant_monthly_payments.payment_status' ),
                    DB::raw( 'tenant_monthly_payments.period' ),
                    DB::raw( 'tenant_monthly_payments.balance_due' ),
                    DB::raw( 'tenant_monthly_payments.rent_amount' ),
                    DB::raw( 'tenant_monthly_payments.amount_paid' ),
                    DB::raw( 'tenant_monthly_payments.sms_reminder_sent' ),
                    DB::raw( 'rent_payment_status.id' ),
                    DB::raw( 'rooms.id' ),
                    DB::raw( 'rooms.property_id' ),
                    DB::raw( 'rooms.room_no' ),
                    DB::raw( 'rooms.is_vacant' ),
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
                ->orderBy( 'tenant_monthly_payments.id', 'asc' )->get();
                
                 $rent_trackers->map(function ($item) {
                     $tenant_name = explode(" ",$item->t_name);
                     unset($tenant_name[1]);
                     $item->tenant_name = implode(" ", $tenant_name);

            $item->message = 'Hello '. $item->tenant_name. ', kindly pay your rent for '. $item->period.'.'.
            ' Rent amount Kshs '. $item->balance_due. '. Please pay Kshs '. $item->balance_due.'.'.
            ' to Paybill 867643 Account Number '. $item->room_no .'.'.
            ' Please ignore this message if you have already paid. Thank you';
            return $item;
        });

        return $rent_trackers;
    }
}

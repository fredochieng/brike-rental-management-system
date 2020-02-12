<?php

namespace App\Models;
use App\Models\Mpesa;
use DB;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
    protected $table = 'rent_payments';

    public  static  function  c2b( $ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber ) {

        try {
            $environment = env( 'MPESA_ENV' );
        } catch ( \Throwable $th ) {
            $environment = self::env( 'MPESA_ENV' );
        }

        if ( $environment == 'live' ) {
            $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateLiveToken();
        } elseif ( $environment == 'sandbox' ) {
            $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateSandBoxToken();
        } else {
            return json_encode( ['Message'=>'invalid application status'] );
        }

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json', 'Authorization:Bearer '.$token ) );

        $curl_post_data = array(
            'ShortCode' => $ShortCode,
            'CommandID' => $CommandID,
            'Amount' => $Amount,
            'Msisdn' => $Msisdn,
            'BillRefNumber' => $BillRefNumber
        );

        $data_string = json_encode( $curl_post_data );

        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $curl, CURLOPT_POST, true );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_string );
        curl_setopt( $curl, CURLOPT_HEADER, false );
        $curl_response = curl_exec( $curl );

        print_r( $curl_response );
        return $curl_response;
    }

    public static function getPayments() {

        /** To get actual payment for the tenant, the msisdn must be the same as t_phone
        * This means that the tenant must pay with his/her phone number
        * Another option would be to confirm payment that dont much any tenant, & update
        * t_phone column in the rent payments table with the t_phone & use it to search the tenant
        */
        $payments = DB::table( 'rent_payments' )->select(
            DB::raw( 'rent_payments.*' ),
            DB::raw( 'rent_payments.id as transaction_id' ),
            DB::raw( 'rent_payments.created_at as trans_created_at' ),
            DB::raw( 'rooms.id as room_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'properties.id as prop_id' ),
            DB::raw( 'properties.prop_name' ),
            DB::raw( 'tenants.t_name' ),
            DB::raw( 'tenants.t_phone' ),
            DB::raw( 'rent_payments.msisdn as payment_phone' )
        )
        ->leftJoin( 'rooms', 'rent_payments.bill_ref_no', '=', 'rooms.room_no' )
        ->leftJoin( 'properties', 'rooms.property_id', '=', 'properties.id' )
        ->join( 'tenants', 'tenants.t_phone', '=', 'rent_payments.msisdn', 'left outer' )
        // ->join( 'tenants', 'tenants.t_phone', '=', 'rent_payments.tenant_phone', 'left outer' )
        ->orderBy( 'rent_payments.id', 'desc' )
        ->get();

        return $payments;
    }

    public static function getLatestPayments() {
        $latest_payments = DB::table( 'rent_payments' )->select(
            DB::raw( 'rent_payments.*' ),
            DB::raw( 'rent_payments.id as transaction_id' ),
            DB::raw( 'rent_payments.created_at as trans_created_at' ),
            DB::raw( 'rooms.id as room_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'properties.id as prop_id' ),
            DB::raw( 'properties.prop_name' ),
            DB::raw( 'tenants.t_name' ),
            DB::raw( 'tenants.t_phone' ),
            DB::raw( 'rent_payments.msisdn as payment_phone' )
        )
        ->leftJoin( 'rooms', 'rent_payments.bill_ref_no', '=', 'rooms.room_no' )
        ->leftJoin( 'properties', 'rooms.property_id', '=', 'properties.id' )
        ->join( 'tenants', 'tenants.t_phone', '=', 'rent_payments.msisdn', 'left outer' )
        // ->join( 'tenants', 'tenants.t_phone', '=', 'rent_payments.tenant_phone', 'left outer' )
        ->orderBy( 'rent_payments.id', 'desc' )
        ->limit( 7 )
        ->get();

        return $latest_payments;
    }

    public static function sumTotalRentPayments() {

        $sum_rent_payments = number_format( DB::table( 'rent_payments' )->sum( 'trans_amount' ), 2, '.', ',' );
        return  $sum_rent_payments;
    }

    public static function sumPropertyRentPayments( $property_id ) {
        $sum_prop_rent_payments =  DB::table( 'rent_payments' )
        ->select(
            DB::raw( 'rent_payments.id as payment_id' ),
            DB::raw( 'sum(trans_amount) as sum_tot_prop_rent_payments' ),
            DB::raw( 'rooms.id as room_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'properties.id as prop_id' )
        )
        ->leftJoin( 'rooms', 'rent_payments.bill_ref_no', '=', 'rooms.room_no' )
        ->leftJoin( 'properties', 'rooms.property_id', '=', 'properties.id' )
        ->groupBy( 'rooms.id' )
        ->where( 'properties.id', '=', $property_id )
        ->get();

        return $sum_prop_rent_payments;

    }

    public static function getTenantTotalPayments( $t_phone ) {
        $sum_tenant_payments = DB::table( 'rent_payments' )->select(
            DB::raw( 'rent_payments.bill_ref_no' ),
            DB::raw( 'sum(trans_amount) as sum_tenant_payments' ),
            DB::raw( 'rooms.id as room_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'tenants.t_phone' ),
            DB::raw( 'rent_payments.msisdn as payment_phone' )
        )
        ->leftJoin( 'rooms', 'rent_payments.bill_ref_no', '=', 'rooms.room_no' )
        ->join( 'tenants', 'tenants.t_phone', '=', 'rent_payments.msisdn', 'left outer' )
        ->groupBy( 'tenants.t_phone' )
        ->where( 'tenants.t_phone', '=', $t_phone )
        ->get();

        return $sum_tenant_payments;
    }

}

<?php

namespace App\Models;
use App\Models\Mpesa;

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

        // dd( $token );

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

}

<?php

namespace App\Http\Controllers;

use App\Models\ Transaction;
use App\Models\Mpesa;
use Illuminate\Http\Request;

class TransactionsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
    }

    public function c2b_transaction() {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $mpesa = new Transaction();

        $ShortCode = '601361';
        $CommandID = 'CustomerPayBillOnline';
        $Amount = '4550';
        $Msisdn = '254708374149';
        $BillRefNumber = 'Room A002';

        $c2bTransaction = $mpesa->c2b( $ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
    }

    public function confirmation_url() {
        # if this is your first time, you might need to check the directory 'Tutorial 1'  File first.

        header( 'Content-Type: application/json' );

        $response = '{
        "ResultCode": 0,
        "ResultDesc": "Confirmation Received Successfully"
    }';

        // Response from M-PESA Stream
        $mpesaResponse = file_get_contents( 'php://input' );

        // log the response
        $logFile = 'MPESAConfirmationResponse.json';

        $jsonMpesaResponse = json_decode( $mpesaResponse, true );
        // We will then use this to save to database

        $TransactionType      = $jsonMpesaResponse['TransactionType'];
        $TransID             = $jsonMpesaResponse['TransID'];
        $TransTime            = $jsonMpesaResponse['TransTime'];
        $TransAmount         = $jsonMpesaResponse['TransAmount'];
        $BusinessShortCode    = $jsonMpesaResponse['BusinessShortCode'];
        $BillRefNumber       = $jsonMpesaResponse['BillRefNumber'];
        $InvoiceNumber       = $jsonMpesaResponse['InvoiceNumber'];
        $OrgAccountBalance    = $jsonMpesaResponse['OrgAccountBalance'];
        $ThirdPartyTransID   = $jsonMpesaResponse['ThirdPartyTransID'];
        $MSISDN            = $jsonMpesaResponse['MSISDN'];
        $FirstName           = $jsonMpesaResponse['FirstName'];
        $MiddleName         = $jsonMpesaResponse['MiddleName'];
        $LastName          = $jsonMpesaResponse['LastName'];

        // write to file
        $log = fopen( $logFile, 'a' );
        fwrite( $log, $mpesaResponse );
        fclose( $log );

        echo $response;

        $payments = new Transaction();
        $payments->TransactionType = $TransactionType;
        $payments->TransID = $TransID;
        $payments->TransTime = $TransTime;
        $payments->TransAmount = $TransAmount;
        $payments->BusinessShortCode = $BusinessShortCode;
        $payments->BillRefNumber = $BillRefNumber;
        $payments->InvoiceNumber = $InvoiceNumber;
        $payments->OrgAccountBalance = $OrgAccountBalance;
        $payments->ThirdPartyTransID = $ThirdPartyTransID;
        $payments->MSISDN = $MSISDN;
        $payments->FirstName = $FirstName;
        $payments->MiddleName = $MiddleName;
        $payments->LastName = $LastName;

        $payments->save();

    }

    public function validation_url() {
        header( 'Content-Type: application/json' );

        $response = '{ "ResultCode": 0, "ResultDesc": "Confirmation Received Successfully" }';

        // Save the M-PESA input stream.
        $mpesaResponse = file_get_contents( 'php://input' );

        /* If we have any validation, we will do it here then change the $response if we reject the transaction */
        // Your Validation
        // $response = '{  "ResultCode": 1, "ResultDesc": "Transaction Rejected."  }';
        /* Ofcourse we will be checking for amount, account number( incase of paybill ), invoice number and inventory.
        But we reserve this for future tutorials*/

        // log the response
        $logFile = 'ValidationResponse.json';

        // will be used when we want to save the response to database for our reference
        $jsonMpesaResponse = json_decode( $mpesaResponse, true );

        // write the M-PESA Response to file
        $log = fopen( $logFile, 'a' );
        fwrite( $log, $mpesaResponse );
        fclose( $log );

        echo $response;
    }

    public function register_url() {

        //  $access_token = Mpesa::accessToken();

        if ( $environment == 'live' ) {
            $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateLiveToken();
        } elseif ( $environment == 'sandbox' ) {
            $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateSandBoxToken();
        } else {
            return json_encode( ['Message'=>'invalid application status'] );
        }
        // dd( $access_token );
        $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json', 'Authorization:Bearer '.$token ) );
        //curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json', 'Authorization:Bearer'.$access_token ) );
        //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'ShortCode' => '601446',
            'ResponseType' => 'Confirmed',
            'ConfirmationURL' => 'http://desertsrangers.com/api/payment_api/confirmation',
            'ValidationURL' => 'http://desertsrangers.com/api/payment_api/validation'
        );

        $data_string = json_encode( $curl_post_data );

        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $curl, CURLOPT_POST, true );
        curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_string );

        $curl_response = curl_exec( $curl );
        print_r( $curl_response );

        echo $curl_response;
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Transaction  $transaction
    * @return \Illuminate\Http\Response
    */

    public function show( Transaction $transaction ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Transaction  $transaction
    * @return \Illuminate\Http\Response
    */

    public function edit( Transaction $transaction ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Transaction  $transaction
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Transaction $transaction ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Transaction  $transaction
    * @return \Illuminate\Http\Response
    */

    public function destroy( Transaction $transaction ) {
        //
    }
}

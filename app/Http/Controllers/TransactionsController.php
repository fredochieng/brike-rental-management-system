<?php

namespace App\Http\Controllers;

use App\Models\ Transaction;
use App\Models\MonthlyPayment;
use App\Models\Mpesa;
use App\Models\ Property;
use App\Models\ Rooms;
use App\Models\RoomAssignment;
use App\Models\Tenants;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DB;

class TransactionsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();
        $data['payments'] = Transaction::getPayments();

        $data['currency_symbol'] = 'KES';

        $property_id = Input::get( 'property_id' );
        $room_id = Input::get( 'room_no' );

        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) && empty( $room_id ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.index' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.index' )->with( $data );
            }
        } elseif ( isset( $_GET['property_id'] ) && isset( $_GET['room_no'] ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id )->where( 'room_id', $room_id );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.index' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.index' )->with( $data );
            }
        }
        $data['searched'] = 'no';
        return view( 'payments.index' )->with( $data );
    }

    public function processedPayments() {
        $data['property'] = Property::getProperty();
        $data['payments'] = Transaction::getPayments()->where( 'cron_processed', 1 );
        $data['currency_symbol'] = 'KES';

        $property_id = Input::get( 'property_id' );
        $room_id = Input::get( 'room_no' );

        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) && empty( $room_id ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id )->where( 'cron_processed', 1 );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.processed-transactions' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.processed-transactions' )->with( $data );
            }
        } elseif ( isset( $_GET['property_id'] ) && isset( $_GET['room_no'] ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id )->where( 'room_id', $room_id )->where( 'cron_processed', 1 );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.processed-transactions' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.processed-transactions' )->with( $data );
            }
        }
        $data['searched'] = 'no';
        return view( 'payments.processed-transactions' )->with( $data );
    }

    public function pendingPayments() {
        $data['property'] = Property::getProperty();
        $data['payments'] = Transaction::getPayments()->where( 'cron_processed', 0 );
        $data['currency_symbol'] = 'KES';

        $property_id = Input::get( 'property_id' );
        $room_id = Input::get( 'room_no' );

        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) && empty( $room_id ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id )->where( 'cron_processed', 0 );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.processed-transactions' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.pending-transactions' )->with( $data );
            }
        } elseif ( isset( $_GET['property_id']
         ) && isset( $_GET['room_no'] ) ) {
            $data['searched'] = 'yes';
            $data['payments'] = Transaction::getPayments()->where( 'property_id', $property_id )->where( 'room_id', $room_id )->where( 'cron_processed', 0 );

            $total_transactions = count( $data['payments'] );

            if ( count( $data['payments'] ) == 0 ) {

                Toastr::info( 'No transactions found...' );

                return view( 'payments.pending-transactions' )->with( $data );

            } elseif ( count( $data['payments'] ) > 0 ) {

                Toastr::success( $total_transactions . ' transactions found for your query' );

                return view( 'payments.pending-transactions' )->with( $data );
            }
        }
        $data['searched'] = 'no';
        return view( 'payments.pending-transactions' )->with( $data );
    }

    public function managePayment( Request $request, $transaction_id ) {
        $data['currency_symbol'] = 'KES';
        $data['property'] = Property::getProperty();
        $data['payments'] = Transaction::getPayments()->where( 'transaction_id', $transaction_id )->first();
        $data['tenant_name'] = $data['payments']->t_name;
        $data['tenant_phone'] = $data['payments']->t_phone;
        $data['tenant_room'] = $data['payments']->room_no;
        $data['trans_confirmed'] = $data['payments']->trans_confirmed;
        $data['cron_processed'] = $data['payments']->cron_processed;

        if ( $data['tenant_name'] == '' ) {
            $data['tenant_name'] = 'Not available';
        } else {
            $data['tenant_name'] = $data['payments']->t_name;
        }

        if ( $data['tenant_phone'] == '' ) {
            $data['tenant_phone'] = 'Not available';
        } else {
            $data['tenant_phone'] = $data['payments']->t_phone;
        }

        if ( $data['tenant_room'] == '' ) {
            $data['tenant_room'] = 'Not available';
        } else {
            $data['tenant_room'] = $data['payments']->room_no;
        }

        if ( $data['trans_confirmed'] == 1 ) {
            $data['trans_confirmed'] = 'Yes';
        } else {
            $data['trans_confirmed'] = 'No';
        }

        if ( $data['cron_processed'] == 1 ) {
            $data['cron_processed'] = 'Processed';
        } else {
            $data['cron_processed'] = 'Pending';
        }

        return view( 'payments.manage' )->with( $data );
    }

    /** Mpesa API C2B Simulation*/

    public function c2b_transaction() {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $mpesa = new Transaction();

        $ShortCode = '601361';
        $CommandID = 'CustomerPayBillOnline';
        $Amount = '7777';
        $Msisdn = '254708374149';
        $BillRefNumber = 'Room A002';

        $c2bTransaction = $mpesa->c2b( $ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
    }

    /** Mpesa API C2B Confirmation URL*/

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

        $TransactionType = $jsonMpesaResponse['TransactionType'];
        $TransID = $jsonMpesaResponse['TransID'];
        $TransTime = $jsonMpesaResponse['TransTime'];
        $TransAmount = $jsonMpesaResponse['TransAmount'];
        $BusinessShortCode = $jsonMpesaResponse['BusinessShortCode'];
        $BillRefNumber = strtoupper( $jsonMpesaResponse['BillRefNumber'] );
        $InvoiceNumber = $jsonMpesaResponse['InvoiceNumber'];
        $OrgAccountBalance = $jsonMpesaResponse['OrgAccountBalance'];
        $ThirdPartyTransID = $jsonMpesaResponse['ThirdPartyTransID'];
        $MSISDN = $jsonMpesaResponse['MSISDN'];
        $FirstName = strtoupper( $jsonMpesaResponse['FirstName'] );
        $MiddleName = strtoupper( $jsonMpesaResponse['MiddleName'] );
        $LastName = strtoupper( $jsonMpesaResponse['LastName'] );
        $payment_method = 'Mpesa';

        // write to file
        $log = fopen( $logFile, 'a' );
        fwrite( $log, $mpesaResponse );
        fclose( $log );

        echo $response;

        $payments = new Transaction();
        $payments->trans_type = $TransactionType;
        $payments->trans_id = $TransID;
        $payments->trans_time = $TransTime;
        $payments->trans_amount = $TransAmount;
        $payments->bus_shortcode = $BusinessShortCode;
        $payments->bill_ref_no = $BillRefNumber;
        $payments->invoice_no = $InvoiceNumber;
        $payments->org_account_bal = $OrgAccountBalance;
        $payments->third_party_trans_id = $ThirdPartyTransID;
        $payments->msisdn = $MSISDN;
        $payments->phone_no = $MSISDN;
        $payments->first_name = $FirstName;
        $payments->middle_name = $MiddleName;
        $payments->last_name = $LastName;
        $payments->payment_method = $payment_method;

        //        Check whether the Msisdn exists in the database
        $phone_numbers = DB::table( 'tenants' )->select( 'tenants.t_phone' )->get();
        $phone_numbers = json_decode( json_encode( $phone_numbers, true ) );
        $phone_numbers = array_column( $phone_numbers, 't_phone' );

        if ( in_array( $MSISDN, $phone_numbers ) ) {
            $payments->trans_confirmed = 1;
            $message_title = 'Payment Received';
            $text = 'Hello ' . ucwords($FirstName).','.' we have received your Mpesa payment of KES '. $TransAmount. ' to '. $BillRefNumber.'.'.
            'Confirmation code: '. $TransID;
            $message = new Message();
					$message->message_title = $message_title;
					$message->message = $text;
					$message->phone_no = $MSISDN;
					//$message->save();
        } else {
            $payments->trans_confirmed = 0;
        }

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
        /* Of course we will be checking for amount, account number( incase of paybill ), invoice number and inventory.
        */

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

    /** Mpesa API C2B Register URL*/

    public function register_url() {
        $environment = env( 'MPESA_ENV' );
        if ( $environment == 'live' ) {
            $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateLiveToken();
        } elseif ( $environment == 'sandbox' ) {
            $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
            $token = Mpesa::generateSandBoxToken();
        } else {
            return json_encode( ['Message' => 'invalid application status'] );
        }

        $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type:application/json', 'Authorization:Bearer ' . $token ) );
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

        /** Mpesa API C2B Confirmation URL*/

    public function lipa_na_mpesa_online_url() {

        header( 'Content-Type: application/json' );

        $response = '{
        "ResultCode": 0,
        "ResultDesc": "Confirmation Received Successfully"
    }';

        // Response from M-PESA Stream
        $mpesaResponse = file_get_contents( 'php://input' );

        // log the response
        $logFile = 'LNMOResponse.json';

        $jsonMpesaResponse = json_decode( $mpesaResponse, true );

        // write to file
        $log = fopen( $logFile, 'a' );
        fwrite( $log, $mpesaResponse );
        fclose( $log );

        echo $response;

    }

    public function confPaymentRooomSelector( Request $request ) {
        //Function to get active tenants of the selected room during payment confirmation
        $room_id = Input::get( 'room_id' );
        $tenants = RoomAssignment::getRoomAssignments()->where( 'room_id', $room_id )->where( 'r_end_date', '' );

        return response()->json( $tenants );
    }

    public function confirmPayment( Request $request ) {
        $transaction_id = $request->input( 'transaction_id' );

        $room_id = $request->input( 'room_id' );
        $room_no = Rooms::getRooms()->where( 'room_id', $room_id )->first()->room_no;
        $tenant_id = $request->input( 'tenant_id' );
        $tenant_phone = Tenants::getTenants()->where( 'tenant_id', $tenant_id )->first()->t_phone;

        $trans_confirmed = 1;

        $payment_data = array(
            'trans_confirmed' => $trans_confirmed,
            'phone_no' => $tenant_phone,
            'bill_ref_no' => $room_no
        );
        $confirm_payment = Transaction::where( 'id', $transaction_id )->update( $payment_data );

        Toastr::success( 'Payment confirmed successfully' );
        return back();
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
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param \App\Transaction $transaction
    * @return \Illuminate\Http\Response
    */

    public function show( Transaction $transaction ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param \App\Transaction $transaction
    * @return \Illuminate\Http\Response
    */

    public function edit( Transaction $transaction ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Transaction $transaction
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Transaction $transaction ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Transaction $transaction
    * @return \Illuminate\Http\Response
    */

    public function destroy( Transaction $transaction ) {
        //
    }
}

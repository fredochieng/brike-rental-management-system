<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPayment;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;

class MonthlyPaymentController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();
        $property_id = Input::get( 'property_id' );
        $data['currency_symbol'] = 'KES';

        if ( isset( $_GET['property_id'] ) ) {
            $data['searched'] = 'yes';
            $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'prop_id', $property_id );
            return view( 'rent-tracker.index' )->with( $data );

        }
        $data['searched'] = 'no';

        return view( 'rent-tracker.index' )->with( $data );
    }

    public function fullRentPayments() {
        $data['property'] = Property::getProperty();
        $property_id = Input::get( 'property_id' );
        $data['currency_symbol'] = 'KES';

        if ( isset( $_GET['property_id'] ) ) {
            $data['searched'] = 'yes';
            $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'prop_id', $property_id )->where( 'payment_status', 1 );
            return view( 'rent-tracker.full-payments' )->with( $data );

        }
        $data['searched'] = 'no';

        return view( 'rent-tracker.full-payments' )->with( $data );
    }

    public function partialRentPayments() {
        $data['property'] = Property::getProperty();
        $property_id = Input::get( 'property_id' );
        $data['currency_symbol'] = 'KES';

        if ( isset( $_GET['property_id'] ) ) {
            $data['searched'] = 'yes';
            $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'prop_id', $property_id )->where( 'payment_status', 2 );
            return view( 'rent-tracker.partial-payments' )->with( $data );

        }
        $data['searched'] = 'no';

        return view( 'rent-tracker.partial-payments' )->with( $data );
    }

    public function rentArrears() {
        $data['property'] = Property::getProperty();
        $property_id = Input::get( 'property_id' );
        $data['currency_symbol'] = 'KES';

        if ( isset( $_GET['property_id'] ) ) {
            $data['searched'] = 'yes';
            $data['payment_tracks'] = MonthlyPayment::getPaymentTracker()->where( 'prop_id', $property_id )->where( 'payment_status', 3 );
            return view( 'rent-tracker.rent-arrears' )->with( $data );

        }
        $data['searched'] = 'no';

        return view( 'rent-tracker.rent-arrears' )->with( $data );
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
    * @param  \App\MonthlyPayment  $monthlyPayment
    * @return \Illuminate\Http\Response
    */

    public function show( MonthlyPayment $monthlyPayment ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\MonthlyPayment  $monthlyPayment
    * @return \Illuminate\Http\Response
    */

    public function edit( MonthlyPayment $monthlyPayment ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\MonthlyPayment  $monthlyPayment
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, MonthlyPayment $monthlyPayment ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\MonthlyPayment  $monthlyPayment
    * @return \Illuminate\Http\Response
    */

    public function destroy( MonthlyPayment $monthlyPayment ) {
        //
    }
}

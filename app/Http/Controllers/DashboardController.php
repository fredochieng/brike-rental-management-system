<?php

namespace App\Http\Controllers;
use App\Models\ Property;
use App\Models\ Variation;
use App\Models\ Transaction;
use App\Models\ Tenants;
use App\Models\RoomAssignment;
use App\Models\MonthlyPayment;
use App\Models\Expenses;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController {

    function index() {
        $data['payments'] = Transaction::getLatestPayments();
        $data['sum_rent_payments'] = Transaction::sumTotalRentPayments();

        $trackers = MonthlyPayment::getTracksForDeposits()->whereIn( 'payment_status', [1, 2] );

        $payment_amount = array();
        foreach ( $data['sum_rent_payments'] as $key => $value ) {
            $payment_amount[] = $value->trans_amount;
        }

        if ( !empty( $payment_amount ) ) {
            $data['sum_rent_payments'] = number_format( json_encode( array_sum( $payment_amount ) ), 2, '.', ',' );
        } else {
            $data['sum_rent_payments'] = 0.00;
        }

        $data['total_property'] = count( Property::getProperty() );
        $data['variation_values'] = Variation::variationValuesSum();

        foreach ( $data['variation_values'] as $key => $value ) {
            $total_rooms[] = $value->tot_rooms;
            $rented_rooms[] = $value->booked_rooms;
            $vacant_rooms[] = $value->vacant_rooms;
        }
        if ( !empty( $total_rooms ) ) {
            $data['sum_total_rooms'] = array_sum( $total_rooms );
        } else {
            $data['sum_total_rooms'] = 0;
        }

        if ( !empty( $rented_rooms ) ) {
            $data['sum_total_rented_rooms'] = array_sum( $rented_rooms );
        } else {
            $data['sum_total_rented_rooms'] = 0;
        }

        if ( !empty( $vacant_rooms ) ) {
            $data['sum_total_vacant_rooms'] = array_sum( $vacant_rooms );
        } else {
            $data['sum_total_vacant_rooms'] = 0;
        }

        $t_status = 1;
        $data['tot_tenants'] = count( Tenants::getTotalTenants()->where( 't_status', $t_status ) );

        $payment_tracks = MonthlyPayment::getPaymentTracker()->where( 'payment_status', 3 );
        $rent_arrears = array();
        foreach ( $payment_tracks as $key => $value ) {
            $rent_arrears_amount[] = $value->balance_due;
        }

        if ( !empty( $rent_arrears_amount ) ) {
            $data['rent_arrears_amount'] = number_format( json_encode( array_sum( $rent_arrears_amount ) ), 2, '.', ',' );
        } else {
            $data['rent_arrears_amount'] = 0.00;
        }

        if ( !empty( Transaction::all()->where( 'cron_processed', 1 ) ) ) {

            $data['processed_transactions'] = count( Transaction::all()->where( 'cron_processed', 1 ) );
        } else {
            $data['processed_transactions'] = 0;
        }

        if ( !empty( Transaction::all()->where( 'cron_processed', 0 ) ) ) {

            $data['pending_transactions'] = count( Transaction::all()->where( 'cron_processed', 0 ) );
        } else {
            $data['pending_transactions'] = 0;
        }

        if ( !empty( Transaction::all() ) ) {

            $data['all_transactions'] = count( Transaction::all() );
        } else {
            $data['all_transactions'] = 0;
        }

        /** Get total expenses */
        $expenses = Expenses::getExpenses();

        $expense_amount = array();
        foreach ( $expenses as $key => $value ) {
            $expense_amount[] = $value->expense_amount;
        }

        if ( !empty( $expense_amount ) ) {
            $data['sum_expense_amount'] = number_format( json_encode( array_sum( $expense_amount ) ), 2, '.', ',' );
        } else {
            $data['sum_expense_amount'] = 0.00;
        }

        $data['room_assignments'] = RoomAssignment::getLatestRoomAssignments();
        $data['currency_symbol'] = 'KES';
        return view( 'dashboard' )->with( $data );
    }

    function analytical() {
        return view( 'dashboard.analytical' );
    }

    function demographic() {
        return view( 'dashboard.demographic' );
    }

    function hospital() {
        return view( 'dashboard.hospital' );
    }

    function university() {
        return view( 'dashboard.university' );
    }

    function realEstate() {
        return view( 'dashboard.real-estate' );
    }

    function project() {
        return view( 'dashboard.project' );
    }

    function bitcoin() {
        return view( 'dashboard.bitcoin' );
    }

    function ecommerce() {
        return view( 'dashboard.ecommerce' );
    }

    function iot() {
        return view( 'dashboard.iot' );
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\ Property;
use App\Models\ Variation;
use App\Models\ Transaction;
use App\Models\ Tenants;
use App\Models\RoomAssignment;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController {

    function index() {
        $data['payments'] = Transaction::getLatestPayments();
        $data['sum_rent_payments'] = Transaction::sumTotalRentPayments();

        $payment_amount = array();
        foreach ( $data['sum_rent_payments'] as $key => $value ) {
            $payment_amount[] = $value->trans_amount;
        }

        $data['sum_rent_payments'] = number_format( json_encode( array_sum( $payment_amount ) ), 2, '.', ',' );

        $data['total_property'] = count( Property::getProperty() );
        $data['variation_values'] = Variation::variationValuesSum();

        foreach ( $data['variation_values'] as $key => $value ) {
            $total_rooms[] = $value->tot_rooms;
            $rented_rooms[] = $value->booked_rooms;
            $vacant_rooms[] = $value->vacant_rooms;
        }
        $data['sum_total_rooms'] = array_sum( $total_rooms );
        $data['sum_total_rented_rooms'] = array_sum( $rented_rooms );
        $data['sum_total_vacant_rooms'] = array_sum( $vacant_rooms );

        $t_status = 1;
        $data['tot_tenants'] = count( Tenants::getTotalTenants()->where( 't_status', $t_status ) );

        // dd( $data['sum_total_rooms'] );

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

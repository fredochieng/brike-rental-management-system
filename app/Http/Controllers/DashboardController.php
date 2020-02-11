<?php

namespace App\Http\Controllers;
use App\Models\ Transaction;
use App\Models\RoomAssignment;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController {

    function index() {
        $data['payments'] = Transaction::getLatestPayments();
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

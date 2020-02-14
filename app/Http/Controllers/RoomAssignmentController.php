<?php

namespace App\Http\Controllers;

use App\Models\RoomAssignment;
use App\Models\Property;
use App\Models\Variation;
use App\Models\Tenants;
use App\Models\Rooms;
use App\Models\MonthlyPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class RoomAssignmentController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['room_assignments'] = RoomAssignment::getRoomAssignments()->where( 'r_end_date', '' );

        $data['property'] = Property::getProperty();

        $data['searched_tenants'] = array();
        $property_id = Input::get( 'property_id' );

        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) ) {
            $t_status = 1;
            $find_by = 'property_id';
            $data['searched'] = 'yes';
            $data['searched_r_assignments'] = RoomAssignment::getRoomAssignments()->where( 'property_id', $property_id )->where( 'r_end_date', '' );

            $total_r_assignments = count( $data['searched_r_assignments'] );

            $find_by_value = Input::get( 'property_id' );

            if ( count( $data['searched_r_assignments'] ) == 0 ) {

                Toastr::warning( 'No record found for your query' );

                return view( 'rooms.room-assignments' )->with( $data );

            } elseif ( count( $data['searched_r_assignments'] ) > 0 ) {

                Toastr::success( $total_r_assignments . ' records found for your query' );

                return view( 'rooms.room-assignments' )->with( $data );
            }
        }
        $data['searched'] = 'no';

        return view( 'rooms.room-assignments' )->with( $data );
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

        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();
        $property_id = $request->input( 'property_id' );
        $variation_val_id = $request->input( 'variation_val_id' );
        $room_id = $request->input( 'variation_room_id' );
        $tenant_id = $request->input( 'r_tenant_id' );
        $start_date = $request->input( 'r_start_date' );

        $room_assignment = new RoomAssignment();

        $room_assignment->room_id = $room_id;
        $room_assignment->tenant_id = $tenant_id;
        $room_assignment->r_start_date = $start_date;

        $room_assignment->save();

        /** Get details of the selected variation */

        $variation = Variation::where( 'variation_value_id', $variation_val_id )->where( 'property_id', $property_id )->first();

        $rent_amount = $variation->monthly_rent;

        $vacant_rooms = $variation->vacant_rooms;
        $vacant_rooms = $vacant_rooms - 1;

        $rented_rooms = $variation->booked_rooms;
        $rented_rooms = $rented_rooms + 1;

        /** Reduce the count of vacant rooms by 1 and increase count of rented rooms( booked_rooms ) of the selected variation */

        $update_variation_counts = Variation::where( 'variation_value_id', $variation_val_id )->where( 'property_id', $property_id )->update( [
            'vacant_rooms' => $vacant_rooms,
            'booked_rooms' => $rented_rooms
        ] );

        /** Update is_vacant status of the selected room */

        $update_is_vacant = Rooms::where( 'id', $room_id )->update( [
            'is_vacant' => 0
        ] );

        /** Update room_assigned column for the selected tennat from 0 to 1 */

        $update_room_assigned = Tenants::where( 'id', $tenant_id )->update( [
            'room_assigned' => 1
        ] );

        /** Save details in the tenant monthly payment table
        * This table shows tenant's payment info
        * Which month has he paid, is he due?
         */

        $date = Carbon::parse( $start_date );

        $start_tenancy_month = $date->format( 'M Y' );

        $monthly_payment = new MonthlyPayment();
        $monthly_payment->tenant_id = $tenant_id;
        $monthly_payment->room_id = $room_id;
        $monthly_payment->payment_status = 3;
        $monthly_payment->period = $start_tenancy_month;
        $monthly_payment->rent_amount = $rent_amount;
        $monthly_payment->amount_paid = 0.00;
        $monthly_payment->balance_due = $rent_amount;

        $monthly_payment->save();

        /** Log the action in the logs file */
        Log::info( 'Room assignmet of ID ' . $room_assignment->id .  ' created by user of ID: ' . Auth::id() .
        ' at ' . $now );

       // dd('fred');

        Toastr::success( 'Assignment created successfully' );

        return back();
    }
    /** Add another tenant to alraedy rented room
    * This is the case for hostel where one room can have more than 1 tenant
    */

    public function addAnotherTenant( Request $request ) {

        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();
        $variation_val_id = $request->input( 'variation_val_id' );
        $room_id = $request->input( 'variation_room_id' );
        $tenant_id = $request->input( 'r_tenant_id' );
        $start_date = $request->input( 'r_start_date' );

        $room_assignment = new RoomAssignment();

        $room_assignment->room_id = $room_id;
        $room_assignment->tenant_id = $tenant_id;
        $room_assignment->r_start_date = $start_date;

        $room_assignment->save();

        /** Update room_assigned column for the selected tenant from 0 to 1 */

        $update_room_assigned = Tenants::where( 'id', $tenant_id )->update( [
            'room_assigned' => 1
        ] );

        /** Log the action in the logs file */
        Log::info( 'Room assignment assignmet of ID ' . $room_assignment->id .  ' created by user of ID: ' . Auth::id() .
        ' at ' . $now );

        Toastr::success( 'Tenant added successfully' );

        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\RoomAssignment  $roomAssignment
    * @return \Illuminate\Http\Response
    */

    public function show( RoomAssignment $roomAssignment ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\RoomAssignment  $roomAssignment
    * @return \Illuminate\Http\Response
    */

    public function edit( RoomAssignment $roomAssignment ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\RoomAssignment  $roomAssignment
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, RoomAssignment $roomAssignment ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\RoomAssignment  $roomAssignment
    * @return \Illuminate\Http\Response
    */

    public function destroy( RoomAssignment $roomAssignment ) {
        //
    }
}

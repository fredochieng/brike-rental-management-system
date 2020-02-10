<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use App\Models\Property;
use App\Models\Rooms;
use App\Models\RoomAssignment;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class TenantsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $t_status = 1;
        $room_assigned = 1;
        $data['property'] = Property::getProperty();
        $data['tenants'] = Tenants::getTenants()->where( 't_status', $t_status )->where( 'room_assigned', $room_assigned );
        $data['searched_tenants'] = array();
        $property_id = Input::get( 'property_id' );

        // dd( $data['tenants'] );

        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) ) {
            $t_status = 1;
            $room_assigned = 1;
            $data['searched'] = 'yes';
            $data['searched_tenants'] = Tenants::getTenants()->where( 'property_id', $property_id )->where( 't_status', $t_status )
            ->where( 'room_assigned', $room_assigned );

            $total_tenants = count( $data['searched_tenants'] );

            if ( count( $data['searched_tenants'] ) == 0 ) {

                Toastr::info( 'No tenants found for your query' );

                return view( 'tenants.index' )->with( $data );

            } elseif ( count( $data['searched_tenants'] ) > 0 ) {

                Toastr::success( $total_tenants . ' tenants found for your query' );

                return view( 'tenants.index' )->with( $data );
            }
        }
        $data['searched'] = 'no';

        return view( 'tenants.index' )->with( $data );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $data['property'] = Property::getProperty();

        return view( 'tenants.create' )->with( $data );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $t_property_id = $request->input( 't_property_id' );
        $t_name = ucwords( $request->input( 't_name' ) );
        $t_id_no = ucwords( $request->input( 't_id_no' ) );
        $t_phone = $request->input( 't_phone' );
        $t_alt_phone = $request->input( 't_alt_phone' );
        $t_email = $request->input( 't_email' );

        $new_t_phone = str_replace( '(', '', $t_phone );
        $new_t_phone = str_replace( ')', '', $new_t_phone );
        $new_t_phone = str_replace( '-', '', $new_t_phone );
        $new_t_phone = str_replace( ' ', '', $new_t_phone );

        $tenant = new Tenants();
        $tenant->t_id_no = $t_id_no;
        $tenant->t_name = $t_name;
        $tenant->t_phone = $new_t_phone;
        $tenant->t_alt_phone = $t_alt_phone;
        $tenant->t_email = $t_email;
        $tenant->t_property_id = $t_property_id;
        $tenant->save();

        Toastr::success( 'Tenant added successfully' );
        return back();
    }

    /** Not sure where this function is being used */

    public function searchTenants( Request $request ) {
        // $property_id = Input::get( 'property_id' );
        // $data['searched_clients'] = Tenants::getTenants()->where( 'property_id', $property_id );
        // // $property_id = $request->input( 'property_id' );
        // dd( $data['searched_clients'] );
    }

    public function manageTenant( Request $request, $tenant_id ) {
        $data['tenant'] = Tenants::getTenants()->where( 'tenant_id', $tenant_id )->first();
        $data['room_assignment'] = RoomAssignment::getRoomAssignments()->where( 'tenant_id', $tenant_id )->first();
        //  dd( $data['room_assignment'] );
        return view( 'tenants.manage' )->with( $data );
    }

    /** Unassign room, end tenancy for the tenant */

    public function unassignRoom( Request $request, $tenant_id ) {
        $property_id = $request->input( 'property_id' );
        $variation_val_id = $request->input( 'variation_val_id' );
        $room_id = $request->input( 'room_id' );

        /** Update tenants room_assigned and t_status to 0
        * room_assigned => 0 shows that the tenant is not assigned any room
        * t_status => 0 shows that the tenant is now not an active tenant
        */
        $tenant_details = array(
            'room_assigned' => 0,
            't_status' => 0
        );

        $update_tenant = Tenants::where( 'id', $tenant_id )->update( $tenant_details );

        /** Get active room assignment count for the tenant's room 
         * Active room assignenment's r_end_date column is always null
        * If the count is 1, update is_vacant in rooms table to 1,
        * This is basically declaring that the room is now vacant since we only had 1 tenant
        * If the count is greater than 1, the do nothing in rooms table
        * This means that even if 1 tenant has left, there are still tenants to that room, so it's still rented
        * This scenario is seen in hostels where we can have more than 1 tenant
        */
        $room_assignment_count = count( RoomAssignment::getRoomAssignments()
        ->where( 'room_id', $room_id )->where( 'r_end_date', '' ) );

        /** If the count is 1, update is_vacant to 1 
         * Go to variations table, increase vacant_rooms by 1 & decrease rented_rooms by 1
        */

        if($room_assignment_count == 1){

            $room_details = array(
            'is_vacant' => 1
        );
        
         $update_room = Rooms::where('id', $room_id)->update($room_details);

           $variation = Variation::where('property_id', $property_id)->where('variation_value_id', $variation_val_id)->first();

           $vacant_rooms = $variation->vacant_rooms + 1;
           $rented_rooms = $variation->booked_rooms - 1;
    
           $variation_details = array(
            'vacant_rooms' => $vacant_rooms,
            'booked_rooms' => $rented_rooms
        );

         $update_variation = Variation::where('variation_value_id', $variation_val_id)->where('property_id', $property_id)->update($variation_details);
        }

        /** Update r_end_date in room_assignments table with the exact end date
         * At the moment just update with current date
         * You may want to have a datepicker in the form to capture the date
         */
         $r_end_date = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

          $room_assignment_details = array(
            'r_end_date' => $r_end_date
        );
         $update_room_assignment = RoomAssignment::where('tenant_id', $tenant_id)->update($room_assignment_details);

          Toastr::success( 'Room unassigned successfully' );
        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Tenants  $tenants
    * @return \Illuminate\Http\Response
    */

    public function show( Tenants $tenants ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Tenants  $tenants
    * @return \Illuminate\Http\Response
    */

    public function edit( Tenants $tenants ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Tenants  $tenants
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $tenant_id ) {
        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

        /** Get new tenant's data from edit tenant form **/
        $t_name = ucwords( $request->input( 't_name' ) );
        $t_id_no = ucwords( $request->input( 't_id_no' ) );
        $t_phone = $request->input( 't_phone' );
        $t_alt_phone = $request->input( 't_alt_phone' );
        $t_email = $request->input( 't_email' );

        $tenant_details = array(
            't_name' => $t_name,
            't_id_no' => $t_id_no,
            't_phone' => $t_phone,
            't_alt_phone' => $t_alt_phone,
            't_email' => $t_email,
        );
        $update_tenant = Tenants::where( 'id', $tenant_id )->update( $tenant_details );

        /** Log the action in the logs file */
        Log::info( 'Tenant of ID ' . $tenant_id .  ' updated'.
        ' at ' . $now );
        Toastr::success( 'Tenant updated successfully' );

        return back();

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Tenants  $tenants
    * @return \Illuminate\Http\Response
    */

    public function destroy( Tenants $tenants ) {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\RoomAdjustment;
use App\Models\Property;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class RoomAdjustmentController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();
        $data['room_adjustments'] = RoomAdjustment::getRoomAdjustmenst();
        //dd( $data['room_adjustments'] );
        return view( 'rooms.room-adjustments' )->with( $data );
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
        $quanity = $request->input( 'quantity' );

        /** Get total and vacant rooms value of the selected variation */
        $variation = Variation::where( 'variation_value_id', $variation_val_id )->where( 'property_id', $property_id )->first();

        $total_rooms = $variation->tot_rooms;
        $new_total_rooms = $total_rooms + $quanity;

        $vacant_rooms = $variation->vacant_rooms;
        $new_vacant_rooms = $vacant_rooms + $quanity;

        $rented_rooms = $variation->booked_rooms;

        /** Increase the count of total and vacant rooms by the quantity value above of the selected property & variation */

        $update_variation_counts = Variation::where( 'variation_value_id', $variation_val_id )->where( 'property_id', $property_id )->update( [
            'tot_rooms' => $new_total_rooms,
            'vacant_rooms' => $new_vacant_rooms
        ] );

        /** Save to room adjustments table */
        $room_adjustment = new RoomAdjustment();

        $room_adjustment->var_val_id = $variation_val_id;
        $room_adjustment->adjustment_qty = $quanity;
        $room_adjustment->init_tot_rooms = $total_rooms;
        $room_adjustment->new_tot_rooms = $new_total_rooms;
        $room_adjustment->init_vac_rooms = $vacant_rooms;
        $room_adjustment->new_vac_rooms = $new_vacant_rooms;
        $room_adjustment->created_by = Auth::id();

        $room_adjustment->save();

        /** Log the action in the logs file */
        Log::info( 'Room adjustment for property ' . $property_id . ' and variation value id of ' . $variation_val_id.
        ' done: old total rooms: ' . $total_rooms. 'quantity added: '. $quanity . ' new total rooms: ' . $new_total_rooms.
        ' old vacant rooms: ' . $vacant_rooms . ' quantity added: ' . $quanity. ' new vacant rooms: ' . $new_vacant_rooms.
        ' created by user of ID: ' . Auth::id() .
        ' at ' . $now );

        Toastr::success( 'Adjustment done successfully' );

        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\RoomAdjustment  $roomAdjustment
    * @return \Illuminate\Http\Response
    */

    public function show( RoomAdjustment $roomAdjustment ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\RoomAdjustment  $roomAdjustment
    * @return \Illuminate\Http\Response
    */

    public function edit( RoomAdjustment $roomAdjustment ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\RoomAdjustment  $roomAdjustment
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, RoomAdjustment $roomAdjustment ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\RoomAdjustment  $roomAdjustment
    * @return \Illuminate\Http\Response
    */

    public function destroy( RoomAdjustment $roomAdjustment ) {
        //
    }
}

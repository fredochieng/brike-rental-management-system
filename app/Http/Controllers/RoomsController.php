<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Variation;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use DB;

class RoomsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();
        $data['rooms'] = Rooms::getRooms();
        // dd( $data['rooms'] );
        return view( 'rooms.index' )->with( $data );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'rooms.create' );
    }

    public function variationValuesSelector() {
        //Function to get the variation values based on the selected property
        $property_id = Input::get( 'property_id' );

        $variation_values = Variation::getVariationValues( $property_id );

        return response()->json( $variation_values );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $property_id = $request->input( 'property_id' );
        $variation_val_id = $request->input( 'variation_val_id' );
        $room_no = $request->input( 'room_no' );
        $max_occupants = $request->input( 'max_occupants' );

        $room = new Rooms();

        $room->property_id = $property_id;
        $room->variation_val_id = $variation_val_id;
        $room->room_no = $room_no;
        $room->max_occupants = $max_occupants;

        $room->save();

        Toastr::success( 'Room added successfully' );
        return back();

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Rooms  $rooms
    * @return \Illuminate\Http\Response
    */

    public function show( Rooms $rooms ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Rooms  $rooms
    * @return \Illuminate\Http\Response
    */

    public function edit( Rooms $rooms ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Rooms  $rooms
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Rooms $rooms ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Rooms  $rooms
    * @return \Illuminate\Http\Response
    */

    public function destroy( Rooms $rooms ) {
        //
    }
}

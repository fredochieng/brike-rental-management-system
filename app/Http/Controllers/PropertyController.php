<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenants;
use App\Models\Rooms;
use App\Models\PropertyCategories;
use App\Models\PropertyVariations;
use App\Models\RoomAssignment;
use App\Models\RoomAdjustment;
use App\Models\Variation;
use App\Models\ Transaction;
use App\Models\VariationValues;
use App\Models\MonthlyPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class PropertyController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();

        return view( 'property.index' )->with( $data );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function variationValuesSelector() {
        //Function to get the variation values based on the selected variation type
        $variation_template = Input::get( 'variation_template' );

        $variation_values = VariationValues::getVariationValues( $variation_template );

        return response()->json( $variation_values );
    }

    public function getPaymentRooms() {
        //Function to get the variation values based on the selected variation type
        $property_id = Input::get( 'property_id' );

        $pay_rooms = Rooms::getRooms()->where( 'property_id', $property_id );

        return response()->json( $pay_rooms );
    }

    /** Get rooms for payment confirmation based on the property selected */

    public function getTransRooms() {
        //Function to get the variation values based on the selected variation type
        $property_id = Input::get( 'property_id' );

        $pay_rooms = Rooms::getRooms()->where( 'property_id', $property_id );

        return response()->json( $pay_rooms );
    }

    public function getSMSRooms() {
        //Function to get the variation values based on the selected variation type
        $property_id = Input::get( 'property_id' );

        $sms_rooms = Rooms::getRooms()->where( 'property_id', $property_id );

        return response()->json( $sms_rooms );
    }

    public function create() {
        $data['categories'] = PropertyCategories::getPropertyCategories();
        $data['property_variations'] = PropertyVariations::getPropertyVariations();
        return view( 'property.create' )->with( $data );
    }

    public function test( Request $request ) {
        if ( $request->ajax() ) {
            dd( 'Fredrik' );
            $property = new Property();
            $p_name = strtoupper( $request->input( 'p_name' ) );

            return response( $property );
        } else {
            dd( 'ggggj' );
        }
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

        /** Get property data from create property form **/
        $p_name = ucwords( $request->input( 'p_name' ) );
        $p_category = $request->input( 'p_category_id' );
        $p_location = ucwords( $request->input( 'p_location' ) );
        $c_name = ucwords( $request->input( 'c_name' ) );
        $c_phone = $request->input( 'c_phone' );
        $variation_template_id = $request->input( 'variation_template_id' );

        $new_c_phone = str_replace( '(', '', $c_phone );
        $new_c_phone = str_replace( ')', '', $new_c_phone );
        $new_c_phone = str_replace( '-', '', $new_c_phone );
        $new_c_phone = str_replace( ' ', '', $new_c_phone );

        /** Save property data in the properties table */
        $property = new Property();
        $property->prop_name = $p_name;
        $property->category_id = $p_category;
        $property->location = $p_location;
        $property->c_name = $c_name;
        $property->c_phone = $new_c_phone;

        $property->save();

        /** Get id of the above saved property */
        $just_saved_property_id = $property->id;

        /** Save property variation data */

        $var_value_id = $request->input( 'var_value_id' );
        $v_name = $request->input( 'v_name' );
        $rooms = $request->input( 'rooms' );
        $rent = $request->input( 'rent' );

        /** Save room variations in room_variations table */
        $prop_variations = array(
            'variation_temp_id' => $variation_template_id,
            'property_id' => $just_saved_property_id
        );
        $save_prop_variations = DB::table( 'property_variations' )->insertGetId( $prop_variations );

        /** Save property variations in the variations table */

        if ( count( $rooms ) > count( $rent ) )
        $count = count( $rent );
        else $count = count( $rooms );

        for ( $i = 0; $i < $count; $i++ ) {

            $data = array(
                'property_id' => $just_saved_property_id,
                'property_variation_id' => $save_prop_variations,
                'variation_value_id' => $var_value_id[$i],
                'var_name' => $v_name[$i],
                'tot_rooms' => $rooms[$i],
                'vacant_rooms' => $rooms[$i],
                'booked_rooms' => 0,
                'monthly_rent' => $rent[$i]
            );

            /** Skip when total rooms is 0 */
            if ( $data['tot_rooms'] == 0 || $data['monthly_rent'] == 0 ) {
                continue;
            }
            $insertData[] = $data;

        }

        Variation::insert( $insertData );

        for ( $i = 0; $i < $count; $i++ ) {
            $room_adjustments = array(
                'var_val_id' => $var_value_id[$i],
                'adjustment_qty' => 0,
                'init_tot_rooms' => $rooms[$i],
                'new_tot_rooms' => $rooms[$i],
                'init_vac_rooms' => $rooms[$i],
                'new_vac_rooms' => $rooms[$i],
                'init_ren_rooms' => 0,
                'new_ren_rooms' => 0,
                'created_by' => Auth::id()
            );
            /** Skip when total rooms is 0 */
            if ( $room_adjustments['init_tot_rooms'] == 0 ) {
                continue;
            }
            $insertRoomAdjustments[] = $room_adjustments;
        }

        RoomAdjustment::insert( $insertRoomAdjustments );

        /** Log the action in the logs file */
        Log::info( 'Property of ID ' . $just_saved_property_id .  ' created by user of ID: ' . Auth::id() .
        ' at ' . $now );
        Toastr::success( 'Property created successfully' );

        return back();

    }

    public function manageProperty( Request $request, $property_id ) {

        $t_status = 1;
        $room_assigned = 0;
        $data['property'] = Property::getProperty()->where( 'property_id', $property_id )->first();
        $data['variation_values'] = Variation::getVariationValues( $property_id );
        $data['tenants'] = Tenants::getTenants()->where( 'property_id', $property_id )->where( 't_status', $t_status );
        $data['unassigned_tenants'] = Tenants::getTenants()->where( 'property_id', $property_id )
        ->where( 't_status', $t_status )->where( 'room_assigned', $room_assigned );

        $total_rooms = array();
        $rented_rooms = array();
        $vacant_rooms = array();

        foreach ( $data['variation_values'] as $key => $value ) {
            $total_rooms[] = $value->tot_rooms;
            $rented_rooms[] = $value->booked_rooms;
            $vacant_rooms[] = $value->vacant_rooms;
        }
        $data['sum_total_rooms'] = array_sum( $total_rooms );
        $data['sum_total_rented_rooms'] = array_sum( $rented_rooms );
        $data['sum_total_vacant_rooms'] = array_sum( $vacant_rooms );

        $data['tot_variations'] = count( $data['variation_values'] );
        $data['tot_tenants'] = count( $data['tenants'] );

        $data['currency_symbol'] = 'KES';

        /** This can be replaced once the model for this table is created */
        $property_variation = DB::table( 'property_variations' )->select(
            DB::raw( 'property_variations.*' )
        )
        ->where( 'property_id', $property_id )
        ->first();

        $data['property_variation_id'] = $property_variation->id;

        $variation_template = $property_variation->variation_temp_id;

        $data['all_variation_values'] = VariationValues::getVariationValues( $variation_template );

        /** Get rent payments for the propery */
        $data['payments'] = Transaction::getPayments()->where( 'property_id', '=', $property_id );
        $data['sum_prop_rent_payments'] = Transaction::sumPropertyRentPayments( $property_id );

        $payment_amount = array();
        foreach ( $data['sum_prop_rent_payments'] as $key => $value ) {
            $payment_amount[] = $value->trans_amount;
        }

        if ( !empty( $payment_amount ) ) {

            $data['sum_tot_prop_rent_payments'] =  number_format( json_encode( array_sum( $payment_amount ) ), 2, '.', ',' );
        } else {
            $data['sum_tot_prop_rent_payments'] = 0.00;
        }

        $payment_tracks = MonthlyPayment::getPaymentTracker()->where( 'payment_status', 3 )->where( 'prop_id', $property_id );
        // dd( $payment_tracks );
        $rent_arrears = array();
        foreach ( $payment_tracks as $key => $value ) {
            $rent_arrears_amount[] = $value->balance_due;
        }

        if ( !empty( $rent_arrears_amount ) ) {

            $data['rent_arrears_amount'] = number_format( json_encode( array_sum( $rent_arrears_amount ) ), 2, '.', ',' );
        } else {
            $data['rent_arrears_amount'] = 0.00;
        }

        return view( 'property.manage' )->with( $data );
    }

    /** Get vacant rooms of selected variation on room assignment */

    public function varRoomsSelector( Request $request ) {
        //Function to get the variation rooms based on the selected variation
        $variation_val_id = Input::get( 'variation_val_id' );
        $property_id = Input::get( 'property_id' );
        $is_vacant = 1;
        $rooms = Rooms::getRooms()->where( 'property_id', $property_id )->where( 'variation_val_id', $variation_val_id )->where( 'is_vacant', $is_vacant );

        return response()->json( $rooms );
    }

    /** Get already rented rooms of selected variation in the case of adding another tenant to a room */

    public function varRentedRoomsSelector( Request $request ) {
        //Function to get the variation rooms based on the selected variation
        $variation_val_id = Input::get( 'variation_val_id' );
        $property_id = Input::get( 'property_id' );
        $is_vacant = 0;
        $rooms = Rooms::getRooms()->where( 'property_id', $property_id )->where( 'variation_val_id', $variation_val_id )->where( 'is_vacant', $is_vacant );

        return response()->json( $rooms );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Property  $property
    * @return \Illuminate\Http\Response
    */

    public function show( Property $property_id ) {

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Property  $property
    * @return \Illuminate\Http\Response
    */

    public function edit( Request $request, $property_id ) {
        $data['categories'] = PropertyCategories::getPropertyCategories();
        $data['property_variations'] = PropertyVariations::getPropertyVariations();
        $data['property'] = Property::getProperty()->where( 'property_id', $property_id )->first();
        // dd( $data['property'] );
        return view( 'property.edit' )->with( $data );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Property  $property
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $property_id ) {

        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

        /** Get property data from edit property form **/
        $p_name = ucwords( $request->input( 'p_name' ) );
        $p_category = $request->input( 'p_category_id' );
        $p_location = ucwords( $request->input( 'p_location' ) );
        $c_name = ucwords( $request->input( 'c_name' ) );
        $c_phone = $request->input( 'c_phone' );

        $property_details = array(
            'prop_name' => $p_name,
            'category_id' => $p_category,
            'location' => $p_location,
            'c_name' => $c_name,
            'c_phone' => $c_phone,
        );
        $update_property = Property::where( 'id', $property_id )->update( $property_details );

        /** Log the action in the logs file */
        Log::info( 'Property of ID ' . $property_id .  ' updated'.
        ' at ' . $now );
        Toastr::success( 'Property updated successfully' );

        return back();
    }

    public function addMoreVariationValues( Request $request, $property_id ) {

        $property_variation_id = $request->input( 'property_variation_id' );
        $variation_template = $request->input( 'variation_val_id' );
        $rooms = $request->input( 'rooms' );
        $rent = $request->input( 'rent' );

        $variation_values = VariationValues::getVarValues( $variation_template )->first();

        $var_name = $variation_values->var_value_name;

        $variation = new Variation();

        $variation->property_id = $property_id;
        $variation->property_variation_id = $property_variation_id;
        $variation->variation_value_id = $variation_template;
        $variation->var_name = $var_name;
        $variation->tot_rooms = $rooms;
        $variation->vacant_rooms = $rooms;
        $variation->booked_rooms = 0;
        $variation->monthly_rent = $rent;

        $variation->save();

        $room_adjustment = new RoomAdjustment();
        $room_adjustment->var_val_id = $variation_template;
        $room_adjustment->adjustment_qty = 0;
        $room_adjustment->init_tot_rooms = $rooms;
        $room_adjustment->new_tot_rooms = $rooms;
        $room_adjustment->init_vac_rooms = $rooms;
        $room_adjustment->new_vac_rooms = $rooms;
        $room_adjustment->init_ren_rooms = 0;
        $room_adjustment->new_ren_rooms = 0;
        $room_adjustment->created_by = 1;

        $room_adjustment->save();

        Toastr::success( 'Property updated successfully' );

        return back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Property  $property
    * @return \Illuminate\Http\Response
    */

    public function destroy( Property $property ) {
        //
    }
}

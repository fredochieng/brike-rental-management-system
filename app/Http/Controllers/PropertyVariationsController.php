<?php

namespace App\Http\Controllers;

use App\Models\PropertyVariations;
use App\Models\VariationValues;
use Illuminate\Http\Request;
use App\Models\Variation;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class PropertyVariationsController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    /** Property categories listing */

    public function index() {
        $data['property_variations'] = PropertyVariations::getPropertyVariations();

        // echo '<pre>';
        // print_r( $data['property_variations'] );
        // exit;
        return view( 'property.variations.index' )->with( $data );
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
        $variation_name = ucwords( $request->input( 'variation_name' ) );

        $variation = new PropertyVariations();

        $variation->temp_name = $variation_name;
        $variation->save();
        $variation_value = $request->input( 'variation_value' );

        $count = count( $variation_value );

        /** Store variation values */
        for ( $i = 0; $i < $count; $i++ ) {
            $data = array(
                'variation_temp_id' => $variation->id,
                'name' => $variation_value[$i]
            );

            $insertData[] = $data;
        }

        VariationValues::insert( $insertData );

        /** Log the action in the logs file */
        Log::info( 'Variation of ID ' . $variation->id .  ' created by user of ID: ' . Auth::id()   . ' at ' . $now );

        Toastr::success( 'Variation created successfully' );

        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\PropertyVariations  $propertyVariations
    * @return \Illuminate\Http\Response
    */

    public function show( PropertyVariations $propertyVariations ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\PropertyVariations  $propertyVariations
    * @return \Illuminate\Http\Response
    */

    public function edit( PropertyVariations $propertyVariations ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\PropertyVariations  $propertyVariations
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $variation_id ) {

        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

        /** Get property category data from edit property category form **/
        $variation_name = $request->input( 'variation_name' );

        $property_variation = array(
            'temp_name' => $variation_name,
        );
        $update_property_variation = PropertyVariations::where( 'id', $variation_id )->update( $property_variation );

        /** Log the action in the logs file */
        Log::info( 'Property category of ID ' . $variation_id .  ' updated'.
        ' at ' . $now );
        Toastr::success( 'Variation updated successfully' );

        return back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\PropertyVariations  $propertyVariations
    * @return \Illuminate\Http\Response
    */

    public function destroy( PropertyVariations $propertyVariations ) {
        //
    }
}

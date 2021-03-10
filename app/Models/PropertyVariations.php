<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PropertyVariations extends Model {
    /** This model is interchanged with the variation template model....
    * it should reference property_variations table
    * otherwise just use it the way it is */

    protected $table = 'variation_template';
    

    public static function getPropertyVariations() {

        // $property_variations = DB::table( 'variation_template' )->select(
        //     DB::raw( 'variation_template.*' ),
        //     DB::raw( 'variation_value_template.id as var_value_temp_id' ),
        //     DB::raw( 'variation_value_template.variation_temp_id' ),
        //     DB::raw( 'variation_value_template.name' ),
        //     DB::raw( 'variation_template.id as variation_id' ),
        //     // DB::raw( '(SELECT COUNT(id) FROM property_variations WHERE property_variations.variation_temp_id=variation_template.id) as total_pv' )
        //     DB::raw( '(select id from property_variations where property_variations.variation_temp_id = variation_template.id order by id asc limit 1) as total_pv' )
        // )
        // ->join( 'variation_value_template', 'variation_value_template.variation_temp_id', 'variation_template.id', 'left-outer' )
        // // ->orderBy( 'variation_template.id', 'desc' )
        // ->groupBy( 'variation_template.id' )
        // ->groupBy( 'variation_value_template.id' )
        // ->get();

        $property_variations = DB::table( 'variation_template' )->select(
            DB::raw( 'variation_template.*' )
            // DB::raw( 'variation_value_template.id as var_value_temp_id' ),
            // DB::raw( 'variation_value_template.variation_temp_id' ),
            // DB::raw( 'variation_value_template.name' ),
            // DB::raw( 'variation_template.id as variation_id' ),
            // DB::raw( '(SELECT COUNT(id) FROM property_variations WHERE property_variations.variation_temp_id=variation_template.id) as total_pv' )
            // DB::raw( '(select id from property_variations where property_variations.variation_temp_id = variation_template.id order by id asc limit 1) as total_pv' )
        )
        // ->join( 'variation_value_template', 'variation_value_template.variation_temp_id', 'variation_template.id', 'left-outer' )
        // ->orderBy( 'variation_template.id', 'desc' )
        // ->groupBy( 'variation_template.id' )
        // ->groupBy( 'variation_value_template.id' )
        ->get();

        return $property_variations;

    }

    public static function getVariationDetails() {
        // $property_variations = DB::table( 'variation_template' )->select(
        //     DB::raw( 'variation_template.*' ),
        //     DB::raw( 'variation_value_template.id as var_value_temp_id' ),
        //     DB::raw( 'variation_value_template.variation_temp_id' ),
        //     DB::raw( 'variation_value_template.name' ),
        //     DB::raw( 'variation_template.id as variation_id' ),
        //     // DB::raw( '(SELECT COUNT(id) FROM property_variations WHERE property_variations.variation_temp_id=variation_template.id) as total_pv' )
        //     DB::raw( '(select id from property_variations where property_variations.variation_temp_id = variation_template.id order by id asc limit 1) as total_pv' )
        // )
        // ->join( 'variation_value_template', 'variation_value_template.variation_temp_id', 'variation_template.id', 'left-outer' )
        // // ->orderBy( 'variation_template.id', 'desc' )
        // /** if u fix postgres groupBy issue, then remove below 2 lines */
        // ->groupBy( 'variation_template.id' )
        // ->groupBy( 'variation_value_template.id' )
        // ->groupBy( 'variation_value_template.variation_temp_id' )
        // ->get();

        $property_variations  =  PropertyVariations::select( 'variation_template.*',
        DB::raw( 'variation_template.*' ),
        DB::raw( 'variation_template.id as variation_id' ),
        DB::raw( 'variation_value_template.id as var_value_temp_id' ),
        DB::raw( 'variation_value_template.variation_temp_id' ),
        DB::raw( 'variation_value_template.name' ),
        DB::raw( '(select variation_temp_id from property_variations where variation_template.id = property_variations.variation_temp_id order by id asc limit 1) 
        as prop_var_id' ) )
        ->join( 'variation_value_template', 'variation_value_template.variation_temp_id', 'variation_template.id', 'left-outer' )
        ->orderBy( 'variation_template.id', 'desc' )
        ->groupBy( 'variation_template.id' )
        ->groupBy( 'variation_value_template.id' )
        ->groupBy( 'variation_value_template.variation_temp_id' )
        ->get();

        // dd( $property_variations );

        return $property_variations;
    }

}

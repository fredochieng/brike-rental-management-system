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

        $property_variations = DB::table( 'variation_template' )->select(
            DB::raw( 'variation_template.*' ),
            DB::raw( 'variation_value_template.id as var_value_temp_id' ),
            DB::raw( 'variation_value_template.variation_temp_id' ),
            DB::raw( 'variation_value_template.name' ),
            DB::raw( 'variation_template.id as variation_id' ),
            DB::raw( '(SELECT COUNT(id) FROM property_variations WHERE property_variations.variation_temp_id=variation_template.id) as total_pv' )
        )
        ->join( 'variation_value_template', 'variation_value_template.variation_temp_id', 'variation_template.id', 'left-outer' )
        ->orderBy( 'variation_template.id', 'desc' )
        ->groupBy( 'variation_template.id' )
        ->get();

        //  $property_variations = PropertyVariations::all();

        return $property_variations;

    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class VariationValues extends Model {
    protected $table = 'variation_value_template';

    public static function getVariationValues( $variation_template ) {
        $variation_values = DB::table( 'variation_value_template' )->select(
            DB::raw( 'variation_value_template.id' ),
            DB::raw( 'variation_value_template.variation_temp_id' ),
            DB::raw( 'variation_value_template.name as var_value_name' )
        )
        ->where( 'variation_value_template.variation_temp_id', $variation_template )
        ->get();

        return $variation_values;
    }

    /** Same as one above but this is filtered using id
    * Used for adding more variation values
    * Will never be used anywhere again
    * Only used in PropertyController@addMoreVariationValues
    */
    public static function getVarValues( $variation_template ) {
        $variation_values = DB::table( 'variation_value_template' )->select(
            DB::raw( 'variation_value_template.id' ),
            DB::raw( 'variation_value_template.variation_temp_id' ),
            DB::raw( 'variation_value_template.name as var_value_name' )
        )
        ->where( 'variation_value_template.id', $variation_template )
        ->get();

        return $variation_values;
    }

    /** USed to edit room variation value */
    public static function getVars() {
        $variation_values = DB::table( 'variation_value_template' )->select(
            DB::raw( 'variation_value_template.id' ),
            DB::raw( 'variation_value_template.variation_temp_id' ),
            DB::raw( 'variation_value_template.name as var_value_name' )
        )
        ->get();

        return $variation_values;
    }
}

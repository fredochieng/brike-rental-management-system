<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Variation extends Model {
    protected $table = 'variations';

    public static function getVariationValues( $property_id ) {
        $variations = DB::table( 'variations' )->select(
            DB::raw( 'variations.*' )
        )
        ->where( 'variations.property_id', $property_id )
        ->get();

        return $variations;
    }
    /** Get variation counts for dashboard statistics */
    public static function variationValuesSum() {
        $tot_variations = DB::table( 'variations' )->select(
            DB::raw( 'variations.*' )
        )
        ->get();

        return $tot_variations;
    }
}

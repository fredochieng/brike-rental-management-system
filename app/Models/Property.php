<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Property extends Model {
    protected $table = 'properties';

    public static function getProperty() {
        $property = DB::table( 'properties' )->select(
            DB::raw( 'properties.*' ),
            DB::raw( 'properties.id as property_id' ),
            DB::raw( 'properties.created_at as prop_created_at' ),
            DB::raw( 'property_categories.id as cat_id' ),
            DB::raw( 'property_categories.category_name' ),
            DB::raw( 'property_variations.id as prop_var_id' ),
            DB::raw( 'variation_template.id as var_id' ),
            DB::raw( 'variation_template.temp_name' )
        )
        ->leftJoin( 'property_categories', 'properties.category_id', 'property_categories.id' )
        ->leftJoin( 'property_variations', 'properties.id', 'property_variations.property_id' )
        ->leftJoin( 'variation_template', 'property_variations.variation_temp_id', 'variation_template.id' )
        ->orderBy( 'properties.id', 'desc' )
        ->get();

        return $property;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PropertyCategories extends Model {
    protected $table = 'property_categories';

    public static function getPropertyCategories() {
        $categories  =  PropertyCategories::select( 'property_categories.*',
        DB::raw( 'property_categories.*' ),
        DB::raw( 'property_categories.id as category_id' ),
        DB::raw( '(select category_id from properties where property_categories.id = properties.category_id order by id asc limit 1) as prop_cat_id' ) )
        ->orderBy( 'property_categories.id', 'desc' )
        ->get();

        return $categories;

    }

}

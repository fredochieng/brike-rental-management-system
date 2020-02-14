<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class PropertyCategories extends Model {
    protected $table = 'property_categories';

    public static function getPropertyCategories() {
        $categories = DB::table( 'property_categories' )->select(
            DB::raw( 'property_categories.*' ),
            DB::raw( 'property_categories.id as category_id' )
        )
        ->orderBy( 'property_categories.id', 'desc' )
        ->get();

        // $categories = PropertyCategories::all();
        // dd( $categories );

        return $categories;

    }

}

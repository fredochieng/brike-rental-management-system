<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Property extends Model
{
    protected $table = 'properties';
    
    public static function getProperty(){
        $property = DB::table('properties')->select(
                    DB::raw('properties.*'),
                    DB::raw('properties.id as property_id'),
                    DB::raw('properties.created_at as prop_created_at'),
                    DB::raw('property_categories.id as cat_id'),
                    DB::raw('property_categories.category_name')
    )
    ->leftJoin('property_categories', 'properties.category_id', 'property_categories.id')
    ->orderBy('properties.id', 'desc')
    ->get();

    return $property;
    }
}

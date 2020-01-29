<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    public static function getRooms(){
        $rooms = DB::table('rooms')->select(
            DB::raw('rooms.*'),
            DB::raw('rooms.id as room_id'),
            DB::raw('rooms.created_at as r_created_at'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.prop_name')
        )
        ->leftJoin('properties', 'rooms.property_id', 'properties.id')
        ->orderBy('rooms.id', 'desc')->get();

      return $rooms;
    }

    //   public static function getVariationRooms($variation_val_id){
    //     $rooms = DB::table('rooms')->select(
    //         DB::raw('rooms.*'),
    //         DB::raw('rooms.id as room_id'),
    //         DB::raw('rooms.created_at as r_created_at'),
    //         DB::raw('properties.id as prop_id'),
    //         DB::raw('properties.prop_name')
    //     )
    //     ->where('variation_val_id', $variation_val_id)
    //     ->leftJoin('properties', 'rooms.property_id', 'properties.id')
    //     ->orderBy('rooms.id', 'desc')->get();

    //   return $rooms;
    //}
}

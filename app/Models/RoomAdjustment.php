<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class RoomAdjustment extends Model {
    protected $table = 'room_adjustments';

    public static function getRoomAdjustmenst() {
        $room_adjustments = DB::table( 'room_adjustments' )->select(
            DB::raw( 'room_adjustments.*' ),
            DB::raw( 'room_adjustments.id as r_adjustments_id' ),
            DB::raw( 'room_adjustments.created_at as r_adjustments_date' ),
            DB::raw( 'variations.property_id' ),
            DB::raw( 'variations.variation_value_id' ),
            DB::raw( 'variations.var_name' ),
            DB::raw( 'properties.id' ),
            DB::raw( 'properties.prop_name' )
        )
        ->leftJoin( 'variations', 'room_adjustments.var_val_id', 'variations.variation_value_id' )
        ->leftJoin( 'properties', 'variations.property_id', 'properties.id' )
        ->orderBy( 'room_adjustments.id', 'asc' )
        // ->groupBy( 'room_adjustments.var_val_id' )
        ->get();

        return $room_adjustments;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class RoomAssignment extends Model {
    protected $table = 'room_assignments';

    public static function getRoomAssignments() {
        $room_assignments = DB::table( 'room_assignments' )->select(
            DB::raw( 'room_assignments.*' ),
            DB::raw( 'room_assignments.id as r_assignment_id' ),
            DB::raw( 'room_assignments.created_at as r_assignment_created_at' ),
            DB::raw( 'tenants.id as t_id' ),
            DB::raw( 'tenants.t_name' ),
            DB::raw( 'tenants.t_phone' ),
            DB::raw( 'rooms.id as rm_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'rooms.variation_val_id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'rooms.max_occupants' ),
            DB::raw( 'variation_value_template.id' ),
            DB::raw( 'variation_value_template.name as var_name_value' ),
            DB::raw( 'properties.id' ),
            DB::raw( 'properties.prop_name' )
        )
        ->leftJoin( 'tenants', 'room_assignments.tenant_id', 'tenants.id' )
        ->leftJoin( 'rooms', 'room_assignments.room_id', 'rooms.id' )
        ->leftJoin( 'properties', 'rooms.property_id', 'properties.id' )
        ->leftJoin( 'variation_value_template', 'rooms.variation_val_id', 'variation_value_template.id' )
        ->orderBy( 'room_assignments.id', 'desc' )
        ->get();

        return $room_assignments;
    }

    public static function getLatestRoomAssignments() {
        $latest_room_assignments = DB::table( 'room_assignments' )->select(
            DB::raw( 'room_assignments.*' ),
            DB::raw( 'room_assignments.id as r_assignment_id' ),
            DB::raw( 'room_assignments.created_at as r_assignment_created_at' ),
            DB::raw( 'tenants.id as t_id' ),
            DB::raw( 'tenants.t_name' ),
            DB::raw( 'tenants.t_phone' ),
            DB::raw( 'rooms.id as rm_id' ),
            DB::raw( 'rooms.property_id' ),
            DB::raw( 'rooms.variation_val_id' ),
            DB::raw( 'rooms.room_no' ),
            DB::raw( 'rooms.max_occupants' ),
            DB::raw( 'variation_value_template.id' ),
            DB::raw( 'variation_value_template.name as var_name_value' ),
            DB::raw( 'properties.id' ),
            DB::raw( 'properties.prop_name' )
        )
        ->leftJoin( 'tenants', 'room_assignments.tenant_id', 'tenants.id' )
        ->leftJoin( 'rooms', 'room_assignments.room_id', 'rooms.id' )
        ->leftJoin( 'properties', 'rooms.property_id', 'properties.id' )
        ->leftJoin( 'variation_value_template', 'rooms.variation_val_id', 'variation_value_template.id' )
        ->orderBy( 'room_assignments.id', 'desc' )
        ->limit( 7 )
        ->get();

        return $latest_room_assignments;
    }
}

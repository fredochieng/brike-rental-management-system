<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tenants extends Model {
    protected $table = 'tenants';

    public static function getTenants() {
        // $tenants = DB::table( 'tenants' )->select(
        //     DB::raw( 'tenants.*' ),
        //     DB::raw( 'tenants.id as tenant_id' ),
        //     DB::raw( 'tenants.created_at as t_created_at' ),
        //     DB::raw( 'properties.id as property_id' ),
        //     DB::raw( 'properties.prop_name' ),
        //     DB::raw( 'room_assignments.tenant_id as t_id' ),
        //     DB::raw( 'room_assignments.r_start_date' ),
        //     DB::raw( 'room_assignments.r_end_date' )
        // )
        // ->leftJoin( 'properties', 'tenants.t_property_id', 'properties.id' )
        // ->leftJoin( 'room_assignments', 'tenants.id', 'room_assignments.tenant_id' )
        // ->orderBy( 'tenants.id', 'desc' )
        // ->get();

        $tenants  =   Tenants::select( 'tenants.*',
        DB::raw( 'tenants.*' ),
        DB::raw( 'tenants.id as tenant_id' ),
        DB::raw( 'tenants.created_at as t_created_at' ),
        DB::raw( 'properties.id as property_id' ),
        DB::raw( 'properties.prop_name' ),
        DB::raw('rooms.id as rm_idd'),
        DB::raw('rooms.room_no'),
        DB::raw( '(select tenant_id as t_id from room_assignments where tenant_id = tenants.id order by id asc limit 1) as t_tenant_id' )
        )
        ->leftJoin( 'properties', 'tenants.t_property_id', 'properties.id' )
        ->join( 'rooms', 'rooms.id', 'tenants.t_room_id' )
        ->orderBy( 'tenants.id', 'desc' )
        ->get();

        
        return $tenants;
    }

    /** Get total tenants for dashboard stats */
    public static function getTotalTenants() {
        $tot_tenants = DB::table( 'tenants' )->select(
            DB::raw( 'tenants.*' )
        )
        ->orderBy( 'tenants.id', 'desc' )
        ->get();
        return $tot_tenants;
    }
}

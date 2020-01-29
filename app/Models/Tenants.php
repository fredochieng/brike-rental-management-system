<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tenants extends Model
{
    protected $table = 'tenants';

    public static function getTenants(){
        $tenants = DB::table('tenants')->select(
            DB::raw('tenants.*'),
            DB::raw('tenants.id as tenant_id'),
            DB::raw('tenants.created_at as t_created_at'),
            DB::raw('properties.id as property_id'),
            DB::raw('properties.prop_name')
        )
        ->leftJoin('properties', 'tenants.t_property_id', 'properties.id')
        ->orderBy('tenants.id', 'desc')
        ->get();
        return $tenants;
    }
}

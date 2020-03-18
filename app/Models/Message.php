<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Message extends Model
{
    protected $table = 'messages';

    public static function getMessages()
    {
        $messages = DB::table('messages')->select(
            DB::raw('messages.*')
        )
            ->orderBy('messages.id', 'asc')
            ->get();

        return $messages;
    }

    public static function getSMSs()
    {
        $sms = DB::table('messages')->select(
            DB::raw('messages.*'),
            DB::raw('messages.id as message_id'),
            DB::raw('tenants.id as t_id'),
            DB::raw('tenants.t_phone'),
            DB::raw('tenants.t_name'),
            DB::raw('tenants.t_property_id'),
            DB::raw('properties.id as prop_id'),
            DB::raw('properties.prop_name'),
            DB::raw('room_assignments.tenant_id'),
            DB::raw('room_assignments.room_id'),
            DB::raw('rooms.id as r_id'),
            DB::raw('rooms.room_no')
        )
            ->leftJoin('tenants', 'messages.phone_no', '=', 'tenants.t_phone')
            ->leftJoin('properties', 'tenants.t_property_id', '=', 'properties.id')
            ->leftJoin('room_assignments', 'tenants.id', '=', 'room_assignments.tenant_id')
            ->leftJoin('rooms', 'room_assignments.room_id', '=', 'rooms.id')
            ->orderBy('messages.id', 'desc')
            ->get();

        return $sms;
    }
}

<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model {
    protected $table = 'expenses';

    public static function getExpenses() {
        $expenses = DB::table( 'expenses' )->select(
            DB::raw( 'expenses.*' ),
            DB::raw( 'expenses.id as expense_id' ),
            DB::raw( 'expenses.created_at as expense_created_at' ),
            DB::raw( 'properties.id as prop_id' ),
            DB::raw( 'properties.prop_name' )
        )
        ->leftJoin( 'properties', 'expenses.exp_property_id', 'properties.id' )
        ->orderBy( 'expenses.id', 'desc' )
        ->get();

        return $expenses;
    }
}

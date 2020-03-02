<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class ExpensesController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $data['property'] = Property::getProperty();
        $data['currency_symbol'] = 'KES';
        $property_id = Input::get( 'property_id' );
        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) ) {

            $data['searched'] = 'yes';

            $data['searched_expenses'] = Expenses::getExpenses()->where( 'exp_property_id', $property_id );

            return view( 'expenses.index' )->with( $data );
        }
        $data['searched'] = 'no';
        $data['expenses'] = Expenses::getExpenses();

        return view( 'expenses.index' )->with( $data );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $property_id = $request->input( 'property_id' );
        $expense_title = ucwords( $request->input( 'expense_title' ) );
        $expense_amount = $request->input( 'expense_amount' );

        $expense = new Expenses();
        $expense->exp_property_id = $property_id;
        $expense->expense_title = $expense_title;
        $expense->expense_amount = $expense_amount;

        $expense->save();

        Toastr::success( 'Expense added successfully' );
        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Expenses  $expenses
    * @return \Illuminate\Http\Response
    */

    public function show( Expenses $expenses ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Expenses  $expenses
    * @return \Illuminate\Http\Response
    */

    public function edit( Expenses $expenses ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Expenses  $expenses
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $expense_id ) {
        $now = Carbon::now( 'Africa/Nairobi' )->toDateTimeString();

        /** Get expense data from edit expense form **/
        $property_id = $request->input( 'property_id' );
        $expense_title = ucwords( $request->input( 'expense_title' ) );
        $expense_amount = $request->input( 'expense_amount' );

        $expense_data = array(
            'exp_property_id' => $property_id,
            'expense_title' => $expense_title,
            'expense_amount' => $expense_amount
        );
        $update_expense = Expenses::where( 'id', $expense_id )->update( $expense_data );

        /** Log the action in the logs file */
        Log::info( 'Expense of ID ' . $expense_id .  ' updated'.
        ' at ' . $now );

        Toastr::success( 'Expense updated successfully' );

        return back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Expenses  $expenses
    * @return \Illuminate\Http\Response
    */

    public function destroy( Expenses $expenses ) {
        //
    }
}

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
        $property_id = Input::get( 'property_id' );
        /** Get the search value and perform the neccessary queries */
        if ( isset( $_GET['property_id'] ) ) {

            $data['searched'] = 'yes';

            $data['searched_expenses'] = Expenses::getExpenses()->where( 'exp_property_id', $property_id );

            $total_expenses = count( $data['searched_expenses'] );

            if ( count( $data['searched_expenses'] ) == 0 ) {

                Toastr::info( 'No expenses found for your query' );

                return view( 'expenses.index' )->with( $data );

            } elseif ( count( $data['searched_expenses'] ) > 0 ) {

                Toastr::success( $total_expenses . ' record found for your query' );

                return view( 'expenses.index' )->with( $data );
            }
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

    public function update( Request $request, Expenses $expenses ) {
        //
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

@extends('layout.master')
@section('title', 'Expense Listing')
@section('parentPageTitle', 'Expenses')

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('ExpensesController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search expenses by property</label>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search expense</span></button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@if($searched == 'yes')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addExpenseModal" data-toggle="modal" data-target="#addExpenseModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD EXPENSE
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Expense Title</th>
                                <th>Expense Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($searched_expenses as $count => $expense)
                            <tr>
                                <td>{{ $expense->prop_name }}</td>
                                <td>{{ $expense->expense_title }}</td>
                                <td>{{ $currency_symbol}} {{number_format($expense->expense_amount,2,'.',',') }}</td>
                                <td>{{ $expense->expense_created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#editExpenseModal_{{$expense->expense_id}}"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i>
                                                Edit
                                                expense</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('expenses.modals.modal-edit-expense')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addExpenseModal" data-toggle="modal" data-target="#addExpenseModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD EXPENSE
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Expense Title</th>
                                <th>Expense Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $count => $expense)
                            <tr>
                                <td>{{ $expense->prop_name }}</td>
                                <td>{{ $expense->expense_title }}</td>
                                <td>{{ $currency_symbol}} {{number_format($expense->expense_amount,2,'.',',') }}</td>
                                <td>{{ $expense->expense_created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#editExpenseModal_{{$expense->expense_id}}"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i>
                                                Edit
                                                expense</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('expenses.modals.modal-edit-expense')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@include('expenses.modals.modal-add-expense')
@stop
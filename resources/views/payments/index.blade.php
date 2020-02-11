@extends('layout.master')
@section('title', 'Payment Transactions')
@section('parentPageTitle', 'Payments')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:13px">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $count => $item)
                            <tr>
                                <td>{{ $item->trans_id}}</td>
                                <td>{{ $currency_symbol }} {{number_format($item->trans_amount, 2, '.', ',')}}</td>
                                <td>{{ $item->msisdn}}</td>
                                <td>{{ $item->first_name}} {{ $item->last_name }}</td>
                                <td>{{ $item->bill_ref_no}}</td>
                                <td>{{ $item->prop_name}}</td>
                                <td>{{ $item->t_name}}</td>
                                <td>{{ $item->t_phone}}</td>
                                <td>{{ $item->trans_created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
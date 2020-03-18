@extends('layout.master')
@section('title', 'Payment Transactions')
@section('parentPageTitle', 'Payments')


@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('TransactionsController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search transactions by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" id="pay_property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="room_no" id="prop_room_id">
                                <option value="">Select room number</option>
                                <option value="" disabled="true">Select property first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search transactions</span></button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@if ($searched == 'yes')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:11px">
                        <thead>
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Tenant</th>
                                <th>Phone</th>
                                <th>Confirmed</th>
                                <th>Status</th>
                                <th>Paid At</th>
                                <th>Action</th>
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
                                @if ($item->trans_confirmed == 1)
                                <td><span class="badge badge-success">Yes</span></td>
                                @elseif($item->trans_confirmed == 0)
                                <td><span class="badge badge-danger">No</span></td>
                                @endif
                                @if ($item->cron_processed == 1)
                                <td><span class="badge badge-success">Processed</span></td>
                                @elseif($item->cron_processed == 0)
                                <td><span class="badge badge-danger">Pending</span></td>
                                @endif
                                <td>{{ $item->trans_date}}</td>
                                <td>
                                    @if ($item->trans_confirmed == 0)
                                    <a href="/payment/manage/&id={{$item->transaction_id}}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-check"></i>
                                        <span>Confirm payment</span></a>
                                    @else
                                    Already confirmed
                                    @endif
                                </td>
                            </tr>
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
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:11px">
                        <thead>
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Tenant</th>
                                <th>Phone</th>
                                <th>Confirmed</th>
                                <th>Status</th>
                                <th>Paid At</th>
                                <th>Action</th>
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
                                @if ($item->trans_confirmed == 1)
                                <td><span class="badge badge-success">Yes</span></td>
                                @elseif($item->trans_confirmed == 0)
                                <td><span class="badge badge-danger">No</span></td>
                                @endif
                                @if ($item->cron_processed == 1)
                                <td><span class="badge badge-success">Processed</span></td>
                                @elseif($item->cron_processed == 0)
                                <td><span class="badge badge-danger">Pending</span></td>
                                @endif
                                <td>{{ $item->trans_date}}</td>
                                <td>
                                    @if ($item->trans_confirmed == 0)
                                    <a href="/payment/manage/&id={{$item->transaction_id}}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-check"></i>
                                        <span>Confirm payment</span></a>
                                    @else
                                    Already confirmed
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@stop
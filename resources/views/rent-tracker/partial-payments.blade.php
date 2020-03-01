@extends('layout.master')
@section('title', 'Rent Payment Tracker')
@section('parentPageTitle', 'Partial Payments')

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('MonthlyPaymentController@partialRentPayments'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search payment trackers by property</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search payment trackers</span></button>
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
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Room No</th>
                                <th>Period</th>
                                <th>Rent Amount</th>
                                <th>Amount Paid</th>
                                <th>Balance Due</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        @foreach ($payment_tracks as $count => $rent_track)
                        <tr>
                            <td>{{ $rent_track->prop_name }}</td>
                            <td>{{ $rent_track->room_no }}</td>
                            <td>{{ $rent_track->period }}</td>
                            <td>{{$currency_symbol}} {{ number_format($rent_track->rent_amount, 2, '.', ',') }}</td>
                            <td>{{$currency_symbol}} {{ number_format($rent_track->amount_paid, 2, '.', ',') }}</td>
                            <td>{{$currency_symbol}} {{ number_format($rent_track->balance_due, 2, '.', ',') }}</td>
                            @if ($rent_track->payment_status == 1)
                            <td><span class="badge badge-success">{{ $rent_track->rent_status }}</span></td>
                            @elseif($rent_track->payment_status == 2)
                            <td><span class="badge badge-warning">{{ $rent_track->rent_status }}</span></td>
                            @elseif($rent_track->payment_status == 3)
                            <td><span class="badge badge-danger">{{ $rent_track->rent_status }}</span></td>
                            @endif
                        </tr>
                        @endforeach
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
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Room No</th>
                                <th>Period</th>
                                <th>Rent Amount</th>
                                <th>Amount Paid</th>
                                <th>Balance Due</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@stop
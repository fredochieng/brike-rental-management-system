@extends('layout.master')
@section('title', 'Manage Payment')
@section('parentPageTitle', 'Pages')


@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card invoice1">
                <div class="body">
                    <div class="invoice-top clearfix">
                        <div class="logo">
                            <img src="../../assets/img/sm/mpesa_logo.png" alt="user" class="rounded-circle img-fluid">
                        </div>
                        <div class="info">
                            <h6>Paid By: {{ $payments->first_name }} {{ $payments->last_name }}</h6>
                            <p><strong>Mobile:</strong> {{ $payments->msisdn }} <br>
                                <strong>Amount:</strong> {{ $currency_symbol }} {{ number_format($payments->trans_amount, 2,'.',',') }}<br>
                                <strong>Account No:</strong> {{ $payments->bill_ref_no }} <br>

                            </p>
                        </div>
                        <div class="title">
                            <strong>MPESA transaction code:</strong> {{ $payments->trans_id  }}<br>
                            <strong>Paybill:</strong> {{ $payments->bus_shortcode  }}<br>
                            <strong>Payment Mode:</strong> {{ $payments->payment_method  }}<br>
                            <strong>Date:</strong> {{ $payments->trans_created_at }}

                        </div>
                    </div>
                    <hr>
                    <div class="invoice-top clearfix">
                        <div class="logo">
                            <img src="../../assets/img/sm/user_avatar.jpg" alt="user" class="rounded-circle img-fluid">
                        </div>
                        <div class="info">
                            <h6>Tenant Name: {{ $tenant_name }}</h6>
                            <strong>Mobile:</strong> {{ $tenant_phone }}<br>
                            <strong>Room No:</strong> {{ $tenant_room }}<br>
                        </div>

                        <div class="title">
                            <h6>Payment Information</h6>
                            @if($trans_confirmed == 'Yes')
                                <strong>Payment Confirmed:</strong> <span class="badge badge-success">{{ $trans_confirmed }}</span><br>
                            @else
                                <strong>Payment Confirmed:</strong> <span class="badge badge-warning">{{ $trans_confirmed }}</span><br>
                            @endif
                            @if($cron_processed == 'Processed')
                                <strong>Payment Processed:</strong> <span class="badge badge-success">{{ $cron_processed }}</span><br>
                            @else
                                <strong>Payment Processed:</strong> <span class="badge badge-warning">{{ $cron_processed }}</span><br>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-primary">
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Account No</th>
                                <th>Property</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Paid At</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $payments->trans_id }}</td>
                                <td>{{ $currency_symbol }} {{number_format($payments->trans_amount, 2, '.', ',')}}</td>
                                <td>{{ $payments->msisdn}}</td>
                                <td>{{ $payments->first_name}} {{ $payments->last_name }}</td>
                                <td>{{ $payments->bill_ref_no}}</td>
                                @if($payments->prop_name == '')
                                    <td>Not available</td>
                                @else
                                    <td>{{ $payments->prop_name}}</td>
                                @endif

                                @if($payments->t_name == '')
                                    <td>Not available</td>
                                @else
                                    <td>{{ $payments->t_name}}</td>
                                @endif

                                @if($payments->t_phone == '')
                                    <td>Not available</td>
                                @else
                                    <td>{{ $payments->t_phone}}</td>
                                @endif
                                <td>{{ $payments->trans_created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <h5>Payment Note</h5>
                            <p>Payment for rent by {{ $payments->first_name}} {{ $payments->last_name }} through mobile number {{ $payments->t_phone}} at
                                {{ $payments->trans_created_at}}. <br> Mpesa confirmation code {{ $payments->trans_id }} </p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="m-b-0"><b>Sub-total: </b>{{ $currency_symbol }} {{number_format($payments->trans_amount, 2, '.', ',')}}</p>
                            <p class="m-b-0">Discount: 0.00%</p>
                            <p class="m-b-0">VAT: 0.00%</p>
                            <h3 class="m-b-0 m-t-10">{{ $currency_symbol }} {{number_format($payments->trans_amount, 2, '.', ',')}}</h3>
                        </div>
                        <div class="hidden-print col-md-12 text-right">
                            <hr>
                            <a href="" data-target="#confirmPaymentModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-primary">
                                <i class="fa fa-check"></i>
                                <span>Confirm Payment</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('payments.modals.modal-confirm-payment')
@stop

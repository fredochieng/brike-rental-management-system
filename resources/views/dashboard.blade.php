@extends('layout.master')
@section('title', 'Dashboard')
@section('parentPageTitle', 'Dashboard')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-building"></i> </div>
                <div class="content">
                    <div class="text">Property for rent</div>
                    <h5 class="number">{{ $total_property }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="icon-home"></i> </div>
                <div class="content">
                    <div class="text">Vacant rooms</div>
                    <h5 class="number">{{number_format($sum_total_vacant_rooms, 0, '.',',') }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="icon-list"></i> </div>
                <div class="content">
                    <div class="text">Rented rooms</div>
                    <h5 class="number">{{ $sum_total_rented_rooms }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-success"><i class="icon-users"></i> </div>
                <div class="content">
                    <div class="text">Tenants</div>
                    <h5 class="number">{{ $tot_tenants }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-money"></i> </div>
                <div class="content">
                    <div class="text">Rent income</div>
                    <h5 class="number">{{ $currency_symbol }} {{ $sum_rent_payments }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="fa fa-dollar"></i> </div>
                <div class="content">
                    <div class="text">Expenses</div>
                    <h5 class="number">KES 56,700</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="fa fa-money"></i> </div>
                <div class="content">
                    <div class="text">Rent arrears</div>
                    <h5 class="number">KES 32,059</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-success"><i class="fa fa-dollar"></i> </div>
                <div class="content">
                    <div class="text">Deposits</div>
                    <h5 class="number">KES 234,647</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Transactions Chart</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Select property</a></li>
                            <li><a href="javascript:void(0);">Skylax Apertments</a></li>
                            <li><a href="javascript:void(0);">Oarklands Apartments</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Annual Revenue </span>
                        <h3 class="text-info">{{ $currency_symbol }} {{ $sum_rent_payments }}</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Rent Due</span>
                        <h3 class="text-warning">KES 34,000</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Total Deposits</span>
                        <h3 class="text-success">KES 357,915</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Total Expense</span>
                        <h3 class="text-danger">KES 79,915</h3>
                    </div>
                </div>
                <div id="area_chart" class="graph"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-7">
        <div class="card">
            <div class="header">
                <h2>Recent Payments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0" style="font-size:11px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Paid At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                            <tr>
                                <td>{{ $item->trans_id}}</td>
                                <td>{{ $currency_symbol }} {{number_format($item->trans_amount, 2, '.', ',')}}</td>
                                <td>{{ $item->msisdn}}</td>
                                <td>{{ $item->first_name}} {{ $item->last_name }}</td>
                                <td>{{ $item->bill_ref_no}}</td>
                                <td>{{ $item->prop_name}}</td>
                                <td>{{ $item->trans_created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="header">
                <h2>Recent Room Assignments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0" style="font-size:11px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room_assignments as $count => $r_assignments)
                            <tr>
                                <td>{{ $r_assignments->prop_name }}</td>
                                <td>{{ $r_assignments->var_name_value }}</td>
                                <td>{{ $r_assignments->room_no }}</td>
                                <td>{{ $r_assignments->t_name }}</td>
                                <td>{{ $r_assignments->t_phone }}</td>
                                <td>{{ $r_assignments->r_start_date }}</td>
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
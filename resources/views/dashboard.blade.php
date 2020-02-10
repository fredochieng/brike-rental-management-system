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
                    <h5 class="number">53,251</h5>
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
                    <h5 class="number">356</h5>
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
                    <h5 class="number">320</h5>
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
                    <h5 class="number">36</h5>
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
                    <h5 class="number">KES 530,251</h5>
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
                <h2>Recent Transactions</h2>
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
                        <h3 class="text-info">KES 634,481</h3>
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
    <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Recent Payments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-primary">
                            <tr>
                                <th>Trans ID</th>
                                <th>Name</th>
                                <th>Account</th>
                                <th>Room</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>2020-02-07 14:34:26</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>2020-02-07 14:34:26</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>2020-02-07 14:34:26</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                                <td>2020-02-07 14:34:26</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Recent Room Assignments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0">
                        <thead class="thead-primary">
                            <tr>
                                <th>Trans ID</th>
                                <th>Name</th>
                                <th>Account</th>
                                <th>Room</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                            </tr>
                            <tr>
                                <td><span class="list-name">OU 00456</span></td>
                                <td>Joseph</td>
                                <td>0708534343</td>
                                <td>A1</td>
                                <td>KES 2,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
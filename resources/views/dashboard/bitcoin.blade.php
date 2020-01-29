@extends('layout.master')
@section('title', 'Cryptocurrency')
@section('parentPageTitle', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                <div class="icon"><img src="../assets/img/coin/BTC.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Bitcoin</div>
                    <h5 class="number">0.005034</h5>
                </div>
            </div>                        
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/ETH.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Ethereum</div>
                    <h5 class="number">0.000359</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/XRP.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Ripple</div>
                    <h5 class="number">0.000025</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/neo.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Neo</div>
                    <h5 class="number">0.000482</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                <div class="icon"><img src="../assets/img/coin/qtum.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Cardano</div>
                    <h5 class="number">0.000434</h5>
                </div>
            </div>                        
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/stellar.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Stellar</div>
                    <h5 class="number">0.000125</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/ETC.svg" width="35" /></div>
                <div class="content">
                    <div class="text">RaiBlocks</div>
                    <h5 class="number">0.000009</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12">
        <div class="card top_counter currency_state">
            <div class="body">
                    <div class="icon"><img src="../assets/img/coin/XRP.svg" width="35" /></div>
                <div class="content">
                    <div class="text">Monero</div>
                    <h5 class="number">0.000725</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Popular Cryptocurrency<small>15% High then last month</small></h2>
            </div>
            <div class="body text-center">                            
                <div class="Popular_Cryptocurrency">6,4,8</div>                            
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/img/coin/BTC.svg"  width="35" />
                                </td>
                                <td>
                                    <small>Bitcoin BTC</small>
                                    <h5 class="m-b-0">0.00015434</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="4" data-bar-Color="#393c3e">-2,3,5,6,7,-8,7,4,6,-5</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/img/coin/neo.svg"  width="35" />
                                </td>
                                <td>
                                    <small>Neo NEO</small>
                                    <h5 class="m-b-0">0.00000015</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="4" data-bar-Color="#393c3e">8,5,-3,2,2,3,-5,-6,-7,5</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/img/coin/DASH.svg"  width="35" />
                                </td>
                                <td>
                                    <small>Dash DASH</small>
                                    <h5 class="m-b-0">0.00000952</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="4" data-bar-Color="#393c3e">-6,-5,4,6,5,5,-2,3,4,-2</div>
                                </td>
                            </tr>                                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card user_statistics">
            <div class="header">
                <h2>User Statistics</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">                            
                <div id="user_statistics" class="ct-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Top Selling Country</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="world-map-markers" class="jvector-map" style="height: 290px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>New Orders</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="thead-success">
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Customers</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Bitcoin BTC</td>
                                <td>
                                    <ul class="list-unstyled team-info margin-0">                                                
                                        <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>$ 356</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Neo NEO</td>
                                <td>
                                    <ul class="list-unstyled team-info margin-0">                                                
                                        <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>                                                
                                        <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>$ 542</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Dash DASH</td>
                                <td>
                                    <ul class="list-unstyled team-info margin-0">                                                
                                        <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>$ 356</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Ripple XRP</td>
                                <td>
                                    <ul class="list-unstyled team-info margin-0">                                                
                                        <li><img src="../assets/img/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                                        <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>$ 542</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Active Order</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Amount BTC</th>
                                <th>BTC Remaining</th>
                                <th>Price</th>
                                <th>USD</th>
                                <th>Fee (%)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.58647</td>
                                <td>
                                    0.58647</td>
                                <td>11900.12</td>
                                <td>$ 1597.78</td>
                                <td>0.023</td>
                                <td>
                                    <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:50:50</td>
                                <td>Sell</td>
                                <td>
                                    1.38647</td>
                                <td>
                                    0.38647</td>
                                <td>11905.09</td>
                                <td>$ 2496.36</td>
                                <td>0.017</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:49:51</td>
                                <td >Buy</td>
                                <td>
                                    0.45879</td>
                                <td>
                                    0.45879</td>
                                <td>11901.85</td>
                                <td>$ 3165.44</td>
                                <td>0.013</td>
                                <td>
                                    <button class="btn btn-sm round btn-outline-success"> Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.89877</td>
                                <td>
                                    0.89877</td>
                                <td>11899.28</td>
                                <td>$ 25830.6</td>
                                <td>0.011</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Sell</td>
                                <td>
                                    0.45712</td>
                                <td>
                                    0.45712</td>
                                <td>11908.19</td>
                                <td>$ 2586.34</td>
                                <td>0.024</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.58647</td>
                                <td>
                                    0.58647</td>
                                <td>11900.12</td>
                                <td>$ 1597.78</td>
                                <td>0.023</td>
                                <td>
                                    <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:50:50</td>
                                <td>Sell</td>
                                <td>
                                    1.38647</td>
                                <td>
                                    0.38647</td>
                                <td>11905.09</td>
                                <td>$ 2496.36</td>
                                <td>0.017</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.58647</td>
                                <td>
                                    0.58647</td>
                                <td>11900.62</td>
                                <td>$ 5623.59</td>
                                <td>0.019</td>
                                <td>
                                    <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.89877</td>
                                <td>
                                    0.89877</td>
                                <td>11899.28</td>
                                <td>$ 25830.6</td>
                                <td>0.011</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Sell</td>
                                <td>
                                    0.45712</td>
                                <td>
                                    0.45712</td>
                                <td>11908.19</td>
                                <td>$ 2586.34</td>
                                <td>0.024</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:51:51</td>
                                <td>Buy</td>
                                <td>
                                    0.58647</td>
                                <td>
                                    0.58647</td>
                                <td>11900.12</td>
                                <td>$ 1597.78</td>
                                <td>0.023</td>
                                <td>
                                    <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                            <tr>
                                <td>28-July-2018 06:50:50</td>
                                <td>Sell</td>
                                <td>
                                    1.38647</td>
                                <td>
                                    0.38647</td>
                                <td>11905.09</td>
                                <td>$ 2496.36</td>
                                <td>0.017</td>
                                <td>
                                        <button class="btn btn-sm round btn-outline-success">Accept</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
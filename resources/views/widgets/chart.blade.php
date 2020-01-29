@extends('layout.master')
@section('title', 'Widgets Chart')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Top Products</h2>
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
                <div id="chart-top-products" class="chartist text-center"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">                       
            <div class="body text-center">
                <h4 class="margin-0">Total Sale</h4>
                <h6 class="m-b-20">2,45,124</h6>
                <input type="text" class="knob2" value="63" data-width="130" data-height="130" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-fgColor="#212121" readonly>                            
                <div class="sparkline" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="6" data-bar-Spacing="6" data-bar-Color="#9463f7">2,5,4,8,3,9,1,5</div>
                <h6 class="p-b-15">Weekly Earnings</h6>
                <div class="sparkline" data-type="bar" data-width="97%" data-height="40px" data-bar-Width="2" data-bar-Spacing="4" data-bar-Color="#3e8ef7">3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2</div>
                <h6>Monthly Earnings</h6>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card text-center">
            <div class="body">
                <h6>Income Analysis</h6>
                <span>8% High then last month</span>
                <div class="sparkline-pie m-t-30">6,4,8</div>
                <div class="stats-report m-b-30">
                    <div class="stat-item">
                    <h5>Science</h5>
                    <b class="col-black">84.60%</b></div>
                    <div class="stat-item">
                    <h5>Commerce</h5>
                    <b class="col-black">15.40%</b></div>
                    <div class="stat-item">
                    <h5>Atrs</h5>
                    <b class="col-black">5.10%</b></div>
                </div>
                <span id="sparkline-compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
            </div>
        </div>                    
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Visitors Statistics</h2>
            </div>
            <div class="body">
                <div id="Visitors_chart" class="flot-chart m-b-20"></div>
                <div class="row text-center">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-turquoise">                                        
                            <h4>2,025</h4>
                            <span>America</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-khaki">                                        
                            <h4>992</h4>
                            <span>Australia</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-parpl">                                        
                            <h4>1,025</h4>
                            <span>Canada</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-salmon">                                        
                            <h4>3,845</h4>
                            <span>India</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-blue">                                        
                            <h4>587</h4>
                            <span>UK</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="body xl-slategray">                                        
                            <h4>863</h4>
                            <span>Other</span>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Line Chart</h2>
            </div>
            <div class="body text-center">                            
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
                    data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="#b089ff"
                    data-fill-Color="#ebe1ff">1,8,2,5,6,7,3,4,1,9,3,7,2</div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <p class="mb-0">TYPE A</p>
                        <h6>320</h6>
                    </div>
                    <div class="col-4">
                        <p class="mb-0">TYPE B</p>
                        <h6>530</h6>
                    </div>
                    <div class="col-4">
                        <p class="mb-0">TYPE C</p>
                        <h6>300</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Commerce Department</h2>
            </div>
            <div class="body text-center">                           
                <div class="sparkline" data-type="bar" data-width="97%" data-height="85px" data-bar-Width="7" data-bar-Spacing="10" data-bar-Color="#02b5b2">2,8,3,4,6,2,3,8,7,6,5,2,1,8</div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <p class="mb-0">TYPE A</p>
                        <h6>320</h6>
                    </div>
                    <div class="col-4">
                        <p class="mb-0">TYPE B</p>
                        <h6>530</h6>
                    </div>
                    <div class="col-4">
                        <p class="mb-0">TYPE C</p>
                        <h6>300</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <div id="newline_chart" class="ct-chart"></div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card overflowhidden">
                    <div class="header">
                        <h2><strong>Project</strong> A</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <span>Overall<span>
                                <h6>70.40%</h6>
                            </div>
                            <div class="col-md-3 col-4">
                                <span>Montly</span>
                                <h6>25.80%</h6>
                            </div>
                            <div class="col-md-3 col-4">
                                <span>Day</span>
                                <h6>12.50%</h6>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#7868da"
                        data-fill-Color="#7868da"> 6,1,3,3,6,3,2,2,8,2 </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card overflowhidden">
                    <div class="header">
                        <h2><strong>Project</strong> B</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <span>Overall<span>
                                <h6>70.40%</h6>
                            </div>
                            <div class="col-md-3 col-4">
                                <span>Montly</span>
                                <h6>25.80%</h6>
                            </div>
                            <div class="col-md-3 col-4">
                                <span>Day</span>
                                <h6>12.50%</h6>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#f55c78"
                        data-fill-Color="#f55c78"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                </div>
            </div>
        </div>
    </div>

</div>            

<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Visit By Traffic Types <small>8% High then last month</small></h2>
            </div>
            <div class="body text-center">                            
                <div class="sparkline-pie2">6,4,8</div>                            
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover m-b-0">
                        <tbody>
                            <tr>
                                <td>
                                    <small>Page Views</small>
                                    <h5 class="m-b-0">32,211,536</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">2,3,5,6,9,8,7,8,7,4,6,5</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Site Visitors</small>
                                    <h5 class="m-b-0">23,516</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">8,5,3,2,2,3,5,6,4,5,7,5</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Total Clicks</small>
                                    <h5 class="m-b-0">4,536</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="4" data-bar-Spacing="7" data-bar-Color="#11a0f8">6,5,4,6,5,5,2,3,1,8,4,2</div>
                                </td>
                            </tr>                                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Donut Chart</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div id="donut_chart" class="ct-chart"></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from America</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Canada</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from UK</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from India</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Australia</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card overflowhidden bg-info">
            <div class="body">
                <h6 class="text-light">Daily Sales</h6>
            </div>
            <div class="sparkline" data-type="bar" data-width="97%" data-height="102px" data-bar-Width="6" data-bar-Spacing="15"
                data-bar-Color="#ffffff">7,5,6,4,8,7,5,6,2,3,5,11,2,3,4,1,4,7,2,3,6,4,5,5,6,2,3,5,6,2,3,4,2,4</div>
        </div>
    </div>

</div>

<div class="row clearfix">

    <div class="col-lg-6 col-md-12">
        <div class="card visitors-map">
            <div class="header">
                <h2>Our Location</h2><ul class="header-dropdown">
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
                <div id="world-map-markers" style="height:290px;"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card overflowhidden w_bitcoin">
            <div class="body">
                <small>BTC</small>
                <h2>0.0115</h2>
                <h6>Bitcoin Earnings</h6>
                <p>It is a long established fact that<br> a reader will be distracted <br> by the readable</p>
                <button class="btn btn-primary btn-simple ">View Statements </button>
            </div>
            <div id="sparkline16" class="text-center"></div>
        </div>
    </div>

</div>

@stop

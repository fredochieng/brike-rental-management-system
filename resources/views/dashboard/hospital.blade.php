@extends('layout.master')
@section('title', 'Hospital')
@section('parentPageTitle', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon"><i class="fa fa-user"></i> </div>
                        <div class="content">
                            <div class="text">New Patient</div>
                            <h5 class="number">58</h5>
                        </div>
                    </div>
                    <div class="body">
                        <div class="icon"><i class="fa fa-user-md"></i> </div>
                        <div class="content">
                            <div class="text">Operations</div>
                            <h5 class="number">14</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon"><i class="fa fa-eye"></i> </div>
                        <div class="content">
                            <div class="text">Visitors</div>
                            <h5 class="number">528</h5>
                        </div>
                    </div>
                    <div class="body">
                        <div class="icon"><i class="fa fa-university"></i> </div>
                        <div class="content">
                            <div class="text">Revenue</div>
                            <h5 class="number">$18,925</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon"><i class="fa fa-smile-o"></i> </div>
                        <div class="content">
                            <div class="text">Happy Clients</div>
                            <h5 class="number">528</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Hospital Survey</h2>
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
                <div id="area_chart" class="graph m-b-20"></div>
                <div class="row text-center">
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$106</h4>
                        <p class="text-muted margin-0"> Today's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$907</h4>
                        <p class="text-muted margin-0">This Week's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$4210</h4>
                        <p class="text-muted margin-0">This Month's</p>
                    </div>
                    <div class="col-sm-3 col-6">
                        <h4 class="margin-0">$7,000</h4>
                        <p class="text-muted margin-0">This Year's</p>
                    </div>
                </div>                            
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Heart Surgeries</h2>
            </div>
            <div class="body">
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                    data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#a89ee3"
                    data-fill-Color="#a89ee3"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Medical Treatment</h2>
            </div>
            <div class="body">
                <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                    data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                    data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#ffcd55"
                    data-fill-Color="#ffcd55"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>OPD Treatment</h2>                        
            </div>
            <div class="body">                        
                <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="5" data-bar-Spacing="10" data-bar-Color="#f56582">2,8,5,3,1,7,9,5,6,4,2,3,1</div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12 col-lg-8">
        <div class="card visitors-map">
            <div class="header">
                <h2>Visitors Statistics</h2>
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
                <div id="world-map-markers2" style="height: 300px;" class="jvector-map m-b-25"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from America</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Canada</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from UK</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from India</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Australia</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="progress-container m-b-20">
                            <span class="progress-badge">visitor from Other</span>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4CAF50" readonly>                        
                        <h6 class="m-t-10">Satisfaction Rate</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="26" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                        <h6 class="m-t-10">Operation Panding</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob2" value="76" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                        <h6 class="m-t-10">Productivity Goal</h6>                                    
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Browser Usage</h2>
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
                <div id="donut_chart" class="dashboard-donut-chart"></div>
                <table class="table m-t-25 m-b-0">
                    <tbody>
                        <tr>                                   
                            <td>Chrome</td>
                            <td>6985</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td>2697</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Safari</td>
                            <td>3597</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>
                        <tr>
                            <td>Firefox</td>
                            <td>2145</td>
                            <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Opera</td>
                            <td>1854</td>
                            <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                        </tr>                               
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Patients Status</h2>
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
               <p class="float-md-right">
                <span class="badge badge-success">3 Admit</span>
                <span class="badge badge-default">2 Discharge</span>
            </p>
            <div class="table-responsive table_middel">
                <table class="table m-b-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Patients</th>
                            <th>Adress</th>
                            <th>START Date</th>
                            <th>END Date</th>
                            <th>Priority</th>
                            <th>Progress</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{url('/')}}/assets/img/xs/avatar3.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>John</span></td>
                            <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                            <td>Sept 13, 2017</td>
                            <td>Sept 16, 2017</td>
                            <td><span class="badge badge-warning">MEDIUM</span></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                </div>
                            </td>
                            <td><span class="badge badge-success">Admit</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="{{url('/')}}/assets/img/xs/avatar1.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                            <td>Sept 13, 2017</td>
                            <td>Sept 22, 2017</td>
                            <td><span class="badge badge-warning">MEDIUM</span></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                </div>
                            </td>
                            <td><span class="badge badge-default">Discharge</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="{{url('/')}}/assets/img/xs/avatar4.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Dean Otto</span></td>
                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                            <td>Sept 13, 2017</td>
                            <td>Sept 23, 2017</td>
                            <td><span class="badge badge-warning">MEDIUM</span></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                </div>
                            </td>
                            <td><span class="badge badge-success">Admit</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="{{url('/')}}/assets/img/xs/avatar2.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Jack Bird</span></td>
                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                            <td>Sept 17, 2017</td>
                            <td>Sept 16, 2017</td>
                            <td><span class="badge badge-success">LOW</span></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                </div>
                            </td>
                            <td><span class="badge badge-default">Discharge</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="{{url('/')}}/assets/img/xs/avatar5.jpg" class="rounded-circle width30 m-r-15" alt="profile-image"><span>Hughe L.</span></td>
                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                            <td>Sept 18, 2017</td>
                            <td>Sept 18, 2017</td>
                            <td><span class="badge badge-danger">HIGH</span></td>
                            <td><div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                </div>
                            </td>
                            <td><span class="badge badge-success">Admit</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

@stop

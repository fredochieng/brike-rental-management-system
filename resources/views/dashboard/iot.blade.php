@extends('layout.master')
@section('title', 'IoT')
@section('parentPageTitle', 'Dashboard')
@section('content')
<div class="row clearfix">
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Weekly Use</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i
                                class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">All On</a></li>
                            <li><a href="javascript:void(0);">All Off</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="bar_chart" class="graph"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Day/Night Use</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i
                                class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">All On</a></li>
                            <li><a href="javascript:void(0);">All Off</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="donut_chart" class="graph"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>ENERGY USE</h6>
                    <span>250 kw/h</span>
                </div>
                <small class="text-muted">89% compared to average monthly use</small>
            </div>
            <div id="sparkline3" class="text-center"></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>LIGHTS</h6>
                    <span>6 Lights are ON</span>
                </div>
                <small class="text-muted">5% less than daily average</small>
            </div>
            <div id="sparkline2" class="text-center"></div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>DAILY AVG TEMPRATURE</h6>
                    <span>20° C</span>
                </div>
                <small class="text-muted">Outside Avg temprature is 32° C</small>
            </div>
            <div id="sparkline1" class="text-center"></div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="clearfix">
                    <div class="float-left">
                        <h6 class="mb-0">Security System</h6>
                        <small class="text-success">Triggered</small><small class="text-danger d-none">Loosed</small>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-outline-danger" type="button">Loose</button>
                        <button class="btn btn-outline-success d-none" type="button">Trigger</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-md-12">
        <div class="card">
            <div class="body">
                <div class="clearfix">
                    <div class="float-left">
                        <h6 class="mb-0">Main Gate</h6>
                        <small class="text-success d-none">Closed</small><small class="text-danger">Opened</small>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-outline-danger d-none" type="button">Open</button>
                        <button class="btn btn-outline-success" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card appliances-grp ng-star-inserted">
            <div class="body clearfix">
                <div class="icon"><img alt="" src="../assets/img/air-conditioner.png"></div>
                <div class="content">
                    <h6>Air Conditioner <span class="text-success">On</span></h6>
                    <p class="ng-star-inserted">Temprature <span class="text-warning">25° C</span></p>
                    <p class="ng-star-inserted">Status <span class="text-warning">Cooling On</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card appliances-grp ng-star-inserted">
            <div class="body clearfix">
                <div class="icon"><img alt="" src="../assets/img/fridge.png"></div>
                <div class="content">
                    <h6 _ngcontent-c23="">Fridge <span class="text-success">On</span></h6>
                    <p class="ng-star-inserted">Temprature <span class="text-primary">10° C</span></p>
                    <p class="ng-star-inserted">Status <span class="text-success">Stand By</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card appliances-grp ng-star-inserted">
            <div class="body clearfix">
                <div class="icon"><img alt="" src="../assets/img/washing-machine.png"></div>
                <div class="content">
                    <h6 _ngcontent-c23="">Washing Machine <span class="text-success">On</span></h6>
                    <p class="ng-star-inserted">Remaining Time <span class="text-primary">01:23:21</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Lights Indoor</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i
                                class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">All On</a></li>
                            <li><a href="javascript:void(0);">All Off</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled basic-list">
                    <li>
                        Kitchen
                        <span class="badge d-none">Off</span>
                        <span class="badge">On</span>
                    </li>
                    <li>
                        Dining Room
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li>
                        Living Room
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-danger">
                        Bed Room
                        <span>Not Connected</span>
                        <span class="badge d-none">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li>
                        Bath Room
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li>
                        Store Room
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Lights Outdoor</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i
                                class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">All On</a></li>
                            <li><a href="javascript:void(0);">All Off</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled basic-list">
                    <li class="text-warning">
                        Front Door
                        <span class="badge d-none">Off</span>
                        <span class="badge">On</span>
                    </li>
                    <li>
                        Back Door
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-warning">
                        Pool
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li>
                        Garage
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-danger">
                        Garden
                        <span class="">Fused</span>
                        <span class="badge d-none">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-warning">
                        Main Door
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Other Appliences</h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i
                                class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">All On</a></li>
                            <li><a href="javascript:void(0);">All Off</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="list-unstyled basic-list">
                    <li class="text-warning">
                        TV
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li>
                        Apple Tv
                        <span class="badge d-none">Off</span>
                        <span class="badge">On</span>
                    </li>
                    <li>
                        Sound Ststem
                        <span class="badge d-none">Off</span>
                        <span class="badge">On</span>
                    </li>
                    <li class="text-warning">
                        Air Conditioner
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-warning">
                        Fridge
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                    <li class="text-warning">
                        Washing Machine
                        <span class="badge">Off</span>
                        <span class="badge d-none">On</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
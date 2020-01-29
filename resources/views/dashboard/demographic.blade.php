@extends('layout.master')
@section('title', 'Demographic')
@section('parentPageTitle', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                </div>
                <div class="content">
                    <div class="text">Population</div>
                    <div class="number">4,254</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-pie">30, 35, 25, 8</div>
                </div>
                <div class="content">
                    <div class="text">Usage</div>
                    <div class="number">98%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                </div>
                <div class="content">
                    <div class="text">Page Views</div>
                    <div class="number">1,195</div>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                </div>
                <div class="content">
                    <div class="text">Growth</div>                            
                    <div class="number">$1,243</div>
                </div>
            </div>
        </div>
    </div>                
</div>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card visitors-map">
            <div class="header">
                <h2>Site Visitors</h2>
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
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div id="world-map-markers" style="height: 320px;"></div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <ul class="list-unstyled">
                            <li>
                                <div class="progress-container progress-info m-b-25">
                                    <span class="progress-badge">Visitors From USA</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                            <span class="progress-value">78%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container progress-primary m-b-25">
                                    <span class="progress-badge">Visitors From India</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 53%;">
                                            <span class="progress-value">53%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container progress-warning m-b-25">
                                    <span class="progress-badge">Visitors From Europe</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 31%;">
                                            <span class="progress-value">31%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container progress-success m-b-25">
                                    <span class="progress-badge">Visitors From Australia</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 27%;">
                                            <span class="progress-value">27%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="progress-container">
                                    <span class="progress-badge">Visitors From UAE</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                            <span class="progress-value">15%</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Gender Overview</h2>
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
            <div class="body gender-overview">
                <h5>
                    <span class="m-r-30"><i class="fa fa-male m-r-10"></i> 2,21,598</span>
                    <span><i class="fa fa-female m-r-10"></i>1,00,215</span>
                </h5>
                <div id="m_area_chart" style="height: 250px;"></div>
            </div>
        </div>
    </div>
</div>

 <div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card weather2">                        
            <div class="body city-selected">
                <div class="row">
                    <div class="col-12">
                        <div class="city"><span>City:</span> San Francisco</div>
                        <div class="night">Day - 12:07 PM</div>
                    </div>
                    <div class="info col-7">
                        <div class="temp"><h2>34°</h2></div>                                    
                    </div>
                    <div class="icon col-5">
                        <i class="wi wi-day-cloudy-windy"></i>
                    </div>
                </div>
            </div>
            <table class="table table-striped m-b-0">
                <tbody>
                    <tr>
                    <td>Land area</td>
                    <td class="font-medium">121.4 km²</td>
                </tr>
                <tr>
                    <td>Humidity</td>
                    <td class="font-medium">73%</td>
                </tr>
                <tr>
                    <td>Pressure</td>
                    <td class="font-medium">25.56 in</td>
                </tr>
                <tr>
                    <td>Population</td>
                    <td class="font-medium">8.65 lakhs</td>
                </tr>
                <tr>
                    <td>Ceiling</td>
                    <td class="font-medium">25280 ft</td>
                </tr>
                </tbody>
            </table>
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item text-center active">
                        <div class="col-12">
                            <ul class="row days-list list-unstyled">
                                <li class="day col-4">
                                    <p>Monday</p>
                                    <i class="wi wi-day-hail"></i>
                                </li>
                                <li class="day col-4">
                                    <p>Tuesday</p>
                                    <i class="wi wi-day-lightning"></i>
                                </li>
                                <li class="day col-4">
                                    <p>Wednesday</p>
                                    <i class="wi wi-day-storm-showers"></i>
                                </li>
                            </ul>
                        </div>                                
                    </div>
                    <div class="carousel-item text-center">
                        <div class="col-12">
                            <ul class="row days-list list-unstyled">
                                <li class="day col-4">
                                    <p>Thursday</p>
                                    <i class="wi wi-day-hail"></i>
                                </li>
                                <li class="day col-4">
                                    <p>Friday</p>
                                    <i class="wi wi-showers"></i>
                                </li>
                                <li class="day col-4">
                                    <p>Saturday</p>
                                    <i class="wi wi-day-sunny"></i>
                                </li>
                            </ul>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
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
            <div class="body text-center">
                <div id="donut_chart" class="dashboard-donut-chart m-b-35"></div>
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <h6>Crome</h6>
                        <p>35<sup>%</sup></p>
                    </div>
                    <div class="col-lg-2 col-4">
                        <h6>Safari</h6>
                        <p>25<sup>%</sup></p>
                    </div>                                
                    <div class="col-lg-2 col-4">
                        <h6>Mozila</h6>
                        <p>25<sup>%</sup></p>
                    </div>
                    <div class="col-lg-2 col-4">
                        <h6>Opera</h6>
                        <p>3<sup>%</sup></p>
                    </div>
                    <div class="col-lg-2 col-4">
                        <h6>IE</h6>
                        <p>7<sup>%</sup></p>
                    </div>
                    <div class="col-lg-2 col-4">
                        <h6>Others</h6>
                        <p>5<sup>%</sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
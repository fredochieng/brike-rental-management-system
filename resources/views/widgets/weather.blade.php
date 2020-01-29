@extends('layout.master')
@section('title', 'Widgets Weather')
@section('parentPageTitle', 'Widgets')


@section('content')

<div class="row">

    <div class="col-lg-4 col-md-12">
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
                    <div class="carousel-item text-center">
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
                    <div class="carousel-item text-center active">
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

    <div class="col-lg-4 col-md-6">
        <div class="card weather4">
            <div class="body">
                <div class="row">
                    <div class="col-6">
                        <i class="wi wi-day-sunny"></i>
                        <p>City</p>
                    </div>
                    <div class="col-6 text-right">
                        <h3 class="">27° <span>C</span> </h3>
                        <span>Fri 20/5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card weather5">
            <div class="widget">
                <div class="weatherIcon"><i class="wi wi wi-day-cloudy"></i></div>
                <div class="weatherInfo">
                    <div class="temperature"><span>25°</span></div>
                    <div class="description">    
                        <div class="weatherCondition">CLOUDY</div>    
                        <div class="place">New York, USA</div>
                    </div>
                </div>
                <div class="date">1st Jun</div>
            </div>
        </div>
        <div class="card weather6 l-amber">
            <div class="body">
                <div class="p-15">
                    <div class="temp">27°<span>C</span>
                        <i class="wi wi-day-cloudy-windy"></i>
                    </div>
                </div>
                <p>Saturday 12 May</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="card weather3">
            <div class="top">
                <div class="wrapper">
                    <h2 class="heading">Clear night</h2>
                    <h3 class="location">New York, USA</h3>
                    <p class="temp">
                        <span class="temp-value">23</span>
                        <span class="deg">0</span>
                        <a href="javascript:void(0);"><span class="temp-type">C</span></a>
                    </p>
                </div>
            </div>
            <div class="bottom">
                <ul class="forecast">
                    <li class="active">
                        <span class="date">Yesterday</span>
                        <span class="wi wi-day-hail condition">
                            <span class="temp">23<span class="deg">0</span><span class="temp-type">C</span></span>
                        </span>
                    </li>
                    <li>
                        <span class="date">Tomorrow</span>
                        <span class="wi wi-day-hail condition">
                            <span class="temp">21<span class="deg">0</span><span class="temp-type">C</span></span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card weather">
            <div class="header">
                <h2>Weather</h2>
            </div>
            <div class="body">
                <div class="city">
                    <span>sky is clear</span>
                    <h3>New York</h3>
                    <i class="wi wi-day-sunny-overcast"></i>
                </div>
                <ul class="row days list-unstyled m-b-0">
                    <li>
                        <h5>SUN</h5>
                        <i class="wi wi-rain"></i>
                        <span class="degrees">77</span>
                    </li>
                    <li>
                        <h5>MON</h5>
                        <i class="wi wi-cloudy"></i>
                        <span class="degrees">81</span>
                    </li>
                    <li>
                        <h5>TUE</h5>
                        <i class="wi wi-rain-wind"></i>
                        <span class="degrees">82</span>
                    </li>
                    <li>
                        <h5>WED</h5>
                        <i class="wi wi-lightning"></i>
                        <span class="degrees">82</span>
                    </li>
                    <li>
                        <h5>THU</h5>
                        <i class="wi wi-day-cloudy-gusts"></i>
                        <span class="degrees">81</span>
                    </li>
                    <li>
                        <h5>FRI</h5>
                        <i class="wi wi-day-showers"></i>
                        <span class="degrees">67</span>
                    </li>
                    <li>
                        <h5>SAT</h5>
                        <i class="wi wi-day-snow"></i>
                        <span class="degrees">81</span>
                    </li>
                </ul>						
            </div>
        </div>
    </div>
    
</div>

@stop

@extends('layout.master')
@section('title', 'Flot Chart')
@section('parentPageTitle', 'Charts')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Annotations Chart</h2>                           
            </div>
            <div class="body">
                <div id="Annotations_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Visitors Chart</h2>                            
            </div>
            <div class="body">
                <div id="Visitors_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Real-Time Chart</h2>
                <div class="float-right">
                    <div class="switch panel-switch-btn"> <span class="m-r-10 font-12">REAL TIME</span>
                        <label>OFF
                            <input type="checkbox" id="realtime" checked>
                            <span class="lever switch-col-cyan"></span>ON</label>
                    </div>
                </div>                        
            </div>
            <div class="body">
                <div id="real_time_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bar Chart</h2>                            
            </div>
            <div class="body">
                <div class="sales-bars-chart" style="height: 320px;"> </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Multiple Axis</h2>
            </div>
            <div class="body">
                <div id="multiple_axis_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Tracking</h2>                            
            </div>
            <div class="body">
                <div id="tracking_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>  

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Pie Chart</h2>                            
            </div>
            <div class="body">
                <div id="pie_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bar Chart</h2>                            
            </div>
            <div class="body">
                <div id="bar_chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>

@stop

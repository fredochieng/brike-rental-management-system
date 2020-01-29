@extends('layout.master')
@section('title', 'ChartJS')
@section('parentPageTitle', 'Charts')


@section('content')

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Line Chart</h2>
            </div>
            <div class="body">
                <div id="line-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bar Chart</h2>
            </div>
            <div class="body">
                <div id="bar-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Area Chart</h2>
            </div>
            <div class="body">
                <div id="area-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Multiple Chart</h2>
            </div>
            <div class="body">
                <div id="multiple-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Simple Pie Chart</h2>
            </div>
            <div class="body">
                <div id="pie-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Donut Chart</h2>
            </div>
            <div class="body">
                <div id="donut-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Radar Chart</h2>                            
            </div>
            <div class="body">
                <canvas id="radar_chart" height="150"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Polar Area Chart</h2>                            
            </div>
            <div class="body">
                <canvas id="chart-area" height="150"></canvas>
            </div>
        </div>
    </div>                       
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Stacked Bar Chart</h2>
            </div>
            <div class="body">
                <div id="stackedbar-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Horizontal Bar Chart</h2>
            </div>
            <div class="body">
                <div id="horizontalbar-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
</div>

@stop

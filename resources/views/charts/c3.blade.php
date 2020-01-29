@extends('layout.master')
@section('title', 'C3 Charts')
@section('parentPageTitle', 'Charts')


@section('content')

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Employment Growth</h2>
            </div>
            <div class="body">
                <div id="chart-employment" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Monthly Average Temperature</h2>
            </div>
            <div class="body">
                <div id="chart-temperature" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Area Chart</h2>
            </div>
            <div class="body">
                <div id="chart-area" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Lorem ipsum</h2>
            </div>
            <div class="body">
                <div id="chart-area-spline" style="height: 16rem"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Area Chart Sracked</h2>
            </div>
            <div class="body">
                <div id="chart-area-spline-sracked" style="height: 16rem"></div>
            </div>
        </div>                    
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Wind speed during two days</h2>
            </div>
            <div class="body">
                <div id="chart-spline" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Rotated Chart</h2>
            </div>
            <div class="body">
                <div id="chart-spline-rotated" style="height: 16rem"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Step Chart</h2>
            </div>
            <div class="body">
                <div id="chart-step" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Step Chart Fill</h2>
            </div>
            <div class="body">
                <div id="chart-area-step" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bar Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Bar Rotated Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar-rotated" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Stacked Bar Chart</h2>
            </div>
            <div class="body">
                <div id="chart-bar-stacked" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Pie Chart</h2>
            </div>
            <div class="body">
                <div id="chart-pie" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Donut Chart</h2>
            </div>
            <div class="body">
                <div id="chart-donut" style="height: 16rem"></div>
            </div>
        </div>                    
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>scatter Chart</h2>
            </div>
            <div class="body">
                <div id="chart-scatter" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Combination chart</h2>
            </div>
            <div class="body">
                <div id="chart-combination" style="height: 16rem"></div>
            </div>
        </div>                
    </div>
</div>

@stop

@extends('layout.master')
@section('title', 'E Chart')
@section('parentPageTitle', 'Charts')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Bar Area</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-bar_area" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Rainfall and Evaporation</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-rainfall" style="height: 400px;"></div>
                </div>
            </div>                
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Dynamic Data</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-dynamic_data" style="height: 400px;"></div>
                </div>
            </div>                
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Basic Candlestick</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-candlestick" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Basic Scatter Chart</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-basic_scatter" style="height: 400px;"></div>
                </div>
            </div>
        </div>
            <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Doughnut Chart</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-doughnut" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Large scale area chart</h2>
                </div>
                <div class="body">
                    <div class="chart" id="echart-large_scale_area" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
@stop
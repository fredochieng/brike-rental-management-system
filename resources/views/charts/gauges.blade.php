@extends('layout.master')
@section('title', 'Gauges')
@section('parentPageTitle', 'Charts')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Guage Chart</h2>
            </div>
            <div class="body text-center">
                <h2 id="default-textfield" class="preview-textfield"></h2>
                <canvas id="gauge-default"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Guage Donut</h2>
            </div>
            <div class="body text-center">
                <h2 id="donut-textfield" class="preview-textfield"></h2>
                <canvas id="gauge-donut"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Guage Zone</h2>
            </div>
            <div class="body text-center">
                <h2 id="zone-textfield" class="preview-textfield"></h2>
                <canvas id="gauge-zone" height="200"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Guage Step</h2>
            </div>
            <div class="body text-center">
                <h2 id="step-textfield" class="preview-textfield"></h2>
                <canvas id="gauge-step" height="200"></canvas>
            </div>
        </div>
    </div>

</div>

@stop

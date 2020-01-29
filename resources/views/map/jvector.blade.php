@extends('layout.master')
@section('title', 'jVector')
@section('parentPageTitle', 'Map')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>World Map</h2>
            </div>
            <div class="body">
                <div id="world-map-markers" class="jvector-map" style="height: 300px"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>India Map</h2>
            </div>
            <div class="body text-center">
                <div id="india" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>USA Map</h2>
            </div>
            <div class="body text-center">
                <div id="usa" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>UK Map</h2>
            </div>
            <div class="body text-center">
                <div id="uk" style="height: 400px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Australia Map</h2>
            </div>
            <div class="body text-center">
                <div id="australia" style="height: 400px"></div>
            </div>
        </div>
    </div>
</div>

@stop
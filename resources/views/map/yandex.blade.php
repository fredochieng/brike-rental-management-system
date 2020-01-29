@extends('layout.master')
@section('title', 'Yandex')
@section('parentPageTitle', 'Map')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Basic Example</h2>
            </div>
            <div class="body"> 
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=vDG1TEPi21Pp9u3XrCuQQWVXVZ7FoT35&amp;width=100%&amp;height=500&amp;lang=tr_TR&amp;sourceType=constructor&amp;scroll=true"></script> 
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Markers</h2>
            </div>
            <div class="body"> 
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=svdezAlqZP2WIeKGiLW4EUnoJvnxVP7i&amp;width=100%&amp;height=600&amp;lang=tr_TR&amp;sourceType=constructor&amp;scroll=true"></script> 
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Polyline</h2>
            </div>
            <div class="body"> 
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=dE09XwT6HstIXcs3PR25EWzuJXd4ei_c&amp;width=100%&amp;height=400&amp;lang=tr_TR&amp;sourceType=constructor&amp;scroll=true"></script> 
            </div>
        </div>
    </div>
</div>

@stop
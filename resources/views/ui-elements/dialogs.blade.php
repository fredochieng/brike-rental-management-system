@extends('layout.master')
@section('title', 'Dialogs')
@section('parentPageTitle', 'UI Elements')


@section('content')

<div class="row clearfix">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A basic message</p>
                <button class="btn btn-primary js-sweetalert" data-type="basic">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A title with a text under</p>
                <button class="btn btn-primary js-sweetalert" data-type="with-title">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A success message!</p>
                <button class="btn btn-primary js-sweetalert" data-type="success">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>An HTML message</p>
                <button class="btn btn-primary js-sweetalert" data-type="html-message">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A message with a custom icon</p>
                <button class="btn btn-primary js-sweetalert" data-type="with-custom-icon">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A message with auto close timer</p>
                <button class="btn btn-primary js-sweetalert" data-type="autoclose-timer">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                <button class="btn btn-primary js-sweetalert" data-type="confirm">CLICK ME</button>
            </div>
        </div>
            <div class="card">
            <div class="body">
                <p>A replacement for the <b>prompt</b> function</p>
                <button class="btn btn-primary js-sweetalert" data-type="prompt">CLICK ME</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">                   
        <div class="card">
            <div class="body">
                    <p>With a loader (for AJAX request for example)</p>
                <button class="btn btn-primary js-sweetalert" data-type="ajax-loader">CLICK ME</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                    <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                <button class="btn btn-primary js-sweetalert" data-type="cancel">CLICK ME</button>
            </div>
        </div>
    </div>
</div>

@stop

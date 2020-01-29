@extends('layout.master')
@section('title', 'Drag & Drop File Upload')
@section('parentPageTitle', 'Forms')


@section('content')

<div class="row clearfix">
    
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Default <small>Taken from: https://github.com/JeremyFagis/dropify</small></h2>
            </div>
            <div class="body">
                <input type="file" class="dropify">
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>With event and default file <small>try to remove the image</small></h2>
            </div>
            <div class="body">
                <input type="file" id="dropify-event" data-default-file="../assets/img/auth_bg.jpg">
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2>Disabled file upload</h2>
            </div>
            <div class="body">
                <input type="file" class="dropify" disabled="disabled">
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Limit file type <small>try to upload png or pdf only</small></h2>
            </div>
            <div class="body">
                <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Limit file size <small>try to upload file larger than 100 KB</small></h2>
            </div>
            <div class="body">
                <input type="file" class="dropify" data-max-file-size="100K">
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2>Custom messages for default <small>replace, remove and error</small></h2>
            </div>
            <div class="body">
                <input type="file" class="dropify-fr">
            </div>
        </div>
    </div>

</div>

@stop

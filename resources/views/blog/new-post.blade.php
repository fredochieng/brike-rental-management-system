@extends('layout.master')
@section('title', 'Blog Post')
@section('parentPageTitle', 'Blog')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Blog title" />
                </div>
                <select class="form-control show-tick">
                    <option>Select Category</option>
                    <option>Web Design</option>
                    <option>Photography</option>
                    <option>Technology</option>
                    <option>Lifestyle</option>
                    <option>Sports</option>
                </select>
                <div class="form-group m-t-20 m-b-20">
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                <div class="summernote">
                    <h3 class="m-b-0">hi,</h3>
                    <h4 class="m-t-0">we are Summernote</h4>
                    <p></p>
                </div>
                <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
    jQuery(document).ready(function() {

    $('.summernote').summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false, // set focus to editable area after initializing summernote
        popover: { image: [], link: [], air: [] }
    });

    $('.inline-editor').summernote({
        airMode: true
    });

    });

    window.edit = function() {
        $(".click2edit").summernote()
    },

    window.save = function() {
        $(".click2edit").summernote('destroy');
    }

@stop

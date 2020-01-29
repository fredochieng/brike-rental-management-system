@extends('layout.master')
@section('title', 'Dashboard')
@section('parentPageTitle', 'File Manager')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card">
            <a href="javascript:void(0);" class="folder">
                <h6><i class="fa fa-folder m-r-10"></i> Lucid Project</h6>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card">
            <a href="javascript:void(0);" class="folder">
                <h6><i class="fa fa-folder m-r-10"></i> Themeforest</h6>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card">
            <a href="javascript:void(0);" class="folder">
                <h6><i class="fa fa-folder m-r-10"></i> New Website</h6>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card">
            <a href="javascript:void(0);" class="folder">
                <h6><i class="fa fa-folder m-r-10"></i> My Folder</h6>
            </a>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-5 col-sm-12">
        <div class="card">
            <div class="body">
                <h4>1TB <i class="fa fa-server float-right"></i></h4>
                <p class="mb-0">Storage <small class="text-muted float-right">of 1Tb</small></p>                            
                <div id="progress-striped progress-xs" class="progress progress-striped mb-0">
                    <div class="progress-bar progress-bar-warning" data-transitiongoal="43" aria-valuenow="43" style="width: 43%;">43%</div>
                </div>
            </div>
        </div>
        <div class="card modal-open m-b-5">
            <div class="body">
                <h6>2GB</h6>
                <p class="mb-0">Documents <small class="text-muted float-right">of 1Tb</small></p>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-blue mb-0">
                <div class="progress-bar" data-transitiongoal="18"></div>
            </div>
        </div>
        <div class="card modal-open m-b-5">
            <div class="body">
                <h6>10GB</h6>
                <p class="mb-0">Media <small class="text-muted float-right">of 1Tb</small></p>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-purple mb-0">
                <div class="progress-bar" data-transitiongoal="34"></div>
            </div>
        </div>
        <div class="card modal-open">
            <div class="body">
                <h6>20GB</h6>
                <p class="mb-0">Images <small class="text-muted float-right">of 1Tb</small></p>
            </div>
            <div class="progress progress-xs progress-transparent custom-color-green mb-0">
                <div class="progress-bar" data-transitiongoal="67"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-7 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>File Reports</h2>                            
            </div>
            <div class="body">                        
                <div id="area_chart"></div>                        
            </div>                    
        </div>
    </div>                
</div>

@stop

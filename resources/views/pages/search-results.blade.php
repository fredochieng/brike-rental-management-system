@extends('layout.master')
@section('title', 'Search Results')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">

    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="input-group" id="adv-search">
                    <input type="text" class="form-control" placeholder="Search here..." />
                    <div class="input-group-btn">
                        <div class="btn-group" role="group">
                            <div class="dropdown dropdown-lg">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                        <label for="filter">Filter by</label>
                                        <select class="form-control">
                                            <option value="0" selected>All Lucid</option>
                                            <option value="1">Featured</option>
                                            <option value="2">Most popular</option>
                                            <option value="3">Top rated</option>
                                            <option value="4">Most commented</option>
                                        </select>
                                        </div>
                                        <div class="form-group">                                                        
                                            <input class="form-control" type="text" placeholder="Author" />
                                        </div>
                                        <div class="form-group">                                                        
                                            <input class="form-control" type="text" placeholder="Contains the words" />
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                                    </form>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary"><span class="icon-magnifier" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">                            
                <ul class="nav nav-tabs-new m-b-20">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Web">Web</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Images">Images</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Videos">Videos</a></li>                                
                </ul>                        
                <p class="m-b-0">Search Result For "Bootstrap 4 admin"</p>
                <strong> About 16,853 result ( 0.13 seconds)</strong>
            </div>
        </div>
        <div class="tab-content padding-0">
            <div class="tab-pane card active" id="Web">
                <div class="body">
                    <h6 class="mb-0"><a target="_blank" href="javascript:void(0);">sQuare - Bootstrap 4 Light & Dark Admin with Free Angular5 + UI Kit</a></h6>
                    <small>https://themeforest.net/user/wraptheme/portfolio</small>
                    <p class="m-t-10">sQuare Admin is Material Design premium admin dashboard theme. It’s builded on popular Twitter Bootstrap4 framework. sQuare is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every device and every browser.</p>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">AdminCC</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">Swift Admin</a>
                </div>
                <hr>
                <div class="body">
                    <h6 class="mb-0"><a target="_blank" href="javascript:void(0);">InfiniO - Bootstrap 4 Admin Dashboard Template </a></h6>
                    <small>https://themeforest.net/user/wraptheme/portfolio</small>
                    <p class="m-t-10">InfiniO is fully professional, responsive, modern, multi-purpose and featured Admin template which can be used to create various website, Admin templates, Admin dashboards, Backend Websites, CMS, CRM or one can aldo build Blog, Business website and time line as well as portfolio. InfiniO Admin makes the development process easy and fast for you and aims to help you implement your idea to real time.</p>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">Oakleaf Admin</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">sQuare</a>
                </div>
                <hr>
                <div class="body">
                    <h6 class="mb-0"><a target="_blank" href="javascript:void(0);">Compass - The ultimate Bootstrap 4 Admin Dashboard </a></h6>
                    <small>https://themeforest.net/user/wraptheme/portfolio</small>
                    <p class="m-t-10">Compass Admin is Material Design premium admin dashboard theme. It’s builded on popular Twitter Bootstrap4 framework. Compass is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every device and every browser.</p>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">AdminCC</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">Oakleaf Admin</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">sQuare</a>
                </div>
                <hr>
                <div class="body">
                    <h6 class="mb-0"><a target="_blank" href="javascript:void(0);">Alpino - Bootstrap 4 Admin Dashboard Template</a></h6>
                    <small>https://themeforest.net/user/wraptheme/portfolio</small>
                    <p class="m-t-10">15+ Dashboard, 100+ Integrated Plugins, 400+ Pages, Light and Dark Menu, The Multistep Form, Timeline view, Summermnote Editor, Image Cropping Tool, Easy to access Menu Styles</p>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">Oakleaf Admin</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">sQuare</a>
                    <a class="m-r-20" target="_blank" href="javascript:void(0);">AdminCC</a>
                </div>
                <hr>
                <ul class="body pagination pagination-primary">
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                </ul>
            </div>
            <div class="tab-pane card" id="Images">
                <div class="body text-center">
                    <div class="not_found">
                        <h4 class="m-b-0">Sorry No result found Images.</h4>
                    </div>
                </div>
            </div>
            <div class="tab-pane card" id="Videos">
                <div class="body text-center">
                    <div class="not_found">
                        <h4 class="m-b-0">Sorry No result found Videos.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

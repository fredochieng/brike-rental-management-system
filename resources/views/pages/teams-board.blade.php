@extends('layout.master')
@section('title', 'Teams Board')
@section('parentPageTitle', 'Pages')


@section('content')

<div class="row clearfix">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>DS - Design Team <small>Ranking 2th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Design Team <span class="badge badge-success float-right">New</span></h6>                                
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-blue">
                    <div class="progress-bar" data-transitiongoal="87"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 12</small>
                        <h6>BUDGET: 4,870 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#7460ee">2,5,8,3,5,7,1,6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>MT - Marketing Team <small>Ranking 4th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Marketing Team</h6>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar10.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar8.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-purple">
                    <div class="progress-bar" data-transitiongoal="34"></div>
                </div>                       
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 08</small>
                        <h6>BUDGET: 2,170 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#f96332">6,2,3,4,8,7,6,2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>DT - Developers Team <small>Ranking 5th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Developers Team</h6>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar7.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-yellow">
                    <div class="progress-bar" data-transitiongoal="54"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 23</small>
                        <h6>BUDGET: 8,000 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#2CA8FF">8,2,3,4,6,5,2,7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>GT - Graphic Team <small>Ranking 2th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Graphic Team</h6>                                
                <p>There are many variations of passages of Lorem Ipsum available, but the have suffered alteration in some form.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-green">
                    <div class="progress-bar" data-transitiongoal="67"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 2</small>
                        <h6>BUDGET: 3,370 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#ea4c89">2,5,8,3,5,7,1,6</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>ST - Sales Team <small>Ranking 7th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Sales Team</h6>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>                            
                    <li><img src="../assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-blue">
                    <div class="progress-bar" data-transitiongoal="87"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 12</small>
                        <h6>BUDGET: 5,100 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#4183c4">6,2,3,4,8,7,6,2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>BD - Business Development <small>Ranking 8th</small></h2>                        
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h6 class="m-b-15">Info about Business Development Team</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard.</p>
                <ul class="list-unstyled team-info m-t-20">
                    <li class="m-r-15"><small class="text-muted">Team</small></li>                            
                    <li><img src="../assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                    <li><img src="../assets/img/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>                            
                    <li><img src="../assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>                            
                    <li><img src="../assets/img/xs/avatar7.jpg" title="Avatar" alt="Avatar"></li>
                </ul>
                <div class="progress progress-xs progress-transparent custom-color-blue">
                    <div class="progress-bar" data-transitiongoal="87"></div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <small>PROJECTS: 23</small>
                        <h6>BUDGET: 11,000 USD</h6>
                    </div>
                    <div class="col-5">
                        <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#026466">6,3,1,5,8,7,3,4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')

    $('.progress .progress-bar').progressbar({
            display_text: 'none'
    });

@stop
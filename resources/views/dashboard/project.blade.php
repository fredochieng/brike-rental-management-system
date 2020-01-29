@extends('layout.master')
@section('title', 'Project')
@section('parentPageTitle', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body text-center">
                <div class="p-15">
                    <h3>109</h3>
                    <span>Today Works</span>
                </div>                            
            </div>
            <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                <div class="progress-bar" data-transitiongoal="87"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body text-center">
                <div class="p-15">
                    <h3>87</h3>
                    <span>Today Tasks</span>
                </div>                            
            </div>
            <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                <div class="progress-bar" data-transitiongoal="34"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body text-center">
                <div class="p-15">
                    <h3>318</h3>
                    <span>Statistics</span>
                </div>                           
            </div>
            <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                <div class="progress-bar" data-transitiongoal="54"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card overflowhidden">
            <div class="body text-center">
                <div class="p-15">
                    <h3>520</h3>
                    <span>Analytics</span>
                </div>                            
            </div>
            <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                <div class="progress-bar" data-transitiongoal="67"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Wrok Report</h2>
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
                <div id="m_area_chart" class="m-b-20" style="height: 250px;"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="body">
            <div class="list-group list-widget">
                <a href="mail-inbox.html" class="list-group-item">
                    <span class="badge badge-success">654</span>
                    <i class="fa fa-envelope text-muted"></i>Inbox</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge badge-info">364</span>
                    <i class="fa fa-eye text-muted"></i> Profile visits</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge badge-warning">12</span>
                    <i class="fa fa-phone text-muted"></i> Call</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge badge-danger">54</span>
                    <i class="fa fa-comments-o text-muted"></i> Messages</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge badge-warning">19</span>
                    <i class="fa fa-bookmark text-muted"></i> Bookmarks</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge">56</span>
                    <i class="fa fa-bell text-muted"></i> Notifications</a>
                <a href="javascript:void(0);" class="list-group-item">
                    <span class="badge badge-info">25</span>
                    <i class="fa fa-clock-o text-muted"></i> Watch</a>
            </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon">
                    <img src="{{url('/')}}/assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                </div>
                <div class="content m-t-5">
                    <div>Team Leader</div>
                    <h6>Maryam Amiri</h6>
                </div>
            </div>
            <hr>
            <div class="body">
                <div class="icon">
                    <img src="{{url('/')}}/assets/img/xs/avatar5.jpg" class="rounded-circle" alt="">
                </div>
                <div class="content m-t-5">
                    <div>Angular Champ</div>
                    <h6>Fidel Tonn</h6>
                </div>
            </div>
            <hr>
            <div class="body">
                <div class="icon">
                    <img src="{{url('/')}}/assets/img/xs/avatar3.jpg" class="rounded-circle" alt="">
                </div>
                <div class="content m-t-5">
                    <div>UI UX Desiger</div>
                    <h6>Tim Hank</h6>
                </div>
            </div>
            <hr>
            <div class="body">
                <div class="icon">
                    <img src="{{url('/')}}/assets/img/xs/avatar4.jpg" class="rounded-circle" alt="">
                </div>
                <div class="content m-t-5">
                    <div>Sales Lead</div>
                    <h6>Gary Camara</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-12">
        <div class="card">
            <div class="header">
                <h2>ToDo List <small>This Month task list</small></h2>
            </div>
            <div class="body todo_list">
                <div class="dd nestable-with-handle m-b-15">
                    <ol class="dd-list">
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span><i class=" icon-calendar m-r-5"></i> Report Panel Usag</span>
                                </label>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item dd3-item" data-id="1">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span>Report Panel Usag</span>
                                        </label>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox">
                                    <span><i class="icon-bell m-r-5"></i> New logo design for InfiniO</span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox">
                                    <span>Design PSD files for InfiniO <span class="badge badge-warning">1 Week</span></span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox">
                                    <span>Deploy existing code to example.com</span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span><i class=" icon-calendar m-r-5"></i> Report Panel Usag</span>
                                </label>
                            </div>
                        </li>
                        <li class="dd-item dd3-item" data-id="1">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">
                                <label class="fancy-checkbox mb-0">
                                    <input type="checkbox" name="checkbox">
                                    <span><i class="icon-bell m-r-5"></i> New logo design for InfiniO</span>
                                </label>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Team Details</h2>
            </div>
            <div class="body team_list">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Desiger</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="{{url('/')}}/assets/img/xs/avatar1.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>UI UX Desiger</div>
                                    <h6>Tim Hank</h6>
                                </div>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">Team Member</div>
                                    <div class="dd-content">
                                        <h6 class="m-b-15">Info about Design Team <span class="badge badge-success float-right">New</span></h6>                                
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <ul class="list-unstyled team-info m-t-20 m-b-20">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                        </ul>
                                        <div class="progress-container l-black m-b-20">
                                            <span class="progress-badge">Prograss</span>
                                            <div class="progress">
                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                    <span class="progress-value">68%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <small>PROJECTS: 12</small>
                                                <h6>BUDGET: 4,870 USD</h6>
                                            </div>
                                            <div class="col-5">
                                                <div class="sparkline text-right m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#333333">2,5,8,3,5,7,1,6</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Sales</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="{{url('/')}}/assets/img/xs/avatar2.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>Sales Lead</div>
                                    <h6>Gary Camara</h6>
                                </div>
                            </div>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">Developer</div>
                            <div class="dd-content top_counter">
                                <div class="icon">
                                    <img src="{{url('/')}}/assets/img/xs/avatar10.jpg" class="rounded-circle" alt="">
                                </div>
                                <div class="content m-t-5">
                                    <div>Project Lead</div>
                                    <h6>Fidel Tonn</h6>
                                </div>
                            </div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">FrontEnd Developer</div>
                                    <div class="dd-content">
                                        <ul class="list-unstyled team-info">
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar5.jpg" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar6.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dd-item" data-id="1">
                                    <div class="dd-handle">PHP Expert</div>
                                    <div class="dd-content">
                                        <ul class="list-unstyled team-info">
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar7.jpg" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar8.jpg" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar9.jpg" alt="Avatar"></li>
                                            <li><img src="{{url('/')}}/assets/img/xs/avatar10.jpg" alt="Avatar"></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Project List</h2>
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
                <div class="table-responsive">
                    <table class="table m-b-0 table-hover">
                        <thead class="thead-dark">
                            <tr>                                    
                                <th>Application</th>
                                <th>Team</th>
                                <th>Change</th>
                                <th>Sales</th>                                    
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Alpino 4.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                    data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                </td>
                                <td>11,200</td>
                                <td>$83</td>
                                <td><strong>$22,520</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Compass 2.0</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar3.jpg" alt="Avatar"></li>                                                    
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#f4516c"
                                    data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                </td>
                                <td>11,200</td>
                                <td>$66</td>
                                <td><strong>$13,205</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Nexa 1.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar4.jpg" alt="Avatar"></li>                                                
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar6.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#31db3d"
                                    data-fill-Color="transparent">7,3,2,1,5,4,6,8</div>
                                </td>
                                <td>12,080</td>
                                <td>$93</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Oreo 2.2</h6>
                                    <span>ThemeMakker To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="{{url('/')}}/assets/img/xs/avatar9.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#2d342e"
                                    data-fill-Color="transparent">3,1,2,5,4,6,2,3</div>
                                </td>
                                <td>18,200</td>
                                <td>$178</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis<small>8% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="sparkline-pie text-center">6,4,8</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Sales Income</h2>
                    </div>
                    <div class="body">
                        <h6>Overall <b class="text-success">7,000</b></h6>
                        <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771"
                            data-offset="90" data-width="100%" data-height="40px" data-line-Width="1" data-line-Color="#ffcd55"
                            data-fill-Color="#ffcd55">2,4,3,1,5,7,3,2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop